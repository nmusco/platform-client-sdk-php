# SocialExpression

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The connection state of this communication. | [optional] 
**id** | **string** | A globally unique identifier for this communication. | [optional] 
**socialMediaId** | **string** | A globally unique identifier for the social media. | [optional] 
**socialMediaHub** | **string** | The social network of the communication | [optional] 
**socialUserName** | **string** | The user name for the communication. | [optional] 
**previewText** | **string** | The text preview of the communication contents | [optional] 
**recordingId** | **string** | A globally unique identifier for the recording associated with this chat. | [optional] 
**segments** | [**\PureCloudPlatform\Client\V2\Model\Segment[]**](Segment.md) | The time line of the participant&#39;s chat, divided into activity segments. | [optional] 
**held** | **bool** | True if this call is held and the person on this side hears silence. | [optional] 
**disconnectType** | **string** | System defined string indicating what caused the communication to disconnect. Will be null until the communication disconnects. | [optional] 
**startHoldTime** | [**\DateTime**](\DateTime.md) | The timestamp the chat was placed on hold in the cloud clock if the chat is currently on hold. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**startAlertingTime** | [**\DateTime**](\DateTime.md) | The timestamp the communication has when it is first put into an alerting state. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication was connected in the cloud clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**disconnectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**provider** | **string** | The source provider for the social expression. | [optional] 
**scriptId** | **string** | The UUID of the script to use. | [optional] 
**peerId** | **string** | The id of the peer communication corresponding to a matching leg for this communication. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


