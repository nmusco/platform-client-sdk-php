# WorkPlanListItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**enabled** | **bool** | Whether the work plan is enabled for scheduling | [optional] 
**constrainWeeklyPaidTime** | **bool** | Whether the weekly paid time constraint is enabled for this work plan | [optional] 
**flexibleWeeklyPaidTime** | **bool** | Whether the weekly paid time constraint is flexible for this work plan | [optional] 
**weeklyExactPaidMinutes** | **int** | Exact weekly paid time in minutes for this work plan. Used if flexibleWeeklyPaidTime &#x3D;&#x3D; false | [optional] 
**weeklyMinimumPaidMinutes** | **int** | Minimum weekly paid time in minutes for this work plan. Used if flexibleWeeklyPaidTime &#x3D;&#x3D; true | [optional] 
**weeklyMaximumPaidMinutes** | **int** | Maximum weekly paid time in minutes for this work plan. Used if flexibleWeeklyPaidTime &#x3D;&#x3D; true | [optional] 
**constrainPaidTimeGranularity** | **bool** | Whether paid time granularity is constrained for this workplan | [optional] 
**paidTimeGranularityMinutes** | **int** | Granularity in minutes allowed for shift paid time in this work plan. Used if constrainPaidTimeGranularity &#x3D;&#x3D; true | [optional] 
**constrainMinimumTimeBetweenShifts** | **bool** | Whether the minimum time between shifts constraint is enabled for this work plan | [optional] 
**minimumTimeBetweenShiftsMinutes** | **int** | Minimum time between shifts in minutes defined in this work plan. Used if constrainMinimumTimeBetweenShifts &#x3D;&#x3D; true | [optional] 
**maximumDays** | **int** | Maximum number days in a week allowed to be scheduled for this work plan | [optional] 
**startDayOfWeekend** | **string** | The day of the week for which the weekend starts, such as Saturday | [optional] 
**minimumConsecutiveTimeOffPerWeekMinutes** | **int** | Minimum amount of consecutive time off per week that agents who are assigned this work plan are allowed to have off | [optional] 
**constrainMaximumConsecutiveWorkingWeekends** | **bool** | Whether to constrain the maximum consecutive working weekends | [optional] 
**maximumConsecutiveWorkingWeekends** | **int** | The maximum number of consecutive weekends that agents who are assigned to this work plan are allowed to work | [optional] 
**minimumWorkingDaysPerWeek** | **int** | The minimum number of days that agents assigned to a work plan must work per week | [optional] 
**maximumConsecutiveWorkingDays** | **int** | The maximum number of consecutive days that agents assigned to this work plan are allowed to work | [optional] 
**minimumShiftStartDistanceMinutes** | **int** | The time period in minutes for the duration between the start times of two consecutive working days | [optional] 
**minimumDaysOffPerPlanningPeriod** | **int** | Minimum days off in the planning period | [optional] 
**maximumDaysOffPerPlanningPeriod** | **int** | Maximum days off in the planning period | [optional] 
**minimumPaidHoursPerPlanningPeriod** | **int** | Minimum paid hours in the planning period | [optional] 
**maximumPaidHoursPerPlanningPeriod** | **int** | Maximum paid hours in the planning period | [optional] 
**optionalDays** | [**\PureCloudPlatform\Client\V2\Model\SetWrapperDayOfWeek**](SetWrapperDayOfWeek.md) | Optional days to schedule for this work plan. Populate with expand&#x3D;details | [optional] 
**shiftStartVariances** | [**\PureCloudPlatform\Client\V2\Model\ListWrapperShiftStartVariance**](ListWrapperShiftStartVariance.md) | Variance in minutes among start times of shifts in this work plan. Populate with expand&#x3D;details | [optional] 
**shifts** | [**\PureCloudPlatform\Client\V2\Model\WorkPlanShift[]**](WorkPlanShift.md) | Shifts in this work plan. Populate with expand&#x3D;details (defaults to empty list) | [optional] 
**agents** | [**\PureCloudPlatform\Client\V2\Model\DeletableUserReference[]**](DeletableUserReference.md) | Agents in this work plan. Populate with expand&#x3D;details (defaults to empty list) | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version metadata for this work plan | 
**agentCount** | **int** | Number of agents in this work plan.  Populate with expand&#x3D;agentCount | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


