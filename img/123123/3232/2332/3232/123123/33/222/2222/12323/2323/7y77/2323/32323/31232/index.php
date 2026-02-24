<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Изготовление светодиодных дорожных знаков и оборудования от производителя \"Светдорзнак\" в Москве, купить по доступным ценам, доставка.");
$APPLICATION->SetPageProperty("title", "Производство светодиодных дорожных знаков, купить оборудование в Москве | \"Светдорзнак\"");
$APPLICATION->SetTitle("Интернет-магазин \"СветДорЗнак\"");
?>
<div class="videowblock">
	<div class="videowrapper">
		<div id="video-bg">
			<video class="video-bg_desktop" width="100%" height="auto" playsinline autoplay muted loop controls  onloadedmetadata="this.play()" id="home_video">
				<source src="/images/intro.mp4" type="video/mp4">
			</video>

		</div>

	</div>

	<div class="container">
		<div class="videocontent">
			<div class="videocontent__title">Светодиодная продукция от производителя</div>
		</div><!-- /.videocontent -->
	</div><!-- /.container -->
</div>

<div class="blockcategory ">
	<div class="container">
		<div class="blockcategory__items">
			<div class="blockcategory__item">
				<div class="categoryitem">
					<a href="/catalog/fonari-i-girlyandy/" class="categoryitem__wrapper">
						<div class="categoryitem__image categoryitem__image_top">
							<img src="/images/categoryitem1.png" alt="">
						</div><!-- /.categoryitem__image -->
						<div class="categoryitem__content">
							<div class="categoryitem__title">Фонари и гирлянды</div>

						</div><!-- /.categoryitem__content -->
					</a><!-- /.categoryitem__wrapper -->
				</div><!-- /.categoryitem -->
			</div><!-- /.blockcategory__item -->
			<div class="blockcategory__item">
				<div class="categoryitem">
					<a href="/catalog/pritsepy-prikrytiya/" class="categoryitem__wrapper">
						<div class="categoryitem__image">
							<img src="/images/categoryitem2.png" alt="">
						</div><!-- /.categoryitem__image -->
						<div class="categoryitem__content">
							<div class="categoryitem__title">Прицепы прикрытия</div>

						</div><!-- /.categoryitem__content -->
					</a><!-- /.categoryitem__wrapper -->
				</div><!-- /.categoryitem -->
			</div><!-- /.blockcategory__item -->
			<div class="blockcategory__item">
				<div class="categoryitem">
					<a href="/catalog/konusa-signalnye-stolbiki-barery/" class="categoryitem__wrapper">
						<div class="categoryitem__image">
							<img src="/images/categoryitem3.png" alt="">
						</div><!-- /.categoryitem__image -->
						<div class="categoryitem__content">
							<div class="categoryitem__title">Конусы, сигнальные столбики, барьеры</div>

						</div><!-- /.categoryitem__content -->
					</a><!-- /.categoryitem__wrapper -->
				</div><!-- /.categoryitem -->
			</div><!-- /.blockcategory__item -->
			<div class="blockcategory__item">
				<div class="categoryitem">
					<a href="/catalog/shchity-prikrytiya/" class="categoryitem__wrapper">
						<div class="categoryitem__image">
							<img src="/images/categoryitem4.png" alt="">
						</div><!-- /.categoryitem__image -->
						<div class="categoryitem__content">
							<div class="categoryitem__title">Щиты прикрытия</div>

						</div><!-- /.categoryitem__content -->
					</a><!-- /.categoryitem__wrapper -->
				</div><!-- /.categoryitem -->
			</div><!-- /.blockcategory__item -->
			<div class="blockcategory__item">
				<div class="categoryitem">
					<a href="/catalog/svetodiodnye-znaki/" class="categoryitem__wrapper">
						<div class="categoryitem__image">
							<img src="/images/categoryitem5.png" alt="">
						</div><!-- /.categoryitem__image -->
						<div class="categoryitem__content">
							<div class="categoryitem__title">Световые знаки</div>

						</div><!-- /.categoryitem__content -->
					</a><!-- /.categoryitem__wrapper -->
				</div><!-- /.categoryitem -->
			</div><!-- /.blockcategory__item -->
		</div><!-- /.blockcategory__items -->
	</div><!-- /.container -->
