# Bzzhh\Tzkt\SuggestApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**suggestGetAccounts()**](SuggestApi.md#suggestGetAccounts) | **GET** /v1/suggest/accounts/{search} | Suggest accounts
[**suggestGetProposals()**](SuggestApi.md#suggestGetProposals) | **GET** /v1/suggest/proposals/{search} | Suggest proposals
[**suggestGetProtocols()**](SuggestApi.md#suggestGetProtocols) | **GET** /v1/suggest/protocols/{search} | Suggest protocols


## `suggestGetAccounts()`

```php
suggestGetAccounts($search): \Bzzhh\Tzkt\Model\AccountMetadataAlias[]
```

Suggest accounts

Suggests known accounts by part of alias. This endpoint is useful for autocomplete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SuggestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Part of the account alias to search by

try {
    $result = $apiInstance->suggestGetAccounts($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestApi->suggestGetAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Part of the account alias to search by |

### Return type

[**\Bzzhh\Tzkt\Model\AccountMetadataAlias[]**](../Model/AccountMetadataAlias.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestGetProposals()`

```php
suggestGetProposals($search): \Bzzhh\Tzkt\Model\ProposalMetadataAlias[]
```

Suggest proposals

Suggests known proposals by part of alias. This endpoint is useful for autocomplete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SuggestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Part of the proposal alias to search by

try {
    $result = $apiInstance->suggestGetProposals($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestApi->suggestGetProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Part of the proposal alias to search by |

### Return type

[**\Bzzhh\Tzkt\Model\ProposalMetadataAlias[]**](../Model/ProposalMetadataAlias.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `suggestGetProtocols()`

```php
suggestGetProtocols($search): \Bzzhh\Tzkt\Model\ProtocolMetadataAlias[]
```

Suggest protocols

Suggests known protocols by part of alias. This endpoint is useful for autocomplete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SuggestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Part of the protocol alias to search by

try {
    $result = $apiInstance->suggestGetProtocols($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestApi->suggestGetProtocols: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Part of the protocol alias to search by |

### Return type

[**\Bzzhh\Tzkt\Model\ProtocolMetadataAlias[]**](../Model/ProtocolMetadataAlias.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
