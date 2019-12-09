# WorkPlanShift

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the shift | 
**days** | [**\PureCloudPlatform\Client\V2\Model\SetWrapperDayOfWeek**](SetWrapperDayOfWeek.md) | Days of the week applicable for this shift | [optional] 
**flexibleStartTime** | **bool** | Whether the start time of the shift is flexible | [optional] 
**exactStartTimeMinutesFromMidnight** | **int** | Exact start time of the shift defined as offset minutes from midnight. Used if flexibleStartTime &#x3D;&#x3D; false | [optional] 
**earliestStartTimeMinutesFromMidnight** | **int** | Earliest start time of the shift defined as offset minutes from midnight. Used if flexibleStartTime &#x3D;&#x3D; true | [optional] 
**latestStartTimeMinutesFromMidnight** | **int** | Latest start time of the shift defined as offset minutes from midnight. Used if flexibleStartTime &#x3D;&#x3D; true | [optional] 
**constrainStopTime** | **bool** | Whether the latest stop time constraint for the shift is enabled | [optional] 
**constrainLatestStopTime** | **bool** | Whether the latest stop time constraint for the shift is enabled | [optional] 
**latestStopTimeMinutesFromMidnight** | **int** | Latest stop time of the shift defined as offset minutes from midnight. Used if constrainStopTime &#x3D;&#x3D; true | [optional] 
**constrainEarliestStopTime** | **bool** | Whether the earliest stop time constraint for the shift is enabled | [optional] 
**earliestStopTimeMinutesFromMidnight** | **int** | This is the earliest time a shift can end | [optional] 
**startIncrementMinutes** | **int** | Increment in offset minutes that would contribute to different possible start times for the shift. Used if flexibleStartTime &#x3D;&#x3D; true | [optional] 
**flexiblePaidTime** | **bool** | Whether the paid time setting for the shift is flexible | [optional] 
**exactPaidTimeMinutes** | **int** | Exact paid time in minutes configured for the shift. Used if flexiblePaidTime &#x3D;&#x3D; false | [optional] 
**minimumPaidTimeMinutes** | **int** | Minimum paid time in minutes configured for the shift. Used if flexiblePaidTime &#x3D;&#x3D; true | [optional] 
**maximumPaidTimeMinutes** | **int** | Maximum paid time in minutes configured for the shift. Used if flexiblePaidTime &#x3D;&#x3D; true | [optional] 
**constrainContiguousWorkTime** | **bool** | Whether the contiguous time constraint for the shift is enabled | [optional] 
**minimumContiguousWorkTimeMinutes** | **int** | Minimum contiguous time in minutes configured for the shift. Used if constrainContiguousWorkTime &#x3D;&#x3D; true | [optional] 
**maximumContiguousWorkTimeMinutes** | **int** | Maximum contiguous time in minutes configured for the shift. Used if constrainContiguousWorkTime &#x3D;&#x3D; true | [optional] 
**synchronizeAgentsSchedules** | **bool** | Whether synchronization for agent is enabled | [optional] 
**synchronizationType** | **string** | This constraint ensures that an agent starts each workday within a user-defined time threshold. Used if synchronizeAgentsSchedules &#x3D;&#x3D; true | [optional] 
**constrainDayOff** | **bool** | Whether day off rule is enabled | [optional] 
**dayOffRule** | **string** | The day off rule for agents to have next day off or previous day off. used if constrainDayOff &#x3D; true | [optional] 
**activities** | [**\PureCloudPlatform\Client\V2\Model\WorkPlanActivity[]**](WorkPlanActivity.md) | Activities configured for this shift | [optional] 
**id** | **string** | ID of the shift. This is required only for the case of updating an existing shift | [optional] 
**delete** | **bool** | If marked true for updating an existing shift, the shift will be permanently deleted | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


