const sporform = (function () {
  let subcount = 1

  const maskInit = () => {
    $("[data-mask='phone']").inputmask("+7 999 999 9999", {
      placeholder: "+7             ",
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
    $("[data-mask='letnum_en']").inputmask({ regex: "[a-zA-Z0-9- ]*" })

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

        if ($check.is(":checked")) {
          $input.removeAttr("data-required").removeClass("error")
          $(this).addClass("checked")
          if (depentype && depentype === "reverse") {
            $input.attr("data-required", "required")
          }
        } else {
          $input.attr("data-required", "required")
          $(this).removeClass("checked")
          if (depentype && depentype === "reverse") {
            $input.removeAttr("data-required")
          }
        }
      })
    }
  }

  const subjectTitles = {
    total: [
      'Первый',
      'Второй',
      'Третий',
      'Четвертый',
      'Пятый'
      
    ],
    current: [
      
    ]
  }

  const subject = {
    subject__number_1: {
      iscredit__number_1: [
        {
          type: "text",
          mask: "letnum_en",
          name: "sporform_sec3_uid_credit",
          rules: "data-length='1'",
          attributes: 'data-required="required"',
          placeholder: "УИД или номер договора *",
          order: "0",
          info: "Скопируйте из кредитной истории",
        },
        {
          type: "text",
          mask: "summ",
          name: "sporform_sec3_summ",
          attributes: "",
          placeholder: "Сумма",
          order: "1",
        },
        {
          type: "text",
          mask: "date",
          name: "sporform_sec3_date",
          attributes: "",
          placeholder: "Дата выдачи",
          rules: "data-length='10'",
          order: "2",
        },
        {
          type: "text",
          mask: "letters",
          name: "sporform_sec3_bank",
          attributes: "",
          placeholder: "Источник *",
          attributes: 'data-required="required"',

          rules: "data-length='1'",
          order: "3",
          info: "Организация, которая выдала кредит",
        },
        {
          type: "text",
          mask: "inn",
          name: "sporform_sec3_inn",
          attributes: "",
          placeholder: "ИНН источника *",
          attributes: 'data-required="required"',

          rules: "data-length='10'",
          order: "4",
          info: "ИНН организации, которая выдала кредит",
        },
      ],
      isrequest__number_1: [
        {
          type: "text",
          mask: "letnum_en",
          name: "sporform_sec3_uid_credit",
          rules: "data-length='1'",
          attributes: 'data-required="required"',
          placeholder: "УИД или номер договора *",
          order: "0",
          info: "Скопируйте из кредитной истории",
        },
        {
          type: "text",
          mask: "date",
          name: "sporform_sec3_date2",
          attributes: 'data-required="required"',
          placeholder: "Дата обращения *",
          rules: "data-length='10'",
          order: "1",
        },
        {
          type: "text",
          mask: "letters",
          name: "sporform_sec3_bank",
          attributes: "",
          placeholder: "Источник *",
          attributes: 'data-required="required"',

          rules: "data-length='1'",
          order: "3",
          info: "Организация, которая выдала кредит",
        },
        {
          type: "text",
          mask: "inn",
          name: "sporform_sec3_inn",
          attributes: "",
          placeholder: "ИНН источника *",
          attributes: 'data-required="required"',

          rules: "data-length='10'",
          order: "4",
          info: "ИНН организации, которая выдала кредит",
        },
      ],
      ishistory__number_1: [
        {
          type: "text",
          mask: "date",
          name: "sporform_sec3_date2",
          attributes: 'data-required="required"',
          placeholder: "Дата запроса *",
          rules: "data-length='10'",
          order: "1",
        },
        {
          type: "text",
          mask: "letters",
          name: "sporform_sec3_user",
          attributes: 'data-required="required"',
          placeholder: "Пользователь *",
          rules: "data-length='10'",
          order: "2",
        },
      ],
    },
  }

  const createInput = (params) => {
    const isinfo =
      params.info && params.info.length
        ? `<div class="inputinfo">${params.info}</div>`
        : ""

    const newinput = `
      <div class="sporform__field"  style="order: ${params.order}">
        <div class="v5input sporform__input">
          <input type="${params.type}" data-mask='${params.mask}' value="" name="${params.name}" ${params.rules}' ${params.attributes}>
          <span class="placeholder">${params.placeholder}</span>
          ${isinfo}
        </div>
      </div>
    `

    return newinput
  }

  const subjSelect = {
    subject__number_1: {
      subject: "isreason__number_1",
      id: "sporform_sec3_reason",
      name: "sporform_sec3_reason",
      placeholder: "Причина оспаривания *",
      order: 10,
      options: {
        iscredit__number_1: [
          {
            title: "Я не оформлял кредит (займ)",
            value: "isnotme__number_1",
          },
          {
            title: "Кредит (займ) полностью погашен",
            value: "isclosed__number_1",
          },
          {
            title: "Данные о просрочках указаны неверно",
            value: "isdatawrong__number_1",
          },
          {
            title: "Я официально признан банкротом",
            value: "isbankrot__number_1",
          },
        ],
        isrequest__number_1: [
          {
            title: "Заявку на оформление кредита я не подавал",
            value: "isnotmyrequest__number_1",
          },
        ],
        ishistory__number_1: [
          {
            title: "Согласие на получение кредитной истории я не давал",
            value: "isnotmyhistory__number_1",
          },
        ],
      },
    },
  }

  const createSelect = (params, id) => {
    let options = ""
    params.options[id].forEach((item) => {
      options += ` <option value="${item.value}">${item.title}</option>`
    })
    const newselect = `
     <div class="sporform__field" style="order: ${params.order}">
      <div class="v5input sporform__input" data-dependselect="${params.subject}"  >
        <div class="calcform__item calcform__item_select">
          <div class="calcform__input">
            <div class="calcform__select ">
              <select name="${params.name}" id="${params.id}">
               ${options}
              </select>
            </div>
          </div>
        </div>
        <span class="placeholder">${params.placeholder}</span>
      </div>
    </div>`
    return newselect
  }

  const changeSet = (id, block) => {
    const $depend = $(`[data-dependselect=${id}]`)
    const $select = $depend.find("select")
    const selval = $select.val()

    $(block).html("")
    if (selval && subject[`subject__number_${subcount}`][selval]) {
      subject[`subject__number_${subcount}`][selval].forEach((item) => {
        const newinput = createInput(item)

        $(block).append(newinput)
      })
    }


    const newselect = createSelect(
      subjSelect[`subject__number_${subcount}`],
      selval
    )
    $(block).append(newselect)
  }

  function selectDepend() {
    const $dependon = $("[data-dependselect-on]")

    if ($dependon.length) {
      $dependon.each(function () {
        const dependvalue = $(this).attr("data-dependselect-on")
        // селект
        const $depend = $(`[data-dependselect=${dependvalue}]`)
        const $select = $depend.find("select")
        // значение
        const selval = $select.val()

        const $input = $(`[data-selectvalue=${selval}] input`)

        const isreq = $input.data("notrequired")

        if (!isreq || !isreq.length) {
          $(`[data-dependselect-on=${dependvalue}] input`).removeAttr(
            "data-required"
          )
          $input.attr("data-required", "required")
        }

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

  const validate = (selector = "form") => {
    let valid = 1
    const $req = $(`${selector} [data-required="required"]`)

    $req.each(function () {
      valid *= validateInput($(this))
    })
    return valid
  }

  function removeSubject(id) {
    const $section = $(`[data-sectionid=${id}]`)

      if ($section.length && Object.keys(subject).length > 1) {
        $section.remove()
        delete subject[id]
        delete subjSelect[id]
        
      }
      const objlen = Object.keys(subject).length
      if (objlen < 2) {
        $('[data-toremove]').removeClass('active') 
       }

       // переименовать предметы оспаривания
       const titles = $('[data-sectiontitle]')
       titles.each(function(index) {
        
        if (index > 0) {
          $(this).html(`${subjectTitles.total[index]} предмет оспаривания`)
        } else {
          $(this).html(`Предмет оспаривания`)
        }
        
       })
  }

  function signleListeners() {
    $(document).on("click", '[data-changepage]', function (e) {
      e.preventDefault()
      const pageId = $(this).attr('data-changepage')
      $(`[data-formpage]`).removeClass('active')
      $(`[data-formpage=${pageId}]`).addClass('active')
    })
    $(document).on("click", '[data-action="addsubject"]', function (e) {
      e.preventDefault()
      addSubject()
    })
    $(document).on("click", "[data-formpage='1'] [type='submit']", function (e) {
      e.preventDefault()
      let valid = validateSection(4)
      if (valid) {
        $('[data-formpage="1"]').removeClass('active')
        $('[data-formpage="2"]').addClass('active')
      }
    })
    $(document).on("change", "input", function (e) {
      e.preventDefault()
      e.stopPropagation()
      const isSection = $(this).attr("data-formsection")
      const sectId = isSection ? isSection : $(this).closest("data-formsection")
      validateSection()
    });
    toRemoveInit();
   
  }

  function toRemoveInit() {
    $(document).on("click", "[data-remove]", function (e) {
      e.preventDefault()
   /*    const id = $(this).data("remove") */
      const id = $(this).attr("data-remove")
      removeSubject(id)
      $('.modal').modal('hide')
    })
  }

  function listenersInit() {
    $(document).on("change", "[data-depend]", function (e) {
      checkDepend()
      // validate()
    })
    $(document).on("change", "select", function (e) {
      selectDepend()
      // validate()
    })

    $(document).on("change", "input[type=text]", function (e) {
      validateInput($(e.target))
    })
    $(document).on("change", "input[name=formcheck]", function (e) {
      if ($(this).is(":checked")) {
        $('[data-formpage="1"] [type="submit"]').removeAttr("disabled")
      } else {
        $('[data-formpage="1"] [type="submit"]').attr("disabled", "disabled")
      }
    })
    $(document).on("change", "input[name=formcheck_send]", function (e) {
      if ($(this).is(":checked")) {
        $('[data-formpage="2"] [type="submit"]').removeAttr("disabled")
      } else {
        $('[data-formpage="2"] [type="submit"]').attr("disabled", "disabled")
      }
    })

  
    $(document).on("click", "[data-toremove]", function (e) {
      const id = $(this).data("toremove")      
      $('[data-remove]').attr('data-remove', id)


    })

   
  }

  function validateSection(id = 3) {
    $(`[data-formsection]`).attr("data-sectionstatus", "")
    $(`[data-formstep]`).attr("data-sectionstatus", "")
    $(`[data-formsection=${id}]`).attr("data-sectionstatus", "current")
    $(`[data-formstep=${id}]`).attr("data-sectionstatus", "current")

    // перешли на новую, проверяем все предыдущие
    let isValid = true
    for (let i = 1; i < id; i++) {
      let valid = validate(`[data-formsection=${i}]`)
      if (valid) {
        $(`[data-formsection=${i}]`).attr("data-sectionstatus", "success")
        $(`[data-formstep=${i}]`).attr("data-sectionstatus", "success")
      } else {
        isValid = false
      }
    }

    return isValid
    
  }

  function addFields(subj, count) {
    Object.keys(subj).forEach((key) => {
      subj[key].forEach((item) => {
        item.name = item.name.slice(0, -1) + count
      })
      let new_key = key.slice(0, -1) + count
      if (key !== new_key) {
        Object.defineProperty(
          subj,
          new_key,
          Object.getOwnPropertyDescriptor(subj, key)
        )
        delete subj[key]
      }
    })

    return subj
  }
  function addSelectFields(subj, count) {
    Object.keys(subj.options).forEach((key) => {
      let new_key = key.slice(0, -1) + count
      if (key !== new_key) {
        Object.defineProperty(
          subj.options,
          new_key,
          Object.getOwnPropertyDescriptor(subj.options, key)
        )
        delete subj.options[key]
      }

      subj.options[new_key].forEach((item) => {
        item.value = item.value.slice(0, -1) + count
      })
    })

    return subj
  }

  function addSubject() {
    const subjectsCount = Object.keys(subject).length
    if (subjectsCount > 4) {
      $('#myModal_subjectlimit').modal('show')
      return
    }
    subcount++
    $("#newsubjects").append(`

        <div class="sporform__subsction" data-subsection='${subcount}' data-sectionid='subject__number_${subcount}'>
        <div class="sporform__header"> 
                <div class="sporform__title"  data-sectiontitle='${subcount}'>${subjectTitles.total[subjectsCount]} предмет оспаривания</div>
                  <div class="sporform__field sporform__field_right sporform__field_remove">
                          <div class="v5input sporform__input">
                              <a href="#myModal_confirmation" data-toggle="modal" data-toremove='subject__number_${subcount}'><span> Удалить это оспаривание</span></a>
                          </div>
                        </div>
        </div>
        <div class="sporform__fields">
          <div class="sporform__field">
            <div class="v5input sporform__input" data-dependselect="issubject__number_${subcount}" data-hasdepend='1'>
              <div class="calcform__item calcform__item_select">
                <div class="calcform__input">
                  <div class="calcform__select ">
                    <select name="sporform_sec3_subject__number_${subcount}" id="sporform_sec3_subject_${subcount}">
                      <option value="iscredit__number_${subcount}">Кредит</option>
                      <option value="isrequest__number_${subcount}">Обращение или заявка</option>
                      <option value="ishistory__number_${subcount}">Кредитная история</option>
                    </select>
                  </div>
                </div>
              </div>

              <span class="placeholder">Предмет оспаривания *</span>
            </div>
          </div><!-- /.sporform__field -->

           <div class="sporform__jsfields" data-block='jsfields__number_${subcount}'></div>


          <div class="sporform__field" data-dependselect-on="isreason__number_${subcount}" data-selectvalue='isnotme__number_${subcount}'>
            <div class="v5input sporform__input ">
              <div class="check-block check-block_big check-block_bigger">
                <input name="isconfirm" checked id="isconfirm__number_${subcount}" value="isconfirm" type="checkbox"
                  class="inputcheckbox n2">
                <label for="isconfirm__number_${subcount}">
                  <span>Оспорить обращение за кредитом <span>Прошу удалить из кредитной истории сведения
                      об обращении и об участии в обязательстве УИД 1234567890</span></span>
                </label>
              </div>
            </div>
          </div>


          <div class="sporform__field" data-dependselect-on="isreason__number_${subcount}" data-selectvalue='isbankrot__number_${subcount}'>
            <div class="v5input sporform__input">
              <input type="text" data-mask='letnum' value="" name="sporform_sec3_numbankrot__number_${subcount}"
                data-required='required' data-length='1'>
              <span class="placeholder">Номер дела о банкротстве *</span>
              <div class="inputinfo">Банкроты не имеют активных обязательств</div>

            </div>
          </div>

        
       </div>
      </div>
    `)

    const prevId = Object.keys(subject)[0]

    const newsubject = JSON.parse(JSON.stringify(subject[prevId]))
    const newsubjSelect = JSON.parse(JSON.stringify(subjSelect[prevId]))

    addFields(newsubject, subcount)
    subject[`subject__number_${subcount}`] = newsubject

    newsubjSelect.subject = newsubjSelect.subject.slice(0, -1) + subcount
    newsubjSelect.id = newsubjSelect.subject.slice(0, -1) + subcount
    newsubjSelect.name = newsubjSelect.subject.slice(0, -1) + subcount
    addSelectFields(newsubjSelect, subcount)
    subjSelect[`subject__number_${subcount}`] = newsubjSelect

    changeSet(
      `issubject__number_${subcount}`,
      `[data-block='jsfields__number_${subcount}']`
    )

    reinit($(".calcform__select:not(.calcform__select_initialized)"))

    if (Object.keys(subject).length > 1) {
      $("[data-toremove]").removeClass("active").addClass("active")
    }
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

              const $input = $(this).closest(".sporform__input")
              const $section = $(this).closest("[data-sectionid]")

              if ($input.data("hasdepend") == "1") {
                changeSet(
                  $input.data("dependselect"),
                  $section.find("[data-block]")
                )
              }
              reinit($(".calcform__select:not(.calcform__select_initialized)"))
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
    listenersInit()
    selectDepend()
  }

  return {
    validate,
    init: function () {
      changeSet("issubject__number_1", "[data-block='jsfields']")
      reinit($(".calcform__select:not(.calcform__select_initialized)"))
      signleListeners()
    },
  }
})()

$(document).ready(function () {
  sporform.init()
})
