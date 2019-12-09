# CallForwarding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**enabled** | **bool** | Whether or not CallForwarding is enabled | [optional] 
**phoneNumber** | **string** | This property is deprecated. Please use the calls property | [optional] 
**calls** | [**\PureCloudPlatform\Client\V2\Model\CallRoute[]**](CallRoute.md) | An ordered list of CallRoutes to be executed when CallForwarding is enabled | [optional] 
**voicemail** | **string** | The type of voicemail to use with the callForwarding configuration | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


