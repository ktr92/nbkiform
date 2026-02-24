<?php

use Bitrix\Main\Page\Asset;
use \Bitrix\Main\Localization\Loc;
use App\Classes\{Wrapper, Request, Format};

global $APPLICATION, $USER;
Loc::loadMessages(__FILE__);

define("CUR_PAGE", $APPLICATION->GetCurPage(FALSE));
define('IS_MAIN_PAGE', CUR_PAGE === SITE_DIR ? TRUE : FALSE);
define('IS_LANDING_PAGE', $APPLICATION->GetDirProperty('landing') ? TRUE : FALSE);
define('ASSETS_PATH', SITE_TEMPLATE_PATH . '/public');
define('INCLUDE_AREA_PATH', SITE_TEMPLATE_PATH . '/include');
define('WRAPPER', Wrapper::getPageWrapper(IS_MAIN_PAGE));

if (Request::isAjax())
    return;

CJSCore::Init(["fx"]);

$fonts = [
    'Jost-Regular',
    'Jost-Bold',
    'Jost-ExtraBold',
    'Jost-BoldItalic',
    'Jost-Light',
    'Jost-Medium',
    'Jost-SemiBold',
    'Jost-MediumItalic',
    'SofiaSans-Regular',
    'SofiaSans-Bold'
];

$ASSETS = Asset::getInstance();
$ASSETS->addCss(ASSETS_PATH . '/css/bootstrap.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/swiper-bundle.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/lightbox.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/datepicker.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/main.bundle.css');
$ASSETS->addCss(ASSETS_PATH . '/css/custom.css');

$ASSETS->addJs(ASSETS_PATH . '/js/jquery.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/bootstrap.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/jquery.inputmask.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/swiper-bundle.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/wow.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/lightbox.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/jquery.validate.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/datepicker.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/messages_ru.js');
$ASSETS->addJs(ASSETS_PATH . '/js/index.js');
$ASSETS->addJs(ASSETS_PATH . '/js/app.js');
//$ASSETS->addJs('https://www.google.com/recaptcha/api.js?render=' . siteHelper::GOOGLE_RECAPTCHA_SITE_KEY);?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8"/>
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link rel="icon" type="image/png" href="<?= ASSETS_PATH ?>/img/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/svg+xml" href="<?= ASSETS_PATH ?>/img/favicon.svg">
	<link rel="shortcut icon" href="<?= ASSETS_PATH ?>/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= ASSETS_PATH ?>/img/apple-touch-icon.png">
	<link rel="manifest" href="<?= ASSETS_PATH ?>/img/site.webmanifest">
    <?php $APPLICATION->ShowMeta("description") ?>
    <?php $APPLICATION->ShowMeta("canonical") ?>
    <?//php $APPLICATION->ShowMeta("keywords") ?>
    <?php
    foreach ($fonts as $font) {
        echo '<link rel="preload" href="' . ASSETS_PATH . '/fonts/' . $font . '.woff" as="font" type="font/woff2" crossorigin>' . PHP_EOL;
        echo '<link rel="preload" href="' . ASSETS_PATH . '/fonts/' . $font . '.woff2" as="font" type="font/woff2" crossorigin>' . PHP_EOL;
    }
    ?>
	<script data-skip-moving="true"
	        src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_SITE_KEY ?>"></script>
	<script data-skip-moving="true">
        const recaptchaSiteKey = '<?=RECAPTCHA_SITE_KEY?>';
        window.dataLayer = window.dataLayer || [];
	</script>
    <?php $APPLICATION->ShowCSS(); ?>
    <?php $APPLICATION->ShowHeadStrings(); ?>
    <?php $APPLICATION->ShowHeadScripts(); ?>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>
