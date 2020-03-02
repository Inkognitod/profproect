<?php
//Для начала проверим есть ли данные в полях name и email, что бы не слать совсем пустые формы :)
//Если всё в порядке, то работаем дальше
if (isset($_POST["name"]) && isset($_POST["email"]) ) { 

//Принимаем данные POST-запроса и записываем значения в переменные

$name = $_POST['name'];
$phone = $_POST['phone']; 
$email = $_POST['email'];

//Теперь давайте настроим куда отправляем и откуда

/*
$my_email = 'inkognitod@mail.ru'; // Куда отправляем*/
$my_email = 'profproect@bk.ru'; // Куда отправляем
$sender_email = '<profproect@bk.ru>'; // От кого отправляем
$title = "Заявка с сайта profproect116.ru"; 

//Сообщение, которое приходит на почту со всеми нужными нам данными:

$mes = "
 Имя: $name\n
 Телефон: $phone\n
 E-mail: $email\n
";

//Всё, теперь можно отправлять письмо на почту

$send = mail ($my_email,$title,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$sender_email");

// подключаем телеграм
$token = "954131762:AAGWSeQD0sWYmWYtJi3H-dd1p6on4JbNGZE";
$chat_id = "-433339781";
$arr = array(
    'Имя' => $name,
    'Телефон' => $phone,
    'Почта' => $email
  );
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");




}

?>