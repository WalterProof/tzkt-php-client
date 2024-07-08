# # SetDelegateParametersOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;set_delegate_parameters&#x60; | [optional]
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
**limit_of_staking_over_baking** | **int** | This parameter determines the maximum portion (millionth) of external stake by stakers over the baker&#39;s own staked funds | [optional]
**edge_of_baking_over_staking** | **int** | This parameter determines the fraction (billionth) of the rewards that accrue to the delegate’s frozen deposit – the remainder is shared among its stakers | [optional]
**activation_cycle** | **int** | Cycle from which the specified staking parameters are activated | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**errors** | [**\Bzzhh\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
