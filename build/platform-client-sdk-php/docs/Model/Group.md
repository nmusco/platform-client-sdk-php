# Group

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The group name. | 
**description** | **string** |  | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified date/time. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**memberCount** | **int** | Number of members. | [optional] 
**state** | **string** | Active, inactive, or deleted state. | [optional] 
**version** | **int** | Current version for this resource. | [optional] 
**type** | **string** | Type of group. | 
**images** | [**\PureCloudPlatform\Client\V2\Model\UserImage[]**](UserImage.md) |  | [optional] 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\GroupContact[]**](GroupContact.md) |  | [optional] 
**rulesVisible** | **bool** | Are membership rules visible to the person requesting to view the group | 
**visibility** | **string** | Who can view this group | 
**owners** | [**\PureCloudPlatform\Client\V2\Model\User[]**](User.md) | Owners of the group | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


