# ManagementUnit

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**division** | [**\PureCloudPlatform\Client\V2\Model\Division**](Division.md) | The division to which this entity belongs. | [optional] 
**startDayOfWeek** | **string** | Start day of week for scheduling and forecasting purposes | [optional] 
**timeZone** | **string** | The time zone for the management unit in standard Olson format | [optional] 
**settings** | [**\PureCloudPlatform\Client\V2\Model\ManagementUnitSettings**](ManagementUnitSettings.md) | The configuration settings for this management unit | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Version info metadata for this management unit. Deprecated, use settings.metadata | [optional] 
**version** | **int** | The version of the underlying entity.  Deprecated, use field from settings.metadata instead | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | The date and time at which this entity was last modified.  Deprecated, use field from settings.metadata instead. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**modifiedBy** | [**\PureCloudPlatform\Client\V2\Model\UserReference**](UserReference.md) | The user who last modified this entity.  Deprecated, use field from settings.metadata instead | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


