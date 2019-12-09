# ScheduleGenerationWarning

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **string** | ID of the user in the warning | [optional] 
**userNotLicensed** | **bool** | Whether the user does not have the appropriate license to be scheduled | [optional] 
**unableToMeetMaxDays** | **bool** | Whether the number of scheduled days exceeded the maximum days to schedule defined in the agent work plan | [optional] 
**unableToScheduleRequiredDays** | **string[]** | Days indicated as required to work in agent work plan where no viable shift was found to schedule | [optional] 
**unableToMeetMinPaidForTheWeek** | **bool** | Whether the schedule did not meet the minimum paid time for the week defined in the agent work plan | [optional] 
**unableToMeetMaxPaidForTheWeek** | **bool** | Whether the schedule exceeded the maximum paid time for the week defined in the agent work plan | [optional] 
**noNeedDays** | **string[]** | Days agent was scheduled but there was no need to meet. The scheduled days have no effect on service levels | [optional] 
**shiftsTooCloseTogether** | **bool** | Whether the schedule did not meet the minimum time between shifts defined in the agent work plan | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


