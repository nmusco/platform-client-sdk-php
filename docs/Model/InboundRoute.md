# InboundRoute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**pattern** | **string** | The search pattern that the mailbox name should match. | 
**queue** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The queue to route the emails to. | [optional] 
**priority** | **int** | The priority to use for routing. | [optional] 
**skills** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | The skills to use for routing. | [optional] 
**language** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The language to use for routing. | [optional] 
**fromName** | **string** | The sender name to use for outgoing replies. | 
**fromEmail** | **string** | The sender email to use for outgoing replies. | 
**flow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The flow to use for processing the email. | [optional] 
**replyEmailAddress** | [**\PureCloudPlatform\Client\V2\Model\QueueEmailAddress**](QueueEmailAddress.md) | The route to use for email replies. | [optional] 
**autoBcc** | [**\PureCloudPlatform\Client\V2\Model\EmailAddress[]**](EmailAddress.md) | The recipients that should be  automatically blind copied on outbound emails associated with this InboundRoute. | [optional] 
**spamFlow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The flow to use for processing inbound emails that have been marked as spam. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


