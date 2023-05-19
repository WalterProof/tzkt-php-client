# # SmartRollupsGetSmartRollupStakersBondStatusParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (&#x60;.eq&#x60; suffix can be omitted, i.e. &#x60;?param&#x3D;...&#x60; is the same as &#x60;?param.eq&#x3D;...&#x60;). \\ Specify an sr bond status to get items where the specified field is equal to the specified value.  Example: &#x60;?status&#x3D;active&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify an sr bond status to get items where the specified field is not equal to the specified value.  Example: &#x60;?status.ne&#x3D;active&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of sr bond statuses to get items where the specified field is equal to one of the specified values.  Example: &#x60;?status.in&#x3D;returned,lost&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of sr bond statuses to get items where the specified field is not equal to all the specified values.  Example: &#x60;?status.ni&#x3D;returned,lost&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
