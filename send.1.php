<?php
$recepient="dizzzaster@gmail.com";
$date=date("d.m.y");
$time=date("H:i");
$backurl="https://creativearsolutions.com/next.html"; 

//---------------------------------------------------------------------- // 

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

  $message="
 <p>Имя: $login</p> 
 <p>Телефон: $phone</p> 
 <p>Email: $email</p> 
 <p>Сообщение: $msg</p> 
 "; 

  mail("$recepient", "$date $time Заказ с сайта", $message);

  print "<script language='Javascript'><!-- 
  function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
  //--></script> 
   
  $message 
   
  <p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";
?>
