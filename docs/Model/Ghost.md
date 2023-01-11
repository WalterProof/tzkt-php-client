# # Ghost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id | [optional]
**type** | **string** | Type of the account, &#x60;ghost&#x60; - contract that has been met among token holders, but hasn&#39;t been originated | [optional]
**address** | **string** | Address of the contract | [optional]
**alias** | **string** | Name of the ghost contract | [optional]
**active_tokens_count** | **int** | Number of account tokens with non-zero balances | [optional]
**token_balances_count** | **int** | Number of tokens the account ever had | [optional]
**token_transfers_count** | **int** | Number of token transfers from/to the account | [optional]
**first_activity** | **int** | Block height at which the ghost contract appeared first time | [optional]
**first_activity_time** | **\DateTime** | Block datetime at which the ghost contract appeared first time (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**last_activity** | **int** | Height of the block in which the ghost contract state was changed last time | [optional]
**last_activity_time** | **\DateTime** | Datetime of the block in which the ghost contract state was changed last time (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**metadata** | [**OneOfProfileMetadata**](OneOfProfileMetadata.md) | Metadata of the ghost contract (alias, logo, website, contacts, etc) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
