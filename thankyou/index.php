<?php
//***************** Страница с завершением заказа ******************
session_start();






// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    1 => array( 
            'product_id' => $_GET['product_id'],    //код товара (из каталога CRM)
            'price'      => $_GET['product_price'], //цена товара 1
            'count'      => '1'                      //количество товара 1
    )
);
$products = urlencode(serialize($products_list));
 
// параметры запроса
$data = array(
    'key'             => '608da92ac17ded48bd161729757b30aa', //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => 'UA',                      // Географическое направление заказа
    'office'          => '',                   // Офис (id в CRM)
    'products'        => $products,                 // массив с товарами в заказе
    'bayer_name'      => $_GET['name'],             // покупатель (Ф.И.О)
    'phone'           => $_GET['phone'],           // телефон
    'email'           => $_GET['email'],           // электронка
    'comment'         => $_GET['product_name'],    // комментарий
    'site'            => $_SERVER['SERVER_NAME'],  // сайт отправляющий запрос
    'ip'              => $_SERVER['REMOTE_ADDR'],  // IP адрес покупателя
    'delivery'        => $_GET['delivery'],        // способ доставки (id в CRM)
    'delivery_adress' => $_GET['delivery_adress'], // адрес доставки
    'payment'         => '',          // вариант оплаты (id в CRM)
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source 
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium 
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term   
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content    
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'] // utm_campaign
);
 
// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://powerbank.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON
session_destroy();

?>
















<!DOCTYPE html>
<html>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PWTD3HZ');</script>
    <!-- End Google Tag Manager -->    

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>iGadget — спасибо за заказ!</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" media="bogus">-->
<!--    <link rel="stylesheet" href="../css/font-awesome.min.css" media="bogus">-->
<!--    <link rel="stylesheet" type="text/css" href="../css/style.css" media="bogus">-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
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

<body data-spy="scroll" data-target=".navbar" data-offset="50">

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
    
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header" style="float: left !important; text-align: center !important; width: 100% !important; padding: 15px !important; margin-left: 0px !important; margin-right: 0px !important">
				<a class="navbar-brand" style="float: none !important" href="../index.html">iGadget</a>
			</div>			
		</div>
	</nav>

    <div class="container" style="font-family: 'Open Sans', sans-serif;">
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin: 160px 0 100px 0">
                <p class="little-jumbo" style="font-size: 42px">Спасибо за Ваш выбор!</p>
                <p style="font-size: 1.2em">Мы свяжемся с Вами в ближайшее время!</p><br>



                <span class="glyphicon glyphicon-ok" style="font-size: 100px; color: #2ca942"></span>
            </div>
        </div>
    </div>


    <div style="background-color:#333; color: #ffffff; font-family: 'Open Sans', sans-serif;">
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
					<span style="padding-left: 30px"><i class="glyphicon glyphicon-time" style="margin-right: 15px; padding: 0.5em 0"></i>Работаем без выходных 9.00-20.00</span><br>
					<span style="padding-left: 30px"><i class="glyphicon glyphicon-shopping-cart" style="margin-right: 15px; padding: 0.5em 0"></i>Принимаем заявки через сайт 24/7</span><br>
					<span style="padding-left: 30px"><i class="glyphicon glyphicon-plane" style="margin-right: 15px; padding: 0.5em 0"></i>Доставляем по всей Украине!</span>					
				</div>
                <div class="col-md-4" style="margin: 50px 0 70px 0">
                    <blockquote><span style="font-size: 30px; text-transform: uppercase">Подписаться на нас</span></blockquote>
                    <iframe style="border: 1px solid rgba(14, 9, 9, 0.45); border: none; overflow: hidden; box-shadow: -3px 9px 70px 1px rgba(0, 0, 0, 0.66)" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2FiGadget.ua%2F&tabs&width=320&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="320" height="214" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
                </div>
            </div>
        </div>
    </div>

<!--        <div id="scrollup"><img alt="Прокрутить вверх" src="phones/arrow_up.png" width="80px"></div>-->

<!--        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
<!--        <link rel="stylesheet" href="../css/font-awesome.min.css">-->
<!--        <link rel="stylesheet" type="text/css" href="../css/style.css">-->

        <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--		<script async src="bootstrap/js/bootstrap.min.js"></script>-->
        <script async type="text/javascript" src="../js/script.js"></script>

    </body>
</html>