# DomainNetworkRoute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** | The IPv4 or IPv6 route prefix in CIDR notation. | [optional] 
**nexthop** | **string** | The IPv4 or IPv6 nexthop IP address. | [optional] 
**persistent** | **bool** | True if this route will persist on Edge restart.  Routes assigned by DHCP will be returned as false. | [optional] 
**metric** | **int** | The metric being used for route. Lower values will have a higher priority. | [optional] 
**family** | **int** | The address family for this route. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


