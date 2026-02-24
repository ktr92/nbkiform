<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Page\Asset,
	Bitrix\Main\Page\AssetLocation;
?>			<?if(!$isMain){?>
				<?
				$img = $APPLICATION->GetDirProperty("readmore_image");
				$link = $APPLICATION->GetDirProperty("readmore_link");
				$link = substr_replace($link, SITE_DIR, 0, 1);
				$name = $APPLICATION->GetDirProperty("readmore_name");
				?>
				<?if(!empty($img) && !empty($link) && !empty($name)){?>
					<div class="wrapper blk">
						<a class="btn-next" href="<?=$link?>">
							<div class="btn-next-inner" style="background-image: url(<?=$img?>);">
								<div class="btn-next-content">
									<div class="text-sm"><?=GetMessage("NEXT_PAGE")?>:</div>
									<div class="title h3 white"><?=$name?></div>
									<div class="line-cont">
										<div class="line-cutter">
											<div class="line-element"><img src="<?=SITE_TEMPLATE_PATH?>/img/icons/line.svg" alt=""></div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?}?>
			<?}?>
			</main>
			<footer class="page__footer">
			<?if($isMain) {
				ob_start();
			}?>
				<div class="wrapper blk footer">
					<div class="page-cover">
						<div class="page-cover-inner animate-bg" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/stolesh.svg);"></div>
					</div>
					<div class="box footer-main">
						<div class="footer-main-inner">
							<div class="footer-main-content">
								<div class="site-tel">
									<?$APPLICATION->IncludeFile(
										SITE_DIR.'include/template/site_phone.php',
										Array(),
										Array("MODE"=>"php", "SHOW_BORDER" => true, "NAME" => "site phone", 'TEMPLATE' => 'default.php')
									);?>
									<a class="site-tel-calback js-popup-button" href="#" data-modal="callback"><?=GetMessage("CALLBACK_BUTTON")?></a>
								</div>
								<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", Array(
									"COMPONENT_TEMPLATE" => ".default",
									"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
									"MENU_CACHE_TYPE" => "A",	// Тип кеширования
									"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
									"MENU_CACHE_USE_GROUPS" => "N",	// Учитывать права доступа
									"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
									"MAX_LEVEL" => "1",	// Уровень вложенности меню
									"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
									"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
									"DELAY" => "N",	// Откладывать выполнение шаблона меню
									"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
									"2COL" => "N",
								    "SOCIAL_LINK" => "Y"
								),
									false
								);?>
								<div class="site-address">
									<?$APPLICATION->IncludeFile(
										SITE_DIR.'include/template/site_address.php',
										Array(),
										Array("MODE"=>"php", "SHOW_BORDER" => true, "NAME" => "site address", 'TEMPLATE' => 'default.php')
									);?>
								</div>
							</div>
						</div>
					</div>

					<div class="footer-footer">
						<div class="footer-footer-inner">
							<div class="footer-footer-copy">
								<div class="text-sm">© 2017<?= (date('Y')!='2017') ? '–'.date('Y') : '';?>, Hotel Akvarel</div>
							</div>
							<div class="footer-footer-links">
								<?$APPLICATION->IncludeFile(
									SITE_DIR.'include/template/footer_links.php',
									Array(),
									Array("MODE"=>"php", "SHOW_BORDER" => true, "NAME" => "footer links", 'TEMPLATE' => 'default.php')
								);?>
							</div>
							<div class="footer-footer-dev">
								<?$APPLICATION->IncludeFile(
									SITE_DIR.'include/template/branding.php',
									Array(),
									Array("MODE"=>"php", "SHOW_BORDER" => true, "NAME" => "branding", 'TEMPLATE' => 'default.php')
								);?>
								<div class="text-sm">Website: <a href="https://flex.media/">FLEX.MEDIA</a></div>
							</div>
						</div>
					</div>
				</div>
			<?if($isMain) {
			$footer = ob_get_clean();
			$APPLICATION->AddViewContent('footer_content',$footer);
			}?>
			</footer>
		</div>
	</div>
</div>

<!--WhatsAPP-->
<style>
    .wh-up{
        display: block;
        width: 36px;
        height: 37px;
        background: url(/local/templates/main/img/watsapp-ico.png) no-repeat 0 0;
        position: fixed;
        right: 20px;
        bottom: 100px;
        z-index: 100;
    }
