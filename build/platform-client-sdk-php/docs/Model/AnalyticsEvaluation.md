# AnalyticsEvaluation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evaluationId** | **string** | Unique identifier for the evaluation | [optional] 
**evaluatorId** | **string** | A unique identifier of the PureCloud user who evaluated the interaction | [optional] 
**userId** | **string** | Unique identifier for the user being evaluated | [optional] 
**eventTime** | [**\DateTime**](\DateTime.md) | Specifies when an evaluation occurred. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**queueId** | **string** | Unique identifier for the queue the conversation was on | [optional] 
**formId** | **string** | Unique identifier for the form used to evaluate the conversation/agent | [optional] 
**contextId** | **string** | A unique identifier for an evaluation form, regardless of version | [optional] 
**formName** | **string** | Name of the evaluation form | [optional] 
**calibrationId** | **string** | The calibration id used for the purpose of training evaluators | [optional] 
**rescored** | **bool** | Whether this evaluation has ever been rescored | [optional] 
**deleted** | **bool** | Whether this evaluation has been deleted | [optional] 
**oTotalScore** | **int** |  | [optional] 
**oTotalCriticalScore** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


