# # Software

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**short_hash** | **string** | Software ID (short commit hash) | [optional]
**first_level** | **int** | Level of the first block baked with this software | [optional]
**first_time** | [**\DateTime**](\DateTime.md) | Datetime of the first block baked with this software | [optional]
**last_level** | **int** | Level of the last block baked with this software | [optional]
**last_time** | [**\DateTime**](\DateTime.md) | Datetime of the last block baked with this software | [optional]
**blocks_count** | **int** | Total number of blocks baked with this software | [optional]
**metadata** | [**OneOfRawJson**](OneOfRawJson.md) | Offchain metadata | [optional]
**commit_date** | [**\DateTime**](\DateTime.md) | **DEPRECATED**. Use &#x60;metadata&#x60; instead. | [optional]
**commit_hash** | **string** | **DEPRECATED**. Use &#x60;metadata&#x60; instead. | [optional]
**version** | **string** | **DEPRECATED**. Use &#x60;metadata&#x60; instead. | [optional]
**tags** | **string[]** | **DEPRECATED**. Use &#x60;metadata&#x60; instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
