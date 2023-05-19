# # OperationsGetSmartRollupRefuteOpsGameStatusParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (&#x60;.eq&#x60; suffix can be omitted, i.e. &#x60;?param&#x3D;...&#x60; is the same as &#x60;?param.eq&#x3D;...&#x60;). \\ Specify a refutation game status to get items where the specified field is equal to the specified value.  Example: &#x60;?gameStatus&#x3D;draw&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify a refutation game status to get items where the specified field is not equal to the specified value.  Example: &#x60;?gameStatus.ne&#x3D;ongoing&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of refutation game statuses to get items where the specified field is equal to one of the specified values.  Example: &#x60;?gameStatus.in&#x3D;loser,draw&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of refutation game statuses to get items where the specified field is not equal to all the specified values.  Example: &#x60;?gameStatus.ni&#x3D;loser,draw&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
