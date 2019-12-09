# ReportingExportJobRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The user supplied name of the export request | 
**timeZone** | [**\PureCloudPlatform\Client\V2\Model\TimeZone**](TimeZone.md) | The requested timezone of the exported data | 
**exportFormat** | **string** | The requested format of the exported data | 
**interval** | **string** | The time period used to limit the the exported data. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss | [optional] 
**period** | **string** | The Period of the request in which to break down the intervals. Periods are represented as an ISO-8601 string. For example: P1D or P1DT12H | [optional] 
**viewType** | **string** | The type of view export job to be created | 
**filter** | [**\PureCloudPlatform\Client\V2\Model\ViewFilter**](ViewFilter.md) | Filters to apply to create the view | 
**read** | **bool** | Indicates if the request has been marked as read | [optional] 
**locale** | **string** | The locale use for localization of the exported data, i.e. en-us, es-mx | 
**hasFormatDurations** | **bool** | Indicates if durations are formatted in hh:mm:ss format instead of ms | [optional] 
**hasSplitFilters** | **bool** | Indicates if filters will be split in aggregate detail exports | [optional] 
**selectedColumns** | [**\PureCloudPlatform\Client\V2\Model\SelectedColumns[]**](SelectedColumns.md) | The list of ordered selected columns from the export view by the user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


