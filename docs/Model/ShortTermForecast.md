# ShortTermForecast

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the short term forecast | 
**weekDate** | **string** | The weekDate of the short term forecast in yyyy-MM-dd format | 
**description** | **string** | The description of the short term forecast | [optional] 
**creationMethod** | **string** | The method used to create this forecast | [optional] 
**metadata** | [**\PureCloudPlatform\Client\V2\Model\WfmVersionedEntityMetadata**](WfmVersionedEntityMetadata.md) | Metadata for this forecast | 
**sourceData** | [**\PureCloudPlatform\Client\V2\Model\ListWrapperForecastSourceDayPointer**](ListWrapperForecastSourceDayPointer.md) | The source data references and metadata for this forecast | [optional] 
**referenceStartDate** | [**\DateTime**](\DateTime.md) | ISO-8601 date that serves as the reference date for interval-based modifications | [optional] 
**modifications** | [**\PureCloudPlatform\Client\V2\Model\ListWrapperWfmForecastModification**](ListWrapperWfmForecastModification.md) | The modifications that have been applied to this forecast | [optional] 
**generationResults** | [**\PureCloudPlatform\Client\V2\Model\ForecastGenerationResult**](ForecastGenerationResult.md) | Forecast generation results, if applicable | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


