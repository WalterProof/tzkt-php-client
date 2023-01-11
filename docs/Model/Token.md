# # Token

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id (not the same as &#x60;tokenId&#x60;).   **[sortable]** | [optional]
**contract** | [**\Bzzhh\Tzkt\Model\TokenContract**](TokenContract.md) |  | [optional]
**token_id** | **string** | Token id, unique within the contract.   **[sortable]** | [optional]
**standard** | **string** | Token standard (&#x60;fa1.2&#x60; or &#x60;fa2&#x60;). | [optional]
**first_minter** | [**\Bzzhh\Tzkt\Model\TokenFirstMinter**](TokenFirstMinter.md) |  | [optional]
**first_level** | **int** | Level of the block where the token was first seen.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the token was first seen. | [optional]
**last_level** | **int** | Level of the block where the token was last seen.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the token was last seen. | [optional]
**transfers_count** | **int** | Total number of transfers.   **[sortable]** | [optional]
**balances_count** | **int** | Total number of holders ever seen.   **[sortable]** | [optional]
**holders_count** | **int** | Total number of current holders.   **[sortable]** | [optional]
**total_minted** | **string** | Total number of minted tokens (raw value, not divided by &#x60;decimals&#x60;). | [optional]
**total_burned** | **string** | Total number of burned tokens (raw value, not divided by &#x60;decimals&#x60;). | [optional]
**total_supply** | **string** | Total number of existing tokens (raw value, not divided by &#x60;decimals&#x60;). | [optional]
**metadata** | **mixed** | Token metadata.   **[sortable]** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
