# # DelegationOperationAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;delegation&#x60; -  is used to delegate funds to a delegate (an implicit account registered as a baker) | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**block** | **string** | Hash of the block, in which the operation was included | [optional]
**hash** | **string** | Hash of the operation | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**initiator** | [**OneOfAlias**](OneOfAlias.md) | Information about the initiator of the delegation contract call | [optional]
**sender** | [**OneOfAlias**](OneOfAlias.md) | Information about the delegated account | [optional]
**sender_code_hash** | **int** | Hash of the sender contract code, or &#x60;null&#x60; is the sender is not a contract | [optional]
**nonce** | **int** | An account nonce which is used to prevent internal operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**baker_fee** | **int** | Fee to a baker, produced block, in which the operation was included | [optional]
**amount** | **int** | Sender&#39;s balance at the time of delegation operation (aka delegation amount). | [optional]
**staking_updates_count** | **int** | Number of staking updates happened internally | [optional]
**prev_delegate** | [**OneOfAlias**](OneOfAlias.md) | Information about the previous delegate of the account. &#x60;null&#x60; if there is no previous delegate | [optional]
**new_delegate** | [**OneOfAlias**](OneOfAlias.md) | Information about the delegate to which the operation was sent. &#x60;null&#x60; if there is no new delegate (an un-delegation operation) | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**errors** | [**\Bzzhh\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**unstaked_pseudotokens** | **int** | [DEPRECATED] | [optional]
**unstaked_balance** | **int** | [DEPRECATED] | [optional]
**unstaked_rewards** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
