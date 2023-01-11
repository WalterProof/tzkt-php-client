# # VotingPeriod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Index of the voting period, starting from zero | [optional]
**epoch** | **int** | Index of the voting epoch, starting from zero | [optional]
**first_level** | **int** | The height of the block in which the period starts | [optional]
**start_time** | **\DateTime** | The timestamp of the block in which the period starts | [optional]
**last_level** | **int** | The height of the block in which the period ends | [optional]
**end_time** | **\DateTime** | The timestamp of the block in which the period ends | [optional]
**kind** | **string** | Kind of the voting period: &#x60;proposal&#x60; - delegates can submit protocol amendment proposals using the proposal operation &#x60;exploration&#x60; -  bakers (delegates) may vote on the top-ranked proposal from the previous Proposal Period using the ballot operation &#x60;testing&#x60; - If the proposal is approved in the Exploration Period, the testing (or &#39;cooldown&#39;) period begins and bakers start testing the new protocol &#x60;promotion&#x60; - delegates can cast one vote to promote or not the tested proposal using the ballot operation &#x60;adoption&#x60; - after the proposal is actually accepted, the ecosystem has some time to prepare to the upgrade Learn more: https://tezos.gitlab.io/whitedoc/voting.html | [optional]
**status** | **string** | Status of the voting period: &#x60;active&#x60; - means that the voting period is in progress &#x60;no_proposals&#x60; - means that there were no proposals during the voting period &#x60;no_quorum&#x60; - means that there was a voting but the quorum was not reached &#x60;no_supermajority&#x60; - means that there was a voting but the supermajority was not reached &#x60;no_single_winner&#x60; - means that there were multiple winning proposals with the same voting power &#x60;success&#x60; - means that the period was finished with positive voting result | [optional]
**dictator** | **string** | Status of the governance dictator: &#x60;none&#x60; - means that there were no actions by the dictator  &#x60;abort&#x60; - means that the epoch was aborted by the dictator &#x60;reset&#x60; - means that the period was reset by the dictator &#x60;submit&#x60; - means that the dictator submitted a proposal | [optional]
**total_bakers** | **int** | The number of bakers on the voters list | [optional]
**total_voting_power** | **int** | Total voting power of bakers on the voters list | [optional]
**upvotes_quorum** | **float** | Upvotes quorum percentage (only for proposal period) | [optional]
**proposals_count** | **int** | The number of proposals injected during the voting period (only for proposal period) | [optional]
**top_upvotes** | **int** | This is how many upvotes (proposal operations) the most upvoted proposal has (only for proposal period) | [optional]
**top_voting_power** | **int** | This is how much voting power the most upvoted proposal has (only for proposal period) | [optional]
**ballots_quorum** | **float** | Ballots quorum percentage (only for exploration and promotion periods) | [optional]
**supermajority** | **float** | Supermajority percentage (only for exploration and promotion periods) | [optional]
**yay_ballots** | **int** | The number of the ballots with \&quot;yay\&quot; vote (only for exploration and promotion periods) | [optional]
**yay_voting_power** | **int** | Total voting power of the ballots with \&quot;yay\&quot; vote (only for exploration and promotion periods) | [optional]
**nay_ballots** | **int** | The number of the ballots with \&quot;nay\&quot; vote (only for exploration and promotion periods) | [optional]
**nay_voting_power** | **int** | Total voting power of the ballots with \&quot;nay\&quot; vote (only for exploration and promotion periods) | [optional]
**pass_ballots** | **int** | The number of the ballots with \&quot;pass\&quot; vote (only for exploration and promotion periods) | [optional]
**pass_voting_power** | **int** | Total voting power of the ballots with \&quot;pass\&quot; vote (only for exploration and promotion periods) | [optional]
**total_rolls** | **int** | [DEPRECATED] | [optional]
**top_rolls** | **int** | [DEPRECATED] | [optional]
**yay_rolls** | **int** | [DEPRECATED] | [optional]
**nay_rolls** | **int** | [DEPRECATED] | [optional]
**pass_rolls** | **int** | [DEPRECATED] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
