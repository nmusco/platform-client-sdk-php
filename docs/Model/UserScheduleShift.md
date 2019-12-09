# UserScheduleShift

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weekSchedule** | [**\PureCloudPlatform\Client\V2\Model\WeekScheduleReference**](WeekScheduleReference.md) | The schedule to which this shift belongs | [optional] 
**id** | **string** | ID of the schedule shift. This is only for the case of updating and deleting an existing shift | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Start time in UTC for this shift. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**lengthInMinutes** | **int** | Length of this shift in minutes | [optional] 
**activities** | [**\PureCloudPlatform\Client\V2\Model\UserScheduleActivity[]**](UserScheduleActivity.md) | List of activities in this shift | [optional] 
**delete** | **bool** | If marked true for updating this schedule shift, it will be deleted | [optional] 
**manuallyEdited** | **bool** | Whether the shift was set as manually edited | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


