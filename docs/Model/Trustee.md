# Trustee

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Organization Id for this trust. | [optional] 
**enabled** | **bool** | If disabled no trustee user will have access, even if they were previously added. | 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date Trust was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\OrgUser**](OrgUser.md) | User that created trust. | [optional] 
**organization** | [**\PureCloudPlatform\Client\V2\Model\Organization**](Organization.md) | Organization associated with this trust. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


