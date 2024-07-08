# # DoublePreendorsingOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;double_preendorsing&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | Height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**accused_level** | **int** | Height of the block from the genesis, at which double preendorsing occurred | [optional]
**slashed_level** | **int** | Height of the block from the genesis, at which the offender was slashed | [optional]
**accuser** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker, produced the block, in which the accusation was included | [optional]
**reward** | **int** | Reward of the baker, produced the block, in which the accusation was included | [optional]
**offender** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker, accused for producing two different preendorsements at the same level | [optional]
**lost_staked** | **int** | Amount slashed from baker&#39;s own staked balance | [optional]
**lost_unstaked** | **int** | Amount slashed from baker&#39;s own unstaked balance | [optional]
**lost_external_staked** | **int** | Amount slashed from baker&#39;s external staked balance | [optional]
**lost_external_unstaked** | **int** | Amount slashed from baker&#39;s external unstaked balance | [optional]
**staking_updates_count** | **int** | Number of staking updates happened internally | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**rounding_loss** | **int** | [DEPRECATED] | [optional]
**offender_loss** | **int** | [DEPRECATED] | [optional]
**accuser_reward** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
