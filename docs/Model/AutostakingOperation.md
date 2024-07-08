# # AutostakingOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the operation, &#x60;autostaking&#x60; | [optional]
**id** | **int** | Internal TzKT ID.   **[sortable]** | [optional]
**level** | **int** | Height of the block from the genesis | [optional]
**timestamp** | **\DateTime** | Datetime at which the block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Baker for which autostaking event happened | [optional]
**action** | **string** | Autostaking action (&#x60;stake&#x60;, &#x60;unstake&#x60;, &#x60;finalize&#x60;) | [optional]
**amount** | **int** | Amount (micro tez) | [optional]
**staking_updates_count** | **int** | Number of staking updates happened internally | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of operation | [optional]
**cycle** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
