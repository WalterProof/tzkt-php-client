# Bzzhh\Tzkt\RightsApi

All URIs are relative to https://api.tzkt.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**rightsGet()**](RightsApi.md#rightsGet) | **GET** /v1/rights | Get rights
[**rightsGetCount()**](RightsApi.md#rightsGetCount) | **GET** /v1/rights/count | Get rights count


## `rightsGet()`

```php
rightsGet($type, $baker, $cycle, $level, $slots, $priority, $status, $select, $sort, $offset, $limit): \Bzzhh\Tzkt\Model\BakingRight[]
```

Get rights

Returns a list of rights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\RightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Bzzhh\Tzkt\Model\OneOfBakingRightTypeParameter(); // OneOfBakingRightTypeParameter | Filters rights by type (`baking`, `endorsing`)
$baker = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters rights by baker
$cycle = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters rights by cycle
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters rights by level
$slots = new \Bzzhh\Tzkt\Model\OneOfInt32NullParameter(); // OneOfInt32NullParameter | Filters rights by slots
$priority = new \Bzzhh\Tzkt\Model\OneOfInt32NullParameter(); // OneOfInt32NullParameter | Filters rights by priority
$status = new \Bzzhh\Tzkt\Model\OneOfBakingRightStatusParameter(); // OneOfBakingRightStatusParameter | Filters rights by status (`future`, `realized`, `uncovered`, `missed`)
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts rights by specified field. Supported fields: `level` (default).
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->rightsGet($type, $baker, $cycle, $level, $slots, $priority, $status, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightsApi->rightsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**OneOfBakingRightTypeParameter**](../Model/.md)| Filters rights by type (&#x60;baking&#x60;, &#x60;endorsing&#x60;) | [optional]
 **baker** | [**OneOfAccountParameter**](../Model/.md)| Filters rights by baker | [optional]
 **cycle** | [**OneOfInt32Parameter**](../Model/.md)| Filters rights by cycle | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters rights by level | [optional]
 **slots** | [**OneOfInt32NullParameter**](../Model/.md)| Filters rights by slots | [optional]
 **priority** | [**OneOfInt32NullParameter**](../Model/.md)| Filters rights by priority | [optional]
 **status** | [**OneOfBakingRightStatusParameter**](../Model/.md)| Filters rights by status (&#x60;future&#x60;, &#x60;realized&#x60;, &#x60;uncovered&#x60;, &#x60;missed&#x60;) | [optional]
 **select** | [**OneOfSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional]
 **sort** | [**OneOfSortParameter**](../Model/.md)| Sorts rights by specified field. Supported fields: &#x60;level&#x60; (default). | [optional]
 **offset** | [**OneOfOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional]
 **limit** | **int**| Maximum number of items to return | [optional] [default to 100]

### Return type

[**\Bzzhh\Tzkt\Model\BakingRight[]**](../Model/BakingRight.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rightsGetCount()`

```php
rightsGetCount($type, $baker, $cycle, $level, $slots, $priority, $status): int
```

Get rights count

Returns the total number of stored rights.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\RightsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Bzzhh\Tzkt\Model\OneOfBakingRightTypeParameter(); // OneOfBakingRightTypeParameter | Filters rights by type (`baking`, `endorsing`)
$baker = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters rights by baker
$cycle = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters rights by cycle
$level = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters rights by level
$slots = new \Bzzhh\Tzkt\Model\OneOfInt32NullParameter(); // OneOfInt32NullParameter | Filters rights by slots
$priority = new \Bzzhh\Tzkt\Model\OneOfInt32NullParameter(); // OneOfInt32NullParameter | Filters rights by priority
$status = new \Bzzhh\Tzkt\Model\OneOfBakingRightStatusParameter(); // OneOfBakingRightStatusParameter | Filters rights by status (`future`, `realized`, `uncovered`, `missed`)

try {
    $result = $apiInstance->rightsGetCount($type, $baker, $cycle, $level, $slots, $priority, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RightsApi->rightsGetCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**OneOfBakingRightTypeParameter**](../Model/.md)| Filters rights by type (&#x60;baking&#x60;, &#x60;endorsing&#x60;) | [optional]
 **baker** | [**OneOfAccountParameter**](../Model/.md)| Filters rights by baker | [optional]
 **cycle** | [**OneOfInt32Parameter**](../Model/.md)| Filters rights by cycle | [optional]
 **level** | [**OneOfInt32Parameter**](../Model/.md)| Filters rights by level | [optional]
 **slots** | [**OneOfInt32NullParameter**](../Model/.md)| Filters rights by slots | [optional]
 **priority** | [**OneOfInt32NullParameter**](../Model/.md)| Filters rights by priority | [optional]
 **status** | [**OneOfBakingRightStatusParameter**](../Model/.md)| Filters rights by status (&#x60;future&#x60;, &#x60;realized&#x60;, &#x60;uncovered&#x60;, &#x60;missed&#x60;) | [optional]

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
