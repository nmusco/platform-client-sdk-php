# ShiftTradeResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of this shift trade | [optional] 
**weekDate** | [**\DateTime**](\DateTime.md) | The start week date of the associated schedule in yyyy-MM-dd format. Dates are represented as an ISO-8601 string. For example: yyyy-MM-dd | [optional] 
**schedule** | [**\PureCloudPlatform\Client\V2\Model\WeekScheduleReference**](WeekScheduleReference.md) | The ID of the associated schedule | [optional] 
**state** | **string** | The state of this shift trade | [optional] 
**initiatingUser** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user who initiated this trade | [optional] 
**initiatingShiftId** | **string** | The ID of the shift offered for trade by the initiating user | [optional] 
**initiatingShiftStart** | [**\DateTime**](\DateTime.md) | The start date/time of the shift being offered for trade. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**initiatingShiftEnd** | [**\DateTime**](\DateTime.md) | The end date/time of the shift being offered for trade. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**receivingUser** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user matching the trade, or if the state is not Matched, the user to whom the trade request was sent | [optional] 
**receivingShiftId** | **string** | The ID of the shift being exchanged for the initiating shift, null if the receiving user is picking up a shift | [optional] 
**receivingShiftStart** | [**\DateTime**](\DateTime.md) | The start date/time of the receiving shift. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**receivingShiftEnd** | [**\DateTime**](\DateTime.md) | The end date/time of the receiving shift. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**expiration** | [**\DateTime**](\DateTime.md) | When this shift trade offer will expire if not matched or approved. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**oneSided** | **bool** | Whether this is a one-sided shift trade (e.g. the initiating user is not asking for a shift in return) | [optional] 
**acceptableIntervals** | **string[]** |  | [optional] 
**reviewedBy** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user who reviewed this shift trade | [optional] 
**reviewedDate** | [**\DateTime**](\DateTime.md) | The timestamp when this shift trade was reviewed. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version data for this trade | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


