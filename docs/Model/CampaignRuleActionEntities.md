# CampaignRuleActionEntities

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaigns** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | The list of campaigns for a CampaignRule to monitor. Required if the CampaignRule has any conditions that run on a campaign. | [optional] 
**sequences** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | The list of sequences for a CampaignRule to monitor. Required if the CampaignRule has any conditions that run on a sequence. | [optional] 
**useTriggeringEntity** | **bool** | If true, the CampaignRuleAction will apply to the same entity that triggered the CampaignRuleCondition. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


