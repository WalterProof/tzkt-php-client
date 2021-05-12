# # ProtocolConstants

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ramp_up_cycles** | **int** | The number of cycles where security deposit is ramping up | [optional]
**no_reward_cycles** | **int** | The number of cycles with no baking rewards | [optional]
**preserved_cycles** | **int** | A number of cycles in which baker&#39;s security deposit and rewards are frozen | [optional]
**blocks_per_cycle** | **int** | A number of blocks the cycle contains | [optional]
**blocks_per_commitment** | **int** | A number of blocks that indicates how often seed nonce hash is included in a block. Seed nonce hash presents in only one out of &#x60;blocksPerCommitment&#x60; | [optional]
**blocks_per_snapshot** | **int** | A number of blocks that indicates how often a snapshot (snapshots are records of the state of rolls distributions) is taken | [optional]
**blocks_per_voting** | **int** | A number of block that indicates how long a voting period takes | [optional]
**time_between_blocks** | **int** | Minimum amount of seconds between blocks | [optional]
**endorsers_per_block** | **int** | Number of bakers that assigned to endorse a block | [optional]
**hard_operation_gas_limit** | **int** | Maximum amount of gas that one operation can consume | [optional]
**hard_operation_storage_limit** | **int** | Maximum amount of storage that one operation can consume | [optional]
**hard_block_gas_limit** | **int** | Maximum amount of total gas usage of a single block | [optional]
**tokens_per_roll** | **int** | Required number of tokens to get 1 roll (micro tez) | [optional]
**revelation_reward** | **int** | Reward for seed nonce revelation (micro tez) | [optional]
**block_deposit** | **int** | Security deposit for baking (producing) a block (micro tez) | [optional]
**block_reward** | **int[]** | Reward for baking (producing) a block (micro tez) | [optional]
**endorsement_deposit** | **int** | Security deposit for sending an endorsement operation (micro tez) | [optional]
**endorsement_reward** | **int[]** | Reward for sending an endorsement operation (micro tez) | [optional]
**origination_size** | **int** | Initial storage size of an originated (created) account (bytes) | [optional]
**byte_cost** | **int** | Cost of one storage byte in the blockchain (micro tez) | [optional]
**proposal_quorum** | **double** | Percentage of the total number of rolls required to select a proposal on the proposal period | [optional]
**ballot_quorum_min** | **double** | The minimum value of quorum percentage on the exploration and promotion periods | [optional]
**ballot_quorum_max** | **double** | The maximum value of quorum percentage on the exploration and promotion periods | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
