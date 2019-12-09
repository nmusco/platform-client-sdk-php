# TimeOffRequestLookup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the time off request | 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The user that the time off request belongs to | 
**isFullDayRequest** | **bool** | Whether this is a full day request (false means partial day) | [optional] 
**markedAsRead** | **bool** | Whether this request has been marked as read by the agent | [optional] 
**activityCodeId** | **string** | The ID of the activity code associated with this time off request. Activity code must be of the TimeOff category | [optional] 
**status** | **string** | The status of this time off request | [optional] 
**partialDayStartDateTimes** | [**\DateTime[]**](\DateTime.md) | A set of start date-times in ISO-8601 format for partial day requests.  Will be not empty if isFullDayRequest &#x3D;&#x3D; false | [optional] 
**fullDayManagementUnitDates** | **string[]** | A set of dates in yyyy-MM-dd format.  Should be interpreted in the management unit&#39;s configured time zone.  Will be not empty if isFullDayRequest &#x3D;&#x3D; true | [optional] 
**dailyDurationMinutes** | **int** | The daily duration of this time off request in minutes | [optional] 
**notes** | **string** | Notes about the time off request | [optional] 
**submittedBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The user who submitted this time off request | [optional] 
**submittedDate** | [**\DateTime**](\DateTime.md) | The timestamp when this request was submitted. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**reviewedBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The user who reviewed this time off request | [optional] 
**reviewedDate** | [**\DateTime**](\DateTime.md) | The timestamp when this request was reviewed. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | The version metadata of the time off request | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


