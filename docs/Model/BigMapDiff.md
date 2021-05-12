# # BigMapDiff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bigmap** | **int** | Bigmap Id | [optional]
**path** | **string** | Path to the bigmap in the contract storage | [optional]
**action** | **string** | Action with the bigmap (&#x60;allocate&#x60;, &#x60;add_key&#x60;, &#x60;update_key&#x60;, &#x60;remove_key&#x60;, &#x60;remove&#x60;) | [optional]
**content** | [**OneOfBigMapKeyShort**](OneOfBigMapKeyShort.md) | Affected key. If the action is &#x60;allocate&#x60; or &#x60;remove&#x60; the key will be &#x60;null&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
