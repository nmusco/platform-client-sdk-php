# WfmAgent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user associated with this data | [optional] 
**workPlan** | [**\PureCloudPlatform\Client\V2\Model\WorkPlanReference**](WorkPlanReference.md) | The work plan associated with this agent | [optional] 
**timeZone** | [**\PureCloudPlatform\Client\V2\Model\WfmTimeZone**](WfmTimeZone.md) | The time zone for this agent. Defaults to the time zone of the management unit to which the agent belongs | [optional] 
**acceptDirectShiftTrades** | **bool** | Whether the agent accepts direct shift trade requests | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Metadata for this agent | [optional] 
**queues** | [**\PureCloudPlatform\Client\V2\Model\QueueReference[]**](QueueReference.md) | List of queues to which the agent belongs and which are defined in the service goal groups in this management unit | [optional] 
**languages** | [**\PureCloudPlatform\Client\V2\Model\LanguageReference[]**](LanguageReference.md) | The list of languages | [optional] 
**skills** | [**\PureCloudPlatform\Client\V2\Model\RoutingSkillReference[]**](RoutingSkillReference.md) | The list of skills | [optional] 
**schedulable** | **bool** | Whether the agent has the permission to be included in schedule generation | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


