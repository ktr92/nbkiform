const sporform = (function () {
  const maskInit = () => {
    $("[data-mask='letters']").inputmask({ regex: "[a-zA-Zа-яА-Я- ]*" })
    $("[data-mask='date']").inputmask("99.99.9999", {
      placeholder: "__.__.____",
      clearIncomplete: true,
    })
    $("[data-mask='passport']").inputmask("9999 999999", {
      placeholder: "___ ______",
      clearIncomplete: true,
    })
  }

  const checkDepend = () => {
    const $dependon = $("[data-depend-on]")

    if ($dependon.length) {
      Array($dependon).forEach((element) => {
        const $input = element.find("input")
        const dependvalue = element.attr("data-depend-on")

        const $depend = $(`[data-depend=${dependvalue}]`)
        const $check = $depend.find('input[type="checkbox"]')

        if ($check.is(":checked")) {
          $input.removeAttr("data-required").removeClass("error")
          $dependon.slideToggle()
        } else {
          $input.attr("data-required", "required")
          $dependon.slideToggle()
        }
      })
    }
  }

  const selectDepend = () => {
    // все зависящие поля
    const $dependon = $("[data-dependselect-on]")

    if ($dependon.length) {
      Array($dependon).forEach((element) => {
        const dependvalue = element.attr("data-dependselect-on")
        // селект
        const $depend = $(`[data-dependselect=${dependvalue}]`)
        const $select = $depend.find("select")
        // значение
        const selval = $select.val()
        $(`[data-selectvalue]`).hide()
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

  const validate = () => {
    let valid = 1
    const $req = $('[data-required="required"]')

    Array($req).forEach((element) => {
      valid *= validateInput(element)
    })
  }

  const listenersInit = () => {
    $(document).on("change", "[data-depend]", function (e) {
      checkDepend()
      validate()
    })
    $(document).on("change", "[data-dependselect]", function (e) {
      selectDepend()
      // validate()
      console.log(e.target.value)
    })

    $(document).on("change", "input[type=text]", function (e) {
      validateInput($(e.target))
    })
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
					datavalue: that.attr('value'),
					on: {
						click: function (e) {
              thisCustomSelect.find(".calcform__select-item").removeClass("active")
              $(this).addClass("active")
              var selectedOptionText = that.text()
              selectedItem.text(selectedOptionText).removeClass("arrowanim")
              $('.calcform__input').removeClass("open")

              allItems.addClass("all-items-hide")
              $('.calcform__input').removeClass("open")
              $(this).closest('.calcform__select').find('select').val($(this).attr('datavalue'))

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

		var selectedItem = $(".calcform__select:not(.calcform__select_initialized) .calcform__select-selected"),
			allItems = $(".calcform__select-all")

		selectedItem.on("click", function (e) {
				var currentSelectedItem = $(this),
					currentAllItems = currentSelectedItem.next(".calcform__select-all");

				let currentWrapper = $(this).closest('.calcform__input')

				allItems.not(currentAllItems).addClass("all-items-hide")
				selectedItem.not(currentSelectedItem).removeClass("arrowanim")
				$('.calcform__input').not(currentWrapper).removeClass("open")

				currentAllItems.toggleClass("all-items-hide")
				currentSelectedItem.toggleClass("arrowanim")

				$(this).closest('.calcform__input').toggleClass("open")
			
				e.stopPropagation()
		

		})

		$(".calcform__select:not(.calcform__select_initialized)").addClass("calcform__select_initialized")


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
				.removeClass("arrowanim");

			$('.calcform__select-all').addClass("all-items-hide")
			$('.calcform__input').removeClass("open")


		})


	}


  return {
    validate,
    init: function () {
      maskInit();
      listenersInit();
      initSelect($(".calcform__select"));
      selectDepend();

    },
  }
})()

$(document).ready(function () {
  sporform.init()
})
