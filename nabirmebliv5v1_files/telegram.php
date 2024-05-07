<?php

/* https://api.telegram.org/bot6711779916:AAH-t1PeJLWppTvTivdCdfQJMZLakSqSonA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее 
*/


$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "6711779916:AAH-t1PeJLWppTvTivdCdfQJMZLakSqSonA";
$chat_id = "-4257850546";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: zakaz.html');
} else {
  echo "Error";
}
?>