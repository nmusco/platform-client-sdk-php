# ConversationBasic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The time when the conversation started. This will be the time when the first participant joined the conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**endTime** | [**\DateTime**](\DateTime.md) | The time when the conversation ended. This will be the time when the last participant left the conversation, or null when the conversation is still active. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**divisions** | [**\PureCloudPlatform\Client\V2\Model\ConversationDivisionMembership[]**](ConversationDivisionMembership.md) | Identifiers of divisions associated with this conversation | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 
**participants** | [**\PureCloudPlatform\Client\V2\Model\ParticipantBasic[]**](ParticipantBasic.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


