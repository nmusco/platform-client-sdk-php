# UserDetailsQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **string** | Specifies the date and time range of data being queried. Conversations MUST have started within this time range to potentially be included within the result set. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss | [optional] 
**userFilters** | [**\PureCloudPlatform\Client\V2\Model\UserDetailQueryFilter[]**](UserDetailQueryFilter.md) | Filters that target the users to retrieve data for | [optional] 
**presenceFilters** | [**\PureCloudPlatform\Client\V2\Model\PresenceDetailQueryFilter[]**](PresenceDetailQueryFilter.md) | Filters that target system and organization presence-level data | [optional] 
**routingStatusFilters** | [**\PureCloudPlatform\Client\V2\Model\RoutingStatusDetailQueryFilter[]**](RoutingStatusDetailQueryFilter.md) | Filters that target agent routing status-level data | [optional] 
**order** | **string** | Sort the result set in ascending/descending order. Default is ascending | [optional] 
**presenceAggregations** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsQueryAggregation[]**](AnalyticsQueryAggregation.md) | Include faceted search and aggregate roll-ups of presence data in your search results. This does not function as a filter, but rather, summary data about the presence results matching your filters | [optional] 
**routingStatusAggregations** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsQueryAggregation[]**](AnalyticsQueryAggregation.md) | Include faceted search and aggregate roll-ups of agent routing status data in your search results. This does not function as a filter, but rather, summary data about the agent routing status results matching your filters | [optional] 
**paging** | [**\PureCloudPlatform\Client\V2\Model\PagingSpec**](PagingSpec.md) | Page size and number to control iterating through large result sets. Default page size is 25 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


