# VoicemailUserPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether the user has voicemail enabled | [optional] 
**alertTimeoutSeconds** | **int** | The number of seconds to ring the user&#39;s phone before a call is transfered to voicemail | [optional] 
**pin** | **string** | The user&#39;s PIN to access their voicemail. This property is only used for updates and never provided otherwise to ensure security | [optional] 
**modifiedDate** | [**\DateTime**](\DateTime.md) | The date the policy was last modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


