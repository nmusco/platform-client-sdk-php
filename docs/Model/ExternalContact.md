# ExternalContact

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**firstName** | **string** | The first name of the contact. | 
**middleName** | **string** |  | [optional] 
**lastName** | **string** | The last name of the contact. | 
**salutation** | **string** |  | [optional] 
**title** | **string** |  | [optional] 
**workPhone** | [**\PureCloudPlatform\Client\V2\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 
**cellPhone** | [**\PureCloudPlatform\Client\V2\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 
**homePhone** | [**\PureCloudPlatform\Client\V2\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 
**otherPhone** | [**\PureCloudPlatform\Client\V2\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 
**workEmail** | **string** |  | [optional] 
**personalEmail** | **string** |  | [optional] 
**otherEmail** | **string** |  | [optional] 
**address** | [**\PureCloudPlatform\Client\V2\Model\ContactAddress**](ContactAddress.md) |  | [optional] 
**twitterId** | [**\PureCloudPlatform\Client\V2\Model\TwitterId**](TwitterId.md) |  | [optional] 
**lineId** | [**\PureCloudPlatform\Client\V2\Model\LineId**](LineId.md) |  | [optional] 
**whatsAppId** | [**\PureCloudPlatform\Client\V2\Model\WhatsAppId**](WhatsAppId.md) |  | [optional] 
**facebookId** | [**\PureCloudPlatform\Client\V2\Model\FacebookId**](FacebookId.md) |  | [optional] 
**modifyDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**externalOrganization** | [**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](ExternalOrganization.md) |  | [optional] 
**surveyOptOut** | **bool** |  | [optional] 
**externalSystemUrl** | **string** | A string that identifies an external system-of-record resource that may have more detailed information on the contact. It should be a valid URL (including the http/https protocol, port, and path [if any]). The value is automatically trimmed of any leading and trailing whitespace. | [optional] 
**externalDataSources** | [**\PureCloudPlatform\Client\V2\Model\ExternalDataSource[]**](ExternalDataSource.md) | Links to the sources of data (e.g. one source might be a CRM) that contributed data to this record.  Read-only, and only populated when requested via expand param. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


