<?php

$adminemail = 'dizzzaster@gmail.com';

$title = 'Заказ с сайта';

// TODO: нужна проверка данных, иначе сервак похакають
$login = $_POST['login'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['message'];

$message = "
<p>Имя: $login</p> 
<p>Телефон: $phone</p> 
<p>Email: $email</p> 
<p>Сообщение: $msg</p> 
";

$res = mail($adminemail, $title, $message);

header(sprintf('Location: /?mail=%s', $res ? 'success' : 'failed');

/*<?

 echo  mail ("my_exist@gmail.com","test message",
             "test message","From:no-reply@gmail.com");

?>*/
