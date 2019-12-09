# UserObservationQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filter** | [**\PureCloudPlatform\Client\V2\Model\UserObservationQueryFilter**](UserObservationQueryFilter.md) | Filter to return a subset of observations. Expresses boolean logical predicates as well as dimensional filters | 
**metrics** | **string[]** | Behaves like a SQL SELECT clause. Enables retrieving only named metrics. If omitted, all metrics that are available will be returned (like SELECT *). | [optional] 
**detailMetrics** | **string[]** | Metrics for which to include additional detailed observations | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


