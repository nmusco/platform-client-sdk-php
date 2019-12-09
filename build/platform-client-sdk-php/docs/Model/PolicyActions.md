# PolicyActions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retainRecording** | **bool** | true to retain the recording associated with the conversation. Default &#x3D; true | [optional] 
**deleteRecording** | **bool** | true to delete the recording associated with the conversation. If retainRecording &#x3D; true, this will be ignored. Default &#x3D; false | [optional] 
**alwaysDelete** | **bool** | true to delete the recording associated with the conversation regardless of the values of retainRecording or deleteRecording. Default &#x3D; false | [optional] 
**assignEvaluations** | [**\PureCloudPlatform\Client\V2\Model\EvaluationAssignment[]**](EvaluationAssignment.md) |  | [optional] 
**assignMeteredEvaluations** | [**\PureCloudPlatform\Client\V2\Model\MeteredEvaluationAssignment[]**](MeteredEvaluationAssignment.md) |  | [optional] 
**assignMeteredAssignmentByAgent** | [**\PureCloudPlatform\Client\V2\Model\MeteredAssignmentByAgent[]**](MeteredAssignmentByAgent.md) |  | [optional] 
**assignCalibrations** | [**\PureCloudPlatform\Client\V2\Model\CalibrationAssignment[]**](CalibrationAssignment.md) |  | [optional] 
**assignSurveys** | [**\PureCloudPlatform\Client\V2\Model\SurveyAssignment[]**](SurveyAssignment.md) |  | [optional] 
**retentionDuration** | [**\PureCloudPlatform\Client\V2\Model\RetentionDuration**](RetentionDuration.md) |  | [optional] 
**initiateScreenRecording** | [**\PureCloudPlatform\Client\V2\Model\InitiateScreenRecording**](InitiateScreenRecording.md) |  | [optional] 
**mediaTranscriptions** | [**\PureCloudPlatform\Client\V2\Model\MediaTranscription[]**](MediaTranscription.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


