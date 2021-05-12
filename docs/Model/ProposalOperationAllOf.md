# # ProposalOperationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;proposal&#x60; - is used by bakers (delegates) to submit and/or upvote proposals to amend the protocol | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**period** | [**OneOfPeriodInfo**](OneOfPeriodInfo.md) | Information about the proposal period for which the proposal was submitted (upvoted) | [optional]
**proposal** | [**OneOfProposalAlias**](OneOfProposalAlias.md) | Information about the submitted (upvoted) proposal | [optional]
**delegate** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker (delegate), submitted (upvoted) the proposal operation | [optional]
**rolls** | **int** | Number of baker&#39;s rolls (baker&#39;s voting power) | [optional]
**duplicated** | **bool** | Indicates whether proposal upvote has already been pushed. Duplicated proposal operations are not counted when selecting proposal-winner. | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
