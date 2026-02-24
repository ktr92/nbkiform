<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;
?>
<?if($APPLICATION->GetCurPage() != '/'):?>
</div>
</div>
<?endif;?>
</div>

<div class="form als" id="order_link">
    <div class="head">Скачивание <span>x</span></div>
    <div class="body">
        <div class="wpcf7-mail-sent-ok">
            Спасибо. Теперь Вы можете скачать Файл. Закройте форму и кликните еще раз по ссылке.
        </div>
        <?$APPLICATION->IncludeComponent(
            "slam:easyform",
            "catalog",
            Array(
                "CATEGORY_LINK_PLACEHOLDER" => "",
                "CATEGORY_LINK_TITLE" => "Каталог",
                "CATEGORY_LINK_TYPE" => "text",
                "CATEGORY_LINK_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                "CATEGORY_LINK_VALUE" => "",
                "CATEGORY_COMPANY_PLACEHOLDER" => "",
                "CATEGORY_COMPANY_TITLE" => "Название организации",
                "CATEGORY_COMPANY_TYPE" => "text",
                "CATEGORY_COMPANY_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                "CATEGORY_COMPANY_VALUE" => "",
                "CATEGORY_EMAIL_PLACEHOLDER" => "",
                "CATEGORY_EMAIL_TITLE" => "E-mail",
                "CATEGORY_EMAIL_TYPE" => "email",
                "CATEGORY_EMAIL_VALIDATION_ADDITIONALLY_MESSAGE" => " data-bv-emailaddress-message=\"E-mail введен некорректно\"",
                "CATEGORY_EMAIL_VALIDATION_MESSAGE" => "Обязательное поле",
                "CATEGORY_EMAIL_VALUE" => "",
                "CATEGORY_MESSAGE_PLACEHOLDER" => "",
                "CATEGORY_MESSAGE_TITLE" => "Сообщение",
                "CATEGORY_MESSAGE_TYPE" => "textarea",
                "CATEGORY_MESSAGE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                "CATEGORY_MESSAGE_VALUE" => "",
                "CATEGORY_PHONE_INPUTMASK" => "Y",
                "CATEGORY_PHONE_INPUTMASK_TEMP" => "+7 (999) 999-9999",
                "CATEGORY_PHONE_PLACEHOLDER" => "",
                "CATEGORY_PHONE_TITLE" => "Телефон",
                "CATEGORY_PHONE_TYPE" => "tel",
                "CATEGORY_PHONE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                "CATEGORY_PHONE_VALIDATION_MESSAGE" => "Обязательное поле",
                "CATEGORY_PHONE_VALUE" => "",
                "CATEGORY_TITLE_PLACEHOLDER" => "",
                "CATEGORY_TITLE_TITLE" => "ФИО",
                "CATEGORY_TITLE_TYPE" => "text",
                "CATEGORY_TITLE_VALIDATION_ADDITIONALLY_MESSAGE" => "",
                "CATEGORY_TITLE_VALIDATION_MESSAGE" => "Обязательное поле",
                "CATEGORY_TITLE_VALUE" => "",
                "CREATE_SEND_MAIL" => "",
                "DISPLAY_FIELDS" => array("TITLE","EMAIL","PHONE","COMPANY","LINK",""),
                "EMAIL_BCC" => "",
                "EMAIL_FILE" => "N",
                "EMAIL_SEND_FROM" => "N",
                "EMAIL_TO" => "",
                "ENABLE_SEND_MAIL" => "Y",
                "ERROR_TEXT" => "Произошла ошибка. Сообщение не отправлено.",
                "EVENT_MESSAGE_ID" => array(),
                "FIELDS_ORDER" => "LINK,TITLE,EMAIL,PHONE,COMPANY",
                "FORM_AUTOCOMPLETE" => "Y",
                "FORM_ID" => "LINK",
                "FORM_NAME" => "Форма скачивание файла по ссылке",
                "FORM_SUBMIT_VALUE" => "Отправить",
                "FORM_SUBMIT_VARNING" => "Нажимая на кнопку \"#BUTTON#\", вы даете согласие на обработку <a target=\"_blank\" href=\"#\">персональных данных</a>",
                "HIDE_ASTERISK" => "N",
                "HIDE_FIELD_NAME" => "N",
                "HIDE_FORMVALIDATION_TEXT" => "N",
                "INCLUDE_BOOTSRAP_JS" => "Y",
                "MAIL_SUBJECT_ADMIN" => "#SITE_NAME#: Сообщение из формы скачивания каталога",
                "OK_TEXT" => "Ваше сообщение отправлено. Мы обязательно с вами свяжемся",
                "REQUIRED_FIELDS" => array("TITLE","EMAIL","PHONE"),
                "SEND_AJAX" => "Y",
                "SHOW_MODAL" => "N",
                "TITLE_SHOW_MODAL" => "Спасибо!",
                "USE_BOOTSRAP_CSS" => "Y",
                "USE_BOOTSRAP_JS" => "N",
                "USE_CAPTCHA" => "Y",
                "USE_FORMVALIDATION_JS" => "Y",
                "USE_IBLOCK_WRITE" => "N",
                "USE_JQUERY" => "N",
                "USE_MODULE_VARNING" => "Y",
                "WIDTH_FORM" => "",
                "_CALLBACKS" => "successFormLinkAll",
                "USE_INPUTMASK_JS" => "Y"
            )
        );?>
    </div>
