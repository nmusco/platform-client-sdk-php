# AnalyticsConversation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conversationId** | **string** | Unique identifier for the conversation | [optional] 
**conversationStart** | [**\DateTime**](\DateTime.md) | Date/time the conversation started. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**conversationEnd** | [**\DateTime**](\DateTime.md) | Date/time the conversation ended. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**mediaStatsMinConversationMos** | **double** | The lowest estimated average MOS among all the audio streams belonging to this conversation | [optional] 
**mediaStatsMinConversationRFactor** | **double** | The lowest R-factor value among all of the audio streams belonging to this conversation | [optional] 
**originatingDirection** | **string** | The original direction of the conversation | [optional] 
**participants** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsParticipant[]**](AnalyticsParticipant.md) | Participants in the conversation | [optional] 
**evaluations** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsEvaluation[]**](AnalyticsEvaluation.md) | Evaluations tied to this conversation | [optional] 
**surveys** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsSurvey[]**](AnalyticsSurvey.md) | Surveys tied to this conversation | [optional] 
**divisionIds** | **string[]** | Identifiers of divisions associated with this conversation | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


