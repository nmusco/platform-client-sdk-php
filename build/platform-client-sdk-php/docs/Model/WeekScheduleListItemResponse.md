# WeekScheduleListItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**weekDate** | **string** | First day of this week schedule in yyyy-MM-dd format | [optional] 
**description** | **string** | Description of the week schedule | [optional] 
**published** | **bool** | Whether the week schedule is published | [optional] 
**generationResults** | [**\PureCloudPlatform\Client\V2\Model\WeekScheduleGenerationResult**](WeekScheduleGenerationResult.md) | Summary of the results from the schedule run | [optional] 
**shortTermForecast** | [**\PureCloudPlatform\Client\V2\Model\ShortTermForecastReference**](ShortTermForecastReference.md) | Short term forecast associated with this schedule | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version metadata for this work plan | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


