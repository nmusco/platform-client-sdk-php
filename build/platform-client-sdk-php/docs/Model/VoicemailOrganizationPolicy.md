# VoicemailOrganizationPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether voicemail is enable for this organization | [optional] 
**alertTimeoutSeconds** | **int** | The organization&#39;s default number of seconds to ring a user&#39;s phone before a call is transfered to voicemail | [optional] 
**pinConfiguration** | [**\PureCloudPlatform\Client\V2\Model\PINConfiguration**](PINConfiguration.md) | The configuration for user PINs to access their voicemail from a phone | [optional] 
**voicemailExtension** | **string** | The extension for voicemail retrieval.  The default value is *86. | [optional] 
**pinRequired** | **bool** | If this is true, a PIN is required when accessing a user&#39;s voicemail from a phone. | [optional] 
**sendEmailNotifications** | **bool** | Whether email notifications are sent for new voicemails in the organization. If false, new voicemail email notifications are not be sent for the organization overriding any user or group setting. | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | The date the policy was last modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


