# # TicketTransfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**level** | **int** | Level of the block, at which the transfer was made.   **[sortable]** | [optional]
**timestamp** | **\DateTime** | Timestamp of the block, at which the transfer was made. | [optional]
**ticket** | [**\Bzzhh\Tzkt\Model\TicketBalanceTicket**](TicketBalanceTicket.md) |  | [optional]
**from** | [**\Bzzhh\Tzkt\Model\TicketTransferFrom**](TicketTransferFrom.md) |  | [optional]
**to** | [**\Bzzhh\Tzkt\Model\TicketTransferTo**](TicketTransferTo.md) |  | [optional]
**amount** | **string** | Amount of tickets transferred.   **[sortable]** | [optional]
**transaction_id** | **int** | Internal TzKT id of the transaction operation, caused the ticket transfer. | [optional]
**transfer_ticket_id** | **int** | Internal TzKT id of the transfer_ticket operation, caused the ticket transfer. | [optional]
**smart_rollup_execute_id** | **int** | Internal TzKT id of the smart_rollup_execute operation, caused the ticket transfer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
