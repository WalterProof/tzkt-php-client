# # BakingRight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the right: - &#x60;baking&#x60; - right to bake (produce) a block; - &#x60;endorsing&#x60; - right to endorse (validate) a block. | [optional]
**cycle** | **int** | Cycle on which the right can be realized. | [optional]
**level** | **int** | Level at which a block must be baked or an endorsement must be sent. | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Time (estimated, in case of future rights) when a block must be baked or an endorsement must be sent. | [optional]
**priority** | **int** | Priority (0 - ∞) with which baker can produce a block. If a baker with priority &#x60;0&#x60; doesn&#39;t produce a block within a given time interval, then the right goes to a baker with priority&#x60; 1&#x60;, etc. For &#x60;endorsing&#x60; rights this field is always &#x60;null&#x60;. | [optional]
**slots** | **int** | Number of slots (1 - 32) to be endorsed. For &#x60;baking&#x60; rights this field is always &#x60;null&#x60;. | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Baker to which baking or endorsing right has been given. | [optional]
**status** | **string** | Status of the baking or endorsing right: - &#x60;future&#x60; - the right is not realized yet; - &#x60;realized&#x60; - the right was successfully realized; - &#x60;uncovered&#x60; - the right was not realized due to lack of bonds (for example, when a baker is overdelegated); - &#x60;missed&#x60; - the right was not realized for no apparent reason (usually due to issues with network or node). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
