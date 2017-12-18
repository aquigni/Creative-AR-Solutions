<?php

$config = require '../config.php';

$to = $config['orderForm']['emailTo'];
$title = 'Заказ с сайта';
$header = sprintf('From: %s', $config['orderForm']['emailFrom']);

// TODO: Enhance validation
$login = $_POST['login'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['message'];
$login = htmlspecialchars($login);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$login = urldecode($login);
$phone = urldecode($phone);
$email = urldecode($email);
$login = trim($login);
$phone = trim($phone);
$email = trim($email);
$login = stripslashes($login);
$phone = stripslashes($phone);
$email = stripslashes($email);

$message = "
Имя: $login
Телефон: $phone
Email: $email
Сообщение: $msg
";

$res = mail($to, $title, $message, $header);
header(sprintf('Location: /?mail=%s', $res ? 'success' : 'failed'));
