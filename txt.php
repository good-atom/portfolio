<?php
$filename = 'form_responses.txt';

if (!empty($_POST)) {
    $record = [
        // перечисляются поля формы
        'name' => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
        'telegram' => filter_input(INPUT_POST, 'telegram', FILTER_SANITIZE_NUMBER_INT),
    ];

    $recordString = implode('; ', $record) . PHP_EOL; // склеить значения через точку с запятой

    file_put_contents($filename, $recordString, FILE_APPEND);
} 
