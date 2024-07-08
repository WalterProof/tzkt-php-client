# # Cycle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Cycle index starting from zero | [optional]
**first_level** | **int** | Level of the first block in the cycle | [optional]
**start_time** | **\DateTime** | Timestamp of the first block in the cycle | [optional]
**last_level** | **int** | Level of the last block in the cycle | [optional]
**end_time** | **\DateTime** | Timestamp of the last block in the cycle | [optional]
**snapshot_level** | **int** | Height of the block where the snapshot was taken | [optional]
**random_seed** | **string** | Randomly generated seed used by the network for things like baking rights distribution etc. | [optional]
**total_bakers** | **int** | Total number of all active in this cycle bakers | [optional]
**total_baking_power** | **int** | Total baking power of all active in this cycle bakers | [optional]
**block_reward** | **int** | Fixed reward paid to the block payload proposer in this cycle (micro tez) | [optional]
**block_bonus_per_slot** | **int** | Bonus reward paid to the block producer in this cycle (micro tez) | [optional]
**endorsement_reward_per_slot** | **int** | Reward for endorsing in this cycle (micro tez) | [optional]
**nonce_revelation_reward** | **int** | Reward for seed nonce revelation in this cycle (micro tez) | [optional]
**vdf_revelation_reward** | **int** | Reward for vdf revelation in this cycle (micro tez) | [optional]
**quote** | [**\Bzzhh\Tzkt\Model\CycleQuote**](CycleQuote.md) |  | [optional]
**snapshot_index** | **int** | [DEPRECATED] | [optional]
**lb_subsidy** | **int** | [DEPRECATED] | [optional]
**total_staking** | **int** | [DEPRECATED] | [optional]
**total_delegators** | **int** | [DEPRECATED] | [optional]
**total_delegated** | **int** | [DEPRECATED] | [optional]
**selected_bakers** | **int** | [DEPRECATED] | [optional]
**selected_stake** | **int** | [DEPRECATED] | [optional]
**total_rolls** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
