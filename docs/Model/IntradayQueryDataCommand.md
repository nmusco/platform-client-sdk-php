# IntradayQueryDataCommand

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startDate** | [**\DateTime**](\DateTime.md) | Start date of the requested date range in ISO-8601 format | 
**endDate** | [**\DateTime**](\DateTime.md) | End date of the requested date range in ISO-8601 format.  Must be within the same 7 day schedule week as defined by the management unit&#39;s start day of week | 
**metrics** | [**\PureCloudPlatform\Client\V2\Model\IntradayMetric[]**](IntradayMetric.md) | The metrics to validate | 
**queueIds** | **string[]** | The queue IDs for which to fetch data.  Omitting or passing an empty list will return all available queues | [optional] 
**intervalLengthMinutes** | **int** | The period/interval for which to aggregate the data.  Optional, defaults to 15 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


