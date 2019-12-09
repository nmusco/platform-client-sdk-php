# ConversationQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **string** | Specifies the date and time range of data being queried. Results will include conversations that both started on a day touched by the interval AND either started, ended, or any activity during the interval. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss | [optional] 
**conversationFilters** | [**\PureCloudPlatform\Client\V2\Model\ConversationDetailQueryFilter[]**](ConversationDetailQueryFilter.md) | Filters that target conversation-level data | [optional] 
**segmentFilters** | [**\PureCloudPlatform\Client\V2\Model\SegmentDetailQueryFilter[]**](SegmentDetailQueryFilter.md) | Filters that target individual segments within a conversation | [optional] 
**evaluationFilters** | [**\PureCloudPlatform\Client\V2\Model\EvaluationDetailQueryFilter[]**](EvaluationDetailQueryFilter.md) | Filters that target evaluations | [optional] 
**mediaEndpointStatFilters** | [**\PureCloudPlatform\Client\V2\Model\MediaEndpointStatDetailQueryFilter[]**](MediaEndpointStatDetailQueryFilter.md) | Filters that target mediaEndpointStats | [optional] 
**surveyFilters** | [**\PureCloudPlatform\Client\V2\Model\SurveyDetailQueryFilter[]**](SurveyDetailQueryFilter.md) | Filters that target surveys | [optional] 
**order** | **string** | Sort the result set in ascending/descending order. Default is ascending | [optional] 
**orderBy** | **string** | Specify which data element within the result set to use for sorting. The options  to use as a basis for sorting the results: conversationStart, segmentStart, and segmentEnd. If not specified, the default is conversationStart | [optional] 
**aggregations** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsQueryAggregation[]**](AnalyticsQueryAggregation.md) | Include faceted search and aggregate roll-ups describing your search results. This does not function as a filter, but rather, summary data about the data matching your filters | [optional] 
**paging** | [**\PureCloudPlatform\Client\V2\Model\PagingSpec**](PagingSpec.md) | Page size and number to control iterating through large result sets. Default page size is 25 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


