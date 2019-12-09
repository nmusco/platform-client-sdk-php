# LocationCreateDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the Location. Required for creates, not required for updates | 
**version** | **int** | Current version of the location | [optional] 
**state** | **string** | Current activity status of the location. | [optional] 
**path** | **string[]** | A list of ancestor ids | [optional] 
**notes** | **string** | Notes for the location | [optional] 
**contactUser** | **string** | The user id of the location contact | [optional] 
**emergencyNumber** | [**\PureCloudPlatform\Client\V2\Model\LocationEmergencyNumber**](LocationEmergencyNumber.md) | Emergency number for the location | [optional] 
**address** | [**\PureCloudPlatform\Client\V2\Model\LocationAddress**](LocationAddress.md) | Address of the location | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


