# ActivityCode

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the activity code. Default activity codes will be created with an empty name | [optional] 
**isActive** | **bool** | Whether this activity code is active or has been deleted | [optional] 
**isDefault** | **bool** | Whether this is a default activity code | [optional] 
**category** | **string** | The activity code&#39;s category. | [optional] 
**lengthInMinutes** | **int** | The default length of the activity in minutes | [optional] 
**countsAsPaidTime** | **bool** | Whether an agent is paid while performing this activity | [optional] 
**countsAsWorkTime** | **bool** | Indicates whether or not the activity should be counted as contiguous work time for calculating daily constraints | [optional] 
**agentTimeOffSelectable** | **bool** | Whether an agent can select this activity code when creating or editing a time off request. Null if the activity&#39;s category is not time off. | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version metadata for the associated management unit&#39;s list of activity codes | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


