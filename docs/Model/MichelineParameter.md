# # MichelineParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | [**\Bzzhh\Tzkt\Model\MichelineParameterEq**](MichelineParameterEq.md) |  | [optional]
**ne** | [**\Bzzhh\Tzkt\Model\MichelineParameterNe**](MichelineParameterNe.md) |  | [optional]
**in** | [**\Bzzhh\Tzkt\Model\IMicheline[]**](IMicheline.md) | **In list** (any of) filter mode. \\ Specify a comma-separated list of Micheline JSON values where the specified field is equal to one of the specified values.  Example: &#x60;?type.in&#x3D;{\&quot;prim\&quot;:\&quot;string\&quot;},{\&quot;prim\&quot;:\&quot;nat\&quot;}&#x60;. | [optional]
**ni** | [**\Bzzhh\Tzkt\Model\IMicheline[]**](IMicheline.md) | **Not in list** (none of) filter mode. \\ Specify a comma-separated list of Micheline JSON values where the specified field is not equal to all the specified values.  Example: &#x60;?type.ni&#x3D;{\&quot;prim\&quot;:\&quot;string\&quot;},{\&quot;prim\&quot;:\&quot;nat\&quot;}&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
