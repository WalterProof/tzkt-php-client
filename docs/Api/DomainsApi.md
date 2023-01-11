# Bzzhh\Tzkt\DomainsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsGet()**](DomainsApi.md#domainsGet) | **GET** /v1/domains | Get domains |
| [**domainsGetCount()**](DomainsApi.md#domainsGetCount) | **GET** /v1/domains/count | Get domains count |
| [**domainsGetCount2()**](DomainsApi.md#domainsGetCount2) | **GET** /v1/domains/{name} | Get domain by name |


## `domainsGet()`

```php
domainsGet($id, $level, $name, $address, $owner, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select): \Bzzhh\Tzkt\Model\Domain[]
```

Get domains

Returns a list of domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by the domain level.   Click on the parameter to expand more details.
$name = new \Bzzhh\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // AccountsGetOperationsEntrypointParameter | Filter by the domain name.   Click on the parameter to expand more details.
$address = new \Bzzhh\Tzkt\Model\DomainsGetCountAddressParameter(); // DomainsGetCountAddressParameter | Filter by the address the domain points to.   Click on the parameter to expand more details.
$owner = new \Bzzhh\Tzkt\Model\DomainsGetCountAddressParameter(); // DomainsGetCountAddressParameter | Filter by the domain owner.   Click on the parameter to expand more details.
$expiration = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filter by the domain expiration.   Click on the parameter to expand more details.
$data = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by the domain data.   Note, this parameter supports the following format: `data{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?data.foo=bar`).   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapUpdatesTimestampParameter(); // BigMapsGetBigMapUpdatesTimestampParameter | Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapUpdatesTimestampParameter(); // BigMapsGetBigMapUpdatesTimestampParameter | Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped.   Click on the parameter to expand more details.
$limit = 56; // int | Maximum number of items to return.
$select = new \Bzzhh\Tzkt\Model\DomainsGetSelectParameter(); // DomainsGetSelectParameter | Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: `{field}{path?}{as alias?}`, so you can do deep selection (for example, `?select=balance,token.metadata.symbol as token,...`).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details.

try {
    $result = $apiInstance->domainsGet($id, $level, $name, $address, $owner, $expiration, $data, $first_level, $first_time, $last_level, $last_time, $sort, $offset, $limit, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by the domain level.   Click on the parameter to expand more details. | [optional] |
| **name** | [**AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filter by the domain name.   Click on the parameter to expand more details. | [optional] |
| **address** | [**DomainsGetCountAddressParameter**](../Model/.md)| Filter by the address the domain points to.   Click on the parameter to expand more details. | [optional] |
| **owner** | [**DomainsGetCountAddressParameter**](../Model/.md)| Filter by the domain owner.   Click on the parameter to expand more details. | [optional] |
| **expiration** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filter by the domain expiration.   Click on the parameter to expand more details. | [optional] |
| **data** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapUpdatesTimestampParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapUpdatesTimestampParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts items (asc or desc) by the specified field. You can see what fields can be used for sorting in the response description, below.   Click on the parameter to expand more details. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped.   Click on the parameter to expand more details. | [optional] |
| **limit** | **int**| Maximum number of items to return. | [optional] |
| **select** | [**DomainsGetSelectParameter**](../Model/.md)| Specify a comma-separated list of fields to include into response or leave it undefined to get default set of fields. This parameter accepts values of the following format: &#x60;{field}{path?}{as alias?}&#x60;, so you can do deep selection (for example, &#x60;?select&#x3D;balance,token.metadata.symbol as token,...&#x60;).   Note, if you select just one field, the response will be flatten into a simple array of values.   Click on the parameter to expand the details. | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Domain[]**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsGetCount()`

```php
domainsGetCount($id, $level, $name, $address, $owner, $expiration, $data, $first_level, $first_time, $last_level, $last_time): int
```

Get domains count

Returns the total number of domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by internal TzKT id.   Click on the parameter to expand more details.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by the domain level.   Click on the parameter to expand more details.
$name = new \Bzzhh\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // AccountsGetOperationsEntrypointParameter | Filter by the domain name.   Click on the parameter to expand more details.
$address = new \Bzzhh\Tzkt\Model\DomainsGetCountAddressParameter(); // DomainsGetCountAddressParameter | Filter by the address the domain points to.   Click on the parameter to expand more details.
$owner = new \Bzzhh\Tzkt\Model\DomainsGetCountAddressParameter(); // DomainsGetCountAddressParameter | Filter by the domain owner.   Click on the parameter to expand more details.
$expiration = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filter by the domain expiration.   Click on the parameter to expand more details.
$data = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filter by the domain data.   Note, this parameter supports the following format: `data{.path?}{.mode?}=...`, so you can specify a path to a particular field to filter by (for example, `?data.foo=bar`).   Click on the parameter to expand more details.
$first_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details.
$first_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapUpdatesTimestampParameter(); // BigMapsGetBigMapUpdatesTimestampParameter | Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details.
$last_level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details.
$last_time = new \Bzzhh\Tzkt\Model\BigMapsGetBigMapUpdatesTimestampParameter(); // BigMapsGetBigMapUpdatesTimestampParameter | Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details.

try {
    $result = $apiInstance->domainsGetCount($id, $level, $name, $address, $owner, $expiration, $data, $first_level, $first_time, $last_level, $last_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**AccountsGetIdParameter**](../Model/.md)| Filter by internal TzKT id.   Click on the parameter to expand more details. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by the domain level.   Click on the parameter to expand more details. | [optional] |
| **name** | [**AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filter by the domain name.   Click on the parameter to expand more details. | [optional] |
| **address** | [**DomainsGetCountAddressParameter**](../Model/.md)| Filter by the address the domain points to.   Click on the parameter to expand more details. | [optional] |
| **owner** | [**DomainsGetCountAddressParameter**](../Model/.md)| Filter by the domain owner.   Click on the parameter to expand more details. | [optional] |
| **expiration** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filter by the domain expiration.   Click on the parameter to expand more details. | [optional] |
| **data** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filter by the domain data.   Note, this parameter supports the following format: &#x60;data{.path?}{.mode?}&#x3D;...&#x60;, so you can specify a path to a particular field to filter by (for example, &#x60;?data.foo&#x3D;bar&#x60;).   Click on the parameter to expand more details. | [optional] |
| **first_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **first_time** | [**BigMapsGetBigMapUpdatesTimestampParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was first seen.   Click on the parameter to expand more details. | [optional] |
| **last_level** | [**AccountsGetIdParameter**](../Model/.md)| Filter by level of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |
| **last_time** | [**BigMapsGetBigMapUpdatesTimestampParameter**](../Model/.md)| Filter by timestamp (ISO 8601) of the block where the domain was last seen.   Click on the parameter to expand more details. | [optional] |

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

## `domainsGetCount2()`

```php
domainsGetCount2($name): \Bzzhh\Tzkt\Model\Domain
```

Get domain by name

Returns the domain with the specified name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Domain name

try {
    $result = $apiInstance->domainsGetCount2($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsGetCount2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Domain name | |

### Return type

[**\Bzzhh\Tzkt\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
