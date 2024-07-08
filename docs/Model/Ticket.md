# # Ticket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**ticketer** | [**\Bzzhh\Tzkt\Model\TicketTicketer**](TicketTicketer.md) |  | [optional]
**raw_type** | [**\Bzzhh\Tzkt\Model\TicketRawType**](TicketRawType.md) |  | [optional]
**raw_content** | [**\Bzzhh\Tzkt\Model\TicketRawContent**](TicketRawContent.md) |  | [optional]
**content** | **mixed** | Ticket content in JSON format. | [optional]
**type_hash** | **int** | 32-bit hash of the ticket content type. | [optional]
**content_hash** | **int** | 32-bit hash of the ticket content. | [optional]
**first_minter** | [**\Bzzhh\Tzkt\Model\TicketFirstMinter**](TicketFirstMinter.md) |  | [optional]
**first_level** | **int** | Level of the block where the ticket was first seen.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the ticket was first seen. | [optional]
**last_level** | **int** | Level of the block where the ticket was last seen.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the ticket was last seen. | [optional]
**transfers_count** | **int** | Total number of transfers.   **[sortable]** | [optional]
**balances_count** | **int** | Total number of holders ever seen.   **[sortable]** | [optional]
**holders_count** | **int** | Total number of current holders.   **[sortable]** | [optional]
**total_minted** | **string** | Total amount minted. | [optional]
**total_burned** | **string** | Total amount burned. | [optional]
**total_supply** | **string** | Total amount exists. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
