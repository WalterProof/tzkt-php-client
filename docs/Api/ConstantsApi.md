# Bzzhh\Tzkt\ConstantsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**constantsGet()**](ConstantsApi.md#constantsGet) | **GET** /v1/constants | Get global constants |
| [**constantsGetByAddress()**](ConstantsApi.md#constantsGetByAddress) | **GET** /v1/constants/{address} | Get global constant by address |
| [**constantsGetCount()**](ConstantsApi.md#constantsGetCount) | **GET** /v1/constants/count | Get global constants count |


## `constantsGet()`

```php
constantsGet($address, $creation_level, $creation_time, $creator, $refs, $size, $select, $sort, $offset, $limit, $format): \Bzzhh\Tzkt\Model\Constant[]
```

Get global constants

Returns a list of global constants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ConstantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = new \Bzzhh\Tzkt\Model\ConstantsGetAddressParameter(); // ConstantsGetAddressParameter | Filters constants by global address (starts with `expr..`).
$creation_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters constants by creation level.
$creation_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapUpdatesTimestampParameter(); // BigMapsGetBigMapUpdatesTimestampParameter | Filters constants by creation time.
$creator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters constants by creator.
$refs = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters constants by number of refs.
$size = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters constants by size in bytes.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `creationLevel`, `size`, `refs`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$format = 0; // int | Constant value format (`0` - micheline, `1` - michelson, `2` - bytes (base64))

try {
    $result = $apiInstance->constantsGet($address, $creation_level, $creation_time, $creator, $refs, $size, $select, $sort, $offset, $limit, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstantsApi->constantsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | [**ConstantsGetAddressParameter**](../Model/.md)| Filters constants by global address (starts with &#x60;expr..&#x60;). | [optional] |
| **creation_level** | [**AccountsGetIdParameter**](../Model/.md)| Filters constants by creation level. | [optional] |
| **creation_time** | [**BigMapsGetBigMapUpdatesTimestampParameter**](../Model/.md)| Filters constants by creation time. | [optional] |
| **creator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters constants by creator. | [optional] |
| **refs** | [**AccountsGetIdParameter**](../Model/.md)| Filters constants by number of refs. | [optional] |
| **size** | [**AccountsGetIdParameter**](../Model/.md)| Filters constants by size in bytes. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;creationLevel&#x60;, &#x60;size&#x60;, &#x60;refs&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **format** | **int**| Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) | [optional] [default to 0] |

### Return type

[**\Bzzhh\Tzkt\Model\Constant[]**](../Model/Constant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `constantsGetByAddress()`

```php
constantsGetByAddress($address, $format): \Bzzhh\Tzkt\Model\Constant
```

Get global constant by address

Returns global constant with specified address (expression hash).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ConstantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Global address (starts with `expr..`)
$format = 0; // int | Constant value format (`0` - micheline, `1` - michelson, `2` - bytes (base64))

try {
    $result = $apiInstance->constantsGetByAddress($address, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstantsApi->constantsGetByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Global address (starts with &#x60;expr..&#x60;) | |
| **format** | **int**| Constant value format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) | [optional] [default to 0] |

### Return type

[**\Bzzhh\Tzkt\Model\Constant**](../Model/Constant.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `constantsGetCount()`

```php
constantsGetCount($refs): int
```

Get global constants count

Returns a number of global constants.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ConstantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$refs = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters constants by number of refs.

try {
    $result = $apiInstance->constantsGetCount($refs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstantsApi->constantsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **refs** | [**AccountsGetIdParameter**](../Model/.md)| Filters constants by number of refs. | [optional] |

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
