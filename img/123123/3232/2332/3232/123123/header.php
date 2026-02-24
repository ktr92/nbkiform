<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset, Bitrix\Main\Localization\Loc, Bitrix\Main\Application, Bitrix\Main\Web\Uri, Bitrix\Main\Page\AssetLocation;
CJSCore::Init(["fx"]);
//CJSCore::Init(array('fx'));
Loc::loadMessages(__FILE__);

define("PATH_TO_404", "/404.php");

$request = Application::getInstance()->getContext()->getRequest();
$requestPage = $request->getRequestedPage();
//$protocol = $request->isHttps() ? "https://" : "http://";

$uriString = $request->getRequestUri();
$uri = new Uri($uriString);
$GetCurDir = $uri->getPath();

$arCurDir = explode("/", $GetCurDir);
$arCurDir = array_diff($arCurDir, array(''));

$isMain = $requestPage == SITE_DIR . "index.php";
$isInner = !$isMain;
?><!DOCTYPE html>
<html lang="<?= strtolower(LANGUAGE_ID) . '-' . strtoupper(LANGUAGE_ID) ?>"<?if($isMain){?> class="ovh"<?}?>>
<head>
	<meta charset="<?= SITE_CHARSET ?>">

    <? /* <link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> */ ?>


		<link rel="icon" type="image/svg+xml" href="/favicon.svg">

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

	<title><? $APPLICATION->ShowTitle(); ?></title>
	<link href="/local/templates/main/css/font.css" type="text/css"  rel="stylesheet" >
	<link href="/local/templates/main/css/slick.css" type="text/css"  rel="stylesheet" >
	<link  href="/local/templates/main/css/slick-theme.css" type="text/css"  rel="stylesheet" >
	<?
	$APPLICATION->ShowHead();

	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta name="format-detection" content="telephone=no">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta content="True" name="HandheldFriendly">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta name="theme-color" content="#000000">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta name="apple-mobile-web-app-status-bar-style" content="#2d2d2d">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta name="format-detection" content="telephone=no">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta name="format-detection" content="address=no">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<meta name="cmsmagazine" content="b4d68a10918ca63b83613c9455ee8757" >', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<link rel="preload" media="all" href="' . SITE_TEMPLATE_PATH . '/css/screen.min.css" as="style" onload="this.rel=\'stylesheet\'">', true, AssetLocation::AFTER_CSS);
	Asset::getInstance()->addString('<noscript><link rel="stylesheet" media="all" href="' . SITE_TEMPLATE_PATH . '/css/screen.min.css"></noscript>', true, AssetLocation::AFTER_CSS);
	// Asset::getInstance()->addString('<link rel="preload" media="all" href="' . SITE_TEMPLATE_PATH . '/css/custom.css" as="style" onload="this.rel=\'stylesheet\'">', true, AssetLocation::AFTER_CSS);
	// Asset::getInstance()->addString('<noscript><link rel="stylesheet" media="all" href="' . SITE_TEMPLATE_PATH . '/css/custom.css"></noscript>', true, AssetLocation::AFTER_CSS);
	Asset::getInstance()->addString('<link rel="icon" type="image/png" sizes="16x16" href="'.SITE_TEMPLATE_PATH.'/16x16.png">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'/favicon.ico" type="image/x-icon">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="57x57" href="'.SITE_TEMPLATE_PATH.'/images/57x57.png">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="72x72" href="'.SITE_TEMPLATE_PATH.'/72x72.png">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<link rel="apple-touch-icon" sizes="114x114" href="'.SITE_TEMPLATE_PATH.'/images/114x114.png">', true, AssetLocation::BEFORE_CSS);
	Asset::getInstance()->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/favicon.ico" type="image/x-icon">', true, AssetLocation::BEFORE_CSS);
	// Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/custom.css");

	$APPLICATION->IncludeFile(SITE_DIR . 'include/template/header_css.php', [], ["SHOW_BORDER" => false]);
	?>
	<?
	if (!empty($_REQUEST['PAGEN_1']) || !empty($_REQUEST['PAGEN_2'])) {
		echo '<link rel="canonical" href="https://hotelakvarel.ru'.$APPLICATION->GetCurDir().'">';
	}
	?>
	<? /* <script src="https://www.google.com/recaptcha/api.js?render=<?=G_SITE?>"></script> */ ?>

	<script data-skip-moving="true" type="text/javascript">
		function checkForFlex() {
			var curAddress = window.location.toString(),
				targetAddress = "<?=SITE_DIR?>old_browser.php";

			function NaiveFlexBoxSupport(d) {
				var f = "flex", e = d.createElement('b');
				e.style.display = f;
				return e.style.display == f;
			}

			if (document.addEventListener) {
			} else {
				window.location.replace(targetAddress);
			}
			if (NaiveFlexBoxSupport(document) == false && (targetAddress.toString() != curAddress)) {
				window.location.replace(targetAddress);
			}

		}
		checkForFlex();
	</script>
	<script data-skip-moving="true">
		!function (e) {
			"use strict";
			var t = function (t, n, r) {
				function o(e) {
					return i.body ? e() : void setTimeout(function () {
						o(e)
					})
				}

				function a() {
					d.addEventListener && d.removeEventListener("load", a), d.media = r || "all"
				}

				var l, i = e.document, d = i.createElement("link");
				if (n) l = n; else {
					var s = (i.body || i.getElementsByTagName("head")[0]).childNodes;
					l = s[s.length - 1]
				}
				var u = i.styleSheets;
				d.rel = "stylesheet", d.href = t, d.media = "only x", o(function () {
					l.parentNode.insertBefore(d, n ? l : l.nextSibling)
				});
				var f = function (e) {
					for (var t = d.href, n = u.length; n--;)if (u[n].href === t)return e();
					setTimeout(function () {
						f(e)
					})
				};
				return d.addEventListener && d.addEventListener("load", a), d.onloadcssdefined = f, f(a), d
			};
			"undefined" != typeof exports ? exports.loadCSS = t : e.loadCSS = t
		}("undefined" != typeof global ? global : this), function (e) {
			if (e.loadCSS) {
				var t = loadCSS.relpreload = {};
				if (t.support = function () {
						try {
							return e.document.createElement("link").relList.supports("preload")
						} catch (e) {
							return !1
						}
					}, t.poly = function () {
						for (var t = e.document.getElementsByTagName("link"), n = 0; n < t.length; n++) {
							var r = t[n];
							"preload" === r.rel && "style" === r.getAttribute("as") && (e.loadCSS(r.href, r, r.getAttribute("media")), r.rel = null)
						}
					}, !t.support()) {
					t.poly();
					var n = e.setInterval(t.poly, 300);
					e.addEventListener && e.addEventListener("load", function () {
						t.poly(), e.clearInterval(n)
					}), e.attachEvent && e.attachEvent("onload", function () {
						e.clearInterval(n)
					})
				}
			}
		}(this);
	</script>

    <?php
    $page_url = parse_url($_SERVER['REQUEST_URI']);
    $lang = 'ru';
    if (strpos($page_url['path'], '/en/') !== false ) : $lang = 'en'; endif;?>

  <link  media="all" href="/local/templates/main/css/tl-style.css" as="style" onload="this.rel='stylesheet'">



</head>
<body <?=($APPLICATION->GetCurDir()=="/auth/")?'class="auth"':''?>>
<script data-skip-moving="true" type="text/javascript">
	!function (e) {
		function t(o) {
			if (n[o])return n[o].exports;
			var c = n[o] = {exports: {}, id: o, loaded: !1};
			return e[o].call(c.exports, c, c.exports, t), c.loaded = !0, c.exports
		}

		var n = {};
		return t.m = e, t.c = n, t.p = "/assets/", t(0)
	}({
		0: function (e, t, n) {
			n(18), n(19)
		}, 18: function (e, t) {
			!function () {
				"use strict";
				function e(e, t, n) {
					e.addEventListener ? e.addEventListener(t, n, !1) : e.attachEvent && e.attachEvent("on" + t, n)
				}

				function t(e) {
					return window.localStorage && localStorage.font_css_cache
				}

				function n() {
					if (window.localStorage && window.XMLHttpRequest)if (t(c)) o(localStorage.font_css_cache); else {
						var e = new XMLHttpRequest;
						e.open("GET", c, !0), e.onreadystatechange = function () {
							4 === e.readyState && (o(e.responseText), localStorage.font_css_cache = e.responseText, localStorage.font_css_cache_file = c)
						}, e.send()
					} else {
						var n = document.createElement("link");
						n.href = c, n.rel = "stylesheet", n.type = "text/css", document.getElementsByTagName("head")[0].appendChild(n), document.cookie = "font_css_cache"
					}
				}

				function o(e) {
					var t = document.createElement("style");
					t.setAttribute("type", "text/css"), t.styleSheet ? t.styleSheet.cssText = e : t.innerHTML = e, document.getElementsByTagName("head")[0].appendChild(t), window.onFontLoad && window.onFontLoad()
				}

				var c = window.fonts_href || "/local/templates/main/css/font.css";
				window.localStorage && localStorage.font_css_cache || document.cookie.indexOf("font_css_cache") > -1 ? n() : e(window, "load", n)
			}()
		}, 19: function (e, t) {
		}
	});
</script>
<?
$APPLICATION->IncludeFile(SITE_DIR . 'include/template/svg_defs.php', [], ["SHOW_BORDER" => false]);
?>
<!--BEGIN out-->
<div class="out">
	<div class="page__outer">
		<div class="page__wrapper">
			<header class="page__header--wrap">

					<div id="my-panel"><? $APPLICATION->ShowPanel(); ?></div>
					<script>
						BX.ready(function () {
							var MyPanel = BX("my-panel"),
								BxPanel = BX.admin.panel,
								FxPanel = function () {
									if (window.pageYOffset >= BxPanel.DIV.clientHeight && BxPanel.isFixed() === false) {
										MyPanel.style.top = 0;
									} else if (BxPanel.isFixed() === true) {
										MyPanel.style.top = BxPanel.DIV.clientHeight + "px";
									} else {
										MyPanel.style.top = BxPanel.DIV.clientHeight - window.pageYOffset + "px";
									}
								};
							if (!!MyPanel) {
								FxPanel();
								window.onscroll = FxPanel;
								BX.addCustomEvent('onTopPanelCollapse', BX.delegate(FxPanel, this));
								BX.addCustomEvent('onTopPanelFix', BX.delegate(FxPanel, this));
							}
						});
					</script>

				<div class="page__header cd-auto-hide-header<? if (stristr($GetCurDir, '/booking/')) { ?> is-hidden<? } ?>">
					<div class="header-row">
						<div class="header-row-left">
							<div class="header-btn-wrap js-menu">
								<div class="header-btn-inner">
									<div class="navTrigger"><i></i><i></i><i></i><i></i></div>
								</div>
							</div>
							<? $APPLICATION->IncludeComponent("bitrix:main.site.selector", "selector", Array(
								"CACHE_TIME" => "3600",    // Время кеширования (сек.)
								"CACHE_TYPE" => "A",    // Тип кеширования
								"SITE_LIST"  => array(    // Список сайтов
								                          0 => "s1",
								                          1 => "s2",
								)
							), false); ?>
						</div>
						<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/main_logo.php', Array("IS_MAIN" => $isMain), Array(
								"MODE"        => "php",
								"SHOW_BORDER" => true,
								"NAME"        => "logo",
								'TEMPLATE'    => 'default.php'
							)); ?>
						<div class="header-row-right">
							<div class="header-tel-wrapper">
								<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/header_phone.php', Array(), Array(
										"MODE"        => "php",
										"SHOW_BORDER" => true,
										"NAME"        => "header phone",
										'TEMPLATE'    => 'default.php'
									)); ?>
							</div>
							<div class="bron-wrapper">
								<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/booking_btn.php', [], [
									"SHOW_BORDER" => true,
									"MODE"        => "php"
								]); ?>
							</div>
							<div class="bron-wrapper prog-wrapper">
