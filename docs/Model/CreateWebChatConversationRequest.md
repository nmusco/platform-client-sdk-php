# CreateWebChatConversationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organizationId** | **string** | The organization identifier. | 
**deploymentId** | **string** | The web chat Deployment ID which contains the appropriate settings for this chat conversation. | 
**routingTarget** | [**\PureCloudPlatform\Client\V2\Model\WebChatRoutingTarget**](WebChatRoutingTarget.md) | The routing information to use for the new chat conversation. | 
**memberInfo** | [**\PureCloudPlatform\Client\V2\Model\GuestMemberInfo**](GuestMemberInfo.md) | The guest member info to use for the new chat conversation. | 
**memberAuthToken** | **string** | If the guest member is an authenticated member (ie, not anonymous) his JWT is provided here. The token will have been previously generated with the \&quot;POST /api/v2/signeddata\&quot; resource. | [optional] 
**journeyContext** | [**\PureCloudPlatform\Client\V2\Model\JourneyContext**](JourneyContext.md) | A subset of the Journey System&#39;s data relevant to this conversation/session request (for external linkage and internal usage/context). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


