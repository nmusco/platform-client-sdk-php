# Edge

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
**interfaces** | [**\PureCloudPlatform\Client\V2\Model\EdgeInterface[]**](EdgeInterface.md) | The list of interfaces for the edge. (Deprecated) Replaced by configuring trunks/ip info on the logical interface instead | [optional] 
**make** | **string** |  | [optional] 
**model** | **string** |  | [optional] 
**apiVersion** | **string** |  | [optional] 
**softwareVersion** | **string** |  | [optional] 
**softwareVersionTimestamp** | **string** |  | [optional] 
**softwareVersionPlatform** | **string** |  | [optional] 
**softwareVersionConfiguration** | **string** |  | [optional] 
**fullSoftwareVersion** | **string** |  | [optional] 
**pairingId** | **string** | The pairing Id for a hardware Edge in the format: 00000-00000-00000-00000-00000. This field is only required when creating an Edge with a deployment type of HARDWARE. | [optional] 
**fingerprint** | **string** |  | [optional] 
**fingerprintHint** | **string** |  | [optional] 
**currentVersion** | **string** |  | [optional] 
**stagedVersion** | **string** |  | [optional] 
**patch** | **string** |  | [optional] 
**statusCode** | **string** | The current status of the Edge. | [optional] 
**edgeGroup** | [**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](EdgeGroup.md) |  | [optional] 
**site** | [**\PureCloudPlatform\Client\V2\Model\Site**](Site.md) | The Site to which the Edge is assigned. | [optional] 
**softwareStatus** | [**\PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto**](DomainEdgeSoftwareUpdateDto.md) |  | [optional] 
**onlineStatus** | **string** |  | [optional] 
**serialNumber** | **string** |  | [optional] 
**physicalEdge** | **bool** |  | [optional] 
**managed** | **bool** |  | [optional] 
**edgeDeploymentType** | **string** |  | [optional] 
**callDrainingState** | **string** |  | [optional] 
**conversationCount** | **int** |  | [optional] 
**proxy** | **string** | Edge HTTP proxy configuration for the WAN port. The field can be a hostname, FQDN, IPv4 or IPv6 address. If port is not included, port 80 is assumed. | [optional] 
**offlineConfigCalled** | **bool** | True if the offline edge configuration endpoint has been called for this edge. | [optional] 
**osName** | **string** | The name provided by the operating system of the Edge. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


