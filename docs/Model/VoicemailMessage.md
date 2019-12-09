# VoicemailMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**conversation** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](Conversation.md) | The conversation that the voicemail message is associated with | [optional] 
**read** | **bool** | Whether the voicemail message is marked as read | [optional] 
**audioRecordingDurationSeconds** | **int** | The voicemail message&#39;s audio recording duration in seconds | [optional] 
**audioRecordingSizeBytes** | **int** | The voicemail message&#39;s audio recording size in bytes | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | The date the voicemail message was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | The date the voicemail message was last modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**deletedDate** | [**\DateTime**](\DateTime.md) | The date the voicemail message deleted property was set to true. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**callerAddress** | **string** | The caller address | [optional] 
**callerName** | **string** | Optionally the name of the caller that left the voicemail message if the caller was a known user | [optional] 
**callerUser** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | Optionally the user that left the voicemail message if the caller was a known user | [optional] 
**deleted** | **bool** | Whether the voicemail message has been marked as deleted | [optional] 
**note** | **string** | An optional note | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The user that the voicemail message belongs to or null which means the voicemail message belongs to a group or queue | [optional] 
**group** | [**\PureCloudPlatform\Client\V2\Model\Group**](Group.md) | The group that the voicemail message belongs to or null which means the voicemail message belongs to a user or queue | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\Queue**](Queue.md) | The queue that the voicemail message belongs to or null which means the voicemail message belongs to a user or group | [optional] 
**copiedFrom** | [**\PureCloudPlatform\Client\V2\Model\VoicemailCopyRecord**](VoicemailCopyRecord.md) | Represents where this voicemail message was copied from | [optional] 
**copiedTo** | [**\PureCloudPlatform\Client\V2\Model\VoicemailCopyRecord[]**](VoicemailCopyRecord.md) | Represents where this voicemail has been copied to | [optional] 
**deleteRetentionPolicy** | [**\PureCloudPlatform\Client\V2\Model\VoicemailRetentionPolicy**](VoicemailRetentionPolicy.md) | The retention policy for this voicemail when deleted is set to true | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


