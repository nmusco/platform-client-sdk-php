# ContactList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**division** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The division this entity belongs to. | [optional] 
**columnNames** | **string[]** | The names of the contact data columns. | 
**phoneColumns** | [**\PureCloudPlatform\Client\V2\Model\ContactPhoneNumberColumn[]**](ContactPhoneNumberColumn.md) | Indicates which columns are phone numbers. | 
**importStatus** | [**\PureCloudPlatform\Client\V2\Model\ImportStatus**](ImportStatus.md) | The status of the import process. | [optional] 
**previewModeColumnName** | **string** | A column to check if a contact should always be dialed in preview mode. | [optional] 
**previewModeAcceptedValues** | **string[]** | The values in the previewModeColumnName column that indicate a contact should always be dialed in preview mode. | [optional] 
**size** | **int** | The number of contacts in the ContactList. | [optional] 
**attemptLimits** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | AttemptLimits for this ContactList. | [optional] 
**automaticTimeZoneMapping** | **bool** | Indicates if automatic time zone mapping is to be used for this ContactList. | [optional] 
**zipCodeColumnName** | **string** | The name of contact list column containing the zip code for use with automatic time zone mapping. Only allowed if &#39;automaticTimeZoneMapping&#39; is set to true. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


