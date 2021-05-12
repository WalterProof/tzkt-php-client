# # BigMapUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal Id, can be used for pagination | [optional]
**level** | **int** | Level of the block where the bigmap was updated | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp of the block where the bigmap was updated | [optional]
**bigmap** | **int** | Bigmap ptr | [optional]
**contract** | [**OneOfAlias**](OneOfAlias.md) | Smart contract in which&#39;s storage the bigmap is allocated | [optional]
**path** | **string** | Path to the bigmap in the contract storage | [optional]
**action** | **string** | Action with the bigmap (&#x60;allocate&#x60;, &#x60;add_key&#x60;, &#x60;update_key&#x60;, &#x60;remove_key&#x60;, &#x60;remove&#x60;) | [optional]
**content** | [**OneOfBigMapKeyShort**](OneOfBigMapKeyShort.md) | Updated key. If the action is &#x60;allocate&#x60; or &#x60;remove&#x60; the content will be &#x60;null&#x60;. | [optional]
**_tags** | [**\Bzzhh\Tzkt\Model\BigMapTag**](BigMapTag.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
