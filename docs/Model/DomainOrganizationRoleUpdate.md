# DomainOrganizationRoleUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the role | 
**description** | **string** |  | [optional] 
**defaultRoleId** | **string** |  | [optional] 
**permissions** | **string[]** |  | [optional] 
**unusedPermissions** | **string[]** | A collection of the permissions the role is not using | [optional] 
**permissionPolicies** | [**\PureCloudPlatform\Client\V2\Model\DomainPermissionPolicy[]**](DomainPermissionPolicy.md) |  | [optional] 
**userCount** | **int** |  | [optional] 
**roleNeedsUpdate** | **bool** | Optional unless patch operation. | [optional] 
**default** | **bool** |  | [optional] 
**base** | **bool** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


