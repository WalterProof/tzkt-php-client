# # VdfRevelationOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;vdf_revelation&#x60; - used by the blockchain to create randomness | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Information about the delegate (baker), who produced the block with the operation | [optional]
**cycle** | **int** | Cycle in which the operation was included | [optional]
**solution** | **string** | Vdf solution | [optional]
**proof** | **string** | Vdf proof | [optional]
**reward** | **int** | Baker reward for including vdf revelation into a block | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
