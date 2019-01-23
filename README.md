# Laravel Nova SMS
A Laravel Nova SMS Tool to send messages via the most popular providers.

## Installation
```
composer require naif/nova-sms
```

## Installation:
First you must install cammac/sms [cammac/sms](https://github.com/efrontsa/sms) into your Laravel app.

After publishing config file it will be added to your Laravel as config/sms.php

Add SMS provider requred config keys to your .env file

You can install nova sms package in to a Laravel app that uses Nova via composer:
```bash
composer require naif/nova-sms
```

## Usage
Add the below to the tools function in app/Providers/NovaServiceProvider.php

```bash
public function tools()
{
  return [
    new NovaSms(),
  ];
}
```

![Package screenshot](https://github.com/naifalshaye/nova-sms/blob/master/screenshots/screen.png)


## Credits
[Abdullah Algethami](https://twitter.com/3bdo3tb)

## Support:
naif@naif.io

https://www.linkedin.com/in/naif

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
