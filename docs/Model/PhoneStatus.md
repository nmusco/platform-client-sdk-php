# PhoneStatus

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**operationalStatus** | **string** | The Operational Status of this phone | [optional] 
**edgesStatus** | **string** | The status of the primary or secondary Edges assigned to the phone lines. | [optional] 
**eventCreationTime** | **string** | Event Creation Time represents an ISO-8601 string. For example: UTC, UTC+01:00, or Europe/London | [optional] 
**provision** | [**\PureCloudPlatform\Client\V2\Model\ProvisionInfo**](ProvisionInfo.md) | Provision information for this phone | [optional] 
**lineStatuses** | [**\PureCloudPlatform\Client\V2\Model\LineStatus[]**](LineStatus.md) | A list of LineStatus information for each of the lines of this phone | [optional] 
**phoneAssignmentToEdgeType** | **string** | The phone status&#39;s edge assignment type. | [optional] 
**edge** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The URI of the edge that provided this status information. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


