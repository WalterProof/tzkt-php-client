# # RollupAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id | [optional]
**type** | **string** | Type of the account | [optional]
**address** | **string** | Address of the account | [optional]
**alias** | **string** | Name of the account | [optional]
**creator** | [**OneOfAlias**](OneOfAlias.md) | Information about the account, which has deployed the rollup to the blockchain | [optional]
**rollup_bonds** | **int** | Amount of mutez locked as bonds | [optional]
**active_tokens_count** | **int** | Number of account tokens with non-zero balances | [optional]
**token_balances_count** | **int** | Number of tokens the account ever had | [optional]
**token_transfers_count** | **int** | Number of token transfers from/to the account | [optional]
**active_tickets_count** | **int** | Number of tickets the account owns. | [optional]
**ticket_balances_count** | **int** | Number of tickets the account ever owned. | [optional]
**ticket_transfers_count** | **int** | Number of ticket transfers from/to the account. | [optional]
**num_transactions** | **int** | Number of transaction operations related to the account | [optional]
**tx_rollup_origination_count** | **int** | Number of tx rollup origination operations related to the account | [optional]
**tx_rollup_submit_batch_count** | **int** | Number of tx rollup submit batch operations related to the account | [optional]
**tx_rollup_commit_count** | **int** | Number of tx rollup commit operations related to the account | [optional]
**tx_rollup_return_bond_count** | **int** | Number of tx rollup return bond operations related to the account | [optional]
**tx_rollup_finalize_commitment_count** | **int** | Number of tx rollup finalize commitment operations related to the account | [optional]
**tx_rollup_remove_commitment_count** | **int** | Number of tx rollup remove commitment operations related to the account | [optional]
**tx_rollup_rejection_count** | **int** | Number of tx rollup rejection operations related to the account | [optional]
**tx_rollup_dispatch_tickets_count** | **int** | Number of tx rollup dispatch tickets operations related to the account | [optional]
**transfer_ticket_count** | **int** | Number of transfer ticket operations related to the account | [optional]
**first_activity** | **int** | Block height at which the ghost contract appeared first time | [optional]
**first_activity_time** | **\DateTime** | Block datetime at which the ghost contract appeared first time (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**last_activity** | **int** | Height of the block in which the ghost contract state was changed last time | [optional]
**last_activity_time** | **\DateTime** | Datetime of the block in which the ghost contract state was changed last time (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**extras** | **mixed** | Off-chain extras | [optional]
**metadata** | **mixed** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
