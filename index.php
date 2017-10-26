<?php 
//*********************** ������� �������� *************************
session_start();
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
		<!-- Google Analytics Content Experiment code -->
		<script>function utmx_section(){}function utmx(){}(function(){var
		k='139486531-1',d=document,l=d.location,c=d.cookie;
		if(l.search.indexOf('utm_expid='+k)>0)return;
		function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
		indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
		length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
		'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
		'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
		'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
		valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
		'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
		</script><script>utmx('url','A/B');</script>
		<!-- End of Google Analytics Content Experiment code -->
		
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PWTD3HZ');</script>
    <!-- End Google Tag Manager -->
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
	<meta name="google-site-verification" content="PJKiOVDYa5eAN1TpR-jCrxvBXUph6mcG09FmlrP_z_k" />
	
	<meta property="og:title" content="iGadget - беспроводные зарядки для телефона" />
	<meta property="og:description" content="Беспроводное зарядное устройство LUNA, покупайте беспроводную зарядку для Samsung, iPhone, Windows Phone по ОПТОВОЙ цене! (067) 44-888-55" />
	<meta property="og:image" content="http://igadget.me/phones/main_picture.png" />
	<meta property="og:url" content= "http://igadget.me/" />

	<title>iGadget - беспроводные зарядки для телефона</title>
	<meta name="keywords" content="беспроводная зарядка, беспроводная зарядка купить, qi зарядка, беспроводное зарядное устройство для телефона, беспроводная зарядка самсунг, как работает беспроводная зарядка, безпровідна зарядка"/>
	<meta name="description" content="Беспроводное зарядное устройство LUNA, покупайте беспроводную зарядку для Samsung, iPhone, Windows Phone по ОПТОВОЙ цене! (067) 44-888-55" />
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="bogus">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="bogus">
	<link rel="stylesheet" type="text/css" href="css/style.css?v2" media="bogus">
	<link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" media="bogus">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">





<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45852324 = new Ya.Metrika({
                    id:45852324,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45852324" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body class="green-theme" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWTD3HZ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
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
		fbq('init', '1195543740514431');
		fbq('track', 'PageView');
		fbq('track', 'Lead');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1195543740514431&ev=PageView&noscript=1"
		/></noscript>
<!-- End Facebook Pixel Code -->

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
  fbq('init', '473117753069915');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=473117753069915&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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
  fbq('init', '534326753582146');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=534326753582146&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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
  fbq('init', '906247872866691');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=906247872866691&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

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
  fbq('init', '403255396756614');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=403255396756614&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

	<!-- NAVBAR -->
	
	<nav class="navbar navbar-solomon">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand navbar-brand-solomon" href="#"><span class="span-brand-solomon">I</span>Gadget</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-solomon-li">
					<li><a href="#section1">Видеообзор</a></li>
					<li><a href="#section2">Преимущества</a></li>
					<li><a href="#section3">Модели</a></li>
					<li><a href="#section4">Совместимость</a></li>
					<li><a href="#section5">Как заказать</a></li>	
					<li><button type="button" class="btn122" data-toggle="modal" data-target="#myModal70">СВЯЗАТЬСЯ С НАМИ</button></li>			
				</ul>						
			</div>
		</div>
	</nav>	

	<!-- NAVBAR END-->

	<div class="container grey main-logo-margin">
		<div class="row">
			<div class="item main col-sm-4">
				<img class="phone-main-banner" src="phones/main_picture.png">
				<p>Диск <span>быстрой</span> беспроводной <span>зарядки</span></p>
				<div class="price">
					<div class="regular-price">870 грн.</div>
					<div class="discount-price">699 грн.</div>
				</div>
			</div>
			<div class="col-sm-8 slogan">
				<p class="jumbo-main-logo text-center">Заряжайте Ваш смартфон без проводов!</p>
			</div>
			<div class="col-sm-8 work-with">
				<p class="text-center solomon-light">работает с:</p>
				<div class="text-center">
					<img class="phone-logo-margin" src="phones/apple.png">
					<img class="phone-logo-margin" src="phones/android.png">
					<img class="phone-logo-margin" src="phones/windows.png">
				</div>
			</div>
			<div class="item power col-sm-4">
				<img class="img-responsive" src="phones/powerbank_3.png">
				<p>Беспроводной <span>повербанк</span></p>
				<div class="price">
					<div class="regular-price"></div>
					<div class="discount-price">999 грн.</div>
				</div>
			</div>
			<div class="item auto col-sm-4 border-mobile">
				<img class="img-responsive" src="phones/autocharger3.png">
				<p><span>Автомобильная</span> беспроводная <span>зарядка</span></p>
				<div class="price">
					<div class="regular-price"></div>
					<div class="discount-price">799 грн.</div>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-4 text-center btn-wrap">
				<button type="button" class="btn-buy btn-buy-universal" data-toggle="modal" data-target="#myModal15">Быстрый заказ</button>
			</div>
			<div id="myModal15" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
							<p class="solomon-light" style="margin-top: 12px; margin-bottom: -2px; font-size: 15px; text-align: center">Мы свяжемся с Вами в течении часа</p>
						</div>
						<div class="modal-body">
							<form method="POST" action="send_mail.php">
								<input type="hidden" name="head" value="LUNA MAIN BANNER">
								<div class="form-group" style="margin-top: 15px">
									<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username4" required="required">
								</div>
								<div class="form-group" style="margin-bottom: 15px">
									<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone4" required="required">
								</div>							
								<button type="submit" id="send4" class="btn777">КУПИТЬ СО СКИДКОЙ</button>
								<div class="messages4" style="font-size: 0;"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-4 text-center visa-margin-bottom">
				<span class="text-center">бесплатная доставка при оплате</span> <img class="visa-mastercard" src="phones/visa-mastercard1.png">
				<p class="solomon-light text-center below-button">доставка по Киеву и Украине</p>
			</div>
		</div>
	</div>

	<div class="mouse">
		<div class="mouse-button"></div>
		<a href="#video-section" class="mouse-body"></a>
		<p class="mouse-text text-center">узнать больше</p>
	</div>

	<div class="container video-section" id="video-section">
		<p class="jumbo">Убедитесь лично насколько эффективна и&nbsp;проста в использовании беспроводная зарядка</p>
	</div>	

	<div class="container">	
		<div class="row">
			<div id="section1"></div>
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">	
				<div class="embed-responsive embed-responsive-16by9 youtube-shadow"> 
					<iframe class="youtube-iframe" src="https://www.youtube.com/embed/FZwg1yqewDU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> 
				</div>
			</div>
		</div>
	</div>

	<div class="grey problems">
		<div id="section2"></div>
		<p id="setka" class="jumbo">Вам знакомы эти проблемы?</p>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-4">
						<img class="img-responsive photo-center photo-grayscale" src="phones/1.png">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive photo-center photo-grayscale" src="phones/2.png">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive photo-center photo-grayscale" src="phones/3.png">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive photo-center photo-grayscale" src="phones/4.png">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive photo-center photo-grayscale" src="phones/5.png">
					</div>
					<div class="col-sm-4">
						<img class="img-responsive photo-center photo-grayscale" src="phones/6.png">
					</div>
				</div>
			</div>
		</div>
		<p class="dark-grey text-above-setka text-center">Заряжать Ваши гаджеты, будет комфортнее без проводов.<br>
				<span>На работе, дома или в пути, даже когда розетки нет под рукой.</span>
				</p>
	</div>

	<div class="container chargers" id="chargers">
		<div class="row">
			<div id="section3"></div>
			<div class="big-margin">
				<p class="jumbo">АКЦИЯ! <span style="font-family: 'Solomon Sans Normal'; color: #ff0000">Скидка до -35%</span> на обе модели!</p>
			</div>
			
			<!-- SLIDER 1 -->
			<div class="col-sm-6 text-center slider-with-border">
				<p class="text-center solomon-light product-title">Беспроводное зарядное устройство <br><span style="font-family: 'Solomon Sans SemiBold'; font-size: 18px">LUNA STANDART</span></p>

				<div id="slider">
					<div class="row">
						<div id="carousel-bounding-box">
							<div class="carousel slide" id="myCarousel233">
								<div class="carousel-inner">
									<div class="active item" data-slide-number="0"><img src="phones/slider_standart_1.jpg"></div>
									<div class="item" data-slide-number="1"><img src="phones/slider_standart_2.jpg"></div>
									<div class="item" data-slide-number="2"><img src="phones/slider_standart_3.jpg"></div>
									<div class="item" data-slide-number="3"><img src="phones/slider_standart_4.jpg"></div>
								</div>
								<!-- Carousel nav -->
								<a class="left carousel-control" href="#myCarousel233" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#myCarousel233" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
								<!-- Carousel nav END-->
							</div>
						</div>
					</div>
				</div>
				<!-- Bottom switcher of slider -->
				<ul class="hide-bullets">
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector-0"><img src="phones/slider_standart_1.jpg"></a></li>
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector-1"><img src="phones/slider_standart_2.jpg"></a></li>
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector-2"><img src="phones/slider_standart_3.jpg"></a></li>					
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector-3"><img src="phones/slider_standart_4.jpg"></a></li>
				</ul>
				<!-- Bottom switcher of slider END-->

				<img id="garanty-logo" src="phones/garanty_logo.png">

				<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal99">Подробнее</a>						
					<div id="myModal99" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="text-align: center; background-color: #eee">
									<p class="modal-title" style="font-size: 20px">Характеристики модели LUNA STANDART</p>
								</div>
								<div class="modal-body" style="padding: 25px; text-align: left; font-size: 15px">
									<p><b>Время подзарядки батареи смартфона от 0 до 100%:</b> 1,5-2 ч в зависимости от объема батареи вашего телефона.</p><br>
									<p><b>В комплект входит:</b></p>
									<ul>
										<li>QI беспроводное зарядное устройство</li>
										<li>USB кабель</li>
										<li>ресивер для установки в смартфон</li>
										<li>дополнительный ресивер в подарок</li>
										<li>гарантия 12 месяцев на зарядное устройство</li>
										<li>сервисное обслуживание</li>
									</ul><br>
									<p>
										Во время зарядки устройство имеет небольшую подсветку синего цвета
									</p><br>
									<p><b>Напряжение:</b> DC 5V 2A / DV 5V 1.5A</p>
									<p><b>Размеры зарядного устройства:</b> 100*100*9.5 мм</p>
									<p><b>Вес зарядного устройства:</b> 74 г</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
								</div>
							</div>
						</div>
					</div>
				
				<button type="button" class="btn-buy discount btn-buy-standart" data-toggle="modal" data-target="#myModal25">Купить за 499 грн</button>
					<div id="myModal25" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<p class="modal-title text-center" style="font-size: 25px">Купить LUNA STANDART</p>
									<p class="solomon-light" style="margin-top: 12px; margin-bottom: -2px; font-size: 15px; text-align: center">Мы свяжемся с Вами в течении часа.</p>
								</div>
								<div class="modal-body">
									<form method="POST" action="send_mail.php">
										<input type="hidden" name="head" value="LUNA STANDART">
										<input type="hidden" name="product_id" value="5">
										<input type="hidden" name="price" value="499">
										<div class="form-group" style="margin-top: 15px">
											<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username4" required="required">
											<!-- <input type="hidden" id="form-product2" value="LUNA STANDART"> -->
										</div>
										<div class="form-group" style="margin-bottom: 15px">
											<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone4" required="required">
										</div>							
										<button type="submit" id="send4" class="btn777">КУПИТЬ СО СКИДКОЙ</button>
										<div class="messages4" style="font-size: 0"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				<p class="below-button solomon-light">Вместо 770 грн</p>
			</div>
			<!-- SLIDER 1 END-->

			<!-- SLIDER 2 -->
			<div class="col-sm-6 text-center">
				<p class="text-center solomon-light product-title">Беспроводное зарядное устройство<br><span style="font-family: 'Solomon Sans SemiBold'; font-size: 18px">быстрой зарядки<br>LUNA FANTASY</span></p>
				
				<div id="slider2">
					<div class="row">
						<div id="carousel-bounding-box2">
							<div class="carousel slide" id="myCarousel299">
								<div class="carousel-inner">
									<div class="active item" data-slide-number="0"><img src="phones/slider_fantasy_31.jpg"></div>
									<div class="item" data-slide-number="1"><img src="phones/slider_fantasy_21.jpg"></div>
									<div class="item" data-slide-number="2"><img src="phones/slider_fantasy_5.jpg"></div>
									<div class="item" data-slide-number="3"><img src="phones/slider_fantasy_4.jpg"></div>
								</div>
								<!-- Carousel nav 2 -->
								<a class="left carousel-control" href="#myCarousel299" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#myCarousel299" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
								<!-- Carousel nav 2 END-->
							</div>
						</div>
					</div>
				</div>
				<!-- Bottom switcher of slider 2 -->
				<ul class="hide-bullets">
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector2-0"><img src="phones/slider_fantasy_31.jpg"></a></li>
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector2-1"><img src="phones/slider_fantasy_21.jpg"></a></li>
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector2-2"><img src="phones/slider_fantasy_5.jpg"></a></li>					
					<li class="col-xs-3"><a class="thumbnail" id="carousel-selector2-3"><img src="phones/slider_fantasy_4.jpg"></a></li>
				</ul>
				<!-- Bottom switcher of slider 2 END-->		

				<img id="garanty-logo" src="phones/garanty_logo.png">

				<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal89">Подробнее</a>	
					<div id="myModal89" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="text-align: center; background-color: #eee">
									<p class="modal-title" style="font-size: 20px">Характеристики модели LUNA FANTASY</p>
								</div>
								<div class="modal-body" style="padding: 25px; text-align: left; font-size: 14px">
									<p><u>Имеет функцию <span style="font-family: 'Solomon Sans SemiBold'">FAST CHARGE!!!</span></u></p><br>
									<p><b>Время подзарядки батареи смартфона от 0 до 100%:</b><br> 1,5-2 ч в зависимости от объема батареи вашего телефона.</p><br>
									<p><b>В комплект входит:</b></p>
									<ul>
										<li>QI беспроводное зарядное устройство</li>
										<li>USB кабель</li>
										<li>ресивер для установки в смартфон</li>
										<li>дополнительный ресивер в подарок</li>
										<li>гарантия 12 месяцев на зарядное устройство</li>
										<li>сервисное обслуживание</li>
									</ul><br>
									<p><b>Напряжение:</b> DC 5V 2A / DV 5V 1.5A</p>
									<p><b>Размеры зарядного устройства:</b> 76*76*6 мм</p>
									<p><b>Вес зарядного устройства:</b> 60 г</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
								</div>
							</div>
						</div>
					</div>
				
				<button type="button" class="btn-buy discount btn-buy-fantasy" data-toggle="modal" data-target="#myModal60">Купить за 699 грн</button>
					<div id="myModal60" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="text-align: center">
									<p class="modal-title" style="font-size: 25px">Купить LUNA FANTASY</p>
									<p style="margin-top: 12px; margin-bottom: -2px; font-size:15px">Мы свяжемся с Вами в течении часа</p>
								</div>
								<div class="modal-body">
								    <form method="POST" action="send_mail.php">
                                        <input type="hidden" name="head" value="LUNA FANTASY">

                                        <input type="hidden" name="product_id" value="4">
										<input type="hidden" name="price" value="699">
                                        <div class="form-group" style="margin-top: 15px">
                                            <input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username" required="required">
                                        </div>
                                        <div class="form-group" style="margin-bottom: 15px">
                                            <input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone" required="required">
                                        </div>								
                                        <button type="submit" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
                                    </form>
								</div>
							</div>
						</div>
					</div>
				<p class="below-button solomon-light">Вместо 870 грн</p>
			</div>			
			<!-- SLIDER 2 END-->
		</div>
	</div>	

	<div class="container">
		<div class="row">
			<div id="div-with-low-bottom-margin">
				<div class="col-sm-6">
					<p id="text-above-setka-with-minus-margin-top" class="text-above-setka text-right solomon-light">До конца акции осталось:</p>
				</div>
				<div class="col-sm-6 timer">
					<div class="text-left">
						<script src="http://megatimer.ru/s/9d337e1d16a57c02cb7f12e5e8fcf4bf.js"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p class="dark-grey text-above-setka text-center solomon-light">Простой способ установки.
		</p>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 margin-bottom-setka">
				<div class="col-sm-4">
					<img class="img-responsive photo-center img-circle" src="phones/18051660_1951544335076318_1155667143_n.jpg">
					<p class="solomon-light text-center below-krug">Шаг 1</p>
					<p class="text-above-photo">Вставьте в разъем <br>устройства ресивер</p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive photo-center img-circle" src="phones/18051717_1951544315076320_245690050_n.jpg">
					<p class="solomon-light text-center below-krug">Шаг 2</p>
					<p class="text-above-photo">Спрячьте ресивер <br>под чехол</p>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive photo-center img-circle" src="phones/18035466_1951544321742986_915130487_n.jpg">
					<p class="solomon-light text-center below-krug">Шаг 3</p>
					<p class="text-above-photo">Положите телефон <br>на зарядку</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="grey additional">
		<p id="setka2" class="jumbo setka2">Беспроводные повербанки</p>
		<p id="text-below-zaryadka" class="text-center text-below-zaryadka">для зарядки просто положите смартфон на повербанк</p>
		<div class="container">
			<div class="row">		
				<div class="col-sm-7">
					<img id="powerbank-hand" class="img-responsive powerbank-hand" src="phones/powerbank_hand.png">
				</div>
				<div class="col-sm-5">
					<p id="text-above-powerbank" class="solomon-light text-center big-margin product-title">Беспроводной повербанк <br><span class="text-below-powerbank">LUNA</span></p>
	
					<!-- POWERBANK SLIDER -->
					<div class="carousel slide" data-ride="carousel" id="quote-carousel2">
						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#quote-carousel2" data-slide-to="0" class="active"></li>
							<li data-target="#quote-carousel2" data-slide-to="1"></li>
							 <li data-target="#quote-carousel2" data-slide-to="2"></li>
							 <li data-target="#quote-carousel2" data-slide-to="3"></li>
						</ol>
					
						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner">
							<!-- Quote 1 -->
							<div class="item active">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="powerbank1" src="phones/powerbank_1.png">
									</div>
								</div>
							</div>
	
							<!-- Quote 2 -->
							<div class="item">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="powerbank2" src="phones/powerbank_2.png">
									</div>
								</div>
							</div>	
	
							<!-- Quote 3 -->
							 <div class="item">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="powerbank3" src="phones/powerbank_3.png">
									</div>
								</div>
							</div>
	
							<!-- Quote 4 -->
							 <div class="item">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="powerbank4" src="phones/powerbank_4.png">
									</div>
								</div>
							</div>
						</div>
					
						<!-- Carousel Buttons Next/Prev -->
						<a data-slide="prev" href="#quote-carousel2" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
						<a data-slide="next" href="#quote-carousel2" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
					</div> 
					<!-- POWERBANK SLIDER END -->
	
					<div class="col-xs-7">
						<p id="powerbank-text-below-font-12" class="solomon-light text-left">Емкость: 10 000 mAh</p>
					</div>
					<div class="col-xs-5 powerbank-button-below">
						<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal264">Подробнее</a>
							<div id="myModal264" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header" style="text-align: center; background-color: #eee">
											<p class="modal-title" style="font-size: 20px">Характеристики повербанка LUNA</p>
										</div>
										<div class="modal-body" style="padding: 25px; text-align: left; font-size: 15px">
											<!-- <p class="text-center" style="font-size: 16px"><b>Модель без экрана</b></p> -->
											<p>Продукт имеет встроенный передатчик беспроводного электричества Qi стандарта и два USB порта для заряда устройств с помощью шнура</p>										
											<ul>
												<li>мощность на входе: min 5V -1A / max 5V - 2A</li>
												<li>мощность на выходе: 5V -1A</li>
												<li>ёмкость аккумулятора 10 000 mAh</li>
												<li>дальность передачи: 0,5 см</li>
												<li>индикатор заряда батареи</li>
											</ul>								
										</div>
										<!-- <div class="modal-body" style="padding: 25px; text-align: left; font-size: 15px">
											<p class="text-center" style="font-size: 16px"><b>Модель с экраном</b></p>
											<p>Продукт имеет встроенный передатчик беспроводного электричества Qi стандарта и два USB порта для заряда устройств с помощью шнура</p>										
											<ul>
												<li>мощность на входе: min 5V -1A / max 5V - 2A</li>
												<li>мощность на выходе: 5V -1A</li>
												<li>ёмкость аккумулятора 8000 mAh</li>
												<li>ж/к экран заряда батареи</li>
												<li>встроенный фонарик</li>
											</ul>										
										</div> -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
										</div>
									</div>
								</div>
							</div>
					</div>
	
					<button type="button" class="btn-buy discount btn-buy-powerbank" data-toggle="modal" data-target="#myModal107">Купить за 999 грн</button>
						<div id="myModal107" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
										<p class="text-center" style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течении часа и <b><u>уточним модель повербанка</u></b></p>
									</div>
									<div class="modal-body">
										<form method="POST" action="send_mail.php">
											<input type="hidden" name="head" value="3 POWERBANKS">



											<input type="hidden" name="product_id" value="1">
										<input type="hidden" name="price" value="999">


											<div class="form-group" style="margin-top: 15px">
												<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username12" required="required">
		<!--                                        <input type="hidden" id="form-product4" value="3 POWERBANKS">-->
											</div>
											<div class="form-group" style="margin-bottom: 15px">
												<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone12" required="required">
											</div>								
											<button type="submit" id="send12" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
										</form>
									</div>
									<div class="messages12" style="font-size: 0;"></div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container together">
		<div class="row">
			<div class="col-xs-12 text-center">
				<p id="setka3" class="jumbo">Вместе <span style="font-family: 'Solomon Sans Normal'; color: #ff0000">дешевле</span></p>
			</div>
			<div class="col-sm-6 slider-with-border">
				<p class="text-center text-above-bonus">LUNA STANDART + БЕСПРОВОДНОЙ POWER BANK</p>
				<div class="col-sm-6 img-wrap">
					<img class="img-responsive" src="phones/standart_white_powerbank.jpg">
				</div>
				<p class="solomon-light text-center p-above-button-standart">*Вы можете выбрать устройства любого цвета</p>
				<button type="button" class="btn-buy discount together standart_black_powerbank" data-toggle="modal" data-target="#myModal86">Купить за 1199 грн</button>
					<div id="myModal86" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
										<p class="text-center" style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течении часа</p>
									</div>
									<div class="modal-body">
										<form method="POST" action="send_mail.php">
											<input type="hidden" name="head" value="LUNA STANDART and POWERBANK">



										<input type="hidden" name="product_id" value="7">
										<input type="hidden" name="price" value="1199">


											<div class="form-group" style="margin-top: 15px">
												<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username13" required="required">
	
											</div>
											<div class="form-group" style="margin-bottom: 15px">
												<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone13" required="required">
											</div>								
											<button type="submit" id="send13" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
										</form>
									</div>
									<div class="messages13" style="font-size: 0;"></div>
								</div>
							</div>
						</div>
					<p class="below-button solomon-light text-center">Экономия <span style="font-family: 'Solomon Sans SemiBold'">300 грн</span></p>
			</div>
			<div class="col-sm-6">
				<p class="text-center text-above-bonus">LUNA FANTASY + БЕСПРОВОДНОЙ POWER BANK</p>
				<div class="img-wrap col-sm-6">
					<img class="img-responsive" src="phones/fantasy_powerbank.jpg">
				</div>
				<p class="solomon-light text-center p-above-button-standart">*Вы можете выбрать устройства любого цвета</p>
				<button type="button" class="btn-buy discount together fantasy_gold_powerbank" data-toggle="modal" data-target="#myModal88">Купить за 1499 грн</button>
					<div id="myModal88" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
									<p class="text-center"style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течении часа</p>
								</div>
								<div class="modal-body">
									<form method="POST" action="send_mail.php">
										<input type="hidden" name="head" value="LUNA FANTASY and POWERBANK">

	<input type="hidden" name="product_id" value="8">
										<input type="hidden" name="price" value="1499">






										<div class="form-group" style="margin-top: 15px">
											<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username14" required="required">
											<!-- <input type="hidden" id="form-product6" value="LUNA FANTASY and POWERBANK"> -->
										</div>
										<div class="form-group" style="margin-bottom: 15px">
											<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone14" required="required">
										</div>								
										<button type="submit" id="send14" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
									</form>
								</div>
								<div class="messages14" style="font-size: 0;"></div>
							</div>
						</div>
					</div>
				<p class="below-button solomon-light text-center">Экономия <span style="font-family: 'Solomon Sans SemiBold'">200 грн</span></p>
			</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-12 grey additional autocharger">
		<p class="jumbo setka2">Автомобильное беспроводное зарядное устройство</p>
		<p class="text-center text-below-zaryadka">для зарядки просто установите смартфон в креплении</p>
		<div class="container">
			<div class="row">		
				<div class="col-sm-7">
					<img class="img-responsive powerbank-hand" src="phones/autocharger1_big.png">
				</div>
				<div class="col-sm-5">
					<p id="text-above-powerbank" class="solomon-light text-center big-margin product-title">Автомобильное зарядное устройство <br><span class="text-below-powerbank">LUNA</span></p>
	
					<!-- AUTOCHARGER SLIDER -->
					<div class="carousel slide" data-ride="carousel" id="quote-carousel3">
						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#quote-carousel3" data-slide-to="0" class="active"></li>
							<li data-target="#quote-carousel3" data-slide-to="1"></li>
							 <li data-target="#quote-carousel3" data-slide-to="2"></li>
							 <li data-target="#quote-carousel3" data-slide-to="3"></li>
						</ol>
					
						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner">
							<!-- Quote 1 -->
							<div class="item active">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="autocharger1" src="phones/autocharger2.png">
									</div>
								</div>
							</div>
	
							<!-- Quote 2 -->
							<div class="item">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="autocharger2" src="phones/autocharger3.png">
									</div>
								</div>
							</div>	
	
							<!-- Quote 3 -->
							 <div class="item">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="autocharger3" src="phones/autocharger4.png">
									</div>
								</div>
							</div>
	
							<!-- Quote 4 -->
							 <div class="item">
								<div class="row">
									<div class="col-sm-12 text-center">
										<img id="autocharger4" src="phones/autocharger5.png">
									</div>
								</div>
							</div>
						</div>
					
						<!-- Carousel Buttons Next/Prev -->
						<a data-slide="prev" href="#quote-carousel3" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
						<a data-slide="next" href="#quote-carousel3" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
					</div> 
					<!-- AUTOCHARGER SLIDER END -->
	
					<div class="col-xs-5 autocharger-button-below">
						<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal265">Подробнее</a>
							<div id="myModal265" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header" style="text-align: center; background-color: #eee">
											<p class="modal-title" style="font-size: 20px">Характеристики автомобильного зарядного устройства LUNA</p>
										</div>
										<div class="modal-body" style="padding: 25px; text-align: left; font-size: 15px">
											<p>Продукт имеет:<br>
	- встроенный передатчик беспроводного электричества Qi стандарта.<br>
	- два вида крепления: один - в дефлектор воздуховода автомобиля. Второй, на липкой основе, к любому месту на торпеде или лобовом стекле  Вашего авто.<br>
	Вы можете снять зарядное устройство с крепления в любой момент, когда зарядка Вам не нужна.</p>
	<p>Технические характеристики:</p>								
											<ul>
												<li>работает от прикуривателя автомобиля</li>
												<li>мощность на входе: min 5V -1A / max 5V - 2A</li>
												<li>мощность на выходе: 5V -1A</li>
												<li>дальность передачи: 0,7 см</li>
												<li>индикатор работы зарядного устройства</li>
											</ul>								
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
										</div>
									</div>
								</div>
							</div>
					</div>
	
					<button type="button" class="btn-buy autocharger" data-toggle="modal" data-target="#myModal108">Купить за 799 грн</button>
						<div id="myModal108" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
										<p class="text-center" style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течении часа и <b><u>уточним модель автомобильного зарядного устройства</u></b></p>
									</div>
									<div class="modal-body">
										<form method="POST" action="send_mail.php">
											<input type="hidden" name="head" value="3 AUTOCHARGERS">


											<input type="hidden" name="product_id" value="6">
										<input type="hidden" name="price" value="799">


											<div class="form-group" style="margin-top: 15px">
												<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username14" required="required">
											</div>
											<div class="form-group" style="margin-bottom: 15px">
												<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone14" required="required">
											</div>								
											<button type="submit" id="send14" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
										</form>
									</div>
									<div class="messages12" style="font-size: 0;"></div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container together">
		<div class="row">
			<div class="col-xs-12 text-center">
				<p id="setka3" class="jumbo">Вместе <span style="font-family: 'Solomon Sans Normal'; color: #ff0000">дешевле</span></p>
			</div>
			<div class="col-sm-6 slider-with-border">
				<p class="text-center text-above-bonus">LUNA STANDART + АВТОМОБИЛЬНАЯ ЗАРЯДКА</p>
				<div class="col-sm-6 img-wrap">
					<img class="img-responsive" src="phones/standart_white_autocharger.jpg">
				</div>
				<p class="solomon-light text-center p-above-button-standart">*Вы можете выбрать устройства любого цвета</p>
				<button type="button" class="btn-buy discount together standart_black_powerbank" data-toggle="modal" data-target="#myModal125">Купить за 1099 грн</button>
					<div id="myModal125" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
										<p class="text-center" style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течение часа</p>
									</div>
									<div class="modal-body">
										<form method="POST" action="send_mail.php">
											<input type="hidden" name="head" value="LUNA STANDART and AUTOCHARGER">



	<input type="hidden" name="product_id" value="9">
										<input type="hidden" name="price" value="1099">




											<div class="form-group" style="margin-top: 15px">
												<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username15" required="required">
	
											</div>
											<div class="form-group" style="margin-bottom: 15px">
												<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone15" required="required">
											</div>								
											<button type="submit" id="send15" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
										</form>
									</div>
									<div class="messages13" style="font-size: 0;"></div>
								</div>
							</div>
						</div>
					<p class="below-button solomon-light text-center">Экономия <span style="font-family: 'Solomon Sans SemiBold'">200 грн</span></p>
			</div>
			<div class="col-sm-6">
				<p class="text-center text-above-bonus">LUNA FANTASY + АВТОМОБИЛЬНАЯ ЗАРЯДКА</p>
				<div class="img-wrap col-sm-6">
					<img class="img-responsive" src="phones/fantasy_autocharger.jpg">
				</div>
				<p class="solomon-light text-center p-above-button-standart">*Вы можете выбрать устройства любого цвета</p>
				<button type="button" class="btn-buy discount together fantasy_gold_powerbank" data-toggle="modal" data-target="#myModal97">Купить за 1299 грн</button>
					<div id="myModal97" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
									<p class="text-center"style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течении часа</p>
								</div>
								<div class="modal-body">
									<form method="POST" action="send_mail.php">
										<input type="hidden" name="head" value="LUNA FANTASY and AUTOCHARGER">


	<input type="hidden" name="product_id" value="10">
										<input type="hidden" name="price" value="1299">


										<div class="form-group" style="margin-top: 15px">
											<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username16" required="required">
										</div>
										<div class="form-group" style="margin-bottom: 15px">
											<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone16" required="required">
										</div>								
										<button type="submit" id="send16" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
									</form>
								</div>
								<div class="messages14" style="font-size: 0;"></div>
							</div>
						</div>
					</div>
				<p class="below-button solomon-light text-center">Экономия <span style="font-family: 'Solomon Sans SemiBold'">200 грн</span></p>
			</div>
			</div>
		</div>
	</div>
	
	<div id="last"></div>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<p id="setka3" class="jumbo"><span style="font-family: 'Solomon Sans Normal'; color: #ff0000">Эксклюзивное предложение</span></p>
			</div>
			<div class="col-sm-6 slider-with-border">
				<p class="text-center text-above-bonus">LUNA STANDART + беспроводной power bank + автомобильная зарядка</p>
				<img class="img-responsive" src="phones/standart_white_powerbank_autocharger.jpg">
				<p class="solomon-light text-center p-above-button-standart">*Вы можете выбрать устройства любого цвета</p>
				<button type="button" class="btn-buy discount exclusive" data-toggle="modal" data-target="#myModal85">Купить за 1850 грн</button>
					<div id="myModal85" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
										<p class="text-center" style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течение часа</p>
									</div>
									<div class="modal-body">
										<form method="POST" action="send_mail.php">
											<input type="hidden" name="head" value="LUNA STANDART, POWERBANK and AUTOCHARGER">


	<input type="hidden" name="product_id" value="11">
										<input type="hidden" name="price" value="1850">


											<div class="form-group" style="margin-top: 15px">
												<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username17" required="required">
											</div>
											<div class="form-group" style="margin-bottom: 15px">
												<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone17" required="required">
											</div>								
											<button type="submit" id="send17" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
										</form>
									</div>
									<div class="messages13" style="font-size: 0;"></div>
								</div>
							</div>
						</div>
					<p class="below-button solomon-light text-center">Экономия <span style="font-family: 'Solomon Sans SemiBold'">450 грн</span></p>
			</div>
			<div class="col-sm-6">
				<p class="text-center text-above-bonus">LUNA FANTASY + беспроводной power bank + автомобильная зарядка</p>
				<img class="img-responsive" src="phones/fantasy_powerbank_autocharger.jpg">
				<p class="solomon-light text-center p-above-button-standart">*Вы можете выбрать устройства любого цвета</p>
				<button type="button" class="btn-buy discount exclusive" data-toggle="modal" data-target="#myModal87">Купить за 2000 грн</button>
					<div id="myModal87" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<p class="modal-title text-center" style="font-size: 25px">Сделать заказ</p>
									<p class="text-center"style="margin-top: 12px; margin-bottom: -2px">Мы свяжемся с Вами в течение часа</p>
								</div>
								<div class="modal-body">
									<form method="POST" action="send_mail.php">
										<input type="hidden" name="head" value="LUNA FANTASY, POWERBANK and AUTOCHARGER">

	<input type="hidden" name="product_id" value="12">
										<input type="hidden" name="price" value="2000">


										<div class="form-group" style="margin-top: 15px">
											<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username18" required="required">
											<!-- <input type="hidden" id="form-product6" value="LUNA FANTASY and POWERBANK"> -->
										</div>
										<div class="form-group" style="margin-bottom: 15px">
											<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone18" required="required">
										</div>								
										<button type="submit" id="send14" class="btn777" style="margin-bottom: 15px">КУПИТЬ СО СКИДКОЙ</button>
									</form>
								</div>
								<div class="messages14" style="font-size: 0;"></div>
							</div>
						</div>
					</div>
				<p class="below-button solomon-light text-center">Экономия <span style="font-family: 'Solomon Sans SemiBold'">500 грн</span></p>
			</div>
		</div>
	</div>

	<div class="grey four-types">
		<div class="container">
			<div class="row">
				<div id="section4"></div>
				<div class="col-xs-12">
					<p id="setka4" class="jumbo">Максимальная совместимость <br>со всеми видами Ваших гаджетов</p>
				</div>
				
				<div class="col-sm-12">
					<div class="col-sm-6 setka-with-margin">
						<div class="col-sm-4 text-center">
							<img class="img-responsive type-logo" src="phones/apple-type.png">
						</div>
						<div class="col-sm-8 text-center four-types-text-colomn">
							<span class="four-type-item">Lightning</span>
							<p class="solomon-light p-below-four-type-item">Lightning порт совместим с <br>iPhone 5/5s/6/6s/6 Plus/6s Plus/7/7 Plus</p>
							<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal2">Подробнее</a>
								<div id="myModal2" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<img src="phones/type-c-more.jpg" width="100%" alt="charger">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="col-sm-6 setka-with-margin">		
						<div class="col-sm-4 text-center">
							<img class="img-responsive type-logo" src="phones/android-type.png">
						</div>
						<div class="col-sm-8 text-center four-types-text-colomn">
							<span class="four-type-item">Micro USB Type A</span>
							<p class="solomon-light p-below-four-type-item">USB-порт у большинства смартфонов <br>и телефонов Samsung, LG, Sony, Nexus</p>
							<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal879">Подробнее</a>
								<div id="myModal879" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">									
												<img src="phones/type-a-more.jpg" width="100%" alt="charger">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="col-sm-6 setka-with-margin">
						<div class="col-sm-4 text-center">
							<img class="img-responsive type-logo" src="phones/android-type.png">
						</div>
						<div class="col-sm-8 text-center four-types-text-colomn">
							<span class="four-type-item">Micro USB Type B</span>
							<p class="solomon-light p-below-four-type-item">Встречается довольно редко, <br>например, у Meizu</p>
							<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal3">Подробнее</a>
								<div id="myModal3" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<img src="phones/type-b-more.jpg" width="100%" alt="charger">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default btn-success" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
						</div>
					</div>
					<div class="col-sm-6 setka-with-margin">
						<div class="col-sm-4 text-center">
							<img class="img-responsive type-logo" src="phones/android-type.png">
						</div>
						<div class="col-sm-8 text-center four-types-text-colomn">
							<span class="four-type-item">Micro USB Type C</span>
							<p class="solomon-light p-below-four-type-item">Новый стандарт двухстороннего <br>USB-порта для Android</p>
							<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal2">Подробнее</a>							
						</div>
					</div>
				</div>

				<p class="solomon-light text-center p-below-types">*Мы укомплектуем ресивером для Вашей модели телефона</p>
			</div>
		</div>
	</div>

	<!-- <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="jumbo"><span style="font-family: 'Solomon Sans Normal'; color: #ff0000">Подарок</span> — дополнительный ресивер</p>
			</div>
			<div class="col-sm-12 margin-2phones-2receivers">
				<div class="col-xs-12 col-sm-6 col-md-5 padding-2phones-2receivers">
					<div class="col-xs-2 col-sm-2 col-md-1">
						<img src="phones/network.png">
					</div>
					<div class="col-xs-10 col-sm-10 col-md-11">
						<p class="solomon-light p-2phones-2receivers">Наш подарок <span style="font-family: 'Solomon Sans SemiBold'">экономит</span> Вам минимум <span style="font-family: 'Solomon Sans SemiBold'">150 грн</span> на покупку ещё одного ресивера для другого Вашего гаджета или гаджета Ваших близких</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-7">
					<img class="img-responsive" src="phones/2phones_2receivers.png">
				</div>
			</div>
			<div class="col-sm-12">
				<p class="jumbo p-below-2phones-2receivers">Используйте одну зарядку для всей семьи!</p>
			</div>
		</div>
	</div> -->

	<div class="grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p id="garanty-jumbo" class="jumbo">Наши гарантийные обязательства</p>
				</div>
				<div class="col-sm-12 text-center garanty-div">
					<div class="col-sm-4 garanty-text-side">
						<span class="garanty-text">Официальная гарантия</span>
						<p class="solomon-light p-below-garanty-text">Гарантия на товар <br><span style="font-family: 'Solomon Sans Normal'">12 МЕСЯЦЕВ</span</p>
					</div>
					<div class="col-sm-4">
						<img id="garanty-img" class="img-responsive" src="phones/garanty.png">
					</div>
					<div class="col-sm-4 garanty-text-side">
						<span class="garanty-text">Безопасная покупка</span>
						<p class="solomon-light p-below-garanty-text">Гарантия возврата <br><span style="font-family: 'Solomon Sans Normal'">14 ДНЕЙ</span</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div id="section5"></div>
			<div class="col-sm-12">
				<p id="zakaz" class="jumbo">Как заказать беcпроводную зарядку?</p>
				<img id="zakaz" class="img-responsive" src="phones/zakaz.jpg">
			</div>
		</div>
	</div>

	<div id="dostavka" class="grey">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p id="dostavka" class="jumbo">Доставка и оплата</p>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-6 padding-150 slider-with-border-black">
						<span class="dostavka_name">ПО КИЕВУ</span> <img src="phones/kyiv_herb.png">
						<p class="p-below-dostavka-name solomon-light">Курьером <br>по Киеву</p>
						<p class="solomon-light">Доставка производится в пределах Киева;</p>
						<p class="solomon-light">Оплата курьеру при получении заказа;</p>
						<p class="solomon-light">Стоимость доставки - от 30 грн.</p>
					</div>
					<div class="col-sm-6 padding-150">
						<span class="dostavka_name">ПО УКРАИНЕ</span> <img id="nova-poshta" src="phones/nova_poshta.png">
						<p class="p-below-dostavka-name solomon-light">Доставка Новой почтой <br>по всей Украине</p>
						<p class="solomon-light">Оплата заказа при получении;</p>
						<p class="solomon-light">Стоимость доставки до 50 грн + 2% комиссии за период;</p>
						<p class="solomon-light">Сроки доставки 1-2 дня.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p id="otzyvu" class="jumbo">Отзывы наших покупателей</p>
			</div>
			<div class="col-md-offset-2 col-md-8 otzyv-gran">
				<div class="carousel slide" data-ride="carousel" id="quote-carousel">
					<ol class="carousel-indicators">
						<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#quote-carousel" data-slide-to="1"></li>
						<li data-target="#quote-carousel" data-slide-to="2"></li>
						<li data-target="#quote-carousel" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">					
						<div class="item active">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="phones/avatar_1.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Заказал одну. По поводу самой зарядки - полностью доволен. Заряжает хорошо и довольно быстро. Работает через бампер на телефоне без проблем.</p>
										<small>Роман</small>
									</div>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="phones/avatar_2.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Очень современная зарядка, вот бы на все телефоны такую... Качество очень радует.</p>
										<span><b>Недостатки:</b> Пока нет.</span>
										<small>Игорь</small>
									</div>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="phones/avatar_3.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Пользуюсь неделю, изменил свою точку зрения. Очень удобная вещь! Использование рессивера не так критично, как это показалось в первый день.</p>
										<small>Михаил</small>
									</div>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="phones/avatar_4.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Понравилось, так как очень удобно, не нужно все время провод вставлять. И заряд быстро берет.</p>
										<span><b>Достоинства:</b> Удобно и быстро.</span>
										<small>Антон</small>
									</div>
								</div>
							</blockquote>
						</div>
					</div>
					<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
					<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
				</div>                          
			</div>
		</div>
	</div>

	<div class="grey answers">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p id="otvety" class="jumbo">Ответы на вопросы</p>
				</div>
				<button class="accordion">Беспроводная зарядка безопасна?</button>
					<div class="acc">
						<p class="acc_top">Передаваемый через беспроводное зарядное устройство ток ничем не отличается от обычной зарядки. Ваш телефон прослужит
							вам так же долго. Также на зарядное можно класть любые вещи, в том числе металлические. Зарядное включается только
							при приближении телефона с установленным приёмником(ресивером), или если в вашем телефоне уже есть функция беспроводной
							зарядки.</p>
					</div>
				<button class="accordion">Это дорого?</button>
					<div class="acc">
						<p class="acc_top">Подумайте, сколько денег вам может стоить не вовремя севший мобильный. А сколько денег и времени стоит замена зарядного
							гнезда в вашем мобильном, если оно сломается? Также вы исключаете риск зацепить провод и разбить дисплей.</p>
					</div>
				<button class="accordion">Медленно заряжается?</button>
					<div class="acc">
						<p class="acc_top">По проведенным экспериментам (более 3000) полная зарядка телефона осуществляется за то же время что и через провод.
							Вы не заметите разницы!</p>
					</div>
				<button class="accordion">Как происходит доставка и оплата?</button>
					<div class="acc">
						<p class="acc_top">Мы доставляем заказы по всей Украине с оплатой при получении, также возможна предоплата. Выбрать способ доставки вы
							можете при общении с менеджером. Просто оставьте заявку и дождитесь звонка.</p>
					</div>
				<button class="accordion">Для каких именно моделей подходит зарядка?</button>
					<div class="acc">
						<p class="acc_top">Беспроводная зарядка подходит для более 90% существующих смартфонов, планшетов и даже старых телефонов с Micro USB разъёмами.
							Этот список очень большой. Оставляйте заявку или звоните, уточняйте для своего устройства. Мы всегда рады помочь!</p>
					</div>
				<button class="accordion">Какие гарантии?</button>
					<div class="acc">
						<p class="acc_top">Мы предоставляем, на весь ассортимент товаров в наших магазинах, гарантию до 1 года. Гарантия начинает действовать с момента как Вы получили товар. Расходы по доставке в процессе обмена товара с дефектом мы берём на себя! Мы работаем строго в соответствии с Украинским законодательством и всегда идем на встречу нашим клиентам!</p>
						<p class="acc_top"><b>Если в процессе использования, Вы обнаружили дефект, или товар стал некорректно функционировать:</b></p>
						<ol>
							<li class="li-acc">Свяжитесь с нами, позвонив по телефону +380 (67) 44 888 55</li>
							<li class="li-acc">Наш специалист уточнит у Вас детали и поможет Вам вернуть товар</li>
							<li class="li-acc">Получите замену!</li>
						</ol>
						<p class="acc_top"><b>Если товар Вам просто не понравился, то в течение 14 дней Вы можете вернуть его нам, без объяснения причин:</b></p>
						<ol>
							<li class="li-acc">Распечатайте и заполните заявление на возврат</li>
							<li class="li-acc">Перешлите нам товар, вместе с заявлением и чеком (полученным при оплате товара)</li>
							<li class="li-acc">Получите возврат денег!</li>
						</ol><br>
					</div>
				<button class="accordion">Что бы ещё спросить?</button>
					<div class="acc">
						<p class="acc_top">Если у вас остались вопросы позвоните по бесплатному номеру: +38 (067) 448-88-55 или оставьте заявку, мы сами позвоним и проконсультируем.</p>
					</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p id="voprosy" class="jumbo">У Вас остались вопросы? <br>Задайте их нам</p>
			</div>
			<div class="col-sm-6 col-sm-offset-3">
			    <form method="POST" action="send_mail.php">
                    <input type="hidden" name="head" value="Вопрос">
                    <div class="form-group">
                        <label for="usr"><span style="font-size: 18px">Имя</span></label>
                        <input type="text" class="form-control" id="usr1" required="required" name="name">
                    </div>
                    <div class="form-group">
                        <label for="phone"><span style="font-size: 18px">Телефон</span></label>
                        <input type="phone" class="form-control" id="phone1" required="required" name="phone">
                    </div><br>
                    <div class="form-group">
                        <label for="comment"><span style="font-size: 18px">Введите вопрос</span></label>
                        <textarea class="form-control" rows="5" id="comment1" required="required" name="mesage"></textarea>
                    </div>
                    <div>
                        <p style="text-align: center; margin-top: 50px; margin-bottom: 50px">
    					<!-- <a href="#s" id="send_comment" class="button1">ОТПРАВИТЬ</a> -->
                            <button type="submit" class="btn-buy btn-buy-voprosy" style="margin-bottom: 15px">ОТПРАВИТЬ</button>
                        </p>
                    </div>
                    <div class="messages5"></div>
                </form>
			</div>
		</div>
	</div>



	<!-- FOOTER -->
	
	<div style="background-color:#333; padding: 20px 0 0 0; color: #ffffff; margin-top: 40px">
		<div class="container">
			<div class="row">
				<div class="col-md-4" style="margin: 50px 0 0 0">
					<blockquote><span style="font-size: 30px; text-transform: uppercase">Наши контакты</span></blockquote>
					<ul style="list-style: none">
						<li><i class="glyphicon glyphicon-home" style="margin-right: 15px; padding: 0.5em 0"> </i>ООО "СКИ Гагарин"</li>
						<li><i class="glyphicon glyphicon-map-marker" style="margin-right: 15px; padding: 0.5em 0"> </i>г. Киев, ул. Стройиндустрии 8-б</li>
						<li><i class="glyphicon glyphicon-user" style="margin-right: 15px; padding: 0.5em 0"> </i>ИНН 388057626503</li>
						<li><i class="glyphicon glyphicon-earphone" style="margin-right: 15px; padding: 0.5em 0"> </i>(067) 448-88-55</li>
					</ul>
				</div>
				<div class="col-md-4" style="margin: 50px 0 0 0">
					<blockquote><span style="font-size: 30px; text-transform: uppercase">Связаться с нами</span></blockquote>					
					<span class="padding-podval"><i class="glyphicon glyphicon-time" style="margin-right: 15px; padding: 0.5em 0"></i>Работаем без выходных 9.00-20.00</span><br>
					<span class="padding-podval"><i class="glyphicon glyphicon-shopping-cart" style="margin-right: 15px; padding: 0.5em 0"></i>Принимаем заявки через сайт 24/7</span><br>
					<span class="padding-podval"><i class="glyphicon glyphicon-plane" style="margin-right: 15px; padding: 0.5em 0"></i>Доставляем по всей Украине!</span><br>
					<span class="padding-podval"><button type="button" class="btn122 inverse" data-toggle="modal" data-target="#myModal70">СВЯЗАТЬСЯ С НАМИ</button></span>
						<div id="myModal70" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header" style="text-align: center">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<p class="modal-title" style="font-size: 20px; color: #3d3d3c;">Закажите звонок</p>
										<p class="solomon-light" style="margin-top: 12px; margin-bottom: -2px; color: #3d3d3c;">Мы свяжемся с Вами в течении часа</p>
										<hr>
										<p class="text-center" style="color: #3d3d3c; margin-top: 10px;">График работы: ежедневно с 09.00 до 20.00</p>
										<p class="text-center" style="color: #3d3d3c; margin-top: 10px;">Тел.: (067) 44-888-55</p>
									</div>
									<div class="modal-body">
										<form method="POST" action="send_mail.php">
											<input type="hidden" name="head" value="Заказ звонка">
											<div class="form-group" style="margin-top: 15px">
												<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username" required="required">
											</div>
											<div class="form-group" style="margin-bottom: 15px">
												<input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-lg" id="form-phone" required="required">
											</div>
											<button type="submit" class="btn777" style="margin-bottom: 15px">ЗАКАЗАТЬ ЗВОНОК</button>
										</form>
									</div>
								</div>
							</div>
						</div>
				</div>
				<div class="col-md-4" style="margin: 50px 0 0 0">
					<blockquote><span style="font-size: 30px; text-transform: uppercase">Подписаться на нас</span></blockquote>
						<iframe style="border: 1px solid rgba(14, 9, 9, 0.45); border: none; overflow: hidden; box-shadow: -3px 9px 70px 1px rgba(0, 0, 0, 0.66)" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2FiGadget.ua%2F&tabs&width=320&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="305" height="214" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
					<p style="margin-top: 100px; color: #333"><a href="opt/index.html" style="color: #333">Оптовым покупателям</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER END -->

	<!-- ПОДКЛЮЧЕНИЯ -->	

	<!-- Боковой попап -->
	<div class="slidebox chargers" id="slidebox">
		<button type="button" class="close">&times;</button>
		<p class="p-inside-slidebox">Мы приготовили для вас ПОДАРОК</p>
		<p>Вы можете получить второй приёмник/ресивер в подарок.
			Чтобы получить ПОДАРОК, закажите его у оператора. 
			Назовите оператору КОД ПОДАРКА: 0711
			</p>
	</div>

	<!-- Попап попытки закрытия вкладки -->
	<div id="ouibounce-modal">
      <div class="underlay"></div>
		<div class="modal">
			<div class="modal-title">
				<p class="modal-super-header">This is a OuiBounce modal!</p>
			</div>
			<div class="modal-body">
				<p>test1</p>
				<p>test2</p>          
			</div>

			<div class="modal-footer">
				<p>Нет, спасибо</p>
			</div>
		</div>
    </div>

	<div id="scrollup"><img alt="Прокрутить вверх" src="phones/scroll_up.png" width="60%"></div>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script async src="bootstrap/js/bootstrap.min.js"></script>	
	<script async type="text/javascript" src="js/script.min.js?v1"></script>	
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script async type="text/javascript" src="js/carousel.min.js?v1"></script>
	<!-- <script async type="text/javascript" src="js/ouibounce.js"></script> -->
	<!-- <script async type="text/javascript" src="/send/script.js"></script> -->

	<script language="JavaScript">
		$(document).ready(function() {
			$("input[name=phone]").mask("+38-999-999-99-99");
		});
	</script>

	<!-- <script>
		var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'), {
				aggressive: true,
				timer: 0,
				callback: function() { console.log('ouibounce fired!'); }
		});

		$('body').on('click', function() {
				$('#ouibounce-modal').hide();
		});

		$('#ouibounce-modal .modal-footer').on('click', function() {
				$('#ouibounce-modal').hide();
		});

		$('#ouibounce-modal .modal').on('click', function(e) {
				e.stopPropagation();
		});
    </script> -->

	<!-- КОНЕЦ ПОДКЛЮЧЕНИЙ -->

		
</body>

</html>