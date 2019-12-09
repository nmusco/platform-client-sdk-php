# UpdateUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**chat** | [**\PureCloudPlatform\Client\V2\Model\Chat**](Chat.md) |  | [optional] 
**department** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**primaryContactInfo** | [**\PureCloudPlatform\Client\V2\Model\Contact[]**](Contact.md) | The address(s) used for primary contact. Updates to the corresponding address in the addresses list will be reflected here. | [optional] 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\Contact[]**](Contact.md) | Email address, phone number, and/or extension for this user. One entry is allowed per media type | [optional] 
**title** | **string** |  | [optional] 
**username** | **string** |  | [optional] 
**manager** | **string** |  | [optional] 
**images** | [**\PureCloudPlatform\Client\V2\Model\UserImage[]**](UserImage.md) |  | [optional] 
**version** | **int** | This value should be the current version of the user. The current version can be obtained with a GET on the user before doing a PATCH. | 
**profileSkills** | **string[]** | Profile skills possessed by the user | [optional] 
**locations** | [**\PureCloudPlatform\Client\V2\Model\Location[]**](Location.md) | The user placement at each site location. | [optional] 
**groups** | [**\PureCloudPlatform\Client\V2\Model\Group[]**](Group.md) | The groups the user is a member of | [optional] 
**state** | **string** | The state of the user. This property can be used to restore a deleted user or transition between active and inactive. If specified, it is the only modifiable field. | [optional] 
**acdAutoAnswer** | **bool** | The value that denotes if acdAutoAnswer is set on the user | [optional] 
**certifications** | **string[]** |  | [optional] 
**biography** | [**\PureCloudPlatform\Client\V2\Model\Biography**](Biography.md) |  | [optional] 
**employerInfo** | [**\PureCloudPlatform\Client\V2\Model\EmployerInfo**](EmployerInfo.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


