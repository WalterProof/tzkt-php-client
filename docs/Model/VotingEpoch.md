# # VotingEpoch

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Index of the voting epoch, starting from zero | [optional]
**first_level** | **int** | The height of the block in which the epoch starts | [optional]
**start_time** | **\DateTime** | The timestamp of the block in which the epoch starts | [optional]
**last_level** | **int** | The height of the block in which the epoch ends | [optional]
**end_time** | **\DateTime** | The timestamp of the block in which the epoch ends | [optional]
**status** | **string** | Status of the voting epoch: &#x60;no_proposals&#x60; - there were no proposals proposed &#x60;voting&#x60; - there was at least one proposal and the voting is in progress &#x60;completed&#x60; - voting successfully completed and the proposal was accepted &#x60;failed&#x60; - voting was not completed due to either quorum or supermajority was not reached | [optional]
**periods** | [**\Bzzhh\Tzkt\Model\VotingPeriod[]**](VotingPeriod.md) | Voting periods in the epoch | [optional]
**proposals** | [**\Bzzhh\Tzkt\Model\Proposal[]**](Proposal.md) | Proposals pushed during the voting epoch (null, if there were no proposals). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
