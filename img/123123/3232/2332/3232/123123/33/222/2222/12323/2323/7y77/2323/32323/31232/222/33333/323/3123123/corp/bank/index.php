<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Большинство предложений НБКИ уникально и не имеет аналогов по производительности и эффективности");
$APPLICATION->SetPageProperty("title", "Услуги для управления рисками в банках и микрофинансовых институтах");
$APPLICATION->SetTitle("Управление рисками");
?>

<div class="container">
	<div class="pagecontent  corppage_v4 nbki_v4">
		<div class="navpages navpages_v4">
            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
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
            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
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
                    "ALLOW_MULTI_SELECT" => "Y",     // Разрешить несколько активных пунктов одновременно
                    // endregion
                )
            ); ?>
			<!-- /.navtabs__list -->
		</div>
		<!-- /.navtabs navtabs_v4 -->

		<h1 class="innerpageh1">Управление рисками </h1>


		<div class="tabstoggler onlyMobile xs-mb-50">
			<div class="tabstoggler__btn">
				<img class="tabsburger" src="/images/tabsburger.svg" alt="">
				<img class="tabscloser" src="/images/tabscloser.svg" alt="">
			</div>
			<div class="tabstoggler__items">

                <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
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
                        "ALLOW_MULTI_SELECT" => "Y",     // Разрешить несколько активных пунктов одновременно
                        // endregion
                    )
                ); ?>
			</div>
		</div>
		<div class="itemcardlist onlyDesktop mb-70 itemcardlist_bank">
			<div class="itemcardlist__items">
				<div class="itemcardlist__item itemcardlist__item_col3 itemcardlist__item_icon">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/mailv4.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#prescoring" class="scrollTo">Прескоринг кредитных online заявок</a>
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
									<img src="/images/corp_insurance1.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#kreditnyeotchety" class="scrollTo">Кредитные отчеты </a>
								</div>
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
									<img src="/images/codeSubject1.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#monitoring" class='scrollTo'>Мониторинг финансового поведения
										заемщиков </a>
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
					<div class="itemcard pt-10">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corp_insurance5.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#verifikacia" class="scrollTo">Верификация данных заявителей на&nbsp;получение
										кредита</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3">
					<div class="itemcard pt-10">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/corpattention.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#protivodeystvie" class='scrollTo'>Противодействие недобросовестным
										кредитным практикам </a>
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
					<div class="itemcard ">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/questionCreditRatingv4.svg" alt="">
								</div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#scoring" class='scrollTo'>Скоринги и&nbsp;рейтинги</a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3 md-mb-0">
					<div class="itemcard pt-15">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/codeSubject.svg" alt="">
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
				<!-- /.itemcardlist__item -->
			</div>
			<!-- /.itemcardlist__items -->
		</div>
		<!-- /.itemcardlist -->
		<div class="" id="prescoring">
			<div class="titlelink itemcardlist__header">
				<h2>Прескоринг кредитных online заявок </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<div class="itemcardlist itemcardlist--acc mb-0">
				<h2 class='md-40 xs-mb-20'>Cкоринговая модель НБКИ Digital Score</h2>
				<div class="pagetextblock xs-m-20-0 max-500">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>Помогает определять онлайн-заявки с&nbsp;высокой вероятностью отказа в&nbsp;кредите/займе
									и&nbsp;«отсекать» их без&nbsp;верификации и&nbsp;оценки кредитного риска. Таким
									образом повышается операционная эффективность кредитного процесса и&nbsp;сокращается
									время на&nbsp;обработку входящих заявок.</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>Модель анализирует информационную часть кредитной истории, поэтому её можно применять
									на&nbsp;«короткой» анкете и&nbsp;до&nbsp;получения согласия на&nbsp;доступ к&nbsp;основной
									части кредитной истории.</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->
				<div class="itemcardlist__items">
					<div class="itemcardlist__item itemcardlist__item_col6 xs-mb-0">
						<div class="itemcard p-32-32-43-32">
							<div class="itemcard__name">Характеристики модели</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Gini 84%</li>
										<li>HitRate более 90%</li>
										<li>Доказанная эффективность на&nbsp;всех типах кредитных продуктов</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard p-32-32-43-32">
							<div class="itemcard__name">Области применения</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Pre-Scoring</li>
										<li>Cross-Sell</li>
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
		<div class="mb-70 xs-mb-50" id="kreditnyeotchety">
			<div class="titlelink itemcardlist__header">
				<h2>Кредитные отчеты</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="nbkiv4 notification items-center xs-mb-30">
					<div class="notification__icon">
						<div class="notification__warn">
							<img src="/images/nbki_v4_attention.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small"> Кредитные отчеты НБКИ формируются и&nbsp;предоставляются
						в&nbsp;соответствии <br> с&nbsp;218-ФЗ «О&nbsp;кредитных историях».
					</div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__items">
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0">
						<div class="itemcard p-32-32-43-32">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/help_v4.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Больше 4000 источников для&nbsp;отчетов</div>
							<div class="itemcard__content">
								<div class="itemcard__text">Более 4&nbsp;000 кредитных и&nbsp;микрофинансовых
									организаций, лизинговых компаний, кредитных потребительских кооперативов, ломбардов
									и&nbsp;операторов инвестиционных платформ – передают сведения в&nbsp;НБКИ с&nbsp;2005
									года.
								</div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0">
						<div class="itemcard p-32-32-43-32">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/presscorp.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Области применения</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green ">
										<li>Управление рисками финансовых продуктов для&nbsp;частных клиентов, малого и&nbsp;среднего
											бизнеса (МСБ).
										</li>
										<li>Маркетинг: определение потребностей, способностей и&nbsp;возможностей
											обслуживания обязательств клиентами.
										</li>
									</ul>
								</div>
								<!-- /.itemcard_-text -->
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
		<div id="monitoring" class='mb-70 xs-mb-50'>
			<div class="titlelink itemcardlist__header">
				<h2>Мониторинг финансового поведения заемщиков </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="nbkiv4 notification notification_inform notification_white mb-40 xs-borderblock">
					<div class="notification__icon xs-mb-20">
						<div class="notification__w72">
							<img src="/images/register1.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small"> Сигнальные кредитные отчеты (триггеры)
						НБКИ позволяют оценивать изменения в&nbsp;кредитной истории клиента практически в&nbsp;режиме
						реального времени.
					</div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider mb-40  xs-mb-60"
				     data-slider="slider_card_acc">
					<div class="itemcardlist__item itemcardlist__item_col3 md-mb-0">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>основной</i> части
								кредитной истории
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат максимально широкий набор данных из&nbsp;кредитной истории клиента&nbsp;–
											физического или&nbsp;юридического лица
										</li>
										<li>Позволяют проводить точную оценку динамики кредитного риска</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 md-mb-0">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>информационной</i> части
								кредитной истории
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Можно получать без&nbsp;действующего кредитного договора</li>
										<li>Позволяют дать предварительную оценку кредитного риска и&nbsp;его динамики,
											понять потребности клиентов, оптимизировать кампании по&nbsp;формированию
											кредитных предложений.
										</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 md-mb-0">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты online</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат ограниченный набор данных из&nbsp;кредитной истории</li>
										<li>Позволяют максимально оперативно принимать решения в&nbsp;отношении
											конкретного клиента
										</li>
										<li>Частота предоставления – до&nbsp;15&nbsp;минут после наступления события в&nbsp;финансовом
											поведении клиента
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
				</div>
				<div class="itemcardlist__items xs-mb-0">
					<div class="itemcardlist__item itemcardlist__item_full">
						<div class="itemcard itemcard_large">
							<div class="itemcard__name fw-500 fs-22 mb-50 xs-fs-22">Области применения</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<div class="row">
										<div class="col_w223">
											<ul class="listblock__green ">
												<li>Маркетинг</li>
												<li class="md-mb-0">Управления рисками</li>
											</ul>
										</div>
										<!-- /.col-md- -->
										<div class="col_w223">
											<ul class="listblock__green  ">
												<li>Управление лимитами</li>
												<li class="md-mb-0">Кросс-продажи</li>
											</ul>
										</div>
										<div class="col_w223">
											<ul class="listblock__green  ">
												<li>Профилактика дефолтов</li>
												<li class="md-mb-0">Взыскание долгов</li>
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
				<div class="nbkiv4 notification notification_inform notification_white mb-40 p-50 xs-mt-0 xs-p-30 xs-mb-30 ">
					<div class="notification__icon">
						<div class="notification__w91">
							<img src="/images/mnonbki.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small xs-fz-18"> Мониторинг НБКИ — общепринятая
						практика в&nbsp;работе служб взыскания и&nbsp;профилактики дефолтов.
					</div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
			<!-- /.mb-40 -->
		</div>
		<!-- /#divers -->
		<div id="verifikacia" class='mb-70 xs-mb-50'>
			<div class="titlelink itemcardlist__header">
				<h2>Верификация данных заявителей на&nbsp;получение кредита </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="pagetextblock">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>Предоставляем сведения из&nbsp;открытых источников баз данных, например, с&nbsp;помощью
									сервиса «Обработка запросов заказчика в&nbsp;банк данных ФССП России».</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>На сервисе используются алгоритмы управления интенсивным потоком с&nbsp;глубоко
									проработанной логикой запросов. Увеличенная мощность серверов даёт стабильное
									управление потоком заявок при&nbsp;любой загрузке ресурсов ФССП России. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<div class="itemcardlist__items mb-0 xs-mb-10 xs-mt-30 xs-mt-0">
					<div class="itemcardlist__item mb-0">
						<div class="itemcard p-50">
							<div class="itemcard__name fw-400">Сервис «Обработка запросов заказчика в&nbsp;банке данных
								ФССП России»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<div class="row">
										<div class="col-md-6">
											<ul class="listblock__green  ">
												<li>Сервис «Обработка запросов заказчика в&nbsp;банке данных ФССП
													России»
												</li>
												<li>Среднее время ответа — 2 секунды</li>
											</ul>
										</div>
										<!-- /.col-md-5 -->
										<div class="col-md-6">
											<ul class="listblock__green  ">
												<li>95% ответов формируется не&nbsp;более <br> чем за&nbsp;5 секунд</li>
												<li>Режим формирования и&nbsp;обработки пакетных запросов</li>
											</ul>
										</div>
										<!-- /.col-md-5 -->
									</div>
									<!-- /.row -->
								</div>
								<!-- /.col-md- -->
							</div>
							<!-- /.row -->
						</div>
					</div>
					<!-- /.itemcard__content -->
				</div>
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>
		<div id="protivodeystvie" class='mb-70 xs-mb-50'>
			<div class="titlelink itemcardlist__header">
				<h2>Противодействие недобросовестным <br> кредитным практикам </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="itemcardlist__items">
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-40">
						<div class="itemcard p-32-32-43-32 xs-mb-0">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<div class="itemcard__number"> 1</div>
									<!-- /.itemcard__number -->
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name fw-400">Fraud скоринг</div>
							<div class="itemcard__content">
								<div class="itemcard__text lh-22">Сервис ранжирует заявки на&nbsp;получение кредита или&nbsp;займа
									по&nbsp;признакам недобросовестного поведения заявителей.
								</div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard p-32-32-43-32 xs-mb-0">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<div class="itemcard__number"> 2</div>
									<!-- /.itemcard__number -->
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name fw-400">НБКИ-AFS</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<div class="itemcard__text lh-22"> Сервис с&nbsp;широким набором правил и&nbsp;возможностью
										верификации изображений. Помогает выявлять заявки с&nbsp;признаками
										недобросовестного поведения клиента.
									</div>
									<!-- /.itemcard__text -->
								</div>
								<!-- /.itemcard_-text -->
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
		<div id="scoring" class='mb-70 xs-mb-50'>
			<div class="titlelink itemcardlist__header">
				<h2>Скоринги и&nbsp;рейтинги </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="pagetextblock">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>Наша предиктивная аналитика основана на&nbsp;многолетних наблюдениях за&nbsp;поведением
									заемщиков. «Модельная песочница» НБКИ — это десятки скорингов и&nbsp;рейтингов для&nbsp;управления
									рисками и&nbsp;маркетингом на&nbsp;всех этапах взаимодействия с&nbsp;клиентами –
									физическими и&nbsp;юридическими лицами.</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>На их основе кредиторы могут разрабатывать собственные модели или&nbsp;адаптировать
									индустриальные модели к&nbsp;своим потребностям. При&nbsp;этом НБКИ оказывает
									технологическую и&nbsp;методологическую поддержку. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<div class="tabs tabs__column">
					<div class="tabs__header onlyDesktop">
						<div class="navpages navpages_full">
							<ul class="navpages__list pagetabs__caption_js">
								<li class="active">Скоринг-бюро для&nbsp;выдачи кредита/займа</li>
								<li>Скоринг-бюро для&nbsp;управления портфелем</li>
								<li>Fraud-скоринг</li>
								<li>Скоринг МСБ</li>
								<li>Digital-скоринг</li>
								<li>Персональный кредитный рейтинг (ПКР)</li>
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
								<li class="active">Скоринг-бюро для&nbsp;выдачи кредита/займа</li>
								<li>Скоринг-бюро для&nbsp;управления портфелем</li>
								<li>Fraud-скоринг</li>
								<li>Скоринг МСБ</li>
								<li>Digital-скоринг</li>
								<li>Персональный кредитный рейтинг (ПКР)</li>
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
											<img src="/images/tabs__column1.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Скоринг-бюро для&nbsp;выдачи кредита/займа</div>
										<div class="imgtab__text">
											<p>Семейство скоринговых моделей для&nbsp;ранжирования входящего потока
												клиентов и&nbsp;оценки кредитного качества при&nbsp;принятии решения о&nbsp;выдаче
												кредита. Существуют модели, которые предполагают сегментацию по&nbsp;типу
												кредита. </p>
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
											<img src="/images/tabs__column2.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Скоринг-бюро для&nbsp;управления портфелем</div>
										<div class="imgtab__text">
											<p>Семейство скоринговых моделей для&nbsp;ранжирования клиентов с&nbsp;уже
												действующими кредитами. Применяется в&nbsp;риск-процедурах, работе по&nbsp;профилактике
												просроченной задолженности, клиентском маркетинге и&nbsp;т.д. </p>
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
											<img src="/images/tabs__column3.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Fraud-скоринг</div>
										<div class="imgtab__text">
											<p>Ранжирует заявки на&nbsp;получение кредита/займа по&nbsp;признакам
												недобросовестного поведения заявителей. </p>
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
											<img src="/images/tabs__column4.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Скоринг МСБ</div>
										<div class="imgtab__text">
											<p>Применяется для&nbsp;анализа субъектов малого и&nbsp;среднего бизнеса
												(МСБ). Используется как на&nbsp;этапе рассмотрения заявки, так и&nbsp;в&nbsp;процессе
												обслуживания клиентом выданного кредита/займа. </p>
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
											<img src="/images/tabs__column5.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Digital-скоринг</div>
										<div class="imgtab__text">
											<p>Применяется для&nbsp;прескоринга кредитных заявок, поданных по&nbsp;дистанционным
												каналам. Рассчитывается на&nbsp;основании информационной части кредитной
												истории и&nbsp;не&nbsp;требует согласия клиента на&nbsp;доступ к&nbsp;основной
												части. </p>
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
											<img src="/images/tabs__column6.svg" alt="">
										</div>
									</div>
									<!-- /.imgtab__image -->
									<div class="imgtab__content">
										<div class="imgtab__title">Персональный кредитный рейтинг (ПКР)</div>
										<div class="imgtab__text">
											<p>Применяется для&nbsp;маркирования кредитных предложений и&nbsp;развития
												собственных программ лояльности. С&nbsp;помощью ПКР кредитор может
												управлять входящим потоком заявок, поощряя клиентов в&nbsp;нужном ему
												диапазоне ПКР</p>
											<div class="borderblock">
												<div class="imgtab__list">
													<ul class="listblock__green  mb-0">
														<li>ПКР пользуются миллионы российских заемщиков. Это удобный
															инструмент формировании клиентского портфеля с&nbsp;заданными
															диапазонами кредитного риска.
														</li>
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
				<!-- /.tabs -->
				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>
		</div>
		<div id="analitica" class='mb-70'>
			<div class="titlelink itemcardlist__header">
				<h2>Аналитика</h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<!-- /.titlelink -->
			
			<div class="itemcardlist itemcardlist--acc itemcardlist_nomb  ">
				<div class="itemcardlist__items itemcardlist__items_type2  xs-mb-30">
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

				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider itemcardlist__items_nomb"
				     data-slider="slider_card_acc">
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Бенчмаркинг»</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>В них сравнивают показатели заказчика и&nbsp;деперсонализированного
											референтного списка кредиторов: портрет клиента, параметры входящего потока,
											выдач, портфельные характеристики.
										</li>
										<li>Отчет содержит более 2&nbsp;000 переменных в&nbsp;виде динамических рядов с&nbsp;12-ти
											месячной ретроспективой.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Бенчмаркинг.Взыскание»</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Сравниваются показатели заказчика и&nbsp;деперсонализированного референтного
											списка кредиторов по&nbsp;бакетам просрочки.
										</li>
										<li>Отчет помогает выявить проблемные зоны процедур профилактики дефолтов и&nbsp;взыскания,
											найти точки роста.
										</li>
										<li>Все параметры представлены с&nbsp;детализацией по&nbsp;типам и&nbsp;суммам
											кредитов, диапазонам скоринга и&nbsp;т.п.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Винтажный анализ»</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Самые популярные представления винтажного анализа, позволяющие применять
											отчет на&nbsp;различных этапах кредитного процесса – от корректировки
											процедур принятия решения до&nbsp;портфельного анализа.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 md-mb-0">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчет <br> «Анализ долговой нагрузки частных заемщиков»</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>В отчете представлены основные параметры долговой нагрузки частных заемщиков
											– PTI (payment to income) и&nbsp;DTI (debt to income) в&nbsp;различных
											представлениях: по&nbsp;группам доходов заемщиков, по&nbsp;регионам, по&nbsp;отраслям
											занятости.
										</li>
										<li>Отчет генерируется 2&nbsp;раза в&nbsp;год.</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 md-mb-0">
						<div class="itemcard itemcard_type2">
							<div class="itemcard__name">Отчеты <br> «Поведенческий анализ заемщика после получения
								отказа»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Позволяет выяснить дальнейшую судьбу клиентов, которые получили отказ в&nbsp;кредите
											или&nbsp;займе, или&nbsp;не&nbsp;стали брать их.
										</li>
										<li>Отчет помогает скорректировать правила принятия кредитных решений, повысить
											эффективность тарифной и&nbsp;маркетинговой политики и&nbsp;эффективность
											всех этапов взаимодействия с&nbsp;клиентами.
										</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 md-mb-0">
						<div class="itemcard itemcard_type2 itemcard__border p-50-32">
							<div class="itemcard__image xs-block">
								<img src="/images/pdfempty.svg" alt="">
							</div>
							<div class="itemcard__content">
								<div class="itemcard__text"> НБКИ также предоставляет нестандартизированные отчеты и&nbsp;выборки
									по&nbsp;запросам заказчиков: с&nbsp;необходимой детализацией, периодичностью и&nbsp;учетом
									текущих целей.
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
								<div class="contactblock__text">Прием звонков осуществляется по&nbsp;будням с&nbsp;9 до&nbsp;18
									часов (МСК)
								</div>
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
