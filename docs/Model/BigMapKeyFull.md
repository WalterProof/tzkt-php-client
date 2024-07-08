# # BigMapKeyFull

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**bigmap** | **int** | Bigmap ptr. | [optional]
**active** | **bool** | Key status (&#x60;true&#x60; - active, &#x60;false&#x60; - removed). | [optional]
**hash** | **string** | Key hash. | [optional]
**key** | **mixed** | Key in JSON or Micheline format, depending on the &#x60;micheline&#x60; query parameter.   **[sortable]** | [optional]
**value** | **mixed** | Value in JSON or Micheline format, depending on the &#x60;micheline&#x60; query parameter. Note, if the key is inactive (removed) this field will contain the last non-null value.   **[sortable]** | [optional]
**first_level** | **int** | Level of the block where the key was first seen.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the key was first seen. | [optional]
**last_level** | **int** | Level of the block where the key was last seen.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the key was last seen. | [optional]
**updates** | **int** | Total number of actions with the key.   **[sortable]** | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
