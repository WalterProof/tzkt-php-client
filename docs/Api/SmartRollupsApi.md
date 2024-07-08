# Bzzhh\Tzkt\SmartRollupsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**smartRollupsGetEntrypoints()**](SmartRollupsApi.md#smartRollupsGetEntrypoints) | **GET** /v1/smart_rollups/{address}/entrypoints | Get smart rollup entrypoints |
| [**smartRollupsGetInboxMessages()**](SmartRollupsApi.md#smartRollupsGetInboxMessages) | **GET** /v1/smart_rollups/inbox | Get inbox messages |
| [**smartRollupsGetInboxMessagesCount()**](SmartRollupsApi.md#smartRollupsGetInboxMessagesCount) | **GET** /v1/smart_rollups/inbox/count | Get inbox messages count |
| [**smartRollupsGetInterface()**](SmartRollupsApi.md#smartRollupsGetInterface) | **GET** /v1/smart_rollups/{address}/interface | Get JSON Schema [2020-12] interface for the smart rollup |
| [**smartRollupsGetSmartRollup()**](SmartRollupsApi.md#smartRollupsGetSmartRollup) | **GET** /v1/smart_rollups/{address} | Get smart rollup by address |
| [**smartRollupsGetSmartRollupCommitments()**](SmartRollupsApi.md#smartRollupsGetSmartRollupCommitments) | **GET** /v1/smart_rollups/commitments | Get smart rollup commitments |
| [**smartRollupsGetSmartRollupCommitmentsCount()**](SmartRollupsApi.md#smartRollupsGetSmartRollupCommitmentsCount) | **GET** /v1/smart_rollups/commitments/count | Get smart rollup commitments count |
| [**smartRollupsGetSmartRollupGames()**](SmartRollupsApi.md#smartRollupsGetSmartRollupGames) | **GET** /v1/smart_rollups/games | Get smart rollup games |
| [**smartRollupsGetSmartRollupGamesCount()**](SmartRollupsApi.md#smartRollupsGetSmartRollupGamesCount) | **GET** /v1/smart_rollups/games/count | Get smart rollup games count |
| [**smartRollupsGetSmartRollupStakers()**](SmartRollupsApi.md#smartRollupsGetSmartRollupStakers) | **GET** /v1/smart_rollups/{address}/stakers | Get smart rollup stakers |
| [**smartRollupsGetSmartRollups()**](SmartRollupsApi.md#smartRollupsGetSmartRollups) | **GET** /v1/smart_rollups | Get smart rollups |
| [**smartRollupsGetSmartRollupsCount()**](SmartRollupsApi.md#smartRollupsGetSmartRollupsCount) | **GET** /v1/smart_rollups/count | Get smart rollups count |


## `smartRollupsGetEntrypoints()`

```php
smartRollupsGetEntrypoints($address, $all, $json, $micheline, $michelson): \Bzzhh\Tzkt\Model\Entrypoint[]
```

Get smart rollup entrypoints

Returns entrypoints of the specified smart rollup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Smart rollup address (starting with sr1)
$all = false; // bool | If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here `(or %entry1 (unit %entry2) (nat %entry3))` the `%entry1` is unused entrypoint             because it can be normalized to `%entry2` or `%entry3`
$json = true; // bool | Include parameters schema in human-readable JSON format
$micheline = false; // bool | Include parameters schema in micheline format
$michelson = false; // bool | Include parameters schema in michelson format

try {
    $result = $apiInstance->smartRollupsGetEntrypoints($address, $all, $json, $micheline, $michelson);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetEntrypoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Smart rollup address (starting with sr1) | |
| **all** | **bool**| If true, returns all entrypoints, including unused ones.             Unused means that the entrypoint can be normalized to a more specific one.             For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint             because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; | [optional] [default to false] |
| **json** | **bool**| Include parameters schema in human-readable JSON format | [optional] [default to true] |
| **micheline** | **bool**| Include parameters schema in micheline format | [optional] [default to false] |
| **michelson** | **bool**| Include parameters schema in michelson format | [optional] [default to false] |

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

## `smartRollupsGetInboxMessages()`

```php
smartRollupsGetInboxMessages($id, $level, $timestamp, $type, $sort, $offset, $limit, $select, $micheline): \Bzzhh\Tzkt\Model\SrMessage[]
```

Get inbox messages

Returns a list of smart rollup inbox messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details.
$timestamp = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details.
$type = new \Bzzhh\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter(); // SmartRollupsGetInboxMessagesCountTypeParameter | Filter by inbox message type (`level_start`, `level_info`, `level_end`, `transfer`, `external`, `migration`).   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of smart rollup call parameters: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string

try {
    $result = $apiInstance->smartRollupsGetInboxMessages($id, $level, $timestamp, $type, $sort, $offset, $limit, $select, $micheline);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetInboxMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. | [optional] |
| **type** | [**SmartRollupsGetInboxMessagesCountTypeParameter**](../Model/.md)| Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of smart rollup call parameters: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SrMessage[]**](../Model/SrMessage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smartRollupsGetInboxMessagesCount()`

```php
smartRollupsGetInboxMessagesCount($id, $level, $timestamp, $type): int
```

Get inbox messages count

Returns a total number of smart rollup inbox messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details.
$timestamp = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details.
$type = new \Bzzhh\Tzkt\Model\SmartRollupsGetInboxMessagesCountTypeParameter(); // SmartRollupsGetInboxMessagesCountTypeParameter | Filter by inbox message type (`level_start`, `level_info`, `level_end`, `transfer`, `external`, `migration`).   Click on the parameter to expand more details.

try {
    $result = $apiInstance->smartRollupsGetInboxMessagesCount($id, $level, $timestamp, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetInboxMessagesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the message was pushed.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the message was pushed.   Click on the parameter to expand more details. | [optional] |
| **type** | [**SmartRollupsGetInboxMessagesCountTypeParameter**](../Model/.md)| Filter by inbox message type (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;).   Click on the parameter to expand more details. | [optional] |

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

## `smartRollupsGetInterface()`

```php
smartRollupsGetInterface($address): \Bzzhh\Tzkt\Model\ContractInterface
```

Get JSON Schema [2020-12] interface for the smart rollup

Returns standard JSON Schema for smart rollup parameter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Smart rollup address

try {
    $result = $apiInstance->smartRollupsGetInterface($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Smart rollup address | |

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

## `smartRollupsGetSmartRollup()`

```php
smartRollupsGetSmartRollup($address): \Bzzhh\Tzkt\Model\SmartRollup
```

Get smart rollup by address

Returns a smart rollup with the specified address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Smart rollup address

try {
    $result = $apiInstance->smartRollupsGetSmartRollup($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | **string**| Smart rollup address | |

### Return type

[**\Bzzhh\Tzkt\Model\SmartRollup**](../Model/SmartRollup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smartRollupsGetSmartRollupCommitments()`

```php
smartRollupsGetSmartRollupCommitments($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\SrCommitment[]
```

Get smart rollup commitments

Returns a list of smart rollup commitments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by smart rollup.   Click on the parameter to expand more details.
$inbox_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by inbox level.   Click on the parameter to expand more details.
$hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details.
$status = new \Bzzhh\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter(); // SmartRollupsGetSmartRollupCommitmentsCountStatusParameter | Filter by commitment status (`pending`, `cemented`, `executed`, `refuted`, or `orphan`).   Click on the parameter to expand more details.
$predecessor_id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$predecessor_hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollupCommitments($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollupCommitments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by smart rollup.   Click on the parameter to expand more details. | [optional] |
| **inbox_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by inbox level.   Click on the parameter to expand more details. | [optional] |
| **hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. | [optional] |
| **status** | [**SmartRollupsGetSmartRollupCommitmentsCountStatusParameter**](../Model/.md)| Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. | [optional] |
| **predecessor_id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **predecessor_hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SrCommitment[]**](../Model/SrCommitment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smartRollupsGetSmartRollupCommitmentsCount()`

```php
smartRollupsGetSmartRollupCommitmentsCount($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash): int
```

Get smart rollup commitments count

Returns a total number of smart rollup commitments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by smart rollup.   Click on the parameter to expand more details.
$inbox_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by inbox level.   Click on the parameter to expand more details.
$hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details.
$status = new \Bzzhh\Tzkt\Model\SmartRollupsGetSmartRollupCommitmentsCountStatusParameter(); // SmartRollupsGetSmartRollupCommitmentsCountStatusParameter | Filter by commitment status (`pending`, `cemented`, `executed`, `refuted`, or `orphan`).   Click on the parameter to expand more details.
$predecessor_id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$predecessor_hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollupCommitmentsCount($id, $initiator, $rollup, $inbox_level, $hash, $first_level, $first_time, $last_level, $last_time, $status, $predecessor_id, $predecessor_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollupCommitmentsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by initiator (an account published the commitment first).   Click on the parameter to expand more details. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by smart rollup.   Click on the parameter to expand more details. | [optional] |
| **inbox_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by inbox level.   Click on the parameter to expand more details. | [optional] |
| **hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the commitment was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the commitment was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the commitment was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the commitment was last seen.   Click on the parameter to expand more details. | [optional] |
| **status** | [**SmartRollupsGetSmartRollupCommitmentsCountStatusParameter**](../Model/.md)| Filter by commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;).   Click on the parameter to expand more details. | [optional] |
| **predecessor_id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **predecessor_hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |

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

## `smartRollupsGetSmartRollupGames()`

```php
smartRollupsGetSmartRollupGames($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\SrGame[]
```

Get smart rollup games

Returns a list of smart rollup refutation games.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by smart rollup.   Click on the parameter to expand more details.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details.
$initiator_commitment_id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$initiator_commitment_hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$opponent = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details.
$opponent_commitment_id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$opponent_commitment_hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollupGames($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollupGames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by smart rollup.   Click on the parameter to expand more details. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. | [optional] |
| **initiator_commitment_id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **initiator_commitment_hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **opponent** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. | [optional] |
| **opponent_commitment_id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **opponent_commitment_hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SrGame[]**](../Model/SrGame.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smartRollupsGetSmartRollupGamesCount()`

```php
smartRollupsGetSmartRollupGamesCount($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time): int
```

Get smart rollup games count

Returns a total number of smart rollup refutation games.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by smart rollup.   Click on the parameter to expand more details.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details.
$initiator_commitment_id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$initiator_commitment_hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$opponent = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details.
$opponent_commitment_id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$opponent_commitment_hash = new \Bzzhh\Tzkt\Model\OperationsGetSmartRollupPublishOpsCommitmentHashParameter(); // OperationsGetSmartRollupPublishOpsCommitmentHashParameter | Filter by commitment hash.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollupGamesCount($id, $rollup, $initiator, $initiator_commitment_id, $initiator_commitment_hash, $opponent, $opponent_commitment_id, $opponent_commitment_hash, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollupGamesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by smart rollup.   Click on the parameter to expand more details. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by initiator (who found a wrong commitment and started the refutation game).   Click on the parameter to expand more details. | [optional] |
| **initiator_commitment_id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **initiator_commitment_hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **opponent** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by opponent (who was accused in publishing a wrong commitment).   Click on the parameter to expand more details. | [optional] |
| **opponent_commitment_id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **opponent_commitment_hash** | [**OperationsGetSmartRollupPublishOpsCommitmentHashParameter**](../Model/.md)| Filter by commitment hash.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the refutation game was started.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the refutation game was started.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the refutation game was last updated.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the refutation game was last updated.   Click on the parameter to expand more details. | [optional] |

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

## `smartRollupsGetSmartRollupStakers()`

```php
smartRollupsGetSmartRollupStakers($address, $id, $bond_status, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\SrStaker[]
```

Get smart rollup stakers

Returns a list of smart rollup stakers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = array('key' => new \Bzzhh\Tzkt\Model\AddressParameter()); // AddressParameter | Filter by smart rollup staker address.   Click on the parameter to expand more details.
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$bond_status = new \Bzzhh\Tzkt\Model\SmartRollupsGetSmartRollupStakersBondStatusParameter(); // SmartRollupsGetSmartRollupStakersBondStatusParameter | Filter by staker bond status (`active`, `returned`, or `lost`).   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollupStakers($address, $id, $bond_status, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollupStakers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **address** | [**AddressParameter**](../Model/.md)| Filter by smart rollup staker address.   Click on the parameter to expand more details. | |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **bond_status** | [**SmartRollupsGetSmartRollupStakersBondStatusParameter**](../Model/.md)| Filter by staker bond status (&#x60;active&#x60;, &#x60;returned&#x60;, or &#x60;lost&#x60;).   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SrStaker[]**](../Model/SrStaker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smartRollupsGetSmartRollups()`

```php
smartRollupsGetSmartRollups($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\SmartRollup[]
```

Get smart rollups

Returns a list of smart rollups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$address = new \Bzzhh\Tzkt\Model\AccountsGetAddressParameter(); // AccountsGetAddressParameter | Filter by smart rollup address.   Click on the parameter to expand more details.
$creator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by smart rollup creator.   Click on the parameter to expand more details.
$first_activity = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details.
$first_activity_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details.
$last_activity = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details.
$last_activity_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollups($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **address** | [**AccountsGetAddressParameter**](../Model/.md)| Filter by smart rollup address.   Click on the parameter to expand more details. | [optional] |
| **creator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by smart rollup creator.   Click on the parameter to expand more details. | [optional] |
| **first_activity** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_activity_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_activity** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_activity_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SmartRollup[]**](../Model/SmartRollup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smartRollupsGetSmartRollupsCount()`

```php
smartRollupsGetSmartRollupsCount($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time): int
```

Get smart rollups count

Returns a total number of smart rollups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\SmartRollupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$address = new \Bzzhh\Tzkt\Model\AccountsGetAddressParameter(); // AccountsGetAddressParameter | Filter by smart rollup address.   Click on the parameter to expand more details.
$creator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by smart rollup creator.   Click on the parameter to expand more details.
$first_activity = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details.
$first_activity_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details.
$last_activity = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details.
$last_activity_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->smartRollupsGetSmartRollupsCount($id, $address, $creator, $first_activity, $first_activity_time, $last_activity, $last_activity_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartRollupsApi->smartRollupsGetSmartRollupsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **address** | [**AccountsGetAddressParameter**](../Model/.md)| Filter by smart rollup address.   Click on the parameter to expand more details. | [optional] |
| **creator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by smart rollup creator.   Click on the parameter to expand more details. | [optional] |
| **first_activity** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the rollup was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_activity_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the rollup was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_activity** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the rollup was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_activity_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the rollup was last seen.   Click on the parameter to expand more details. | [optional] |

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
