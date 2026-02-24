<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "4* дизайн-отель «Акварель» удобно расположен в центре Москвы (Тверской район). Размещение в комфортабельных номерах с авторским дизайном. Рядом Красная площадь и быстрый доступ к метро! Выгодные спецпредложения без посредников. Детали на сайте или по: ☎ +7 (495) 502-94-30");
$APPLICATION->SetPageProperty("title", "4* бутик-отель «Акварель» – официальный сайт");
$APPLICATION->SetTitle("4* гостиница «Акварель» в Москве");
?>
<div class="wrapper">

	<div class="landing-wrapper">


		<div class="landing-elem fp-auto-height">
		
		<div class="wrapper">

            <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
        "IS_MOBILE" => isMobile(),
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
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "28",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
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
		"PROPERTY_CODE" => array(
			0 => "SLIDE_LINK",
			1 => "SLIDE_LINK",
			2 => "",
		),
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>

			<div class="page-cover">
						<div class="page-cover-inner">
					                        <? $APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"main_slider",
						array(
							"COMPONENT_TEMPLATE" => "main_slider",
							"IBLOCK_TYPE" => "info",
							"IBLOCK_ID" => "22",
							"NEWS_COUNT" => "999",
							"SORT_BY1" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => array(
								0 => "PREVIEW_PICTURE",
								1 => "DETAIL_PICTURE",
								2 => "",
							),
							"PROPERTY_CODE" => array(
								0 => "",
								1 => "TIME_ACTIVE",
								2 => "MOB_IMG",
								3 => "",
							),
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "N",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "36000000",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "N",
							"SET_BROWSER_TITLE" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_LAST_MODIFIED" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"ADD_SECTIONS_CHAIN" => "N",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "N",
							"STRICT_SECTION_CHECK" => "N",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"PAGER_TEMPLATE" => "",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"SET_STATUS_404" => "N",
							"SHOW_404" => "N",
							"MESSAGE_404" => ""
						),
						false
					); ?>
					                    </div>
					</div>

		</div>
		</div>
		
		
		<div class="landing-elem fp-auto-height">
			<div class="wrapper white">
				<div class="box section-container">
				
						<div class="box">
						<div class="widget-wrapper animate-up2 block-search">
							<div id="tl-search-form" class="main-form"></div>
						  </div>
					</div>
					<div class="section-head-wrap">
						<div class="section-head animate-up">
							<div class="section-svg">
								<?$APPLICATION->IncludeFile(SITE_DIR.'include/pages/main/about_svg_title.php', [], ["SHOW_BORDER" => false]);?>
							</div>
						</div>
					</div>
					
				
					
					<div class="section-content animate-bg">
						<div class="hotel-about-wrap">
							<div class="hotel-about">
								<div class="hotel-about-text">
									<div class="hotel-about-text-content">
										<?$APPLICATION->IncludeComponent(
											"bitrix:main.include",
											"",
											Array(
												"AREA_FILE_SHOW" => "file",
												"AREA_FILE_SUFFIX" => "inc",
												"EDIT_TEMPLATE" => "",
												"PATH" => SITE_DIR."include/pages/main/about_text.php"
											)
										);?>
									</div>
									<div class="hotel-about-text-feature">
										<div class="feature-elem">
											<div class="feature-elem-num">
												<?$APPLICATION->IncludeFile(SITE_DIR.'include/pages/main/about_svg_1.php', [], ["SHOW_BORDER" => false]);?>
											</div>
											<div class="feature-elem-text">
												<div class="text-gold"><?=GetMessage("SVG_TEXT_1")?></div>
											</div>
										</div>
										<div class="feature-elem">
											<div class="feature-elem-num">
												<?$APPLICATION->IncludeFile(SITE_DIR.'include/pages/main/about_svg_2.php', [], ["SHOW_BORDER" => false]);?>
											</div>
											<div class="feature-elem-text">
												<div class="text-gold"><?=GetMessage("SVG_TEXT_2")?></div>
											</div>
										</div>
									</div>
								</div>
								<div class="hotel-about-img">
									<?$APPLICATION->IncludeComponent(
	"flxmd:variable.set", 
	"main_design", 
	array(
		"FILE" => "/upload/medialibrary/6d5/6d5c0eddd55211ffb26c4d4f26a73140.jpg",
		"COMPONENT_TEMPLATE" => "main_design",
		"ALT" => "отель \"Акварель\" лобби"
	),
	false
);?>
								</div>
							</div>
							<div class="btn-wrap">
								<a class="btn" href="<?=SITE_DIR?>about/">
									<span><?=GetMessage("MORE_HOTEL_BUTTON")?></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="landing-elem fp-auto-height">
			<div class="wrapper blk">
				<div class="box section-container">
					<div class="section-head-wrap">
						<div class="section-head animate-up">
							<div class="section-svg">
								<?$APPLICATION->IncludeFile(SITE_DIR.'include/pages/main/rooms_svg_title.php', [], ["SHOW_BORDER" => true, "MODE"=>"php"]);?>
							</div>
						</div>
					</div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"rooms_main",
						array(
							"COMPONENT_TEMPLATE" => "rooms_main",
							"IBLOCK_TYPE" => "info",
							"IBLOCK_ID" => "5",
							"NEWS_COUNT" => "2",
							"SORT_BY1" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "NAME",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => array(
								0 => "",
								1 => "",
							),
							"PROPERTY_CODE" => array(
								0 => "",
								1 => "",
							),
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "N",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "36000000",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "N",
							"SET_BROWSER_TITLE" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_LAST_MODIFIED" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"ADD_SECTIONS_CHAIN" => "N",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "N",
							"STRICT_SECTION_CHECK" => "N",
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"PAGER_TEMPLATE" => "",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"SET_STATUS_404" => "N",
							"SHOW_404" => "N",
							"MESSAGE_404" => ""
						),
						false
					);?>
				</div>
			</div>
		</div>
		<div class="landing-elem fp-auto-height">
			<div class="wrapper white">
				<div class="box section-container">
					<div class="section-head-wrap">
						<div class="section-head animate-up">
							<div class="section-svg">
								<?$APPLICATION->IncludeFile(SITE_DIR.'include/pages/main/news_svg_title.php', [], ["SHOW_BORDER" => true, "MODE"=>"php"]);?>
							</div>
						</div>
					</div>
					<?$APPLICATION->IncludeComponent("bitrix:news.list", "news_main", Array(
						"COMPONENT_TEMPLATE" => "rooms_main",
						"IBLOCK_TYPE" => "info",	// Тип информационного блока (используется только для проверки)
						"IBLOCK_ID" => "6",	// Код информационного блока
						"NEWS_COUNT" => "2",	// Количество новостей на странице
						"SORT_BY1" => "PROPERTY_MAIN_FIX",	// Поле для первой сортировки новостей
						"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
						"SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
						"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
						"FILTER_NAME" => "",	// Фильтр
						"FIELD_CODE" => array(	// Поля
						                          0 => "",
						                          1 => "",
						),
						"PROPERTY_CODE" => array(	// Свойства
						                             0 => "TIME_ACTIVE",
						                             1 => "",
						),
						"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
						"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
						"AJAX_MODE" => "N",	// Включить режим AJAX
						"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
						"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
						"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
						"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
						"CACHE_TYPE" => "A",	// Тип кеширования
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "Y",	// Учитывать права доступа
						"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
						"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
						"SET_TITLE" => "N",	// Устанавливать заголовок страницы
						"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
						"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
						"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
						"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
						"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
						"PARENT_SECTION" => "",	// ID раздела
						"PARENT_SECTION_CODE" => "",	// Код раздела
						"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
						"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
						"DISPLAY_DATE" => "N",	// Выводить дату элемента
						"DISPLAY_NAME" => "Y",	// Выводить название элемента
						"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
						"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
						"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
						"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
						"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
						"PAGER_TITLE" => "Новости",	// Название категорий
						"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
						"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
						"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
						"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
						"SET_STATUS_404" => "N",	// Устанавливать статус 404
						"SHOW_404" => "N",	// Показ специальной страницы
						"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					),
						false
					);?>
				</div>
			</div>
		</div>
		<div class="landing-elem fp-auto-height">
			<div class="wrapper gray">
				<div class="box section-container">
					<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"instagram", 
	array(
		"COMPONENT_TEMPLATE" => "instagram",
		"IBLOCK_TYPE" => "info",
		"IBLOCK_ID" => "4",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"INSTAGRAM_LINK" => "https://www.instagram.com/akvarel_hotel/"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>
				</div>
			</div>
		</div>
		<div class="landing-elem fp-auto-height">
			<?$APPLICATION->ShowViewContent('footer_content');?>
		</div>
	</div>
</div>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>