# Annotation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**location** | **int** | Offset of annotation in milliseconds. | [optional] 
**durationMs** | **int** | Duration of annotation in milliseconds. | [optional] 
**absoluteLocation** | **int** | Offset of annotation (milliseconds) from start of recording. | [optional] 
**absoluteDurationMs** | **int** | Duration of annotation (milliseconds). | [optional] 
**recordingLocation** | **int** | Offset of annotation (milliseconds) from start of recording, adjusted for any recording cuts | [optional] 
**recordingDurationMs** | **int** | Duration of annotation (milliseconds), adjusted for any recording cuts. | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that created this annotation (if any). | [optional] 
**description** | **string** | Text of annotation. | [optional] 
**keywordName** | **string** | The word or phrase which is being looked for with speech recognition. | [optional] 
**confidence** | **float** | Actual confidence that this is an accurate match. | [optional] 
**keywordSetId** | **string** | A unique identifier for the keyword set to which this spotted keyword belongs. | [optional] 
**keywordSetName** | **string** | The keyword set to which this spotted keyword belongs. | [optional] 
**utterance** | **string** | The phonetic spellings for the phrase and alternate spellings. | [optional] 
**timeBegin** | **string** | Beginning time offset of the keyword spot match. | [optional] 
**timeEnd** | **string** | Ending time offset of the keyword spot match. | [optional] 
**keywordConfidenceThreshold** | **string** | Configured sensitivity threshold that can be increased to lower false positives or decreased to reduce false negatives. | [optional] 
**agentScoreModifier** | **string** | A modifier to the evaluation score when the phrase is spotted in the agent channel. | 
**customerScoreModifier** | **string** | A modifier to the evaluation score when the phrase is spotted in the customer channel. | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


