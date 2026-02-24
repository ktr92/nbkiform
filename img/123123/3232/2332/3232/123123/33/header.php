<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Page\Asset;
global $APPLICATION;
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID;?>">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><? $APPLICATION->ShowTitle(); ?></title>

<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<?
    $APPLICATION->ShowHead();
    if (!$USER->IsAuthorized()) {
        CJSCore::Init(array('ajax', 'json', 'ls', 'session', 'popup', 'pull'));
    }

    # load css
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/animate.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/js/owl/owl.carousel.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/all.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/js/fancybox/jquery.fancybox.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/lightbox/css/lightbox.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/font-awesome-4.7.0/css/font-awesome.min.css');
    # load js scripts
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/owl/owl.carousel.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/slick.min.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.iframetracker.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/scripts.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/fancybox/jquery.fancybox.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/lightbox/js/lightbox.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/tabbed/tabcontent.js');
    //Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.maskedinput.js');
    ?>
<meta name="yandex-verification" content="e5edf3e6508e405c">
<meta name="google-site-verification" content="ig67QyQH6Fol9iZj6MZzq5fo4Y5MGJQF-O5Kl3HkJ9Q">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<script data-skipe-move="true" src="https://www.google.com/recaptcha/api.js?render=6Lck4i0bAAAAAI5CGn5HBH8TZ3KRewsj-z__uifJ" asinc></script>

    <?php
        if(strpos($_SERVER['REQUEST_URI'], '?PAGEN_1') !== false) {
            $url = 'http';
            if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
                $url .= "s";
            }
            $url .= "://" . $_SERVER["HTTP_HOST"] . strtok($_SERVER["REQUEST_URI"],'?');
            echo '<link rel="canonical" href="'.$url.'">';
