# SearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sortOrder** | **string** | The sort order for results | [optional] 
**sortBy** | **string** | The field in the resource that you want to sort the results by | [optional] 
**pageSize** | **int** | The number of results per page | [optional] 
**pageNumber** | **int** | The page of resources you want to retrieve | [optional] 
**sort** | [**\PureCloudPlatform\Client\V2\Model\SearchSort[]**](SearchSort.md) | Multi-value sort order, list of multiple sort values | [optional] 
**returnFields** | **string[]** | A List of strings.  Possible values are any field in the resource you are searching on.  The other option is to use ALL_FIELDS, when this is provided all fields in the resource will be returned in the search results. | [optional] 
**expand** | **string[]** | Provides more details about a specified resource | [optional] 
**types** | **string[]** | Resource domain type to search | 
**query** | [**\PureCloudPlatform\Client\V2\Model\SearchCriteria[]**](SearchCriteria.md) | The search criteria | [optional] 
**aggregations** | [**\PureCloudPlatform\Client\V2\Model\SearchAggregation[]**](SearchAggregation.md) | Aggregation criteria | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


