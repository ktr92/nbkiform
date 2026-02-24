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
						<div class="itemcardlist__item mb-0">
							<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30">
								<div class="itemcard__title itemcard__title_small">BI аналитика НБКИ</div>
								<div class="itemcard__wrapper">
									<div class="itemcard__image xs-mb-20" style="width:unset;min-width:unset;margin-right:0;">
										<div class="itemcard__img" style="width:unset;min-width:unset">
										<svg width="75" height="87" viewBox="0 0 75 87" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.2602 16.0873C11.2602 13.4428 13.4043 11.2943 16.0532 11.2943H62.4822L67.7542 16.1046L74.0011 21.8079V80.4115C74.0011 83.0561 71.8569 85.2045 69.2081 85.2045H16.0489C13.4043 85.2045 11.2559 83.0604 11.2559 80.4115V16.0873H11.2602Z" stroke="#4664FF" stroke-width="1.94137" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M34.5039 43.5048L49.7747 52.7965" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M30.9941 45.2742C33.4157 45.2742 35.3788 43.3111 35.3788 40.8895C35.3788 38.4679 33.4157 36.5048 30.9941 36.5048C28.5725 36.5048 26.6094 38.4679 26.6094 40.8895C26.6094 43.3111 28.5725 45.2742 30.9941 45.2742Z" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10"/>
<path d="M29.0863 44.8344L22.1484 58.3905" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M51.0273 50.3361L60.5424 35.9758" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M49.9609 56.8756C52.3825 56.8756 54.3456 54.9125 54.3456 52.4909C54.3456 50.0693 52.3825 48.1062 49.9609 48.1062C47.5393 48.1062 45.5762 50.0693 45.5762 52.4909C45.5762 54.9125 47.5393 56.8756 49.9609 56.8756Z" fill="#FF0028" stroke="#FF0028" stroke-width="2.11229" stroke-miterlimit="10"/>
<path d="M21.9759 61.3218C23.0671 61.3218 23.9517 60.4372 23.9517 59.346C23.9517 58.2547 23.0671 57.3701 21.9759 57.3701C20.8846 57.3701 20 58.2547 20 59.346C20 60.4372 20.8846 61.3218 21.9759 61.3218Z" fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10"/>
<path d="M60.5403 37.9517C61.6316 37.9517 62.5162 37.0671 62.5162 35.9759C62.5162 34.8846 61.6316 34 60.5403 34C59.4491 34 58.5645 34.8846 58.5645 35.9759C58.5645 37.0671 59.4491 37.9517 60.5403 37.9517Z" fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10"/>
<path d="M62.4766 11.2986V19.4178C62.4766 20.7423 63.5508 21.8122 64.8709 21.8122H73.9954L62.4766 11.2986Z" fill="#4664FF" stroke="#4664FF" stroke-width="1.94137" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M8.09769 75.0622V13.8528C8.09769 10.6733 10.6732 8.09769 13.8528 8.09769H63.4527V3.8353C63.4527 1.71704 61.7357 0 59.6174 0H3.8353C1.71704 0 0 1.71704 0 3.8353V71.2269C0 73.3451 1.71704 75.0622 3.8353 75.0622H8.09769Z" fill="#4664FF"/>
</svg>


										</div>
									</div>
									<!-- /.itemcard__image -->
									<div class="itemcard__content">
										<div class="itemcard__text">
											<p>Интерактивная платформа, с помощью которой заказчик получает возможность ознакомиться с актуальными статистическими данными, характеризующими состояние и динамику отечественного розничного кредитования.</p>
										</div>
									</div>
									<!-- /.itemcard__content -->
								</div>
								<!-- /.itemcard__wrapper -->
							</div>
						</div>
					</div>
				</div>
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb xs-mb-30">
					<div class="itemcardlist__item itemcardlist__item_col3 xs-mb-30">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Статистические данные из базы НБКИ за последние 13 месяцев сгруппированы по
								разделам: кредитные заявки, выдача кредитов, портфельные характеристики, качество обслуживания
								обязательств (винтажи).</div>

						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Предоставляемая информация сформирована в графическом виде (диаграммы,
								таблицы) с применением различных срезов и фильтров, и ранжируется как по федеральным данным, так и по
								регионам кредитования, типам кредитов, возрастам заемщиков и т.п.</div>

						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 xs-mt-30 xs-mb-30">
						<div class="itemcard itemcard_type2 itemcard__border itemcard_flex">
							<div class="itemcard__image itemcard__images_show xs-mb-30">
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
					<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-3">
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
					<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30 ">
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
					<div class="itemcardlist__item itemcardlist__item_col3 ">
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
