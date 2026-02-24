<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "В поисках хорошей гостиницы? Рекомендуем номера отличного отеля «Акварель», расположенного недалеко от Красной площади. Комфортабельные дизайнерские номера! Быстрый доступ к метро. Выгодные спецпредложения! Возможно онлайн-бронирование на сайте или по: ☎ +7 (495) 502-94-30");
$APPLICATION->SetPageProperty("title", "Забронировать самостоятельно отель в центре Москвы – «Акварель»                ");
$APPLICATION->SetTitle("Забронировать гостиницу в центре Москвы");
?>
    <style>
    .btn-next-inner, .site-tel, .bron-wrapper {
      display: none !important;
    }
  </style>
<div class="wrapper blk book-block block-booking">
	<div class="box">
		<div class="title-booking">
			<h1>Бронирование</h1>
		</div>
		 <!-- start booking form 2.0 -->
		<div id="tl-booking-form">
			 &nbsp;
		</div>
		 <script type="text/javascript">
		window.dataLayer = window.dataLayer || [];
		if(typeof ga == "function"){	
			ga('require', 'ecommerce', 'ecommerce.js'); // Load the ecommerce plug-in.
		}
		function bookingStepChanged(data){
			switch (data.step) {
				case "search" :
					if(typeof yaCounter45277557 == "object"){
						yaCounter45277557.reachGoal('shag_1');
					}
					if(typeof ga == "function"){
						/*ga('send', 'event', 'shag_1', 'otpravit');*/
						ga('send', 'pageview', '/shag_1');
					}
				break;
				case "preview" :
					if(typeof yaCounter45277557 == "object"){
						yaCounter45277557.reachGoal('shag_2');
					}
					if(typeof ga == "function"){
						/*ga('send', 'event', 'shag_2', 'otpravit');*/
						ga('send', 'pageview', '/shag_2');
					}
				break;
				case "payment" :
					if(typeof yaCounter45277557 == "object"){
						yaCounter45277557.reachGoal('shag_3');
					}
					if(typeof ga == "function"){
						/*ga('send', 'event', 'shag_3', 'otpravit');*/
						ga('send', 'pageview', '/shag_3');
					}
				break;
				case "complete" :
					if(typeof yaCounter45277557 == "object"){
						yaCounter45277557.reachGoal('shag_4');
					}
					if(typeof ga == "function"){
						/*ga('send', 'event', 'shag_4', 'otpravit');*/
						ga('send', 'pageview', '/shag_4');
					}
				break;
			}
		}
function bookingSuccess(data) {
    console.log(data);
    try {
        var fio = ''; var phone = ''; var email = ''; var comment = '';
        try{ if (typeof(data.roomTypes[0].guests[0].name)=='string') fio = data.roomTypes[0].guests[0].name; } catch(e){ console.log(e); }
        try{ if (typeof(data.customerPhone)=='string') phone = data.customerPhone; } catch(e){ console.log(e); }
        try{ if (typeof(data.customerPhone.phone)=='string') phone = data.customerPhone.phone; } catch(e){ console.log(e); }
        try{ if (typeof(data.customerEmail)=='string') email = data.customerEmail; } catch(e){ console.log(e); }
        var ct_site_id = '50757';
        var sub = 'Бронь Travelline ';
        try{ comment += data.bookingNumber; } catch(e){ console.log(e); }
        var ct_data = {
            fio: fio,
            phoneNumber: phone,
            email: email,
            subject: sub,
            comment: comment,
            requestUrl: location.href,
            sessionId: window.call_value
        };
        $.ajax({
            url: 'https://api.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
            dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    } catch(e){ console.log(e); }
}

        (function(w){
          var q=[
            ['setContext', 'TL-INT-hotelakvarel', 'ru'],
            ['embed', 'booking-form', {container: 'tl-booking-form', onBookingStepChanged: bookingStepChanged, onBookingSuccess: bookingSuccess}]
          ];
          var t=w.travelline=(w.travelline||{}),ti=t.integration=(t.integration||{});ti.__cq=ti.__cq?ti.__cq.concat(q):q;
          if (!ti.__loader){ti.__loader=true;var d=w.document,p=d.location.protocol,s=d.createElement('script');s.type='text/javascript';s.async=true;s.src=(p=='https:'?p:'http:')+'//ibe.tlintegration.com/integration/loader.js';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(s);}
        })(window);
      </script> <!-- end booking form 2.0 -->
	</div>
</div>
<br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>