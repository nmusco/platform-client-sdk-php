# RecordingJobsQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Operation to perform bulk task | 
**actionDate** | [**\DateTime**](\DateTime.md) | The date when the action will be performed. If the operation will cause the delete date of a recording to be older than the export date, the export date will be adjusted to the delete date. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**integrationId** | **string** | IntegrationId to Access AWS S3 bucket for bulk recording exports. This field is for EXPORT only | [optional] 
**includeScreenRecordings** | **bool** | Include Screen recordings for export action, default value &#x3D; true | [optional] 
**conversationQuery** | [**\PureCloudPlatform\Client\V2\Model\AsyncConversationQuery**](AsyncConversationQuery.md) | Conversation Query. Note: After the recording is created, it might take up to 48 hours for the recording to be included in the submitted job query. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


