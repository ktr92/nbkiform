<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, height=device-height, target-densitydpi=medium-dpi" />
        <link rel="preconnect" href="//fonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin="">
        <link href="//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="container">
            <form name="calc" method="post" action="http://62.109.31.113/calc/ajax.php" class="calcblock">
                <input type="hidden" name="action" value="calc" />
                
                <div class="calcblock__calc">
                    <div class="calcblock__title calcblock__title_big">
                        Калькулятор грузоперевозки
                    </div>
                    <div class="calcform">
                        <div class="calcform__content">
                            <div class="calcform__inputs">
                                <div class="calcform__items calcform__items_two">
                                    <div class="switcher">
                                        <a href="">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                            <path d="M11.8699 0.0298504C11.6212 0.0536005 11.4087 0.2211 11.3274 0.457351C11.2449 0.69485 11.3087 0.95735 11.4899 1.12985L13.5599 3.19985H0.639929C0.619929 3.1986 0.599929 3.1986 0.579929 3.19985C0.226179 3.2161 -0.0463211 3.5161 -0.0300712 3.86985C-0.0138212 4.2236 0.286179 4.4961 0.639929 4.47985H13.5599L11.4899 6.54985C11.3224 6.70985 11.2537 6.94735 11.3112 7.17235C11.3687 7.3961 11.5424 7.57235 11.7662 7.63235C11.9899 7.69235 12.2287 7.6261 12.3899 7.45985L16.0099 3.83985L12.3899 0.21985C12.2549 0.0811003 12.0637 0.0111004 11.8699 0.0298504ZM3.99993 8.34985C3.85493 8.3686 3.72118 8.43485 3.61993 8.53985L-7.11493e-05 12.1598L3.61993 15.7798C3.78118 15.9461 4.01993 16.0123 4.24368 15.9523C4.46743 15.8923 4.64118 15.7161 4.69868 15.4923C4.75618 15.2673 4.68743 15.0298 4.51993 14.8698L2.44993 12.7998H15.3599C15.5912 12.8036 15.8049 12.6823 15.9212 12.4823C16.0387 12.2836 16.0387 12.0361 15.9212 11.8373C15.8049 11.6373 15.5912 11.5161 15.3599 11.5198H2.44993L4.51993 9.44985C4.72118 9.25985 4.77743 8.9611 4.65868 8.7111C4.53993 8.4611 4.27493 8.31485 3.99993 8.34985Z" fill="#323232" fill-opacity="0.5"></path>
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
                                        <div class="inputLocation" data-wrapper="from">
                                            <input type="text" autocomplete="off" id="cityInput1" class="cityInput" data-entity="city-autocomplete" placeholder="Населенный пункт" name="from_text" value="">
                                            <input type="hidden" name="shipment_city_id" data-input="shipment_city_id" value="" data-entity="city-kladr-id">
                                            <ul id="cityList1" class="cityList" style="display: none;">
                                                <div class="cityListContainer"></div>
                                            </ul>
                                            <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z" fill="#C4C4C4"></path>
                                            </svg>
                                        </div>
                                        <ol class="switches">
                                            <li>                                 
                                                <input type="checkbox" id="shipment_intake" value="Y" name="shipment_intake" data-stepdata="shipment_intake" data-steptype="source">
                                                <label for="shipment_intake">
                                                    <span></span>
                                                </label>
                                                <span class="switches__name"> 
                                                    <span class="checkboxtext">Забрать с адреса</span>
                                                    <span class="calcheader__help">
                                                        <span class="help-call">?</span>
                                                        <span class="help-tooltip">
                                                            <span class="help-tooltip__content">
                                                                <span class="help-tooltip__text">
                                                                    Не учитывается цена выезда за пределы города, стоимость доп. работ.

                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="calcform__item">
                                        <div class="calcform__title">Куда</div>
                                        <div class="inputLocation" data-wrapper="to">
                                            <input type="text" autocomplete="off" name="to_text" id="cityInput2" class="cityInput" placeholder="Населенный пункт" data-entity="city-autocomplete" value="" disabled>
                                            <input type="hidden" name="received_city_id" data-input="received_city_id" value="" data-entity="city-kladr-id">
                                            <ul id="cityList2" class="cityList" style="display: none;">
                                                <div class="cityListContainer"></div>
                                            </ul>
                                            <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z" fill="#C4C4C4"></path>
                                            </svg>
                                        </div>
                                        <ol class="switches">
                                            <li>                                 
                                                <input type="checkbox" id="received_intake" value="Y" name="received_intake" data-stepdata="received_intake" data-steptype="source">
                                                <label for="received_intake">
                                                    <span></span>
                                                </label>
                                                <span class="switches__name"> 
                                                    <span class="checkboxtext">Доставить до адреса</span>
                                                    <span class="calcheader__help">
                                                        <span class="help-call">?</span>
                                                        <span class="help-tooltip">
                                                            <span class="help-tooltip__content">
                                                                <span class="help-tooltip__text">
                                                                    Не учитывается цена выезда за пределы города, стоимость доп. работ.

                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="calcform__items calcform__items_two calcform__items_two_xs">
                                    <div class="calcform__item">
                                        <div class="calcform__title">Вес груза, кг</div>
                                        <div class="form-control__wrapper">
                                            <input class="form-control range-slider__control" min="-99999" max="99999" maxlength="5" data-max="5000" data-min="1" data-weight-format="" name="weight" placeholder="Вес груза, кг" type="text" inputmode="decimal" value="1">
                                        </div>
                                    </div>
                                    <div class="calcform__item">
                                        <div class="calcform__title">Объем груза, м<sup>3</sup>
                                        </div>
                                        <div class="form-control__wrapper">
                                            <input class="form-control range-slider__control" min="-99999" max="99999" maxlength="5" data-max="20" data-min="0.01" data-volume-format="" name="volume" placeholder="Объём груза, м³" type="text" inputmode="decimal" value="0.01">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calcform__footer">
                                <div class="calcform__extra formcheckbox">
                                    <div class="calcform__item">
                                        <div class="formcheckbox__items">
                                            <div class="formcheckbox__item formcheckbox__item_title">
                                                <div class="formcheckbox__title">Доп. услуги:</div>
                                                <!-- /.formcheckbox__title -->
                                            </div>
                                            <!-- /.formcheckbox__item -->
                                            <div class="formcheckbox__item">
                                                <label for="lathing" class="formcheckbox__label formcheckbox__label_type2">
                                                    <span>
                                                        <input type="checkbox" id="lathing" name="lathing" value="Y" data-stepdata="lathing" data-steptype="source" checked="">
                                                        <span class="formcheckbox__text" data-text="checkboxtext">Защитная пленка</span>
                                                    </span>
                                                    <span class="calcheader__help">
                                                        <span class="help-call">?</span>
                                                        <span class="help-tooltip">
                                                            <span class="help-tooltip__content">
                                                                <span class="help-tooltip__text">Обеспечивает дополнительную защиту груза от царапин и потертостей. Расход и определение стоимости упаковки возможно только по фактически определяемым параметрам груза при его сдаче.
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="formcheckbox__item">
                                                <label for="extra_warm" class="formcheckbox__label formcheckbox__label_type2">
                                                    <span>
                                                        <input type="checkbox" id="extra_warm" name="extra_warm" value="Y" data-stepdata="extra_warm" data-steptype="source">
                                                        <span class="formcheckbox__text" data-text="checkboxtext">Режим “Тепло”</span>
                                                    </span>
                                                    <span class="calcheader__help">
                                                        <span class="help-call">?</span>
                                                        <span class="help-tooltip">
                                                            <span class="help-tooltip__content">
                                                                <span class="help-tooltip__text">Доставку груза при температуре не ниже +2 оС. Важно! Мы не занимаемся доставкой товаров, требующих поддержания низких температур. Например, замороженных продуктов питания, охлаждённого мяса и прочих товаров.
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.formcheckbox__items -->
                                    </div>
                                    <!-- /.calcform__extra -->
                                </div>
                                <!-- /.calcform__item -->
                                <div class="calcform__item">
                                    <div class="calcform__button">
                                        <button class="btn_main" type="submit" data-calc="calc">Рассчитать</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.calcform__item -->
                        </div>
                    </div>
                </div>

                <div class="calcblock__results" data-calc="result">
                    <div class="calcresults">
                        <div class="calcresults__title">
                            Ваш расчет
                        </div><!-- /.calcresults__title -->
                        <div class="calcresults__items">
                            <div id="auto" class="calcresults__item">
                                <div class="resultblock">
                                    <div class="resultblock__wrapper">
                                        <div class="resultblock__header" data-toggler="accordion1">
                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/auto.svg" alt=""></div><!-- /.resultblock__img -->
                                            </div><!-- /.resultblock__icon -->
                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Авто</div><!-- /.resultblock__name -->
                                                <div class="resultblock__info"><span class="delivery_time"></span> дней</div><!-- /.resultblock__info -->
                                            </div><!-- /.resultblock__title -->
                                        </div><!-- /.resultblock__header -->
                                        <div class="resultblock__main" data-toggle="accordion1">
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Cтоимость:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd "><span class="price"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Страховка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd "><span class="insurance"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                            </div><!-- /.resultblock__params -->
                                            <div class="resultblock__subtitle">Доп услуги</div><!-- /.resultblock__subtitle -->
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Обрешетка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd "><span class="lathing"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Маркировка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd "><span class="marking"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                            </div><!-- /.resultblock__params -->
                                        </div><!-- /.resultblock__main -->
                                        <div class="resultblock__delimeter"></div>
                                        <div class="resultblock__footer">
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">   
                                                        <div class="resultblock__footertitle">Всего:</div>
                                                    </div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd">
                                                        <div class="resultblock__total "><span class="total"></span> Р</div>
                                                    </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->

                                            </div><!-- /.resultblock__params -->

                                        </div><!-- /.resultblock__footer -->
                                    </div><!-- /.resultblock__wrapper -->
                                </div><!-- /.resultblock -->
                            </div><!-- /.calcresults__item -->
                            <div class="calcresults__item">
                                <div class="resultblock">
                                    <div class="resultblock__wrapper">
                                        <div class="resultblock__header" data-toggler="accordion2">
                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/airport.svg" alt=""></div><!-- /.resultblock__img -->
                                            </div><!-- /.resultblock__icon -->
                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Авиа</div><!-- /.resultblock__name -->
                                                <div class="resultblock__info"><span class="delivery_time"></span> дней</div><!-- /.resultblock__info -->
                                            </div><!-- /.resultblock__title -->
                                        </div><!-- /.resultblock__header -->
                                        <div class="resultblock__main" data-toggle="accordion2">
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Cтоимость:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="price"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Страховка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="insurance"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                            </div><!-- /.resultblock__params -->
                                            <div class="resultblock__subtitle">Доп услуги</div><!-- /.resultblock__subtitle -->
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Обрешетка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="lathing"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Маркировка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="marking"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                            </div><!-- /.resultblock__params -->
                                        </div><!-- /.resultblock__main -->
                                        <div class="resultblock__delimeter"></div>
                                        <div class="resultblock__footer">
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">   
                                                        <div class="resultblock__footertitle">Всего:</div>
                                                    </div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd">
                                                        <div class="resultblock__total"><span class="total"></span> Р</div>
                                                    </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->

                                            </div><!-- /.resultblock__params -->

                                        </div><!-- /.resultblock__footer -->
                                    </div><!-- /.resultblock__wrapper -->
                                </div><!-- /.resultblock -->
                            </div><!-- /.calcresults__item -->
                            <div class="calcresults__item">
                                <div class="resultblock">
                                    <div class="resultblock__wrapper">
                                        <div class="resultblock__header" data-toggler="accordion3">
                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/HotPrice.svg" alt=""></div><!-- /.resultblock__img -->
                                            </div><!-- /.resultblock__icon -->
                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Льготный</div><!-- /.resultblock__name -->
                                                <div class="resultblock__info"><span class="delivery_time"></span> дней</div><!-- /.resultblock__info -->
                                            </div><!-- /.resultblock__title -->
                                        </div><!-- /.resultblock__header -->
                                        <div class="resultblock__main" data-toggle="accordion3">
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Cтоимость:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="price"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Страховка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="insurance"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                            </div><!-- /.resultblock__params -->
                                            <div class="resultblock__subtitle">Доп услуги</div><!-- /.resultblock__subtitle -->
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Обрешетка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="lathing"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">Маркировка:</div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd"><span class="marking"></span> Р </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->
                                            </div><!-- /.resultblock__params -->
                                        </div><!-- /.resultblock__main -->
                                        <div class="resultblock__delimeter"></div>
                                        <div class="resultblock__footer">
                                            <div class="resultblock__params">
                                                <div class="resultblock__param">
                                                    <div class="resultblock__dt">   
                                                        <div class="resultblock__footertitle">Всего:</div>
                                                    </div><!-- /.resultblock__dt -->
                                                    <div class="resultblock__dd">
                                                        <div class="resultblock__total"><span class="total"></span> Р</div>
                                                    </div><!-- /.resultblock__dd -->
                                                </div><!-- /.resultblock__param -->

                                            </div><!-- /.resultblock__params -->

                                        </div><!-- /.resultblock__footer -->
                                    </div><!-- /.resultblock__wrapper -->
                                </div><!-- /.resultblock -->
                            </div><!-- /.calcresults__item -->
                        </div><!-- /.calcresults__items -->
                        <div class="calcresults__button">
                            <div class="calcform__button">
                                <a href="#" class="btn_main">Оформить доставку
                                </a>
                            </div>
                        </div>
                    </div><!-- /.calcresults__button -->
                </div><!-- /.calcresults -->
            </form>
        </div><!-- /.calcblock__results -->

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
        <script src="index.js"></script>
        <script src="index2.js"></script>
    </body>
</html>