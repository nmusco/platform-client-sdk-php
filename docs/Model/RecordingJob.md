# RecordingJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**state** | **string** | The current state of the job. | 
**recordingJobsQuery** | [**\PureCloudPlatform\Client\V2\Model\RecordingJobsQuery**](RecordingJobsQuery.md) | Original query of the job. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date when the job was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**totalConversations** | **int** | Total number of conversations affected. | [optional] 
**totalRecordings** | **int** | Total number of recordings affected. | [optional] 
**totalProcessedRecordings** | **int** | Total number of recordings have been processed. | [optional] 
**percentProgress** | **int** | Progress in percentage based on the number of recordings | [optional] 
**errorMessage** | **string** | Error occurred during the job execution | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\AddressableEntityRef**](AddressableEntityRef.md) | Details of the user created the job | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


