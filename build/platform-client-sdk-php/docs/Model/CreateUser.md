# CreateUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | User&#39;s full name | 
**department** | **string** |  | [optional] 
**email** | **string** | User&#39;s email and username | 
**addresses** | [**\PureCloudPlatform\Client\V2\Model\Contact[]**](Contact.md) | Email addresses and phone numbers for this user | [optional] 
**title** | **string** |  | [optional] 
**password** | **string** | User&#39;s password | 
**divisionId** | **string** | The division to which this user will belong | 
**state** | **string** | Optional initialized state of the user. If not specified, state will be Active if invites are sent, otherwise Inactive. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


