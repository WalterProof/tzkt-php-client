# Bzzhh\Tzkt\QuotesApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**quotesGet()**](QuotesApi.md#quotesGet) | **GET** /v1/quotes | Get quotes |
| [**quotesGetCount()**](QuotesApi.md#quotesGetCount) | **GET** /v1/quotes/count | Get quotes count |
| [**quotesGetLast()**](QuotesApi.md#quotesGetLast) | **GET** /v1/quotes/last | Get last quote |


## `quotesGet()`

```php
quotesGet($level, $timestamp, $select, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\Quote[]
```

Get quotes

Returns a list of quotes aligned with blocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters quotes by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters quotes by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts quotes by specified field. Supported fields: `level` (default).
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->quotesGet($level, $timestamp, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters quotes by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters quotes by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts quotes by specified field. Supported fields: &#x60;level&#x60; (default). | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Bzzhh\Tzkt\Model\Quote[]**](../Model/Quote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quotesGetCount()`

```php
quotesGetCount(): int
```

Get quotes count

Returns the total number of quotes aligned with blocks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quotesGetCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotesGetCount: ', $e->getMessage(), PHP_EOL;
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

## `quotesGetLast()`

```php
quotesGetLast(): \Bzzhh\Tzkt\Model\Quote
```

Get last quote

Returns last known quote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\QuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->quotesGetLast();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotesApi->quotesGetLast: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bzzhh\Tzkt\Model\Quote**](../Model/Quote.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
