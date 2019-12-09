# CreateManagementUnitApiRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the management unit | 
**timeZone** | **string** | The default time zone to use for this management unit | 
**startDayOfWeek** | **string** | The configured first day of the week for scheduling and forecasting purposes | 
**settings** | [**\PureCloudPlatform\Client\V2\Model\CreateManagementUnitSettings**](CreateManagementUnitSettings.md) | The configuration for the management unit.  If omitted, reasonable defaults will be assigned | [optional] 
**divisionId** | **string** | The id of the division to which this management unit belongs.  Defaults to home division ID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


