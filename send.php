<?php

/*https://api.telegram.org/bot7107354734:AAHJumfOCzE-RCTNs6fHGboVsL1Ry48Ark8/getUpdates*/

$name = $_POST['name'];
$telegram = $_POST['telegram'];
$token = "7107354734:AAHJumfOCzE-RCTNs6fHGboVsL1Ry48Ark8";
$chat_id = "-4278743283";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телеграмм: ' => $telegram,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
        /*header('Location: my_web.html'); перебрасывает на my_web*/
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
    }
?>
