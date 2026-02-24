<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Калькулятор грузоперевозки");
?>
<?
if ($_REQUEST['debug'] == 'Y') {
    $arResult = [
        'CITY_FROM' => 'г Москва',
        'CITY_FROM_ID' => '7700000000000',
        'CITY_TO' => 'г Краснодар',
        'CITY_TO_ID' => '2300000100000',
        'ADDRESS_FROM' => 'г Москва, Ленинградский пр-кт, д 12',
        'ADDRESS_FROM_ID' => '7700000000016850207',
        'ADDRESS_FROM_ID_CITY' => '7700000000000',
        'ADDRESS_TO' => 'г Краснодар, ул им. Ленина, д 12',
        'ADDRESS_TO_ID' => '2300000100003900119',
        'ADDRESS_TO_ID_CITY' => '2300000100000',
        'CARGO_TYPE' => '000000045',
        'CARGO_TYPE_TEXT' => 'Мебель',
        'DATE' => date('d.m.Y', strtotime('+2 days'))
    ];
}

if (!empty($_REQUEST['from_text'])) {
    $arResult['CITY_FROM'] = $_REQUEST['from_text'];
}

if (!empty($_REQUEST['from'])) {
    $arResult['CITY_FROM_ID'] = $_REQUEST['from'];
}


if (!empty($_REQUEST['to_text'])) {
    $arResult['CITY_TO'] = $_REQUEST['to_text'];
}

if (!empty($_REQUEST['to'])) {
    $arResult['CITY_TO_ID'] = $_REQUEST['to'];
}

if (!empty($_REQUEST['weight'])) {
    $arResult['WEIGHT'] = $_REQUEST['weight'];
}

if (!empty($_REQUEST['volume'])) {
    $arResult['VOLUME'] = $_REQUEST['volume'];
}
?>

<style>
    span.error {
        border-color: red;
    }
