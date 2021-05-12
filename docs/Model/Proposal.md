# # Proposal

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Hash of the proposal, which representing a tarball of concatenated .ml/.mli source files | [optional]
**initiator** | [**OneOfAlias**](OneOfAlias.md) | Information about the baker (delegate) submitted the proposal | [optional]
**first_period** | **int** | The first voting period where the proposal was active | [optional]
**last_period** | **int** | The last voting period where the proposal was active | [optional]
**epoch** | **int** | The voting epoch where the proposal was active | [optional]
**upvotes** | **int** | The total number of upvotes (proposal operations) | [optional]
**rolls** | **int** | The total number of rolls, upvoted the proposal | [optional]
**status** | **string** | Status of the proposal &#x60;active&#x60; - the proposal in the active state &#x60;accepted&#x60; - the proposal was accepted &#x60;rejected&#x60; - the proposal was rejected due to too many \&quot;nay\&quot; ballots &#x60;skipped&#x60; - the proposal was skipped due to the quorum was not reached | [optional]
**metadata** | [**OneOfProposalMetadata**](OneOfProposalMetadata.md) | Information about the proposal | [optional]
**period** | **int** | **DEPRECATED**. Use &#x60;firstPeriod&#x60; instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
