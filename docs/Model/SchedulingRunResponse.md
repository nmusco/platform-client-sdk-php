# SchedulingRunResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**runId** | **string** | ID of the schedule run | [optional] 
**schedulerRunId** | **string** | The runId from scheduler service.  Useful for debugging schedule errors | [optional] 
**intradayRescheduling** | **bool** | Whether this is the result of a rescheduling request | [optional] 
**state** | **string** | Status of the schedule run | [optional] 
**percentComplete** | **double** | Completion percentage of the schedule run | [optional] 
**targetWeek** | **string** | The start date of the week for which the scheduling is done in yyyy-MM-dd format | [optional] 
**scheduleId** | **string** | ID of the schedule. Does not apply to reschedule, see reschedulingOptions.existingScheduleId | [optional] 
**scheduleDescription** | **string** | Description of the schedule | [optional] 
**schedulingStartTime** | [**\DateTime**](\DateTime.md) | Start time of the schedule run. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**schedulingStartedBy** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | User that started the schedule run | [optional] 
**schedulingCanceledBy** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | User that canceled the schedule run | [optional] 
**schedulingCompletedTime** | [**\DateTime**](\DateTime.md) | Time at which the scheduling run was completed. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**reschedulingOptions** | [**\PureCloudPlatform\Client\V2\Model\ReschedulingOptionsResponse**](ReschedulingOptionsResponse.md) | The selected options for the reschedule request. Will always be null if intradayRescheduling is false | [optional] 
**reschedulingResultExpiration** | [**\DateTime**](\DateTime.md) | When the rescheduling result data will expire. Results are kept temporarily as they should be applied as soon as possible after the run finishes.  Will always be null if intradayRescheduling is false. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**applied** | **bool** | Whether the rescheduling run has been marked applied | [optional] 
**unscheduledAgents** | [**\PureCloudPlatform\Client\V2\Model\UnscheduledAgentWarning[]**](UnscheduledAgentWarning.md) | Agents that were not scheduled in the rescheduling operation. Will always be null if intradayRescheduling is false | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


