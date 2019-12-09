# Site

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the entity. | 
**description** | **string** | The resource&#39;s description. | [optional] 
**version** | **int** | The current version of the resource. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | The date the resource was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | The date of the last modification to the resource. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**modifiedBy** | **string** | The ID of the user that last modified the resource. | [optional] 
**createdBy** | **string** | The ID of the user that created the resource. | [optional] 
**state** | **string** | Indicates if the resource is active, inactive, or deleted. | [optional] 
**modifiedByApp** | **string** | The application that last modified the resource. | [optional] 
**createdByApp** | **string** | The application that created the resource. | [optional] 
**primarySites** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) |  | [optional] 
**secondarySites** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) |  | [optional] 
**primaryEdges** | [**\PureCloudPlatform\Client\V2\Model\Edge[]**](Edge.md) |  | [optional] 
**secondaryEdges** | [**\PureCloudPlatform\Client\V2\Model\Edge[]**](Edge.md) |  | [optional] 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\Contact[]**](Contact.md) |  | [optional] 
**edges** | [**\PureCloudPlatform\Client\V2\Model\Edge[]**](Edge.md) |  | [optional] 
**edgeAutoUpdateConfig** | [**\PureCloudPlatform\Client\V2\Model\EdgeAutoUpdateConfig**](EdgeAutoUpdateConfig.md) | Recurrance rule, time zone, and start/end settings for automatic edge updates for this site | [optional] 
**mediaRegionsUseLatencyBased** | **bool** |  | [optional] 
**location** | [**\PureCloudPlatform\Client\V2\Model\LocationDefinition**](LocationDefinition.md) | Location | 
**managed** | **bool** |  | [optional] 
**ntpSettings** | [**\PureCloudPlatform\Client\V2\Model\NTPSettings**](NTPSettings.md) | Network Time Protocol settings for the site | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


