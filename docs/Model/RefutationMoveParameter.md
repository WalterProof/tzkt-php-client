# # RefutationMoveParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (&#x60;.eq&#x60; suffix can be omitted, i.e. &#x60;?param&#x3D;...&#x60; is the same as &#x60;?param.eq&#x3D;...&#x60;). \\ Specify a refutation game move to get items where the specified field is equal to the specified value.  Example: &#x60;?move&#x3D;start&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify a refutation game move to get items where the specified field is not equal to the specified value.  Example: &#x60;?move.ne&#x3D;start&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of refutation game moves to get items where the specified field is equal to one of the specified values.  Example: &#x60;?move.in&#x3D;proof,timeout&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of refutation game moves to get items where the specified field is not equal to all the specified values.  Example: &#x60;?move.ni&#x3D;proof,timeout&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
