# Bzzhh\Tzkt\VotingApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**votingGetCurrentEpoch()**](VotingApi.md#votingGetCurrentEpoch) | **GET** /v1/voting/epochs/current | Get current voting epoch
[**votingGetCurrentPeriod()**](VotingApi.md#votingGetCurrentPeriod) | **GET** /v1/voting/periods/current | Get current voting period
[**votingGetEpoch()**](VotingApi.md#votingGetEpoch) | **GET** /v1/voting/epochs/{index} | Get voting epoch by index
[**votingGetEpochs()**](VotingApi.md#votingGetEpochs) | **GET** /v1/voting/epochs | Get voting epochs
[**votingGetLatestVoting()**](VotingApi.md#votingGetLatestVoting) | **GET** /v1/voting/epochs/latest_voting | Get latest voting
[**votingGetPeriod()**](VotingApi.md#votingGetPeriod) | **GET** /v1/voting/periods/{index} | Get voting period by index
[**votingGetPeriodVoter()**](VotingApi.md#votingGetPeriodVoter) | **GET** /v1/voting/periods/{index}/voters/{address} | Get period voter
[**votingGetPeriodVoter2()**](VotingApi.md#votingGetPeriodVoter2) | **GET** /v1/voting/periods/current/voters/{address} | Get current period voter
[**votingGetPeriodVoters()**](VotingApi.md#votingGetPeriodVoters) | **GET** /v1/voting/periods/current/voters | Get current period voters
[**votingGetPeriodVotersAll()**](VotingApi.md#votingGetPeriodVotersAll) | **GET** /v1/voting/periods/{index}/voters | Get period voters
[**votingGetPeriods()**](VotingApi.md#votingGetPeriods) | **GET** /v1/voting/periods | Get voting periods
[**votingGetProposalByHash()**](VotingApi.md#votingGetProposalByHash) | **GET** /v1/voting/proposals/{hash} | Get proposal by hash
[**votingGetProposals()**](VotingApi.md#votingGetProposals) | **GET** /v1/voting/proposals | Get proposals
[**votingGetProposalsCount()**](VotingApi.md#votingGetProposalsCount) | **GET** /v1/voting/proposals/count | Get proposals count


## `votingGetCurrentEpoch()`

```php
votingGetCurrentEpoch(): \Bzzhh\Tzkt\Model\VotingEpoch
```

Get current voting epoch

Returns the current voting epoch

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetCurrentEpoch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetCurrentEpoch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bzzhh\Tzkt\Model\VotingEpoch**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetCurrentPeriod()`

```php
votingGetCurrentPeriod(): \Bzzhh\Tzkt\Model\VotingPeriod
```

Get current voting period

Returns current voting period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetCurrentPeriod();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetCurrentPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bzzhh\Tzkt\Model\VotingPeriod**](../Model/VotingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetEpoch()`

```php
votingGetEpoch($index): \Bzzhh\Tzkt\Model\VotingEpoch
```

Get voting epoch by index

Returns a voting epoch at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting epoch index starting from zero

try {
    $result = $apiInstance->votingGetEpoch($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetEpoch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **int**| Voting epoch index starting from zero |

### Return type

[**\Bzzhh\Tzkt\Model\VotingEpoch**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetEpochs()`

```php
votingGetEpochs($sort, $offset, $limit): \Bzzhh\Tzkt\Model\VotingEpoch[]
```

Get voting epochs

Returns a list of voting epochs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts voting epochs by specified field. Supported fields: `id` (default).
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetEpochs($sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetEpochs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts voting epochs by specified field. Supported fields: &#x60;id&#x60; (default). | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\VotingEpoch[]**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetLatestVoting()`

```php
votingGetLatestVoting(): \Bzzhh\Tzkt\Model\VotingEpoch
```

Get latest voting

Returns the latest epoch with at least one proposal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetLatestVoting();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetLatestVoting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Bzzhh\Tzkt\Model\VotingEpoch**](../Model/VotingEpoch.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriod()`

```php
votingGetPeriod($index): \Bzzhh\Tzkt\Model\VotingPeriod
```

Get voting period by index

Returns a voting period at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting period index starting from zero

try {
    $result = $apiInstance->votingGetPeriod($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **int**| Voting period index starting from zero |

### Return type

[**\Bzzhh\Tzkt\Model\VotingPeriod**](../Model/VotingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoter()`

```php
votingGetPeriodVoter($index, $address): \Bzzhh\Tzkt\Model\VoterSnapshot
```

Get period voter

Returns a voter with the specified address from the voting period at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting period index starting from zero
$address = 'address_example'; // string | Voter address

try {
    $result = $apiInstance->votingGetPeriodVoter($index, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **int**| Voting period index starting from zero |
 **address** | **string**| Voter address |

### Return type

[**\Bzzhh\Tzkt\Model\VoterSnapshot**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoter2()`

```php
votingGetPeriodVoter2($address): \Bzzhh\Tzkt\Model\VoterSnapshot
```

Get current period voter

Returns a voter with the specified address from the current period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | Voter address

try {
    $result = $apiInstance->votingGetPeriodVoter2($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoter2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Voter address |

### Return type

[**\Bzzhh\Tzkt\Model\VoterSnapshot**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVoters()`

```php
votingGetPeriodVoters($status, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\VoterSnapshot[]
```

Get current period voters

Returns voters from the current period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = new \Bzzhh\Tzkt\Model\OneOfVoterStatusParameter(); // OneOfVoterStatusParameter | Filters voters by status (`none`, `upvoted`, `voted_yay`, `voted_nay`, `voted_pass`)
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts voters by specified field. Supported fields: `id` (default), `rolls`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetPeriodVoters($status, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVoters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**OneOfVoterStatusParameter**](../Model/.md)| Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;rolls&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\VoterSnapshot[]**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriodVotersAll()`

```php
votingGetPeriodVotersAll($index, $status, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\VoterSnapshot[]
```

Get period voters

Returns voters from the voting period at the specified index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$index = 56; // int | Voting period index starting from zero
$status = new \Bzzhh\Tzkt\Model\OneOfVoterStatusParameter(); // OneOfVoterStatusParameter | Filters voters by status (`none`, `upvoted`, `voted_yay`, `voted_nay`, `voted_pass`)
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts voters by specified field. Supported fields: `id` (default), `rolls`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetPeriodVotersAll($index, $status, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriodVotersAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **index** | **int**| Voting period index starting from zero |
 **status** | [**OneOfVoterStatusParameter**](../Model/.md)| Filters voters by status (&#x60;none&#x60;, &#x60;upvoted&#x60;, &#x60;voted_yay&#x60;, &#x60;voted_nay&#x60;, &#x60;voted_pass&#x60;) | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts voters by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;rolls&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\VoterSnapshot[]**](../Model/VoterSnapshot.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetPeriods()`

```php
votingGetPeriods($select, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\VotingPeriod[]
```

Get voting periods

Returns a list of voting periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts voting periods by specified field. Supported fields: `id` (default).
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetPeriods($select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetPeriods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts voting periods by specified field. Supported fields: &#x60;id&#x60; (default). | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\VotingPeriod[]**](../Model/VotingPeriod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetProposalByHash()`

```php
votingGetProposalByHash($hash): \Bzzhh\Tzkt\Model\Proposal
```

Get proposal by hash

Returns a protocol proposal with the specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Proposal hash

try {
    $result = $apiInstance->votingGetProposalByHash($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetProposalByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hash** | **string**| Proposal hash |

### Return type

[**\Bzzhh\Tzkt\Model\Proposal**](../Model/Proposal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetProposals()`

```php
votingGetProposals($epoch, $select, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\Proposal[]
```

Get proposals

Returns a list of protocol proposals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$epoch = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters proposals by voting epoch
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts proposals by specified field. Supported fields: `id` (default), `upvotes`, `rolls`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->votingGetProposals($epoch, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epoch** | [**OneOfInt32Parameter**](../Model/.md)| Filters proposals by voting epoch | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts proposals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;upvotes&#x60;, &#x60;rolls&#x60;. | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\Proposal[]**](../Model/Proposal.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `votingGetProposalsCount()`

```php
votingGetProposalsCount(): int
```

Get proposals count

Returns the total number of protocol proposals.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\VotingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->votingGetProposalsCount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VotingApi->votingGetProposalsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
