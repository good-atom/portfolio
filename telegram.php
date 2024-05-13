<?php

/*https://api.telegram.org/bot7028989155:AAHMubg8mSDT-6H0SMNVXQnoeW2zrqW9GiQ/getUpdates*/

$name = $_POST['name'];
$telegram = $_POST['telegram'];
$token = "7028989155:AAHMubg8mSDT-6H0SMNVXQnoeW2zrqW9GiQ";
$chat_id = "-4263865013";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телеграмм: ' => $telegram
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: success.html');
} else {
  echo "Error";
}
?>
