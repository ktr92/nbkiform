<?php
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, height=device-height, target-densitydpi=medium-dpi">
    <link rel="preconnect" href="//fonts.googleapis.com">
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin="">
    <link href="//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="index_v2.css">
</head>

<body>
    <div class="container">
        <form name="calc" method="post" action="http://62.109.31.113/calc/ajax.php" class="calcblock">
            <input type="hidden" name="action" value="calc" />

            <div class="calcblock__calc">
                <div class="calcblock__title calcblock__title_big">
                    Рассчитайте стоимость
                </div>
                <div class="calcform">
                    <div class="calcform__content">
                        <div class="calcform__inputs">
                            <div class="calcform__items calcform__items_location">
                                <div class="switcher">
                                    <a href="">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path
                                                    d="M11.8699 0.0298504C11.6212 0.0536005 11.4087 0.2211 11.3274 0.457351C11.2449 0.69485 11.3087 0.95735 11.4899 1.12985L13.5599 3.19985H0.639929C0.619929 3.1986 0.599929 3.1986 0.579929 3.19985C0.226179 3.2161 -0.0463211 3.5161 -0.0300712 3.86985C-0.0138212 4.2236 0.286179 4.4961 0.639929 4.47985H13.5599L11.4899 6.54985C11.3224 6.70985 11.2537 6.94735 11.3112 7.17235C11.3687 7.3961 11.5424 7.57235 11.7662 7.63235C11.9899 7.69235 12.2287 7.6261 12.3899 7.45985L16.0099 3.83985L12.3899 0.21985C12.2549 0.0811003 12.0637 0.0111004 11.8699 0.0298504ZM3.99993 8.34985C3.85493 8.3686 3.72118 8.43485 3.61993 8.53985L-7.11493e-05 12.1598L3.61993 15.7798C3.78118 15.9461 4.01993 16.0123 4.24368 15.9523C4.46743 15.8923 4.64118 15.7161 4.69868 15.4923C4.75618 15.2673 4.68743 15.0298 4.51993 14.8698L2.44993 12.7998H15.3599C15.5912 12.8036 15.8049 12.6823 15.9212 12.4823C16.0387 12.2836 16.0387 12.0361 15.9212 11.8373C15.8049 11.6373 15.5912 11.5161 15.3599 11.5198H2.44993L4.51993 9.44985C4.72118 9.25985 4.77743 8.9611 4.65868 8.7111C4.53993 8.4611 4.27493 8.31485 3.99993 8.34985Z"
                                                    fill="#323232" fill-opacity="0.5"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="16" height="16" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div class="calcform__item">
                                    <div class="inputLocation" data-wrapper="from">
                                        <input type="text" autocomplete="off" id="cityInput1" class="cityInput"
                                            data-entity="city-autocomplete" placeholder="" name="from_text" value=""
                                            data-input="custom" required>
                                        <span class="placeholder">Откуда</span>
                                        <!--<input type="hidden" name="from" data-input="from" value="" data-entity="city-kladr-id">-->
                                        <input type="hidden" name="shipment_city_id" data-input="shipment_city_id"
                                            value="" data-entity="city-kladr-id">
                                        <ul id="cityList1" class="cityList" style="display: none;">
                                            <div class="cityListContainer"></div>
                                        </ul>
                                        <svg width="12" height="18" viewBox="0 0 12 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z"
                                                fill="#C4C4C4"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="calcform__item">
                                    <div class="inputLocation" data-wrapper="to">
                                        <input type="text" autocomplete="off" name="to_text" id="cityInput2"
                                            class="cityInput" placeholder="" data-entity="city-autocomplete" value=""
                                            data-input="custom" required>
                                        <span class="placeholder">Куда</span>
                                        <!--<input type="hidden" name="to" data-input="to" value="" data-entity="city-kladr-id">-->
                                        <input type="hidden" name="received_city_id" data-input="received_city_id"
                                            value="" data-entity="city-kladr-id">
                                        <ul id="cityList2" class="cityList" style="display: none;">
                                            <div class="cityListContainer"></div>
                                        </ul>
                                        <svg width="12" height="18" viewBox="0 0 12 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.99999 0.359863C2.82468 0.359863 0.23999 2.94455 0.23999 6.11986C0.23999 11.2006 5.5064 17.2602 5.72999 17.5161C5.7989 17.5949 5.89593 17.6399 5.99999 17.6399C6.11108 17.6328 6.20109 17.5949 6.26999 17.5161C6.49359 17.256 11.76 11.0924 11.76 6.11986C11.76 2.94455 9.1753 0.359863 5.99999 0.359863ZM5.99999 4.31986C7.19249 4.31986 8.15999 5.28736 8.15999 6.47986C8.15999 7.67236 7.19249 8.63986 5.99999 8.63986C4.80749 8.63986 3.83999 7.67236 3.83999 6.47986C3.83999 5.28736 4.80749 4.31986 5.99999 4.31986Z"
                                                fill="#C4C4C4"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="switchesblock">
                                <ol class="switches">
                                    <li>
                                        <div>
                                            <span class="switches__name">
                                                <span class="checkboxtext">Забрать с адреса</span>
                                            </span>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="shipment_intake" value="Y" name="shipment_intake"
                                                data-stepdata="shipment_intake" data-steptype="source">
                                            <label for="shipment_intake">
                                                <span></span>
                                            </label>
                                        </div>


                                    </li>
                                    <li>
                                        <div>
                                            <span class="switches__name">
                                                <span class="checkboxtext">Доставить до адреса</span>
                                            </span>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="received_intake" value="Y" name="received_intake"
                                                data-stepdata="received_intake" data-steptype="source">
                                            <label for="received_intake">
                                                <span></span>
                                            </label>
                                        </div>

                                    </li>
                                    <li>
                                        <div>
                                            <span class="switches__name">
                                                <span class="checkboxtext">Деревянная обрешётка</span>
                                            </span>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="lathing" value="Y" name="lathing"
                                                data-stepdata="received_intake" data-steptype="source">
                                            <label for="lathing">
                                                <span></span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <span class="switches__name">
                                                <span class="checkboxtext">Режим “Тепло”</span>
                                            </span>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="extra_warm" value="Y" name="extra_warm"
                                                data-stepdata="received_intake" data-steptype="source">
                                            <label for="extra_warm">
                                                <span></span>
                                            </label>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                            <!-- /.switches -->
                            <div
                                class="calcform__items calcform__items_cols calcform__items_two_xs calcform__items_default">
                                <div class="calcform__item">
                                    <label class="form-control__wrapper" for="id_weight">
                                        <input class="form-control " min="-99999" max="99999" maxlength="5"
                                            data-max="5000" data-min="1" data-weight-format="" name="weight"
                                            placeholder="" type="text" inputmode="decimal" value="" data-input="custom"
                                            id="id_weight" required>
                                        <span class="placeholder">Вес груза, кг</span>
                                    </label>
                                </div>
                                <div class="calcform__item">
                                    <label class="form-control__wrapper" for="id_volume">
                                        <input class="form-control " min="-99999" max="99999" maxlength="5"
                                            data-max="20" data-min="0.01" data-volume-format="" name="volume"
                                            placeholder="" type="text" inputmode="decimal" value="" data-input="custom"
                                            id="id_volume" required>
                                        <span class="placeholder">Объем груза, м<sup>3</sup></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="calcform__footer">
                            <div class="calcform__item">
                                <div class="calcform__button">
                                    <button class="btn_main" type="submit" data-calc="calc">Рассчитать</button>
                                    <div class="errortext">Ошибка номер <span class="errorcode"></span></div>
                                </div>
                            </div>
                            <div class="calcform__copyright">
                                <svg width="236" height="23" viewBox="0 0 236 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.4">
                                        <path d="M0 7.37997H1.15099V14.2H0V7.37997Z" fill="#373737"></path>
                                        <path
                                            d="M3.36968 8.41272V7.37997H6.39706V8.41272H3.36968ZM3.36968 11.1212V10.1177H6.30034V11.1212H3.36968ZM2.66362 7.37997H3.78559V14.2H2.66362V7.37997Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M9.10027 10.9459H10.3383L12.6306 14.2H11.2572L9.10027 10.9459ZM7.70749 7.37997H8.8488V14.2H7.70749V7.37997ZM8.38454 8.37375V7.37997H9.79667C10.2867 7.37997 10.7123 7.46766 11.0734 7.64303C11.4409 7.8184 11.7246 8.06522 11.9245 8.38349C12.1244 8.69526 12.2244 9.06549 12.2244 9.49418C12.2244 9.92287 12.1244 10.2963 11.9245 10.6146C11.7246 10.9329 11.4409 11.1797 11.0734 11.3551C10.7123 11.5304 10.2867 11.6181 9.79667 11.6181H8.38454V10.6731H9.74831C10.0062 10.6731 10.2319 10.6276 10.4254 10.5367C10.6252 10.4457 10.78 10.3158 10.8896 10.147C10.9992 9.97158 11.054 9.76373 11.054 9.52341C11.054 9.27659 10.9992 9.06874 10.8896 8.89986C10.78 8.73099 10.6252 8.60108 10.4254 8.51015C10.2319 8.41921 10.0062 8.37375 9.74831 8.37375H8.38454Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M14.2722 12.4463L14.485 11.472H17.6285L17.8509 12.4463H14.2722ZM16.0422 9.30907L14.9783 11.813L14.9589 12.0663L14.0207 14.2H12.7344L16.0422 7L19.3501 14.2H18.0637L17.1449 12.1248L17.1158 11.8422L16.0422 9.30907Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M21.3951 10.0495L20.9308 14.2H19.7508L20.6793 7.03897L23.4552 11.6668L26.2408 7.03897L27.1693 14.2H25.9893L25.5154 10.0495L23.4552 13.5667L21.3951 10.0495Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M28.9857 14.2V13.1867H32.4V14.2H28.9857ZM28.9857 8.39323V7.37997H32.4V8.39323H28.9857ZM28.9857 11.0433V10.0495H32.2066V11.0433H28.9857ZM28.2797 7.37997H29.4016V14.2H28.2797V7.37997Z"
                                            fill="#373737"></path>
                                    </g>
                                    <g opacity="0.4">
                                        <path
                                            d="M38 7.37241H39.1298V14.0568H38V7.37241ZM41.5574 7.37241H42.8833L40.1288 10.5045L43.0233 14.0568H41.6694L38.7936 10.5332L41.5574 7.37241Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M44.5652 12.3379L44.7706 11.383H47.8052L48.0199 12.3379H44.5652ZM46.2739 9.26313L45.2468 11.7172L45.2282 11.9655L44.3225 14.0568H43.0806L46.2739 7L49.4671 14.0568H48.2253L47.3383 12.0228L47.3103 11.7459L46.2739 9.26313Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M55.3161 7.37241V14.0568H54.1957V8.41326H51.5907V11.5549C51.5907 12.0451 51.5191 12.4812 51.3759 12.8631C51.2327 13.2387 51.0118 13.5316 50.713 13.7416C50.4204 13.9517 50.0469 14.0568 49.5925 14.0568V13.0923C49.7419 13.0923 49.8727 13.0541 49.9847 12.9777C50.0967 12.895 50.1901 12.7836 50.2648 12.6435C50.3457 12.4971 50.4049 12.3252 50.4422 12.1279C50.4858 11.9305 50.5076 11.7141 50.5076 11.4785V7.37241H55.3161Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M56.7925 7.37241H57.8943V14.0568H56.7925V7.37241ZM57.4461 10.896V9.90292H58.7626C59.2357 9.90292 59.6465 9.98886 59.9951 10.1607C60.3499 10.3263 60.6238 10.565 60.8168 10.8769C61.0097 11.1825 61.1062 11.5517 61.1062 11.9846C61.1062 12.4048 61.0097 12.7708 60.8168 13.0828C60.6238 13.3947 60.3499 13.6366 59.9951 13.8085C59.6465 13.974 59.2357 14.0568 58.7626 14.0568H57.4461V13.0637H58.7626C59.0116 13.0637 59.2295 13.0255 59.4162 12.9491C59.6092 12.8663 59.7586 12.7454 59.8644 12.5862C59.9702 12.4207 60.0231 12.2202 60.0231 11.9846C60.0231 11.7427 59.9702 11.5422 59.8644 11.383C59.7586 11.2175 59.6092 11.0966 59.4162 11.0202C59.2295 10.9374 59.0116 10.896 58.7626 10.896H57.4461Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M62.1905 7.37241H63.3203V14.0568H62.1905V7.37241ZM65.7479 7.37241H67.0737L64.3193 10.5045L67.2138 14.0568H65.8599L62.9841 10.5332L65.7479 7.37241Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M72.7519 7.37241L69.6801 14.0568H68.5036L69.3626 12.061L67.2058 7.37241H68.5036L70.2496 11.6599L69.6801 11.6313L71.5662 7.37241H72.7519Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M78.531 7.37241V14.0568H77.4105V8.41326H74.8055V11.5549C74.8055 12.0451 74.7339 12.4812 74.5908 12.8631C74.4476 13.2387 74.2266 13.5316 73.9278 13.7416C73.6353 13.9517 73.2618 14.0568 72.8074 14.0568V13.0923C72.9568 13.0923 73.0875 13.0541 73.1995 12.9777C73.3116 12.895 73.405 12.7836 73.4797 12.6435C73.5606 12.4971 73.6197 12.3252 73.6571 12.1279C73.7006 11.9305 73.7224 11.7141 73.7224 11.4785V7.37241H78.531Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M82.7525 10.8674L80.6796 14.0568H79.3538L81.5667 10.8674H82.7525ZM84.1063 7.37241V14.0568H83.0046V7.37241H84.1063ZM83.4527 8.34642H82.1362C81.8872 8.34642 81.6663 8.39098 81.4733 8.48011C81.2866 8.56923 81.1403 8.69655 81.0345 8.86207C80.9286 9.02759 80.8757 9.2313 80.8757 9.47321C80.8757 9.70875 80.9286 9.91247 81.0345 10.0844C81.1403 10.2499 81.2866 10.3772 81.4733 10.4663C81.6663 10.5554 81.8872 10.6 82.1362 10.6H83.4527V11.5263H82.0895C81.6165 11.5263 81.2025 11.4403 80.8477 11.2684C80.4991 11.0966 80.2284 10.8546 80.0354 10.5427C79.8424 10.2308 79.7459 9.86472 79.7459 9.44456C79.7459 9.0244 79.8424 8.66154 80.0354 8.35597C80.2284 8.04403 80.4991 7.80212 80.8477 7.63024C81.2025 7.45836 81.6165 7.37241 82.0895 7.37241H83.4527V8.34642Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M84.9068 8.41326V7.37241H89.4632V8.41326H87.7359V14.0568H86.6248V8.41326H84.9068Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M90.5939 10.7146C90.5939 11.1729 90.6873 11.5836 90.874 11.9464C91.067 12.3029 91.3316 12.583 91.6677 12.7867C92.0038 12.9905 92.3866 13.0923 92.8161 13.0923C93.2519 13.0923 93.6347 12.9905 93.9646 12.7867C94.3007 12.583 94.5622 12.3029 94.7489 11.9464C94.9419 11.5836 95.0383 11.1729 95.0383 10.7146C95.0383 10.2562 94.945 9.84881 94.7582 9.49231C94.5715 9.12944 94.3101 8.84615 93.9739 8.64244C93.644 8.43873 93.2581 8.33687 92.8161 8.33687C92.3866 8.33687 92.0038 8.43873 91.6677 8.64244C91.3316 8.84615 91.067 9.12944 90.874 9.49231C90.6873 9.84881 90.5939 10.2562 90.5939 10.7146ZM89.4268 10.7146C89.4268 10.2117 89.5108 9.75013 89.6789 9.32997C89.847 8.90981 90.0835 8.54695 90.3885 8.24138C90.6998 7.92944 91.0608 7.68753 91.4716 7.51565C91.8887 7.34377 92.3368 7.25782 92.8161 7.25782C93.3079 7.25782 93.7592 7.34377 94.17 7.51565C94.5808 7.68753 94.9388 7.92944 95.2438 8.24138C95.555 8.54695 95.7946 8.90981 95.9627 9.32997C96.1308 9.75013 96.2148 10.2117 96.2148 10.7146C96.2148 11.2111 96.1308 11.6727 95.9627 12.0992C95.7946 12.5257 95.5581 12.895 95.2531 13.2069C94.9481 13.5188 94.5871 13.7639 94.17 13.9422C93.7592 14.1141 93.3079 14.2 92.8161 14.2C92.3306 14.2 91.8793 14.1141 91.4623 13.9422C91.0452 13.7639 90.6842 13.5188 90.3792 13.2069C90.0804 12.895 89.847 12.5257 89.6789 12.0992C89.5108 11.6727 89.4268 11.2111 89.4268 10.7146Z"
                                            fill="#373737"></path>
                                        <path
                                            d="M97.2863 7.37241H98.3881V14.0568H97.2863V7.37241ZM97.9399 8.36552V7.37241H99.2564C99.7295 7.37241 100.14 7.45836 100.489 7.63024C100.844 7.79576 101.118 8.03448 101.311 8.34642C101.504 8.65199 101.6 9.01804 101.6 9.44456C101.6 9.87109 101.504 10.2403 101.311 10.5523C101.118 10.8642 100.844 11.1061 100.489 11.278C100.14 11.4435 99.7295 11.5263 99.2564 11.5263H97.9399V10.5332H99.2564C99.6361 10.5332 99.9411 10.4408 100.171 10.2562C100.402 10.0716 100.517 9.80106 100.517 9.44456C100.517 9.08806 100.402 8.82069 100.171 8.64244C99.9411 8.45783 99.6361 8.36552 99.2564 8.36552H97.9399Z"
                                            fill="#373737"></path>
                                    </g>
                                    <path
                                        d="M165.757 9.65297L166.623 11.6139H164.892L165.757 9.65297ZM167.661 14.3822H169.276L165.757 7L162.239 14.3822H163.854L164.546 12.825H166.911L167.661 14.3822ZM156.414 7.40371V14.3822H157.914V11.2102L160.509 14.3822H162.239L159.24 10.6911L162.124 7.40371H160.452L157.972 10.2297V7.40371H156.414ZM155.722 7.40371H154.223L152.666 10.9218L151.281 7.40371H149.667L151.974 12.2483L151.051 14.3245H152.55L155.722 7.40371ZM146.783 11.2678C147.475 11.2678 147.936 11.6139 147.936 12.2483C147.936 12.8827 147.475 13.171 146.783 13.171H145.745V11.2678H146.783ZM144.303 7.40371V14.3822H147.071C148.398 14.3822 149.436 13.5171 149.436 12.2483C149.436 10.9795 148.398 10.1144 147.071 10.1144H145.745V8.67253H148.917V7.46139H144.303V7.40371ZM140.439 14.4975C142.227 14.4975 143.15 13.6901 143.15 12.479C143.15 11.5562 142.573 10.9795 141.65 10.6911C142.457 10.4027 142.976 9.88367 142.976 9.19159C142.976 8.15347 142.054 7.28837 140.439 7.28837C138.824 7.28837 137.901 8.15347 137.901 9.36461H139.228C139.228 8.84555 139.689 8.44183 140.497 8.44183C141.246 8.44183 141.592 8.78787 141.592 9.30693C141.592 9.82599 141.073 10.2874 140.035 10.2874V11.2678C141.189 11.2678 141.765 11.6715 141.765 12.3636C141.765 12.998 141.304 13.3441 140.439 13.3441C139.574 13.3441 139.055 12.9404 138.997 12.3059H137.613C137.555 13.4594 138.478 14.4975 140.439 14.4975ZM133.518 9.65297L134.383 11.6139H132.653L133.518 9.65297ZM135.421 14.3822H137.036L133.518 7L130 14.3822H131.615L132.307 12.825H134.672L135.421 14.3822Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M229.02 7.34604H230.405V11.5562L235.364 7V14.3245H233.98V10.1144L229.02 14.6705V7.34604Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M222.446 14.3245V7.34604H224.003V10.172L226.483 7.34604H228.155L225.272 10.6334L228.271 14.3245H226.54L223.945 11.1525V14.3245H222.446Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M214.66 7.34604H216.044V11.5562L221.004 7V14.3245H219.62V10.1144L214.66 14.6705V7.34604Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M210.507 8.61485H208.662V7.34604H213.852V8.61485H211.949V14.2668H210.507V8.61485Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M206.124 8.55718C204.913 8.55718 203.875 9.42228 203.875 10.8064C203.875 12.1906 204.913 13.0557 206.124 13.171C207.104 13.171 207.797 12.7097 208.258 12.1906V13.8054C207.681 14.2668 207.104 14.4975 206.066 14.4975C203.875 14.4975 202.318 12.998 202.318 10.8641C202.318 8.7302 203.932 7.23069 206.066 7.23069C207.104 7.23069 207.681 7.46139 208.258 7.92277V9.53763C207.797 8.96089 207.104 8.55718 206.124 8.55718Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M194.878 7.34604H196.262V11.5562L201.222 7V14.3245H199.838V10.1144L194.878 14.6705V7.34604Z"
                                        fill="#373737"></path>
                                    <path d="M190.149 14.3245V7.40371H194.07V8.67253H191.59V14.3245H190.149Z"
                                        fill="#373737"></path>
                                    <path
                                        d="M175.038 7.34604H180.402V14.3245H178.96V8.67253H176.422V11.5562C176.422 13.3441 175.673 14.3245 174 14.3245V13.1134C174.634 13.1134 175.038 12.479 175.038 11.5562V7.34604Z"
                                        fill="#373737"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M181.613 10.8064C181.613 12.9404 183.17 14.4399 185.304 14.4399C187.438 14.4399 188.995 12.8827 188.995 10.8064C188.995 8.7302 187.438 7.17302 185.304 7.17302C183.228 7.17302 181.613 8.7302 181.613 10.8064ZM185.304 8.49951C183.977 8.49951 183.112 9.47995 183.112 10.8064C183.112 12.1329 183.977 13.1134 185.304 13.1134C186.63 13.1134 187.496 12.1329 187.496 10.8064C187.496 9.47995 186.63 8.49951 185.304 8.49951Z"
                                        fill="#373737"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M112.938 9.88785L116.148 2.62243L116.632 4.29907L117.819 3.82617L116.588 0L112.894 1.71963L113.377 2.88037L114.961 2.10654L111.486 9.88785H112.938ZM109.639 17.3252L111.618 12.8972H110.167L108.407 16.8523L109.639 17.3252ZM119.315 12.8542L121.778 20.7215L120.282 19.7757L119.667 20.8935L123.141 23L124.812 19.3458L123.669 18.7439L122.965 20.3346L120.634 12.8112H119.315V12.8542ZM107 12.0374H123.361L121.998 13.1551L122.921 14.0579L126 11.4355L122.921 8.81308L121.998 9.71589L123.361 10.8336H107V12.0374ZM116.984 5.50281L118.347 9.93084H119.711L118.215 5.11589L116.984 5.50281Z"
                                        fill="#F23F34"></path>
                                </svg>
                            </div>
                            <!-- /.calcform__copyright -->
                        </div>
                        <!-- /.calcform__item -->
                    </div>
                </div>
            </div>
            <div class="calcblock__results" data-calc="result">
                <div class="calcresults">
                    <div class="calcresults__title">
                        Ваш расчет
                    </div>
                    <!-- /.calcresults__title -->
                    <div class="calcresults__items">

                        <div id="auto" class="calcresults__item">
                            <div class="resultblock">
                                <div class="resultblock__wrapper radiotype">
                                    <label for="auto-delivery" class="resultblock__header  " data-toggler="accordion1">
                                        <div class="resultblock__headermain">
                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/auto.svg" alt=""></div>

                                            </div>

                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Стандарт</div>

                                                <div class="resultblock__info"><span class="delivery_time"></span> дней
                                                </div>

                                            </div>
                                        </div>

                                        <div class="resultblock__headerinput">
                                            <input type="radio" checked="checked" id="auto-delivery"
                                                name="delivery-type" value="auto">
                                            <span class="radiotype__text"></span>
                                        </div>

                                    </label>
                                    <div class="resultblock__main" data-toggle="accordion1">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Cтоимость:</div>

                                                <div class="resultblock__dd"><span class="price"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Страховка:</div>

                                                <div class="resultblock__dd"><span class="insurance"></span> Р </div>

                                            </div>

                                        </div>

                                        <div class="resultblock__subtitle">Доп услуги</div>

                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Обрешетка:</div>

                                                <div class="resultblock__dd"><span class="lathing"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Маркировка:</div>

                                                <div class="resultblock__dd"><span class="marking"></span> Р </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="resultblock__delimeter"></div>
                                    <div class="resultblock__footer">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">
                                                    <div class="resultblock__footertitle">Всего:</div>
                                                </div>

                                                <div class="resultblock__dd">
                                                    <div class="resultblock__total"><span class="total"></span> Р</div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="avia" class="calcresults__item">
                            <div class="resultblock">
                                <div class="resultblock__wrapper radiotype">
                                    <label for="avia-delivery" class="resultblock__header  " data-toggler="accordion2">
                                        <div class="resultblock__headermain">
                                            <div class="resultblock__icon">

                                                <div class="resultblock__img"><img src="img/airport.svg" alt=""></div>

                                            </div>

                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Авиа</div>

                                                <div class="resultblock__info"><span class="delivery_time"></span> дней
                                                </div>

                                            </div>

                                        </div>


                                        <div class="resultblock__headerinput">
                                            <input type="radio" id="avia-delivery" name="delivery-type" value="avia">
                                            <span class="radiotype__text"></span>
                                        </div>
                                    </label>

                                    <!-- /.resultblock__header -->
                                    <div class="resultblock__main" data-toggle="accordion2">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Cтоимость:</div>

                                                <div class="resultblock__dd"><span class="price"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Страховка:</div>

                                                <div class="resultblock__dd"><span class="insurance"></span> Р </div>

                                            </div>

                                        </div>

                                        <div class="resultblock__subtitle">Доп услуги</div>

                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Обрешетка:</div>

                                                <div class="resultblock__dd"><span class="lathing"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Маркировка:</div>

                                                <div class="resultblock__dd"><span class="marking"></span> Р </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="resultblock__delimeter"></div>
                                    <div class="resultblock__footer">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">
                                                    <div class="resultblock__footertitle">Всего:</div>
                                                </div>

                                                <div class="resultblock__dd">
                                                    <div class="resultblock__total"><span class="total"></span> Р</div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="container" class="calcresults__item">
                            <div class="resultblock">
                                <div class="resultblock__wrapper radiotype">
                                    <label for="container-delivery" class="resultblock__header"
                                        data-toggler="accordion3">
                                        <div class="resultblock__headermain">

                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/conteiner.svg" alt=""></div>

                                            </div>

                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Контейнеры</div>

                                                <div class="resultblock__info"><span class="delivery_time"></span> дней
                                                </div>

                                            </div>


                                        </div>
                                        <div class="resultblock__headerinput">
                                            <input type="radio" id="container-delivery" name="delivery-type"
                                                value="container">
                                            <span class="radiotype__text"></span>
                                        </div>
                                    </label>
                                    <div class="resultblock__main" data-toggle="accordion3">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Cтоимость:</div>

                                                <div class="resultblock__dd"><span class="price"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Страховка:</div>

                                                <div class="resultblock__dd"><span class="insurance"></span> Р </div>

                                            </div>

                                        </div>

                                        <div class="resultblock__subtitle">Доп услуги</div>

                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Обрешетка:</div>

                                                <div class="resultblock__dd"><span class="lathing"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Маркировка:</div>

                                                <div class="resultblock__dd"><span class="marking"></span> Р </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="resultblock__delimeter"></div>
                                    <div class="resultblock__footer">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">
                                                    <div class="resultblock__footertitle">Всего:</div>
                                                </div>

                                                <div class="resultblock__dd">
                                                    <div class="resultblock__total"><span class="total"></span> Р</div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div id="container2" class="calcresults__item">
                            <div class="resultblock">
                                <div class="resultblock__wrapper radiotype">
                                    <label for="container2-delivery" class="resultblock__header"
                                        data-toggler="accordion3">
                                        <div class="resultblock__headermain">

                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/discounted .svg" alt="">
                                                </div>

                                            </div>

                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Льготный</div>

                                                <div class="resultblock__info"><span class="delivery_time"></span> дней
                                                </div>

                                            </div>


                                        </div>
                                        <div class="resultblock__headerinput">
                                            <input type="radio" id="container2-delivery" name="delivery-type"
                                                value="container2">
                                            <span class="radiotype__text"></span>
                                        </div>
                                    </label>
                                    <div class="resultblock__main" data-toggle="accordion3">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Cтоимость:</div>

                                                <div class="resultblock__dd"><span class="price"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Страховка:</div>

                                                <div class="resultblock__dd"><span class="insurance"></span> Р </div>

                                            </div>

                                        </div>

                                        <div class="resultblock__subtitle">Доп услуги</div>

                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Обрешетка:</div>

                                                <div class="resultblock__dd"><span class="lathing"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Маркировка:</div>

                                                <div class="resultblock__dd"><span class="marking"></span> Р </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="resultblock__delimeter"></div>
                                    <div class="resultblock__footer">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">
                                                    <div class="resultblock__footertitle">Всего:</div>
                                                </div>

                                                <div class="resultblock__dd">
                                                    <div class="resultblock__total"><span class="total"></span> Р</div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="fairyboat" class="calcresults__item">
                            <div class="resultblock">
                                <div class="resultblock__wrapper radiotype">
                                    <label for="fairyboat-delivery" class="resultblock__header"
                                        data-toggler="accordion5">
                                        <div class="resultblock__headermain">

                                            <div class="resultblock__icon">
                                                <div class="resultblock__img"><img src="img/cargo.svg" alt=""
                                                        width="22"></div>

                                            </div>

                                            <div class="resultblock__title">
                                                <div class="resultblock__name">Паром</div>

                                                <div class="resultblock__info"><span class="delivery_time"></span> дней
                                                </div>

                                            </div>


                                        </div>
                                        <div class="resultblock__headerinput">
                                            <input type="radio" id="fairyboat-delivery" name="delivery-type"
                                                value="fairyboat">
                                            <span class="radiotype__text"></span>
                                        </div>
                                    </label>
                                    <div class="resultblock__main" data-toggle="accordion5">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Cтоимость:</div>

                                                <div class="resultblock__dd"><span class="price"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Страховка:</div>

                                                <div class="resultblock__dd"><span class="insurance"></span> Р </div>

                                            </div>

                                        </div>

                                        <div class="resultblock__subtitle">Доп услуги</div>

                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Обрешетка:</div>

                                                <div class="resultblock__dd"><span class="lathing"></span> Р </div>

                                            </div>

                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">Маркировка:</div>

                                                <div class="resultblock__dd"><span class="marking"></span> Р </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="resultblock__delimeter"></div>
                                    <div class="resultblock__footer">
                                        <div class="resultblock__params">
                                            <div class="resultblock__param">
                                                <div class="resultblock__dt">
                                                    <div class="resultblock__footertitle">Всего:</div>
                                                </div>

                                                <div class="resultblock__dd">
                                                    <div class="resultblock__total"><span class="total"></span> Р</div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /.calcresults__items -->
                    <div class="calcresults__button">
                        <div class="calcform__button">
                            <a href="https://azlog.ru/calc/" class="btn_main checkout" target="_blank">Оформить</a>
                        </div>
                    </div>
                </div>
                <!-- /.calcresults__button -->
            </div>
            <!-- /.calcresults -->
        </form>
    </div>
    <!-- /.calcblock__results -->

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="index3.js"></script>
    <script src="index2.js"></script>

    <script>
        $(document).ready(function () {
            const url = window.location.href
            if (url.includes('?')) {
                const params = url.split('?')[1].split('&')
                const paramsArr = params.map(item => {
                    const itemArr = item.split('=')
                    return itemArr
                })

                const paramsObj = Object.fromEntries(paramsArr)
                console.log(paramsObj)

                Object.keys(paramsObj).forEach(key => {
                    if (document.querySelector(`[name=${key}]`)) {
                        document.querySelector(`[name=${key}]`).value = paramsObj[key]

                    }
                })
            }

        })

    </script>
</body>

</html>