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
$algo = Algocash::getInstance()
        ->setApiKey('merchant_key', 'merchant_secret')
        ->setAccessToken('api_access_token');
        // ->enableProdMode(false); // default prod mode

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

