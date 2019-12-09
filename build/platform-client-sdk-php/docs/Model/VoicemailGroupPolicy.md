# VoicemailGroupPolicy

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**group** | [**\PureCloudPlatform\Client\V2\Model\Group**](Group.md) | The group associated with the policy | [optional] 
**enabled** | **bool** | Whether voicemail is enabled for the group | [optional] 
**sendEmailNotifications** | **bool** | Whether email notifications are sent to group members when a new voicemail is received | [optional] 
**rotateCallsSecs** | **int** | How many seconds to ring before rotating to the next member in the group | [optional] 
**stopRingingAfterRotations** | **int** | How many rotations to go through | [optional] 
**overflowGroupId** | **string** | A fallback group to contact when all of the members in this group did not answer the call. | [optional] 
**groupAlertType** | **string** | Specifies if the members in this group should be contacted randomly, in a specific order, or by round-robin. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


