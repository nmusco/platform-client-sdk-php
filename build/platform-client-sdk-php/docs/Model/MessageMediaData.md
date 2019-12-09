# MessageMediaData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**url** | **string** | The location of the media, useful for retrieving it | [optional] 
**mediaType** | **string** | The optional internet media type of the the media object.  If null then the media type should be dictated by the url. | [optional] 
**contentLengthBytes** | **int** | The optional content length of the the media object, in bytes. | [optional] 
**uploadUrl** | **string** | The URL returned to upload an attachment | [optional] 
**status** | **string** | The status of the media, indicates if the media is in the process of uploading. If the upload fails, the media becomes invalid | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


