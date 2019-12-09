# DialerContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**contactListId** | **string** | The identifier of the contact list containing this contact. | 
**data** | **map[string,object]** | An ordered map of the contact&#39;s columns and corresponding values. | 
**callRecords** | [**map[string,\PureCloudPlatform\Client\V2\Model\CallRecord]**](CallRecord.md) | A map of call records for the contact phone columns. | [optional] 
**callable** | **bool** | Indicates whether or not the contact can be called. | [optional] 
**phoneNumberStatus** | [**map[string,\PureCloudPlatform\Client\V2\Model\PhoneNumberStatus]**](PhoneNumberStatus.md) | A map of phone number columns to PhoneNumberStatuses, which indicate if the phone number is callable or not. | [optional] 
**contactColumnTimeZones** | [**map[string,\PureCloudPlatform\Client\V2\Model\ContactColumnTimeZone]**](ContactColumnTimeZone.md) | Map containing data about the timezone the contact is mapped to. This will only be populated if the contact list has automatic timezone mapping turned on. The key is the column name. The value is the timezone it mapped to and the type of column: Phone or Zip | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


