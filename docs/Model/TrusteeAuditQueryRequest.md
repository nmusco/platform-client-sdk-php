# TrusteeAuditQueryRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trusteeOrganizationIds** | **string[]** | Limit returned audits to these trustee organizationIds. | 
**trusteeUserIds** | **string[]** | Limit returned audits to these trustee userIds. | 
**startDate** | [**\DateTime**](\DateTime.md) | Starting date/time for the audit search. ISO-8601 formatted date-time, UTC. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Ending date/time for the audit search. ISO-8601 formatted date-time, UTC. | [optional] 
**queryPhrase** | **string** | Word or phrase to look for in audit bodies. | [optional] 
**facets** | [**\PureCloudPlatform\Client\V2\Model\Facet[]**](Facet.md) | Facet information to be returned with the query results. | [optional] 
**filters** | [**\PureCloudPlatform\Client\V2\Model\Filter[]**](Filter.md) | Additional custom filters to be applied to the query. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


