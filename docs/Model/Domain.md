# # Domain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal TzKT id.   **[sortable]** | [optional]
**level** | **int** | Domain level (i.e. tez has level&#x3D;1, domain.tez has level&#x3D;2, subdomain.domain.tez has level&#x3D;3, etc.). | [optional]
**name** | **string** | Domain record name.   **[sortable]** | [optional]
**owner** | [**\Bzzhh\Tzkt\Model\DomainOwner**](DomainOwner.md) |  | [optional]
**address** | [**\Bzzhh\Tzkt\Model\DomainAddress**](DomainAddress.md) |  | [optional]
**expiration** | **\DateTime** | Expiration datetime | [optional]
**data** | [**\Bzzhh\Tzkt\Model\DomainData**](DomainData.md) |  | [optional]
**first_level** | **int** | Level of the block where the domain was first seen.   **[sortable]** | [optional]
**first_time** | **\DateTime** | Timestamp of the block where the domain was first seen. | [optional]
**last_level** | **int** | Level of the block where the domain was last seen.   **[sortable]** | [optional]
**last_time** | **\DateTime** | Timestamp of the block where the domain was last seen. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
