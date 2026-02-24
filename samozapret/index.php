<?
  define('HIDE_BC', 'Y');
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetPageProperty("title", "Проверка задолженностей по кредиту, узнать долги онлайн на официальном сайте НБКИ");
  $APPLICATION->SetPageProperty("description", "Узнайте свою задолженность банку по кредиту на сайте НБКИ. Проверка долгов по фамилии. Просто, безопасно и удобно. Крупнейшая база кредитных историй.");
  $APPLICATION->SetPageProperty("customBg", "/local/templates/nbki/public/images/bg8.png");
  $APPLICATION->SetTitle("Получить кредитную историю");
  
  ?>
<style>
  @media (min-width: 1000px) {
  .rsblock_v4 .blueblock__wrapper--columns {
  height: 360px;
  }
  .mainblockpkr_v4 .mainblockpkr__wrapper {
  height: 360px;
  }
  }
  .rsblock_v4 .blueblock__wrapper--columns {
  min-height: 360px;
  }
</style>
<div class="pagecontent_v4 pagecontent_v5">
  <div class="rsmainslider rsmainslider_static rsmainslider_ki rsmainslider_type_v5 pb-64" bis_skin_checked="1">
    <div class=" container" bis_skin_checked="1">
      <div class="rsmainslider__container" bis_skin_checked="1">
        <!--  <div class="rsmainslider__layer"> -->
        <!--   <div class="rsmainslider__layer"> -->
        <div class="rsmainslider__slider" bis_skin_checked="1">
          <div class="rsmainslider--slide" bis_skin_checked="1">
            <div class="rsmainslider__wrapper" bis_skin_checked="1">
              <div class="rsmainslider__main" bis_skin_checked="1">
                <div class="rsmainslider__title" bis_skin_checked="1">
                  <h1 class="rsmainslider__name">
                    Сведения ЦККИ и&nbsp;код субъекта кредитной истории
                  </h1>
                </div>
                <div class="rsmainslider__mobileimg" bis_skin_checked="1">
                  <img src="/local/templates/nbkiv4/public/images/codeSubject_v5.svg" alt="">
                </div>
                <div class="rsmainslider__text" bis_skin_checked="1">Запрос в&nbsp;ЦККИ поможет понять, в&nbsp;каком бюро хранится ваша кредитная история, а&nbsp;код субъекта&nbsp;–&nbsp;это пароль для&nbsp;доступа к&nbsp;информации, хранящейся в&nbsp;Центральном каталоге кредитных историй.</div>
                <div class="rsmainslider__buttons rsmainslider__buttons_static onlyDesktop" bis_skin_checked="1">
                  <div class="infblockv5 infblockv5_static " bis_skin_checked="1">
                    <div class="infblockv5__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/infblockv5.svg" alt="">
                    </div>
                    <!-- /.infblockv5__icon -->
                    <div class="infblockv5__text" bis_skin_checked="1">В&nbsp;НБКИ вы можете запросить сведения из&nbsp;ЦККИ или&nbsp;подать заявление на&nbsp;создание, изменение или&nbsp;удаление кода субъекта. <i>Услуги платные.</i> </div>
                    <!-- /.infblockv5__text -->
                  </div>
                  <!-- /.infblockv5 -->
                </div>
              </div>
              <div class="rsmainslider__image" bis_skin_checked="1">
                <img src="/local/templates/nbkiv4/public/images/codeSubject_v5.svg" alt="">
              </div>
            </div>
            <!-- /.rsmainslider__wrapper -->
          </div>
        </div>
        <!--  </div>
          </div> -->
      </div>
    </div>
  </div>
  <div class="container">
    <div class="infblockv5 infblockv5_static onlyMobile" bis_skin_checked="1">
      <div class="infblockv5__icon" bis_skin_checked="1">
        <img src="/local/templates/nbkiv4/public/img/infblockv5.svg" alt="">
      </div>
      <!-- /.infblockv5__icon -->
      <div class="infblockv5__text" bis_skin_checked="1">В&nbsp;НБКИ вы можете запросить сведения из&nbsp;ЦККИ или&nbsp;подать заявление на&nbsp;создание, изменение или&nbsp;удаление кода субъекта. <i>Услуги платные.</i> </div>
      <!-- /.infblockv5__text -->
    </div>
    <!-- /.infblockv5 -->
  </div>
  <!-- /.container -->
  <div class="rsblock rsblock_v5 rsblock_v5_2 pb-64" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
      <div class="calccontent__items calccontent__items_v5" bis_skin_checked="1">
        <h2>Как получить услугу бесплатно?</h2>
        <div class="cols2 cols2_v5" bis_skin_checked="1">
          <div class="cols2__col" bis_skin_checked="1">
            <div class="calccontent__item" bis_skin_checked="1">
              <div class="caclcontent__icon caclcontent__icon_blue" bis_skin_checked="1"></div>
              <!-- /.caclcontent__icon caclcontent__icon_blue -->
              <div class="calccontent__text" bis_skin_checked="1">
                Сведения из&nbsp;ЦККИ можно получить <a href="//www.gosuslugi.ru/" target="_blank">через&nbsp;Госуслуги</a> бесплатно при&nbsp;наличии подтвержденной учетной записи
              </div>
            </div>
          </div>
          <div class="cols2__col" bis_skin_checked="1">
            <div class="calccontent__item" bis_skin_checked="1">
              <div class="caclcontent__icon " bis_skin_checked="1"></div>
              <!-- /.caclcontent__icon caclcontent__icon_blue -->
              <div class="calccontent__text" bis_skin_checked="1">Код субъекта можно создать, изменить или&nbsp;удалить бесплатно <a href="//cbr.ru/ckki/zaprosy_v_ckki/code_ch/" target="_blank"> на&nbsp;сайте Банка России</a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <div class="container  ">
    <div class="footsteps footsteps_v5" bis_skin_checked="1">
      <h2 class="onlyMobile">Порядок запроса сведений из&nbsp;ЦККИ или&nbsp;совершения действий (создание, изменение или&nbsp;удаление) с&nbsp;кодом субъекта КИ&nbsp;НБКИ </h2>
      <div class="nbki_v4 wrapperwhite wrapperwhite_v5" bis_skin_checked="1">
        <h2 class="onlyDesktop">Порядок запроса сведений из&nbsp;ЦККИ или&nbsp;совершения действий (создание, изменение или&nbsp;удаление) с&nbsp;кодом субъекта кредитной истории в&nbsp;НБКИ:</h2>
        <div class="footsteps__wrapper" bis_skin_checked="1">
          <div class="footsteps__items" bis_skin_checked="1">
            <div class="footsteps__item" bis_skin_checked="1">
              <div class="footsteps__number" bis_skin_checked="1">
                <div class="footsteps__num" bis_skin_checked="1">
                  1
                </div>
              </div>
              <div class="footsteps__main" bis_skin_checked="1">
                <div class="footsteps__content" bis_skin_checked="1">
                  <div class="footsteps__header" bis_skin_checked="1">
                    <div class="footsteps__title" bis_skin_checked="1">
                      Заполните заявление									
                    </div>
                  </div>
                  <!-- /.footsteps__header -->
                  <div class="footesteps__docs" bis_skin_checked="1">
                    <div class="cols2" bis_skin_checked="1">
                      <div class="cols2__col " bis_skin_checked="1">
                        <a href="/documents/forma_ckki_1_fiz.pdf" target="_blank" class="linkpdf"> <span class="linkpdf__icon"> <img src="/images/pdf_v4.svg" alt=""> </span> <span class="linkpdf__text">Запрос на&nbsp;получение <br>
                        данных из&nbsp;ЦККИ</span></a>
                      </div>
                      <div class="cols2__col " bis_skin_checked="1">
                        <a href="/documents/forma_cod_1_fiz.docx?utm_source=fl&utm_medium=subjectpage&utm_campaign=link&utm_term=inquiry" target="_blank" class="linkpdf"> <span class="linkpdf__icon"> <img src="/images/pdf_v4.svg" alt=""> </span> <span class="linkpdf__text">Запрос на&nbsp;формирование, замену или&nbsp;удаление <br> кода субъекта кредитной истории</span></a>
                      </div>
                    </div>
                    <!-- /.cols2 -->
                  </div>
                  <!-- /.footesteps__docs -->
                </div>
              </div>
              <!-- /.footsteps__main -->
            </div>
            <!-- /.footsteps__item -->
            <div class="footsteps__item" bis_skin_checked="1">
              <div class="footsteps__number" bis_skin_checked="1">
                <div class="footsteps__num" bis_skin_checked="1">
                  2
                </div>
              </div>
              <div class="footsteps__main" bis_skin_checked="1">
                <div class="footsteps__content" bis_skin_checked="1">
                  <div class="footsteps__header" bis_skin_checked="1">
                    <div class="footsteps__title" bis_skin_checked="1">
                      Заверьте запрос у&nbsp;нотариуса
                    </div>
                  </div>
                  <!-- /.footsteps__header -->
                  <div class="footsteps__text" bis_skin_checked="1" style="max-width: 700px;">
                    Понадобится обязательное заверение у&nbsp;нотариуса подписи на&nbsp;заполненном запросе, если&nbsp;вы отправляете заявление «Почтой России». <br> Без&nbsp;этого мы не&nbsp;сможем обработать ваш&nbsp;запрос.
                  </div>
                  <div class="infblockv5 infblockv5_static infblockv5_type9112 infblockv5_full" bis_skin_checked="1">
                    <div class="infblockv5__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/infblockv5.svg" alt="">
                    </div>
                    <!-- /.infblockv5__icon -->
                    <div class="infblockv5__text" bis_skin_checked="1">Если вы подаете запрос лично, достаточно взять с&nbsp;собой паспорт.</div>
                    <!-- /.infblockv5__text -->
                  </div>
                </div>
              </div>
              <!-- /.footsteps__main -->
            </div>
            <!-- /.footsteps__item -->
            <div class="footsteps__item" bis_skin_checked="1">
              <div class="footsteps__number" bis_skin_checked="1">
                <div class="footsteps__num" bis_skin_checked="1">
                  3
                </div>
              </div>
              <div class="footsteps__main" bis_skin_checked="1">
                <div class="footsteps__content" bis_skin_checked="1">
                  <div class="footsteps__header" bis_skin_checked="1">
                    <div class="footsteps__title" bis_skin_checked="1">
                      Оплатите услугу онлайн 
                    </div>
                  </div>
                  <!-- /.footsteps__header -->
                  <div class="footsteps__text" bis_skin_checked="1" style="max-width: 700px;">
                    Сохраните копию квитанции об&nbsp;оплате и&nbsp;приложите ее к&nbsp;заявлению
                  </div>
                  <div class="footsteps__button">
                    <a href="#" class="btn_default js-btn-payment2">Оплатить онлайн</a>
                  </div>
                  <!-- /.footsteps__button -->
                </div>
              </div>
              <!-- /.footsteps__main -->
            </div>
            <!-- /.footsteps__item -->
            <div class="footsteps__item" bis_skin_checked="1">
              <div class="footsteps__number" bis_skin_checked="1">
                <div class="footsteps__num" bis_skin_checked="1">
                  4
                </div>
              </div>
              <div class="footsteps__main" bis_skin_checked="1">
                <div class="footsteps__content" bis_skin_checked="1">
                  <div class="footsteps__header" bis_skin_checked="1">
                    <div class="footsteps__title" bis_skin_checked="1">
                      Передайте заполненный запрос и&nbsp;квитанцию об&nbsp;оплате &nbsp;НБКИ
                    </div>
                  </div>
                  <!-- /.footsteps__header -->
                  <div class="listblocks_v5">
                    <div class="listblocks_v5__item">
                      <div class="listblocks_v5__li">
                        <div class="listblocks_v5__p">Почтой по&nbsp;адресу: 121069, Москва, Скатертный переулок, дом&nbsp;20</div>
                        <!-- /.listblocks_v5__p -->
                        <div class="listblocks_v5__p"><i>Требуется нотариальное заверение вашей подписи на&nbsp;запросе</i></div>
                        <!-- /.listblocks_v5__p -->
                      </div>
                      <!-- /.listblocks_v5__li -->
                    </div>
                    <!-- /.listblocks_v5__item -->
                    <div class="listblocks_v5__item">
                      <div class="listblocks_v5__li">
                        <div class="listblocks_v5__p listblocks_v5__p_xl">Лично в&nbsp;бизнес-центре «Красивый&nbsp;дом»: Москва, Нововладыкинский проезд, дом&nbsp;8, <br> строение&nbsp;4, подъезд&nbsp;1, этаж&nbsp;2, офис&nbsp;209</div>
                        <!-- /.listblocks_v5__p -->
                        <div class="listblocks_v5__p listblocks_v5__p_xl">Часы работы: по&nbsp;будням с&nbsp;10:00 до&nbsp;17:00, перерыв с&nbsp;13:00 до&nbsp;14:00</div>
                        <!-- /.listblocks_v5__p -->
                        <div class="listblocks_v5__p listblocks_v5__p_xl"><i>Не&nbsp;забудьте паспорт</i></div>
                        <!-- /.listblocks_v5__p -->
                      </div>
                      <!-- /.listblocks_v5__li -->
                    </div>
                    <!-- /.listblocks_v5__item -->
                  </div>
                  <!-- /.listblocks_v5 -->
                </div>
              </div>
              <!-- /.footsteps__main -->
            </div>
            <!-- /.footsteps__item -->
            <div class="footsteps__item" bis_skin_checked="1">
              <div class="footsteps__number" bis_skin_checked="1">
                <div class="footsteps__num" bis_skin_checked="1">
                  5
                </div>
              </div>
              <div class="footsteps__main" bis_skin_checked="1">
                <div class="footsteps__content" bis_skin_checked="1">
                  <div class="footsteps__header" bis_skin_checked="1">
                    <div class="footsteps__title" bis_skin_checked="1">
                      Ожидайте ответа
                    </div>
                  </div>
                  <!-- /.footsteps__header -->
                  <div class="footsteps__text" bis_skin_checked="1" style="max-width:759px">
                    Мы&nbsp;отправим ответ на&nbsp;ваше заявление на&nbsp;следующий день после&nbsp;получения ответа из&nbsp;ЦККИ. Ответ будет направлен на&nbsp;адрес, который вы укажете в&nbsp;заявлении.
                  </div>
                </div>
              </div>
              <!-- /.footsteps__main -->
            </div>
            <!-- /.footsteps__item -->
          </div>
          <!-- /.footsteps__items -->
        </div>
        <!-- /.footsteps__wrapper -->
      </div>
      <!-- /.nbki_v4 wrapperwhite -->
    </div>
  </div>
  <div class="blockmobile rsblock rsblock_more rsblock_v5 pb-64" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
      <h2>Еще услуги</h2>
      <div class="mainblock__row" bis_skin_checked="1">
        <div class="mainblock__col mainblock__col_small mainblock__col_compact" bis_skin_checked="1">
          <div class="servicecard servicecard_big" bis_skin_checked="1">
            <a href="/pkr/" class="servicecard__content">
              <div class="servicecard__main" bis_skin_checked="1">
                <div class="servicecard__info" bis_skin_checked="1">
                  <div class="servicecard__header" bis_skin_checked="1">
                    <div class="servicecard__title" bis_skin_checked="1">
                      Персональный <br> кредитный <br>
                      рейтинг
                    </div>
                    <div class="servicecard__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/pkr_v52.svg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="mainblock__col mainblock__col_small mainblock__col_compact" bis_skin_checked="1">
          <div class="servicecard servicecard_big" bis_skin_checked="1">
            <a href="/zashchita-ot-moshennichestva/" class="servicecard__content">
              <div class="servicecard__main" bis_skin_checked="1">
                <div class="servicecard__info" bis_skin_checked="1">
                  <div class="servicecard__header" bis_skin_checked="1">
                    <div class="servicecard__title" bis_skin_checked="1">
                      Защита от мошенничества
                    </div>
                    <div class="servicecard__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/zm.svg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="mainblock__col mainblock__col_small mainblock__col_compact" bis_skin_checked="1">
          <div class="servicecard servicecard_big" bis_skin_checked="1">
            <a href="/podpiska-na-credithistory/" class="servicecard__content">
              <div class="servicecard__main" bis_skin_checked="1">
                <div class="servicecard__info" bis_skin_checked="1">
                  <div class="servicecard__header" bis_skin_checked="1">
                    <div class="servicecard__title" bis_skin_checked="1">
                      Подписка на&nbsp;кредитную историю
                    </div>
                    <div class="servicecard__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/pod_more_v4.svg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rsblock  rsblock_more rsblock_v5 rsblock_abs pb-64 blockdesktop" bis_skin_checked="1">
    <div class="container" bis_skin_checked="1">
      <h2>Еще услуги</h2>
      <div class="mainblock__row" bis_skin_checked="1">
        <div class="mainblock__col mainblock__col_small mainblock__col_compact" bis_skin_checked="1">
          <div class="servicecard servicecard_big" bis_skin_checked="1">
            <div class="servicecard__content" bis_skin_checked="1">
              <div class="servicecard__main" bis_skin_checked="1">
                <div class="servicecard__info" bis_skin_checked="1">
                  <div class="servicecard__header" bis_skin_checked="1">
                    <div class="servicecard__title" bis_skin_checked="1">
                      Персональный <br> кредитный <br>
                      рейтинг
                    </div>
                    <div class="servicecard__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/pkr_v52.svg" alt="">
                    </div>
                  </div>
                  <div class="servicecard__text" bis_skin_checked="1">
                    Показатель вашей кредитоспособности, рассчитанный на&nbsp;основе данных
                    кредитной истории.
                  </div>
                </div>
              </div>
              <div class="servicecard__nav" bis_skin_checked="1">
                <a href="/pkr/ " class="btn_main btn_main_v5 btn_main_large">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mainblock__col mainblock__col_small mainblock__col_compact" bis_skin_checked="1">
          <div class="servicecard servicecard_big" bis_skin_checked="1">
            <div class="servicecard__content" bis_skin_checked="1">
              <div class="servicecard__main" bis_skin_checked="1">
                <div class="servicecard__info" bis_skin_checked="1">
                  <div class="servicecard__header" bis_skin_checked="1">
                    <div class="servicecard__title" bis_skin_checked="1">
                      Защита от мошенничества
                    </div>
                    <div class="servicecard__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/zm.svg" alt="">
                    </div>
                  </div>
                  <div class="servicecard__text" bis_skin_checked="1">
                    Годовая подписка на&nbsp;уведомления о&nbsp;новых кредитах или паспортных
                    данных
                    в&nbsp;кредитной истории
                  </div>
                </div>
              </div>
              <div class="servicecard__nav" bis_skin_checked="1">
                <a href="/zashchita-ot-moshennichestva/" class="btn_main btn_main_v5 btn_main_large">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
        <div class="mainblock__col mainblock__col_small mainblock__col_compact" bis_skin_checked="1">
          <div class="servicecard servicecard_big" bis_skin_checked="1">
            <div class="servicecard__content" bis_skin_checked="1">
              <div class="servicecard__main" bis_skin_checked="1">
                <div class="servicecard__info" bis_skin_checked="1">
                  <div class="servicecard__header" bis_skin_checked="1">
                    <div class="servicecard__title" bis_skin_checked="1">
                      Подписка на&nbsp;кредитную историю
                    </div>
                    <div class="servicecard__icon" bis_skin_checked="1">
                      <img src="/local/templates/nbkiv4/public/img/pod_more_v4.svg" alt="">
                    </div>
                  </div>
                  <div class="servicecard__text" bis_skin_checked="1">
                    Получение кредитной истории <br> на&nbsp;email в&nbsp;течение полугода
                  </div>
                </div>
              </div>
              <div class="servicecard__nav" bis_skin_checked="1">
                <a href="/podpiska-na-credithistory/" class="btn_main  btn_main_v5 btn_main_large">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="rsblock rsblock_v4" id="hlvopros">
    <div class="container">
      <h2 class="vopros" id="block_faq">Ответы на&nbsp;вопросы</h2>
      <div itemscope="" itemtype="http://schema.org/FAQPage">
        <div class="accordionwrapper" role="tablist">
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="true" aria-expanded="true" tabindex="0">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>Зачем мне заказывать справку из&nbsp;ЦККИ?
            </p>
            <div class="accordion__content " id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">В&nbsp;ЦККИ хранится информация о&nbsp;том, в&nbsp;каких бюро находится ваша кредитная история. Получив справку из&nbsp;ЦККИ вы&nbsp;сможете собрать полную информацию, которая хранится о&nbsp;вас в&nbsp;разных БКИ и&nbsp;сможете быть уверены в&nbsp;полноте и&nbsp;достоверности этой информации. </span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Могу&nbsp;ли&nbsp;я&nbsp;получить справку на&nbsp;госуслугах или&nbsp;в&nbsp;самом ЦККИ?
            </p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Если у&nbsp;вас есть подтвержденная учетная запись на&nbsp;сайте Госуслуг, вы&nbsp;можете получить сведения из&nbsp;ЦККИ на&nbsp;сайте Госуслуг. А&nbsp;если вы&nbsp;располагаете кодом субъекта кредитной истории, вы&nbsp;сможете сделать запрос непосредственно через сайт ЦККИ и&nbsp;получить справку о&nbsp;том, в&nbsp;каких бюро находится ваша кредитная история. </span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Слышал, что&nbsp;справку можно получить бесплатно, почему у&nbsp;вас она платная?
            </p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Бесплатно услуга предоставляется непосредственно в&nbsp;ЦККИ или&nbsp;на&nbsp;Госуслугах, в&nbsp;НБКИ получить справку можно за&nbsp;300&nbsp;рублей. </span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Из чего состоит код субъекта кредитной истории?

            </p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Это набор букв и цифр. Комбинацию указывает клиент при заключении кредитного договора с банком. Код можно сформировать и в любое другое время после получения кредита. для этого надо обратиться в Бюро кредитных историй или банковскую организацию.
									<ul>
										<li>Длина кода: не менее четырех и не более пятнадцати символов;
											</li>
										<li>Разрешается использование арабских цифр;
												</li>
										<li>Можно использовать строчные и заглавные буквы английского и русского алфавита;
											</li>
										<li>Запрещено сочетать буквы из разных алфавитов.
																</li>
											</ul>
												</span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как формируется код субъекта КИ?


            </p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Создать код субъекта можно в момент подписания договора на получение кредита/займа в банке или кредитной организации. Также его можно создать позднее в банке, выдавшем первый кредит, или в БКИ.</span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как узнать код субъекта кредитной истории онлайн?



            </p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Эта информация недоступна онлайн. Поищите код в кредитном договоре, или обратитесь в организацию, который выдала займ. Если вы найдете код, то можете подать запрос в НБКИ на его изменение или удаление. Запрос отправляется в письменном виде почтой России. Подпись на запросе заверяется у нотариуса, к письму прикладывается квитанция, подтверждающая оплату услуги. Стоимость получения кода субъекта кредитной истории в НБКИ составляет 300 рублей.</span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Может ли отсутствовать код субъекта?




            </p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Да, у вас может не быть кода, но даже если вы не создали его в момент получения кредита, то сможете сформировать комбинацию позже, обратившись в банк или БКИ.</span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Как изменить или удалить код субъекта кредитной истории?</p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Проводить операции с кодом можете только вы. Это можно сделать в НБКИ: отправьте нам письменный запрос почтой России, или обратитесь лично в офисе приема субъектов. Также вы можете изменить код на сайте Банка России. Кредитная история при этом не меняется. Код субъекта КИ не ограничен по сроку действия, но его нельзя скорректировать без объяснения причины.</span>
              </p>
            </div>
          </div>
          <div class="questionwrapper">
            <p class="accordion__title" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
              <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span> <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Когда нужен дополнительный код субъекта кредитной истории?</p>
            <div class="accordion__content" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
              <p class="accordion__small" itemprop="acceptedAnswer" itemscope="" itemtype="http://schema.org/Answer">
                <span itemprop="text">Дополнительный код субъекта кредитной истории – это временно действующий (в течение двух месяцев со дня его формирования) аналог кода субъекта кредитной истории для пользователя кредитной истории, который создает субъект кредитной истории.</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
</div>
<!-- /.pagecontent_v4 -->
<?$APPLICATION->IncludeComponent(
  "bitrix:main.include",
  "",
  Array(
  	"AREA_FILE_SHOW" => "file",
  	"AREA_FILE_SUFFIX" => "inc",
  	"COMPOSITE_FRAME_MODE" => "A",
  	"COMPOSITE_FRAME_TYPE" => "AUTO",
  	"EDIT_TEMPLATE" => "",
  	"PATH" => "/include/svedeniya_form.php"
  )
  );?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>