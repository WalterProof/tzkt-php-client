# # Entrypoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Entrypoint name | [optional]
**json_parameters** | **mixed** | A kind of JSON schema, describing how parameters will look like in a human-readable JSON format | [optional]
**micheline_parameters** | [**\Bzzhh\Tzkt\Model\EntrypointMichelineParameters**](EntrypointMichelineParameters.md) |  | [optional]
**michelson_parameters** | **string** | Parameters schema in michelson format | [optional]
**unused** | **bool** | Unused means that the entrypoint can be normalized to a more specific one. For example here &#x60;(or %entry1 (unit %entry2) (nat %entry3))&#x60; the &#x60;%entry1&#x60; is unused entrypoint because it can be normalized to &#x60;%entry2&#x60; or &#x60;%entry3&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
