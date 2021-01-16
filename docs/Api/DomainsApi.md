# MimePost\Client\DomainsApi

All URIs are relative to *https://api.mimepost.com/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainsGet**](DomainsApi.md#domainsGet) | **GET** /domains/ | Get a list of all the domains
[**domainsIdApprovePost**](DomainsApi.md#domainsIdApprovePost) | **POST** /domains/{id}/approve/ | Submit request for the approval of a verified domain
[**domainsIdDelete**](DomainsApi.md#domainsIdDelete) | **DELETE** /domains/{id} | Remove a single domain
[**domainsIdGet**](DomainsApi.md#domainsIdGet) | **GET** /domains/{id} | Get the details of a single domain
[**domainsIdVerifyDkimPost**](DomainsApi.md#domainsIdVerifyDkimPost) | **POST** /domains/{id}/verify_dkim/ | Request for the verification of DKIM record for a single domain
[**domainsIdVerifySpfPost**](DomainsApi.md#domainsIdVerifySpfPost) | **POST** /domains/{id}/verify_spf/ | Request for the verification of SPF record for a single domain
[**domainsIdVerifyTrackingPost**](DomainsApi.md#domainsIdVerifyTrackingPost) | **POST** /domains/{id}/verify_tracking/ | Request for the verification of tracking record for a single domain
[**domainsPost**](DomainsApi.md#domainsPost) | **POST** /domains/ | Add single domain


# **domainsGet**
> \MimePost\Client\Model\ApiResponseDomainsList domainsGet()

Get a list of all the domains

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MimePost\Client\Model\ApiResponseDomainsList**](../Model/ApiResponseDomainsList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsIdApprovePost**
> \MimePost\Client\Model\ApiResponse domainsIdApprovePost($id)

Submit request for the approval of a verified domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->domainsIdApprovePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdApprovePost: ', $e->getMessage(), PHP_EOL;
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

# **domainsIdDelete**
> \MimePost\Client\Model\ApiResponse domainsIdDelete($id)

Remove a single domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->domainsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **domainsIdGet**
> \MimePost\Client\Model\ApiResponseDomainsList domainsIdGet($id)

Get the details of a single domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->domainsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\MimePost\Client\Model\ApiResponseDomainsList**](../Model/ApiResponseDomainsList.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainsIdVerifyDkimPost**
> \MimePost\Client\Model\ApiResponse domainsIdVerifyDkimPost($id)

Request for the verification of DKIM record for a single domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->domainsIdVerifyDkimPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdVerifyDkimPost: ', $e->getMessage(), PHP_EOL;
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

# **domainsIdVerifySpfPost**
> \MimePost\Client\Model\ApiResponse domainsIdVerifySpfPost($id)

Request for the verification of SPF record for a single domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->domainsIdVerifySpfPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdVerifySpfPost: ', $e->getMessage(), PHP_EOL;
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

# **domainsIdVerifyTrackingPost**
> \MimePost\Client\Model\ApiResponse domainsIdVerifyTrackingPost($id)

Request for the verification of tracking record for a single domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->domainsIdVerifyTrackingPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsIdVerifyTrackingPost: ', $e->getMessage(), PHP_EOL;
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

# **domainsPost**
> \MimePost\Client\Model\ApiResponse domainsPost($domain)

Add single domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = new \MimePost\Client\Model\Domain(); // \MimePost\Client\Model\Domain | The name of the domain name

try {
    $result = $apiInstance->domainsPost($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | [**\MimePost\Client\Model\Domain**](../Model/Domain.md)| The name of the domain name | [optional]

### Return type

[**\MimePost\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

