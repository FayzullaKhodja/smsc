# Integrate SMSC.ru API with Laravel

## Installation

 Require this package with composer:


```
composer require khodja/smsc
```

Register the provider directly in your app configuration file config/app.php
```php
'providers' => [
    // ...
    Khodja\Smsc\SmscServiceProvider::class, 
];
```

Add the facade aliases in the same file:
```php
'aliases' => [
    ...
    'Smsc' => Khodja\Smsc\Facades\Smsc::class
];
```

### Package Configuration

Setting up the SmscRu service in your app configuration file config/services.php:

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


Use the Smsc class where you want to use it.

```php
use Khodja\Smsc\Smsc;
```

Then use the sendMessage method.

```php
SmsC::send('998901234567', 'Your activation code: 12134');
```

SMTP version for sending message
```php
SmsC::sendSmsMail('998901234567', 'Hi Bro!');
```

Get balance method
```php
SmsC::getBalance();
```

Get sms cost method
```php
SmsC::getSmsCost('998901234567', 'Hi Bro!');
```

Get sms status by id and phone number
```php
SmsC::getSmsCost('12', '99890123456');
```



## Support

Feel free to post your issues in the issues section.

## Security

If you discover any security related issues, please email fayzulla@khodja.uz instead of using the issue tracker.

## License

This library is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

Some of this documentation is coming from the official documentation. You can find it completely on the [SMSc](https://smsc.ru/api/) Website.

