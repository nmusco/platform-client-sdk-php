# MessageData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**providerMessageId** | **string** | The unique identifier of the message from provider | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | The time when the message was received or sent. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**fromAddress** | **string** | The sender of the text message. | [optional] 
**toAddress** | **string** | The recipient of the text message. | [optional] 
**direction** | **string** | The direction of the message. | [optional] 
**messengerType** | **string** | Type of text messenger. | [optional] 
**textBody** | **string** | The body of the text message. | 
**status** | **string** | The status of the message. | 
**media** | [**\PureCloudPlatform\Client\V2\Model\MessageMedia[]**](MessageMedia.md) | The media details associated to a message. | [optional] 
**stickers** | [**\PureCloudPlatform\Client\V2\Model\MessageSticker[]**](MessageSticker.md) | The sticker details associated to a message. | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User who sent this message. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


