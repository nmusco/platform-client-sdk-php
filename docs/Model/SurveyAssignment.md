# SurveyAssignment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**surveyForm** | [**\PureCloudPlatform\Client\V2\Model\PublishedSurveyFormReference**](PublishedSurveyFormReference.md) | The survey form used for this survey. | [optional] 
**flow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The URI reference to the flow associated with this survey. | [optional] 
**inviteTimeInterval** | **string** | An ISO 8601 repeated interval consisting of the number of repetitions, the start datetime, and the interval (e.g. R2/2018-03-01T13:00:00Z/P1M10DT2H30M). Total duration must not exceed 90 days. | [optional] 
**sendingUser** | **string** | User together with sendingDomain used to send email, null to use no-reply | [optional] 
**sendingDomain** | **string** | Validated email domain, required | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


