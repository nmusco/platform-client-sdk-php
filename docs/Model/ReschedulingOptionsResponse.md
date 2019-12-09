# ReschedulingOptionsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startDate** | [**\DateTime**](\DateTime.md) | The start date of the range to reschedule in ISO-8601 format | 
**endDate** | [**\DateTime**](\DateTime.md) | The end date of the range to reschedule in ISO-8601 format | 
**agentIds** | **string[]** | The IDs of the agents to reschedule.  Null or empty means all agents on the schedule | [optional] 
**activityCodeIds** | **string[]** | The IDs of the activity codes to reschedule. Null or empty means all activity codes will be considered | [optional] 
**doNotChangeWeeklyPaidTime** | **bool** | Whether to prevent changes to weekly paid time | 
**doNotChangeDailyPaidTime** | **bool** | Whether to prevent changes to daily paid time | 
**doNotChangeShiftStartTimes** | **bool** | Whether to prevent changes to shift start times | 
**doNotChangeManuallyEditedShifts** | **bool** | Whether to prevent changes to manually edited shifts | 
**existingScheduleId** | **string** | The schedule ID of the schedule to which the results will be applied | [optional] 
**existingScheduleVersion** | **int** | The version of the schedule at the time the rescheduling was initiated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