</style>
<form action="#" data-entity="calc-form" id="calcForm" method="POST">
	<div class="calcpage">
		<div class="calcpage__main">
			<div class="form-step" data-entity="form-step-1">
				<div class="calcpage__block calcitem">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/WaypointMap.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Направление
									<span class="calcheader__help">
										<span class="help-call">?</span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text"> Для более точного поиска укажите
													название населенного пункта: <br>
													Например: Нефтегорск, Самарская область</span>
												<!-- 	<span class="help-tooltip__info">+8 к защите груза</span> -->
											</span>
										</span>
									</span></span>
							</div>
							<div class="calcheader__info">
								<div class="calcinfo">
									<div class="calcinfo__icon">
										<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/Target.svg"
										                                alt="">
										</div>
									</div>
									<div class="calcinfo__name">Точность</div>
									<div class="calcinfo__value calcinfo__value_red">+50%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform" data-stepvisible="anyway">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_two">
										<div class="switcher">
											<a href="">
												<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
												     xmlns="http://www.w3.org/2000/svg">
													<g clip-path="url(#clip0)">
														<path
																d="M11.8699 0.0298504C11.6212 0.0536005 11.4087 0.2211 11.3274 0.457351C11.2449 0.69485 11.3087 0.95735 11.4899 1.12985L13.5599 3.19985H0.639929C0.619929 3.1986 0.599929 3.1986 0.579929 3.19985C0.226179 3.2161 -0.0463211 3.5161 -0.0300712 3.86985C-0.0138212 4.2236 0.286179 4.4961 0.639929 4.47985H13.5599L11.4899 6.54985C11.3224 6.70985 11.2537 6.94735 11.3112 7.17235C11.3687 7.3961 11.5424 7.57235 11.7662 7.63235C11.9899 7.69235 12.2287 7.6261 12.3899 7.45985L16.0099 3.83985L12.3899 0.21985C12.2549 0.0811003 12.0637 0.0111004 11.8699 0.0298504ZM3.99993 8.34985C3.85493 8.3686 3.72118 8.43485 3.61993 8.53985L-7.11493e-05 12.1598L3.61993 15.7798C3.78118 15.9461 4.01993 16.0123 4.24368 15.9523C4.46743 15.8923 4.64118 15.7161 4.69868 15.4923C4.75618 15.2673 4.68743 15.0298 4.51993 14.8698L2.44993 12.7998H15.3599C15.5912 12.8036 15.8049 12.6823 15.9212 12.4823C16.0387 12.2836 16.0387 12.0361 15.9212 11.8373C15.8049 11.6373 15.5912 11.5161 15.3599 11.5198H2.44993L4.51993 9.44985C4.72118 9.25985 4.77743 8.9611 4.65868 8.7111C4.53993 8.4611 4.27493 8.31485 3.99993 8.34985Z"
																fill="#323232" fill-opacity="0.5"></path>
													</g>
													<defs>
														<clipPath id="clip0">
															<rect width="16" height="16" fill="white"></rect>
														</clipPath>
													</defs>
												</svg>
											</a>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Откуда</div>
											<div class="inputLocation">
												<input data-stepdata="f_otpravki" data-steptype="source" type="text"
												       autocomplete="off" id="cityInput1" class="cityInput"
												       data-entity="city-autocomplete"
												       placeholder="Населенный пункт"
												       name="from_text"
												       value="<?= $arResult['CITY_FROM'] ?>"
												>
												<input type="hidden" name="from"
												       value="<?= $arResult['CITY_FROM_ID'] ?>"
												       data-entity="city-kladr-id">
												<ul id="cityList1" class="cityList" style="display: none;">
													<div class="cityListContainer">
													</div>
												</ul>
												<svg width="12" height="18" viewBox="0 0 12 18" fill="none"
												     xmlns="http://www.w3.org/2000/svg">
													<path
															d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z"
															fill="#C4C4C4"></path>
												</svg>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Куда</div>
											<div class="inputLocation">
												<input data-stepdata="f_dostavki" data-steptype="source" type="text"
												       autocomplete="off"
												       name="to_text"
												       id="cityInput2" class="cityInput"
												       placeholder="Населенный пункт" data-entity="city-autocomplete"
												       value="<?= $arResult['CITY_TO'] ?>">
												<input type="hidden" name="to" value="<?= $arResult['CITY_TO_ID'] ?>"
												       data-entity="city-kladr-id">
												<ul id="cityList2" class="cityList" style="display: none;">
													<div class="cityListContainer">
													</div>
												</ul>
												<svg width="12" height="18" viewBox="0 0 12 18" fill="none"
												     xmlns="http://www.w3.org/2000/svg">
													<path
															d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z"
															fill="#C4C4C4"></path>
												</svg>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/WoodenBox.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Информация о грузе
									<span class="calcheader__help">
										<span class="help-call">?</span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Для точного расчета стоимости перевозки
													и дополнительных услуг заполните габариты каждого грузового места,
													или введите общий вес и объем для быстрого предварительного расчета.
												</span>
												<!-- 												<span class="help-tooltip__info">+8 к защите груза</span>
 -->                                            </span>
										</span></span>
								</span>
							</div>
							<div class="calcheader__info">
								<div class="calcinfo">
									<div class="calcinfo__icon">
										<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/Target.svg"
										                                alt="">
										</div>
									</div>
									<div class="calcinfo__name">Точность</div>
									<div class="calcinfo__value calcinfo__value_red">+50%</div>
								</div>
							</div>
						</div>
						<div class="calctabs-js">
							<ul>
								<label class="active" for="set_weight">Указать общий вес и объём <input
											data-radiotab="tab" type="radio"
											value="Y"
											id="set_weight"
											name="infogruztab"
											checked>
								</label>
								<label class="" for="set_size">Указать с габаритами <input data-radiotab="tab"
								                                                           type="radio" id="set_size"
								                                                           value="N"
								                                                           name="infogruztab"></label>
							</ul>
						</div>
						<div class="calctabs__actions calctabs__actions-js">
							<div class="calctabs__action">
								<!-- у первого нет кнопок но блок нужен -->
							</div>
							<div class="calctabs__action">
								<div class="calctabs__items">
									<div class="calctabs__item js-calcspot calctabs__item-1 active">
										<span class="calctabs__itemplace">1 место</span>
									</div>

									<div class="calctabs__add">
										<span>
											<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
											     xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
												      d="M4.58579 4.58579V0H7.41421V4.58579H12V7.41421H7.41421V12H4.58579V7.41421H5.05053e-07L0 4.58579H4.58579Z"
												      fill="#373737"/>
											</svg>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform calcform-js active" data-stepvisible="set_weight">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Общий вес</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="weight">
												<input data-stepdata="ob_weight" data-steptype="source"
												       class="form-control range-slider__control" data-max="30000"
												       data-min="1"
												       data-weight-format="" name="weight" placeholder="Вес груза, кг"
												       type="text"
												       inputmode="decimal"
												       value="<?= $arResult['WEIGHT'] ? $arResult['WEIGHT'] : 1 ?>">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Объем груза</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="volume">
												<input data-stepdata="ob_vol" data-steptype="source"
												       class="form-control range-slider__control" data-max="110"
												       data-min="0.01"
												       data-volume-format="" name="volume" placeholder="Объём груза, м³"
												       type="text"
												       inputmode="decimal"
												       value="<?= $arResult['VOLUME'] ? $arResult['VOLUME'] : 0.01 ?>">
												<div class="range-slider__ui"></div>
											</div>
										</div>
									</div>
									<div class="calcform__items calcform__items_three">
										<div class="calcform__item">
											<div class="calcform__title">Самое длинное</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="size">
												<input data-stepdata="ob_len" data-steptype="source"
												       class="form-control range-slider__control" data-max="1000"
												       data-min="1"
												       data-size-format="" name="size1" placeholder="Самое длинное"
												       type="text"
												       inputmode="decimal" value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Самое широкое</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="size">
												<input data-stepdata="ob_shir" data-steptype="source"
												       class="form-control range-slider__control" data-max="500"
												       data-min="1"
												       data-size-format="" name="size2" placeholder="Самое широкое"
												       type="text"
												       inputmode="decimal" value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Самое высокое</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="size">
												<input data-stepdata="ob_h" data-steptype="source"
												       class="form-control range-slider__control" data-max="500"
												       data-min="1"
												       data-size-format="" name="size3" placeholder="Самое высокое"
												       type="text"
												       inputmode="decimal" value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
									</div>
									<div class="calcform__items calcform__items_three">
										<div class="calcform__item">
											<div class="calcform__title">Самое тяжелое</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="weight">
												<input data-stepdata="ob_w" data-steptype="source"
												       class="form-control range-slider__control" data-max="5000"
												       data-min="1"
												       data-weight-format="" name="max_weight"
												       placeholder="Самое длинное"
												       type="text"
												       inputmode="decimal"
												       value="<?= $arResult['WEIGHT'] ? $arResult['WEIGHT'] : 1 ?>">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Количество мест/паллет</div>
											<div class="form-control__wrapper">
												<div class="quantity">
													<input type="button" value="" class="quantity-minus"
													       data-field="quantity">
													<input data-stepdata="ob_count" data-steptype="source" type="text"
													       step="1" min="1" max="999" value="1"
													       name="quantity"
													       class="quantity-field" placeholder="1">
													<input type="button" value="" class="quantity-plus"
													       data-field="quantity">
												</div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">
												&nbsp;
												<!--убираем пустоту-->
											</div>
											<!-- <div class="formcheckbox">
                                                <div class="formcheckbox__item">
                                                    <label for="check1-1" class="formcheckbox__label"><span>
                                                            <input data-stepdata="ob_equal" data-steptype="source"
                                                                   type="checkbox" id="check1-1" name="check1" value="Y"
                                                                   checked>
                                                            <span class="formcheckbox__text" data-text="checkboxtext"
                                                                  data-text="checkboxtext">Все места одинаковые</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="calcform calcform-js " data-stepvisible="set_size">
							<div class="calcform__content">
								<div class="calcform__inputs calcform__inputs-1 js-calcform__inputs active"
								     data-inputset="1">
									<div class="calctabs__itemplace">Место 1</div>
									<div class="calcform__items calcform__items_three">
										<div class="calcform__item">
											<div class="calcform__title">Длина</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="size">
												<input data-stepdata="ob_len-1" data-stepset="1"
												       data-steptype="source_set"
												       class="calc_length form-control range-slider__control"
												       data-max="1000"
												       data-min="1" data-size-format="" name="boxLength[]"
												       placeholder="Самое длинное" type="text" inputmode="decimal"
												       value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Ширина</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="size">
												<input data-stepdata="ob_shir-1" data-stepset="1"
												       data-steptype="source_set"
												       class="calc_width form-control range-slider__control"
												       data-max="1000"
												       data-min="1"
												       data-size-format="" name="boxWidth[]" placeholder="Самое широкое"
												       type="text" inputmode="decimal" value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Высота</div>
											<div class=" form-control__wrapper range-slider"
											     data-range-slider-type="height">
												<input data-stepdata="ob_h-1" data-stepset="1"
												       data-steptype="source_set"
												       class="calc_height form-control range-slider__control"
												       data-max="500"
												       data-min="1" data-size-format="" name="boxHeight[]"
												       placeholder="Самое высокое" type="text" inputmode="decimal"
												       value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
									</div>
									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Вес одного места</div>
											<div class="form-control__wrapper range-slider"
											     data-range-slider-type="weight">
												<input data-stepdata="ob_w-1" data-stepset="1"
												       data-steptype="source_set"
												       class="form-control range-slider__control" data-max="5000"
												       data-min="1" data-weight-format="" name="boxWeight[]"
												       placeholder="Вес груза, кг" type="text" inputmode="decimal"
												       value="1">
												<div class="range-slider__ui"></div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Количество таких мест</div>
											<div class="form-control__wrapper">
												<div class="quantity">
													<input type="button" value="" class="quantity-minus"
													       data-field="quantity">
													<input data-stepdata="ob_count-1" data-stepset="1"
													       data-steptype="source_set" type="text" step="1" min="1"
													       max="999" value="1"
													       name="boxCount[]"
													       class="quantity-field" placeholder="1">
													<input type="button" value="" class="quantity-plus"
													       data-field="quantity">
												</div>
											</div>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Общий объем</div>
											<div class="form-control__wrapper ">
												<input data-stepdata="ob_vol-1" data-stepset="1"
												       data-steptype="source_set" disabled="disabled"
												       class="auto_volume form-control range-slider__control"
												       data-max="20"
												       data-min="0.01" data-volume-format="" name="boxVolume[]"
												       placeholder="Объём груза, м³" type="text" inputmode="decimal"
												       value="0.01" disabled>
												<!-- <div class="range-slider__ui"></div> -->
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/NextLocation.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Пункт отправки
								</span>

								<span class="calcheader__help">
									<span class="help-call">?</span>
									<span class="help-tooltip">
										<span class="help-tooltip__content">
											<span class="help-tooltip__text"> Самостоятельно приехать на терминал
												компании, либо заказать машину до адреса. Стоимость перевозки по городу
												между терминалами по требованию грузополучателя составляет 50% от прайса
												автоэкспедирования.
											</span>
										</span>
									</span>
								</span>
							</div>
							<div class="calcheader__info">
								<div class="calcinfo">
									<div class="calcinfo__icon">
										<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/Happy.svg"
										                                alt="">
										</div>
									</div>
									<div class="calcinfo__name">Комфорт</div>
									<div class="calcinfo__value calcinfo__value_green">+50%</div>
								</div>
							</div>
						</div>
						<div class="calctabs calctabs-js">
							<ul>
								<label class="active" for="send_terminal">Сдать на терминале <input data-radiotab="tab"
								                                                                    type="radio"
								                                                                    id="send_terminal"
								                                                                    name="sendpointtab"
								                                                                    checked> </label>
								<label class="" for="send_address">Забрать по адресу <input data-radiotab="tab"
								                                                            type="radio"
								                                                            data-isrequired="send_address"
								                                                            id="send_address"
								                                                            name="sendpointtab"
								                                                            value="Y"></label>
							</ul>
						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform calcform-js active" data-stepvisible="send_terminal">
							<div class="calcform__content">
								<div class="dropdownJS">
									<div class="dropdownJS__label">
										<!-- в input передается data-id выбранного пункта отправки. можно передавать что либо другое,
                                          алгоритм в main.js в теле класса class Dropdown -->
										<input type="hidden" value="" name="terminal-from-id" class="terminal-id">
										<input type="hidden" value="" name="terminal-from-name" class="terminal-name">
										<div class="dropdownJS__item">
											<div class="dropdownJS_info">
												<span class="dropdownJS__text1" data-stepdata="p_otpravki"
												      data-steptype="source"></span>
												<span class="dropdownJS__text2">
													<span class="dropdownJS__text2-text">График работы:&nbsp;</span>
													<span
															class="dropdownJS__text2-value"></span>
												</span>
											</div>
											<!-- /.dropdownJS_info -->
											<span class="dropdownJS__text3"></span>
										</div>
										<!-- /.dropdownJS__item -->
									</div>
									<ul class="dropdownJS__menu" data-entity="ternimal-list">
									</ul>
								</div>
								<!-- /.dropdownJS -->
								<!-- <div class="inputLocation inputLocation_type2 dropdownJs">
                <input type="text" autocomplete="off" id="cityInputFrom1" class="cityInput"
                  onkeyup="cityFunction(this)" placeholder="Населенный пункт">
                <ul id="cityListFrom1" class="cityList">
                  <div class="cityListContainer">
                    <li>
                      <a href="#">г. Москва, ул. Освобождения, отделение №222148481</a>
                      <span>График работы: 10:00 - 19:00</span>
                    </li>
                    <li><a href="#">Екатеринбург</a></li>
                    <li><a href="#">Карганда, МО</a></li>
                    <li><a href="#">Карганда, Черновицкая обл, г. Карганда</a></li>
                    <li><a href="#">Кировоградский район, г Карганда</a></li>
                    <li><a href="#">Карганда, МО</a></li>
                    <li><a href="#">Карганда, Черновицкая обл, г. Карганда</a></li>
                    <li><a href="#">Кировоградский район, г Карганда</a></li>
                    <li><a href="#">Карганда, МО</a></li>
                    <li><a href="#">Карганда, Черновицкая обл, г. Карганда</a></li>
                    <li><a href="#">Кировоградский район, г Карганда</a></li>
                    <li><a href="#">Карганда, МО</a></li>
                    <li><a href="#">Карганда, Черновицкая обл, г. Карганда</a></li>
                    <li><a href="#">Кировоградский район, г Карганда</a></li>
                  </div>
                </ul>
                <svg width="12" height="18" viewBox="0 0 12 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z"
                    fill="#C4C4C4" />
                </svg>
                <img src="<?= ASSETS_PATH ?>/images/Rectangle150.svg" alt="">
                <span class="inputLocation__price">+0 Р</span>
                </div> -->
								<div class="calcform__date">
									<div class="calcdate">
										<div class="calcdate__input">
											<input class="js-datepicker datepicker-terminal"
											       value="<?= $arResult['DATE'] ?>"
											       type="text" data-stepdata="date_otpravki"
											       name="date_otpravki"
											       data-steptype="source" data-required="required" data-min="10"
											       data-max="10"
											       placeholder="Выбрать дату">
										</div>
										<div class="calcdate__text">Местное время <br> 22:00 (GMT+2)</div>
									</div>
								</div>
							</div>
						</div>
						<div class="calcform calcform-js" data-stepvisible="send_address">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__title">Город, улица, дом, квартира</div>
									<div class="inputLocation">
										<input type="text" autocomplete="off" data-mbrequired="send_address"
										       data-stepdata="p_otpravki" data-steptype="source"
										       value="<?= $arResult['ADDRESS_FROM'] ?>"
										       name="fromAddress"
										       data-entity="fulladdress-autocomplete">
										<input type="hidden" name="pickup-address"
										       value="<?= $arResult['ADDRESS_FROM_ID'] ?>" data-entity="kladr-id">
										<input type="hidden" name="pickup-city"
										       value="<?= $arResult['ADDRESS_FROM_ID_CITY'] ?>"
										       data-entity="city-kladr-id">
                                        <? if (1 == 2): ?>
											<div class="calcform__status">
												<img src="<?= ASSETS_PATH ?>/images/success.svg" alt="">
												<span>Отлично!</span>
											</div>
                                        <? endif; ?>
										<ul class="cityList" style="display: none;">
											<div class="cityListContainer">
											</div>
										</ul>
									</div>
									<hr>
									<div class="calcform__date">
										<div class="calcform__title">Когда забрать груз?

											<span class="calcheader__help">
												<span class="help-call">?</span>
												<span class="help-tooltip">
													<span class="help-tooltip__content">
														<span class="help-tooltip__text"> Заявки на перевозки
															принимаются до 16:00 часов с датой выполнения на следующий
															день. В случае изменения параметров груза при заборе (в
															сторону уменьшения) стоимость перевозки рассчитывается как
															стоимость забора груза для диапазона, указанного в
															первоначальной заявке. Применяются повышающие коэффициенты,
															если нужно подать машину в нерабочее время или точно ко
															времени.

														</span>
													</span>
												</span>
											</span>


										</div>


										<div class="calcdate">
											<div class="calcdate__input">
												<input class="js-datepicker datepicker-address"
												       name="date_otpravki2"
												       type="text" data-stepdata="date_otpravki" data-steptype="source"
												       placeholder="Выбрать дату" data-required="required" data-min="10"
												       data-max="10">
											</div>
											<div class="calcdate__text">Местное время <br> 22:00 (GMT+2)</div>
										</div>
									</div>
									<hr>
									<div class="calcform__inputs">
										<div class="calcform__radiobuttons">
											<div class="radiotype radiotype_row">


												<div class="radiotype__item">
													<label for="radio-time-day1" class="radiotype__label">
														<span>
															<input type="radio" id="radio-time-day1"
															       name="sendtime" value="День"
															       data-time="day" checked>
															<span class="radiotype__text">День</span>
														</span>
													</label>
												</div>
												<div class="radiotype__item">
													<label for="radio-time-morning1" class="radiotype__label">
														<span>
															<input type="radio" id="radio-time-morning1" name="sendtime"
															       value="Утро"
															       data-time="morning">
															<span class="radiotype__text">Утро</span>
														</span>
													</label>
												</div>
												<div class="radiotype__item">
													<label for="radio-time-evening1" class="radiotype__label">
														<span>
															<input type="radio" id="radio-time-evening1"
															       name="sendtime"
															       value="Вечер"
															       data-time="evening">
															<span class="radiotype__text">Вечер</span>
														</span>
													</label>
												</div>

												<div class="radiotype__item">
													<label for="radio-time-settime1" class="radiotype__label">
														<span>
															<input type="radio" id="radio-time-settime1"
															       name="sendtime"
															       value="Точное время" data-time="settime">
															<span class="radiotype__text">Точное время</span>
														</span>
													</label>
												</div>
											</div>


										</div>
										<div class="calcform__inputs">
											<div class="select">
												<select name="select-time-day1" id="" data-time="day"
												        data-stepdata="time_otpravki1" data-steptype="source">
													<option value="9:00 до 18:00">9:00 до 18:00</option>
												</select>
												<select name="select-time-morning1" id="" data-time="morning"
												        data-stepdata="time_otpravki2" data-steptype="source">
													<option value="7:00 до 09:00">7:00 до 09:00</option>
												</select>
												<select name="select-time-evening1" id="" data-time="evening"
												        data-stepdata="time_otpravki3" data-steptype="source">
													<option value="18:00 до 23:00">18:00 до 23:00</option>
												</select>
												<select name="select-time-settime1" id="" data-time="settime"
												        data-stepdata="time_otpravki4" data-steptype="source">
													<option value="7:00 - 8:00" selected>7:00 - 8:00</option>
													<option value="8:00 - 9:00">8:00 - 9:00</option>
													<option value="9:00 - 10:00">9:00 - 10:00</option>
													<option value="10:00 - 11:00">10:00 - 11:00</option>
													<option value="11:00 - 12:00">11:00 - 12:00</option>
													<option value="12:00 - 13:00">12:00 - 13:00</option>
													<option value="13:00 - 14:0">13:00 - 14:00</option>
													<option value="14:00 - 15:00">14:00 - 15:00</option>
													<option value="15:00 - 16:00">15:00 - 16:00</option>
													<option value="16:00 - 17:00">16:00 - 17:00</option>
													<option value="17:00 - 18:00">17:00 - 18:00</option>
													<option value="18:00 - 19:00">18:00 - 19:00</option>
													<option value="19:00 - 20:00">19:00 - 20:00</option>
													<option value="20:00 - 21:00">20:00 - 21:00</option>
													<option value="21:00 - 22:00">21:00 - 22:00</option>
													<option value="22:00 - 23:00">22:00 - 23:00</option>
												</select>
											</div>
										</div>
									</div>
									<hr>
									<div class="calcform__inputs">
										<div class="formcheckbox">
											<div class="formcheckbox__item">
												<label for="check4-1"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check4-1" name="FROM_LOADING"
														       value="Y" data-stepdata="dop_prr" data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext"
														      data-text="checkboxtext">Погрузо-разгрузочные
															работы </span>
													</span>
													<span class="calcheader__help" style="white-space:initial;">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Погрузо-разгрузочные
																	работы рассчитываются для грузов с весом 1 места не
																	более 20 кг, объемом не более 0,2 м3. Если вес
																	отдельного грузового места превышает 20 кг,
																	стоимость ПРР определяется по согласованию, исходя
																	из времени выполнения работ и количества
																	привлекаемых грузчиков.

																</span>
															</span>
														</span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="prrblock">
										<div class="calcform__inputs dflex dflex_wrap ">
											<div class="calcform__title">Этаж</div>
											<input type="text" min="1" name="FLOOR" max="99" data-stepdata="dop_floor"
											       data-steptype="source"
											       class="numberarrows inputsmall quantity-level"
											       placeholder="XX">
											<div class="formcheckbox formcheckbox_full">
												<div class="formcheckbox__item">
													<label for="check6-1" class="formcheckbox__label"><span>
															<input type="checkbox" id="check6-1" name="NO_LIFT"
															       value="Y"
															       data-stepdata="dop_lift" data-steptype="source">
															<span class="formcheckbox__text" data-text="checkboxtext">Нет
																лифта</span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div><!-- /.prrblock -->
									<hr class="nomargin">
									<div class="calcform__inputs">
										<div class="calcform__services accordeon_js">
											<div class="accordeonbutton_js">
												<div class="calcheader">
													Дополнительные услуги
													<div class="calcheader__info">
														<div class="calcinfo">
															<div class="calcinfo__icon">
																<div class="calcinfo__img"><img
																			src="<?= ASSETS_PATH ?>/images/Happy.svg"
																			alt=""></div>
															</div>
															<div class="calcinfo__name">Комфорт</div>
															<div class="calcinfo__value calcinfo__value_green">+50%
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordeoncontent_js">
												<div class="formcheckbox">
													<div class="formcheckbox__cols">
														<div class="formcheckbox__col">
															<div class="formcheckbox__item">
																<label for="check77-1"
																       class="formcheckbox__label formcheckbox__label_type2">
																	<span>
																		<input type="checkbox" id="check77-1"
																		       data-stepdata="dop_bok"
																		       data-steptype="source"
																		       name="FROM_SideTentRemoval" value="Y">
																		<span class="formcheckbox__text"
																		      data-text="checkboxtext">Боковая
																			рестентовка</span>
																	</span>

																</label>
																<label for="check77-2"
																       class="formcheckbox__label formcheckbox__label_type2">
																	<span>
																		<input type="checkbox" id="check77-2"
																		       name="FROM_UpperTentRemoval" value="Y"
																		       data-stepdata="dop_verh"
																		       data-steptype="source">
																		<span class="formcheckbox__text"
																		      data-text="checkboxtext">Верхняя
																			растентовка</span>
																	</span>

																</label>
																<label for="check77-3"
																       class="formcheckbox__label formcheckbox__label_type2">
																	<span>
																		<input type="checkbox" id="check77-3"
																		       name="FROM_FullTentRemoval" value="Y"
																		       data-stepdata="dop_full"
																		       data-steptype="source">
																		<span class="formcheckbox__text"
																		      data-text="checkboxtext">Полная
																			рестентовка</span>
																	</span>

																</label>

															</div>
														</div>
														<div class="formcheckbox__col">
															<label for="check77-4"
															       class="formcheckbox__label formcheckbox__label_type2">
																<span>
																	<input type="checkbox" id="check77-4"
																	       name="FROM_TailLift" value="Y"
																	       data-stepdata="dop_bort"
																	       data-steptype="source">
																	<span class="formcheckbox__text"
																	      data-text="checkboxtext">Требуется машина с
																		гидробортом</span>

																</span>

															</label>
														</div>
													</div>
												</div>
												<hr>
												<div class="calcheader">
													<div class="calcform__title">Дополнительные сведения (при
														необходимости)
													</div>
													<div class="calcheader__info">
														<div class="calcinfo">
															<div class="calcinfo__icon">
																<div class="calcinfo__img"><img
																			src="<?= ASSETS_PATH ?>/images/Target.svg"
																			alt=""></div>
															</div>
															<div class="calcinfo__name">Точность</div>
															<div class="calcinfo__value calcinfo__value_red">+10%</div>
														</div>
													</div>
												</div>
												<div class="calcform__inputs">
													<input type="text" placeholder="Ваш комментарий"
													       data-stepdata="dop_sved" data-steptype="source"
													       name="FROM_COMMENT">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/NextLocation.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Пункт доставки
									<span class="calcheader__help">
										<span class="help-call">?</span>
										<span class="help-tooltip">
											<span class="help-tooltip__content">
												<span class="help-tooltip__text">Самостоятельно приехать на терминал
													компании, либо заказать машину до адреса. Стоимость перевозки по
													городу между терминалами по требованию грузополучателя составляет
													50% от прайса автоэкспедирования.
												</span>
											</span>
										</span>
									</span></span>
							</div>
							<div class="calcheader__info">
								<div class="calcinfo">
									<div class="calcinfo__icon">
										<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/Happy.svg"
										                                alt="">
										</div>
									</div>
									<div class="calcinfo__name">Комфорт</div>
									<div class="calcinfo__value calcinfo__value_green">+50%</div>
								</div>
							</div>
						</div>
						<div class="calctabs calctabs-js">
							<ul>
								<label class="active" for="receive_terminal">Получить на терминале <input
											data-radiotab="tab" type="radio"
											value="N"
											id="receive_terminal"
											name="receivepointtab"
											checked>
								</label>
								<label class="" for="receive_address">Доставить по адресу <input data-radiotab="tab"
								                                                                 type="radio"
								                                                                 data-isrequired="delivery-address"
								                                                                 value="Y"
								                                                                 id="receive_address"
								                                                                 name="receivepointtab"></label>
							</ul>
						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform calcform-js active" data-stepvisible="receive_terminal">
							<div class="calcform__content">
								<div class="dropdownJS">
									<div class="dropdownJS__label">
										<!-- в input передается data-id выбранного пункта отправки. можно передавать что либо другое,
                                          алгоритм в main.js в теле класса class Dropdown -->
										<input type="hidden" value="" name="terminal-to-id" class="terminal-id">
										<input type="hidden" value="" name="terminal-to-name" class="terminal-name">
										<div class="dropdownJS__item">
											<div class="dropdownJS_info">
												<span class="dropdownJS__text1" data-stepdata="p_dostavki"
												      data-steptype="source"></span>
												<span class="dropdownJS__text2">
													<span class="dropdownJS__text2-text">График работы:&nbsp;</span>
													<span
															class="dropdownJS__text2-value"></span>
												</span>
											</div>
											<!-- /.dropdownJS_info -->
											<span class="dropdownJS__text3"></span>
										</div>
										<!-- /.dropdownJS__item -->
									</div>
									<ul class="dropdownJS__menu" data-entity="ternimal-list-to">
									</ul>
								</div>
								<!-- /.dropdownJS -->
							</div>
						</div>
						<div class="calcform calcform-js" data-stepvisible="receive_address">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__title">Город, улица, дом, квартира</div>
									<div class="inputLocation">
										<input type="text" autocomplete="off" data-stepdata="p_dostavki"
										       data-steptype="source" data-required="required"
										       value="<?= $arResult['ADDRESS_TO'] ?>"
										       name="toAddress"
										       data-entity="fulladdress-autocomplete">
										<!-- 	<input type="text" autocomplete="off" data-stepdata="p_dostavki"
										       data-steptype="source" data-mbrequired="delivery-address"
										       value="<?= $arResult['ADDRESS_TO'] ?>"
										       name="toAddress"
										       data-entity="fulladdress-autocomplete"> -->
										<input type="hidden" name="delivery-address"
										       value="<?= $arResult['ADDRESS_TO_ID'] ?>" data-entity="kladr-id">
										<input type="hidden" name="delivery-city"
										       value="<?= $arResult['ADDRESS_TO_ID_CITY'] ?>"
										       data-entity="city-kladr-id">
                                        <? if (1 == 2): ?>
											<div class="calcform__status">
												<img src="<?= ASSETS_PATH ?>/images/success.svg" alt="">
												<span>Отлично!</span>
											</div>
                                        <? endif; ?>
										<ul class="cityList" style="display: none;">
											<div class="cityListContainer">
											</div>
										</ul>
									</div>
									<hr>
									<div class="calcform__date">
										<div class="calcform__title">Когда доставить груз? <span
													class="calcheader__help">
												<span class="help-call">?</span>
												<span class="help-tooltip">
													<span class="help-tooltip__content">
														<span class="help-tooltip__text">Заявки на перевозки принимаются
															до 16:00 часов с датой выполнения на следующий день. В
															случае изменения параметров груза при заборе (в сторону
															уменьшения) стоимость перевозки рассчитывается как стоимость
															забора груза для диапазона, указанного в первоначальной
															заявке. Применяются повышающие коэффициенты, если нужно
															подать машину в нерабочее время или точно ко времени.

														</span>
													</span>
												</span>
											</span></span></div>

									</div>
									<div class="calcform__inputs">
										<div class="calcform__radiobuttons">
											<div class="radiobuttons">
												<div class="radiotype radiotype_row">


													<div class="radiotype__item">
														<label for="radio-time-day" class="radiotype__label">
															<span>
																<input type="radio" id="radio-time-day" value="День"
																       name="pickuptime" data-time="day" checked>
																<span class="radiotype__text">День</span>
															</span>
														</label>
													</div>
													<div class="radiotype__item">
														<label for="radio-time-morning" class="radiotype__label">
															<span>
																<input type="radio" id="radio-time-morning" value="Утро"
																       name="pickuptime" data-time="morning">
																<span class="radiotype__text">Утро</span>
															</span>
														</label>
													</div>
													<div class="radiotype__item">
														<label for="radio-time-evening" class="radiotype__label">
															<span>
																<input type="radio" id="radio-time-evening"
																       value="Вечер"
																       name="pickuptime" data-time="evening">
																<span class="radiotype__text">Вечер</span>
															</span>
														</label>
													</div>

													<div class="radiotype__item">
														<label for="radio-time-settime" class="radiotype__label">
															<span>
																<input type="radio" id="radio-time-settime"
																       value="Точное время"
																       name="pickuptime" data-time="settime">
																<span class="radiotype__text">Точное время</span>
															</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="calcform__inputs">
										<div class="select">
											<select name="select-time-day" id="" data-time="day"
											        data-stepdata="time_dostavki1" data-steptype="source">
												<option value="9:00 до 18:00">9:00 до 18:00</option>
											</select>
											<select name="select-time-morning" id="" data-time="morning"
											        data-stepdata="time_dostavki2" data-steptype="source">
												<option value="7:00 до 09:00">7:00 до 09:00</option>
											</select>
											<select name="select-time-evening" id="" data-time="evening"
											        data-stepdata="time_dostavki3" data-steptype="source">
												<option value="18:00 до 23:00">18:00 до 23:00</option>
											</select>
											<select name="select-time-settime" id="" data-time="settime"
											        data-stepdata="time_dostavki4" data-steptype="source">
												<option value="7:00 - 8:00">7:00 - 8:00</option>
												<option value="8:00 - 9:00">8:00 - 9:00</option>
												<option value="9:00 - 10:00">9:00 - 10:00</option>
												<option value="10:00 - 11:00">10:00 - 11:00</option>
												<option value="11:00 - 12:00">11:00 - 12:00</option>
												<option value="12:00 - 13:00">12:00 - 13:00</option>
												<option value="13:00 - 14:0">13:00 - 14:00</option>
												<option value="14:00 - 15:00">14:00 - 15:00</option>
												<option value="15:00 - 16:00">15:00 - 16:00</option>
												<option value="16:00 - 17:00">16:00 - 17:00</option>
												<option value="17:00 - 18:00">17:00 - 18:00</option>
												<option value="18:00 - 19:00">18:00 - 19:00</option>
												<option value="19:00 - 20:00">19:00 - 20:00</option>
												<option value="20:00 - 21:00">20:00 - 21:00</option>
												<option value="21:00 - 22:00">21:00 - 22:00</option>
												<option value="22:00 - 23:00">22:00 - 23:00</option>
											</select>

										</div>
									</div>
									<br><br>
									<div class="calcform__inputs">
										<div class="formcheckbox">
											<div class="formcheckbox__item">
												<label for="check42-12"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check42-12" name="TO_LOADING"
														       value="Y" data-stepdata="dop_dost_prr"
														       data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Погрузо-разгрузочные
															работы </span>
													</span>
													<span class="calcheader__help" style="white-space: initial;">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text"> Погрузо-разгрузочные
																	работы рассчитываются для грузов с весом 1 места не
																	более 20 кг, объемом не более 0,2 м3. Если вес
																	отдельного грузового места превышает 20 кг,
																	стоимость ПРР определяется по согласованию, исходя
																	из времени выполнения работ и количества
																	привлекаемых грузчиков.

																</span>
															</span>
														</span>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="prrblock">
										<div class="calcform__inputs dflex dflex_wrap ">
											<div class="calcform__title">Этаж</div>
											<input type="text" min="1" name="TO_FLOOR" max="99"
											       data-stepdata="dop_dost_floor" data-steptype="source"
											       class="numberarrows inputsmall quantity-level" placeholder="XX">
											<div class="formcheckbox formcheckbox_full">
												<div class="formcheckbox__item">
													<label for="check62-12" class="formcheckbox__label"><span>
															<input type="checkbox" id="check62-12" name="TO_NO_LIFT"
															       value="Y" data-stepdata="dop_dost_lift"
															       data-steptype="source">
															<span class="formcheckbox__text" data-text="checkboxtext">Нет
																лифта</span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div><!-- /.prrblock -->
									<hr class="nomargin">
									<div class="calcform__inputs">
										<div class="calcform__services accordeon_js">
											<div class="accordeonbutton_js">
												<div class="calcheader">
													Дополнительные услуги
													<div class="calcheader__info">
														<div class="calcinfo">
															<div class="calcinfo__icon">
																<div class="calcinfo__img"><img
																			src="<?= ASSETS_PATH ?>/images/Happy.svg"
																			alt=""></div>
															</div>
															<div class="calcinfo__name">Комфорт</div>
															<div class="calcinfo__value calcinfo__value_green">+50%
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordeoncontent_js">
												<div class="formcheckbox">
													<div class="formcheckbox__cols">
														<div class="formcheckbox__col">
															<div class="formcheckbox__item">
																<label for="check88-1"
																       class="formcheckbox__label formcheckbox__label_type2">
																	<span>
																		<input type="checkbox" id="check88-1"
																		       name="TO_SideTentRemoval" value="Y"
																		       data-stepdata="dop_dost_bok"
																		       data-steptype="source">
																		<span class="formcheckbox__text"
																		      data-text="checkboxtext">Боковая
																			рестентовка</span>
																	</span>

																</label>
																<label for="check88-2"
																       class="formcheckbox__label formcheckbox__label_type2">
																	<span>
																		<input type="checkbox" id="check88-2"
																		       name="TO_UpperTentRemoval" value="Y"
																		       data-stepdata="dop_dost_verh"
																		       data-steptype="source">
																		<span class="formcheckbox__text"
																		      data-text="checkboxtext">Верхняя
																			растентовка</span>
																	</span>

																</label>
																<label for="check88-3"
																       class="formcheckbox__label formcheckbox__label_type2">
																	<span>
																		<input type="checkbox" id="check88-3"
																		       name="TO_FullTentRemoval"
																		       data-stepdata="dop_dost_full"
																		       data-steptype="source">
																		<span class="formcheckbox__text"
																		      data-text="checkboxtext">Полная
																			рестентовка</span>
																	</span>

																</label>
															</div>
														</div>
														<div class="formcheckbox__col">
															<label for="check88-4"
															       class="formcheckbox__label formcheckbox__label_type2">
																<span>
																	<input type="checkbox" id="check88-4"
																	       data-stepdata="dop_dost_bort"
																	       data-steptype="source"
																	       name="TO_TailLift"
																	       value="Y">
																	<span class="formcheckbox__text"
																	      data-text="checkboxtext">Требуется машина с
																		гидробортом</span>

																</span>

															</label>
														</div>
													</div>
												</div>
												<hr>
												<div class="calcheader">
													<div class="calcform__title">Дополнительные сведения (при
														необходимости)


													</div>
													<div class="calcheader__info">
														<div class="calcinfo">
															<div class="calcinfo__icon">
																<div class="calcinfo__img"><img
																			src="<?= ASSETS_PATH ?>/images/Target.svg"
																			alt=""></div>
															</div>
															<div class="calcinfo__name">Точность</div>
															<div class="calcinfo__value calcinfo__value_red">+10%</div>
														</div>
													</div>
												</div>
												<div class="calcform__inputs">
													<input type="text" placeholder="Ваш комментарий" name="TO_COMMENT"
													       data-stepdata="dop_dost_sved" data-steptype="source">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="calcpage__block calcitem">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/BoxSettings.svg" alt="">
									</div>
								</div>
								<div class="calcheader__name">Дополнительные сведения</div>
							</div>
							<div class="calcheader__info">
								<div class="calcinfo">
									<div class="calcinfo__icon">
										<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/Protect.svg"
										                                alt="">
										</div>
									</div>
									<div class="calcinfo__name">Защита груза</div>
									<div class="calcinfo__value calcinfo__value_blue">+50%</div>
								</div>
							</div>
						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform" data-stepvisible="anyway">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Тип груза <span class="calcheader__help">
													<span class="help-call">?</span>
													<span class="help-tooltip">
														<span class="help-tooltip__content">
															<span class="help-tooltip__text">Некоторые типы грузов мы не
																принимаем к перевозке, подробней в разделе <a
																		href="/gruzy-ne-prinimaemye-k-perevozke/"
																		target="_blank">“Грузы, не принимаемые к
																	перевозке”</a>
															</span>
														</span>
													</span>
												</span>

											</div>

											<input type="hidden" name="cargoType" class="codeInp"
											       value="<?= $arResult['CARGO_TYPE'] ?>"/>
											<input type="text" data-stepdata="tip_gruza" data-steptype="source"
											       placeholder="Например, мебель"
											       value="<?= $arResult['CARGO_TYPE_TEXT'] ?>"
											       name="CARGO_TYPE" data-required="required" data-min="3" data-max="30"
											       onkeyup="cityFunction(this)"
											       class="cityInput" id="typesinput">
                                            <?
                                            $APPLICATION->IncludeComponent(
                                                'custom:type.list',
                                                '',
                                                [
                                                    'BLOCK_ID' => 1
                                                ],
                                                false
                                            );
                                            ?>
										</div>
										<div class="calcform__item">
											<div class="calcform__title">Объявленная стоимость, ₽
												<span class="calcheader__help">
													<span class="help-call">?</span>
													<span class="help-tooltip">
														<span class="help-tooltip__content">
															<span class="help-tooltip__text">Документально
																подтвержденная стоимость груза.
															</span>
														</span>
													</span>
												</span>
											</div>
											<input type="text" name="userPrice" value="100000" data-cost="cost"
											       data-stepdata="cost" data-steptype="source">
										</div>
									</div>
								</div>
								<hr>
								<div class="dflex">
									<div class="switches">
										<ol class="switches">

											<!-- тут класс disabled -->
											<li class="disabled" data-entity="teplo-checkbox">
												<span class="switches__name"> <span data-text="checkboxtext">Тепловой
														режим</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Доставку груза при
																	температуре не ниже +2 оС.
																	Важно! Мы не занимаемся доставкой товаров, требующих
																	поддержания низких температур. Например,
																	замороженных продуктов питания, охлаждённого мяса и
																	прочих товаров.
																</span>
															</span>
														</span>
													</span></span>
												<!-- тут атрибут disabled -->
												<input disabled type="checkbox" id="switches_1" name="TEPLO" value="Y"
												       data-stepdata="teplo" data-steptype="source">
												<label for="switches_1">
													<!-- тут текст ошибки для disabled -->
													<span class="disabled-text">Услуга не оказывается по данному
														направлению</span>
													<span></span>
												</label>
											</li>

											<li>
												<span class="switches__name"> <span data-text="checkboxtext">Хрупкий
														груз</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text"> В случае отсутствия
																	надлежащей упаковки, в целях сохранности груза в
																	процессе перевозки мы вправе самостоятельно
																	доупаковать груз, а плательщик обязан оплатить
																	стоимость доп. упаковки.


																</span>
															</span>
														</span>
													</span></span>
												<input type="checkbox" id="fragileCargo" value="Y"
												       name="fragileCargo" data-stepdata="fragileCargo"
												       data-steptype="source">
												<label for="fragileCargo">
													<span></span>
												</label>
											</li>
											<li>
												<span class="switches__name"> <span data-text="checkboxtext">Жидкий
														груз</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text"> В случае отсутствия
																	надлежащей упаковки, в целях сохранности груза в
																	процессе перевозки мы вправе самостоятельно
																	доупаковать груз, а плательщик обязан оплатить
																	стоимость доп. упаковки.
																</span>
															</span>
														</span>
													</span></span>
												<input type="checkbox" id="liquidCargo" value="Y"
												       name="liquidCargo" data-stepdata="liquidCargo"
												       data-steptype="source">
												<label for="liquidCargo">
													<span></span>
												</label>
											</li>
										</ol>
									</div>
								</div>
								<hr>
								<div class="calcform__cols">
									<div class="calcform__col calcform__col_1">
										<div class="calcform__title">Упаковка</div>
										<!--  <div class="formcheckbox">
                                            <div class="formcheckbox__item">
                                                <label for="check9-1"
                                                       class="formcheckbox__label formcheckbox__label_type2">
                                                    <span>
                                                        <input type="checkbox" id="check9-1" name="WITHOUT_BOX"
                                                               value="Y" data-stepdata="pack_nopack"
                                                               data-steptype="source">
                                                        <span class="formcheckbox__text" data-text="checkboxtext">Без
                                                            упаковки</span>
                                                    </span>
                                                    <span class="calcheader__help">
                                                        <span class="help-call">?</span>
                                                        <span class="help-tooltip">
                                                            <span class="help-tooltip__content">
                                                                Необходимо предоставить <b>“Заявление об отказе от доп.
                                                                    упаковки груза”</b> , если ваш груз находится в <a
                                                                    href="/trebovanie-k-upakovke/" target="_blank">Перечне
                                                                    грузов, подлежащих обязательной упаковке </a>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div> -->
										<div class="formcheckbox">
											<div class="formcheckbox__item">
												<label for="check10-1"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-1" name="CRATE" value="Y"
														       data-stepdata="pack_wooden" data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Деревянная
															обрешетка</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Изготовление жесткой
																	упаковки индивидуально по размеру груза.
																	Ознакомьтесь с <a href="/trebovanie-k-upakovke/"
																	                  target="_blank"> Перечнем грузов,
																		подлежащих обязательной упаковке в обрешетку
																		(жесткая упаковка)</a> <br>
																		+30% к стоимости межтерминальной перевозки
																</span>
															</span>
														</span>
													</span>
												</label>
												<label for="check10-012"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-012" name="PALET" value="Y"
														       data-stepdata="pack_palet" data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Паллетный
															борт</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Изготовление жесткой
																	упаковки индивидуально по размеру груза.
																	Ознакомьтесь с <a href="/trebovanie-k-upakovke/"
																	                  target="_blank"> Перечнем грузов,
																		подлежащих обязательной упаковке в паллетный
																		борт
																		(жесткая упаковка)</a>  <br>
																		+30% к стоимости межтерминальной перевозки
																</span>
															</span>
														</span>
													</span>
												</label>
												<label for="check10-2"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-2" name="BUBBLE" value="Y"
														       data-stepdata="pack_bubble" data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Пузырчатая
															пленка</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Обеспечивает
																	дополнительную защиту груза от царапин и
																	потертостей. Расход и определение стоимости упаковки
																	возможно только по фактически определяемым
																	параметрам груза при его сдаче.


																</span>
															</span>
														</span>
													</span>
												</label>
												<label for="check10-3"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-3" name="STRETCHFILM"
														       data-stepdata="pack_stretch" data-steptype="source"
														       value="Y">
														<span class="formcheckbox__text" data-text="checkboxtext">Стретч
															пленка</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Обеспечивает
																	дополнительную защиту груза от вмятин и сколов.
																	Расход и определение стоимости упаковки возможно
																	только по фактически определяемым параметрам груза
																	при его сдаче.
																</span>
															</span>
														</span>
													</span>
												</label>
												<label for="check10-4"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-4" name="CORRUGATEDBOARD"
														       value="Y" data-stepdata="pack_gofro"
														       data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Гофрокартон</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Обеспечивает
																	дополнительную защиту груза от царапин и
																	потертостей. Расход и определение стоимости упаковки
																	возможно только по фактически определяемым
																	параметрам груза при его сдаче.

																</span>
															</span>
														</span>
													</span>
												</label>
												<label for="check10-5"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-5" name="BAG" value="Y"
														       data-stepdata="pack_meshkotara" data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Мешкотара</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Используется для
																	упаковки небольших, ценных грузов, партий мелких
																	грузов. Расход и определение стоимости упаковки
																	возможно только по фактически определяемым
																	параметрам груза при его сдаче.
																</span>
															</span>
														</span>
													</span>
												</label>
                                                <? if (1 == 2): ?>
													<label for="check10-6"
													       class="formcheckbox__label formcheckbox__label_type2">
														<span>
															<input type="checkbox" id="check10-6" name=""
															       data-stepdata="pack_pallet" data-steptype="source">
															<span class="formcheckbox__text" data-text="checkboxtext">Паллетный
																борт</span>
														</span>

													</label>
                                                    <? /* <label for="check10-7"
                                                   class="formcheckbox__label formcheckbox__label_type2">
                      <span>
                      <input type="checkbox" id="check10-7" name="">
                      <span  class="formcheckbox__text" data-text="checkboxtext">Паллетирование</span>
                      </span>
                                                <span class="calcheader__help">
                      <span class="help-call">?</span>
                      <span class="help-tooltip">
                      <span class="help-tooltip__content">
                      <span class="help-tooltip__text">подсказка</span>
                      <span class="help-tooltip__info">+8 к защите груза</span>
                      </span>
                      </span>
                      </span>
</label> */ ?>
                                                <? endif; ?>
												<label for="check10-8"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-8" name="InternalRecalculate"
														       data-stepdata="pack_recalc" data-steptype="source"
														       value="Y">
														<span class="formcheckbox__text" data-text="checkboxtext">Пересчет
															внутренних вложений</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">Данная услуга
																подразумевает пересчет внутреннего содержимого грузовых
																мест представителем компании — водителем службы
																доставки, оператором склада или кладовщиком. Пересчет
																проводится в присутствии клиента (грузоотправителя или
																грузополучателя) для того, чтобы принять груз по
																количеству грузовых и внутритарных мест. После процедуры
																грузовые места опечатываются номерными пломбами. При
																заборе груза общее количество внутритарных мест не
																должно превышать 1600 штук. При заборе груза к
																внутритарному пересчету НЕ принимаются стеклянные и
																легкобьющиеся грузы.</span>
														</span>
													</span>
													</span>
												</label>
												<label for="check10-9"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check10-9" name="MARKING" value="Y"
														       data-stepdata="pack_mark" data-steptype="source"
														       checked disabled>
														<span class="formcheckbox__text" data-text="checkboxtext">Маркировка</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Маркировка грузов, в
																	соответствии с действующими стандартами компании,
																	является обязательной услугой, важной с точки зрения
																	идентификации и сохранности содержимого при
																	перевозке сборного груза.
																</span>
															</span>
														</span>
													</span>
												</label>
											</div>
										</div>
										<div class="calcform__title">Доп. услуги</div>
										<div class="formcheckbox">
											<div class="formcheckbox__item">
												<label for="check11-1"
												       class="formcheckbox__label formcheckbox__label_type2">
													<span>
														<input type="checkbox" id="check11-1"
														       name="SendingAccompanyingDocuments" value="Y"
														       data-stepdata="dop_doc" data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Перевозка
															сопроводительных документов</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Упаковка комплекта
																	сопроводительных документов в отдельный конверт и
																	передача их получателю груза.
																</span>
															</span>
														</span>
													</span>
												</label>


												<label for="check11-2" data-entity="doc-checkbox"
												       class="disabled formcheckbox__label formcheckbox__label_type2">
													<span>
														<input disabled type="checkbox" id="check11-2"
														       name="ReturnOfAccompanyingDocuments"
														       value="Y" data-stepdata="dop_return"
														       data-steptype="source">
														<span class="formcheckbox__text" data-text="checkboxtext">Возврат
															документов</span>
													</span>
													<span class="calcheader__help">
														<span class="help-call">?</span>
														<span class="help-tooltip">
															<span class="help-tooltip__content">
																<span class="help-tooltip__text">Возврат оригиналов
																	документов с отметками получателя,
																	подтверждающими
																	выдачу груза.
																</span>
															</span>
														</span>
													</span>
													<span class="disabled-text">Услуга не оказывается по данному
														направлению</span>
												</label>

											</div>
										</div>
									</div>
									<div class="calcform__col calcform__col_2">
										<div class="calcform__rating">
											<span class="calcheader__help calcheader__help_rating">
												<span class="help-tooltip" style="visibility: visible;">
													<span class="help-tooltip__content">
														<span class="help-tooltip__text">Я старался :)</span>
													</span>
												</span>
											</span>
											<div class="calcform__ratingimg">
												<span class="calcform__ratinglevel"
												      style="bottom: calc(75% - 5px);"><span>75%</span></span>
												<svg width="82" height="167" viewBox="0 0 82 167" fill="none"
												     xmlns="http://www.w3.org/2000/svg">
													<linearGradient id="lg" x1="0.5" y1="1" x2="0.5" y2="0">
														<stop offset="0%" stop-opacity="1" stop-color="#33E52F"/>
														<stop offset="75%" stop-opacity="1" stop-color="#33E52F"/>
														<stop offset="75%" stop-opacity="0" stop-color="#33E52F"/>
														<stop offset="100%" stop-opacity="0" stop-color="#33E52F"/>
													</linearGradient>
													<path fill="url(#lg)" opacity="1"
													      d="M74.2871 50.1805L74.2874 50.1823L81.424 95.3717C81.4241 95.3727 81.4242 95.3737 81.4244 95.3747C81.9479 98.9585 79.7078 102.157 76.3924 102.66C73.0665 103.115 69.9337 100.692 69.3612 97.1594C69.3612 97.1591 69.3611 97.1587 69.3611 97.1584L61.8672 49.1819L60.8732 49.2591V159.089C60.8732 162.63 57.8972 165.55 54.2359 165.55H50.4123C46.751 165.55 43.7749 162.63 43.7749 159.089V104.1V103.6H43.2749H38.7375H38.2375V104.1V159.089C38.2375 162.63 35.2615 165.55 31.6002 165.55H27.7766C24.1153 165.55 21.1392 162.63 21.1392 159.089V49.2591L20.1452 49.1819L12.6512 97.1594C12.6512 97.1598 12.6511 97.1602 12.651 97.1605C12.0774 100.747 8.94271 103.162 5.62344 102.661C2.30058 102.158 0.0164128 98.9054 0.587328 95.3792L0.587795 95.3762L7.62321 50.1812L7.62325 50.181C8.75648 42.8771 15.8794 36.8817 23.5451 36.8817H58.3653C66.0324 36.8817 73.1539 42.8286 74.2871 50.1805ZM57.6628 16.7916C57.6628 25.7789 50.213 33.0831 41 33.0831C31.787 33.0831 24.3372 25.7789 24.3372 16.7916C24.3372 7.80424 31.787 0.5 41 0.5C50.213 0.5 57.6628 7.80424 57.6628 16.7916Z"
													      stroke="rgba(37,37,37,0.2)"/>
												</svg>
											</div>
										</div>
										<div class="calcform__scores">
											<div class="calcscores">
												<div class="calcscores__item">
													<div class="calcscores__icon">
														<div class="calcscores__img">
															<img src="<?= ASSETS_PATH ?>/images/score1.svg" alt="">
														</div>
													</div>
													<div class="calcscores__content">
														<div class="calcscores__values">
															<div class="calcscores__text">Точность <span
																		class="onlydesktop">расчёта</span>
															</div>
															<div class="calcscores__value">
																<span>43</span>
																<span> / 100</span>
															</div>
														</div>
														<div class="calcscores__progress">
															<span class="calcscores__current"
															      style="width: 43%; background: #F23F34"></span>
														</div>
													</div>
												</div>
												<div class="calcscores__item">
													<div class="calcscores__icon">
														<div class="calcscores__img">
															<img src="<?= ASSETS_PATH ?>/images/score2.svg" alt="">
														</div>
													</div>
													<div class="calcscores__content">
														<div class="calcscores__values">
															<div class="calcscores__text">Защита <span
																		class="onlydesktop">груза</span>
															</div>
															<div class="calcscores__value">
																<span>88</span>
																<span> / 100</span>
															</div>
														</div>
														<div class="calcscores__progress">
															<span class="calcscores__current"
															      style="width: 88%; background: #08A4FC"></span>
														</div>
													</div>
												</div>
												<div class="calcscores__item">
													<div class="calcscores__icon">
														<div class="calcscores__img">
															<img src="<?= ASSETS_PATH ?>/images/score3.svg" alt="">
														</div>
													</div>
													<div class="calcscores__content">
														<div class="calcscores__values">
															<div class="calcscores__text">Комфорт</div>
															<div class="calcscores__value">
																<span>21</span>
																<span> / 100</span>
															</div>
														</div>
														<div class="calcscores__progress">
															<span class="calcscores__current"
															      style="width: 21%; background: #1BBA02"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-step" data-entity="form-step-2" style="display:none;">
				<div class="calcpage__block calcitem calcitem_edit">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/info.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Данные перевозки и параметры груза</span>
							</div>
							<div class="calcheader__info calcheader__info_edit">
								<div class="calcinfo">
									<div class="calcinfo__icon">
										<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/edit.svg" alt="">
										</div>
									</div>
									<div class="calcinfo__edit"><a href="#"> Изменить</a></div>
									<!-- /.calcinfo__edit -->
								</div>
							</div>
						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform">
							<div class="calcform__content">
								<div class="calcform__fromto fromto">
									<div class="fromto__cols">
										<div class="fromto__col">
											<div class="fromto__item fromto__item_from">
												<div class="fromto__icon">
													<div class="fromto__img">
														<img src="/images/fromto.svg" alt="">
													</div>
													<!-- /.fromto__img -->
												</div>
												<!-- /.fromto__icon -->
												<div class="fromto__content">
													<div class="fromto__title" data-stepdata="f_otpravki"
													     data-steptype="result"></div>
													<!-- /.fromto__title -->
													<div class="fromto__descr">
														<p data-stepdata="p_otpravki" data-steptype="result"></p>
														<p>Филиал - <span data-stepdata="f_otpravki"
														                  data-steptype="result"></span></p>
													</div>
													<!-- /.fromto__descr -->
												</div>
												<!-- /.fromto__content -->
											</div>
											<!-- /.fromto__from -->
										</div>
										<!-- /.fromto__col -->
										<div class="fromto__col">
											<div class="fromto__item fromto__item_to">
												<div class="fromto__icon">
													<div class="fromto__img">
														<img src="/images/fromto.svg" alt="">
													</div>
													<!-- /.fromto__img -->
												</div>
												<!-- /.fromto__icon -->
												<div class="fromto__content">
													<div class="fromto__title" data-stepdata="f_dostavki"
													     data-steptype="result"></div>
													<!-- /.fromto__title -->
													<div class="fromto__descr">
														<p data-stepdata="p_dostavki" data-steptype="result"></p>
														<p>Филиал - <span data-stepdata="f_dostavki"
														                  data-steptype="result"></span></p>
													</div>
													<!-- /.fromto__descr -->
												</div>
												<!-- /.fromto__content -->
											</div>
											<!-- /.fromto__from -->
										</div>
									</div>
									<!-- /.calcitem__totals -->
									<!-- /.fromto__cols -->
								</div>
								<!-- /.calcform__fromto -->
								<hr>
								<!-- <div class="calcitem__totals">
									<div class="calctotal">
										<div class="calctotal__title">Общие параметры груза:</div>
										<div class="calctotal__value" data-stepdata="f_dostavki" data-steptype="result">
											Мест 1,
											вес 1 кг,
											обьем 0.01 м2</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
				<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/userform.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Отправитель</span>
							</div>

						</div>
						<div class="calctabs-js">
							<ul>

								<label class="active" for="send_yur">Юридическое лицо <input data-radiotab="tab"
								                                                             type="radio"
								                                                             data-isrequired="delivery-address"
								                                                             value="Y"
								                                                             id="send_yur"
								                                                             checked
								                                                             name="sendfizyur"></label>
								<label class="" for="send_fiz">Физическое лицо <input data-radiotab="tab"
								                                                      type="radio"
								                                                      value="N"
								                                                      id="send_fiz"
								                                                      name="sendfizyur"
									>
								</label>
							</ul>

						</div>
					</div>
					<div class="calcitem__content">

						<div class="calcform calcform-js active" data-stepvisible="send_yur">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_two">
										<div class="calcform__item calcform__item_small">
											<div class="calcform__title">Правовая форма</div>
											<select name="U_FORM" id="" data-stepdata="send_yurform"
											        data-steptype="source">
												<option value="ООО" selected>ООО</option>
												<option value="ОАО">ОАО</option>
												<option value="ЗАО">ЗАО</option>
												<option value="ИП">ИП</option>
											</select>
											<!-- /# -->
										</div>

										<div class="calcform__item calcform__item_notsmall">
											<div class="calcform__title">Название компании</div>
											<input type="text" name="U_COMPANY" placeholder="Название компании"
											       data-stepdata="send_yurname" data-steptype="source"
											       data-required="required" data-min="2" data-max="300">
										</div>

									</div>


									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">ИНН</div>
											<input type="text"
											       name="U_INN"
											       placeholder="ИНН" data-stepdata="send_inn" data-steptype="source"
											       data-required="required" data-min="13" data-max="13">

											<!-- /.calcform__addTel -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">КПП</span>
												<!-- /.notreq -->
											</div>
											<div class="calcform__multipleInput">
												<input type="text"
												       name="U_KPP"
												       placeholder="КПП" data-stepdata="send_kpp" data-steptype="source"
												       data-min="1" data-max="9">
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item ">
											<div class="calcform__title">Контактное лицо</div>
											<input type="text"
											       name="U_FIO"
											       placeholder="ФИО лица" data-stepdata="send_yurfio"
											       data-steptype="source" data-min="3"
											       data-max="300">

											<!-- /.calcform__addTel -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">Телефон</span>
												<!-- /.notreq -->
											</div>
											<div class="calcform__multipleInput">
												<input type="tel"
												       name="U_PHONE[]"
												       placeholder="Телефон" data-stepdata="send_yurtel"
												       data-steptype="source" data-required="required" data-min="18"
												       data-max="18">
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Email</div>
											<input type="email"
											       name="U_EMAIL"
											       placeholder="Emal" data-stepdata="send_email"
											       data-steptype="source" data-required="required" data-min="3"
											       data-max="300">
											<!-- /.calcform__addTel -->
										</div>
										<div class="calcform__item">
											<div class="calcform__title"></div>
											<div class="calcitem__info calcitem__info_red">
												<img src="/images/info2.svg" alt=""><br><span>Обязательно нужна <a
															href="https://azlog.ru/documents/%D0%94%D0%BE%D0%B2%D0%B5%D1%80%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C%20%D0%BD%D0%B0%20%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D1%83%20%D0%B8%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D1%80%D1%83%D0%B7%D0%BE%D0%B2.pdf"
															target="_blank">доверенность</a> <br> на
													отправку или получение груза</span>
											</div>
											<!-- /.calcitem__info -->
										</div>

									</div>


								</div>


							</div>
						</div>


						<div class="calcform calcform-js " data-stepvisible="send_fiz">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_full">
										<div class="calcform__item">
											<div class="calcform__title">ФИО</div>
											<input type="text" placeholder=""
											       name="F_FIO"
											       data-stepdata="send_fio" data-steptype="source"
											       data-required="required" data-min="2" data-max="300">
										</div>
									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Документ</div>
											<select name="F_DOCTYPE" id="" data-select=" $sendParams['INFO_TEXT']oc"
											        data-stepdata="send_doc" data-steptype="source">
												<option value="Паспорт РФ" data-select="passport">Паспорт РФ</option>
												<option value="Водительское удостоверение" data-select="doc">
													Водительское удостоверение
												</option>
												<option value="Иностранный паспорт" data-select="doc">Иностранный
													паспорт
												</option>
												<option value="Удостоверение личности офицера" data-select="doc">
													Удостоверение личности офицера
												</option>
												<option value="Паспорт моряка" data-select="doc">Паспорт моряка</option>
												<option value="Загран. паспорт" data-select="doc">Загран. паспорт
												</option>
												<option value="Военный билет" data-select="doc">Военный билет</option>

											</select>
											<!-- /# -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">Номер документа</div>
											<div class="calcform__multipleInput" data-select="input_doc">
												<div class="inputDoc calcform__multipleInput" data-select="passport">
													<input type="text" name="F_PASS_1" placeholder="СССС"
													       class="inputPassport1" data-steptype="source"
													       data-stepdata="send_pasp1" data-required="required"
													       data-min="4" data-max="4">
													<input type="text" name="F_PASS_2" placeholder="000000"
													       class="inputPassport2" data-steptype="source"
													       data-stepdata="send_pasp2" data-required="required"
													       data-min="6" data-max="6">
												</div>
												<div class="inputDoc " data-select="doc"
												     style="display: none; width: 100%;">
													<input type="text"
													       name="F_DOC"
													       placeholder="" class="inputDocument" style="width: 100%;"
													       data-steptype="source" data-stepdata="send_anotherdoc"
													       data-steptype="source" data-required="required" data-min="3"
													       data-max="30">
												</div>
											</div>
											<!-- /.calcform__multipleInput -->

										</div>


									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item calcform__item_phones">
											<div class="calcform__title">Телефон</div>
											<input type="tel" name="F_PHONE[]" data-stepdata="send_tel"
											       data-steptype="source" data-required="required" data-min="18"
											       data-max="18">
											<span data-click="newtel" class="calcform__addTel">
												<img src="/images/addTel.svg" alt=""><span>Добавить номер
													телефона</span>
											</span>
											<div class="tel2">
												<input type="tel" name="F_PHONE[]" data-stepdata="send_tel2"
												       data-steptype="source" data-required="required" data-min="18"
												       data-max="18">
											</div>
											<!-- /.calcform__addTel -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">E-mail <span
														class="notreq">(необязательно)</span>
												<!-- /.notreq -->
											</div>
											<div class="calcform__multipleInput">
												<input type="text" name="F_EMAIL" data-stepdata="send_email"
												       data-steptype="source">
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>
								</div>
							</div>
						</div>


					</div>
					<!-- /.calcitem__content -->
				</div>
				<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/userform.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Получатель</span>
							</div>

						</div>
						<div class="calctabs-js">
							<ul>
								<label class="active" for="receive_yur">Юридическое лицо <input data-radiotab="tab"
								                                                                type="radio"
								                                                                data-isrequired="delivery-address"
								                                                                value="Y"
								                                                                id="receive_yur"
								                                                                checked
								                                                                name="receivefizyur"></label>
								<label class="" for="receive_fiz">Физическое лицо <input data-radiotab="tab"
								                                                         type="radio"
								                                                         value="N"
								                                                         id="receive_fiz"
								                                                         name="receivefizyur"
									>
								</label>

							</ul>
						</div>
					</div>
					<div class="calcitem__content">

						<div class="calcform calcform-js active" data-stepvisible="receive_yur">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_two">
										<div class="calcform__item calcform__item_small">
											<div class="calcform__title">Правовая форма</div>
											<select name="R_U_FORM" id="" data-stepdata="receive_yurform"
											        data-steptype="source">
												<option value="ООО" selected>ООО</option>
												<option value="ОАО">ОАО</option>
												<option value="ЗАО">ЗАО</option>
												<option value="ИП">ИП</option>
											</select>
											<!-- /# -->
										</div>

										<div class="calcform__item calcform__item_notsmall">
											<div class="calcform__title">Название компании</div>
											<input type="text"
											       name="R_U_COMPANY"
											       placeholder="Название компании" data-stepdata="receive_yurname"
											       data-steptype="source" data-required="required" data-min="3"
											       data-max="300">
										</div>

									</div>


									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">ИНН</div>
											<input type="text"
											       name="R_U_INN"
											       placeholder="ИНН" data-stepdata="receive_yurinn"
											       data-steptype="source" data-required="required" data-min="13"
											       data-max="13">

											<!-- /.calcform__addTel -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">КПП</span>
												<!-- /.notreq -->
											</div>
											<div class="calcform__multipleInput">
												<input type="text"
												       name="R_U_KPP"
												       placeholder="КПП" data-stepdata="receive_yurkpp"
												       data-steptype="source" data-min="9"
												       data-max="9">
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item ">
											<div class="calcform__title">Контактное лицо</div>
											<input type="text"
											       name="R_U_FIO"
											       placeholder="ФИО лица" data-stepdata="receive_yurfio"
											       data-steptype="source" data-min="3"
											       data-max="300">

											<!-- /.calcform__addTel -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">Телефон</span>
												<!-- /.notreq -->
											</div>
											<div class="calcform__multipleInput">
												<input type="tel"
												       name="R_U_PHONE[]"
												       placeholder="Телефон" data-stepdata="receive_yurtel"
												       data-steptype="source" data-required="required" data-min="18"
												       data-max="18">
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Email</div>
											<input type="email"
											       name="R_U_EMAIL"
											       placeholder="Email" data-stepdata="receive_email"
											       data-steptype="source" data-required="required" data-min="13"
											       data-max="13">

											<!-- /.calcform__addTel -->
										</div>
										<div class="calcform__item">
											<div class="calcform__title"></div>
											<div class="calcitem__info calcitem__info_red">
												<img src="/images/info2.svg" alt=""><br><span>Обязательно нужна <a
															href="https://azlog.ru/documents/%D0%94%D0%BE%D0%B2%D0%B5%D1%80%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C%20%D0%BD%D0%B0%20%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D1%83%20%D0%B8%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D1%80%D1%83%D0%B7%D0%BE%D0%B2.pdf"
															target="_blank">доверенность</a> <br> на
													отправку или получение груза</span>
											</div>
											<!-- /.calcitem__info -->
										</div>
									</div>

								</div>


							</div>
						</div>

						<div class="calcform calcform-js " data-stepvisible="receive_fiz">
							<div class="calcform__content">
								<div class="calcform__inputs">
									<div class="calcform__items calcform__items_full">
										<div class="calcform__item">
											<div class="calcform__title">ФИО</div>
											<input type="text" name="R_F_FIO" placeholder="" data-stepdata="receive_fio"
											       data-steptype="source" data-required="required" data-min="3"
											       data-max="300">
										</div>
									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item">
											<div class="calcform__title">Документ</div>
											<select name="R_F_DOCTYPE" id="" data-select="select_doc"
											        data-stepdata="receive_selectdoc" data-steptype="source">
												<option value="Паспорт РФ" data-select="passport">Паспорт РФ</option>
												<option value="Водительское удостоверение" data-select="doc">
													Водительское удостоверение
												</option>
												<option value="Иностранный паспорт" data-select="doc">Иностранный
													паспорт
												</option>
												<option value="Удостоверение личности офицера" data-select="doc">
													Удостоверение личности офицера
												</option>
												<option value="Паспорт моряка" data-select="doc">Паспорт моряка</option>
												<option value="Загран. паспорт" data-select="doc">Загран. паспорт
												</option>
												<option value="Военный билет" data-select="doc">Военный билет</option>

											</select>
											<!-- /# -->
											<br>
											<div class="formcheckbox">
												<div class="formcheckbox__item">
													<label for="R_F_LATER" class="formcheckbox__label"><span>
															<input type="checkbox" id="R_F_LATER"
															       name="R_F_LATER"
															       value="Y"
															       data-stepdata="payer_check"
															       data-required="required"
															       data-steptype="source">
															<span class="formcheckbox__text"
															      data-text="checkboxtext"
															      style="white-space: initial;"
															      data-text="checkboxtext">Данные документа
																будут предоставлены при отправке груза</span>
														</span>
													</label>
												</div>
											</div>
										</div>


										<div class="calcform__item">
											<div class="calcform__title">Номер документа</div>
											<div class="calcform__multipleInput" data-select="input_doc">
												<div class="inputDoc calcform__multipleInput" data-select="passport">
													<input type="text" placeholder="СССС"
													       name="R_F_PASS_1"
													       class="inputPassport1" data-stepdata="receive_pasp1"
													       data-steptype="source" data-required="required" data-min="4"
													       data-max="4">
													<input type="text" placeholder="000000"
													       name="R_F_PASS_2"
													       class="inputPassport2" data-stepdata="receive_pasp2"
													       data-steptype="source" data-required="required" data-min="6"
													       data-max="6">
												</div>
												<div class="inputDoc " data-select="doc"
												     style="display: none; width: 100%;">
													<input type="text"
													       name="R_F_DOC"
													       placeholder="" class="inputDocument" style="width: 100%;"
													       data-stepdata="receive_anotherdoc" data-steptype="source"
													       data-required="required" data-min="3" data-max="30">
												</div>
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>

									<div class="calcform__items calcform__items_two">
										<div class="calcform__item calcform__item_phones">
											<div class="calcform__title">Телефон</div>
											<input type="tel" name="R_F_PHONE[]" data-stepdata="receive_tel"
											       data-steptype="source" data-required="required" data-min="18"
											       data-max="18">
											<span data-click="newtel" class="calcform__addTel">
												<img src="/images/addTel.svg" alt=""><span>Добавить номер
													телефона</span>
											</span>
											<div class="tel2">
												<input type="tel"
												       name="R_F_PHONE[]"
												       data-stepdata="receive_tel2" data-steptype="source"
												       data-required="required" data-min="18" data-max="18">
											</div>
											<!-- /.calcform__addTel -->
										</div>

										<div class="calcform__item">
											<div class="calcform__title">E-mail <span
														class="notreq">(необязательно)</span>
												<!-- /.notreq -->
											</div>
											<div class="calcform__multipleInput">
												<input type="text" name="R_F_EMAIL" data-stepdata="receive_fio"
												       data-steptype="source">
											</div>
											<!-- /.calcform__multipleInput -->

										</div>

									</div>
								</div>
							</div>
						</div>


					</div>
					<!-- /.calcitem__content -->
				</div>
				<div class="calcpage__block calcitem calctabs calcitem_tabs-js">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/CardPayment.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Платеж</span>
							</div>

						</div>
						<!--  <div class="calctabs calctabs-js">
                           <ul>
                             <li class="active">Один плательщик</li>
                             <li class="">Несколько плательщиков</li>
                           </ul>
                         </div> -->
					</div>
					<div class="calcitem__content">
						<div class="calcform calcform-js active" data-stepvisible="anyway">
							<div class="calcform__content">
								<!-- <div class="calcform__services">
                                  <div class="calcservices">
                                    <div class="calcservices__item">
                                      <div class="calcservices__row">
                                        <div class="calcprice calcprice_type2">
                                          <div class="calcprice__items">
                                            <div class="calcprice__params">
                                              <ul class="calcprice-params">
                                                <li>
                                                  <span class="calcprice-params_left">
                                                    <span><span>Забор груза</span></span>
                                                  </span>
                                                  <span class="calcprice-params_right ">1 022 Р </span>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="calcservices__info">
                                        <p>Стоимость межтерминальной перевозки по основному направлению, стоимость упаковки
                                          груза и стоимость груза и стоимость страховки</p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="calcservices__item">
                                      <div class="calcservices__row">
                                        <div class="calcprice calcprice_type2">
                                          <div class="calcprice__items">
                                            <div class="calcprice__params">
                                              <ul class="calcprice-params">
                                                <li>
                                                  <span class="calcprice-params_left">
                                                    <span><span>Услуги терминала-отправителя</span></span>
                                                  </span>
                                                  <span class="calcprice-params_right ">1 022 Р </span>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="calcservices__info">
                                        <p>Стоимость межтерминальной перевозки по основному направлению, стоимость упаковки
                                          груза и стоимость груза и стоимость страховки</p>
                                      </div>
                                    </div>
                                    <hr>
                                    <div class="calcservices__item">
                                      <div class="calcservices__row">
                                        <div class="calcprice calcprice_type2">
                                          <div class="calcprice__items">
                                            <div class="calcprice__params">
                                              <ul class="calcprice-params">
                                                <li>
                                                  <span class="calcprice-params_left">
                                                    <span><span>Доставка груза</span></span>
                                                  </span>
                                                  <span class="calcprice-params_right ">1 022 Р </span>
                                                </li>
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="calcservices__info">
                                        <p>Стоимость межтерминальной перевозки по основному направлению, стоимость упаковки
                                          груза и стоимость груза и стоимость страховки</p>
                                      </div>
                                    </div>
                                  </div>
                                </div> -->
								<!-- /.calcform__services -->
								<!--  <hr> -->
								<div class="calcform__items calcform__items_full">
									<div class="calcform__item">
										<div class="calcform__title">Плательщик</div>
										<select name="PAYER" id="" data-payer="payer" data-stepdata="payeer"
										        data-steptype="source">
											<option value="Отправитель" data-payer="1">Отправитель</option>
											<option value="Получатель" data-payer="2">Получатель</option>
											<option value="Третье лицо" data-payer="3">Третье лицо</option>


										</select>
										<!-- /# -->
									</div>


								</div>


								<div data-payerform="3" style="display: none;">
									<div class="calcitem__content">
                                        <? if (1 == 2): ?>
                                            <? //не понял зачем тут это находится, нигде не показывается ?>
											<div class="calcform calcform-js" data-stepvisible="receive_fiz">
												<div class="calcform__content">
													<div class="calcform__inputs">
														<div class="calcform__items calcform__items_full">
															<div class="calcform__item">
																<div class="calcform__title">ФИО</div>
																<input type="text" name="R_F_FIO_z" placeholder=""
																       data-stepdata="receive_fio"
																       data-steptype="source" data-required="required"
																       data-min="3" data-max="300" class="">
															</div>
														</div>

														<div class="calcform__items calcform__items_two">
															<div class="calcform__item">
																<div class="calcform__title">Документ</div>
																<select name="R_F_DOCTYPE" id=""
																        data-select="select_doc"
																        data-stepdata="receive_selectdoc"
																        data-steptype="source">
																	<option value="Паспорт РФ" data-select="passport">
																		Паспорт РФ
																	</option>
																	<option value="Водительское удостоверение"
																	        data-select="doc">Водительское удостоверение
																	</option>
																	<option value="Иностранный паспорт"
																	        data-select="doc">Иностранный паспорт
																	</option>
																	<option value="Удостоверение личности офицера"
																	        data-select="doc">Удостоверение личности
																		офицера
																	</option>
																	<option value="Паспорт моряка" data-select="doc">
																		Паспорт моряка
																	</option>
																	<option value="Загран. паспорт" data-select="doc">
																		Загран. паспорт
																	</option>
																	<option value="Военный билет" data-select="doc">
																		Военный билет
																	</option>

																</select>
																<!-- /# -->
															</div>

															<div class="calcform__item">
																<div class="calcform__title">Номер документа</div>
																<div class="calcform__multipleInput"
																     data-select="input_doc">
																	<div class="inputDoc calcform__multipleInput"
																	     data-select="passport">
																		<input type="text" placeholder="СССС"
																		       name="R_PASS_1" class="inputPassport1"
																		       data-stepdata="receive_pasp1"
																		       data-steptype="source"
																		       data-required="required" data-min="4"
																		       data-max="4">
																		<input type="text" placeholder="000000"
																		       name="R_PASS_2" class="inputPassport2"
																		       data-stepdata="receive_pasp2"
																		       data-steptype="source"
																		       data-required="required" data-min="6"
																		       data-max="6">
																	</div>
																	<div class="inputDoc " data-select="doc"
																	     style="display: none; width: 100%;">
																		<input type="text" name="R_F_DOC" placeholder=""
																		       class="inputDocument"
																		       style="width: 100%;"
																		       data-stepdata="receive_anotherdoc"
																		       data-steptype="source"
																		       data-required="required" data-min="3"
																		       data-max="30">
																	</div>
																</div>
																<!-- /.calcform__multipleInput -->

															</div>

														</div>

														<div class="calcform__items calcform__items_two">
															<div class="calcform__item calcform__item_phones">
																<div class="calcform__title">Телефон</div>
																<input type="tel" name="R_F_PHONE[]"
																       data-stepdata="receive_tel"
																       data-steptype="source" data-required="required"
																       data-min="18" data-max="18" class="">
																<span data-click="newtel" class="calcform__addTel">
																	<img src="/images/addTel.svg" alt=""><span>Добавить
																		номер
																		телефона</span>
																</span>
																<div class="tel2">
																	<input type="tel" name="R_F_PHONE[]"
																	       data-stepdata="receive_tel2"
																	       data-steptype="source"
																	       data-required="required" data-min="18"
																	       data-max="18">
																</div>
																<!-- /.calcform__addTel -->
															</div>

															<div class="calcform__item">
																<div class="calcform__title">E-mail <span
																			class="notreq">(необязательно)</span>
																	<!-- /.notreq -->
																</div>
																<div class="calcform__multipleInput">
																	<input type="text" name="R_F_EMAIL"
																	       data-stepdata="receive_fio"
																	       data-steptype="source">
																</div>
																<!-- /.calcform__multipleInput -->

															</div>

														</div>
													</div>
												</div>
											</div>
                                        <? endif; ?>
										<div class="calcform__content">
											<div class="calcform__inputs">
												<div class="calcform__items calcform__items_two">
													<div class="calcform__item calcform__item_small">
														<div class="calcform__title">Правовая форма</div>
														<select name="P_DOCTYPE" id="" data-stepdata="receive_yurform"
														        data-steptype="source">
															<option value="ООО">ООО</option>
															<option value="ОАО">ОАО</option>
															<option value="ЗАО">ЗАО</option>
															<option value="ИП">ИП</option>
														</select>
														<!-- /# -->
													</div>

													<div class="calcform__item calcform__item_notsmall">
														<div class="calcform__title">Название компании</div>
														<input type="text" name="P_COMPANY"
														       placeholder="Название компании"
														       data-stepdata="receive_yurname" data-steptype="source"
														       data-required="required" data-min="3" data-max="300"
														       class="error">
													</div>

												</div>


												<div class="calcform__items calcform__items_two">
													<div class="calcform__item">
														<div class="calcform__title">ИНН</div>
														<input type="text" name="P_INN" placeholder="ИНН"
														       data-stepdata="receive_yurinn" data-steptype="source"
														       data-required="required" data-min="13" data-max="13"
														       class="error">

														<!-- /.calcform__addTel -->
													</div>

													<div class="calcform__item">
														<div class="calcform__title">КПП
															<!-- /.notreq -->
														</div>
														<div class="calcform__multipleInput">
															<input type="text" name="P_KPP" placeholder="КПП"
															       data-stepdata="receive_yurkpp" data-steptype="source"
															       data-min="9" data-max="9" class="error">
														</div>
														<!-- /.calcform__multipleInput -->

													</div>

												</div>

												<div class="calcform__items calcform__items_two">
													<div class="calcform__item ">
														<div class="calcform__title">Контактное лицо</div>
														<input type="text" name="P_FIO" placeholder="ФИО лица"
														       data-stepdata="receive_yurfio" data-steptype="source"
														       data-min="3" data-max="300" class="error">

														<!-- /.calcform__addTel -->
													</div>

													<div class="calcform__item">
														<div class="calcform__title">Телефон
															<!-- /.notreq -->
														</div>
														<div class="calcform__multipleInput">
															<input type="tel" name="P_PHONE[]" placeholder="Телефон"
															       data-stepdata="receive_yurtel" data-steptype="source"
															       data-required="required" data-min="18" data-max="18"
															       class="error">
														</div>
														<!-- /.calcform__multipleInput -->

													</div>

												</div>
												<div class="calcform__items calcform__items_two">
													<div class="calcform__item">
														<div class="calcform__title">Email</div>
														<input type="email" name="P_EMAIL" placeholder="Email"
														       data-stepdata="receive_email" data-steptype="source"
														       data-required="required" data-min="3"
														       class="error"
														<!-- /.calcform__addTel -->
													</div>
													<div class="calcform__item">
														<div class="calcform__title"></div>
														<div class="calcitem__info calcitem__info_red">
															<img src="/images/info2.svg" alt=""><br><span>Обязательно
																нужна <a
																		href="https://azlog.ru/documents/%D0%94%D0%BE%D0%B2%D0%B5%D1%80%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D1%8C%20%D0%BD%D0%B0%20%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BA%D1%83%20%D0%B8%20%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20%D0%B3%D1%80%D1%83%D0%B7%D0%BE%D0%B2.pdf"
																		target="_blank">доверенность</a> <br>
																на
																отправку или получение груза</span>
														</div>
														<!-- /.calcitem__info -->
													</div>
												</div>

											</div>


										</div>
									</div>

									<!-- <div class="calcform__content">
                                        <div class="calcform__inputs">
                                            <div class="calcform__items calcform__items_full">
                                                <div class="calcform__item">
                                                    <div class="calcform__title">ФИО</div>
                                                    <input type="text"
                                                           name="P_FIO"
                                                           placeholder="" data-stepdata="payer_fio"
                                                           data-required="required" data-steptype="source" data-min="2"
                                                           data-max="300">
                                                </div>
                                            </div>

                                            <div class="calcform__items calcform__items_two">
                                                <div class="calcform__item">
                                                    <div class="calcform__title">Документ</div>
                                                    <select name="P_DOCTYPE" id="" data-select="select_doc"
                                                            data-stepdata="payer_doc" data-steptype="source">
                                                        <option value="Паспорт РФ" data-select="passport">Паспорт РФ</option>
                                                        <option value="Водительское удостоверение" data-select="doc">Водительское удостоверение
                                                        </option>
                                                        <option value="Иностранный паспорт" data-select="doc">Иностранный паспорт</option>
                                                        <option value="Удостоверение личности
                                                            офицера" data-select="doc">Удостоверение личности
                                                            офицера
                                                        </option>
                                                        <option value="Паспорт моряка" data-select="doc">Паспорт моряка</option>
                                                        <option value="Загран. паспорт" data-select="doc">Загран. паспорт</option>
                                                        <option value="Военный билет" data-select="doc">Военный билет</option>

                                                    </select>
                                                </div>

                                                <div class="calcform__item">
                                                    <div class="calcform__title">Номер документа</div>
                                                    <div class="calcform__multipleInput" data-select="input_doc">
                                                        <div class="inputDoc calcform__multipleInput"
                                                             data-select="passport">
                                                            <input type="text"
                                                                   name="P_PASS_1"
                                                                   placeholder="СССС" class="inputPassport1"
                                                                   data-stepdata="payer_pasp1" data-steptype="source"
                                                                   data-required="required" data-min="4" data-max="4">
                                                            <input type="text"
                                                                   name="P_PASS_2"
                                                                   placeholder="0000000" class="inputPassport2"
                                                                   data-stepdata="payer_pasp2" data-steptype="source"
                                                                   data-required="required" data-min="6" data-max="6">
                                                        </div>
                                                        <div class="inputDoc " data-select="doc"
                                                             style="display: none; width: 100%;">
                                                            <input type="text"
                                                                   name="P_DOC"
                                                                   placeholder="" class="inputDocument"
                                                                   style="width: 100%;" data-stepdata="payer_anotherdoc"
                                                                   data-steptype="source" data-required="required"
                                                                   data-min="3" data-max="30">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="calcform__items calcform__items_two"
                                                 style="align-items: center;">
                                                <div class="calcform__item calcform__item_phones">
                                                    <div class="calcform__title">Телефон</div>
                                                    <input type="tel"
                                                           name="P_PHONE[]"
                                                           data-stepdata="payer_tel" data-required="required"
                                                           data-steptype="source" data-min="18" data-max="18">
                                                    <span data-click="newtel" class="calcform__addTel">
                                                        <img src="/images/addTel.svg" alt=""><span>Добавить номер
                                                            телефона</span>
                                                    </span>
                                                    <div class="tel2">
                                                        <input type="tel"
                                                               name="P_PHONE[]"
                                                               data-stepdata="payer_tel2" data-steptype="source"
                                                               data-required="required" data-min="18" data-max="18">
                                                    </div>
                                                </div>

                                                <div class="calcform__item">
                                                    <div class="formcheckbox">
                                                        <div class="formcheckbox__item">
                                                            <label for="check1-payer" class="formcheckbox__label"><span>
                                                                    <input type="checkbox" id="check1-payer"
                                                                           name="check1-payer"
                                                                           data-stepdata="payer_check"
                                                                           data-required="required"
                                                                           data-steptype="source">
                                                                    <span class="formcheckbox__text"
                                                                          data-text="checkboxtext"
                                                                          style="white-space: initial;"
                                                                          data-text="checkboxtext">Данные документа
                                                                        будут предоставлены при отправке груза</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> -->
								</div>


							</div>
						</div>
						<!-- <div class="calcform calcform-js">
                          <div class="calcform__content">
                            <div class="calcform__services">
                              <div class="calcservices">
                                <div class="calcservices__item">
                                  <div class="calcservices__row">
                                    <div class="calcprice calcprice_type2">
                                      <div class="calcprice__items">
                                        <div class="calcprice__params">
                                          <ul class="calcprice-params">
                                            <li>
                                              <span class="calcprice-params_left">
                                                <span><span>Забор груза</span></span>
                                              </span>
                                              <span class="calcprice-params_right ">1 022 Р </span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="calcservices__info">
                                    <p>Стоимость межтерминальной перевозки по основному направлению, стоимость упаковки
                                      груза и стоимость груза и стоимость страховки</p>
                                  </div>
                                  <div class="calcform__items calcform__items_full">
                                    <div class="calcform__item">
                                      <div class="calcform__title">Плательщик</div>
                                      <select name="" id="">
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>


                                      </select>
                                    </div>


                                  </div>
                                </div>
                                <hr>
                                <div class="calcservices__item">
                                  <div class="calcservices__row">
                                    <div class="calcprice calcprice_type2">
                                      <div class="calcprice__items">
                                        <div class="calcprice__params">
                                          <ul class="calcprice-params">
                                            <li>
                                              <span class="calcprice-params_left">
                                                <span><span>Услуги терминала-отправителя</span></span>
                                              </span>
                                              <span class="calcprice-params_right ">1 022 Р </span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="calcservices__info">
                                    <p>Стоимость межтерминальной перевозки по основному направлению, стоимость упаковки
                                      груза и стоимость груза и стоимость страховки</p>
                                  </div>
                                  <div class="calcform__items calcform__items_full">
                                    <div class="calcform__item">
                                      <div class="calcform__title">Плательщик</div>
                                      <select name="" id="">
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>


                                      </select>
                                    </div>


                                  </div>
                                </div>
                                <hr>
                                <div class="calcservices__item">
                                  <div class="calcservices__row">
                                    <div class="calcprice calcprice_type2">
                                      <div class="calcprice__items">
                                        <div class="calcprice__params">
                                          <ul class="calcprice-params">
                                            <li>
                                              <span class="calcprice-params_left">
                                                <span><span>Доставка груза</span></span>
                                              </span>
                                              <span class="calcprice-params_right ">1 022 Р </span>
                                            </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="calcservices__info">
                                    <p>Стоимость межтерминальной перевозки по основному направлению, стоимость упаковки
                                      груза и стоимость груза и стоимость страховки</p>
                                  </div>
                                  <div class="calcform__items calcform__items_full">
                                    <div class="calcform__item">
                                      <div class="calcform__title">Плательщик</div>
                                      <select name="" id="">
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>
                                        <option value="">Получатель</option>


                                      </select>
                                    </div>


                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div> -->
					</div>
				</div>

				<!--  <div class="calcpage__block calcitem">
                    <div class="calcitem__content">
                        <div class="calcpage__navs">
                            <div class="calcpage__nav">
                                <a href="#" data-entity="step-prev" class="btn_main btn_main_gray btn_submit">Назад</a>
                            </div>

                            <div class="calcpage__nav">
                                <a href="#" data-entity="step-next" class="btn_main btn_main_blue btn_submit">Последний
                                    шаг</a>
                            </div>
                        </div>
                    </div>
                </div> -->
			</div>
			<div class="form-step" data-entity="form-step-3" style="display: none" ;>
				<div class="calcpage__block calcitem calcitem_edit">
					<div class="calcitem__header">
						<div class="calcheader">
							<div class="calcheader__title">
								<div class="calcheader__icon">
									<div class="calcheader__image">
										<img src="<?= ASSETS_PATH ?>/images/info.svg" alt="">
									</div>
								</div>
								<span class="calcheader__name">Расчет и оформление заказа</span>
							</div>

						</div>
					</div>
					<div class="calcitem__content">
						<div class="calcform">
							<div class="calcform__content">
								<div class="calcform__fromto fromto">
									<div class="calcheader__info calcheader__info_edit">
										<div class="calcinfo">
											<div class="calcinfo__icon">
												<div class="calcinfo__img"><img src="<?= ASSETS_PATH ?>/images/edit.svg"
												                                alt=""></div>
											</div>
											<div class="calcinfo__edit"><a href="#"> Изменить</a></div>
											<!-- /.calcinfo__edit -->
										</div>
									</div>
									<div class="fromto__cols">
										<div class="fromto__col">
											<div class="fromto__item fromto__item_from">
												<div class="fromto__icon">
													<div class="fromto__img">
														<img src="/images/fromto.svg" alt="">
													</div>
													<!-- /.fromto__img -->
												</div>
												<!-- /.fromto__icon -->
												<div class="fromto__content">
													<div class="fromto__title" data-stepdata="f_otpravki"
													     data-steptype="result"></div>
													<!-- /.fromto__title -->
													<div class="fromto__descr">
														<p data-stepdata="p_otpravki" data-steptype="result"></p>
														<p>Филиал - <span data-stepdata="f_otpravki"
														                  data-steptype="result"></span></p>
													</div>
													<!-- /.fromto__descr -->
												</div>
												<!-- /.fromto__content -->
											</div>
											<!-- /.fromto__from -->
										</div>
										<!-- /.fromto__col -->
										<div class="fromto__col">
											<div class="fromto__item fromto__item_to">
												<div class="fromto__icon">
													<div class="fromto__img">
														<img src="/images/fromto.svg" alt="">
													</div>
													<!-- /.fromto__img -->
												</div>
												<!-- /.fromto__icon -->
												<div class="fromto__content">
													<div class="fromto__title" data-stepdata="f_dostavki"
													     data-steptype="result"></div>
													<!-- /.fromto__title -->
													<div class="fromto__descr">
														<p data-stepdata="p_dostavki" data-steptype="result"></p>
														<p>Филиал - <span data-stepdata="f_dostavki"
														                  data-steptype="result"></span></p>
													</div>
													<!-- /.fromto__descr -->
												</div>
												<!-- /.fromto__content -->
											</div>
											<!-- /.fromto__from -->
										</div>
									</div>
									<!-- /.calcitem__totals -->
									<!-- /.fromto__cols -->
								</div>
								<!-- /.calcform__fromto -->
								<hr>
								<!-- 	<div class="calcitem__totals calcitem__totals_multiple">
									<div class="calctotal">
										<div class="calctotal__title"><b>Сборным грузом</b></div>
										<div class="calctotal__value">Cпособ перевозки</div>
									</div>
									<div class="calctotal">
										<div class="calctotal__title"><b>Автоперевозка</b></div>
										<div class="calctotal__value">Параметры перевозки</div>
									</div>
								</div> -->

								<div class="calcitem__totals calcitem__totals_multiple">
									<div class="calctotal">
										<div class="calctotal__title"><b>Габариты груза</b></div>
										<div class="calctotal__value">
											<span data-steptype="result" data-stepdata="ob_len"></span> x
											<span data-steptype="result" data-stepdata="ob_shir"></span> x
											<span data-steptype="result" data-stepdata="ob_h"></span>
										</div>
									</div><!-- /.calctotal -->
									<div class="calctotal">
										<div class="calctotal__title"><b>Вес груза</b></div>
										<div class="calctotal__value"><span data-steptype="result"
										                                    data-stepdata="ob_w"></span></div>
									</div><!-- /.calctotal -->
									<div class="calctotal">
										<div class="calctotal__title"><b>Количество мест/паллет</b></div>
										<div class="calctotal__value"><span data-steptype="result"
										                                    data-stepdata="ob_count"></span></div>
									</div><!-- /.calctotal -->
									<div class="calctotal">
										<div class="calctotal__title"><b>Обьем груза</b></div>
										<div class="calctotal__value"><span data-steptype="result"
										                                    data-stepdata="ob_vol"></span></div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->

								<div class="calcitem__totals calcitem__totals_multiple">
									<div class="calctotal">
										<div class="calctotal__title"><b>Дата отправки</b></div>
										<div class="calctotal__value">
											<ul>
												<li data-if="date_otpravki">Дата: <span data-steptype="result"
												                                        data-stepdata="date_otpravki"></span>
												</li>
												<li data-if="time_otpravki1">Днем: <span data-steptype="result"
												                                         data-stepdata="time_otpravki1"></span>
												</li>
												<li data-if="time_otpravki2">Утром: <span data-steptype="result"
												                                          data-stepdata="time_otpravki2"></span>
												</li>
												<li data-if="time_otpravki3">Вечером: <span data-steptype="result"
												                                            data-stepdata="time_otpravki3"></span>
												</li>
												<li data-if="time_otpravki4">Указанное время: <span
															data-steptype="result"
															data-stepdata="time_otpravki4"></span>
												</li>
											</ul>
										</div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->

								<div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>Услуги на терминале отправителя</b></div>
										<div class="calctotal__value">
											<ul>

												<li><span data-steptype="result" data-stepdata="dop_prr"></span></li>

												<li><span data-steptype="result" data-stepdata="dop_bok"></span></li>
												<li><span data-steptype="result" data-stepdata="dop_verh"></span></li>
												<li><span data-steptype="result" data-stepdata="dop_full"></span></li>
												<li><span data-steptype="result" data-stepdata="dop_bort"></span></li>
												<li data-if="dop_floor">Этаж: <span data-steptype="result"
												                                    data-stepdata="dop_floor"></span>
													<span data-steptype="result" data-stepdata="dop_lift"></span></li>
												<li data-if="dop_sved">Дополнительные сведения: <span
															data-steptype="result" data-stepdata="dop_sved"></span></li>


											</ul>
										</div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->
								<div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>Услуги на терминале получателя</b></div>
										<div class="calctotal__value">
											<ul>
												<li data-if="time_otpravki1">Днем: <span data-steptype="result"
												                                         data-stepdata="time_otpravki1"></span>
												</li>
												<li data-if="time_otpravki2">Утром: <span data-steptype="result"
												                                          data-stepdata="time_otpravki2"></span>
												</li>
												<li data-if="time_otpravki3">Вечером: <span data-steptype="result"
												                                            data-stepdata="time_otpravki3"></span>
												</li>
												<li data-if="time_otpravki4">Указанное время: <span
															data-steptype="result"
															data-stepdata="time_otpravki4"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="dop_dost_prr"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="dop_dost_bok"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="dop_dost_verh"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="dop_dost_full"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="dop_dost_bort"></span>
												</li>


												<li><span data-steptype="result" data-stepdata="dop_doc"></span></li>
												<li><span data-steptype="result" data-stepdata="dop_return"></span></li>
												<li data-if="dop_dost_floor">Этаж: <span data-steptype="result"
												                                         data-stepdata="dop_dost_floor"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="dop_dost_lift"></span>
												</li>

												<li data-if="dop_dost_sved">Дополнительные сведения: <span
															data-steptype="result" data-stepdata="dop_dost_sved"></span>
												</li>
											</ul>
										</div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->

								<div class="calcitem__totals calcitem__totals_multiple">
									<div class="calctotal">
										<div class="calctotal__title"><b>Дополнительные сведения</b></div>
										<div class="calctotal__value">
											<ul>

												<li data-if="tip_gruza">Тип груза: <span data-steptype="result"
												                                         data-stepdata="tip_gruza"></span>
												</li>
												<li data-if="cost">Объявленная стоимость: <span data-steptype="result"
												                                                data-stepdata="cost"></span>
													₽
												</li>
												<li><span data-steptype="result" data-stepdata="teplo"></span></li>
												<li><span data-steptype="result" data-stepdata="fragileCargo"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="liquidCargo"></span>
												</li>

												<li><span data-steptype="result" data-stepdata="pack_nopack"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="pack_wooden"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="pack_bubble"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="pack_stretch"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="pack_gofro"></span></li>
												<li><span data-steptype="result" data-stepdata="pack_meshkotara"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="pack_recalc"></span>
												</li>
												<li><span data-steptype="result" data-stepdata="pack_mark"></span></li>

												<li><span data-steptype="result" data-stepdata="dop_doc"></span></li>
												<li><span data-steptype="result" data-stepdata="dop_return"></span></li>
											</ul>
										</div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->


								<div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>Отправитель </b></div>
										<div class="calctotal__value">
											<!-- <ul>
												<li>
													<div>
														<span data-stepdata="send_fiz" data-totaltype="fizyur">Физическое лицо</span>
														<span data-stepdata="send_yur" data-totaltype="fizyur">Юридическое лицо</span>
													</div>
												</li>
											</ul> -->
											<div data-if="send_fio" data-stepdata="send_fiz" data-totaltype="fizyur">
												<ul>
													<li>
														<span data-stepdata="send_fiz" data-totaltype="fizyur">Физическое
															лицо</span>
													</li>
													<li>
														<span data-steptype="result" data-stepdata="send_fio"></span>
													</li>
													<li data-if="send_pasp1">
														<span data-steptype="result" data-stepdata="send_doc"></span>:&nbsp;
														<span data-steptype="result" data-stepdata="send_pasp1"></span>&nbsp;
														<span data-steptype="result" data-stepdata="send_pasp2"></span>

													</li>
													<li data-if="send_anotherdoc">
														<span data-steptype="result" data-stepdata="send_doc"></span>:&nbsp;
														<span data-steptype="result"
														      data-stepdata="send_anotherdoc"></span>&nbsp;

													</li>

													<li>
														<span data-steptype="result" data-stepdata="send_tel"></span>
													</li>
													<li data-if="send_tel2">
														<span data-steptype="result" data-stepdata="send_tel2"></span>
													</li>
													<li data-if="send_email">
														<span data-steptype="result" data-stepdata="send_email"></span>
													</li>
												</ul>
											</div>


											<div data-if="send_yurname" data-stepdata="send_yur"
											     data-totaltype="fizyur">
												<ul>
													<li>
														<span data-steptype="result"
														      data-stepdata="send_yurform"></span>&nbsp;<span
																data-steptype="result"
																data-stepdata="send_yurname"></span>
													</li>
													<li data-if="send_inn">
														ИНН: <span data-steptype="result"
														           data-stepdata="send_inn"></span>
													</li>
													<li data-if="send_kpp">
														КПП: <span data-steptype="result"
														           data-stepdata="send_kpp"></span>
													</li>
													<li data-if="send_yurfio">
														Контакное лицо: <span data-steptype="result"
														                      data-stepdata="send_yurfio"></span>
													</li>
													<li data-if="send_yurtel">
														Телефон: <span data-steptype="result"
														               data-stepdata="send_yurtel"></span>
													</li>
												</ul>
											</div>


											</ul>
										</div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->

								<div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>Получатель </b></div>
										<div class="calctotal__value">
											<div data-if="receive_fio" data-stepdata="receive_fiz"
											     data-totaltype="fizyur">
												<ul>
													<li>
														<span data-stepdata="receive_fiz" data-totaltype="fizyur">Физическое
															лицо</span>
													</li>
													<li>
														<span data-steptype="result" data-stepdata="receive_fio"></span>
													</li>
													<li data-if="receive_pasp1">
														<span data-steptype="result"
														      data-stepdata="receive_selectdoc"></span>:&nbsp;
														<span data-steptype="result"
														      data-stepdata="receive_pasp1"></span>&nbsp;
														<span data-steptype="result"
														      data-stepdata="receive_pasp2"></span>

													</li>
													<li data-if="receive_anotherdoc">
														<span data-steptype="result" data-stepdata="receive_doc"></span>:&nbsp;
														<span data-steptype="result"
														      data-stepdata="receive_anotherdoc"></span>&nbsp;

													</li>

													<li>
														<span data-steptype="result" data-stepdata="receive_tel"></span>
													</li>
													<li data-if="receive_tel2">
														<span data-steptype="result"
														      data-stepdata="receive_tel2"></span>
													</li>
													<li data-if="receive_email">
														<span data-steptype="result"
														      data-stepdata="receive_email"></span>
													</li>
												</ul>
											</div>
											<div data-if="receive_yurname" data-stepdata="receive_yur"
											     data-totaltype="fizyur">
												<ul>
													<li>
														<span data-stepdata="receive_yur" data-totaltype="fizyur">Юридическое
															лицо</span>
													</li>
													<li>
														<span data-steptype="result"
														      data-stepdata="receive_yurform"></span>&nbsp;<span
																data-steptype="result"
																data-stepdata="receive_yurname"></span>
													</li>
													<li data-if="receive_yurinn">
														ИНН: <span data-steptype="result"
														           data-stepdata="receive_yurinn"></span>
													</li>
													<li data-if="receive_yurkpp">
														КПП: <span data-steptype="result"
														           data-stepdata="receive_yurkpp"></span>
													</li>
													<li data-if="receive_yurfio">
														Контакное лицо: <span data-steptype="result"
														                      data-stepdata="receive_yurfio"></span>
													</li>
													<li data-if="receive_yurtel">
														Телефон: <span data-steptype="result"
														               data-stepdata="receive_yurtel"></span>
													</li>
												</ul>
											</div>
										</div>
									</div><!-- /.calctotal -->
								</div><!-- .calcitem__totals -->

								<div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>Плательщик </b></div>
										<div class="calctotal__value">
											<ul>
												<li>
													<span data-steptype="result" data-stepdata="payeer"></span>
												</li>
												<li data-if="payer_fio">
													<span data-steptype="result" data-stepdata="payer_fio"></span>
												</li>
												<li data-if="payer_pasp1">
													<span data-steptype="result" data-stepdata="payer_doc"></span>
													<span data-steptype="result" data-stepdata="payer_pasp1"></span>
													<span data-steptype="result" data-stepdata="payer_pasp2"></span>
												</li>
												<li data-if="payer_anotherdoc">
													<span data-steptype="result" data-stepdata="payer_doc"></span>
													<span data-steptype="result"
													      data-stepdata="payer_anotherdoc"></span>
												</li>
												<li data-if="payer_tel">
													<span data-steptype="result" data-stepdata="payer_tel"></span>
												</li>
												<li data-if="payer_tel2">
													<span data-steptype="result" data-stepdata="payer_tel2"></span>
												</li>
												<li data-if="payer_check">
													<span data-steptype="result" data-stepdata="payer_check"></span>
												</li>
											</ul>
										</div>
									</div><!-- /.calctotal -->
								</div>

								<!-- <div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>Оплата услуг </b></div>
										<div class="calctotal__value calctotal__value_multiple">
											<ul>
												<li>
													<span class="calctotal__valueName">Межрегиональная перевозка</span>
													<span class="calctotal__valueInfo">получатель</span>
												</li>

												<li>
													<span class="calctotal__valueName">Страховка</span>
													<span class="calctotal__valueInfo">получатель</span>
												</li>

												<li>
													<span class="calctotal__valueName">Палетный борт</span>
													<span class="calctotal__valueInfo">получатель</span>
												</li>

											</ul>
										</div>
									</div>
								</div> -->

								<div class="calcitem__totals calcitem__totals_multiple calcitem__totals_large">
									<div class="calctotal">
										<div class="calctotal__title"><b>E-mail для связи <br> и отправки
												уведомлений</b></div>
										<div class="calctotal__value">
											<input type="text"
											       name="NOTIFY_EMAIL"
											       placeholder="E-mail" data-stepdata="contact_phone"
											       data-steptype="source">
										</div>
									</div><!-- /.calctotal -->

									<div class="calctotal">
										<div class="calctotal__title"><b>Телефон для связи <br> и уведомления по SMS</b>
										</div>
										<div class="calctotal__value">
											<input type="tel"
											       name="NOTIFY_PHONE"
											       placeholder="Телефон" data-stepdata="contact_phone"
											       data-steptype="source" data-required="required">
										</div>
									</div><!-- /.calctotal -->
									<div class="calctotal">
										<div class="calctotal__title"><b>Промокод</b>
										</div>
										<div class="calctotal__value">
											<input type="text"
											       name="NOTIFY_PROMO"
											       placeholder="Промокод" data-stepdata="contact_promo"
											       data-steptype="source">
										</div>
									</div><!-- /.calctotal -->
									<div class="calctotal">
										<div class="calctotal__title"><b>Вы (заказчик)</b></div>
										<div class="calctotal__value">
											<div class="calcform__radiobuttons">
												<div class="radiobuttons">
													<div class="radiotype ">
														<div class="radiotype__item">
															<label for="radio2-1" class="radiotype__label">
																<span>
																	<input type="radio"
																	       name="NOTIFY_TYPE"
																	       checked="checked" value="Отправитель"
																	       id="radio2-1" name="radioparam2"
																	       data-stepdata="contact_type1"
																	       data-steptype="source">
																	<span class="radiotype__text"
																	      data-text="checkboxtext">Отправитель</span>
																</span>
															</label>
														</div>
														<div class="radiotype__item">
															<label for="radio2-2" class="radiotype__label">
																<span>
																	<input type="radio"
																	       name="NOTIFY_TYPE"
																	       value="Получатель"
																	       id="radio2-2" name="radioparam2"
																	       data-stepdata="contact_type2"
																	       data-steptype="source">
																	<span class="radiotype__text"
																	      data-text="checkboxtext">Получатель</span>
																</span>
															</label>
														</div>
														<div class="radiotype__item">
															<label for="radio2-3" class="radiotype__label">
																<span>
																	<input type="radio"
																	       name="NOTIFY_TYPE"
																	       value="Третье лицо"
																	       id="radio2-3" name="radioparam2"
																	       data-stepdata="contact_type3"
																	       data-steptype="source">
																	<span class="radiotype__text"
																	      data-text="checkboxtext">Третье лицо</span>
																</span>
															</label>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div><!-- /.calctotal -->

								</div><!-- .calcitem__totals -->

							</div>
						</div>

						<div class="pageform__check">
							<div class="manager-form__privacy">
								<label class="checkbox">
									<input required="" data-required="required" type="checkbox" name="privacy"
									       value="Y">
									<span class="checkbox__box"></span>
									Я ознакомлен и согласен с
									<a href="/trebovaniya-k-gruzu/" target="_blank" class="link_underline">правилами
										оказания услуг</a> и
									<a href="/privacy/" target="_blank" class="link_underline">ПОЛИТИКОЙ
										КОНФИДЕНЦИАЛЬНОСТИ</a>
								</label>
							</div>
						</div>
						<div class="calcpage__navs">
							<!-- <div class="calcpage__nav">
								<a href="#" data-entity="step-prev" class="btn_main  btn_submit">Назад</a>
							</div> -->
							<!-- /.calcpage__nav -->
							<div class="calcpage__nav">
								<!--								data-entity="step-finish"-->
								<a href="#"
								   data-entity="step-next"
								   class="btn_main btn_main_blue btn_submit">Подтвердить
									<span class="hideThisOnMobile">заказ</span> </a>
							</div><!-- /.calcpage__nav -->
						</div><!-- /.calcpage__navs -->
					</div>
				</div>
			</div>
		</div>
		<div class="calcpage__aside">
			<div class="calcresults calcitem">
				<div class="calcitem__header">
					<div class="calcheader">
						<div class="calcheader__title">
							<div class="calcheader__icon">
								<div class="calcheader__image">
									<img src="<?= ASSETS_PATH ?>/images/info.svg" alt="">
								</div>
							</div>
							<div class="calcheader__name">Расчёт</div>
						</div>
					</div>
				</div>
				<div class="calcitem__content">
					<div class="step-0">
						<div class="calctext">
							<p>Для расчета стоимости перевозки груза укажите пункты отправления и прибытия, а также
								параметры
								груза. Обратите внимание, расчет будет носить ориентировочный характер.
							</p>
						</div>
					</div>
					<div class="step-1 hidden">
						<div class="calcprice">
							<div class="calcprice__title">Услуги доставки</div>
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params">
										<li>
											<span class="calcprice-params_left">
												<span><span id="auto-name">Автоперевозка</span></span>
											</span>
											<span class="calcprice-params_right" id="auto-price">-</span>
										</li>
										<li>
											<span class="calcprice-params_left">
												<span><span>Страхование</span></span>
											</span>
											<span class="calcprice-params_right" id="insurance-price">-</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="step-2 hidden">
						<hr>
						<div class="calcprice">
							<div class="calcprice__title">Услуги терминала-отправителя</div>
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params" data-entity="from-service">
										<li>
											<span class="calcprice-params_left">
												<span><span>Забор от адреса</span></span>
											</span>
											<span class="calcprice-params_right" id="pickup-price">-</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="step-5 hidden">
						<hr>
						<div class="calcprice">
							<div class="calcprice__title">Услуги терминала-получателя</div>
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params" data-entity="to-service">
										<li>
											<span class="calcprice-params_left">
												<span><span>Доставка до адреса</span></span>
											</span>
											<span class="calcprice-params_right" id="delivery-price">-</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="calcprice step-3 hidden">
						<div class="step-3 hidden">
							<div class="calcprice__title">Доп. услуги</div>
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params" data-entity="more-service">

										<li id="crate-wrapper" hidden>
											<span class="calcprice-params_left">
												<span><span>Деревянная обрешетка</span></span>
											</span>
											<span class="calcprice-params_right" id="crate-price">-</span>
										</li>
										<li id="palet-wrapper" hidden>
											<span class="calcprice-params_left">
												<span><span>Паллетный борт</span></span>
											</span>
											<span class="calcprice-params_right" id="palet-price">-</span>
										</li>
									</ul>
								</div>
							</div>
							<hr>
						</div>
						<!--     <div class="calcsubtitle">
                            Хотите быстрее?
                        </div> -->
						<div class="radiobuttons">
							<div class="radiotype  radiotype_3" data-entity="auto-delivery">
                                <? global $USER; ?>
                                <? if (1 == 1): ?>

									<div class="radiotype__item" data-entity="express-delivery" style="display:none;">
										<label for="express-delivery" class="radiotype__label">
											<span>
												<input type="radio" checked="checked" id="express-delivery"
												       name="delivery-type"
												       value="express">
												<span class="radiotype__text">
													<span class="radiotype__icon">
														<img src="<?= ASSETS_PATH ?>/images/inntransit.svg" alt="">
													</span>
													<span class="radiotype__texts">
														<span class="radiotype__text1">Экспресс</span>
														<span class="radiotype__text2">
															<span class="radiotype__text2_caption">Срок доставки:</span>
															<span class="radiotype__text2_value">~<span
																		id="express-days"></span> дней</span>
														</span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<div class="radiotype__item" data-entity="superexpress-delivery"
									     style="display:none;">
										<label for="superexpress-delivery" class="radiotype__label">
											<span>
												<input type="radio" checked="checked" id="superexpress-delivery"
												       name="delivery-type"
												       value="superexpress">
												<span class="radiotype__text">
													<span class="radiotype__icon">
														<img src="<?= ASSETS_PATH ?>/images/flashon.svg" alt="">
													</span>
													<span class="radiotype__texts">
														<span class="radiotype__text1">Суперэкспресс</span>
														<span class="radiotype__text2">
															<span class="radiotype__text2_caption">Срок доставки:</span>
															<span class="radiotype__text2_value">~<span
																		id="superexpress-days"></span> дней</span>
														</span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<div class="radiotype__item" data-entity="ferryboat-delivery" style="display:none;">
										<label for="ferryboat-delivery" class="radiotype__label">
											<span>
												<input type="radio" checked="checked" id="ferryboat-delivery"
												       name="delivery-type"
												       value="ferryboat">
												<span class="radiotype__text">
													<span class="radiotype__icon">
														<img src="<?= ASSETS_PATH ?>/images/cargoship.svg" alt="">
													</span>
													<span class="radiotype__texts">
														<span class="radiotype__text1">Паром</span>
														<span class="radiotype__text2">
															<span class="radiotype__text2_caption">Срок доставки:</span>
															<span class="radiotype__text2_value">~<span
																		id="ferryboat-days"></span> дней</span>
														</span>
													</span>
												</span>
											</span>
										</label>
									</div>
                                <? endif; ?>

								<div class="radiotype__item">
									<label for="auto-delivery" class="radiotype__label">
										<span>
											<input type="radio" checked="checked" id="auto-delivery"
											       name="delivery-type"
											       value="auto">
											<span class="radiotype__text">
												<span class="radiotype__icon">
													<img src="<?= ASSETS_PATH ?>/images/Truck.svg" alt="">
												</span>
												<span class="radiotype__texts">
													<span class="radiotype__text1">Стандарт</span>
													<span class="radiotype__text2">
														<span class="radiotype__text2_caption">Срок доставки:</span>
														<span class="radiotype__text2_value">~<span
																	id="auto-days"></span> дней</span>
													</span>
												</span>
											</span>
										</span>
									</label>
								</div>
								<div class="radiotype__item" data-entity="container-delivery" style="display: none">
									<label for="container-delivery" class="radiotype__label">
										<span>
											<input type="radio" id="container-delivery" name="delivery-type"
											       value="container">
											<span class="radiotype__text">
												<span class="radiotype__icon">
													<img src="<?= ASSETS_PATH ?>/images/container.svg" alt="">
												</span>
												<span class="radiotype__texts">
													<span class="radiotype__text1">Контейнер</span>
													<span class="radiotype__text2">
														<span class="radiotype__text2_caption">Срок доставки:</span>
														<span class="radiotype__text2_value">~<span
																	id="container-days"></span> дней</span>
													</span>
												</span>
											</span>
										</span>
									</label>
								</div>
								<div class="radiotype__item" data-entity="container2-delivery" style="display:none;">
									<label for="container2-delivery" class="radiotype__label">
										<span>
											<input type="radio" id="container2-delivery" name="delivery-type"
											       value="container2">
											<span class="radiotype__text">
												<span class="radiotype__icon">
													<img src="<?= ASSETS_PATH ?>/images/Ruble.svg" alt="">
												</span>
												<span class="radiotype__texts">
													<span class="radiotype__text1">Льготный <span
																style="color:red">**</span></span>
													<span class="radiotype__text2">
														<span class="radiotype__text2_caption">Срок доставки:</span>
														<span class="radiotype__text2_value">~<span
																	id="container2-days"></span> дней</span>
													</span>
												</span>
											</span>
										</span>
									</label>
								</div>
                                <? if (1 == 2): ?>
									<div class="radiotype__item">
										<label for="radio12-2" class="radiotype__label">
											<span>
												<input type="radio" id="radio12-2" name="radioparam12">
												<span class="radiotype__text">
													<span class="radiotype__icon">
														<img src="<?= ASSETS_PATH ?>/images/InTransit.svg" alt="">
													</span>
													<span class="radiotype__texts">
														<span class="radiotype__text1">Экспресс перевозка
															<span class="calcheader__help">
																<span class="help-call">?</span>
																<span class="help-tooltip">
																	<span class="help-tooltip__content">
																		<span class="help-tooltip__text"> Деревянный
																			короб регулируемой высоты – не
																			передается получателю. Ограничение по
																			параметрам груза 1.15x0.75x1.95м и
																			1000кг. Доступно только для перевозок по
																			России, кроме Калининграда,
																			Магадана, Петропавловск-Камчатского и
																			городов адресной доставки
																			Хабаровска. Недоступно для перевозок Службой
																			универсальной
																			доставки.</span>
																		<span class="help-tooltip__info">+8 к защите
																			груза</span>
																	</span>
																</span></span>
														</span>
														<span class="radiotype__text2">
															<span class="radiotype__text2_caption">Срок доставки:</span>
															<span class="radiotype__text2_value radiotype__text2_green">~13
																дней</span>
														</span>
													</span>
												</span>
											</span>
										</label>
									</div>
									<div class="radiotype__item">
										<label for="radio12-3" class="radiotype__label">
											<span>
												<input type="radio" id="radio12-3" name="radioparam12">
												<span class="radiotype__text">
													<span class="radiotype__icon">
														<img src="<?= ASSETS_PATH ?>/images/Airplane.svg" alt="">
													</span>
													<span class="radiotype__texts">
														<span class="radiotype__text1">Авиаперевозка</span>
														<span class="radiotype__text2">
															<span class="radiotype__text2_caption">Срок доставки:</span>
															<span class="radiotype__text2_value ">~15 дней</span>
														</span>
													</span>
												</span>
											</span>
										</label>
									</div>
                                <? endif; ?>
							</div>
						</div>
						<div class="calcprice" data-step="notice">
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params" data-entity="notice">
									</ul>
								</div>
							</div>
						</div>
						<div class="calcprice calcprice_big">
							<div class="calcprice__items">
								<div class="calcprice__params">
									<ul class="calcprice-params">
										<li>
											<span class="calcprice-params_left">
												<span><span>Cтоимость<span style="color:red"><sup>*</sup></span>
														<!-- /.red --></span></span>
											</span>
											<span class="calcprice-params_right" id="total-price"></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="calcerrors" data-entity="errors" style="display: none;">
							<input type="hidden" name="ERRORS" value=""/>

							<div class="calcerrors__item" data-entity="need-contact">
								<div class="calcerrors__icon">
									<div class="calcerrors__img">
										<img src="<?= ASSETS_PATH ?>/images/errors.svg" alt="">
									</div>
								</div>
								<div class="calcerrors__text"><span>Требуется согласование</span></div>
							</div>
							<div class="calcerrors__item" data-entity="teplo">
								<div class="calcerrors__icon">
									<div class="calcerrors__img">
										<img src="<?= ASSETS_PATH ?>/images/errors.svg" alt="">
									</div>
								</div>
								<div class="calcerrors__text"><span>Тепловой режим</span></div>
							</div>
							<div class="calcerrors__item" data-entity="oversize">
								<div class="calcerrors__icon">
									<div class="calcerrors__img">
										<img src="<?= ASSETS_PATH ?>/images/errors.svg" alt="">
									</div>
								</div>
								<div class="calcerrors__text"><span>Негабарит</span></div>
							</div>
							<div class="calcerrors__item" data-entity="docs">
								<div class="calcerrors__icon">
									<div class="calcerrors__img">
										<img src="<?= ASSETS_PATH ?>/images/errors.svg" alt="">
									</div>
								</div>
								<div class="calcerrors__text"><span>Предоставить документы о <br>стоимости груза</span>
								</div>
							</div>
							<div class="calcerrors__item" data-entity="can-pickup">
								<div class="calcerrors__icon">
									<div class="calcerrors__img">
										<img src="<?= ASSETS_PATH ?>/images/errors.svg" alt="">
									</div>
								</div>
								<div class="calcerrors__text"><span>Забор груза не возможен</span></div>
							</div>
							<div class="calcerrors__item" data-entity="can-delivery">
								<div class="calcerrors__icon">
									<div class="calcerrors__img">
										<img src="<?= ASSETS_PATH ?>/images/errors.svg" alt="">
									</div>
								</div>
								<div class="calcerrors__text"><span>Доставка груза не возможна</span></div>
							</div>
						</div>
						<div data-step="order">
							<button
									type="button"
									data-entity="step-next"
									class="btn_main btn_main_blue btn_submit">Оформить заявку
							</button>
						</div>
						<div class="calcpage__nav">
							<a href="#" data-entity="step-prev" class="btn_main  btn_submit">Назад</a>
						</div>
						<div class="infotext"><span style="color: red">*</span> Указана <span class="calcheader__help">
								<a href="#" class="link link_blue" onclick="event.preventDefault(); return false">Ориентировочная</a>
								<span class="help-tooltip" style="left:0;">
									<span class="help-tooltip__content">
										<span class="help-tooltip__text">Окончательная стоимость услуг будет <br>уточнена
											по результатам взвешивания и обмера груза при приемке на склад, <br> а также
											уточнения всех деталей адресного Забора/Доставки груза. </span>
										<!-- 	<span class="help-tooltip__info">+8 к защите груза</span> -->
									</span>
								</span>
							</span>
							стоимость
						</div>

						<div id="container2-delivery-text" class="infotext" style="display: none"><span
									style="color:red">** </span>Льготный тариф применяется для новых клиентов компании в
							течение 90 дней
						</div>

						<!-- 	<div class="infotext"><i>*Оформим за ~2 минуты</i></div> -->
					</div>
					<div class="step-4 hidden">
						<div class="calctext hidden" data-entity="warning">
							<p>По данным параметрам мы можем предложить вам индивидуальный расчет. Наши специалисты
								свяжуться с вами в течение 15 мин.
							</p>
						</div>
						<div class="calcrequest">
							<div class="calcform__items calcform__items_full">
								<div class="calcform__item">
									<div class="calcform__title">Ваше имя</div>
									<input type="text" placeholder="" name="NAME" class="final-form" required>
								</div>
								<div class="calcform__item">
									<div class="calcform__title">E-mail</div>
									<input type="email" placeholder="" name="EMAIL" class="final-form" required>
								</div>
								<div class="calcform__item">
									<div class="calcform__title">Телефон</div>
									<input type="tel" name="PHONE" placeholder="" class="final-form" required>
								</div>
							</div>
							<div class="radiobuttons">
								<div class="calcform__title">Предпочитаемый способ связи</div>
								<div class="radiotype radiotype radiotype_row">
									<div class="radiotype__item">
										<label for="radio13-1" class="radiotype__label">
											<span>
												<input type="radio" checked="" id="radio13-1" value="Email"
												       name="CONTACT_TYPE" class="final-form">
												<span class="radiotype__text">E-mail</span>
											</span>
										</label>
									</div>
									<div class="radiotype__item">
										<label for="radio13-2" class="radiotype__label">
											<span>
												<input type="radio" id="radio13-2" value="Телефон" name="CONTACT_TYPE"
												       class="final-form">
												<span class="radiotype__text">Телефон</span>
											</span>
										</label>
									</div>
								</div>
							</div>


							<!--   <div class="calcform__items calcform__items_full">
                                <div class="calcform__item">
                                    <div class="calcform__title">Промокод</div>
                                    <input type="text" placeholder="" name="PROMO" class="final-form">
                                </div>
                            </div>
 -->

							<button type="button" data-entity="submit-form" class="btn_main btn_main_blue btn_submit">
								Отправить
							</button>
						</div>
					</div>
                    <? global $USER; ?>
					<div style="<?= ($USER->IsAdmin() ? '' : 'display: none') ?>">
						<h3>Отладка</h3>
						<div class="debug-info">
							<a href="#" class="calc-test">Рассчитать</a>
							<pre class="debug-result">
                        </pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<style>
    .hidden {
        display: none
    }

    pre {
        height: auto;
        max-height: 400px;
        overflow: auto;
        background-color: #eeeeee;
        word-break: normal !important;
        word-wrap: normal !important;
        white-space: pre !important;
    }
