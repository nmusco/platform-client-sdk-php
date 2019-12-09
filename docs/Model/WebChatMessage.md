# WebChatMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**conversation** | [**\PureCloudPlatform\Client\V2\Model\WebChatConversation**](WebChatConversation.md) | The identifier of the conversation | 
**sender** | [**\PureCloudPlatform\Client\V2\Model\WebChatMemberInfo**](WebChatMemberInfo.md) | The member who sent the message | 
**body** | **string** | The message body. | 
**bodyType** | **string** | The purpose of the message within the conversation, such as a standard text entry versus a greeting. | 
**timestamp** | [**\DateTime**](\DateTime.md) | The timestamp of the message, in ISO-8601 format | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


