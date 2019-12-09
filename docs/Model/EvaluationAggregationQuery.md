# EvaluationAggregationQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **string** | Behaves like one clause in a SQL WHERE. Specifies the date and time range of data being queried. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss | [optional] 
**granularity** | **string** | Granularity aggregates metrics into subpartitions within the time interval specified. The default granularity is the same duration as the interval. Periods are represented as an ISO-8601 string. For example: P1D or P1DT12H | [optional] 
**timeZone** | **string** | Sets the time zone for the query interval, defaults to UTC. Time zones are represented as a string of the zone name as found in the IANA time zone database. For example: UTC, Etc/UTC, or Europe/London | [optional] 
**groupBy** | **string[]** | Behaves like a SQL GROUPBY. Allows for multiple levels of grouping as a list of dimensions. Partitions resulting aggregate computations into distinct named subgroups rather than across the entire result set as if it were one group. | [optional] 
**filter** | [**\PureCloudPlatform\Client\V2\Model\EvaluationAggregateQueryFilter**](EvaluationAggregateQueryFilter.md) | Behaves like a SQL WHERE clause. This is ANDed with the interval parameter. Expresses boolean logical predicates as well as dimensional filters | [optional] 
**metrics** | **string[]** | Behaves like a SQL SELECT clause. Enables retrieving only named metrics. If omitted, all metrics that are available will be returned (like SELECT *). | [optional] 
**flattenMultivaluedDimensions** | **bool** | Flattens any multivalued dimensions used in response groups (e.g. [&#39;a&#39;,&#39;b&#39;,&#39;c&#39;]-&gt;&#39;a,b,c&#39;) | [optional] 
**views** | [**\PureCloudPlatform\Client\V2\Model\EvaluationAggregationView[]**](EvaluationAggregationView.md) | Custom derived metric views | [optional] 
**alternateTimeDimension** | **string** | Dimension to use as the alternative timestamp for data in the aggregate.  Choosing \&quot;eventTime\&quot; uses the actual time of the data event. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


