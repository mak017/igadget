<?php

//function send_mail($subject, $message, $email = 'as.zarubin@gmail.com')
function send_mail($subject, $message, $email = 'Korn.vlad80@gmail.com')
{
    $to      = $email;
    $from    = 'no-reply@luna.igadget.me';
    $subject = $subject;
    $subject = '=?utf-8?b?' . base64_encode($subject) . '?=';
    $headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
    $headers .= "From: <" . $from . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: " . date('D, d M Y H:i:s O') . "\r\n";
    mail($email, $subject, $message, $headers);
    return 1;
}

$name = $_POST['name'] ? $_POST['name'] : '-'; 
$telephone = $_POST['phone'] ? $_POST['phone'] : '-'; 
$head = $_POST['head'] ? $_POST['head'] : '-'; 
$message = $_POST['message'] ? $_POST['message'] : '-'; 


if( !empty($_POST['phone'])) {
	$email_subject = "Заявка с сайта luna";
	
	$ref = 'Прямой вход';
	$url_from = 'Неизвестно';
	$utm = array();
    if (!empty($_SERVER['HTTP_REFERER'])) {
        $url = parse_url($_SERVER['HTTP_REFERER']);
        if (!empty($url['query'])) {
            parse_str($url['query'], $output);
        }

        if (!empty($output['utm_source'])) {
            $utm[] = '<b>Источник</b>: '.$output['utm_source'];
        }
		if (!empty($output['utm_medium'])) {
             $utm[] = '<b>Тип</b>: '.$output['utm_medium'];
        }
		if (!empty($output['utm_campaign'])) {
             $utm[] = '<b>Кампания</b>: '.$output['utm_campaign'];
        }
		if (!empty($output['utm_content'])) {
             $utm[] = '<b>Объявление</b>: '.$output['utm_content'];
        }
		if (!empty($output['utm_term'])) {
             $utm[] = '<b>Ключевое слово</b>: '.$output['utm_term'];
        }
		
		$url_from = $url['scheme'].'://'.$url['host'].$url['path'];
    }


	$email_body = "
	<p>Вам пришла заявка:</p>
	<p><b>".$head."</b><br>
	<b>Имя клиента</b>: ".$name."<br>
	<b>Телефон</b>: ".$telephone."<br>
	<b>Сообщение</b>: ".$message."<br>
	<b>IP</b>: ".$_SERVER['REMOTE_ADDR']."<br>
	<br><br>
	<b>Страница заявки</b>: <a href='".$url_from."'>".$url_from."</a><br>
	<br><br>
	".implode('<br>', $utm)."
	</p>";

    send_mail($email_subject, $email_body);

    //Send to Telegram    
    $txt = 'Заявка от: '.$telephone.' || Форма: '.$head.' || Сообщение: '.$message.' || Страница заявки: '.$url_from;
    $bottoken = "387627443:AAEIk6QtbUYpKBa435YI12lNaJO5F0dwRrE";
    $chat_id = "-158663878";
    $website="https://api.telegram.org/bot".$bottoken;
    $params=[
        'chat_id'=>$chat_id,
        'text'=>$txt,
    ];
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    //Передаем данные в RoboCRM
    $_POST['first_name'] = $name;
    $_POST['phone'] = $telephone;
    $_POST['comment'] = $head.' || Сообщение: '.$message;
    $_POST['tid'] = '153-772cbf53f103';
    $_POST['fid'] = '1-17ae99f3567a9f8fbaea';

    include_once "var/igadget.me/www/php_proxy_robocrm.php";
    
    header('Location: http://igadget.me/luna/thankyou/index.html');
	exit;
        
} else {
	header('Location: http://igadget.me/luna/');
	exit;
}

?>