</div>
<? /* <div class="mainblock">
			<div class="container">
					<div class="mainblock__content">
							<div class="mainblock__left">
									<?$APPLICATION->IncludeComponent(
"bitrix:news.list",
"link_top",
Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"ADD_SECTIONS_CHAIN" => "N",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"AJAX_OPTION_HISTORY" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "N",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"CACHE_TIME" => "36000000",
	"CACHE_TYPE" => "A",
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"DISPLAY_DATE" => "N",
	"DISPLAY_NAME" => "N",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "N",
	"DISPLAY_TOP_PAGER" => "N",
	"FIELD_CODE" => array("",""),
	"FILTER_NAME" => "",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"IBLOCK_ID" => "9",
	"IBLOCK_TYPE" => "tools",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"INCLUDE_SUBSECTIONS" => "N",
	"MESSAGE_404" => "",
	"NEWS_COUNT" => "100",
	"PAGER_BASE_LINK_ENABLE" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => ".default",
	"PAGER_TITLE" => "Новости",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"PREVIEW_TRUNCATE_LEN" => "",
	"PROPERTY_CODE" => array("SECT_REF",""),
	"SET_BROWSER_TITLE" => "N",
	"SET_LAST_MODIFIED" => "N",
	"SET_META_DESCRIPTION" => "N",
	"SET_META_KEYWORDS" => "N",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "N",
	"SHOW_404" => "N",
	"SORT_BY1" => "SORT",
	"SORT_BY2" => "SORT",
	"SORT_ORDER1" => "ASC",
	"SORT_ORDER2" => "ASC",
	"STRICT_SECTION_CHECK" => "N"
)
);?>
							</div>
							<div class="mainblock__right">
									<div class="mainblock__slider">
											<div class="mainslider">
													<div class="mainslider__container">
															<div class="mainslider__slider">
																	<div class="mainslider__slide">
																			<div class="mainslider__content" style="background-image: url(<?=SITE_TEMPLATE_PATH; ?>/images/slide1.jpg)">
																					<a href="/catalog/fonari-i-girlyandy/">
																							<div class="mainslider__title">Сигнальные фонари и гирлянды от производителя</div>
																					</a>
																			</div>
																	</div>
																	<div class="mainslider__slide">
																			<div class="mainslider__content" style="background-image: url(<?=SITE_TEMPLATE_PATH; ?>/images/slide2.jpg)">
																					<a href="/catalog/shchity-prikrytiya/">
																							<div class="mainslider__title">Дорожное щиты от производителя</div>
																					</a>
																			</div>
																	</div>
																	<div class="mainslider__slide">
																			<div class="mainslider__content" style="background-image: url(<?=SITE_TEMPLATE_PATH; ?>/images/slide3.jpg)">
																					<a href="/catalog/pritsepy-prikrytiya/">
																							<div class="mainslider__title">Прицепы прикрытия от производителя</div>
																					</a>
																			</div>
																	</div>

															</div>
													</div>
											</div>
									</div>
							</div>
					</div>
					<div class="main-block-text">
							<?$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
Array(
	"AREA_FILE_RECURSIVE" => "Y",
	"AREA_FILE_SHOW" => "file",
	"AREA_FILE_SUFFIX" => "inc",
	"PATH" => SITE_DIR."includes/main.text1.php"
)
);?>
					</div>
			</div>
	</div>
*/ ?>
<div class="tabsblock tabsblock_index">
	<div class="container">
		<h2>Новинки</h2>
		<div class="tabsblock__wrapper">
			<div class="tabsblock__tabs">
				<div class="tabs">


					<div class="tabs__content active">
						<? $APPLICATION->IncludeComponent(
							"bitrix:catalog.section",
							"slide",
							array(
								"ACTION_VARIABLE" => "action",
								"ADD_PICT_PROP" => "-",
								"ADD_PROPERTIES_TO_BASKET" => "Y",
								"ADD_SECTIONS_CHAIN" => "N",
								"ADD_TO_BASKET_ACTION" => "ADD",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"BACKGROUND_IMAGE" => "-",
								"BASKET_URL" => "/personal/cart/",
								"BROWSER_TITLE" => "-",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"COMPATIBLE_MODE" => "Y",
								"COMPONENT_TEMPLATE" => "slide",
								"CONVERT_CURRENCY" => "N",
								"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":{\"1\":{\"CLASS_ID\":\"CondIBProp:4:53\",\"DATA\":{\"logic\":\"Equal\",\"value\":\"Y\"}}}}",
								"DETAIL_URL" => "catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
								"DISABLE_INIT_JS_IN_COMPONENT" => "N",
								"DISPLAY_BOTTOM_PAGER" => "Y",
								"DISPLAY_COMPARE" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"ELEMENT_SORT_FIELD" => "sort",
								"ELEMENT_SORT_FIELD2" => "id",
								"ELEMENT_SORT_ORDER" => "asc",
								"ELEMENT_SORT_ORDER2" => "desc",
								"ENLARGE_PRODUCT" => "STRICT",
								"FILTER_NAME" => "arrFilterNew",
								"HIDE_NOT_AVAILABLE" => "N",
								"HIDE_NOT_AVAILABLE_OFFERS" => "N",
								"IBLOCK_ID" => "4",
								"IBLOCK_TYPE" => "catalog",
								"INCLUDE_SUBSECTIONS" => "Y",
								"LABEL_PROP" => array(),
								"LAZY_LOAD" => "N",
								"LINE_ELEMENT_COUNT" => "3",
								"LOAD_ON_SCROLL" => "N",
								"MESSAGE_404" => "",
								"MESS_BTN_ADD_TO_BASKET" => "В корзину",
								"MESS_BTN_BUY" => "Купить",
								"MESS_BTN_DETAIL" => "Подробнее",
								"MESS_BTN_SUBSCRIBE" => "Подписаться",
								"MESS_NOT_AVAILABLE" => "Нет в наличии",
								"META_DESCRIPTION" => "-",
								"META_KEYWORDS" => "-",
								"OFFERS_FIELD_CODE" => array(0 => "", 1 => "", ),
								"OFFERS_LIMIT" => "5",
								"OFFERS_SORT_FIELD" => "sort",
								"OFFERS_SORT_FIELD2" => "id",
								"OFFERS_SORT_ORDER" => "asc",
								"OFFERS_SORT_ORDER2" => "desc",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Товары",
								"PAGE_ELEMENT_COUNT" => "18",
								"PARTIAL_PRODUCT_PROPERTIES" => "N",
								"PRICE_CODE" => array(0 => "BASE", ),
								"PRICE_VAT_INCLUDE" => "Y",
								"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
								"PRODUCT_DISPLAY_MODE" => "N",
								"PRODUCT_ID_VARIABLE" => "id",
								"PRODUCT_PROPS_VARIABLE" => "prop",
								"PRODUCT_QUANTITY_VARIABLE" => "quantity",
								"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
								"PRODUCT_SUBSCRIPTION" => "Y",
								"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
								"RCM_TYPE" => "personal",
								"SECTION_CODE" => "",
								"SECTION_CODE_PATH" => "",
								"SECTION_ID" => $_REQUEST["SECTION_ID"],
								"SECTION_ID_VARIABLE" => "SECTION_ID",
								"SECTION_URL" => "catalog/#SECTION_CODE_PATH#/",
								"SECTION_USER_FIELDS" => array(0 => "", 1 => "", ),
								"SEF_MODE" => "N",
								"SEF_RULE" => "",
								"SET_BROWSER_TITLE" => "N",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "N",
								"SET_META_KEYWORDS" => "N",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "N",
								"SHOW_404" => "N",
								"SHOW_ALL_WO_SECTION" => "N",
								"SHOW_CLOSE_POPUP" => "N",
								"SHOW_DISCOUNT_PERCENT" => "Y",
								"SHOW_FROM_SECTION" => "N",
								"SHOW_MAX_QUANTITY" => "N",
								"SHOW_OLD_PRICE" => "Y",
								"SHOW_PRICE_COUNT" => "1",
								"SHOW_SLIDER" => "Y",
								"SLIDER_INTERVAL" => "3000",
								"SLIDER_PROGRESS" => "N",
								"TEMPLATE_THEME" => "blue",
								"USE_ENHANCED_ECOMMERCE" => "N",
								"USE_MAIN_ELEMENT_SECTION" => "N",
								"USE_PRICE_COUNT" => "N",
								"USE_PRODUCT_QUANTITY" => "N"
							)
						); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<? /*
	<?$APPLICATION->IncludeComponent(
"bitrix:news.list",
"link_prod",
Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",
	"ADD_SECTIONS_CHAIN" => "N",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_ADDITIONAL" => "",
	"AJAX_OPTION_HISTORY" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "N",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"CACHE_TIME" => "36000000",
	"CACHE_TYPE" => "A",
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"DISPLAY_DATE" => "N",
	"DISPLAY_NAME" => "N",
	"DISPLAY_PICTURE" => "Y",
	"DISPLAY_PREVIEW_TEXT" => "N",
	"DISPLAY_TOP_PAGER" => "N",
	"FIELD_CODE" => array("",""),
	"FILTER_NAME" => "",
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",
	"IBLOCK_ID" => "10",
	"IBLOCK_TYPE" => "tools",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"INCLUDE_SUBSECTIONS" => "N",
	"MESSAGE_404" => "",
	"NEWS_COUNT" => "100",
	"PAGER_BASE_LINK_ENABLE" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => ".default",
	"PAGER_TITLE" => "Новости",
	"PARENT_SECTION" => "",
	"PARENT_SECTION_CODE" => "",
	"PREVIEW_TRUNCATE_LEN" => "",
	"PROPERTY_CODE" => array("SECT_REF",""),
	"SET_BROWSER_TITLE" => "N",
	"SET_LAST_MODIFIED" => "N",
	"SET_META_DESCRIPTION" => "N",
	"SET_META_KEYWORDS" => "N",
	"SET_STATUS_404" => "N",
	"SET_TITLE" => "N",
	"SHOW_404" => "N",
	"SORT_BY1" => "SORT",
	"SORT_BY2" => "SORT",
	"SORT_ORDER1" => "ASC",
	"SORT_ORDER2" => "ASC",
	"STRICT_SECTION_CHECK" => "N"
)
);?>

*/ ?>
<div class="imgsliderblock pageblock">
	<div class="container">
		<div class="imgsliderblock__container">
			<div class="imgsliderblock__header">
				<h2>Акции</h2>
				<a href='#' class="btn btn_main btn_main2">Смотреть все</a>
			</div><!-- /.imgsliderblock__header -->
			<div class="imgsliderblock__slider">
				<div class="imgsliderblock__slide">
					<div class="imgslide">
						<a href='#' class="imgslide__wrapper">
							<div class="imgslide__img">
								<img src="/images/imgslide1.jpg" alt="">
							</div><!-- /.imgslide__img -->
						</a><!-- /.imgslide__wrapper -->
					</div><!-- /.imgslide -->
				</div><!-- /.imgsliderblock__slide -->
				<div class="imgsliderblock__slide">
					<div class="imgslide">
						<a href='#' class="imgslide__wrapper">
							<div class="imgslide__img">
								<img src="/images/imgslide2.jpg" alt="">
							</div><!-- /.imgslide__img -->
						</a><!-- /.imgslide__wrapper -->
					</div><!-- /.imgslide -->
				</div><!-- /.imgsliderblock__slide -->
			</div><!-- /.imgsliderblock__slider -->
		</div><!-- /.imgsliderblock__container -->
	</div><!-- /.container -->
</div><!-- /.imgsliderblock -->
<div class="pageblock homeseoblock">
<div class="container">
	<div class="main-block-text">
		<? $APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"PATH" => SITE_DIR . "includes/main.text2.php"
			)
		); ?>
	</div>
