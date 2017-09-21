<?php
	$msg_box = ""; // в этой переменной будем хранить сообщения формы
	$errors = array(); // контейнер для ошибок
	// проверяем корректность полей
	if($_POST['form_username2'] == "") 	 $errors[] = "Поле 'Имя' не заполнено!";
	if($_POST['form_phone2'] == "") 	 $errors[] = "Поле 'Номер телефона' не заполнено!";
/*	if($_POST['form_email2'] == "") 	 $errors[] = "Поле 'E-mail' не заполнено!"; */

	// если форма без ошибок
	if(empty($errors)){		
		// собираем данные из формы
		$message  = "Имя: " . $_POST['form_username2'] . "<br/>";
		$message .= "Номер телефона: " . $_POST['form_phone2'] . "<br/>";	
/*		$message .= "E-mail: " . $_POST['form_email2'] . "<br/>";	*/
		send_mail($message); // отправим письмо
		// выведем сообщение об успехе
		$msg_box = "ok";
	}else{
		// если были ошибки, то выводим их
		$msg_box = "";
		foreach($errors as $one_error){
			$msg_box .= "<span style='color: red;'>$one_error</span><br/>";
		}
	}

	// делаем ответ на клиентскую часть в формате JSON
	echo json_encode(array(
		'result' => $msg_box
	));
	
	
	// функция отправки письма
	function send_mail($message){
		// почта, на которую придет письмо
		$mail_to = "Korn.vlad80@gmail.com"; 
		// тема письма
		$subject = "Письмо с сайта, Сделать заказ ".$_POST['opt_zak'];
		
		// заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: igadget <no-reply@igadget.me>\r\n"; // от кого письмо
		
		// отправляем письмо 
		mail($mail_to, $subject, $message, $headers);
	}