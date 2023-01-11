# # BallotOperationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;ballot&#x60; - is used to vote for a proposal in a given voting cycle | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**period** | [**OneOfPeriodInfo**](OneOfPeriodInfo.md) | Information about the voting period for which the ballot was submitted | [optional]
**proposal** | [**OneOfProposalAlias**](OneOfProposalAlias.md) | Information about the proposal for which ballot was submitted | [optional]
**delegate** | [**OneOfAlias**](OneOfAlias.md) | Information about the delegate (baker), submitted the ballot | [optional]
**voting_power** | **int** | Baker&#39;s voting power | [optional]
**vote** | **string** | Vote, given in the ballot (&#x60;yay&#x60;, &#x60;nay&#x60;, or &#x60;pass&#x60;) | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**rolls** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
