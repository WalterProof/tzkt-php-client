# # BigMap

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ptr** | **int** | Bigmap pointer | [optional]
**contract** | [**\Bzzhh\Tzkt\Model\BigMapContract**](BigMapContract.md) |  | [optional]
**path** | **string** | Path to the bigmap in the contract storage | [optional]
**tags** | **string[]** | List of tags ( &#x60;metadata&#x60;, &#x60;token_metadata&#x60;,&#x60;ledger&#x60;, or &#x60;null&#x60; if there are no tags) | [optional]
**active** | **bool** | Bigmap status (&#x60;true&#x60; - active, &#x60;false&#x60; - removed) | [optional]
**first_level** | **int** | Level of the block where the bigmap was seen first time | [optional]
**last_level** | **int** | Level of the block where the bigmap was seen last time | [optional]
**total_keys** | **int** | Total number of keys ever added to the bigmap | [optional]
**active_keys** | **int** | Total number of currently active keys | [optional]
**updates** | **int** | Total number of actions with the bigmap | [optional]
**key_type** | **mixed** | Bigmap key type as JSON schema or Micheline, depending on the &#x60;micheline&#x60; query parameter. | [optional]
**value_type** | **mixed** | Bigmap value type as JSON schema or Micheline, depending on the &#x60;micheline&#x60; query parameter. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
