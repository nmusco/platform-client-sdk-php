# QueueRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The queue name | 
**division** | [**\PureCloudPlatform\Client\V2\Model\WritableDivision**](WritableDivision.md) | The division to which this entity belongs. | [optional] 
**description** | **string** | The queue description. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | The date the queue was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | The date of the last modification to the queue. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**modifiedBy** | **string** | The ID of the user that last modified the queue. | [optional] 
**createdBy** | **string** | The ID of the user that created the queue. | [optional] 
**memberCount** | **int** | The number of users in the queue. | [optional] 
**mediaSettings** | [**map[string,\PureCloudPlatform\Client\V2\Model\MediaSetting]**](MediaSetting.md) | The media settings for the queue. Valid key values: CALL, CALLBACK, CHAT, EMAIL, MESSAGE, SOCIAL_EXPRESSION, VIDEO_COMM | [optional] 
**bullseye** | [**\PureCloudPlatform\Client\V2\Model\Bullseye**](Bullseye.md) | The bulls-eye settings for the queue. | [optional] 
**acwSettings** | [**\PureCloudPlatform\Client\V2\Model\AcwSettings**](AcwSettings.md) | The ACW settings for the queue. | [optional] 
**skillEvaluationMethod** | **string** | The skill evaluation method to use when routing conversations. | [optional] 
**queueFlow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The in-queue flow to use for conversations waiting in queue. | [optional] 
**whisperPrompt** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The prompt used for whisper on the queue, if configured. | [optional] 
**autoAnswerOnly** | **bool** | Specifies whether the configured whisper should play for all ACD calls, or only for those which are auto-answered. | [optional] 
**callingPartyName** | **string** | The name to use for caller identification for outbound calls from this queue. | [optional] 
**callingPartyNumber** | **string** | The phone number to use for caller identification for outbound calls from this queue. | [optional] 
**defaultScripts** | [**map[string,\PureCloudPlatform\Client\V2\Model\Script]**](Script.md) | The default script Ids for the communication types. | [optional] 
**outboundMessagingAddresses** | [**\PureCloudPlatform\Client\V2\Model\QueueMessagingAddresses**](QueueMessagingAddresses.md) | The messaging addresses for the queue. | [optional] 
**outboundEmailAddress** | [**\PureCloudPlatform\Client\V2\Model\QueueEmailAddress**](QueueEmailAddress.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


