# SchedulingStatusResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID generated for the scheduling job.  Use to GET result when job is completed. | [optional] 
**status** | **string** | The status of the scheduling job. | [optional] 
**errorDetails** | [**\PureCloudPlatform\Client\V2\Model\SchedulingProcessingError[]**](SchedulingProcessingError.md) | If the request could not be properly processed, error details will be given here. | [optional] 
**schedulingResultUri** | **string** | The uri of the scheduling result. It has a value if the status is &#39;Success&#39;. | [optional] 
**percentComplete** | **int** | The percentage of the job that is complete. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


