# # State

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**chain** | **string** | Alias name of the chain (or \&quot;private\&quot; if it&#39;s not on the list of known chains) | [optional]
**chain_id** | **string** | Unique identifier of the chain | [optional]
**cycle** | **int** | Current cycle | [optional]
**level** | **int** | The height of the last block from the genesis block | [optional]
**hash** | **string** | Block hash | [optional]
**protocol** | **string** | Current protocol hash | [optional]
**next_protocol** | **string** | Next block protocol hash | [optional]
**timestamp** | **\DateTime** | The datetime at which the last block is claimed to have been created (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**voting_epoch** | **int** | Current voting epoch index, starting from zero | [optional]
**voting_period** | **int** | Current voting period index, starting from zero | [optional]
**known_level** | **int** | The height of the last known block from the genesis block | [optional]
**last_sync** | **\DateTime** | The datetime of last TzKT indexer synchronization (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**synced** | **bool** | State of TzKT indexer synchronization | [optional]
**quote_level** | **int** | The height of the block where quotes were updated last time | [optional]
**quote_btc** | **float** | Last known XTZ/BTC price | [optional]
**quote_eur** | **float** | Last known XTZ/EUR price | [optional]
**quote_usd** | **float** | Last known XTZ/USD price | [optional]
**quote_cny** | **float** | Last known XTZ/CNY price | [optional]
**quote_jpy** | **float** | Last known XTZ/JPY price | [optional]
**quote_krw** | **float** | Last known XTZ/KRW price | [optional]
**quote_eth** | **float** | Last known XTZ/ETH price | [optional]
**quote_gbp** | **float** | Last known XTZ/GBP price | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
