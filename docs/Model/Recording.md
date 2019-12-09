# Recording

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**conversationId** | **string** |  | [optional] 
**path** | **string** |  | [optional] 
**startTime** | **string** | The start time of the recording. Null when there is no playable media. | [optional] 
**endTime** | **string** | The end time of the recording. Null when there is no playable media. | [optional] 
**media** | **string** | The type of media that the recording is. At the moment that could be audio, chat, or email. | [optional] 
**annotations** | [**\PureCloudPlatform\Client\V2\Model\Annotation[]**](Annotation.md) | Annotations that belong to the recording. | [optional] 
**transcript** | [**\PureCloudPlatform\Client\V2\Model\ChatMessage[]**](ChatMessage.md) | Represents a chat transcript | [optional] 
**emailTranscript** | [**\PureCloudPlatform\Client\V2\Model\RecordingEmailMessage[]**](RecordingEmailMessage.md) | Represents an email transcript | [optional] 
**messagingTranscript** | [**\PureCloudPlatform\Client\V2\Model\RecordingMessagingMessage[]**](RecordingMessagingMessage.md) | Represents a messaging transcript | [optional] 
**fileState** | **string** | Represents the current file state for a recording. Examples: Uploading, Archived, etc | [optional] 
**restoreExpirationTime** | [**\DateTime**](\DateTime.md) | The amount of time a restored recording will remain restored before being archived again. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**mediaUris** | [**map[string,\PureCloudPlatform\Client\V2\Model\MediaResult]**](MediaResult.md) | The different mediaUris for the recording. Null when there is no playable media. | [optional] 
**estimatedTranscodeTimeMs** | **int** |  | [optional] 
**actualTranscodeTimeMs** | **int** |  | [optional] 
**archiveDate** | [**\DateTime**](\DateTime.md) | The date the recording will be archived. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**archiveMedium** | **string** | The type of archive medium used. Example: CloudArchive | [optional] 
**deleteDate** | [**\DateTime**](\DateTime.md) | The date the recording will be deleted. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**exportDate** | [**\DateTime**](\DateTime.md) | The date the recording will be exported. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**outputDurationMs** | **int** | Duration of transcoded media in milliseconds | [optional] 
**outputSizeInBytes** | **int** | Size of transcoded media in bytes. 0 if there is no transcoded media. | [optional] 
**maxAllowedRestorationsForOrg** | **int** | How many archive restorations the organization is allowed to have. | [optional] 
**remainingRestorationsAllowedForOrg** | **int** | The remaining archive restorations the organization has. | [optional] 
**sessionId** | **string** | The session id represents an external resource id, such as email, call, chat, etc | [optional] 
**users** | [**\PureCloudPlatform\Client\V2\Model\User[]**](User.md) | The users participating in the conversation | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


