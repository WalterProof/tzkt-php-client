# # StakingActionParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify a staking action to get items where the specified field is equal to the specified value.  Example: &#x60;?action&#x3D;stake&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify a staking action to get items where the specified field is not equal to the specified value.  Example: &#x60;?action.ne&#x3D;finalize&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of staking actions to get items where the specified field is equal to one of the specified values.  Example: &#x60;?action.in&#x3D;stake,unstake&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of staking actions to get items where the specified field is not equal to all the specified values.  Example: &#x60;?action.ni&#x3D;unstake,finalize&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
