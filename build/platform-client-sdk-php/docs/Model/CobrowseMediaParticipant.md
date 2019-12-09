# CobrowseMediaParticipant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique participant ID. | [optional] 
**name** | **string** | The display friendly name of the participant. | [optional] 
**address** | **string** | The participant address. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The time when this participant first joined the conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**connectedTime** | [**\DateTime**](\DateTime.md) | The time when this participant went connected for this media (eg: video connected time). Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The time when this participant went disconnected for this media (eg: video disconnected time). Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**startHoldTime** | [**\DateTime**](\DateTime.md) | The time when this participant&#39;s hold started. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**purpose** | **string** | The participant&#39;s purpose.  Values can be: &#39;agent&#39;, &#39;user&#39;, &#39;customer&#39;, &#39;external&#39;, &#39;acd&#39;, &#39;ivr | [optional] 
**state** | **string** | The participant&#39;s state.  Values can be: &#39;alerting&#39;, &#39;connected&#39;, &#39;disconnected&#39;, &#39;dialing&#39;, &#39;contacting | [optional] 
**direction** | **string** | The participant&#39;s direction.  Values can be: &#39;inbound&#39; or &#39;outbound&#39; | [optional] 
**disconnectType** | **string** | The reason the participant was disconnected from the conversation. | [optional] 
**held** | **bool** | Value is true when the participant is on hold. | [optional] 
**wrapupRequired** | **bool** | Value is true when the participant requires wrap-up. | [optional] 
**wrapupPrompt** | **string** | The wrap-up prompt indicating the type of wrap-up to be performed. | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The PureCloud user for this participant. | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The PureCloud queue for this participant. | [optional] 
**attributes** | **map[string,string]** | A list of ad-hoc attributes for the participant. | [optional] 
**errorInfo** | [**\PureCloudPlatform\Client\V2\Model\ErrorBody**](ErrorBody.md) | If the conversation ends in error, contains additional error details. | [optional] 
**script** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Engage script that should be used by this participant. | [optional] 
**wrapupTimeoutMs** | **int** | The amount of time the participant has to complete wrap-up. | [optional] 
**wrapupSkipped** | **bool** | Value is true when the participant has skipped wrap-up. | [optional] 
**alertingTimeoutMs** | **int** | Specifies how long the agent has to answer an interaction before being marked as not responding. | [optional] 
**provider** | **string** | The source provider for the communication. | [optional] 
**externalContact** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | If this participant represents an external contact, then this will be the reference for the external contact. | [optional] 
**externalOrganization** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | If this participant represents an external org, then this will be the reference for the external org. | [optional] 
**wrapup** | [**\PureCloudPlatform\Client\V2\Model\Wrapup**](Wrapup.md) | Wrapup for this participant, if it has been applied. | [optional] 
**peer** | **string** | The peer communication corresponding to a matching leg for this communication. | [optional] 
**flaggedReason** | **string** | The reason specifying why participant flagged the conversation. | [optional] 
**journeyContext** | [**\PureCloudPlatform\Client\V2\Model\JourneyContext**](JourneyContext.md) | Journey System data/context that is applicable to this communication.  When used for historical purposes, the context should be immutable.  When null, there is no applicable Journey System context. | [optional] 
**conversationRoutingData** | [**\PureCloudPlatform\Client\V2\Model\ConversationRoutingData**](ConversationRoutingData.md) | Information on how a communication should be routed to an agent. | [optional] 
**startAcwTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant started after-call work. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endAcwTime** | [**\DateTime**](\DateTime.md) | The timestamp when this participant ended after-call work. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**cobrowseSessionId** | **string** | The co-browse session ID. | [optional] 
**cobrowseRole** | **string** | This value identifies the role of the co-browse client within the co-browse session (a client is a sharer or a viewer). | [optional] 
**controlling** | **string[]** | ID of co-browse participants for which this client has been granted control (list is empty if this client cannot control any shared pages). | [optional] 
**viewerUrl** | **string** | The URL that can be used to open co-browse session in web browser. | [optional] 
**providerEventTime** | [**\DateTime**](\DateTime.md) | The time when the provider event which triggered this conversation update happened in the corrected provider clock. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


