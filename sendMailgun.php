<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$date=date("d.m.y");
$time=date("H:i");

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

$subj = "$date $time Заявка с сайта";
$mssg = "
<p>Имя: $login</p> 
<p>Телефон: $phone</p> 
<p>Email: $email</p> 
<p>Сообщение: $msg</p>
";

$mg = Mailgun::create('key-example');
$mg->messages()->send('mg.creativearsolutions.com', [
  'from'    => 'postmaster@mg.creativearsolutions.com',
  'to'      => 'dizzzaster@gmail.com',
  'subject' => $subj,
  'text'    => $mssg
]);
?>
