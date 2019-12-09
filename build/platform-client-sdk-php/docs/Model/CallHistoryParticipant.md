# CallHistoryParticipant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique participant ID. | [optional] 
**name** | **string** | The display friendly name of the participant. | [optional] 
**address** | **string** | The participant address. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | The time when this participant first joined the conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The time when this participant went disconnected for this media (eg: video disconnected time). Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**purpose** | **string** | The participant&#39;s purpose.  Values can be: &#39;agent&#39;, &#39;user&#39;, &#39;customer&#39;, &#39;external&#39;, &#39;acd&#39;, &#39;ivr | [optional] 
**direction** | **string** | The participant&#39;s direction.  Values can be: &#39;inbound&#39; or &#39;outbound&#39; | [optional] 
**ani** | **string** | The call ANI. | [optional] 
**dnis** | **string** | The call DNIS. | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The PureCloud user for this participant. | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\Queue**](Queue.md) | The PureCloud queue for this participant. | [optional] 
**group** | [**\PureCloudPlatform\Client\V2\Model\Group**](Group.md) | The group involved in the group ring call. | [optional] 
**disconnectType** | **string** | The reason the participant was disconnected from the conversation. | [optional] 
**externalContact** | [**\PureCloudPlatform\Client\V2\Model\ExternalContact**](ExternalContact.md) | The PureCloud external contact | [optional] 
**externalOrganization** | [**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](ExternalOrganization.md) | The PureCloud external organization | [optional] 
**didInteract** | **bool** | Indicates whether the contact ever connected | [optional] 
**sipResponseCodes** | **int[]** | Indicates SIP Response codes associated with the participant | [optional] 
**flaggedReason** | **string** | The reason specifying why participant flagged the conversation. | [optional] 
**outboundCampaign** | [**\PureCloudPlatform\Client\V2\Model\Campaign**](Campaign.md) | The outbound campaign associated with the participant | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


