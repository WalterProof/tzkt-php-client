# # UnstakeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT ID.   **[sortable]** | [optional]
**cycle** | **int** | Cycle at which the unstake request was created.   **[sortable]** | [optional]
**baker** | [**\Bzzhh\Tzkt\Model\StakingUpdateBaker**](StakingUpdateBaker.md) |  | [optional]
**staker** | [**\Bzzhh\Tzkt\Model\StakingUpdateStaker**](StakingUpdateStaker.md) |  | [optional]
**requested_amount** | **int** | Initially requested amount (mutez). | [optional]
**restaked_amount** | **int** | Amount that was restaked back (mutez). | [optional]
**finalized_amount** | **int** | Finalized amount (mutez). | [optional]
**slashed_amount** | **int** | Slashed amount (mutez). | [optional]
**rounding_error** | **int** | Protocol rounding error, appearing after slashing. | [optional]
**actual_amount** | **int** | Actual amount that was/is/will be available for finalizing. | [optional]
**status** | **string** | Status of the unstake request (&#x60;pending&#x60;, &#x60;finalizable&#x60;, &#x60;finalized&#x60;). | [optional]
**updates_count** | **int** | Number of staking updates related to the unstake request. | [optional]
**first_level** | **int** | Level of the block where the unstake request was created.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the unstake request was created. | [optional]
**last_level** | **int** | Level of the block where the unstake request was last updated.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the unstake request was last updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
