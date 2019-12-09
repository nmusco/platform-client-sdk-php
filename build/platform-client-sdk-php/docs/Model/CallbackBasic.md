# CallbackBasic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The connection state of this communication. | [optional] 
**id** | **string** | A globally unique identifier for this communication. | [optional] 
**segments** | [**\PureCloudPlatform\Client\V2\Model\Segment[]**](Segment.md) | The time line of the participant&#39;s callback, divided into activity segments. | [optional] 
**direction** | **string** | The direction of the call | [optional] 
**held** | **bool** | True if this call is held and the person on this side hears silence. | [optional] 
**disconnectType** | **string** | System defined string indicating what caused the communication to disconnect. Will be null until the communication disconnects. | [optional] 
**startHoldTime** | [**\DateTime**](\DateTime.md) | The timestamp the callback was placed on hold in the cloud clock if the callback is currently on hold. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dialerPreview** | [**\PureCloudPlatform\Client\V2\Model\DialerPreview**](DialerPreview.md) | The preview data to be used when this callback is a Preview. | [optional] 
**voicemail** | [**\PureCloudPlatform\Client\V2\Model\Voicemail**](Voicemail.md) | The voicemail data to be used when this callback is an ACD voicemail. | [optional] 
**callbackNumbers** | **string[]** | The phone number(s) to use to place the callback. | [optional] 
**callbackUserName** | **string** | The name of the user requesting a callback. | [optional] 
**scriptId** | **string** | The UUID of the script to use. | [optional] 
**skipEnabled** | **bool** | True if the ability to skip a callback should be enabled. | [optional] 
**timeoutSeconds** | **int** | The number of seconds before the system automatically places a call for a callback.  0 means the automatic placement is disabled. | [optional] 
**startAlertingTime** | [**\DateTime**](\DateTime.md) | The timestamp the communication has when it is first put into an alerting state. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication was connected in the cloud clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**disconnectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**callbackScheduledTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication is scheduled in the provider clock. If this value is missing it indicates the callback will be placed immediately. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**automatedCallbackConfigId** | **string** | The id of the config for automatically placing the callback (and handling the disposition). If null, the callback will not be placed automatically but routed to an agent as per normal. | [optional] 
**provider** | **string** | The source provider for the callback. | [optional] 
**peerId** | **string** | The id of the peer communication corresponding to a matching leg for this communication. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


