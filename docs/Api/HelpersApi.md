# Bzzhh\Tzkt\HelpersApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**helpersPostInject()**](HelpersApi.md#helpersPostInject) | **POST** /v1/helpers/inject | Inject operation |
| [**helpersPostRunScriptView()**](HelpersApi.md#helpersPostRunScriptView) | **POST** /v1/helpers/view/{contract}/{name} | Run script view |


## `helpersPostInject()`

```php
helpersPostInject($body, $async): string
```

Inject operation

Injects signed operation to the blockchain and returns the operation hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = 'body_example'; // string | Forged operation bytes + signature in hex format.
$async = true; // bool | If `true`, the function returns immediately. Otherwise, the operation will be validated before the result is returned.

try {
    $result = $apiInstance->helpersPostInject($body, $async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->helpersPostInject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**| Forged operation bytes + signature in hex format. | |
| **async** | **bool**| If &#x60;true&#x60;, the function returns immediately. Otherwise, the operation will be validated before the result is returned. | [optional] [default to true] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `helpersPostRunScriptView()`

```php
helpersPostRunScriptView($contract, $name, $body): \SplFileObject
```

Run script view

Simulate a call to a michelson view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\HelpersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contract = 'contract_example'; // string | Contract address
$name = 'name_example'; // string | View name
$body = NULL; // mixed | Input to be passed to the contract view (in human-readable format, see \"Json schema\" on tzkt.io)

try {
    $result = $apiInstance->helpersPostRunScriptView($contract, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpersApi->helpersPostRunScriptView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract** | **string**| Contract address | |
| **name** | **string**| View name | |
| **body** | **mixed**| Input to be passed to the contract view (in human-readable format, see \&quot;Json schema\&quot; on tzkt.io) | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
