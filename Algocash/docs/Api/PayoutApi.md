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
$algo = Algocash::getInstance()
        ->setApiKey('merchant_key', 'merchant_secret')
        ->setAccessToken('api_access_token');
            // ->enableProdMode(false);
$apiInstance = new PayoutApi($algo);
$payer = new Payer("email", "phone");
$url = new Url("callback_url");
$bank = new Bank("account_number", "beneficiary_name", "bank_account_type","bank_code");
$body = new PayoutRequest("invoiceId", "amount", $payer, "payment_method", $bank, $url);

try {
    $result = $apiInstance->createPayout($body);
    print_r($result);
} catch (\Algocash\ApiException $e) {
    echo 'Api Exception when calling PayoutApi->createPayout: ', json_encode($e->getError()), PHP_EOL;
} catch (\Exception $e) {
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

