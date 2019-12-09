# IntradayResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startDate** | [**\DateTime**](\DateTime.md) | The start of the date range for which this data applies.  This is also the start reference point for the intervals represented in the various arrays. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | The end of the date range for which this data applies. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**intervalLengthMinutes** | **int** | The aggregation period in minutes, which determines the interval duration of the returned data | [optional] 
**numberOfIntervals** | **int** | The total number of time intervals represented by this data | [optional] 
**metrics** | [**\PureCloudPlatform\Client\V2\Model\IntradayMetric[]**](IntradayMetric.md) | The metrics to which this data corresponds | [optional] 
**noDataReason** | **string** | If not null, the reason there was no data for the request | [optional] 
**queueIds** | **string[]** | The IDs of the queues this data corresponds to | [optional] 
**intradayDataGroupings** | [**\PureCloudPlatform\Client\V2\Model\IntradayDataGroup[]**](IntradayDataGroup.md) | Intraday data grouped by a single media type and set of queue IDs | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


