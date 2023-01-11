# Bzzhh\Tzkt\CyclesApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cyclesGet()**](CyclesApi.md#cyclesGet) | **GET** /v1/cycles | Get cycles |
| [**cyclesGetByIndex()**](CyclesApi.md#cyclesGetByIndex) | **GET** /v1/cycles/{index} | Get cycle by index |
| [**cyclesGetCount()**](CyclesApi.md#cyclesGetCount) | **GET** /v1/cycles/count | Get cycles count |


## `cyclesGet()`

```php
cyclesGet($snapshot_index, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\Cycle[]
```

Get cycles

Returns a list of cycles, including future cycles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\CyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$snapshot_index = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters cycles by snapshot index (0..15)
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts cycles by specified field. Supported fields: `index` (default, desc).
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->cyclesGet($snapshot_index, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CyclesApi->cyclesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **snapshot_index** | [**AccountsGetIdParameter**](../Model/.md)| Filters cycles by snapshot index (0..15) | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts cycles by specified field. Supported fields: &#x60;index&#x60; (default, desc). | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Cycle[]**](../Model/Cycle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cyclesGetByIndex()`

```php
cyclesGetByIndex($index, $quote): \Bzzhh\Tzkt\Model\Cycle
```

Get cycle by index

Returns a cycle at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\CyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Cycle index starting from zero
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->cyclesGetByIndex($index, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CyclesApi->cyclesGetByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **int**| Cycle index starting from zero | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Cycle**](../Model/Cycle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cyclesGetCount()`

```php
cyclesGetCount(): int
```

Get cycles count

Returns the total number of cycles, including future cycles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\CyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->cyclesGetCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CyclesApi->cyclesGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
