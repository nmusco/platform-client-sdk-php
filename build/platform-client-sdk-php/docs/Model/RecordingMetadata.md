# RecordingMetadata

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**conversationId** | **string** |  | [optional] 
**path** | **string** |  | [optional] 
**startTime** | **string** | The start time of the recording for screen recordings. Null for other types. | [optional] 
**endTime** | **string** |  | [optional] 
**media** | **string** | The type of media that the recording is. At the moment that could be audio, chat, email, or message. | [optional] 
**annotations** | [**\PureCloudPlatform\Client\V2\Model\Annotation[]**](Annotation.md) | Annotations that belong to the recording. Populated when recording filestate is AVAILABLE. | [optional] 
**fileState** | **string** | Represents the current file state for a recording. Examples: Uploading, Archived, etc | [optional] 
**restoreExpirationTime** | [**\DateTime**](\DateTime.md) | The amount of time a restored recording will remain restored before being archived again. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**archiveDate** | [**\DateTime**](\DateTime.md) | The date the recording will be archived. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**archiveMedium** | **string** | The type of archive medium used. Example: CloudArchive | [optional] 
**deleteDate** | [**\DateTime**](\DateTime.md) | The date the recording will be deleted. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**exportDate** | [**\DateTime**](\DateTime.md) | The date the recording will be exported. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**maxAllowedRestorationsForOrg** | **int** | How many archive restorations the organization is allowed to have. | [optional] 
**remainingRestorationsAllowedForOrg** | **int** | The remaining archive restorations the organization has. | [optional] 
**sessionId** | **string** | The session id represents an external resource id, such as email, call, chat, etc | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


