# MimePost\Client\AccountsApi

All URIs are relative to *https://api.mimepost.com/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountProfileGet**](AccountsApi.md#accountProfileGet) | **GET** /account/profile/ | Get account profile details
[**accountProfilePost**](AccountsApi.md#accountProfilePost) | **POST** /account/profile/ | Update account profile details
[**settingsGet**](AccountsApi.md#settingsGet) | **GET** /settings/ | Get all the settings
[**settingsPost**](AccountsApi.md#settingsPost) | **POST** /settings/ | Set a setting


# **accountProfileGet**
> \MimePost\Client\Model\AccountProfileResponse accountProfileGet()

Get account profile details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->accountProfileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MimePost\Client\Model\AccountProfileResponse**](../Model/AccountProfileResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountProfilePost**
> \MimePost\Client\Model\ApiResponse accountProfilePost($body)

Update account profile details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MimePost\Client\Model\AccountProfile(); // \MimePost\Client\Model\AccountProfile | 

try {
    $result = $apiInstance->accountProfilePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountProfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MimePost\Client\Model\AccountProfile**](../Model/AccountProfile.md)|  |

### Return type

[**\MimePost\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsGet**
> \MimePost\Client\Model\AccountSettings settingsGet()

Get all the settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->settingsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->settingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MimePost\Client\Model\AccountSettings**](../Model/AccountSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **settingsPost**
> \MimePost\Client\Model\ApiResponse settingsPost($body)

Set a setting



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \MimePost\Client\Model\AccountSettings(); // \MimePost\Client\Model\AccountSettings | 

try {
    $result = $apiInstance->settingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->settingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MimePost\Client\Model\AccountSettings**](../Model/AccountSettings.md)|  |

### Return type

[**\MimePost\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

