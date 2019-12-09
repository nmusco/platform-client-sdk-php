# InteractionStatsAlert

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | Name of the rule that generated the alert | 
**dimension** | **string** | The dimension of concern. | 
**dimensionValue** | **string** | The value of the dimension. | 
**metric** | **string** | The metric to be assessed. | 
**mediaType** | **string** | The media type. | 
**numericRange** | **string** | The comparison descriptor used against the metric&#39;s value. | 
**statistic** | **string** | The statistic of concern for the metric. | 
**value** | **double** | The threshold value. | 
**ruleId** | **string** | The id of the rule. | 
**unread** | **bool** | Indicates if the alert has been read. | 
**startDate** | [**\DateTime**](\DateTime.md) | The date/time the alert was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**endDate** | [**\DateTime**](\DateTime.md) | The date/time the owning rule exiting in alarm status. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**notificationUsers** | [**\PureCloudPlatform\Client\V2\Model\User[]**](User.md) | The ids of users who were notified of alarm state change. | 
**alertTypes** | **string[]** | A collection of notification methods. | 
**ruleUri** | **string** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


