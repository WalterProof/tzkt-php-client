# # TicketBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**ticket** | [**\Bzzhh\Tzkt\Model\TicketBalanceTicket**](TicketBalanceTicket.md) |  | [optional]
**account** | [**\Bzzhh\Tzkt\Model\TicketBalanceAccount**](TicketBalanceAccount.md) |  | [optional]
**balance** | **string** | Balance.   **[sortable]** | [optional]
**transfers_count** | **int** | Total number of transfers, affecting the ticket balance.   **[sortable]** | [optional]
**first_level** | **int** | Level of the block where the ticket balance was first changed.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the ticket balance was first changed. | [optional]
**last_level** | **int** | Level of the block where the ticket balance was last changed.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the ticket balance was last changed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
