# Video

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The connection state of this communication. | [optional] 
**id** | **string** | A globally unique identifier for this communication. | [optional] 
**context** | **string** | The room id context (xmpp jid) for the conference session. | [optional] 
**audioMuted** | **bool** | Indicates whether this participant has muted their outgoing audio. | [optional] 
**videoMuted** | **bool** | Indicates whether this participant has muted/paused their outgoing video. | [optional] 
**sharingScreen** | **bool** | Indicates whether this participant is sharing their screen to the session. | [optional] 
**peerCount** | **int** | The number of peer participants from the perspective of the participant in the conference. | [optional] 
**disconnectType** | **string** | System defined string indicating what caused the communication to disconnect. Will be null until the communication disconnects. | [optional] 
**startAlertingTime** | [**\DateTime**](\DateTime.md) | The timestamp the communication has when it is first put into an alerting state. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication was connected in the cloud clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**disconnectedTime** | [**\DateTime**](\DateTime.md) | The timestamp when this communication disconnected from the conversation in the provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**provider** | **string** | The source provider for the video. | [optional] 
**peerId** | **string** | The id of the peer communication corresponding to a matching leg for this communication. | [optional] 
**msids** | **string[]** | List of media stream ids | [optional] 
**self** | [**\PureCloudPlatform\Client\V2\Model\Address**](Address.md) | Address and name data for a call endpoint. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


