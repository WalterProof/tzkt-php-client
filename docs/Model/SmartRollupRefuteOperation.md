# # SmartRollupRefuteOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;sr_refute&#x60; | [optional]
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database   **[sortable]** | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**hash** | **string** | Hash of the operation | [optional]
**sender** | [**OneOfAlias**](OneOfAlias.md) | Information about the account who has sent the operation | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**gas_limit** | **int** | A cap on the amount of gas a given operation can consume | [optional]
**gas_used** | **int** | Amount of gas, consumed by the operation | [optional]
**storage_limit** | **int** | A cap on the amount of storage a given operation can consume | [optional]
**baker_fee** | **int** | Fee to the baker, produced block, in which the operation was included (micro tez) | [optional]
**status** | **string** | Operation status (&#x60;applied&#x60; - an operation applied by the node and successfully added to the blockchain, &#x60;failed&#x60; - an operation which failed with some particular error (not enough balance, gas limit, etc), &#x60;backtracked&#x60; - an operation which was successful but reverted due to one of the following operations in the same operation group was failed, &#x60;skipped&#x60; - all operations after the failed one in an operation group) | [optional]
**rollup** | [**OneOfAlias**](OneOfAlias.md) | Smart rollup to which the operation was sent | [optional]
**game** | [**OneOfSrGameInfo**](OneOfSrGameInfo.md) | Refutation game info | [optional]
**move** | **string** | Player&#39;s move (&#x60;start&#x60;, &#x60;dissection&#x60;, &#x60;proof&#x60;, &#x60;timeout&#x60;) | [optional]
**game_status** | **string** | Game status, after player&#39;s move (&#x60;ongoing&#x60;, &#x60;loser&#x60;, &#x60;draw&#x60;) | [optional]
**dissection_start** | **int** | The first tick in the dissection range. This field is &#x60;null&#x60; if &#x60;move&#x60; is not &#x60;dissection. | [optional]
**dissection_end** | **int** | The last tick in the dissection range. This field is &#x60;null&#x60; if &#x60;move&#x60; is not &#x60;dissection. | [optional]
**dissection_steps** | **int** | Total ticks in the dissection range. This field is &#x60;null&#x60; if &#x60;move&#x60; is not &#x60;dissection&#x60;. | [optional]
**errors** | [**\Bzzhh\Tzkt\Model\OperationError[]**](OperationError.md) | List of errors provided by the node, injected the operation to the blockchain. &#x60;null&#x60; if there is no errors | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
