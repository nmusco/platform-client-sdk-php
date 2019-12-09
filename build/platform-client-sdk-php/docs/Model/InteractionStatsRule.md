# InteractionStatsRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | Name of the rule | 
**dimension** | **string** | The dimension of concern. | 
**dimensionValue** | **string** | The value of the dimension. | 
**metric** | **string** | The metric to be assessed. | 
**mediaType** | **string** | The media type. | 
**numericRange** | **string** | The comparison descriptor used against the metric&#39;s value. | 
**statistic** | **string** | The statistic of concern for the metric. | 
**value** | **double** | The threshold value. | 
**enabled** | **bool** | Indicates if the rule is enabled. | 
**inAlarm** | **bool** | Indicates if the rule is in alarm state. | [optional] 
**notificationUsers** | [**\PureCloudPlatform\Client\V2\Model\User[]**](User.md) | The ids of users who will be notified of alarm state change. | 
**alertTypes** | **string[]** | A collection of notification methods. | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


