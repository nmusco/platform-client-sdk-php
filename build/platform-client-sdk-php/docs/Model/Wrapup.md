# Wrapup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The user configured wrap up code id. | [optional] 
**name** | **string** | The user configured wrap up code name. | [optional] 
**notes** | **string** | Text entered by the agent to describe the call or disposition. | [optional] 
**tags** | **string[]** | List of tags selected by the agent to describe the call or disposition. | [optional] 
**durationSeconds** | **int** | The length of time in seconds that the agent spent doing after call work. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The timestamp when the wrapup was finished. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**provisional** | **bool** | Indicates if this is a pending save and should not require a code to be specified.  This allows someone to save some temporary wrapup that will be used later. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


