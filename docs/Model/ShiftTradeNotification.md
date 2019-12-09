# ShiftTradeNotification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**weekDate** | **string** | The start date of the schedule with which this trade is associated | [optional] 
**tradeId** | **string** | The ID of the shift trade | [optional] 
**oneSided** | **bool** | Whether this is a one sided shift trade | [optional] 
**newState** | **string** | The new state of the shift trade, null if there was no change | [optional] 
**initiatingUser** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user who initiated the shift trade | [optional] 
**initiatingShiftDate** | [**\DateTime**](\DateTime.md) | The start date and time of the initiating shift. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**receivingUser** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user on the receiving side of this shift trade (null if not matched) | [optional] 
**receivingShiftDate** | [**\DateTime**](\DateTime.md) | The start date and time of the receiving shift (null if not matched or if one-sided. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


