# ReportingExportJobResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**status** | **string** | The current status of the export request | 
**timeZone** | [**\PureCloudPlatform\Client\V2\Model\TimeZone**](TimeZone.md) | The requested timezone of the exported data | 
**exportFormat** | **string** | The requested format of the exported data | 
**interval** | **string** | The time period used to limit the the exported data. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss | [optional] 
**downloadUrl** | **string** | The url to download the request if it&#39;s status is completed | [optional] 
**viewType** | **string** | The type of view export job to be created | 
**exportErrorMessagesType** | **string** | The error message in case the export request failed | [optional] 
**period** | **string** | The Period of the request in which to break down the intervals. Periods are represented as an ISO-8601 string. For example: P1D or P1DT12H | [optional] 
**filter** | [**\PureCloudPlatform\Client\V2\Model\ViewFilter**](ViewFilter.md) | Filters to apply to create the view | 
**read** | **bool** | Indicates if the request has been marked as read | 
**createdDateTime** | [**\DateTime**](\DateTime.md) | The created date/time of the request. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**modifiedDateTime** | [**\DateTime**](\DateTime.md) | The last modified date/time of the request. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**locale** | **string** | The locale use for localization of the exported data, i.e. en-us, es-mx | 
**percentageComplete** | **double** | The percentage of the job that has completed processing | 
**hasFormatDurations** | **bool** | Indicates if durations are formatted in hh:mm:ss format instead of ms | [optional] 
**hasSplitFilters** | **bool** | Indicates if filters will be split in aggregate detail exports | [optional] 
**selectedColumns** | [**\PureCloudPlatform\Client\V2\Model\SelectedColumns[]**](SelectedColumns.md) | The list of ordered selected columns from the export view by the user | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


