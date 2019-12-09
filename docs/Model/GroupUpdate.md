# GroupUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The group name. | [optional] 
**description** | **string** |  | [optional] 
**state** | **string** | State of the group. | [optional] 
**version** | **int** | Current version for this resource. | 
**images** | [**\PureCloudPlatform\Client\V2\Model\UserImage[]**](UserImage.md) |  | [optional] 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\GroupContact[]**](GroupContact.md) |  | [optional] 
**rulesVisible** | **bool** | Are membership rules visible to the person requesting to view the group | [optional] 
**visibility** | **string** | Who can view this group | [optional] 
**ownerIds** | **string[]** | Owners of the group | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


