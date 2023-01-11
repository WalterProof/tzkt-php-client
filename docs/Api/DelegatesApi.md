# Bzzhh\Tzkt\DelegatesApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**delegatesGet()**](DelegatesApi.md#delegatesGet) | **GET** /v1/delegates | Get delegates |
| [**delegatesGetByAddress()**](DelegatesApi.md#delegatesGetByAddress) | **GET** /v1/delegates/{address} | Get delegate by address |
| [**delegatesGetCount()**](DelegatesApi.md#delegatesGetCount) | **GET** /v1/delegates/count | Get delegates count |


## `delegatesGet()`

```php
delegatesGet($active, $last_activity, $select, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\Delegate[]
```

Get delegates

Returns a list of delegate accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\DelegatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$active = new \Bzzhh\Tzkt\Model\AccountsGetStakedParameter(); // AccountsGetStakedParameter | Delegate status to filter by (true - only active, false - only deactivated, undefined - all delegates)
$last_activity = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters delegates by last activity level (where the delegate was updated)
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `activationLevel`, `deactivationLevel`, `stakingBalance`, `balance`, `numDelegators`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->delegatesGet($active, $last_activity, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelegatesApi->delegatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | [**AccountsGetStakedParameter**](../Model/.md)| Delegate status to filter by (true - only active, false - only deactivated, undefined - all delegates) | [optional] |
| **last_activity** | [**AccountsGetIdParameter**](../Model/.md)| Filters delegates by last activity level (where the delegate was updated) | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;activationLevel&#x60;, &#x60;deactivationLevel&#x60;, &#x60;stakingBalance&#x60;, &#x60;balance&#x60;, &#x60;numDelegators&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Bzzhh\Tzkt\Model\Delegate[]**](../Model/Delegate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delegatesGetByAddress()`

```php
delegatesGetByAddress($address): \Bzzhh\Tzkt\Model\Delegate
```

Get delegate by address

Returns a delegate with the specified address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\DelegatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Delegate address (starting with tz)

try {
    $result = $apiInstance->delegatesGetByAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelegatesApi->delegatesGetByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Delegate address (starting with tz) | |

### Return type

[**\Bzzhh\Tzkt\Model\Delegate**](../Model/Delegate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delegatesGetCount()`

```php
delegatesGetCount($active): int
```

Get delegates count

Returns a number of delegate accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\DelegatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$active = new \Bzzhh\Tzkt\Model\AccountsGetStakedParameter(); // AccountsGetStakedParameter | Delegate status to filter by (true - only active, false - only deactivated, undefined - all delegates)

try {
    $result = $apiInstance->delegatesGetCount($active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DelegatesApi->delegatesGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | [**AccountsGetStakedParameter**](../Model/.md)| Delegate status to filter by (true - only active, false - only deactivated, undefined - all delegates) | [optional] |

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
