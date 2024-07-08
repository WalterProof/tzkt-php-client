# # EndorsingRewardOperationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;endorsing_reward&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | Height of the block from the genesis | [optional]
**timestamp** | **\DateTime** | Datetime at which the block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Block hash | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Baker expected to receive endorsing reward | [optional]
**expected** | **int** | Expected endorsing reward, based on baker&#39;s active stake (micro tez) | [optional]
**reward_delegated** | **int** | Reward, corresponding to delegated stake, paid to baker&#39;s liquid balance (micro tez) (it is not frozen and can be spent immediately). | [optional]
**reward_staked_own** | **int** | Reward, corresponding to baker&#39;s own stake, paid to baker&#39;s own staked balance (micro tez) (it is frozen and belongs to the baker). | [optional]
**reward_staked_edge** | **int** | Reward, corresponding to baker&#39;s edge from external stake, paid to baker&#39;s own staked balance (micro tez) (it is frozen and belongs to the baker). | [optional]
**reward_staked_shared** | **int** | Reward, corresponding to baker&#39;s external stake, paid to baker&#39;s external staked balance (micro tez) (it is frozen and belongs to baker&#39;s stakers). | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**reward_liquid** | **int** | [DEPRECATED] | [optional]
**received** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
