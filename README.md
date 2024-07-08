# OpenAPIClient-php

# Introduction

TzKT is the most widely used tool in Tezos that provides you with convenient and flexible access to the Tezos blockchain data, processed and indexed by its own indexer. 
You can fetch all historical data via REST API, or subscribe for real-time data via WebSocket API. TzKT was built by the joint efforts of the entire Tezos community 
to help developers build more services and dapps on top of Tezos.

TzKT Indexer and API are [open-source](https://github.com/baking-bad/tzkt), so don't be afraid to depend on the third-party service,
because you can always clone, build and run it yourself to have full control over all the components.

Feel free to contact us if you have any questions or feature requests.
Your feedback is much appreciated!

- Discord: https://discord.gg/aG8XKuwsQd
- Telegram: https://t.me/baking_bad_chat
- Slack: https://tezos-dev.slack.com/archives/CV5NX7F2L
- Twitter: https://twitter.com/TezosBakingBad
- Email: hello@bakingbad.dev

And don't forget to star TzKT [on GitHub](https://github.com/baking-bad/tzkt) if you like it 😊

# Get Started

There are two API services provided for public use:
- **Free TzKT API** with free anonymous access;
- **TzKT Pro** with paid subscriptions with increased rate limits, off-chain data, extended support and business-level SLA.

You can find more details about differences between available tiers [here](https://tzkt.io/api).

## Free TzKT API

Free-tier TzKT API is the best way to get started and explore available Tezos data and API functionality.
It doesn't require authorization and is free for everyone and for both commercial and non-commercial use.

> #### Note: attribution required
If you use free-tier TzKT API, you **must** mention it on your website or application by placing the label
\"Powered by TzKT API\", or \"Built with TzKT API\", or \"Data provided by TzKT API\" with a direct link to [tzkt.io](https://tzkt.io).

It's available for the following Tezos networks with the following base URLs:

- Mainnet: `https://api.tzkt.io/` or `https://api.mainnet.tzkt.io/` ([view docs](https://api.tzkt.io))
- Ghostnet: `https://api.ghostnet.tzkt.io/` ([view docs](https://api.ghostnet.tzkt.io))
- Parisnet: `https://api.parisnet.tzkt.io/` ([view docs](https://api.parisnet.tzkt.io))

### Sending Requests

To send a request to Free TzKT API you need literally nothing. Just take the base URL of the particular network
(for example, Tezos mainnet: `https://api.tzkt.io`) and append the path of the particular endpoint
(for example, chain's head: `/v1/head`), that's pretty much it: 

```bash
curl https://api.tzkt.io/v1/head
```

Read through this documentation to explore available endpoints, query parameters
(note, if you click on a query parameter, you will see available modes, such as `.eq`, `.in`, etc.)
and response models. If you have any questions, do not hesitate to ask for support, Tezos community has always been very friendly! 😉

### Rate Limits

Please, refer to https://tzkt.io/api to check relevant rate limits.

If you exceed the limit, the API will respond with `HTTP 429` status code.

## TzKT Pro

TzKT Pro is intended for professional use, for those who seek for extended capabilities, performance, reliability and business-level SLA.
TzKT Pro service is provided via paid subscriptions. Please, refer to [Pricing Plans](https://tzkt.io/api) to check available tiers.

It's available for the following Tezos networks with the following base URLs:

- Mainnet: `https://pro.tzkt.io/` ([view docs](https://api.tzkt.io))
- Testnets: *let us know if you need TzKT Pro for testnets*

### Authorization

To access TzKT Pro you will need to authorize requests with your personal API key, that you will receive on your email after purchasing a subscription.
This can be done by adding the query string parameter `?apikey={your_key}` or by adding the HTTP header `apikey: {your_key}`.

Note that you can have multiple API keys within a single subscription.

Keep your API keys private, do not publish it anywhere and do not hardcode it, especially in public repositories.
If your key was compromised, just let us know and we will issue a new one.

Also note that passing the API key via HTTP headers is more secure, because in HTTPS headers are encrypted,
but query string is not, so the key can be unintentionally exposed to third parties.

### Sending Requests

Sending a request with the API key passed as a query string parameter:

```bash
curl https://pro.tzkt.io/v1/head?apikey={your_key}
```

Sending a request with the API key passed via an HTTP header:

```bash
curl https://pro.tzkt.io/v1/head \\
    -H 'apikey: {your_key}'
```

### Rate Limits

Please, refer to https://tzkt.io/api to check relevant rate limits for different pricing plans.

Also, TzKT Pro provides you with the additional HTTP headers to show the allowed limits, number of available requests
and the time remaining (in seconds) until the quota is reset. Here's an example:

```
RateLimit-Limit: 50
RateLimit-Remaining: 49
RateLimit-Reset: 1
```

It also sends general information about your rate limits per second and per day:

```
X-RateLimit-Limit-Second: 50
X-RateLimit-Remaining-Second: 49
X-RateLimit-Limit-Day: 3000000
X-RateLimit-Remaining-Day: 2994953
```

If you exceed the limit, the API will respond with `HTTP 429` status code.


For more information, please visit [https://bakingbad.dev](https://bakingbad.dev).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Bzzhh\Tzkt\Api\AccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters by internal id.
$address = new \Bzzhh\Tzkt\Model\AccountsGetAddressParameter(); // AccountsGetAddressParameter | Filters by address.
$type = new \Bzzhh\Tzkt\Model\AccountsGetTypeParameter(); // AccountsGetTypeParameter | Filters accounts by type (`user`, `delegate`, `contract`, `rollup`, `smart_rollup`, `ghost`).
$kind = new \Bzzhh\Tzkt\Model\AccountsGetKindParameter(); // AccountsGetKindParameter | Filters accounts by contract kind (`delegator_contract` or `smart_contract`)
$delegate = new \Bzzhh\Tzkt\Model\AccountsGetDelegateParameter(); // AccountsGetDelegateParameter | Filters accounts by delegate. Allowed fields for `.eqx` mode: none.
$staked_pseudotokens = new \Bzzhh\Tzkt\Model\AccountsGetStakedPseudotokensParameter(); // AccountsGetStakedPseudotokensParameter | Filters accounts by amount of staked pseudotokens.
$balance = new \Bzzhh\Tzkt\Model\AccountsGetBalanceParameter(); // AccountsGetBalanceParameter | Filters accounts by balance
$staked = new \Bzzhh\Tzkt\Model\AccountsGetStakedParameter(); // AccountsGetStakedParameter | Filters accounts by participation in staking
$last_activity = new \Bzzhh\Tzkt\Model\AccountsGetIdParameter(); // AccountsGetIdParameter | Filters accounts by last activity level (where the account was updated)
$select = new \Bzzhh\Tzkt\Model\AccountsGetSelectParameter(); // AccountsGetSelectParameter | Specify comma-separated list of fields to include into response or leave it undefined to return full object. If you select single field, response will be an array of values in both `.fields` and `.values` modes.
$sort = new \Bzzhh\Tzkt\Model\AccountsGetSortParameter(); // AccountsGetSortParameter | Sorts delegators by specified field. Supported fields: `id` (default), `balance`, `rollupBonds`, `firstActivity`, `lastActivity`, `numTransactions`, `numContracts`.
$offset = new \Bzzhh\Tzkt\Model\AccountsGetOffsetParameter(); // AccountsGetOffsetParameter | Specifies which or how many items should be skipped
$limit = 100; // int | Maximum number of items to return

try {
    $result = $apiInstance->accountsGet($id, $address, $type, $kind, $delegate, $staked_pseudotokens, $balance, $staked, $last_activity, $select, $sort, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.tzkt.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsApi* | [**accountsGet**](docs/Api/AccountsApi.md#accountsget) | **GET** /v1/accounts | Get accounts
*AccountsApi* | [**accountsGetBalance**](docs/Api/AccountsApi.md#accountsgetbalance) | **GET** /v1/accounts/{address}/balance | Get balance
*AccountsApi* | [**accountsGetBalanceAtDate**](docs/Api/AccountsApi.md#accountsgetbalanceatdate) | **GET** /v1/accounts/{address}/balance_history/{datetime} | Get balance at date
*AccountsApi* | [**accountsGetBalanceAtLevel**](docs/Api/AccountsApi.md#accountsgetbalanceatlevel) | **GET** /v1/accounts/{address}/balance_history/{level} | Get balance at level
*AccountsApi* | [**accountsGetBalanceHistory**](docs/Api/AccountsApi.md#accountsgetbalancehistory) | **GET** /v1/accounts/{address}/balance_history | Get balance history
*AccountsApi* | [**accountsGetBalanceReport**](docs/Api/AccountsApi.md#accountsgetbalancereport) | **GET** /v1/accounts/{address}/report | Get account report
*AccountsApi* | [**accountsGetByAddress**](docs/Api/AccountsApi.md#accountsgetbyaddress) | **GET** /v1/accounts/{address} | Get account by address
*AccountsApi* | [**accountsGetContracts**](docs/Api/AccountsApi.md#accountsgetcontracts) | **GET** /v1/accounts/{address}/contracts | Get account contracts
*AccountsApi* | [**accountsGetCount**](docs/Api/AccountsApi.md#accountsgetcount) | **GET** /v1/accounts/count | Get accounts count
*AccountsApi* | [**accountsGetCounter**](docs/Api/AccountsApi.md#accountsgetcounter) | **GET** /v1/accounts/{address}/counter | Get counter
*AccountsApi* | [**accountsGetDelegators**](docs/Api/AccountsApi.md#accountsgetdelegators) | **GET** /v1/accounts/{address}/delegators | Get account delegators
*AccountsApi* | [**accountsGetOperations**](docs/Api/AccountsApi.md#accountsgetoperations) | **GET** /v1/accounts/{address}/operations | Get account operations
*BigMapsApi* | [**bigMapsGetBigMapById**](docs/Api/BigMapsApi.md#bigmapsgetbigmapbyid) | **GET** /v1/bigmaps/{id} | Get bigmap by Id
*BigMapsApi* | [**bigMapsGetBigMapKeys**](docs/Api/BigMapsApi.md#bigmapsgetbigmapkeys) | **GET** /v1/bigmaps/keys | Get bigmap keys
*BigMapsApi* | [**bigMapsGetBigMapType**](docs/Api/BigMapsApi.md#bigmapsgetbigmaptype) | **GET** /v1/bigmaps/{id}/type | Get bigmap type
*BigMapsApi* | [**bigMapsGetBigMapUpdates**](docs/Api/BigMapsApi.md#bigmapsgetbigmapupdates) | **GET** /v1/bigmaps/updates/count | Get bigmap updates count
*BigMapsApi* | [**bigMapsGetBigMapUpdates2**](docs/Api/BigMapsApi.md#bigmapsgetbigmapupdates2) | **GET** /v1/bigmaps/updates | Get bigmap updates
*BigMapsApi* | [**bigMapsGetBigMaps**](docs/Api/BigMapsApi.md#bigmapsgetbigmaps) | **GET** /v1/bigmaps | Get bigmaps
*BigMapsApi* | [**bigMapsGetBigMapsCount**](docs/Api/BigMapsApi.md#bigmapsgetbigmapscount) | **GET** /v1/bigmaps/count | Get bigmaps count
*BigMapsApi* | [**bigMapsGetHistoricalKeys**](docs/Api/BigMapsApi.md#bigmapsgethistoricalkeys) | **GET** /v1/bigmaps/{id}/historical_keys/{level} | Get historical keys
*BigMapsApi* | [**bigMapsGetKey**](docs/Api/BigMapsApi.md#bigmapsgetkey) | **GET** /v1/bigmaps/{id}/keys/{key} | Get bigmap key
*BigMapsApi* | [**bigMapsGetKey2**](docs/Api/BigMapsApi.md#bigmapsgetkey2) | **GET** /v1/bigmaps/{id}/historical_keys/{level}/{key} | Get historical key
*BigMapsApi* | [**bigMapsGetKeyUpdates**](docs/Api/BigMapsApi.md#bigmapsgetkeyupdates) | **GET** /v1/bigmaps/{id}/keys/{key}/updates | Get bigmap key updates
*BigMapsApi* | [**bigMapsGetKeys**](docs/Api/BigMapsApi.md#bigmapsgetkeys) | **GET** /v1/bigmaps/{id}/keys | Get bigmap keys
*BlocksApi* | [**blocksGet**](docs/Api/BlocksApi.md#blocksget) | **GET** /v1/blocks | Get blocks
*BlocksApi* | [**blocksGetByDate**](docs/Api/BlocksApi.md#blocksgetbydate) | **GET** /v1/blocks/{timestamp} | Get block by timestamp
*BlocksApi* | [**blocksGetByDate2**](docs/Api/BlocksApi.md#blocksgetbydate2) | **GET** /v1/blocks/{timestamp}/level | Get level by timestamp
*BlocksApi* | [**blocksGetByHash**](docs/Api/BlocksApi.md#blocksgetbyhash) | **GET** /v1/blocks/{hash} | Get block by hash
*BlocksApi* | [**blocksGetByLevel**](docs/Api/BlocksApi.md#blocksgetbylevel) | **GET** /v1/blocks/{level} | Get block by level
*BlocksApi* | [**blocksGetByLevel2**](docs/Api/BlocksApi.md#blocksgetbylevel2) | **GET** /v1/blocks/{level}/timestamp | Get timestamp by level
*BlocksApi* | [**blocksGetCount**](docs/Api/BlocksApi.md#blocksgetcount) | **GET** /v1/blocks/count | Get blocks count
*CommitmentsApi* | [**commitmentsGet**](docs/Api/CommitmentsApi.md#commitmentsget) | **GET** /v1/commitments/{address} | Get commitment by blinded address
*CommitmentsApi* | [**commitmentsGetAll**](docs/Api/CommitmentsApi.md#commitmentsgetall) | **GET** /v1/commitments | Get commitments
*CommitmentsApi* | [**commitmentsGetCount**](docs/Api/CommitmentsApi.md#commitmentsgetcount) | **GET** /v1/commitments/count | Get commitments count
*ConstantsApi* | [**constantsGet**](docs/Api/ConstantsApi.md#constantsget) | **GET** /v1/constants | Get global constants
*ConstantsApi* | [**constantsGetByAddress**](docs/Api/ConstantsApi.md#constantsgetbyaddress) | **GET** /v1/constants/{address} | Get global constant by address
*ConstantsApi* | [**constantsGetCount**](docs/Api/ConstantsApi.md#constantsgetcount) | **GET** /v1/constants/count | Get global constants count
*ContractsApi* | [**contractsBuildEntrypointParametersGET**](docs/Api/ContractsApi.md#contractsbuildentrypointparametersget) | **GET** /v1/contracts/{address}/entrypoints/{name}/build | Build entrypoint parameters
*ContractsApi* | [**contractsBuildEntrypointParametersPOST**](docs/Api/ContractsApi.md#contractsbuildentrypointparameterspost) | **POST** /v1/contracts/{address}/entrypoints/{name}/build | Build entrypoint parameters
*ContractsApi* | [**contractsGet**](docs/Api/ContractsApi.md#contractsget) | **GET** /v1/contracts | Get contracts
*ContractsApi* | [**contractsGetBigMapByName**](docs/Api/ContractsApi.md#contractsgetbigmapbyname) | **GET** /v1/contracts/{address}/bigmaps/{name} | Get bigmap by name
*ContractsApi* | [**contractsGetBigMapByNameKeys**](docs/Api/ContractsApi.md#contractsgetbigmapbynamekeys) | **GET** /v1/contracts/{address}/bigmaps/{name}/keys | Get bigmap keys
*ContractsApi* | [**contractsGetBigMaps**](docs/Api/ContractsApi.md#contractsgetbigmaps) | **GET** /v1/contracts/{address}/bigmaps | Get contract bigmaps
*ContractsApi* | [**contractsGetByAddress**](docs/Api/ContractsApi.md#contractsgetbyaddress) | **GET** /v1/contracts/{address} | Get contract by address
*ContractsApi* | [**contractsGetCode**](docs/Api/ContractsApi.md#contractsgetcode) | **GET** /v1/contracts/{address}/code | Get contract code
*ContractsApi* | [**contractsGetContractViewByName**](docs/Api/ContractsApi.md#contractsgetcontractviewbyname) | **GET** /v1/contracts/{address}/views/{name} | Get view by name
*ContractsApi* | [**contractsGetContractViews**](docs/Api/ContractsApi.md#contractsgetcontractviews) | **GET** /v1/contracts/{address}/views | Get contract views
*ContractsApi* | [**contractsGetCount**](docs/Api/ContractsApi.md#contractsgetcount) | **GET** /v1/contracts/count | Get contracts count
*ContractsApi* | [**contractsGetEntrypointByName**](docs/Api/ContractsApi.md#contractsgetentrypointbyname) | **GET** /v1/contracts/{address}/entrypoints/{name} | Get entrypoint by name
*ContractsApi* | [**contractsGetEntrypoints**](docs/Api/ContractsApi.md#contractsgetentrypoints) | **GET** /v1/contracts/{address}/entrypoints | Get contract entrypoints
*ContractsApi* | [**contractsGetHistoricalKeys**](docs/Api/ContractsApi.md#contractsgethistoricalkeys) | **GET** /v1/contracts/{address}/bigmaps/{name}/historical_keys/{level} | Get historical keys
*ContractsApi* | [**contractsGetInterface**](docs/Api/ContractsApi.md#contractsgetinterface) | **GET** /v1/contracts/{address}/interface | Get JSON Schema [2020-12] interface for the contract
*ContractsApi* | [**contractsGetKey**](docs/Api/ContractsApi.md#contractsgetkey) | **GET** /v1/contracts/{address}/bigmaps/{name}/keys/{key} | Get bigmap key
*ContractsApi* | [**contractsGetKey2**](docs/Api/ContractsApi.md#contractsgetkey2) | **GET** /v1/contracts/{address}/bigmaps/{name}/historical_keys/{level}/{key} | Get historical key
*ContractsApi* | [**contractsGetKeyUpdates**](docs/Api/ContractsApi.md#contractsgetkeyupdates) | **GET** /v1/contracts/{address}/bigmaps/{name}/keys/{key}/updates | Get bigmap key updates
*ContractsApi* | [**contractsGetRawStorage**](docs/Api/ContractsApi.md#contractsgetrawstorage) | **GET** /v1/contracts/{address}/storage/raw | Get raw contract storage
*ContractsApi* | [**contractsGetRawStorageHistory**](docs/Api/ContractsApi.md#contractsgetrawstoragehistory) | **GET** /v1/contracts/{address}/storage/raw/history | Get raw contract storage history
*ContractsApi* | [**contractsGetRawStorageSchema**](docs/Api/ContractsApi.md#contractsgetrawstorageschema) | **GET** /v1/contracts/{address}/storage/raw/schema | Get raw contract storage schema
*ContractsApi* | [**contractsGetSame**](docs/Api/ContractsApi.md#contractsgetsame) | **GET** /v1/contracts/{address}/same | Get same contracts
*ContractsApi* | [**contractsGetSimilar**](docs/Api/ContractsApi.md#contractsgetsimilar) | **GET** /v1/contracts/{address}/similar | Get similar contracts
*ContractsApi* | [**contractsGetStorage**](docs/Api/ContractsApi.md#contractsgetstorage) | **GET** /v1/contracts/{address}/storage | Get contract storage
*ContractsApi* | [**contractsGetStorageHistory**](docs/Api/ContractsApi.md#contractsgetstoragehistory) | **GET** /v1/contracts/{address}/storage/history | Get contract storage history
*ContractsApi* | [**contractsGetStorageSchema**](docs/Api/ContractsApi.md#contractsgetstorageschema) | **GET** /v1/contracts/{address}/storage/schema | Get contract storage schema
*CyclesApi* | [**cyclesGet**](docs/Api/CyclesApi.md#cyclesget) | **GET** /v1/cycles | Get cycles
*CyclesApi* | [**cyclesGetByIndex**](docs/Api/CyclesApi.md#cyclesgetbyindex) | **GET** /v1/cycles/{index} | Get cycle by index
*CyclesApi* | [**cyclesGetCount**](docs/Api/CyclesApi.md#cyclesgetcount) | **GET** /v1/cycles/count | Get cycles count
*DelegatesApi* | [**delegatesGet**](docs/Api/DelegatesApi.md#delegatesget) | **GET** /v1/delegates | Get delegates
*DelegatesApi* | [**delegatesGetByAddress**](docs/Api/DelegatesApi.md#delegatesgetbyaddress) | **GET** /v1/delegates/{address} | Get delegate by address
*DelegatesApi* | [**delegatesGetCount**](docs/Api/DelegatesApi.md#delegatesgetcount) | **GET** /v1/delegates/count | Get delegates count
*DomainsApi* | [**domainsGet**](docs/Api/DomainsApi.md#domainsget) | **GET** /v1/domains | Get domains
*DomainsApi* | [**domainsGetByName**](docs/Api/DomainsApi.md#domainsgetbyname) | **GET** /v1/domains/{name} | Get domain by name
*DomainsApi* | [**domainsGetCount**](docs/Api/DomainsApi.md#domainsgetcount) | **GET** /v1/domains/count | Get domains count
*EventsApi* | [**eventsGetContractEvents**](docs/Api/EventsApi.md#eventsgetcontractevents) | **GET** /v1/contracts/events | Get contract events
*EventsApi* | [**eventsGetContractEventsCount**](docs/Api/EventsApi.md#eventsgetcontracteventscount) | **GET** /v1/contracts/events/count | Get contract events count
*HeadApi* | [**headGet**](docs/Api/HeadApi.md#headget) | **GET** /v1/head | Get indexer head
*HelpersApi* | [**helpersPostInject**](docs/Api/HelpersApi.md#helperspostinject) | **POST** /v1/helpers/inject | Inject operation
*HelpersApi* | [**helpersPostRunScriptView**](docs/Api/HelpersApi.md#helperspostrunscriptview) | **POST** /v1/helpers/view/{contract}/{name} | Run script view
*OperationsApi* | [**operationsGetActivationByHash**](docs/Api/OperationsApi.md#operationsgetactivationbyhash) | **GET** /v1/operations/activations/{hash} | Get activation by hash
*OperationsApi* | [**operationsGetActivations**](docs/Api/OperationsApi.md#operationsgetactivations) | **GET** /v1/operations/activations | Get activations
*OperationsApi* | [**operationsGetActivationsCount**](docs/Api/OperationsApi.md#operationsgetactivationscount) | **GET** /v1/operations/activations/count | Get activations count
*OperationsApi* | [**operationsGetAutostakingOps**](docs/Api/OperationsApi.md#operationsgetautostakingops) | **GET** /v1/operations/autostaking | Get autostaking ops
*OperationsApi* | [**operationsGetAutostakingOpsCount**](docs/Api/OperationsApi.md#operationsgetautostakingopscount) | **GET** /v1/operations/autostaking/count | Get autostaking ops count
*OperationsApi* | [**operationsGetBaking**](docs/Api/OperationsApi.md#operationsgetbaking) | **GET** /v1/operations/baking | Get baking
*OperationsApi* | [**operationsGetBakingById**](docs/Api/OperationsApi.md#operationsgetbakingbyid) | **GET** /v1/operations/baking/{id} | Get baking by id
*OperationsApi* | [**operationsGetBakingCount**](docs/Api/OperationsApi.md#operationsgetbakingcount) | **GET** /v1/operations/baking/count | Get baking count
*OperationsApi* | [**operationsGetBallotByHash**](docs/Api/OperationsApi.md#operationsgetballotbyhash) | **GET** /v1/operations/ballots/{hash} | Get ballot by hash
*OperationsApi* | [**operationsGetBallots**](docs/Api/OperationsApi.md#operationsgetballots) | **GET** /v1/operations/ballots | Get ballots
*OperationsApi* | [**operationsGetBallotsCount**](docs/Api/OperationsApi.md#operationsgetballotscount) | **GET** /v1/operations/ballots/count | Get ballots count
*OperationsApi* | [**operationsGetByHash**](docs/Api/OperationsApi.md#operationsgetbyhash) | **GET** /v1/operations/{hash} | Get operations by hash
*OperationsApi* | [**operationsGetByHashCounter**](docs/Api/OperationsApi.md#operationsgetbyhashcounter) | **GET** /v1/operations/{hash}/{counter} | Get operations by hash and counter
*OperationsApi* | [**operationsGetByHashCounterNonce**](docs/Api/OperationsApi.md#operationsgetbyhashcounternonce) | **GET** /v1/operations/{hash}/{counter}/{nonce} | Get operations by hash, counter and nonce
*OperationsApi* | [**operationsGetDalPublishCommitmentOps**](docs/Api/OperationsApi.md#operationsgetdalpublishcommitmentops) | **GET** /v1/operations/dal_publish_commitment | Get dal_publish_commitment ops
*OperationsApi* | [**operationsGetDalPublishCommitmentOpsCount**](docs/Api/OperationsApi.md#operationsgetdalpublishcommitmentopscount) | **GET** /v1/operations/dal_publish_commitment/count | Get dal_publish_commitment ops count
*OperationsApi* | [**operationsGetDelegationByHash**](docs/Api/OperationsApi.md#operationsgetdelegationbyhash) | **GET** /v1/operations/delegations/{hash} | Get delegation by hash
*OperationsApi* | [**operationsGetDelegationStatus**](docs/Api/OperationsApi.md#operationsgetdelegationstatus) | **GET** /v1/operations/delegations/{hash}/status | Get delegation status
*OperationsApi* | [**operationsGetDelegations**](docs/Api/OperationsApi.md#operationsgetdelegations) | **GET** /v1/operations/delegations | Get delegations
*OperationsApi* | [**operationsGetDelegationsCount**](docs/Api/OperationsApi.md#operationsgetdelegationscount) | **GET** /v1/operations/delegations/count | Get delegations count
*OperationsApi* | [**operationsGetDoubleBaking**](docs/Api/OperationsApi.md#operationsgetdoublebaking) | **GET** /v1/operations/double_baking | Get double baking
*OperationsApi* | [**operationsGetDoubleBakingByHash**](docs/Api/OperationsApi.md#operationsgetdoublebakingbyhash) | **GET** /v1/operations/double_baking/{hash} | Get double baking by hash
*OperationsApi* | [**operationsGetDoubleBakingCount**](docs/Api/OperationsApi.md#operationsgetdoublebakingcount) | **GET** /v1/operations/double_baking/count | Get double baking count
*OperationsApi* | [**operationsGetDoubleEndorsing**](docs/Api/OperationsApi.md#operationsgetdoubleendorsing) | **GET** /v1/operations/double_endorsing | Get double endorsing
*OperationsApi* | [**operationsGetDoubleEndorsingByHash**](docs/Api/OperationsApi.md#operationsgetdoubleendorsingbyhash) | **GET** /v1/operations/double_endorsing/{hash} | Get double endorsing by hash
*OperationsApi* | [**operationsGetDoubleEndorsingCount**](docs/Api/OperationsApi.md#operationsgetdoubleendorsingcount) | **GET** /v1/operations/double_endorsing/count | Get double endorsing count
*OperationsApi* | [**operationsGetDoublePreendorsing**](docs/Api/OperationsApi.md#operationsgetdoublepreendorsing) | **GET** /v1/operations/double_preendorsing | Get double preendorsing
*OperationsApi* | [**operationsGetDoublePreendorsingByHash**](docs/Api/OperationsApi.md#operationsgetdoublepreendorsingbyhash) | **GET** /v1/operations/double_preendorsing/{hash} | Get double preendorsing by hash
*OperationsApi* | [**operationsGetDoublePreendorsingCount**](docs/Api/OperationsApi.md#operationsgetdoublepreendorsingcount) | **GET** /v1/operations/double_preendorsing/count | Get double preendorsing count
*OperationsApi* | [**operationsGetDrainDelegateByHash**](docs/Api/OperationsApi.md#operationsgetdraindelegatebyhash) | **GET** /v1/operations/drain_delegate/{hash} | Get drain delegate by hash
*OperationsApi* | [**operationsGetDrainDelegateOps**](docs/Api/OperationsApi.md#operationsgetdraindelegateops) | **GET** /v1/operations/drain_delegate | Get drain delegate
*OperationsApi* | [**operationsGetDrainDelegateOpsCount**](docs/Api/OperationsApi.md#operationsgetdraindelegateopscount) | **GET** /v1/operations/drain_delegate/count | Get drain delegate count
*OperationsApi* | [**operationsGetEndorsementByHash**](docs/Api/OperationsApi.md#operationsgetendorsementbyhash) | **GET** /v1/operations/endorsements/{hash} | Get endorsement by hash
*OperationsApi* | [**operationsGetEndorsements**](docs/Api/OperationsApi.md#operationsgetendorsements) | **GET** /v1/operations/endorsements | Get endorsements
*OperationsApi* | [**operationsGetEndorsementsCount**](docs/Api/OperationsApi.md#operationsgetendorsementscount) | **GET** /v1/operations/endorsements/count | Get endorsements count
*OperationsApi* | [**operationsGetEndorsingRewardById**](docs/Api/OperationsApi.md#operationsgetendorsingrewardbyid) | **GET** /v1/operations/endorsing_rewards/{id} | Get endorsing reward by id
*OperationsApi* | [**operationsGetEndorsingRewards**](docs/Api/OperationsApi.md#operationsgetendorsingrewards) | **GET** /v1/operations/endorsing_rewards | Get endorsing rewards
*OperationsApi* | [**operationsGetEndorsingRewardsCount**](docs/Api/OperationsApi.md#operationsgetendorsingrewardscount) | **GET** /v1/operations/endorsing_rewards/count | Get endorsing rewards count
*OperationsApi* | [**operationsGetIncreasePaidStorageByHash**](docs/Api/OperationsApi.md#operationsgetincreasepaidstoragebyhash) | **GET** /v1/operations/increase_paid_storage/{hash} | Get increase paid storage by hash
*OperationsApi* | [**operationsGetIncreasePaidStorageCount**](docs/Api/OperationsApi.md#operationsgetincreasepaidstoragecount) | **GET** /v1/operations/increase_paid_storage/count | Get increase paid storage count
*OperationsApi* | [**operationsGetIncreasePaidStorageOps**](docs/Api/OperationsApi.md#operationsgetincreasepaidstorageops) | **GET** /v1/operations/increase_paid_storage | Get increase paid storage
*OperationsApi* | [**operationsGetMigrationById**](docs/Api/OperationsApi.md#operationsgetmigrationbyid) | **GET** /v1/operations/migrations/{id} | Get migration by id
*OperationsApi* | [**operationsGetMigrations**](docs/Api/OperationsApi.md#operationsgetmigrations) | **GET** /v1/operations/migrations | Get migrations
*OperationsApi* | [**operationsGetMigrationsCount**](docs/Api/OperationsApi.md#operationsgetmigrationscount) | **GET** /v1/operations/migrations/count | Get migrations count
*OperationsApi* | [**operationsGetNonceRevelationByHash**](docs/Api/OperationsApi.md#operationsgetnoncerevelationbyhash) | **GET** /v1/operations/nonce_revelations/{hash} | Get nonce revelation by hash
*OperationsApi* | [**operationsGetNonceRevelations**](docs/Api/OperationsApi.md#operationsgetnoncerevelations) | **GET** /v1/operations/nonce_revelations | Get nonce revelations
*OperationsApi* | [**operationsGetNonceRevelationsCount**](docs/Api/OperationsApi.md#operationsgetnoncerevelationscount) | **GET** /v1/operations/nonce_revelations/count | Get nonce revelations count
*OperationsApi* | [**operationsGetOriginationByHash**](docs/Api/OperationsApi.md#operationsgetoriginationbyhash) | **GET** /v1/operations/originations/{hash} | Get origination by hash
*OperationsApi* | [**operationsGetOriginationStatus**](docs/Api/OperationsApi.md#operationsgetoriginationstatus) | **GET** /v1/operations/originations/{hash}/status | Get origination status
*OperationsApi* | [**operationsGetOriginations**](docs/Api/OperationsApi.md#operationsgetoriginations) | **GET** /v1/operations/originations | Get originations
*OperationsApi* | [**operationsGetOriginationsCount**](docs/Api/OperationsApi.md#operationsgetoriginationscount) | **GET** /v1/operations/originations/count | Get originations count
*OperationsApi* | [**operationsGetPreendorsementByHash**](docs/Api/OperationsApi.md#operationsgetpreendorsementbyhash) | **GET** /v1/operations/preendorsements/{hash} | Get preendorsement by hash
*OperationsApi* | [**operationsGetPreendorsements**](docs/Api/OperationsApi.md#operationsgetpreendorsements) | **GET** /v1/operations/preendorsements | Get preendorsements
*OperationsApi* | [**operationsGetPreendorsementsCount**](docs/Api/OperationsApi.md#operationsgetpreendorsementscount) | **GET** /v1/operations/preendorsements/count | Get preendorsements count
*OperationsApi* | [**operationsGetProposalByHash**](docs/Api/OperationsApi.md#operationsgetproposalbyhash) | **GET** /v1/operations/proposals/{hash} | Get proposal by hash
*OperationsApi* | [**operationsGetProposals**](docs/Api/OperationsApi.md#operationsgetproposals) | **GET** /v1/operations/proposals | Get proposals
*OperationsApi* | [**operationsGetProposalsCount**](docs/Api/OperationsApi.md#operationsgetproposalscount) | **GET** /v1/operations/proposals/count | Get proposals count
*OperationsApi* | [**operationsGetRegisterConstantByHash**](docs/Api/OperationsApi.md#operationsgetregisterconstantbyhash) | **GET** /v1/operations/register_constants/{hash} | Get register constant by hash
*OperationsApi* | [**operationsGetRegisterConstantStatus**](docs/Api/OperationsApi.md#operationsgetregisterconstantstatus) | **GET** /v1/operations/register_constants/{hash}/status | Get register constant status
*OperationsApi* | [**operationsGetRegisterConstants**](docs/Api/OperationsApi.md#operationsgetregisterconstants) | **GET** /v1/operations/register_constants | Get register constants
*OperationsApi* | [**operationsGetRegisterConstantsCount**](docs/Api/OperationsApi.md#operationsgetregisterconstantscount) | **GET** /v1/operations/register_constants/count | Get register constants count
*OperationsApi* | [**operationsGetRevealByHash**](docs/Api/OperationsApi.md#operationsgetrevealbyhash) | **GET** /v1/operations/reveals/{hash} | Get reveal by hash
*OperationsApi* | [**operationsGetRevealStatus**](docs/Api/OperationsApi.md#operationsgetrevealstatus) | **GET** /v1/operations/reveals/{hash}/status | Get reveal status
*OperationsApi* | [**operationsGetReveals**](docs/Api/OperationsApi.md#operationsgetreveals) | **GET** /v1/operations/reveals | Get reveals
*OperationsApi* | [**operationsGetRevealsCount**](docs/Api/OperationsApi.md#operationsgetrevealscount) | **GET** /v1/operations/reveals/count | Get reveals count
*OperationsApi* | [**operationsGetRevelationPenalties**](docs/Api/OperationsApi.md#operationsgetrevelationpenalties) | **GET** /v1/operations/revelation_penalties | Get revelation penalties
*OperationsApi* | [**operationsGetRevelationPenaltiesCount**](docs/Api/OperationsApi.md#operationsgetrevelationpenaltiescount) | **GET** /v1/operations/revelation_penalties/count | Get revelation penalties count
*OperationsApi* | [**operationsGetRevelationPenaltyById**](docs/Api/OperationsApi.md#operationsgetrevelationpenaltybyid) | **GET** /v1/operations/revelation_penalties/{id} | Get revelation penalty by id
*OperationsApi* | [**operationsGetSetDelegateParametersOps**](docs/Api/OperationsApi.md#operationsgetsetdelegateparametersops) | **GET** /v1/operations/set_delegate_parameters | Get set_delegate_parameters ops
*OperationsApi* | [**operationsGetSetDelegateParametersOpsCount**](docs/Api/OperationsApi.md#operationsgetsetdelegateparametersopscount) | **GET** /v1/operations/set_delegate_parameters/count | Get set_delegate_parameters ops count
*OperationsApi* | [**operationsGetSetDepositsLimitByHash**](docs/Api/OperationsApi.md#operationsgetsetdepositslimitbyhash) | **GET** /v1/operations/set_deposits_limits/{hash} | Get set deposits limit by hash
*OperationsApi* | [**operationsGetSetDepositsLimitStatus**](docs/Api/OperationsApi.md#operationsgetsetdepositslimitstatus) | **GET** /v1/operations/set_deposits_limits/{hash}/status | Get set deposits limit status
*OperationsApi* | [**operationsGetSetDepositsLimits**](docs/Api/OperationsApi.md#operationsgetsetdepositslimits) | **GET** /v1/operations/set_deposits_limits | Get set deposits limits
*OperationsApi* | [**operationsGetSetDepositsLimitsCount**](docs/Api/OperationsApi.md#operationsgetsetdepositslimitscount) | **GET** /v1/operations/set_deposits_limits/count | Get set deposits limits count
*OperationsApi* | [**operationsGetSmartRollupAddMessagesOps**](docs/Api/OperationsApi.md#operationsgetsmartrollupaddmessagesops) | **GET** /v1/operations/sr_add_messages | Get smart rollup add messages
*OperationsApi* | [**operationsGetSmartRollupAddMessagesOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrollupaddmessagesopscount) | **GET** /v1/operations/sr_add_messages/count | Get smart rollup add messages count
*OperationsApi* | [**operationsGetSmartRollupCementOps**](docs/Api/OperationsApi.md#operationsgetsmartrollupcementops) | **GET** /v1/operations/sr_cement | Get smart rollup cement
*OperationsApi* | [**operationsGetSmartRollupCementOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrollupcementopscount) | **GET** /v1/operations/sr_cement/count | Get smart rollup cement count
*OperationsApi* | [**operationsGetSmartRollupExecuteOps**](docs/Api/OperationsApi.md#operationsgetsmartrollupexecuteops) | **GET** /v1/operations/sr_execute | Get smart rollup execute
*OperationsApi* | [**operationsGetSmartRollupExecuteOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrollupexecuteopscount) | **GET** /v1/operations/sr_execute/count | Get smart rollup execute count
*OperationsApi* | [**operationsGetSmartRollupOriginateOps**](docs/Api/OperationsApi.md#operationsgetsmartrolluporiginateops) | **GET** /v1/operations/sr_originate | Get smart rollup originate
*OperationsApi* | [**operationsGetSmartRollupOriginateOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrolluporiginateopscount) | **GET** /v1/operations/sr_originate/count | Get smart rollup originate count
*OperationsApi* | [**operationsGetSmartRollupPublishOps**](docs/Api/OperationsApi.md#operationsgetsmartrolluppublishops) | **GET** /v1/operations/sr_publish | Get smart rollup publish
*OperationsApi* | [**operationsGetSmartRollupPublishOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrolluppublishopscount) | **GET** /v1/operations/sr_publish/count | Get smart rollup publish count
*OperationsApi* | [**operationsGetSmartRollupRecoverBondOps**](docs/Api/OperationsApi.md#operationsgetsmartrolluprecoverbondops) | **GET** /v1/operations/sr_recover_bond | Get smart rollup recover bond
*OperationsApi* | [**operationsGetSmartRollupRecoverBondOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrolluprecoverbondopscount) | **GET** /v1/operations/sr_recover_bond/count | Get smart rollup recover bond count
*OperationsApi* | [**operationsGetSmartRollupRefuteOps**](docs/Api/OperationsApi.md#operationsgetsmartrolluprefuteops) | **GET** /v1/operations/sr_refute | Get smart rollup refute
*OperationsApi* | [**operationsGetSmartRollupRefuteOpsCount**](docs/Api/OperationsApi.md#operationsgetsmartrolluprefuteopscount) | **GET** /v1/operations/sr_refute/count | Get smart rollup refute count
*OperationsApi* | [**operationsGetStakingOps**](docs/Api/OperationsApi.md#operationsgetstakingops) | **GET** /v1/operations/staking | Get staking ops
*OperationsApi* | [**operationsGetStakingOpsCount**](docs/Api/OperationsApi.md#operationsgetstakingopscount) | **GET** /v1/operations/staking/count | Get staking ops count
*OperationsApi* | [**operationsGetStatus**](docs/Api/OperationsApi.md#operationsgetstatus) | **GET** /v1/operations/{hash}/status | Get operation status
*OperationsApi* | [**operationsGetTransactionByHash**](docs/Api/OperationsApi.md#operationsgettransactionbyhash) | **GET** /v1/operations/transactions/{hash} | Get transaction by hash
*OperationsApi* | [**operationsGetTransactionByHashCounter**](docs/Api/OperationsApi.md#operationsgettransactionbyhashcounter) | **GET** /v1/operations/transactions/{hash}/{counter} | Get transaction by hash and counter
*OperationsApi* | [**operationsGetTransactionByHashCounterNonce**](docs/Api/OperationsApi.md#operationsgettransactionbyhashcounternonce) | **GET** /v1/operations/transactions/{hash}/{counter}/{nonce} | Get transaction by hash, counter and nonce
*OperationsApi* | [**operationsGetTransactionStatus**](docs/Api/OperationsApi.md#operationsgettransactionstatus) | **GET** /v1/operations/transactions/{hash}/status | Get transaction status
*OperationsApi* | [**operationsGetTransactions**](docs/Api/OperationsApi.md#operationsgettransactions) | **GET** /v1/operations/transactions | Get transactions
*OperationsApi* | [**operationsGetTransactionsCount**](docs/Api/OperationsApi.md#operationsgettransactionscount) | **GET** /v1/operations/transactions/count | Get transactions count
*OperationsApi* | [**operationsGetTransferTicketOps**](docs/Api/OperationsApi.md#operationsgettransferticketops) | **GET** /v1/operations/transfer_ticket | Get transfer ticket
*OperationsApi* | [**operationsGetTransferTicketOpsByHash**](docs/Api/OperationsApi.md#operationsgettransferticketopsbyhash) | **GET** /v1/operations/transfer_ticket/{hash} | Get transfer ticket by hash
*OperationsApi* | [**operationsGetTransferTicketOpsCount**](docs/Api/OperationsApi.md#operationsgettransferticketopscount) | **GET** /v1/operations/transfer_ticket/count | Get transfer ticket count
*OperationsApi* | [**operationsGetTransferTicketStatus**](docs/Api/OperationsApi.md#operationsgettransferticketstatus) | **GET** /v1/operations/transfer_ticket/{hash}/status | Get transfer ticket status
*OperationsApi* | [**operationsGetTxRollupCommitOps**](docs/Api/OperationsApi.md#operationsgettxrollupcommitops) | **GET** /v1/operations/tx_rollup_commit | Get tx rollup commit
*OperationsApi* | [**operationsGetTxRollupCommitOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrollupcommitopsbyhash) | **GET** /v1/operations/tx_rollup_commit/{hash} | Get tx rollup commit by hash
*OperationsApi* | [**operationsGetTxRollupCommitOpsCount**](docs/Api/OperationsApi.md#operationsgettxrollupcommitopscount) | **GET** /v1/operations/tx_rollup_commit/count | Get tx rollup commit count
*OperationsApi* | [**operationsGetTxRollupCommitStatus**](docs/Api/OperationsApi.md#operationsgettxrollupcommitstatus) | **GET** /v1/operations/tx_rollup_commit/{hash}/status | Get tx rollup commit status
*OperationsApi* | [**operationsGetTxRollupDispatchTicketsOps**](docs/Api/OperationsApi.md#operationsgettxrollupdispatchticketsops) | **GET** /v1/operations/tx_rollup_dispatch_tickets | Get tx rollup dispatch tickets
*OperationsApi* | [**operationsGetTxRollupDispatchTicketsOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrollupdispatchticketsopsbyhash) | **GET** /v1/operations/tx_rollup_dispatch_tickets/{hash} | Get tx rollup dispatch tickets by hash
*OperationsApi* | [**operationsGetTxRollupDispatchTicketsOpsCount**](docs/Api/OperationsApi.md#operationsgettxrollupdispatchticketsopscount) | **GET** /v1/operations/tx_rollup_dispatch_tickets/count | Get tx rollup dispatch tickets count
*OperationsApi* | [**operationsGetTxRollupDispatchTicketsStatus**](docs/Api/OperationsApi.md#operationsgettxrollupdispatchticketsstatus) | **GET** /v1/operations/tx_rollup_dispatch_tickets/{hash}/status | Get tx rollup dispatch tickets status
*OperationsApi* | [**operationsGetTxRollupFinalizeCommitmentOps**](docs/Api/OperationsApi.md#operationsgettxrollupfinalizecommitmentops) | **GET** /v1/operations/tx_rollup_finalize_commitment | Get tx rollup finalize commitment
*OperationsApi* | [**operationsGetTxRollupFinalizeCommitmentOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrollupfinalizecommitmentopsbyhash) | **GET** /v1/operations/tx_rollup_finalize_commitment/{hash} | Get tx rollup finalize commitment by hash
*OperationsApi* | [**operationsGetTxRollupFinalizeCommitmentOpsCount**](docs/Api/OperationsApi.md#operationsgettxrollupfinalizecommitmentopscount) | **GET** /v1/operations/tx_rollup_finalize_commitment/count | Get tx rollup finalize commitment count
*OperationsApi* | [**operationsGetTxRollupFinalizeCommitmentStatus**](docs/Api/OperationsApi.md#operationsgettxrollupfinalizecommitmentstatus) | **GET** /v1/operations/tx_rollup_finalize_commitment/{hash}/status | Get tx rollup finalize commitment status
*OperationsApi* | [**operationsGetTxRollupOriginationOps**](docs/Api/OperationsApi.md#operationsgettxrolluporiginationops) | **GET** /v1/operations/tx_rollup_origination | Get tx rollup origination
*OperationsApi* | [**operationsGetTxRollupOriginationOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrolluporiginationopsbyhash) | **GET** /v1/operations/tx_rollup_origination/{hash} | Get tx rollup origination by hash
*OperationsApi* | [**operationsGetTxRollupOriginationOpsCount**](docs/Api/OperationsApi.md#operationsgettxrolluporiginationopscount) | **GET** /v1/operations/tx_rollup_origination/count | Get tx rollup origination count
*OperationsApi* | [**operationsGetTxRollupOriginationStatus**](docs/Api/OperationsApi.md#operationsgettxrolluporiginationstatus) | **GET** /v1/operations/tx_rollup_origination/{hash}/status | Get tx rollup origination status
*OperationsApi* | [**operationsGetTxRollupRejectionOps**](docs/Api/OperationsApi.md#operationsgettxrolluprejectionops) | **GET** /v1/operations/tx_rollup_rejection | Get tx rollup rejection
*OperationsApi* | [**operationsGetTxRollupRejectionOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrolluprejectionopsbyhash) | **GET** /v1/operations/tx_rollup_rejection/{hash} | Get tx rollup rejection by hash
*OperationsApi* | [**operationsGetTxRollupRejectionOpsCount**](docs/Api/OperationsApi.md#operationsgettxrolluprejectionopscount) | **GET** /v1/operations/tx_rollup_rejection/count | Get tx rollup rejection count
*OperationsApi* | [**operationsGetTxRollupRejectionStatus**](docs/Api/OperationsApi.md#operationsgettxrolluprejectionstatus) | **GET** /v1/operations/tx_rollup_rejection/{hash}/status | Get tx rollup rejection status
*OperationsApi* | [**operationsGetTxRollupRemoveCommitmentOps**](docs/Api/OperationsApi.md#operationsgettxrollupremovecommitmentops) | **GET** /v1/operations/tx_rollup_remove_commitment | Get tx rollup remove commitment
*OperationsApi* | [**operationsGetTxRollupRemoveCommitmentOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrollupremovecommitmentopsbyhash) | **GET** /v1/operations/tx_rollup_remove_commitment/{hash} | Get tx rollup remove commitment by hash
*OperationsApi* | [**operationsGetTxRollupRemoveCommitmentOpsCount**](docs/Api/OperationsApi.md#operationsgettxrollupremovecommitmentopscount) | **GET** /v1/operations/tx_rollup_remove_commitment/count | Get tx rollup remove commitment count
*OperationsApi* | [**operationsGetTxRollupRemoveCommitmentStatus**](docs/Api/OperationsApi.md#operationsgettxrollupremovecommitmentstatus) | **GET** /v1/operations/tx_rollup_remove_commitment/{hash}/status | Get tx rollup remove commitment status
*OperationsApi* | [**operationsGetTxRollupReturnBondOps**](docs/Api/OperationsApi.md#operationsgettxrollupreturnbondops) | **GET** /v1/operations/tx_rollup_return_bond | Get tx rollup return bond
*OperationsApi* | [**operationsGetTxRollupReturnBondOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrollupreturnbondopsbyhash) | **GET** /v1/operations/tx_rollup_return_bond/{hash} | Get tx rollup return bond by hash
*OperationsApi* | [**operationsGetTxRollupReturnBondOpsCount**](docs/Api/OperationsApi.md#operationsgettxrollupreturnbondopscount) | **GET** /v1/operations/tx_rollup_return_bond/count | Get tx rollup return bond count
*OperationsApi* | [**operationsGetTxRollupReturnBondStatus**](docs/Api/OperationsApi.md#operationsgettxrollupreturnbondstatus) | **GET** /v1/operations/tx_rollup_return_bond/{hash}/status | Get tx rollup return bond status
*OperationsApi* | [**operationsGetTxRollupSubmitBatchOps**](docs/Api/OperationsApi.md#operationsgettxrollupsubmitbatchops) | **GET** /v1/operations/tx_rollup_submit_batch | Get tx rollup submit batch
*OperationsApi* | [**operationsGetTxRollupSubmitBatchOpsByHash**](docs/Api/OperationsApi.md#operationsgettxrollupsubmitbatchopsbyhash) | **GET** /v1/operations/tx_rollup_submit_batch/{hash} | Get tx rollup submit batch by hash
*OperationsApi* | [**operationsGetTxRollupSubmitBatchOpsCount**](docs/Api/OperationsApi.md#operationsgettxrollupsubmitbatchopscount) | **GET** /v1/operations/tx_rollup_submit_batch/count | Get tx rollup submit batch count
*OperationsApi* | [**operationsGetTxRollupSubmitBatchStatus**](docs/Api/OperationsApi.md#operationsgettxrollupsubmitbatchstatus) | **GET** /v1/operations/tx_rollup_submit_batch/{hash}/status | Get tx rollup submit batch status
*OperationsApi* | [**operationsGetUpdateConsensusKeyByHash**](docs/Api/OperationsApi.md#operationsgetupdateconsensuskeybyhash) | **GET** /v1/operations/update_consensus_key/{hash} | Get update consensus key by hash
*OperationsApi* | [**operationsGetUpdateConsensusKeyOps**](docs/Api/OperationsApi.md#operationsgetupdateconsensuskeyops) | **GET** /v1/operations/update_consensus_key | Get update consensus key
*OperationsApi* | [**operationsGetUpdateConsensusKeyOpsCount**](docs/Api/OperationsApi.md#operationsgetupdateconsensuskeyopscount) | **GET** /v1/operations/update_consensus_key/count | Get update consensus key count
*OperationsApi* | [**operationsGetVdfRevelationByHash**](docs/Api/OperationsApi.md#operationsgetvdfrevelationbyhash) | **GET** /v1/operations/vdf_revelations/{hash} | Get vdf revelation by hash
*OperationsApi* | [**operationsGetVdfRevelations**](docs/Api/OperationsApi.md#operationsgetvdfrevelations) | **GET** /v1/operations/vdf_revelations | Get vdf revelations
*OperationsApi* | [**operationsGetVdfRevelationsCount**](docs/Api/OperationsApi.md#operationsgetvdfrevelationscount) | **GET** /v1/operations/vdf_revelations/count | Get vdf revelations count
*ProtocolsApi* | [**protocolsGet**](docs/Api/ProtocolsApi.md#protocolsget) | **GET** /v1/protocols | Get protocols
*ProtocolsApi* | [**protocolsGetByCode**](docs/Api/ProtocolsApi.md#protocolsgetbycode) | **GET** /v1/protocols/{code} | Get protocol by code
*ProtocolsApi* | [**protocolsGetByCycle**](docs/Api/ProtocolsApi.md#protocolsgetbycycle) | **GET** /v1/protocols/cycles/{cycle} | Get protocol by cycle
*ProtocolsApi* | [**protocolsGetByHash**](docs/Api/ProtocolsApi.md#protocolsgetbyhash) | **GET** /v1/protocols/{hash} | Get protocol by hash
*ProtocolsApi* | [**protocolsGetCount**](docs/Api/ProtocolsApi.md#protocolsgetcount) | **GET** /v1/protocols/count | Get protocols count
*ProtocolsApi* | [**protocolsGetCurrent**](docs/Api/ProtocolsApi.md#protocolsgetcurrent) | **GET** /v1/protocols/current | Get current protocol
*QuotesApi* | [**quotesGet**](docs/Api/QuotesApi.md#quotesget) | **GET** /v1/quotes | Get quotes
*QuotesApi* | [**quotesGetCount**](docs/Api/QuotesApi.md#quotesgetcount) | **GET** /v1/quotes/count | Get quotes count
*QuotesApi* | [**quotesGetLast**](docs/Api/QuotesApi.md#quotesgetlast) | **GET** /v1/quotes/last | Get last quote
*RewardsApi* | [**rewardsGetBakerRewards**](docs/Api/RewardsApi.md#rewardsgetbakerrewards) | **GET** /v1/rewards/bakers/{address} | Get baker cycle rewards
*RewardsApi* | [**rewardsGetBakerRewardsCount**](docs/Api/RewardsApi.md#rewardsgetbakerrewardscount) | **GET** /v1/rewards/bakers/{address}/count | Get baker cycle rewards count
*RewardsApi* | [**rewardsGetDelegatorRewards**](docs/Api/RewardsApi.md#rewardsgetdelegatorrewards) | **GET** /v1/rewards/delegators/{address} | Get delegator cycle rewards
*RewardsApi* | [**rewardsGetDelegatorRewardsCount**](docs/Api/RewardsApi.md#rewardsgetdelegatorrewardscount) | **GET** /v1/rewards/delegators/{address}/count | Get delegator cycle rewards count
*RewardsApi* | [**rewardsGetRewardSplit**](docs/Api/RewardsApi.md#rewardsgetrewardsplit) | **GET** /v1/rewards/split/{baker}/{cycle} | Get reward split
*RewardsApi* | [**rewardsGetRewardSplitDelegator**](docs/Api/RewardsApi.md#rewardsgetrewardsplitdelegator) | **GET** /v1/rewards/split/{baker}/{cycle}/{delegator} | Get reward split delegator
*RightsApi* | [**rightsGet**](docs/Api/RightsApi.md#rightsget) | **GET** /v1/rights | Get rights
*RightsApi* | [**rightsGetCount**](docs/Api/RightsApi.md#rightsgetcount) | **GET** /v1/rights/count | Get rights count
*SmartRollupsApi* | [**smartRollupsGetEntrypoints**](docs/Api/SmartRollupsApi.md#smartrollupsgetentrypoints) | **GET** /v1/smart_rollups/{address}/entrypoints | Get smart rollup entrypoints
*SmartRollupsApi* | [**smartRollupsGetInboxMessages**](docs/Api/SmartRollupsApi.md#smartrollupsgetinboxmessages) | **GET** /v1/smart_rollups/inbox | Get inbox messages
*SmartRollupsApi* | [**smartRollupsGetInboxMessagesCount**](docs/Api/SmartRollupsApi.md#smartrollupsgetinboxmessagescount) | **GET** /v1/smart_rollups/inbox/count | Get inbox messages count
*SmartRollupsApi* | [**smartRollupsGetInterface**](docs/Api/SmartRollupsApi.md#smartrollupsgetinterface) | **GET** /v1/smart_rollups/{address}/interface | Get JSON Schema [2020-12] interface for the smart rollup
*SmartRollupsApi* | [**smartRollupsGetSmartRollup**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollup) | **GET** /v1/smart_rollups/{address} | Get smart rollup by address
*SmartRollupsApi* | [**smartRollupsGetSmartRollupCommitments**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollupcommitments) | **GET** /v1/smart_rollups/commitments | Get smart rollup commitments
*SmartRollupsApi* | [**smartRollupsGetSmartRollupCommitmentsCount**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollupcommitmentscount) | **GET** /v1/smart_rollups/commitments/count | Get smart rollup commitments count
*SmartRollupsApi* | [**smartRollupsGetSmartRollupGames**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollupgames) | **GET** /v1/smart_rollups/games | Get smart rollup games
*SmartRollupsApi* | [**smartRollupsGetSmartRollupGamesCount**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollupgamescount) | **GET** /v1/smart_rollups/games/count | Get smart rollup games count
*SmartRollupsApi* | [**smartRollupsGetSmartRollupStakers**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollupstakers) | **GET** /v1/smart_rollups/{address}/stakers | Get smart rollup stakers
*SmartRollupsApi* | [**smartRollupsGetSmartRollups**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollups) | **GET** /v1/smart_rollups | Get smart rollups
*SmartRollupsApi* | [**smartRollupsGetSmartRollupsCount**](docs/Api/SmartRollupsApi.md#smartrollupsgetsmartrollupscount) | **GET** /v1/smart_rollups/count | Get smart rollups count
*SoftwareApi* | [**softwareGet**](docs/Api/SoftwareApi.md#softwareget) | **GET** /v1/software | Get baker software
*SoftwareApi* | [**softwareGetCount**](docs/Api/SoftwareApi.md#softwaregetcount) | **GET** /v1/software/count | Get software count
*StakingApi* | [**stakingGetStakingUpdates**](docs/Api/StakingApi.md#stakinggetstakingupdates) | **GET** /v1/staking/updates | Get staking updates
*StakingApi* | [**stakingGetStakingUpdatesCount**](docs/Api/StakingApi.md#stakinggetstakingupdatescount) | **GET** /v1/staking/updates/count | Get staking updates count
*StakingApi* | [**stakingGetUnstakeRequests**](docs/Api/StakingApi.md#stakinggetunstakerequests) | **GET** /v1/staking/unstake_requests | Get unstake requests
*StakingApi* | [**stakingGetUnstakeRequestsCount**](docs/Api/StakingApi.md#stakinggetunstakerequestscount) | **GET** /v1/staking/unstake_requests/count | Get unstake requests count
*StatisticsApi* | [**statisticsGet**](docs/Api/StatisticsApi.md#statisticsget) | **GET** /v1/statistics | Get statistics
*StatisticsApi* | [**statisticsGetCycles**](docs/Api/StatisticsApi.md#statisticsgetcycles) | **GET** /v1/statistics/current | Get current statistics
*StatisticsApi* | [**statisticsGetCyclesAll**](docs/Api/StatisticsApi.md#statisticsgetcyclesall) | **GET** /v1/statistics/cyclic | Get cyclic statistics
*StatisticsApi* | [**statisticsGetDaily**](docs/Api/StatisticsApi.md#statisticsgetdaily) | **GET** /v1/statistics/daily | Get daily statistics
*TicketsApi* | [**ticketsGetHistoricalTicketBalances**](docs/Api/TicketsApi.md#ticketsgethistoricalticketbalances) | **GET** /v1/tickets/historical_balances/{level} | Get historical ticket balances
*TicketsApi* | [**ticketsGetTicketBalances**](docs/Api/TicketsApi.md#ticketsgetticketbalances) | **GET** /v1/tickets/balances | Get ticket balances
*TicketsApi* | [**ticketsGetTicketBalancesCount**](docs/Api/TicketsApi.md#ticketsgetticketbalancescount) | **GET** /v1/tickets/balances/count | Get ticket balances count
*TicketsApi* | [**ticketsGetTicketTransfers**](docs/Api/TicketsApi.md#ticketsgettickettransfers) | **GET** /v1/tickets/transfers | Get ticket transfers
*TicketsApi* | [**ticketsGetTicketTransfersCount**](docs/Api/TicketsApi.md#ticketsgettickettransferscount) | **GET** /v1/tickets/transfers/count | Get ticket transfers count
*TicketsApi* | [**ticketsGetTickets**](docs/Api/TicketsApi.md#ticketsgettickets) | **GET** /v1/tickets | Get tickets
*TicketsApi* | [**ticketsGetTicketsCount**](docs/Api/TicketsApi.md#ticketsgetticketscount) | **GET** /v1/tickets/count | Get tickets count
*TokensApi* | [**tokensGetTokenBalances**](docs/Api/TokensApi.md#tokensgettokenbalances) | **GET** /v1/tokens/balances | Get token balances
*TokensApi* | [**tokensGetTokenBalances2**](docs/Api/TokensApi.md#tokensgettokenbalances2) | **GET** /v1/tokens/historical_balances/{level} | Get historical token balances
*TokensApi* | [**tokensGetTokenBalancesCount**](docs/Api/TokensApi.md#tokensgettokenbalancescount) | **GET** /v1/tokens/balances/count | Get token balances count
*TokensApi* | [**tokensGetTokenTransfers**](docs/Api/TokensApi.md#tokensgettokentransfers) | **GET** /v1/tokens/transfers | Get token transfers
*TokensApi* | [**tokensGetTokenTransfersCount**](docs/Api/TokensApi.md#tokensgettokentransferscount) | **GET** /v1/tokens/transfers/count | Get token transfers count
*TokensApi* | [**tokensGetTokens**](docs/Api/TokensApi.md#tokensgettokens) | **GET** /v1/tokens | Get tokens
*TokensApi* | [**tokensGetTokensCount**](docs/Api/TokensApi.md#tokensgettokenscount) | **GET** /v1/tokens/count | Get tokens count
*VotingApi* | [**votingGetCurrentEpoch**](docs/Api/VotingApi.md#votinggetcurrentepoch) | **GET** /v1/voting/epochs/current | Get current voting epoch
*VotingApi* | [**votingGetCurrentPeriod**](docs/Api/VotingApi.md#votinggetcurrentperiod) | **GET** /v1/voting/periods/current | Get current voting period
*VotingApi* | [**votingGetEpoch**](docs/Api/VotingApi.md#votinggetepoch) | **GET** /v1/voting/epochs/{index} | Get voting epoch by index
*VotingApi* | [**votingGetEpochs**](docs/Api/VotingApi.md#votinggetepochs) | **GET** /v1/voting/epochs | Get voting epochs
*VotingApi* | [**votingGetLatestVoting**](docs/Api/VotingApi.md#votinggetlatestvoting) | **GET** /v1/voting/epochs/latest_voting | Get latest voting
*VotingApi* | [**votingGetPeriod**](docs/Api/VotingApi.md#votinggetperiod) | **GET** /v1/voting/periods/{index} | Get voting period by index
*VotingApi* | [**votingGetPeriodVoter**](docs/Api/VotingApi.md#votinggetperiodvoter) | **GET** /v1/voting/periods/{index}/voters/{address} | Get period voter
*VotingApi* | [**votingGetPeriodVoter2**](docs/Api/VotingApi.md#votinggetperiodvoter2) | **GET** /v1/voting/periods/current/voters/{address} | Get current period voter
*VotingApi* | [**votingGetPeriodVoters**](docs/Api/VotingApi.md#votinggetperiodvoters) | **GET** /v1/voting/periods/{index}/voters | Get period voters
*VotingApi* | [**votingGetPeriodVoters2**](docs/Api/VotingApi.md#votinggetperiodvoters2) | **GET** /v1/voting/periods/current/voters | Get current period voters
*VotingApi* | [**votingGetPeriods**](docs/Api/VotingApi.md#votinggetperiods) | **GET** /v1/voting/periods | Get voting periods
*VotingApi* | [**votingGetProposalByHash**](docs/Api/VotingApi.md#votinggetproposalbyhash) | **GET** /v1/voting/proposals/{hash} | Get proposal by hash
*VotingApi* | [**votingGetProposals**](docs/Api/VotingApi.md#votinggetproposals) | **GET** /v1/voting/proposals | Get proposals
*VotingApi* | [**votingGetProposalsCount**](docs/Api/VotingApi.md#votinggetproposalscount) | **GET** /v1/voting/proposals/count | Get proposals count

## Models

- [Account](docs/Model/Account.md)
- [AccountParameter](docs/Model/AccountParameter.md)
- [AccountTypeParameter](docs/Model/AccountTypeParameter.md)
- [AccountsGetAddressParameter](docs/Model/AccountsGetAddressParameter.md)
- [AccountsGetBalanceParameter](docs/Model/AccountsGetBalanceParameter.md)
- [AccountsGetDelegateParameter](docs/Model/AccountsGetDelegateParameter.md)
- [AccountsGetIdParameter](docs/Model/AccountsGetIdParameter.md)
- [AccountsGetKindParameter](docs/Model/AccountsGetKindParameter.md)
- [AccountsGetOffsetParameter](docs/Model/AccountsGetOffsetParameter.md)
- [AccountsGetOperationsEntrypointParameter](docs/Model/AccountsGetOperationsEntrypointParameter.md)
- [AccountsGetOperationsMichelineParameter](docs/Model/AccountsGetOperationsMichelineParameter.md)
- [AccountsGetOperationsParameterParameter](docs/Model/AccountsGetOperationsParameterParameter.md)
- [AccountsGetOperationsQuoteParameter](docs/Model/AccountsGetOperationsQuoteParameter.md)
- [AccountsGetOperationsSortParameter](docs/Model/AccountsGetOperationsSortParameter.md)
- [AccountsGetOperationsStatusParameter](docs/Model/AccountsGetOperationsStatusParameter.md)
- [AccountsGetOperationsTimestampParameter](docs/Model/AccountsGetOperationsTimestampParameter.md)
- [AccountsGetSelectParameter](docs/Model/AccountsGetSelectParameter.md)
- [AccountsGetSortParameter](docs/Model/AccountsGetSortParameter.md)
- [AccountsGetStakedParameter](docs/Model/AccountsGetStakedParameter.md)
- [AccountsGetStakedPseudotokensParameter](docs/Model/AccountsGetStakedPseudotokensParameter.md)
- [AccountsGetTypeParameter](docs/Model/AccountsGetTypeParameter.md)
- [ActivationOperation](docs/Model/ActivationOperation.md)
- [ActivationOperationAllOf](docs/Model/ActivationOperationAllOf.md)
- [AddressNullParameter](docs/Model/AddressNullParameter.md)
- [AddressParameter](docs/Model/AddressParameter.md)
- [Alias](docs/Model/Alias.md)
- [AnnotationType](docs/Model/AnnotationType.md)
- [AnyOfParameter](docs/Model/AnyOfParameter.md)
- [AutostakingOperation](docs/Model/AutostakingOperation.md)
- [AutostakingOperationAllOf](docs/Model/AutostakingOperationAllOf.md)
- [BakerRewards](docs/Model/BakerRewards.md)
- [BakingOperation](docs/Model/BakingOperation.md)
- [BakingOperationAllOf](docs/Model/BakingOperationAllOf.md)
- [BakingRight](docs/Model/BakingRight.md)
- [BakingRightBaker](docs/Model/BakingRightBaker.md)
- [BakingRightStatusParameter](docs/Model/BakingRightStatusParameter.md)
- [BakingRightTypeParameter](docs/Model/BakingRightTypeParameter.md)
- [BalanceTooLowError](docs/Model/BalanceTooLowError.md)
- [BalanceTooLowErrorAllOf](docs/Model/BalanceTooLowErrorAllOf.md)
- [BallotOperation](docs/Model/BallotOperation.md)
- [BallotOperationAllOf](docs/Model/BallotOperationAllOf.md)
- [BaseOperationError](docs/Model/BaseOperationError.md)
- [BaseOperationErrorAllOf](docs/Model/BaseOperationErrorAllOf.md)
- [BigIntegerNullableParameter](docs/Model/BigIntegerNullableParameter.md)
- [BigMap](docs/Model/BigMap.md)
- [BigMapActionParameter](docs/Model/BigMapActionParameter.md)
- [BigMapContract](docs/Model/BigMapContract.md)
- [BigMapDiff](docs/Model/BigMapDiff.md)
- [BigMapDiffContent](docs/Model/BigMapDiffContent.md)
- [BigMapInterface](docs/Model/BigMapInterface.md)
- [BigMapKey](docs/Model/BigMapKey.md)
- [BigMapKeyFull](docs/Model/BigMapKeyFull.md)
- [BigMapKeyHistorical](docs/Model/BigMapKeyHistorical.md)
- [BigMapKeyShort](docs/Model/BigMapKeyShort.md)
- [BigMapKeyUpdate](docs/Model/BigMapKeyUpdate.md)
- [BigMapTagsParameter](docs/Model/BigMapTagsParameter.md)
- [BigMapUpdate](docs/Model/BigMapUpdate.md)
- [BigMapUpdateContent](docs/Model/BigMapUpdateContent.md)
- [BigMapsGetBigMapKeysFirstTimeParameter](docs/Model/BigMapsGetBigMapKeysFirstTimeParameter.md)
- [BigMapsGetBigMapKeysHashParameter](docs/Model/BigMapsGetBigMapKeysHashParameter.md)
- [BigMapsGetBigMapKeysSelectParameter](docs/Model/BigMapsGetBigMapKeysSelectParameter.md)
- [BigMapsGetBigMapUpdatesActionParameter](docs/Model/BigMapsGetBigMapUpdatesActionParameter.md)
- [BigMapsGetBigMapsTagsParameter](docs/Model/BigMapsGetBigMapsTagsParameter.md)
- [Block](docs/Model/Block.md)
- [BlockBaker](docs/Model/BlockBaker.md)
- [BlockProducer](docs/Model/BlockProducer.md)
- [BlockProposer](docs/Model/BlockProposer.md)
- [BlockQuote](docs/Model/BlockQuote.md)
- [BlockSoftware](docs/Model/BlockSoftware.md)
- [BlocksGetAnyofParameter](docs/Model/BlocksGetAnyofParameter.md)
- [BoolParameter](docs/Model/BoolParameter.md)
- [Commitment](docs/Model/Commitment.md)
- [CommitmentActivatedAccount](docs/Model/CommitmentActivatedAccount.md)
- [CommitmentsGetAllActivationLevelParameter](docs/Model/CommitmentsGetAllActivationLevelParameter.md)
- [Constant](docs/Model/Constant.md)
- [ConstantCreator](docs/Model/ConstantCreator.md)
- [Contract](docs/Model/Contract.md)
- [ContractAllOf](docs/Model/ContractAllOf.md)
- [ContractEvent](docs/Model/ContractEvent.md)
- [ContractEventContract](docs/Model/ContractEventContract.md)
- [ContractInterface](docs/Model/ContractInterface.md)
- [ContractKindParameter](docs/Model/ContractKindParameter.md)
- [ContractTagsParameter](docs/Model/ContractTagsParameter.md)
- [ContractView](docs/Model/ContractView.md)
- [ContractViewMichelineParameterType](docs/Model/ContractViewMichelineParameterType.md)
- [ContractViewMichelineReturnType](docs/Model/ContractViewMichelineReturnType.md)
- [ContractsGetTzipsParameter](docs/Model/ContractsGetTzipsParameter.md)
- [CreatorInfo](docs/Model/CreatorInfo.md)
- [Cycle](docs/Model/Cycle.md)
- [CycleQuote](docs/Model/CycleQuote.md)
- [DalPublishCommitmentOperation](docs/Model/DalPublishCommitmentOperation.md)
- [DalPublishCommitmentOperationAllOf](docs/Model/DalPublishCommitmentOperationAllOf.md)
- [DateTimeParameter](docs/Model/DateTimeParameter.md)
- [Delegate](docs/Model/Delegate.md)
- [DelegateAllOf](docs/Model/DelegateAllOf.md)
- [DelegateInfo](docs/Model/DelegateInfo.md)
- [DelegationOperation](docs/Model/DelegationOperation.md)
- [DelegationOperationAllOf](docs/Model/DelegationOperationAllOf.md)
- [Delegator](docs/Model/Delegator.md)
- [DelegatorRewards](docs/Model/DelegatorRewards.md)
- [DelegatorRewardsBaker](docs/Model/DelegatorRewardsBaker.md)
- [Domain](docs/Model/Domain.md)
- [DomainAddress](docs/Model/DomainAddress.md)
- [DomainOwner](docs/Model/DomainOwner.md)
- [DomainsGetCountOwnerParameter](docs/Model/DomainsGetCountOwnerParameter.md)
- [DoubleBakingOperation](docs/Model/DoubleBakingOperation.md)
- [DoubleBakingOperationAllOf](docs/Model/DoubleBakingOperationAllOf.md)
- [DoubleEndorsingOperation](docs/Model/DoubleEndorsingOperation.md)
- [DoubleEndorsingOperationAllOf](docs/Model/DoubleEndorsingOperationAllOf.md)
- [DoublePreendorsingOperation](docs/Model/DoublePreendorsingOperation.md)
- [DoublePreendorsingOperationAllOf](docs/Model/DoublePreendorsingOperationAllOf.md)
- [DrainDelegateOperation](docs/Model/DrainDelegateOperation.md)
- [DrainDelegateOperationAllOf](docs/Model/DrainDelegateOperationAllOf.md)
- [EmptyAccount](docs/Model/EmptyAccount.md)
- [EmptyAccountAllOf](docs/Model/EmptyAccountAllOf.md)
- [EndorsementOperation](docs/Model/EndorsementOperation.md)
- [EndorsementOperationAllOf](docs/Model/EndorsementOperationAllOf.md)
- [EndorsingRewardOperation](docs/Model/EndorsingRewardOperation.md)
- [EndorsingRewardOperationAllOf](docs/Model/EndorsingRewardOperationAllOf.md)
- [Entrypoint](docs/Model/Entrypoint.md)
- [EntrypointInterface](docs/Model/EntrypointInterface.md)
- [EntrypointMichelineParameters](docs/Model/EntrypointMichelineParameters.md)
- [EventInterface](docs/Model/EventInterface.md)
- [ExpressionAlreadyRegisteredError](docs/Model/ExpressionAlreadyRegisteredError.md)
- [ExpressionAlreadyRegisteredErrorAllOf](docs/Model/ExpressionAlreadyRegisteredErrorAllOf.md)
- [ExpressionParameter](docs/Model/ExpressionParameter.md)
- [Ghost](docs/Model/Ghost.md)
- [GhostAllOf](docs/Model/GhostAllOf.md)
- [HistoricalBalance](docs/Model/HistoricalBalance.md)
- [HistoricalBalanceQuote](docs/Model/HistoricalBalanceQuote.md)
- [IAnnotation](docs/Model/IAnnotation.md)
- [IMicheline](docs/Model/IMicheline.md)
- [IncreasePaidStorageOperation](docs/Model/IncreasePaidStorageOperation.md)
- [IncreasePaidStorageOperationAllOf](docs/Model/IncreasePaidStorageOperationAllOf.md)
- [Int32NullParameter](docs/Model/Int32NullParameter.md)
- [Int32Parameter](docs/Model/Int32Parameter.md)
- [Int64NullParameter](docs/Model/Int64NullParameter.md)
- [Int64Parameter](docs/Model/Int64Parameter.md)
- [JsonParameter](docs/Model/JsonParameter.md)
- [ManagerInfo](docs/Model/ManagerInfo.md)
- [MichelineFormat](docs/Model/MichelineFormat.md)
- [MichelineParameter](docs/Model/MichelineParameter.md)
- [MichelineParameterEq](docs/Model/MichelineParameterEq.md)
- [MichelineParameterNe](docs/Model/MichelineParameterNe.md)
- [MichelinePrim](docs/Model/MichelinePrim.md)
- [MichelineType](docs/Model/MichelineType.md)
- [MigrationKindParameter](docs/Model/MigrationKindParameter.md)
- [MigrationOperation](docs/Model/MigrationOperation.md)
- [MigrationOperationAllOf](docs/Model/MigrationOperationAllOf.md)
- [NatParameter](docs/Model/NatParameter.md)
- [NonExistingContractError](docs/Model/NonExistingContractError.md)
- [NonExistingContractErrorAllOf](docs/Model/NonExistingContractErrorAllOf.md)
- [NonceRevelationOperation](docs/Model/NonceRevelationOperation.md)
- [NonceRevelationOperationAllOf](docs/Model/NonceRevelationOperationAllOf.md)
- [OffsetParameter](docs/Model/OffsetParameter.md)
- [OpHashParameter](docs/Model/OpHashParameter.md)
- [Operation](docs/Model/Operation.md)
- [OperationError](docs/Model/OperationError.md)
- [OperationStatusParameter](docs/Model/OperationStatusParameter.md)
- [OperationsGetBallotsProposalParameter](docs/Model/OperationsGetBallotsProposalParameter.md)
- [OperationsGetBallotsVoteParameter](docs/Model/OperationsGetBallotsVoteParameter.md)
- [OperationsGetMigrationsKindParameter](docs/Model/OperationsGetMigrationsKindParameter.md)
- [OperationsGetSmartRollupAddMessagesOpsHashParameter](docs/Model/OperationsGetSmartRollupAddMessagesOpsHashParameter.md)
- [OperationsGetSmartRollupCementOpsRollupParameter](docs/Model/OperationsGetSmartRollupCementOpsRollupParameter.md)
- [OperationsGetSmartRollupPublishOpsCommitmentHashParameter](docs/Model/OperationsGetSmartRollupPublishOpsCommitmentHashParameter.md)
- [OperationsGetSmartRollupRefuteOpsGameStatusParameter](docs/Model/OperationsGetSmartRollupRefuteOpsGameStatusParameter.md)
- [OperationsGetSmartRollupRefuteOpsMoveParameter](docs/Model/OperationsGetSmartRollupRefuteOpsMoveParameter.md)
- [OperationsGetStakingOpsActionParameter](docs/Model/OperationsGetStakingOpsActionParameter.md)
- [OriginatedContract](docs/Model/OriginatedContract.md)
- [OriginationOperation](docs/Model/OriginationOperation.md)
- [OriginationOperationAllOf](docs/Model/OriginationOperationAllOf.md)
- [PeriodInfo](docs/Model/PeriodInfo.md)
- [PreendorsementOperation](docs/Model/PreendorsementOperation.md)
- [PreendorsementOperationAllOf](docs/Model/PreendorsementOperationAllOf.md)
- [PrimType](docs/Model/PrimType.md)
- [Proposal](docs/Model/Proposal.md)
- [ProposalAlias](docs/Model/ProposalAlias.md)
- [ProposalInitiator](docs/Model/ProposalInitiator.md)
- [ProposalOperation](docs/Model/ProposalOperation.md)
- [ProposalOperationAllOf](docs/Model/ProposalOperationAllOf.md)
- [Protocol](docs/Model/Protocol.md)
- [ProtocolConstants](docs/Model/ProtocolConstants.md)
- [ProtocolParameter](docs/Model/ProtocolParameter.md)
- [Quote](docs/Model/Quote.md)
- [QuoteShort](docs/Model/QuoteShort.md)
- [RefutationGameStatusParameter](docs/Model/RefutationGameStatusParameter.md)
- [RefutationMoveParameter](docs/Model/RefutationMoveParameter.md)
- [RegisterConstantOperation](docs/Model/RegisterConstantOperation.md)
- [RegisterConstantOperationAllOf](docs/Model/RegisterConstantOperationAllOf.md)
- [RelatedContract](docs/Model/RelatedContract.md)
- [RelatedContractDelegate](docs/Model/RelatedContractDelegate.md)
- [RevealOperation](docs/Model/RevealOperation.md)
- [RevealOperationAllOf](docs/Model/RevealOperationAllOf.md)
- [RevelationPenaltyOperation](docs/Model/RevelationPenaltyOperation.md)
- [RevelationPenaltyOperationAllOf](docs/Model/RevelationPenaltyOperationAllOf.md)
- [RewardSplit](docs/Model/RewardSplit.md)
- [RightsGetCountStatusParameter](docs/Model/RightsGetCountStatusParameter.md)
- [RightsGetCountTypeParameter](docs/Model/RightsGetCountTypeParameter.md)
- [Rollup](docs/Model/Rollup.md)
- [RollupAllOf](docs/Model/RollupAllOf.md)
- [SelectParameter](docs/Model/SelectParameter.md)
- [SelectionParameter](docs/Model/SelectionParameter.md)
- [SetDelegateParametersOperation](docs/Model/SetDelegateParametersOperation.md)
- [SetDelegateParametersOperationAllOf](docs/Model/SetDelegateParametersOperationAllOf.md)
- [SetDepositsLimitOperation](docs/Model/SetDepositsLimitOperation.md)
- [SetDepositsLimitOperationAllOf](docs/Model/SetDepositsLimitOperationAllOf.md)
- [SmartRollup](docs/Model/SmartRollup.md)
- [SmartRollupAddMessagesOperation](docs/Model/SmartRollupAddMessagesOperation.md)
- [SmartRollupAddMessagesOperationAllOf](docs/Model/SmartRollupAddMessagesOperationAllOf.md)
- [SmartRollupAllOf](docs/Model/SmartRollupAllOf.md)
- [SmartRollupCementOperation](docs/Model/SmartRollupCementOperation.md)
- [SmartRollupCementOperationAllOf](docs/Model/SmartRollupCementOperationAllOf.md)
- [SmartRollupExecuteOperation](docs/Model/SmartRollupExecuteOperation.md)
- [SmartRollupExecuteOperationAllOf](docs/Model/SmartRollupExecuteOperationAllOf.md)
- [SmartRollupOriginateOperation](docs/Model/SmartRollupOriginateOperation.md)
- [SmartRollupOriginateOperationAllOf](docs/Model/SmartRollupOriginateOperationAllOf.md)
- [SmartRollupParameter](docs/Model/SmartRollupParameter.md)
- [SmartRollupPublishOperation](docs/Model/SmartRollupPublishOperation.md)
- [SmartRollupPublishOperationAllOf](docs/Model/SmartRollupPublishOperationAllOf.md)
- [SmartRollupRecoverBondOperation](docs/Model/SmartRollupRecoverBondOperation.md)
- [SmartRollupRecoverBondOperationAllOf](docs/Model/SmartRollupRecoverBondOperationAllOf.md)
- [SmartRollupRefuteOperation](docs/Model/SmartRollupRefuteOperation.md)
- [SmartRollupRefuteOperationAllOf](docs/Model/SmartRollupRefuteOperationAllOf.md)
- [SmartRollupsGetInboxMessagesCountTypeParameter](docs/Model/SmartRollupsGetInboxMessagesCountTypeParameter.md)
- [SmartRollupsGetSmartRollupCommitmentsCountStatusParameter](docs/Model/SmartRollupsGetSmartRollupCommitmentsCountStatusParameter.md)
- [SmartRollupsGetSmartRollupStakersBondStatusParameter](docs/Model/SmartRollupsGetSmartRollupStakersBondStatusParameter.md)
- [Software](docs/Model/Software.md)
- [SoftwareAlias](docs/Model/SoftwareAlias.md)
- [SortMode](docs/Model/SortMode.md)
- [SortParameter](docs/Model/SortParameter.md)
- [SourceOperation](docs/Model/SourceOperation.md)
- [SourceOperationParameter](docs/Model/SourceOperationParameter.md)
- [SplitDelegator](docs/Model/SplitDelegator.md)
- [SrBondStatusParameter](docs/Model/SrBondStatusParameter.md)
- [SrCommitment](docs/Model/SrCommitment.md)
- [SrCommitmentInfo](docs/Model/SrCommitmentInfo.md)
- [SrCommitmentInfoInitiator](docs/Model/SrCommitmentInfoInitiator.md)
- [SrCommitmentPredecessor](docs/Model/SrCommitmentPredecessor.md)
- [SrCommitmentRollup](docs/Model/SrCommitmentRollup.md)
- [SrCommitmentStatusParameter](docs/Model/SrCommitmentStatusParameter.md)
- [SrGame](docs/Model/SrGame.md)
- [SrGameInfo](docs/Model/SrGameInfo.md)
- [SrGameInfoInitiator](docs/Model/SrGameInfoInitiator.md)
- [SrGameInfoInitiatorCommitment](docs/Model/SrGameInfoInitiatorCommitment.md)
- [SrGameInfoOpponent](docs/Model/SrGameInfoOpponent.md)
- [SrGameInfoOpponentCommitment](docs/Model/SrGameInfoOpponentCommitment.md)
- [SrGameLastMove](docs/Model/SrGameLastMove.md)
- [SrGameMove](docs/Model/SrGameMove.md)
- [SrGameMoveSender](docs/Model/SrGameMoveSender.md)
- [SrGameRollup](docs/Model/SrGameRollup.md)
- [SrMessage](docs/Model/SrMessage.md)
- [SrMessageInitiator](docs/Model/SrMessageInitiator.md)
- [SrMessageSender](docs/Model/SrMessageSender.md)
- [SrMessageTarget](docs/Model/SrMessageTarget.md)
- [SrMessageTypeParameter](docs/Model/SrMessageTypeParameter.md)
- [SrStaker](docs/Model/SrStaker.md)
- [SrStakerAllOf](docs/Model/SrStakerAllOf.md)
- [Src1HashParameter](docs/Model/Src1HashParameter.md)
- [StakingActionParameter](docs/Model/StakingActionParameter.md)
- [StakingGetStakingUpdatesCountRoundingErrorParameter](docs/Model/StakingGetStakingUpdatesCountRoundingErrorParameter.md)
- [StakingGetStakingUpdatesCountTypeParameter](docs/Model/StakingGetStakingUpdatesCountTypeParameter.md)
- [StakingGetUnstakeRequestsCountStatusParameter](docs/Model/StakingGetUnstakeRequestsCountStatusParameter.md)
- [StakingOperation](docs/Model/StakingOperation.md)
- [StakingOperationAllOf](docs/Model/StakingOperationAllOf.md)
- [StakingUpdate](docs/Model/StakingUpdate.md)
- [StakingUpdateBaker](docs/Model/StakingUpdateBaker.md)
- [StakingUpdateStaker](docs/Model/StakingUpdateStaker.md)
- [StakingUpdateTypeParameter](docs/Model/StakingUpdateTypeParameter.md)
- [State](docs/Model/State.md)
- [Statistics](docs/Model/Statistics.md)
- [StatisticsQuote](docs/Model/StatisticsQuote.md)
- [StorageRecord](docs/Model/StorageRecord.md)
- [StorageRecordOperation](docs/Model/StorageRecordOperation.md)
- [StringParameter](docs/Model/StringParameter.md)
- [Symbols](docs/Model/Symbols.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketBalance](docs/Model/TicketBalance.md)
- [TicketBalanceAccount](docs/Model/TicketBalanceAccount.md)
- [TicketBalanceShort](docs/Model/TicketBalanceShort.md)
- [TicketBalanceShortTicket](docs/Model/TicketBalanceShortTicket.md)
- [TicketBalanceTicket](docs/Model/TicketBalanceTicket.md)
- [TicketFirstMinter](docs/Model/TicketFirstMinter.md)
- [TicketInfo](docs/Model/TicketInfo.md)
- [TicketInfoShort](docs/Model/TicketInfoShort.md)
- [TicketRawContent](docs/Model/TicketRawContent.md)
- [TicketRawType](docs/Model/TicketRawType.md)
- [TicketTicketer](docs/Model/TicketTicketer.md)
- [TicketTransfer](docs/Model/TicketTransfer.md)
- [TicketTransferFrom](docs/Model/TicketTransferFrom.md)
- [TicketTransferTo](docs/Model/TicketTransferTo.md)
- [TicketsGetTicketBalancesCountBalanceParameter](docs/Model/TicketsGetTicketBalancesCountBalanceParameter.md)
- [TicketsGetTicketsCountRawTypeParameter](docs/Model/TicketsGetTicketsCountRawTypeParameter.md)
- [TimestampParameter](docs/Model/TimestampParameter.md)
- [Token](docs/Model/Token.md)
- [TokenBalance](docs/Model/TokenBalance.md)
- [TokenBalanceShort](docs/Model/TokenBalanceShort.md)
- [TokenBalanceShortToken](docs/Model/TokenBalanceShortToken.md)
- [TokenBalanceToken](docs/Model/TokenBalanceToken.md)
- [TokenContract](docs/Model/TokenContract.md)
- [TokenFirstMinter](docs/Model/TokenFirstMinter.md)
- [TokenInfo](docs/Model/TokenInfo.md)
- [TokenInfoShort](docs/Model/TokenInfoShort.md)
- [TokenStandardParameter](docs/Model/TokenStandardParameter.md)
- [TokenTransfer](docs/Model/TokenTransfer.md)
- [TokenTransferTo](docs/Model/TokenTransferTo.md)
- [TokensGetTokensCountStandardParameter](docs/Model/TokensGetTokensCountStandardParameter.md)
- [TransactionOperation](docs/Model/TransactionOperation.md)
- [TransactionOperationAllOf](docs/Model/TransactionOperationAllOf.md)
- [TransferTicketOperation](docs/Model/TransferTicketOperation.md)
- [TransferTicketOperationAllOf](docs/Model/TransferTicketOperationAllOf.md)
- [TxParameter](docs/Model/TxParameter.md)
- [TxRollupCommitOperation](docs/Model/TxRollupCommitOperation.md)
- [TxRollupCommitOperationAllOf](docs/Model/TxRollupCommitOperationAllOf.md)
- [TxRollupDispatchTicketsOperation](docs/Model/TxRollupDispatchTicketsOperation.md)
- [TxRollupDispatchTicketsOperationAllOf](docs/Model/TxRollupDispatchTicketsOperationAllOf.md)
- [TxRollupFinalizeCommitmentOperation](docs/Model/TxRollupFinalizeCommitmentOperation.md)
- [TxRollupFinalizeCommitmentOperationAllOf](docs/Model/TxRollupFinalizeCommitmentOperationAllOf.md)
- [TxRollupOriginationOperation](docs/Model/TxRollupOriginationOperation.md)
- [TxRollupOriginationOperationAllOf](docs/Model/TxRollupOriginationOperationAllOf.md)
- [TxRollupRejectionOperation](docs/Model/TxRollupRejectionOperation.md)
- [TxRollupRejectionOperationAllOf](docs/Model/TxRollupRejectionOperationAllOf.md)
- [TxRollupRemoveCommitmentOperation](docs/Model/TxRollupRemoveCommitmentOperation.md)
- [TxRollupRemoveCommitmentOperationAllOf](docs/Model/TxRollupRemoveCommitmentOperationAllOf.md)
- [TxRollupReturnBondOperation](docs/Model/TxRollupReturnBondOperation.md)
- [TxRollupReturnBondOperationAllOf](docs/Model/TxRollupReturnBondOperationAllOf.md)
- [TxRollupSubmitBatchOperation](docs/Model/TxRollupSubmitBatchOperation.md)
- [TxRollupSubmitBatchOperationAllOf](docs/Model/TxRollupSubmitBatchOperationAllOf.md)
- [UnregisteredDelegateError](docs/Model/UnregisteredDelegateError.md)
- [UnregisteredDelegateErrorAllOf](docs/Model/UnregisteredDelegateErrorAllOf.md)
- [UnstakeRequest](docs/Model/UnstakeRequest.md)
- [UnstakeRequestStatusParameter](docs/Model/UnstakeRequestStatusParameter.md)
- [UpdateConsensusKeyOperation](docs/Model/UpdateConsensusKeyOperation.md)
- [UpdateConsensusKeyOperationAllOf](docs/Model/UpdateConsensusKeyOperationAllOf.md)
- [User](docs/Model/User.md)
- [UserAllOf](docs/Model/UserAllOf.md)
- [VdfRevelationOperation](docs/Model/VdfRevelationOperation.md)
- [VdfRevelationOperationAllOf](docs/Model/VdfRevelationOperationAllOf.md)
- [VoteParameter](docs/Model/VoteParameter.md)
- [VoterSnapshot](docs/Model/VoterSnapshot.md)
- [VoterSnapshotDelegate](docs/Model/VoterSnapshotDelegate.md)
- [VoterStatusParameter](docs/Model/VoterStatusParameter.md)
- [VotingEpoch](docs/Model/VotingEpoch.md)
- [VotingGetPeriodVotersStatusParameter](docs/Model/VotingGetPeriodVotersStatusParameter.md)
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

hello@bakingbad.dev

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.14.4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
