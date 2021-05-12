# # Cycle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Cycle index starting from zero | [optional]
**first_level** | **int** | Level of the first block in the cycle | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | Timestamp of the first block in the cycle | [optional]
**last_level** | **int** | Level of the last block in the cycle | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | Timestamp of the last block in the cycle | [optional]
**snapshot_index** | **int** | Index of the snapshot | [optional]
**snapshot_level** | **int** | Height of the block where the snapshot was taken | [optional]
**random_seed** | **string** | Randomly generated seed used by the network for things like baking rights distribution etc. | [optional]
**total_bakers** | **int** | Total number of all active in this cycle bakers | [optional]
**total_rolls** | **int** | Total number of rolls involved in baking rights distribution | [optional]
**total_staking** | **int** | Total staking balance of all active in this cycle bakers | [optional]
**total_delegators** | **int** | Total number of active bakers&#39; delegators | [optional]
**total_delegated** | **int** | Total balance delegated to active bakers | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the end of the cycle | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
