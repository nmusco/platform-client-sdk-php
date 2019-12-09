# ModelingStatusResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID generated for the modeling job.  Use to GET result when job is completed. | [optional] 
**status** | **string** | The status of the modeling job. | [optional] 
**errorDetails** | [**\PureCloudPlatform\Client\V2\Model\ModelingProcessingError[]**](ModelingProcessingError.md) | If the request could not be properly processed, error details will be given here. | [optional] 
**modelingResultUri** | **string** | The uri of the modeling result. It has a value if the status is either &#39;Success&#39;, &#39;PartialFailure&#39;, or &#39;Failed&#39;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


