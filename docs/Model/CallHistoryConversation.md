# CallHistoryConversation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**participants** | [**\PureCloudPlatform\Client\V2\Model\CallHistoryParticipant[]**](CallHistoryParticipant.md) | The list of participants involved in the conversation. | [optional] 
**direction** | **string** | The direction of the call relating to the current user | [optional] 
**wentToVoicemail** | **bool** | Did the call end in the current user&#39;s voicemail | [optional] 
**missedCall** | **bool** | Did the user not answer this conversation | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The time the user joined the conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**wasConference** | **bool** | Was this conversation a conference | [optional] 
**wasCallback** | **bool** | Was this conversation a callback | [optional] 
**hadScreenShare** | **bool** | Did this conversation have a screen share session | [optional] 
**hadCobrowse** | **bool** | Did this conversation have a cobrowse session | [optional] 
**wasOutboundCampaign** | **bool** | Was this conversation associated with an outbound campaign | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


