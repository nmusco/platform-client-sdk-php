# ImportWeekScheduleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description for the schedule | 
**userSchedules** | [**map[string,\PureCloudPlatform\Client\V2\Model\UserSchedule]**](UserSchedule.md) | User schedules | [optional] 
**published** | **bool** | Whether the schedule is published | [optional] 
**shortTermForecastId** | **string** | Short term forecast that should be associated with this schedule | [optional] 
**partialUploadIds** | **string[]** | IDs of partial uploads of user schedules to import week schedule. It is applicable only for large schedules where activity count in schedule is greater than 17500 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


