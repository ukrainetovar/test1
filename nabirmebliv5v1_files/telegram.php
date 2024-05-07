<?php

/* https://api.telegram.org/bot6670392647:AAFsU-8mfveA5bqEbqL07ced7ZVQE2oWdjE/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее 
*/


$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "6670392647:AAFsU-8mfveA5bqEbqL07ced7ZVQE2oWdjE";
$chat_id = "-4261148975";
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
