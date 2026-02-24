<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "К кредитную историю должника вносится информация из резолютивной части вступившего в силу и не исполненного в течение 10 дней решения суда о взыскании с должника денежных сумм в связи с неисполнением им обязательств по внесению платы за жилое помещение, коммунальные услуги и услуги связи (часть 3 статьи 4 218-ФЗ «О кредитных историях»).");
$APPLICATION->SetPageProperty("title", "Услуги НБКИ для поставщиков ЖКУ и услуг связи");
$APPLICATION->SetTitle("Поставщикам услуг связи и ЖКУ");
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
		<h1 class="innerpageh1">Поставщикам услуг связи и ЖКУ</h1>
		<div class="itemcardlist__items">
			<div class="itemcardlist__item itemcardlist__item_col1">
				<div class="itemcard itemcard_wide itemcard_icon xs-mb-40">
					<div class="itemcard__title">Зачем организациям в&nbsp;сфере ЖКУ и&nbsp;связи услуги НБКИ? </div>
					<div class="itemcard__wrapper">
						<div class="itemcard__image">
							<div class="itemcard__img">
								<img src="/images/corpnews.svg" alt="">
							</div>
						</div>
						<!-- /.itemcard__image -->
						<div class="itemcard__content">
							<div class="itemcard__text">
								<p>  с&nbsp;1 марта 2015 года вступили в&nbsp;силу поправки в&nbsp;218-ФЗ «О кредитных историях». Согласно поправкам, в&nbsp;кредитную историю необходимо вносить информацию о&nbsp;долгах за&nbsp;аренду жилого помещения, коммунальные услуги и&nbsp;услуги связи.  </p>

								<p>Это нужно делать, если суд постановил взыскать деньги с&nbsp;должника, решение вступило в&nbsp;силу, но&nbsp;в&nbsp;течение десяти дней должник его не&nbsp;исполнил. Информацию из&nbsp;резолюционной части решения вносит организация, которой суд постановил выплатить долг.</p>
							</div>
						</div>
						<!-- /.itemcard__content -->
					</div>
					<!-- /.itemcard__wrapper -->
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
