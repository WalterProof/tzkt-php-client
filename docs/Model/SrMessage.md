# # SrMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**level** | **int** | Level of the block where the message was pushed.   **[sortable]** | [optional]
**timestamp** | **\DateTime** | Timestamp of the block where the message was pushed. | [optional]
**type** | **string** | Type of the message (&#x60;level_start&#x60;, &#x60;level_info&#x60;, &#x60;level_end&#x60;, &#x60;transfer&#x60;, &#x60;external&#x60;, &#x60;migration&#x60;). | [optional]
**predecessor_hash** | **string** | For &#x60;level_info&#x60; messages only. Hash of the predecessor block. | [optional]
**predecessor_timestamp** | **\DateTime** | For &#x60;level_info&#x60; messages only. Timestamp of the predecessor block. | [optional]
**initiator** | [**\Bzzhh\Tzkt\Model\SrMessageInitiator**](SrMessageInitiator.md) |  | [optional]
**sender** | [**\Bzzhh\Tzkt\Model\SrMessageSender**](SrMessageSender.md) |  | [optional]
**target** | [**\Bzzhh\Tzkt\Model\SrMessageTarget**](SrMessageTarget.md) |  | [optional]
**entrypoint** | **string** | For &#x60;transfer&#x60; messages only. Entrypoint called in the target rollup | [optional]
**parameter** | **mixed** | For &#x60;transfer&#x60; messages only. Value passed to the called entrypoint. Note: you can configure parameters format by setting &#x60;micheline&#x60; query parameter. | [optional]
**payload** | **string** | For &#x60;external&#x60; messages only. Payload bytes (in base64). | [optional]
**protocol** | **string** | For &#x60;migration&#x60; messages only. Version of the new protocol (e.g. &#39;nairobi_017&#39;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
