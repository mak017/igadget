<?php
	$msg_box = ""; // в этой переменной будем хранить сообщения формы
	$errors = array(); // контейнер для ошибок
	// проверяем корректность полей
	if($_POST['usr1'] == "") 	 $errors[] = "Поле 'Имя' не заполнено!";
	if($_POST['phone1'] == "") 	 $errors[] = "Поле 'Номер телефона' не заполнено!";
	if($_POST['comment1'] == "") 	 $errors[] = "Поле 'Вопрос' не заполнено!";

	// если форма без ошибок
	if(empty($errors)){		
		// собираем данные из формы
		$message  = "Имя: " . $_POST['usr1'] . "<br/>";
		$message .= "Номер телефона: " . $_POST['phone1'] . "<br/>";	
		$message .= "Вопрос: " . $_POST['comment1'] . "<br/>";	
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
		$mail_to = "Korn.vlad80@gmail.com"; 
		// тема письма
		$subject = "Письмо с сайта, У Вас остались вопросы ".$_POST['opt_zak'];
		
		// заголовок письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
		$headers .= "From: igadget <no-reply@igadget.me>\r\n"; // от кого письмо
		
		// отправляем письмо 
		mail($mail_to, $subject, $message, $headers);
	}