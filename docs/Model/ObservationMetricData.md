# ObservationMetricData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** |  | [optional] 
**qualifier** | **string** |  | [optional] 
**stats** | [**\PureCloudPlatform\Client\V2\Model\StatisticalSummary**](StatisticalSummary.md) |  | [optional] 
**truncated** | **bool** | Flag for a truncated list of observations. If truncated, the first half of the list of observations will contain the oldest observations and the second half the newest observations. | [optional] 
**observations** | [**\PureCloudPlatform\Client\V2\Model\ObservationValue[]**](ObservationValue.md) | List of observations sorted by timestamp in ascending order. This list may be truncated. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


