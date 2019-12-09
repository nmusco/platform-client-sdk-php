# SmsPhoneNumber

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**phoneNumber** | **string** | A phone number provisioned for SMS communications in E.164 format. E.g. +13175555555 or +34234234234 | 
**phoneNumberType** | **string** | Type of the phone number provisioned. | [optional] 
**provisionedThroughPureCloud** | **bool** | Is set to false, if the phone number is provisioned through a SMS provider, outside of PureCloud | [optional] 
**phoneNumberStatus** | **string** | Status of the provisioned phone number. | [optional] 
**capabilities** | **string[]** | The capabilities of the phone number available for provisioning. | [optional] 
**countryCode** | **string** | The ISO 3166-1 alpha-2 country code of the country this phone number is associated with. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date this phone number was provisioned. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Date this phone number was modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that provisioned this phone number | [optional] 
**modifiedBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that last modified this phone number | [optional] 
**version** | **int** | Version number required for updates. | 
**purchaseDate** | [**\DateTime**](\DateTime.md) | Date this phone number was purchased, if the phoneNumberType is shortcode. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**cancellationDate** | [**\DateTime**](\DateTime.md) | Contract end date of this phone number, if the phoneNumberType is shortcode. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**renewalDate** | [**\DateTime**](\DateTime.md) | Contract renewal date of this phone number, if the phoneNumberType is shortcode. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**autoRenewable** | **string** | Renewal time period of this phone number, if the phoneNumberType is shortcode. | [optional] 
**addressId** | [**\PureCloudPlatform\Client\V2\Model\SmsAddress**](SmsAddress.md) | The id of an address attached to this phone number. | [optional] 
**shortCodeBillingType** | **string** | BillingType of this phone number, if the phoneNumberType is shortcode. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


