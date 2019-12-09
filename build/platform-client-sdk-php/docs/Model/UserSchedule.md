# UserSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shifts** | [**\PureCloudPlatform\Client\V2\Model\UserScheduleShift[]**](UserScheduleShift.md) | The shifts that belong to this schedule | [optional] 
**fullDayTimeOffMarkers** | [**\PureCloudPlatform\Client\V2\Model\UserScheduleFullDayTimeOffMarker[]**](UserScheduleFullDayTimeOffMarker.md) | Markers to indicate a full day time off request, relative to the management unit time zone | [optional] 
**delete** | **bool** | If marked true for updating an existing user schedule, it will be deleted | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version metadata for this schedule | 
**workPlanId** | **string** | ID of the work plan associated with the user during schedule creation | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


