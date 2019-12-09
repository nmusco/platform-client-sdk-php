# DialerRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the rule. | [optional] 
**name** | **string** | The name of the rule. | 
**order** | **int** | The ranked order of the rule. Rules are processed from lowest number to highest. | [optional] 
**category** | **string** | The category of the rule. | 
**conditions** | [**\PureCloudPlatform\Client\V2\Model\Condition[]**](Condition.md) | A list of Conditions. All of the Conditions must evaluate to true to trigger the actions. | 
**actions** | [**\PureCloudPlatform\Client\V2\Model\DialerAction[]**](DialerAction.md) | The list of actions to be taken if the conditions are true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


