<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== TRUE)
    die(); ?>
<?php
if (isset($_REQUEST['id'])) {
    if (strpos($_REQUEST['id'], '.') !== false) {
        $URL = str_replace('.', '', $_SERVER['REQUEST_URI']);
        Localredirect($URL, false, '301 Moved permanently');
    }
}

use Bitrix\Main\Page\Asset,
Bitrix\Main\Application,
Bitrix\Main\Localization\Loc,
Bitrix\Main\Type\ParameterDictionary;

global $USER, $APPLICATION;

CJSCore::Init(array("fx"));
CJSCore::Init(array('ajax'));

$isCompany = defined('IS_COMPANY') && IS_COMPANY === true ? true : false;
$isJudicial = defined('IS_JUDICIAL') && IS_JUDICIAL === true ? true : false;

define('ASSETS_PATH', SITE_TEMPLATE_PATH . '/public');
define('INCLUDE_PATH', SITE_TEMPLATE_PATH . '/include');
define('IS_MAIN_PAGE', $APPLICATION->GetCurPage(FALSE) === SITE_DIR ? TRUE : FALSE);
define('CUR_PAGE', $APPLICATION->GetCurPage(FALSE));
define('LOGIN_URL', $isCompany ? '' : 'https://person-new.nbki.ru');
define('CUSTOM_HEADER', !empty($APPLICATION->GetDirProperty("custom_header")) ?: false);
define('CUSTOM_FOOTER', !empty($APPLICATION->GetDirProperty("custom_footer")) ?: false);
$wrapper = $APPLICATION->GetDirProperty("wrapper");
$sTitle = $APPLICATION->GetDirProperty("sub_title");
$pageType = $APPLICATION->GetDirProperty("page_type");
$isContent = $APPLICATION->GetDirProperty("hide_content_block") == 'Y' ? TRUE : FALSE;
if ($isContent)
    define('HIDE_CONTENT_BLOCK', 'Y');
//canonical AMP
$request = Application::getInstance()->getContext()->getRequest();
$requestUri = $request->getRequestUri();
$ampCanonical = strpos($APPLICATION->GetCurPage(false), "poleznaya-informatsiya/") !== false ? '<link rel="amphtml" href="https://' . $_SERVER['HTTP_HOST'] . '/amp' . $requestUri . '">' : '';

if (IS_MAIN_PAGE === TRUE)
    $wrapper = 'main';

define('WRAPPER', !empty($wrapper) ? $wrapper : 'default');

$ASSETS = Asset::getInstance();
$ASSETS->addCss(ASSETS_PATH . '/css/bootstrap.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/bootstrap-theme.min.css');
$ASSETS->addCss(ASSETS_PATH . '/libs/font-awesome-4.7.0/css/font-awesome.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/slick.css');
$ASSETS->addCss(ASSETS_PATH . '/css/slick-theme.css');
$ASSETS->addCss(ASSETS_PATH . '/libs/lightbox/css/lightbox.min.css');
$ASSETS->addCss(ASSETS_PATH . '/css/animation.css');
$ASSETS->addCss(ASSETS_PATH . '/fonts/fonts.css');
$ASSETS->addCss(ASSETS_PATH . '/css/main.css');
$ASSETS->addCss(ASSETS_PATH . '/css/custom.css');
$ASSETS->addCss(ASSETS_PATH . '/css/restyle.css');
$ASSETS->addCss(ASSETS_PATH . '/css/corp.css');
$ASSETS->addCss(ASSETS_PATH . '/css/restyle_v5.css', true);
$ASSETS->addCss(ASSETS_PATH . '/css/sporform.css', true);
$ASSETS->addCss(ASSETS_PATH . '/css/smz.css', true);


$ASSETS->addJs(ASSETS_PATH . '/js/jquery-1.9.1.js');
$ASSETS->addJs(ASSETS_PATH . '/js/jquery-ui.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/bootstrap.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/slick.min.js');
$ASSETS->addJs(ASSETS_PATH . '/js/maskedinput.js');
$ASSETS->addJs(ASSETS_PATH . '/js/wow.min.js');
$ASSETS->addJs(ASSETS_PATH . '/libs/lightbox/js/lightbox.js');

$ASSETS->addJs(ASSETS_PATH . '/js/main.js');
$ASSETS->addJs(ASSETS_PATH . '/js/sporform.js');
$ASSETS->addJs(ASSETS_PATH . '/js/old.main.js');
$ASSETS->addJs(ASSETS_PATH . '/js/ingevents.4.0.9b.js');

//$ASSETS->addJs(ASSETS_PATH . '/js/ingevents.4.0.8.js');
//$ASSETS->addJs(ASSETS_PATH . '/js/scripts_info.js');

$ASSETS->addString('<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->');

$mainPageUrl = '/';
//костыли
$curUrl = strtok($_SERVER["REQUEST_URI"], '?');
if (
    in_array(
        $curUrl,
        [
            '/serviceszaem/svedeniya/yuridicheskim-litsam/',
            '/serviceszaem/spor/juridical_person/',
            '/serviceszaem/code/juridical_person/',
            '/serviceszaem/historylist/juridical_person/'
        ]
    ) || defined('IS_JUDICIAL')
) {
    $mainPageUrl = '/judicial/';
}
if (defined('IS_COMPANY'))
    $mainPageUrl = '/corp/';

if (defined('IS_MAIN_JUDICIAL'))
    $mainPageUrl = '/';
if (defined('IS_MAIN_COMPANY'))
    $mainPageUrl = '/';
