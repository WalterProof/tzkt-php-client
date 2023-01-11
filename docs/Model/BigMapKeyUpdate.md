# # BigMapKeyUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal Id, can be used for pagination | [optional]
**level** | **int** | Level of the block where the bigmap key was updated | [optional]
**timestamp** | **\DateTime** | Timestamp of the block where the bigmap key was updated | [optional]
**action** | **string** | Action with the key (&#x60;add_key&#x60;, &#x60;update_key&#x60;, &#x60;remove_key&#x60;) | [optional]
**value** | **mixed** | Value in JSON or Micheline format, depending on the &#x60;micheline&#x60; query parameter. Note, if the action is &#x60;remove_key&#x60; it will contain the last non-null value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
