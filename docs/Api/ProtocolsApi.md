# Bzzhh\Tzkt\ProtocolsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**protocolsGet()**](ProtocolsApi.md#protocolsGet) | **GET** /v1/protocols | Get protocols |
| [**protocolsGetByCode()**](ProtocolsApi.md#protocolsGetByCode) | **GET** /v1/protocols/{code} | Get protocol by code |
| [**protocolsGetByCycle()**](ProtocolsApi.md#protocolsGetByCycle) | **GET** /v1/protocols/cycles/{cycle} | Get protocol by cycle |
| [**protocolsGetByHash()**](ProtocolsApi.md#protocolsGetByHash) | **GET** /v1/protocols/{hash} | Get protocol by hash |
| [**protocolsGetCount()**](ProtocolsApi.md#protocolsGetCount) | **GET** /v1/protocols/count | Get protocols count |
| [**protocolsGetCurrent()**](ProtocolsApi.md#protocolsGetCurrent) | **GET** /v1/protocols/current | Get current protocol |


## `protocolsGet()`

```php
protocolsGet($sort, $offset, $limit): \Bzzhh\Tzkt\Model\Protocol[]
```

Get protocols

Returns a list of protocols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ProtocolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts protocols by specified field. Supported fields: `code` (default), `firstLevel`, `lastLevel`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->protocolsGet($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtocolsApi->protocolsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts protocols by specified field. Supported fields: &#x60;code&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |

### Return type

[**\Bzzhh\Tzkt\Model\Protocol[]**](../Model/Protocol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsGetByCode()`

```php
protocolsGetByCode($code): \Bzzhh\Tzkt\Model\Protocol
```

Get protocol by code

Returns a protocol with the specified proto code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ProtocolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 56; // int | Protocol code (e.g. 4 for Athens, 5 for Babylon, etc)

try {
    $result = $apiInstance->protocolsGetByCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtocolsApi->protocolsGetByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **int**| Protocol code (e.g. 4 for Athens, 5 for Babylon, etc) | |

### Return type

[**\Bzzhh\Tzkt\Model\Protocol**](../Model/Protocol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsGetByCycle()`

```php
protocolsGetByCycle($cycle): \Bzzhh\Tzkt\Model\Protocol
```

Get protocol by cycle

Returns a protocol at the specified cycle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ProtocolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cycle = 56; // int | Cycle index

try {
    $result = $apiInstance->protocolsGetByCycle($cycle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtocolsApi->protocolsGetByCycle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cycle** | **int**| Cycle index | |

### Return type

[**\Bzzhh\Tzkt\Model\Protocol**](../Model/Protocol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsGetByHash()`

```php
protocolsGetByHash($hash): \Bzzhh\Tzkt\Model\Protocol
```

Get protocol by hash

Returns a protocol with the specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ProtocolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Protocol hash

try {
    $result = $apiInstance->protocolsGetByHash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtocolsApi->protocolsGetByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Protocol hash | |

### Return type

[**\Bzzhh\Tzkt\Model\Protocol**](../Model/Protocol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protocolsGetCount()`

```php
protocolsGetCount(): int
```

Get protocols count

Returns the total number of protocols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ProtocolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->protocolsGetCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtocolsApi->protocolsGetCount: ', $e->getMessage(), PHP_EOL;
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

## `protocolsGetCurrent()`

```php
protocolsGetCurrent(): \Bzzhh\Tzkt\Model\Protocol
```

Get current protocol

Returns current protocol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ProtocolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->protocolsGetCurrent();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtocolsApi->protocolsGetCurrent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bzzhh\Tzkt\Model\Protocol**](../Model/Protocol.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
