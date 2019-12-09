# WhatsAppIntegration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique Integration Id. | 
**name** | **string** | The name of the WhatsApp integration. | 
**phoneNumber** | **string** | The phone number associated to the whatsApp integration. | 
**status** | **string** | The status of the WhatsApp Integration | [optional] 
**recipient** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The recipient associated to the WhatsApp Integration. This recipient is used to associate a flow to an integration | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date this Integration was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Date this Integration was last modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | User reference that created this Integration | [optional] 
**modifiedBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | User reference that last modified this Integration | [optional] 
**version** | **int** | Version number required for updates. | 
**activationStatusCode** | **string** | The status code of WhatsApp Integration activation process | [optional] 
**activationErrorInfo** | [**\PureCloudPlatform\Client\V2\Model\ErrorBody**](ErrorBody.md) | The error information of WhatsApp Integration activation process | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


