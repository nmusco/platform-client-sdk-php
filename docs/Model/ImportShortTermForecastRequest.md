# ImportShortTermForecastRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fileName** | **string** | The file name, if applicable, this data was extracted from (display purposes only) | [optional] 
**description** | **string** | Description for the imported forecast.  Pass an empty string for no description | 
**routeGroupList** | [**\PureCloudPlatform\Client\V2\Model\RouteGroupList**](RouteGroupList.md) | The raw data to import | 
**partialUploadIds** | **string[]** | IDs of partial uploads to include in this imported forecast.  Only relevant for large forecasts | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


