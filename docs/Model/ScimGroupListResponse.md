# ScimGroupListResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**totalResults** | **int** | The total number of results. | [optional] 
**startIndex** | **int** | The 1-based index of the first result returned by this request. Add this to \&quot;itemsPerPage\&quot; when requesting the next page of results. | [optional] 
**itemsPerPage** | **int** | The number of resources returned per page. | [optional] 
**resources** | [**\PureCloudPlatform\Client\V2\Model\ScimV2Group[]**](ScimV2Group.md) | The list of requested resources. If \&quot;count\&quot; is 0, then the list will be empty. | [optional] 
**schemas** | **string[]** | The list of supported schemas. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


