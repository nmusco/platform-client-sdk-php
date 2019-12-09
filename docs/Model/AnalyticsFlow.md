# AnalyticsFlow

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flowId** | **string** | The unique identifier of this flow | [optional] 
**flowName** | **string** | The name of this flow | [optional] 
**flowVersion** | **string** | The version of this flow | [optional] 
**flowType** | **string** | The type of this flow | [optional] 
**exitReason** | **string** | The exit reason for this flow, e.g. DISCONNECT | [optional] 
**entryReason** | **string** | The particular entry reason for this flow, e.g. an address, userId, or flowId | [optional] 
**entryType** | **string** | The entry type for this flow | [optional] 
**transferType** | **string** | The type of transfer for flows that ended with a transfer | [optional] 
**transferTargetName** | **string** | The name of a transfer target | [optional] 
**transferTargetAddress** | **string** | The address of a transfer target | [optional] 
**issuedCallback** | **bool** | Flag indicating whether the flow issued a callback | [optional] 
**startingLanguage** | **string** | Flow starting language, e.g. en-us | [optional] 
**endingLanguage** | **string** | Flow ending language, e.g. en-us | [optional] 
**outcomes** | [**\PureCloudPlatform\Client\V2\Model\AnalyticsFlowOutcome[]**](AnalyticsFlowOutcome.md) | Flow outcomes | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


