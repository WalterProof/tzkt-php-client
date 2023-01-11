# # ContractTagsParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string[]** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify a comma-separated list of contract tags to get contracts with exactly the same set of tags. Avoid using this mode and use &#x60;.any&#x60; or &#x60;.all&#x60; instead, because it may not work as expected due to internal &#39;hidden&#39; tags.  Example: &#x60;?tags&#x3D;fa2&#x60; or &#x60;?tags&#x3D;fa1,fa12&#x60;. | [optional]
**any** | **string[]** | **Has any** filter mode. \\ Specify a comma-separated list of contract tags to get contracts where at least one of the specified tags is presented.  Example: &#x60;?tags.any&#x3D;fa2&#x60; or &#x60;?tags.any&#x3D;fa1,fa12&#x60;. | [optional]
**all** | **string[]** | **Has all** filter mode. \\ Specify a comma-separated list of contract tags to get contracts where all of the specified tags are presented.  Example: &#x60;?tags.all&#x3D;fa2&#x60; or &#x60;?tags.all&#x3D;fa1,fa12&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
