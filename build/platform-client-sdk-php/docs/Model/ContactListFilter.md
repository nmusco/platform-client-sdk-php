# ContactListFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the list. | 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**contactList** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The contact list the filter is based on. | 
**clauses** | [**\PureCloudPlatform\Client\V2\Model\ContactListFilterClause[]**](ContactListFilterClause.md) | Groups of conditions to filter the contacts by. | [optional] 
**filterType** | **string** | How to join clauses together. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


