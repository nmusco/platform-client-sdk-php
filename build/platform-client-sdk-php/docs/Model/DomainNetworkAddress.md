# DomainNetworkAddress

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of address. | [optional] 
**address** | **string** | An IPv4 or IPv6 IP address. When specifying an address of type \&quot;ip\&quot;, use CIDR format for the subnet mask. | [optional] 
**persistent** | **bool** | True if this address will persist on Edge restart.  Addresses assigned by DHCP will be returned as false. | [optional] 
**family** | **int** | The address family for this address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


