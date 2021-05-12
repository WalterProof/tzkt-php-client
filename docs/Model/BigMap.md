# # BigMap

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ptr** | **int** | Bigmap pointer | [optional]
**contract** | [**OneOfAlias**](OneOfAlias.md) | Smart contract in which&#39;s storage the bigmap is allocated | [optional]
**path** | **string** | Path to the bigmap in the contract storage | [optional]
**tags** | **string[]** | List of tags (&#x60;token_metadata&#x60; - tzip-12, &#x60;metadata&#x60; - tzip-16, &#x60;null&#x60; - no tags) | [optional]
**active** | **bool** | Bigmap status (&#x60;true&#x60; - active, &#x60;false&#x60; - removed) | [optional]
**first_level** | **int** | Level of the block where the bigmap was seen first time | [optional]
**last_level** | **int** | Level of the block where the bigmap was seen last time | [optional]
**total_keys** | **int** | Total number of keys ever added to the bigmap | [optional]
**active_keys** | **int** | Total number of currently active keys | [optional]
**updates** | **int** | Total number of actions with the bigmap | [optional]
**key_type** | **mixed** | Bigmap key type as JSON schema or Micheline, depending on the &#x60;micheline&#x60; query parameter. | [optional]
**value_type** | **mixed** | Bigmap value type as JSON schema or Micheline, depending on the &#x60;micheline&#x60; query parameter. | [optional]
**_tags** | [**\Bzzhh\Tzkt\Model\BigMapTag**](BigMapTag.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
