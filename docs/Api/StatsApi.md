# MimePost\Client\StatsApi

All URIs are relative to *https://api.mimepost.com/v1/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emaillogsGet**](StatsApi.md#emaillogsGet) | **GET** /emaillogs/ | Get the logs of a particular date
[**statsGet**](StatsApi.md#statsGet) | **GET** /stats/ | Get the summary of stats for a range of dates


# **emaillogsGet**
> \MimePost\Client\Model\ApiResponseEmaillogs emaillogsGet($start_date, $end_date, $status, $to, $page, $limit)

Get the logs of a particular date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | Start Date in yyyymmdd format example 20190801
$end_date = "end_date_example"; // string | End Date in yyyymmdd format example 20190803
$status = "status_example"; // string | 
$to = "to_example"; // string | 
$page = 56; // int | 
$limit = 56; // int | 

try {
    $result = $apiInstance->emaillogsGet($start_date, $end_date, $status, $to, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->emaillogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start Date in yyyymmdd format example 20190801 |
 **end_date** | **string**| End Date in yyyymmdd format example 20190803 |
 **status** | **string**|  | [optional]
 **to** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\MimePost\Client\Model\ApiResponseEmaillogs**](../Model/ApiResponseEmaillogs.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statsGet**
> \MimePost\Client\Model\ApiResponseStats statsGet($start_date, $end_date)

Get the summary of stats for a range of dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimePost\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new MimePost\Client\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = "start_date_example"; // string | Start Date in yyyymmdd format example 20190801
$end_date = "end_date_example"; // string | End Date in yyyymmdd format example 20190803

try {
    $result = $apiInstance->statsGet($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start Date in yyyymmdd format example 20190801 |
 **end_date** | **string**| End Date in yyyymmdd format example 20190803 |

### Return type

[**\MimePost\Client\Model\ApiResponseStats**](../Model/ApiResponseStats.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

