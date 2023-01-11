# # BigMapUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal Id, can be used for pagination | [optional]
**level** | **int** | Level of the block where the bigmap was updated | [optional]
**timestamp** | **\DateTime** | Timestamp of the block where the bigmap was updated | [optional]
**bigmap** | **int** | Bigmap ptr | [optional]
**contract** | [**\Bzzhh\Tzkt\Model\BigMapContract**](BigMapContract.md) |  | [optional]
**path** | **string** | Path to the bigmap in the contract storage | [optional]
**action** | **string** | Action with the bigmap (&#x60;allocate&#x60;, &#x60;add_key&#x60;, &#x60;update_key&#x60;, &#x60;remove_key&#x60;, &#x60;remove&#x60;) | [optional]
**content** | [**\Bzzhh\Tzkt\Model\BigMapUpdateContent**](BigMapUpdateContent.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
