# CampaignRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the CampaignRule. | 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**campaignRuleEntities** | [**\PureCloudPlatform\Client\V2\Model\CampaignRuleEntities**](CampaignRuleEntities.md) | The list of entities that this CampaignRule monitors. | 
**campaignRuleConditions** | [**\PureCloudPlatform\Client\V2\Model\CampaignRuleCondition[]**](CampaignRuleCondition.md) | The list of conditions that are evaluated on the entities. | 
**campaignRuleActions** | [**\PureCloudPlatform\Client\V2\Model\CampaignRuleAction[]**](CampaignRuleAction.md) | The list of actions that are executed if the conditions are satisfied. | 
**matchAnyConditions** | **bool** |  | [optional] 
**enabled** | **bool** | Whether or not this CampaignRule is currently enabled. Required on updates. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


