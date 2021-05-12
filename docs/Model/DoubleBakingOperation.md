# # DoubleBakingOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;double_baking&#x60; - is used by bakers to provide evidence of double baking (baking two different blocks at the same height) by a baker |
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**accused_level** | **int** | The height of the block from the genesis block, which was double baked | [optional]
**accuser** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker (delegate), produced the block, in which the operation was included | [optional]
**accuser_rewards** | **int** | Reward of the baker (delegate), produced the block, in which the operation was included | [optional]
**offender** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker (delegate), accused for producing two different blocks at the same height | [optional]
**offender_lost_deposits** | **int** | Amount of frozen security deposit, lost by accused baker (delegate) | [optional]
**offender_lost_rewards** | **int** | Amount of frozen rewards, lost by accused baker (delegate) | [optional]
**offender_lost_fees** | **int** | Amount of frozen fees, lost by accused baker (delegate) | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
