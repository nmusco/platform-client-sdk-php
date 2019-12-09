# ShiftTradeSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether shift trading is enabled for this management unit | [optional] 
**autoReview** | **bool** | Whether automatic shift trade review is enabled according to the rules defined in for this management unit | [optional] 
**allowDirectTrades** | **bool** | Whether direct shift trades between agents are allowed | [optional] 
**minHoursInFuture** | **int** | The minimum number of hours in the future shift trades are allowed | [optional] 
**unequalPaid** | **string** | How to handle shift trades which involve unequal paid times | [optional] 
**oneSided** | **string** | How to handle one-sided shift trades | [optional] 
**weeklyMinPaidViolations** | **string** | How to handle shift trades which result in violations of weekly minimum paid time constraint | [optional] 
**weeklyMaxPaidViolations** | **string** | How to handle shift trades which result in violations of weekly maximum paid time constraint | [optional] 
**requiresMatchingQueues** | **bool** | Whether to constrain shift trades to agents with matching queues | [optional] 
**requiresMatchingLanguages** | **bool** | Whether to constrain shift trades to agents with matching languages | [optional] 
**requiresMatchingSkills** | **bool** | Whether to constrain shift trades to agents with matching skills | [optional] 
**activityCategoryRules** | [**\PureCloudPlatform\Client\V2\Model\ShiftTradeActivityRule[]**](ShiftTradeActivityRule.md) | Rules that specify what to do with activity categories that are part of a shift defined in a trade | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


