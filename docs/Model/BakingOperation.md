# # BakingOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;baking&#x60; - an operation which contains brief information about a baked (produced) block (synthetic type) |
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | The datetime at which the block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Block hash | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Information about a delegate (baker), produced the block | [optional]
**priority** | **int** | The position in the priority list of delegates at which the block was baked | [optional]
**deposit** | **int** | Security deposit frozen on the baker&#39;s account for producing the block (micro tez) | [optional]
**reward** | **int** | Reward of the baker for producing the block (micro tez) | [optional]
**fees** | **int** | Total fee paid by all operations, included in the block | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
