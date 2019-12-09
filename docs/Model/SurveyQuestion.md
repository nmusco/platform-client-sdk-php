# SurveyQuestion

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**text** | **string** |  | [optional] 
**helpText** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**naEnabled** | **bool** |  | [optional] 
**visibilityCondition** | [**\PureCloudPlatform\Client\V2\Model\VisibilityCondition**](VisibilityCondition.md) |  | [optional] 
**answerOptions** | [**\PureCloudPlatform\Client\V2\Model\AnswerOption[]**](AnswerOption.md) | Options from which to choose an answer for this question. Only used by Multiple Choice type questions. | [optional] 
**maxResponseCharacters** | **int** | How many characters are allowed in the text response to this question. Used by NPS and Free Text question types. | [optional] 
**explanationPrompt** | **string** | Prompt for details explaining the chosen NPS score. Used by NPS questions. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