</div>

<?/*
<div id="footerWrap">
    <div id="footer">
        <!-- // footer-menu -->
        <div id="footer-menu">
            <div class="table-box">

                <div>
                    <div class="title"><a href="/o-kompanii/">О компании</a></div>
                    <ul>
                        <li><a href="/o-kompanii/nasha-istoriya/">Наша история</a></li>
                        <li><a href="/o-kompanii/nashi-klienty/">Наши клиенты</a></li>
                        <li><a href="/o-kompanii/partnery-donau-lab-moscow/">Наши партнёры</a></li>
                        <li><a href="/o-kompanii/avtorizatsii-ot-proizvoditelej/">Авторизации от производителей</a></li>
                        <li><a href="/o-kompanii/fotogalereya/">Фотогалерея</a></li>
                        <li><a href="/news/">Новости</a></li>
                        <li><a href="/events/">События</a></li>
                        <li><a href="/kontakty/">Контакты</a></li>
                        <li><a href="/otpravit-zapros/">Отправить запрос</a></li>

                        <li><a href="/stocks/">Акции</a></li>
                        <li><a href="/privacy/">Политика конфиденциальности</a></li>

                    </ul>
                </div>

                <div>
                    <div class="title"><a href="/manufacturer/"><? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/title_footer_menu.php",Array(),Array("MODE"=>"php")); ?></a></div>
                    <div class="table-box">
                        <div>

                            <ul>

                                <?<!-- <li><a href="/manufacturer/">Оборудование по производителю</a></li> -->
                                <!-- <li><a href="/industries/">Оборудование по отраслям</a></li> -->
                                <!-- <li><a href="/labware/">Оборудование по типу</a></li> -->
                                <li><a href="/manufacturer/huber/termostaty-s-otkrytoj-vannoj-i-tsirkulyatory/">Термостаты Huber</a></li>
                                ?>
                                <? $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "bottom_menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "COMPONENT_TEMPLATE" => "bottom_menu",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom",
                                    "USE_EXT" => "N"
                                )
                            );?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="title"><? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/footer_column3.php",Array(),Array("MODE"=>"php")); ?></div>
                    <div class="table-box">
                        <div>

                            <ul>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom_menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "COMPONENT_TEMPLATE" => "bottom_menu",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom2",
                            "USE_EXT" => "N"
                        )
                    );?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="title"><? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/footer_column4.php",Array(),Array("MODE"=>"php")); ?></div>
                    <div class="table-box">
                        <div>

                            <ul>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom_menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "COMPONENT_TEMPLATE" => "bottom_menu",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "bottom3",
                            "USE_EXT" => "N"
                        )
                    );?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- // Footer rotate banner -->
                <!-- <div class="footer-bnnr" style="width: 240px; height: 405px; overflow: hidden;">
                    <? /* if (!isMobile()):?>
                    <a class="active" href="http://bmng.ru/" rel="nofollow" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/bmfooter-2.gif" alt=""></a>
                    <a class="" href="http://www.avrora-it.ru/" rel="nofollow" target="_blank"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/aurora_banner.gif" alt=""></a>
                    <? endif;  ?>
                </div> -->
                <!-- Footer rotate banner // -->

            </div>
        </div>
        <!-- footer-menu // -->


        <!-- // footer bottom -->
        <div id="footer_bttm">
            <div id="footer_logo">
                <a href="/"><img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo2.png" alt="logo"></a>
            </div>
            <div id="copyright">
                <div>Copyright © 2018 Dоnau Lаb Mоscоw. Все права защищены.</div>
                <div><a href="/karta-sajta/">Карта сайта</a></div>
            </div>

            <div>
                <div><a href="mailto:info@donaulab.ru" class="footerLink">info@donaulab.ru</a></div>
            </div>
            <div>
                <div><a href="tel:+7 (495) 255-33-89" class="footerLink">+7 (495) 255-33-89</a></div>
            </div>





            <div id="empis">
                <a href="https://www.empis.ru/" target="_blank">Создание сайта - EMPIS</a>
            </div>
        </div>
        <!-- footer bottom // -->





        <script>
            jQuery(document).ready(function($) {

                $('.sendNow').on('click', function(){
                    setTimeout(function(){
                        document.body.scrollTop = document.documentElement.scrollTop = 0;
                    },1000);
                });

                $(".modal-list-alfa li").each(function (i) {
                    $(this).removeAttr('class');
                    var x = $(this).find('a').text();
                    $(this).addClass(x.charAt(0));
                });
                var headings = 'АБВГДЕЖЗИКЛМНОПРСТУФХЦЧШЩЫЭЮЯ';
                var $recipes = $('#recipes').detach();
                for (var i=0; i < headings.length; i++) {
                    //console.log(texto.charAt(i));
                    $('#toThis').append($('<ul/>').append('<span>'+ headings.charAt(i) +'</span>').append($recipes.find('.' + headings.charAt(i))));
                }
                var headings2 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                var $recipes2 = $('#recipes2').detach();
                for (var i=0; i < headings2.length; i++) {
                    $('#toThis2').append($('<ul/>').append('<span>'+ headings2.charAt(i) +'</span>').append($recipes2.find('.' + headings2.charAt(i))));
                }
                var headings3 = 'АБВГДЕЖЗИКЛМНОПРСТУФХЦЧШЩЫЭЮЯ';
                var $recipes3 = $('#recipes3').detach();
                for (var i=0; i < headings3.length; i++) {
                    $('#toThis3').append($('<ul/>').append('<span>'+ headings3.charAt(i) +'</span>').append($recipes3.find('.' + headings3.charAt(i))));
                }
                $("#toThis span").each(function(){
                    if($(this).next().is('li')) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    };
                });
                $("#toT3his2 ul").each(function(){
                    if($(this).find('span').next().is('li')) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    };
                });
                $("#toThis3 ul").each(function(){
                    if($(this).find('span').next().is('li')) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    };
                });
                $('#toThis, #toThis3').each(function(){
                    $items = $('ul', this);
                    $items.slice(0, ($items.length+1)/2) //split in half, round up
                        .wrapAll('<div class="item-column">');
                    $items.slice(($items.length+1)/2)
                        .wrapAll('<div class="item-column">');
                });
                $('.manufacturerListJS').each(function(){
                    $items = $('ul li', this);
                    $items.slice(0, ($items.length+1)/3) //split in half, round up
                        .wrapAll('<div class="item-column item-column-33">');
                    $items.slice(($items.length+1)/3,(($items.length+1)/3)+(($items.length+1)/3))
                        .wrapAll('<div class="item-column item-column-33">');
                    $items.slice((($items.length+1)/3)+(($items.length+1)/3))
                        .wrapAll('<div class="item-column item-column-33">');
                });
                jQuery('.post-text h4:contains(Совместный)').closest('.index-news').children('.img').css('float','left').children('a').append('<img src="/seminar/img/01.jpg" style="width:150px;">');
                jQuery('.news-item .txt:contains(Совместный)').closest('.news-item').children('.img').children('a').append('<img src="/seminar/img/01.jpg" style="width:150px;">');
            });
        </script>

        <script>
            jQuery(document).ready(function($){
                if($('body').hasClass('single-post')){
                    $('table').wrap('<div class="cTab"></div>');
                }
                if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
                    $('#evBoxes').css("display", "block");
                    $('.homepage-journal-wrapper').css("display", "none");
                }
            });
        </script>
    </div><!-- footer // -->
</div><!-- footerWrap // -->
*/?>




    <footer class="footerupdate">
        <div class="footerupdate__wrapper">
            <div class="footerupdate__items">
                <div class="footerupdate__item footerupdate__item_1">
                    <div class="footerupdate__conten footerupdate__content_info">
                        <div class="footerupdate__logp"><img src="/images/logofooter.png" alt=""></div>
                        <div class="footerupdate__phone"><a href="tel:+74952553389">+7 (495) 255-33-89</a></div>
                        <div class="footerupdate__email"><a href="mailto:info@donaulab.ru">info@donaulab.ru</a></div>
                        <div class="footerupdate__address">Москва, ул&nbsp;Орджоникидзе, 11с1А, блок&nbsp;Г, подъезд&nbsp;21, 2&nbsp;этаж.</div>
                    </div><!-- /.footerupdate__content -->
                </div><!-- /.footerupdate__item footerupdate__item_1 -->
                <div class="footerupdate__item footerupdate__item_2">
                    <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                    $APPLICATION->IncludeComponent(
                    	"bitrix:menu",
                    	"bottom",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                    	array(
                    		// region Основные параметры
                    		"ROOT_MENU_TYPE"         =>  "bottom4",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                    		// endregion
                    		// region Настройки кеширования
                    		"MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                    		"MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
                    		"MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                    		"MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                    		// endregion
                    		// region Дополнительные настройки
                    		"MAX_LEVEL"              =>  "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                    		"CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                    		"USE_EXT"                =>  "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    		"DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                    		"ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                    		// endregion
                    	)
                    );?>
                </div><!-- /.footerupdate__item footerupdate__item_2 -->

                <div class="footerupdate__item footerupdate__item_3">
                    <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                        array(
                            // region Основные параметры
                            "ROOT_MENU_TYPE"         =>  "bottom5",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                            // endregion
                            // region Настройки кеширования
                            "MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                            "MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
                            "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                            "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                            // endregion
                            // region Дополнительные настройки
                            "MAX_LEVEL"              =>  "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                            "CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                            "USE_EXT"                =>  "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                            "ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                            // endregion
                        )
                    );?>
                </div><!-- /.footerupdate__item footerupdate__item_3 -->
                <div class="footerupdate__item footerupdate__item_4">
                    <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "bottom",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                        array(
                            // region Основные параметры
                            "ROOT_MENU_TYPE"         =>  "bottom6",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                            // endregion
                            // region Настройки кеширования
                            "MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                            "MENU_CACHE_TIME"        =>  "360000",  // Время кеширования (сек.)
                            "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                            "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                            // endregion
                            // region Дополнительные настройки
                            "MAX_LEVEL"              =>  "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                            "CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                            "USE_EXT"                =>  "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                            "ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                            // endregion
                        )
                    );?>
                </div><!-- /.footerupdate__item footerupdate__item_4 -->
                <div class="footerupdate__item footerupdate__item_5">
                    <div class="footerupdate__content footerupdate__content_contacts">
                        <div class="footerupdate__callback">
                            <a href="/otpravit-zapros/" class="btnmain"><span>Отправить запрос</span></a>
                        </div>
                        <div class="footerupdate__socials">
                           <? /* <a href="https://www.instagram.com/donau_lab_moscow/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
                            </a> */ ?>
                            <a href="https://vk.com/donaulab" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i>
                            </a>
                            <? /* <a href="https://www.facebook.com/DonauLabMoscow/" target="_blank"><i class="fa fa-facebook" aria-hidden="true" ></i>
                            </a>*/ ?>
                            <? /* <a href="https://www.linkedin.com/company/%D0%B4%D0%BE%D0%BD%D0%B0%D1%83-%D0%BB%D0%B0%D0%B1-%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>*/ ?>
                            <a href="https://www.youtube.com/channel/UCGEitkBT4mdaSKwjhIhvZdA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                            <a href="https://t.me/donaulab_moscow" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i>
                            </a>
                        </div><!-- /.footerupdate__socials -->
                    </div><!-- /.footerupdate__content -->
                </div><!-- /.footerupdate__item footerupdate__item_5 -->
            </div><!-- /.footerupdate__items -->
            <div class="footerupdate__bottom">
                <div class="footerupdate__row">
                    <div class="footerupdate__col">
                        <span>Copyright © 2024 Dоnau Lаb Mоscоw. Все права защищены.</span>
                    </div><!-- /.footerupdate__col -->
                    <div class="footerupdate__col">
                        <a href="/karta-sajta/">Карта сайта</a>
                    </div><!-- /.footerupdate__col -->
