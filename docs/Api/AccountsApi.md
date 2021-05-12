# Bzzhh\Tzkt\AccountsApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountsGet()**](AccountsApi.md#accountsGet) | **GET** /v1/accounts | Get accounts
[**accountsGetBalanceAtDate()**](AccountsApi.md#accountsGetBalanceAtDate) | **GET** /v1/accounts/{address}/balance_history/{datetime} | Get balance at date
[**accountsGetBalanceAtLevel()**](AccountsApi.md#accountsGetBalanceAtLevel) | **GET** /v1/accounts/{address}/balance_history/{level} | Get balance at level
[**accountsGetBalanceHistory()**](AccountsApi.md#accountsGetBalanceHistory) | **GET** /v1/accounts/{address}/balance_history | Get balance history
[**accountsGetBalanceReport()**](AccountsApi.md#accountsGetBalanceReport) | **GET** /v1/accounts/{address}/report | Get account report
[**accountsGetByAddress()**](AccountsApi.md#accountsGetByAddress) | **GET** /v1/accounts/{address} | Get account by address
[**accountsGetContracts()**](AccountsApi.md#accountsGetContracts) | **GET** /v1/accounts/{address}/contracts | Get account contracts
[**accountsGetCount()**](AccountsApi.md#accountsGetCount) | **GET** /v1/accounts/count | Get accounts count
[**accountsGetDelegators()**](AccountsApi.md#accountsGetDelegators) | **GET** /v1/accounts/{address}/delegators | Get account delegators
[**accountsGetMetadata()**](AccountsApi.md#accountsGetMetadata) | **GET** /v1/accounts/{address}/metadata | Get account metadata
[**accountsGetOperations()**](AccountsApi.md#accountsGetOperations) | **GET** /v1/accounts/{address}/operations | Get account operations


## `accountsGet()`

```php
accountsGet($type, $kind, $delegate, $balance, $staked, $last_activity, $select, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\Account[]
```

Get accounts

Returns a list of accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Bzzhh\Tzkt\Model\OneOfAccountTypeParameter(); // OneOfAccountTypeParameter | Filters accounts by type (`user`, `delegate`, `contract`).
$kind = new \Bzzhh\Tzkt\Model\OneOfContractKindParameter(); // OneOfContractKindParameter | Filters accounts by contract kind (`delegator_contract` or `smart_contract`)
$delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters accounts by delegate. Allowed fields for `.eqx` mode: none.
$balance = new \Bzzhh\Tzkt\Model\OneOfInt64Parameter(); // OneOfInt64Parameter | Filters accounts by balance
$staked = new \Bzzhh\Tzkt\Model\OneOfBoolParameter(); // OneOfBoolParameter | Filters accounts by participation in staking
$last_activity = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters accounts by last activity level (where the account was updated)
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `balance`, `firstActivity`, `lastActivity`, `numTransactions`, `numContracts`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGet($type, $kind, $delegate, $balance, $staked, $last_activity, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**OneOfAccountTypeParameter**](../Model/.md)| Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;). | [optional]
 **kind** | [**OneOfContractKindParameter**](../Model/.md)| Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) | [optional]
 **delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters accounts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **balance** | [**OneOfInt64Parameter**](../Model/.md)| Filters accounts by balance | [optional]
 **staked** | [**OneOfBoolParameter**](../Model/.md)| Filters accounts by participation in staking | [optional]
 **last_activity** | [**OneOfInt32Parameter**](../Model/.md)| Filters accounts by last activity level (where the account was updated) | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;, &#x60;numContracts&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\Account[]**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalanceAtDate()`

```php
accountsGetBalanceAtDate($address, $datetime): int
```

Get balance at date

Returns account balance at the specified datetime

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$datetime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Datetime at which you want to know account balance (e.g. `2020-01-01`, or `2019-12-30T23:42:59Z`)

try {
    $result = $apiInstance->accountsGetBalanceAtDate($address, $datetime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceAtDate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **datetime** | **\DateTime**| Datetime at which you want to know account balance (e.g. &#x60;2020-01-01&#x60;, or &#x60;2019-12-30T23:42:59Z&#x60;) |

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

## `accountsGetBalanceAtLevel()`

```php
accountsGetBalanceAtLevel($address, $level): int
```

Get balance at level

Returns account balance at the specified block

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$level = 56; // int | Block height at which you want to know account balance

try {
    $result = $apiInstance->accountsGetBalanceAtLevel($address, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceAtLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **level** | **int**| Block height at which you want to know account balance |

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

## `accountsGetBalanceHistory()`

```php
accountsGetBalanceHistory($address, $step, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\HistoricalBalance[]
```

Get balance history

Returns time series with historical balances (only changes, without duplicates).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$step = 56; // int | Step of the time series, for example if `step = 1000` you will get balances at blocks `1000, 2000, 3000, ...`.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts historical balances by specified field. Supported fields: `level`.
$offset = 0; // int | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->accountsGetBalanceHistory($address, $step, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **step** | **int**| Step of the time series, for example if &#x60;step &#x3D; 1000&#x60; you will get balances at blocks &#x60;1000, 2000, 3000, ...&#x60;. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts historical balances by specified field. Supported fields: &#x60;level&#x60;. | [optional]
 **offset** | **int**| Specifies which or how many items should be skipped | [optional] [default to 0]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\HistoricalBalance[]**](../Model/HistoricalBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetBalanceReport()`

```php
accountsGetBalanceReport($address, $from, $to, $currency, $historical, $delimiter, $separator): \SplFileObject
```

Get account report

Exports account balance report in .csv format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31)
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31)
$currency = 'currency_example'; // string | Currency to convert amounts to (`btc`, `eur`, `usd`, `cny`, `jpy`, `krw`, `eth`)
$historical = false; // bool | `true` if you want to use historical prices, `false` to use current price
$delimiter = 'comma'; // string | Column delimiter (`comma`, `semicolon`)
$separator = 'point'; // string | Decimal separator (`comma`, `point`)

try {
    $result = $apiInstance->accountsGetBalanceReport($address, $from, $to, $currency, $historical, $delimiter, $separator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetBalanceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **from** | **\DateTime**| Start of the datetime range to filter by (ISO 8601, e.g. 2019-11-31) | [optional]
 **to** | **\DateTime**| End of the datetime range to filter by (ISO 8601, e.g. 2019-12-31) | [optional]
 **currency** | **string**| Currency to convert amounts to (&#x60;btc&#x60;, &#x60;eur&#x60;, &#x60;usd&#x60;, &#x60;cny&#x60;, &#x60;jpy&#x60;, &#x60;krw&#x60;, &#x60;eth&#x60;) | [optional]
 **historical** | **bool**| &#x60;true&#x60; if you want to use historical prices, &#x60;false&#x60; to use current price | [optional] [default to false]
 **delimiter** | **string**| Column delimiter (&#x60;comma&#x60;, &#x60;semicolon&#x60;) | [optional] [default to &#39;comma&#39;]
 **separator** | **string**| Decimal separator (&#x60;comma&#x60;, &#x60;point&#x60;) | [optional] [default to &#39;point&#39;]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetByAddress()`

```php
accountsGetByAddress($address, $metadata): \Bzzhh\Tzkt\Model\Account
```

Get account by address

Returns an account with the specified address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$metadata = false; // bool | Include or not account metadata

try {
    $result = $apiInstance->accountsGetByAddress($address, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **metadata** | **bool**| Include or not account metadata | [optional] [default to false]

### Return type

[**\Bzzhh\Tzkt\Model\Account**](../Model/Account.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetContracts()`

```php
accountsGetContracts($address, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\RelatedContract[]
```

Get account contracts

Returns a list of contracts created by (or related to) the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts contracts by specified field. Supported fields: `id` (default, desc), `balance`, `creationLevel`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGetContracts($address, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetContracts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts contracts by specified field. Supported fields: &#x60;id&#x60; (default, desc), &#x60;balance&#x60;, &#x60;creationLevel&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\RelatedContract[]**](../Model/RelatedContract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetCount()`

```php
accountsGetCount($type, $kind, $balance, $staked): int
```

Get accounts count

Returns a number of accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Bzzhh\Tzkt\Model\OneOfAccountTypeParameter(); // OneOfAccountTypeParameter | Filters accounts by type (`user`, `delegate`, `contract`).
$kind = new \Bzzhh\Tzkt\Model\OneOfContractKindParameter(); // OneOfContractKindParameter | Filters accounts by contract kind (`delegator_contract` or `smart_contract`)
$balance = new \Bzzhh\Tzkt\Model\OneOfInt64Parameter(); // OneOfInt64Parameter | Filters accounts by balance
$staked = new \Bzzhh\Tzkt\Model\OneOfBoolParameter(); // OneOfBoolParameter | Filters accounts by participation in staking

try {
    $result = $apiInstance->accountsGetCount($type, $kind, $balance, $staked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**OneOfAccountTypeParameter**](../Model/.md)| Filters accounts by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;). | [optional]
 **kind** | [**OneOfContractKindParameter**](../Model/.md)| Filters accounts by contract kind (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) | [optional]
 **balance** | [**OneOfInt64Parameter**](../Model/.md)| Filters accounts by balance | [optional]
 **staked** | [**OneOfBoolParameter**](../Model/.md)| Filters accounts by participation in staking | [optional]

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

## `accountsGetDelegators()`

```php
accountsGetDelegators($address, $type, $balance, $delegation_level, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\Delegator[]
```

Get account delegators

Returns a list of accounts delegated to the specified account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$type = new \Bzzhh\Tzkt\Model\OneOfAccountTypeParameter(); // OneOfAccountTypeParameter | Filters delegators by type (`user`, `delegate`, `contract`).
$balance = new \Bzzhh\Tzkt\Model\OneOfInt64Parameter(); // OneOfInt64Parameter | Filters delegators by balance.
$delegation_level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Number of items to skip
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `delegationLevel` (default, desc), `balance`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGetDelegators($address, $type, $balance, $delegation_level, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetDelegators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **type** | [**OneOfAccountTypeParameter**](../Model/.md)| Filters delegators by type (&#x60;user&#x60;, &#x60;delegate&#x60;, &#x60;contract&#x60;). | [optional]
 **balance** | [**OneOfInt64Parameter**](../Model/.md)| Filters delegators by balance. | [optional]
 **delegation_level** | [**OneOfInt32Parameter**](../Model/.md)| Number of items to skip | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;delegationLevel&#x60; (default, desc), &#x60;balance&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\Delegator[]**](../Model/Delegator.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetMetadata()`

```php
accountsGetMetadata($address): \Bzzhh\Tzkt\Model\AccountMetadata
```

Get account metadata

Returns metadata of the specified account (alias, logo, website, contacts, etc).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)

try {
    $result = $apiInstance->accountsGetMetadata($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |

### Return type

[**\Bzzhh\Tzkt\Model\AccountMetadata**](../Model/AccountMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGetOperations()`

```php
accountsGetOperations($address, $type, $initiator, $sender, $target, $prev_delegate, $new_delegate, $contract_manager, $contract_delegate, $originated_contract, $accuser, $offender, $baker, $level, $timestamp, $entrypoint, $parameter, $parameters, $has_internals, $status, $sort, $last_id, $limit, $micheline, $quote, $from, $to): \Bzzhh\Tzkt\Model\Operation[]
```

Get account operations

Returns a list of operations related to the specified account. Note: for better flexibility this endpoint accumulates query parameters (filters) of each `/operations/{type}` endpoint, so a particular filter may affect several operation types containing this filter. For example, if you specify an `initiator` it will affect all transactions, delegations and originations, because all these types have an `initiator` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Account address (starting with tz or KT)
$type = 'type_example'; // string | Comma separated list of operation types to return (`endorsement`, `ballot`, `proposal`, `activation`, `double_baking`, `double_endorsing`, `nonce_revelation`, `delegation`, `origination`, `transaction`, `reveal`, `migration`, `revelation_penalty`, `baking`). If not specified then all operation types except `endorsement` and `baking` will be returned.
$initiator = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters transactions, delegations and originations by initiator. Allowed fields for `.eqx` mode: none.
$sender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for `.eqx` mode: none.
$target = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters transactions by target. Allowed fields for `.eqx` mode: none.
$prev_delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters delegations by prev delegate. Allowed fields for `.eqx` mode: none.
$new_delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters delegations by new delegate. Allowed fields for `.eqx` mode: none.
$contract_manager = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by manager. Allowed fields for `.eqx` mode: none.
$contract_delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by delegate. Allowed fields for `.eqx` mode: none.
$originated_contract = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by originated contract. Allowed fields for `.eqx` mode: none.
$accuser = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters double baking and double endorsing by accuser. Allowed fields for `.eqx` mode: none.
$offender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters double baking and double endorsing by offender. Allowed fields for `.eqx` mode: none.
$baker = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters seed nonce revelation operations by baker. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters operations by timestamp.
$entrypoint = new \Bzzhh\Tzkt\Model\OneOfStringParameter(); // OneOfStringParameter | Filters transactions by entrypoint called on the target contract.
$parameter = new \Bzzhh\Tzkt\Model\OneOfJsonParameter(); // OneOfJsonParameter | Filters transactions by parameter value. Note, this query parameter supports the following format: `?parameter{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?parameter.token_id=...` or `?parameter.sigs.0.ne=...`.
$parameters = new \Bzzhh\Tzkt\Model\OneOfStringParameter(); // OneOfStringParameter | **DEPRECATED**. Use `entrypoint` and `parameter` instead.
$has_internals = new \Bzzhh\Tzkt\Model\OneOfBoolParameter(); // OneOfBoolParameter | Filters transactions by presence of internal operations.
$status = new \Bzzhh\Tzkt\Model\OneOfOperationStatusParameter(); // OneOfOperationStatusParameter | Filters transactions, delegations, originations and reveals by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$sort = new \Bzzhh\Tzkt\Model\OneOfSortMode(); // OneOfSortMode | Sort mode (0 - ascending, 1 - descending)
$last_id = 56; // int | Id of the last operation received, which is used as an offset for pagination
$limit = 100; // int | Number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | **DEPRECATED**. Use `timestamp.ge=` intead.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | **DEPRECATED**. Use `timestamp.lt=` intead.

try {
    $result = $apiInstance->accountsGetOperations($address, $type, $initiator, $sender, $target, $prev_delegate, $new_delegate, $contract_manager, $contract_delegate, $originated_contract, $accuser, $offender, $baker, $level, $timestamp, $entrypoint, $parameter, $parameters, $has_internals, $status, $sort, $last_id, $limit, $micheline, $quote, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGetOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Account address (starting with tz or KT) |
 **type** | **string**| Comma separated list of operation types to return (&#x60;endorsement&#x60;, &#x60;ballot&#x60;, &#x60;proposal&#x60;, &#x60;activation&#x60;, &#x60;double_baking&#x60;, &#x60;double_endorsing&#x60;, &#x60;nonce_revelation&#x60;, &#x60;delegation&#x60;, &#x60;origination&#x60;, &#x60;transaction&#x60;, &#x60;reveal&#x60;, &#x60;migration&#x60;, &#x60;revelation_penalty&#x60;, &#x60;baking&#x60;). If not specified then all operation types except &#x60;endorsement&#x60; and &#x60;baking&#x60; will be returned. | [optional]
 **initiator** | [**OneOfAccountParameter**](../Model/.md)| Filters transactions, delegations and originations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **sender** | [**OneOfAccountParameter**](../Model/.md)| Filters transactions, delegations, originations, reveals and seed nonce revelations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **target** | [**OneOfAccountParameter**](../Model/.md)| Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **prev_delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **new_delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **contract_manager** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **contract_delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **originated_contract** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **accuser** | [**OneOfAccountParameter**](../Model/.md)| Filters double baking and double endorsing by accuser. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **offender** | [**OneOfAccountParameter**](../Model/.md)| Filters double baking and double endorsing by offender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **baker** | [**OneOfAccountParameter**](../Model/.md)| Filters seed nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters operations by timestamp. | [optional]
 **entrypoint** | [**OneOfStringParameter**](../Model/.md)| Filters transactions by entrypoint called on the target contract. | [optional]
 **parameter** | [**OneOfJsonParameter**](../Model/.md)| Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. | [optional]
 **parameters** | [**OneOfStringParameter**](../Model/.md)| **DEPRECATED**. Use &#x60;entrypoint&#x60; and &#x60;parameter&#x60; instead. | [optional]
 **has_internals** | [**OneOfBoolParameter**](../Model/.md)| Filters transactions by presence of internal operations. | [optional]
 **status** | [**OneOfOperationStatusParameter**](../Model/.md)| Filters transactions, delegations, originations and reveals by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional]
 **sort** | [**OneOfSortMode**](../Model/.md)| Sort mode (0 - ascending, 1 - descending) | [optional]
 **last_id** | **int**| Id of the last operation received, which is used as an offset for pagination | [optional]
 **limit** | **int**| Number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]
 **from** | **\DateTime**| **DEPRECATED**. Use &#x60;timestamp.ge&#x3D;&#x60; intead. | [optional]
 **to** | **\DateTime**| **DEPRECATED**. Use &#x60;timestamp.lt&#x3D;&#x60; intead. | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\Operation[]**](../Model/Operation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
