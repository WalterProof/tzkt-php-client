# Bzzhh\Tzkt\OperationsApi

All URIs are relative to https://api.tzkt.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**operationsGetActivationByHash()**](OperationsApi.md#operationsGetActivationByHash) | **GET** /v1/operations/activations/{hash} | Get activation by hash |
| [**operationsGetActivations()**](OperationsApi.md#operationsGetActivations) | **GET** /v1/operations/activations | Get activations |
| [**operationsGetActivationsCount()**](OperationsApi.md#operationsGetActivationsCount) | **GET** /v1/operations/activations/count | Get activations count |
| [**operationsGetBaking()**](OperationsApi.md#operationsGetBaking) | **GET** /v1/operations/baking | Get baking |
| [**operationsGetBakingById()**](OperationsApi.md#operationsGetBakingById) | **GET** /v1/operations/baking/{id} | Get baking by id |
| [**operationsGetBakingCount()**](OperationsApi.md#operationsGetBakingCount) | **GET** /v1/operations/baking/count | Get baking count |
| [**operationsGetBallotByHash()**](OperationsApi.md#operationsGetBallotByHash) | **GET** /v1/operations/ballots/{hash} | Get ballot by hash |
| [**operationsGetBallots()**](OperationsApi.md#operationsGetBallots) | **GET** /v1/operations/ballots | Get ballots |
| [**operationsGetBallotsCount()**](OperationsApi.md#operationsGetBallotsCount) | **GET** /v1/operations/ballots/count | Get ballots count |
| [**operationsGetByHash()**](OperationsApi.md#operationsGetByHash) | **GET** /v1/operations/{hash} | Get operations by hash |
| [**operationsGetByHashCounter()**](OperationsApi.md#operationsGetByHashCounter) | **GET** /v1/operations/{hash}/{counter} | Get operations by hash and counter |
| [**operationsGetByHashCounterNonce()**](OperationsApi.md#operationsGetByHashCounterNonce) | **GET** /v1/operations/{hash}/{counter}/{nonce} | Get operations by hash, counter and nonce |
| [**operationsGetDelegationByHash()**](OperationsApi.md#operationsGetDelegationByHash) | **GET** /v1/operations/delegations/{hash} | Get delegation by hash |
| [**operationsGetDelegationStatus()**](OperationsApi.md#operationsGetDelegationStatus) | **GET** /v1/operations/delegations/{hash}/status | Get delegation status |
| [**operationsGetDelegations()**](OperationsApi.md#operationsGetDelegations) | **GET** /v1/operations/delegations | Get delegations |
| [**operationsGetDelegationsCount()**](OperationsApi.md#operationsGetDelegationsCount) | **GET** /v1/operations/delegations/count | Get delegations count |
| [**operationsGetDoubleBaking()**](OperationsApi.md#operationsGetDoubleBaking) | **GET** /v1/operations/double_baking | Get double baking |
| [**operationsGetDoubleBakingByHash()**](OperationsApi.md#operationsGetDoubleBakingByHash) | **GET** /v1/operations/double_baking/{hash} | Get double baking by hash |
| [**operationsGetDoubleBakingCount()**](OperationsApi.md#operationsGetDoubleBakingCount) | **GET** /v1/operations/double_baking/count | Get double baking count |
| [**operationsGetDoubleEndorsing()**](OperationsApi.md#operationsGetDoubleEndorsing) | **GET** /v1/operations/double_endorsing | Get double endorsing |
| [**operationsGetDoubleEndorsingByHash()**](OperationsApi.md#operationsGetDoubleEndorsingByHash) | **GET** /v1/operations/double_endorsing/{hash} | Get double endorsing by hash |
| [**operationsGetDoubleEndorsingCount()**](OperationsApi.md#operationsGetDoubleEndorsingCount) | **GET** /v1/operations/double_endorsing/count | Get double endorsing count |
| [**operationsGetDoublePreendorsing()**](OperationsApi.md#operationsGetDoublePreendorsing) | **GET** /v1/operations/double_preendorsing | Get double preendorsing |
| [**operationsGetDoublePreendorsingByHash()**](OperationsApi.md#operationsGetDoublePreendorsingByHash) | **GET** /v1/operations/double_preendorsing/{hash} | Get double preendorsing by hash |
| [**operationsGetDoublePreendorsingCount()**](OperationsApi.md#operationsGetDoublePreendorsingCount) | **GET** /v1/operations/double_preendorsing/count | Get double preendorsing count |
| [**operationsGetDrainDelegateByHash()**](OperationsApi.md#operationsGetDrainDelegateByHash) | **GET** /v1/operations/drain_delegate/{hash} | Get drain delegate by hash |
| [**operationsGetDrainDelegateOps()**](OperationsApi.md#operationsGetDrainDelegateOps) | **GET** /v1/operations/drain_delegate | Get drain delegate |
| [**operationsGetDrainDelegateOpsCount()**](OperationsApi.md#operationsGetDrainDelegateOpsCount) | **GET** /v1/operations/drain_delegate/count | Get drain delegate count |
| [**operationsGetEndorsementByHash()**](OperationsApi.md#operationsGetEndorsementByHash) | **GET** /v1/operations/endorsements/{hash} | Get endorsement by hash |
| [**operationsGetEndorsements()**](OperationsApi.md#operationsGetEndorsements) | **GET** /v1/operations/endorsements | Get endorsements |
| [**operationsGetEndorsementsCount()**](OperationsApi.md#operationsGetEndorsementsCount) | **GET** /v1/operations/endorsements/count | Get endorsements count |
| [**operationsGetEndorsingRewardById()**](OperationsApi.md#operationsGetEndorsingRewardById) | **GET** /v1/operations/endorsing_rewards/{id} | Get endorsing reward by id |
| [**operationsGetEndorsingRewards()**](OperationsApi.md#operationsGetEndorsingRewards) | **GET** /v1/operations/endorsing_rewards | Get endorsing rewards |
| [**operationsGetEndorsingRewardsCount()**](OperationsApi.md#operationsGetEndorsingRewardsCount) | **GET** /v1/operations/endorsing_rewards/count | Get endorsing rewards count |
| [**operationsGetIncreasePaidStorageByHash()**](OperationsApi.md#operationsGetIncreasePaidStorageByHash) | **GET** /v1/operations/increase_paid_storage/{hash} | Get increase paid storage by hash |
| [**operationsGetIncreasePaidStorageCount()**](OperationsApi.md#operationsGetIncreasePaidStorageCount) | **GET** /v1/operations/increase_paid_storage/count | Get increase paid storage count |
| [**operationsGetIncreasePaidStorageOps()**](OperationsApi.md#operationsGetIncreasePaidStorageOps) | **GET** /v1/operations/increase_paid_storage | Get increase paid storage |
| [**operationsGetMigrationById()**](OperationsApi.md#operationsGetMigrationById) | **GET** /v1/operations/migrations/{id} | Get migration by id |
| [**operationsGetMigrations()**](OperationsApi.md#operationsGetMigrations) | **GET** /v1/operations/migrations | Get migrations |
| [**operationsGetMigrationsCount()**](OperationsApi.md#operationsGetMigrationsCount) | **GET** /v1/operations/migrations/count | Get migrations count |
| [**operationsGetNonceRevelationByHash()**](OperationsApi.md#operationsGetNonceRevelationByHash) | **GET** /v1/operations/nonce_revelations/{hash} | Get nonce revelation by hash |
| [**operationsGetNonceRevelations()**](OperationsApi.md#operationsGetNonceRevelations) | **GET** /v1/operations/nonce_revelations | Get nonce revelations |
| [**operationsGetNonceRevelationsCount()**](OperationsApi.md#operationsGetNonceRevelationsCount) | **GET** /v1/operations/nonce_revelations/count | Get nonce revelations count |
| [**operationsGetOriginationByHash()**](OperationsApi.md#operationsGetOriginationByHash) | **GET** /v1/operations/originations/{hash} | Get origination by hash |
| [**operationsGetOriginationStatus()**](OperationsApi.md#operationsGetOriginationStatus) | **GET** /v1/operations/originations/{hash}/status | Get origination status |
| [**operationsGetOriginations()**](OperationsApi.md#operationsGetOriginations) | **GET** /v1/operations/originations | Get originations |
| [**operationsGetOriginationsCount()**](OperationsApi.md#operationsGetOriginationsCount) | **GET** /v1/operations/originations/count | Get originations count |
| [**operationsGetPreendorsementByHash()**](OperationsApi.md#operationsGetPreendorsementByHash) | **GET** /v1/operations/preendorsements/{hash} | Get preendorsement by hash |
| [**operationsGetPreendorsements()**](OperationsApi.md#operationsGetPreendorsements) | **GET** /v1/operations/preendorsements | Get preendorsements |
| [**operationsGetPreendorsementsCount()**](OperationsApi.md#operationsGetPreendorsementsCount) | **GET** /v1/operations/preendorsements/count | Get preendorsements count |
| [**operationsGetProposalByHash()**](OperationsApi.md#operationsGetProposalByHash) | **GET** /v1/operations/proposals/{hash} | Get proposal by hash |
| [**operationsGetProposals()**](OperationsApi.md#operationsGetProposals) | **GET** /v1/operations/proposals | Get proposals |
| [**operationsGetProposalsCount()**](OperationsApi.md#operationsGetProposalsCount) | **GET** /v1/operations/proposals/count | Get proposals count |
| [**operationsGetRegisterConstantByHash()**](OperationsApi.md#operationsGetRegisterConstantByHash) | **GET** /v1/operations/register_constants/{hash} | Get register constant by hash |
| [**operationsGetRegisterConstantStatus()**](OperationsApi.md#operationsGetRegisterConstantStatus) | **GET** /v1/operations/register_constants/{hash}/status | Get register constant status |
| [**operationsGetRegisterConstants()**](OperationsApi.md#operationsGetRegisterConstants) | **GET** /v1/operations/register_constants | Get register constants |
| [**operationsGetRegisterConstantsCount()**](OperationsApi.md#operationsGetRegisterConstantsCount) | **GET** /v1/operations/register_constants/count | Get register constants count |
| [**operationsGetRevealByHash()**](OperationsApi.md#operationsGetRevealByHash) | **GET** /v1/operations/reveals/{hash} | Get reveal by hash |
| [**operationsGetRevealStatus()**](OperationsApi.md#operationsGetRevealStatus) | **GET** /v1/operations/reveals/{hash}/status | Get reveal status |
| [**operationsGetReveals()**](OperationsApi.md#operationsGetReveals) | **GET** /v1/operations/reveals | Get reveals |
| [**operationsGetRevealsCount()**](OperationsApi.md#operationsGetRevealsCount) | **GET** /v1/operations/reveals/count | Get reveals count |
| [**operationsGetRevelationPenalties()**](OperationsApi.md#operationsGetRevelationPenalties) | **GET** /v1/operations/revelation_penalties | Get revelation penalties |
| [**operationsGetRevelationPenaltiesCount()**](OperationsApi.md#operationsGetRevelationPenaltiesCount) | **GET** /v1/operations/revelation_penalties/count | Get revelation penalties count |
| [**operationsGetRevelationPenaltyById()**](OperationsApi.md#operationsGetRevelationPenaltyById) | **GET** /v1/operations/revelation_penalties/{id} | Get revelation penalty by id |
| [**operationsGetSetDepositsLimitByHash()**](OperationsApi.md#operationsGetSetDepositsLimitByHash) | **GET** /v1/operations/set_deposits_limits/{hash} | Get set deposits limit by hash |
| [**operationsGetSetDepositsLimitStatus()**](OperationsApi.md#operationsGetSetDepositsLimitStatus) | **GET** /v1/operations/set_deposits_limits/{hash}/status | Get set deposits limit status |
| [**operationsGetSetDepositsLimits()**](OperationsApi.md#operationsGetSetDepositsLimits) | **GET** /v1/operations/set_deposits_limits | Get set deposits limits |
| [**operationsGetSetDepositsLimitsCount()**](OperationsApi.md#operationsGetSetDepositsLimitsCount) | **GET** /v1/operations/set_deposits_limits/count | Get set deposits limits count |
| [**operationsGetStatus()**](OperationsApi.md#operationsGetStatus) | **GET** /v1/operations/{hash}/status | Get operation status |
| [**operationsGetTransactionByHash()**](OperationsApi.md#operationsGetTransactionByHash) | **GET** /v1/operations/transactions/{hash} | Get transaction by hash |
| [**operationsGetTransactionByHashCounter()**](OperationsApi.md#operationsGetTransactionByHashCounter) | **GET** /v1/operations/transactions/{hash}/{counter} | Get transaction by hash and counter |
| [**operationsGetTransactionByHashCounterNonce()**](OperationsApi.md#operationsGetTransactionByHashCounterNonce) | **GET** /v1/operations/transactions/{hash}/{counter}/{nonce} | Get transaction by hash, counter and nonce |
| [**operationsGetTransactionStatus()**](OperationsApi.md#operationsGetTransactionStatus) | **GET** /v1/operations/transactions/{hash}/status | Get transaction status |
| [**operationsGetTransactions()**](OperationsApi.md#operationsGetTransactions) | **GET** /v1/operations/transactions | Get transactions |
| [**operationsGetTransactionsCount()**](OperationsApi.md#operationsGetTransactionsCount) | **GET** /v1/operations/transactions/count | Get transactions count |
| [**operationsGetTransferTicketOps()**](OperationsApi.md#operationsGetTransferTicketOps) | **GET** /v1/operations/transfer_ticket | Get transfer ticket |
| [**operationsGetTransferTicketOpsByHash()**](OperationsApi.md#operationsGetTransferTicketOpsByHash) | **GET** /v1/operations/transfer_ticket/{hash} | Get transfer ticket by hash |
| [**operationsGetTransferTicketOpsCount()**](OperationsApi.md#operationsGetTransferTicketOpsCount) | **GET** /v1/operations/transfer_ticket/count | Get transfer ticket count |
| [**operationsGetTransferTicketStatus()**](OperationsApi.md#operationsGetTransferTicketStatus) | **GET** /v1/operations/transfer_ticket/{hash}/status | Get transfer ticket status |
| [**operationsGetTxRollupCommitOps()**](OperationsApi.md#operationsGetTxRollupCommitOps) | **GET** /v1/operations/tx_rollup_commit | Get tx rollup commit |
| [**operationsGetTxRollupCommitOpsByHash()**](OperationsApi.md#operationsGetTxRollupCommitOpsByHash) | **GET** /v1/operations/tx_rollup_commit/{hash} | Get tx rollup commit by hash |
| [**operationsGetTxRollupCommitOpsCount()**](OperationsApi.md#operationsGetTxRollupCommitOpsCount) | **GET** /v1/operations/tx_rollup_commit/count | Get tx rollup commit count |
| [**operationsGetTxRollupCommitStatus()**](OperationsApi.md#operationsGetTxRollupCommitStatus) | **GET** /v1/operations/tx_rollup_commit/{hash}/status | Get tx rollup commit status |
| [**operationsGetTxRollupDispatchTicketsOps()**](OperationsApi.md#operationsGetTxRollupDispatchTicketsOps) | **GET** /v1/operations/tx_rollup_dispatch_tickets | Get tx rollup dispatch tickets |
| [**operationsGetTxRollupDispatchTicketsOpsByHash()**](OperationsApi.md#operationsGetTxRollupDispatchTicketsOpsByHash) | **GET** /v1/operations/tx_rollup_dispatch_tickets/{hash} | Get tx rollup dispatch tickets by hash |
| [**operationsGetTxRollupDispatchTicketsOpsCount()**](OperationsApi.md#operationsGetTxRollupDispatchTicketsOpsCount) | **GET** /v1/operations/tx_rollup_dispatch_tickets/count | Get tx rollup dispatch tickets count |
| [**operationsGetTxRollupDispatchTicketsStatus()**](OperationsApi.md#operationsGetTxRollupDispatchTicketsStatus) | **GET** /v1/operations/tx_rollup_dispatch_tickets/{hash}/status | Get tx rollup dispatch tickets status |
| [**operationsGetTxRollupFinalizeCommitmentOps()**](OperationsApi.md#operationsGetTxRollupFinalizeCommitmentOps) | **GET** /v1/operations/tx_rollup_finalize_commitment | Get tx rollup finalize commitment |
| [**operationsGetTxRollupFinalizeCommitmentOpsByHash()**](OperationsApi.md#operationsGetTxRollupFinalizeCommitmentOpsByHash) | **GET** /v1/operations/tx_rollup_finalize_commitment/{hash} | Get tx rollup finalize commitment by hash |
| [**operationsGetTxRollupFinalizeCommitmentOpsCount()**](OperationsApi.md#operationsGetTxRollupFinalizeCommitmentOpsCount) | **GET** /v1/operations/tx_rollup_finalize_commitment/count | Get tx rollup finalize commitment count |
| [**operationsGetTxRollupFinalizeCommitmentStatus()**](OperationsApi.md#operationsGetTxRollupFinalizeCommitmentStatus) | **GET** /v1/operations/tx_rollup_finalize_commitment/{hash}/status | Get tx rollup finalize commitment status |
| [**operationsGetTxRollupOriginationOps()**](OperationsApi.md#operationsGetTxRollupOriginationOps) | **GET** /v1/operations/tx_rollup_origination | Get tx rollup origination |
| [**operationsGetTxRollupOriginationOpsByHash()**](OperationsApi.md#operationsGetTxRollupOriginationOpsByHash) | **GET** /v1/operations/tx_rollup_origination/{hash} | Get tx rollup origination by hash |
| [**operationsGetTxRollupOriginationOpsCount()**](OperationsApi.md#operationsGetTxRollupOriginationOpsCount) | **GET** /v1/operations/tx_rollup_origination/count | Get tx rollup origination count |
| [**operationsGetTxRollupOriginationStatus()**](OperationsApi.md#operationsGetTxRollupOriginationStatus) | **GET** /v1/operations/tx_rollup_origination/{hash}/status | Get tx rollup origination status |
| [**operationsGetTxRollupRejectionOps()**](OperationsApi.md#operationsGetTxRollupRejectionOps) | **GET** /v1/operations/tx_rollup_rejection | Get tx rollup rejection |
| [**operationsGetTxRollupRejectionOpsByHash()**](OperationsApi.md#operationsGetTxRollupRejectionOpsByHash) | **GET** /v1/operations/tx_rollup_rejection/{hash} | Get tx rollup rejection by hash |
| [**operationsGetTxRollupRejectionOpsCount()**](OperationsApi.md#operationsGetTxRollupRejectionOpsCount) | **GET** /v1/operations/tx_rollup_rejection/count | Get tx rollup rejection count |
| [**operationsGetTxRollupRejectionStatus()**](OperationsApi.md#operationsGetTxRollupRejectionStatus) | **GET** /v1/operations/tx_rollup_rejection/{hash}/status | Get tx rollup rejection status |
| [**operationsGetTxRollupRemoveCommitmentOps()**](OperationsApi.md#operationsGetTxRollupRemoveCommitmentOps) | **GET** /v1/operations/tx_rollup_remove_commitment | Get tx rollup remove commitment |
| [**operationsGetTxRollupRemoveCommitmentOpsByHash()**](OperationsApi.md#operationsGetTxRollupRemoveCommitmentOpsByHash) | **GET** /v1/operations/tx_rollup_remove_commitment/{hash} | Get tx rollup remove commitment by hash |
| [**operationsGetTxRollupRemoveCommitmentOpsCount()**](OperationsApi.md#operationsGetTxRollupRemoveCommitmentOpsCount) | **GET** /v1/operations/tx_rollup_remove_commitment/count | Get tx rollup remove commitment count |
| [**operationsGetTxRollupRemoveCommitmentStatus()**](OperationsApi.md#operationsGetTxRollupRemoveCommitmentStatus) | **GET** /v1/operations/tx_rollup_remove_commitment/{hash}/status | Get tx rollup remove commitment status |
| [**operationsGetTxRollupReturnBondOps()**](OperationsApi.md#operationsGetTxRollupReturnBondOps) | **GET** /v1/operations/tx_rollup_return_bond | Get tx rollup return bond |
| [**operationsGetTxRollupReturnBondOpsByHash()**](OperationsApi.md#operationsGetTxRollupReturnBondOpsByHash) | **GET** /v1/operations/tx_rollup_return_bond/{hash} | Get tx rollup return bond by hash |
| [**operationsGetTxRollupReturnBondOpsCount()**](OperationsApi.md#operationsGetTxRollupReturnBondOpsCount) | **GET** /v1/operations/tx_rollup_return_bond/count | Get tx rollup return bond count |
| [**operationsGetTxRollupReturnBondStatus()**](OperationsApi.md#operationsGetTxRollupReturnBondStatus) | **GET** /v1/operations/tx_rollup_return_bond/{hash}/status | Get tx rollup return bond status |
| [**operationsGetTxRollupSubmitBatchOps()**](OperationsApi.md#operationsGetTxRollupSubmitBatchOps) | **GET** /v1/operations/tx_rollup_submit_batch | Get tx rollup submit batch |
| [**operationsGetTxRollupSubmitBatchOpsByHash()**](OperationsApi.md#operationsGetTxRollupSubmitBatchOpsByHash) | **GET** /v1/operations/tx_rollup_submit_batch/{hash} | Get tx rollup submit batch by hash |
| [**operationsGetTxRollupSubmitBatchOpsCount()**](OperationsApi.md#operationsGetTxRollupSubmitBatchOpsCount) | **GET** /v1/operations/tx_rollup_submit_batch/count | Get tx rollup submit batch count |
| [**operationsGetTxRollupSubmitBatchStatus()**](OperationsApi.md#operationsGetTxRollupSubmitBatchStatus) | **GET** /v1/operations/tx_rollup_submit_batch/{hash}/status | Get tx rollup submit batch status |
| [**operationsGetUpdateConsensusKeyByHash()**](OperationsApi.md#operationsGetUpdateConsensusKeyByHash) | **GET** /v1/operations/update_consensus_key/{hash} | Get update consensus key by hash |
| [**operationsGetUpdateConsensusKeyOps()**](OperationsApi.md#operationsGetUpdateConsensusKeyOps) | **GET** /v1/operations/update_consensus_key | Get update consensus key |
| [**operationsGetUpdateConsensusKeyOpsCount()**](OperationsApi.md#operationsGetUpdateConsensusKeyOpsCount) | **GET** /v1/operations/update_consensus_key/count | Get update consensus key count |
| [**operationsGetVdfRevelationByHash()**](OperationsApi.md#operationsGetVdfRevelationByHash) | **GET** /v1/operations/vdf_revelations/{hash} | Get vdf revelation by hash |
| [**operationsGetVdfRevelations()**](OperationsApi.md#operationsGetVdfRevelations) | **GET** /v1/operations/vdf_revelations | Get vdf revelations |
| [**operationsGetVdfRevelationsCount()**](OperationsApi.md#operationsGetVdfRevelationsCount) | **GET** /v1/operations/vdf_revelations/count | Get vdf revelations count |


## `operationsGetActivationByHash()`

```php
operationsGetActivationByHash($hash, $quote): \Bzzhh\Tzkt\Model\ActivationOperation[]
```

Get activation by hash

Returns an activation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetActivationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetActivationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\ActivationOperation[]**](../Model/ActivationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetActivations()`

```php
operationsGetActivations($account, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\ActivationOperation[]
```

Get activations

Returns a list of activation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters activations by account. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters activations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters activations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts activations by specified field. Supported fields: `id` (default), `level`, `balance`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetActivations($account, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetActivations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters activations by account. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters activations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters activations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts activations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;balance&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\ActivationOperation[]**](../Model/ActivationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetActivationsCount()`

```php
operationsGetActivationsCount($level, $timestamp): int
```

Get activations count

Returns the total number of activation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters activations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters activations by timestamp.

try {
    $result = $apiInstance->operationsGetActivationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetActivationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters activations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters activations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBaking()`

```php
operationsGetBaking($baker, $anyof, $proposer, $producer, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\BakingOperation[]
```

Get baking

Returns a list of baking operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | [DEPRECATED]
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters by any of the specified fields. Example: `anyof.proposer.producer=tz1...`.
$proposer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by block proposer. Allowed fields for `.eqx` mode: none.
$producer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by block producer. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters baking operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts baking operations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBaking($baker, $anyof, $proposer, $producer, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| [DEPRECATED] | [optional] |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters by any of the specified fields. Example: &#x60;anyof.proposer.producer&#x3D;tz1...&#x60;. | [optional] |
| **proposer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by block proposer. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **producer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by block producer. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters baking operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters baking operations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts baking operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\BakingOperation[]**](../Model/BakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBakingById()`

```php
operationsGetBakingById($id, $quote): \Bzzhh\Tzkt\Model\BakingOperation
```

Get baking by id

Returns baking operation with specified id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Operation id
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBakingById($id, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBakingById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Operation id | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\BakingOperation**](../Model/BakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBakingCount()`

```php
operationsGetBakingCount($level, $timestamp): int
```

Get baking count

Returns the total number of baking operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters baking operations by timestamp.

try {
    $result = $apiInstance->operationsGetBakingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBakingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters baking operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters baking operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBallotByHash()`

```php
operationsGetBallotByHash($hash, $quote): \Bzzhh\Tzkt\Model\BallotOperation[]
```

Get ballot by hash

Returns a ballot operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBallotByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBallotByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\BallotOperation[]**](../Model/BallotOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBallots()`

```php
operationsGetBallots($delegate, $level, $timestamp, $epoch, $period, $proposal, $vote, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\BallotOperation[]
```

Get ballots

Returns a list of ballot operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters ballots by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters ballots by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters ballots by timestamp.
$epoch = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters ballots by voting epoch.
$period = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters ballots by voting period.
$proposal = new \Bzzhh\Tzkt\Model\OperationsGetBallotsProposalParameter(); // OperationsGetBallotsProposalParameter | Filters ballots by proposal hash.
$vote = new \Bzzhh\Tzkt\Model\OperationsGetBallotsVoteParameter(); // OperationsGetBallotsVoteParameter | Filters ballots by vote (`yay`, `nay`, `pass`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts ballots by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetBallots($delegate, $level, $timestamp, $epoch, $period, $proposal, $vote, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBallots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters ballots by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters ballots by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters ballots by timestamp. | [optional] |
| **epoch** | [**AccountsGetIdParameter**](../Model/.md)| Filters ballots by voting epoch. | [optional] |
| **period** | [**AccountsGetIdParameter**](../Model/.md)| Filters ballots by voting period. | [optional] |
| **proposal** | [**OperationsGetBallotsProposalParameter**](../Model/.md)| Filters ballots by proposal hash. | [optional] |
| **vote** | [**OperationsGetBallotsVoteParameter**](../Model/.md)| Filters ballots by vote (&#x60;yay&#x60;, &#x60;nay&#x60;, &#x60;pass&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts ballots by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\BallotOperation[]**](../Model/BallotOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetBallotsCount()`

```php
operationsGetBallotsCount($level, $timestamp): int
```

Get ballots count

Returns the total number of ballot operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters ballot operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters ballot operations by timestamp.

try {
    $result = $apiInstance->operationsGetBallotsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetBallotsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters ballot operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters ballot operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetByHash()`

```php
operationsGetByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\Operation[]
```

Get operations by hash

Returns a list of operations with the specified hash.   **NOTE: if you know in advance what operation type you want to get (e.g. transactions), prefer using `/v1/operations/{type}/{hash}` (e.g. [/v1/operations/transactions/{hash}](#operation/Operations_GetTransactionByHash)) instead, because it's much more efficient.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Operation[]**](../Model/Operation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetByHashCounter()`

```php
operationsGetByHashCounter($hash, $counter, $micheline, $quote): \Bzzhh\Tzkt\Model\Operation[]
```

Get operations by hash and counter

Returns a list of operations with the specified hash and counter.   **NOTE: if you know in advance what operation type you want to get (e.g. transactions), prefer using `/v1/operations/{type}/{hash}/{counter}` (e.g. [/v1/operations/transactions/{hash}/{counter}](#operation/Operations_GetTransactionByHashCounter)) instead, because it's much more efficient.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetByHashCounter($hash, $counter, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetByHashCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **counter** | **int**| Operation counter | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Operation[]**](../Model/Operation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetByHashCounterNonce()`

```php
operationsGetByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote): \Bzzhh\Tzkt\Model\Operation[]
```

Get operations by hash, counter and nonce

Returns an internal operations with the specified hash, counter and nonce.   **NOTE: if you know in advance what operation type you want to get (e.g. transactions), prefer using `/v1/operations/{type}/{hash}/{counter}/{nonce}` (e.g. [/v1/operations/transactions/{hash}/{counter}/{nonce}](#operation/Operations_GetTransactionByHashCounterNonce)) instead, because it's much more efficient.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$nonce = 56; // int | Operation nonce (internal)
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetByHashCounterNonce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **counter** | **int**| Operation counter | |
| **nonce** | **int**| Operation nonce (internal) | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\Operation[]**](../Model/Operation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDelegationByHash()`

```php
operationsGetDelegationByHash($hash, $quote): \Bzzhh\Tzkt\Model\DelegationOperation[]
```

Get delegation by hash

Returns a delegation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDelegationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DelegationOperation[]**](../Model/DelegationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDelegationStatus()`

```php
operationsGetDelegationStatus($hash): bool
```

Get delegation status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetDelegationStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDelegations()`

```php
operationsGetDelegations($anyof, $initiator, $sender, $prev_delegate, $new_delegate, $level, $timestamp, $sender_code_hash, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DelegationOperation[]
```

Get delegations

Returns a list of delegation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters delegations by any of the specified fields. Example: `anyof.prevDelegate.newDelegate=tz1...` will return operations where `prevDelegate` OR `newDelegate` is equal to the specified value. This parameter is useful when you need to retrieve all delegations associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters delegations by initiator. Allowed fields for `.eqx` mode: `prevDelegate`, `newDelegate`.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters delegations by sender. Allowed fields for `.eqx` mode: `prevDelegate`, `newDelegate`.
$prev_delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters delegations by prev delegate. Allowed fields for `.eqx` mode: `initiator`, `sender`, `newDelegate`.
$new_delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters delegations by new delegate. Allowed fields for `.eqx` mode: `initiator`, `sender`, `prevDelegate`.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters delegations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters delegations by timestamp.
$sender_code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by `senderCodeHash`.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters delegations by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts delegations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDelegations($anyof, $initiator, $sender, $prev_delegate, $new_delegate, $level, $timestamp, $sender_code_hash, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters delegations by any of the specified fields. Example: &#x60;anyof.prevDelegate.newDelegate&#x3D;tz1...&#x60; will return operations where &#x60;prevDelegate&#x60; OR &#x60;newDelegate&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all delegations associated with a specified account. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters delegations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;prevDelegate&#x60;, &#x60;newDelegate&#x60;. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters delegations by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;prevDelegate&#x60;, &#x60;newDelegate&#x60;. | [optional] |
| **prev_delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters delegations by prev delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;newDelegate&#x60;. | [optional] |
| **new_delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters delegations by new delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;prevDelegate&#x60;. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters delegations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters delegations by timestamp. | [optional] |
| **sender_code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters by &#x60;senderCodeHash&#x60;. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters delegations by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts delegations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DelegationOperation[]**](../Model/DelegationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDelegationsCount()`

```php
operationsGetDelegationsCount($level, $timestamp): int
```

Get delegations count

Returns the total number of delegation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters delegations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters delegations by timestamp.

try {
    $result = $apiInstance->operationsGetDelegationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDelegationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters delegations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters delegations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleBaking()`

```php
operationsGetDoubleBaking($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DoubleBakingOperation[]
```

Get double baking

Returns a list of double baking operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters double baking operations by any of the specified fields. Example: `anyof.accuser.offender=tz1...` will return operations where `accuser` OR `offender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$accuser = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters double baking operations by accuser. Allowed fields for `.eqx` mode: `offender`.
$offender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters double baking operations by offender. Allowed fields for `.eqx` mode: `accuser`.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters double baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters double baking operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts double baking operations by specified field. Supported fields: `id` (default), `level`, `accusedLevel`, `accuserRewards`, `offenderLostDeposits`, `offenderLostRewards`, `offenderLostFees`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleBaking($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleBaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters double baking operations by any of the specified fields. Example: &#x60;anyof.accuser.offender&#x3D;tz1...&#x60; will return operations where &#x60;accuser&#x60; OR &#x60;offender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **accuser** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters double baking operations by accuser. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;offender&#x60;. | [optional] |
| **offender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters double baking operations by offender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;accuser&#x60;. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters double baking operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters double baking operations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts double baking operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;accusedLevel&#x60;, &#x60;accuserRewards&#x60;, &#x60;offenderLostDeposits&#x60;, &#x60;offenderLostRewards&#x60;, &#x60;offenderLostFees&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DoubleBakingOperation[]**](../Model/DoubleBakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleBakingByHash()`

```php
operationsGetDoubleBakingByHash($hash, $quote): \Bzzhh\Tzkt\Model\DoubleBakingOperation[]
```

Get double baking by hash

Returns a double baking operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleBakingByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleBakingByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DoubleBakingOperation[]**](../Model/DoubleBakingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleBakingCount()`

```php
operationsGetDoubleBakingCount($level, $timestamp): int
```

Get double baking count

Returns the total number of double baking operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters double baking operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters double baking operations by timestamp.

try {
    $result = $apiInstance->operationsGetDoubleBakingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleBakingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters double baking operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters double baking operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleEndorsing()`

```php
operationsGetDoubleEndorsing($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]
```

Get double endorsing

Returns a list of double endorsing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters double endorsing operations by any of the specified fields. Example: `anyof.accuser.offender=tz1...` will return operations where `accuser` OR `offender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$accuser = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters double endorsing operations by accuser. Allowed fields for `.eqx` mode: `offender`.
$offender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters double endorsing operations by offender. Allowed fields for `.eqx` mode: `accuser`.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters double endorsing operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters double endorsing operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts double endorsing operations by specified field. Supported fields: `id` (default), `level`, `accusedLevel`, `accuserRewards`, `offenderLostDeposits`, `offenderLostRewards`, `offenderLostFees`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleEndorsing($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleEndorsing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters double endorsing operations by any of the specified fields. Example: &#x60;anyof.accuser.offender&#x3D;tz1...&#x60; will return operations where &#x60;accuser&#x60; OR &#x60;offender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **accuser** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters double endorsing operations by accuser. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;offender&#x60;. | [optional] |
| **offender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters double endorsing operations by offender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;accuser&#x60;. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters double endorsing operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters double endorsing operations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts double endorsing operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;accusedLevel&#x60;, &#x60;accuserRewards&#x60;, &#x60;offenderLostDeposits&#x60;, &#x60;offenderLostRewards&#x60;, &#x60;offenderLostFees&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]**](../Model/DoubleEndorsingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleEndorsingByHash()`

```php
operationsGetDoubleEndorsingByHash($hash, $quote): \Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]
```

Get double endorsing by hash

Returns a double endorsing operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoubleEndorsingByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleEndorsingByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DoubleEndorsingOperation[]**](../Model/DoubleEndorsingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoubleEndorsingCount()`

```php
operationsGetDoubleEndorsingCount($level, $timestamp): int
```

Get double endorsing count

Returns the total number of double endorsing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters double endorsing operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters double endorsing operations by timestamp.

try {
    $result = $apiInstance->operationsGetDoubleEndorsingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoubleEndorsingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters double endorsing operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters double endorsing operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoublePreendorsing()`

```php
operationsGetDoublePreendorsing($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DoublePreendorsingOperation[]
```

Get double preendorsing

Returns a list of double preendorsing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters by any of the specified fields. Example: `anyof.accuser.offender=tz1...` will return operations where `accuser` OR `offender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$accuser = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by accuser. Allowed fields for `.eqx` mode: `offender`.
$offender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by offender. Allowed fields for `.eqx` mode: `accuser`.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `accusedLevel`, `accuserRewards`, `offenderLostDeposits`, `offenderLostRewards`, `offenderLostFees`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoublePreendorsing($anyof, $accuser, $offender, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoublePreendorsing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters by any of the specified fields. Example: &#x60;anyof.accuser.offender&#x3D;tz1...&#x60; will return operations where &#x60;accuser&#x60; OR &#x60;offender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **accuser** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by accuser. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;offender&#x60;. | [optional] |
| **offender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by offender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;accuser&#x60;. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;accusedLevel&#x60;, &#x60;accuserRewards&#x60;, &#x60;offenderLostDeposits&#x60;, &#x60;offenderLostRewards&#x60;, &#x60;offenderLostFees&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DoublePreendorsingOperation[]**](../Model/DoublePreendorsingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoublePreendorsingByHash()`

```php
operationsGetDoublePreendorsingByHash($hash, $quote): \Bzzhh\Tzkt\Model\DoublePreendorsingOperation[]
```

Get double preendorsing by hash

Returns a double preendorsing operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDoublePreendorsingByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoublePreendorsingByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DoublePreendorsingOperation[]**](../Model/DoublePreendorsingOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDoublePreendorsingCount()`

```php
operationsGetDoublePreendorsingCount($level, $timestamp): int
```

Get double preendorsing count

Returns the total number of double preendorsing operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetDoublePreendorsingCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDoublePreendorsingCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDrainDelegateByHash()`

```php
operationsGetDrainDelegateByHash($hash, $quote): \Bzzhh\Tzkt\Model\DrainDelegateOperation[]
```

Get drain delegate by hash

Returns a drain delegate operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDrainDelegateByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDrainDelegateByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DrainDelegateOperation[]**](../Model/DrainDelegateOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDrainDelegateOps()`

```php
operationsGetDrainDelegateOps($anyof, $delegate, $target, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\DrainDelegateOperation[]
```

Get drain delegate

Returns a list of drain delegate operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filtersby any of the specified fields. Example: `anyof.delegate.target=tz1...` will return operations where `delegate` OR `target` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by drained baker. Allowed fields for `.eqx` mode: none.
$target = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by target. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetDrainDelegateOps($anyof, $delegate, $target, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDrainDelegateOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filtersby any of the specified fields. Example: &#x60;anyof.delegate.target&#x3D;tz1...&#x60; will return operations where &#x60;delegate&#x60; OR &#x60;target&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by drained baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **target** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by target. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\DrainDelegateOperation[]**](../Model/DrainDelegateOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetDrainDelegateOpsCount()`

```php
operationsGetDrainDelegateOpsCount($level, $timestamp): int
```

Get drain delegate count

Returns the total number of drain delegate operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetDrainDelegateOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetDrainDelegateOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsementByHash()`

```php
operationsGetEndorsementByHash($hash, $quote): \Bzzhh\Tzkt\Model\EndorsementOperation[]
```

Get endorsement by hash

Returns an endorsement operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetEndorsementByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsementByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\EndorsementOperation[]**](../Model/EndorsementOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsements()`

```php
operationsGetEndorsements($delegate, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\EndorsementOperation[]
```

Get endorsements

Returns a list of endorsement operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters endorsements by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters endorsements by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters endorsements by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts endorsements by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetEndorsements($delegate, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters endorsements by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters endorsements by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters endorsements by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts endorsements by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\EndorsementOperation[]**](../Model/EndorsementOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsementsCount()`

```php
operationsGetEndorsementsCount($level, $timestamp): int
```

Get endorsements count

Returns the total number of endorsement operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters endorsements by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters endorsements by timestamp.

try {
    $result = $apiInstance->operationsGetEndorsementsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsementsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters endorsements by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters endorsements by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsingRewardById()`

```php
operationsGetEndorsingRewardById($id, $quote): \Bzzhh\Tzkt\Model\EndorsingRewardOperation
```

Get endorsing reward by id

Returns endorsing reward operation with specified id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Operation id
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetEndorsingRewardById($id, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsingRewardById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Operation id | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\EndorsingRewardOperation**](../Model/EndorsingRewardOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsingRewards()`

```php
operationsGetEndorsingRewards($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\EndorsingRewardOperation[]
```

Get endorsing rewards

Returns a list of endorsing reward operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by baker. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetEndorsingRewards($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsingRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\EndorsingRewardOperation[]**](../Model/EndorsingRewardOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetEndorsingRewardsCount()`

```php
operationsGetEndorsingRewardsCount($level, $timestamp): int
```

Get endorsing rewards count

Returns the total number of endorsing reward operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetEndorsingRewardsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetEndorsingRewardsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetIncreasePaidStorageByHash()`

```php
operationsGetIncreasePaidStorageByHash($hash, $quote): \Bzzhh\Tzkt\Model\IncreasePaidStorageOperation[]
```

Get increase paid storage by hash

Returns increase paid storage operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetIncreasePaidStorageByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetIncreasePaidStorageByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\IncreasePaidStorageOperation[]**](../Model/IncreasePaidStorageOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetIncreasePaidStorageCount()`

```php
operationsGetIncreasePaidStorageCount($level, $timestamp): int
```

Get increase paid storage count

Returns the total number of increase paid storage operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters operations by timestamp.

try {
    $result = $apiInstance->operationsGetIncreasePaidStorageCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetIncreasePaidStorageCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetIncreasePaidStorageOps()`

```php
operationsGetIncreasePaidStorageOps($sender, $contract, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\IncreasePaidStorageOperation[]
```

Get increase paid storage

Returns a list of increase paid storage operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$contract = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by contract. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts operations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetIncreasePaidStorageOps($sender, $contract, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetIncreasePaidStorageOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **contract** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by contract. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\IncreasePaidStorageOperation[]**](../Model/IncreasePaidStorageOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetMigrationById()`

```php
operationsGetMigrationById($id, $micheline, $quote): \Bzzhh\Tzkt\Model\MigrationOperation
```

Get migration by id

Returns migration operation with specified id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Operation id
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetMigrationById($id, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetMigrationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Operation id | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\MigrationOperation**](../Model/MigrationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetMigrations()`

```php
operationsGetMigrations($account, $kind, $balance_change, $id, $level, $timestamp, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\MigrationOperation[]
```

Get migrations

Returns a list of migration operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters migration operations by account. Allowed fields for `.eqx` mode: none.
$kind = new \Bzzhh\Tzkt\Model\OperationsGetMigrationsKindParameter(); // OperationsGetMigrationsKindParameter | Filters migration operations by kind (`bootstrap`, `activate_delegate`, `airdrop`, `proposal_invoice`, `origination`, `subsidy`).
$balance_change = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filters migration operations by amount.
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filters migration operations by internal TzKT id.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters migration operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters migration operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts migrations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetMigrations($account, $kind, $balance_change, $id, $level, $timestamp, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetMigrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters migration operations by account. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **kind** | [**OperationsGetMigrationsKindParameter**](../Model/.md)| Filters migration operations by kind (&#x60;bootstrap&#x60;, &#x60;activate_delegate&#x60;, &#x60;airdrop&#x60;, &#x60;proposal_invoice&#x60;, &#x60;origination&#x60;, &#x60;subsidy&#x60;). | [optional] |
| **balance_change** | [**AccountsGetBalanceParameter**](../Model/.md)| Filters migration operations by amount. | [optional] |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filters migration operations by internal TzKT id. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters migration operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters migration operations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts migrations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\MigrationOperation[]**](../Model/MigrationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetMigrationsCount()`

```php
operationsGetMigrationsCount($level, $timestamp): int
```

Get migrations count

Returns the total number of migration operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters migrations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters migrations by timestamp.

try {
    $result = $apiInstance->operationsGetMigrationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetMigrationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters migrations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters migrations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetNonceRevelationByHash()`

```php
operationsGetNonceRevelationByHash($hash, $quote): \Bzzhh\Tzkt\Model\NonceRevelationOperation[]
```

Get nonce revelation by hash

Returns a seed nonce revelation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetNonceRevelationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetNonceRevelationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\NonceRevelationOperation[]**](../Model/NonceRevelationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetNonceRevelations()`

```php
operationsGetNonceRevelations($anyof, $baker, $sender, $level, $revealed_cycle, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\NonceRevelationOperation[]
```

Get nonce revelations

Returns a list of seed nonce revelation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters nonce revelation operations by any of the specified fields. Example: `anyof.baker.sender=tz1...` will return operations where `baker` OR `sender` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters nonce revelation operations by baker. Allowed fields for `.eqx` mode: `sender`.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters nonce revelation operations by sender. Allowed fields for `.eqx` mode: `baker`.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters nonce revelation operations by level.
$revealed_cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by cycle for which the nonce was revealed.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters nonce revelation operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts nonce revelation operations by specified field. Supported fields: `id` (default), `level`, `revealedLevel`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetNonceRevelations($anyof, $baker, $sender, $level, $revealed_cycle, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetNonceRevelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters nonce revelation operations by any of the specified fields. Example: &#x60;anyof.baker.sender&#x3D;tz1...&#x60; will return operations where &#x60;baker&#x60; OR &#x60;sender&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters nonce revelation operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;sender&#x60;. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters nonce revelation operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;baker&#x60;. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters nonce revelation operations by level. | [optional] |
| **revealed_cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filters by cycle for which the nonce was revealed. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters nonce revelation operations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts nonce revelation operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;revealedLevel&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\NonceRevelationOperation[]**](../Model/NonceRevelationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetNonceRevelationsCount()`

```php
operationsGetNonceRevelationsCount($level, $timestamp): int
```

Get nonce revelations count

Returns the total number of seed nonce revelation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters seed nonce revelation operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters seed nonce revelation operations by timestamp.

try {
    $result = $apiInstance->operationsGetNonceRevelationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetNonceRevelationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters seed nonce revelation operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters seed nonce revelation operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetOriginationByHash()`

```php
operationsGetOriginationByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\OriginationOperation[]
```

Get origination by hash

Returns origination operations with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\MichelineFormat(); // MichelineFormat | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetOriginationByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **micheline** | [**MichelineFormat**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\OriginationOperation[]**](../Model/OriginationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetOriginationStatus()`

```php
operationsGetOriginationStatus($hash): bool
```

Get origination status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetOriginationStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetOriginations()`

```php
operationsGetOriginations($anyof, $initiator, $sender, $contract_manager, $contract_delegate, $originated_contract, $id, $type_hash, $code_hash, $level, $timestamp, $sender_code_hash, $any_code_hash, $status, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\OriginationOperation[]
```

Get originations

Returns a list of origination operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters originations by any of the specified fields. Example: `anyof.sender.initiator=tz1...` will return operations where `sender` OR `initiator` is equal to the specified value. This parameter is useful when you need to retrieve all originations associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters origination operations by initiator. Allowed fields for `.eqx` mode: `contractManager`, `contractDelegate`.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters origination operations by sender. Allowed fields for `.eqx` mode: `contractManager`, `contractDelegate`.
$contract_manager = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters origination operations by manager. Allowed fields for `.eqx` mode: `initiator`, `sender`, `contractDelegate`.
$contract_delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters origination operations by delegate. Allowed fields for `.eqx` mode: `initiator`, `sender`, `contractManager`.
$originated_contract = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters origination operations by originated contract. Allowed fields for `.eqx` mode: none.
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filters origination operations by internal TzKT id
$type_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters origination operations by 32-bit hash of originated contract parameter and storage types (helpful for searching originations of similar contracts)
$code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters origination operations by 32-bit hash of originated contract code (helpful for searching originations of same contracts)
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters origination operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters origination operations by timestamp.
$sender_code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by `senderCodeHash`.
$any_code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by either `senderCodeHash` or `codeHash`.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters origination operations by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts originations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`, `allocationFee`, `contractBalance`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetOriginations($anyof, $initiator, $sender, $contract_manager, $contract_delegate, $originated_contract, $id, $type_hash, $code_hash, $level, $timestamp, $sender_code_hash, $any_code_hash, $status, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters originations by any of the specified fields. Example: &#x60;anyof.sender.initiator&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;initiator&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all originations associated with a specified account. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters origination operations by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;contractManager&#x60;, &#x60;contractDelegate&#x60;. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters origination operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;contractManager&#x60;, &#x60;contractDelegate&#x60;. | [optional] |
| **contract_manager** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters origination operations by manager. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;contractDelegate&#x60;. | [optional] |
| **contract_delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters origination operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;initiator&#x60;, &#x60;sender&#x60;, &#x60;contractManager&#x60;. | [optional] |
| **originated_contract** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters origination operations by originated contract. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filters origination operations by internal TzKT id | [optional] |
| **type_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters origination operations by 32-bit hash of originated contract parameter and storage types (helpful for searching originations of similar contracts) | [optional] |
| **code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters origination operations by 32-bit hash of originated contract code (helpful for searching originations of same contracts) | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters origination operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters origination operations by timestamp. | [optional] |
| **sender_code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters by &#x60;senderCodeHash&#x60;. | [optional] |
| **any_code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters by either &#x60;senderCodeHash&#x60; or &#x60;codeHash&#x60;. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters origination operations by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts originations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;, &#x60;allocationFee&#x60;, &#x60;contractBalance&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\OriginationOperation[]**](../Model/OriginationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetOriginationsCount()`

```php
operationsGetOriginationsCount($level, $timestamp): int
```

Get originations count

Returns the total number of origination operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters originations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters originations by timestamp.

try {
    $result = $apiInstance->operationsGetOriginationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetOriginationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters originations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters originations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetPreendorsementByHash()`

```php
operationsGetPreendorsementByHash($hash, $quote): \Bzzhh\Tzkt\Model\PreendorsementOperation[]
```

Get preendorsement by hash

Returns an preendorsement operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetPreendorsementByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetPreendorsementByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\PreendorsementOperation[]**](../Model/PreendorsementOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetPreendorsements()`

```php
operationsGetPreendorsements($delegate, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\PreendorsementOperation[]
```

Get preendorsements

Returns a list of preendorsement operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetPreendorsements($delegate, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetPreendorsements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\PreendorsementOperation[]**](../Model/PreendorsementOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetPreendorsementsCount()`

```php
operationsGetPreendorsementsCount($level, $timestamp): int
```

Get preendorsements count

Returns the total number of preendorsement operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetPreendorsementsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetPreendorsementsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetProposalByHash()`

```php
operationsGetProposalByHash($hash, $quote): \Bzzhh\Tzkt\Model\ProposalOperation[]
```

Get proposal by hash

Returns a proposal operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetProposalByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetProposalByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\ProposalOperation[]**](../Model/ProposalOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetProposals()`

```php
operationsGetProposals($delegate, $level, $timestamp, $epoch, $period, $proposal, $duplicated, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\ProposalOperation[]
```

Get proposals

Returns a list of proposal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters proposal operations by delegate. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters proposal operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters proposal operations by timestamp.
$epoch = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters proposal operations by voting epoch.
$period = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters proposal operations by voting period.
$proposal = new \Bzzhh\Tzkt\Model\OperationsGetBallotsProposalParameter(); // OperationsGetBallotsProposalParameter | Filters proposal operations by proposal hash.
$duplicated = new \Bzzhh\Tzkt\Model\AccountsGetStakedParameter(); // AccountsGetStakedParameter | Specify whether to include or exclude duplicates, which didn't actually upvote a proposal.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts proposal operations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetProposals($delegate, $level, $timestamp, $epoch, $period, $proposal, $duplicated, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetProposals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **delegate** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters proposal operations by delegate. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters proposal operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters proposal operations by timestamp. | [optional] |
| **epoch** | [**AccountsGetIdParameter**](../Model/.md)| Filters proposal operations by voting epoch. | [optional] |
| **period** | [**AccountsGetIdParameter**](../Model/.md)| Filters proposal operations by voting period. | [optional] |
| **proposal** | [**OperationsGetBallotsProposalParameter**](../Model/.md)| Filters proposal operations by proposal hash. | [optional] |
| **duplicated** | [**AccountsGetStakedParameter**](../Model/.md)| Specify whether to include or exclude duplicates, which didn&#39;t actually upvote a proposal. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts proposal operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\ProposalOperation[]**](../Model/ProposalOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetProposalsCount()`

```php
operationsGetProposalsCount($level, $timestamp): int
```

Get proposals count

Returns the total number of proposal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters proposal operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters proposal operations by timestamp.

try {
    $result = $apiInstance->operationsGetProposalsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetProposalsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters proposal operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters proposal operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRegisterConstantByHash()`

```php
operationsGetRegisterConstantByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\RegisterConstantOperation[]
```

Get register constant by hash

Returns register global constant operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the constant value: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRegisterConstantByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRegisterConstantByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the constant value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\RegisterConstantOperation[]**](../Model/RegisterConstantOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRegisterConstantStatus()`

```php
operationsGetRegisterConstantStatus($hash): bool
```

Get register constant status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetRegisterConstantStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRegisterConstantStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRegisterConstants()`

```php
operationsGetRegisterConstants($sender, $address, $level, $timestamp, $status, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\RegisterConstantOperation[]
```

Get register constants

Returns a list of register global constant operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters operations by sender. Allowed fields for `.eqx` mode: none.
$address = new \Bzzhh\Tzkt\Model\ConstantsGetAddressParameter(); // ConstantsGetAddressParameter | Filters operations by global address of the created constant (starts with `expr..`).
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters operations by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters operations by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts operations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the constant value: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRegisterConstants($sender, $address, $level, $timestamp, $status, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRegisterConstants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **address** | [**ConstantsGetAddressParameter**](../Model/.md)| Filters operations by global address of the created constant (starts with &#x60;expr..&#x60;). | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters operations by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters operations by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the constant value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\RegisterConstantOperation[]**](../Model/RegisterConstantOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRegisterConstantsCount()`

```php
operationsGetRegisterConstantsCount($level, $timestamp): int
```

Get register constants count

Returns the total number of register global constant operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters operations by timestamp.

try {
    $result = $apiInstance->operationsGetRegisterConstantsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRegisterConstantsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevealByHash()`

```php
operationsGetRevealByHash($hash, $quote): \Bzzhh\Tzkt\Model\RevealOperation[]
```

Get reveal by hash

Returns reveal operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRevealByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevealByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\RevealOperation[]**](../Model/RevealOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevealStatus()`

```php
operationsGetRevealStatus($hash): bool
```

Get reveal status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetRevealStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevealStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetReveals()`

```php
operationsGetReveals($sender, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\RevealOperation[]
```

Get reveals

Returns a list of reveal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters reveal operations by sender. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters reveal operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters reveal operations by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters reveal operations by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts reveals by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetReveals($sender, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetReveals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters reveal operations by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters reveal operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters reveal operations by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters reveal operations by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts reveals by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\RevealOperation[]**](../Model/RevealOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevealsCount()`

```php
operationsGetRevealsCount($level, $timestamp): int
```

Get reveals count

Returns the total number of reveal operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters reveals by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters reveals by timestamp.

try {
    $result = $apiInstance->operationsGetRevealsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevealsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters reveals by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters reveals by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevelationPenalties()`

```php
operationsGetRevelationPenalties($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\RevelationPenaltyOperation[]
```

Get revelation penalties

Returns a list of revelation penalty operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters revelation penalty operations by baker. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters revelation penalty operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters revelation penalty operations by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts revelation penalty operations by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRevelationPenalties($baker, $level, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevelationPenalties: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters revelation penalty operations by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters revelation penalty operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters revelation penalty operations by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts revelation penalty operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\RevelationPenaltyOperation[]**](../Model/RevelationPenaltyOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevelationPenaltiesCount()`

```php
operationsGetRevelationPenaltiesCount($level, $timestamp): int
```

Get revelation penalties count

Returns the total number of revelation penalty operations (synthetic type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters revelation penalty operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters revelation penalty operations by timestamp.

try {
    $result = $apiInstance->operationsGetRevelationPenaltiesCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevelationPenaltiesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters revelation penalty operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters revelation penalty operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetRevelationPenaltyById()`

```php
operationsGetRevelationPenaltyById($id, $quote): \Bzzhh\Tzkt\Model\RevelationPenaltyOperation
```

Get revelation penalty by id

Returns revelation penalty operation with specified id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Operation id
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetRevelationPenaltyById($id, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetRevelationPenaltyById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Operation id | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\RevelationPenaltyOperation**](../Model/RevelationPenaltyOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetSetDepositsLimitByHash()`

```php
operationsGetSetDepositsLimitByHash($hash, $quote): \Bzzhh\Tzkt\Model\SetDepositsLimitOperation[]
```

Get set deposits limit by hash

Returns set deposits limit operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetSetDepositsLimitByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetSetDepositsLimitByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SetDepositsLimitOperation[]**](../Model/SetDepositsLimitOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetSetDepositsLimitStatus()`

```php
operationsGetSetDepositsLimitStatus($hash): bool
```

Get set deposits limit status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetSetDepositsLimitStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetSetDepositsLimitStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetSetDepositsLimits()`

```php
operationsGetSetDepositsLimits($sender, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\SetDepositsLimitOperation[]
```

Get set deposits limits

Returns a list of set deposits limit operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetSetDepositsLimits($sender, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetSetDepositsLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\SetDepositsLimitOperation[]**](../Model/SetDepositsLimitOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetSetDepositsLimitsCount()`

```php
operationsGetSetDepositsLimitsCount($level, $timestamp): int
```

Get set deposits limits count

Returns the total number of set deposits limit operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetSetDepositsLimitsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetSetDepositsLimitsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetStatus()`

```php
operationsGetStatus($hash): bool
```

Get operation status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.   **NOTE: if you know in advance what operation type you want to check (e.g. transactions), prefer using `/v1/operations/{type}/{hash}/status` (e.g. [/v1/operations/transactions/{hash}/status](#operation/Operations_GetTransactionStatus)) instead, because it's much more efficient.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionByHash()`

```php
operationsGetTransactionByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transaction by hash

Returns transaction operations with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactionByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionByHashCounter()`

```php
operationsGetTransactionByHashCounter($hash, $counter, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transaction by hash and counter

Returns transaction operations with specified hash and counter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactionByHashCounter($hash, $counter, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionByHashCounter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **counter** | **int**| Operation counter | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionByHashCounterNonce()`

```php
operationsGetTransactionByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transaction by hash, counter and nonce

Returns an internal transaction operation with specified hash, counter and nonce.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$counter = 56; // int | Operation counter
$nonce = 56; // int | Operation nonce (internal)
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactionByHashCounterNonce($hash, $counter, $nonce, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionByHashCounterNonce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **counter** | **int**| Operation counter | |
| **nonce** | **int**| Operation nonce (internal) | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionStatus()`

```php
operationsGetTransactionStatus($hash): bool
```

Get transaction status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTransactionStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactions()`

```php
operationsGetTransactions($anyof, $initiator, $sender, $target, $amount, $id, $level, $timestamp, $sender_code_hash, $target_code_hash, $code_hash, $entrypoint, $parameter, $has_internals, $status, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\TransactionOperation[]
```

Get transactions

Returns a list of transaction operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters transactions by any of the specified fields. Example: `anyof.sender.target=tz1...` will return operations where `sender` OR `target` is equal to the specified value. This parameter is useful when you need to retrieve all transactions associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters transactions by initiator. Allowed fields for `.eqx` mode: `target`.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters transactions by sender. Allowed fields for `.eqx` mode: `target`.
$target = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters transactions by target. Allowed fields for `.eqx` mode: `sender`, `initiator`.
$amount = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filters transactions by amount (microtez).
$id = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filters transactions by id.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters transactions by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters transactions by timestamp.
$sender_code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by `senderCodeHash`.
$target_code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by `targetCodeHash`.
$code_hash = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by either `senderCodeHash` or `targetCodeHash`.
$entrypoint = new \Bzzhh\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // AccountsGetOperationsEntrypointParameter | Filters transactions by entrypoint called on the target contract.
$parameter = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filters transactions by parameter value. Note, this query parameter supports the following format: `?parameter{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?parameter.token_id=...` or `?parameter.sigs.0.ne=...`.             Also, note that `.value` part must be omitted in the path, so, for example, filtering by `parameter.value.foo` must be specified as `?parameter.foo=...`.
$has_internals = new \Bzzhh\Tzkt\Model\AccountsGetStakedParameter(); // AccountsGetStakedParameter | Filters transactions by presence of internal operations.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters transactions by operation status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts transactions by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`, `allocationFee`, `amount`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the parameters, storage and diffs: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransactions($anyof, $initiator, $sender, $target, $amount, $id, $level, $timestamp, $sender_code_hash, $target_code_hash, $code_hash, $entrypoint, $parameter, $has_internals, $status, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters transactions by any of the specified fields. Example: &#x60;anyof.sender.target&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;target&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all transactions associated with a specified account. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters transactions by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;target&#x60;. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters transactions by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;target&#x60;. | [optional] |
| **target** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;sender&#x60;, &#x60;initiator&#x60;. | [optional] |
| **amount** | [**AccountsGetBalanceParameter**](../Model/.md)| Filters transactions by amount (microtez). | [optional] |
| **id** | [**AccountsGetBalanceParameter**](../Model/.md)| Filters transactions by id. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters transactions by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters transactions by timestamp. | [optional] |
| **sender_code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters by &#x60;senderCodeHash&#x60;. | [optional] |
| **target_code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters by &#x60;targetCodeHash&#x60;. | [optional] |
| **code_hash** | [**AccountsGetIdParameter**](../Model/.md)| Filters by either &#x60;senderCodeHash&#x60; or &#x60;targetCodeHash&#x60;. | [optional] |
| **entrypoint** | [**AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filters transactions by entrypoint called on the target contract. | [optional] |
| **parameter** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;.             Also, note that &#x60;.value&#x60; part must be omitted in the path, so, for example, filtering by &#x60;parameter.value.foo&#x60; must be specified as &#x60;?parameter.foo&#x3D;...&#x60;. | [optional] |
| **has_internals** | [**AccountsGetStakedParameter**](../Model/.md)| Filters transactions by presence of internal operations. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters transactions by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts transactions by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;, &#x60;allocationFee&#x60;, &#x60;amount&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the parameters, storage and diffs: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TransactionOperation[]**](../Model/TransactionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransactionsCount()`

```php
operationsGetTransactionsCount($anyof, $initiator, $sender, $target, $level, $timestamp, $entrypoint, $parameter, $status): int
```

Get transactions count

Returns the total number of transaction operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters transactions by any of the specified fields. Example: `anyof.sender.target=tz1...` will return operations where `sender` OR `target` is equal to the specified value. This parameter is useful when you need to retrieve all transactions associated with a specified account.
$initiator = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters transactions by initiator. Allowed fields for `.eqx` mode: `target`.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters transactions by sender. Allowed fields for `.eqx` mode: `target`.
$target = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters transactions by target. Allowed fields for `.eqx` mode: `sender`, `initiator`.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters transactions by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters transactions by timestamp.
$entrypoint = new \Bzzhh\Tzkt\Model\AccountsGetOperationsEntrypointParameter(); // AccountsGetOperationsEntrypointParameter | Filters transactions by entrypoint called on the target contract.
$parameter = new \Bzzhh\Tzkt\Model\AccountsGetOperationsParameterParameter(); // AccountsGetOperationsParameterParameter | Filters transactions by parameter value. Note, this query parameter supports the following format: `?parameter{.path?}{.mode?}=...`,             so you can specify a path to a particular field to filter by, for example: `?parameter.token_id=...` or `?parameter.sigs.0.ne=...`.             Also, note that `.value` part must be omitted in the path, so, for example, filtering by `parameter.value.foo` must be specified as `?parameter.foo=...`.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters transactions by operation status (`applied`, `failed`, `backtracked`, `skipped`).

try {
    $result = $apiInstance->operationsGetTransactionsCount($anyof, $initiator, $sender, $target, $level, $timestamp, $entrypoint, $parameter, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransactionsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters transactions by any of the specified fields. Example: &#x60;anyof.sender.target&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;target&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all transactions associated with a specified account. | [optional] |
| **initiator** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters transactions by initiator. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;target&#x60;. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters transactions by sender. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;target&#x60;. | [optional] |
| **target** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters transactions by target. Allowed fields for &#x60;.eqx&#x60; mode: &#x60;sender&#x60;, &#x60;initiator&#x60;. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters transactions by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters transactions by timestamp. | [optional] |
| **entrypoint** | [**AccountsGetOperationsEntrypointParameter**](../Model/.md)| Filters transactions by entrypoint called on the target contract. | [optional] |
| **parameter** | [**AccountsGetOperationsParameterParameter**](../Model/.md)| Filters transactions by parameter value. Note, this query parameter supports the following format: &#x60;?parameter{.path?}{.mode?}&#x3D;...&#x60;,             so you can specify a path to a particular field to filter by, for example: &#x60;?parameter.token_id&#x3D;...&#x60; or &#x60;?parameter.sigs.0.ne&#x3D;...&#x60;.             Also, note that &#x60;.value&#x60; part must be omitted in the path, so, for example, filtering by &#x60;parameter.value.foo&#x60; must be specified as &#x60;?parameter.foo&#x3D;...&#x60;. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters transactions by operation status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransferTicketOps()`

```php
operationsGetTransferTicketOps($anyof, $sender, $target, $ticketer, $level, $timestamp, $status, $select, $sort, $offset, $limit, $micheline, $quote): \Bzzhh\Tzkt\Model\TransferTicketOperation[]
```

Get transfer ticket

Returns a list of transfer ticket operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters by any of the specified fields. Example: `anyof.sender.target=tz1...` will return operations where `sender` OR `target` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$target = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by target. Allowed fields for `.eqx` mode: none.
$ticketer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by ticketer. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the content value: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransferTicketOps($anyof, $sender, $target, $ticketer, $level, $timestamp, $status, $select, $sort, $offset, $limit, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransferTicketOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters by any of the specified fields. Example: &#x60;anyof.sender.target&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;target&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **target** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by target. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **ticketer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by ticketer. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the content value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TransferTicketOperation[]**](../Model/TransferTicketOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransferTicketOpsByHash()`

```php
operationsGetTransferTicketOpsByHash($hash, $micheline, $quote): \Bzzhh\Tzkt\Model\TransferTicketOperation[]
```

Get transfer ticket by hash

Returns transfer ticket operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$micheline = new \Bzzhh\Tzkt\Model\AccountsGetOperationsMichelineParameter(); // AccountsGetOperationsMichelineParameter | Format of the content value: `0` - JSON, `1` - JSON string, `2` - raw micheline, `3` - raw micheline string
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTransferTicketOpsByHash($hash, $micheline, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransferTicketOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **micheline** | [**AccountsGetOperationsMichelineParameter**](../Model/.md)| Format of the content value: &#x60;0&#x60; - JSON, &#x60;1&#x60; - JSON string, &#x60;2&#x60; - raw micheline, &#x60;3&#x60; - raw micheline string | [optional] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TransferTicketOperation[]**](../Model/TransferTicketOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransferTicketOpsCount()`

```php
operationsGetTransferTicketOpsCount($level, $timestamp): int
```

Get transfer ticket count

Returns the total number of transfer ticket operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTransferTicketOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransferTicketOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTransferTicketStatus()`

```php
operationsGetTransferTicketStatus($hash): bool
```

Get transfer ticket status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTransferTicketStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTransferTicketStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupCommitOps()`

```php
operationsGetTxRollupCommitOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupCommitOperation[]
```

Get tx rollup commit

Returns a list of tx rollup commit operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupCommitOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupCommitOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupCommitOperation[]**](../Model/TxRollupCommitOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupCommitOpsByHash()`

```php
operationsGetTxRollupCommitOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupCommitOperation[]
```

Get tx rollup commit by hash

Returns tx rollup commit operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupCommitOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupCommitOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupCommitOperation[]**](../Model/TxRollupCommitOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupCommitOpsCount()`

```php
operationsGetTxRollupCommitOpsCount($level, $timestamp): int
```

Get tx rollup commit count

Returns the total number of tx rollup commit operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupCommitOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupCommitOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupCommitStatus()`

```php
operationsGetTxRollupCommitStatus($hash): bool
```

Get tx rollup commit status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupCommitStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupCommitStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupDispatchTicketsOps()`

```php
operationsGetTxRollupDispatchTicketsOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupDispatchTicketsOperation[]
```

Get tx rollup dispatch tickets

Returns a list of tx rollup dispatch tickets operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupDispatchTicketsOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupDispatchTicketsOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupDispatchTicketsOperation[]**](../Model/TxRollupDispatchTicketsOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupDispatchTicketsOpsByHash()`

```php
operationsGetTxRollupDispatchTicketsOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupDispatchTicketsOperation[]
```

Get tx rollup dispatch tickets by hash

Returns tx rollup dispatch tickets operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupDispatchTicketsOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupDispatchTicketsOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupDispatchTicketsOperation[]**](../Model/TxRollupDispatchTicketsOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupDispatchTicketsOpsCount()`

```php
operationsGetTxRollupDispatchTicketsOpsCount($level, $timestamp): int
```

Get tx rollup dispatch tickets count

Returns the total number of tx rollup dispatch tickets operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupDispatchTicketsOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupDispatchTicketsOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupDispatchTicketsStatus()`

```php
operationsGetTxRollupDispatchTicketsStatus($hash): bool
```

Get tx rollup dispatch tickets status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupDispatchTicketsStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupDispatchTicketsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupFinalizeCommitmentOps()`

```php
operationsGetTxRollupFinalizeCommitmentOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupFinalizeCommitmentOperation[]
```

Get tx rollup finalize commitment

Returns a list of tx rollup finalize commitment operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupFinalizeCommitmentOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupFinalizeCommitmentOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupFinalizeCommitmentOperation[]**](../Model/TxRollupFinalizeCommitmentOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupFinalizeCommitmentOpsByHash()`

```php
operationsGetTxRollupFinalizeCommitmentOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupFinalizeCommitmentOperation[]
```

Get tx rollup finalize commitment by hash

Returns tx rollup finalize commitment operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupFinalizeCommitmentOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupFinalizeCommitmentOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupFinalizeCommitmentOperation[]**](../Model/TxRollupFinalizeCommitmentOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupFinalizeCommitmentOpsCount()`

```php
operationsGetTxRollupFinalizeCommitmentOpsCount($level, $timestamp): int
```

Get tx rollup finalize commitment count

Returns the total number of tx rollup finalize commitment operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupFinalizeCommitmentOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupFinalizeCommitmentOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupFinalizeCommitmentStatus()`

```php
operationsGetTxRollupFinalizeCommitmentStatus($hash): bool
```

Get tx rollup finalize commitment status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupFinalizeCommitmentStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupFinalizeCommitmentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupOriginationOps()`

```php
operationsGetTxRollupOriginationOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupOriginationOperation[]
```

Get tx rollup origination

Returns a list of tx rollup origination operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupOriginationOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupOriginationOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupOriginationOperation[]**](../Model/TxRollupOriginationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupOriginationOpsByHash()`

```php
operationsGetTxRollupOriginationOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupOriginationOperation[]
```

Get tx rollup origination by hash

Returns tx rollup origination operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupOriginationOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupOriginationOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupOriginationOperation[]**](../Model/TxRollupOriginationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupOriginationOpsCount()`

```php
operationsGetTxRollupOriginationOpsCount($level, $timestamp): int
```

Get tx rollup origination count

Returns the total number of tx rollup origination operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupOriginationOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupOriginationOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupOriginationStatus()`

```php
operationsGetTxRollupOriginationStatus($hash): bool
```

Get tx rollup origination status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupOriginationStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupOriginationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRejectionOps()`

```php
operationsGetTxRollupRejectionOps($anyof, $sender, $committer, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupRejectionOperation[]
```

Get tx rollup rejection

Returns a list of tx rollup rejection operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$anyof = new \Bzzhh\Tzkt\Model\BlocksGetAnyofParameter(); // BlocksGetAnyofParameter | Filters by any of the specified fields. Example: `anyof.sender.committer=tz1...` will return operations where `sender` OR `committer` is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account.
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$committer = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by committer. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupRejectionOps($anyof, $sender, $committer, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRejectionOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **anyof** | [**BlocksGetAnyofParameter**](../Model/.md)| Filters by any of the specified fields. Example: &#x60;anyof.sender.committer&#x3D;tz1...&#x60; will return operations where &#x60;sender&#x60; OR &#x60;committer&#x60; is equal to the specified value. This parameter is useful when you need to retrieve all operations associated with a specified account. | [optional] |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **committer** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by committer. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupRejectionOperation[]**](../Model/TxRollupRejectionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRejectionOpsByHash()`

```php
operationsGetTxRollupRejectionOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupRejectionOperation[]
```

Get tx rollup rejection by hash

Returns tx rollup rejection operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupRejectionOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRejectionOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupRejectionOperation[]**](../Model/TxRollupRejectionOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRejectionOpsCount()`

```php
operationsGetTxRollupRejectionOpsCount($level, $timestamp): int
```

Get tx rollup rejection count

Returns the total number of tx rollup rejection operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupRejectionOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRejectionOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRejectionStatus()`

```php
operationsGetTxRollupRejectionStatus($hash): bool
```

Get tx rollup rejection status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupRejectionStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRejectionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRemoveCommitmentOps()`

```php
operationsGetTxRollupRemoveCommitmentOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupRemoveCommitmentOperation[]
```

Get tx rollup remove commitment

Returns a list of tx rollup remove commitment operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupRemoveCommitmentOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRemoveCommitmentOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupRemoveCommitmentOperation[]**](../Model/TxRollupRemoveCommitmentOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRemoveCommitmentOpsByHash()`

```php
operationsGetTxRollupRemoveCommitmentOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupRemoveCommitmentOperation[]
```

Get tx rollup remove commitment by hash

Returns tx rollup remove commitment operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupRemoveCommitmentOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRemoveCommitmentOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupRemoveCommitmentOperation[]**](../Model/TxRollupRemoveCommitmentOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRemoveCommitmentOpsCount()`

```php
operationsGetTxRollupRemoveCommitmentOpsCount($level, $timestamp): int
```

Get tx rollup remove commitment count

Returns the total number of tx rollup remove commitment operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupRemoveCommitmentOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRemoveCommitmentOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupRemoveCommitmentStatus()`

```php
operationsGetTxRollupRemoveCommitmentStatus($hash): bool
```

Get tx rollup remove commitment status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupRemoveCommitmentStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupRemoveCommitmentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupReturnBondOps()`

```php
operationsGetTxRollupReturnBondOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupReturnBondOperation[]
```

Get tx rollup return bond

Returns a list of tx rollup return bond operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupReturnBondOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupReturnBondOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupReturnBondOperation[]**](../Model/TxRollupReturnBondOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupReturnBondOpsByHash()`

```php
operationsGetTxRollupReturnBondOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupReturnBondOperation[]
```

Get tx rollup return bond by hash

Returns tx rollup return bond operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupReturnBondOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupReturnBondOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupReturnBondOperation[]**](../Model/TxRollupReturnBondOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupReturnBondOpsCount()`

```php
operationsGetTxRollupReturnBondOpsCount($level, $timestamp): int
```

Get tx rollup return bond count

Returns the total number of tx rollup return bond operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupReturnBondOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupReturnBondOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupReturnBondStatus()`

```php
operationsGetTxRollupReturnBondStatus($hash): bool
```

Get tx rollup return bond status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupReturnBondStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupReturnBondStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupSubmitBatchOps()`

```php
operationsGetTxRollupSubmitBatchOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\TxRollupSubmitBatchOperation[]
```

Get tx rollup submit batch

Returns a list of tx rollup submit batch operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$rollup = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by rollup. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `bakerFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupSubmitBatchOps($sender, $rollup, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupSubmitBatchOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **rollup** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by rollup. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;bakerFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupSubmitBatchOperation[]**](../Model/TxRollupSubmitBatchOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupSubmitBatchOpsByHash()`

```php
operationsGetTxRollupSubmitBatchOpsByHash($hash, $quote): \Bzzhh\Tzkt\Model\TxRollupSubmitBatchOperation[]
```

Get tx rollup submit batch by hash

Returns tx rollup submit batch operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetTxRollupSubmitBatchOpsByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupSubmitBatchOpsByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\TxRollupSubmitBatchOperation[]**](../Model/TxRollupSubmitBatchOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupSubmitBatchOpsCount()`

```php
operationsGetTxRollupSubmitBatchOpsCount($level, $timestamp): int
```

Get tx rollup submit batch count

Returns the total number of tx rollup submit batch operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetTxRollupSubmitBatchOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupSubmitBatchOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetTxRollupSubmitBatchStatus()`

```php
operationsGetTxRollupSubmitBatchStatus($hash): bool
```

Get tx rollup submit batch status

Returns operation status: `true` if applied, `false` if failed, `null` (or HTTP 204) if doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash

try {
    $result = $apiInstance->operationsGetTxRollupSubmitBatchStatus($hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetTxRollupSubmitBatchStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetUpdateConsensusKeyByHash()`

```php
operationsGetUpdateConsensusKeyByHash($hash, $quote): \Bzzhh\Tzkt\Model\UpdateConsensusKeyOperation[]
```

Get update consensus key by hash

Returns update consensus key operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetUpdateConsensusKeyByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetUpdateConsensusKeyByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\UpdateConsensusKeyOperation[]**](../Model/UpdateConsensusKeyOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetUpdateConsensusKeyOps()`

```php
operationsGetUpdateConsensusKeyOps($sender, $activation_cycle, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\UpdateConsensusKeyOperation[]
```

Get update consensus key

Returns a list of update consensus key operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sender = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by sender. Allowed fields for `.eqx` mode: none.
$activation_cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by activation cycle. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$status = new \Bzzhh\Tzkt\Model\AccountsGetOperationsStatusParameter(); // AccountsGetOperationsStatusParameter | Filters by status (`applied`, `failed`, `backtracked`, `skipped`).
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts operations by specified field. Supported fields: `id` (default), `level`, `gasUsed`, `storageUsed`, `bakerFee`, `storageFee`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetUpdateConsensusKeyOps($sender, $activation_cycle, $level, $timestamp, $status, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetUpdateConsensusKeyOps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sender** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by sender. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **activation_cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filters by activation cycle. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **status** | [**AccountsGetOperationsStatusParameter**](../Model/.md)| Filters by status (&#x60;applied&#x60;, &#x60;failed&#x60;, &#x60;backtracked&#x60;, &#x60;skipped&#x60;). | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts operations by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;, &#x60;gasUsed&#x60;, &#x60;storageUsed&#x60;, &#x60;bakerFee&#x60;, &#x60;storageFee&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\UpdateConsensusKeyOperation[]**](../Model/UpdateConsensusKeyOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetUpdateConsensusKeyOpsCount()`

```php
operationsGetUpdateConsensusKeyOpsCount($level, $timestamp): int
```

Get update consensus key count

Returns the total number of update consensus key operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters operations by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters operations by timestamp.

try {
    $result = $apiInstance->operationsGetUpdateConsensusKeyOpsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetUpdateConsensusKeyOpsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters operations by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters operations by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetVdfRevelationByHash()`

```php
operationsGetVdfRevelationByHash($hash, $quote): \Bzzhh\Tzkt\Model\VdfRevelationOperation[]
```

Get vdf revelation by hash

Returns a vdf revelation operation with specified hash.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$hash = 'hash_example'; // string | Operation hash
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetVdfRevelationByHash($hash, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetVdfRevelationByHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **hash** | **string**| Operation hash | |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\VdfRevelationOperation[]**](../Model/VdfRevelationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetVdfRevelations()`

```php
operationsGetVdfRevelations($baker, $level, $cycle, $timestamp, $select, $sort, $offset, $limit, $quote): \Bzzhh\Tzkt\Model\VdfRevelationOperation[]
```

Get vdf revelations

Returns a list of vdf revelation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$baker = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters by baker. Allowed fields for `.eqx` mode: none.
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$cycle = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by cycle in which the operation was included.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts by specified field. Supported fields: `id` (default), `level`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return
$quote = new \Bzzhh\Tzkt\Model\AccountsGetOperationsQuoteParameter(); // AccountsGetOperationsQuoteParameter | Comma-separated list of ticker symbols to inject historical prices into response

try {
    $result = $apiInstance->operationsGetVdfRevelations($baker, $level, $cycle, $timestamp, $select, $sort, $offset, $limit, $quote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetVdfRevelations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baker** | [**AccountsGetDelegateParameter**](../Model/.md)| Filters by baker. Allowed fields for &#x60;.eqx&#x60; mode: none. | [optional] |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **cycle** | [**AccountsGetIdParameter**](../Model/.md)| Filters by cycle in which the operation was included. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |
| **select** | [**AccountsGetSelectParameter**](../Model/.md)| Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both &#x60;.fields&#x60; and &#x60;.values&#x60; modes. | [optional] |
| **sort** | [**AccountsGetSortParameter**](../Model/.md)| Sorts by specified field. Supported fields: &#x60;id&#x60; (default), &#x60;level&#x60;. | [optional] |
| **offset** | [**AccountsGetOffsetParameter**](../Model/.md)| Specifies which or how many items should be skipped | [optional] |
| **limit** | **int**| Maximum number of items to return | [optional] [default to 100] |
| **quote** | [**AccountsGetOperationsQuoteParameter**](../Model/.md)| Comma-separated list of ticker symbols to inject historical prices into response | [optional] |

### Return type

[**\Bzzhh\Tzkt\Model\VdfRevelationOperation[]**](../Model/VdfRevelationOperation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `operationsGetVdfRevelationsCount()`

```php
operationsGetVdfRevelationsCount($level, $timestamp): int
```

Get vdf revelations count

Returns the total number of vdf revelation operations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Bzzhh\Tzkt\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$level = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by level.
$timestamp = new \Bzzhh\Tzkt\Model\AccountsGetOperationsTimestampParameter(); // AccountsGetOperationsTimestampParameter | Filters by timestamp.

try {
    $result = $apiInstance->operationsGetVdfRevelationsCount($level, $timestamp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsGetVdfRevelationsCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **level** | [**AccountsGetIdParameter**](../Model/.md)| Filters by level. | [optional] |
| **timestamp** | [**AccountsGetOperationsTimestampParameter**](../Model/.md)| Filters by timestamp. | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
