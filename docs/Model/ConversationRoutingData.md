# ConversationRoutingData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queue** | [**\PureCloudPlatform\Client\V2\Model\AddressableEntityRef**](AddressableEntityRef.md) | The queue to use for routing decisions | [optional] 
**language** | [**\PureCloudPlatform\Client\V2\Model\AddressableEntityRef**](AddressableEntityRef.md) | The language to use for routing decisions | [optional] 
**priority** | **int** | The priority of the conversation to use for routing decisions | [optional] 
**skills** | [**\PureCloudPlatform\Client\V2\Model\AddressableEntityRef[]**](AddressableEntityRef.md) | The skills to use for routing decisions | [optional] 
**scoredAgents** | [**\PureCloudPlatform\Client\V2\Model\ScoredAgent[]**](ScoredAgent.md) | A collection of agents and their assigned scores for this conversation (0 - 100, higher being better), for use in routing to preferred agents | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


