# IntegrationEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for this event | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 
**correlationId** | **string** | Correlation ID for the event | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Time the event occurred. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**level** | **string** | Indicates the severity of the event. | [optional] 
**eventCode** | **string** | A classification for the event. Suitable for programmatic searching, sorting, or filtering | [optional] 
**message** | [**\PureCloudPlatform\Client\V2\Model\MessageInfo**](MessageInfo.md) | Message indicating what happened | [optional] 
**entities** | [**\PureCloudPlatform\Client\V2\Model\EventEntity[]**](EventEntity.md) | Collection of entities affected by or pertaining to the event (e.g. a list of Integrations or Bridge connectors) | [optional] 
**contextAttributes** | **map[string,string]** | Map of context attributes specific to this event. | [optional] 
**detailMessage** | [**\PureCloudPlatform\Client\V2\Model\MessageInfo**](MessageInfo.md) | Message with additional details about the event. (e.g. an exception cause.) | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that took an action that resulted in the event. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


