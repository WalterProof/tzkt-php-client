# # TokenTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**level** | **int** | Level of the block, at which the token transfer was made.   **[sortable]** | [optional]
**timestamp** | **\DateTime** | Timestamp of the block, at which the token transfer was made. | [optional]
**token** | [**\Bzzhh\Tzkt\Model\TokenBalanceToken**](TokenBalanceToken.md) |  | [optional]
**from** | [**\Bzzhh\Tzkt\Model\TicketTransferFrom**](TicketTransferFrom.md) |  | [optional]
**to** | [**\Bzzhh\Tzkt\Model\TokenTransferTo**](TokenTransferTo.md) |  | [optional]
**amount** | **string** | Amount of tokens transferred (raw value, not divided by &#x60;decimals&#x60;).   **[sortable]** | [optional]
**transaction_id** | **int** | Internal TzKT id of the transaction operation, caused the token transfer. | [optional]
**origination_id** | **int** | Internal TzKT id of the origination operation, caused the token transfer. | [optional]
**migration_id** | **int** | Internal TzKT id of the migration operation, caused the token transfer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