<div class="jsbackdrop "></div>
<div class="mobilemenu" data-menu="mainmenu">
	<div class="mobilemenu__wrapper">
		<div class="mobilemenu__block">
			<div class="mobilemenu__menu">
				<div class="headermenu__topmenu ">
					<div class="topmenu">
						<div class="topmenu__items">
                            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                            $APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "mobile__header",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                array(
                                    // region Основные параметры
                                    "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                    // endregion
                                    // region Настройки кеширования
                                    "MENU_CACHE_TYPE" => "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                    "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
                                    "MENU_CACHE_USE_GROUPS" => "N",     // Учитывать права доступа
                                    "MENU_CACHE_GET_VARS" => "",      // Значимые переменные запроса
                                    // endregion
                                    // region Дополнительные настройки
                                    "MAX_LEVEL" => "2",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                                    "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                    "USE_EXT" => "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    "DELAY" => "N",     // Откладывать выполнение шаблона меню
                                    "ALLOW_MULTI_SELECT" => "N",     // Разрешить несколько активных пунктов одновременно
                                    // endregion
                                )
                            ); ?>
						</div><!-- /.topmenu__items -->
					</div><!-- /.topmenu -->
				</div>
			</div>
			<!-- /.mobilemenu__menu -->
		</div>
		<!-- /.mobilemenu__block -->

		<div class="mobilemenu__block menucontancts">
			<div class="contactline contactline__phone">
                <?php Wrapper::showIncludeArea('/include/mobile.phone.php') ?>
			</div>
			<div class="contactline contactline__email">
                <?php Wrapper::showIncludeArea('/include/email.php') ?>
			</div>
			<div class=" contactline__messenger">
                <?php Wrapper::showIncludeArea('/include/whatsapp.mobile.php') ?>
			</div>
		</div>

		<div class="mobilemenu__app">
			<div class="mobilemenu__apptext">
                <?php Wrapper::showIncludeArea('/include/mobile.app.text.php') ?>
			</div>
			<div class="mobilemenu__appbuttons">
                <?php Wrapper::showIncludeArea('/include/mobile.app.php') ?>
			</div><!-- /.mobilemenu__appbuttons -->
		</div><!-- /.mobilemenu__app -->

	</div>
	<!-- /.mobilemenu__wrapper -->
