<?php
	$msg_box = ""; // в этой переменной будем хранить сообщения формы
	$errors = array(); // контейнер для ошибок
	// проверяем корректность полей
	if($_POST['form_username3'] == "") 	 $errors[] = "Поле 'Имя' не заполнено!";
	if($_POST['form_phone3'] == "") 	 $errors[] = "Поле 'Номер телефона' не заполнено!";
/*	if($_POST['form_email3'] == "") 	 $errors[] = "Поле 'E-mail' не заполнено!"; */

	// если форма без ошибок
	if(empty($errors)){		
		// собираем данные из формы
		$message  = "Имя: " . $_POST['form_username3'] . "<br/>";
		$message .= "Номер телефона: " . $_POST['form_phone3'] . "<br/>";	
/*		$message .= "E-mail: " . $_POST['form_email3'] . "<br/>";	*/
		$message .= "Товар: " . $_POST['form_product1'] . "<br/>";	
		send_mail($message); // отправим письмо
		// выведем сообщение об успехе
		$msg_box = "ok";
	}else{
		// если были ошибки, то выводим их
		$msg_box = "";
		foreach($errors as $one_error){
			$msg_box .= "<span style='color: red;font-size: 14px;line-height: 20px;'>$one_error</span><br/>";
		}
	}

	// делаем ответ на клиентскую часть в формате JSON
	echo json_encode(array(
		'result' => $msg_box
	));
	
	
	// функция отправки письма
	function send_mail($message){
		// почта, на которую придет письмо
		$mail_to = "Korn.vlad80@gmail.com ".$_POST['opt_zak']; 
		// тема письма
		$subject = "Письмо с сайта, Купить ".$_POST['form_product1'];
		
		// заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: igadget <no-reply@igadget.me>\r\n"; // от кого письмо
		
		// отправляем письмо 
		mail($mail_to, $subject, $message, $headers);
	}