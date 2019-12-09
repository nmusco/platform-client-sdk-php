# ScimV2Group

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the SCIM resource. Set by the service provider. \&quot;caseExact\&quot; is set to \&quot;true\&quot;. \&quot;Mutability\&quot; is set to \&quot;readOnly\&quot;. \&quot;Returned\&quot; is set to \&quot;always\&quot;. | [optional] 
**schemas** | **string[]** | The list of supported schemas. | [optional] 
**displayName** | **string** | The display name of the group. | [optional] 
**members** | [**\PureCloudPlatform\Client\V2\Model\ScimV2MemberReference[]**](ScimV2MemberReference.md) | The list of members in the group. | [optional] 
**meta** | [**\PureCloudPlatform\Client\V2\Model\ScimMetadata**](ScimMetadata.md) | Resource SCIM meta | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


