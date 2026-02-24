<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var  $APPLICATION */


IncludeTemplateLangFile(__FILE__); ?>
<footer class="footer__wrp">
    <div class="container ">
        <div class="footer-cols">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "footer.menu",
                array(
                    "ROOT_MENU_TYPE" => "main-footer",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "86400",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "",
                    "CHILD_MENU_TYPE" => '',
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                false
            ); ?>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "footer.menu",
                array(
                    "ROOT_MENU_TYPE" => "catalog-footer",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "86400",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "",
                    "CHILD_MENU_TYPE" => '',
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                false
            ); ?>
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "footer.menu",
                array(
                    "ROOT_MENU_TYPE" => "footer",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "86400",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "",
                    "CHILD_MENU_TYPE" => '',
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                false
            ); ?>
            <div class="footer__menu"></div>

            <div class="footer__address">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/ru/include/footer.contacts.php"
                    )
                ); ?>

            </div>

        </div>
    </div>
</footer>
</div>
<div class="main-menu__wrp">
    <div class="container">
        <div class="main-menu__cols">
            <div class="main-menu__col">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu",
                    array(
                        "ROOT_MENU_TYPE" => "moyki",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu",
                    array(
                        "ROOT_MENU_TYPE" => "smesiteli",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu",
                    array(
                        "ROOT_MENU_TYPE" => "izmelchiteli",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu",
                    array(
                        "ROOT_MENU_TYPE" => "aksessuary",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu",
                    array(
                        "ROOT_MENU_TYPE" => "filtraciya",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>

                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu",
                    array(
                        "ROOT_MENU_TYPE" => "rakoviny",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>
                <a href="/ru/event/" class="main-menu__hdr" style="color: #009a92">Акции</a>
            </div>
            <div class="main-menu__col">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_menu_common",
                    array(
                        "ROOT_MENU_TYPE" => "main",
                        "MENU_CACHE_TYPE" => "A",
                        "MENU_CACHE_TIME" => "86400",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "",
                        "CHILD_MENU_TYPE" => '',
                        "USE_EXT" => "N",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>
            </div>
            <div class="main-menu__col">
                <a class="main-menu__contact-item" href="tel:+79269574294">+7 (499) 272-52-98</a>
                <!--<a  class="main-menu__contact-item" href="tel:+79269574294">+7 (926) 957-42-94</a>-->
                <a class="main-menu__contact-item"
                    href="/<?= LANGUAGE_ID == 'ru' ? 'ru' : 'en' ?>/contacts/"><?= GetMessage('COMPANY_ADRES') ?></a>
                <a class="main-menu__contact-item" href="mailto:sale@paulmark.ru">sale@paulmark.ru (отдел продаж)</a>
                <a class="main-menu__contact-item" href="mailto:service@paulmark.ru">service@paulmark.ru</a>
            </div>
            <div class="main-menu__col">
                <div class="main-menu__icons">
                    <a href="https://wa.me/74992725298" class="main-menu__icon" target="_blank"><img
                            src="<?= SITE_TEMPLATE_PATH ?>/images/icon_wa_w.svg" /></a>
                    <a href="https://instagram.com/paulmark__starke?igshid=YmMyMTA2M2Y=" title="Instagram"
                        class="main-menu__icon" target="_blank"><img
                            src="<?= SITE_TEMPLATE_PATH ?>/images/icon_inst_w.svg" /></a>
                    <a href="https://vk.com/club211212737" title="Vkontakte" class="main-menu__icon"
                        target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icon_vk_w.svg" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?
global $USER;
?>
<? if (1 == 1): ?>
    <?php $APPLICATION->IncludeComponent(
        "arturgolubev:search.title",
        "fixed",
        array(
            "CATEGORY_0" => array("iblock_products"),
            "CATEGORY_0_TITLE" => "Каталог",
            "CATEGORY_0_iblock_products" => array("14"),
            "CHECK_DATES" => "N",
            "CONTAINER_ID" => "title-search",
            "INPUT_ID" => "title-search-input",
            "NUM_CATEGORIES" => "1",
            "ORDER" => "date",
            "PAGE" => "#SITE_DIR#search/index.php",
            "SHOW_INPUT" => "Y",
            "SHOW_OTHERS" => "N",
            "TOP_COUNT" => "20",
            "USE_LANGUAGE_GUESS" => "N"
        ),
        false
    ); ?>
<? else: ?>
    <?php $APPLICATION->IncludeComponent(
        "arturgolubev:search.title",
        "fixed",
        array(
            "CATEGORY_0" => array("iblock_products"),
            "CATEGORY_0_TITLE" => "Каталог",
            "CATEGORY_0_iblock_products" => array("14"),
            "CHECK_DATES" => "N",
            "CONTAINER_ID" => "title-search",
            "INPUT_ID" => "title-search-input",
            "NUM_CATEGORIES" => "1",
            "ORDER" => "date",
            "PAGE" => "#SITE_DIR#search/index.php",
            "SHOW_INPUT" => "Y",
            "SHOW_OTHERS" => "N",
            "TOP_COUNT" => "15",
            "USE_LANGUAGE_GUESS" => "N"
        ),
        false
    ); ?>
<? endif; ?>
<?php $APPLICATION->ShowCSS(); ?>

<script>



    document.addEventListener('DOMContentLoaded', () => {
        function selectColor(e) {
            window.myLazyLoad.update();
            window.dispatchEvent(new Event('resize'));
        }

        document.querySelectorAll('.detail__color__i').forEach((item) => {
            item.removeEventListener('click', selectColor)
            item.addEventListener('click', selectColor)
        })

        if ($('.detail__color__i.active').length > 0) {
            $('.detail__color__i.active').click();
        }
    })

</script>



<div class="custommodal custommodal_set " id="modal_set" data-modal="custommodal" style="display: none;">
    <div class="custommodal__wrapper">
        <div class="custommodel__close" data-modal="close">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.3">
                    <path
                        d="M9.42284 1.10119C9.28966 0.966107 9.07398 0.966107 8.94079 1.10119L5.99989 4.08413L3.0592 1.10119C2.92602 0.966107 2.71034 0.966107 2.57716 1.10119L1.09989 2.59958C0.966705 2.73466 0.966705 2.95343 1.09989 3.08851L3.97023 5.99988L1.09989 8.91124C0.966705 9.04633 0.966705 9.26509 1.09989 9.40018L2.57716 10.8986C2.71034 11.0336 2.92602 11.0336 3.0592 10.8986L5.99989 7.91562L8.94079 10.8986C9.07398 11.0336 9.28966 11.0336 9.42284 10.8986L10.9001 9.39995C11.0333 9.26486 11.0333 9.0461 10.9001 8.91101L8.03 5.99988L10.9001 3.08874C11.0333 2.95366 11.0333 2.73489 10.9001 2.59981L9.42284 1.10119Z"
                        fill="#212121"></path>
                </g>
            </svg>

        </div><!-- /.custommodel__close -->
        <div class="custommodal__header">
            <div class="custommodal__title">Специальное предложение!</div><!-- /.custommodal__title -->
            <div class="custommodal__subtitle">Подарки при покупке комплектов</div><!-- /.custommodal__subtitle -->
        </div>
        <div class="custommodal__main">
            <div class="custommodal__columns">
                <div class="custommodal__column">
                    <div class="specialset">
                        <div class="specialset__items mob">
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/Group1632524013.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="specialset__items desk">
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset1.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset__plus.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset2.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset__plus.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset3.png" alt="">
                                </div>
                            </div>
                        </div><!-- /.specialset__items -->
                        <div class="specialset__items desk">
                            <div class="specialset__item specialset__item_equal">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset__equal.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="specialset__items desk">
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/Group1632524027.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="specialset__maintext">Система фильтрации REFINE SYSTEM в Подарок!</div>
                        <div class="specialset__text">При заказе комплекта</div>
                        <div class="specialset__boldtext">Мойка + Смеситель + Измельчитель пищевых отходов INTENS</div>
                    </div><!-- /.specialset -->
                </div><!-- /.custommodal__column -->
                <div class="custommodal__delimeter">
                    <span class="delicon">
                        <img src="/ru/html/popup_special/Group1632524019.png" alt="">
                    </span><!-- /.delicon -->
                    <svg width="2" height="494" viewBox="0 0 2 494" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M1 0V493.5" stroke="url(#paint0_linear_642_1540)" stroke-width="2" />
                        <defs>
                            <linearGradient id="paint0_linear_642_1540" x1="1.5" y1="0" x2="1.5" y2="493.5"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#009A92" stop-opacity="0" />
                                <stop offset="0.25" stop-color="#009A92" />
                                <stop offset="0.75" stop-color="#009A92" />
                                <stop offset="1" stop-color="#009A92" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div><!-- /.custommodal__delimeter -->
                <div class="custommodal__delimeter_mob">
                    <span class="delicon">
                        <img src="/ru/html/popup_special/Group1632524019.png" alt="">
                    </span><!-- /.delicon -->
                    <svg width="339" height="2" viewBox="0 0 339 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M339 1L-3.93391e-06 0.999985" stroke="url(#paint0_linear_640_1397)"
                            stroke-width="2" />
                        <defs>
                            <linearGradient id="paint0_linear_640_1397" x1="339" y1="1.5" x2="-2.18557e-08" y2="1.49999"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#009A92" stop-opacity="0" />
                                <stop offset="0.25" stop-color="#009A92" />
                                <stop offset="0.75" stop-color="#009A92" />
                                <stop offset="1" stop-color="#009A92" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>

                </div><!-- /.custommodal__delimeter -->
                <div class="custommodal__column ">
                    <div class="specialset">
                        <div class="specialset__items mob">
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/Group1632523988.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="specialset__items desk">
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset1.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset__plus.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset2.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset__plus.png" alt="">
                                </div>
                            </div>
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset5.png" alt="">
                                </div>
                            </div>
                        </div><!-- /.specialset__items -->
                        <div class="specialset__items ">
                            <div class="specialset__item specialset__item_equal">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset__equal.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="specialset__items specialset__items_gap ">
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/Group1632524026.png" alt="">
                                </div>
                            </div>

                            <!-- 	<div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset7.png" alt="">
                                </div>
                            </div>
                        
                            <div class="specialset__item">
                                <div class="specialset__element">
                                    <img src="/ru/html/popup_special/specialset8.png" alt="">
                                </div>
                            </div> -->
                        </div>
                        <div class="specialset__maintext">аксессуар на выбор: <br>
                            дозатор, ролл-мат или коландер</div>
                        <div class="specialset__text">При заказе комплекта</div>
                        <div class="specialset__boldtext">Мойка + Смеситель + Система фильтрации REFINE SYSTEM</div>
                    </div><!-- /.specialset -->
                </div>
            </div><!-- /.custommodal__columns -->
        </div><!-- /.custommodal__main -->
        <div class="custommodal__footer">
            <div class="custommodal__button">
                <a href="https://paul-mark.com/ru/event/podarki-pri-zakaze-komplektov/" onclick="sessionStorage.setItem('custommodal_set', 1);">Подробнее</a>
            </div><!-- /.custommodal__button -->
        </div><!-- /.custommodal__footer -->
    </div><!-- /.custommodal__wrapper -->
</div>
<script>


    $(document).ready(function () {
        

        if (!sessionStorage.getItem('custommodal_set')) {
            $('#modal_set').addClass('active')
        } 
       

        $('[data-modal="close"]').on('click', function () {
            $('[data-modal]').removeClass('active')
            sessionStorage.setItem('custommodal_set', 1);
        })
    })
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date(); k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(49845451, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/49845451" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97678077, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/97678077" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>

<script>
    window.version = '<?= rand(1000, 9999) ?>';
    window.SITE_TEMPLATE_PATH = '<?= SITE_TEMPLATE_PATH ?>';
</script>
<script src="//code.jivo.ru/widget/JyOLLCY1FX" async></script>




</body>

</html>