</style>
<a class="wh-up" href="https://wa.me/79197600297"></a>
<!--END WhatsAPP-->

<div class="modals">
	<?$APPLICATION->ShowViewContent('offer_form');?>
	<div class="modal-layout js-popup-container" data-modal="feedback">
		<div class="modal-container">
			<div class="modal-container-inner">
				<div class="modal-container-header">
					<div class="header-btn-wrap active closePopup">
						<div class="header-btn-inner">
							<div class="navTrigger"><i></i><i></i><i></i><i></i></div>
						</div>
					</div>
				</div>
				<?$APPLICATION->IncludeFile(SITE_DIR.'include/form/feedback.php', [], ["MODE"=>"php", "SHOW_BORDER" => false]);?>
			</div>
		</div>
	</div>
	<div class="modal-layout js-popup-container" data-modal="callback">
		<div class="modal-container">
			<div class="modal-container-inner">
				<div class="modal-container-header">
					<div class="header-btn-wrap active closePopup">
						<div class="header-btn-inner">
							<div class="navTrigger"><i></i><i></i><i></i><i></i></div>
						</div>
					</div>
				</div>
				<?$APPLICATION->IncludeFile(SITE_DIR.'include/form/callback.php', [], ["MODE"=>"php", "SHOW_BORDER" => false]);?>
			</div>
		</div>
	</div>
	<div class="modal-layout js-popup-container" data-modal="bron">
		<div class="modal-container">
			<div class="modal-container-inner">
				<div class="modal-container-header">
					<div class="header-btn-wrap active closePopup">
						<div class="header-btn-inner">
							<div class="navTrigger"><i></i><i></i><i></i><i></i></div>
						</div>
					</div>
				</div>
				<div class="modal-container-content">
					<div class="modal-container-content-inner">
						<div class="modal-title title h3 white"><?=GetMessage("BOOKING_FORM_TITLE")?></div>
						<div class="widget-wrapper">
              <div id="tl-search-form-second"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-layout js-popup-container" data-modal="review">
		<div class="modal-container">
			<div class="modal-container-inner">
				<div class="modal-container-header">
					<div class="header-btn-wrap active closePopup">
						<div class="header-btn-inner">
							<div class="navTrigger"><i></i><i></i><i></i><i></i></div>
						</div>
					</div>
				</div>
				<?$APPLICATION->IncludeFile(SITE_DIR.'include/form/review.php', [], ["MODE"=>"php", "SHOW_BORDER" => false]);?>
			</div>
		</div>
	</div>
</div>
<!--END out-->
<div itemscope itemtype="http://schema.org/Organization" style="display: none">
	<span itemprop="name">Akvarel hotel</span>
	Контакты:
	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		Адрес:
		<span itemprop="streetAddress">м. Театральная, Столешников пер., 12/3</span>
		<span itemprop="addressLocality">Москва</span>,
	</div>
	Телефон:<span itemprop="telephone">+7 919 760 02 97</span>,
	Электронная почта: <span itemprop="email">reservations@hotelakvarel.ru</span>
</div>
<script rel="preload"  src="/local/templates/main/js/slick.min.js"></script>

<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/lib.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/common.js", true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js", true);
Asset::getInstance()->addString('<script defer="" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCrSuRWj5M1D3UZTK-LjGK2FBq4kC86GUk&callback=initMap&language='.LANGUAGE_ID.'"></script>', true, AssetLocation::AFTER_JS);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.form-validator.min.js", true);
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/logic.js", true);
/* Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.60/jquery.form-validator.min.js"></script>', true, AssetLocation::AFTER_JS);
Asset::getInstance()->addString('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.60/logic.js"></script>', true, AssetLocation::AFTER_JS); */
?>
 <!-- start TL head script -->
 <script>

    (function(w){
      var q=[
        ['setContext', 'TL-INT-hotelakvarel', '<?php echo $lang?>']
      ];
      var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
      if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
    })(window);

  </script>
  <!-- end TL head script -->

