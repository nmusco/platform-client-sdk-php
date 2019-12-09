# Integration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the integration, used to distinguish this integration from others of the same type. | [optional] 
**integrationType** | [**\PureCloudPlatform\Client\V2\Model\IntegrationType**](IntegrationType.md) | Type of the integration | [optional] 
**notes** | **string** | Notes about the integration. | [optional] 
**intendedState** | **string** | Configured state of the integration. | 
**config** | [**\PureCloudPlatform\Client\V2\Model\IntegrationConfigurationInfo**](IntegrationConfigurationInfo.md) | Configuration information for the integration. | [optional] 
**reportedState** | [**\PureCloudPlatform\Client\V2\Model\IntegrationStatusInfo**](IntegrationStatusInfo.md) | Last reported status of the integration. | [optional] 
**attributes** | **map[string,string]** | Read-only attributes for the integration. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


