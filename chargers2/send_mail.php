<?php
session_start();
if ($_POST['phone']> '')
{
$name = $_POST['name'];
$phone = $_POST['phone'];
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['HTTP_HOST'];
$head = $_POST['head'];
$utm_source = $_SESSION['utms']['utm_source'];
$utm_medium = $_SESSION['utms']['utm_medium'];
$utm_term = $_SESSION['utms']['utm_term'];
$utm_content = $_SESSION['utms']['utm_content'];
$utm_campaign = $_SESSION['utms']['utm_campaign'];


$to = "Korn.vlad80@gmail.com";//

$header = "Content-type: text/plain; charset=UTF-8\r\n";
$header .= "From: $to\r\n";
$header .= "MIME-Version: 1.0\r\n";

$title = "Заказ с сайта Повербанк $head $url";
$message = "Имя: $name \nТелефон: $phone IP-adress: $ip 
Источник: $utm_source
Тип: $utm_medium
Кампания: $utm_campaign
Объявление: $utm_content
Ключевое слово: $utm_term
";

$mail = mail($to, $title, $message, $header);
}
include('config.php');
//echo $_GET['name'];
//echo $_GET['phone'];
//echo $_GET['time'];
//**********************************************************************
//************************** SEND DATA to CRM **************************
$data = array(
        'order_id' => ''.date('dmy0Gis').'', //(авто)код заказа
	'site' => $_SERVER['SERVER_NAME'], //(авто)сайт отправитель заказа
        'product_id' => 1, //код товара
	//'product' => $_POST['pokupka_product_name'], //название товара
	'price' => $price_new, //цена товара
	'count' => 1, //количество товара
	'total' => $price_new, //сумма цены товара
	'bayer_name' => $_POST['name'], // покупатель
	'phone' => $_POST['phone'], // телефон
	'email' => $_POST['email'], //электронка
	'comment' => $_POST['head'], // комментарий
	'ip' => $_SERVER['REMOTE_ADDR'], //(авто)IP-адрес клиента	
'utm_source' => $_SESSION['utms']['utm_source'],	
'utm_medium' => $_SESSION['utms']['utm_medium'],	
'utm_term' => $_SESSION['utms']['utm_term'],	
'utm_content' => $_SESSION['utms']['utm_content'],	
'utm_campaign' => $_SESSION['utms']['utm_campaign']	
);
$send = urlencode(serialize($data));
echo '<img width="1" src="http://powerbank.lp-crm.biz/api/?data='.$send.'">';
//************************** SEND DATA to CRM ***************************
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
	<meta http-equiv="refresh" content="1; url=http://igadget.me/chargers2/thankyou/"/>
        <meta charset="utf-8">
        <title>Поздравляем! Ваш заказ принят!</title>
        <style type="text/css">
            body {
                line-height: 1;
                height: 100%;
                font-family: Arial;
                font-size: 15px;
                color: #313e47;
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                background: url('bg-ok.png');
            }
            h2 {
                margin: 0;
                padding: 0;
                font-size: 36px;
                line-height: 44px;
                color: #313e47;
                text-align: center;
                font-weight: bold;
            }
            a {
                color: #69B9FF;
            }
            .list_info li span {
                width: 150px;
                display: inline-block;
                font-weight: bold;
                font-style: normal;
            }
            .list_info {
               text-align: left;
               display: inline-block;
               list-style: none;
               margin-top: -10px;
               margin-bottom: -11px;
            }
            .list_info li {
                margin: 11px 0px;
            }
            .fail {
                margin: 10px 0 20px 0px;
                text-align: center;
            }
            .email {
                position: relative;
                text-align: center;
                margin-top: 40px;
            }
            .email input {
                height: 30px;
                width: 200px;
                font-size: 14px;
                padding-right: 10px;
                padding-left: 10px;
                outline: none;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #B6B6B6;
                margin-bottom: 10px;
            }
            .block_success {
                max-width: 960px;
                padding: 70px 30px 70px 30px;
                margin: -50px auto;
            }
            .success {
                text-align: center;
            }
        </style>        
    </head>
    <body>

        <div class="block_success">					
            <h2 style="text-transform: uppercase;">Поздравляем! Ваш заказ принят!</h2>
            <p class="success">
                В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.
            </p>
            <p class="fail success">Если вы ошиблись при заполнени формы, то, пожалуйста, <a href="javascript: history.back(-1);">заполните заявку еще раз</a></p>

			
        </div>
 </body>
</html>