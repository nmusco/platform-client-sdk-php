# ScimConfigResourceType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the SCIM resource. Set by the service provider. \&quot;caseExact\&quot; is set to \&quot;true\&quot;. \&quot;Mutability\&quot; is set to \&quot;readOnly\&quot;. \&quot;Returned\&quot; is set to \&quot;always\&quot;. | [optional] 
**schemas** | **string[]** | The list of supported schemas. | [optional] 
**name** | **string** | The name of the resource type. | [optional] 
**description** | **string** | The description of the resource type. | [optional] 
**schema** | **string** | The URI of the primary or base schema for the resource type. | [optional] 
**schemaExtensions** | [**\PureCloudPlatform\Client\V2\Model\ScimConfigResourceTypeSchemaExtension[]**](ScimConfigResourceTypeSchemaExtension.md) | The list of schema extensions for the resource type. | [optional] 
**endpoint** | **string** | The HTTP-addressable endpoint of the resource type. Appears after the base URL. | [optional] 
**meta** | [**\PureCloudPlatform\Client\V2\Model\ScimMetadata**](ScimMetadata.md) | Resource SCIM meta | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


