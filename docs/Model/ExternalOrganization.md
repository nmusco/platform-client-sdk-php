# ExternalOrganization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the company. | 
**companyType** | **string** |  | [optional] 
**industry** | **string** |  | [optional] 
**primaryContactId** | **string** |  | [optional] 
**address** | [**\PureCloudPlatform\Client\V2\Model\ContactAddress**](ContactAddress.md) |  | [optional] 
**phoneNumber** | [**\PureCloudPlatform\Client\V2\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 
**faxNumber** | [**\PureCloudPlatform\Client\V2\Model\PhoneNumber**](PhoneNumber.md) |  | [optional] 
**employeeCount** | **int** |  | [optional] 
**revenue** | **int** |  | [optional] 
**tags** | **string[]** |  | [optional] 
**websites** | **string[]** |  | [optional] 
**tickers** | [**\PureCloudPlatform\Client\V2\Model\Ticker[]**](Ticker.md) |  | [optional] 
**twitterId** | [**\PureCloudPlatform\Client\V2\Model\TwitterId**](TwitterId.md) |  | [optional] 
**externalSystemUrl** | **string** | A string that identifies an external system-of-record resource that may have more detailed information on the organization. It should be a valid URL (including the http/https protocol, port, and path [if any]). The value is automatically trimmed of any leading and trailing whitespace. | [optional] 
**modifyDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**trustor** | [**\PureCloudPlatform\Client\V2\Model\Trustor**](Trustor.md) |  | [optional] 
**externalDataSources** | [**\PureCloudPlatform\Client\V2\Model\ExternalDataSource[]**](ExternalDataSource.md) | Links to the sources of data (e.g. one source might be a CRM) that contributed data to this record.  Read-only, and only populated when requested via expand param. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


