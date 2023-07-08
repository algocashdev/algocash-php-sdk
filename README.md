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
        // ->enableProdMode(false); // default prod mode

    $apiInstance = new DepositApi($algo);
    $payer = new Payer("email", "phone");
    $url = new Url("callback_url", "pending_url", "success_url", "error_url");
    $body = new DepositRequest("invioceId", "amount", $payer, $url, "payment method");

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
### Callback Payload
```php
<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    $payload = @file_get_contents('php://input');
    $body = json_decode($payload);
    $sig_header = $_SERVER['Signature'];

    $signature = hash_hmac('sha256', $payload, 'api_access_token');

    if ($signature == $sig_header) {
        ```
        Enter your code
        ```
        http_response_code(200);
    } else {
        http_response_code(401);
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
 - [DepositResponse](docs/Model/DepositResponse.md)
 - [Error](docs/Model/Error.md)
 - [Payer](docs/Model/Payer.md)
 - [PayoutRequest](docs/Model/PayoutRequest.md)
 - [PayoutResponse](docs/Model/PayoutResponse.md)
 - [Url](docs/Model/Url.md)

## Author

loganph.work@gmail.com

https://github.com/gitdevstar