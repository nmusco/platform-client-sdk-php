# Trunk

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
**trunkType** | **string** | The type of this trunk. | [optional] 
**edge** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Edge using this trunk. | [optional] 
**trunkBase** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The trunk base configuration used on this trunk. | [optional] 
**trunkMetabase** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The metabase used to create this trunk. | [optional] 
**edgeGroup** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The edge group associated with this trunk. | [optional] 
**inService** | **bool** | True if this trunk is in-service.  This comes from the trunk_enabled property of the referenced trunk base. | [optional] 
**enabled** | **bool** | True if the Edge used by this trunk is in-service | [optional] 
**logicalInterface** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Logical Interface on the Edge to which the trunk is assigned. | [optional] 
**connectedStatus** | [**\PureCloudPlatform\Client\V2\Model\TrunkConnectedStatus**](TrunkConnectedStatus.md) | The connected status of the trunk | [optional] 
**optionsStatus** | [**\PureCloudPlatform\Client\V2\Model\TrunkMetricsOptions[]**](TrunkMetricsOptions.md) | The trunk optionsStatus | [optional] 
**registersStatus** | [**\PureCloudPlatform\Client\V2\Model\TrunkMetricsRegisters[]**](TrunkMetricsRegisters.md) | The trunk registersStatus | [optional] 
**ipStatus** | [**\PureCloudPlatform\Client\V2\Model\TrunkMetricsNetworkTypeIp**](TrunkMetricsNetworkTypeIp.md) | The trunk ipStatus | [optional] 
**optionsEnabledStatus** | **string** | Returns Enabled when the trunk base supports the availability interval and it has a value greater than 0. | [optional] 
**registersEnabledStatus** | **string** | Returns Enabled when the trunk base supports the registration interval and it has a value greater than 0. | [optional] 
**family** | **int** | The IP Network Family of the trunk | [optional] 
**proxyAddressList** | **string[]** | The list of proxy addresses (ports if provided) for the trunk | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


