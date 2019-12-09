# RoutingRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operator** | **string** | matching operator.  MEETS_THRESHOLD matches any agent with a score at or above the rule&#39;s threshold.  ANY matches all specified agents, regardless of score. | [optional] 
**threshold** | **int** | threshold required for routing attempt (generally an agent score).  may be null for operator ANY. | [optional] 
**waitSeconds** | **double** | seconds to wait in this rule before moving to the next | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


