# # StakingOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;staking&#x60; | [optional]
**id** | **int** | Internal TzKT ID.   **[sortable]** | [optional]
**level** | **int** | Height of the block from the genesis | [optional]
**timestamp** | **\DateTime** | Datetime at which the block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**hash** | **string** | Hash of the operation | [optional]
**sender** | [**OneOfAlias**](OneOfAlias.md) | Information about the account who has sent the operation | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**baker_fee** | **int** | Fee to the baker, produced block, in which the operation was included (micro tez) | [optional]
**action** | **string** | Staking action (&#x60;stake&#x60;, &#x60;unstake&#x60;, &#x60;finalize&#x60;) | [optional]
**requested_amount** | **int** | Amount passed as the staking operation parameter (micro tez) | [optional]
**amount** | **int** | Actually processed amount (micro tez) | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker | [optional]
**staking_updates_count** | **int** | Number of staking updates happened internally | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**errors** | [**\Bzzhh\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**kind** | **string** | [DEPRECATED] | [optional]
**pseudotokens** | **int** | [DEPRECATED] | [optional]
**limit_of_staking_over_baking** | **int** | [DEPRECATED] | [optional]
**edge_of_baking_over_staking** | **int** | [DEPRECATED] | [optional]
**activation_cycle** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
