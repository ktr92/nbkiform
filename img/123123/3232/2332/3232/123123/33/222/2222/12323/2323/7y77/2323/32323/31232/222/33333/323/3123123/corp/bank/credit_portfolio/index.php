<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Используя услуги НБКИ для действующих счетов, кредитор имеет возможность в кратчайшие сроки спрогнозировать поведение портфеля в кратко и среднесрочной перспективе");
$APPLICATION->SetPageProperty("title", "Услуги для управления кредитным портфелем банков и микрофинансовых институтов");
$APPLICATION->SetTitle("Управление кредитным портфелем");
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
					"ROOT_MENU_TYPE" => "corp",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
					// endregion
					// region Настройки кеширования
					"MENU_CACHE_TYPE" => "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
					"MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "N",     // Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",      // Значимые переменные запроса
					// endregion
					// region Дополнительные настройки
					"MAX_LEVEL" => "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
					"CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
					"USE_EXT" => "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",     // Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "Y",     // Разрешить несколько активных пунктов одновременно
					// endregion
				)
			); ?>
		</div>
		<div class="navtabs navtabs_v4 onlyDesktop">
			<?// Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
			$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"tabs",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
				array(
					// region Основные параметры
					"ROOT_MENU_TYPE" => "corp_tabs",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
					// endregion
					// region Настройки кеширования
					"MENU_CACHE_TYPE" => "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
					"MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
					"MENU_CACHE_USE_GROUPS" => "N",     // Учитывать права доступа
					"MENU_CACHE_GET_VARS" => "",      // Значимые переменные запроса
					// endregion
					// region Дополнительные настройки
					"MAX_LEVEL" => "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
					"CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
					"USE_EXT" => "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
					"DELAY" => "N",     // Откладывать выполнение шаблона меню
					"ALLOW_MULTI_SELECT" => "N",     // Разрешить несколько активных пунктов одновременно
					// endregion
				)
			); ?>
		</div><!-- /.navtabs navtabs_v4 -->
		<h1 class="innerpageh1">Управление кредитиным портфелем</h1>

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
						"ROOT_MENU_TYPE" => "corp_tabs",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
						// endregion
						// region Настройки кеширования
						"MENU_CACHE_TYPE" => "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
						"MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "N",     // Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",      // Значимые переменные запроса
						// endregion
						// region Дополнительные настройки
						"MAX_LEVEL" => "1",     // Уровень вложенности меню : array ( 1 => '1', 2 => '2', 3 => '3', 4 => '4', )
						"CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
						"USE_EXT" => "N",     // Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",     // Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",     // Разрешить несколько активных пунктов одновременно
						// endregion
					)
				); ?>
			</div>
		</div>

		<div class="itemcardlist onlyDesktop">
			<div class="itemcardlist__items itemcardlist__items_pt20">
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/questionCreditRating.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#scoring" class='scrollTo'>Скоринг действующих кредитов</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/cbki.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#monitoring" class='scrollTo'>Мониторинг должников</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/codeSubject.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#analitica" class='scrollTo'>Аналитика</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
			</div>
			<!-- /.itemcardlist__items -->
		</div>
		<!-- /.itemcardlist -->
		<div class="" id="scoring">
			<div class="titlelink itemcardlist__header">
				<h2>Скоринг действующих кредитов</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">

				<div class="itemcardlist__items itemcardlist__items_type2">
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__image itemcard__image_flex">
								<div class="itemcard__img">
									<img src="/images/help_v4.svg" alt="">
								</div>
								<div class="itemcard__name">Зачем</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__text">Скоринг бюро НБКИ для&nbsp;действующих счетов помогает максимально быстро
									спрогнозировать поведение портфеля в&nbsp;кратко- и&nbsp;среднесрочной перспективе.</div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Особенности
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Пакетная деперсонализированная оценка портфеля
										</li>
										<li>Высокая предиктивная сила на&nbsp;всех сегментах кредитного портфеля вне зависимости от типа
											кредитов, срочности и&nbsp;поколения выдачи
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Области применения
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Внутренние процедуры кредитора</li>
										<li>Цессионные процедуры</li>
										<li>Сделки по&nbsp;секьюритизации портфеля</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>

		<div class="" id="monitoring">
			<div class="titlelink itemcardlist__header">
				<h2>Мониторинг должников </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="pagetextblock">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>Сигнальные кредитные отчеты помогает портфельному управляющему выявлять главные триггеры
									в&nbsp;дальнейшем поведении портфеля.
								</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>Большой объем данных позволяет кредитору максимально быстро проводить предсказательный анализ.

								</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider" data-slider='slider_card_acc'>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>основной</i> части кредитной истории
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light ">
										<li>Содержат максимально широкий набор данных из&nbsp;кредитной истории клиента&nbsp;– физического
											или&nbsp;юридического лица</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>информационной</i> части кредитной
								истории
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат набор данных из&nbsp;информационной части кредитной истории клиента.</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты online
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат ограниченный набор данных из&nbsp;кредитной истории, позволяющий максимально оперативно
											принимать решения в&nbsp;отношении конкретного клиента. </li>
										<li>Частота предоставления – до&nbsp;15&nbsp;минут после наступления события в&nbsp;финансовом
											поведении клиента</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>

		<div id="analitica" class=' mb-70 xs-mb-50'>
			<div class="titlelink itemcardlist__header">
				<h2>Аналитика</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc itemcardlist_nomb  ">

				<div class="itemcardlist__items itemcardlist__items_type2 onlyDesktop">
					<div class="itemcardlist__item itemcardlist__item_large itemcardlist__item_col1">
						<div class="itemcard">
							<div class="itemcard__name">Зачем нужны стандартизированные отчеты?

							</div>
							<div class="itemcard__content">
								<div class="itemcard__listrow itemcard__listrow_sm">
									<div class="itemcard__listcol">
										<div class="itemcard__list">
											<ul class="listblock__green ">
												<li>Повышение эффективность в&nbsp;кратко- и&nbsp;среднесрочной перспективе.</li>
												<li>Формирование долгосрочной стратегии с&nbsp;необходимой детализацией и&nbsp;степенью
													достоверности.</li>
											</ul>
										</div>
									</div><!-- /.itemcard__listcol -->
									<div class="itemcard__listcol">
										<div class="itemcard__list">
											<ul class="listblock__green ">
												<li>Референтный анализ и&nbsp;прогноз поведение портфеля.</li>
												<li>Выявление тенденции и&nbsp;сегментов для&nbsp;корректировки стратегии кредитования.</li>
											</ul>
										</div>
									</div><!-- /.itemcard__listcol -->
								</div><!-- /.itemcard__listrow -->

							</div>
							<!-- /.itemcard__content -->
						</div><!-- /.itemcard -->
					</div>
				</div>
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb"
					data-slider="slider_card_acc">
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Бенчмаркинг»

							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>В них сравнивают показатели заказчика и&nbsp;деперсонализированного референтного списка
											кредиторов: портрет клиента, параметры входящего потока, выдач, портфельные характеристики.</li>
										<li>Все параметры представляют с&nbsp;максимальной детализацией.</li>
										<li>Отчет содержит более 2&nbsp;000 переменных в&nbsp;виде динамических рядов с&nbsp;12-ти месячной
											ретроспективой.</li>
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
										<li>Сравниваются показатели заказчика и&nbsp;деперсонализированного референтного списка кредиторов
											по&nbsp;бакетам просрочки.</li>
										<li>Отчет помогает выявить проблемные зоны процедур профилактики дефолтов и&nbsp;взыскания, найти
											точки роста.</li>
										<li>Все параметры представлены с&nbsp;детализацией по&nbsp;типам и&nbsp;суммам кредитов, диапазонам
											скоринга и&nbsp;т.п.</li>
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
										<li>Самые популярные представления винтажного анализа, позволяющие применять отчет на&nbsp;различных
											этапах кредитного процесса – от корректировки процедур принятия решения до&nbsp;портфельного
											анализа. </li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчет <br> «Анализ долговой нагрузки частных заемщиков»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>В отчете представлены основные параметры долговой нагрузки частных заемщиков – PTI (payment to
											income) и&nbsp;DTI (debt to income) в&nbsp;различных представлениях: по&nbsp;группам доходов
											заемщиков, по&nbsp;регионам, по&nbsp;отраслям занятости.</li>
										<li>Отчет генерируется 2&nbsp;раза в&nbsp;год.</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Поведенческий анализ заемщика после получения отказа»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Позволяет выяснить дальнейшую судьбу клиентов, которые получили отказ в&nbsp;кредите
											или&nbsp;займе, или&nbsp;не&nbsp;стали брать их.</li>
										<li>Отчет помогает скорректировать правила принятия кредитных решений, повысить эффективность
											тарифной и&nbsp;маркетинговой политики и&nbsp;эффективность всех этапов взаимодействия
											с&nbsp;клиентами.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2 itemcard__border">
							<div class="itemcard__name">Модельная песочница
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Предоставление деперсонализированной выборки из&nbsp;базы НБКИ или&nbsp;обогащения клиентской
											выборки данными НБКИ внутри контура НБКИ. </li>
										<li>Позволяет проводить аналитические исследования, строить прогнозные модели и&nbsp;формировать
											наборы предикторов в&nbsp;соответствии с&nbsp;потребностями пользователей.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
				</div>

				<div class="nbkiv4 notification notification_inform">
					<div class="notification__icon">
						<div class="notification__w72">
							<img src="/images/inews.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small">
						НБКИ также предоставляет нестандартизированные отчеты и&nbsp;выборки по&nbsp;запросам заказчиков:
						с&nbsp;необходимой детализацией, периодичностью и&nbsp;учетом текущих целей.
					</div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>

		<div id="analitica_bi" class="mb-70">
			<div class="titlelink itemcardlist__header">
				<h2>BI аналитика НБКИ</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc itemcardlist_nomb  ">
				<div class="itemcardlist__items itemcardlist__items_type2 ">
					<div class="itemcardlist__item ">
						<div class="itemcard">
							<div class="itemcard__name">Интерактивная платформа, с помощью которой заказчик получает возможность
								ознакомиться с актуальными статистическими данными, характеризующими состояние и динамику отечественного
								розничного кредитования. </div>
							<div class="itemcard__name"> Доступ заказчиков к базовой версии предоставляется по запросу в НБКИ. Базовая
								версия может быть расширена по техническому заданию заказчика за счет добавления новых данных, срезов,
								представлений и фильтров, а также функционала сравнения (бенчмаркинг).
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light listblock__green_gray">
										<li>Статистические данные из базы НБКИ за последние 13 месяцев сгруппированы по разделам: кредитные
											заявки, выдача кредитов, портфельные характеристики, качество обслуживания обязательств (винтажи);
										</li>
										<li>Предоставляемая информация сформирована в графическом виде (диаграммы, таблицы) с применением
											различных срезов и фильтров, и ранжируется как по федеральным данным, так и по регионам
											кредитования, типам кредитов, возрастам заемщиков и т.п.</li>
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
							<? $APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => INCLUDE_PATH . "/form.php"
								)
							); ?>
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
								<div class="contactblock__text">Прием звонков осуществляется по&nbsp;будням с&nbsp;9 до&nbsp;18 часов
									(МСК)</div>
							</div>
						</div><!-- /.borderblock -->
					</div><!-- /.contactrow__item -->
					<div class="contactrow__item">
						<div class="borderblock contactblock">
							<div class="contactblock__wrapper">
								<div class="contactblock__icon"><img src="/images/contpersonal.svg" alt=""></div>
								<div class="contactblock__title">Перейти в&nbsp;личный кабинет</div>

								<div class="contactblock__link">
									<a href="#myModal_login" data-toggle="modal" class='btn_border'>Личный кабинет</a>
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