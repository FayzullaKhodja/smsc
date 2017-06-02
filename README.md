# Integrate SMSC.ru API with Laravel

## Installation

 Require this package with composer:


```
composer require khodja/smsc
```

Setting up the SmscRu service:

```php
// config/services.php
...
'smsc' => [
    'login' => env('SMSC_LOGIN', 'login'),
    'password' => env('SMSC_PASSWORD', 'mypass'),
    'post' => 1,             // использовать метод POST
    'https' => 1,            // использовать HTTPS протокол
    'charset' => 'utf-8',    // кодировка сообщения: utf-8, koi8-r или windows-1251 (по умолчанию)
    'debug' => 0,             // флаг отладки
    'smtp_from' => 'api@smsc.ru', // e-mail адрес отправителя
],
...
```



## Usage

### Direct Use

Use the Smsc class where you want to use it.

```php
use Khodja\Smsc\Smsc;
```

Then use the sendMessage method.

```php
SmsC::send('998901234567', 'Your activation code: 12134');
```

## Support

Feel free to post your issues in the issues section.

## Security

If you discover any security related issues, please email fayzulla@khodja.uz instead of using the issue tracker.

## License

MIT


