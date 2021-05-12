# # UserAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  | [optional]
**alias** | **string** | Name of the project behind the account or account description | [optional]
**address** | **string** | Public key hash of the account | [optional]
**public_key** | **string** | Base58 representation of account&#39;s public key, revealed by the account | [optional]
**revealed** | **bool** | Public key revelation status. Unrevealed account can&#39;t send manager operation (transaction, origination etc.) | [optional]
**balance** | **int** | Account balance | [optional]
**counter** | **int** | An account nonce which is used to prevent operation replay | [optional]
**delegate** | [**OneOfDelegateInfo**](OneOfDelegateInfo.md) | Information about the current delegate of the account. &#x60;null&#x60; if it&#39;s not delegated | [optional]
**delegation_level** | **int** | Block height of latest delegation. &#x60;null&#x60; if it&#39;s not delegated | [optional]
**delegation_time** | [**\DateTime**](\DateTime.md) | Block datetime of latest delegation (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;). &#x60;null&#x60; if it&#39;s not delegated | [optional]
**num_contracts** | **int** | Number of contracts, created (originated) and/or managed by the contract | [optional]
**num_activations** | **int** | Number of account activation operations. Are used to activate accounts that were recommended allocations of tezos tokens for donations to the Tezos Foundation’s fundraiser | [optional]
**num_delegations** | **int** | Number of delegation operations, related to the account | [optional]
**num_originations** | **int** | Number of all origination (deployment / contract creation) operations, related to the account | [optional]
**num_transactions** | **int** | Number of all transaction (tez transfer) operations, related to the account | [optional]
**num_reveals** | **int** | Number of reveal (is used to reveal the public key associated with an account) operations of the contract | [optional]
**num_migrations** | **int** | Number of migration (result of the context (database) migration during a protocol update) operations, related to the account (synthetic type) | [optional]
**first_activity** | **int** | Block height of the first operation, related to the account | [optional]
**first_activity_time** | [**\DateTime**](\DateTime.md) | Block datetime of the first operation, related to the account (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**last_activity** | **int** | Height of the block in which the account state was changed last time | [optional]
**last_activity_time** | [**\DateTime**](\DateTime.md) | Datetime of the block in which the account state was changed last time (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**contracts** | [**\Bzzhh\Tzkt\Model\RelatedContract[]**](RelatedContract.md) | List of contracts, related (originated or managed) to the account | [optional]
**operations** | [**\Bzzhh\Tzkt\Model\Operation[]**](Operation.md) | List of all operations (synthetic type included), related to the account | [optional]
**metadata** | [**OneOfAccountMetadata**](OneOfAccountMetadata.md) | Metadata of the account (alias, logo, website, contacts, etc) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
