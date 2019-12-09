# WritableDialerContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**contactListId** | **string** | The identifier of the contact list containing this contact. | 
**data** | **map[string,object]** | An ordered map of the contact&#39;s columns and corresponding values. | 
**callable** | **bool** | Indicates whether or not the contact can be called. | [optional] 
**phoneNumberStatus** | [**map[string,\PureCloudPlatform\Client\V2\Model\PhoneNumberStatus]**](PhoneNumberStatus.md) | A map of phone number columns to PhoneNumberStatuses, which indicate if the phone number is callable or not. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


