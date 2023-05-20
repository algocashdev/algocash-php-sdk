# Algocash\PayoutApi

All URIs are relative to *https://virtserver.swaggerhub.com/gitdevstar/Algocash/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPayout**](PayoutApi.md#createpayout) | **POST** /payout | create payout

# **createPayout**
> \Algocash\Model\PayoutSuccess createPayout($body)

create payout

create a payout

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

$apiInstance = new Algocash\Algocash\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Algocash\Model\PayoutRequest(); // \Algocash\Model\PayoutRequest | Payout request body

try {
    $result = $apiInstance->createPayout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->createPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Algocash\Model\PayoutRequest**](../Model/PayoutRequest.md)| Payout request body |

### Return type

[**\Algocash\Model\PayoutSuccess**](../Model/PayoutSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [signatureAuth](../../README.md#signatureAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

