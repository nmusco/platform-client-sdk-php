# UserScheduleAdherence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**user** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | The user for whom this status applies | [optional] 
**managementUnit** | [**\PureCloudPlatform\Client\V2\Model\ManagementUnit**](ManagementUnit.md) | The management unit to which this user belongs | [optional] 
**scheduledActivityCategory** | **string** | Activity for which the user is scheduled | [optional] 
**systemPresence** | **string** | Actual underlying system presence value | [optional] 
**organizationSecondaryPresenceId** | **string** | Organization Secondary Presence Id. | [optional] 
**routingStatus** | **string** | Actual underlying routing status, used to determine whether a user is actually in adherence when OnQueue | [optional] 
**actualActivityCategory** | **string** | Activity in which the user is actually engaged | [optional] 
**isOutOfOffice** | **bool** | Whether the user is marked OutOfOffice | [optional] 
**adherenceState** | **string** | The user&#39;s current adherence state | [optional] 
**impact** | **string** | The impact of the user&#39;s current adherenceState | [optional] 
**timeOfAdherenceChange** | [**\DateTime**](\DateTime.md) | Time when the user entered the current adherenceState in ISO-8601 format | [optional] 
**presenceUpdateTime** | [**\DateTime**](\DateTime.md) | Time when presence was last updated.  Used to calculate time in current status. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**activeQueues** | [**\PureCloudPlatform\Client\V2\Model\QueueReference[]**](QueueReference.md) | The list of queues to which this user is joined | [optional] 
**activeQueuesModifiedTime** | [**\DateTime**](\DateTime.md) | Time when the list of active queues for this user was last updated. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


