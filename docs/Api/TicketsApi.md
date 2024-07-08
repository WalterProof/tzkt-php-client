# Bzzhh\Tzkt\TicketsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ticketsGetHistoricalTicketBalances()**](TicketsApi.md#ticketsGetHistoricalTicketBalances) | **GET** /v1/tickets/historical_balances/{level} | Get historical ticket balances |
| [**ticketsGetTicketBalances()**](TicketsApi.md#ticketsGetTicketBalances) | **GET** /v1/tickets/balances | Get ticket balances |
| [**ticketsGetTicketBalancesCount()**](TicketsApi.md#ticketsGetTicketBalancesCount) | **GET** /v1/tickets/balances/count | Get ticket balances count |
| [**ticketsGetTicketTransfers()**](TicketsApi.md#ticketsGetTicketTransfers) | **GET** /v1/tickets/transfers | Get ticket transfers |
| [**ticketsGetTicketTransfersCount()**](TicketsApi.md#ticketsGetTicketTransfersCount) | **GET** /v1/tickets/transfers/count | Get ticket transfers count |
| [**ticketsGetTickets()**](TicketsApi.md#ticketsGetTickets) | **GET** /v1/tickets | Get tickets |
| [**ticketsGetTicketsCount()**](TicketsApi.md#ticketsGetTicketsCount) | **GET** /v1/tickets/count | Get tickets count |


## `ticketsGetHistoricalTicketBalances()`

```php
ticketsGetHistoricalTicketBalances($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\TicketBalanceShort[]
```

Get historical ticket balances

Returns a list of ticket balances at the end of the specified block. Note, this endpoint is quite heavy, therefore at least one of the filters (`account`, `ticket.id`, `ticket.ticketer`) must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = 56; // int | Level of the block at the end of which historical balances must be calculated
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$account = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$balance = new \Bzzhh\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetHistoricalTicketBalances($level, $id, $ticket_id, $ticket_ticketer, $account, $balance, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetHistoricalTicketBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | **int**| Level of the block at the end of which historical balances must be calculated | |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **account** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TicketBalanceShort[]**](../Model/TicketBalanceShort.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketBalances()`

```php
ticketsGetTicketBalances($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\TicketBalance[]
```

Get ticket balances

Returns a list of ticket balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticket_id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$account = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$balance = new \Bzzhh\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$transfers_count = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by number of transfers.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetTicketBalances($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **account** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **transfers_count** | [**AccountsGetIdParameter**](../Model/.md)| Filter by number of transfers.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TicketBalance[]**](../Model/TicketBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketBalancesCount()`

```php
ticketsGetTicketBalancesCount($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time): int
```

Get ticket balances count

Returns a total number of ticket balances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticket_id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$account = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by account address.   Click on the parameter to expand more details.
$balance = new \Bzzhh\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // TicketsGetTicketBalancesCountBalanceParameter | Filter by balance.   Click on the parameter to expand more details.
$transfers_count = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by number of transfers.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->ticketsGetTicketBalancesCount($id, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $account, $balance, $transfers_count, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketBalancesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **account** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by account address.   Click on the parameter to expand more details. | [optional] |
| **balance** | [**TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by balance.   Click on the parameter to expand more details. | [optional] |
| **transfers_count** | [**AccountsGetIdParameter**](../Model/.md)| Filter by number of transfers.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was first changed.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the balance was last changed.   Click on the parameter to expand more details. | [optional] |

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

## `ticketsGetTicketTransfers()`

```php
ticketsGetTicketTransfers($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\TicketTransfer[]
```

Get ticket transfers

Returns a list of ticket transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the transfer was made.   Click on the parameter to expand more details.
$timestamp = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details.
$ticket_id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filter by any of the specified fields (`from` or `to`). Example: `anyof.from.to=tz1...` will return transfers where `from` OR `to` is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details.
$from = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by sender address.   Click on the parameter to expand more details.
$to = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by recepient address.   Click on the parameter to expand more details.
$amount = new \Bzzhh\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // TicketsGetTicketBalancesCountBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$transaction_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details.
$transfer_ticket_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details.
$smart_rollup_execute_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetTicketTransfers($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketTransfers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. | [optional] |
| **from** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by sender address.   Click on the parameter to expand more details. | [optional] |
| **to** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by recepient address.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **transfer_ticket_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **smart_rollup_execute_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TicketTransfer[]**](../Model/TicketTransfer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketTransfersCount()`

```php
ticketsGetTicketTransfersCount($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id): int
```

Get ticket transfers count

Returns the total number of ticket transfers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the transfer was made.   Click on the parameter to expand more details.
$timestamp = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details.
$ticket_id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id. Click on the parameter to expand more details.
$ticket_ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$ticket_raw_type = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$ticket_raw_content = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$ticket_content = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$ticket_type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$ticket_content_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filter by any of the specified fields (`from` or `to`). Example: `anyof.from.to=tz1...` will return transfers where `from` OR `to` is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details.
$from = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by sender address.   Click on the parameter to expand more details.
$to = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by recepient address.   Click on the parameter to expand more details.
$amount = new \Bzzhh\Tzkt\Model\TicketsGetTicketBalancesCountBalanceParameter(); // TicketsGetTicketBalancesCountBalanceParameter | Filter by amount.   Click on the parameter to expand more details.
$transaction_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details.
$transfer_ticket_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details.
$smart_rollup_execute_id = new \Bzzhh\Tzkt\Model\StakingGetStakingUpdatesCountRoundingErrorParameter(); // StakingGetStakingUpdatesCountRoundingErrorParameter | Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->ticketsGetTicketTransfersCount($id, $level, $timestamp, $ticket_id, $ticket_ticketer, $ticket_raw_type, $ticket_raw_content, $ticket_content, $ticket_type_hash, $ticket_content_hash, $anyof, $from, $to, $amount, $transaction_id, $transfer_ticket_id, $smart_rollup_execute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketTransfersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **timestamp** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the transfer was made.   Click on the parameter to expand more details. | [optional] |
| **ticket_id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id. Click on the parameter to expand more details. | [optional] |
| **ticket_ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_type** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_raw_content** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **ticket_content** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **ticket_type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **ticket_content_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filter by any of the specified fields (&#x60;from&#x60; or &#x60;to&#x60;). Example: &#x60;anyof.from.to&#x3D;tz1...&#x60; will return transfers where &#x60;from&#x60; OR &#x60;to&#x60; is equal to the specified value. This parameter is useful when you need to get both incoming and outgoing transfers of the account at once.   Click on the parameter to expand more details. | [optional] |
| **from** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by sender address.   Click on the parameter to expand more details. | [optional] |
| **to** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by recepient address.   Click on the parameter to expand more details. | [optional] |
| **amount** | [**TicketsGetTicketBalancesCountBalanceParameter**](../Model/.md)| Filter by amount.   Click on the parameter to expand more details. | [optional] |
| **transaction_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transaction, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **transfer_ticket_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the transfer_ticket operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |
| **smart_rollup_execute_id** | [**StakingGetStakingUpdatesCountRoundingErrorParameter**](../Model/.md)| Filter by id of the smart_rollup_execute operation, caused the ticket transfer.   Click on the parameter to expand more details. | [optional] |

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

## `ticketsGetTickets()`

```php
ticketsGetTickets($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\Ticket[]
```

Get tickets

Returns a list of tickets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$raw_type = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$raw_content = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$content = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$content_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$first_minter = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by address of the first minter.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysSelectParameter(); // BigMapsGetBigMapKeysSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->ticketsGetTickets($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTickets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **raw_type** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **raw_content** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **content** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **content_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **first_minter** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by address of the first minter.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**BigMapsGetBigMapKeysSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Ticket[]**](../Model/Ticket.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsGetTicketsCount()`

```php
ticketsGetTicketsCount($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time): int
```

Get tickets count

Returns a total number of tickets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by ticketer address.   Click on the parameter to expand more details.
$raw_type = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content type in Micheline format.   Click on the parameter to expand more details.
$raw_content = new \Bzzhh\Tzkt\Model\TicketsGetTicketsCountRawTypeParameter(); // TicketsGetTicketsCountRawTypeParameter | Filter by ticket content in Micheline format.   Click on the parameter to expand more details.
$content = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by ticket content in JSON format.   Note, this parameter supports the following format: `content{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?content.color.in=red,green`).   Click on the parameter to expand more details.
$type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details.
$content_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details.
$first_minter = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filter by address of the first minter.   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapKeysFirstTimeParameter(); // BigMapsGetBigMapKeysFirstTimeParameter | Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->ticketsGetTicketsCount($id, $ticketer, $raw_type, $raw_content, $content, $type_hash, $content_hash, $first_minter, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsGetTicketsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by ticketer address.   Click on the parameter to expand more details. | [optional] |
| **raw_type** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content type in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **raw_content** | [**TicketsGetTicketsCountRawTypeParameter**](../Model/.md)| Filter by ticket content in Micheline format.   Click on the parameter to expand more details. | [optional] |
| **content** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by ticket content in JSON format.   Note, this parameter supports the following format: &#x60;content{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?content.color.in&#x3D;red,green&#x60;).   Click on the parameter to expand more details. | [optional] |
| **type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content type.   Click on the parameter to expand more details. | [optional] |
| **content_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filter by 32-bit hash of ticket content.   Click on the parameter to expand more details. | [optional] |
| **first_minter** | [**AccountsGetDelegateParameter**](../Model/.md)| Filter by address of the first minter.   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapKeysFirstTimeParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the ticket was last seen.   Click on the parameter to expand more details. | [optional] |

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