<!-- Yandex.Metrika counter -->
<script>
	setTimeout(() => {
		(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45277557 = new Ya.Metrika({ id:45277557, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");
	}, 3000);
</script>

 <noscript><div><img src="https://mc.yandex.ru/watch/45277557" style="position:absolute; left:-9999px;" alt="" ></div></noscript> 


<!-- calltouch -->
<script>
	setTimeout(() => {
		(function(w,d,n,c){w.CalltouchDataObject=n;w[n]=function(){w[n]["callbacks"].push(arguments)};if(!w[n]["callbacks"]){w[n]["callbacks"]=[]}w[n]["loaded"]=false;if(typeof c!=="object"){c=[c]}w[n]["counters"]=c;for(var i=0;i<c.length;i+=1){p(c[i])}function p(cId){var a=d.getElementsByTagName("script")[0],s=d.createElement("script"),i=function(){a.parentNode.insertBefore(s,a)},m=typeof Array.prototype.find === 'function',n=m?"init-min.js":"init.js";s.type="text/javascript";s.async=true;s.src="https://mod.calltouch.ru/"+n+"?id="+cId;if(w.opera=="[object Opera]"){d.addEventListener("DOMContentLoaded",i,false)}else{i()}}})(window,document,"ct","l63ks6kj");
	

jQuery(document).ready(function(){
jQuery('button[type="submit"]').click(function() {
			var m = jQuery(this).closest('form');
			var ct_fio = m.find('input[name="FIELDS[NAME]"]').val();
			var ct_phone = m.find('input[name="FIELDS[PHONE]"]').val();
			var ct_site_id = '50757';
			var ct_sub = 'Заявка с ' + location.hostname;
			var ct_data = {
				fio: ct_fio,
				phoneNumber: ct_phone,
				subject: ct_sub,
				requestUrl: location.href,
				sessionId: window.call_value
			};
			if (!!ct_fio && !!ct_phone && window.ct_snd_flag != 1){
			window.ct_snd_flag = 1; setTimeout(function(){ window.ct_snd_flag = 0; }, 20000);
				jQuery.ajax({
					url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
					dataType: 'json', type: 'POST', data: ct_data, async: false
				});
			}
		});
		});
	}, 3000);
</script>
<!-- calltouch -->
<?php
$url  = '/';
if (isset($_SERVER['REQUEST_URI'])) {
  $url  = $_SERVER['REQUEST_URI'];
}
$page_main_search  = parse_url($_SERVER['REQUEST_URI']);
if (($page_main_search ['path'] !== "/booking") && ($page_main_search ['path'] !== "/booking/")) : ?>




<!-- BEGIN JIVOSITE CODE -->
<script>
	setTimeout(() => {
		(function(){ var widget_id = 'IFWALtr8Tz';var d=document;var w=window;function l(){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
	}, 5000);
</script>

<!-- END JIVOSITE CODE -->
<?php endif; ?>

  <!-- Facebook Pixel Code -->
<!-- 	<script>
setTimeout(() => {
		
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1993027080962812');
fbq('track', 'PageView');
	}, 3500);

</script> -->
<!-- <noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=1993027080962812&ev=PageView
&noscript=1"/>
</noscript> -->
<!-- End Facebook Pixel Code -->


<script>

	var __cs = __cs || [];
__cs.push(["setCsAccount", "c4sy7DCLPqsx1ci_anAyK3_6WqXlp_ek"]);

</script>
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>

<?php
    $url  = '/';
    if (isset($_SERVER['REQUEST_URI'])) {
        $url  = $_SERVER['REQUEST_URI'];
    }
    $page_main_search  = parse_url($_SERVER['REQUEST_URI']);
    if (($page_main_search ['path'] !== "/booking") && ($page_main_search ['path'] !== "/booking/")) : ?>
        <!-- start TL Search form script -->
        <script type="text/javascript">
            (function(w){
                var q=[
                    ['setContext', 'TL-INT-hotelakvarel', '<?php echo strtolower(LANGUAGE_ID); ?>'],
                    ['embed', 'search-form', {container: 'tl-search-form'}],
                    ['embed', 'search-form', {container: 'tl-search-form-second'}],
                    ['embed', 'search-form', {container: 'tl-search-form-main'}]
                ];
                var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
                if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
            })(window);
        </script>
        <!-- end TL Search form script -->
    <?php endif; ?>



</body>
</html>
