# MessageDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**messageId** | **string** | UUID identifying the message media. | [optional] 
**messageURI** | **string** | A URI for this message entity. | [optional] 
**messageStatus** | **string** | Indicates the delivery status of the message. | [optional] 
**messageSegmentCount** | **int** | The message segment count, greater than 1 if the message content was split into multiple parts for this message type, e.g. SMS character limits. | [optional] 
**messageTime** | [**\DateTime**](\DateTime.md) | The time when the message was sent or received. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**media** | [**\PureCloudPlatform\Client\V2\Model\MessageMedia[]**](MessageMedia.md) | The media (images, files, etc) associated with this message, if any | [optional] 
**stickers** | [**\PureCloudPlatform\Client\V2\Model\MessageSticker[]**](MessageSticker.md) | One or more stickers associated with this message, if any | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


