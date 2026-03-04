var rangeTimeout;


	$(document).ready(function () {
		$("[data-summ-format]").inputmask("integer", {
			mask: "( 999){+|1}",
			numericInput: true,
			showMaskOnHover: false,
			showMaskOnFocus: false,
			rightAlign: false,
		})


		$("[data-rate-format]").inputmask({
			mask: "9[9][.9][9] %",
		})
		$("[data-number-format]").inputmask({
			mask: "( 999){+|1}",
			numericInput: true,
			showMaskOnHover: false,
			showMaskOnFocus: false,
			rightAlign: false,
		})
		$("[data-percent-format]").inputmask({
			mask: "9{1,2} %",
			numericInput: true,
			showMaskOnHover: false,
			showMaskOnFocus: false,
			rightAlign: false,
		})

		/*  if ($(".range-slider").length) {
			 var rangeSliders = $(".range-slider")
			 rangeSliderInit(rangeSliders)
		 } */
	})


	const dpoptions = {
		autoHide: true,

		format: "dd.mm.yyyy",
		language: "ru-Ru",

		weekStart: 1,
		days: [
			"Воскресенье",
			"Понедельник",
			"Вторник",
			"Среда",
			"Четверг",
			"Пятница",
			"Суббота",
		],
		daysShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
		daysMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
		months: [
			"Январь",
			"Февраль",
			"Март",
			"Апрель",
			"Май",
			"Июнь",
			"Июль",
			"Август",
			"Сентябрь",
			"Октябрь",
			"Ноябрь",
			"Декабрь",
		],
		monthsShort: [
			"Янв",
			"Фер",
			"Мар",
			"Апр",
			"Май",
			"Июн",
			"Июл",
			"Авг",
			"Сен",
			"Окт",
			"Ноя",
			"Дек",
		],

		mutedClass: "muted",
		pickedClass: "picked",
		disabledClass: "disabled",
		highlightedClass: "highlighted",
		template:
			'<div class="datepicker-container">' +
			'<div class="datepicker-panel" data-view="years picker">' +
			"<ul>" +
			'<li data-view="years prev">&lsaquo;</li>' +
			'<li data-view="years current"></li>' +
			'<li data-view="years next">&rsaquo;</li>' +
			"</ul>" +
			'<ul data-view="years"></ul>' +
			"</div>" +
			'<div class="datepicker-panel" data-view="months picker">' +
			"<ul>" +
			'<li data-view="year prev">&lsaquo;</li>' +
			'<li data-view="year current"></li>' +
			'<li data-view="year next">&rsaquo;</li>' +
			"</ul>" +
			'<ul data-view="months"></ul>' +
			"</div>" +
			'<div class="datepicker-panel" data-view="days picker">' +
			"<ul>" +
			'<li data-view="month prev">&lsaquo;</li>' +
			'<li data-view="month current"></li>' +
			'<li data-view="month next">&rsaquo;</li>' +
			"</ul>" +
			'<ul data-view="week"></ul>' +
			'<ul data-view="days"></ul>' +
			"</div>" +
			"</div>",
		template:
			'<div class="datepicker-container">' +
			'<div class="datepicker-panel" data-view="years picker">' +
			'<ul class="datepicker-nav">' +
			'<li data-view="month prev">&lsaquo;</li>' +
			'<li data-view="month current"></li>' +
			'<li data-view="month next">&rsaquo;</li>' +
			"</ul>" +
			'<ul data-view="years"></ul>' +
			"</div>" +
			'<div class="datepicker-panel" data-view="months picker">' +
			'<ul class="datepicker-nav">' +
			'<li data-view="month prev">&lsaquo;</li>' +
			'<li data-view="month current"></li>' +
			'<li data-view="month next">&rsaquo;</li>' +
			"</ul>" +
			'<ul data-view="months"></ul>' +
			"</div>" +
			'<div class="datepicker-panel" data-view="days picker">' +
			'<ul class="datepicker-nav">' +
			'<li data-view="month prev">&lsaquo;</li>' +
			'<li data-view="month current"></li>' +
			'<li data-view="month next">&rsaquo;</li>' +
			"</ul>" +
			'<ul data-view="week"></ul>' +
			'<ul data-view="days"></ul>' +
			"</div>" +
			"</div>",
		/* startDate: Date.now(), */
	}

	$('.calcform__inputdate').on('click', function (e) {
		e.stopPropagation()
		$(this).toggleClass('active')

		$(".calcform__select-all:not(.all-items-hide)").addClass('all-items-hide')
		$(".calcform__input.open").removeClass('open')
		$(".calcform__input").find('.arrowanim').removeClass('arrowanim')
		$('.calcform__inputdate').not(this).find('[data-toggle="datepicker"]').datepicker('hide')
		$('.calcform__inputdate').not(this).find('[data-toggle="newdatepicker"]').datepicker('hide')

	})

	$('body').on('click', function (event) {
		if (!$(event.target).is('.calcform__inputdate')) {
			$(".calcform__inputdate").removeClass("active");
			$('.calcform__inputdate').not(event.target).removeClass("active");
		}
	});


	$('[data-toggle="datepicker"]').on('pick.datepicker', function (e) {

		// e.preventDefault();
		$('.calcform__inputdate').removeClass('active')
		$('.calcform__inputdate').removeClass('active')

	});
	$('[data-toggle="newdatepicker"]').on('pick.datepicker', function (e) {

		// e.preventDefault();
		$('.calcform__inputdate').removeClass('active')
		$('.calcform__inputdate').removeClass('active')

	});
	/* 	$(document).on('click', '.calcform__item_select *', function (e) {
			$('[data-toggle="datepicker"]').datepicker('hide')
			$('[data-toggle="newdatepicker"]').datepicker('hide')

	}); */

	function initDatepicker() {
		const $newdat = $('[data-toggle="newdatepicker"]');
		$newdat.datepicker({
			...dpoptions,
			date: new Date(Date.now()),
			autoPick: true,
			trigger: $newdat.closest('.calcform__inputdate')
		})

		const $defdat = $('[data-toggle="datepicker"]');
		$defdat.datepicker({
			// options here
			...dpoptions,
			date: new Date(Date.now()),
			autoPick: true,
			trigger: $defdat.closest('.calcform__inputdate')

		});


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
							console.log(e)
							let decline = false
							$('.calcform__newrowscontainer .calcform__select_period').each(function () {
								if ($(this).find('select').val() == '1' && that.attr('value') == '1') {

									if ($(e.target).closest('.calcform__select').hasClass('calcform__select_period')) {
										decline = true
										$('#myModal_warn').modal('show')
									}

								}
							})

							if (!decline) {
								thisCustomSelect.find(".calcform__select-item").removeClass("active")
								$(this).addClass("active")
								var selectedOptionText = that.text()
								selectedItem.text(selectedOptionText).removeClass("arrowanim")
								$('.calcform__input').removeClass("open")

								allItems.addClass("all-items-hide")
								$('.calcform__input').removeClass("open")
								$(this).closest('.calcform__select').find('select').val($(this).attr('datavalue'))
							}
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
			if (selectedItem.closest('.calcform__block_form').length) {
				var currentSelectedItem = $(this),
					currentAllItems = currentSelectedItem.next(".calcform__select-all");

				let currentWrapper = $(this).closest('.calcform__input')

				allItems.not(currentAllItems).addClass("all-items-hide")
				selectedItem.not(currentSelectedItem).removeClass("arrowanim")
				$('.calcform__input').not(currentWrapper).removeClass("open")

				currentAllItems.toggleClass("all-items-hide")
				currentSelectedItem.toggleClass("arrowanim")

				$(this).closest('.calcform__input').toggleClass("open")
				$('[data-toggle="datepicker"]').datepicker('hide')
				$('[data-toggle="newdatepicker"]').datepicker('hide')
				e.stopPropagation()
			}

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

	function validateRow() {

		let valid = true
		let period = $('select[name="newrow_0_1"]').val()
		let type = $('select[name="newrow_0_2"]').val()
		let summ = $('input[name="newrow_0_3"]').val()
		let date = $('input[name="newrow_0_4"]').val()


		if (!summ.length) {
			valid = false
			$('input[name="newrow_0_3"]').addClass('input-error')
		} else {
			$('input[name="newrow_0_3"]').removeClass('input-error')
		}
		if (!date.length) {
			valid = false
			$('input[name="newrow_0_4"]').addClass('input-error')
		} else {
			$('input[name="newrow_0_4"]').removeClass('input-error')
		}
		return valid
	}

	$(document).ready(function () {
		let count = 0
		let ischecked = false

		let hasMonthly = false

		$('[data-clearcalc]').on('click', function (e) {
			e.preventDefault()
			$('.calcform__newrowscontainer').html("")
			$(this).closest(".calcform__item").removeClass('active')
			$(this).closest(".calcform__block").removeClass('active')
			count = 0
			valid = true
			hasMonthly = false
			$('[data-entity="calc-params"]').submit();

		})

		function resetForm() {
			$(`[name=newrow_0_3]`).val('')
			$('[name="newrow_0_2"]').val('0')
			$('[name="newrow_0_1"]').val('0')

		}
		function clearForm0() {
			showForm_0()

			$(`[name=newrow_0_3]`).val('')

			$(`[name=newrow_0_4]`).val('')
			$(`[data-remove=0]`).removeClass('active')
			$(`[data-checkrow=0]`).addClass('active')
			ischecked = false
			$('[data-entity="calc-params"]').submit();
		}

		$(document).on("click", "[data-remove]", function (e) {
			e.preventDefault()
			let id = $(this).data("remove")

			if ($('.calcform__newrowscontainer .calcform__newrow').length > 0) {

				$(`[data-newblock=${id}]`).remove()
				$(`[data-newblockmob=${id}]`).remove()

				if ($('.calcform__newrowscontainer .calcform__newrow').length === 0) {
					clearForm0()
				}

			} else {
				clearForm0()

			}
			$('[data-entity="calc-params"]').submit();

		})

		function hideForm_0() {

			$('.calcform__block_form').hide()
		}
		function showForm_0() {

			$('.calcform__block_form').show()
		}




		$('[data-checkrow]').on("click", function (e) {
			e.preventDefault()
			e.stopPropagation()
			let valid = validateRow()
			if (valid) {
				appendCalcItem()
				ischecked = true
				hideForm_0()
				$(this).removeClass('active')
				$(`[data-remove=${$(this).data('checkrow')}]`).addClass('active')
				$('html,body').animate({ scrollTop: $('.calcform__block_nob').offset().top - 20 }, 200);


				$('input[name="newrow_0_3"]').val("0")
				$('[data-entity="calc-params"]').submit();

			} else {
				ischecked = false
				$(this).addClass('active')
				$(`[data-remove=${$(this).data('checkrow')}]`).removeClass('active')
			}
		})

		function appendCalcItem() {
			let period = $('select[name="newrow_0_1"]').val()
			let type = $('select[name="newrow_0_2"]').val()
			let summ = $('input[name="newrow_0_3"]').val()
			let date = $('input[name="newrow_0_4"]').val()
			count++

			if ($('.calcform__newrowscontainer select').val() == '1') {
				hasMonthly = true
			}

			$(this).closest(".calcform__item").addClass('active')
			$(this).closest(".calcform__block").addClass('active')

			let options1 = period === '0' ? "<option value='0'>Единовременно</option><option value='1'>Ежемесячно</option>" : "<option value='1'>Ежемесячно</option><option value='0'>Единовременно</option>"
			let options2 = type === '0' ? "<option value='0'>Уменьшить срок кредита</option><option value='1'>Уменьшить платеж</option>" : "<option value='1'>Уменьшить платеж</option><option value='0'>Уменьшить срок кредита</option>"

			$('.calcform__newrowscontainer').append(`	<div class="dpnewmob onlyMobile" data-newblockmob="${count}">
																<div class="dpnewmob__item">
																	<div class="dpnewmob__wrapper">
																		<div class="dpnewmob__value">+ ${summ}</div><!-- /.dpnewmob__value -->
																		<div class="dpnewmob__date">${date}</div><!-- /.dpnewmob__date -->
																	</div><!-- /.dpnewmob__wrapper -->
																	<div class="dpnewmob__button">
																		<a href="#0" data-remove='${count}' class='active'>
																		<img src="/local/templates/nbkiv4/public/img/heplclose.svg" alt="" >
																			</a>
																	</div><!-- /.dpnewmob__button -->
																</div><!-- /.dpnewmob__item -->
															</div><!-- /.dpnewmob -->
															<div class="onlyDesktop calcform__block calcform__block_newblock" data-newblock="${count}">
<div class="calcform__newrow" data-newrow="${count}">
<div class="calcnewrow">
<div class="calcnewrow__col">
	<div class="calcform__item calcform__item_select">
		<div class="calcform__input">
			<div class="calcform__select calcform__select_period">
				<span class="placeholder">Период погашения</span><!-- /.placeholder -->

				<select  name='newrow_${count}_1'>
					${options1}
				</select>
			</div>
		</div><!-- /.calcform__input -->
	</div><!-- /.calcform__item -->
</div>
<div class="calcnewrow__col">
	<div class="calcform__item calcform__item_select">
		<div class="calcform__input">
			<div class="calcform__select">
				<span class="placeholder">Тип расчета</span><!-- /.placeholder -->

				<select name='newrow_${count}_2'>
					${options2}
				</select>
			</div>
		</div><!-- /.calcform__input -->
	</div><!-- /.calcform__item -->
</div>
<div class="calcnewrow__col">
	<div class="calcform__item ">
		<div class="calcform__input">
			<span class="placeholder">Сумма платежа</span><!-- /.placeholder -->

			<input type="text" readonly data-number-format="" value='${summ}' name='newrow_${count}_3' autocomplete="off" inputmode="decimal">
		</div><!-- /.calcform__input -->
	</div><!-- /.calcform__item -->
</div>
<div class="calcnewrow__col">
	<div class="calcform__item">
		<div class="calcform__input calcform__input_date">
			<label for="">
				<span class="placeholder">Дата платежа</span>

				<input type="text" value=${date} readonly name='newrow_${count}_4' >
			</label>
		</div><!-- /.calcform__input -->
	</div><!-- /.calcform__item -->
</div>

<div class="calcnewrow__col">
	<div class="calcform__item calcform__dpbtn ">
			<a href="#${count}" data-checkrow='${count}' ><img src="/local/templates/nbkiv4/public/img/checkdp.svg" alt=""></a>

			<a href="#${count}" data-remove='${count}' class='active'><img src="/local/templates/nbkiv4/public/img/removedp.svg" alt=""></a>
	</div>
</div>
</div><!-- /.calcnewrow -->
</div><!-- /.calcform__newrow -->
</div><!-- /.calcform__block calcform__block_newblock -->`)


			$(`[data-newblock-${count}] [data-number-format]`).inputmask({
				rightAlign: false,
				alias: 'numeric',
				digits: 2,
				suffix: ' м³',
				showMaskOnHover: false,
				showMaskOnFocus: false,
			});


			initSelect($(".calcform__select").not(".calcform__select_initialized"))
			initDatepicker(count)

		}

		$("[data-addnewrow]").on("click", function (e) {
			e.preventDefault()

			let valid = validateRow()
			$('.calcform__newrowscontainer .calcform__select_period').each(function () {
				if ($(this).find('select').val() === '1') {
					hasMonthly = true

					/* 	if (period === '1') {

							valid = false
							$('#myModal_warn').modal('show')
							return
						} */
				}
			})
			if (!ischecked && valid) {
				appendCalcItem()
				ischecked = false
			}


			if (valid) {

				showForm_0()


				$(`[data-newblock="0"] .calcform__select-item:first`).addClass('active')
				$(`[data-newblock="0"] [data-remove=0]`).removeClass('active')
				$(`[data-newblock="0"] [data-checkrow=0]`).addClass('active')
				$('input[name="newrow_0_3"]').val("")
				/* 	$('input[name="newrow_0_4"]').val("") */
				$('select[name="newrow_0_1"]').val('0')
				$(`[data-newblock="0"] .calcform__select`).each(function () {
					$(this).find('.calcform__select-item:first').trigger('click')
				})

				$('.calcform__block_form').show()
				$('[data-entity="calc-params"]').submit();

			}


		})




		$(document).ready(function () {


			$("[data-help='all']").on('click', function (e) {
				e.preventDefault();
				e.stopPropagation()
				$(this).toggleClass('active')
				$('.calctooltip').toggleClass('active')

				$('.calctitle__title').toggleClass('calcblur')
				$('.calcform__input').toggleClass('calcblur')
				$('.calcform__block').toggleClass('calcblur')
				$('.calcform__button').toggleClass('calcblur')
				$('.calcfooter__buttons').toggleClass('calcblur')
				$('.calctotal__item').toggleClass('calcblur')
				$('.pagetitle').toggleClass('calcblur')
				$('.pagetitletext').toggleClass('calcblur')
				$('.breadcrumbs').toggleClass('calcblur')
				$('.calcpageblocks').toggleClass('calcblur')
				$('#header').toggleClass('calcblur')
			})


			$("#dpswitch").change(function () {
				if ($(this).is(':checked')) {
					$("[data-nob='nob']").slideToggle()
					$("[data-newrow='calcnewrow']").addClass('active')
					/* showForm_0() */
				} else {
					$("[data-nob='nob']").slideToggle()
					$("[data-newrow='calcnewrow']").removeClass('active')
					/* hideForm_0() */
				}
				$('[data-entity="calc-params"]').submit();
			})

			$(".toggleContainer div").click(function (e) {
				e.preventDefault()
				e.stopPropagation()
				const val = $(this).data('value')
				$('input#PayType').val(val)
				$(this).siblings('div').removeClass('active')
				$(this).addClass('active')
				const posClass = val == '2' ? 'right' : 'left'
				$(this).closest('.toggleContainer').attr('pos', posClass)
				$('[data-entity="calc-params"]').submit();
			})


			$(document).on("click", ".calcform__block_nob.active h1", function (e) {
				$('.calcform__newrowscontainer').slideToggle()
				$(this).closest('.calcform__block_nob').toggleClass('expanded')
			})
			/* 	$(document).on("change", "input", function (e) {
					$('[data-entity="calc-params"]').submit();
				})
				$(document).on("change", "select", function (e) {
					$('[data-entity="calc-params"]').submit();
				}) */


			initSelect($(".calcform__select"))

			initDatepicker()





			function initRangeslider(item) {

				let itemId = `#${item.closest('.range-slider').querySelector('input').getAttribute('id')}`

				console.log(itemId)

				let rangeSliderType = $(itemId).closest('.range-slider').data('range-slider-type')

				let rangeSliderMin = parseFloat($(itemId).data('min'))
				let rangeSliderMax = parseFloat($(itemId).data('max'))
				let rangeSliderStart = parseFloat($(itemId).attr('value'))
				let rangeSliderStep = parseFloat($(itemId).data('step')) || 1

				let rangeSliderOptions = null

				if (rangeSliderType === "calc_summ") {
					rangeSliderOptions = {
						start: [rangeSliderStart],
						range: {
							min: [rangeSliderMin, 100],
							"25%": [10000, 1000],
							"50%": [100000, 1000],
							"75%": [1000000, 10000],
							"99%": [10000000, 10000],
							max: [rangeSliderMax],
						},
						connect: "lower",
					}
				} else if (rangeSliderType === "calc_creditRate") {
					rangeSliderOptions = {
						start: [rangeSliderStart],
						step: 0.01,
						range: {
							'min': [rangeSliderMin],
							'max': [rangeSliderMax],
						},
						/* format: wNumb({
								decimals: 2,
						}), */
						connect: 'lower'
					}
				} else {
					rangeSliderOptions = {
						start: [rangeSliderStart],
						range: {
							min: [rangeSliderMin],
							max: [rangeSliderMax],
						},
						format: wNumb({
							decimals: 0,
						}),
						connect: "lower",
					}
				}

				noUiSlider.create(item, rangeSliderOptions);

				item.noUiSlider.on('slide', function (values, handle) {
					$(itemId).val(values[0])
				});

				$(itemId).on('change', function () {
					let val = parseFloat(String($(itemId).val()).replace(/\s/g, ''))
					console.log(val)

					if (val > rangeSliderMax) {
						val = rangeSliderMax
						$(this).val(rangeSliderMax)
					}

					if (val < rangeSliderMin) {
						val = rangeSliderMin
						$(this).val(rangeSliderMin)

					}
					item.noUiSlider.set(val, null);

				})
			}

			let sliders = document.querySelectorAll(".range-slider__ui")

			sliders.forEach(item => {
				initRangeslider(item)
			})


		})
	})