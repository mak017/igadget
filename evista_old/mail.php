<?php
// Check for empty fields

$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));

// Create the email and send the message
$to = 'korn.vlad80@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Evista контактные данные:  $name";
$email_body = "У Вас новое сообщение с сайта Evista.com.ua.\n\n"."Поднобней:\n\nИмя: $name\n\nТелефон: $phone";
$headers = "From: evista.com.ua\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//return true;

$_POST['first_name'] = $name;
$_POST['phone'] = $phone;
$_POST['tid'] = '55-968948256a5c';
$_POST['fid'] = '1-8ce094e37af887b1e5bf';
return include_once "php_proxy_robocrm.php";
?>
