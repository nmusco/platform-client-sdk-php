# TimeOffRequestNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timeOffRequestId** | **string** | The ID of this time off request | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user associated with this time off request | [optional] 
**isFullDayRequest** | **bool** | Whether this is a full day request (false means partial day) | [optional] 
**status** | **string** | The status of this time off request | [optional] 
**partialDayStartDateTimes** | [**\DateTime[]**](\DateTime.md) | A set of start date-times in ISO-8601 format for partial day requests.  Will be not empty if isFullDayRequest &#x3D;&#x3D; false | [optional] 
**fullDayManagementUnitDates** | **string[]** | A set of dates in yyyy-MM-dd format.  Should be interpreted in the management unit&#39;s configured time zone.  Will be not empty if isFullDayRequest &#x3D;&#x3D; true | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