<!-- // Программа лояльности  -->
<!--
								<a class="bron-inner" href="//loyalty.hotelakvarel.ru/login" target="_blank">
										<div class="bron-img">
											<div class="bron-img-inner colored">
												<img src="/local/templates/main/images/discount-on-payment-svgrepo-com.svg" alt="">
											</div>
											<div class="bron-img-inner mono">
											<svg viewBox="4774.89 5814.47 13520.199 12038.529" width="13520.199" height="12038.529" xmlns="http://www.w3.org/2000/svg">
  <defs>

  </defs>
  <g id="Слой_x0020_1">
    <g id="_2237424638896">
      <g>
        <path class="fil0" d="M17249.98 5814.47l-11429.99 0c-576.26,0 -1045.1,468.84 -1045.1,1045.1l0 6773.32c0,576.27 468.84,1045.11 1045.1,1045.11l4233.33 0c109.59,0 198.44,-88.85 198.44,-198.44 0,-109.59 -88.85,-198.44 -198.44,-198.44l-4233.33 0.01c-357.43,0 -648.23,-290.81 -648.23,-648.23l0 -6773.32c0,-357.43 290.8,-648.24 648.23,-648.24l11429.99 0c357.43,0 648.23,290.8 648.23,648.23l0 6773.32c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44l0 -6773.32c-0.01,-576.26 -468.85,-1045.1 -1045.11,-1045.1z"/>
        <path class="fil0" d="M10264.99 12799.47l-3810 0c-109.59,0 -198.44,88.84 -198.44,198.43 0,109.59 88.85,198.44 198.44,198.44l3810 -0.01c109.59,0 198.44,-88.85 198.44,-198.44 0,-109.59 -88.85,-198.42 -198.44,-198.42z"/>
        <path class="fil0" d="M8770.09 9187.91l0 -846.67c0,-342.85 -278.92,-621.77 -621.77,-621.77l-1270 0c-342.84,0 -621.77,278.92 -621.77,621.77l0 846.67c0,342.85 278.92,621.77 621.77,621.77l1270 0c342.85,0 621.77,-278.93 621.77,-621.77zm-2116.66 0l0 -224.9 224.89 0c109.59,0 198.44,-88.85 198.44,-198.44 0,-109.59 -88.85,-198.44 -198.44,-198.44l-224.89 0.01 0 -224.9c0,-124.01 100.89,-224.9 224.9,-224.9l436.56 0 0 1296.46 -436.57 0c-124.01,0 -224.89,-100.88 -224.89,-224.89zm1494.89 224.89l-436.56 0 0 -1296.46 436.56 0c124.01,0 224.9,100.89 224.9,224.9l0 224.9 -224.9 0c-109.59,0 -198.44,88.85 -198.44,198.44 0,109.59 88.85,198.44 198.44,198.44l224.9 -0.01 0 224.9c0,124.01 -100.89,224.89 -224.9,224.89z"/>
        <path class="fil0" d="M6256.55 11727.91c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44l0 423.33z"/>
        <path class="fil0" d="M6891.55 11304.57l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44z"/>
        <path class="fil0" d="M7526.55 11304.57l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44z"/>
        <path class="fil0" d="M8161.55 11304.57l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44z"/>
        <path class="fil0" d="M9405.09 11727.91l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44z"/>
        <path class="fil0" d="M10040.09 11727.91l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44z"/>
        <path class="fil0" d="M10476.66 11106.14c-109.59,0 -198.44,88.85 -198.44,198.44l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44l0 -423.33c-0.01,-109.6 -88.85,-198.44 -198.44,-198.44z"/>
        <path class="fil0" d="M11310.09 11727.91l0 -423.33c0,-109.59 -88.85,-198.44 -198.44,-198.44 -109.59,0 -198.44,88.85 -198.44,198.44l0 423.33c0,109.59 88.85,198.44 198.44,198.44 109.59,0 198.44,-88.85 198.44,-198.44z"/>
        <path class="fil0" d="M15768.31 9809.68c576.26,0 1045.1,-468.84 1045.1,-1045.1 0,-576.26 -468.83,-1045.11 -1045.1,-1045.11l-1270 0c-576.26,0 -1045.1,468.84 -1045.1,1045.1 0,576.26 468.84,1045.1 1045.1,1045.1l1270 0.01zm-1918.23 -1045.11c0,-357.43 290.8,-648.23 648.23,-648.23l1270 0c357.43,0 648.23,290.8 648.23,648.23 0,357.43 -290.8,648.23 -648.23,648.23l-1270 0c-357.42,0 -648.23,-290.8 -648.23,-648.23z"/>
        <path class="fil0" d="M14074.98 11106.14c-1860.13,0 -3373.43,1513.31 -3373.43,3373.42 0,1860.12 1513.3,3373.44 3373.43,3373.44 1860.13,0 3373.44,-1513.31 3373.44,-3373.44 0,-1860.12 -1513.31,-3373.42 -3373.44,-3373.42zm0 6349.99c-1641.29,0 -2976.55,-1335.28 -2976.55,-2976.57 0,-1641.29 1335.26,-2976.55 2976.55,-2976.55 1641.29,0 2976.56,1335.26 2976.56,2976.55 0,1641.29 -1335.27,2976.57 -2976.56,2976.57z"/>
        <path class="fil0" d="M15696.96 12857.59c-77.5,-77.49 -203.15,-77.49 -280.62,0l-2963.33 2963.33c-77.5,77.5 -77.5,203.15 0,280.62 38.74,38.74 89.54,58.13 140.31,58.13 50.77,0 101.57,-19.37 140.31,-58.13l2963.33 -2963.33c77.49,-77.47 77.49,-203.15 0,-280.62z"/>
        <path class="fil0" d="M13122.48 14254.67c517.92,0 939.27,-421.35 939.27,-939.27 0,-517.91 -421.35,-939.26 -939.27,-939.26 -517.92,0 -939.27,421.34 -939.27,939.26 0,517.93 421.35,939.27 939.27,939.27zm0 -1481.66c299.09,0 542.4,243.3 542.4,542.39 0,299.09 -243.31,542.4 -542.4,542.4 -299.09,0 -542.4,-243.31 -542.4,-542.4 0,-299.09 243.32,-542.39 542.4,-542.39z"/>
        <path class="fil0" d="M15239.15 14492.79c-517.92,0 -939.27,421.35 -939.27,939.27 0,517.92 421.35,939.27 939.27,939.27 517.92,0 939.27,-421.35 939.27,-939.27 0,-517.92 -421.35,-939.27 -939.27,-939.27zm0 1481.67c-299.09,0 -542.4,-243.31 -542.4,-542.4 0,-299.09 243.31,-542.4 542.4,-542.4 299.09,0 542.4,243.31 542.4,542.4 0,299.09 -243.32,542.4 -542.4,542.4z"/>
      </g>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
      <g/>
    </g>
  </g>
