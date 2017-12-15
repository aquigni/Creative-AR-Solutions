<?php

$to = 'dizzzaster@gmail.com';
$title = 'Заказ с сайта';
$header = 'From: noreply@creativearsolutions.com';

// TODO: Enhance validation
$login = $_POST['login'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['message'];
$login = htmlspecialchars($login);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$msg = htmlspecialchars($message);
$login = urldecode($login);
$phone = urldecode($phone);
$email = urldecode($email);
$msg = urldecode($message);
$login = trim($login);
$phone = trim($phone);
$email = trim($email);
$msg = trim($message);

$message = "
Имя: $login
Телефон: $phone
Email: $email
Сообщение: $msg
";

$res = mail($to, $title, $message, $header);
header(sprintf('Location: /?mail=%s', $res ? 'success' : 'failed'));

// <?

//  echo  mail ("my_exist@gmail.com","test message",
//              "test message","From:no-reply@gmail.com");

?>
