# OpenAPIClient-php

# Introduction

TzKT Explorer provides a free REST-like API and WebSocket API for accessing detailed Tezos blockchain data and helps developers build more services and applications on top of Tezos.
TzKT is an open-source project, so you can easily clone and build it and use it as a self-hosted service to avoid any risks depending on third-party services.

TzKT API is available for the following Tezos networks with the following base URLs:

- Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))
- Edo2net: `https://api.edo2net.tzkt.io/` ([view docs](https://api.edo2net.tzkt.io))
- Florencenet: `https://api.florencenet.tzkt.io/` ([view docs](https://api.florencenet.tzkt.io))

We also provide a staging environment for testing newest features and pre-updating client applications before deploying to production:

- Mainnet staging: `https://staging.api.tzkt.io/` or `https://staging.api.mainnet.tzkt.io/` ([view docs](https://staging.api.tzkt.io))
- Edo2net staging: `https://staging.api.edo2net.tzkt.io/` ([view docs](https://staging.api.edo2net.tzkt.io))

Feel free to contact us if you have any questions or feature requests.
Your feedback really helps us make TzKT better!

- Email: hello@baking-bad.org
- Twitter: https://twitter.com/TezosBakingBad
- Telegram: [tg://resolve?domain=baking_bad_chat](tg://resolve?domain=baking_bad_chat)
- Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L

And don't forget to star TzKT project [on GitHub](https://github.com/baking-bad/tzkt) ;)

# Terms of Use

TzKT API is free for everyone and for both commercial and non-commercial usage.

If your application or service uses the TzKT API in any forms: directly on frontend or indirectly on backend,
you should mention that fact on your website or application by placing the label
**\"Powered by TzKT API\"** with a direct link to [tzkt.io](https://tzkt.io).

# Rate Limits

There will be no rate limits as long as our servers can handle the load without additional infrastructure costs.
However, any apparent abuse will be prevented by setting targeted rate limits.

Check out [Tezos Explorer API Best Practices](https://baking-bad.org/blog/tag/TzKT/)
and in particular [how to optimize requests count](https://baking-bad.org/blog/2020/07/29/tezos-explorer-api-tzkt-how-often-to-make-requests/).

---

For more information, please visit [https://baking-bad.org/docs](https://baking-bad.org/docs).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/bzzhh/tzkt-php-client.git"
    }
  ],
  "require": {
    "bzzhh/tzkt-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once "/path/to/OpenAPIClient-php/vendor/autoload.php";
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once __DIR__ . "/vendor/autoload.php";

$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
  // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
  // This is optional, `GuzzleHttp\Client` will be used as default.
  new GuzzleHttp\Client()
);
$type = new \Bzzhh\Tzkt\Model\OneOfAccountTypeParameter(); // OneOfAccountTypeParameter | Filters accounts by type (`user`, `delegate`, `contract`).
$kind = new \Bzzhh\Tzkt\Model\OneOfContractKindParameter(); // OneOfContractKindParameter | Filters accounts by contract kind (`delegator_contract` or `smart_contract`)
$delegate = new \Bzzhh\Tzkt\Model\OneOfAccountParameter(); // OneOfAccountParameter | Filters accounts by delegate. Allowed fields for `.eqx` mode: none.
$balance = new \Bzzhh\Tzkt\Model\OneOfInt64Parameter(); // OneOfInt64Parameter | Filters accounts by balance
$staked = new \Bzzhh\Tzkt\Model\OneOfBoolParameter(); // OneOfBoolParameter | Filters accounts by participation in staking
$last_activity = new \Bzzhh\Tzkt\Model\OneOfInt32Parameter(); // OneOfInt32Parameter | Filters accounts by last activity level (where the account was updated)
$select = new \Bzzhh\Tzkt\Model\OneOfSelectParameter(); // OneOfSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\OneOfSortParameter(); // OneOfSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `balance`, `firstActivity`, `lastActivity`, `numTransactions`, `numContracts`.
$offset = new \Bzzhh\Tzkt\Model\OneOfOffsetParameter(); // OneOfOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
  $result = $apiInstance->accountsGet(
    $type,
    $kind,
    $delegate,
    $balance,
    $staked,
    $last_activity,
    $select,
    $sort,
    $offset,
    $limit
  );
  print_r($result);
} catch (Exception $e) {
  echo "Exception when calling AccountsApi->accountsGet: ",
    $e->getMessage(),
    PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.tzkt.io*

| Class            | Method                                                                                                                 | HTTP request                                                                 | Description                                          |
| ---------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------- |
| _AccountsApi_    | [**accountsGet**](docs/Api/AccountsApi.md#accountsget)                                                                 | **GET** /v1/accounts                                                         | Get accounts                                         |
| _AccountsApi_    | [**accountsGetBalanceAtDate**](docs/Api/AccountsApi.md#accountsgetbalanceatdate)                                       | **GET** /v1/accounts/{address}/balance_history/{datetime}                    | Get balance at date                                  |
| _AccountsApi_    | [**accountsGetBalanceAtLevel**](docs/Api/AccountsApi.md#accountsgetbalanceatlevel)                                     | **GET** /v1/accounts/{address}/balance_history/{level}                       | Get balance at level                                 |
| _AccountsApi_    | [**accountsGetBalanceHistory**](docs/Api/AccountsApi.md#accountsgetbalancehistory)                                     | **GET** /v1/accounts/{address}/balance_history                               | Get balance history                                  |
| _AccountsApi_    | [**accountsGetBalanceReport**](docs/Api/AccountsApi.md#accountsgetbalancereport)                                       | **GET** /v1/accounts/{address}/report                                        | Get account report                                   |
| _AccountsApi_    | [**accountsGetByAddress**](docs/Api/AccountsApi.md#accountsgetbyaddress)                                               | **GET** /v1/accounts/{address}                                               | Get account by address                               |
| _AccountsApi_    | [**accountsGetContracts**](docs/Api/AccountsApi.md#accountsgetcontracts)                                               | **GET** /v1/accounts/{address}/contracts                                     | Get account contracts                                |
| _AccountsApi_    | [**accountsGetCount**](docs/Api/AccountsApi.md#accountsgetcount)                                                       | **GET** /v1/accounts/count                                                   | Get accounts count                                   |
| _AccountsApi_    | [**accountsGetDelegators**](docs/Api/AccountsApi.md#accountsgetdelegators)                                             | **GET** /v1/accounts/{address}/delegators                                    | Get account delegators                               |
| _AccountsApi_    | [**accountsGetMetadata**](docs/Api/AccountsApi.md#accountsgetmetadata)                                                 | **GET** /v1/accounts/{address}/metadata                                      | Get account metadata                                 |
| _AccountsApi_    | [**accountsGetOperations**](docs/Api/AccountsApi.md#accountsgetoperations)                                             | **GET** /v1/accounts/{address}/operations                                    | Get account operations                               |
| _BigMapsApi_     | [**bigMapsGetBigMapById**](docs/Api/BigMapsApi.md#bigmapsgetbigmapbyid)                                                | **GET** /v1/bigmaps/{id}                                                     | Get bigmap by Id                                     |
| _BigMapsApi_     | [**bigMapsGetBigMapType**](docs/Api/BigMapsApi.md#bigmapsgetbigmaptype)                                                | **GET** /v1/bigmaps/{id}/type                                                | Get bigmap type                                      |
| _BigMapsApi_     | [**bigMapsGetBigMapUpdates**](docs/Api/BigMapsApi.md#bigmapsgetbigmapupdates)                                          | **GET** /v1/bigmaps/updates                                                  | Get bigmap updates                                   |
| _BigMapsApi_     | [**bigMapsGetBigMaps**](docs/Api/BigMapsApi.md#bigmapsgetbigmaps)                                                      | **GET** /v1/bigmaps                                                          | Get bigmaps                                          |
| _BigMapsApi_     | [**bigMapsGetBigMapsCount**](docs/Api/BigMapsApi.md#bigmapsgetbigmapscount)                                            | **GET** /v1/bigmaps/count                                                    | Get bigmaps count                                    |
| _BigMapsApi_     | [**bigMapsGetHistoricalKeys**](docs/Api/BigMapsApi.md#bigmapsgethistoricalkeys)                                        | **GET** /v1/bigmaps/{id}/historical_keys/{level}                             | Get historical keys                                  |
| _BigMapsApi_     | [**bigMapsGetKey**](docs/Api/BigMapsApi.md#bigmapsgetkey)                                                              | **GET** /v1/bigmaps/{id}/keys/{key}                                          | Get bigmap key                                       |
| _BigMapsApi_     | [**bigMapsGetKey2**](docs/Api/BigMapsApi.md#bigmapsgetkey2)                                                            | **GET** /v1/bigmaps/{id}/historical_keys/{level}/{key}                       | Get historical key                                   |
| _BigMapsApi_     | [**bigMapsGetKeyUpdates**](docs/Api/BigMapsApi.md#bigmapsgetkeyupdates)                                                | **GET** /v1/bigmaps/{id}/keys/{key}/updates                                  | Get bigmap key updates                               |
| _BigMapsApi_     | [**bigMapsGetKeys**](docs/Api/BigMapsApi.md#bigmapsgetkeys)                                                            | **GET** /v1/bigmaps/{id}/keys                                                | Get bigmap keys                                      |
| _BlocksApi_      | [**blocksGet**](docs/Api/BlocksApi.md#blocksget)                                                                       | **GET** /v1/blocks                                                           | Get blocks                                           |
| _BlocksApi_      | [**blocksGetByHash**](docs/Api/BlocksApi.md#blocksgetbyhash)                                                           | **GET** /v1/blocks/{hash}                                                    | Get block by hash                                    |
| _BlocksApi_      | [**blocksGetByLevel**](docs/Api/BlocksApi.md#blocksgetbylevel)                                                         | **GET** /v1/blocks/{level}                                                   | Get block by level                                   |
| _BlocksApi_      | [**blocksGetCount**](docs/Api/BlocksApi.md#blocksgetcount)                                                             | **GET** /v1/blocks/count                                                     | Get blocks count                                     |
| _CommitmentsApi_ | [**commitmentsGet**](docs/Api/CommitmentsApi.md#commitmentsget)                                                        | **GET** /v1/commitments/{address}                                            | Get commitment by blinded address                    |
| _CommitmentsApi_ | [**commitmentsGetAll**](docs/Api/CommitmentsApi.md#commitmentsgetall)                                                  | **GET** /v1/commitments                                                      | Get commitments                                      |
| _CommitmentsApi_ | [**commitmentsGetCount**](docs/Api/CommitmentsApi.md#commitmentsgetcount)                                              | **GET** /v1/commitments/count                                                | Get commitments count                                |
| _ContractsApi_   | [**contractsBuildEntrypointParameters**](docs/Api/ContractsApi.md#contractsbuildentrypointparameters)                  | **GET** /v1/contracts/{address}/entrypoints/{name}/build                     | Build entrypoint parameters                          |
| _ContractsApi_   | [**contractsBuildEntrypointParameters2**](docs/Api/ContractsApi.md#contractsbuildentrypointparameters2)                | **POST** /v1/contracts/{address}/entrypoints/{name}/build                    | Build entrypoint parameters                          |
| _ContractsApi_   | [**contractsGet**](docs/Api/ContractsApi.md#contractsget)                                                              | **GET** /v1/contracts                                                        | Get contracts                                        |
| _ContractsApi_   | [**contractsGetBigMapByName**](docs/Api/ContractsApi.md#contractsgetbigmapbyname)                                      | **GET** /v1/contracts/{address}/bigmaps/{name}                               | Get bigmap by name                                   |
| _ContractsApi_   | [**contractsGetBigMapByNameKeys**](docs/Api/ContractsApi.md#contractsgetbigmapbynamekeys)                              | **GET** /v1/contracts/{address}/bigmaps/{name}/keys                          | Get bigmap keys                                      |
| _ContractsApi_   | [**contractsGetBigMaps**](docs/Api/ContractsApi.md#contractsgetbigmaps)                                                | **GET** /v1/contracts/{address}/bigmaps                                      | Get contract bigmaps                                 |
| _ContractsApi_   | [**contractsGetByAddress**](docs/Api/ContractsApi.md#contractsgetbyaddress)                                            | **GET** /v1/contracts/{address}                                              | Get contract by address                              |
| _ContractsApi_   | [**contractsGetCode**](docs/Api/ContractsApi.md#contractsgetcode)                                                      | **GET** /v1/contracts/{address}/code                                         | Get contract code                                    |
| _ContractsApi_   | [**contractsGetCount**](docs/Api/ContractsApi.md#contractsgetcount)                                                    | **GET** /v1/contracts/count                                                  | Get contracts count                                  |
| _ContractsApi_   | [**contractsGetEntrypointByName**](docs/Api/ContractsApi.md#contractsgetentrypointbyname)                              | **GET** /v1/contracts/{address}/entrypoints/{name}                           | Get entrypoint by name                               |
| _ContractsApi_   | [**contractsGetEntrypoints**](docs/Api/ContractsApi.md#contractsgetentrypoints)                                        | **GET** /v1/contracts/{address}/entrypoints                                  | Get contract entrypoints                             |
| _ContractsApi_   | [**contractsGetHistoricalKeys**](docs/Api/ContractsApi.md#contractsgethistoricalkeys)                                  | **GET** /v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}       | Get historical keys                                  |
| _ContractsApi_   | [**contractsGetInterface**](docs/Api/ContractsApi.md#contractsgetinterface)                                            | **GET** /v1/contracts/{address}/interface                                    | Get JSON Schema [2020-12] interface for the contract |
| _ContractsApi_   | [**contractsGetKey**](docs/Api/ContractsApi.md#contractsgetkey)                                                        | **GET** /v1/contracts/{address}/bigmaps/{name}/keys/{key}                    | Get bigmap key                                       |
| _ContractsApi_   | [**contractsGetKey2**](docs/Api/ContractsApi.md#contractsgetkey2)                                                      | **GET** /v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}/{key} | Get historical key                                   |
| _ContractsApi_   | [**contractsGetKeyUpdates**](docs/Api/ContractsApi.md#contractsgetkeyupdates)                                          | **GET** /v1/contracts/{address}/bigmaps/{name}/keys/{key}/updates            | Get bigmap key updates                               |
| _ContractsApi_   | [**contractsGetRawStorage**](docs/Api/ContractsApi.md#contractsgetrawstorage)                                          | **GET** /v1/contracts/{address}/storage/raw                                  | Get raw contract storage                             |
| _ContractsApi_   | [**contractsGetRawStorageHistory**](docs/Api/ContractsApi.md#contractsgetrawstoragehistory)                            | **GET** /v1/contracts/{address}/storage/raw/history                          | Get raw contract storage history                     |
| _ContractsApi_   | [**contractsGetRawStorageSchema**](docs/Api/ContractsApi.md#contractsgetrawstorageschema)                              | **GET** /v1/contracts/{address}/storage/raw/schema                           | Get raw contract storage schema                      |
| _ContractsApi_   | [**contractsGetStorage**](docs/Api/ContractsApi.md#contractsgetstorage)                                                | **GET** /v1/contracts/{address}/storage                                      | Get contract storage                                 |
| _ContractsApi_   | [**contractsGetStorageHistory**](docs/Api/ContractsApi.md#contractsgetstoragehistory)                                  | **GET** /v1/contracts/{address}/storage/history                              | Get contract storage history                         |
| _ContractsApi_   | [**contractsGetStorageSchema**](docs/Api/ContractsApi.md#contractsgetstorageschema)                                    | **GET** /v1/contracts/{address}/storage/schema                               | Get contract storage schema                          |
| _CyclesApi_      | [**cyclesGet**](docs/Api/CyclesApi.md#cyclesget)                                                                       | **GET** /v1/cycles                                                           | Get cycles                                           |
| _CyclesApi_      | [**cyclesGetByIndex**](docs/Api/CyclesApi.md#cyclesgetbyindex)                                                         | **GET** /v1/cycles/{index}                                                   | Get cycle by index                                   |
| _CyclesApi_      | [**cyclesGetCount**](docs/Api/CyclesApi.md#cyclesgetcount)                                                             | **GET** /v1/cycles/count                                                     | Get cycles count                                     |
| _DelegatesApi_   | [**delegatesGet**](docs/Api/DelegatesApi.md#delegatesget)                                                              | **GET** /v1/delegates                                                        | Get delegates                                        |
| _DelegatesApi_   | [**delegatesGetByAddress**](docs/Api/DelegatesApi.md#delegatesgetbyaddress)                                            | **GET** /v1/delegates/{address}                                              | Get delegate by address                              |
| _DelegatesApi_   | [**delegatesGetCount**](docs/Api/DelegatesApi.md#delegatesgetcount)                                                    | **GET** /v1/delegates/count                                                  | Get delegates count                                  |
| _HeadApi_        | [**headGet**](docs/Api/HeadApi.md#headget)                                                                             | **GET** /v1/head                                                             | Get indexer head                                     |
| _OperationsApi_  | [**operationsGetActivationByHash**](docs/Api/OperationsApi.md#operationsgetactivationbyhash)                           | **GET** /v1/operations/activations/{hash}                                    | Get activation by hash                               |
| _OperationsApi_  | [**operationsGetActivations**](docs/Api/OperationsApi.md#operationsgetactivations)                                     | **GET** /v1/operations/activations                                           | Get activations                                      |
| _OperationsApi_  | [**operationsGetActivationsCount**](docs/Api/OperationsApi.md#operationsgetactivationscount)                           | **GET** /v1/operations/activations/count                                     | Get activations count                                |
| _OperationsApi_  | [**operationsGetBaking**](docs/Api/OperationsApi.md#operationsgetbaking)                                               | **GET** /v1/operations/baking                                                | Get baking                                           |
| _OperationsApi_  | [**operationsGetBakingCount**](docs/Api/OperationsApi.md#operationsgetbakingcount)                                     | **GET** /v1/operations/baking/count                                          | Get baking count                                     |
| _OperationsApi_  | [**operationsGetBallotByHash**](docs/Api/OperationsApi.md#operationsgetballotbyhash)                                   | **GET** /v1/operations/ballots/{hash}                                        | Get ballot by hash                                   |
| _OperationsApi_  | [**operationsGetBallots**](docs/Api/OperationsApi.md#operationsgetballots)                                             | **GET** /v1/operations/ballots                                               | Get ballots                                          |
| _OperationsApi_  | [**operationsGetBallotsCount**](docs/Api/OperationsApi.md#operationsgetballotscount)                                   | **GET** /v1/operations/ballots/count                                         | Get ballots count                                    |
| _OperationsApi_  | [**operationsGetByHash**](docs/Api/OperationsApi.md#operationsgetbyhash)                                               | **GET** /v1/operations/{hash}                                                | Get operations by hash                               |
| _OperationsApi_  | [**operationsGetByHashCounter**](docs/Api/OperationsApi.md#operationsgetbyhashcounter)                                 | **GET** /v1/operations/{hash}/{counter}                                      | Get operations by hash and counter                   |
| _OperationsApi_  | [**operationsGetByHashCounterNonce**](docs/Api/OperationsApi.md#operationsgetbyhashcounternonce)                       | **GET** /v1/operations/{hash}/{counter}/{nonce}                              | Get operations by hash, counter and nonce            |
| _OperationsApi_  | [**operationsGetDelegationByHash**](docs/Api/OperationsApi.md#operationsgetdelegationbyhash)                           | **GET** /v1/operations/delegations/{hash}                                    | Get delegation by hash                               |
| _OperationsApi_  | [**operationsGetDelegations**](docs/Api/OperationsApi.md#operationsgetdelegations)                                     | **GET** /v1/operations/delegations                                           | Get delegations                                      |
| _OperationsApi_  | [**operationsGetDelegationsCount**](docs/Api/OperationsApi.md#operationsgetdelegationscount)                           | **GET** /v1/operations/delegations/count                                     | Get delegations count                                |
| _OperationsApi_  | [**operationsGetDoubleBaking**](docs/Api/OperationsApi.md#operationsgetdoublebaking)                                   | **GET** /v1/operations/double_baking                                         | Get double baking                                    |
| _OperationsApi_  | [**operationsGetDoubleBakingByHash**](docs/Api/OperationsApi.md#operationsgetdoublebakingbyhash)                       | **GET** /v1/operations/double_baking/{hash}                                  | Get double baking by hash                            |
| _OperationsApi_  | [**operationsGetDoubleBakingCount**](docs/Api/OperationsApi.md#operationsgetdoublebakingcount)                         | **GET** /v1/operations/double_baking/count                                   | Get double baking count                              |
| _OperationsApi_  | [**operationsGetDoubleEndorsing**](docs/Api/OperationsApi.md#operationsgetdoubleendorsing)                             | **GET** /v1/operations/double_endorsing                                      | Get double endorsing                                 |
| _OperationsApi_  | [**operationsGetDoubleEndorsingByHash**](docs/Api/OperationsApi.md#operationsgetdoubleendorsingbyhash)                 | **GET** /v1/operations/double_endorsing/{hash}                               | Get double endorsing by hash                         |
| _OperationsApi_  | [**operationsGetDoubleEndorsingCount**](docs/Api/OperationsApi.md#operationsgetdoubleendorsingcount)                   | **GET** /v1/operations/double_endorsing/count                                | Get double endorsing count                           |
| _OperationsApi_  | [**operationsGetEndorsementByHash**](docs/Api/OperationsApi.md#operationsgetendorsementbyhash)                         | **GET** /v1/operations/endorsements/{hash}                                   | Get endorsement by hash                              |
| _OperationsApi_  | [**operationsGetEndorsements**](docs/Api/OperationsApi.md#operationsgetendorsements)                                   | **GET** /v1/operations/endorsements                                          | Get endorsements                                     |
| _OperationsApi_  | [**operationsGetEndorsementsCount**](docs/Api/OperationsApi.md#operationsgetendorsementscount)                         | **GET** /v1/operations/endorsements/count                                    | Get endorsements count                               |
| _OperationsApi_  | [**operationsGetMigrations**](docs/Api/OperationsApi.md#operationsgetmigrations)                                       | **GET** /v1/operations/migrations                                            | Get migrations                                       |
| _OperationsApi_  | [**operationsGetMigrationsCount**](docs/Api/OperationsApi.md#operationsgetmigrationscount)                             | **GET** /v1/operations/migrations/count                                      | Get migrations count                                 |
| _OperationsApi_  | [**operationsGetNonceRevelationByHash**](docs/Api/OperationsApi.md#operationsgetnoncerevelationbyhash)                 | **GET** /v1/operations/nonce_revelations/{hash}                              | Get nonce revelation by hash                         |
| _OperationsApi_  | [**operationsGetNonceRevelations**](docs/Api/OperationsApi.md#operationsgetnoncerevelations)                           | **GET** /v1/operations/nonce_revelations                                     | Get nonce revelations                                |
| _OperationsApi_  | [**operationsGetNonceRevelationsCount**](docs/Api/OperationsApi.md#operationsgetnoncerevelationscount)                 | **GET** /v1/operations/nonce_revelations/count                               | Get nonce revelations count                          |
| _OperationsApi_  | [**operationsGetOriginationByHash**](docs/Api/OperationsApi.md#operationsgetoriginationbyhash)                         | **GET** /v1/operations/originations/{hash}                                   | Get origination by hash                              |
| _OperationsApi_  | [**operationsGetOriginations**](docs/Api/OperationsApi.md#operationsgetoriginations)                                   | **GET** /v1/operations/originations                                          | Get originations                                     |
| _OperationsApi_  | [**operationsGetOriginationsCount**](docs/Api/OperationsApi.md#operationsgetoriginationscount)                         | **GET** /v1/operations/originations/count                                    | Get originations count                               |
| _OperationsApi_  | [**operationsGetProposalByHash**](docs/Api/OperationsApi.md#operationsgetproposalbyhash)                               | **GET** /v1/operations/proposals/{hash}                                      | Get proposal by hash                                 |
| _OperationsApi_  | [**operationsGetProposals**](docs/Api/OperationsApi.md#operationsgetproposals)                                         | **GET** /v1/operations/proposals                                             | Get proposals                                        |
| _OperationsApi_  | [**operationsGetProposalsCount**](docs/Api/OperationsApi.md#operationsgetproposalscount)                               | **GET** /v1/operations/proposals/count                                       | Get proposals count                                  |
| _OperationsApi_  | [**operationsGetRevealByHash**](docs/Api/OperationsApi.md#operationsgetrevealbyhash)                                   | **GET** /v1/operations/reveals/{hash}                                        | Get reveal by hash                                   |
| _OperationsApi_  | [**operationsGetReveals**](docs/Api/OperationsApi.md#operationsgetreveals)                                             | **GET** /v1/operations/reveals                                               | Get reveals                                          |
| _OperationsApi_  | [**operationsGetRevealsCount**](docs/Api/OperationsApi.md#operationsgetrevealscount)                                   | **GET** /v1/operations/reveals/count                                         | Get reveals count                                    |
| _OperationsApi_  | [**operationsGetRevelationPenalties**](docs/Api/OperationsApi.md#operationsgetrevelationpenalties)                     | **GET** /v1/operations/revelation_penalties                                  | Get revelation penalties                             |
| _OperationsApi_  | [**operationsGetRevelationPenaltiesCount**](docs/Api/OperationsApi.md#operationsgetrevelationpenaltiescount)           | **GET** /v1/operations/revelation_penalties/count                            | Get revelation penalties count                       |
| _OperationsApi_  | [**operationsGetTransactionByHash**](docs/Api/OperationsApi.md#operationsgettransactionbyhash)                         | **GET** /v1/operations/transactions/{hash}                                   | Get transaction by hash                              |
| _OperationsApi_  | [**operationsGetTransactionByHashCounter**](docs/Api/OperationsApi.md#operationsgettransactionbyhashcounter)           | **GET** /v1/operations/transactions/{hash}/{counter}                         | Get transaction by hash and counter                  |
| _OperationsApi_  | [**operationsGetTransactionByHashCounterNonce**](docs/Api/OperationsApi.md#operationsgettransactionbyhashcounternonce) | **GET** /v1/operations/transactions/{hash}/{counter}/{nonce}                 | Get transaction by hash, counter and nonce           |
| _OperationsApi_  | [**operationsGetTransactions**](docs/Api/OperationsApi.md#operationsgettransactions)                                   | **GET** /v1/operations/transactions                                          | Get transactions                                     |
| _OperationsApi_  | [**operationsGetTransactionsCount**](docs/Api/OperationsApi.md#operationsgettransactionscount)                         | **GET** /v1/operations/transactions/count                                    | Get transactions count                               |
| _ProtocolsApi_   | [**protocolsGet**](docs/Api/ProtocolsApi.md#protocolsget)                                                              | **GET** /v1/protocols                                                        | Get protocols                                        |
| _ProtocolsApi_   | [**protocolsGetByCode**](docs/Api/ProtocolsApi.md#protocolsgetbycode)                                                  | **GET** /v1/protocols/{code}                                                 | Get protocol by code                                 |
| _ProtocolsApi_   | [**protocolsGetByCycle**](docs/Api/ProtocolsApi.md#protocolsgetbycycle)                                                | **GET** /v1/protocols/cycles/{cycle}                                         | Get protocol by cycle                                |
| _ProtocolsApi_   | [**protocolsGetByHash**](docs/Api/ProtocolsApi.md#protocolsgetbyhash)                                                  | **GET** /v1/protocols/{hash}                                                 | Get protocol by hash                                 |
| _ProtocolsApi_   | [**protocolsGetCount**](docs/Api/ProtocolsApi.md#protocolsgetcount)                                                    | **GET** /v1/protocols/count                                                  | Get protocols count                                  |
| _ProtocolsApi_   | [**protocolsGetCurrent**](docs/Api/ProtocolsApi.md#protocolsgetcurrent)                                                | **GET** /v1/protocols/current                                                | Get current protocol                                 |
| _QuotesApi_      | [**quotesGet**](docs/Api/QuotesApi.md#quotesget)                                                                       | **GET** /v1/quotes                                                           | Get quotes                                           |
| _QuotesApi_      | [**quotesGetCount**](docs/Api/QuotesApi.md#quotesgetcount)                                                             | **GET** /v1/quotes/count                                                     | Get quotes count                                     |
| _QuotesApi_      | [**quotesGetLast**](docs/Api/QuotesApi.md#quotesgetlast)                                                               | **GET** /v1/quotes/last                                                      | Get last quote                                       |
| _RewardsApi_     | [**rewardsGetBakerRewards**](docs/Api/RewardsApi.md#rewardsgetbakerrewards)                                            | **GET** /v1/rewards/bakers/{address}                                         | Get baker cycle rewards                              |
| _RewardsApi_     | [**rewardsGetBakerRewardsByCycle**](docs/Api/RewardsApi.md#rewardsgetbakerrewardsbycycle)                              | **GET** /v1/rewards/bakers/{address}/{cycle}                                 | Get baker cycle rewards by cycle                     |
| _RewardsApi_     | [**rewardsGetBakerRewardsCount**](docs/Api/RewardsApi.md#rewardsgetbakerrewardscount)                                  | **GET** /v1/rewards/bakers/{address}/count                                   | Get baker cycle rewards count                        |
| _RewardsApi_     | [**rewardsGetDelegatorRewards**](docs/Api/RewardsApi.md#rewardsgetdelegatorrewards)                                    | **GET** /v1/rewards/delegators/{address}                                     | Get delegator cycle rewards                          |
| _RewardsApi_     | [**rewardsGetDelegatorRewardsByCycle**](docs/Api/RewardsApi.md#rewardsgetdelegatorrewardsbycycle)                      | **GET** /v1/rewards/delegators/{address}/{cycle}                             | Get delegator cycle rewards by cycle                 |
| _RewardsApi_     | [**rewardsGetDelegatorRewardsCount**](docs/Api/RewardsApi.md#rewardsgetdelegatorrewardscount)                          | **GET** /v1/rewards/delegators/{address}/count                               | Get delegator cycle rewards count                    |
| _RewardsApi_     | [**rewardsGetRewardSplit**](docs/Api/RewardsApi.md#rewardsgetrewardsplit)                                              | **GET** /v1/rewards/split/{address}/{cycle}                                  | Get reward split                                     |
| _RewardsApi_     | [**rewardsGetRewardSplitDelegator**](docs/Api/RewardsApi.md#rewardsgetrewardsplitdelegator)                            | **GET** /v1/rewards/split/{baker}/{cycle}/{delegator}                        | Get reward split delegator                           |
| _RightsApi_      | [**rightsGet**](docs/Api/RightsApi.md#rightsget)                                                                       | **GET** /v1/rights                                                           | Get rights                                           |
| _RightsApi_      | [**rightsGetCount**](docs/Api/RightsApi.md#rightsgetcount)                                                             | **GET** /v1/rights/count                                                     | Get rights count                                     |
| _SoftwareApi_    | [**softwareGet**](docs/Api/SoftwareApi.md#softwareget)                                                                 | **GET** /v1/software                                                         | Get baker software                                   |
| _SoftwareApi_    | [**softwareGetCount**](docs/Api/SoftwareApi.md#softwaregetcount)                                                       | **GET** /v1/software/count                                                   | Get software count                                   |
| _StatisticsApi_  | [**statisticsGet**](docs/Api/StatisticsApi.md#statisticsget)                                                           | **GET** /v1/statistics                                                       | Get statistics                                       |
| _StatisticsApi_  | [**statisticsGetCycles**](docs/Api/StatisticsApi.md#statisticsgetcycles)                                               | **GET** /v1/statistics/current                                               | Get current statistics                               |
| _StatisticsApi_  | [**statisticsGetCyclesAll**](docs/Api/StatisticsApi.md#statisticsgetcyclesall)                                         | **GET** /v1/statistics/cyclic                                                | Get cyclic statistics                                |
| _StatisticsApi_  | [**statisticsGetDaily**](docs/Api/StatisticsApi.md#statisticsgetdaily)                                                 | **GET** /v1/statistics/daily                                                 | Get daily statistics                                 |
| _SuggestApi_     | [**suggestGetAccounts**](docs/Api/SuggestApi.md#suggestgetaccounts)                                                    | **GET** /v1/suggest/accounts/{search}                                        | Suggest accounts                                     |
| _SuggestApi_     | [**suggestGetProposals**](docs/Api/SuggestApi.md#suggestgetproposals)                                                  | **GET** /v1/suggest/proposals/{search}                                       | Suggest proposals                                    |
| _SuggestApi_     | [**suggestGetProtocols**](docs/Api/SuggestApi.md#suggestgetprotocols)                                                  | **GET** /v1/suggest/protocols/{search}                                       | Suggest protocols                                    |
| _VotingApi_      | [**votingGetCurrentEpoch**](docs/Api/VotingApi.md#votinggetcurrentepoch)                                               | **GET** /v1/voting/epochs/current                                            | Get current voting epoch                             |
| _VotingApi_      | [**votingGetCurrentPeriod**](docs/Api/VotingApi.md#votinggetcurrentperiod)                                             | **GET** /v1/voting/periods/current                                           | Get current voting period                            |
| _VotingApi_      | [**votingGetEpoch**](docs/Api/VotingApi.md#votinggetepoch)                                                             | **GET** /v1/voting/epochs/{index}                                            | Get voting epoch by index                            |
| _VotingApi_      | [**votingGetEpochs**](docs/Api/VotingApi.md#votinggetepochs)                                                           | **GET** /v1/voting/epochs                                                    | Get voting epochs                                    |
| _VotingApi_      | [**votingGetLatestVoting**](docs/Api/VotingApi.md#votinggetlatestvoting)                                               | **GET** /v1/voting/epochs/latest_voting                                      | Get latest voting                                    |
| _VotingApi_      | [**votingGetPeriod**](docs/Api/VotingApi.md#votinggetperiod)                                                           | **GET** /v1/voting/periods/{index}                                           | Get voting period by index                           |
| _VotingApi_      | [**votingGetPeriodVoter**](docs/Api/VotingApi.md#votinggetperiodvoter)                                                 | **GET** /v1/voting/periods/{index}/voters/{address}                          | Get period voter                                     |
| _VotingApi_      | [**votingGetPeriodVoter2**](docs/Api/VotingApi.md#votinggetperiodvoter2)                                               | **GET** /v1/voting/periods/current/voters/{address}                          | Get current period voter                             |
| _VotingApi_      | [**votingGetPeriodVoters**](docs/Api/VotingApi.md#votinggetperiodvoters)                                               | **GET** /v1/voting/periods/current/voters                                    | Get current period voters                            |
| _VotingApi_      | [**votingGetPeriodVotersAll**](docs/Api/VotingApi.md#votinggetperiodvotersall)                                         | **GET** /v1/voting/periods/{index}/voters                                    | Get period voters                                    |
| _VotingApi_      | [**votingGetPeriods**](docs/Api/VotingApi.md#votinggetperiods)                                                         | **GET** /v1/voting/periods                                                   | Get voting periods                                   |
| _VotingApi_      | [**votingGetProposalByHash**](docs/Api/VotingApi.md#votinggetproposalbyhash)                                           | **GET** /v1/voting/proposals/{hash}                                          | Get proposal by hash                                 |
| _VotingApi_      | [**votingGetProposals**](docs/Api/VotingApi.md#votinggetproposals)                                                     | **GET** /v1/voting/proposals                                                 | Get proposals                                        |
| _VotingApi_      | [**votingGetProposalsCount**](docs/Api/VotingApi.md#votinggetproposalscount)                                           | **GET** /v1/voting/proposals/count                                           | Get proposals count                                  |

## Models

- [Account](docs/Model/Account.md)
- [AccountMetadata](docs/Model/AccountMetadata.md)
- [AccountMetadataAlias](docs/Model/AccountMetadataAlias.md)
- [AccountParameter](docs/Model/AccountParameter.md)
- [AccountTypeParameter](docs/Model/AccountTypeParameter.md)
- [ActivationOperation](docs/Model/ActivationOperation.md)
- [ActivationOperationAllOf](docs/Model/ActivationOperationAllOf.md)
- [Alias](docs/Model/Alias.md)
- [AnnotationType](docs/Model/AnnotationType.md)
- [BakerRewards](docs/Model/BakerRewards.md)
- [BakingOperation](docs/Model/BakingOperation.md)
- [BakingOperationAllOf](docs/Model/BakingOperationAllOf.md)
- [BakingRight](docs/Model/BakingRight.md)
- [BakingRightStatusParameter](docs/Model/BakingRightStatusParameter.md)
- [BakingRightTypeParameter](docs/Model/BakingRightTypeParameter.md)
- [BalanceTooLowError](docs/Model/BalanceTooLowError.md)
- [BalanceTooLowErrorAllOf](docs/Model/BalanceTooLowErrorAllOf.md)
- [BallotOperation](docs/Model/BallotOperation.md)
- [BallotOperationAllOf](docs/Model/BallotOperationAllOf.md)
- [BaseOperationError](docs/Model/BaseOperationError.md)
- [BaseOperationErrorAllOf](docs/Model/BaseOperationErrorAllOf.md)
- [BigMap](docs/Model/BigMap.md)
- [BigMapActionParameter](docs/Model/BigMapActionParameter.md)
- [BigMapDiff](docs/Model/BigMapDiff.md)
- [BigMapInterface](docs/Model/BigMapInterface.md)
- [BigMapKey](docs/Model/BigMapKey.md)
- [BigMapKeyHistorical](docs/Model/BigMapKeyHistorical.md)
- [BigMapKeyShort](docs/Model/BigMapKeyShort.md)
- [BigMapKeyUpdate](docs/Model/BigMapKeyUpdate.md)
- [BigMapTag](docs/Model/BigMapTag.md)
- [BigMapTagsParameter](docs/Model/BigMapTagsParameter.md)
- [BigMapUpdate](docs/Model/BigMapUpdate.md)
- [Block](docs/Model/Block.md)
- [BoolParameter](docs/Model/BoolParameter.md)
- [Commitment](docs/Model/Commitment.md)
- [Contract](docs/Model/Contract.md)
- [ContractAllOf](docs/Model/ContractAllOf.md)
- [ContractInterface](docs/Model/ContractInterface.md)
- [ContractKindParameter](docs/Model/ContractKindParameter.md)
- [CreatorInfo](docs/Model/CreatorInfo.md)
- [Cycle](docs/Model/Cycle.md)
- [DateTimeParameter](docs/Model/DateTimeParameter.md)
- [Delegate](docs/Model/Delegate.md)
- [DelegateAllOf](docs/Model/DelegateAllOf.md)
- [DelegateInfo](docs/Model/DelegateInfo.md)
- [DelegationOperation](docs/Model/DelegationOperation.md)
- [DelegationOperationAllOf](docs/Model/DelegationOperationAllOf.md)
- [Delegator](docs/Model/Delegator.md)
- [DelegatorRewards](docs/Model/DelegatorRewards.md)
- [DoubleBakingOperation](docs/Model/DoubleBakingOperation.md)
- [DoubleBakingOperationAllOf](docs/Model/DoubleBakingOperationAllOf.md)
- [DoubleEndorsingOperation](docs/Model/DoubleEndorsingOperation.md)
- [DoubleEndorsingOperationAllOf](docs/Model/DoubleEndorsingOperationAllOf.md)
- [EmptyAccount](docs/Model/EmptyAccount.md)
- [EmptyAccountAllOf](docs/Model/EmptyAccountAllOf.md)
- [EndorsementOperation](docs/Model/EndorsementOperation.md)
- [EndorsementOperationAllOf](docs/Model/EndorsementOperationAllOf.md)
- [Entrypoint](docs/Model/Entrypoint.md)
- [EntrypointInterface](docs/Model/EntrypointInterface.md)
- [HistoricalBalance](docs/Model/HistoricalBalance.md)
- [IAnnotation](docs/Model/IAnnotation.md)
- [IMicheline](docs/Model/IMicheline.md)
- [Int32NullParameter](docs/Model/Int32NullParameter.md)
- [Int32Parameter](docs/Model/Int32Parameter.md)
- [Int64Parameter](docs/Model/Int64Parameter.md)
- [JsonParameter](docs/Model/JsonParameter.md)
- [JsonPath](docs/Model/JsonPath.md)
- [JsonPathType](docs/Model/JsonPathType.md)
- [ManagerInfo](docs/Model/ManagerInfo.md)
- [MichelineFormat](docs/Model/MichelineFormat.md)
- [MichelinePrim](docs/Model/MichelinePrim.md)
- [MichelineType](docs/Model/MichelineType.md)
- [MigrationKindParameter](docs/Model/MigrationKindParameter.md)
- [MigrationOperation](docs/Model/MigrationOperation.md)
- [MigrationOperationAllOf](docs/Model/MigrationOperationAllOf.md)
- [NonExistingContractError](docs/Model/NonExistingContractError.md)
- [NonExistingContractErrorAllOf](docs/Model/NonExistingContractErrorAllOf.md)
- [NonceRevelationOperation](docs/Model/NonceRevelationOperation.md)
- [NonceRevelationOperationAllOf](docs/Model/NonceRevelationOperationAllOf.md)
- [OffsetParameter](docs/Model/OffsetParameter.md)
- [Operation](docs/Model/Operation.md)
- [OperationError](docs/Model/OperationError.md)
- [OperationStatusParameter](docs/Model/OperationStatusParameter.md)
- [OriginatedContract](docs/Model/OriginatedContract.md)
- [OriginationOperation](docs/Model/OriginationOperation.md)
- [OriginationOperationAllOf](docs/Model/OriginationOperationAllOf.md)
- [PeriodInfo](docs/Model/PeriodInfo.md)
- [PrimType](docs/Model/PrimType.md)
- [Proposal](docs/Model/Proposal.md)
- [ProposalAlias](docs/Model/ProposalAlias.md)
- [ProposalMetadata](docs/Model/ProposalMetadata.md)
- [ProposalMetadataAlias](docs/Model/ProposalMetadataAlias.md)
- [ProposalOperation](docs/Model/ProposalOperation.md)
- [ProposalOperationAllOf](docs/Model/ProposalOperationAllOf.md)
- [Protocol](docs/Model/Protocol.md)
- [ProtocolConstants](docs/Model/ProtocolConstants.md)
- [ProtocolMetadata](docs/Model/ProtocolMetadata.md)
- [ProtocolMetadataAlias](docs/Model/ProtocolMetadataAlias.md)
- [ProtocolParameter](docs/Model/ProtocolParameter.md)
- [Quote](docs/Model/Quote.md)
- [QuoteShort](docs/Model/QuoteShort.md)
- [RawJson](docs/Model/RawJson.md)
- [RelatedContract](docs/Model/RelatedContract.md)
- [RevealOperation](docs/Model/RevealOperation.md)
- [RevealOperationAllOf](docs/Model/RevealOperationAllOf.md)
- [RevelationPenaltyOperation](docs/Model/RevelationPenaltyOperation.md)
- [RevelationPenaltyOperationAllOf](docs/Model/RevelationPenaltyOperationAllOf.md)
- [RewardSplit](docs/Model/RewardSplit.md)
- [SelectParameter](docs/Model/SelectParameter.md)
- [Software](docs/Model/Software.md)
- [SoftwareAlias](docs/Model/SoftwareAlias.md)
- [SortMode](docs/Model/SortMode.md)
- [SortParameter](docs/Model/SortParameter.md)
- [SourceOperation](docs/Model/SourceOperation.md)
- [SplitDelegator](docs/Model/SplitDelegator.md)
- [State](docs/Model/State.md)
- [Statistics](docs/Model/Statistics.md)
- [StorageRecord](docs/Model/StorageRecord.md)
- [StringParameter](docs/Model/StringParameter.md)
- [Symbols](docs/Model/Symbols.md)
- [TimestampParameter](docs/Model/TimestampParameter.md)
- [TransactionOperation](docs/Model/TransactionOperation.md)
- [TransactionOperationAllOf](docs/Model/TransactionOperationAllOf.md)
- [TxParameter](docs/Model/TxParameter.md)
- [UnregisteredDelegateError](docs/Model/UnregisteredDelegateError.md)
- [UnregisteredDelegateErrorAllOf](docs/Model/UnregisteredDelegateErrorAllOf.md)
- [User](docs/Model/User.md)
- [UserAllOf](docs/Model/UserAllOf.md)
- [ValueTupleOfJsonPathOfAndString](docs/Model/ValueTupleOfJsonPathOfAndString.md)
- [VoterSnapshot](docs/Model/VoterSnapshot.md)
- [VoterStatusParameter](docs/Model/VoterStatusParameter.md)
- [VotingEpoch](docs/Model/VotingEpoch.md)
- [VotingPeriod](docs/Model/VotingPeriod.md)

## Authorization

All endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@baking-bad.org

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.5`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
