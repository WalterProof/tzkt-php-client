# # SourceOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Operation type | [optional]
**hash** | **string** | Operation hash | [optional]
**counter** | **int** | Operation counter (null in case of synthetic operations) | [optional]
**nonce** | **int** | Operation nonce (null in case of non-internal or synthetic operations) | [optional]
**parameter** | [**OneOfTxParameter**](OneOfTxParameter.md) | Transaction parameter, including called entrypoint and value passed to the entrypoint. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
