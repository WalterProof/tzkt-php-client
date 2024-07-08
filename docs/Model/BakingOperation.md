# # BakingOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;baking&#x60; - an operation which contains brief information about a baked (produced) block (synthetic type) | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | Height of the block from the genesis | [optional]
**timestamp** | **\DateTime** | Datetime at which the block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Block hash | [optional]
**proposer** | [**OneOfAlias**](OneOfAlias.md) | Baker who proposed the block payload | [optional]
**producer** | [**OneOfAlias**](OneOfAlias.md) | Baker who produced the block | [optional]
**payload_round** | **int** | Round at which the block payload was proposed | [optional]
**block_round** | **int** | Round at which the block was produced | [optional]
**deposit** | **int** | Security deposit frozen on the baker&#39;s account for producing the block (micro tez) | [optional]
**reward_delegated** | **int** | Portion of fixed reward, corresponding to delegated stake, paid to payload proposer&#39;s liquid balance (micro tez) (it is not frozen and can be spent immediately). | [optional]
**reward_staked_own** | **int** | Portion of fixed reward, corresponding to baker&#39;s own stake, paid to payload proposer&#39;s own staked balance (micro tez) (it is frozen and belongs to the baker). | [optional]
**reward_staked_edge** | **int** | Portion of fixed reward, corresponding to baker&#39;s edge from external stake, paid to payload proposer&#39;s own staked balance (micro tez) (it is frozen and belongs to the baker). | [optional]
**reward_staked_shared** | **int** | Portion of fixed reward, corresponding to baker&#39;s external stake, paid to payload proposer&#39;s external staked balance (micro tez) (it is frozen and belongs to baker&#39;s stakers). | [optional]
**bonus_delegated** | **int** | Portion of bonus reward, corresponding to delegated stake, paid to block producer&#39;s liquid balance (micro tez) (it is not frozen and can be spent immediately). | [optional]
**bonus_staked_own** | **int** | Portion of bonus reward, corresponding to baker&#39;s own stake, paid to block producer&#39;s own staked balance (micro tez) (it is frozen and belongs to the baker). | [optional]
**bonus_staked_edge** | **int** | Portion of bonus reward, corresponding to baker&#39;s edge from external stake, paid to block producer&#39;s own staked balance (micro tez) (it is frozen and belongs to the baker). | [optional]
**bonus_staked_shared** | **int** | Portion of fixed reward, corresponding to baker&#39;s external stake, paid to block producer&#39;s external staked balance (micro tez) (it is frozen and belongs to baker&#39;s stakers). | [optional]
**fees** | **int** | Total fee gathered from operations, included into the block | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**reward_liquid** | **int** | [DEPRECATED] | [optional]
**bonus_liquid** | **int** | [DEPRECATED] | [optional]
**reward** | **int** | [DEPRECATED] | [optional]
**bonus** | **int** | [DEPRECATED] | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | [DEPRECATED] | [optional]
**priority** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