</div>
<header id="header" class="header">

	<div class='headerwrapper'>
		<div class="container">
			<div>
				<div class="headermain">
					<div class="headermain__left">
						<div class="headermain__logo">
							<a <?= (IS_MAIN_PAGE ? '' : 'href="/"') ?> class='logo' aria-label='logo'>
								<img loading="lazy" src="<?= ASSETS_PATH ?>/img/logo.svg" alt="logo" title="sweetstore"
								     width='143' height='117'>
							</a>
						</div>

					</div>
					<!-- /.headermain__left-->
					<div class="headermain__right">
						<div class="headermain__search onlyDesktop">
							<form action="/katalog/">
								<div class="searchinput">
									<button type="submit" aria-label="Search2"><img
									                                                loading="lazy" src="<?= ASSETS_PATH ?>/img/Search.svg"
									                                                alt="" title="" width='23'
									                                                height='23'></button>
									<input type="text" name="q" placeholder='Я ищу' value="<?= htmlspecialchars($_REQUEST['q']) ?>"">
								</div>
							</form>
						</div>
						<div class="headermain__contacts onlyDesktop">
							<div class="contactline">
								<div class="contactline__phone">
                                    <?php Wrapper::showIncludeArea('/include/phone.php') ?>
								</div><!-- /.contactline__phone -->
								<div class="contactline__messenger">
                                    <?php Wrapper::showIncludeArea('/include/whatsapp.php') ?>
								</div><!-- /.contactline__messenger -->
								<div class="contactline__callback">
									<a href="#popup_callback" data-toggle="modal" class='btn_main animatebtn'
									   aria-label='callback'>Заказать звонок</a>
								</div><!-- /.contactline__callback -->
							</div><!-- /.contactline -->
						</div>
						<!-- /.headermain__contacts -->
						<div class="headermain__iconlinks">
							<div class="iconlinks">

								<div class="iconlinks__item">
                                    <?php
                                    $APPLICATION->IncludeComponent("custom:favorits", "header",
                                        array()
                                    ) ?>
								</div>
								<div class="iconlinks__item">
                                    <? // Ссылка на корзину
                                    $APPLICATION->IncludeComponent(
                                        "bitrix:sale.basket.basket.line",
                                        "header",               // [eshop_adapt, .default]
                                        array(
                                            // region Основные параметры
                                            "PATH_TO_BASKET" => "/personal/cart/",  // Страница корзины
                                            "SHOW_NUM_PRODUCTS" => "Y",                           // Показывать количество товаров
                                            "SHOW_TOTAL_PRICE" => "Y",                           // Показывать общую сумму по товарам
                                            "SHOW_EMPTY_VALUES" => "N",                           // Выводить нулевые значения в пустой корзине
                                            // endregion
                                            // region Персональный раздел
                                            "SHOW_PERSONAL_LINK" => "N",                           // Отображать персональный раздел
                                            "PATH_TO_PERSONAL" => "",       // Страница персонального раздела
                                            // endregion
                                            // region Авторизация
                                            "SHOW_AUTHOR" => "N",                           // Добавить возможность авторизации
                                            "PATH_TO_REGISTER" => "",          // Страница регистрации
                                            "PATH_TO_PROFILE" => "",       // Страница профиля
                                            // endregion
                                            // region Список товаров
                                            "SHOW_PRODUCTS" => "Y",                           // Показывать список товаров
                                            // endregion
                                            // region Внешний вид
                                            "POSITION_FIXED" => "N",                           // Отображать корзину поверх шаблона
                                            // endregion
                                        )
                                    ); ?>
								</div>
								<div class="iconlinks__item onlyMobile">
									<a href="#" data-menutoggle="mainmenu" class='menuicon' aria-label='menu'>
										<span></span>
										<span></span>
										<span></span>
									</a>
								</div>
							</div>
							<!-- /.iconlinks -->
						</div>
						<!-- /.headermain__iconlinks -->
					</div>
					<!-- /.headermain__right -->
				</div>
				<!-- /.headermain -->
			</div>

			<div id='headermain' class="headermenu__stickty">
				<div class="headermenu">
					<div class="headermenu__catalog">
						<div class="headermain__menu">

							<button class='mainmenubtn animatebtn' data-menutoggle='catalogmenu'
							        aria-label="catalogmenu">
								<span>
									<img class="burgericon icon--white onlyDesktop offHover"
									     loading="lazy" src="<?= ASSETS_PATH ?>/img/burger.svg" alt="burger" title="burger"
									     width='18' height='18'>
									<img class="burgericon icon--white onlyMobile "
									     loading="lazy" src="<?= ASSETS_PATH ?>/img/burger2.svg" alt="burger" title="burger"
									     width='18' height='18'>
									<img class="burgericon icon--white  onHover"
									     loading="lazy" src="<?= ASSETS_PATH ?>/img/burger2.svg" alt="burger" title="burger"
									     width='18' height='18'>
									<span>Каталог</span>
								</span>
								<span class='menuexpand'>
									<img  loading="lazy" src="<?= ASSETS_PATH ?>/img/expand.svg" alt="expand"
									     title="expand" class='onlyDesktop offHover' width='8' height='5'>
									<img  loading="lazy" src="<?= ASSETS_PATH ?>/img/expand2.svg" alt="expand"
									     title="expand" class='onlyMobile ' width='8' height='5'>
									<img  loading="lazy" src="<?= ASSETS_PATH ?>/img/expand2.svg" alt="expand"
									     title="expand" class='onHover' width='8' height='5'>
								</span>

							</button>

							<?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
							$APPLICATION->IncludeComponent(
								"bitrix:menu",
								"catalog",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
								array(
									// region Основные параметры
									"ROOT_MENU_TYPE"         =>  "catalog",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
									// endregion
									// region Настройки кеширования
									"MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
									"MENU_CACHE_TIME"        =>  "3600",  // Время кеширования (сек.)
									"MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
									"MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
									// endregion
									// region Дополнительные настройки
									"MAX_LEVEL"              =>  "2",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
									"CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
									"USE_EXT"                =>  "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
									"DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
									"ALLOW_MULTI_SELECT"     =>  "N",     // Разрешить несколько активных пунктов одновременно
									// endregion
								)
							);?>
						</div>
						<!-- /.headermain__menu -->
					</div><!-- /.headermenu__catalog -->
					<div class="headermain__search onlyMobile">
						<form action="/katalog/">
							<div class="searchinput">
								<button type="submit" aria-label="Search"><img
								                                               loading="lazy" src="<?= ASSETS_PATH ?>/img/Search.svg"
								                                               alt="search" title="search" width='18'
								                                               height='18'></button>
								<input type="text" name="q" placeholder="Я ищу">
							</div>
						</form>
					</div>
					<div class="headermenu__topmenu onlyDesktop">
						<div class="topmenu">
							<div class="topmenu__items">
                                <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                                $APPLICATION->IncludeComponent(
                                    "bitrix:menu",
                                    "mobile__header",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                    array(
                                        // region Основные параметры
                                        "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                        // endregion
                                        // region Настройки кеширования
                                        "MENU_CACHE_TYPE" => "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                        "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
                                        "MENU_CACHE_USE_GROUPS" => "N",     // Учитывать права доступа
                                        "MENU_CACHE_GET_VARS" => "",      // Значимые переменные запроса
                                        // endregion
                                        // region Дополнительные настройки
                                        "MAX_LEVEL" => "2",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                                        "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                        "USE_EXT" => "Y",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                        "DELAY" => "N",     // Откладывать выполнение шаблона меню
                                        "ALLOW_MULTI_SELECT" => "N",     // Разрешить несколько активных пунктов одновременно
                                        // endregion
                                    )
                                ); ?>
							</div><!-- /.topmenu__items -->
						</div><!-- /.topmenu -->
					</div><!-- /.headermenu__topmenu -->

				</div><!-- /.headermenu -->
			</div>
		</div>
		<!-- /.headercontainer -->
	</div>
</header>
<main>
<?php Wrapper::showPageWrapper(WRAPPER, 'before.content'); ?>
<?php Wrapper::showPageWrapper(WRAPPER, 'content'); ?>
