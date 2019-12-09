# GDPRRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**createdBy** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The user that created this request | 
**replacementTerms** | [**\PureCloudPlatform\Client\V2\Model\ReplacementTerm[]**](ReplacementTerm.md) | The replacement terms for the provided search terms, in the case of a GDPR_UPDATE request | [optional] 
**requestType** | **string** | The type of GDPR request | 
**createdDate** | [**\DateTime**](\DateTime.md) | When the request was submitted. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | 
**status** | **string** | The status of the request | 
**subject** | [**\PureCloudPlatform\Client\V2\Model\GDPRSubject**](GDPRSubject.md) | The subject of the GDPR request | 
**resultsUrl** | **string** | The location where the results of the request can be retrieved | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


