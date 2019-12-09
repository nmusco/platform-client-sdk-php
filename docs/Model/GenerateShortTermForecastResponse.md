# GenerateShortTermForecastResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the request | [optional] 
**result** | [**\PureCloudPlatform\Client\V2\Model\ShortTermForecast**](ShortTermForecast.md) | The resulting forecast.  May be sent asynchronously via notification depending on the complexity of the forecast | [optional] 
**operationId** | **string** | The operation id to watch for on the notification topic | [optional] 
**progress** | **int** | Percent progress.  Subscribe to the corresponding notification to view progress and await the result | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


