# Bzzhh\Tzkt\StatisticsApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**statisticsGet()**](StatisticsApi.md#statisticsGet) | **GET** /v1/statistics | Get statistics
[**statisticsGetCycles()**](StatisticsApi.md#statisticsGetCycles) | **GET** /v1/statistics/current | Get current statistics
[**statisticsGetCyclesAll()**](StatisticsApi.md#statisticsGetCyclesAll) | **GET** /v1/statistics/cyclic | Get cyclic statistics
[**statisticsGetDaily()**](StatisticsApi.md#statisticsGetDaily) | **GET** /v1/statistics/daily | Get daily statistics


## `statisticsGet()`

```php
statisticsGet($level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\Statistics[]
```

Get statistics

Returns a list of end-of-block statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters statistics by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfTimestampParameter(); // OneOfTimestampParameter | Filters statistics by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `level`, `cycle`, `date`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->statisticsGet($level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters statistics by level. | [optional]
 **timestamp** | [**OneOfTimestampParameter**](../Model/.md)| Filters statistics by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;cycle&#x60;, &#x60;date&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\Statistics[]**](../Model/Statistics.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsGetCycles()`

```php
statisticsGetCycles($select, $quote): \Bzzhh\Tzkt\Model\Statistics
```

Get current statistics

Returns statistics at the end of a head block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->statisticsGetCycles($select, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGetCycles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\Statistics**](../Model/Statistics.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsGetCyclesAll()`

```php
statisticsGetCyclesAll($cycle, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\Statistics[]
```

Get cyclic statistics

Returns a list of end-of-cycle statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cycle = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters statistics by cycle.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `level`, `cycle`, `date`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->statisticsGetCyclesAll($cycle, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGetCyclesAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cycle** | [**OneOfInt32Parameter**](../Model/.md)| Filters statistics by cycle. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;cycle&#x60;, &#x60;date&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\Statistics[]**](../Model/Statistics.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsGetDaily()`

```php
statisticsGetDaily($date, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\Statistics[]
```

Get daily statistics

Returns a list of end-of-day statistics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters statistics by date.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `level`, `cycle`, `date`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->statisticsGetDaily($date, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->statisticsGetDaily: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | [**OneOfDateTimeParameter**](../Model/.md)| Filters statistics by date. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;cycle&#x60;, &#x60;date&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\Statistics[]**](../Model/Statistics.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
