# CreateCallRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phoneNumber** | **string** | The phone number to dial. | [optional] 
**callerId** | **string** | The caller id phone number for this outbound call. | [optional] 
**callerIdName** | **string** | The caller id name for this outbound call. | [optional] 
**callFromQueueId** | **string** | The queue ID to call on behalf of. | [optional] 
**callQueueId** | **string** | The queue ID to call. | [optional] 
**callUserId** | **string** | The user ID to call. | [optional] 
**priority** | **int** | The priority to assign to this call (if calling a queue). | [optional] 
**languageId** | **string** | The language skill ID to use for routing this call (if calling a queue). | [optional] 
**routingSkillsIds** | **string[]** | The skill ID&#39;s to use for routing this call (if calling a queue). | [optional] 
**conversationIds** | **string[]** | The list of existing call conversations to merge into a new ad-hoc conference. | [optional] 
**participants** | [**\PureCloudPlatform\Client\V2\Model\Destination[]**](Destination.md) | The list of participants to call to create a new ad-hoc conference. | [optional] 
**uuiData** | **string** | User to User Information (UUI) data managed by SIP session application. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


