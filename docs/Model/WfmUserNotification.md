# WfmUserNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The immutable globally unique identifier for the object. | 
**mutableGroupId** | **string** | The group ID of the notification (mutable, may change  on update) | 
**timestamp** | [**\DateTime**](\DateTime.md) | The timestamp for this notification. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**type** | **string** | The type of this notification | [optional] 
**shiftTrade** | [**\PureCloudPlatform\Client\V2\Model\ShiftTradeNotification**](ShiftTradeNotification.md) | A shift trade notification.  Only set if type &#x3D;&#x3D; ShiftTrade | [optional] 
**timeOffRequest** | [**\PureCloudPlatform\Client\V2\Model\TimeOffRequestNotification**](TimeOffRequestNotification.md) | A time off request notification.  Only set if type &#x3D;&#x3D; TimeOffRequest | [optional] 
**markedAsRead** | **bool** | Whether this notification has been marked \&quot;read\&quot; | 
**agentNotification** | **bool** | Whether this notification is for an agent | [optional] 
**otherNotificationIdsInGroup** | **string[]** | Other notification IDs in group.  This field is only populated in real-time notifications | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


