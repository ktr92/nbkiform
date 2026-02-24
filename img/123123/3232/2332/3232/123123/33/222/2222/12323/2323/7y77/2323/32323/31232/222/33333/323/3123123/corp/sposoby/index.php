<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Одно из значимых преимуществ НБКИ – широкий спектр технологических возможностей взаимодействия с Источниками и Пользователями информации. 
Для каждой партнерской организации разработано решение, делающее информационный обмен комфортным и экономически целесообразным.");
$APPLICATION->SetPageProperty("title", "Как подключиться к НБКИ? - Корпоративным клиентам");
$APPLICATION->SetTitle("Способы подключения к НБКИ");
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
		<div class="itemcardlist__items itemcardlist__items_type2_1 mb-0">
			<div class="itemcardlist__item itemcardlist__item_col1">
				<div class="itemcard itemcard_wide mb-70 xs-mb-50">
					<div class="itemcard__wrapper">
						<div class="itemcard__image">
							<div class="itemcard__img">
								<img src="/images/itemcard1.svg" alt="">
							</div>
						</div>
						<!-- /.itemcard__image -->
						<div class="itemcard__content">
							<div class="itemcard__maintitle">4000</div>
							<div class="itemcard__text"> <span class="onlyDesktop">4000</span>  организаций уже сотрудничают с&nbsp;НБКИ. Для&nbsp;каждой мы помогли подобрать решение, делающее информационный обмен комфортным и&nbsp;экономически целесообразным. </div>
						</div>
						<!-- /.itemcard__content -->
					</div>
					<!-- /.itemcard__wrapper -->
				</div>
				<!-- /.itemcard itemcard_wide -->
			</div>
		</div>
		<h1 class="innerpageh1">Способы подключения к НБКИ</h1>
		<div class="itemcardlist onlyDesktop mb-70 xs-mb-50">
			<div class="itemcardlist__items">
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3 mb-0 xs-mb-20">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/itemcard2.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#web" class='scrollTo'>WEB: передача и&nbsp;запросы данных «НБКИ Онлайн» </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3 mb-0 xs-mb-20">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/itemcard2.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#click" class='scrollTo'>Передача данных в&nbsp;один клик </a>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
						<!-- /.itemcard__wrapper -->
					</div>
					<!-- /.itemcard -->
				</div>
				<!-- /.itemcardlist__item -->
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3 mb-0 xs-mb-20">
					<div class="itemcard">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/itemcard2.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#api" class='scrollTo'>API (B2B соединение)</a>
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
		<div class="mb-70 xs-mb-50" id='web'>
			<div class="titlelink itemcardlist__header">
				<h2>WEB: передача и&nbsp;запросы данных «НБКИ Онлайн» </h2>
				<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="itemcardlist__items">
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/help_v4.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Для кого?</div>
							<div class="itemcard__content">
								<div class="itemcard__text">Оптимальное решение для&nbsp;организаций, <br>начинающих свою деятельность, или<br>ведущих умеренную бизнес активность, <br>предполагающую передачу данных в&nbsp;НБКИ<br>и&nbsp;небольшие регулярные запросы<br>информации. </div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/press.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Почему? </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green">
										<li>Полноценное взаимодействие с&nbsp;НБКИ </li>
										<li>Не нужны инвестиции в&nbsp;аппаратное и&nbsp;программное обеспечение  </li>
										<li>Учет обмена данными с&nbsp;бюро позволяет использовать решение как резервную учетную систему </li>
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

		<div class="mb-70 xs-mb-50" id='click'>
			<div class="titlelink itemcardlist__header">
				<h2>Передача данных в&nbsp;один клик</h2>
				<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="itemcardlist__items">
					<div class="itemcardlist__item itemcardlist__item_col2  mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/help_v4.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Для кого?</div>
							<div class="itemcard__content">
								<div class="itemcard__text">Для организаций, которые передают данные в&nbsp;НБКИ, но&nbsp;не&nbsp;имеют права или&nbsp;потребности получать кредитных отчеты. К&nbsp;ним относятся поставщики жилищно-коммунальных услуг, арбитражные управляющие и&nbsp;т.п. </div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/press.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Почему? </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green">
										<li>Простое и&nbsp;понятное решение: утилита к&nbsp;популярным офисным приложениям, которая дает возможность передавать данные в&nbsp;кредитные истории. </li>
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

		<div class="mb-70 xs-mb-50" id='api'>
			<div class="titlelink itemcardlist__header">
				<h2>API (B2B соединение)</h2>
				<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
			</div>
			<!-- /.titlelink -->
			<div class="itemcardlist itemcardlist--acc">
				<div class="itemcardlist__items">
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard ">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/help_v4.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Для кого?</div>
							<div class="itemcard__content">
								<div class="itemcard__text">Для крупных организаций</div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2 mb-0 xs-mb-20">
						<div class="itemcard xs-mb-10">
							<div class="itemcard__image">
								<div class="itemcard__img">
									<img src="/images/press.svg" alt="">
								</div>
								<!-- /.itemcard__img -->
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__name">Почему? </div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green">
										<li>Позволяет наладить взаимодействие онлайн 24/7
										</li>
										<li>Объем информации практически неограничен
										</li>
										<li>Автоматические запросы и&nbsp;кредитные отчеты в&nbsp;формате хml-файла
										</li>
										<li>Интеграция данных из&nbsp;кредитного отчета в&nbsp;автоматизированный процесс принятия решения и&nbsp;управления рисками
										</li>
										<li>Учет обмена данными с&nbsp;бюро позволяет использовать решение как резервную учетную систему
										</li>
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
