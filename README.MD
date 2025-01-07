# Laravel TransIP Rest Client - Wrapper

A very easy way to use the TransIP Rest API in your Laravel Project.

## Link to documentation

To make full advantage of this package you can see here what functionality can be used within the API of TransIP.

[TransIP RestAPI Docs](https://api.transip.nl/rest/docs.html)  
[TransIP PHP Package](https://github.com/transip/transip-api-php)

## Installation

First add your API credentials into your .env file.
```bash
TRANSIP_LOGIN=<your_login_name>
TRANSIP_PRIVATE_KEY="-----BEGIN PRIVATE KEY-----<your_private_key_here-----END PRIVATE KEY-----"

# Use the token only with whitelisted IP's (true or false) defaults to true.  
TRANSIP_WHITELIST_ONLY=false
```

## Install with composer

```bash
composer require natpnk/transip-laravel
```

This package will autoload the SrviceProvider and Facade listed below. If it does not automatically you can add it easily with the following steps.

Register the Service Provider:
```php
'providers' => [
    ...
    Natpnk\TransIPLaravel\TransIPServiceProvider::class,
];
```

Optionally the Facade can be registered:
```php
'aliases' => [
	...
    'Natpnk' => Natpnk\TransIPLaravel\TransIPFacade::class,
    ...
]
```

You must publish the configuration with this command:

```bash
php artisan vendor:publish --provider="Natpnk\TransIPLaravel\TransIPServiceProvider"
```

This will add a configuration file called 'transip.php' in the config folder with the following contents:

```php
return [

    /*
    |--------------------------------------------------------------------------
    | TransIP Laravel Wrapper
    |--------------------------------------------------------------------------
    |
    */

    'login' => env('TRANSIP_LOGIN'),
    'privateKey' => env('TRANSIP_PRIVATE_KEY'),
    'generateWhitelistOnlyTokens' => env('TRANSIP_WHITELIST_ONLY', true),
];
```

## Usage

Using the Facade
```php
<?php

use TransIP;

// Get all VPS from your account.
$allVps = TransIP::vps()->getAll();
```

Using the auto IoC binding

```php
<?php

use Transip\Api\Library\TransipAPI;

class TransipTestCommand extends Command {
    
    protected $signature = 'transip:test';
    
    public function __construct(){
        parent::__construct();
    }
    
    public function handle(TransipAPI $api)){
        $allVps = $api->vps()->getAll();
    }
}
```
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.