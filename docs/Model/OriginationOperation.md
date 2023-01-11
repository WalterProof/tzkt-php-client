# # OriginationOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;origination&#x60; - deployment / contract creation operation. | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**initiator** | [**OneOfAlias**](OneOfAlias.md) | Information about the initiator of the contract call | [optional]
**sender** | [**OneOfAlias**](OneOfAlias.md) | Information about the account, created a contract | [optional]
**sender_code_hash** | **int** | Hash of the sender contract code, or &#x60;null&#x60; is the sender is not a contract | [optional]
**nonce** | **int** | An account nonce which is used to prevent internal operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**storage_used** | **int** | Amount of storage, consumed by the operation | [optional]
**baker_fee** | **int** | Fee to the baker, produced block, in which the operation was included (micro tez) | [optional]
**storage_fee** | **int** | The amount of funds burned from the sender account for contract storage in the blockchain (micro tez) | [optional]
**allocation_fee** | **int** | The amount of funds burned from the sender account for contract account creation (micro tez) | [optional]
**contract_balance** | **int** | The contract origination balance (micro tez) | [optional]
**contract_manager** | [**OneOfAlias**](OneOfAlias.md) | Information about the account, which was marked as a manager in the operation | [optional]
**contract_delegate** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker (delegate), which was marked as a delegate in the operation | [optional]
**code** | **mixed** | Contract code. Note: you can configure code format by setting &#x60;micheline&#x60; query parameter (&#x60;0 | 2&#x60; - raw micheline, &#x60;1 | 3&#x60; - raw micheline string). | [optional]
**storage** | **mixed** | Initial contract storage value converted to human-readable JSON. Note: you can configure storage format by setting &#x60;micheline&#x60; query parameter. | [optional]
**diffs** | [**\Bzzhh\Tzkt\Model\BigMapDiff[]**](BigMapDiff.md) | List of bigmap updates (aka big_map_diffs) caused by the origination. | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was a successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**errors** | [**\Bzzhh\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**originated_contract** | [**OneOfOriginatedContract**](OneOfOriginatedContract.md) | Information about the originated ( deployed / created ) contract | [optional]
**token_transfers_count** | **int** | Number of token transfers produced by the operation, or &#x60;null&#x60; if there are no transfers | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
