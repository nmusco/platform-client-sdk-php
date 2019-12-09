# CreateOutboundMessagingConversationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queueId** | **string** | The ID of the queue to be associated with the message. This will determine the fromAddress of the message. | 
**toAddress** | **string** | The messaging address of the recipient of the message. For an SMS messenger type, the phone number address must be in E.164 format. E.g. +13175555555 or +34234234234 | 
**toAddressMessengerType** | **string** | The messaging address messenger type. | 
**useExistingConversation** | **bool** | An override to use an existing conversation.  If set to true, an existing conversation will be used if there is one within the conversation window.  If set to false, create request fails if there is a conversation within the conversation window. | [optional] 
**externalContactId** | **string** | The external contact Id of the recipient of the message. | [optional] 
**externalOrganizationId** | **string** | The external organization Id of the recipient of the message. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


