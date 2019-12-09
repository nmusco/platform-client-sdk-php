# OAuthClientListing

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the OAuth client. | 
**accessTokenValiditySeconds** | **int** | The number of seconds, between 5mins and 48hrs, until tokens created with this client expire. If this field is omitted, a default of 24 hours will be applied. | [optional] 
**description** | **string** |  | [optional] 
**registeredRedirectUri** | **string[]** | List of allowed callbacks for this client. For example: https://myap.example.com/auth/callback | [optional] 
**secret** | **string** | System created secret assigned to this client. Secrets are required for code authorization and client credential grants. | [optional] 
**roleIds** | **string[]** | Deprecated. Use roleDivisions instead. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date this client was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Date this client was last modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | User that created this client | [optional] 
**modifiedBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | User that last modified this client | [optional] 
**scope** | **string[]** | The scope requested by this client. Scopes only apply to clients not using the client_credential grant | [optional] 
**roleDivisions** | [**\PureCloudPlatform\Client\V2\Model\RoleDivision[]**](RoleDivision.md) | Set of roles and their corresponding divisions associated with this client. Roles and divisions only apply to clients using the client_credential grant | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


