<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "НБКИ предоставляет большой блок отчетов, в которых собрана экспертиза всего кредитного рынка. За счет стандартизации алгоритмов построения достигается максимально возможная экономическая эффективность их использования.");
$APPLICATION->SetPageProperty("title", "Аналитика для банков и микрофинансовых институтов");
$APPLICATION->SetTitle("Аналитика");
?>
<div class="container">
	<div class="pagecontent  corppage_v4 nbki_v4">
		<div class="navpages navpages_v4">
            <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "nav",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                array(
                    // region Основные параметры
                    "ROOT_MENU_TYPE"         =>  "corp",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                    // endregion
                    // region Настройки кеширования
                    "MENU_CACHE_TYPE"        =>  "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                    "MENU_CACHE_TIME"        =>  "3600",  // Время кеширования (сек.)
                    "MENU_CACHE_USE_GROUPS"  =>  "N",     // Учитывать права доступа
                    "MENU_CACHE_GET_VARS"    =>  "",      // Значимые переменные запроса
                    // endregion
                    // region Дополнительные настройки
                    "MAX_LEVEL"              =>  "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
                    "CHILD_MENU_TYPE"        =>  "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                    "USE_EXT"                =>  "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "DELAY"                  =>  "N",     // Откладывать выполнение шаблона меню
                    "ALLOW_MULTI_SELECT"     =>  "Y",     // Разрешить несколько активных пунктов одновременно
                    // endregion
                )
            );?>
		</div>
		<div class="navtabs navtabs_v4 onlyDesktop">
            <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "tabs",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                array(
                    // region Основные параметры
                    "ROOT_MENU_TYPE"         =>  "corp_tabs",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                    // endregion
                    // region Настройки кеширования
                    "MENU_CACHE_TYPE"        =>  "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                    "MENU_CACHE_TIME"        =>  "3600",  // Время кеширования (сек.)
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
		</div><!-- /.navtabs navtabs_v4 -->
		<h1 class="innerpageh1">Аналитика</h1>

		<div class="tabstoggler onlyMobile">
			<div class="tabstoggler__btn">
				<img class="tabsburger" src="/images/tabsburger.svg" alt="">
				<img class="tabscloser" src="/images/tabscloser.svg" alt="">
			</div>
			<div class="tabstoggler__items">
                <?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "tabs_js",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                    array(
                        // region Основные параметры
                        "ROOT_MENU_TYPE"         =>  "corp_tabs",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                        // endregion
                        // region Настройки кеширования
                        "MENU_CACHE_TYPE"        =>  "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                        "MENU_CACHE_TIME"        =>  "3600",  // Время кеширования (сек.)
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
			</div>
		</div>

		<div class="itemcardlist ">
				<div class="itemcardlist  itemcardlist_nomb">
					<div class="itemcardlist__items itemcardlist__items_nomb">
						<div class="itemcardlist__item ">
							<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30 xs-mb-40">
								<div class="itemcard__title itemcard__title_small">BI аналитика НБКИ</div>
								<div class="itemcard__wrapper">
									<div class="itemcard__image xs-mb-20">
										<div class="itemcard__img">
											<svg width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_31606_7057)">
													<path d="M100.771 23H97.9452H13.8713C11.543 23 9.65137 24.887 9.65137 27.2199V31.5524H87.7969C91.1672 31.5524 93.8991 34.2843 93.8991 37.6546C93.8991 37.6546 93.8897 81.2195 93.885 96.7378C93.885 99.8077 96.3727 102.291 99.4426 102.291C102.512 102.291 105 99.803 105 96.7331V27.2152C104.991 24.8917 103.099 23 100.771 23Z" fill="#4664FF"></path>
													<path d="M6.21507 105.637H98.2594L95.213 104.042C92.6125 102.68 90.979 99.9859 90.979 97.0474V38.7951C90.979 36.4669 89.092 34.5752 86.7591 34.5752H83.9334H5.21995C2.89173 34.5752 1 36.4622 1 38.7951V100.422C1.00469 103.3 3.33766 105.637 6.21507 105.637Z" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M36.3779 63.5425L57.238 76.235" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M31.5813 65.9595C34.8893 65.9595 37.5709 63.2779 37.5709 59.97C37.5709 56.6621 34.8893 53.9805 31.5813 53.9805C28.2734 53.9805 25.5918 56.6621 25.5918 59.97C25.5918 63.2779 28.2734 65.9595 31.5813 65.9595Z" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10"></path>
													<path d="M28.9762 65.3589L19.499 83.8766" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M58.9473 72.8745L71.9449 53.2583" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M57.4925 81.8072C60.8004 81.8072 63.482 79.1256 63.482 75.8177C63.482 72.5097 60.8004 69.8281 57.4925 69.8281C54.1845 69.8281 51.5029 72.5097 51.5029 75.8177C51.5029 79.1256 54.1845 81.8072 57.4925 81.8072Z" fill="#FF0028" stroke="#FF0028" stroke-width="2.11229" stroke-miterlimit="10"></path>
													<path d="M19.2645 87.881C20.7551 87.881 21.9635 86.6726 21.9635 85.182C21.9635 83.6913 20.7551 82.4829 19.2645 82.4829C17.7738 82.4829 16.5654 83.6913 16.5654 85.182C16.5654 86.6726 17.7738 87.881 19.2645 87.881Z" fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10"></path>
													<path d="M71.9451 55.9572C73.4358 55.9572 74.6442 54.7488 74.6442 53.2581C74.6442 51.7675 73.4358 50.5591 71.9451 50.5591C70.4545 50.5591 69.2461 51.7675 69.2461 53.2581C69.2461 54.7488 70.4545 55.9572 71.9451 55.9572Z" fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10"></path>
												</g>
												<defs>
													<clipPath id="clip0_31606_7057">
														<rect width="128" height="128" fill="white"></rect>
													</clipPath>
												</defs>
											</svg>

										</div>
									</div>
									<!-- /.itemcard__image -->
									<div class="itemcard__content">
										<div class="itemcard__text">
											<p>Интерактивная платформа, с помощью которой заказчик получает возможность ознакомиться с
												актуальными статистическими данными, характеризующими состояние и динамику отечественного
												розничного кредитования.</p>
										</div>
									</div>
									<!-- /.itemcard__content -->
								</div>
								<!-- /.itemcard__wrapper -->
							</div>
						</div>
					</div>
				</div>
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb">
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Статистические данные из базы НБКИ за последние 13 месяцев сгруппированы по
								разделам: кредитные заявки, выдача кредитов, портфельные характеристики, качество обслуживания
								обязательств (винтажи);</div>

						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Предоставляемая информация сформирована в графическом виде (диаграммы,
								таблицы) с применением различных срезов и фильтров, и ранжируется как по федеральным данным, так и по
								регионам кредитования, типам кредитов, возрастам заемщиков и т.п.</div>

						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2 itemcard__border itemcard_flex">
							<div class="itemcard__image itemcard__images_show">
								<svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="2.5" cy="55.5" r="2.5" fill="#7B7794"></circle>
									<circle cx="11.5" cy="55.5" r="2.5" fill="#7B7794"></circle>
									<path d="M47.327 58.2356L66.5554 39.0073C68.3866 37.1761 67.0896 34.045 64.4999 34.045V34.045M47.3271 9.82617L71.546 34.045" stroke="#7B7794" stroke-width="2" stroke-linecap="round"></path>
									<path d="M64.5 34.002L1 34.002" stroke="#7B7794" stroke-width="2" stroke-linecap="round"></path>
								</svg>

							</div>
							<div class="itemcard__content">
								<div class="itemcard__text">Доступ заказчиков к базовой версии предоставляется по запросу в НБКИ</div>
								<div class="itemcardlist__button ">
									<a href="#gotoForm" class="scrollTo btn  btn_border">Оставить заявку</a>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="nbkiv4 notification notification_inform">
				
				<div class="notification__text notification__text_small">Базовая версия может быть расширена по техническому заданию заказчика за счет добавления новых данных, срезов, представлений и фильтров, а также функционала сравнения (бенчмаркинг).</div>
				<!-- /.notification__text -->
			</div>

			</div>
		<div class="itemcardlist  itemcardlist_nomb">
			<div class="itemcardlist__items itemcardlist__items_nomb">
				<div class="itemcardlist__item ">
					<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30 xs-mb-40">
						<div class="itemcard__title itemcard__title_small">Нестандартизированные отчеты</div>
						<div class="itemcard__wrapper">
							<div class="itemcard__image xs-mb-20">
								<div class="itemcard__img">
									<img src="/images/itemcard__img.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__text">
									<p>НБКИ предоставляет различные отчеты и&nbsp;выборки по&nbsp;запросам заказчиков исходя из&nbsp;текущих потребностей с&nbsp;необходимой детализацией и&nbsp;периодичностью.</p>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
				</div>
			</div>
		</div>

		<div class="itemcardlist  xs-mb-0">
			<div class="itemcardlist__items">
				<div class="itemcardlist__item ">
					<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30 xs-mb-40 ">
						<div class="itemcard__title itemcard__title_small">Стандартизированные отчеты</div>
						<div class="itemcard__wrapper">
							<div class="itemcard__image xs-mb-20">
								<div class="itemcard__img">
									<img src="/images/analyticsv4.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__text">
									<p>НБКИ предоставляет большой блок стандартизированных отчетов, в&nbsp;которых собрана экспертиза всего кредитного рынка. за&nbsp;счет стандартизации алгоритмов построения достигается максимально возможная экономическая эффективность их использования. </p>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
						<div class="itemcard__wrapper">
							<div class="itemcard__listrow">
								<div class="itemcard__listcol itemcard__listcol_custom">
									<div class="itemcard__list">
										<ul class="listblock__green ">
											<li>«Бенчмаркинг»
											</li>
											<li>«Бенчмаркинг.Взыскание» </li>
											<li>«Винтажный анализ» </li>
										</ul>
									</div>
								</div><!-- /.itmcard__listcol -->
								<div class="itemcard__listcol itemcard__listcol_custom">
									<div class="itemcard__list">
										<ul class="listblock__green ">
											<li>«Анализ долговой нагрузки частных заемщиков»

											</li>
											<li>«Поведенческий анализ заемщика после получения отказа»

											</li>
											<li>Модельная песочница </li>
										</ul>
									</div>
								</div><!-- /.itmcard__listcol -->
							</div><!-- /.itemcard__listrow -->
						</div><!-- /.itemcard__wrapper -->
					</div>
				</div>
			</div>
		</div>



		<div id="analitika" class='mb-60'>

			<div class="itemcardlist  itemcardlist_nomb  ">


				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb" data-slider='slider_card_xs'>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Бенчмаркинг»

							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>В отчетах сравнивают показатели от заказчика и&nbsp;деперсонализированного референтного списка кредиторов: портрет клиента, параметры входящего потока, выдач, портфельные характеристики.  </li>
										<li>Отчет содержит более 2&nbsp;000 переменных в&nbsp;виде динамических рядов с&nbsp;12-ти месячной ретроспективой. </li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Бенчмаркинг.Взыскание»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>В отчетах сравнивают показатели заказчика и&nbsp;деперсонализированного референтного списка кредиторов по&nbsp;бакетам просрочки — это помогает найти точки роста в&nbsp;профилактике дефолтов и&nbsp;взыскания.  </li>
										<li>Все параметры представлены с&nbsp;детализацией по&nbsp;типам и&nbsp;суммам кредитов, диапазонам скоринга и&nbsp;другим фильтрам.  </li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Винтажный анализ»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Самые популярные представления винтажного анализа, позволяющие применять отчет на&nbsp;различных этапах кредитного процесса – от корректировки процедур принятия решения до&nbsp;портфельного анализа. </li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчет <br> «Анализ долговой нагрузки частных заемщиков»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержит основные параметры долговой нагрузки частных заемщиков – PTI (payment to income) и&nbsp;DTI (debt to income) в&nbsp;различных представлениях: по&nbsp;группам доходов заемщиков, по&nbsp;регионам, по&nbsp;отраслям занятости</li>
										<li>Отчет генерируется 2&nbsp;раза в&nbsp;год.</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Поведенческий анализ заемщика после получения отказа»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Позволяет выяснить дальнейшую судьбу клиентов, которые получили отказ в&nbsp;кредите или&nbsp;займе, или&nbsp;не&nbsp;стали брать их.</li>
										<li>Отчет помогает скорректировать правила принятия кредитных решений, повысить эффективность тарифной и&nbsp;маркетинговой политики и&nbsp;эффективность всех этапов взаимодействия с&nbsp;клиентами.

										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard itemcard_type2 ">
							<div class="itemcard__name">Модельная песочница
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Предоставляет деперсонализированные выборки из&nbsp;базы НБКИ или&nbsp;обогащает клиентскую выборку данными НБКИ внутри контура НБКИ.</li>
										<li>Позволяет проводить аналитические исследования, строить прогнозные модели и&nbsp;формировать наборы предикторов в&nbsp;соответствии с&nbsp;потребностями пользователей.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
				</div>

			</div>
		</div>



		<div class="contactsrow" id="gotoForm">
			<div class="contactsrow__main">
				<div class="oneblock white_block">
					<div class="tabs__content active">
						<div class="contactsform">
							<div class="contactsform__title">Оставить заявку</div>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => INCLUDE_PATH . "/form.php"
                                )
                            );?>
						</div>
					</div>

					<!-- /.oneblock white_block -->
				</div>
			</div>
			<!-- /.contactsrow__main -->
			<div class="contactsrow__aside">
				<div class="contactrow__items">
					<div class="contactrow__item">
						<div class="borderblock contactblock">
							<div class="contactblock__wrapper">
								<div class="contactblock__icon"><img src="/images/diagramList.svg" alt=""></div>
								<div class="contactblock__title">Контакты</div>
								<div class="contactblock__phone">
									<div class="contactblock__phonetitle">Телефон</div>
									<div class="contactblock__phonevalue">
										<a href="tel:84952217837">8 (495) 221-78-37</a>
									</div>
								</div>
								<div class="contactblock__text">Прием звонков осуществляется по&nbsp;будням с&nbsp;9 до&nbsp;18 часов (МСК)</div>
							</div>
						</div><!-- /.borderblock -->
					</div><!-- /.contactrow__item -->
					<div class="contactrow__item">
						<div class="borderblock contactblock">
							<div class="contactblock__wrapper">
								<div class="contactblock__icon"><img src="/images/contpersonal.svg" alt=""></div>
								<div class="contactblock__title">Перейти в&nbsp;личный кабинет</div>

								<div class="contactblock__link">
									<a href="#myModal_login"  data-toggle="modal" class='btn_border'>Личный кабинет</a>
								</div>
							</div><!-- /.contactblock__wrapper -->
						</div><!-- /.borderblock -->
					</div><!-- /.contactrow__item -->
				</div><!-- /.contacrow__items -->
			</div>
			<!-- /.contactsrow__aside -->
		</div>
		<!-- /.contactsrow -->


	</div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
