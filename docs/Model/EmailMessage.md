# EmailMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**to** | [**\PureCloudPlatform\Client\V2\Model\EmailAddress[]**](EmailAddress.md) | The recipients of the email message. | 
**cc** | [**\PureCloudPlatform\Client\V2\Model\EmailAddress[]**](EmailAddress.md) | The recipients that were copied on the email message. | [optional] 
**bcc** | [**\PureCloudPlatform\Client\V2\Model\EmailAddress[]**](EmailAddress.md) | The recipients that were blind copied on the email message. | [optional] 
**from** | [**\PureCloudPlatform\Client\V2\Model\EmailAddress**](EmailAddress.md) | The sender of the email message. | 
**subject** | **string** | The subject of the email message. | [optional] 
**attachments** | [**\PureCloudPlatform\Client\V2\Model\Attachment[]**](Attachment.md) | The attachments of the email message. | [optional] 
**textBody** | **string** | The text body of the email message. | 
**htmlBody** | **string** | The html body of the email message. | [optional] 
**time** | [**\DateTime**](\DateTime.md) | The time when the message was received or sent. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**historyIncluded** | **bool** | Indicates whether the history of previous emails of the conversation is included within the email bodies of this message. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


