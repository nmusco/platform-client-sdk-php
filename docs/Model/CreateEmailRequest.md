# CreateEmailRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queueId** | **string** | The ID of the queue to use for routing the email conversation. This field is mutually exclusive with flowId | [optional] 
**flowId** | **string** | The ID of the flow to use for routing email conversation. This field is mutually exclusive with queueId | [optional] 
**provider** | **string** | The name of the provider that is sourcing the emails. The Provider \&quot;PureCloud Email\&quot; is reserved for native emails. | 
**skillIds** | **string[]** | The list of skill ID&#39;s to use for routing. | [optional] 
**languageId** | **string** | The ID of the language to use for routing. | [optional] 
**priority** | **int** | The priority to assign to the conversation for routing. | [optional] 
**attributes** | **map[string,string]** | The list of attributes to associate with the customer participant. | [optional] 
**toAddress** | **string** | The email address of the recipient of the email. | [optional] 
**toName** | **string** | The name of the recipient of the email. | [optional] 
**fromAddress** | **string** | The email address of the sender of the email. | [optional] 
**fromName** | **string** | The name of the sender of the email. | [optional] 
**subject** | **string** | The subject of the email | [optional] 
**direction** | **string** | Specify OUTBOUND to send an email on behalf of a queue, or INBOUND to create an external conversation. An external conversation is one where the provider is not PureCloud based. | [optional] 
**htmlBody** | **string** | An HTML body content of the email. | [optional] 
**textBody** | **string** | A text body content of the email. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


