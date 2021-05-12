# # Statistics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cycle** | **int** | Cycle at the end of which the statistics has been calculated. This field is only present in cyclic statistics. | [optional]
**date** | [**\DateTime**](\DateTime.md) | Day at the end of which the statistics has been calculated. This field is only present in daily statistics. | [optional]
**level** | **int** | Level of the block at which the statistics has been calculated | [optional]
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp of the block at which the statistics has been calculated (ISO 8601, e.g. &#x60;2020-02-20T02:40:57Z&#x60;) | [optional]
**total_supply** | **int** | Total supply - all existing tokens (including locked vested funds and frozen funds) plus not yet activated fundraiser tokens | [optional]
**circulating_supply** | **int** | Circulating supply - all active tokens which can affect supply and demand (can be spent/transferred) | [optional]
**total_bootstrapped** | **int** | Total amount of tokens initially created when starting the blockchain | [optional]
**total_commitments** | **int** | Total commitment amount (tokens to be activated by fundraisers) | [optional]
**total_activated** | **int** | Total amount of tokens activated by fundraisers | [optional]
**total_created** | **int** | Total amount of created/issued tokens | [optional]
**total_burned** | **int** | Total amount of burned tokens | [optional]
**total_vested** | **int** | Total amount of tokens locked on vested contracts | [optional]
**total_frozen** | **int** | Total amount of frozen tokens (frozen security deposits, frozen rewards and frozen fees) | [optional]
**quote** | [**OneOfQuoteShort**](OneOfQuoteShort.md) | Injected historical quote at the time of the block at which the statistics has been calculated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
