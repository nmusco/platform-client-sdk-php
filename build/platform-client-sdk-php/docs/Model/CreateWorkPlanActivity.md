# CreateWorkPlanActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityCodeId** | **string** | ID of the activity code associated with this activity | [optional] 
**description** | **string** | Description of the activity | [optional] 
**lengthMinutes** | **int** | Length of the activity in minutes | [optional] 
**startTimeIsRelativeToShiftStart** | **bool** | Whether the start time of the activity is relative to the start time of the shift it belongs to | [optional] 
**flexibleStartTime** | **bool** | Whether the start time of the activity is flexible | [optional] 
**earliestStartTimeMinutes** | **int** | Earliest activity start in offset minutes relative to shift start time if startTimeIsRelativeToShiftStart &#x3D;&#x3D; true else its based on midnight. Used if flexibleStartTime &#x3D;&#x3D; true | [optional] 
**latestStartTimeMinutes** | **int** | Latest activity start in offset minutes relative to shift start time if startTimeIsRelativeToShiftStart &#x3D;&#x3D; true else its based on midnight. Used if flexibleStartTime &#x3D;&#x3D; true | [optional] 
**exactStartTimeMinutes** | **int** | Exact activity start in offset minutes relative to shift start time if startTimeIsRelativeToShiftStart &#x3D;&#x3D; true else its based on midnight. Used if flexibleStartTime &#x3D;&#x3D; false | [optional] 
**startTimeIncrementMinutes** | **int** | Increment in offset minutes that would contribute to different possible start times for the activity | [optional] 
**countsAsPaidTime** | **bool** | Whether the activity is paid | [optional] 
**countsAsContiguousWorkTime** | **bool** | Whether the activity duration is counted towards contiguous work time | [optional] 
**minimumLengthFromShiftStartMinutes** | **int** | The minimum duration between shift start and shift item (e.g., break or meal) start in minutes | [optional] 
**minimumLengthFromShiftEndMinutes** | **int** | The minimum duration between shift item (e.g., break or meal) end and shift end in minutes | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


