# MimePost\Client\EmailsApi

All URIs are relative to *https://api.mimepost.com/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEmail**](EmailsApi.md#sendEmail) | **POST** /emails/ | Send email


# **sendEmail**
> \MimePost\Client\Model\ApiResponse sendEmail($body)

Send email



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MimePost\Client\Model\Email(); // \MimePost\Client\Model\Email | Single Email object

try {
    $result = $apiInstance->sendEmail($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MimePost\Client\Model\Email**](../Model/Email.md)| Single Email object |

### Return type

[**\MimePost\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

