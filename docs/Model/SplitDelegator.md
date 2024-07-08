# # SplitDelegator

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | Address of the delegator | [optional]
**delegated_balance** | **int** | Amount delegated to the baker at the snapshot time (micro tez). This amount doesn&#39;t include staked amount. | [optional]
**staked_balance** | **int** | Amount staked to the baker at the snapshot time (micro tez). | [optional]
**emptied** | **bool** | Indicates whether the delegator is emptied (at the moment, not at the snapshot time). Emptied accounts (users with zero balance) should be re-allocated, so if you make payment to the emptied account you will pay allocation fee. | [optional]
**current_delegated_balance** | **int** | [DEPRECATED] | [optional]
**current_staked_balance** | **int** | [DEPRECATED] | [optional]
**balance** | **int** | [DEPRECATED] | [optional]
**current_balance** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
