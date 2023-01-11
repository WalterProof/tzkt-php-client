# # Commitment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Blinded address of the account | [optional]
**balance** | **int** | Account balance to be activated | [optional]
**activated** | **bool** | Flag showing whether the account has been activated or not. | [optional]
**activation_level** | **int** | Level of the block at which the account has been activated. &#x60;null&#x60; if the account is not activated yet. | [optional]
**activation_time** | **\DateTime** | Datetime of the block at which the account has been activated (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;). &#x60;null&#x60; if the account is not activated yet. | [optional]
**activated_account** | [**\Bzzhh\Tzkt\Model\CommitmentActivatedAccount**](CommitmentActivatedAccount.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
