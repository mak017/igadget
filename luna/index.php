<?php 
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
session_id();
include ('config.php');
$price_old=floor(($price_new/(100-$skidka))*100);
?>
<!DOCTYPE html>
<html lang="ru">

<head> 
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W5D6WDF');</script>
	<!-- End Google Tag Manager -->	
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="google-site-verification" content="PJKiOVDYa5eAN1TpR-jCrxvBXUph6mcG09FmlrP_z_k" />
	
	<meta property="og:title" content="Magnetic - магнитные держатели" />
	<meta property="og:description" content="Магнитный держатель для телефона, покупайте телефон держатель по ОПТОВОЙ цене! (067) 44-888-55" />
	<meta property="og:image" content="http://igadget.me/phones/photo_background.png" />
	<meta property="og:url" content= "http://igadget.me/magnetic" />

	<title>iGadget - беспроводные зарядки для телефона</title>
<!--
	<meta name="keywords" content="беспроводная зарядка, беспроводная зарядка купить, qi зарядка, беспроводное зарядное устройство для телефона, беспроводная зарядка самсунг, как работает беспроводная зарядка, безпровідна зарядка"/>
	<meta name="description" content="Беспроводное зарядное устройство LUNA, покупайте беспроводную зарядку для Samsung, iPhone, Windows Phone по ОПТОВОЙ цене! (067) 44-888-55" />
