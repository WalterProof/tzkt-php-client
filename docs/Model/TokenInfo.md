# # TokenInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id (not the same as &#x60;tokenId&#x60;). | [optional]
**contract** | [**\Bzzhh\Tzkt\Model\TokenContract**](TokenContract.md) |  | [optional]
**token_id** | **string** | Token id, unique within the contract. | [optional]
**standard** | **string** | Token standard (either &#x60;fa1.2&#x60; or &#x60;fa2&#x60;). | [optional]
**total_supply** | **string** | Total number of existing tokens (raw value, not divided by &#x60;decimals&#x60;). In historical token balances this field is omitted. | [optional]
**metadata** | **mixed** | Token metadata.   **[sortable]** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
