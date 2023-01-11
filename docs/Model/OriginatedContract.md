# # OriginatedContract

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**kind** | **string** | Kind of the contract (&#x60;delegator_contract&#x60; or &#x60;smart_contract&#x60;), where &#x60;delegator_contract&#x60; - manager.tz smart contract for delegation purpose only | [optional]
**alias** | **string** | Name of the project behind the contract or contract description | [optional]
**address** | **string** | Public key hash of the contract | [optional]
**type_hash** | **int** | 32-bit hash of the contract parameter and storage types. This field can be used for searching similar contracts (which have the same interface). | [optional]
**code_hash** | **int** | 32-bit hash of the contract code. This field can be used for searching same contracts (which have the same script). | [optional]
**tzips** | **string[]** | List of implemented standards (TZIPs) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
