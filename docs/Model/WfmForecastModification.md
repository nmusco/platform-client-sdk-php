# WfmForecastModification

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the modification | 
**startIntervalIndex** | **int** | The number of 15 minute intervals past referenceStartDate representing the first interval to which to apply this modification. Must be null if values is populated | [optional] 
**endIntervalIndex** | **int** | The number of 15 minute intervals past referenceStartDate representing the last interval to which to apply this modification.  Must be null if values is populated | [optional] 
**metric** | **string** | The metric to which this modification applies | 
**value** | **double** | The value of the modification.  Must be null if \&quot;values\&quot; is populated | [optional] 
**values** | [**\PureCloudPlatform\Client\V2\Model\WfmForecastModificationIntervalOffsetValue[]**](WfmForecastModificationIntervalOffsetValue.md) | The list of values to update.  Only applicable for grid-type modifications. Must be null if \&quot;value\&quot; is populated | [optional] 
**enabled** | **bool** | Whether the modification is enabled for the forecast | 
**attributes** | [**\PureCloudPlatform\Client\V2\Model\WfmForecastModificationAttributes**](WfmForecastModificationAttributes.md) | The attributes defining how this modification applies to the forecast | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


