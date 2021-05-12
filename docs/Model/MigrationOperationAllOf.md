# # MigrationOperationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;migration&#x60; - result of the context (database) migration during a protocol update (synthetic type) | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**kind** | **string** | Kind of the migration  &#x60;bootstrap&#x60; - Balance updates, included in the first block after genesis &#x60;activate_delegate&#x60; - registering a new baker (delegator) during protocol migration &#x60;airdrop&#x60; - airdrop of 1 micro tez during Babylon protocol upgrade &#x60;proposal_invoice&#x60; - invoice for creation a proposal for protocol upgrade | [optional]
**account** | [**OneOfAlias**](OneOfAlias.md) | Information about the account whose balance has updated as a result of the operation | [optional]
**balance_change** | **int** | The amount for which the operation updated the balance (micro tez) | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
