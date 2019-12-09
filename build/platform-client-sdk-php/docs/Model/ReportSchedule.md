# ReportSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**quartzCronExpression** | **string** | Quartz Cron Expression | 
**nextFireTime** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**description** | **string** |  | [optional] 
**timeZone** | **string** |  | [optional] 
**timePeriod** | **string** |  | [optional] 
**interval** | **string** | Interval. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss | [optional] 
**reportFormat** | **string** |  | [optional] 
**locale** | **string** |  | [optional] 
**enabled** | **bool** |  | [optional] 
**reportId** | **string** | Report ID | 
**parameters** | **map[string,object]** |  | [optional] 
**lastRun** | [**\PureCloudPlatform\Client\V2\Model\ReportRunEntry**](ReportRunEntry.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


