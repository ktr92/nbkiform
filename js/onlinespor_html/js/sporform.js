const sporform = (function () {
  let subjects = 1

  const maskInit = () => {
    $("[data-mask='phone']").inputmask("+79999999999", {
      placeholder: "+7          ",
      clearIncomplete: true,
    })

    Inputmask("( 999){+|1},00", {
      positionCaretOnClick: "radixFocus",
      radixPoint: ",",
      _radixDance: true,
      numericInput: true,
      placeholder: "0",
      definitions: {
        0: {
          validator: "[0-9\uFF11-\uFF19]",
        },
      },
    }).mask($('[data-mask="summ"]'))

    $("[data-mask='email']").inputmask({
      mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
      greedy: false,
      onBeforePaste: function (pastedValue, opts) {
        pastedValue = pastedValue.toLowerCase()
        return pastedValue.replace("mailto:", "")
      },
      definitions: {
        "*": {
          validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
          casing: "lower",
        },
      },
    })

    $("[data-mask='letters']").inputmask({ regex: "[a-zA-Zа-яА-Я- ]*" })

    $("[data-mask='letnum']").inputmask({ regex: "[a-zA-Zа-яА-Я0-9- ]*" })

    $("[data-mask='date']").inputmask("99.99.9999", {
      placeholder: "__.__.____",
      clearIncomplete: true,
    })

    $("[data-mask='passport']").inputmask("9999 999999", {
      placeholder: "___ ______",
      clearIncomplete: true,
    })

    $("[data-mask='inn']").inputmask("9999999999", {
      placeholder: "",
      clearIncomplete: true,
    })
  }

  const checkDepend = () => {
    const $dependon = $("[data-depend-on]")
    if ($dependon.length) {
      $dependon.each(function () {
        const $input = $(this).find("input")
        const dependvalue = $(this).attr("data-depend-on")
        const depentype = $(this).data("dependtype")

        const $depend = $(`[data-depend=${dependvalue}]`)
        const $check = $depend.find('input[type="checkbox"]')
            console.log(depentype)

        if ($check.is(":checked")) {
          $input.removeAttr("data-required").removeClass("error")
          $(this).addClass("checked")
          if (depentype && depentype === 'reverse') {
            $input.attr("data-required", 'required')
          }
        } else {
          $input.attr("data-required", "required")
          $(this).removeClass("checked")
          if (depentype && depentype === 'reverse') {
            $input.removeAttr("data-required")
          }
        }
      })
    }
  }

  const selectDepend = () => {
    // все зависящие поля
    const $dependon = $("[data-dependselect-on]")

    if ($dependon.length) {
      $dependon.each(function () {
        const dependvalue = $(this).attr("data-dependselect-on")
        // селект
        const $depend = $(`[data-dependselect=${dependvalue}]`)
        const $select = $depend.find("select")
        // значение
        const selval = $select.val()
        $(`[data-dependselect-on=${dependvalue}] input`).removeAttr("data-required")
        $(`[data-selectvalue=${selval}] input`).attr(
          "data-required",
          "required"
        )

        $(`[data-dependselect-on=${dependvalue}]`).hide()
        $(`[data-selectvalue=${selval}]`).show()


      })
    }
  }

  const validateInput = (element) => {
    let valid = 1
    if (element.val().length < Number(element.attr("data-length"))) {
      valid = 0
      element.addClass("error")
    } else {
      element.removeClass("error")
    }
    return valid
  }

  const validate = (selector = 'form') => {
    let valid = 1
    const $req = $(`${selector} [data-required="required"]`);

    $req.each(function() {
      valid *= validateInput($(this))
    })
    return valid
  }

  const listenersInit = () => {
    $(document).on("change", "[data-depend]", function (e) {
      checkDepend()
      // validate()
    })
    $(document).on("change", "[data-dependselect]", function (e) {
      selectDepend()
      // validate()
      console.log(e.target.value)
    })

    $(document).on("change", "input[type=text]", function (e) {
      validateInput($(e.target))
    })
    $(document).on("change", "input[name=formcheck]", function (e) {
      if ($(this).is(":checked")) {
        $('[type="submit"]').removeAttr("disabled")
      } else {
        $('[type="submit"]').attr("disabled", "disabled")
      }
    })
    $(document).on("click", ".sporform [type='submit']", function (e) {
      e.preventDefault()
      validateSection()
    })
    $(document).on("click", '[data-action="addsubject"]', function (e) {
      e.preventDefault()
      addSubject()
    })

    $(document).on("click", '[data-action="addsubject"]', function (e) {
      e.preventDefault()
      addSubject()
    })
    $(document).on("focus", '[data-formsection]', function (e) {
      e.preventDefault()
      e.stopPropagation()
      const isSection = $(this).attr('data-formsection');
      const sectId = isSection ? isSection : $(this).closest('data-formsection');
      validateSection(sectId);
    })
  }

  function validateSection(id = 3) {

    $(`[data-formsection]`).attr('data-sectionstatus', '')
    $(`[data-formstep]`).attr('data-sectionstatus', '')
    $(`[data-formsection=${id}]`).attr('data-sectionstatus', 'current')
    $(`[data-formstep=${id}]`).attr('data-sectionstatus', 'current')

    // перешли на новую, проверяем все предыдущие
    for (let i = 1; i < id; i++) {
      let valid = validate(`[data-formsection=${i}]`);
      if (valid) {
        $(`[data-formsection=${i}]`).attr('data-sectionstatus', 'success')
        $(`[data-formstep=${i}]`).attr('data-sectionstatus', 'success')
      } 
    }
    
  }

  function addSubject() {
    subjects++
    $("#newsubjects").append(`
        <div class="sporform__subsction" data-subsection='1'>
        <div class="sporform__fields">
          <div class="sporform__field">
            <div class="v5input sporform__input" data-dependselect="issubject_${subjects}">
              <div class="calcform__item calcform__item_select">
                <div class="calcform__input">
                  <div class="calcform__select ">
                    <select name="sporform_sec3_subject_${subjects}" id="sporform_sec3_subject_${subjects}">
                      <option value="iscredit_${subjects}">Кредит</option>
                      <option value="isrequest_${subjects}">Обращение или заявка</option>
                      <option value="ishistory_${subjects}">Кредитная история</option>
                    </select>
                  </div>
                </div>
              </div>

              <span class="placeholder">Предмет оспаривания *</span>
            </div>
          </div><!-- /.sporform__field -->

          <div class="sporform__field">
            <div class="v5input sporform__input">
              <input type="text" data-mask='letnum' value="" name="sporform_sec3_uid_${subjects}" data-length='1'
                data-required="required">
              <span class="placeholder">УИД или номер договора *</span>
              <div class="inputinfo">Скопируйте из кредитной истории</div>
            </div>
          </div><!-- /.sporform__field -->

          <div class="sporform__field">
            <div class="v5input sporform__input">
              <input type="text" data-mask='summ' value="" name="sporform_sec3_uid_${subjects}" data-length='1'
                data-required="required">
              <span class="placeholder">Сумма *</span>
            </div>
          </div><!-- /.sporform__field -->

          <div class="sporform__field">
            <div class="v5input sporform__input">
              <input type="text" data-mask='date' value="" name="sporform_sec3_date_${subjects}"
                data-required='required' data-length='10'>
              <span class="placeholder">Дата выдачи *</span>
            </div>
          </div><!-- /.sporform__field -->

          <div class="sporform__field">
            <div class="v5input sporform__input">
              <input type="text" data-mask='letters' value="" name="sporform_sec3_bank_${subjects}" data-length='1'
                data-required="required">
              <span class="placeholder">Источник *</span>
              <div class="inputinfo">Организация, которая выдала кредит</div>

            </div>
          </div><!-- /.sporform__field -->

          <div class="sporform__field">
            <div class="v5input sporform__input" data-dependselect="isreason_${subjects}">
              <div class="calcform__item calcform__item_select">
                <div class="calcform__input">
                  <div class="calcform__select ">
                    <select name="sporform_sec3_subject_${subjects}" id="sporform_sec3_reason_${subjects}">
                      <option value="isnotme_${subjects}">Я не оформлял кредит (займ)</option>
                      <option value="isclosed_${subjects}">Кредит (займ) полностью погашен</option>
                      <option value="isdatawrong_${subjects}">Данные о просрочках указаны неверно</option>
                      <option value="isbankrot_${subjects}">Я официально признан банкротом</option>
                    </select>
                  </div>
                </div>
              </div>

              <span class="placeholder">Причина оспаривания *</span>
            </div>
          </div><!-- /.sporform__field -->


          <div class="sporform__field">
            <div class="v5input sporform__input ">
              <div class="check-block check-block_big check-block_bigger">
                <input name="isconfirm_${subjects}" checked id="isconfirm_${subjects}" value="isconfirm" type="checkbox"
                  class="inputcheckbox n2">
                <label for="isconfirm_${subjects}">
                  <span>Оспорить обращение за кредитом <span>Прошу удалить из кредитной истории сведения
                      об обращении и об участии в обязательстве УИД 1234567890</span></span>
                </label>
              </div>
            </div>
          </div><!-- /.sporform__field -->


          <div class="sporform__field" data-dependselect-on="isreason_${subjects}" data-selectvalue='isbankrot_${subjects}'>
            <div class="v5input sporform__input">
              <input type="text" data-mask='letnum' value="" name="sporform_sec3_numbankrot_${subjects}"
                data-required='required' data-length='1'>
              <span class="placeholder">Номер дела о банкротстве *</span>
              <div class="inputinfo">Банкроты не имеют активных обязательств</div>

            </div>
          </div><!-- /.sporform__field -->
        </div>
      </div>
    `);

    reinit($(".calcform__select:not(.calcform__select_initialized)"))
  
  }

  function initSelect(selector) {
    var customSelect = selector

    customSelect.each(function () {
      var thisCustomSelect = $(this),
        options = thisCustomSelect.find("option"),
        firstOptionText = options.first().text()

      var selectedItem = $("<div></div>", {
        class: "calcform__select-selected",
      })
        .appendTo(thisCustomSelect)
        .text(firstOptionText)

      var allItems = $("<div></div>", {
        class: "calcform__select-all all-items-hide",
      }).appendTo(thisCustomSelect)

      options.each(function () {
        var that = $(this),
          optionText = that.text()

        var item = $("<div></div>", {
          class: "calcform__select-item",
          datavalue: that.attr("value"),
          on: {
            click: function (e) {
              thisCustomSelect
                .find(".calcform__select-item")
                .removeClass("active")
              $(this).addClass("active")
              var selectedOptionText = that.text()
              selectedItem.text(selectedOptionText).removeClass("arrowanim")
              $(".calcform__input").removeClass("open")

              allItems.addClass("all-items-hide")
              $(".calcform__input").removeClass("open")
              $(this)
                .closest(".calcform__select")
                .find("select")
                .val($(this).attr("datavalue"))

              selectDepend()
            },
          },
        })
          .appendTo(allItems)
          .text(optionText)
      })
      $(".calcform__select").each((index, item) => {
        /*   $(item).addClass("calcform__select_initialized") */
        $(item).find(".calcform__select-item").removeClass("active")
        $(item).find(".calcform__select-item:first").addClass("active")
      })
    })

    var selectedItem = $(
        ".calcform__select:not(.calcform__select_initialized) .calcform__select-selected"
      ),
      allItems = $(".calcform__select-all")

    selectedItem.on("click", function (e) {
      var currentSelectedItem = $(this),
        currentAllItems = currentSelectedItem.next(".calcform__select-all")

      let currentWrapper = $(this).closest(".calcform__input")

      allItems.not(currentAllItems).addClass("all-items-hide")
      selectedItem.not(currentSelectedItem).removeClass("arrowanim")
      $(".calcform__input").not(currentWrapper).removeClass("open")

      currentAllItems.toggleClass("all-items-hide")
      currentSelectedItem.toggleClass("arrowanim")

      $(this).closest(".calcform__input").toggleClass("open")

      e.stopPropagation()
    })

    $(".calcform__select:not(.calcform__select_initialized)").addClass(
      "calcform__select_initialized"
    )

    $(document).on("click", function () {
      var opened = $(".calcform__select:not(.calcform__select_initialized)"),
        index = opened.parent().index()

      customSelect
        .eq(index)
        .find(".calcform__select-all")
        .addClass("all-items-hide")
      customSelect
        .eq(index)
        .find(".calcform__select-selected")
        .removeClass("arrowanim")

      $(".calcform__select-all").addClass("all-items-hide")
      $(".calcform__input").removeClass("open")
    })
  }

  function reinit(selector) {
    maskInit()
    initSelect(selector)
    listenersInit();
    selectDepend();
  }

  return {
    validate,
    init: function () {
      reinit($(".calcform__select"))
    
    },
  }
})();

