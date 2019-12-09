# SurveyForm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The survey form name | 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Last modified date. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**published** | **bool** | Is this form published | [optional] 
**disabled** | **bool** | Is this form disabled | [optional] 
**contextId** | **string** | Unique Id for all versions of this form | 
**language** | **string** | Language for survey viewer localization. Currently localized languages: da, de, en-US, es, fi, fr, it, ja, ko, nl, no, pl, pt-BR, sv, th, tr, zh-CH, zh-TW | 
**headerImageId** | **string** | Id of the header image appearing at the top of the form. | [optional] 
**headerImageUrl** | **string** | Temporary URL for accessing header image | [optional] 
**header** | **string** | Markdown text for the top of the form. | [optional] 
**footer** | **string** | Markdown text for the bottom of the form. | [optional] 
**questionGroups** | [**\PureCloudPlatform\Client\V2\Model\SurveyQuestionGroup[]**](SurveyQuestionGroup.md) | A list of question groups | 
**publishedVersions** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityListingSurveyForm**](DomainEntityListingSurveyForm.md) | List of published version of this form | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


