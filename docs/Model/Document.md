# Document

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**changeNumber** | **int** |  | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateUploaded** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**contentUri** | **string** |  | [optional] 
**workspace** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**uploadedBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**contentType** | **string** |  | [optional] 
**contentLength** | **int** |  | [optional] 
**systemType** | **string** |  | [optional] 
**filename** | **string** |  | [optional] 
**pageCount** | **int** |  | [optional] 
**read** | **bool** |  | [optional] 
**callerAddress** | **string** |  | [optional] 
**receiverAddress** | **string** |  | [optional] 
**tags** | **string[]** |  | [optional] 
**tagValues** | [**\PureCloudPlatform\Client\V2\Model\TagValue[]**](TagValue.md) |  | [optional] 
**attributes** | [**\PureCloudPlatform\Client\V2\Model\DocumentAttribute[]**](DocumentAttribute.md) |  | [optional] 
**thumbnails** | [**\PureCloudPlatform\Client\V2\Model\DocumentThumbnail[]**](DocumentThumbnail.md) |  | [optional] 
**uploadStatus** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**uploadDestinationUri** | **string** |  | [optional] 
**uploadMethod** | **string** |  | [optional] 
**lockInfo** | [**\PureCloudPlatform\Client\V2\Model\LockInfo**](LockInfo.md) |  | [optional] 
**acl** | **string[]** | A list of permitted action rights for the user making the request | [optional] 
**sharingStatus** | **string** |  | [optional] 
**sharingUri** | **string** |  | [optional] 
**downloadSharingUri** | **string** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


