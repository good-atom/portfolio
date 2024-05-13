<?php
$filename = 'form_responses.txt';

if (!empty($_POST)) {
    $record = [
        // перечисляются поля формы
        'first_name' => filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING),
        'day_of_week' => filter_input(INPUT_POST, 'day_of_week', FILTER_SANITIZE_NUMBER_INT),
    ];

    $recordString = implode('; ', $record) . PHP_EOL; // склеить значения через точку с запятой

    file_put_contents($filename, $recordString, FILE_APPEND);
} 
