# # ContractAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the account, &#x60;contract&#x60; - smart contract programmable account | [optional]
**kind** | **string** | Kind of the contract (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;), where &#x60;delegator_contract&#x60; - manager.tz smart contract for delegation purpose only | [optional]
**tzips** | **string[]** | List of implemented standards (TZIPs) | [optional]
**alias** | **string** | Name of the project behind the contract or contract description | [optional]
**address** | **string** | Public key hash of the contract | [optional]
**balance** | **int** | Contract balance (micro tez) | [optional]
**creator** | [**OneOfCreatorInfo**](OneOfCreatorInfo.md) | Information about the account, which has deployed the contract to the blockchain | [optional]
**manager** | [**OneOfManagerInfo**](OneOfManagerInfo.md) | Information about the account, which was marked as a manager when contract was deployed to the blockchain | [optional]
**delegate** | [**OneOfDelegateInfo**](OneOfDelegateInfo.md) | Information about the current delegate of the contract. &#x60;null&#x60; if it&#39;s not delegated | [optional]
**delegation_level** | **int** | Block height of latest delegation. &#x60;null&#x60; if it&#39;s not delegated | [optional]
**delegation_time** | [**\DateTime**](\DateTime.md) | Block datetime of latest delegation (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;). &#x60;null&#x60; if it&#39;s not delegated | [optional]
**num_contracts** | **int** | Number of contracts, created (originated) and/or managed by the contract | [optional]
**num_delegations** | **int** | Number of delegation operations of the contract | [optional]
**num_originations** | **int** | Number of origination (deployment / contract creation) operations, related the contract | [optional]
**num_transactions** | **int** | Number of transaction (transfer) operations, related to the contract | [optional]
**num_reveals** | **int** | Number of reveal (is used to reveal the public key associated with an account) operations of the contract | [optional]
**num_migrations** | **int** | Number of migration (result of the context (database) migration during a protocol update) operations related to the contract (synthetic type) | [optional]
**first_activity** | **int** | Block height of the contract creation | [optional]
**first_activity_time** | [**\DateTime**](\DateTime.md) | Block datetime of the contract creation (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**last_activity** | **int** | Height of the block in which the account state was changed last time | [optional]
**last_activity_time** | [**\DateTime**](\DateTime.md) | Datetime of the block in which the account state was changed last time (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**storage** | **mixed** | Contract storage value. Omitted by default. Use &#x60;?includeStorage&#x3D;true&#x60; to include it in response. | [optional]
**contracts** | [**\Bzzhh\Tzkt\Model\RelatedContract[]**](RelatedContract.md) | List of contracts, related to the contract | [optional]
**operations** | [**\Bzzhh\Tzkt\Model\Operation[]**](Operation.md) | List of all operations (synthetic type included), related to the contract | [optional]
**metadata** | [**OneOfAccountMetadata**](OneOfAccountMetadata.md) | Metadata of the contract (alias, logo, website, contacts, etc) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
