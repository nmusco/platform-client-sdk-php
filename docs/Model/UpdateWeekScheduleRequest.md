# UpdateWeekScheduleRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the week schedule | [optional] 
**published** | **bool** | Whether the week schedule is published | [optional] 
**userSchedules** | [**map[string,\PureCloudPlatform\Client\V2\Model\UserSchedule]**](UserSchedule.md) | User schedules in the week | [optional] 
**partialUploadIds** | **string[]** | IDs of partial uploads to include in this imported schedule. It is applicable only for large schedules where activity count in schedule is greater than 17500 | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version metadata for this work plan | 
**agentSchedulesVersion** | **int** | Version of agent schedules in the week schedule | 
**shortTermForecast** | [**\PureCloudPlatform\Client\V2\Model\ShortTermForecastReference**](ShortTermForecastReference.md) | Reference to optionally point the schedule at a new short term forecast | [optional] 
**headcountForecast** | [**\PureCloudPlatform\Client\V2\Model\HeadcountForecast**](HeadcountForecast.md) | The headcount forecast associated with the schedule.  If not null, existing values will be irrecoverably replaced | [optional] 
**agentUpdateFilter** | **string** | For a published schedule, this determines whether a notification will be shown to agents in the default PureCloud user interface.  The CPC notification will always be sent and the value specified here affects what data is returned in the &#39;updates&#39; property.  In the default PureCloud UI, \&quot;None\&quot; means that agents will not be notified, \&quot;ShiftTimesOnly\&quot; means agents will only be notified for changes to shift start and end times,  and \&quot;All\&quot; means that agents will be notified for any change to a shift or activity (except for full day off activities).  When building a custom client, use this property to specify the level of detail you need. Defaults to \&quot;ShiftTimesOnly\&quot;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


