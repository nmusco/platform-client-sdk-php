# DocumentAudit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**workspace** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**transactionId** | **string** |  | [optional] 
**transactionInitiator** | **bool** |  | [optional] 
**application** | **string** |  | [optional] 
**serviceName** | **string** |  | [optional] 
**level** | **string** |  | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**status** | **string** |  | [optional] 
**actionContext** | **string** |  | [optional] 
**action** | **string** |  | [optional] 
**entity** | [**\PureCloudPlatform\Client\V2\Model\AuditEntityReference**](AuditEntityReference.md) |  | [optional] 
**changes** | [**\PureCloudPlatform\Client\V2\Model\AuditChange[]**](AuditChange.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


