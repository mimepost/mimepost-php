# MimePost\Client\WebhooksApi

All URIs are relative to *https://api.mimepost.com/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksGet**](WebhooksApi.md#webhooksGet) | **GET** /webhooks/ | Get the list of all the webhooks
[**webhooksIdDelete**](WebhooksApi.md#webhooksIdDelete) | **DELETE** /webhooks/{id} | Remove a single webhook
[**webhooksIdGet**](WebhooksApi.md#webhooksIdGet) | **GET** /webhooks/{id} | Get the details of a single webhook
[**webhooksIdPut**](WebhooksApi.md#webhooksIdPut) | **PUT** /webhooks/{id} | Update the details of a single webhook
[**webhooksPost**](WebhooksApi.md#webhooksPost) | **POST** /webhooks/ | Add single webhook


# **webhooksGet**
> \MimePost\Client\Model\ApiResponseAllWebhooks webhooksGet()

Get the list of all the webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webhooksGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MimePost\Client\Model\ApiResponseAllWebhooks**](../Model/ApiResponseAllWebhooks.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksIdDelete**
> \MimePost\Client\Model\ApiResponse webhooksIdDelete($id)

Remove a single webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->webhooksIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\MimePost\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksIdGet**
> \MimePost\Client\Model\ApiResponseSingleWebhooks webhooksIdGet($id)

Get the details of a single webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->webhooksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\MimePost\Client\Model\ApiResponseSingleWebhooks**](../Model/ApiResponseSingleWebhooks.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksIdPut**
> \MimePost\Client\Model\ApiResponseSingleWebhooks webhooksIdPut($id, $webhook)

Update the details of a single webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$webhook = new \MimePost\Client\Model\Webhook1(); // \MimePost\Client\Model\Webhook1 | 

try {
    $result = $apiInstance->webhooksIdPut($id, $webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **webhook** | [**\MimePost\Client\Model\Webhook1**](../Model/Webhook1.md)|  | [optional]

### Return type

[**\MimePost\Client\Model\ApiResponseSingleWebhooks**](../Model/ApiResponseSingleWebhooks.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **webhooksPost**
> \MimePost\Client\Model\ApiResponseWebhooks webhooksPost($webhook)

Add single webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook = new \MimePost\Client\Model\Webhook(); // \MimePost\Client\Model\Webhook | 

try {
    $result = $apiInstance->webhooksPost($webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook** | [**\MimePost\Client\Model\Webhook**](../Model/Webhook.md)|  | [optional]

### Return type

[**\MimePost\Client\Model\ApiResponseWebhooks**](../Model/ApiResponseWebhooks.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

