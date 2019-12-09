# DataSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**version** | **int** | The schema&#39;s version, a positive integer. Required for updates. | 
**appliesTo** | **string[]** | One of \&quot;CONTACT\&quot; or \&quot;EXTERNAL_ORGANIZATION\&quot;.  Indicates the built-in entity type to which this schema applies. | [optional] 
**enabled** | **bool** | The schema&#39;s enabled/disabled status. A disabled schema cannot be assigned to any other entities, but the data on those entities from the schema still exists. | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The URI of the user that created this schema. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | The date and time this schema was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**jsonSchema** | [**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](JsonSchemaDocument.md) | A JSON schema defining the extension to the built-in entity type. | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


