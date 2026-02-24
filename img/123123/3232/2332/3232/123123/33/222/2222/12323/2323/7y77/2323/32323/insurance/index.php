<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Страховые компании могут управлять рисками и маркетингом страховых продуктов исходя из оперативных данных по финансовому поведению своих клиентов.");
$APPLICATION->SetPageProperty("title", "Услуги НБКИ для страховых компаний");
$APPLICATION->SetTitle("Страховым компаниям");
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
		<h1 class="innerpageh1">Страховым компаниям</h1>
		<div class="itemcardlist onlyDesktop mb-70">
			<div class="itemcardlist__items">
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corp_insurance1.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#predostavlenie" class='scrollTo'>Предоставление кредитных отчетов </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corp_insurance2.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#monitoring" class='scrollTo'>Мониторинг клиентской базы </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corp_insurance3.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#scoring" class='scrollTo'>Скоринги и&nbsp;рейтинги </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon mb-0 xs-mb-20">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corp_insurance4.svg" alt="">
								</div>
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
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon mb-0 xs-mb-20">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corp_insurance5.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#verifikacia" class='scrollTo'>Верификация данных </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
			</div>
		</div>
		<div class="mb-70 xs-mb-50" id='predostavlenie'>
			<div class="titlelink itemcardlist__header">
				<h2>Предоставление кредитных отчетов </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="nbkiv4 notification">
					<div class="notification__icon">
						<div class="notification__warn">
							<img src="/images/nbki_v4_attention.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small"> Кредитные отчеты НБКИ формируются и&nbsp;предоставляются в&nbsp;соответствии <br> с&nbsp;218-ФЗ «О кредитных историях». </div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__items  mb-0 xs-mb-20">
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/help_v4.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Более 4000 источников для&nbsp;отчетов</div>
							<div class="itemcard__content">
								<div class="itemcard__text">Более 4&nbsp;000 кредитных и&nbsp;микрофинансовых организаций, лизинговых компаний, кредитных потребительских кооперативов, ломбардов и&nbsp;операторов инвестиционных платформ – передают сведения в&nbsp;НБКИ с&nbsp;2005 года. </div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/presscorp.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Области применения </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green">
										<li>Управление рисками финансовых продуктов для&nbsp;частных клиентов, малого и&nbsp;среднего бизнеса (МСБ). </li>
										<li>Маркетинг: определение потребностей, способностей и&nbsp;возможностей обслуживания обязательств клиентами. </li>
									</ul>
								</div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__button onlyMobile">
						<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-70 xs-mb-50" id='monitoring'>
			<div class="titlelink itemcardlist__header">
				<h2>Мониторинг клиентской базы</h2>
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
								<p>Позволяет страховым компаниям управлять маркетингом продуктов исходя из&nbsp;данных по&nbsp;финансовому поведению клиентов.</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>Различные типы сигнальных кредитных отчетов (триггеров) помогают сформировать и&nbsp;предложить продукт, когда он действительно нужен клиенту. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider" data-slider='slider_card_acc'>
					<div class="itemcardlist__item itemcardlist__item_col3  mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>основной</i> части кредитной истории </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат максимально широкий набор данных из&nbsp;кредитной истории клиента&nbsp;– физического или&nbsp;юридического лица</li>
										<li>Позволяют проводить точную оценку динамики кредитного риска</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>информационной</i> части кредитной истории </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Можно получать без&nbsp;действующего кредитного договора</li>
										<li>Позволяют дать предварительную оценку кредитного риска&nbsp;и его динамики, понять потребности клиентов, оптимизировать кампании по&nbsp;формированию кредитных предложений </li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты online </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат ограниченный набор данных из&nbsp;кредитной истории</li>
										<li>Позволяют максимально оперативно принимать решения в&nbsp;отношении конкретного клиента</li>
										<li>Частота предоставления – до&nbsp;15&nbsp;минут после наступления события в&nbsp;финансовом поведении клиента</li>
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
		<div class="mb-70 xs-mb-50" id='scoring'>
			<div class="titlelink itemcardlist__header">
				<h2>Скоринги и&nbsp;рейтинги </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist--acc">
				<div class="tabs ">
					<div class="tabs__header onlyDesktop">
						<div class="navpages navpages_full">
							<ul class="navpages__list pagetabs__caption_js">
								<li class="active">Страховой скоринг на&nbsp;основе кредитной истории </li>
								<li>Персональный кредитный рейтинг (ПКР) </li>
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
								<li class="active">Страховой скоринг на&nbsp;основе кредитной истории </li>
								<li>Персональный кредитный рейтинг (ПКР) </li>
							</ul>
						</div>
					</div>
					<!-- /.tabstoggler -->
					<!-- /.tabs__header -->
					<div class="tabs__main">
						<div class="pagetabs__content_js active">
							<div class="imgtab">
								<div class="imgtab__wrapper">
									<div class="imgtab__image">
										<div class="imgtab__img">
											<img src="/images/imgtab1.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Страховой скоринг на&nbsp;основе кредитной истории </div>
										<div class="imgtab__text">
											<p>Мы выявили показатели в&nbsp;кредитной истории, влияющие на&nbsp;убыточность страхового полиса. На&nbsp;их основе построена скоринговая модель, которая активно применяется в&nbsp;моторном и&nbsp;в&nbsp;некоторых других типах страхования. </p>
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
											<img src="/images/imgtab2.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Персональный кредитный рейтинг (ПКР) </div>
										<div class="imgtab__text">
											<p>Применяется для&nbsp;маркирования кредитных предложений и&nbsp;развития собственных программ лояльности. С&nbsp;помощью ПКР кредитор может управлять входящим потоком заявок, поощряя клиентов в&nbsp;нужном ему диапазоне ПКР</p>
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
				<!-- /.tabs -->
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>
		<!-- /.itemcardlist--acc -->
		<div class="mb-70 xs-mb-50" id="verifikacia">
			<div class="titlelink itemcardlist__header">
				<h2>Верификация данных </h2>
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
								<p>Предоставляем сведения из&nbsp;открытых источников баз данных, например, с&nbsp;помощью сервиса «Обработка запросов заказчика в&nbsp;банк данных ФССП России».</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>На сервисе используются алгоритмы управления интенсивным потоком с&nbsp;глубоко проработанной логикой запросов. Увеличенная мощность серверов даёт стабильное управление потоком заявок при&nbsp;любой загрузке ресурсов ФССП России. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->
				<div class="itemcardlist__items  mb-0 xs-mb-20">
					<div class="itemcardlist__item mb-0 xs-mb-20">
						<div class="itemcard itemcard_large">
							<div class="itemcard__name">Сервис «Обработка запросов заказчика в&nbsp;банке данных ФССП России» </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<div class="row">
										<div class="col-md-6">
											<ul class="listblock__green ">
												<li>Сервис «Обработка запросов заказчика в&nbsp;банке данных ФССП России» </li>
												<li>Среднее время ответа — 2 секунды</li>
											</ul>
										</div>
										<!-- /.col-md- -->
										<div class="col-md-6">
											<ul class="listblock__green  ">
												<li>95% ответов формируется не&nbsp;более <br> чем за&nbsp;5 секунд </li>
												<li>Режим формирования и&nbsp;обработки пакетных запросов</li>
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
					<div class="itemcardlist__button onlyMobile">
						<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-70 xs-mb-50" id="analitica">
			<div class="titlelink itemcardlist__header">
				<h2>Аналитика</h2>
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
						<div class="itemcard__title itemcard__title_sm">BI аналитика НБКИ</div>

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
			<div class="itemcardlist itemcardlist--acc">
				<div class="itemcardlist__items  mb-0 xs-mb-20">
					<div class="itemcardlist__item  mb-0 xs-mb-20">
						<div class="itemcard itemcard_wide itemcard_icon itemcard_large  mb-0 xs-mb-0">
							<div class="itemcard__title itemcard__title_small">Нестандартизированные отчеты</div>
							<div class="itemcard__wrapper">
								<div class="itemcard__image">
									<div class="itemcard__img">
										<img src="/images/analyticsv4.svg" alt="">
									</div>
								</div>
								<!-- /.itemcard__image -->
								<div class="itemcard__content">
									<div class="itemcard__text">
										<p> Страховые компании используют стандартизированные отчеты НБКИ для&nbsp;оценки эффективности собственных продаж страховых продуктов, тактического и&nbsp;стратегического планирования.
										<p></p>
										<p> Например, данные о&nbsp;динамике рынка автокредитования и&nbsp;ипотеки, представленные в&nbsp;отчете «Бенчмаркинг» дают возможность оценить риски и&nbsp;тренды в&nbsp;сегменте моторного страхования (каско) и&nbsp;ипотечного. </p>
									</div>
								</div>
								<!-- /.itemcard__content -->
							</div>
							<!-- /.itemcard__wrapper -->
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
								<div class="contactblock__text">Прием звонков осуществляется по&nbsp;будням с&nbsp;9 до&nbsp;18 часов (МСК)</div>
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
									<a href="#myModal_login"  data-toggle="modal" class='btn_border'>Личный кабинет</a>
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
