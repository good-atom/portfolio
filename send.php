<?php

$name = $_POST['name'];
$telegram = $_POST['telegram'];
$token = "7127258591:AAH6NVA0V_Qy7KyIzNNPSbuvrKiZN_RcUxY";
$chat_id = "-4259134876";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телеграмм: ' => $telegram,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: my_web.html');
} else {
  echo "Error";
}
?>
