# Bzzhh\Tzkt\StakingApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stakingGetStakingUpdates()**](StakingApi.md#stakingGetStakingUpdates) | **GET** /v1/staking/updates | Get staking updates |
| [**stakingGetStakingUpdatesCount()**](StakingApi.md#stakingGetStakingUpdatesCount) | **GET** /v1/staking/updates/count | Get staking updates count |
| [**stakingGetUnstakeRequests()**](StakingApi.md#stakingGetUnstakeRequests) | **GET** /v1/staking/unstake_requests | Get unstake requests |
| [**stakingGetUnstakeRequestsCount()**](StakingApi.md#stakingGetUnstakeRequestsCount) | **GET** /v1/staking/unstake_requests/count | Get unstake requests count |


## `stakingGetStakingUpdates()`

```php
stakingGetStakingUpdates($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\StakingUpdate[]
```

Get staking updates

Returns a list of staking updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details.
$timestamp = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details.
$cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details.
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related staker.   Click on the parameter to expand more details.
$type = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter(); // StakingGetStakingUpdatesCountTypeParameter | Filter by staking update type.   Click on the parameter to expand more details.
$amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$pseudotokens = new \Bzzhh\Tzkt\Model\AccountsGetStakedPseudotokensParameter(); // AccountsGetStakedPseudotokensParameter | Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details.
$rounding_error = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$autostaking_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$staking_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$delegation_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_baking_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_endorsing_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_preendorsing_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->stakingGetStakingUpdates($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetStakingUpdates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. | [optional] |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker.   Click on the parameter to expand more details. | [optional] |
| **type** | [**StakingGetStakingUpdatesCountTypeParameter**](../Model/.md)| Filter by staking update type.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **pseudotokens** | [**AccountsGetStakedPseudotokensParameter**](../Model/.md)| Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **autostaking_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **staking_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **delegation_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_baking_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_endorsing_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_preendorsing_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\StakingUpdate[]**](../Model/StakingUpdate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stakingGetStakingUpdatesCount()`

```php
stakingGetStakingUpdatesCount($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id): int
```

Get staking updates count

Returns a total number of staking updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details.
$timestamp = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details.
$cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details.
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related staker.   Click on the parameter to expand more details.
$type = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountTypeParameter(); // StakingGetStakingUpdatesCountTypeParameter | Filter by staking update type.   Click on the parameter to expand more details.
$amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$pseudotokens = new \Bzzhh\Tzkt\Model\AccountsGetStakedPseudotokensParameter(); // AccountsGetStakedPseudotokensParameter | Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details.
$rounding_error = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$autostaking_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$staking_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$delegation_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_baking_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_endorsing_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.
$double_preendorsing_op_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by the ID of the related operation.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->stakingGetStakingUpdatesCount($id, $level, $timestamp, $cycle, $baker, $staker, $type, $amount, $pseudotokens, $rounding_error, $autostaking_op_id, $staking_op_id, $delegation_op_id, $double_baking_op_id, $double_endorsing_op_id, $double_preendorsing_op_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetStakingUpdatesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp of the block, where the staking update happened.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filter by freezer or block cycle (depending on the update type).   Click on the parameter to expand more details. | [optional] |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker.   Click on the parameter to expand more details. | [optional] |
| **type** | [**StakingGetStakingUpdatesCountTypeParameter**](../Model/.md)| Filter by staking update type.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **pseudotokens** | [**AccountsGetStakedPseudotokensParameter**](../Model/.md)| Filter by amount of staking pseudotokens minted or burnt.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **autostaking_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **staking_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **delegation_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_baking_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_endorsing_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |
| **double_preendorsing_op_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by the ID of the related operation.   Click on the parameter to expand more details. | [optional] |

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

## `stakingGetUnstakeRequests()`

```php
stakingGetUnstakeRequests($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\UnstakeRequest[]
```

Get unstake requests

Returns a list of unstake requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by cycle.   Click on the parameter to expand more details.
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related staker. If staker is null, then it's aggregated unstaked deposits for the baker.   Click on the parameter to expand more details.
$requested_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by requested amount.   Click on the parameter to expand more details.
$restaked_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by restaked amount.   Click on the parameter to expand more details.
$finalized_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by finalized amount.   Click on the parameter to expand more details.
$slashed_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by slashed amount.   Click on the parameter to expand more details.
$rounding_error = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$actual_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by actual amount.   Click on the parameter to expand more details.
$status = new \Bzzhh\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter(); // StakingGetUnstakeRequestsCountStatusParameter | Filter by status.   Click on the parameter to expand more details.
$updates_count = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by staking updates count.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->stakingGetUnstakeRequests($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetUnstakeRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filter by cycle.   Click on the parameter to expand more details. | [optional] |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. | [optional] |
| **requested_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by requested amount.   Click on the parameter to expand more details. | [optional] |
| **restaked_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by restaked amount.   Click on the parameter to expand more details. | [optional] |
| **finalized_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by finalized amount.   Click on the parameter to expand more details. | [optional] |
| **slashed_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by slashed amount.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **actual_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by actual amount.   Click on the parameter to expand more details. | [optional] |
| **status** | [**StakingGetUnstakeRequestsCountStatusParameter**](../Model/.md)| Filter by status.   Click on the parameter to expand more details. | [optional] |
| **updates_count** | [**AccountsGetIdParameter**](../Model/.md)| Filter by staking updates count.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\UnstakeRequest[]**](../Model/UnstakeRequest.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stakingGetUnstakeRequestsCount()`

```php
stakingGetUnstakeRequestsCount($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time): int
```

Get unstake requests count

Returns a total number of unstake requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\StakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by cycle.   Click on the parameter to expand more details.
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related baker.   Click on the parameter to expand more details.
$staker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by related staker. If staker is null, then it's aggregated unstaked deposits for the baker.   Click on the parameter to expand more details.
$requested_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by requested amount.   Click on the parameter to expand more details.
$restaked_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by restaked amount.   Click on the parameter to expand more details.
$finalized_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by finalized amount.   Click on the parameter to expand more details.
$slashed_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by slashed amount.   Click on the parameter to expand more details.
$rounding_error = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by protocol rounding error.   Click on the parameter to expand more details.
$actual_amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by actual amount.   Click on the parameter to expand more details.
$status = new \Bzzhh\Tzkt\Model\StakingGetUnstakeRequestsCountStatusParameter(); // StakingGetUnstakeRequestsCountStatusParameter | Filter by status.   Click on the parameter to expand more details.
$updates_count = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by staking updates count.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->stakingGetUnstakeRequestsCount($id, $cycle, $baker, $staker, $requested_amount, $restaked_amount, $finalized_amount, $slashed_amount, $rounding_error, $actual_amount, $status, $updates_count, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StakingApi->stakingGetUnstakeRequestsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filter by cycle.   Click on the parameter to expand more details. | [optional] |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related baker.   Click on the parameter to expand more details. | [optional] |
| **staker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by related staker. If staker is null, then it&#39;s aggregated unstaked deposits for the baker.   Click on the parameter to expand more details. | [optional] |
| **requested_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by requested amount.   Click on the parameter to expand more details. | [optional] |
| **restaked_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by restaked amount.   Click on the parameter to expand more details. | [optional] |
| **finalized_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by finalized amount.   Click on the parameter to expand more details. | [optional] |
| **slashed_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by slashed amount.   Click on the parameter to expand more details. | [optional] |
| **rounding_error** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by protocol rounding error.   Click on the parameter to expand more details. | [optional] |
| **actual_amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by actual amount.   Click on the parameter to expand more details. | [optional] |
| **status** | [**StakingGetUnstakeRequestsCountStatusParameter**](../Model/.md)| Filter by status.   Click on the parameter to expand more details. | [optional] |
| **updates_count** | [**AccountsGetIdParameter**](../Model/.md)| Filter by staking updates count.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was created.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the unstake request was last updated.   Click on the parameter to expand more details. | [optional] |

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
