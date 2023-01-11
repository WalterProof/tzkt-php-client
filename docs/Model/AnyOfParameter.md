# # AnyOfParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eq** | **string** | **Equal** filter mode (optional, i.e. &#x60;param.eq&#x3D;123&#x60; is the same as &#x60;param&#x3D;123&#x60;). \\ Specify a value to get items where any of the specified fields is equal to the specified value.  Example: &#x60;?anyof.sender.target&#x3D;tz1WnfXMPaNTBmH7DBPwqCWs9cPDJdkGBTZ8&#x60;. | [optional]
**in** | **string[]** | **In list** (any of) filter mode. \\ Specify a comma-separated list of values to get items where any of the specified fields is equal to one of the specified values.  Example: &#x60;?anyof.sender.target.in&#x3D;tz1WnfXMPaNTBWnfXMPaNTBWnfXMPaNTBNTB,tz1SiPXX4MYGNJNDSiPXX4MYGNJNDSiPXX4M,null&#x60;. | [optional]
**null** | **bool** | **Is null** filter mode. \\ Use this mode to get items where any of the specified fields is null or not.  Example: &#x60;?anyof.from.to.null&#x60; or &#x60;?anyof.from.to.null&#x3D;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
