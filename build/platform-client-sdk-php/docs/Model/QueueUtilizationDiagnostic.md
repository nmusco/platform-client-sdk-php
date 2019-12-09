# QueueUtilizationDiagnostic

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queue** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | Identifier of the queue | [optional] 
**usersInQueue** | **int** | The number of users joined to the queue | [optional] 
**activeUsersInQueue** | **int** | The number of users active on the queue | [optional] 
**usersOnQueue** | **int** | The number of users with a status of on-queue | [optional] 
**usersNotUtilized** | **int** | The number of users in the queue currently not engaged | [optional] 
**usersOnQueueWithStation** | **int** | The number of users in the queue with a station | [optional] 
**usersOnACampaignCall** | **int** | The number of users currently engaged in a campaign call | [optional] 
**usersOnDifferentEdgeGroup** | **int** | The number of users whose station is homed to an edge different from the campaign | [optional] 
**usersOnANonCampaignCall** | **int** | The number of users currently engaged in a communication that is not part of the campaign | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


