# LineIntegration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique Integration Id | 
**name** | **string** | The name of the LINE Integration | 
**channelId** | **string** | The Channel Id from LINE messenger | 
**webhookUri** | **string** | The Webhook URI to be updated in LINE platform | 
**status** | **string** | The status of the LINE Integration | [optional] 
**recipient** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The recipient associated to the Line Integration. This recipient is used to associate a flow to an integration | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date this Integration was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Date this Integration was modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | User reference that created this Integration | [optional] 
**modifiedBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | User reference that last modified this Integration | [optional] 
**version** | **int** | Version number required for updates. | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


