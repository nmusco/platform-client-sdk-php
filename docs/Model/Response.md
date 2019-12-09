# Response

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**version** | **int** | Version number required for updates. | [optional] 
**libraries** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | One or more libraries response is associated with. | 
**texts** | [**\PureCloudPlatform\Client\V2\Model\ResponseText[]**](ResponseText.md) | One or more texts associated with the response. | 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that created the response | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | The date and time the response was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**interactionType** | **string** | The interaction type for this response. | [optional] 
**substitutions** | [**\PureCloudPlatform\Client\V2\Model\ResponseSubstitution[]**](ResponseSubstitution.md) | Details about any text substitutions used in the texts for this response. | [optional] 
**substitutionsSchema** | [**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](JsonSchemaDocument.md) | Metadata about the text substitutions in json schema format. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


