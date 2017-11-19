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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91308618-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91308618-1');
</script>

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

<body class="page-thankyou" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWTD3HZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header" style="float: left !important; text-align: center !important; width: 100% !important; padding: 15px !important; margin-left: 0px !important; margin-right: 0px !important">
                <a class="navbar-brand" style="float: none !important" href="../index.html">iGadget</a>
            </div>
        </div>
    </nav>

    <div class="container" style="font-family: 'Open Sans', sans-serif;">
        <div class="row">
            <div class="col-md-12 thanks">
                <p class="little-jumbo">Спасибо за Ваш выбор!</p>
                <p style="font-size: 1.2em">Мы свяжемся с Вами в ближайшее время!</p>
                <br>
                <span class="glyphicon glyphicon-ok"></span>
            </div>
        </div>
        <div class="other-offers">
            <p class="offers-red">СЕЗОН СКИДОК открыт</p>
            <p class="offers-header">Выбирайте, мы подобрали наилучшие предложения в сети</p>
            <div class="product-cards">
                <div class="product-card">
                    <div class="img-wrap">
                        <a href="#" data-toggle="modal" data-target="#apple-case">
                            <img src="/phones/case-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <div class="prices">
                            <div class="price price-old">
                                <span>599</span> грн</div>
                            <div class="price price-actual">
                                <span>499</span> грн</div>
                        </div>
                        <p class="title">Чехол силиконовый</p>
                        <p class="descr">Original Apple <span>iPhone 6 / 7</span></p>
                        <button type="button" class="btn-more" data-toggle="modal" data-target="#apple-case">Подробнее</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-wrap">
                        <a href="#" data-toggle="modal" data-target="#apple-case-plus">
                            <img src="/phones/case-plus-1-min.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <div class="prices">
                            <div class="price price-old">
                                <span>659</span> грн</div>
                            <div class="price price-actual">
                                <span>549</span> грн</div>
                        </div>
                        <p class="title">Чехол силиконовый</p>
                        <p class="descr">Original Apple <span>iPhone 6 plus / 7 plus</span></p>
                        <button type="button" class="btn-more" data-toggle="modal" data-target="#apple-case-plus">Подробнее</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-wrap">
                        <a href="#" data-toggle="modal" data-target="#speaker">
                            <img src="/phones/speaker-1-min.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <div class="prices">
                            <div class="price price-old">
                                <span>959</span> грн</div>
                            <div class="price price-actual">
                                <span>799</span> грн</div>
                        </div>
                        <p class="title">JBL Charge 3</p>
                        <p class="descr">Водонепроницаемая MP3 BlueTooth колонка</p>
                        <button type="button" class="btn-more" data-toggle="modal" data-target="#speaker">Подробнее</button>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-wrap">
                        <a href="#" data-toggle="modal" data-target="#earphones">
                            <img src="/phones/earphones-1-min.jpg" alt="">
                        </a>
                    </div>
                    <div class="product-info">
                        <div class="prices">
                            <div class="price price-old">
                                <span>779</span> грн</div>
                            <div class="price price-actual">
                                <span>649</span> грн</div>
                        </div>
                        <p class="title">Bluetooth наушники</p>
                        <p class="descr">с микрофоном MP3 FM S460 г</p>
                        <button type="button" class="btn-more" data-toggle="modal" data-target="#earphones">Подробнее</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="apple-case" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-slider">
                        <div class="carousel slide" id="case-slider">
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="/phones/case-1.jpg">
                                </div>
                                <div class="item" data-slide-number="1">
                                    <img src="/phones/case-2.jpg">
                                </div>
                                <div class="item" data-slide-number="2">
                                    <img src="/phones/case-3.jpg">
                                </div>
                                <div class="item" data-slide-number="3">
                                    <img src="/phones/case-4.jpg">
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#case-slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#case-slider" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- Carousel nav END-->
                        </div>

                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets" data-carousel-id="apple-case">
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-0">
                                    <img src="/phones/case-1.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-1">
                                    <img src="/phones/case-2.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-2">
                                    <img src="/phones/case-3.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-3">
                                    <img src="/phones/case-4.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <div class="title">Характеристики чехла силиконового Original Apple iPhone 6 / 7 </div>
                        <div class="characteristics">
                            <p>Цвет: белый, серый, синий, чёрный</p>
                            <p>Описание:</p>
                            <p>
                                Высокое качество исполнения в сочетании с минималистическим, но ярким внешним видом – это чехол Silicone Case для iPhone
                                6/7. Он предназначен для защиты iPhone от негативных моментов окружающей среды.
                            </p>
                            <p>
                                Чехол обладает наилучшими характеристиками: он обеспечивает абсолютную безопасность, стильно выглядит и удобен в использовании.
                            </p>
                            <p>
                                При изготовлении чехла использовался высококачественный силикон.
                            </p>
                            <p>
                                Поверхность чехла гладкая и шелковистая, благодаря этому пользоваться им будет приятно и комфортно: он не будет скользить
                                и его будет удобно держать в руках.
                            </p>
                        </div>
                        <div class="modal-bottom">
                            <div class="prices">
                                <div class="price price-actual">
                                    <span>499</span> грн</div>
                                <div class="price price-old">
                                    <span>599</span> грн</div>
                            </div>
                            <form class="form-inline" method="POST" action="send_mail.php">
                                <input type="hidden" name="head" value="Заказ звонка">
                                <input type="hidden" name="product_name" value="Чехол силиконовый Original Apple iPhone 6 / 7">
                                <input type="hidden" name="price" value="499">
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-sm" id="form-username"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-sm"
                                        id="form-phone" required="required">
                                </div>
                                <button type="submit" class="btn">Заказать</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="apple-case-plus" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-slider">
                        <div class="carousel slide" id="case-plus-slider">
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="/phones/case-plus-1-min.jpg">
                                </div>
                                <div class="item" data-slide-number="1">
                                    <img src="/phones/case-plus-2-min.jpg">
                                </div>
                                <div class="item" data-slide-number="2">
                                    <img src="/phones/case-plus-3-min.jpeg">
                                </div>
                                <div class="item" data-slide-number="3">
                                    <img src="/phones/case-plus-4-min.jpg">
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#case-plus-slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#case-plus-slider" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- Carousel nav END-->
                        </div>
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets" data-carousel-id="apple-case-plus">
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-0">
                                    <img src="/phones/case-plus-1-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-1">
                                    <img src="/phones/case-plus-2-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-2">
                                    <img src="/phones/case-plus-3-min.jpeg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-3">
                                    <img src="/phones/case-plus-4-min.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <div class="title">Характеристики чехла силиконового Original Apple iPhone 6 plus / 7 plus</div>
                        <div class="characteristics">
                            <p>Цвет: белый, серый, синий, чёрный</p>
                            <p>Описание:</p>
                            <p>
                                Высокое качество исполнения в сочетании с минималистическим, но ярким внешним видом – это чехол Silicone Case для iPhone
                                6/7. Он предназначен для защиты iPhone от негативных моментов окружающей среды.
                            </p>
                            <p>
                                Чехол обладает наилучшими характеристиками: он обеспечивает абсолютную безопасность, стильно выглядит и удобен в использовании.
                            </p>
                            <p>
                                При изготовлении чехла использовался высококачественный силикон.
                            </p>
                            <p>
                                Поверхность чехла гладкая и шелковистая, благодаря этому пользоваться им будет приятно и комфортно: он не будет скользить
                                и его будет удобно держать в руках.
                            </p>
                        </div>
                        <div class="modal-bottom">
                            <div class="prices">
                                <div class="price price-actual">
                                    <span>549</span> грн</div>
                                <div class="price price-old">
                                    <span>659</span> грн</div>
                            </div>
                            <form class="form-inline" method="POST" action="send_mail.php">
                                <input type="hidden" name="head" value="Заказ звонка">
                                <input type="hidden" name="product_name" value="Чехол силиконовый Original Apple iPhone 6 plus / 7 plus">
                                <input type="hidden" name="price" value="549">
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-sm" id="form-username"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-sm"
                                        id="form-phone" required="required">
                                </div>
                                <button type="submit" class="btn">Заказать</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="speaker" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-slider">
                        <div class="carousel slide" id="speaker-slider">
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="/phones/speaker-1-min.jpg">
                                </div>
                                <div class="item" data-slide-number="1">
                                    <img src="/phones/speaker-2-min.jpeg">
                                </div>
                                <div class="item" data-slide-number="2">
                                    <img src="/phones/speaker-3-min.jpg">
                                </div>
                                <div class="item" data-slide-number="3">
                                    <img src="/phones/speaker-4-min.jpg">
                                </div>
                                <div class="item" data-slide-number="4">
                                    <img src="/phones/speaker-5-min.jpg">
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#speaker-slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#speaker-slider" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- Carousel nav END-->
                        </div>
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets" data-carousel-id="speaker">
                            <li class="col-xs-2">
                                <a class="thumbnail" id="carousel-selector-0">
                                    <img src="/phones/speaker-1-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a class="thumbnail" id="carousel-selector-1">
                                    <img src="/phones/speaker-2-min.jpeg">
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a class="thumbnail" id="carousel-selector-2">
                                    <img src="/phones/speaker-3-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a class="thumbnail" id="carousel-selector-3">
                                    <img src="/phones/speaker-4-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-2">
                                <a class="thumbnail" id="carousel-selector-4">
                                    <img src="/phones/speaker-5-min.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <div class="title">Характеристики водонепроницаемой MP3 BlueTooth колонки JBL Charge 3</div>
                        <div class="characteristics">
                            <p>Цвет: Чёрный, синий, красный, серый и камуфляж</p>
                            <p>Описание:</p>
                            <p>
                                JBL Charge 3 — влагозащищенная беспроводная акустика, которая сочетает двойную функцию беспроводной акустики и портативной батареи. То есть, модель позволит вам слушать музыку без проводов и при этом заряжать мобильные устройства без розетки. Также устройство отличается великолепным звуком, оригинальным дизайном и качественными материалами сборки.
                            </p>
                            <p>
                                JBL Charge имеет встроенный аккумулятор 6000 мАч, с помощью которого акустика может проработать до 15 часов.
                            </p>
                            <p>
                                JBL Charge 3 полностью защищена от попадания влаги внутрь. То есть, колонку можно бросить в бассейн без каких-либо негативных последствий для нее — она является прочной и абсолютно водонепроницаемой.
                            </p>
                        </div>
                        <div class="modal-bottom">
                            <div class="prices">
                                <div class="price price-actual">
                                    <span>799</span> грн</div>
                                <div class="price price-old">
                                    <span>959</span> грн</div>
                            </div>
                            <form class="form-inline" method="POST" action="send_mail.php">
                                <input type="hidden" name="head" value="Заказ звонка">
                                <input type="hidden" name="product_name" value="JBL CHARGE 3">
                                <input type="hidden" name="price" value="799">
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-sm" id="form-username"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-sm"
                                        id="form-phone" required="required">
                                </div>
                                <button type="submit" class="btn">Заказать</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="earphones" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-slider">
                        <div class="carousel slide" id="earphones-slider">
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="/phones/earphones-1-min.jpg">
                                </div>
                                <div class="item" data-slide-number="1">
                                    <img src="/phones/earphones-2-min.jpg">
                                </div>
                                <div class="item" data-slide-number="2">
                                    <img src="/phones/earphones-3-min.jpg">
                                </div>
                                <div class="item" data-slide-number="3">
                                    <img src="/phones/earphones-4-min.jpg">
                                </div>
                            </div>
                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#earphones-slider" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#earphones-slider" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- Carousel nav END-->
                        </div>
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets" data-carousel-id="earphones">
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-0">
                                    <img src="/phones/earphones-1-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-1">
                                    <img src="/phones/earphones-2-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-2">
                                    <img src="/phones/earphones-3-min.jpg">
                                </a>
                            </li>
                            <li class="col-xs-3">
                                <a class="thumbnail" id="carousel-selector-3">
                                    <img src="/phones/earphones-4-min.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <div class="title">Характеристики Bluetooth наушников с микрофоном MP3 FM S460 г</div>
                        <div class="characteristics">
                            <p>Цвет: чёрный, серебряный, белый, синий, красный</p>
                            <p>Описание:</p>
                            <p>
                                Главные особенности описываемых наушников: Громкий объемный звук с бассами, Bluetooth подключение, FM радио, Слот для карты памяти. Вот почему наши ценители музыки выбирают данную модель.
                            </p>
                            <p>
                                Будучи наушниками типа Накладные, Bluetooth наушники с микрофоном MP3 FM S460 удобны для ежедневного прослушивания любимой музыки. Чистое звучание радует слух, а эргономичность гарантирует комфорт для ушей меломана.
                            </p>
                        </div>
                        <div class="modal-bottom">
                            <div class="prices">
                                <div class="price price-actual">
                                    <span>649</span> грн</div>
                                <div class="price price-old">
                                    <span>779</span> грн</div>
                            </div>
                            <form class="form-inline" method="POST" action="send_mail.php">
                                <input type="hidden" name="head" value="Заказ звонка">
                                <input type="hidden" name="product_name" value="BLUETOOTH НАУШНИКИ с микрофоном MP3 FM S460 г">
                                <input type="hidden" name="price" value="649">
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="text" name="name" placeholder="Имя..." class="form-control input-sm" id="form-username"
                                        required="required">
                                </div>
                                <div class="form-group">
                                    <input style="background: #f8f8f8;" type="phone" name="phone" placeholder="Номер телефона..." class="form-control input-sm"
                                        id="form-phone" required="required">
                                </div>
                                <button type="submit" class="btn">Заказать</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color:#333; color: #fff; font-family: 'Open Sans', sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="margin: 50px 0 0 0">
                    <blockquote>
                        <span style="font-size: 30px; text-transform: uppercase">Наши контакты</span>
                    </blockquote>
                    <ul style="list-style: none">
                        <li>
                            <i class="glyphicon glyphicon-home" style="margin-right: 15px; padding: 0.5em 0"> </i>ООО "СКИ Гагарин"</li>
                        <li>
                            <i class="glyphicon glyphicon-map-marker" style="margin-right: 15px; padding: 0.5em 0"> </i>г. Киев, ул. Стройиндустрии 8-б</li>
                        <li>
                            <i class="glyphicon glyphicon-user" style="margin-right: 15px; padding: 0.5em 0"> </i>ИНН 388057626503</li>
                        <li>
                            <i class="glyphicon glyphicon-earphone" style="margin-right: 15px; padding: 0.5em 0"> </i>(067) 448-88-55</li>
                    </ul>
                </div>
                <div class="col-md-4" style="margin: 50px 0 0 0">
                    <blockquote>
                        <span style="font-size: 30px; text-transform: uppercase">Связаться с нами</span>
                    </blockquote>
                    <span style="padding-left: 30px">
                        <i class="glyphicon glyphicon-time" style="margin-right: 15px; padding: 0.5em 0"></i>Работаем без выходных 9.00-20.00</span>
                    <br>
                    <span style="padding-left: 30px">
                        <i class="glyphicon glyphicon-shopping-cart" style="margin-right: 15px; padding: 0.5em 0"></i>Принимаем заявки через сайт 24/7</span>
                    <br>
                    <span style="padding-left: 30px">
                        <i class="glyphicon glyphicon-plane" style="margin-right: 15px; padding: 0.5em 0"></i>Доставляем по всей Украине!</span>
                </div>
                <div class="col-md-4" style="margin: 50px 0 70px 0">
                    <blockquote>
                        <span style="font-size: 30px; text-transform: uppercase">Подписаться на нас</span>
                    </blockquote>
                    <iframe style="border: 1px solid rgba(14, 9, 9, 0.45); border: none; overflow: hidden; box-shadow: -3px 9px 70px 1px rgba(0, 0, 0, 0.66)"
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fm.facebook.com%2FiGadget.ua%2F&tabs&width=320&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="320" height="214" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!--        <div id="scrollup"><img alt="Прокрутить вверх" src="phones/arrow_up.png" width="80px"></div>-->

    <!--        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">-->
    <!--        <link rel="stylesheet" href="../css/font-awesome.min.css">-->
    <!--        <link rel="stylesheet" type="text/css" href="../css/style.css">-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/carousel.min.js"></script>
    <script async type="text/javascript" src="../js/script.js"></script>

</body>
</html>