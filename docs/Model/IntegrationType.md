# IntegrationType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the integration type. | 
**name** | **string** |  | [optional] 
**description** | **string** | Description of the integration type. | [optional] 
**provider** | **string** | PureCloud provider of the integration type. | [optional] 
**category** | **string** | Category describing the integration type. | [optional] 
**images** | [**\PureCloudPlatform\Client\V2\Model\UserImage[]**](UserImage.md) | Collection of logos. | [optional] 
**configPropertiesSchemaUri** | **string** | URI of the schema describing the key-value properties needed to configure an integration of this type. | [optional] 
**configAdvancedSchemaUri** | **string** | URI of the schema describing the advanced JSON document needed to configure an integration of this type. | [optional] 
**helpUri** | **string** | URI of a page with more information about the integration type | [optional] 
**termsOfServiceUri** | **string** | URI of a page with terms and conditions for the integration type | [optional] 
**vendorName** | **string** | Name of the vendor of this integration type | [optional] 
**vendorWebsiteUri** | **string** | URI of the vendor&#39;s website | [optional] 
**marketplaceUri** | **string** | URI of the marketplace listing for this integration type | [optional] 
**faqUri** | **string** | URI of frequently asked questions about the integration type | [optional] 
**privacyPolicyUri** | **string** | URI of a privacy policy for users of the integration type | [optional] 
**supportContactUri** | **string** | URI for vendor support | [optional] 
**salesContactUri** | **string** | URI for vendor sales information | [optional] 
**helpLinks** | [**\PureCloudPlatform\Client\V2\Model\HelpLink[]**](HelpLink.md) | List of links to additional help resources | [optional] 
**credentials** | [**map[string,\PureCloudPlatform\Client\V2\Model\CredentialSpecification]**](CredentialSpecification.md) | Map of credentials for integrations of this type. The key is the name of a credential that can be provided in the credentials property of the integration configuration. | [optional] 
**nonInstallable** | **bool** | Indicates if the integration type is installable or not. | [optional] 
**maxInstances** | **int** | The maximum number of integration instances allowable for this integration type | [optional] 
**userPermissions** | **string[]** | List of permissions required to permit user access to the integration type. | [optional] 
**vendorOAuthClientIds** | **string[]** | List of OAuth Client IDs that must be authorized when the integration is created. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


