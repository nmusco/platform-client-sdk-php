# DomainLogicalInterface

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
**edgeUri** | **string** |  | [optional] 
**edgeAssignedId** | **string** |  | [optional] 
**friendlyName** | **string** | Friendly Name | 
**vlanTagId** | **int** |  | [optional] 
**hardwareAddress** | **string** | Hardware Address | 
**physicalAdapterId** | **string** | Physical Adapter Id | 
**ifStatus** | **string** |  | [optional] 
**interfaceType** | **string** | The type of this network interface. | [optional] 
**routes** | [**\PureCloudPlatform\Client\V2\Model\DomainNetworkRoute[]**](DomainNetworkRoute.md) | The list of routes assigned to this interface. | [optional] 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\DomainNetworkAddress[]**](DomainNetworkAddress.md) | The list of IP addresses on this interface.  Priority of dns addresses are based on order in the list. | [optional] 
**ipv4Capabilities** | [**\PureCloudPlatform\Client\V2\Model\DomainCapabilities**](DomainCapabilities.md) | IPv4 interface settings. | [optional] 
**ipv6Capabilities** | [**\PureCloudPlatform\Client\V2\Model\DomainCapabilities**](DomainCapabilities.md) | IPv6 interface settings. | [optional] 
**currentState** | **string** |  | [optional] 
**lastModifiedUserId** | **string** |  | [optional] 
**lastModifiedCorrelationId** | **string** |  | [optional] 
**commandResponses** | [**\PureCloudPlatform\Client\V2\Model\DomainNetworkCommandResponse[]**](DomainNetworkCommandResponse.md) |  | [optional] 
**inheritPhoneTrunkBasesIPv4** | **bool** | The IPv4 phone trunk base assignment will be inherited from the Edge Group. | [optional] 
**inheritPhoneTrunkBasesIPv6** | **bool** | The IPv6 phone trunk base assignment will be inherited from the Edge Group. | [optional] 
**useForInternalEdgeCommunication** | **bool** | This interface will be used for all internal edge-to-edge communication using settings from the edgeTrunkBaseAssignment on the Edge Group. | [optional] 
**useForIndirectEdgeCommunication** | **bool** | Site Interconnects using the \&quot;Indirect\&quot; method will communicate using the Public IP Address specified on the interface. Use this option when a NAT enabled firewall is between the Edge and the far end. | [optional] 
**useForCloudProxyEdgeCommunication** | **bool** | Site Interconnects using the \&quot;Cloud Proxy\&quot; method will broker the connection between them with a Cloud Proxy. This method is required for connections between one or more Sites using Cloud Media, but can optionally be used between two premises Sites if Direct or Indirect are not an option. | [optional] 
**publicNatIpAddress** | **string** | NENT IP Address | [optional] 
**externalTrunkBaseAssignments** | [**\PureCloudPlatform\Client\V2\Model\TrunkBaseAssignment[]**](TrunkBaseAssignment.md) | External trunk base settings to use for external communication from this interface. | [optional] 
**phoneTrunkBaseAssignments** | [**\PureCloudPlatform\Client\V2\Model\TrunkBaseAssignment[]**](TrunkBaseAssignment.md) | Phone trunk base settings to use for phone communication from this interface.  These settings will be ignored when \&quot;inheritPhoneTrunkBases\&quot; is true. | [optional] 
**traceEnabled** | **bool** |  | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


