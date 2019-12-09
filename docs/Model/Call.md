# Call

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The connection state of this communication. | [optional] 
**id** | **string** | A globally unique identifier for this communication. | [optional] 
**direction** | **string** | The direction of the call | [optional] 
**recording** | **bool** | True if this call is being recorded. | [optional] 
**recordingState** | **string** | State of recording on this call. | [optional] 
**muted** | **bool** | True if this call is muted so that remote participants can&#39;t hear any audio from this end. | [optional] 
**confined** | **bool** | True if this call is held and the person on this side hears hold music. | [optional] 
**held** | **bool** | True if this call is held and the person on this side hears silence. | [optional] 
**recordingId** | **string** | A globally unique identifier for the recording associated with this call. | [optional] 
**segments** | [**\PureCloudPlatform\Client\V2\Model\Segment[]**](Segment.md) | The time line of the participant&#39;s call, divided into activity segments. | [optional] 
**errorInfo** | [**\PureCloudPlatform\Client\V2\Model\ErrorBody**](ErrorBody.md) |  | [optional] 
**disconnectType** | **string** | System defined string indicating what caused the communication to disconnect. Will be null until the communication disconnects. | [optional] 
**startHoldTime** | [**\DateTime**](\DateTime.md) | The timestamp the call was placed on hold in the cloud clock if the call is currently on hold. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**documentId** | **string** | If call is an outbound fax of a document from content management, then this is the id in content management. | [optional] 
**startAlertingTime** | [**\DateTime**](\DateTime.md) | The timestamp the communication has when it is first put into an alerting state. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication was connected in the cloud clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**disconnectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**disconnectReasons** | [**\PureCloudPlatform\Client\V2\Model\DisconnectReason[]**](DisconnectReason.md) | List of reasons that this call was disconnected. This will be set once the call disconnects. | [optional] 
**faxStatus** | [**\PureCloudPlatform\Client\V2\Model\FaxStatus**](FaxStatus.md) | Extra information on fax transmission. | [optional] 
**provider** | **string** | The source provider for the call. | [optional] 
**scriptId** | **string** | The UUID of the script to use. | [optional] 
**peerId** | **string** | The id of the peer communication corresponding to a matching leg for this communication. | [optional] 
**uuiData** | **string** | User to User Information (UUI) data managed by SIP session application. | [optional] 
**self** | [**\PureCloudPlatform\Client\V2\Model\Address**](Address.md) | Address and name data for a call endpoint. | [optional] 
**other** | [**\PureCloudPlatform\Client\V2\Model\Address**](Address.md) | Address and name data for a call endpoint. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


