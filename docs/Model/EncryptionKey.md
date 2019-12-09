# EncryptionKey

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**createDate** | [**\DateTime**](\DateTime.md) | create date of the key pair. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**keydataSummary** | **string** | key data summary (base 64 encoded public key) | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | user that requested generation of public key | [optional] 
**localEncryptionConfiguration** | [**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration**](LocalEncryptionConfiguration.md) | Local configuration | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


