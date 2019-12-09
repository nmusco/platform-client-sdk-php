# OutboundSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**maxCallsPerAgent** | **int** | The maximum number of calls that can be placed per agent on any campaign | [optional] 
**maxConfigurableCallsPerAgent** | **int** | The maximum number of calls that can be configured to be placed per agent on any campaign | [optional] 
**maxLineUtilization** | **double** | The maximum percentage of lines that should be used for Outbound, expressed as a decimal in the range [0.0, 1.0] | [optional] 
**abandonSeconds** | **double** | The number of seconds used to determine if a call is abandoned | [optional] 
**complianceAbandonRateDenominator** | **string** | The denominator to be used in determining the compliance abandon rate | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


