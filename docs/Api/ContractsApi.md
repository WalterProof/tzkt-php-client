# Bzzhh\Tzkt\ContractsApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contractsBuildEntrypointParameters()**](ContractsApi.md#contractsBuildEntrypointParameters) | **GET** /v1/contracts/{address}/entrypoints/{name}/build | Build entrypoint parameters
[**contractsBuildEntrypointParameters2()**](ContractsApi.md#contractsBuildEntrypointParameters2) | **POST** /v1/contracts/{address}/entrypoints/{name}/build | Build entrypoint parameters
[**contractsGet()**](ContractsApi.md#contractsGet) | **GET** /v1/contracts | Get contracts
[**contractsGetBigMapByName()**](ContractsApi.md#contractsGetBigMapByName) | **GET** /v1/contracts/{address}/bigmaps/{name} | Get bigmap by name
[**contractsGetBigMapByNameKeys()**](ContractsApi.md#contractsGetBigMapByNameKeys) | **GET** /v1/contracts/{address}/bigmaps/{name}/keys | Get bigmap keys
[**contractsGetBigMaps()**](ContractsApi.md#contractsGetBigMaps) | **GET** /v1/contracts/{address}/bigmaps | Get contract bigmaps
[**contractsGetByAddress()**](ContractsApi.md#contractsGetByAddress) | **GET** /v1/contracts/{address} | Get contract by address
[**contractsGetCode()**](ContractsApi.md#contractsGetCode) | **GET** /v1/contracts/{address}/code | Get contract code
[**contractsGetCount()**](ContractsApi.md#contractsGetCount) | **GET** /v1/contracts/count | Get contracts count
[**contractsGetEntrypointByName()**](ContractsApi.md#contractsGetEntrypointByName) | **GET** /v1/contracts/{address}/entrypoints/{name} | Get entrypoint by name
[**contractsGetEntrypoints()**](ContractsApi.md#contractsGetEntrypoints) | **GET** /v1/contracts/{address}/entrypoints | Get contract entrypoints
[**contractsGetHistoricalKeys()**](ContractsApi.md#contractsGetHistoricalKeys) | **GET** /v1/contracts/{address}/bigmaps/{name}/historical_keys/{level} | Get historical keys
[**contractsGetInterface()**](ContractsApi.md#contractsGetInterface) | **GET** /v1/contracts/{address}/interface | Get JSON Schema [2020-12] interface for the contract
[**contractsGetKey()**](ContractsApi.md#contractsGetKey) | **GET** /v1/contracts/{address}/bigmaps/{name}/keys/{key} | Get bigmap key
[**contractsGetKey2()**](ContractsApi.md#contractsGetKey2) | **GET** /v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}/{key} | Get historical key
[**contractsGetKeyUpdates()**](ContractsApi.md#contractsGetKeyUpdates) | **GET** /v1/contracts/{address}/bigmaps/{name}/keys/{key}/updates | Get bigmap key updates
[**contractsGetRawStorage()**](ContractsApi.md#contractsGetRawStorage) | **GET** /v1/contracts/{address}/storage/raw | Get raw contract storage
[**contractsGetRawStorageHistory()**](ContractsApi.md#contractsGetRawStorageHistory) | **GET** /v1/contracts/{address}/storage/raw/history | Get raw contract storage history
[**contractsGetRawStorageSchema()**](ContractsApi.md#contractsGetRawStorageSchema) | **GET** /v1/contracts/{address}/storage/raw/schema | Get raw contract storage schema
[**contractsGetStorage()**](ContractsApi.md#contractsGetStorage) | **GET** /v1/contracts/{address}/storage | Get contract storage
[**contractsGetStorageHistory()**](ContractsApi.md#contractsGetStorageHistory) | **GET** /v1/contracts/{address}/storage/history | Get contract storage history
[**contractsGetStorageSchema()**](ContractsApi.md#contractsGetStorageSchema) | **GET** /v1/contracts/{address}/storage/schema | Get contract storage schema


## `contractsBuildEntrypointParameters()`

```php
contractsBuildEntrypointParameters($address, $name, $value): \SplFileObject
```

Build entrypoint parameters

Returns micheline parameters converted from its JSON representation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Entrypoint name
$value = 'value_example'; // string | Json parameters

try {
    $result = $apiInstance->contractsBuildEntrypointParameters($address, $name, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsBuildEntrypointParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Entrypoint name |
 **value** | **string**| Json parameters | [optional]

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

## `contractsBuildEntrypointParameters2()`

```php
contractsBuildEntrypointParameters2($address, $name, $body): \SplFileObject
```

Build entrypoint parameters

Returns micheline parameters converted from its JSON representation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Entrypoint name
$body = NULL; // mixed | Json parameters

try {
    $result = $apiInstance->contractsBuildEntrypointParameters2($address, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsBuildEntrypointParameters2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Entrypoint name |
 **body** | **mixed**| Json parameters |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGet()`

```php
contractsGet($kind, $creator, $manager, $delegate, $last_activity, $select, $sort, $offset, $limit, $include_storage): \Bzzhh\Tzkt\Model\Contract[]
```

Get contracts

Returns a list of contract accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$kind = new \Bzzhh\Tzkt\Model\OneOfContractKindParameter(); // OneOfContractKindParameter | Contract kind to filter by (`delegator_contract` or `smart_contract`)
$creator = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters contracts by creator. Allowed fields for `.eqx` mode: `manager`, `delegate`.
$manager = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters contracts by manager. Allowed fields for `.eqx` mode: `creator`, `delegate`.
$delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters contracts by delegate. Allowed fields for `.eqx` mode: `manager`, `creator`.
$last_activity = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters contracts by last activity level (where the contract was updated)
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `balance`, `firstActivity`, `lastActivity`, `numTransactions`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$include_storage = false; // bool | Specifies whether to include contract storage value in response.

try {
    $result = $apiInstance->contractsGet($kind, $creator, $manager, $delegate, $last_activity, $select, $sort, $offset, $limit, $include_storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | [**OneOfContractKindParameter**](../Model/.md)| Contract kind to filter by (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) | [optional]
 **creator** | [**OneOfAccountParameter**](../Model/.md)| Filters contracts by creator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;manager&#x60;, &#x60;delegate&#x60;. | [optional]
 **manager** | [**OneOfAccountParameter**](../Model/.md)| Filters contracts by manager. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;creator&#x60;, &#x60;delegate&#x60;. | [optional]
 **delegate** | [**OneOfAccountParameter**](../Model/.md)| Filters contracts by delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;manager&#x60;, &#x60;creator&#x60;. | [optional]
 **last_activity** | [**OneOfInt32Parameter**](../Model/.md)| Filters contracts by last activity level (where the contract was updated) | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts delegators by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;balance&#x60;, &#x60;firstActivity&#x60;, &#x60;lastActivity&#x60;, &#x60;numTransactions&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **include_storage** | **bool**| Specifies whether to include contract storage value in response. | [optional] [default to false]

### Return type

[**\Bzzhh\Tzkt\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetBigMapByName()`

```php
contractsGetBigMapByName($address, $name, $micheline): \Bzzhh\Tzkt\Model\BigMap
```

Get bigmap by name

Returns contract bigmap with the specified name or storage path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is `ledger` or `assets.ledger`, then the name is `ledger`.             If there are multiple bigmaps with the same name, for example `assets.ledger` and `tokens.ledger`, you can specify the full path.
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetBigMapByName($address, $name, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetBigMapByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMap**](../Model/BigMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetBigMapByNameKeys()`

```php
contractsGetBigMapByNameKeys($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline): \Bzzhh\Tzkt\Model\BigMapKey[]
```

Get bigmap keys

Returns keys of a contract bigmap with the specified name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is `ledger` or `assets.ledger`, then the name is `ledger`.             If there are multiple bigmaps with the same name, for example `assets.ledger` and `tokens.ledger`, you can specify the full path.
$active = True; // bool | Filters keys by status: `true` - active, `false` - removed.
$key = new \Bzzhh\Tzkt\Model\OneOfJsonParameter(); // OneOfJsonParameter | Filters keys by JSON key. Note, this query parameter supports the following format: `?key{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?key.token_id=...`.
$value = new \Bzzhh\Tzkt\Model\OneOfJsonParameter(); // OneOfJsonParameter | Filters keys by JSON value. Note, this query parameter supports the following format: `?value{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?value.balance.gt=...`.
$last_level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters bigmap keys by the last update level.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts bigmap keys by specified field. Supported fields: `id` (default), `firstLevel`, `lastLevel`, `updates`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetBigMapByNameKeys($address, $name, $active, $key, $value, $last_level, $select, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetBigMapByNameKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. |
 **active** | **bool**| Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. | [optional]
 **key** | [**OneOfJsonParameter**](../Model/.md)| Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. | [optional]
 **value** | [**OneOfJsonParameter**](../Model/.md)| Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. | [optional]
 **last_level** | [**OneOfInt32Parameter**](../Model/.md)| Filters bigmap keys by the last update level. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;updates&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMapKey[]**](../Model/BigMapKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetBigMaps()`

```php
contractsGetBigMaps($address, $tags, $select, $sort, $offset, $limit, $micheline): \Bzzhh\Tzkt\Model\BigMap[]
```

Get contract bigmaps

Returns all active bigmaps allocated in the contract storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$tags = new \Bzzhh\Tzkt\Model\OneOfBigMapTagsParameter(); // OneOfBigMapTagsParameter | Filters bigmaps tags (`token_metadata` - tzip-12, `metadata` - tzip-16).
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts bigmaps by specified field. Supported fields: `id` (default), `firstLevel`, `lastLevel`, `totalKeys`, `activeKeys`, `updates`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetBigMaps($address, $tags, $select, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetBigMaps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **tags** | [**OneOfBigMapTagsParameter**](../Model/.md)| Filters bigmaps tags (&#x60;token_metadata&#x60; - tzip-12, &#x60;metadata&#x60; - tzip-16). | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object.             If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts bigmaps by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;firstLevel&#x60;, &#x60;lastLevel&#x60;, &#x60;totalKeys&#x60;, &#x60;activeKeys&#x60;, &#x60;updates&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMap[]**](../Model/BigMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetByAddress()`

```php
contractsGetByAddress($address): \Bzzhh\Tzkt\Model\Contract
```

Get contract by address

Returns a contract account with the specified address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address (starting with KT)

try {
    $result = $apiInstance->contractsGetByAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address (starting with KT) |

### Return type

[**\Bzzhh\Tzkt\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetCode()`

```php
contractsGetCode($address, $format): \SplFileObject
```

Get contract code

Returns a code of the specified contract.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address (starting with KT)
$format = 0; // int | Code format (`0` - micheline, `1` - michelson, `2` - bytes (base64))

try {
    $result = $apiInstance->contractsGetCode($address, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address (starting with KT) |
 **format** | **int**| Code format (&#x60;0&#x60; - micheline, &#x60;1&#x60; - michelson, &#x60;2&#x60; - bytes (base64)) | [optional] [default to 0]

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

## `contractsGetCount()`

```php
contractsGetCount($kind): int
```

Get contracts count

Returns a number of contract accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$kind = new \Bzzhh\Tzkt\Model\OneOfContractKindParameter(); // OneOfContractKindParameter | Contract kind to filter by (`delegator_contract` or `smart_contract`)

try {
    $result = $apiInstance->contractsGetCount($kind);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kind** | [**OneOfContractKindParameter**](../Model/.md)| Contract kind to filter by (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;) | [optional]

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

## `contractsGetEntrypointByName()`

```php
contractsGetEntrypointByName($address, $name, $json, $micheline, $michelson): \Bzzhh\Tzkt\Model\Entrypoint
```

Get entrypoint by name

Returns contract's entrypoint with specified name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address (starting with KT)
$name = 'name_example'; // string | Entrypoint name
$json = true; // bool | Include parameters schema in human-readable JSON format
$micheline = false; // bool | Include parameters schema in micheline format
$michelson = false; // bool | Include parameters schema in michelson format

try {
    $result = $apiInstance->contractsGetEntrypointByName($address, $name, $json, $micheline, $michelson);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetEntrypointByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address (starting with KT) |
 **name** | **string**| Entrypoint name |
 **json** | **bool**| Include parameters schema in human-readable JSON format | [optional] [default to true]
 **micheline** | **bool**| Include parameters schema in micheline format | [optional] [default to false]
 **michelson** | **bool**| Include parameters schema in michelson format | [optional] [default to false]

### Return type

[**\Bzzhh\Tzkt\Model\Entrypoint**](../Model/Entrypoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetEntrypoints()`

```php
contractsGetEntrypoints($address, $all, $json, $micheline, $michelson): \Bzzhh\Tzkt\Model\Entrypoint[]
```

Get contract entrypoints

Returns entrypoints of the specified contract.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address (starting with KT)
$all = false; // bool | If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here `(or %entry1 (unit %entry2) (nat %entry3))` the `%entry1` is unused entrypoint             because it can be normalized to `%entry2` or `%entry3`
$json = true; // bool | Include parameters schema in human-readable JSON format
$micheline = false; // bool | Include parameters schema in micheline format
$michelson = false; // bool | Include parameters schema in michelson format

try {
    $result = $apiInstance->contractsGetEntrypoints($address, $all, $json, $micheline, $michelson);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetEntrypoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address (starting with KT) |
 **all** | **bool**| If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; | [optional] [default to false]
 **json** | **bool**| Include parameters schema in human-readable JSON format | [optional] [default to true]
 **micheline** | **bool**| Include parameters schema in micheline format | [optional] [default to false]
 **michelson** | **bool**| Include parameters schema in michelson format | [optional] [default to false]

### Return type

[**\Bzzhh\Tzkt\Model\Entrypoint[]**](../Model/Entrypoint.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetHistoricalKeys()`

```php
contractsGetHistoricalKeys($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline): \Bzzhh\Tzkt\Model\BigMapKeyHistorical[]
```

Get historical keys

Returns a list of bigmap keys at the specific block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is `ledger` or `assets.ledger`, then the name is `ledger`.             If there are multiple bigmaps with the same name, for example `assets.ledger` and `tokens.ledger`, you can specify the full path.
$level = 56; // int | Level of the block at which you want to get bigmap keys
$active = True; // bool | Filters keys by status: `true` - active, `false` - removed.
$key = new \Bzzhh\Tzkt\Model\OneOfJsonParameter(); // OneOfJsonParameter | Filters keys by JSON key. Note, this query parameter supports the following format: `?key{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?key.token_id=...`.
$value = new \Bzzhh\Tzkt\Model\OneOfJsonParameter(); // OneOfJsonParameter | Filters keys by JSON value. Note, this query parameter supports the following format: `?value{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?value.balance.gt=...`.
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts bigmap keys by specified field. Supported fields: `id` (default).
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetHistoricalKeys($address, $name, $level, $active, $key, $value, $select, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetHistoricalKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. |
 **level** | **int**| Level of the block at which you want to get bigmap keys |
 **active** | **bool**| Filters keys by status: &#x60;true&#x60; - active, &#x60;false&#x60; - removed. | [optional]
 **key** | [**OneOfJsonParameter**](../Model/.md)| Filters keys by JSON key. Note, this query parameter supports the following format: &#x60;?key{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?key.token_id&#x3D;...&#x60;. | [optional]
 **value** | [**OneOfJsonParameter**](../Model/.md)| Filters keys by JSON value. Note, this query parameter supports the following format: &#x60;?value{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?value.balance.gt&#x3D;...&#x60;. | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts bigmap keys by specified field. Supported fields: &#x60;id&#x60; (default). | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMapKeyHistorical[]**](../Model/BigMapKeyHistorical.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetInterface()`

```php
contractsGetInterface($address): \Bzzhh\Tzkt\Model\ContractInterface
```

Get JSON Schema [2020-12] interface for the contract

Returns standard JSON Schema for contract storage, entrypoints, and Big_map entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address

try {
    $result = $apiInstance->contractsGetInterface($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |

### Return type

[**\Bzzhh\Tzkt\Model\ContractInterface**](../Model/ContractInterface.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetKey()`

```php
contractsGetKey($address, $name, $key, $micheline): \Bzzhh\Tzkt\Model\BigMapKey
```

Get bigmap key

Returns the specified bigmap key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is `ledger` or `assets.ledger`, then the name is `ledger`.             If there are multiple bigmaps with the same name, for example `assets.ledger` and `tokens.ledger`, you can specify the full path.
$key = 'key_example'; // string | Either a key hash (`expr123...`) or a plain value (`abcde...`).             Even if the key is complex (an object or an array), you can specify it as is, for example, `/keys/{\"address\":\"tz123\",\"token\":123}`.
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetKey($address, $name, $key, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. |
 **key** | **string**| Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;abcde...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;token\&quot;:123}&#x60;. |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMapKey**](../Model/BigMapKey.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetKey2()`

```php
contractsGetKey2($address, $name, $level, $key, $micheline): \Bzzhh\Tzkt\Model\BigMapKeyHistorical
```

Get historical key

Returns the specified bigmap key at the specific block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is `ledger` or `assets.ledger`, then the name is `ledger`.             If there are multiple bigmaps with the same name, for example `assets.ledger` and `tokens.ledger`, you can specify the full path.
$level = 56; // int | Level of the block at which you want to get bigmap key
$key = 'key_example'; // string | Either a key hash (`expr123...`) or a plain value (`abcde...`).             Even if the key is complex (an object or an array), you can specify it as is, for example, `/keys/{\"address\":\"tz123\",\"token\":123}`.
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the bigmap key and value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetKey2($address, $name, $level, $key, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetKey2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. |
 **level** | **int**| Level of the block at which you want to get bigmap key |
 **key** | **string**| Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;abcde...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;token\&quot;:123}&#x60;. |
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the bigmap key and value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMapKeyHistorical**](../Model/BigMapKeyHistorical.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetKeyUpdates()`

```php
contractsGetKeyUpdates($address, $name, $key, $sort, $offset, $limit, $micheline): \Bzzhh\Tzkt\Model\BigMapKeyUpdate[]
```

Get bigmap key updates

Returns updates history for the specified bigmap key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$name = 'name_example'; // string | Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is `ledger` or `assets.ledger`, then the name is `ledger`.             If there are multiple bigmaps with the same name, for example `assets.ledger` and `tokens.ledger`, you can specify the full path.
$key = 'key_example'; // string | Either a key hash (`expr123...`) or a plain value (`abcde...`).             Even if the key is complex (an object or an array), you can specify it as is, for example, `/keys/{\"address\":\"tz123\",\"token\":123}`.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts bigmap updates by specified field. Supported fields: `id` (default).
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\OneOfMichelineFormat(); // OneOfMichelineFormat | Format of the key value: `0` - JSON, `1` - JSON string, `2` - Micheline, `3` - Micheline string

try {
    $result = $apiInstance->contractsGetKeyUpdates($address, $name, $key, $sort, $offset, $limit, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetKeyUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **name** | **string**| Bigmap name is the last piece of the bigmap storage path.             For example, if the storage path is &#x60;ledger&#x60; or &#x60;assets.ledger&#x60;, then the name is &#x60;ledger&#x60;.             If there are multiple bigmaps with the same name, for example &#x60;assets.ledger&#x60; and &#x60;tokens.ledger&#x60;, you can specify the full path. |
 **key** | **string**| Either a key hash (&#x60;expr123...&#x60;) or a plain value (&#x60;abcde...&#x60;).             Even if the key is complex (an object or an array), you can specify it as is, for example, &#x60;/keys/{\&quot;address\&quot;:\&quot;tz123\&quot;,\&quot;token\&quot;:123}&#x60;. |
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts bigmap updates by specified field. Supported fields: &#x60;id&#x60; (default). | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]
 **micheline** | [**OneOfMichelineFormat**](../Model/.md)| Format of the key value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - Micheline, &#x60;3&#x60; - Micheline string | [optional]

### Return type

[**\Bzzhh\Tzkt\Model\BigMapKeyUpdate[]**](../Model/BigMapKeyUpdate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetRawStorage()`

```php
contractsGetRawStorage($address, $level): \Bzzhh\Tzkt\Model\IMicheline
```

Get raw contract storage

Returns raw contract storage value in micheline format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$level = 0; // int | Level at which storage value should be taken. If `0` or not specified, the current value will be returned.

try {
    $result = $apiInstance->contractsGetRawStorage($address, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetRawStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **level** | **int**| Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. | [optional] [default to 0]

### Return type

[**\Bzzhh\Tzkt\Model\IMicheline**](../Model/IMicheline.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetRawStorageHistory()`

```php
contractsGetRawStorageHistory($address, $last_id, $limit): \Bzzhh\Tzkt\Model\StorageRecord[]
```

Get raw contract storage history

Returns raw contract storage historical values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$last_id = 0; // int | Id of the last item received (for pagination)
$limit = 10; // int | Maximum number of items to return

try {
    $result = $apiInstance->contractsGetRawStorageHistory($address, $last_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetRawStorageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **last_id** | **int**| Id of the last item received (for pagination) | [optional] [default to 0]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 10]

### Return type

[**\Bzzhh\Tzkt\Model\StorageRecord[]**](../Model/StorageRecord.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetRawStorageSchema()`

```php
contractsGetRawStorageSchema($address, $level): \Bzzhh\Tzkt\Model\IMicheline
```

Get raw contract storage schema

Returns micheline schema (type) of the contract storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$level = 0; // int | Level at which storage schema should be taken. If `0` or not specified, the current schema will be returned.

try {
    $result = $apiInstance->contractsGetRawStorageSchema($address, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetRawStorageSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **level** | **int**| Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. | [optional] [default to 0]

### Return type

[**\Bzzhh\Tzkt\Model\IMicheline**](../Model/IMicheline.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetStorage()`

```php
contractsGetStorage($address, $level, $path): \SplFileObject
```

Get contract storage

Returns contract storage value in JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$level = 0; // int | Level at which storage value should be taken. If `0` or not specified, the current value will be returned.
$path = 'path_example'; // string | Path in the JSON value (point-separated list of field names, e.g. `path=settings.refund_time` to return

try {
    $result = $apiInstance->contractsGetStorage($address, $level, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **level** | **int**| Level at which storage value should be taken. If &#x60;0&#x60; or not specified, the current value will be returned. | [optional] [default to 0]
 **path** | **string**| Path in the JSON value (point-separated list of field names, e.g. &#x60;path&#x3D;settings.refund_time&#x60; to return | [optional]

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

## `contractsGetStorageHistory()`

```php
contractsGetStorageHistory($address, $last_id, $limit): \Bzzhh\Tzkt\Model\StorageRecord[]
```

Get contract storage history

Returns contract storage historical values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$last_id = 0; // int | Id of the last item received (for pagination)
$limit = 10; // int | Maximum number of items to return

try {
    $result = $apiInstance->contractsGetStorageHistory($address, $last_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetStorageHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **last_id** | **int**| Id of the last item received (for pagination) | [optional] [default to 0]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 10]

### Return type

[**\Bzzhh\Tzkt\Model\StorageRecord[]**](../Model/StorageRecord.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractsGetStorageSchema()`

```php
contractsGetStorageSchema($address, $level): \SplFileObject
```

Get contract storage schema

Returns JSON schema of the contract storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Contract address
$level = 0; // int | Level at which storage schema should be taken. If `0` or not specified, the current schema will be returned.

try {
    $result = $apiInstance->contractsGetStorageSchema($address, $level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->contractsGetStorageSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Contract address |
 **level** | **int**| Level at which storage schema should be taken. If &#x60;0&#x60; or not specified, the current schema will be returned. | [optional] [default to 0]

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
