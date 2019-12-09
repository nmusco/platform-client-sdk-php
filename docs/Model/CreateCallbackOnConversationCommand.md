# CreateCallbackOnConversationCommand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**scriptId** | **string** | The identifier of the script to be used for the callback | [optional] 
**queueId** | **string** | The identifier of the queue to be used for the callback. Either queueId or routingData is required. | [optional] 
**routingData** | [**\PureCloudPlatform\Client\V2\Model\RoutingData**](RoutingData.md) | The routing data to be used for the callback. Either queueId or routingData is required. | [optional] 
**callbackUserName** | **string** | The name of the party to be called back. | [optional] 
**callbackNumbers** | **string[]** | A list of phone numbers for the callback. | 
**callbackScheduledTime** | [**\DateTime**](\DateTime.md) | The scheduled date-time for the callback as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**countryCode** | **string** | The country code to be associated with the callback numbers. | [optional] 
**validateCallbackNumbers** | **bool** | Whether or not to validate the callback numbers for phone number format. | [optional] 
**data** | **map[string,string]** | A map of key-value pairs containing additional data that can be associated to the callback. These values will appear in the attributes property on the conversation participant. Example: { \&quot;notes\&quot;: \&quot;ready to close the deal!\&quot;, \&quot;customerPreferredName\&quot;: \&quot;Doc\&quot; } | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


