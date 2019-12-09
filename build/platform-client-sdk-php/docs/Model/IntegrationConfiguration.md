# IntegrationConfiguration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the integration, used to distinguish this integration from others of the same type. | 
**version** | **int** | Version number required for updates. | 
**properties** | **object** | Key-value configuration settings described by the schema in the propertiesSchemaUri field. | 
**advanced** | **object** | Advanced configuration described by the schema in the advancedSchemaUri field. | 
**notes** | **string** | Notes about the integration. | 
**credentials** | [**map[string,\PureCloudPlatform\Client\V2\Model\CredentialInfo]**](CredentialInfo.md) | Credentials required by the integration. The required keys are indicated in the credentials property of the Integration Type | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


