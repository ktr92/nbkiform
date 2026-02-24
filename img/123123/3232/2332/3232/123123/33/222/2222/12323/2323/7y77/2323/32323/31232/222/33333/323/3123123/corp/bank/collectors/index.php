<?
define('IS_COMPANY', true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Для эффективного возвращение заемщика в график платежей крайне важно определить правильную тактику работы на ранних стадиях просрочки");
$APPLICATION->SetPageProperty("title", "Услуги для служб взыскания банков и микрофинансовых институтов");
$APPLICATION->SetTitle("Службы взыскания");
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
		<h1 class="innerpageh1">Службы взыскания</h1>

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

		<div class="itemcardlist onlyDesktop mb-70">
			<div class="itemcardlist__items">
				<div class="itemcardlist__item itemcardlist__item_icon itemcardlist__item_col3 mb-0 xs-mb-20">
					<div class="itemcard pt-20">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/questionCreditRating1.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#taktika" class='scrollTo'>Тактика взыскания на ранних этапах просрочки </a>
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
					<div class="itemcard pt-20">
						<div class="itemcard__wrapper">
							<div class="itemcard__image">
								<div class="itemcard__img"><img src="/images/codeSubject1.svg" alt=""></div>
							</div>
							<!-- /.itemcard__image -->
							<div class="itemcard__content">
								<div class="itemcard__title">
									<a href="#signalnyeotchety" class='scrollTo'>Сигнальные отчеты для мониторинга должников</a>
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
					<div class="itemcard pt-20">
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
		<div class="" id="taktika">
			<div class="titlelink itemcardlist__header">
				<h2>Тактика взыскания на&nbsp;ранних этапах просрочки </h2>
				<div class="titlelink__links">
					<a href="#header" class="scrollTo onlyDesktop">Другие услуги</a>
					<a href="#gotoForm" class="scrollTo onlyDesktop">Оставить заявку</a>
				</div>
			</div>
			<div class="itemcardlist itemcardlist--acc mb-0">
				<div class="subtitle xs-fs-20">
					<h2 class='xs-mb-0'>Скоринг бюро НБКИ</h2>
				</div><!-- /.subtitle -->



				<div class="pagetextblock xs-m-20-0 ">
					<div class="row">
						<div class="col-md-6">
							<div class="pagetext">
								<p>Чтобы вернуть заемщика в&nbsp;график платежей, важно определить тактику работы на&nbsp;ранних стадиях просрочки. </p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							<div class="pagetext">
								<p>Исследования НБКИ и&nbsp;партнеров говорят о&nbsp;том, что применение скоринг бюро по управлению счетами эффективно решает эту задачу.
								</p>
							</div>
							<!-- /.pagetext -->
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.pagetextblock -->


				<div class="itemcardlist__items itemcardlist__items_type2 mb-0 xs-mb-30">
					<div class="itemcardlist__item itemcardlist__item_col2">
						<div class="itemcard itemcard_type2 xs-mb-30">

							<div class="itemcard__content">
								<div class="itemcard__list mb-40 xs-mb-30 fs-20">
									<ul class="listblock__green ">
										<li>Помогает вернуть в&nbsp;график заемщиков в&nbsp;первом бакете просрочки
										</li>
									</ul>
								</div>
								<div class="itemcard__text  xs-lh-22">Валидации показывают высокую прогнозную силу и&nbsp;сегментационные характеристики скоринг бюро НБКИ. Скоринг бюро с&nbsp;высокой степенью достоверности помогает определять клиентов, которые вернутся в&nbsp;график платежей с&nbsp;минимальными усилиями со стороны кредитора. </div>
								<!-- /.itemcard_-text -->
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col2">
						<div class="itemcard itemcard_type2 xs-p-30-20">

							<div class="itemcard__content">

								<div class="itemcard__list mb-40 xs-mb-30  fs-20">
									<ul class="listblock__green ">
										<li>И быстро понять, кому необходимы процедуры hard collection
										</li>
									</ul>
								</div>
								<div class="itemcard__text xs-lh-22">
									Достоверно определяется группа клиентов, для&nbsp;которых даже на&nbsp;ранней стадии просрочки необходимы процедуры hard collection <br> (так как промежуточные этапы, скорее всего, будут безрезультатны).
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>

				</div>


				<div class="mb-40 tablecolorblock">
					<div class="xs-fs-20 mb-40 xs-mb-30">
						<h2>Выбор стратегии взыскания на&nbsp;ранней стадии просрочки (менее 60 дней)</h2>

					</div>
					<div class="tablecolor tablecolor_mobile onlyMobile">
						<div class="tablecolor__wrapper">
							<div class="tablecolor__aside">
								<div class="tablecolor__col">
									<div class="tablecolor__cell tablecolor__cell_line">
										Внутренний скоринг
									</div>
									<div class="tablecolor__cell">
										Низкий балл <br> (высокий риск)
									</div>
									<div class="tablecolor__cell">
										Средний балл <br> (приемлемый риск)
									</div>
									<div class="tablecolor__cell">
										Высокий балл <br> (низкий риск)
									</div>
								</div><!-- /.tablecolor__col -->
							</div><!-- /.tablecolor__aside -->
							<div class="tablecolor__main">
								<div class="tablecolor__header">
									<div class="tablecolor__cell tablecolor__cell_xs">
										Скоринг бюро
									</div>
								</div><!-- /.tablecolor__header -->
								<div class="tablecolor__body">
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">
											Низкий балл (высокий риск)
										</div>
										<div class="tablecolor__cell"  style='background: #ED5459; color: #fff;'>
											Скорейшая передача в&nbsp;суд или&nbsp;коллекторам
										</div>
										<div class="tablecolor__cell"  style='background: #ED5459; color: #fff;'>
											Ускорение усилий для&nbsp;раннего сбора
										</div>
										<div class="tablecolor__cell"  style='background: #FCEC68; color: #000;'>
											Стандартная практика сбора
										</div>
									</div><!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">
											Средний балл (приемлемый риск)
										</div>
										<div class="tablecolor__cell"  style='background: #ED5459; color: #fff;'>
											Ускорение усилий для&nbsp;раннего сбора
										</div>
										<div class="tablecolor__cell"  style='background: #FCEC68; color: #000;'>
											Стандартная практика сбора
										</div>
										<div class="tablecolor__cell"  style='background: #344CCC; color: #fff;'>
											“Вторая” очередь на&nbsp;закрытие
										</div>
									</div><!-- /.tablecolor__col -->
									<div class="tablecolor__col">
										<div class="tablecolor__cell tablecolor__cell_sm">
											Высокий балл (низкий риск)
										</div>
										<div class="tablecolor__cell"   style='background: #FCEC68; color: #000;'>
											Стандартная практика сбора
										</div>
										<div class="tablecolor__cell"  style='background: #344CCC; color: #fff;'>
											“Вторая” очередь на&nbsp;закрытие
										</div>
										<div class="tablecolor__cell"  style='background: #344CCC; color: #fff;'>
											Максимально длительный срок
										</div>

									</div><!-- /.tablecolor__col -->
									<div class="tablecolor__scroller">
										<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L5.92929 5.92929C5.96834 5.96834 5.96834 6.03166 5.92929 6.07071L1 11" stroke="#4563FF" stroke-width="1.5" stroke-linecap="round"/>
										</svg>
									</div><!-- /.tablecolor__scroller -->
								</div><!-- /.tablecolor__body -->
							</div><!-- /.tablecolor__main -->

						</div>

					</div><!-- /.tablecolor -->
					<div class="tablecolor onlyDesktop">
						<div class="tablecolor__table">
							<table>
								<thead>
								<tr>
									<th rowspan='2'><span class="tablecolor__cell_line">Внутренний скоринг</span></th>
									<th colspan='3' id='tablecolor_title'><span>Скоринг бюро</span></th>
								</tr>
								<tr>
									<th><span>Низкий балл <br> (высокий риск)</span></th>
									<th><span>Средний балл <br> (приемлемый риск)</span></th>
									<th><span>Высокий балл <br>(низкий риск)</span></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td><span>Низкий балл <br> (высокий риск)</span></td>
									<td><span  style='background: #ED5459; color: #fff;'>Скорейшая передача <br> в&nbsp;суд или&nbsp;коллекторам</span></td>
									<td><span  style='background: #ED5459; color: #fff;'>Ускорение усилий <br> для&nbsp;раннего сбора</span></td>
									<td><span  style='background: #FCEC68; color: #000;'>Стандартная практика <br> сбора</span></td>
								</tr>
								<tr>
									<td><span >Средний балл <br> (приемлемый риск)</span></td>
									<td><span  style='background: #ED5459; color: #fff;'>Ускорение усилий <br> для&nbsp;раннего сбора</span></td>
									<td><span  style='background: #FCEC68; color: #000;'>Стандартная практика <br> сбора</span></td>
									<td><span  style='background: #344CCC; color: #fff;'>“Вторая” очередь <br> на&nbsp;закрытие</span></td>
								</tr>
								<tr>
									<td><span>Высокий балл <br> (низкий риск)</span></td>
									<td><span  style='background: #FCEC68; color: #000;'>Стандартная практика <br> сбора</span></td>
									<td><span  style='background: #344CCC; color: #fff;'>“Вторая” очередь <br> на&nbsp;закрытие</span></td>
									<td><span  style='background: #344CCC; color: #fff;'>Максимально  <br> длительный срок</span></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.mb-40 -->

				<div class="nbkiv4 notification notification_inform notification_white mb-70 xs-mb-40">
					<div class="notification__icon">
						<div class="notification__img">
							<img src="/images/ntt.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small text-xs-18">
						Применение такой сегментации снижает операционные затраты служб взыскания и&nbsp;повышает эффективность возвращения должников в&nbsp;график обслуживания кредита.
					</div>
					<!-- /.notification__text -->
				</div>

				<div class="itemcardlist__button onlyMobile">
					<a href="#gotoForm" class="scrollTo btn btn_main">Оставить заявку</a>
				</div>
			</div>

		</div>


		<div class="mb-70 xs-mb-50" id="signalnyeotchety">
			<div class="titlelink itemcardlist__header">
				<h2>Сигнальные отчеты для&nbsp;мониторинга должников</h2>
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
					<div class="notification__text notification__text_small">
						НБКИ предоставляет три типа сигнальных кредитных отчетов, которые могут использоваться службами взыскания исходя из&nbsp;конкретных задач и&nbsp;особенности работы:
					</div>
					<!-- /.notification__text -->
				</div>
				<div class="itemcardlist__items itemcardlist__items_type2 itemcardlist--slider" data-slider='slider_card_acc'>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>основной</i> части кредитной истории
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат максимально широкий набор данных из&nbsp;кредитной истории клиента&nbsp;– физического или&nbsp;юридического лица</li>
										<li>Частота предоставления – 1&nbsp;раз в&nbsp;сутки</li>
									</ul>
								</div>
							</div>
							<!-- /.itemcard__content -->
						</div>
					</div>
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты по&nbsp;<i>информационной</i>  части кредитной истории
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
					<div class="itemcardlist__item itemcardlist__item_col3 mb-0 xs-mb-20">
						<div class="itemcard">
							<div class="itemcard__name">Сигнальные кредитные отчеты online
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light">
										<li>Содержат ограниченный набор данных из&nbsp;кредитной истории, позволяющий максимально оперативно принимать решения в&nbsp;отношении конкретного клиента  </li>
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
				<div class="nbkiv4 notification notification_inform notification_white mb-40">
					<div class="notification__icon">
						<div class="notification__w72">
							<img src="/images/register1.svg" alt="">
						</div>
						<!-- /.notification__warn -->
					</div>
					<!-- /.notification__icon -->
					<div class="notification__text notification__text_small">
						Специально для&nbsp;оценки эффективности процедур взыскания НБКИ предоставляет стандартизированный отчет «Бенчмаркинг.Взыскание»
					</div>
					<!-- /.notification__text -->
				</div>

				<div class="itemcardlist__items mb-0 ">
					<div class="itemcardlist__item mb-0">
						<div class="itemcard p-32">
							<div class="itemcard__name fw-400">Стандартизированный отчет «Бенчмаркинг.Взыскание»
							</div>
							<div class="itemcard__content">
								<div class="itemcard__list">
									<ul class="listblock__green listblock__green_light li_mb24">
										<li>Предоставляется в&nbsp;виде двух файлов: «Early Collection» и&nbsp;«Late Collection» </li>
										<li>Содержит дополнительную сегментацию по&nbsp;типам кредитов, суммам, регионам и&nbsp;риск-профилю должников </li>

										<li>Позволяет изучить миграцию должников по&nbsp;бакетам просрочки в&nbsp;сравнении с&nbsp;показателями кредиторов референтной группы</li>
										<li>Помогает выявить реальные «болевые» точки и&nbsp;в&nbsp;кратчайшие сроки скорректировать стратегию работы подразделений взыскания </li>
									</ul>
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