</div>


<div class="container">
	<div class="main-block-text">
		<? $APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"PATH" => SITE_DIR . "includes/main.text3.php"
			)
		); ?>
	</div>
</div>
</div>

<div class="homefitches">
			<div class="container">
				<div class="homefitches__title">
					<h2>Преимущества нашей компании</h2>
				</div><!-- /.homefitches__title -->
				<div class="homefitches__text">Изготовление знаков дорожного движения силами нашей компании – это:</div>
				<!-- /.homefitches__text -->
				<div class="homefitches__list">
					<div class="homefitches__item">
						<div class="homefitches__icon">
							<img src="/images/homefitches1.svg" alt="">
						</div><!-- /.homefitches__icon -->
						<div class="homefitches__value">привлечение к производственному процессу квалифицированных сотрудников;
						</div><!-- /.homefitches__value -->
					</div><!-- /.homefitches__item -->
					<div class="homefitches__item">
						<div class="homefitches__icon">
							<img src="/images/homefitches2.svg" alt="">
						</div><!-- /.homefitches__icon -->
						<div class="homefitches__value">использование современного оборудования;сдача заказов точно в срок;
						</div><!-- /.homefitches__value -->
					</div><!-- /.homefitches__item -->
					<div class="homefitches__item">
						<div class="homefitches__icon">
							<img src="/images/homefitches3.svg" alt="">
						</div><!-- /.homefitches__icon -->
						<div class="homefitches__value">предоставление гарантии на товары;
						</div><!-- /.homefitches__value -->
					</div><!-- /.homefitches__item -->
					<div class="homefitches__item">
						<div class="homefitches__icon">
							<img src="/images/homefitches4.svg" alt="">
						</div><!-- /.homefitches__icon -->
						<div class="homefitches__value">доступные цены без потери качества;
						</div><!-- /.homefitches__value -->
					</div><!-- /.homefitches__item -->
					<div class="homefitches__item">
						<div class="homefitches__icon">
							<img src="/images/homefitches5.svg" alt="">
						</div><!-- /.homefitches__icon -->
						<div class="homefitches__value">профессиональные консультации службы поддержки;
						</div><!-- /.homefitches__value -->
					</div><!-- /.homefitches__item -->
					<div class="homefitches__item">
						<div class="homefitches__icon">
							<img src="/images/homefitches6.svg" alt="">
						</div><!-- /.homefitches__icon -->
						<div class="homefitches__value">быстрая доставка продукции по территории России.
						</div><!-- /.homefitches__value -->
					</div><!-- /.homefitches__item -->
				</div><!-- /.homefitches__list -->
				<div class="homefitches__block">
					<div class="homefitches__blockicon">
						<img src="/images/homefitches__blockicon.svg" alt="">
					</div><!-- /.homefitches__blockicon -->
					<div class="homefitches__blockcontent">
						<div class="homefitches__blocktitle">Мы делаем все для обеспечения идеального сервиса:</div><!-- /.homefitches__blocktitle -->
						<div class="homefitches__blocktext">сопровождаем клиентов на всех этапах совершения покупки, отвечаем на возникшие вопросы и, конечно, предоставляем качественные товары. Делайте заказы на производство дорожных знаков в Москве в компании "Светдорзнак".</div><!-- /.homefitches__blocktext -->
					</div><!-- /.homefitches__blockcontent -->
				</div><!-- /.homefitches__block -->
			</div><!-- /.container -->
		</div>

