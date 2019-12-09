# ActionOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**successSchema** | [**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](JsonSchemaDocument.md) | JSON schema that defines the transformed, successful result that will be sent back to the caller. If the &#39;flatten&#39; query parameter is omitted or false, this field will be returned. Either successSchema or successSchemaFlattened will be returned, not both. | [optional] 
**successSchemaUri** | **string** | URI to retrieve success schema | [optional] 
**errorSchema** | [**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](JsonSchemaDocument.md) | JSON schema that defines the body of response when request is not successful. If the &#39;flatten&#39; query parameter is omitted or false, this field will be returned. Either errorSchema or errorSchemaFlattened will be returned, not both. | [optional] 
**errorSchemaUri** | **string** | URI to retrieve error schema | [optional] 
**successSchemaFlattened** | [**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](JsonSchemaDocument.md) | JSON schema that defines the transformed, successful result that will be sent back to the caller. The schema is transformed based on Architect&#39;s flattened format. If the &#39;flatten&#39; query parameter is supplied as true, this field will be returned. Either successSchema or successSchemaFlattened will be returned, not both. | [optional] 
**errorSchemaFlattened** | **object** | JSON schema that defines the body of response when request is not successful. The schema is transformed based on Architect&#39;s flattened format. If the &#39;flatten&#39; query parameter is supplied as true, this field will be returned. Either errorSchema or errorSchemaFlattened will be returned, not both. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


