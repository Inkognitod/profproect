<?php
 /* Здесь проверяется существование переменных  */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 
 /* utm метки 
 if (isset($_POST['utm_source'])) {$utm_source = $_POST['utm_source'];}
 if (isset($_POST['utm_medium'])) {$utm_medium = $_POST['utm_medium'];}
 if (isset($_POST['utm_campaign'])) {$utm_campaign = $_POST['utm_campaign'];}
 if (isset($_POST['utm_term'])) {$utm_term = $_POST['utm_term'];}
 if (isset($_POST['utm_content'])) {$utm_content = $_POST['utm_content'];}
 if (isset($_POST['ref'])) {$ref = $_POST['ref'];}*/


/* Сюда впишите свою эл. почту  usupzyanov1991@mail.ru,inkognitod@mail.ru*/
 $subject = 'Заявка с сайта';
 $to_name = $_SERVER['HTTP_HOST'];//Отправитель';
 $address = "inkognitod@mail.ru";
 $headers = "From: \"$to_name\" <info@".$_SERVER['HTTP_HOST'].">\n";
 $headers .= "Content-type: text/plain; charset=\"utf-8\"";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Имя: $name  \nТелефон: $phone \Почта: $email \nИнформация о посетителе:\nIP посетителя: {$_SERVER['REMOTE_ADDR']} \nРеферер: {$_SESSION['server']['referer']}\n";
 
 /**\nUTM-метки:\nutm_source= {$_SESSION['utms']['utm_source']}\nutm_medium= {$_SESSION['utms']['utm_medium']}\nutm_term= {$_SESSION['utms']['utm_term']}\nutm_content= {$_SESSION['utms']['utm_content']}\nutm_campaign={$_SESSION['utms']['utm_campaign']}/

/* А эта функция как раз занимается отправкой письма на указанный вами email */
 $send = mail ($address,$subject,$mes,$header);
 header('Location: form-ok.php?name='.$name.'&phone='.$phone.'&email='.$email.'');


/** Отправка смс с помощью SmsaeroApi 
include_once('SmsaeroApi.class.php');
$smsaero_api = new SmsaeroApi('inkognitod@mail.ru','Expert69', 'NEWS'); // Пароль не в md5
var_dump($smsaero_api->send('79270472942', 'Заявка с сайта '.$phone, false, 0, 2)); // Отправка одного сообщения**/

?>