<div class="newsblock newsblock_slider">
	<div class="container">
		<h2>Последние статьи</h2>
		<div class="newslist newslist_container">
			<div class="newslist__items newslist__items_slider">
				<? $APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"blog_on_main",
					array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"CACHE_FILTER" => "N",
						"CACHE_GROUPS" => "Y",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "Y",
						"DISPLAY_DATE" => "Y",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"FIELD_CODE" => array("", ""),
						"FILTER_NAME" => "",
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",
						"IBLOCK_ID" => "6",
						"IBLOCK_TYPE" => "content",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"INCLUDE_SUBSECTIONS" => "Y",
						"MESSAGE_404" => "",
						"NEWS_COUNT" => "3",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_DESC_NUMBERING" => "N",
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Новости",
						"PARENT_SECTION" => "",
						"PARENT_SECTION_CODE" => "",
						"PREVIEW_TRUNCATE_LEN" => "",
						"PROPERTY_CODE" => array("", ""),
						"SET_BROWSER_TITLE" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"SORT_BY1" => "ACTIVE_FROM",
						"SORT_BY2" => "SORT",
						"SORT_ORDER1" => "DESC",
						"SORT_ORDER2" => "ASC",
						"STRICT_SECTION_CHECK" => "N"
					)
				); ?>
			</div>

			<div class="newslist__button"><a href="/blog/" class="btn_main btn_main2">Перейти в блог</a></div>
		</div>
	</div>
</div>
<? /*
<div class="container">
	<div class="main-block-text">
		<? $APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			array(
				"AREA_FILE_RECURSIVE" => "Y",
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"PATH" => SITE_DIR . "includes/main.text4.php"
			)
		); ?>
	</div>
</div>
*/ ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>