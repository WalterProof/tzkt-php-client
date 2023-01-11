# # ContractEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**level** | **int** | Level of the block, at which the event was emitted.   **[sortable]** | [optional]
**timestamp** | **\DateTime** | Timestamp of the block, at which the event was emitted. | [optional]
**contract** | [**\Bzzhh\Tzkt\Model\ContractEventContract**](ContractEventContract.md) |  | [optional]
**code_hash** | **int** | Hash of the contract code. | [optional]
**tag** | **string** | Event tag. | [optional]
**payload** | **mixed** | Event payload in human-readable JSON format.   **[sortable]** | [optional]
**transaction_id** | **int** | Internal TzKT id of the transaction operation, caused the event. | [optional]
**type** | **mixed** | Michelson type of the payload.   **Must be explicitly selected** | [optional]
**raw_payload** | **mixed** | Payload in raw Micheline format.   **Must be explicitly selected** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
