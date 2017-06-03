<?php
 
return [
    'smsc' => [
        'login' => null,
        'password' => null,
        'post' => 1,             // использовать метод POST
        'https' => 1,            // использовать HTTPS протокол
        'charset' => 'utf-8',    // кодировка сообщения: utf-8, koi8-r или windows-1251 (по умолчанию)
        'debug' => 0,             // флаг отладки
        'smtp_from' => 'api@smsc.ru', // e-mail адрес отправителя
    ]
];