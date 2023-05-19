# # OperationsGetSmartRollupCementOpsRollupParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (&#x60;.eq&#x60; suffix can be omitted, i.e. &#x60;?param&#x3D;...&#x60; is the same as &#x60;?param.eq&#x3D;...&#x60;). \\ Specify an &#x60;sr1&#x60; address to get items where the specified field is equal to the specified value.  Example: &#x60;?rollup&#x3D;sr1RouasmcMAsrt4SxgGGVCBT36hzYRJBUrB&#x60;. | [optional]
**ne** | **string** | **Not equal** filter mode. \\ Specify an &#x60;sr1&#x60; address to get items where the specified field is not equal to the specified value.  Example: &#x60;?rollup.ne&#x3D;sr1RouasmcMAsrt4SxgGGVCBT36hzYRJBUrB&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of &#x60;sr1&#x60; addresses to get items where the specified field is equal to one of the specified values.  Example: &#x60;?rollup.in&#x3D;sr1RouasmcMAsrt4SxgGGVCBT36hzYRJBUrB,sr1UsFZWCrnHH5zDfihZpSjYbc1iwLnAbEum&#x60;. | [optional]
**ni** | **string[]** | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of &#x60;sr1&#x60; addresses to get items where the specified field is not equal to all the specified values.  Example: &#x60;?rollup.ni&#x3D;sr1RouasmcMAsrt4SxgGGVCBT36hzYRJBUrB,sr1UsFZWCrnHH5zDfihZpSjYbc1iwLnAbEum&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
