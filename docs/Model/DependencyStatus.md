# DependencyStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that initiated the build. | [optional] 
**client** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | OAuth client that initiated the build. | [optional] 
**buildId** | **string** |  | [optional] 
**dateStarted** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateCompleted** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**status** | **string** |  | [optional] 
**failedObjects** | [**\PureCloudPlatform\Client\V2\Model\FailedObject[]**](FailedObject.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


