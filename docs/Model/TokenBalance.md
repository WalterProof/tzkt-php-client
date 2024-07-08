# # TokenBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**account** | [**\Bzzhh\Tzkt\Model\TicketBalanceAccount**](TicketBalanceAccount.md) |  | [optional]
**token** | [**\Bzzhh\Tzkt\Model\TokenBalanceToken**](TokenBalanceToken.md) |  | [optional]
**balance** | **string** | Balance (raw value, not divided by &#x60;decimals&#x60;).   **[sortable]** | [optional]
**balance_value** | **string** | Balance value in mutez, based on the current token price.   **[sortable]** | [optional]
**transfers_count** | **int** | Total number of transfers, affecting the token balance.   **[sortable]** | [optional]
**first_level** | **int** | Level of the block where the token balance was first changed.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the token balance was first changed. | [optional]
**last_level** | **int** | Level of the block where the token balance was last changed.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the token balance was last changed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
