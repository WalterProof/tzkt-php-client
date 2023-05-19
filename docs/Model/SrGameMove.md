# # SrGameMove

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of the operation, stored in the TzKT indexer database. | [optional]
**level** | **int** | The height of the block from the genesis block, in which the operation was included. | [optional]
**timestamp** | **\DateTime** | Datetime of the block, in which the operation was included (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;). | [optional]
**sender** | [**\Bzzhh\Tzkt\Model\SrGameMoveSender**](SrGameMoveSender.md) |  | [optional]
**move** | **string** | Player&#39;s move (&#x60;start&#x60;, &#x60;dissection&#x60;, &#x60;proof&#x60;, &#x60;timeout&#x60;). | [optional]
**game_status** | **string** | Game status after the move (&#x60;ongoing&#x60; - game in progress, &#x60;loser&#x60; - one of the players lost, &#x60;draw&#x60; - both players lost). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
