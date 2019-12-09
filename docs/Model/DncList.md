# DncList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the DncList. | 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**importStatus** | [**\PureCloudPlatform\Client\V2\Model\ImportStatus**](ImportStatus.md) | The status of the import process | [optional] 
**size** | **int** | The total number of phone numbers in the DncList. | [optional] 
**dncSourceType** | **string** | The type of the DncList. | 
**loginId** | **string** | A dnc.com loginId. Required if the dncSourceType is dnc.com. | [optional] 
**dncCodes** | **string[]** | The list of dnc.com codes to be treated as DNC. Required if the dncSourceType is dnc.com. | [optional] 
**licenseId** | **string** | A gryphon license number. Required if the dncSourceType is gryphon. | [optional] 
**division** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The division this DncList belongs to. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