?>
<?
global $lastModified;
$lastModified = strtotime(date("D, d M Y H:i:s", filectime($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REAL_FILE_PATH'])));
$lastModified = strtotime(date("D, d M Y H:i:s"));
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID; ?>">

<head>
    <? if (1 == 2): ?>
        <!-- Anti-flicker snippet (recommended)  -->
        <style>
            .async-hide {
                opacity: 0 !important
            }
        </style>
        <script data-skip-moving="true">(function (a, s, y, n, c, h, i, d, e) {
                s.className += ' ' + y;
                h.start = 1 * new Date;
                h.end = i = function () {
                    s.className = s.className.replace(RegExp(' ?' + y), '')
                };
                (a[n] = a[n] || []).hide = h;
                setTimeout(function () {
                    i();
                    h.end = null
                }, c);
                h.timeout = c;
            })(window, document.documentElement, 'async-hide', 'dataLayer', 4000,
                { 'OPT-NZKJPWS': true });
        </script>
        <script data-skip-moving="true" src="https://www.googleoptimize.com/optimize.js?id=OPT-NZKJPWS"></script>
        ?>
    <? endif; ?>
    <? if (SetNoindexNofollow()): ?>
        <? /*<meta name="robots" content="noindex, nofollow" />*/ ?>
        <? $APPLICATION->SetPageProperty("robots", "noindex, nofollow"); ?>
        <!-- noindex  nofollow -->
    <? endif; ?>
    <?php
    if (CUR_PAGE === '/press/pressrelease/' && count($_GET) > 0) {
        echo '<meta name="robots" content="noindex, nofollow" />';
    }
    if (CUR_PAGE === '/press/pressabout/' && count($_GET) > 0) {
        echo '<meta name="robots" content="noindex, nofollow" />';
    }
    ?>
    <?php
    if ($_SERVER['REQUEST_URI'] == '/') {
        ?>
        <meta name="cmsmagazine" content="15cc099f999c16f78c2bbc44c4fc6690" />
        <?php
    }
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= LANG_CHARSET; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="03f288b6d60c8630" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/local/templates/nbkiv2/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/local/templates/nbkiv2/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/local/templates/nbkiv2/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/local/templates/nbkiv2/img/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="/apple-touch-icon-76x76.ico">
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowMeta("keywords"); ?>
    <? $APPLICATION->ShowMeta("description"); ?>
    <? $APPLICATION->ShowMeta("robots"); ?>
    <?= $ampCanonical ?>
    <?
    if (strpos($_SERVER['REQUEST_URI'], '?utm_') !== false) {
        $url = 'http';
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
            $url .= "s";
        }
        $url .= "://" . $_SERVER["HTTP_HOST"] . strtok($_SERVER["REQUEST_URI"], '?');
        //			echo '<link rel="canonical" href="'.$url.'">';
        //echo '<meta name="robots" content="index,follow">';
    }

    ?>
    <link rel="canonical"
        href="https://nbki.ru<?= ($APPLICATION->GetCurDir() != '/' ? $APPLICATION->GetCurDir() : '') ?>" />
    <!--    <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
    <? $APPLICATION->ShowCSS(); ?>
    <? $APPLICATION->ShowHeadStrings(); ?>
    <? $APPLICATION->ShowHeadScripts(); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="3eLZpq2rB7exHwIYdmew2kn9qNQPjqWOfde47H9rGbU" />
    <? if (false && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == false && strpos($_SERVER['HTTP_USER_AGENT'], 'rv:11.0') == false): ?>
        <script async charset="UTF-8" src="https://nbki.ramfy.ru/push/wj160ghlmw964.js"></script>
    <? endif; ?>
    <script>
        window.dataLayer = window.dataLayer || [];
    </script>
    <meta name="facebook-domain-verification" content="0guzch520p76gmd2pcmqbznka14hz7" />


    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(9726127, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
            ecommerce: "dataLayer"
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/9726127" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Rating Mail.ru counter -->
    <script type="text/javascript">var _tmr = window._tmr || (window._tmr = []);
        _tmr.push({ id: "3251463", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID" });
        (function (d, w, id) {
            if (d.getElementById(id)) return;
            var ts = d.createElement("script");
            ts.type = "text/javascript";
            ts.async = true;
            ts.id = id;
            ts.src = "https://top-fwz1.mail.ru/js/code.js";
            var f = function () {
                var s = d.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(ts, s);
            };
            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "topmailru-code");</script>
    <noscript>
        <div><img src="https://top-fwz1.mail.ru/counter?id=3251463;js=na"
                style="border:0;position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div>
    </noscript><!-- //RatingMail.rucounter -->
    <? /*
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () => {
      setTimeout(function () {
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
              n.callMethod.apply(n,arguments):n.queue.push(arguments)};
              if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
              n.queue=[];t=b.createElement(e);t.async=!0;
              t.src=v;s=b.getElementsByTagName(e)[0];
              s.parentNode.insertBefore(t,s)}(window, document,'script',
              'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '251650636951155');
          fbq('track', 'PageView');
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-23246610-1');
          (function (m, e, t, r, i, k, a) {
              m[i] = m[i] || function () {
                  (m[i].a = m[i].a || []).push(arguments)
              };
              m[i].l = 1 * new Date();
              k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
          })
          (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
          ym(9726127, "init", {
              clickmap: true,
              trackLinks: true,
              accurateTrackBounce: true,
              webvisor: true,
              ecommerce: "dataLayer"
          });
      }, 1000); // время указано в мс = 0,001 секунды, изменить по вкусу
  });
</script>

*/ ?>

    <meta property="og:title" content="<? $APPLICATION->ShowTitle() ?>" />
    <meta property="og:description" content="<? $APPLICATION->ShowProperty('description'); ?>" />
    <meta property="og:image"
        content="<?= "https://" . $_SERVER['HTTP_HOST'] . "/local/templates/nbkiv3/public/img/nbki-logo.svg" ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?= "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />


</head>
<? /* <body class="no-scroll"> */ ?>

<body>
    <? if (1 == 2): ?>
        <div style="display:none;">
            <script type="text/javascript">
                (function (w, c) {
                    (w[c] = w[c] || []).push(function () {
                        try {
                            w.yaCounter9726127 = new Ya.Metrika({ id: 9726127, enableAll: true, webvisor: true });
                        } catch (e) {
                        }
                    });
                })(window, "yandex_metrika_callbacks");
            </script>
        </div>
        <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer></script>
        <noscript>
            <div><img src="//mc.yandex.ru/watch/9726127" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
    <? endif; ?>
    <? /*
<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: nbki.ru_tracking
URL of the webpage where the tag is expected to be placed:
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 12/24/2019
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://9834311.fls.doubleclick.net/activityi;src=9834311;type=invmedia;cat=nbkir0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1"  style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://9834311.fls.doubleclick.net/activityi;src=9834311;type=invmedia;cat=nbkir0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?"
    width="1" height="1" style="display:none"></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->
*/ ?>
    <? if ($USER->IsAdmin()): ?>
        <div id="panel"><? $APPLICATION->ShowPanel() ?></div>
    <? endif; ?>

    <header id="header" class="header clearfix <?= $isCompany ? ' corpheader' : '' ?>">
        <div class="header__main clearfix">
            <?

            global $APPLICATION;
            $start = strtotime("2025-02-10 00:10");
            $end = strtotime("2025-03-30 23:50");
            $now = time();
            ?>

            <?
            if ($now >= $start && $now <= $end && !IS_MAIN_PAGE): ?>
                <style>
                    .header__main {
                        height: unset;
                    }
                    .headermenu ul li {
                        padding: 0 12px;
                    }
                </style>
                <div class="twentybanner" style='display:none'>
                    <div class="twentybanner__wrapper">

                        <div class="twentybanner__bg container" style=''>
                        <span data-action='hidebanner' class='twentybanner__close'>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_23672_344" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="0"
                                    width="21" height="21">
                                    <rect x="-0.0227051" y="0.482964" width="20" height="20" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_23672_344)">
                                    <path
                                        d="M9.97721 11.358L5.74805 15.5871C5.63694 15.6982 5.49471 15.7571 5.32138 15.7638C5.14749 15.771 4.99805 15.7121 4.87305 15.5871C4.74805 15.4621 4.68555 15.3163 4.68555 15.1496C4.68555 14.983 4.74805 14.8371 4.87305 14.7121L9.10221 10.483L4.87305 6.2538C4.76194 6.14269 4.70305 6.00019 4.69638 5.8263C4.68916 5.65297 4.74805 5.5038 4.87305 5.3788C4.99805 5.2538 5.14388 5.1913 5.31055 5.1913C5.47721 5.1913 5.62305 5.2538 5.74805 5.3788L9.97721 9.60797L14.2064 5.3788C14.3175 5.26769 14.46 5.20852 14.6339 5.2013C14.8072 5.19463 14.9564 5.2538 15.0814 5.3788C15.2064 5.5038 15.2689 5.64963 15.2689 5.8163C15.2689 5.98297 15.2064 6.1288 15.0814 6.2538L10.8522 10.483L15.0814 14.7121C15.1925 14.8232 15.2514 14.9655 15.258 15.1388C15.2653 15.3127 15.2064 15.4621 15.0814 15.5871C14.9564 15.7121 14.8105 15.7746 14.6439 15.7746C14.4772 15.7746 14.3314 15.7121 14.2064 15.5871L9.97721 11.358Z"
                                        fill="#7B7794" />
                                </g>
                            </svg>

                        </span>
                            <div class="twentybanner__content" style=''>
                                <div class="twentybanner__text">
                                    <a href="https://20.nbki.ru/?utm_source=nbki.ru&utm_medium=banner" class="twentybanner__title">НБКИ&nbsp;20&nbsp;лет! День&nbsp;рождения&nbsp;у&nbsp;нас,
                                        а&nbsp;подарки&nbsp;—&nbsp;вам!</a>
                                    <a href="https://20.nbki.ru/?utm_source=nbki.ru&utm_medium=banner" class="twentybanner__description">Участвуйте и&nbsp;получите шанс выиграть главный
                                        приз&nbsp;— iPhone&nbsp;16&nbsp;Pro</a>


                                </div>
                                <div class="twentybanner__button"><a href="https://20.nbki.ru/?utm_source=nbki.ru&utm_medium=banner"
                                        target="_blank">Узнать подробности </a></div>

                            </div><!-- /.twentybanner__content -->
                        </div><!-- /.twentybanner__bg -->
                    </div><!-- /.twentybanner__wrapper -->
                </div><!-- /.twentybanner -->
            <? endif; ?>
            <div class="container">

                <div class="headermain">
                    <div class="headermain__items">
                        <div class="headermain__item">
                            <div class="headerrow">
                                <div class="burgermenu burgermenu_desktop">
                                    <button class="headermain__menu js-menu js-menu_desktop">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/burger.svg" alt=""
                                            class="burgermenu--open ">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/Union.svg" alt=""
                                            class="burgermenu--close ">
                                    </button>
                                </div>
                                <div class="headerleft">
                                    <div class="logo">
                                        <? if (!IS_MAIN_PAGE): ?>
                                            <a href="<?= $mainPageUrl ?>">
                                            <? endif; ?>
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/nbki-logo.svg" alt=""
                                                class="">
                                            <!-- 	<img src="<?= SITE_TEMPLATE_PATH ?>/public/img/nbki-logo2.svg" alt=""
                                             class="nbki-logo_mobile"> -->
                                            <? if (!IS_MAIN_PAGE): ?>
                                            </a>
                                        <? endif; ?>
                                    </div>
                                    <? /* <div class="logo">
                            <? if (!IS_MAIN_PAGE): ?>
                            <a href="<?= $mainPageUrl ?>">
                                <? endif; ?>
                                <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/nylogo.svg" alt=""
                                     class="">
                                <!-- 	<img src="<?= SITE_TEMPLATE_PATH ?>/public/img/nbki-logo2.svg" alt=""
                                     class="nbki-logo_mobile"> -->
                                <? if (!IS_MAIN_PAGE): ?>
                            </a>
                        <? endif; ?>
                        </div> */ ?>
                                </div>
                                <div class="headerchange">
                                    <div class="headertop__links">
                                        <div
                                            class="headertop__link <?= ($isCompany || $isJudicial) ? 'notcurrent' : 'current' ?>">
                                            <a href="#" <?= ($isCompany || $isJudicial) ? '' : 'class="active current"' ?>>Физические
                                                лица</a>
                                        </div>
                                        <div class="headertop__link <?= $isJudicial ? 'current' : 'notcurrent' ?>">
                                            <a href="#" <?= $isJudicial ? 'class="active current"' : '' ?>>Юридические
                                                лица</a>
                                        </div>
                                        <div class="headertop__link <?= $isCompany ? 'current' : 'notcurrent' ?>">
                                            <a href="#" <?= $isCompany ? 'class="active current"' : '' ?>>Корпоративные
                                                клиенты</a>
                                        </div>

                                        <div class="headertop__dropdown">
                                            <? if (!($isCompany && $isJudicial)): ?>
                                                <div class=" <?= ($isCompany || $isJudicial) ? 'visible' : 'hidden' ?>">
                                                    <a href="/" <?= ($isCompany || $isJudicial) ? '' : 'class="active current"' ?>>Физические
                                                        лица</a>
                                                </div>
                                            <? endif; ?>
                                            <? if (!($isJudicial)): ?>
                                                <div class=" <?= $isJudicial ? 'hidden' : 'visible' ?>">
                                                    <a href="/judicial/" <?= $isJudicial ? 'class="active current"' : '' ?>>Юридические
                                                        лица</a>
                                                </div>
                                            <? endif; ?>
                                            <? if (!($isCompany)): ?>
                                                <div class=" <?= $isCompany ? 'hidden' : 'visible' ?>">
                                                    <a href="/corp/" <?= $isCompany ? 'class="active current"' : '' ?>>Корпоративные
                                                        клиенты</a>
                                                </div>
                                            <? endif; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.headerrow -->
                        </div>
                        <div class="headermain__item headermain__item_right">
                            <div class="mobilepanel">
                                <? /* <div class="headercenter__search">
                        <div class="searchbutton searchbutton_mobile">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/mobilesearch.svg" alt="">
                        </div>
                    </div> */ ?>
                                <? if (!defined('HIDE_LOGIN')): ?>
                                    <? if (!($isJudicial)): ?>
                                        <div class="headerright">

                                            <div class="lklink lklink_mobile">

                                                <a href="https://person-new.nbki.ru"
                                                    onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;"
                                                    <?= $isCompany ? 'class=""' : '' ?>>

                                                    <a target="_blank" href="https://person-new.nbki.ru"
                                                        onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;"
                                                        <?= $isCompany ? 'class="js-acc__link"' : '' ?>>
                                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12 10.5499C10.55 10.5499 9.3125 10.0309 8.2875 8.99293C7.2625 7.95593 6.75 6.72493 6.75 5.29993C6.75 3.84993 7.2625 2.61243 8.2875 1.58743C9.3125 0.562427 10.55 0.0499268 12 0.0499268C13.45 0.0499268 14.6875 0.562427 15.7125 1.58743C16.7375 2.61243 17.25 3.84993 17.25 5.29993C17.25 6.72493 16.7375 7.95593 15.7125 8.99293C14.6875 10.0309 13.45 10.5499 12 10.5499ZM20.9625 21.9499H3.0375C2.3875 21.9499 1.844 21.7314 1.407 21.2944C0.969 20.8564 0.75 20.3249 0.75 19.6999V18.6124C0.75 17.8874 0.95 17.2124 1.35 16.5874C1.75 15.9624 2.2875 15.4749 2.9625 15.1249C4.4375 14.3999 5.9315 13.8559 7.4445 13.4929C8.9565 13.1309 10.475 12.9499 12 12.9499C13.525 12.9499 15.044 13.1309 16.557 13.4929C18.069 13.8559 19.5625 14.3999 21.0375 15.1249C21.7125 15.4749 22.25 15.9624 22.65 16.5874C23.05 17.2124 23.25 17.8874 23.25 18.6124V19.6999C23.25 20.3249 23.031 20.8564 22.593 21.2944C22.156 21.7314 21.6125 21.9499 20.9625 21.9499ZM3 19.6999H21V18.6124C21 18.3124 20.9125 18.0374 20.7375 17.7874C20.5625 17.5374 20.325 17.3249 20.025 17.1499C18.725 16.5249 17.4065 16.0434 16.0695 15.7054C14.7315 15.3684 13.375 15.1999 12 15.1999C10.625 15.1999 9.2685 15.3684 7.9305 15.7054C6.5935 16.0434 5.275 16.5249 3.975 17.1499C3.675 17.3249 3.4375 17.5374 3.2625 17.7874C3.0875 18.0374 3 18.3124 3 18.6124V19.6999ZM12 8.29993C12.825 8.29993 13.5315 8.00593 14.1195 7.41793C14.7065 6.83093 15 6.12493 15 5.29993C15 4.47493 14.7065 3.76843 14.1195 3.18043C13.5315 2.59343 12.825 2.29993 12 2.29993C11.175 2.29993 10.469 2.59343 9.882 3.18043C9.294 3.76843 9 4.47493 9 5.29993C9 6.12493 9.294 6.83093 9.882 7.41793C10.469 8.00593 11.175 8.29993 12 8.29993Z"
                                                                fill="#AEB5D1" />
                                                        </svg>


                                                    </a>
                                                    <? /*

                                                                    <a target="_blank" href="<?= LOGIN_URL . "?utm_source=fl&utm_medium=mainpage&utm_campaign=button&utm_term=lk" ?>"
                                                                       onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;" <?= $isCompany ? 'class="js-acc__link"' : '' ?> >
                                                                        <svg width="17" height="19" viewBox="0 0 17 19" fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <circle cx="8.5" cy="4.5" r="3.5" stroke="#AEB5D1"
                                                                                    stroke-width="2"/>
                                                                            <path d="M16 18C16 14.134 12.6421 11 8.5 11C4.35786 11 1 14.134 1 18"
                                                                                  stroke="#AEB5D1" stroke-width="2" stroke-linecap="round"/>
                                                                        </svg>
                                                                    </a>
                                                            */ ?>
                                            </div>
                                        </div>
                                    <? endif; ?>
                                <? endif; ?>
                                <div class="burgermenu burgermenu_mobile">
                                    <button class="headermain__menu js-menu js-menu_mobile">
                                        <svg width="28" height="18" viewBox="0 0 28 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 17.4375C1.675 17.4375 1.4065 17.3315 1.1945 17.1195C0.9815 16.9065 0.875 16.6375 0.875 16.3125C0.875 16.0125 0.9815 15.75 1.1945 15.525C1.4065 15.3 1.675 15.1875 2 15.1875H26C26.325 15.1875 26.594 15.3 26.807 15.525C27.019 15.75 27.125 16.0125 27.125 16.3125C27.125 16.6375 27.019 16.9065 26.807 17.1195C26.594 17.3315 26.325 17.4375 26 17.4375H2ZM2 10.125C1.675 10.125 1.4065 10.0185 1.1945 9.8055C0.9815 9.5935 0.875 9.325 0.875 9C0.875 8.675 0.9815 8.406 1.1945 8.193C1.4065 7.981 1.675 7.875 2 7.875H26C26.325 7.875 26.594 7.981 26.807 8.193C27.019 8.406 27.125 8.675 27.125 9C27.125 9.325 27.019 9.5935 26.807 9.8055C26.594 10.0185 26.325 10.125 26 10.125H2ZM2 2.8125C1.675 2.8125 1.4065 2.7 1.1945 2.475C0.9815 2.25 0.875 1.9875 0.875 1.6875C0.875 1.3625 0.9815 1.094 1.1945 0.882C1.4065 0.669 1.675 0.5625 2 0.5625H26C26.325 0.5625 26.594 0.669 26.807 0.882C27.019 1.094 27.125 1.3625 27.125 1.6875C27.125 1.9875 27.019 2.25 26.807 2.475C26.594 2.7 26.325 2.8125 26 2.8125H2Z"
                                                fill="#4563FF" />
                                        </svg>

                                        <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/hamburger2.svg" alt=""
                                            class="burgermenu--close ">
                                    </button>
                                </div>
                            </div>
                            <div class="headercenter">
                                <?
                                if ($now >= $start && $now <= $end): ?>
                                    <div class="twentylink twentylink_desktop">
                                        <a href="https://20.nbki.ru/?utm_source=nbki.ru&utm_medium=banner"
                                            target="_blank" >
                                            <span>НБКИ 20 лет!</span>
                                            <img src="/local/templates/nbkiv4/public/img/twentylink.png" alt="" class="onlyMobile">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="onlyDesktop">
                                                <path
                                                    d="M13.8538 8.35378L9.35375 12.8538C9.25993 12.9476 9.13268 13.0003 9 13.0003C8.86732 13.0003 8.74007 12.9476 8.64625 12.8538C8.55243 12.76 8.49972 12.6327 8.49972 12.5C8.49972 12.3674 8.55243 12.2401 8.64625 12.1463L12.2931 8.50003H2.5C2.36739 8.50003 2.24021 8.44736 2.14645 8.35359C2.05268 8.25982 2 8.13264 2 8.00003C2 7.86743 2.05268 7.74025 2.14645 7.64648C2.24021 7.55271 2.36739 7.50003 2.5 7.50003H12.2931L8.64625 3.85378C8.55243 3.75996 8.49972 3.63272 8.49972 3.50003C8.49972 3.36735 8.55243 3.2401 8.64625 3.14628C8.74007 3.05246 8.86732 2.99976 9 2.99976C9.13268 2.99976 9.25993 3.05246 9.35375 3.14628L13.8538 7.64628C13.9002 7.69272 13.9371 7.74786 13.9623 7.80856C13.9874 7.86926 14.0004 7.93433 14.0004 8.00003C14.0004 8.06574 13.9874 8.13081 13.9623 8.1915C13.9371 8.2522 13.9002 8.30735 13.8538 8.35378Z"
                                                    fill="#4563FF" />
                                            </svg>
                                        </a>

                                    </div>
                                <? endif; ?>
                                <div class="headercenter__menu">
                                    <div class="headermenu">

                                        <? if ($isCompany): ?>
                                            <ul>
                                                <li>
                                                    <a href="<?= $mainPageUrl ?>">Главная</a>
                                                </li>
                                                <li>
                                                    <a href="/company/">О бюро</a>
                                                </li>
                                                <li>
                                                    <a href="/contacts/">Контакты</a>
                                                </li>
                                                <li class="onlyDesktop">
                                                    <a href="/corp/become-a-client/" class="btn btn_main">Подключиться
                                                        к&nbsp;НБКИ</a>
                                                </li>
                                            </ul>
                                            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                                                $APPLICATION->IncludeComponent(
                                                    "bitrix:menu",
                                                    "header",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                                    array(
                                                        // region Основные параметры
                                                        "ROOT_MENU_TYPE" => "menu1",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                                        // endregion
                                                        // region Настройки кеширования
                                                        "MENU_CACHE_TYPE" => "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                                        "MENU_CACHE_TIME" => "36000",  // Время кеширования (сек.)
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
                                        <? else: ?>
                                            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                                                $APPLICATION->IncludeComponent(
                                                    "bitrix:menu",
                                                    "top",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                                    array(
                                                        // region Основные параметры
                                                        "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                                        // endregion
                                                        // region Настройки кеширования
                                                        "MENU_CACHE_TYPE" => "N",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                                        "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
                                                        "MENU_CACHE_USE_GROUPS" => "Y",     // Учитывать права доступа
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
                                        <? endif; ?>

                                    </div>
                                </div>

                                <? if ($isCompany): ?>
                                    <!--  <div class="headermain__button">
                                     <a href="/login" class="btn_main" target="_blank">Подключиться к НБКИ</a>
                                 </div> -->
                                <? endif; ?>

                                <div class="headercenter__search" style='padding-left:10px;'>
                                    <div class="searchbutton searchbutton_desktop">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="9.5" cy="9.5" r="7" stroke="#000" />
                                            <path
                                                d="M20.2927 21.2929C20.6833 21.6834 21.3164 21.6834 21.707 21.2929C22.0975 20.9024 22.0975 20.2692 21.707 19.8787L20.2927 21.2929ZM14.207 15.2071L20.2927 21.2929L21.707 19.8787L15.6212 13.7929L14.207 15.2071Z"
                                                fill="#000" />
                                        </svg>
                                    </div>
                                </div>
                                <span class="mobilemenubtn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <line x1="5" y1="6" x2="19" y2="6" stroke="#C2BFCC" stroke-width="2"
                                            stroke-linecap="round" />
                                        <line x1="5" y1="12" x2="19" y2="12" stroke="#C2BFCC" stroke-width="2"
                                            stroke-linecap="round" />
                                        <line x1="5" y1="18" x2="19" y2="18" stroke="#C2BFCC" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                            </div>

                            <? if (!defined('HIDE_LOGIN')): ?>
                                <? /* <div class="lklink"><a href="<?= LOGIN_URL ?>" onclick="ym('9726127','reachGoal', 'lk_click'); return true;" <?=$isCompany?'class="js-acc__link"':''?> >Личный кабинет</a></div> */ ?>
                                <? if (!($isJudicial)): ?>
                                    <div class="headerright">
                                        <div class="lklink lklink_desktop">

                                            <? /* 		<a  href="#myModal_logincorp" data-toggle="modal" onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;" <?= $isCompany ? 'class=""' : '' ?> >
                                                        else: ?>*/ ?>
                                            <a target="_blank" href="<?= LOGIN_URL . "" ?>"
                                                onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;"
                                                <?= $isCompany ? 'class="js-acc__link"' : '' ?>>

                                                <span>Войти</span> <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/hlogin.svg"
                                                    alt=""></a>
                                            <? /* <a target="_blank" href="<?= LOGIN_URL . "" ?>" onclick="ym('9726127','reachGoal', 'lk_click'); _tmr.push({ type: 'reachGoal', id: 3341940, value: 650, goal: 'registratsiya'}); return true;" <?= $isCompany ? 'class="js-acc__link"' : '' ?> >
                                                                    <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/nylogin.svg" alt="">

                                                                </a> */ ?>
                                        </div>
                                    </div>
                                <? endif; ?>
                            <? endif; ?>

                        </div>
                    </div>
                </div>
                <div class="search__full" itemscope itemtype="https://schema.org/WebSite">
                    <meta itemprop="url" content="https://nbki.ru/" />
                    <form action="/search/" itemprop="potentialAction" itemscope
                        itemtype="https://schema.org/SearchAction">
                        <div class="search__items">
                            <meta itemprop="target" content="https://nbki.ru/search/?q={q}" />
                            <div class="search_wrapper">
                                <input itemprop="query-input" id="title-search-input_fixed" class="search__input"
                                    type="text" name="q" placeholder="Что вы ищете?" autocomplete='off'>
                                <span class="search__button_close search__button_open search__button_clear">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_26350_208790" style="mask-type:alpha" maskUnits="userSpaceOnUse"
                                            x="-1" y="-1" width="25" height="25">
                                            <rect x="-0.0273438" y="-0.184082" width="24" height="24" fill="#D9D9D9" />
                                        </mask>
                                        <g mask="url(#mask0_26350_208790)">
                                            <path
                                                d="M11.9727 12.8659L6.89765 17.9409C6.76432 18.0742 6.59365 18.1449 6.38565 18.1529C6.17698 18.1616 5.99765 18.0909 5.84765 17.9409C5.69765 17.7909 5.62265 17.6159 5.62265 17.4159C5.62265 17.2159 5.69765 17.0409 5.84765 16.8909L10.9226 11.8159L5.84765 6.74091C5.71432 6.60758 5.64365 6.43658 5.63565 6.22791C5.62698 6.01991 5.69765 5.84091 5.84765 5.69091C5.99765 5.54091 6.17265 5.46591 6.37265 5.46591C6.57265 5.46591 6.74765 5.54091 6.89765 5.69091L11.9727 10.7659L17.0477 5.69091C17.181 5.55758 17.352 5.48658 17.5606 5.47791C17.7687 5.46991 17.9477 5.54091 18.0977 5.69091C18.2477 5.84091 18.3227 6.01591 18.3227 6.21591C18.3227 6.41591 18.2477 6.59091 18.0977 6.74091L13.0227 11.8159L18.0977 16.8909C18.231 17.0242 18.3017 17.1949 18.3097 17.4029C18.3183 17.6116 18.2477 17.7909 18.0977 17.9409C17.9477 18.0909 17.7727 18.1659 17.5727 18.1659C17.3727 18.1659 17.1977 18.0909 17.0477 17.9409L11.9727 12.8659Z"
                                                fill="#7B7794" />
                                        </g>
                                    </svg>
                                </span>
                            </div>

                            <div class="search__buttons">
                                <button class="search__submit btn_main" type="submit">

                                    <span>Найти</span>
                                </button>

                            </div>
                        </div>
                        <div class="search__results" data-entity="search-wrapper">
                            <!-- изначально без active, но если найдется результат - добавляется класс active -->
                            <div class="searchresults">
                                <div class="searchresults__items" data-entity="search-result">
                                </div><!-- /.searchresults__items -->
                            </div><!-- /.searchresults -->
                        </div><!-- /.search__results -->
                    </form>
                </div>
            </div>
        </div>
        <?// в корпоративном разделе оставляем старое меню ¯\_(ツ)_/¯ ?>
        <? if ($isCompany): ?>
            <div class="mainmenu">
                <div class="container">
                    <div class="mainmenu__content mainmenu__content--desktop">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => INCLUDE_PATH . "/header/all_links.php"
                            )
                        ); ?>
                    </div>
                    <div class="mainmenu__content mainmenu__content--mobile mainmenumob">
                        <? if ($isCompany): ?>
                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>Услуги</span></div>
                                <div class="accordmenu__content">
                                    <ul>
                                        <li><a href="/corp/">Подробная информация</a></li>
                                        <li><a href="/corp/become-a-client/" target="_blank">Стать клиентом НБКИ</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->
                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>О компании</span></div>
                                <div class="accordmenu__content">
                                    <ul class="allmenu__lvl1">
                                        <li><a href="/company/">О бюро</a></li>
                                        <li><a href="/company/documents/">Документы НБКИ</a></li>
                                        <li><a href="/company/rekvizit/">Реквизиты</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->

                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>Информация</span></div>
                                <div class="accordmenu__content">
                                    <ul>
                                        <li><a href="/contacts/">Контакты</a></li>
                                        <li><a href="/company/news/">Новости</a></li>
                                        <li><a href="/press/pressabout/">Пресса о нас</a></li>
                                        <li><a href="/faq/">Вопросы и ответы</a></li>
                                        <li><a href="/poleznaya-informatsiya/">Полезная информация</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->

                            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                                    /* $APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "header",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                        array(
                                            // region Основные параметры
                                            "ROOT_MENU_TYPE"         =>  "menu1",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                            // endregion
                                            // region Настройки кеширования
                                            "MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                            "MENU_CACHE_TIME"        =>  "36000",  // Время кеширования (сек.)
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
                                    ); */ ?>
                        <? elseif ($isJudicial): ?>
                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>Услуги</span></div>
                                <div class="accordmenu__content">
                                    <ul>
                                        <li><a href="/judicial/svedeniya/">Получить кредитную историю</a></li>
                                        <li><a href="/judicial/spor/">Оспорить кредитную историю</a></li>
                                        <li><a href="/judicial/historylist/">ЦККИ и код субъекта</a></li>
                                        <!-- 	<li><a href="/judicial/historylist/">Справка из ЦККИ</a></li>
                                        <li><a href="/judicial/code/">Действия с кодом субъекта</a></li> -->
                                        <li><a href="/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым управляющим</a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->
                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>О компании</span></div>
                                <div class="accordmenu__content">
                                    <ul class="allmenu__lvl1">
                                        <li><a href="/company/">О бюро</a></li>
                                        <li><a href="/company/documents/">Документы НБКИ</a></li>
                                        <li><a href="/company/rekvizit/">Реквизиты</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->

                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>Информация</span></div>
                                <div class="accordmenu__content">
                                    <ul>
                                        <li><a href="/contacts/">Контакты</a></li>
                                        <li><a href="/company/news/">Новости</a></li>
                                        <li><a href="/press/pressabout/">Пресса о нас</a></li>
                                        <li><a href="/faq/">Вопросы и ответы</a></li>
                                        <li><a href="/poleznaya-informatsiya/">Полезная информация</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->
                            <div class="accordmenu">
                                <div class="accordmenu__title"><a href="//story.nbki.ru" target="_blank">Истории о кредитах</a>
                                </div>
                            </div><!-- /.accordmenu -->

                        <? else: ?>
                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>Услуги</span></div>
                                <div class="accordmenu__content">
                                    <ul>
                                        <li><a href="/serviceszaem/pkr/">Узнать кредитный рейтинг</a></li>
                                        <li><a href="/nbki-history/">Получить кредитную историю</a></li>
                                        <li><a href="/serviceszaem/spor/">Оспорить кредитную историю</a></li>
                                        <li><a href="/historylist/">ЦККИ и код субъекта</a></li>
                                        <!-- 		<li><a href="/serviceszaem/historylist/">Справка из ЦККИ</a></li>
                                            <li><a href="/serviceszaem/code/">Действия с кодом субъекта</a></li> -->
                                        <li><a href="/zashchita-ot-moshennichestva/">Защита от мошенничества</a></li>
                                        <li><a href="/podpiska-na-credithistory/">Подписка на кредитную историю</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->
                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>О компании</span></div>
                                <div class="accordmenu__content">
                                    <ul class="allmenu__lvl1">
                                        <li><a href="/company/">О бюро</a></li>
                                        <li><a href="/company/documents/">Документы НБКИ</a></li>
                                        <li><a href="/company/rekvizit/">Реквизиты</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->

                            <div class="accordmenu">
                                <div class="accordmenu__title js-accord"><span>Информация</span></div>
                                <div class="accordmenu__content">
                                    <ul>
                                        <li><a href="/contacts/">Контакты</a></li>
                                        <li><a href="/company/news/">Новости</a></li>
                                        <li><a href="/press/pressabout/">Пресса о нас</a></li>
                                        <li><a href="/faq/">Вопросы и ответы</a></li>
                                        <li><a href="/poleznaya-informatsiya/">Полезная информация</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.accordmenu -->
                            <div class="accordmenu">
                                <div class="accordmenu__title"><a href="//story.nbki.ru" target="_blank">Истории о кредитах</a>
                                </div>
                            </div><!-- /.accordmenu -->

                            <? // Меню - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/menu.php
                                    /* $APPLICATION->IncludeComponent(
                                        "bitrix:menu",
                                        "header",                  // [bottom_menu, catalog_native, top_menu, .default, blue_tabs, catalog_horizontal, catalog_vertical, grey_tabs, horizontal_multilevel, tree, vertical_multilevel]
                                        array(
                                            // region Основные параметры
                                            "ROOT_MENU_TYPE"         =>  "menu2",  // Тип меню для первого уровня : array ( 'left' => 'Левое меню', 'top' => 'Верхнее меню', 'bottom' => 'Нижнее меню', )
                                            // endregion
                                            // region Настройки кеширования
                                            "MENU_CACHE_TYPE"        =>  "A",     // Тип кеширования : array ( 'A' => 'Авто', 'Y' => 'Кешировать', 'N' => 'Не кешировать', )
                                            "MENU_CACHE_TIME"        =>  "36000",  // Время кеширования (сек.)
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
                                    ); */ ?>
                        <? endif; ?>

                        <? if ($isCompany): ?>
                            <div class="mainmenumob__button mainmenumob__button_corp">
                                <a href="/corp/become-a-client/" class="btn_main btn_main_white" target="_blank">Подключиться к
                                    НБКИ</a>
                            </div>
                        <? elseif ($isJudicial): ?>
                        <? else: ?>
                            <div class="mainmenumob__button">
                                <a href="https://person-new.nbki.ru" class="btn_main btn_main_white" target="_blank">Личный
                                    кабинет</a>
                            </div><!-- /.mainmenumob -->
                        <? endif; ?>


                        <div class="mainmenu__phones <? echo $isCompany ? 'mainmenu__phones_corp' : '' ?>">
                            <div class="phone"><span>Наш телефон в Москве:</span><a href="tel:84952217837">8 (495)
                                    221-78-37</a>
                            </div>
                            <? if (!($isCompany)): ?>
                                <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800)
                                        600-64-04</a></div>
                            <? endif; ?>
                        </div>
                    </div>
                </div>
                <div class="mobilemenu">
                    <span class="mobilemenuclose">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                            <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </span>
                    <div class="mobilemenu__wrapper">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => INCLUDE_PATH . "/header/mobile_links.php"
                            )
                        ); ?>
                    </div>
                </div>
                <!-- /.container -->
            </div>
        <? else: ?>
            <div class="mainmenu">
                <div class="mainmenu__header">
                    <div class="headermain">
                        <div class="headermain__items">
                            <div class="headermain__item">
                                <div class="headerrow">
                                    <div class="headerleft">
                                        <div class="logo">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/logo_v5.svg" alt=""
                                                class="nbki-logo_mobile">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.headerrow -->
                            </div>
                            <div class="headermain__item headermain__item_right">
                                <div class="mobilepanel">
                                    <div class="burgermenu burgermenu_mobile">
                                        <button class="headermain__menu js-menu js-menu_mobile active">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/public/img/hamburger2.svg" alt=""
                                                class="burgermenu--close " style='display: block;'>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- /.mainmenu__header -->
                <div class="container">

                    <div class="mainmenu__content mainmenu__content--desktop">
                        <div class="mainmenu__main mainmenu__cols">
                            <div class="mainmenu__cols ">
                                <div class="mainmenu__col">
                                    <div class="mainmenu__menu">
                                        <div class="mainmenu__title"><a>Физическим лицам</a></div>
                                        <div class="mainmenu__list">
                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement"
                                                class="allmenu__lvl1">
                                                <li itemprop="name"><a itemprop="url" href="/pkr/">Узнать кредитный
                                                        рейтинг</a></li>
                                                <li itemprop="name"><a href="/nbki-history/">Получить кредитную историю</a>
                                                </li>
                                                <li itemprop="name"><a itemprop="url" href="/spor/">Оспорить кредитную
                                                        историю</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/historylist/">ЦККИ и код
                                                        субъекта</a></li>
                                                <li itemprop="name"><a href="/zashchita-ot-moshennichestva/">Защита от
                                                        мошенничества</a></li>
                                                <li itemprop="name"><a href="/podpiska-na-credithistory/">Подписка на
                                                        кредитную историю</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mainmenu__col">
                                    <div class="mainmenu__menu">
                                        <div class="mainmenu__title"><a>Юридическим лицам</a></div>
                                        <div class="mainmenu__list">
                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                                <li itemprop="name"><a itemprop="url" href="/judicial/svedeniya/">Получить
                                                        кредитную историю</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/judicial/spor/">Оспорить
                                                        кредитную историю</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/judicial/historylist/">ЦККИ и
                                                        код субъекта-юрлица</a></li>

                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="mainmenu__col">
                                    <div class="mainmenu__menu">
                                        <div class="mainmenu__title"><a>B2B</a></div>
                                        <div class="mainmenu__list">
                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                                <li></li>
                                                <li itemprop="name"><a itemprop="url" href="/corp/">Подробная
                                                        информация</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/corp/become-a-client/">Стать
                                                        клиентом НБКИ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.mainmenu__col -->

                                <div class="mainmenu__col">
                                    <div class="mainmenu__menu">
                                        <div class="mainmenu__title"><a>О бюро</a></div>
                                        <div class="mainmenu__list">
                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement"
                                                class="allmenu__lvl1">
                                                <li itemprop="name"><a itemprop="url" href="/company/">О бюро</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/company/reviews/">Отзывы</a>
                                                </li>
                                                <li itemprop="name"><a itemprop="url" href="/company/documents/">Документы
                                                        НБКИ</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/company/secure/">Информационная
                                                        безопасность</a></li>
                                                <li itemprop="name"><a itemprop="url"
                                                        href="/privacy_rules/">Пользовательское соглашение</a></li>
                                                <li itemprop="name"><a itemprop="url"
                                                        href="/upload/iblock/5fa/muqsrd2n4cuyky63jz7wl1telgqzyppx.pdf">Политика
                                                        обработки данных</a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mainmenu__col">
                                    <div class="mainmenu__menu">
                                        <div class="mainmenu__title"><a>Информация</a></div>
                                        <div class="mainmenu__list">
                                            <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                                <li itemprop="name"><a itemprop="url" href="/contacts/">Контакты</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/company/news/">Новости</a>
                                                </li>
                                                <li itemprop="name"><a itemprop="url" href="/press/pressabout/">Пресса о
                                                        нас</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/faq/">Вопросы
                                                        и&nbsp;ответы</a>
                                                </li>
                                                <li itemprop="name"><a itemprop="url"
                                                        href="/poleznaya-informatsiya/">Полезная информация</a>
                                                </li>
                                                <li itemprop="name"><a itemprop="url" target="_blank"
                                                        href="//story.nbki.ru">Истории о кредитах</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="mainmenu__footer mainmenu__cols">

                            <div class="mainmenu__links">
                                <div class="mainmenu__title"><a href="https://person-new.nbki.ru" rel="nofollow"
                                        target="_blank" style="text-decoration: underline;">Войти в
                                        личный кабинет</a></div>
                                <div class="mainmenu__title"><a
                                        href="/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым управляющим</a></div>
                            </div><!-- /.mainmenu__links -->
                            <div class="mainmenu__phones">
                                <div class="phone"><span>Наш телефон в&nbsp;Москве:</span><a href="tel:84952217837">8 (495)
                                        221-78-37</a></div>
                                <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800)
                                        600-64-04</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="mainmenu__tabs onlymobile">
                        <div class="tabs" data-tabs="tabs_id">
                            <div class="tabs__header" data-tabsheader="tabs_id">
                                <div data-tabsbutton="tabs_id" class="tabs__nav active">
                                    Физлицам
                                </div>
                                <div data-tabsbutton="tabs_id" class="tabs__nav">Юрлицам</div>
                                <div data-tabsbutton="tabs_id" class="tabs__nav">B2B</div>
                                <div data-tabsbutton="tabs_id" class="tabs__nav tabs__nav_icon searchBtnMobile">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="9.5" cy="9.5" r="7" stroke="#0A0033" />
                                        <path
                                            d="M20.2927 21.2929C20.6833 21.6834 21.3164 21.6834 21.707 21.2929C22.0975 20.9024 22.0975 20.2692 21.707 19.8787L20.2927 21.2929ZM14.207 15.2071L20.2927 21.2929L21.707 19.8787L15.6212 13.7929L14.207 15.2071Z"
                                            fill="#0A0033" />
                                    </svg>

                                </div>
                            </div>

                            <div class="tabs__content active" data-tabscontent="tabs_id">

                                <div class="mainmenu__content mainmenu__content--mobile mainmenumob">
                                    <div class="mainmenu__mobilemenu">
                                        <ul>

                                            <li>
                                                <a href="/pkr/" class="">Персональный кредитный рейтинг</a>
                                            </li>
                                            <li>
                                                <a href="/nbki-history/" class="">Кредитная история</a>
                                            </li>

                                            <li>
                                                <a href="/zashchita-ot-moshennichestva/" class="">Защита от
                                                    мошенничества</a>
                                            </li>
                                            <li>
                                                <a href="/podpiska-na-credithistory/" class="">Подписка на&nbsp;кредитную
                                                    историю</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="accordmenu ">
                                        <div class="accordmenu__title js-accord"><span>Другие услуги</span></div>
                                        <div class="accordmenu__content">
                                            <ul class="allmenu__lvl1">
                                                <li itemprop="name"><a itemprop="url" href="/spor/">Оспорить кредитную
                                                        историю</a></li>
                                                <li itemprop="name"><a itemprop="url" href="/historylist/">ЦККИ и код
                                                        субъекта</a></li>
                                                <!-- <li itemprop="name"><a itemprop="url" href="/historylist/">Справка из
                                                    ЦККИ</a></li>
                                            <li itemprop="name"><a href="/code/">Действия с кодом субъекта</a></li> -->
                                            </ul>
                                        </div>
                                    </div><!-- /.accordmenu -->


                                    <div class="accordmenu">
                                        <div class="accordmenu__title js-accord"><span>О бюро</span></div>
                                        <div class="accordmenu__content">
                                            <ul class="allmenu__lvl1">
                                                <li><a href="/company/">О бюро</a></li>
                                                <li><a href="/company/news/">Новости</a></li>
                                                <li>
                                                    <a href="/company/documents/" class="">Документы НБКИ</a>
                                                </li>
                                                <li>
                                                    <a href="/company/rekvizit/" class="">Реквизиты</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.accordmenu -->

                                    <div class="mainmenu__mobilemenu">
                                        <ul>
                                            <li>
                                                <a href="//story.nbki.ru" target="_blank" class='extlink'>Истории о
                                                    кредитах</a>
                                            </li>
                                            <li>
                                                <a href="/calculator/" class="">Кредитный калькулятор</a>
                                            </li>
                                            <li>
                                                <a href="/faq/" class="">Вопросы и&nbsp;ответы</a>
                                            </li>
                                            <li>
                                                <a href="/contacts/" class="">Контакты</a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="mainmenumob__button mainmenumob__button_v5">
                                        <a href="https://person-new.nbki.ru" class="btn_main btn_main_v5"
                                            target="_blank">Войти в&nbsp;личный кабинет</a>
                                    </div><!-- /.mainmenumob -->


                                </div>

                            </div>

                            <div class="tabs__content" data-tabscontent="tabs_id">
                                <div class="mainmenu__content mainmenu__content--mobile mainmenumob">
                                    <div class="mainmenu__mobilemenu">
                                        <ul>
                                            <li>
                                                <a href="/judicial/svedeniya/" class="">Кредитная история</a>
                                            </li>
                                            <li>
                                                <a href="/judicial/spor/" class="">Оспорить кредитную историю</a>
                                            </li>
                                            <li>
                                                <a href="/judicial/historylist/" class="">ЦККИ и&nbsp;код субъекта</a>
                                            </li>
                                            <!-- 	<li>
                                                <a href="/judicial/historylist/" class="">Справка из&nbsp;ЦККИ</a>
                                            </li>
                                            <li>
                                                <a href="/judicial/code/" class="">Действия с кодом субъекта</a>
                                            </li> -->

                                        </ul>
                                    </div>


                                    <div class="accordmenu">
                                        <div class="accordmenu__title js-accord"><span>О бюро</span></div>
                                        <div class="accordmenu__content">
                                            <ul class="allmenu__lvl1">
                                                <li><a href="/company/">О бюро</a></li>
                                                <li><a href="/company/news/">Новости</a></li>
                                                <li>
                                                    <a href="/company/documents/" class="">Документы НБКИ</a>
                                                </li>
                                                <li>
                                                    <a href="/company/rekvizit/" class="">Реквизиты</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.accordmenu -->

                                    <div class="mainmenu__mobilemenu">
                                        <ul>

                                            <li>
                                                <a href="/faq/" class="">Вопросы и&nbsp;ответы</a>
                                            </li>
                                            <li>
                                                <a href="/contacts/" class="">Контакты</a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="mainmenumob__button mainmenumob__button_v5">
                                        <a href="/uslugi-dlya-finansovykh-upravlyayushchikh/" class="link_blue extlink"
                                            target="_blank">Финансовым управляющим</a>
                                    </div><!-- /.mainmenumob -->


                                </div>
                            </div>

                            <div class="tabs__content" data-tabscontent="tabs_id">
                                <div class="mainmenu__content mainmenu__content--mobile mainmenumob">
                                    <div class="mainmenu__mobilemenu">
                                        <ul>

                                            <li>
                                                <a href="/corp/" class="">Подробная информация</a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="accordmenu">
                                        <div class="accordmenu__title js-accord"><span>О бюро</span></div>
                                        <div class="accordmenu__content">
                                            <ul class="allmenu__lvl1">
                                                <li><a href="/company/">О бюро</a></li>
                                                <li><a href="/company/news/">Новости</a></li>
                                                <li>
                                                    <a href="/company/documents/" class="">Документы НБКИ</a>
                                                </li>
                                                <li>
                                                    <a href="/company/rekvizit/" class="">Реквизиты</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- /.accordmenu -->

                                    <div class="mainmenu__mobilemenu">
                                        <ul>

                                            <li>
                                                <a href="/contacts/" class="">Контакты</a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="mainmenumob__button mainmenumob__button_v5">

                                        <a href="#myModal_logincorp" data-toggle="modal"
                                            class="btn_main btn_main_v5 btn_main_v5border" target="_blank">Войти
                                            в&nbsp;личный кабинет</a>

                                        <a href="/corp/become-a-client/" class="btn_main btn_main_v5"
                                            target="_blank">Подключиться к НБКИ</a>
                                    </div><!-- /.mainmenumob -->


                                </div>
                            </div>
                            <div class="tabs__content" data-tabscontent="tabs_id">
                                <div class="search__full" itemscope itemtype="https://schema.org/WebSite">
                                    <meta itemprop="url" content="https://nbki.ru/" />
                                    <form action="/search/" itemprop="potentialAction" itemscope
                                        itemtype="https://schema.org/SearchAction">
                                        <div class="search__items">
                                            <meta itemprop="target" content="https://nbki.ru/search/?q={q}" />
                                            <div class="search_wrapper">
                                                <input itemprop="query-input" id="title-search-input_fixed_mobile"
                                                    class="search__input" type="text" name="q" placeholder="Что вы ищете?"
                                                    autocomplete='off'>
                                                <span class="search__button_close search__button_open search__button_clear">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_26350_208790" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="-1" y="-1" width="25" height="25">
                                                            <rect x="-0.0273438" y="-0.184082" width="24" height="24"
                                                                fill="#D9D9D9" />
                                                        </mask>
                                                        <g mask="url(#mask0_26350_208790)">
                                                            <path
                                                                d="M11.9727 12.8659L6.89765 17.9409C6.76432 18.0742 6.59365 18.1449 6.38565 18.1529C6.17698 18.1616 5.99765 18.0909 5.84765 17.9409C5.69765 17.7909 5.62265 17.6159 5.62265 17.4159C5.62265 17.2159 5.69765 17.0409 5.84765 16.8909L10.9226 11.8159L5.84765 6.74091C5.71432 6.60758 5.64365 6.43658 5.63565 6.22791C5.62698 6.01991 5.69765 5.84091 5.84765 5.69091C5.99765 5.54091 6.17265 5.46591 6.37265 5.46591C6.57265 5.46591 6.74765 5.54091 6.89765 5.69091L11.9727 10.7659L17.0477 5.69091C17.181 5.55758 17.352 5.48658 17.5606 5.47791C17.7687 5.46991 17.9477 5.54091 18.0977 5.69091C18.2477 5.84091 18.3227 6.01591 18.3227 6.21591C18.3227 6.41591 18.2477 6.59091 18.0977 6.74091L13.0227 11.8159L18.0977 16.8909C18.231 17.0242 18.3017 17.1949 18.3097 17.4029C18.3183 17.6116 18.2477 17.7909 18.0977 17.9409C17.9477 18.0909 17.7727 18.1659 17.5727 18.1659C17.3727 18.1659 17.1977 18.0909 17.0477 17.9409L11.9727 12.8659Z"
                                                                fill="#7B7794" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>

                                            <div class="search__buttons">
                                                <button class="search__submit btn_main" type="submit">


                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#fff"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <mask id="mask0_26537_2142" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                            <rect width="24" height="24" fill="#fff" />
                                                        </mask>
                                                        <g mask="url(#mask0_26537_2142)">
                                                            <path
                                                                d="M11.4504 19.0752C11.2664 18.892 11.1744 18.7044 11.1744 18.5124C11.1744 18.3212 11.258 18.1336 11.4252 17.9496L16.5996 12.8004H5.17438C4.97438 12.8004 4.79118 12.7212 4.62478 12.5628C4.45838 12.4044 4.37518 12.2168 4.37518 12C4.37518 11.7832 4.45838 11.5956 4.62478 11.4372C4.79118 11.2788 4.97438 11.1996 5.17438 11.1996H16.5996L11.4252 6.0744C11.258 5.8912 11.1744 5.6996 11.1744 5.4996C11.1744 5.2996 11.2664 5.108 11.4504 4.9248C11.6336 4.7584 11.8168 4.6752 12 4.6752C12.1832 4.6752 12.3664 4.7584 12.5496 4.9248L18.9252 11.3256C19.042 11.4248 19.1252 11.5328 19.1748 11.6496C19.2252 11.7664 19.2504 11.8832 19.2504 12C19.2504 12.1168 19.2252 12.2336 19.1748 12.3504C19.1252 12.4672 19.042 12.5752 18.9252 12.6744L12.5496 19.0752C12.3664 19.2416 12.1832 19.3248 12 19.3248C11.8168 19.3248 11.6336 19.2416 11.4504 19.0752Z"
                                                                fill="#fff" />
                                                        </g>
                                                    </svg>


                                                </button>

                                            </div>
                                        </div>
                                        <div class="search__results" data-entity="search-wrapper-mobile">
                                            <!-- изначально без active, но если найдется результат - добавляется класс active -->
                                            <div class="searchresults">
                                                <div class="searchresults__items" data-entity="search-result-mobile">
                                                </div><!-- /.searchresults__items -->
                                            </div><!-- /.searchresults -->
                                        </div><!-- /.search__results -->
                                    </form>
                                </div>
                                <div class="mainmenumob__button mainmenumob__button_v5">
                                    <a href="https://person-new.nbki.ru" class="btn_main btn_main_v5" target="_blank">Войти
                                        в&nbsp;личный кабинет</a>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.mainmenu__tabs -->

                </div>
                <div class="mobilemenu">
                    <span class="mobilemenuclose">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                            <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </span>
                    <div class="mobilemenu__wrapper">
                        <div class="mobilemenu__menu">
                            <ul>
                                <li class="mobilemenu__parent">О компании</li>
                                <li class="mobilemenu__parent">Информация</li>
                                <li class="mobilemenu__parent">Услуги</li>
                                <li class="mobilemenu__notparent"><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="mobilemenu__item">
                            <span class="mobilemenuclose">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </span>
                            <div class="mobilemenu__title">
                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 8L1 4.49999L4.99992 1" stroke="#7B7794" stroke-linecap="round" />
                                </svg>
                                <span>О компании</span>
                            </div>
                            <div class="mobilemenu__menu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                <div class="mainmenu__title mainmenu__title_nochild"><a href="/company/">О бюро</a></div>

                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="/company/documents/">Документы
                                        НБКИ</a></div>

                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="/company/rekvizit/">Реквизиты</a>
                                </div>
                                <div class="mainmenu__title mainmenu__title_nochild"><a href="/privacy_rules/">Политика
                                        конфиденциальности</a></div>
                            </div>
                        </div>
                        <div class="mobilemenu__item">
                            <span class="mobilemenuclose">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </span>
                            <div class="mobilemenu__title">
                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 8L1 4.49999L4.99992 1" stroke="#7B7794" stroke-linecap="round" />
                                </svg>
                                <span>Информация</span>
                            </div>
                            <div class="mobilemenu__menu" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="/company/news/">Новости</a>
                                </div>
                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="/press/pressabout/">Пресса
                                        о&nbsp;нас</a></div>
                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="/faq/">Вопросы и&nbsp;ответы</a>
                                </div>
                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="https://story.nbki.ru/">Истории
                                        о&nbsp;кредитах</a></div>
                                <div class="mainmenu__title mainmenu__title_nochild"><a
                                        href="/privacy_rules/">Пользовательское соглашение</a></div>
                                <div class="mainmenu__title mainmenu__title_nochild"><a href="">Карта сайта</a></div>
                                <div class="mainmenu__title mainmenu__title_nochild" itemprop="name"><a itemprop="url"
                                        href="/contacts/">Контакты</a>
                                </div>
                            </div>
                        </div>
                        <div class="mobilemenu__item">
                            <span class="mobilemenuclose">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 15L15 1" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                                    <path d="M1 1L15 15" stroke="#C2BFCC" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </span>
                            <div class="mobilemenu__title">
                                <svg width="6" height="9" viewBox="0 0 6 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 8L1 4.49999L4.99992 1" stroke="#7B7794" stroke-linecap="round" />
                                </svg>
                                <span>Услуги</span>
                            </div>
                            <div class="mobilemenu__menu">
                                <div class="mainmenu__title"><a href="">Услуги физическим лицам</a></div>
                                <div class="mainmenu__list">
                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                        <li itemprop="name"><a itemprop="url" href="/serviceszaem/pkr/">Узнать кредитный
                                                рейтинг</a></li>
                                        <li itemprop="name"><a itemprop="url" href="/nbki-history/">Получить кредитную
                                                историю</a></li>
                                        <li itemprop="name"><a itemprop="url" href="/serviceszaem/spor/">Оспорить кредитную
                                                историю</a></li>
                                        <li itemprop="name"><a itemprop="url" href="/historylist/">ЦККИ и&nbsp;код
                                                субъекта</a></li>
                                        <!-- <li itemprop="name"><a itemprop="url" href="/serviceszaem/historylist/">Получить
                                            сведения из&nbsp;ЦККИ</a></li>
                                    <li itemprop="name"><a itemprop="url" href="/serviceszaem/code/">Действия с кодом
                                            субъекта</a></li> -->
                                        <li itemprop="name"><a itemprop="url" href="/zashchita-ot-moshennichestva/">Защита
                                                от мошенничества</a></li>
                                        <li itemprop="name"><a itemprop="url" href="/podpiska-na-credithistory/">Подписка на
                                                кредитную историю</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mobilemenu__menu">
                                <div class="mainmenu__title"><a href="">Услуги юридическим лицам</a></div>
                                <div class="mainmenu__list">
                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                        <li itemprop="name"><a itemprop="url"
                                                href="/serviceszaem/svedeniya/yuridicheskim-litsam/">Получить
                                                кредитную
                                                историю</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="/serviceszaem/spor/juridical_person/">Оспорить кредитную
                                                историю</a>
                                        </li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="/serviceszaem/historylist/juridical_person/">Получить
                                                сведения из
                                                ЦККИ</a></li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="/serviceszaem/code/juridical_person/">Действия с кодом
                                                субъекта</a>
                                        </li>
                                        <li itemprop="name"><a itemprop="url"
                                                href="/serviceszaem/uslugi-dlya-finansovykh-upravlyayushchikh/">Финансовым
                                                управляющим</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mainmenu__menu">
                                <div class="mainmenu__title"><a href="">Корпоративным клиентам</a></div>
                                <div class="mainmenu__list">
                                    <ul itemscope itemtype="http://www.schema.org/SiteNavigationElement">
                                        <li itemprop="name"><a itemprop="url" href="/servicescredit/">Подробная
                                                информация</a></li>
                                        <li itemprop="name"><a itemprop="url" href="/i-want-to-become-a-client/form/">Стать
                                                клиентом НБКИ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobilemenu__links">
                            <a href="https://person-new.nbki.ru" target="_blank">Войти в&nbsp;личный кабинет</a><br><br>
                        </div>
                        <div class="mobilemenu__footer">
                            <div class="phones">
                                <div class="phone"><span>Наш телефон в&nbsp;Москве:</span><a href="tel:84952217837">8 (495)
                                        221-78-37</a></div>
                                <div class="phone"><span>Бесплатный звонок:</span><a href="tel:88006006404">8 (800)
                                        600-64-04</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
        <? endif; ?>
    </header>

    <?
    if ($APPLICATION->GetCurPage() == '/poleznaya-informatsiya/' && 1 == 2) { //$USER->IsAdmin() &&
        require_once 'wrappers/info/header.php';
    } else {
        if (WRAPPER && file_exists($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/wrappers/' . WRAPPER . '/header.php'))
            require_once 'wrappers/' . WRAPPER . '/header.php';
    }
    ?>
