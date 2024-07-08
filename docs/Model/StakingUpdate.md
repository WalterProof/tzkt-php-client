# # StakingUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT ID.   **[sortable]** | [optional]
**level** | **int** | Level of the block where the staking update happened.   **[sortable]** | [optional]
**timestamp** | **\DateTime** | Timestamp of the block where the staking update happened. | [optional]
**cycle** | **int** | For &#x60;unstake&#x60;, &#x60;restake&#x60;, &#x60;finalize&#x60; and &#x60;slash_unstaked&#x60; update types it&#39;s freezer cycle, othrewise it&#39;s cycle of the block. | [optional]
**baker** | [**\Bzzhh\Tzkt\Model\StakingUpdateBaker**](StakingUpdateBaker.md) |  | [optional]
**staker** | [**\Bzzhh\Tzkt\Model\StakingUpdateStaker**](StakingUpdateStaker.md) |  | [optional]
**type** | **string** | Staking update type (&#x60;stake&#x60;, &#x60;unstake&#x60;, &#x60;restake&#x60;, &#x60;finalize&#x60;, &#x60;slash_staked&#x60;, &#x60;slash_unstaked&#x60;). | [optional]
**amount** | **int** | Amount (mutez). | [optional]
**pseudotokens** | **string** | Amount of staking pseudotokens minted or burnt. | [optional]
**rounding_error** | **int** | Protocol rounding error, appearing after slashing. | [optional]
**autostaking_op_id** | **int** | Id of the operation, caused the staking update. If all &#x60;..OpId&#x60; fields are null, then the staking update was produced by the protocol migration. | [optional]
**staking_op_id** | **int** | Id of the operation, caused the staking update. If all &#x60;..OpId&#x60; fields are null, then the staking update was produced by the protocol migration. | [optional]
**delegation_op_id** | **int** | Id of the operation, caused the staking update. If all &#x60;..OpId&#x60; fields are null, then the staking update was produced by the protocol migration. | [optional]
**double_baking_op_id** | **int** | Id of the operation, caused the staking update. If all &#x60;..OpId&#x60; fields are null, then the staking update was produced by the protocol migration. | [optional]
**double_endorsing_op_id** | **int** | Id of the operation, caused the staking update. If all &#x60;..OpId&#x60; fields are null, then the staking update was produced by the protocol migration. | [optional]
**double_preendorsing_op_id** | **int** | Id of the operation, caused the staking update. If all &#x60;..OpId&#x60; fields are null, then the staking update was produced by the protocol migration. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
