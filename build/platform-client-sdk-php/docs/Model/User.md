# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**division** | [**\PureCloudPlatform\Client\V2\Model\Division**](Division.md) | The division to which this entity belongs. | [optional] 
**chat** | [**\PureCloudPlatform\Client\V2\Model\Chat**](Chat.md) |  | [optional] 
**department** | **string** |  | [optional] 
**email** | **string** |  | [optional] 
**primaryContactInfo** | [**\PureCloudPlatform\Client\V2\Model\Contact[]**](Contact.md) | Auto populated from addresses. | [optional] 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\Contact[]**](Contact.md) | Email addresses and phone numbers for this user | [optional] 
**state** | **string** | The current state for this user. | [optional] 
**title** | **string** |  | [optional] 
**username** | **string** |  | [optional] 
**manager** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**images** | [**\PureCloudPlatform\Client\V2\Model\UserImage[]**](UserImage.md) |  | [optional] 
**version** | **int** | Required when updating a user, this value should be the current version of the user.  The current version can be obtained with a GET on the user before doing a PATCH. | 
**certifications** | **string[]** |  | [optional] 
**biography** | [**\PureCloudPlatform\Client\V2\Model\Biography**](Biography.md) |  | [optional] 
**employerInfo** | [**\PureCloudPlatform\Client\V2\Model\EmployerInfo**](EmployerInfo.md) |  | [optional] 
**routingStatus** | [**\PureCloudPlatform\Client\V2\Model\RoutingStatus**](RoutingStatus.md) | ACD routing status | [optional] 
**presence** | [**\PureCloudPlatform\Client\V2\Model\UserPresence**](UserPresence.md) | Active presence | [optional] 
**conversationSummary** | [**\PureCloudPlatform\Client\V2\Model\UserConversationSummary**](UserConversationSummary.md) | Summary of conversion statistics for conversation types. | [optional] 
**outOfOffice** | [**\PureCloudPlatform\Client\V2\Model\OutOfOffice**](OutOfOffice.md) | Determine if out of office is enabled | [optional] 
**geolocation** | [**\PureCloudPlatform\Client\V2\Model\Geolocation**](Geolocation.md) | Current geolocation position | [optional] 
**station** | [**\PureCloudPlatform\Client\V2\Model\UserStations**](UserStations.md) | Effective, default, and last station information | [optional] 
**authorization** | [**\PureCloudPlatform\Client\V2\Model\UserAuthorization**](UserAuthorization.md) | Roles and permissions assigned to the user | [optional] 
**profileSkills** | **string[]** | Profile skills possessed by the user | [optional] 
**locations** | [**\PureCloudPlatform\Client\V2\Model\Location[]**](Location.md) | The user placement at each site location. | [optional] 
**groups** | [**\PureCloudPlatform\Client\V2\Model\Group[]**](Group.md) | The groups the user is a member of | [optional] 
**skills** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingSkill[]**](UserRoutingSkill.md) | Routing (ACD) skills possessed by the user | [optional] 
**languages** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingLanguage[]**](UserRoutingLanguage.md) | Routing (ACD) languages possessed by the user | [optional] 
**acdAutoAnswer** | **bool** | acd auto answer | [optional] 
**languagePreference** | **string** | preferred language by the user | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


