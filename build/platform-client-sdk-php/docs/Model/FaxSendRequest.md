# FaxSendRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**addresses** | **string[]** | A list of outbound fax dialing addresses. E.g. +13175555555 or 3175555555 | 
**documentId** | **string** | DocumentId of Content Management artifact. If Content Management document is not used for faxing, documentId should be null | [optional] 
**contentType** | **string** | The content type that is going to be uploaded. If Content Management document is used for faxing, contentType will be ignored | [optional] 
**workspace** | [**\PureCloudPlatform\Client\V2\Model\Workspace**](Workspace.md) | Workspace in which the document should be stored. If Content Management document is used for faxing, workspace will be ignored | [optional] 
**coverSheet** | [**\PureCloudPlatform\Client\V2\Model\CoverSheet**](CoverSheet.md) | Data for coversheet generation. | [optional] 
**timeZoneOffsetMinutes** | **int** | Time zone offset minutes from GMT | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


