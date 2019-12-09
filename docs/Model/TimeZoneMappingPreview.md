# TimeZoneMappingPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contactList** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The associated ContactList | [optional] 
**contactsPerTimeZone** | **map[string,int]** | The number of contacts per time zone that mapped to only that time zone | [optional] 
**contactsMappedUsingZipCode** | **map[string,int]** | The number of contacts per time zone that mapped to only that time zone and were mapped using the zip code column | [optional] 
**contactsMappedToASingleZone** | **int** | The total number of contacts that mapped to a single time zone | [optional] 
**contactsMappedToASingleZoneUsingZipCode** | **int** | The total number of contacts that mapped to a single time zone and were mapped using the zip code column | [optional] 
**contactsMappedToMultipleZones** | **int** | The total number of contacts that mapped to multiple time zones | [optional] 
**contactsMappedToMultipleZonesUsingZipCode** | **int** | The total number of contacts that mapped to multiple time zones and were mapped using the zip code column | [optional] 
**contactsInDefaultWindow** | **int** | The total number of contacts that will be dialed during the default window | [optional] 
**contactListSize** | **int** | The total number of contacts in the contact list | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


