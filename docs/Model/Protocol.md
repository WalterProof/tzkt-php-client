# # Protocol

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **int** | Protocol code, representing a number of protocol changes since genesis (mod 256, but &#x60;-1&#x60; for the genesis block) | [optional]
**hash** | **string** | Hash of the protocol | [optional]
**first_level** | **int** | Block height where the protocol was applied | [optional]
**last_level** | **int** | Block height where the protocol ends. &#x60;null&#x60; if the protocol is active | [optional]
**constants** | [**OneOfProtocolConstants**](OneOfProtocolConstants.md) | Information about the protocol constants | [optional]
**metadata** | [**OneOfProtocolMetadata**](OneOfProtocolMetadata.md) | Metadata of the protocol | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
