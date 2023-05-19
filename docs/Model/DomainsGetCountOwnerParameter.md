# # DomainsGetCountOwnerParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;&#x60; is the same as &#x60;param&#x3D;&#x60;). \\ Specify an account address to get items where the specified field is equal to the specified value.  Example: &#x60;?address&#x3D;tz123..&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify an account address to get items where the specified field is not equal to the specified value.  Example: &#x60;?address.ne&#x3D;tz123..&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of account addresses to get items where the specified field is equal to one of the specified values.  Example: &#x60;?address.in&#x3D;tz123..,tz345..&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of account addresses to get items where the specified field is not equal to all the specified values.  Example: &#x60;?address.ni&#x3D;tz123..,tz345..&#x60;. | [optional]
**null** | **bool** | **Is null** filter mode. \\ Use this mode to get items where the specified field is null or not.  Example: &#x60;?address.null&#x60; or &#x60;?address.null&#x3D;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
