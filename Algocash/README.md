# Algocash
This is a Algocash API

- API version: 1.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

composer install algocash

Then run `composer install`

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
// Configure HTTP basic authorization: basicAuth
$config = Algocash\Configuration::getDefaultConfiguration()
    ->setUsername('YOUR_USERNAME')
    ->setPassword('YOUR_PASSWORD');
// Configure API key authorization: signatureAuth
$config = Algocash\Configuration::getDefaultConfiguration()->setApiKey('API_ACCESS_TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Algocash\Configuration::getDefaultConfiguration()->setApiKeyPrefix('API_ACCESS_TOKEN', 'Bearer');

$apiInstance = new Algocash\Algocash\DepositApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Algocash\Model\DepositRequest(); // \Algocash\Model\DepositRequest | Deposit request body

try {
    $result = $apiInstance->createDeposit($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepositApi->createDeposit: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://virtserver.swaggerhub.com/gitdevstar/Algocash/1.0.0*

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

## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication

## signatureAuth

- **Type**: API key
- **API key parameter name**: API_ACCESS_TOKEN
- **Location**: HTTP header


## Author

loganph.work@gmail.com

