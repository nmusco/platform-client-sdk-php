# ObservationValue

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**observationDate** | [**\DateTime**](\DateTime.md) | The time at which the observation occurred. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**conversationId** | **string** | Unique identifier for the conversation | [optional] 
**sessionId** | **string** | The unique identifier of this session | [optional] 
**requestedRoutingSkillIds** | **string[]** | Unique identifier for a skill requested for an interaction | [optional] 
**requestedLanguageId** | **string** | Unique identifier for the language requested for an interaction | [optional] 
**routingPriority** | **int** | Routing priority for the current interaction | [optional] 
**participantName** | **string** | A human readable name identifying the participant | [optional] 
**userId** | **string** | Unique identifier for the user | [optional] 
**direction** | **string** | The direction of the communication | [optional] 
**convertedFrom** | **string** | Session media type that was converted from in case of a media type conversion | [optional] 
**convertedTo** | **string** | Session media type that was converted to in case of a media type conversion | [optional] 
**addressFrom** | **string** | The address that initiated an action | [optional] 
**addressTo** | **string** | The address receiving an action | [optional] 
**ani** | **string** | Automatic Number Identification (caller&#39;s number) | [optional] 
**dnis** | **string** | Dialed number identification service (number dialed by the calling party) | [optional] 
**scoredAgents** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsScoredAgent[]**](AnalyticsScoredAgent.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


