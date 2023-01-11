# Bzzhh\Tzkt\HeadApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**headGet()**](HeadApi.md#headGet) | **GET** /v1/head | Get indexer head |


## `headGet()`

```php
headGet(): \Bzzhh\Tzkt\Model\State
```

Get indexer head

Returns indexer head and synchronization status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\HeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->headGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeadApi->headGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bzzhh\Tzkt\Model\State**](../Model/State.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
