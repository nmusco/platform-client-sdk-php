# WebChatDeployment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**authenticationRequired** | **bool** |  | [optional] 
**authenticationUrl** | **string** | URL for third party service authenticating web chat clients. See https://github.com/MyPureCloud/authenticated-web-chat-server-examples | [optional] 
**disabled** | **bool** |  | [optional] 
**webChatConfig** | [**\PureCloudPlatform\Client\V2\Model\WebChatConfig**](WebChatConfig.md) |  | [optional] 
**allowedDomains** | **string[]** |  | [optional] 
**flow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The URI of the Inbound Chat Flow to run when new chats are initiated under this Deployment. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


