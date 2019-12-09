# Survey

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**conversation** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](Conversation.md) |  | [optional] 
**surveyForm** | [**\PureCloudPlatform\Client\V2\Model\SurveyForm**](SurveyForm.md) | Survey form used for this survey. | [optional] 
**agent** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**status** | **string** |  | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\QueueReference**](QueueReference.md) |  | [optional] 
**answers** | [**\PureCloudPlatform\Client\V2\Model\SurveyScoringSet**](SurveyScoringSet.md) |  | [optional] 
**completedDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**surveyErrorDetails** | [**\PureCloudPlatform\Client\V2\Model\SurveyErrorDetails**](SurveyErrorDetails.md) | Additional information about what happened when the survey is in Error status. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


