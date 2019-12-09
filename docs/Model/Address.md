# Address

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | This will be nameRaw if present, or a locality lookup of the address field otherwise. | [optional] 
**nameRaw** | **string** | The name as close to the bits on the wire as possible. | [optional] 
**addressNormalized** | **string** | The normalized address. This field is acquired from the Address Normalization Table.  The addressRaw could have gone through some transformations, such as only using the numeric portion, before being run through the Address Normalization Table. | [optional] 
**addressRaw** | **string** | The address as close to the bits on the wire as possible. | [optional] 
**addressDisplayable** | **string** | The displayable address. This field is acquired from the Address Normalization Table.  The addressRaw could have gone through some transformations, such as only using the numeric portion, before being run through the Address Normalization Table. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