</style>
<? if ($_REQUEST['debug'] == 'Y' || !empty($arResult)): ?>
	<script>
        $(document).ready(function () {
            $('.calc-test').trigger('click');
        })
	</script>
<? endif; ?>


<script>
    const inputHandler = function (e) {

        let result =
            (+$(this).closest('.calcform__inputs').find('.calc_length').val().replace(/\s/g, '').match(/\d+/)[0])
            * (+$(this).closest('.calcform__inputs').find('.calc_width').val().replace(/\s/g, '').match(/\d+/)[0])
            * (+$(this).closest('.calcform__inputs').find('.calc_height').val().replace(/\s/g, '').match(/\d+/)[0]) * (+$(this).closest('.calcform__inputs').find('.quantity-field').val().replace(/\s/g, '').match(/\d+/)[0])
        $(this).closest('.calcform__inputs').find('.auto_volume').val(result / 1000000)
    }

    $(document).on("change", ".calc_length", inputHandler)
    $(document).on("change", ".calc_width", inputHandler)
    $(document).on("change", ".calc_height", inputHandler)
    $(document).on("change", ".quantity-field", inputHandler)

    jQuery(document).on('mouseup', 'input', function (e) {
        if (e.target.value.replace(/\(|\)|_|-|\./g, '').trim() == '') {
            e.target.setSelectionRange(0, 0);
        }

    });

</script>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
