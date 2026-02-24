<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Передача данный в НБКИ осуществляется в соответствии с 218-ФЗ «О кредитных историях». Для этого каждая организация использует способ подключения к НБКИ исходя из своих потребностей и возможностей.");
$APPLICATION->SetPageProperty("title", "Услуги лизинговым компаниям и операторам инвестиционных платформ");
$APPLICATION->SetTitle("Лизинговым компаниям и операторам инвестиционных платформ");
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
		<h1 class="innerpageh1">Лизинговым компаниям и операторам инвестиционных платформ</h1>

		<div class="itemcardlist__items">
			<div class="itemcardlist__item itemcardlist__item_col2">
				<div class="itemcard xs-p-20-15">
					<div class="itemcard__image">
						<div class="itemcard__img">
							<img src="/images/help_v4.svg" alt="">
						</div>
						<!-- /.itemcard__img -->
					</div>
					<!-- /.itemcard__image -->
					<div class="itemcard__name xs-mb-20">Передача данных по&nbsp;218-ФЗ</div>
					<div class="itemcard__content">
						<div class="itemcard__text">Лизинговые компании и&nbsp;операторы инвестиционных платформ
							передают сведения, входящие в&nbsp;состав кредитной истории клиента в&nbsp;НБКИ в&nbsp;соответствии
							с&nbsp;218-ФЗ «О кредитных историях». Для&nbsp;этого каждая организация использует способ
							подключения к&nbsp;НБКИ исходя из&nbsp;своих потребностей и&nbsp;возможностей.
						</div>
						<!-- /.itemcard_-text -->
					</div>
					<!-- /.itemcard__content -->
				</div>
			</div>
			<div class="itemcardlist__item itemcardlist__item_col2">
				<div class="itemcard xs-p-20-15">
					<div class="itemcard__image">
						<div class="itemcard__img">
							<img src="/images/presscorp.svg" alt="">
						</div>
						<!-- /.itemcard__img -->
					</div>
					<!-- /.itemcard__image -->
					<div class="itemcard__name xs-mb-20">Инструменты для&nbsp;аналитики</div>
					<div class="itemcard__content">
						<div class="itemcard__text">В части получения информации, услуг и&nbsp;данных из&nbsp;НБКИ
							лизинговым компаниям и&nbsp;операторам инвестиционных платформ доступны <a href="/corp/bank/"
							                                                                           class='link_blue'>все
								решения НБКИ, предоставляемые кредитным организациям и&nbsp;микрофинансовым
								институтам</a> для&nbsp;целей управления рисками, маркетинга, служб взыскания и&nbsp;управления
							портфелем.
						</div>
						<!-- /.itemcard_-text -->
					</div>
					<!-- /.itemcard__content -->
				</div>
			</div>
		</div>

		<div class="nbkiv4 notification notification_center">
			<div class="notification__icon">
				<div class="notification__warn">
					<img src="/images/nbki_v4_attention.svg" alt="">
				</div>
				<!-- /.notification__warn -->
			</div>
			<!-- /.notification__icon -->
			<div class="notification__text notification__text_small notification__text_default">Кроме того, всем
				пользователям и партнерам НБКИ доступны <a href="/corp/bank/" class="link_blue">аналитические инструменты.</a>
			</div>
			<!-- /.notification__text -->
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
								<div class="contactblock__text">Прием звонков осуществляется по&nbsp;будням с&nbsp;9 до&nbsp;18
									часов (МСК)
								</div>
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
