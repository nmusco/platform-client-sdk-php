# AnalyticsConversationSegment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**segmentStart** | [**\DateTime**](\DateTime.md) | The timestamp when this segment began. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**segmentEnd** | [**\DateTime**](\DateTime.md) | The timestamp when this segment ended. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**queueId** | **string** | Queue identifier | [optional] 
**wrapUpCode** | **string** | Wrapup Code id | [optional] 
**wrapUpNote** | **string** | Note entered by an agent during after-call work | [optional] 
**wrapUpTags** | **string[]** |  | [optional] 
**errorCode** | **string** |  | [optional] 
**disconnectType** | **string** | A description of the event that disconnected the segment | [optional] 
**segmentType** | **string** | The activity taking place for the participant in the segment | [optional] 
**requestedRoutingUserIds** | **string[]** |  | [optional] 
**requestedRoutingSkillIds** | **string[]** |  | [optional] 
**requestedLanguageId** | **string** | A unique identifier for the language requested for an interaction. | [optional] 
**scoredAgents** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsScoredAgent[]**](AnalyticsScoredAgent.md) |  | [optional] 
**properties** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsProperty[]**](AnalyticsProperty.md) |  | [optional] 
**sourceConversationId** | **string** |  | [optional] 
**destinationConversationId** | **string** |  | [optional] 
**sourceSessionId** | **string** |  | [optional] 
**destinationSessionId** | **string** |  | [optional] 
**sipResponseCodes** | **int[]** |  | [optional] 
**q850ResponseCodes** | **int[]** |  | [optional] 
**conference** | **bool** | Indicates whether the segment was a conference | [optional] 
**groupId** | **string** |  | [optional] 
**subject** | **string** |  | [optional] 
**audioMuted** | **bool** |  | [optional] 
**videoMuted** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


