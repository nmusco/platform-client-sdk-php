# Keyword

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**phrase** | **string** | The word or phrase which is being looked for with speech recognition. | 
**confidence** | **int** | A sensitivity threshold that can be increased to lower false positives or decreased to reduce false negatives. | 
**agentScoreModifier** | **int** | A modifier to the evaluation score when the phrase is spotted in the agent channel | 
**customerScoreModifier** | **int** | A modifier to the evaluation score when the phrase is spotted in the customer channel | 
**alternateSpellings** | **string[]** | Other spellings of the phrase that can be added to reduce missed spots (false negatives). | [optional] 
**pronunciations** | **string[]** | The phonetic spellings for the phrase and alternate spellings. | [optional] 
**antiWords** | **string[]** | Words that are similar to the phrase but not desired. Added to reduce incorrect spots (false positives). | [optional] 
**antiPronunciations** | **string[]** | The phonetic spellings for the antiWords. | [optional] 
**spotabilityIndex** | **double** | A prediction of how easy it is to unambiguously spot the keyword within its language based on spelling. | [optional] 
**marginOfError** | **double** |  | [optional] 
**pronunciation** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


