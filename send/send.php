<?php
	$msg_box = ""; // в этой переменной будем хранить сообщения формы
	$errors = array(); // контейнер для ошибок
	// проверяем корректность полей
	if($_POST['form_username1'] == "") 	 $errors[] = "Поле 'Имя' не заполнено!";
	if($_POST['form_phone1'] == "") 	 $errors[] = "Поле 'Номер телефона' не заполнено!";
	if($_POST['form_email8'] == "") 	 $errors[] = "Поле 'Email' не заполнено!";

	// если форма без ошибок
	if(empty($errors)){		
		// собираем данные из формы
		$message  = "Имя: " . $_POST['form_username1'] . "<br/>";
		$message .= "Номер телефона: " . $_POST['form_phone1'] . "<br/>";	
		$message .= "Email: " . $_POST['form_email8'] . "<br/>";	
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
		//$mail_to = "karpovets90@gmail.com"; 
		// тема письма
		$subject = "Письмо с сайта, Закажите звонок. ".$_POST['opt_zak'];
		
		// заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: igadget <no-reply@igadget.me>\r\n"; // от кого письмо
		
		// отправляем письмо 
		mail($mail_to, $subject, $message, $headers);
	}