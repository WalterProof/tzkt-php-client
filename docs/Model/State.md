# # State

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cycle** | **int** | Current cycle | [optional]
**level** | **int** | The height of the last block from the genesis block | [optional]
**hash** | **string** | Block hash | [optional]
**protocol** | **string** | Current protocol hash | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | The datetime at which the last block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**voting_epoch** | **int** | Current voring epoch index, starting from zero | [optional]
**voting_period** | **int** | Current voting period index, starting from zero | [optional]
**known_level** | **int** | The height of the last known block from the genesis block | [optional]
**last_sync** | [**\DateTime**](\DateTime.md) | The datetime of last TzKT indexer synchronization (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**synced** | **bool** | State of TzKT indexer synchronization | [optional]
**quote_level** | **int** | The height of the block where quotes were updated last time | [optional]
**quote_btc** | **double** | Last known XTZ/BTC price | [optional]
**quote_eur** | **double** | Last known XTZ/EUR price | [optional]
**quote_usd** | **double** | Last known XTZ/USD price | [optional]
**quote_cny** | **double** | Last known XTZ/CNY price | [optional]
**quote_jpy** | **double** | Last known XTZ/JPY price | [optional]
**quote_krw** | **double** | Last known XTZ/KRW price | [optional]
**quote_eth** | **double** | Last known XTZ/ETH price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
