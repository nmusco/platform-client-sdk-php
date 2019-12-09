# WebChatMemberInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The communicationId of this member. | [optional] 
**displayName** | **string** | The display name of the member. | [optional] 
**avatarImageUrl** | **string** | The url to the avatar image of the member. | [optional] 
**role** | **string** | The role of the member, one of [agent, customer, acd, workflow] | 
**joinDate** | [**\DateTime**](\DateTime.md) | The time the member joined the conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**leaveDate** | [**\DateTime**](\DateTime.md) | The time the member left the conversation, or null if the member is still active in the conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**authenticatedGuest** | **bool** | If true, the guest member is an authenticated guest. | [optional] 
**customFields** | **map[string,string]** | Any custom fields of information pertaining to this member. | [optional] 
**state** | **string** | The connection state of this member. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


