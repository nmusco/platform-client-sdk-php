# DomainCapabilities

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | True if this address family on the interface is enabled. | [optional] 
**dhcp** | **bool** | True if this address family on the interface is using DHCP. | [optional] 
**metric** | **int** | The metric being used for the address family on this interface. Lower values will have a higher priority. If autoMetric is true, this value will be the automatically calculated metric. To set this value be sure autoMetric is false. If no value is returned, metric configuration is not supported on this Edge. | [optional] 
**autoMetric** | **bool** | True if the metric is being calculated automatically for the address family on this interface. | [optional] 
**supportsMetric** | **bool** | True if metric configuration is supported. | [optional] 
**pingEnabled** | **bool** | Set to true to enable this address family on this interface to respond to ping requests. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


