# Algocash
This is a Algocash API

- API version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

composer install algocash

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Algocash/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    $algo = Algocash::getInstance()
        ->setApiKey('merchant_key', 'merchant_secret')
        ->setAccessToken('api_access_token');
        // ->enableProdMode(false);

    $apiInstance = new DepositApi($algo);
    $payer = new Payer("email", "phone");
    $url = new Url("callback_url", "pending_url", "success_url", "error_url");
    $body = new DepositRequest("invioceId", "amount", $payer, "payment method", $url);

    try {
        $result = $apiInstance->createDeposit($body);
        print_r($result);
    } catch (\Algocash\ApiException $e) {
        echo 'Api Exception when calling DepositApi->createDeposit: ', json_encode($e->getError()), PHP_EOL;
    } catch (\Exception $e) {
        echo 'Exception when calling DepositApi->createDeposit: ', $e->getMessage(), PHP_EOL;
    }
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://app.swaggerhub.com/apis-docs/gitdevstar/Algocash/1.0.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DepositApi* | [**createDeposit**](docs/Api/DepositApi.md#createdeposit) | **POST** /payin | create a deposit
*PayoutApi* | [**createPayout**](docs/Api/PayoutApi.md#createpayout) | **POST** /payout | create payout

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Bank](docs/Model/Bank.md)
 - [CallbackPayload](docs/Model/CallbackPayload.md)
 - [DepositRequest](docs/Model/DepositRequest.md)
 - [DepositSuccess](docs/Model/DepositSuccess.md)
 - [Error](docs/Model/Error.md)
 - [Payer](docs/Model/Payer.md)
 - [PayoutRequest](docs/Model/PayoutRequest.md)
 - [PayoutSuccess](docs/Model/PayoutSuccess.md)
 - [Url](docs/Model/Url.md)

## Author

loganph.work@gmail.com

https://github.com/gitdevstar