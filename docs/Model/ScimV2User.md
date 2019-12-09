# ScimV2User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the SCIM resource. Set by the service provider. \&quot;caseExact\&quot; is set to \&quot;true\&quot;. \&quot;Mutability\&quot; is set to \&quot;readOnly\&quot;. \&quot;Returned\&quot; is set to \&quot;always\&quot;. | [optional] 
**schemas** | **string[]** | The list of supported schemas. | [optional] 
**active** | **bool** | Indicates whether the user&#39;s administrative status is active. | [optional] 
**userName** | **string** | The user&#39;s PureCloud email address. Must be unique. | [optional] 
**displayName** | **string** | The display name of the user. | [optional] 
**password** | **string** | The new password for the PureCloud user. Does not return an existing password. | [optional] 
**title** | **string** | The user&#39;s title. | [optional] 
**phoneNumbers** | [**\PureCloudPlatform\Client\V2\Model\ScimPhoneNumber[]**](ScimPhoneNumber.md) | The list of the user&#39;s phone numbers. | [optional] 
**emails** | [**\PureCloudPlatform\Client\V2\Model\ScimEmail[]**](ScimEmail.md) | The list of the user&#39;s email addresses. | [optional] 
**photos** | [**\PureCloudPlatform\Client\V2\Model\Photo[]**](Photo.md) | The list of the user&#39;s photos. | [optional] 
**externalId** | **string** | The external ID of the user. Set by the provisioning client. \&quot;caseExact\&quot; is set to \&quot;true\&quot;. \&quot;mutability\&quot; is set to \&quot;readWrite\&quot;. | [optional] 
**groups** | [**\PureCloudPlatform\Client\V2\Model\ScimV2GroupReference[]**](ScimV2GroupReference.md) | The list of groups that the user is a member of. | [optional] 
**roles** | **string[]** | The list of roles assigned to the user. | [optional] 
**urnietfparamsscimschemasextensionenterprise20User** | [**\PureCloudPlatform\Client\V2\Model\ScimV2EnterpriseUser**](ScimV2EnterpriseUser.md) | SCIM enterprise user attributes | [optional] 
**meta** | [**\PureCloudPlatform\Client\V2\Model\ScimMetadata**](ScimMetadata.md) | Resource SCIM meta | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


