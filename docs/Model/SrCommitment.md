# # SrCommitment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**rollup** | [**\Bzzhh\Tzkt\Model\SrCommitmentRollup**](SrCommitmentRollup.md) |  | [optional]
**initiator** | [**\Bzzhh\Tzkt\Model\SrCommitmentInfoInitiator**](SrCommitmentInfoInitiator.md) |  | [optional]
**inbox_level** | **int** | Inbox level.   **[sortable]** | [optional]
**state** | **string** | State hash. | [optional]
**hash** | **string** | Commitment hash. | [optional]
**ticks** | **int** | Number of ticks. | [optional]
**first_level** | **int** | Level of the block where the commitment was first published.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the commitment was first published. | [optional]
**last_level** | **int** | Level of the block where the commitment was last updated.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the commitment was last updated. | [optional]
**stakers** | **int** | Number of stakers, published this commitment.   **[sortable]** | [optional]
**active_stakers** | **int** | Number of active (not refuted) stakers.   **[sortable]** | [optional]
**successors** | **int** | Number of successor commitments.   **[sortable]** | [optional]
**status** | **string** | Commitment status (&#x60;pending&#x60;, &#x60;cemented&#x60;, &#x60;executed&#x60;, &#x60;refuted&#x60;, or &#x60;orphan&#x60;). | [optional]
**predecessor** | [**\Bzzhh\Tzkt\Model\SrCommitmentPredecessor**](SrCommitmentPredecessor.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
