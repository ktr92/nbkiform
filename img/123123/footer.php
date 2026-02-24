<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== TRUE)
  die(); ?>
<?
global $APPLICATION;
if (WRAPPER && file_exists($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/wrappers/' . WRAPPER . '/footer.php'))
  require_once 'wrappers/' . WRAPPER . '/footer.php';
?>
<? if ((CUSTOM_HEADER || CUSTOM_FOOTER) && file_exists($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/wrappers/' . WRAPPER . '/custom.footer.php')): ?>
  <? require_once 'wrappers/' . WRAPPER . '/custom.footer.php'; ?>
<? else: ?>
  <footer id="footer" class="footer clearfix">
    <div class="container">
      <div class="footer__main">
        <div class="mainfooter">

          <div class="mainfooter__left">
            <div class="mainfooter__menublock">
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="/">Услуги физическим лицам</a></div>
                <div class="mainfooter__links">
                  <ul>
                    <li>
                      <a href="/pkr/" class="">Узнать кредитный рейтинг</a>
                    </li>
                    <li>
                      <a href="/nbki-history/" class="">Получить кредитную историю</a>
                    </li>
                    <li>
                      <a href="/spor/" class="">Оспорить кредитную историю</a>
                    </li>
                    <!-- 	<li>
                      <a href="/historylist/" class="">Справка из&nbsp;ЦККИ</a>
                    </li>
                    <li>
                      <a href="/code/?utm_medium=footer&utm_campaign=link&utm_term=subject"
                         class="">Действия с кодом субъекта</a>
                    </li> -->
                    <li>
                      <a href="/historylist/" class="">ЦККИ и код субъекта</a>
                    </li>
                    <li>
                      <a href="/zashchita-ot-moshennichestva/" class="">Защита от
                        мошенничества</a>
                    </li>
                    <li>
                      <a href="/podpiska-na-credithistory/" class="">Подписка на&nbsp;кредитную
                        историю</a>
                    </li>
                    <li>
                      <a href="/credit-check/" class="">Проверить задолженность</a>
                    </li>

                  </ul>
                </div>
                <div class="mainfooter__bottom">
                  <div class="mainfooter__title"><a href="https://person.nbki.ru/" target='_blank'>Личный кабинет физлица</a></div>

                </div><!-- /.mainfooter__bottom -->
              </div>
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="/judicial/">Услуги юридическим лицам</a></div>
                <div class="mainfooter__links">
                  <ul>

                    <li>
                      <a href="/judicial/svedeniya/" class="">Получить кредитную историю</a>
                    </li>
                    <li>
                      <a href="/judicial/spor/" class="">Оспорить кредитную историю</a>
                    </li>
                    <li>
                      <a href="/judicial/historylist/" class="">ЦККИ и код субъекта-юрлица</a>
                    </li>
                    <!-- <li>
                      <a href="/judicial/historylist/" class="">Справка из&nbsp;ЦККИ</a>
                    </li>
                    <li>
                      <a href="/judicial/code/"
                         class="">Действия с кодом субъекта</a>
                    </li> -->
                    <? /* <li>
                      <a href="/judicial/code/?utm_medium=footer&utm_campaign=link&utm_term=subject"
                         class="">Действия с кодом субъекта</a>
                    </li> */ ?>

                  </ul>
                </div>
                <div class="mainfooter__bottom">
                  <div class="mainfooter__title"><a href="/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым
                      управляющим</a></div>

                </div><!-- /.mainfooter__bottom -->
              </div>
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="/corp/">B2B</a></div>
                <div class="mainfooter__links">
                  <ul>

                    <li>
                      <a href="/corp/" class="">Подробная информация</a>
                    </li>
                    <li>
                      <a href="/corp/become-a-client/" class="">Стать клиентом НБКИ</a>
                    </li>

                  </ul>
                </div>
                <div class="mainfooter__bottom">
                  <div class="mainfooter__title"><a href="/corp/" target="_blank">Личный кабинет B2B</a></div>

                </div><!-- /.mainfooter__bottom -->
              </div>
              <div class="mainfooter__menu">
                <div class="mainfooter__title"><a href="/company/">О бюро</a></div>
                <div class="mainfooter__links">
                  <ul>
                    <li>
                      <a href="/company/" class="">О бюро</a>
                    </li>
                    <li>
                      <a href="/company/documents/" class="" target="_blank">Документы НБКИ</a>
                    </li>
                    <li>
                      <a href="/company/rekvizit/" class="">Реквизиты</a>
                    </li>
                    <li>
                      <a href="/contacts/" class="">Контакты</a>
                    </li>
                    <li>
                      <a href="/company/reviews/" class="">Отзывы</a>
                    </li>
                    <li>
                      <a href="https://story.nbki.ru" class="" target="_blank">Истории о кредитах</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <div class="mainfooter__right">
            <div class="mainfooter__phones">
              <div class="phones">
                <div class="phone"><span>Наш телефон в&nbsp;Москве:</span><a href="tel:84952217837">8
                    (495)
                    221-78-37</a></div>
                <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800)
                    600-64-04</a></div>
              </div>
            </div>


            <div class="footer__mobilemenu onlymobile mainfooter__nav">
              <div class="footer__mobilemenublock mainfooter__links">
                <ul>
                  <li>
                    <a href="/pkr/" class="">Узнать кредитный рейтинг</a>
                  </li>
                  <li>
                    <a href="/nbki-history/" class="">Получить кредитную историю</a>
                  </li>
                  <li>
                    <a href="/spor/" class="">Оспорить кредитную историю</a>
                  </li>
                  <li>
                    <a href="/zashchita-ot-moshennichestva/" class="">Защита от мошенничества</a>
                  </li>
                  <li>
                    <a href="/podpiska-na-credithistory/" class="">Подписка на&nbsp;кредитную
                      историю</a>
                  </li>

                  <li>
                    <a href="/credit-check/" class="">Проверить задолженность</a>
                  </li>
                </ul>
              </div><!-- /.footer__mobilemenublock -->
              <div class="footer__mobilemenublock mainfooter__links">
                <ul>
                  <li>
                    <a href="/judicial/" class="">Юридическим лицам</a>
                  </li>
                  <li>
                    <a href="/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым управляющим</a>
                  </li>
                  <li>
                    <a href="/corp/" class="">Корпоративным клиентам</a>
                  </li>

                </ul>
              </div><!-- /.footer__mobilemenublock -->
            </div><!-- /.footer__mobilemenu -->

            <div class="mainfooter__navs">
              <div class="mainfooter__nav">
                <a href="/privacy_rules/" target="_blank">Пользовательское соглашение</a>
              </div>
              <div class="mainfooter__nav">
                <a href="https://nbki.ru/upload/iblock/5fa/muqsrd2n4cuyky63jz7wl1telgqzyppx.pdf" target="_blank">Политика
                  обработки
                  данных</a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="footer__bottom">
        <div class="footerbottom">
          <div class="footerbottom__links">
            <div class="footerbottom__text">
              © Национальное бюро кредитных историй, 2006–2025
            </div>
            <div class="footerbottom__text footerbottom__text_dev" style="display:none;">
              <span>Дизайн сайта — <a href="https://mediaaid.ru" rel="nofollow" target="_blank">mad!</a></span>
              <span>Разработка сайта - <a href="https://www.empis.ru/" rel="nofollow" target="_blank">EMPIS</a></span>
            </div>
          </div>
          <div class="footerbottom__socials ">
            <button onclick='window.scrollTo({top: 0, behavior: "smooth"});' class="totop">
              <span>Наверх</span>
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_30914_339" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16"
                  height="16">
                  <rect width="16" height="16" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_30914_339)">
                </g>
                <mask id="mask1_30914_339" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="17"
                  height="17">
                  <rect x="0.34375" y="0.00561523" width="16" height="16" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask1_30914_339)">
                  <path
                    d="M4.96096 9.63918C4.8495 9.53891 4.79376 9.41652 4.79376 9.27198C4.79376 9.12745 4.8495 8.99972 4.96096 8.88878L7.89456 5.97198C7.9607 5.89411 8.0327 5.83865 8.11056 5.80558C8.18843 5.77251 8.2663 5.75598 8.34416 5.75598C8.42203 5.75598 8.4999 5.77251 8.57776 5.80558C8.65563 5.83865 8.72763 5.89411 8.79376 5.97198L11.7442 8.90558C11.8444 9.01652 11.8972 9.13865 11.9026 9.27198C11.9079 9.40532 11.8551 9.52771 11.7442 9.63918C11.6332 9.75011 11.5082 9.80558 11.369 9.80558C11.2303 9.80558 11.1052 9.75011 10.9938 9.63918L8.34416 7.02238L5.69456 9.65518C5.5943 9.76665 5.47483 9.82238 5.33616 9.82238C5.19696 9.82238 5.0719 9.76131 4.96096 9.63918Z"
                    fill="#7B7794" />
                </g>
              </svg>

            </button>
            <div class="socials">
              <div class="socials__items">
                <div class="socials__item">

                  <a href="https://vk.com/public189456417" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2 11.6C2 7.07442 2 4.8093 3.40558 3.40558C4.81116 2.00186 7.07442 2 11.6 2H12.4C16.9256 2 19.1907 2 20.5944 3.40558C21.9981 4.81116 22 7.07442 22 11.6V12.4C22 16.9256 22 19.1907 20.5944 20.5944C19.1888 21.9981 16.9256 22 12.4 22H11.6C7.07442 22 4.8093 22 3.40558 20.5944C2.00186 19.1888 2 16.9256 2 12.4V11.6Z"
                        fill="#848099" />
                      <path
                        d="M12.4191 16.0466C8.15309 16.0466 5.72147 13.1219 5.61914 8.25586H7.75868C7.82844 11.828 9.40426 13.3405 10.6517 13.6512V8.25586H12.6638V11.3368C13.8954 11.2038 15.1903 9.80005 15.6266 8.25586H17.6387C17.3038 10.1591 15.9001 11.5628 14.9019 12.1396C15.9001 12.6047 17.4982 13.8317 18.1066 16.0466H15.888C15.4126 14.5582 14.2275 13.414 12.6601 13.2559V16.0466H12.4191Z"
                        fill="white" />
                    </svg>
                  </a>
                </div>

                <div class="socials__item">
                  <a href="https://t.me/bkinbki" target="_blank">

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2 11.6C2 7.07442 2 4.8093 3.40558 3.40558C4.81116 2.00186 7.07442 2 11.6 2H12.4C16.9256 2 19.1907 2 20.5944 3.40558C21.9981 4.81116 22 7.07442 22 11.6V12.4C22 16.9256 22 19.1907 20.5944 20.5944C19.1888 21.9981 16.9256 22 12.4 22H11.6C7.07442 22 4.8093 22 3.40558 20.5944C2.00186 19.1888 2 16.9256 2 12.4V11.6Z"
                        fill="#7B7794" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.81082 11.2106C9.97826 9.83044 12.0905 8.9205 13.1475 8.48073C16.1657 7.225 16.7922 7.00665 17.2013 7.0002C17.3514 6.99664 17.4989 7.04083 17.6223 7.12642C17.7087 7.20173 17.7638 7.30651 17.7771 7.42031C17.7991 7.56199 17.8053 7.70568 17.7955 7.84872C17.6315 9.56695 16.924 13.7368 16.5637 15.6604C16.4117 16.4749 16.1123 16.7485 15.8212 16.7752C15.1901 16.8333 14.711 16.3579 14.1002 15.9571C13.1439 15.3306 12.6031 14.9437 11.6753 14.3282C10.602 13.6216 11.2976 13.2328 11.9093 12.598C12.0696 12.4313 14.8492 9.9023 14.9035 9.6729C14.9105 9.63921 14.9096 9.60437 14.9008 9.57111C14.892 9.53786 14.8756 9.5071 14.8529 9.48127C14.8199 9.45996 14.7823 9.44684 14.7432 9.443C14.7041 9.43915 14.6646 9.44469 14.6281 9.45916C14.5323 9.48127 13.0044 10.491 10.0446 12.4884C9.61036 12.7869 9.21757 12.9322 8.86625 12.9242C8.47746 12.9159 7.73121 12.7049 7.17658 12.5243C6.49666 12.3032 5.95586 12.1862 6.00285 11.8103C6.0268 11.6138 6.29612 11.4139 6.81082 11.2106Z"
                        fill="white" />
                    </svg>
                  </a>
                </div>

                <div class="socials__item">
                  <a href="https://www.youtube.com/channel/UC-quFSK5Vpq23UOogbUcSUg" rel="nofollow" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2 11.6C2 7.07442 2 4.8093 3.40558 3.40558C4.81116 2.00186 7.07441 2 11.6 2H12.4C16.9256 2 19.1907 2 20.5944 3.40558C21.9981 4.81116 22 7.07442 22 11.6V12.4C22 16.9256 22 19.1907 20.5944 20.5944C19.1888 21.9981 16.9256 22 12.4 22H11.6C7.07441 22 4.8093 22 3.40558 20.5944C2.00186 19.1888 2 16.9256 2 12.4V11.6Z"
                        fill="#7B7794" />
                      <path d="M9 16V8L16 12.2105L9 16Z" fill="white" stroke="white" stroke-width="2"
                        stroke-linejoin="round" />
                    </svg>
                  </a>
                </div>


                <div class="socials__item">
                  <a href="https://ok.ru/group/57783371890929" rel="nofollow" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M2 11.6C2 7.07442 2 4.8093 3.40558 3.40558C4.81116 2.00186 7.07442 2 11.6 2H12.4C16.9256 2 19.1907 2 20.5944 3.40558C21.9981 4.81116 22 7.07442 22 11.6V12.4C22 16.9256 22 19.1907 20.5944 20.5944C19.1888 21.9981 16.9256 22 12.4 22H11.6C7.07442 22 4.8093 22 3.40558 20.5944C2.00186 19.1888 2 16.9256 2 12.4V11.6Z"
                        fill="#7B7794" />
                      <path
                        d="M11.9955 12.3331C12.5988 12.3331 13.1886 12.1542 13.6902 11.8191C14.1918 11.4839 14.5827 11.0075 14.8136 10.4502C15.0445 9.89282 15.1049 9.27952 14.9872 8.68783C14.8695 8.09614 14.579 7.55264 14.1524 7.12606C13.7258 6.69947 13.1823 6.40897 12.5906 6.29128C11.9989 6.17358 11.3856 6.23399 10.8283 6.46485C10.2709 6.69572 9.79453 7.08668 9.45937 7.58828C9.12421 8.08989 8.94531 8.67962 8.94531 9.2829C8.94654 10.0915 9.2683 10.8666 9.84007 11.4384C10.4118 12.0101 11.187 12.3319 11.9955 12.3331ZM11.9955 8.01685C12.246 8.01667 12.4909 8.09076 12.6992 8.22977C12.9075 8.36877 13.0699 8.56644 13.1659 8.79776C13.2619 9.02908 13.2871 9.28367 13.2383 9.52932C13.1896 9.77497 13.0691 10.0006 12.892 10.1778C12.715 10.355 12.4894 10.4756 12.2438 10.5246C11.9982 10.5735 11.7436 10.5485 11.5122 10.4527C11.2808 10.3569 11.083 10.1946 10.9439 9.98637C10.8047 9.77815 10.7304 9.53334 10.7304 9.2829C10.7304 8.94728 10.8637 8.6254 11.1009 8.388C11.3381 8.15059 11.6599 8.0171 11.9955 8.01685Z"
                        fill="white" />
                      <path
                        d="M13.2325 14.8168C13.8619 14.6736 14.4624 14.4245 15.0083 14.0801C15.1113 14.0189 15.2009 13.9378 15.272 13.8415C15.3432 13.7451 15.3943 13.6355 15.4224 13.5191C15.4505 13.4027 15.4551 13.2819 15.4358 13.1637C15.4165 13.0455 15.3738 12.9324 15.3101 12.831C15.2464 12.7296 15.1631 12.6419 15.065 12.5732C14.9669 12.5045 14.8561 12.4561 14.7391 12.4308C14.622 12.4056 14.5011 12.404 14.3834 12.4262C14.2657 12.4484 14.1537 12.4939 14.0539 12.5601C13.4376 12.944 12.726 13.1475 11.9999 13.1475C11.2738 13.1475 10.5623 12.944 9.94597 12.5601C9.74458 12.4405 9.5044 12.4043 9.27671 12.4593C9.04902 12.5143 8.85185 12.6561 8.72729 12.8545C8.60272 13.0529 8.56064 13.2921 8.61001 13.5211C8.65939 13.7501 8.79631 13.9507 8.99155 14.0801C9.53667 14.4261 10.1374 14.6753 10.7674 14.8168L9.05853 16.5266C8.97539 16.6096 8.90943 16.7082 8.86443 16.8168C8.81942 16.9253 8.79626 17.0417 8.79626 17.1592C8.79626 17.2767 8.81942 17.393 8.86443 17.5016C8.90943 17.6101 8.97539 17.7087 9.05853 17.7917C9.22769 17.9577 9.45415 18.0522 9.69109 18.0559C9.80891 18.0569 9.92571 18.034 10.0344 17.9886C10.1431 17.9432 10.2415 17.8762 10.3236 17.7917L12.0046 16.1108L13.6855 17.7917C13.8533 17.9596 14.0809 18.054 14.3182 18.0541C14.5555 18.0542 14.7832 17.96 14.9511 17.7922C15.119 17.6244 15.2133 17.3968 15.2134 17.1595C15.2135 16.9222 15.1193 16.6945 14.9516 16.5266L13.2325 14.8168Z"
                        fill="white" />
                    </svg>
                  </a>
                </div>

                <div class="socials__item">
                  <a href="https://zen.yandex.ru/nbki" rel="nofollow" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M3 11.6C3 9.30895 3.00212 7.69064 3.16679 6.46528C3.32762 5.26844 3.62678 4.59795 4.11222 4.11315C4.59833 3.62769 5.26962 3.3285 6.46617 3.16746C7.69125 3.00258 9.3092 3 11.6 3H12.4C14.691 3 16.3094 3.00212 17.5347 3.16679C18.7316 3.32762 19.4021 3.62678 19.8868 4.11222C20.3723 4.59833 20.6715 5.26962 20.8325 6.46617C20.9974 7.69125 21 9.3092 21 11.6V12.4C21 14.691 20.9979 16.3094 20.8332 17.5347C20.6724 18.7316 20.3732 19.4021 19.8878 19.8868C19.4017 20.3723 18.7304 20.6715 17.5338 20.8325C16.3088 20.9974 14.6908 21 12.4 21H11.6C9.30895 21 7.69064 20.9979 6.46528 20.8332C5.26844 20.6724 4.59795 20.3732 4.11316 19.8878C3.62769 19.4017 3.3285 18.7304 3.16746 17.5338C3.00258 16.3088 3 14.6908 3 12.4V11.6Z"
                        fill="#7B7794" stroke="#7B7794" stroke-width="2" />
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M11.9876 5.17847C11.8744 5.17847 11.7823 5.27003 11.7805 5.38319C11.7391 8.01757 11.5352 9.51877 10.5257 10.5292C9.51627 11.5395 8.01689 11.7434 5.38441 11.7849C5.27125 11.7867 5.17969 11.8788 5.17969 11.992C5.17969 12.1051 5.27125 12.1972 5.38441 12.199C8.01689 12.2405 9.51627 12.4453 10.5257 13.4547C11.5352 14.4642 11.7391 15.9663 11.7805 18.6007C11.7823 18.7139 11.8744 18.8054 11.9876 18.8054C12.1008 18.8054 12.1929 18.7139 12.1947 18.6007C12.2361 15.9663 12.44 14.4651 13.4495 13.4547C14.4589 12.4444 15.9583 12.2405 18.5898 12.199C18.703 12.1972 18.7946 12.1051 18.7946 11.992C18.7946 11.8788 18.703 11.7867 18.5898 11.7849C15.9582 11.7434 14.458 11.5386 13.4495 10.5292C12.4409 9.51968 12.2362 8.01762 12.1947 5.38319C12.1929 5.27003 12.1008 5.17847 11.9876 5.17847Z"
                        fill="white" stroke="white" stroke-width="0.5" />
                    </svg>

                  </a>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  <button onclick='window.scrollTo({top: 0, behavior: "smooth"});' class="totop">
   <img src="/images/totop.svg" alt="">
</button> -->
  </footer>

  <div itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="name" content="АО «НБКИ»" />
    <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <meta itemprop="streetAddress" content="Нововладыкинский проезд, д. 8, стр. 4, подъезд 1, 2 этаж, офис 209">
      </meta>
      <meta itemprop="postalCode" content="121069" />
      <meta itemprop="addressLocality" content="Москва" />
    </div>
    <meta itemprop="telephone" content="8 (495) 221-78-37" />
    <meta itemprop="email" content="info@nbki.ru" />
  </div>
<? endif; ?>
<div class="s-overlay"></div>
<!-- Модальные окно - Оплата -->
<div id="modal_pay" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <span class="modalclose" data-dismiss="modal" aria-hidden="true">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
          <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
        </svg>
      </span>
      <div class="modal-body">
        <div class="modal-title">Онлайн оплата услуги</div>
        <div class="modal__text">
          <p><span style="color: #FF0029">Внимание!</span> Первый и второй (за 12 месяцев) кредитный отчет оплачивать не
            нужно.</p>
          <p>После оплаты кредитная история не будет отправлена, после оплаты необходимо направить запрос, смотри пункты
            выше</p>
        </div>
        <div class="modal__info">Стоимость услуги</div>
        <div class="modal__price">450 ₽</div>
        <div class="modal__content formblock">
          <form id="formPay" method="post" action="#">
            <input type="hidden" name="svpayment" value="450 руб.">
            <input type="hidden" name="service_val" value="450.00">
            <input type="hidden" name="service_name"
              value="Повторное, в рамках 12 месяцев, получение кредитного отчета">
            <div class="modal__inputs formblock__inputs">
              <div class="modal__input formblock__input">
                <input type="text" class="forminput" name="name" placeholder="ФИО">
              </div>
              <div class="modal__input formblock__input">
                <input type="tel" class="forminput" name="phone" placeholder="Мобильный телефон">
              </div>
              <div class="modal__input formblock__input">
                <input type="email" class="forminput" name="email" placeholder="Электронная почта">
              </div>
            </div>
            <div class="check-block">
              <input type="checkbox" id="formpayment" name="agree">
              <label for="formpayment">Оплачивая услугу вы соглашаетесь с <a
                  href="/documents/pravo/Data_processing_policy_2019.pdf" class="link_blue">Политикой в области
                  обработки и защиты персональных данных АО «НБКИ»</a></label>
            </div>
            <div class="lkform__error lkform__item"></div>
            <div class="formblock__buttons">
              <button type="submit" class="btn_main btn_main_default">Оплатить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Вход для корп.клиентов -->
<div id="myModal_login" class="modal fade">
  <div class="modal-dialog modal-dialog_login">
    <div class="modal-content">
      <span class="modalclose" data-dismiss="modal" aria-hidden="true">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
          <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
        </svg>
      </span>
      <div class="modal-body">
        <div class="modal_zvonok_content">
          <div class="modal__title">Вход в личный кабинет для юридических лиц, имеющих договор с НБКИ</div>
          <div class="modal_zvonok_form_content">
            <form action="https://lk.nbki.ru/Cabinet/j_spring_security_check" method="post" autocomplete="off"
              class="lkform lkform_modal">
              <div class="lkform__items">
                <div class="lkform__item">
                  <div class="lkform__label">Логин</div>
                  <input type="text" name="j_username">
                </div>
                <div class="lkform__item">
                  <div class="lkform__label">Пароль</div>
                  <input type="password" name="j_password">
                  <span class="toggle-password"><img src="/images/eye.png" alt=" "></span>
                  <span class="password-error">Неверный пароль</span>
                </div>
                <!--
                  <div class="lkform__item lkform__item_checkbox">
                      <div class="lkcheckbox">
                          <input type="checkbox" id="formconfirm" class="inputcheckbox">
                          <label for="formconfirm">Запомнить меня</label>
                      </div>
                  </div>-->
                <!-- <div class="lkform__item lkform__item_captcha">
                  <img src="/images/captcha.png">
                  </div>   -->
                <div class="lkform__item">
                  <input type="submit" class="btn btn_red btn_round" value="Войти">
                </div>
                <div class="lkform__item">
                  <a href="#" class="lkform__link js-forgotpass">Забыли логин или пароль?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="myModal_logincorp" class="modal modal_corp fade">
  <div class="modal-dialog modal-dialog_login">
    <div class="modal-content">
      <div class="modalheader">
        <div class="modalheader__logo">
          <img src="/local/templates/nbkiv4/public/img/nbki-logo.svg" alt="">
        </div><!-- /.modalheader__logo -->

        <span class="modalclose" data-dismiss="modal" aria-hidden="true">
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10.5003 8.84188L1.65839 0L0.000548551 1.65785L8.84243 10.4997L0 19.3422L1.65784 21L10.5003 12.1576L19.3421 20.9994L21 19.3416L12.1581 10.4997L20.9995 1.65843L19.3416 0.000585816L10.5003 8.84188Z"
              fill="#7B7794" />
          </svg>

        </span>
      </div><!-- /.modalheader -->

      <div class="modal-body">
        <div class="modal_zvonok_content">
          <div class="modal__title">Вход в личный кабинет</div>
          <div class="modal__subtitle">Для юридических лиц, <br> имеющих договор с НБКИ</div><!-- /.modal__subtitle -->
          <div class="modal_zvonok_form_content">
            <form action="https://lk.nbki.ru/Cabinet/j_spring_security_check" method="post" autocomplete="off"
              class="lkform lkform_modal">
              <div class="lkform__items">
                <div class="lkform__item">
                  <input type="text" name="j_username" placeholder="Логин">
                </div>
                <div class="lkform__item">
                  <input type="password" name="j_password" placeholder="Пароль">
                  <!--   <span class="toggle-password"><img src="/images/eye.png"  alt=" "></span> -->
                  <span class="password-error">Неверный пароль</span>
                </div>
                <!--
                  <div class="lkform__item lkform__item_checkbox">
                      <div class="lkcheckbox">
                          <input type="checkbox" id="formconfirm" class="inputcheckbox">
                          <label for="formconfirm">Запомнить меня</label>
                      </div>
                  </div>-->
                <!-- <div class="lkform__item lkform__item_captcha">
                  <img src="/images/captcha.png">
                  </div>   -->
                <div class="lkform__item">
                  <input type="submit" class="btn btn_red btn_round" value="Войти">
                </div>
                <div class="lkform__item lkform__item_remember">
                  <a href="#" class="lkform__link js-forgotpasscorp">Не помню пароль</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal_forgotpass" class="modal fade">
  <div class="modal-dialog modal-dialog_login">
    <div class="modal-content">
      <span class="modalclose" data-dismiss="modal" aria-hidden="true">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
          <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
        </svg>
      </span>
      <div class="modal-body">
        <div class="modal_zvonok_content">
          <div class="modal__title">Забыли пароль?</div>
          <div class="modal_zvonok_form_content">
            <p data-content="forgot">

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal_forgotcorp" class="modal modal_corp  fade">
  <div class="modal-dialog modal-dialog_login">
    <div class="modal-content">

      <div class="modal-body">
        <div class="modal_zvonok_content">
          <div class="modal__title">Забыли пароль?</div>
          <div class="modal_text">
            <p data-content="forgot">
            </p>
          </div>
          <div class="lkform__item">
            <a href="mailto:sd@nbki.ru" target="_blank" class="btn btn_red btn_round">Отправить запрос</a>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<? if ($_COOKIE["SITE_YES"] != "Y"): ?>
  <div class="newcookies newcookies_v5" id="newcookies">
    <div class="newcookies__wrapper">
      <div class="newcookies__content">
        <div class="newcookies__items">

          <div class="newcookies__item">
            <div class="newcookies__text" data-content="cookie">
            </div>
          </div>
          <div class="newcookies__item">
            <div class="newcookies__button"><span style="cursor: pointer;"
                class="btn_main   js-accept-cookie">Принимаю</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<? endif; ?>
<? if ($_COOKIE["NEW_DESIGN"] != "Y" && false): ?>
  <div class="infofixed">
    <button class="infofixed__close" onclick="$(this).parent().hide();">
      <img src="/local/templates/nbkiv2/public/images/icon-close.png">
    </button>
    <div class="infofixed__content">
      <div class="infofixed__title">Мы изменили логотип и фирменный стиль</div>
      <div class="infofixed__subtitle">Посмотрите нашу <a href="https://youtu.be/WxQNCYgETuw"
          target="_blank">презентацию</a></div>
      <div class="infofixed__images">
        <div class="infofixed__oldlogo">
          <span><img src="/images/oldlogo.png" alt=""></span>
        </div>
        <div class="infofixed__arrow">
          <span>
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px" y="0px" width="268.832px" height="268.832px" viewBox="0 0 268.832 268.832"
              style="enable-background:new 0 0 268.832 268.832;" xml:space="preserve">
              <g>
                <path
                  d="M265.171,125.577l-80-80c-4.881-4.881-12.797-4.881-17.678,0c-4.882,4.882-4.882,12.796,0,17.678l58.661,58.661H12.5
                c-6.903,0-12.5,5.597-12.5,12.5c0,6.902,5.597,12.5,12.5,12.5h213.654l-58.659,58.661c-4.882,4.882-4.882,12.796,0,17.678
                c2.44,2.439,5.64,3.661,8.839,3.661s6.398-1.222,8.839-3.661l79.998-80C270.053,138.373,270.053,130.459,265.171,125.577z" />
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
              <g>
              </g>
            </svg>
          </span>
        </div>
        <div class="infofixed__newlogo">
          <span>
            <svg width="121" height="22" viewBox="0 0 121 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
                <path
                  d="M52.9591 0.0605469V22.0002H49.1422V12.4141H37.7856V22.002H33.9688V0.0605469H37.7856V8.97175H49.1422V0.0605469H52.9591Z"
                  fill="black"></path>
                <path
                  d="M68.293 8.69557C73.2555 8.69557 76.0547 11.1538 76.0547 15.3332C76.0547 19.5127 73.2555 22.002 68.293 22.002H58.082V0.0605469H74.1773V3.40957H61.8989V8.69557H68.293ZM67.6252 18.7426C71.0282 18.7426 72.2058 17.4513 72.2058 15.24C72.2058 13.0579 70.9661 11.7684 67.6252 11.7684H61.8989V18.7445H67.6252V18.7426Z"
                  fill="black"></path>
                <path
                  d="M79.8164 0.0605469H83.6333V9.03394H89.7734L94.132 0.0605469H98.0768L92.9864 10.724L98.3628 22.002H94.418L89.7734 12.383H83.6333V22.0002H79.8164V0.0605469Z"
                  fill="black"></path>
                <path
                  d="M105.447 0.0605469V17.1459H106.211L115.594 0.0605469H121.003V22.0002H117.376V4.91489H116.612L107.229 22.0002H101.82V0.0605469H105.447Z"
                  fill="black"></path>
                <path
                  d="M4.14021 16.7844C4.9698 16.7844 5.64513 17.4319 5.64513 18.2293C5.64513 19.0268 4.9698 19.6743 4.14021 19.6743C3.31061 19.6743 2.63528 19.0268 2.63528 18.2293C2.63528 17.4337 3.31061 16.7844 4.14021 16.7844ZM4.14021 16.0527C2.893 16.0527 1.88281 17.0276 1.88281 18.2293C1.88281 19.431 2.893 20.4059 4.14021 20.4059C5.38741 20.4059 6.3976 19.431 6.3976 18.2293C6.3976 17.0276 5.38741 16.0527 4.14021 16.0527Z"
                  fill="#4563FF"></path>
                <path
                  d="M7.71484 21.9488H15.2395V0H7.71484V21.9488ZM11.4772 20.4855C10.23 20.4855 9.21977 19.5033 9.21977 18.2907C9.21977 17.078 10.23 16.0958 11.4772 16.0958C12.7244 16.0958 13.7346 17.078 13.7346 18.2907C13.7346 19.5033 12.7244 20.4855 11.4772 20.4855Z"
                  fill="#4563FF"></path>
                <path
                  d="M20.8818 0H15.2383V21.9488H20.8818C21.9202 21.9488 22.7629 21.1294 22.7629 20.1197V1.82907C22.7629 0.819421 21.9202 0 20.8818 0ZM19.0006 20.4855C17.7534 20.4855 16.7432 19.5033 16.7432 18.2907C16.7432 17.078 17.7534 16.0958 19.0006 16.0958C20.2478 16.0958 21.258 17.078 21.258 18.2907C21.258 19.5033 20.2478 20.4855 19.0006 20.4855Z"
                  fill="#FF0029"></path>
                <path
                  d="M8.08899 0.731626V21.2172H1.88116C1.2585 21.2172 0.752464 20.7251 0.752464 20.1197V1.82907C0.752464 1.22364 1.2585 0.731626 1.88116 0.731626H8.08899ZM8.84145 0H1.88116C0.84276 0 0 0.819421 0 1.82907V20.1197C0 21.1294 0.84276 21.9488 1.88116 21.9488H8.84145V0Z"
                  fill="#4563FF"></path>
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="121" height="22" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </span>
        </div>
      </div>
      <div class="infofixed__text">
        Обновленный логотип символизирует новое качество НБКИ, его внутреннюю трансформацию - бюро становится для граждан
        экспертом и помощником в вопросах планирования личных финансов, ключом к доступным кредитам.
      </div>
    </div>
  </div>
  <?
  setcookie("NEW_DESIGN", 'Y', time() + 86400)
    ?>
<? endif; ?>





<!-- Модальные окно - опрос -->
<div id="myModal_test" class="modal fade testmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" id="modal_zvonok_close" data-dismiss="modal" aria-hidden="true">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 15L15 1" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round" />
            <path d="M1 1L15 15" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round" />
          </svg>
        </button>
      </div>
      <div class="modal-body">
        <div class="testmodal__content">
          <? $APPLICATION->IncludeComponent(
            "bitrix:voting.form",
            "popup",
            array(
              "VOTE_ID" => 1,
              "VOTE_RESULT_TEMPLATE" => "/vote/vote_result.php?VOTE_ID=#VOTE_ID#"
            )
          ); ?>

        </div>
      </div>
    </div>
  </div>
</div>


<!-- Обратная связь -->
<div id="myModal_callback" class="modal modalform fade">
  <div class="modal-dialog modal-dialog_login">
    <div class="modal-content">
      <span class="modalclose" data-dismiss="modal" aria-hidden="true">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 15L15 1" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round" />
          <path d="M1 1L15 15" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round" />
        </svg>

      </span>
      <div class="modal-body">
        <div class="modal_zvonok_content">
          <div class="modalform__title">Обратная связь</div>
          <div class="modalform__caption">Обязательные поля*</div>
          <div class="modal_zvonok_form_content">
            <form action="https://lk.nbki.ru/Cabinet/j_spring_security_check" method="post" autocomplete="off"
              class="lkform lkform_modal">
              <div class="lkform__items">
                <div class="lkform__item lkform__item_full">
                  <div class="lkform__input">
                    <!-- кастомный "селект" значение в input -->
                    <div class="dropdown">
                      <input type="hidden" value="Выбрать вопрос*" class="dropdown_value">
                      <div class="dropdown__label">Выбрать вопрос*</div>
                      <ul class="dropdown__menu">
                        <li>Вопрос по содержанию кредитной истории </li>
                        <li>Как оспорить кредитную историю? </li>
                        <li>Вопрос по Персональному кредитному рейтингу </li>
                        <li>Вопрос по работоспособности личного кабинета </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="lkform__item lkform__item_full">
                  <div class="lkform__input">
                    <input type="text" name="fio" placeholder="Ф. И. О.*" autocomplete="off">
                  </div>
                </div>

                <div class="lkform__item lkform__item_half">
                  <div class="lkform__input">
                    <input type="text" name="mail" placeholder="Электронная почта*" autocomplete="off">
                  </div>

                  <div class="lkform__input">
                    <input type="text" name="phone" placeholder="Контактный телефон*" autocomplete="off">
                  </div>

                </div>

                <div class="lkform__item lkform__item_full">
                  <div class="lkform__input">
                    <textarea name="modalform_ta" id="modalform_ta" cols="4" rows="4"
                      placeholder="Текст сообщения"></textarea>
                  </div>
                </div>


                <div class="lkform__item lkform__item_half lkform__item_flex">
                  <div class="lkform__input lkform__input_submit">
                    <input type="submit" class="btn btn_red btn_round" value="Отправить">
                  </div>
                  <div class="lkform__input lkform__input_file">
                    <div class="fileupload">
                      <label><span class="fileupload__files">
                          <span class="fileupload__file">
                            <input type="file" name="file_upload">
                            <span class="filebutton">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 20H4" stroke="#4563FF" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                                <path d="M12 4L12 16" stroke="#4563FF" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" />
                                <path d="M8 12.5L12 16.5L16 12.5" stroke="#4563FF" stroke-width="2"
                                  stroke-linecap="round" />
                              </svg>
                              <span class="filebutton__text">
                                <span class="filebutton__button">Прикрепить файлы</span>
                                <span class="filebutton__size">До 14 Мб</span>
                                <span class="filebutton__format">doc, docx, pdf, xls, jpeg, png, svg, zip, rar, 7z, p7m,
                                  enc, p7s и sig </span>
                              </span>

                            </span>
                          </span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Обратная связь ty -->
<div id="myModal_ty" class="modal modalty fade">
  <div class="modal-dialog modal-dialog_login">
    <div class="modal-content">
      <span class="modalclose" data-dismiss="modal" aria-hidden="true">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 15L15 1" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round" />
          <path d="M1 1L15 15" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round" />
        </svg>

      </span>
      <div class="modal-body">
        <div class="modal_zvonok_content">
          <div class="modalty__title">Ваше обращение принято!</div>
          <div class="modalty__text">Ответ будет направлен на указанную электронную почту в течение 1 (одного) рабочего
            дня.</div>

        </div>
      </div>
    </div>
  </div>
</div>

<? global $USER; ?>
<? if (1 == 1): ?>
  <!-- Контакты ty -->
  <div id="myModal_tyform" class="modal tyform fade">
    <div class="modal-dialog modal-dialog_login">
      <div class="modal-content">
        <!--  <span class="modalclose" data-dismiss="modal" aria-hidden="true">
      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1 15L15 1" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round"/>
      <path d="M1 1L15 15" stroke="#AEB5D1" stroke-width="2" stroke-linecap="round"/>
      </svg>

      </span> -->
        <div class="modal-body">
          <div class="modal_zvonok_content">
            <div class="modalty__title">Спасибо!</div>
            <div class="modalty__text">Ваше сообщение <br> успешно отправлено</div>
            <div class="modalty__button">
              <a href="#" data-dismiss="modal" class="btn_main">Закрыть</a>
            </div><!-- /.modalty__button -->
          </div>
        </div>
      </div>
    </div>
  </div>
<? endif; ?>



<script>
  document.addEventListener('DOMContentLoaded', function () {
    $('[data-content="forgot"]').html(`Если вы забыли логин или пароль,<br>
     направьте запрос на электронный адрес <a href="mailto:SD@nbki.ru">SD@nbki.ru</a>`)
    $('[data-content="cookie"]').html(`На сайте АО&nbsp;«НБКИ» используются файлы cookie (данные о&nbsp;вашем IP-адресе, стране, дате и&nbsp;времени посещения, типе браузера и&nbsp;операционной системы, модели и&nbsp;типе мобильного устройства) для повышения удобства пользователей, совершенствования качества предоставляемых сервисов. Оставаясь на&nbsp;<a href="/" target="_blank">nbki.ru</a>, вы соглашаетесь с&nbsp;<a href="/privacy_rules/"  target="_blank">пользовательским&nbsp;соглашением</a> и&nbsp;обработкой указанных выше данных.`)
  })



</script>

<script>
  document.querySelectorAll('.dropdown').forEach(function (item) {
    item.addEventListener('click', event => {

      if (event.target.classList.contains('dropdown__label')) {
        if (item.querySelector('.dropdown__menu').classList.contains('active')) {
          item.querySelector('.dropdown__menu').classList.remove('active')
          item.querySelector('.dropdown__label').classList.remove('active')
        } else {
          item.querySelector('.dropdown__menu').classList.add('active')
          event.target.classList.add('active')
        }

      } else if (event.target.tagName.toLowerCase() == 'li') {
        if (item.querySelector('li.selected')) {
          item.querySelector('li.selected').classList.remove('selected')
        }

        event.target.classList.add('selected')
        item.querySelector('.dropdown__label').classList.remove('active')
        item.querySelector('.dropdown__label').textContent = event.target.textContent
        item.querySelector('.dropdown_value').value = event.target.textContent
        item.querySelector('.dropdown__menu').classList.remove('active')
      }
    })
  })



  window.onclick = function (event) {
    var dropdown = document.querySelectorAll('.dropdown__label.active')
    dropdown.forEach(function (drop) {
      if (event.target != drop) {
        document.querySelectorAll('.dropdown__menu.active').forEach(function (item) {
          item.classList.remove('active')
        })
        document.querySelectorAll('.dropdown__label.active').forEach(function (item) {
          item.classList.remove('active')
        })
      }
    })
  }
</script>
<? /*
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '628969488324949');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" alt=" "
src="https://www.facebook.com/tr?id=628969488324949&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<noscript><img height="1" width="1" style="display:none" alt=" "
src="https://www.facebook.com/tr?id=251650636951155&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

*/ ?>

<!-- VK:37294 -->
<? global $USER; ?>
<? if ($USER->IsAdmin() && !empty($_REQUEST['word'])): ?>
  <script>
    $("main").html(function (_, html) {
      return html.replace(/<?= $_REQUEST['word'] ?>/g, '<span class="red"><?= $_REQUEST['word'] ?></span>');
      });
    $(".blogdetailpage").html(function (_, html) {
      return html.replace(/<?= $_REQUEST['word'] ?>/g, '<span class="red"><?= $_REQUEST['word'] ?></span>');
      });
    $([document.documentElement, document.body]).animate({
      scrollTop: $(".red:first").offset().top - 150
    }, 2000);
    //$(window).scrollTop($(".red:contains('<?//=$_REQUEST['word'] ?>//'):first").offset().top);
  </script>
<? endif ?>

<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
  var _tmr = window._tmr || (window._tmr = []);
  _tmr.push({ id: "3341940", type: "pageView", start: (new Date()).getTime() });
  (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () { var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s); };
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
  })(document, window, "tmr-code");
</script>
<noscript>
  <div><img src="https://top-fwz1.mail.ru/counter?id=3341940;js=na" style="position:absolute;left:-9999px;"
      alt="Top.Mail.Ru" /></div>
</noscript>
<!-- /Top.Mail.Ru counter -->


<script
  type="text/javascript">!function () { var t = document.createElement("script"); t.type = "text/javascript", t.async = !0, t.src = 'https://vk.com/js/api/openapi.js?169', t.onload = function () { VK.Retargeting.Init("VK-RTRG-1317941-cla3D"), VK.Retargeting.Hit() }, document.head.appendChild(t) }();</script>
<noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1317941-cla3D" style="position:fixed; left:-999px;"
    alt="" /></noscript>

<script
  src="//amc.yandex.ru/show?cmn_id=53688&plt_id=181367&crv_id=438442&evt_t=render&ad_type=banner&rnd=%system.random%"></script>

</body>

</html>