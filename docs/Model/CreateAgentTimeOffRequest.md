# CreateAgentTimeOffRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityCodeId** | **string** | The ID of the activity code associated with this time off request. Activity code must be of the TimeOff category | 
**notes** | **string** | Notes about the time off request | [optional] 
**fullDayManagementUnitDates** | **string[]** | A set of dates in yyyy-MM-dd format.  Should be interpreted in the management unit&#39;s configured time zone. | [optional] 
**partialDayStartDateTimes** | [**\DateTime[]**](\DateTime.md) | A set of start date-times in ISO-8601 format for partial day requests. | [optional] 
**dailyDurationMinutes** | **int** | The daily duration of this time off request in minutes | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


