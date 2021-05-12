# Bzzhh\Tzkt\OperationsApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**operationsGetActivationByHash()**](OperationsApi.md#operationsGetActivationByHash) | **GET** /v1/operations/activations/{hash} | Get activation by hash
[**operationsGetActivations()**](OperationsApi.md#operationsGetActivations) | **GET** /v1/operations/activations | Get activations
[**operationsGetActivationsCount()**](OperationsApi.md#operationsGetActivationsCount) | **GET** /v1/operations/activations/count | Get activations count
[**operationsGetBaking()**](OperationsApi.md#operationsGetBaking) | **GET** /v1/operations/baking | Get baking
[**operationsGetBakingCount()**](OperationsApi.md#operationsGetBakingCount) | **GET** /v1/operations/baking/count | Get baking count
[**operationsGetBallotByHash()**](OperationsApi.md#operationsGetBallotByHash) | **GET** /v1/operations/ballots/{hash} | Get ballot by hash
[**operationsGetBallots()**](OperationsApi.md#operationsGetBallots) | **GET** /v1/operations/ballots | Get ballots
[**operationsGetBallotsCount()**](OperationsApi.md#operationsGetBallotsCount) | **GET** /v1/operations/ballots/count | Get ballots count
[**operationsGetByHash()**](OperationsApi.md#operationsGetByHash) | **GET** /v1/operations/{hash} | Get operations by hash
[**operationsGetByHashCounter()**](OperationsApi.md#operationsGetByHashCounter) | **GET** /v1/operations/{hash}/{counter} | Get operations by hash and counter
[**operationsGetByHashCounterNonce()**](OperationsApi.md#operationsGetByHashCounterNonce) | **GET** /v1/operations/{hash}/{counter}/{nonce} | Get operations by hash, counter and nonce
[**operationsGetDelegationByHash()**](OperationsApi.md#operationsGetDelegationByHash) | **GET** /v1/operations/delegations/{hash} | Get delegation by hash
[**operationsGetDelegations()**](OperationsApi.md#operationsGetDelegations) | **GET** /v1/operations/delegations | Get delegations
[**operationsGetDelegationsCount()**](OperationsApi.md#operationsGetDelegationsCount) | **GET** /v1/operations/delegations/count | Get delegations count
[**operationsGetDoubleBaking()**](OperationsApi.md#operationsGetDoubleBaking) | **GET** /v1/operations/double_baking | Get double baking
[**operationsGetDoubleBakingByHash()**](OperationsApi.md#operationsGetDoubleBakingByHash) | **GET** /v1/operations/double_baking/{hash} | Get double baking by hash
[**operationsGetDoubleBakingCount()**](OperationsApi.md#operationsGetDoubleBakingCount) | **GET** /v1/operations/double_baking/count | Get double baking count
[**operationsGetDoubleEndorsing()**](OperationsApi.md#operationsGetDoubleEndorsing) | **GET** /v1/operations/double_endorsing | Get double endorsing
[**operationsGetDoubleEndorsingByHash()**](OperationsApi.md#operationsGetDoubleEndorsingByHash) | **GET** /v1/operations/double_endorsing/{hash} | Get double endorsing by hash
[**operationsGetDoubleEndorsingCount()**](OperationsApi.md#operationsGetDoubleEndorsingCount) | **GET** /v1/operations/double_endorsing/count | Get double endorsing count
[**operationsGetEndorsementByHash()**](OperationsApi.md#operationsGetEndorsementByHash) | **GET** /v1/operations/endorsements/{hash} | Get endorsement by hash
[**operationsGetEndorsements()**](OperationsApi.md#operationsGetEndorsements) | **GET** /v1/operations/endorsements | Get endorsements
[**operationsGetEndorsementsCount()**](OperationsApi.md#operationsGetEndorsementsCount) | **GET** /v1/operations/endorsements/count | Get endorsements count
[**operationsGetMigrations()**](OperationsApi.md#operationsGetMigrations) | **GET** /v1/operations/migrations | Get migrations
[**operationsGetMigrationsCount()**](OperationsApi.md#operationsGetMigrationsCount) | **GET** /v1/operations/migrations/count | Get migrations count
[**operationsGetNonceRevelationByHash()**](OperationsApi.md#operationsGetNonceRevelationByHash) | **GET** /v1/operations/nonce_revelations/{hash} | Get nonce revelation by hash
[**operationsGetNonceRevelations()**](OperationsApi.md#operationsGetNonceRevelations) | **GET** /v1/operations/nonce_revelations | Get nonce revelations
[**operationsGetNonceRevelationsCount()**](OperationsApi.md#operationsGetNonceRevelationsCount) | **GET** /v1/operations/nonce_revelations/count | Get nonce revelations count
[**operationsGetOriginationByHash()**](OperationsApi.md#operationsGetOriginationByHash) | **GET** /v1/operations/originations/{hash} | Get origination by hash
[**operationsGetOriginations()**](OperationsApi.md#operationsGetOriginations) | **GET** /v1/operations/originations | Get originations
[**operationsGetOriginationsCount()**](OperationsApi.md#operationsGetOriginationsCount) | **GET** /v1/operations/originations/count | Get originations count
[**operationsGetProposalByHash()**](OperationsApi.md#operationsGetProposalByHash) | **GET** /v1/operations/proposals/{hash} | Get proposal by hash
[**operationsGetProposals()**](OperationsApi.md#operationsGetProposals) | **GET** /v1/operations/proposals | Get proposals
[**operationsGetProposalsCount()**](OperationsApi.md#operationsGetProposalsCount) | **GET** /v1/operations/proposals/count | Get proposals count
[**operationsGetRevealByHash()**](OperationsApi.md#operationsGetRevealByHash) | **GET** /v1/operations/reveals/{hash} | Get reveal by hash
[**operationsGetReveals()**](OperationsApi.md#operationsGetReveals) | **GET** /v1/operations/reveals | Get reveals
[**operationsGetRevealsCount()**](OperationsApi.md#operationsGetRevealsCount) | **GET** /v1/operations/reveals/count | Get reveals count
[**operationsGetRevelationPenalties()**](OperationsApi.md#operationsGetRevelationPenalties) | **GET** /v1/operations/revelation_penalties | Get revelation penalties
[**operationsGetRevelationPenaltiesCount()**](OperationsApi.md#operationsGetRevelationPenaltiesCount) | **GET** /v1/operations/revelation_penalties/count | Get revelation penalties count
[**operationsGetTransactionByHash()**](OperationsApi.md#operationsGetTransactionByHash) | **GET** /v1/operations/transactions/{hash} | Get transaction by hash
[**operationsGetTransactionByHashCounter()**](OperationsApi.md#operationsGetTransactionByHashCounter) | **GET** /v1/operations/transactions/{hash}/{counter} | Get transaction by hash and counter
[**operationsGetTransactionByHashCounterNonce()**](OperationsApi.md#operationsGetTransactionByHashCounterNonce) | **GET** /v1/operations/transactions/{hash}/{counter}/{nonce} | Get transaction by hash, counter and nonce
[**operationsGetTransactions()**](OperationsApi.md#operationsGetTransactions) | **GET** /v1/operations/transactions | Get transactions
[**operationsGetTransactionsCount()**](OperationsApi.md#operationsGetTransactionsCount) | **GET** /v1/operations/transactions/count | Get transactions count


## `operationsGetActivationByHash()`

```php
operationsGetActivationByHash($hash, $quote): \Bzzhh\Tzkt\Model\ActivationOperation[]
```

Get activation by hash

Returns an activation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetActivationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetActivationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\ActivationOperation[]**](../Model/ActivationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetActivations()`

```php
operationsGetActivations($account, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\ActivationOperation[]
```

Get activations

Returns a list of activation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters activations by account. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters activations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters activations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts activations by specified field. Supported fields: `id` (default), `level`, `balance`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetActivations($account, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetActivations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**OneOfAccountParameter**](../Model/.md)| Filters activations by account. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters activations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters activations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts activations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;balance&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\ActivationOperation[]**](../Model/ActivationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetActivationsCount()`

```php
operationsGetActivationsCount($level, $timestamp): int
```

Get activations count

Returns the total number of activation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters activations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters activations by timestamp.

try {
    $result = $apiInstance->operationsGetActivationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetActivationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters activations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters activations by timestamp. | [optional]

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

## `operationsGetBaking()`

```php
operationsGetBaking($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\BakingOperation[]
```

Get baking

Returns a list of baking operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters baking operations by baker. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters baking operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts baking operations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBaking($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **baker** | [**OneOfAccountParameter**](../Model/.md)| Filters baking operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters baking operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters baking operations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts baking operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BakingOperation[]**](../Model/BakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBakingCount()`

```php
operationsGetBakingCount($level, $timestamp): int
```

Get baking count

Returns the total number of baking operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters baking operations by timestamp.

try {
    $result = $apiInstance->operationsGetBakingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBakingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters baking operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters baking operations by timestamp. | [optional]

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

## `operationsGetBallotByHash()`

```php
operationsGetBallotByHash($hash, $quote): \Bzzhh\Tzkt\Model\BallotOperation[]
```

Get ballot by hash

Returns a ballot operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBallotByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBallotByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BallotOperation[]**](../Model/BallotOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBallots()`

```php
operationsGetBallots($delegate, $level, $timestamp, $epoch, $period, $proposal, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\BallotOperation[]
```

Get ballots

Returns a list of ballot operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters ballots by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters ballots by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters ballots by timestamp.
$epoch = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters ballots by voting epoch.
$period = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters ballots by voting period.
$proposal = new \Bzzhh\Tzkt\Model\OneOfProtocolParameter(); // OneOfProtocolParameter | Filters ballots by proposal hash.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts ballots by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBallots($delegate, $level, $timestamp, $epoch, $period, $proposal, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBallots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters ballots by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters ballots by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters ballots by timestamp. | [optional]
 **epoch** | [**OneOfInt32Parameter**](../Model/.md)| Filters ballots by voting epoch. | [optional]
 **period** | [**OneOfInt32Parameter**](../Model/.md)| Filters ballots by voting period. | [optional]
 **proposal** | [**OneOfProtocolParameter**](../Model/.md)| Filters ballots by proposal hash. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts ballots by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BallotOperation[]**](../Model/BallotOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBallotsCount()`

```php
operationsGetBallotsCount($level, $timestamp): int
```

Get ballots count

Returns the total number of ballot operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters ballot operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters ballot operations by timestamp.

try {
    $result = $apiInstance->operationsGetBallotsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBallotsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters ballot operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters ballot operations by timestamp. | [optional]

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

## `operationsGetByHash()`

```php
operationsGetByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\Operation[]
```

Get operations by hash

Returns a list of operations with the specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

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

## `operationsGetByHashCounter()`

```php
operationsGetByHashCounter($hash, $counter, $micheline, $quote): \Bzzhh\Tzkt\Model\Operation[]
```

Get operations by hash and counter

Returns a list of operations with the specified hash and counter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetByHashCounter($hash, $counter, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetByHashCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **counter** | **int**| Operation counter |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

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

## `operationsGetByHashCounterNonce()`

```php
operationsGetByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote): \Bzzhh\Tzkt\Model\Operation[]
```

Get operations by hash, counter and nonce

Returns an internal operations with the specified hash, counter and nonce.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$nonce = 56; // int | Operation nonce (internal)
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetByHashCounterNonce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **counter** | **int**| Operation counter |
 **nonce** | **int**| Operation nonce (internal) |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

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

## `operationsGetDelegationByHash()`

```php
operationsGetDelegationByHash($hash, $quote): \Bzzhh\Tzkt\Model\DelegationOperation[]
```

Get delegation by hash

Returns a delegation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDelegationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\DelegationOperation[]**](../Model/DelegationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDelegations()`

```php
operationsGetDelegations($anyof, $initiator, $sender, $prev_delegate, $new_delegate, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DelegationOperation[]
```

Get delegations

Returns a list of delegation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = 'anyof_example'; // string | Filters delegations by any of the specified fields. Example: `anyof.prevDelegate.newDelegate=tz1...` will return operations where `prevDelegate` OR `newDelegate` is equal to the specified value. This parameter is useful when you need to retrieve all delegations associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters delegations by initiator. Allowed fields for `.eqx` mode: `prevDelegate`, `newDelegate`.
$sender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters delegations by sender. Allowed fields for `.eqx` mode: `prevDelegate`, `newDelegate`.
$prev_delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters delegations by prev delegate. Allowed fields for `.eqx` mode: `initiator`, `sender`, `newDelegate`.
$new_delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters delegations by new delegate. Allowed fields for `.eqx` mode: `initiator`, `sender`, `prevDelegate`.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters delegations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters delegations by timestamp.
$status = new \Bzzhh\Tzkt\Model\OneOfOperationStatusParameter(); // OneOfOperationStatusParameter | Filters delegations by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDelegations($anyof, $initiator, $sender, $prev_delegate, $new_delegate, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyof** | **string**| Filters delegations by any of the specified fields. Example: &#x60;anyof.prevDelegate.newDelegate&#x3D;tz1...&#x60; will return operations where &#x60;prevDelegate&#x60; OR &#x60;newDelegate&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all delegations associated with a specified account. | [optional]
 **initiator** | [**OneOfAccountParameter**](../Model/.md)| Filters delegations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;prevDelegate&#x60;, &#x60;newDelegate&#x60;. | [optional]
 **sender** | [**OneOfAccountParameter**](../Model/.md)| Filters delegations by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;prevDelegate&#x60;, &#x60;newDelegate&#x60;. | [optional]
 **prev_delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;newDelegate&#x60;. | [optional]
 **new_delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;prevDelegate&#x60;. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters delegations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters delegations by timestamp. | [optional]
 **status** | [**OneOfOperationStatusParameter**](../Model/.md)| Filters delegations by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\DelegationOperation[]**](../Model/DelegationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDelegationsCount()`

```php
operationsGetDelegationsCount($level, $timestamp): int
```

Get delegations count

Returns the total number of delegation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters delegations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters delegations by timestamp.

try {
    $result = $apiInstance->operationsGetDelegationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters delegations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters delegations by timestamp. | [optional]

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

## `operationsGetDoubleBaking()`

```php
operationsGetDoubleBaking($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DoubleBakingOperation[]
```

Get double baking

Returns a list of double baking operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = 'anyof_example'; // string | Filters double baking operations by any of the specified fields. Example: `anyof.accuser.offender=tz1...` will return operations where `accuser` OR `offender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$accuser = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters double baking operations by accuser. Allowed fields for `.eqx` mode: `offender`.
$offender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters double baking operations by offender. Allowed fields for `.eqx` mode: `accuser`.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters double baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters double baking operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts double baking operations by specified field. Supported fields: `id` (default), `level`, `accusedLevel`, `accuserRewards`, `offenderLostDeposits`, `offenderLostRewards`, `offenderLostFees`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleBaking($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleBaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyof** | **string**| Filters double baking operations by any of the specified fields. Example: &#x60;anyof.accuser.offender&#x3D;tz1...&#x60; will return operations where &#x60;accuser&#x60; OR &#x60;offender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional]
 **accuser** | [**OneOfAccountParameter**](../Model/.md)| Filters double baking operations by accuser. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;offender&#x60;. | [optional]
 **offender** | [**OneOfAccountParameter**](../Model/.md)| Filters double baking operations by offender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;accuser&#x60;. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters double baking operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters double baking operations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts double baking operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;accusedLevel&#x60;, &#x60;accuserRewards&#x60;, &#x60;offenderLostDeposits&#x60;, &#x60;offenderLostRewards&#x60;, &#x60;offenderLostFees&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\DoubleBakingOperation[]**](../Model/DoubleBakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleBakingByHash()`

```php
operationsGetDoubleBakingByHash($hash, $quote): \Bzzhh\Tzkt\Model\DoubleBakingOperation[]
```

Get double baking by hash

Returns a double baking operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleBakingByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleBakingByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\DoubleBakingOperation[]**](../Model/DoubleBakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleBakingCount()`

```php
operationsGetDoubleBakingCount($level, $timestamp): int
```

Get double baking count

Returns the total number of double baking operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters double baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters double baking operations by timestamp.

try {
    $result = $apiInstance->operationsGetDoubleBakingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleBakingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters double baking operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters double baking operations by timestamp. | [optional]

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

## `operationsGetDoubleEndorsing()`

```php
operationsGetDoubleEndorsing($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]
```

Get double endorsing

Returns a list of double endorsing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = 'anyof_example'; // string | Filters double endorsing operations by any of the specified fields. Example: `anyof.accuser.offender=tz1...` will return operations where `accuser` OR `offender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$accuser = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters double endorsing operations by accuser. Allowed fields for `.eqx` mode: `offender`.
$offender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters double endorsing operations by offender. Allowed fields for `.eqx` mode: `accuser`.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters double endorsing operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters double endorsing operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts double endorsing operations by specified field. Supported fields: `id` (default), `level`, `accusedLevel`, `accuserRewards`, `offenderLostDeposits`, `offenderLostRewards`, `offenderLostFees`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleEndorsing($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleEndorsing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyof** | **string**| Filters double endorsing operations by any of the specified fields. Example: &#x60;anyof.accuser.offender&#x3D;tz1...&#x60; will return operations where &#x60;accuser&#x60; OR &#x60;offender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional]
 **accuser** | [**OneOfAccountParameter**](../Model/.md)| Filters double endorsing operations by accuser. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;offender&#x60;. | [optional]
 **offender** | [**OneOfAccountParameter**](../Model/.md)| Filters double endorsing operations by offender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;accuser&#x60;. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters double endorsing operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters double endorsing operations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts double endorsing operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;accusedLevel&#x60;, &#x60;accuserRewards&#x60;, &#x60;offenderLostDeposits&#x60;, &#x60;offenderLostRewards&#x60;, &#x60;offenderLostFees&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]**](../Model/DoubleEndorsingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleEndorsingByHash()`

```php
operationsGetDoubleEndorsingByHash($hash, $quote): \Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]
```

Get double endorsing by hash

Returns a double endorsing operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleEndorsingByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleEndorsingByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]**](../Model/DoubleEndorsingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleEndorsingCount()`

```php
operationsGetDoubleEndorsingCount($level, $timestamp): int
```

Get double endorsing count

Returns the total number of double endorsing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters double endorsing operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters double endorsing operations by timestamp.

try {
    $result = $apiInstance->operationsGetDoubleEndorsingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleEndorsingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters double endorsing operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters double endorsing operations by timestamp. | [optional]

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

## `operationsGetEndorsementByHash()`

```php
operationsGetEndorsementByHash($hash, $quote): \Bzzhh\Tzkt\Model\EndorsementOperation[]
```

Get endorsement by hash

Returns an endorsement operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetEndorsementByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsementByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\EndorsementOperation[]**](../Model/EndorsementOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsements()`

```php
operationsGetEndorsements($delegate, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\EndorsementOperation[]
```

Get endorsements

Returns a list of endorsement operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters endorsements by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters endorsements by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters endorsements by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts endorsements by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetEndorsements($delegate, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters endorsements by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters endorsements by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters endorsements by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts endorsements by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\EndorsementOperation[]**](../Model/EndorsementOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsementsCount()`

```php
operationsGetEndorsementsCount($level, $timestamp): int
```

Get endorsements count

Returns the total number of endorsement operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters endorsements by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters endorsements by timestamp.

try {
    $result = $apiInstance->operationsGetEndorsementsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsementsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters endorsements by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters endorsements by timestamp. | [optional]

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

## `operationsGetMigrations()`

```php
operationsGetMigrations($account, $kind, $balance_change, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\MigrationOperation[]
```

Get migrations

Returns a list of migration operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters migration operations by account. Allowed fields for `.eqx` mode: none.
$kind = new \Bzzhh\Tzkt\Model\OneOfMigrationKindParameter(); // OneOfMigrationKindParameter | Filters migration operations by kind (`bootstrap`, `activate_delegate`, `airdrop`, `proposal_invoice`).
$balance_change = new \Bzzhh\Tzkt\Model\OneOfInt64Parameter(); // OneOfInt64Parameter | Filters migration operations by amount.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters migration operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters migration operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts migrations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetMigrations($account, $kind, $balance_change, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | [**OneOfAccountParameter**](../Model/.md)| Filters migration operations by account. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **kind** | [**OneOfMigrationKindParameter**](../Model/.md)| Filters migration operations by kind (&#x60;bootstrap&#x60;, &#x60;activate_delegate&#x60;, &#x60;airdrop&#x60;, &#x60;proposal_invoice&#x60;). | [optional]
 **balance_change** | [**OneOfInt64Parameter**](../Model/.md)| Filters migration operations by amount. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters migration operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters migration operations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts migrations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\MigrationOperation[]**](../Model/MigrationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetMigrationsCount()`

```php
operationsGetMigrationsCount($level, $timestamp): int
```

Get migrations count

Returns the total number of migration operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters migrations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters migrations by timestamp.

try {
    $result = $apiInstance->operationsGetMigrationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetMigrationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters migrations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters migrations by timestamp. | [optional]

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

## `operationsGetNonceRevelationByHash()`

```php
operationsGetNonceRevelationByHash($hash, $quote): \Bzzhh\Tzkt\Model\NonceRevelationOperation[]
```

Get nonce revelation by hash

Returns a seed nonce revelation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetNonceRevelationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetNonceRevelationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\NonceRevelationOperation[]**](../Model/NonceRevelationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetNonceRevelations()`

```php
operationsGetNonceRevelations($anyof, $baker, $sender, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\NonceRevelationOperation[]
```

Get nonce revelations

Returns a list of seed nonce revelation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = 'anyof_example'; // string | Filters nonce revelation operations by any of the specified fields. Example: `anyof.baker.sender=tz1...` will return operations where `baker` OR `sender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$baker = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters nonce revelation operations by baker. Allowed fields for `.eqx` mode: `sender`.
$sender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters nonce revelation operations by sender. Allowed fields for `.eqx` mode: `baker`.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters nonce revelation operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters nonce revelation operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts nonce revelation operations by specified field. Supported fields: `id` (default), `level`, `revealedLevel`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetNonceRevelations($anyof, $baker, $sender, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetNonceRevelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyof** | **string**| Filters nonce revelation operations by any of the specified fields. Example: &#x60;anyof.baker.sender&#x3D;tz1...&#x60; will return operations where &#x60;baker&#x60; OR &#x60;sender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional]
 **baker** | [**OneOfAccountParameter**](../Model/.md)| Filters nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;sender&#x60;. | [optional]
 **sender** | [**OneOfAccountParameter**](../Model/.md)| Filters nonce revelation operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;baker&#x60;. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters nonce revelation operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters nonce revelation operations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts nonce revelation operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;revealedLevel&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\NonceRevelationOperation[]**](../Model/NonceRevelationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetNonceRevelationsCount()`

```php
operationsGetNonceRevelationsCount($level, $timestamp): int
```

Get nonce revelations count

Returns the total number of seed nonce revelation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters seed nonce revelation operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters seed nonce revelation operations by timestamp.

try {
    $result = $apiInstance->operationsGetNonceRevelationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetNonceRevelationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters seed nonce revelation operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters seed nonce revelation operations by timestamp. | [optional]

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

## `operationsGetOriginationByHash()`

```php
operationsGetOriginationByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\OriginationOperation[]
```

Get origination by hash

Returns origination operations with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\\Bzzhh\Tzkt\Model\MichelineFormat(); // \Bzzhh\Tzkt\Model\MichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetOriginationByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **micheline** | [**\Bzzhh\Tzkt\Model\MichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\OriginationOperation[]**](../Model/OriginationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetOriginations()`

```php
operationsGetOriginations($anyof, $initiator, $sender, $contract_manager, $contract_delegate, $originated_contract, $level, $timestamp, $status, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\OriginationOperation[]
```

Get originations

Returns a list of origination operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = 'anyof_example'; // string | Filters originations by any of the specified fields. Example: `anyof.sender.initiator=tz1...` will return operations where `sender` OR `initiator` is equal to the specified value. This parameter is useful when you need to retrieve all originations associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by initiator. Allowed fields for `.eqx` mode: `contractManager`, `contractDelegate`.
$sender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by sender. Allowed fields for `.eqx` mode: `contractManager`, `contractDelegate`.
$contract_manager = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by manager. Allowed fields for `.eqx` mode: `initiator`, `sender`, `contractDelegate`.
$contract_delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by delegate. Allowed fields for `.eqx` mode: `initiator`, `sender`, `contractManager`.
$originated_contract = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters origination operations by originated contract. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters origination operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters origination operations by timestamp.
$status = new \Bzzhh\Tzkt\Model\OneOfOperationStatusParameter(); // OneOfOperationStatusParameter | Filters origination operations by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts originations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`, `allocationFee`, `contractBalance`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetOriginations($anyof, $initiator, $sender, $contract_manager, $contract_delegate, $originated_contract, $level, $timestamp, $status, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyof** | **string**| Filters originations by any of the specified fields. Example: &#x60;anyof.sender.initiator&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;initiator&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all originations associated with a specified account. | [optional]
 **initiator** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;contractManager&#x60;, &#x60;contractDelegate&#x60;. | [optional]
 **sender** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;contractManager&#x60;, &#x60;contractDelegate&#x60;. | [optional]
 **contract_manager** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;contractDelegate&#x60;. | [optional]
 **contract_delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;contractManager&#x60;. | [optional]
 **originated_contract** | [**OneOfAccountParameter**](../Model/.md)| Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters origination operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters origination operations by timestamp. | [optional]
 **status** | [**OneOfOperationStatusParameter**](../Model/.md)| Filters origination operations by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts originations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;, &#x60;allocationFee&#x60;, &#x60;contractBalance&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\OriginationOperation[]**](../Model/OriginationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetOriginationsCount()`

```php
operationsGetOriginationsCount($level, $timestamp): int
```

Get originations count

Returns the total number of origination operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters originations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters originations by timestamp.

try {
    $result = $apiInstance->operationsGetOriginationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters originations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters originations by timestamp. | [optional]

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

## `operationsGetProposalByHash()`

```php
operationsGetProposalByHash($hash, $quote): \Bzzhh\Tzkt\Model\ProposalOperation[]
```

Get proposal by hash

Returns a proposal operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetProposalByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetProposalByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\ProposalOperation[]**](../Model/ProposalOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetProposals()`

```php
operationsGetProposals($delegate, $level, $timestamp, $epoch, $period, $proposal, $duplicated, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\ProposalOperation[]
```

Get proposals

Returns a list of proposal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters proposal operations by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters proposal operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters proposal operations by timestamp.
$epoch = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters proposal operations by voting epoch.
$period = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters proposal operations by voting period.
$proposal = new \Bzzhh\Tzkt\Model\OneOfProtocolParameter(); // OneOfProtocolParameter | Filters proposal operations by proposal hash.
$duplicated = new \Bzzhh\Tzkt\Model\OneOfBoolParameter(); // OneOfBoolParameter | Specify whether to include or exclude duplicates, which didn't actually upvote a proposal.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts proposal operations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetProposals($delegate, $level, $timestamp, $epoch, $period, $proposal, $duplicated, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters proposal operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters proposal operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters proposal operations by timestamp. | [optional]
 **epoch** | [**OneOfInt32Parameter**](../Model/.md)| Filters proposal operations by voting epoch. | [optional]
 **period** | [**OneOfInt32Parameter**](../Model/.md)| Filters proposal operations by voting period. | [optional]
 **proposal** | [**OneOfProtocolParameter**](../Model/.md)| Filters proposal operations by proposal hash. | [optional]
 **duplicated** | [**OneOfBoolParameter**](../Model/.md)| Specify whether to include or exclude duplicates, which didn&#39;t actually upvote a proposal. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts proposal operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\ProposalOperation[]**](../Model/ProposalOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetProposalsCount()`

```php
operationsGetProposalsCount($level, $timestamp): int
```

Get proposals count

Returns the total number of proposal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters proposal operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters proposal operations by timestamp.

try {
    $result = $apiInstance->operationsGetProposalsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetProposalsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters proposal operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters proposal operations by timestamp. | [optional]

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

## `operationsGetRevealByHash()`

```php
operationsGetRevealByHash($hash, $quote): \Bzzhh\Tzkt\Model\RevealOperation[]
```

Get reveal by hash

Returns reveal operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRevealByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevealByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\RevealOperation[]**](../Model/RevealOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetReveals()`

```php
operationsGetReveals($sender, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\RevealOperation[]
```

Get reveals

Returns a list of reveal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters reveal operations by sender. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters reveal operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters reveal operations by timestamp.
$status = new \Bzzhh\Tzkt\Model\OneOfOperationStatusParameter(); // OneOfOperationStatusParameter | Filters reveal operations by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts reveals by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetReveals($sender, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetReveals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sender** | [**OneOfAccountParameter**](../Model/.md)| Filters reveal operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters reveal operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters reveal operations by timestamp. | [optional]
 **status** | [**OneOfOperationStatusParameter**](../Model/.md)| Filters reveal operations by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts reveals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\RevealOperation[]**](../Model/RevealOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevealsCount()`

```php
operationsGetRevealsCount($level, $timestamp): int
```

Get reveals count

Returns the total number of reveal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters reveals by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters reveals by timestamp.

try {
    $result = $apiInstance->operationsGetRevealsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevealsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters reveals by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters reveals by timestamp. | [optional]

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

## `operationsGetRevelationPenalties()`

```php
operationsGetRevelationPenalties($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\RevelationPenaltyOperation[]
```

Get revelation penalties

Returns a list of revelation penalty operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters revelation penalty operations by baker. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters revelation penalty operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters revelation penalty operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts revelation penalty operations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRevelationPenalties($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevelationPenalties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **baker** | [**OneOfAccountParameter**](../Model/.md)| Filters revelation penalty operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters revelation penalty operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters revelation penalty operations by timestamp. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts revelation penalty operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\RevelationPenaltyOperation[]**](../Model/RevelationPenaltyOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevelationPenaltiesCount()`

```php
operationsGetRevelationPenaltiesCount($level, $timestamp): int
```

Get revelation penalties count

Returns the total number of revelation penalty operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters revelation penalty operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters revelation penalty operations by timestamp.

try {
    $result = $apiInstance->operationsGetRevelationPenaltiesCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevelationPenaltiesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters revelation penalty operations by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters revelation penalty operations by timestamp. | [optional]

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

## `operationsGetTransactionByHash()`

```php
operationsGetTransactionByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transaction by hash

Returns transaction operations with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactionByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionByHashCounter()`

```php
operationsGetTransactionByHashCounter($hash, $counter, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transaction by hash and counter

Returns transaction operations with specified hash and counter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactionByHashCounter($hash, $counter, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionByHashCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **counter** | **int**| Operation counter |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionByHashCounterNonce()`

```php
operationsGetTransactionByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transaction by hash, counter and nonce

Returns an internal transaction operation with specified hash, counter and nonce.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$nonce = 56; // int | Operation nonce (internal)
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactionByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionByHashCounterNonce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Operation hash |
 **counter** | **int**| Operation counter |
 **nonce** | **int**| Operation nonce (internal) |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactions()`

```php
operationsGetTransactions($anyof, $initiator, $sender, $target, $amount, $level, $timestamp, $entrypoint, $parameter, $parameters, $has_internals, $status, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transactions

Returns a list of transaction operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = 'anyof_example'; // string | Filters transactions by any of the specified fields. Example: `anyof.sender.target=tz1...` will return operations where `sender` OR `target` is equal to the specified value. This parameter is useful when you need to retrieve all transactions associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters transactions by initiator. Allowed fields for `.eqx` mode: `target`.
$sender = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters transactions by sender. Allowed fields for `.eqx` mode: `target`.
$target = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters transactions by target. Allowed fields for `.eqx` mode: `sender`, `initiator`.
$amount = new \Bzzhh\Tzkt\Model\OneOfInt64Parameter(); // OneOfInt64Parameter | Filters transactions by amount (microtez).
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters transactions by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters transactions by timestamp.
$entrypoint = new \Bzzhh\Tzkt\Model\OneOfStringParameter(); // OneOfStringParameter | Filters transactions by entrypoint called on the target contract.
$parameter = new \Bzzhh\Tzkt\Model\OneOfJsonParameter(); // OneOfJsonParameter | Filters transactions by parameter value. Note, this query parameter supports the following format: `?parameter{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?parameter.token_id=...` or `?parameter.sigs.0.ne=...`.
$parameters = new \Bzzhh\Tzkt\Model\OneOfStringParameter(); // OneOfStringParameter | **DEPRECATED**. Use `entrypoint` and `parameter` instead.
$has_internals = new \Bzzhh\Tzkt\Model\OneOfBoolParameter(); // OneOfBoolParameter | Filters transactions by presence of internal operations.
$status = new \Bzzhh\Tzkt\Model\OneOfOperationStatusParameter(); // OneOfOperationStatusParameter | Filters transactions by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts transactions by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`, `allocationFee`, `amount`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\OneOfSymbols(); // OneOfSymbols | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactions($anyof, $initiator, $sender, $target, $amount, $level, $timestamp, $entrypoint, $parameter, $parameters, $has_internals, $status, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyof** | **string**| Filters transactions by any of the specified fields. Example: &#x60;anyof.sender.target&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;target&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all transactions associated with a specified account. | [optional]
 **initiator** | [**OneOfAccountParameter**](../Model/.md)| Filters transactions by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;target&#x60;. | [optional]
 **sender** | [**OneOfAccountParameter**](../Model/.md)| Filters transactions by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;target&#x60;. | [optional]
 **target** | [**OneOfAccountParameter**](../Model/.md)| Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;sender&#x60;, &#x60;initiator&#x60;. | [optional]
 **amount** | [**OneOfInt64Parameter**](../Model/.md)| Filters transactions by amount (microtez). | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters transactions by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters transactions by timestamp. | [optional]
 **entrypoint** | [**OneOfStringParameter**](../Model/.md)| Filters transactions by entrypoint called on the target contract. | [optional]
 **parameter** | [**OneOfJsonParameter**](../Model/.md)| Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;. | [optional]
 **parameters** | [**OneOfStringParameter**](../Model/.md)| **DEPRECATED**. Use &#x60;entrypoint&#x60; and &#x60;parameter&#x60; instead. | [optional]
 **has_internals** | [**OneOfBoolParameter**](../Model/.md)| Filters transactions by presence of internal operations. | [optional]
 **status** | [**OneOfOperationStatusParameter**](../Model/.md)| Filters transactions by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts transactions by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;, &#x60;allocationFee&#x60;, &#x60;amount&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional]
 **quote** | [**OneOfSymbols**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionsCount()`

```php
operationsGetTransactionsCount($level, $timestamp, $status): int
```

Get transactions count

Returns the total number of transaction operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters transactions by level.
$timestamp = new \Bzzhh\Tzkt\Model\OneOfDateTimeParameter(); // OneOfDateTimeParameter | Filters transactions by timestamp.
$status = new \Bzzhh\Tzkt\Model\OneOfOperationStatusParameter(); // OneOfOperationStatusParameter | Filters transactions by operation status (`applied`, `failed`, `backtracked`, `skipped`).

try {
    $result = $apiInstance->operationsGetTransactionsCount($level, $timestamp, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters transactions by level. | [optional]
 **timestamp** | [**OneOfDateTimeParameter**](../Model/.md)| Filters transactions by timestamp. | [optional]
 **status** | [**OneOfOperationStatusParameter**](../Model/.md)| Filters transactions by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional]

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
