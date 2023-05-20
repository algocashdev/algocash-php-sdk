# Algocash\DepositApi

All URIs are relative to *https://virtserver.swaggerhub.com/gitdevstar/Algocash/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeposit**](DepositApi.md#createdeposit) | **POST** /payin | create a deposit

# **createDeposit**
> \Algocash\Model\DepositSuccess createDeposit($body)

create a deposit

create a deposit

### Example
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Algocash\Model\DepositRequest**](../Model/DepositRequest.md)| Deposit request body |

### Return type

[**\Algocash\Model\DepositSuccess**](../Model/DepositSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [signatureAuth](../../README.md#signatureAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

