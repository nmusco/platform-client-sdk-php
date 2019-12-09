# Evaluation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**conversation** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](Conversation.md) |  | [optional] 
**evaluationForm** | [**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](EvaluationForm.md) | Evaluation form used for evaluation. | [optional] 
**evaluator** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**agent** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**calibration** | [**\PureCloudPlatform\Client\V2\Model\Calibration**](Calibration.md) |  | [optional] 
**status** | **string** |  | [optional] 
**answers** | [**\PureCloudPlatform\Client\V2\Model\EvaluationScoringSet**](EvaluationScoringSet.md) |  | [optional] 
**agentHasRead** | **bool** |  | [optional] 
**releaseDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**assignedDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**changedDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\Queue**](Queue.md) |  | [optional] 
**mediaType** | **string[]** | List of different communication types used in conversation. | [optional] 
**rescore** | **bool** | Is only true when evaluation is re-scored. | [optional] 
**conversationDate** | [**\DateTime**](\DateTime.md) | Date of conversation. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**neverRelease** | **bool** | Signifies if the evaluation is never to be released. This cannot be set true if release date is also set. | [optional] 
**resourceId** | **string** | Only used for email evaluations. Will be null for all other evaluations. | [optional] 
**resourceType** | **string** | The type of resource. Only used for email evaluations. Will be null for evaluations on all other resources. | [optional] 
**redacted** | **bool** | Is only true when the user making the request does not have sufficient permissions to see evaluation | [optional] 
**isScoringIndex** | **bool** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


