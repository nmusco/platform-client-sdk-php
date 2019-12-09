# BatchDownloadJobStatusResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**jobId** | **string** | JobId returned when job was initially submitted | [optional] 
**expectedResultCount** | **int** | Number of results expected when job is completed | [optional] 
**resultCount** | **int** | Current number of results available | [optional] 
**errorCount** | **int** | Number of error results produced so far | [optional] 
**results** | [**\PureCloudPlatform\Client\V2\Model\BatchDownloadJobResult[]**](BatchDownloadJobResult.md) | Current set of results for the job | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


