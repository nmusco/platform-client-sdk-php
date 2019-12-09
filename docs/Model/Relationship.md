# Relationship

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The user associated with the external organization | 
**externalOrganization** | [**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](ExternalOrganization.md) | The external organization this relationship is attached to | 
**relationship** | **string** | The relationship or role of the user to this external organization.Examples: Account Manager, Sales Engineer, Implementation Consultant | 
**externalDataSources** | [**\PureCloudPlatform\Client\V2\Model\ExternalDataSource[]**](ExternalDataSource.md) | Links to the sources of data (e.g. one source might be a CRM) that contributed data to this record.  Read-only, and only populated when requested via expand param. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