-->
	
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="bogus">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="bogus">
	<link rel="stylesheet" type="text/css" href="../css/style.css?v2" media="bogus">
	<link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" media="bogus">

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body class="magnetic red-theme" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5D6WDF"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<!-- NAVBAR -->
	
	<nav class="navbar navbar-fixed-top navbar-solomon">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand navbar-brand-solomon" href="#"><span class="span-brand-solomon">I</span>Gadget</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar1">
				<ul class="nav navbar-nav navbar-right navbar-solomon-li">
					<li><a href="#section1">Видеообзор</a></li>
					<li><a href="#section2">Модели</a></li>
					<li><a href="#section3">Преимущества</a></li>
					<li><a href="#section4">Установка</a></li>
					<li><a href="#section5">Как заказать</a></li>	
					<li><button type="button" class="btn122" data-toggle="modal" data-target="#myModal70">СВЯЗАТЬСЯ С НАМИ</button></li>			
				</ul>						
			</div>
		</div>
	</nav>	

	<!-- NAVBAR END-->

	<div class="container main-logo-margin">
		<div class="row">
			<div class="col-sm-12 background-black">
				<div class="col-sm-6 left-main-block-magnetic">
					<h1 class="h1-magnetic">Магнитный держатель смартфона в авто<br>RoidMi от Xiaomi</h1>
					<p class="p-below-h1-magnetic solomon-light">Тем, кому БЕЗОПАСНОСТЬ и КОМФОРТ за рулём, превыше всего!</p>
					<a href="#main-deal" class="btn-buy btn-fast-zakaz">Быстрый заказ</a>
				</div>
				<div class="col-sm-6 right-main-block-magnetic display-none">
						<img src="../phones/nagrada.png">
					<p class="p-below-nagrada">Признание и новаторство Лучший <br>автоаксессуар года на выставке <br>CTIA 2016 в Лас-Вегасе.</p>
				</div>
			</div>
		</div>
	</div>

		<div class="mouse-button"></div>
		<a href="#section1" class="mouse-body"></a>
		<p class="mouse-text text-center">узнать больше</p>

	<div class="container second-block">
		<div class="row">
			<div class="col-sm-4">
					<img class="img-responsive photo-center" src="../phones/1magnetic.jpg">
			</div>
			<div class="col-sm-4">
					<img class="img-responsive photo-center" src="../phones/2magnetic.jpg">
			</div>
			<div class="col-sm-4">
					<img class="img-responsive photo-center" src="../phones/3magnetic.jpg">
			</div>
		</div>
	</div>

	<div id="section1"></div>

	<div class="container">
		<p class="jumbo margin-photo-magnetic">Убедитесь лично насколько эффективен <br>и прост в использовании магнитный держатель <br><span class="semibold">Xiaomi RoidMI</span></p>
	</div>		

	<div class="container video border-mobile">	
		<div class="row">			
			<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">	
				<div class="embed-responsive embed-responsive-16by9 youtube-shadow"> 
					<iframe class="youtube-iframe" src="https://www.youtube.com/embed/g6FjAdwuXec?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> 
				</div>
			</div>
		</div>
		<p class="text-center video-text">Магнит успешно выдержал тест драйв на наших дорогах. Смотрите в видео.</p>
	</div>	

	<div class="container" id="main-deal">
		<div class="row">
			<div id="section2"></div>
			<div class="big-margin">
				<p class="jumbo">АКЦИЯ! <span class="skidka-normal">Скидка до 35%</span> на обе модели!</p>
				<p class="text-center solomon-light p-below-jumbo">Только у нас! Успей купить магнитные держатели выгодно!</p>
			</div>

			<!-- SLIDER 1 -->
			<div class="col-sm-6 text-center slider-with-border">
				<p class="text-center solomon-light">Магнитный автомобильный держатель <br><span style="font-family: 'Solomon Sans SemiBold'; font-size: 18px">Roidmi H1</span></p>
				
				<div class="col-sm-12" id="slider2">
					<div class="row">
						<div class="col-sm-12" id="carousel-bounding-box2">
							<div class="carousel slide" id="myCarousel299">
								<div class="carousel-inner">
									<div class="active item" data-slide-number="0"><img src="../phones/11-slider-min.jpg"></div>
									<div class="item" data-slide-number="1"><img src="../phones/22-slider-min.png"></div>
									<div class="item" data-slide-number="2"><img src="../phones/55-slider.jpg"></div>
									<div class="item" data-slide-number="3"><img src="../phones/66-slider.jpg"></div>
									<div class="item" data-slide-number="4"><img src="../phones/33-slider.jpg"></div>
									<div class="item" data-slide-number="5"><img src="../phones/44-slider.jpg"></div>
								</div>
								<!-- Carousel nav 1 -->
								<a class="left carousel-control" href="#myCarousel299" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#myCarousel299" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
								<!-- Carousel nav 1 END-->
							</div>
						</div>
					</div>
				</div>
				<!-- Bottom switcher of slider 1 -->
				<ul class="hide-bullets">
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector2-0"><img src="../phones/11-slider_min-min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector2-1"><img src="../phones/22-slider_min-min.png"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector2-2"><img src="../phones/55-slider_min.jpg"></a></li>					
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector2-3"><img src="../phones/66-slider_min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector2-4"><img src="../phones/33-slider_min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector2-5"><img src="../phones/44-slider_min.jpg"></a></li>
				</ul>
				<!-- Bottom switcher of slider 1 END-->		

				<img id="garanty-logo" src="../phones/garanty_logo.png">

				<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal89">Подробнее</a>	
					<div id="myModal89" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="text-align: center; background-color: #eee">
									<p class="modal-title" style="font-size: 20px">Характеристики модели Roidmi H1</p>
								</div>
								<div class="modal-body" style="padding: 25px; text-align: left; font-size: 15px">									
									<ul>
										<li>Производитель: Xiaomi</li>
										<li>Держатель / подставка для: смартфона, планшета, навигатора</li>
										<li>Крепление: на панель салона автомобиля (липучка 3М)</li>
										<li>Материал: металл</li>
										<li>Цвет: чёрный / металик / красный</li>
										<li>Диаметр магнита: 32 мм / вес 49 гр</li>
										<li>Регулируемый угол оборота: 360 град</li>
										<li>Гарантия: 12 месяцев</li>
									</ul><br>
									<p>
										<b>Пластины</b>
									</p>
									<p>
										В комплект входят несколько стильных металлических пластин. Пластина крепится на телефон или на чехол. Даже если вы закрепите пластину под чехлом, магнитный держатель надёжно удержит Ваше устройство на любых дорогах и при любых вибрациях!
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Закрыть</button>
								</div>
							</div>
						</div>
					</div>
				
				<button type="button" class="btn-buy discount btn-buy-fantasy" data-toggle="modal" data-target="#myModal60">Купить за 399 грн</button>
					<div id="myModal60" class="modal fade" role="dialog" style="font-family: 'Open Sans', sans-serif;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="text-align: center">
									<p class="modal-title" style="font-size: 25px">Купить Roidmi H1</p>
									<p style="margin-top: 12px; margin-bottom: -2px; font-size:15px">Мы свяжемся с Вами в течении часа</p>
								</div>
								<div class="modal-body">
								    <form method="POST" action="send_mail.php">
                                        <input type="hidden" name="head" value="Roidmi H1">
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
				<p class="below-button solomon-light">Вместо 500 грн</p>
			</div>			
			<!-- SLIDER 1 END-->
			
			<!-- SLIDER 2 -->
			<div class="col-sm-6 text-center">
				<p class="text-center solomon-light">Магнитный автомобильный держатель <br><span style="font-family: 'Solomon Sans SemiBold'; font-size: 18px">RoidMi Vent Mount</span></p>

				<div class="col-sm-12" id="slider">
					<div class="row">
						<div class="col-sm-12" id="carousel-bounding-box">
							<div class="carousel slide" id="myCarousel233">
								<div class="carousel-inner">
									<div class="active item" data-slide-number="0"><img src="../phones/1-slider.jpg"></div>
									<div class="item" data-slide-number="1"><img src="../phones/2-slider.jpg"></div>
									<div class="item" data-slide-number="2"><img src="../phones/5-slider.jpg"></div>
									<div class="item" data-slide-number="3"><img src="../phones/4-slider.jpg"></div>
									<div class="item" data-slide-number="4"><img src="../phones/6-slider.jpg"></div>
									<div class="item" data-slide-number="5"><img src="../phones/3-slider.jpg"></div>
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
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector-0"><img src="../phones/1-slider_min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector-1"><img src="../phones/2-slider_min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector-2"><img src="../phones/5-slider_min.jpg"></a></li>					
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector-3"><img src="../phones/4-slider_min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector-4"><img src="../phones/6-slider_min.jpg"></a></li>
					<li class="col-xs-2"><a class="thumbnail" id="carousel-selector-5"><img src="../phones/3-slider_min.jpg"></a></li>
				</ul>
				<!-- Bottom switcher of slider END-->

				<img id="garanty-logo" src="../phones/garanty_logo.png">

				<a class="btn9090 solomon-light" data-toggle="modal" data-target="#myModal99">Подробнее</a>						
					<div id="myModal99" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" style="text-align: center; background-color: #eee">
									<p class="modal-title" style="font-size: 20px">Характеристики модели Vent Mount</p>
								</div>
								<div class="modal-body" style="padding: 25px; text-align: left; font-size: 15px">									
									<ul>
										<li>Производитель: Xiaomi</li>
										<li>Держатель / подставка для: смартфона, планшета, навигатора</li>
										<li>Крепление: дефлектор / решётка вентиляции салона</li>
										<li>Материал: метал + резина</li>
										<li>Цвет: чёрный / металик / красный</li>
										<li>Параметры держателя: 36 мм / вес 60 гр</li>
										<li>Регулируемый угол оборота: 360 град</li>
										<li>Гарантия: 12 месяцев </li>
									</ul><br>
									<p>
										<b>Пластины</b>
									</p>
									<p>
										В комплект входят несколько стильных металлических пластин. Пластина крепится на телефон или на чехол. Даже если вы закрепите пластину под чехлом, магнитный держатель надёжно удержит Ваше устройство на любых дорогах и при любых вибрациях!
									</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Закрыть</button>
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
									<p class="modal-title text-center" style="font-size: 25px">Купить Vent Mount</p>
									<p class="solomon-light" style="margin-top: 12px; margin-bottom: -2px; font-size: 15px; text-align: center">Мы свяжемся с Вами в течении часа.</p>
								</div>
								<div class="modal-body">
									<form method="POST" action="send_mail.php">
										<input type="hidden" name="head" value="Vent Mount">
										<div class="form-group" style="margin-top: 15px">
											<input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-lg" id="form-username4" required="required">
											<!-- <input type="hidden" id="form-product2" value="Vent Mount"> -->
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

	<div id="last"></div>	

	<div class="container magnetic-info">
		<div class="row">
			<div class="col-sm-12 background-black">
				<p class="jumbo margin-best"><span class="semibold">Лучшая на рынке фиксация</span> любого смартфона в Вашем автомобиле от Xiaomi</p>
				<div class="col-sm-7 mag-padding-left">
					<p class="font-24 solomon-light mag-margin-top1">Магнитный автодержатель <span class="semibold">Xiaomi RoidMI</span> — абсолютно безопасен для телефона!</p>
					<p class="font-24 semibold mag-margin-top2">Определитесь с выбором</p>
					<p class="font-16 solomon-light mag-margin-top3">Держатель на решетку воздуховода или на липучке.</p>
					<p class="font-16 solomon-light mag-margin-top4">На рынке существуют и дешевые держатели. Они могут привлекать ценой, но не обладают необходимой силой фиксации. В реалиях наших дорог — они просто бесполезны!</p>
					<p class="font-24 solomon-light mag-1">Мы и Xiaomi гарантируем Вам надежную фиксацию смартфона на любых неровностях дороги!</p>
				</div>
				<div class="col-sm-5">
						<img class="xiaomi-trubka" src="../phones/Xiaomi_RoidMi-right.png">
						<img class="xiaomi-trubka-mobile img-responsive" src="../phones/Xiomi_Roidmi.png">
				</div>
			</div>
		</div>
	</div>	

	<div class="container">
		<div class="row">
			<div id="section3"></div>
			<h2 id="super-opt" class="jumbo text-center"><span class="super-options">Преимущества</span> магнитного автодержателя <br><span class="semibold">Xiaomi RoidMI</span></h2>
			<div class="col-sm-9">
					<img class="img-responsive" src="../phones/big-phone.png">
			</div>
			<div class="col-sm-3">
				<div class="block-1">
					<p class="font-24 semibold margin-super-opt">Универсальность</p>
					<span class="font-16 solomon-light">Подходит для всех телефонов, <br>планшетов или навигаторов</span>
				</div>
				<div class="block-2">
					<p class="font-24 semibold margin-super-opt">Компактность</p>
					<span class="font-16 solomon-light">Незаметно разместится <br>в любом удобном месте авто, <br>не закрывая обзорность <br>или функциональныечасти</span>
				</div>
				<div class="block-3">
					<p class="font-24 semibold margin-super-opt">Безопасность</p>
					<span class="font-16 solomon-light">Не вредит и не оставляет <br>следов на девайсе или авто</span>
				</div>
				<div class="block-4">
					<p class="font-24 semibold margin-super-opt">Надежность</p>
					<span class="font-16 solomon-light">Неодимовые магниты надежно <br>удержат ваше устройство <br>на любых дорогах</span>
				</div>
			</div>
		</div>
	</div>

	<div class="container magnetic-how-to">
		<div class="row">
			<div id="section4"></div>
			<div class="col-sm-12 background-black">
				<p class="jumbo margin-best">Установить <span class="semibold">Xiaomi RoidMI</span> также просто, <br>как пристегнуть ремень безопасности</p>
				<div class="col-sm-5 mag-padding-left22">
					<p class="font-24 semibold mag-margin-top22">Наклейте держатель на торпеду</p>
					<p class="font-16 solomon-light mag-margin-top3">Предварительно обезжирив поверхность спиртовой салфеткой, которая идёт в комплекте, наклейте держатель на любое место в автомобиле.</p>
					<p class="font-24 semibold mag-margin-top22">Наклейте пластинку на устройство</p>
					<p class="font-16 solomon-light mag-margin-top3">Тонкая металлическая пластинка украсит заднюю сторону телефона или чехла, так же можно спрятать её под крышку устройства. На работу мобильного телефона или планшета она не влияет.</p>
					<p class="font-24 semibold mag-margin-top22">Высококачественный скотч</p>
					<p class="font-16 solomon-light mag-margin-top3">Держатель клеится высококачественным скотчем, стойким к температурным колебаниям и при отклеивании он легко отходит от поверхности. </p>
				</div>
				<div class="col-sm-7">
						<img class="car" src="../phones/car.png">
				</div>
			</div>
		</div>
	</div>	

	<div class="container">
		<div class="row">
			<div id="section5"></div>
			<div class="col-sm-12">
				<h2 class="jumbo"><span class="skidka-normal">Как заказать</span> магнитный автодержатель <br><span class="semibold">Xiaomi RoidMI?</span></h2>
					<img id="zakaz" class="img-responsive" src="../phones/zakaz-magnetic.png">
			</div>
		</div>
	</div>

	<div class="background-black delivery">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p id="dostavka" class="jumbo">Доставка и оплата</p>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-6 padding-160 slider-with-border-orange">
						<span class="dostavka_name">ПО КИЕВУ</span> <img src="../phones/kyiv_herb.png">
						<p class="p-below-dostavka-name solomon-light">Курьером <br>по Киеву</p>
						<p class="solomon-light">Доставка производится в пределах Киева;</p>
						<p class="solomon-light">Оплата курьеру при получении заказа;</p>
						<p class="solomon-light">Стоимость доставки - от 30 грн.</p>
					</div>
					<div class="col-sm-6 padding-160">
						<span class="dostavka_name">ПО УКРАИНЕ</span> <img id="nova-poshta" src="../phones/nova_poshta.png">
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
										<img class="img-circle" src="../phones/avatar_11.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Отличная держалка. В Honda Civic села как родная. Как будто с завода шла. <br><br><b>Достоинства:</b> Компактная органично смотрится на торпеде, хорошо держит, никаких заморочек снять поставить.</p>
										<small>Виктор</small>
									</div>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="../phones/avatar_22.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Гениальный держатель для телефона. Небольших размеров, стильный, мощный магнит держит даже через чехол, не слетает на ямах!</p>
										<span><b>Достоинства:</b> Встал на воздуховод, как влитой. Держит телефон в любом положении.</span>
										<small>Максим</small>
									</div>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="../phones/avatar_33.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Приспособил на стекле слева внизу, очень удобно, не мешает обзору. Рекомендую!</p>
										<span><b>Достоинства:</b> Угол поворота 360 град, прочный, отлично держится на стекле, сильные магниты. Опробовал на ухабах, держит прекрасно, даже через чехол, удобный в применении.</span>
										<small>Александр</small>
									</div>
								</div>
							</blockquote>
						</div>
						<div class="item">
							<blockquote>
								<div class="row">
									<div class="col-sm-3 text-center">
										<img class="img-circle" src="../phones/avatar_44.jpg" style="width: 100px; height: 100px">
									</div>
									<div class="col-sm-9 otzyv">
										<p>Удобно пользоваться навигатором. Незаменимая вещь в путешествиях на автомобиле.</p>
										<span><b>Достоинства:</b> Надежно держит смартфон в любом положении, включая проезд по «ухабистой" дороге и "лежащим полицейским".</span>
										<small>Кирилл</small>
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

	<div class="answers background-black">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p id="otvety" class="jumbo">Ответы на вопросы</p>
				</div>
				<button class="accordion">Влияет ли магнит на работу устройств?</button>
					<div class="acc">
						<p class="acc_top">Нет, не влияет. Магниты уже давно используются в аксессуарах для мобильных телефонов (чехлы с верхней крышкой, магнитные/индукционные зарядки)</p>
					</div>
				<button class="accordion">Это дорого?</button>
					<div class="acc">
						<p class="acc_top">Не хочется говорить о размере затрат пусть даже после небольшого ДТП, когда водитель отвлёкся на навигатор или пришедшую ему СМС. Давайте будем говорить о безопасности.</p>
					</div>
				<button class="accordion">Для каких телефонов и планшетов подходит?</button>
					<div class="acc">
						<p class="acc_top">Магнитный держатель Xiaomi RoidMI универсален и подходит для 95% мобильных телефонов. Главный индикатор совместимости - вес устройства. Если ваш телефон или планшет весит менее 750 грамм - ваше устройство будет надежно держать. Все что тяжелее (в основном это планшеты более 7') - надежная фиксация не гарантируется. Если вы все-таки хотите прикрепить планшет более 7' - мы рекомендуем крепить так, чтобы была опора на приборной панели, которая будет фиксировать планшет.</p>
					</div>
				<button class="accordion">Надежно ли фиксирует держатель Xiaomi RoidMI?</button>
					<div class="acc">
						<p class="acc_top">Да. Магнитное крепление Xiaomi RoidMI надежно удерживает ваш телефон даже если вы поймаете кочку или глубокую яму. Проверено на дорогах Украины и брусчатке Киева.</p>
					</div>
				<button class="accordion">Как происходит доставка и оплата?</button>
					<div class="acc">
						<p class="acc_top">Мы доставляем заказы по всей Украине с оплатой при получении, также возможна предоплата. Выбрать способ доставки вы можете при общении с менеджером. Просто оставьте заявку и дождитесь звонка.</p>
					</div>
				<button class="accordion">Предоставляется ли гарантия?</button>
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
						<iframe style="border: 1px solid rgba(14, 9, 9, 0.45); border: none; overflow: hidden; box-shadow: -3px 9px 70px 1px rgba(0, 0, 0, 0.66)" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2FiGadget.ua%2F&tabs&width=320&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="320" height="214" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
					<p style="margin-top: 100px; color: #333"><a href="opt/index.html" style="color: #333">Оптовым покупателям</a></p>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER END -->

	<!-- ПОДКЛЮЧЕНИЯ -->	

	<div class="slidebox magnetic" id="slidebox2">
		<button type="button" class="close">&times;</button>
		<p class="p-inside-slidebox">Безопасный тест драйв на 7 дней!</p>
		<p>Попробуйте в течение недели. Если не понравится, мы вернем вам деньги.</p>
	</div>

	<div id="scrollup"><img alt="Прокрутить вверх" src="../phones/scroll_up.png" width="60%"></div>

	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel='stylesheet' type='text/css' href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script async src="../bootstrap/js/bootstrap.min.js"></script>	
	<script async type="text/javascript" src="../js/script.js?v1"></script>	
	<script type="text/javascript" src="../js/jquery.maskedinput.min.js"></script>
	<script async type="text/javascript" src="../js/carousel.min.js?v1"></script>

	<script language="JavaScript">
		$(document).ready(function() {
			$("input[name=phone]").mask("+38-999-999-99-99");
		});
	</script>

	<!-- КОНЕЦ ПОДКЛЮЧЕНИЙ -->
		
</body>

</html>