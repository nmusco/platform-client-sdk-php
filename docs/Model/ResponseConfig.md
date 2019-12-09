# ResponseConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**translationMap** | **map[string,string]** | Map &#39;attribute name&#39; and &#39;JSON path&#39; pairs used to extract data from REST response. | [optional] 
**translationMapDefaults** | **map[string,string]** | Map &#39;attribute name&#39; and &#39;default value&#39; pairs used as fallback values if JSON path extraction fails for specified key. | [optional] 
**successTemplate** | **string** | Velocity template to build response to return from Action. | [optional] 
**successTemplateUri** | **string** | URI to retrieve success template. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


