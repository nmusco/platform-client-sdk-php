# ScimV2CreateUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**schemas** | **string[]** | The list of supported schemas. | [optional] 
**active** | **bool** | Indicates whether the user&#39;s administrative status is active. | [optional] 
**userName** | **string** | The user&#39;s PureCloud email address. Must be unique. | 
**displayName** | **string** | The display name of the user. | 
**password** | **string** | The new password for the PureCloud user. Does not return an existing password. | [optional] 
**title** | **string** | The user&#39;s title. | [optional] 
**phoneNumbers** | [**\PureCloudPlatform\Client\V2\Model\ScimPhoneNumber[]**](ScimPhoneNumber.md) | The list of the user&#39;s phone numbers. | [optional] 
**emails** | [**\PureCloudPlatform\Client\V2\Model\ScimEmail[]**](ScimEmail.md) | The list of the user&#39;s email addresses. | [optional] 
**photos** | [**\PureCloudPlatform\Client\V2\Model\Photo[]**](Photo.md) | The list of the user&#39;s photos. | [optional] 
**externalId** | **string** | The external ID of the user. Set by the provisioning client. \&quot;caseExact\&quot; is set to \&quot;true\&quot;. \&quot;mutability\&quot; is set to \&quot;readWrite\&quot;. | [optional] 
**groups** | [**\PureCloudPlatform\Client\V2\Model\ScimV2GroupReference[]**](ScimV2GroupReference.md) | The list of groups that the user is a member of. | [optional] 
**roles** | **string[]** | The list of roles assigned to the user. | [optional] 
**urnietfparamsscimschemasextensionenterprise20User** | [**\PureCloudPlatform\Client\V2\Model\ScimV2EnterpriseUser**](ScimV2EnterpriseUser.md) | SCIM enterprise user attributes | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