$(document).ready(function () {
  sporform.init()
});


$(document).ready(function () {
  if ($(window).width() > 991) {
    ;(function () {
      
      var a = document.querySelector("#formaside"),
        b = null 
      window.addEventListener("scroll", Ascroll, false)
      document.body.addEventListener("scroll", Ascroll, false) 
      function Ascroll() {
        if (b == null) {
        
          var Sa = getComputedStyle(a, ""),
            s = ""
          for (var i = 0; i < Sa.length; i++) {
           
            if (
              Sa[i].indexOf("overflow") == 0 ||
              Sa[i].indexOf("padding") == 0 ||
              Sa[i].indexOf("border") == 0 ||
              Sa[i].indexOf("outline") == 0 ||
              Sa[i].indexOf("box-shadow") == 0 ||
              Sa[i].indexOf("background") == 0
            ) {
              s += Sa[i] + ": " + Sa.getPropertyValue(Sa[i]) + "; "
            }
          }
          b = document.createElement("div")
          b.style.cssText =
            s + " box-sizing: border-box; width: " + a.offsetWidth + "px;"
          a.insertBefore(b, a.firstChild) 
          var l = a.childNodes.length
          for (var i = 1; i < l; i++) {
          
            b.appendChild(a.childNodes[1])
          }
          a.style.height = b.getBoundingClientRect().height + "px" 
          a.style.padding = "0"
          a.style.border = "0"
        }
        if (a.getBoundingClientRect().top <= 30) {
        
          b.className = "sticky"
        } else {
          b.className = ""
        }
        window.addEventListener(
          "resize",
          function () {
            a.children[0].style.width = getComputedStyle(a, "").width
          },
          false
        ) 
      }
    })();
  }
})