<div class="footerupdate__col">
                        <a href="/privacy/">Политика конфиденциальности</a>
                    </div><!-- /.footerupdate__col -->
                    <div class="footerupdate__col">
                        <a href="//empis.ru">Создание сайта - EMPIS</a>
                    </div><!-- /.footerupdate__col -->
                </div><!-- /.footerupdate__row -->
            </div><!-- /.footerupdate__bottom -->
        </div><!-- /.footerupdate__wrapper -->
    </footer><!-- /.footerupdate -->



</div>
<div style="display: none;" itemscope itemtype="http://schema.org/Organization">
    <span itemprop="name">АО «Донау Лаб. Москва»</span>
    Контакты:
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        Адрес:
        <span itemprop="streetAddress">Оружейный переулок, дом 13, строение 2, эт подвал пом II ком 10</span>
        <span itemprop="postalCode">125047</span>
        <span itemprop="addressLocality">Москва</span>,
    </div>
    Телефон:<span itemprop="telephone">+7 (495) 255-33-89</span>,
    Электронная почта: <span itemprop="email">info@donaulab.ru</span>
</div>
<script>
    jQuery(function($){
        $('.owl-carousel-main').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            lazyLoad: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 2500,
            responsiveClass: true,
            animateOut: 'fadeOut',
            responsive: {
                0: {
                    items: 1,
                    nav: true
                }
            }
        })
    });

    $('a[href^="mailto:"]').on('click', function(e) {
        console.log('reachGoal','request-calltouch')
        ym(31050146,'reachGoal','request-calltouch')
    })
    $('a[href^="tel:"]').on('click', function(e) {
        console.log('reachGoal','zvonok')
        ym(31050146,'reachGoal','zvonok')
    })
    $('.detail__main .button_col .accord__title').on('click', function(e) {
        if (!($(this).hasClass('active'))) {
            console.log('reachGoal','knowprice')
            ym(31050146,'reachGoal','knowprice')
        }
 
    })
    $('.brand_description .more_show').on('click', function(e) {
        if (!($(this).hasClass('clicked'))) {
            console.log('reachGoal','readmore')
            ym(31050146,'reachGoal','readmore')
        }
 
    })
</script>
<div id="overlay"></div><!-- Пoдлoжкa -->

<? $APPLICATION->IncludeComponent(
    "custom:utm",
    "",
    Array(
        "UTM" => array(
            'utm_source',
            'utm_medium',
        ),
     )
);?>
 
</body>
</html>
