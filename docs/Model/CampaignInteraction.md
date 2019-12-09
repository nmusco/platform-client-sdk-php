# CampaignInteraction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**campaign** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**agent** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**contact** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**destinationAddress** | **string** |  | [optional] 
**activePreviewCall** | **bool** | Boolean value if there is an active preview call on the interaction | [optional] 
**lastActivePreviewWrapupTime** | [**\DateTime**](\DateTime.md) | The time when the last preview of the interaction was wrapped up. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**creationTime** | [**\DateTime**](\DateTime.md) | The time when dialer created the interaction. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**callPlacedTime** | [**\DateTime**](\DateTime.md) | The time when the agent or system places the call. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**callRoutedTime** | [**\DateTime**](\DateTime.md) | The time when the agent was connected to the call. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**previewConnectedTime** | [**\DateTime**](\DateTime.md) | The time when the customer and routing participant are connected. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**script** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**disposition** | **string** | Describes what happened with call analysis for instance: disposition.classification.callable.person, disposition.classification.callable.noanswer | [optional] 
**callerName** | **string** |  | [optional] 
**callerAddress** | **string** |  | [optional] 
**previewPopDeliveredTime** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**conversation** | [**\PureCloudPlatform\Client\V2\Model\ConversationBasic**](ConversationBasic.md) |  | [optional] 
**dialerSystemParticipantId** | **string** | conversation participant id that is the dialer system participant to monitor the call from dialer perspective | [optional] 
**dialingMode** | **string** |  | [optional] 
**skills** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | Any skills that are attached to the call for routing | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