//            echo '<meta name="robots" content="noindex, follow"/>';
        }
    ?>

	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(31050146, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/31050146" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- calltouch -->
<script type="text/javascript">
(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","b2f6d8a4");
</script>
<!-- calltouch -->

</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="conteiner">
    <div id="wrapper">

        <!-- // Header -->
        <div id="header">


<!-- // Header Top -->
<div id="header_top" class="table-box">

<div id="header_top_topmenu" class="clearfix">
<ul id="menu-top-navigation" class="menu">
    <li><a href="/stocks/">Акции</a></li>
    <li><a href="javascript:;" class="haschild">О компании</a>
        <ul class="sub-menu">
            <li><a href="/o-kompanii/nasha-istoriya/">Наша история</a></li>
            <li><a href="/o-kompanii/nashi-klienty/">Наши клиенты</a></li>
            <li><a href="/o-kompanii/nashi-proekty/">Наши проекты</a></li>
            <li><a href="/o-kompanii/partnery-donau-lab-moscow/">Наши партнеры</a></li>
            <li><a href="/o-kompanii/avtorizatsii-ot-proizvoditelej/">Авторизации от производителей</a></li>
            <li><a href="/o-kompanii/nashi-vakansii/">Наши вакансии</a></li>
            <li><a href="/o-kompanii/fotogalereya/">Фотогалерея</a></li>
        </ul>
    </li>
    <li><a href="/servisnaya-podderzhka/">Сервис и обслуживание</a></li>
    <li><a href="javascript:;" class="haschild">Полезное</a>
        <ul class="sub-menu">
             <li><a href="/blog/">Блог</a></li>
             <li><a href="/events/">Мероприятия</a></li>
            <li><a href="/news/">Новости</a></li>
            <li><a href="/seminar/" data-href="/seminar/">Семинары/Вебинары</a></li>
            <li><a href="/catalogs/">Каталоги</a></li>
            <li><a href="/sout/">СОУТ</a></li>
        </ul>
    </li>
    <li><a href="/kontakty/">Контакты</a></li>
</ul>
</div>

<!-- // Social -->
<div id="header_top_soacial">
<? /*<a href="https://www.instagram.com/donau_lab_moscow/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
</a> */ ?>
<a href="https://vk.com/donaulab" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i>
</a>
<? /* <a href="https://www.facebook.com/DonauLabMoscow/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
</a> */?>
<? /* <a href="https://www.linkedin.com/company/%D0%B4%D0%BE%D0%BD%D0%B0%D1%83-%D0%BB%D0%B0%D0%B1-%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i>
</a> */?>
<a href="https://www.youtube.com/channel/UCGEitkBT4mdaSKwjhIhvZdA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i>
</a>
<a href="https://t.me/donaulab_moscow" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i>
</i>
</a>
</div>
<!--Social // -->

</div>
<!-- Header Top // -->
<div class="mobilepanel">
    <div class="menu1"><img src="/local/templates/main/images/menu1.png" alt=""> <span>Меню</span></div><!-- /.menu1 -->
</div><!-- /.mobilepanel -->
<!-- New // -->
<div class="topLine_new table-box">
    <div id="logo">
        <? if ($APPLICATION->GetCurPage(false) != SITE_DIR): ?>
        <a href="/">
            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo.png" alt="" width="279" height="64">
        </a>
        <? else :?>
            <img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo.png" alt="" width="279" height="64">
        <? endif; ?>
    </div><!-- logo // -->

    <!-- // Top Search -->

        <?
        global $USER;
        if (1==1):
        ?>
<div class="topSearch topSearch_new">
        <?// Поиск по заголовкам - http://dev.1c-bitrix.ru/user_help/settings/search/components_2/search_title.php
        $APPLICATION->IncludeComponent(
	"arturgolubev:search.title",
	".default",
	array(
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "5",
		"ORDER" => "rank",
		"USE_LANGUAGE_GUESS" => "Y",
		"CHECK_DATES" => "N",
		"SHOW_OTHERS" => "N",
		"PAGE" => "#SITE_DIR#search/",
		"CATEGORY_0_TITLE" => "",
		"CATEGORY_0" => array(
			0 => "no",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"INPUT_ID" => "smart-title-search-input",
		"CONTAINER_ID" => "smart-title-search",
		"ANIMATE_HINTS" => array(
		),
		"ANIMATE_HINTS_SPEED" => "1",
		"INPUT_PLACEHOLDER" => "Поиск",
		"SHOW_LOADING_ANIMATE" => "Y",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"SHOW_PROPS" => array(
		),
		"SHOW_HISTORY" => "N",
		"SHOW_PREVIEW" => "Y",
		"SHOW_PREVIEW_TEXT" => "N",
		"CONVERT_CURRENCY" => "N",
		"FILTER_NAME" => "",
		"SHOW_INPUT" => "Y",
		"PREVIEW_WIDTH_NEW" => "34",
		"PREVIEW_HEIGHT_NEW" => "34"
	),
	false
);?>
        <?else:?>
<div class="topSearch ">
        <form action="/search/" method="get" id="searchform">
            <span><input type="text" id="s" name="q" value="Поиск" onfocus="if(this.value == &#39;Поиск&#39;) {this.value=&#39;&#39;;}; return true;" onblur="if(this.value == &#39;&#39;) {this.value=&#39;Поиск&#39;;}; return true;" autocomplete="off"></span>
            <span><input type="submit" value=" "></span>
        </form>
        <?endif;?>
    </div>
    <!-- // Top Search -->

    <div class="topContacts">
        <a href="tel:+74952553389"><span class="header_phone">+7 (495) 255-33-89</span></a>
        <span><i class="far fa-envelope-open"></i>  <a href="mailto:info@donaulab.ru">info@donaulab.ru</a></span>
    </div>

</div>
<!-- // New -->

			<?/*?>
            <div class="topLine_new">
                <div id="logo">
                    <? if ($APPLICATION->GetCurPage(false) != SITE_DIR): ?>
                    <a href="/">
                        <img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo.png" alt="" width="279" height="64">
                    </a>
                    <? else :?>
                        <img src="<?=SITE_TEMPLATE_PATH; ?>/images/logo.png" alt="" width="279" height="64">
                    <? endif; ?>
                </div><!-- logo // -->

                <div class="topContacts_new">
                    <span><i class="far fa-envelope-open"></i>  <a href="mailto:info@donaulab.ru">info@donaulab.ru</a></span>
                </div>

                <div class="sendEnquiry">
                    <span class="header_phone">+7 (495) 255-33-89</span><br>
                    <div><a href="/otpravit-zapros/"><span>Отправить запрос</span></a></div>
                </div>
            </div>
			<?*/?>

        </div>
        <!-- Header // -->

        <!-- // Top Menu -->
        <div class="table-box table-box_largemenu">

            <!-- // Top Navigation -->
            <div class="drop-menu">
                <div class="miniMenu" onclick="">
                    <div class="miniIconPanel">
                     <!--    <input type="radio" name="miniMenu" id="open">
                        <input type="radio" name="miniMenu" id="close" checked="checked">
                        <label class="labelOpen" for="open" title="Open Menu"></label>
                        <label class="labelClose" for="close" title="Close Menu"></label>
                        <div class="miniIcon"><b></b><b></b></div>-->
                      <!--   <div class="dd_div"> -->
                      <div>
                        <div class="largemenu_icon">

                            <img src="/local/templates/main/images/menuicon1.png" alt="">
                            <span>Каталог</span>

                        </div><!-- /.largemenu_icon -->


                        <? if (1==2):?>
                        <ul class="menu menu_large">
                            <li>
                                <a href="">
                                    <img src="/local/templates/main/images/menuicon1.png" alt=""><span>Оборудование по производителям</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div class="sub-menu_large">
                                    <div class="largemenu">
                                        <div class="largemenu__content">
                                            <div class="largemenu__list">
                                                <ul>
                                                    <li><a href="">Автоклавы / Паровые стерилизаторы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                </ul>
                                            </div><!-- /.largemenu__list -->
                                            <div class="largemenu__image">
                                                <div class="largemenu__img"><img src="/local/templates/main/images/menuimage.png" alt=""></div>
                                            </div><!-- /.largemenu__image -->
                                        </div><!-- /.largemenu__content -->
                                    </div><!-- /.largemenu -->
                                </div><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="">
                                    <img src="/local/templates/main/images/menuicon2.png" alt=""><span>Оборудование по типу</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                               </a>
                               <div class="sub-menu_large">
                                    <div class="largemenu">
                                        <div class="largemenu__content">
                                            <div class="largemenu__list">
                                                <ul>
                                                    <li><a href="">Автоклавы / Паровые стерилизаторы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>
                                                    <li><a href="">Микроскопы</a></li>

                                                </ul>
                                            </div><!-- /.largemenu__list -->
                                            <div class="largemenu__image">
                                                <div class="largemenu__img"><img src="/local/templates/main/images/menuimage.png" alt=""></div>
                                            </div><!-- /.largemenu__image -->
                                        </div><!-- /.largemenu__content -->
                                    </div><!-- /.largemenu -->
                                </div><!-- /.sub-menu -->
                            </li>
                        </ul><!-- /.menu -->
                      <? endif; ?>
<!--                          --><?// if (strpos( $APPLICATION->GetCurPage(), '/manufacturer/') !== false || strpos( $APPLICATION->GetCurPage(), '/labware/') !== false):?>
                        <? if (1==2):?>
                          <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                              $APPLICATION->IncludeComponent(
                                  "bitrix:menu",
                                  "catalog_top",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                  array(
                                      // region Основные параметры
                                      "ROOT_MENU_TYPE"         =>  "catalog2",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                      // endregion
                                      // region Настройки кеширования
                                      "MENU_CACHE_TYPE"        =>  "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                      "MENU_CACHE_TIME"        =>  "3600",  // Время кеширования (сек.)
                                      "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                                      "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                                      // endregion
                                      // region Дополнительные настройки
                                      "MAX_LEVEL"              =>  "3",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                                      "CHILD_MENU_TYPE"        =>  "catalog2",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                      "USE_EXT"                =>  "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                      "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                                      "ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                                      // endregion
                                  )
                              );?>

                          <? else: ?>
                          <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                          $APPLICATION->IncludeComponent(
                              "bitrix:menu",
                              "catalog_top",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                              array(
                                  // region Основные параметры
                                  "ROOT_MENU_TYPE"         =>  "catalog",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                  // endregion
                                  // region Настройки кеширования
                                  "MENU_CACHE_TYPE"        =>  "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                  "MENU_CACHE_TIME"        =>  "3600",  // Время кеширования (сек.)
                                  "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                                  "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                                  // endregion
                                  // region Дополнительные настройки
                                  "MAX_LEVEL"              =>  "3",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                                  "CHILD_MENU_TYPE"        =>  "catalog",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                  "USE_EXT"                =>  "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                  "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                                  "ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
                                  // endregion
                              )
                          );?>
                          <? endif; ?>

                           <?/* <ul id="menu-navigation" class="menu">
                                <li><a href="javascript:;" class="haschild">О компании</a>
                                    <ul class="sub-menu">
                                        <li><a href="/o-kompanii/nasha-istoriya/">Наша история</a></li>
                                        <li><a href="/o-kompanii/nashi-klienty/">Наши клиенты</a></li>
                                        <li><a href="/o-kompanii/nashi-proekty/">Наши проекты</a></li>
                                        <li><a href="/o-kompanii/partnery-donau-lab-moscow/">Наши партнеры</a></li>
                                        <li><a href="/o-kompanii/avtorizatsii-ot-proizvoditelej/">Авторизации от производителей</a></li>
                                        <li><a href="/o-kompanii/nashi-vakansii/">Наши вакансии</a></li>
                                        <li><a href="/o-kompanii/fotogalereya/">Фотогалерея</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;" class="haschild">Оборудование</a>
                                    <ul class="sub-menu">
                                        <li><a href="/manufacturer/">Оборудование по производителю</a></li>
                                        <!-- <li><a href="/industries/">Оборудование по отраслям применения</a></li> -->
                                        <li><a href="/labware/">Оборудование по типу</a></li>
                                    </ul>
                                </li>
                                <li><a href="/servisnaya-podderzhka/">Сервис и обслуживание</a></li>
                                <li><a href="javascript:;" class="haschild">Полезное</a>
                                    <ul class="sub-menu">
                                         <li><a href="/blog/">Блог</a></li>
                                         <li><a href="/events/">Мероприятия</a></li>
                                        <li><a href="/news/">Новости</a></li>
                                        <li><a href="/seminar/" data-href="/seminar/">Семинары/Вебинары</a></li>
                                        <li><a href="/catalogs/">Каталоги</a></li>
                                        <li><a href="/sout/">СОУТ</a></li>
                                    </ul>
                                </li>
                                <li><a href="/kontakty/">Контакты</a></li>
                                <li><a href="/stocks/">Акции</a></li>
                            </ul>*/?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Navigation // -->

            <div class="sendEnquiry">
                    <div><a href="/otpravit-zapros/"><span>Отправить запрос</span></a></div>
            </div>

            <!-- // Top Search
            <div class="topSearch_new">
                <form action="/search/" method="get" id="searchform">
                    <span><input type="text" id="s" name="q" value="Поиск" onfocus="if(this.value == &#39;Поиск&#39;) {this.value=&#39;&#39;;}; return true;" onblur="if(this.value == &#39;&#39;) {this.value=&#39;Поиск&#39;;}; return true;" autocomplete="off"></span>
                    <span class="src_bttn"><input type="submit" value=" "></span>
                </form>
            </div>
             // Top Search -->

        </div><!-- Top Menu //  -->


    </div>	<!--//wrapper-->

    <!-- // mainWrap -->
    <div id="mainWrap">
        <?if($APPLICATION->GetCurPage() != '/'):?>
        <div class="innerpages">

            <!-- // Breadcrumb -->
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "",
                Array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            );?>
            <!-- Breadcrumb  // -->

            <!-- // Content Area  -->
            <div id="contentArea">

        <?endif;?>
                <?/*<h1><? $APPLICATION->ShowTitle(false); ?></h1>*/?>
