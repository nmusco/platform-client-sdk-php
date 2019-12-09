# AsyncQueryStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | **string** | The current state of the asynchronous query | [optional] 
**errorMessage** | **string** | The error associated with the current query, if the state is FAILED | [optional] 
**expirationDate** | [**\DateTime**](\DateTime.md) | The time at which results for this query will expire. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**submissionDate** | [**\DateTime**](\DateTime.md) | The time at which the query was submitted. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**completionDate** | [**\DateTime**](\DateTime.md) | The time at which the query completed. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


