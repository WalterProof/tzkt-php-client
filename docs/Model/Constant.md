# # Constant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Global address (expression hash) | [optional]
**value** | **mixed** | Constant value (either micheline, michelson or bytes, depending on the &#x60;format&#x60; parameter) | [optional]
**size** | **int** | Constant size in bytes | [optional]
**refs** | **int** | Number of contracts referencing this constant | [optional]
**creator** | [**\Bzzhh\Tzkt\Model\ConstantCreator**](ConstantCreator.md) |  | [optional]
**creation_level** | **int** | Level of the first block baked with this software | [optional]
**creation_time** | **\DateTime** | Datetime of the first block baked with this software | [optional]
**metadata** | [**\Bzzhh\Tzkt\Model\ConstantMetadata**](ConstantMetadata.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
