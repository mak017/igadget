<?php
	$msg_box = ""; // � ���� ���������� ����� ������� ��������� �����
	$errors = array(); // ��������� ��� ������
	// ��������� ������������ �����
	if($_POST['form_username8'] == "") 	 $errors[] = "���� '���' �� ���������!";
	if($_POST['form_phone8'] == "") 	 $errors[] = "���� '����� ��������' �� ���������!";

	// ���� ����� ��� ������
	if(empty($errors)){		
		// �������� ������ �� �����
		$message  = "���: " . $_POST['form_username8'] . "<br/>";
		$message .= "����� ��������: " . $_POST['form_phone8'] . "<br/>";	
		send_mail($message); // �������� ������
		// ������� ��������� �� ������
		$msg_box = "ok";
	}else{
		// ���� ���� ������, �� ������� ��
		$msg_box = "";
		foreach($errors as $one_error){
			$msg_box .= "<span style='color: red;'>$one_error</span><br/>";
		}
	}

	// ������ ����� �� ���������� ����� � ������� JSON
	echo json_encode(array(
		'result' => $msg_box
	));
	
	
	// ������� �������� ������
	function send_mail($message){
		// �����, �� ������� ������ ������
		$mail_to = "Korn.vlad80@gmail.com"; 
		// ���� ������
		$subject = "������ � �����, �������� ������";
		
		// ��������� ������
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n"; // ��������� ������
		$headers .= "From: igadget <no-reply@igadget.me>\r\n"; // �� ���� ������
		
		// ���������� ������ 
		mail($mail_to, $subject, $message, $headers);
	}