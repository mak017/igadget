<?php

function send_mail($subject, $message, $emails = array('Korn.vlad80@gmail.com'))
{
	//https://github.com/PHPMailer/PHPMailer/
	//
	//Links that fix the problem (you must be logged into google account):
	//https://accounts.google.com/b/0/DisplayUnlockCaptcha - включить
	//https://www.google.com/settings/u/1/security/lesssecureapps - проверить
	//https://security.google.com/settings/security/activity?hl=en&pli=1 - проверить

	require dirname(__FILE__).'/phpmailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->CharSet = "UTF-8";
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	
	$mail->Username = "igadget.leads@gmail.com";
	$mail->Password = "F847iahHFkwH";
	$mail->setFrom('igadget.leads@gmail.com');
	$mail->addReplyTo('igadget.leads@gmail.com');
	
	foreach ($emails as $email) {
		$mail->addAddress($email);
	}
	$mail->Subject = $subject;
	$mail->msgHTML($message);
	$mail->AltBody = $message;
	
    return $mail->send();
}

$name = $_POST['name'] ? $_POST['name'] : '-'; 
$telephone = $_POST['phone'] ? $_POST['phone'] : '-'; 
$head = $_POST['head'] ? $_POST['head'] : '-'; 
$message = $_POST['message'] ? $_POST['message'] : '-'; 


if( !empty($telephone)) {
	$email_subject = "Заявка с сайта.";
	
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

	send_mail($email_subject, $email_body, array('Korn.vlad80@gmail.com','as.zarubin@gmail.com'));
//	send_mail($email_subject, $email_body, array('Korn.vlad80@gmail.com'));

    //Передаем данные в RoboCRM
    $_POST['first_name'] = $name;
    $_POST['phone'] = $telephone;
    $_POST['comment'] = $head.' || Сообщение: '.$message;
    $_POST['tid'] = '55-968948256a5c';
    $_POST['fid'] = '1-8ce094e37af887b1e5bf';
    include_once "php_proxy_robocrm.php";
    
    header('Location: http://igadget.me/thankyou/index.html');
	exit;
        
} else {
	header('Location: http://igadget.me/');
	exit;
}

?>