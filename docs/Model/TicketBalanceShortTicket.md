# # TicketBalanceShortTicket

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id. | [optional]
**ticketer** | [**\Bzzhh\Tzkt\Model\TicketTicketer**](TicketTicketer.md) |  | [optional]
**raw_type** | [**\Bzzhh\Tzkt\Model\TicketRawType**](TicketRawType.md) |  | [optional]
**raw_content** | [**\Bzzhh\Tzkt\Model\TicketRawContent**](TicketRawContent.md) |  | [optional]
**content** | **mixed** | Ticket content in JSON format. | [optional]
**type_hash** | **int** | 32-bit hash of the ticket content type. This field can be used for searching similar tickets (which have the same type). | [optional]
**content_hash** | **int** | 32-bit hash of the ticket content. This field can be used for searching same tickets (which have the same content). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
