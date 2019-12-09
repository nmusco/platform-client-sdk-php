# IVR

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the entity. | 
**description** | **string** | The resource&#39;s description. | [optional] 
**version** | **int** | The current version of the resource. | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | The date the resource was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | The date of the last modification to the resource. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**modifiedBy** | **string** | The ID of the user that last modified the resource. | [optional] 
**createdBy** | **string** | The ID of the user that created the resource. | [optional] 
**state** | **string** | Indicates if the resource is active, inactive, or deleted. | [optional] 
**modifiedByApp** | **string** | The application that last modified the resource. | [optional] 
**createdByApp** | **string** | The application that created the resource. | [optional] 
**dnis** | **string[]** | The phone number(s) to contact the IVR by.  Each phone number must be unique and not in use by another resource.  For example, a user and an iVR cannot have the same phone number. | [optional] 
**openHoursFlow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Architect flow to execute during the hours an organization is open. | [optional] 
**closedHoursFlow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Architect flow to execute during the hours an organization is closed. | [optional] 
**holidayHoursFlow** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Architect flow to execute during an organization&#39;s holiday hours. | [optional] 
**scheduleGroup** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The schedule group defining the open and closed hours for an organization.  If this is provided, an open flow and a closed flow must be specified as well. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


