# Phone

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
**site** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The site associated to the phone. | 
**phoneBaseSettings** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | Phone Base Settings | 
**lineBaseSettings** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**phoneMetaBase** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**lines** | [**\PureCloudPlatform\Client\V2\Model\Line[]**](Line.md) | Lines | 
**status** | [**\PureCloudPlatform\Client\V2\Model\PhoneStatus**](PhoneStatus.md) | The status of the phone and lines from the primary Edge. | [optional] 
**secondaryStatus** | [**\PureCloudPlatform\Client\V2\Model\PhoneStatus**](PhoneStatus.md) | The status of the phone and lines from the secondary Edge. | [optional] 
**userAgentInfo** | [**\PureCloudPlatform\Client\V2\Model\UserAgentInfo**](UserAgentInfo.md) | User Agent Information for this phone. This includes model, firmware version, and manufacturer. | [optional] 
**properties** | **map[string,object]** |  | [optional] 
**capabilities** | [**\PureCloudPlatform\Client\V2\Model\PhoneCapabilities**](PhoneCapabilities.md) |  | [optional] 
**webRtcUser** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | This is the user associated with a WebRTC type phone.  It is required for all WebRTC phones. | [optional] 
**primaryEdge** | [**\PureCloudPlatform\Client\V2\Model\Edge**](Edge.md) |  | [optional] 
**secondaryEdge** | [**\PureCloudPlatform\Client\V2\Model\Edge**](Edge.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


