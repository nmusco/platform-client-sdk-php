# CalibrationCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**calibrator** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**agent** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**conversation** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](Conversation.md) | The conversation to use for the calibration. | 
**evaluationForm** | [**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](EvaluationForm.md) |  | [optional] 
**contextId** | **string** |  | [optional] 
**averageScore** | **int** |  | [optional] 
**highScore** | **int** |  | [optional] 
**lowScore** | **int** |  | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**evaluations** | [**\PureCloudPlatform\Client\V2\Model\Evaluation[]**](Evaluation.md) |  | [optional] 
**evaluators** | [**\PureCloudPlatform\Client\V2\Model\User[]**](User.md) |  | [optional] 
**scoringIndex** | [**\PureCloudPlatform\Client\V2\Model\Evaluation**](Evaluation.md) |  | [optional] 
**expertEvaluator** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


