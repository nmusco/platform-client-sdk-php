# UpdateActivityCodeRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the activity code | [optional] 
**category** | **string** | The activity code&#39;s category. Attempting to change the category of a default activity code will return an error | [optional] 
**lengthInMinutes** | **int** | The default length of the activity in minutes | [optional] 
**countsAsPaidTime** | **bool** | Whether an agent is paid while performing this activity | [optional] 
**countsAsWorkTime** | **bool** | Indicates whether or not the activity should be counted as work time | [optional] 
**agentTimeOffSelectable** | **bool** | Whether an agent can select this activity code when creating or editing a time off request | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version metadata for the associated management unit&#39;s list of activity codes | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


