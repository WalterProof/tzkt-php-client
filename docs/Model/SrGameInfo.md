# # SrGameInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id. | [optional]
**initiator** | [**\Bzzhh\Tzkt\Model\SrGameInfoInitiator**](SrGameInfoInitiator.md) |  | [optional]
**initiator_commitment** | [**\Bzzhh\Tzkt\Model\SrGameInfoInitiatorCommitment**](SrGameInfoInitiatorCommitment.md) |  | [optional]
**opponent** | [**\Bzzhh\Tzkt\Model\SrGameInfoOpponent**](SrGameInfoOpponent.md) |  | [optional]
**opponent_commitment** | [**\Bzzhh\Tzkt\Model\SrGameInfoOpponentCommitment**](SrGameInfoOpponentCommitment.md) |  | [optional]
**initiator_reward** | **int** | In case the initiator won, this field will contain the reward amount (in mutez). | [optional]
**initiator_loss** | **int** | In case the initiator lost (including a &#x60;draw&#x60;), this field will contain the loss amount (in mutez). | [optional]
**opponent_reward** | **int** | In case the opponent won, this field will contain the reward amount (in mutez). | [optional]
**opponent_loss** | **int** | In case the opponent lost (including a &#x60;draw&#x60;), this field will contain the loss amount (in mutez). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