</svg>
											</div>
										</div>
										<div class="bron-text">Программа лояльности</div>
									</a>
-->
<!-- Программа лояльности // -->

								</div>
						</div>
					</div>
					<div class="header-menu-wrap">
						<div class="header-menu-inner">
							<div class="header-menu-content">
								<div class="header-menu-head">
									<div class="header-row">
										<div class="header-row-left">
											<? $APPLICATION->IncludeComponent("bitrix:main.site.selector", "selector", Array(
												"CACHE_TIME" => "3600",    // Время кеширования (сек.)
												"CACHE_TYPE" => "A",    // Тип кеширования
												"SITE_LIST"  => array(    // Список сайтов
												                          0 => "s1",
												                          1 => "s2",
												)
											), false); ?>
										</div>
										<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/menu_logo.php', Array("IS_MAIN" => $isMain), Array(
												"MODE"        => "php",
												"SHOW_BORDER" => true,
												"NAME"        => "logo",
												'TEMPLATE'    => 'default.php'
											)); ?>
										<div class="header-row-right">
											<div class="bron-wrapper">
												<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/booking_menu_btn.php', [], [
													"SHOW_BORDER" => true,
													"MODE"        => "php"
												]); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="header-menu-content-inner">
									<? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
										"COMPONENT_TEMPLATE"    => ".default",
										"ROOT_MENU_TYPE"        => "top",
										// Тип меню для первого уровня
										"MENU_CACHE_TYPE"       => "A",
										// Тип кеширования
										"MENU_CACHE_TIME"       => "3600",
										// Время кеширования (сек.)
										"MENU_CACHE_USE_GROUPS" => "N",
										// Учитывать права доступа
										"MENU_CACHE_GET_VARS"   => "",
										// Значимые переменные запроса
										"MAX_LEVEL"             => "1",
										// Уровень вложенности меню
										"CHILD_MENU_TYPE"       => "left",
										// Тип меню для остальных уровней
										"USE_EXT"               => "N",
										// Подключать файлы с именами вида .тип_меню.menu_ext.php
										"DELAY"                 => "N",
										// Откладывать выполнение шаблона меню
										"ALLOW_MULTI_SELECT"    => "N",
										// Разрешить несколько активных пунктов одновременно
										"2COL"                  => "Y"
									), false); ?>
									<div class="site-tel">
										<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/site_phone.php', Array(), Array(
												"MODE"        => "php",
												"SHOW_BORDER" => true,
												"NAME"        => "site phone",
												'TEMPLATE'    => 'default.php'
											)); ?>
										<a class="site-tel-calback js-popup-button"
												href="#"
												data-modal="callback"><?= GetMessage("CALLBACK_BUTTON") ?></a>

									</div>
									<div class="site-address">
										<? $APPLICATION->IncludeFile(SITE_DIR . 'include/template/site_address.php', Array(), Array(
												"MODE"        => "php",
												"SHOW_BORDER" => true,
												"NAME"        => "site address",
												'TEMPLATE'    => 'default.php'
											)); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<main class="page__content">
				<? if (!$isMain && !defined("ERROR_404") && !stristr($GetCurDir, '/booking/')){ ?>
					<div class="wrapper">
						<div class="box page-head<? if ($APPLICATION->GetDirProperty("header_small") != "Y") { ?> full<? } ?>">
							<div class="page-head-inner">
								<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "custom_breadcrumb", Array(), false); ?>
								<?
								$title_image = $APPLICATION->GetDirProperty("title_img");
								$title_image = $title_image ? '<i><img src="' . $title_image . '"></i>' : '';
								?>
								<h1 class="title h1 white animate-up"><? $APPLICATION->ShowTitle(false); ?><?= $title_image ?></h1>
							</div>
						</div>
						<div class="page-cover">
							<?
							$header_image = $APPLICATION->GetDirProperty("header_img");
							$header_image = $header_image ?: SITE_TEMPLATE_PATH . '/img/pagehead/h1.jpg';

							$header_image_retina = $APPLICATION->GetDirProperty("header_img_retina");
							$header_image_retina = $header_image_retina ?: SITE_TEMPLATE_PATH . '/img/pagehead/h1.jpg';

							$header_image_mob = $APPLICATION->GetDirProperty("header_img_mob");
							$header_image_mob = $header_image_mob ?: SITE_TEMPLATE_PATH . '/img/pagehead/h1.jpg';
							?>
							<!--<div class="page-cover-inner animate-bg head"
									style="background-image: url(<?= $header_image ?>);"></div>-->

                <div class="page-cover-inner animate-bg">
                  <picture>
                    <source media="(max-width: 768px)" type="image/jpg" srcset="<?= $header_image ?>">
                    <source type="image/jpg" srcset="<?= $header_image ?>, <?= $header_image_retina ?> 2x">
					<img class="fit-image" src="<?= $header_image_mob ?>" alt="<?=$APPLICATION->GetDirProperty("header_img_alt");?>">
                  </picture>
                </div>


						</div>
					</div>
				<? }elseif (defined("ERROR_404")){ ?>
				<div class="wrapper page-404">
					<div class="box page-head full">
						<div class="page-head-inner">
							<? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "custom_breadcrumb", Array(), false); ?>
							<h1 class="title h1 white animate-up"><? $APPLICATION->ShowTitle(false); ?></h1>
							<div class="page-inner-image animate-up"
									style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/img/404.png);"></div>
						</div>
					</div>
					<div class="page-cover">
						<div class="page-cover-inner"></div>
					</div>
				</div>
<? } ?>
