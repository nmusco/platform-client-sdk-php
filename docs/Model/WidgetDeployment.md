# WidgetDeployment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** | A human-readable description of this Deployment. | [optional] 
**authenticationRequired** | **bool** | When true, the customer members starting a chat must be authenticated by supplying their JWT to the create operation. | [optional] 
**disabled** | **bool** | When true, all create chat operations using this Deployment will be rejected. | [optional] 
**flow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The URI of the Inbound Chat Flow to run when new chats are initiated under this Deployment. | [optional] 
**allowedDomains** | **string[]** | The list of domains that are approved to use this Deployment; the list will be added to CORS headers for ease of web use. | [optional] 
**clientType** | **string** | The type of display widget for which this Deployment is configured, which controls the administrator settings shown. | [optional] 
**clientConfig** | [**\PureCloudPlatform\Client\V2\Model\WidgetClientConfig**](WidgetClientConfig.md) | The client configuration options that should be made available to the clients of this Deployment. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


