# # Block

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**level** | **int** | The height of the block from the genesis block | [optional]
**hash** | **string** | Block hash | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | The datetime at which the block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**proto** | **int** | Protocol code, representing a number of protocol changes since genesis (mod 256, but &#x60;-1&#x60; for the genesis block) | [optional]
**priority** | **int** | The position in the priority list of delegates at which the block was baked | [optional]
**validations** | **int** | Number of endorsements, confirmed the block | [optional]
**deposit** | **int** | Security deposit frozen on the baker&#39;s account for producing the block (micro tez) | [optional]
**reward** | **int** | Reward of the baker for producing the block (micro tez) | [optional]
**fees** | **int** | Total fee paid by all operations, included in the block | [optional]
**nonce_revealed** | **bool** | Status of the seed nonce revelation &#x60;true&#x60; - seed nonce revealed &#x60;false&#x60; - there&#39;s no &#x60;seed_nonce_hash&#x60; in the block or seed nonce revelation has missed | [optional]
**baker** | [**OneOfAlias**](OneOfAlias.md) | Information about a delegate (baker), produced the block | [optional]
**software** | [**OneOfSoftwareAlias**](OneOfSoftwareAlias.md) | Information about baker&#39;s software | [optional]
**endorsements** | [**\Bzzhh\Tzkt\Model\EndorsementOperation[]**](EndorsementOperation.md) | List of endorsement (is operation, which specifies the head of the chain as seen by the endorser of a given slot) operations, included in the block | [optional]
**proposals** | [**\Bzzhh\Tzkt\Model\ProposalOperation[]**](ProposalOperation.md) | List of proposal (is used by bakers (delegates) to submit and/or upvote proposals to amend the protocol) operations, included in the block | [optional]
**ballots** | [**\Bzzhh\Tzkt\Model\BallotOperation[]**](BallotOperation.md) | List of ballot (is used to vote for a proposal in a given voting cycle) operations, included in the block | [optional]
**activations** | [**\Bzzhh\Tzkt\Model\ActivationOperation[]**](ActivationOperation.md) | List of activation (is used to activate accounts that were recommended allocations of tezos tokens for donations to the Tezos Foundation’s fundraiser) operations, included in the block | [optional]
**double_baking** | [**\Bzzhh\Tzkt\Model\DoubleBakingOperation[]**](DoubleBakingOperation.md) | List of double baking evidence (is used by bakers to provide evidence of double baking (baking two different blocks at the same height) by a baker) operations, included in the block | [optional]
**double_endorsing** | [**\Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]**](DoubleEndorsingOperation.md) | List of double endorsement evidence (is used by bakers to provide evidence of double endorsement (endorsing two different blocks at the same block height) by a baker) operations, included in the block | [optional]
**nonce_revelations** | [**\Bzzhh\Tzkt\Model\NonceRevelationOperation[]**](NonceRevelationOperation.md) | List of nonce revelation (are used by the blockchain to create randomness) operations, included in the block | [optional]
**delegations** | [**\Bzzhh\Tzkt\Model\DelegationOperation[]**](DelegationOperation.md) | List of delegation (is used to delegate funds to a delegate (an implicit account registered as a baker)) operations, included in the block | [optional]
**originations** | [**\Bzzhh\Tzkt\Model\OriginationOperation[]**](OriginationOperation.md) | List of origination (deployment / contract creation ) operations, included in the block | [optional]
**transactions** | [**\Bzzhh\Tzkt\Model\TransactionOperation[]**](TransactionOperation.md) | List of transaction (is a standard operation used to transfer tezos tokens to an account) operations, included in the block | [optional]
**reveals** | [**\Bzzhh\Tzkt\Model\RevealOperation[]**](RevealOperation.md) | List of reveal (is used to reveal the public key associated with an account) operations, included in the block | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of block | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
