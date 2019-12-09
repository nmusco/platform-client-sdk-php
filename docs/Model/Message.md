# Message

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The connection state of this communication. | [optional] 
**id** | **string** | A globally unique identifier for this communication. | [optional] 
**held** | **bool** | True if this call is held and the person on this side hears silence. | [optional] 
**segments** | [**\PureCloudPlatform\Client\V2\Model\Segment[]**](Segment.md) | The time line of the participant&#39;s message, divided into activity segments. | [optional] 
**direction** | **string** | The direction of the message. | [optional] 
**recordingId** | **string** | A globally unique identifier for the recording associated with this message. | [optional] 
**errorInfo** | [**\PureCloudPlatform\Client\V2\Model\ErrorBody**](ErrorBody.md) |  | [optional] 
**disconnectType** | **string** | System defined string indicating what caused the communication to disconnect. Will be null until the communication disconnects. | [optional] 
**startHoldTime** | [**\DateTime**](\DateTime.md) | The timestamp the message was placed on hold in the cloud clock if the message is currently on hold. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**startAlertingTime** | [**\DateTime**](\DateTime.md) | The timestamp the communication has when it is first put into an alerting state. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication was connected in the cloud clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**disconnectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**provider** | **string** | The source provider for the message. | [optional] 
**type** | **string** | Indicates the type of message platform from which the message originated. | [optional] 
**recipientCountry** | **string** | Indicates the country where the recipient is associated in ISO 3166-1 alpha-2 format. | [optional] 
**recipientType** | **string** | The type of the recipient. Eg: Provisioned phoneNumber is the recipient for sms message type. | [optional] 
**scriptId** | **string** | The UUID of the script to use. | [optional] 
**peerId** | **string** | The id of the peer communication corresponding to a matching leg for this communication. | [optional] 
**toAddress** | [**\PureCloudPlatform\Client\V2\Model\Address**](Address.md) | Address and name data for a call endpoint. | [optional] 
**fromAddress** | [**\PureCloudPlatform\Client\V2\Model\Address**](Address.md) | Address and name data for a call endpoint. | [optional] 
**messages** | [**\PureCloudPlatform\Client\V2\Model\MessageDetails[]**](MessageDetails.md) | The messages sent on this communication channel. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


