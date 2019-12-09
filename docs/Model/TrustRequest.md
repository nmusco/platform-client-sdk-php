# TrustRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\OrgUser**](OrgUser.md) | User who created this request. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date request was created. There is a 48 hour expiration on all requests. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**trustee** | [**\PureCloudPlatform\Client\V2\Model\Organization**](Organization.md) | Trustee organization who generated this request. | 
**users** | [**\PureCloudPlatform\Client\V2\Model\OrgUser[]**](OrgUser.md) | The list of trustee users that are requesting access. | [optional] 
**groups** | [**\PureCloudPlatform\Client\V2\Model\TrustGroup[]**](TrustGroup.md) | The list of trustee groups that are requesting access. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


