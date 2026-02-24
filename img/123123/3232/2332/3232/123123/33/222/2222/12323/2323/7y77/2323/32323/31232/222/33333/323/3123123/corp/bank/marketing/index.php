<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Для подразделений маркетинга НБКИ предоставляет решения, позволяющие формировать продуктовые предложения на основе поведенческих предпочтений и потребностей клиентов");
$APPLICATION->SetPageProperty("title", "Услуги для маркетинга банков и микрофинансовых институтов");
$APPLICATION->SetTitle("Маркетинг");
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
			<!-- /.navtabs__list -->
		</div>

		<h1 class="innerpageh1">Маркетинг</h1>
		<!-- /.navtabs navtabs_v4 -->
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
		<div class="itemcardlist onlyDesktop mb-70">
			<div class="itemcardlist__items">
				<div class="itemcardlist__item itemcardlist__item_medium itemcardlist__item_col6">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/bki170.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#segmentacia" class='scrollTo'>Сегментация клиентской базы </a>
								</div>
								<div class="itemcard__list_disc">
									<ul>
										<li>Скоринг бюро для&nbsp;управления портфелем</li>
										<li>Персональный кредитный рейтинг</li>
										<li>Скоринг МСБ</li>
									</ul>
								</div>
								<!-- /.itemcard__list -->
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/codeSubject22.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#diversifikacia" class='scrollTo'>Диверсификация кредитных предложений </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/codeSubject1.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#monitoring" class='scrollTo'>Мониторинг клиентов (обогащение CRM)</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/codeSubject.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#analitica" class='scrollTo'>Аналитика <br> НБКИ</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3">
					<div class="itemcard itemcard__border itemcard_button">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__title">
									<a href="#">Оставить заявку</a>
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<a href="#gotoForm" class="btn_border">Перейти</a>
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
		<div class=" " id="monitoring">
			<div class="titlelink itemcardlist__header">
				<h2 class="onlyDesktop">Мониторинг финансового поведения клиентов и&nbsp;обогащение CRM-витрин данными </h2>
				<h2 class="onlyMobile">Мониторинг клиентов (обогащение CRM)</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="pagetextblock xs-m-20-0 max-500">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>CRM-витрина обогатится данными о&nbsp;финансовом поведении клиента: об&nbsp;открытии и&nbsp;закрытии
									кредита в&nbsp;другой организации, изменении лимита по&nbsp;кредитным картам и&nbsp;суммы
									задолженности, подаче заявки на&nbsp;кредитные продукты и&nbsp;т.&nbsp;п. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>Решения, которые помогают формировать продуктовые предложения на&nbsp;основе поведенческих
									предпочтений и&nbsp;потребностей клиентов. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider" data-slider="slider_card_acc">
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>основной</i> части кредитной истории
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light listblock__green_gray">
										<li>Содержат максимально широкий набор данных из&nbsp;кредитной истории клиента&nbsp;– физического
											или&nbsp;юридического лица</li>
										<li>Позволяют проводить точную оценку динамики кредитного риска</li>
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
								истории </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light listblock__green_gray">
										<li>Можно получать без&nbsp;действующего кредитного договора </li>
										<li>Позволяют дать предварительную оценку кредитного риска и&nbsp;его динамики, понять потребности
											клиентов, оптимизировать кампании по&nbsp;формированию кредитных предложений</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты online </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light listblock__green_gray">
										<li>Содержат ограниченный набор данных из&nbsp;кредитной истории</li>
										<li>Позволяют максимально оперативно принимать решения в&nbsp;отношении конкретного клиента </li>
										<li>Частота предоставления – до&nbsp;15&nbsp;минут после наступления события в&nbsp;финансовом
											поведении клиента</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
				</div>
				<div class="itemcardlist__items ">
					<div class="itemcardlist__item itemcardlist__item_full">
						<div class="itemcard itemcard_large">
							<div class="itemcard__name fw-500 fs-22 mb-50">Области применения </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<div class="row">
										<div class="col_w223">
											<ul class="listblock__green ">
												<li>Маркетинг</li>
												<li class='md-mb-0'>Управления рисками </li>
											</ul>
										</div>
										<!-- /.col-md- -->
										<div class="col_w223">
											<ul class="listblock__green  ">
												<li>Управление лимитами </li>
												<li class='md-mb-0'>Кросс-продажи </li>
											</ul>
										</div>
										<div class="col_w223">
											<ul class="listblock__green  ">
												<li>Профилактика дефолтов</li>
												<li class='md-mb-0'>Взыскание долгов </li>
											</ul>
										</div>
										<!-- /.col-md- -->
									</div>
									<!-- /.row -->
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
		<div class="mb-70 " id="segmentacia">
			<div class="titlelink itemcardlist__header">
				<h2>Сегментация клиентской базы </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="nbkiv4 notification notification_inform notification_white mb-40">
					<div class="notification__icon">
						<div class="notification__w72">
							<img src="/images/register1.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small"> НБКИ предоставляет большое количество решений
						для&nbsp;сегментации клиентской базы в&nbsp;целях маркетинга. Наиболее активно кредиторы применяют наши
						скоринговые модели. </div>
					<!-- /.notification__text -->
				</div>
				<div class="tabs ">
					<div class="tabs__header onlyDesktop">
						<div class="navpages navpages_full">
							<ul class="navpages__list pagetabs__caption_js">
								<li>Скоринг бюро для&nbsp;управления портфелем </li>
								<li>Скоринг МСБ </li>
								<li class="active">Персональный кредитный рейтинг (ПКР) </li>
							</ul>
						</div>
					</div>
					<div class="tabstoggler onlyMobile">
						<div class="tabstoggler__btn">
							<img class="tabsburger" src="/images/tabsburger.svg" alt="">
							<img class="tabscloser" src="/images/tabscloser.svg" alt="">
						</div>
						<div class="tabstoggler__items">
							<ul class="navpages__list pagetabs__caption_js">
								<li>Скоринг бюро для&nbsp;управления портфелем </li>
								<li>Скоринг МСБ </li>
								<li class="active">Персональный кредитный рейтинг (ПКР) </li>
							</ul>
						</div>
					</div>
					<!-- /.tabstoggler -->
					<!-- /.tabs__header -->
					<div class="tabs__main">
						<div class="pagetabs__content_js ">
							<div class="imgtab">
								<div class="imgtab__wrapper">
									<div class="imgtab__image">
										<div class="imgtab__img">
											<img src="/images/imgtab21.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Скоринг бюро для&nbsp;управления портфелем </div>
										<div class="imgtab__text">
											<p>Семейство скоринговых моделей для&nbsp;ранжирования клиентов с&nbsp;уже действующими кредитами.
												Применяется в&nbsp;риск-процедурах, работе по&nbsp;профилактике просроченной задолженности,
												клиентском маркетинге и&nbsp;т.д. </p>
										</div>
										<!-- /.imgtab__text -->
									</div>
									<!-- /.imgtab__content -->
								</div>
								<!-- /.imgtab__wrapper -->
							</div>
							<!-- /.imgtab -->
						</div>
						<!-- /.pagetabs__content_js -->
						<div class="pagetabs__content_js">
							<div class="imgtab">
								<div class="imgtab__wrapper">
									<div class="imgtab__image">
										<div class="imgtab__img">
											<img src="/images/imgtab22.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Скоринг МСБ </div>
										<div class="imgtab__text">
											<p>Применяется для&nbsp;анализа субъектов малого и&nbsp;среднего бизнеса (МСБ). Используется как
												на&nbsp;этапе рассмотрения заявки, так и&nbsp;в&nbsp;процессе обслуживания клиентом выданного
												кредита/займа. </p>
										</div>
										<!-- /.imgtab__text -->
									</div>
									<!-- /.imgtab__content -->
								</div>
								<!-- /.imgtab__wrapper -->
							</div>
							<!-- /.imgtab -->
						</div>
						<div class="pagetabs__content_js active">
							<div class="imgtab">
								<div class="imgtab__wrapper">
									<div class="imgtab__image">
										<div class="imgtab__img">
											<img src="/images/imgtab33.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Персональный кредитный рейтинг (ПКР) </div>
										<div class="imgtab__text">
											<p>Применяется для&nbsp;маркирования кредитных предложений и&nbsp;развития собственных программ
												лояльности. С&nbsp;помощью ПКР кредитор может управлять входящим потоком заявок, поощряя
												клиентов в&nbsp;нужном ему диапазоне ПКР</p>
											<div class="borderblock">
												<div class="imgtab__list">
													<ul class="listblock__green  mb-0">
														<li>ПКР пользуются миллионы российских заемщиков. Это удобный инструмент формировании
															клиентского портфеля с&nbsp;заданными диапазонами кредитного риска. </li>
													</ul>
												</div>
												<!-- /.cardlist__green -->
											</div>
											<!-- /.borderblock -->
										</div>
										<!-- /.imgtab__text -->
									</div>
									<!-- /.imgtab__content -->
								</div>
								<!-- /.imgtab__wrapper -->
							</div>
							<!-- /.imgtab -->
						</div>
						<!-- /.pagetabs__content_js -->
					</div>
					<!-- /.tabs__main -->
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>
		<div id="diversifikacia" class="">
			<div class="titlelink itemcardlist__header">
				<h2>Диверсификация кредитных предложений </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="pagetextblock xs-m-20-0 ">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>Инструменты предиктивной аналитики НБКИ помогают маркетологам сегментировать клиентскую базу
									и входящий поток кредитных заявок, чтобы определить сегменты с повышенным риском и премиальные.</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>Это позволяет формировать диверсифицированные кредитные предложения и клиентскую базу на основе
									необходимых параметров кредитного риска и нужного финансового результата.</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->
				<div class=" tablecolorblock">
					<div class="tablecolor tablecolor_mobile tablecolor_type2">
						<div class="tablecolor__wrapper">
							<div class="tablecolor__aside">
								<div class="tablecolor__col tablecolor__col_left">
									<div class="tablecolor__cell tablecolor__cell_row2">Скоринг бюро </div>
									<div class="tablecolor__cell tablecolor__cell_s1">
										&lt;650 </div>
									<div class="tablecolor__cell">651–659</div>
									<div class="tablecolor__cell">660–669</div>
									<div class="tablecolor__cell">670–679</div>
									<div class="tablecolor__cell tablecolor__cell_s2">680–689

									</div>
									<div class="tablecolor__cell">690–769</div>
									<div class="tablecolor__cell">770–779</div>
									<div class="tablecolor__cell tablecolor__cell_s3">780–799</div>
									<div class="tablecolor__cell">790–799</div>
									<div class="tablecolor__cell">800–809</div>
									<div class="tablecolor__cell tablecolor__cell_s4">810+</div>
								</div>
								<!-- /.tablecolor__col -->
							</div>
							<!-- /.tablecolor__aside -->
							<div class="tablecolor__main">
								<div class="tablecolor__header">
									<div class="tablecolor__cell tablecolor__cell_xs">Показатель долговой нагрузки (ПДН)</div>
								</div>
								<!-- /.tablecolor__header -->
								<div class="tablecolor__body">
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">1 </div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">2</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">3</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">4</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">5</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">6</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_blue"
											style='background: #344CCC;'>
											<span class="tablecolor__tooltiptext"> Стандартный лимит </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">7</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">8</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">9</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">10</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_white">
											<span class="tablecolor__tooltiptext"> Отказ </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_red"
											style='background: #FF0029;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и высокой ставки</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_green"
											style='background: #00E067;'>
											<span class="tablecolor__tooltiptext"> Минимальный лимит. <br>
												<i>Компенсация риска за счет лимита и средней ставки.</i>
											</span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_lightblue"
											style='background: #4563FF;'>
											<span class="tablecolor__tooltiptext">Стандартный лимит. <br> <i>Низкая ставка </i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
										<div class="tablecolor__cell tablecolor__cell_tooltip tablecolor__cell_gray"
											style='background: rgba(174, 181, 209, 0.7);'>
											<span class="tablecolor__tooltiptext"> <i>Увеличение эффективности продаж за счет ставки и
													повышения лимита.</i> </span>
										</div>
									</div>
									<!-- /.tablecolor__col -->
									<div class="tablecolor__scroller">
										<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L5.92929 5.92929C5.96834 5.96834 5.96834 6.03166 5.92929 6.07071L1 11"
												stroke="#4563FF" stroke-width="1.5" stroke-linecap="round" />
										</svg>
									</div>
									<!-- /.tablecolor__scroller -->

								</div>

								<!-- /.tablecolor__body -->
							</div>
							<!-- /.tablecolor__main -->
						</div>
						<!-- /.tablecolor -->
					</div>
				</div>
				<div class="nbkiv4 notification notification_inform xs-mt-30">
					<div class="notification__icon">
						<div class="notification__w72">
							<img src="/images/icvip.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small"> Премиальный сегмент – это клиенты, которые могут
						получить кредит в&nbsp;любом банке. <br>Для&nbsp;их удержания нужны преференции: снижение ставки, повышение
						лимита кредитования и&nbsp;т.п. Привлекать заемщиков из&nbsp;более рискового сегмента возможно за&nbsp;счет
						более высокой ставки и&nbsp;снижением лимита. </div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>

			<!-- /.mb-40 -->
		</div>
		<!-- /#divers -->
		<div id="analitica" class='mb-70'>
			<div class="titlelink itemcardlist__header">
				<h2>Аналитика</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc xs-mb-30">
				<div class="itemcardlist  itemcardlist_nomb">
					<div class="itemcardlist__items itemcardlist__items_nomb ">
						<div class="itemcardlist__item ">
							<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30 ">
								<div class="itemcard__title itemcard__title_small">BI аналитика НБКИ</div>
								<div class="itemcard__wrapper">
									<div class="itemcard__image xs-mb-20" style="width:unset;min-width:unset;margin-right:0;">
										<div class="itemcard__img" style="width:unset;min-width:unset;margin-right:0;">
											<svg width="128" height="128" viewBox="0 0 128 128" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_31606_7057)">
													<path
														d="M100.771 23H97.9452H13.8713C11.543 23 9.65137 24.887 9.65137 27.2199V31.5524H87.7969C91.1672 31.5524 93.8991 34.2843 93.8991 37.6546C93.8991 37.6546 93.8897 81.2195 93.885 96.7378C93.885 99.8077 96.3727 102.291 99.4426 102.291C102.512 102.291 105 99.803 105 96.7331V27.2152C104.991 24.8917 103.099 23 100.771 23Z"
														fill="#4664FF" />
													<path
														d="M6.21507 105.637H98.2594L95.213 104.042C92.6125 102.68 90.979 99.9859 90.979 97.0474V38.7951C90.979 36.4669 89.092 34.5752 86.7591 34.5752H83.9334H5.21995C2.89173 34.5752 1 36.4622 1 38.7951V100.422C1.00469 103.3 3.33766 105.637 6.21507 105.637Z"
														stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M36.3779 63.5425L57.238 76.235" stroke="#4664FF" stroke-width="2.11229"
														stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path
														d="M31.5813 65.9595C34.8893 65.9595 37.5709 63.2779 37.5709 59.97C37.5709 56.6621 34.8893 53.9805 31.5813 53.9805C28.2734 53.9805 25.5918 56.6621 25.5918 59.97C25.5918 63.2779 28.2734 65.9595 31.5813 65.9595Z"
														stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" />
													<path d="M28.9762 65.3589L19.499 83.8766" stroke="#4664FF" stroke-width="2.11229"
														stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M58.9473 72.8745L71.9449 53.2583" stroke="#4664FF" stroke-width="2.11229"
														stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path
														d="M57.4925 81.8072C60.8004 81.8072 63.482 79.1256 63.482 75.8177C63.482 72.5097 60.8004 69.8281 57.4925 69.8281C54.1845 69.8281 51.5029 72.5097 51.5029 75.8177C51.5029 79.1256 54.1845 81.8072 57.4925 81.8072Z"
														fill="#FF0028" stroke="#FF0028" stroke-width="2.11229" stroke-miterlimit="10" />
													<path
														d="M19.2645 87.881C20.7551 87.881 21.9635 86.6726 21.9635 85.182C21.9635 83.6913 20.7551 82.4829 19.2645 82.4829C17.7738 82.4829 16.5654 83.6913 16.5654 85.182C16.5654 86.6726 17.7738 87.881 19.2645 87.881Z"
														fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" />
													<path
														d="M71.9451 55.9572C73.4358 55.9572 74.6442 54.7488 74.6442 53.2581C74.6442 51.7675 73.4358 50.5591 71.9451 50.5591C70.4545 50.5591 69.2461 51.7675 69.2461 53.2581C69.2461 54.7488 70.4545 55.9572 71.9451 55.9572Z"
														fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" />
												</g>
												<defs>
													<clipPath id="clip0_31606_7057">
														<rect width="128" height="128" fill="white" />
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
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb  xs-mb-30"
					>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Статистические данные из базы НБКИ за последние 13 месяцев сгруппированы по
								разделам: кредитные заявки, выдача кредитов, портфельные характеристики, качество обслуживания
								обязательств (винтажи).</div>

						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 xs-mt-30">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Предоставляемая информация сформирована в графическом виде (диаграммы,
								таблицы) с применением различных срезов и фильтров, и ранжируется как по федеральным данным, так и по
								регионам кредитования, типам кредитов, возрастам заемщиков и т.п.</div>

						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 xs-mt-30">
						<div class="itemcard itemcard_type2 itemcard__border itemcard_flex">
							<div class="itemcard__image itemcard__images_show">
								<svg width="73" height="72" viewBox="0 0 73 72" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="2.5" cy="55.5" r="2.5" fill="#7B7794" />
									<circle cx="11.5" cy="55.5" r="2.5" fill="#7B7794" />
									<path
										d="M47.327 58.2356L66.5554 39.0073C68.3866 37.1761 67.0896 34.045 64.4999 34.045V34.045M47.3271 9.82617L71.546 34.045"
										stroke="#7B7794" stroke-width="2" stroke-linecap="round" />
									<path d="M64.5 34.002L1 34.002" stroke="#7B7794" stroke-width="2" stroke-linecap="round" />
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
				
				<div class="notification__text notification__text_small">Базовая версия может быть расширена по&nbsp;техническому заданию заказчика за&nbsp;счет добавления новых данных, срезов, представлений и&nbsp;фильтров, а&nbsp;также функционала сравнения (бенчмаркинг).</div>
				<!-- /.notification__text -->
			</div>

			</div>

	
			<div class="itemcardlist itemcardlist--acc">
				<div class="itemcardlist  itemcardlist_nomb">
					<div class="itemcardlist__items itemcardlist__items_nomb">
						<div class="itemcardlist__item ">
							<div class="itemcard itemcard_wide itemcard_icon itemcard_icon_small xs-p-30 xs-mb-0">
								<div class="itemcard__title itemcard__title_small">Стандартизированные отчеты «Бенчмаркинг»</div>
								<div class="itemcard__wrapper">
									<div class="itemcard__image xs-mb-20" style="width:unset;min-width:unset;margin-right:0;">
										<div class="itemcard__img" style="width:unset;min-width:unset;margin-right:0;">
											<svg width="128" height="128" viewBox="0 0 128 128" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_31606_7057)">
													<path
														d="M100.771 23H97.9452H13.8713C11.543 23 9.65137 24.887 9.65137 27.2199V31.5524H87.7969C91.1672 31.5524 93.8991 34.2843 93.8991 37.6546C93.8991 37.6546 93.8897 81.2195 93.885 96.7378C93.885 99.8077 96.3727 102.291 99.4426 102.291C102.512 102.291 105 99.803 105 96.7331V27.2152C104.991 24.8917 103.099 23 100.771 23Z"
														fill="#4664FF" />
													<path
														d="M6.21507 105.637H98.2594L95.213 104.042C92.6125 102.68 90.979 99.9859 90.979 97.0474V38.7951C90.979 36.4669 89.092 34.5752 86.7591 34.5752H83.9334H5.21995C2.89173 34.5752 1 36.4622 1 38.7951V100.422C1.00469 103.3 3.33766 105.637 6.21507 105.637Z"
														stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" stroke-linecap="round"
														stroke-linejoin="round" />
													<path d="M36.3779 63.5425L57.238 76.235" stroke="#4664FF" stroke-width="2.11229"
														stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path
														d="M31.5813 65.9595C34.8893 65.9595 37.5709 63.2779 37.5709 59.97C37.5709 56.6621 34.8893 53.9805 31.5813 53.9805C28.2734 53.9805 25.5918 56.6621 25.5918 59.97C25.5918 63.2779 28.2734 65.9595 31.5813 65.9595Z"
														stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" />
													<path d="M28.9762 65.3589L19.499 83.8766" stroke="#4664FF" stroke-width="2.11229"
														stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path d="M58.9473 72.8745L71.9449 53.2583" stroke="#4664FF" stroke-width="2.11229"
														stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
													<path
														d="M57.4925 81.8072C60.8004 81.8072 63.482 79.1256 63.482 75.8177C63.482 72.5097 60.8004 69.8281 57.4925 69.8281C54.1845 69.8281 51.5029 72.5097 51.5029 75.8177C51.5029 79.1256 54.1845 81.8072 57.4925 81.8072Z"
														fill="#FF0028" stroke="#FF0028" stroke-width="2.11229" stroke-miterlimit="10" />
													<path
														d="M19.2645 87.881C20.7551 87.881 21.9635 86.6726 21.9635 85.182C21.9635 83.6913 20.7551 82.4829 19.2645 82.4829C17.7738 82.4829 16.5654 83.6913 16.5654 85.182C16.5654 86.6726 17.7738 87.881 19.2645 87.881Z"
														fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" />
													<path
														d="M71.9451 55.9572C73.4358 55.9572 74.6442 54.7488 74.6442 53.2581C74.6442 51.7675 73.4358 50.5591 71.9451 50.5591C70.4545 50.5591 69.2461 51.7675 69.2461 53.2581C69.2461 54.7488 70.4545 55.9572 71.9451 55.9572Z"
														fill="#4664FF" stroke="#4664FF" stroke-width="2.11229" stroke-miterlimit="10" />
												</g>
												<defs>
													<clipPath id="clip0_31606_7057">
														<rect width="128" height="128" fill="white" />
													</clipPath>
												</defs>
											</svg>

										</div>
									</div>
									<!-- /.itemcard__image -->
									<div class="itemcard__content">
										<div class="itemcard__text">
											<p>Позволяют сравнить профиль клиента, входящий поток и&nbsp;действующий портфель
												с&nbsp;кредиторами референтной группы, сильные и&nbsp;слабые стороны маркетинга и&nbsp;найти
												точки роста. Данные отчета максимально детализированы: по&nbsp;регионам, суммам и&nbsp;срокам
												кредитов, возрасту заемщиков и&nbsp;т.д. </p>
										</div>
									</div>
									<!-- /.itemcard__content -->
								</div>
								<!-- /.itemcard__wrapper -->
							</div>
						</div>
					</div>
				</div>
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb"
					data-slider="slider_card_acc">
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">«Поведенческий анализ заемщика после получения отказа» </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Описывает дальнейшие действия заемщиков, которые оставили заявку, получили одобрение,
											но&nbsp;не&nbsp;стали брать кредит.</li>
										<li>Помогает скорректировать маркетинговую тактику в&nbsp;отношении различных групп клиентов.</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">«Анализ долговой нагрузки частных заемщиков» </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Позволяет выявлять потенциалы кредитования в&nbsp;различных сегментах – региональных,
											отраслевых, возрастных. </li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2 itemcard__border">
							<div class="itemcard__image xs-block">
								<img src="/images/pdfempty.svg" alt="">
							</div>
							<div class="itemcard__content">
								<div class="itemcard__text"> Помимо стандартизированных отчетов НБКИ предоставляет аналитические выборки
									и&nbsp;исследования для&nbsp;формирования маркетинговой стратегии кредитора. </div>
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
								<div class="contactblock__icon">
									<img src="/images/diagramList.svg" alt="">
								</div>
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
						</div>
						<!-- /.borderblock -->
					</div>
					<!-- /.contactrow__item -->
					<div class="contactrow__item">
						<div class="borderblock contactblock">
							<div class="contactblock__wrapper">
								<div class="contactblock__icon">
									<img src="/images/contpersonal.svg" alt="">
								</div>
								<div class="contactblock__title">Перейти в&nbsp;личный кабинет</div>
								<div class="contactblock__link">
									<a href="#myModal_login" data-toggle="modal" class='btn_border'>Личный кабинет</a>
								</div>
							</div>
							<!-- /.contactblock__wrapper -->
						</div>
						<!-- /.borderblock -->
					</div>
					<!-- /.contactrow__item -->
				</div>
				<!-- /.contacrow__items -->
			</div>
			<!-- /.contactsrow__aside -->
		</div>
		<!-- /.contactsrow -->
	</div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>