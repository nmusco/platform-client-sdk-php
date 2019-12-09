# UserPresence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**source** | **string** | Represents the source where the Presence was set. Some examples are: PURECLOUD, LYNC, OUTLOOK, etc. | [optional] 
**primary** | **bool** | A boolean used to tell whether or not to set this presence source as the primary on a PATCH | [optional] 
**presenceDefinition** | [**\PureCloudPlatform\Client\V2\Model\PresenceDefinition**](PresenceDefinition.md) |  | [optional] 
**message** | **string** |  | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


