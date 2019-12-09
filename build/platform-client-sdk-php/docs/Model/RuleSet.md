# RuleSet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the RuleSet. | 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**contactList** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | A ContactList to provide user-interface suggestions for contact columns on relevant conditions and actions. | [optional] 
**queue** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | A Queue to provide user-interface suggestions for wrap-up codes on relevant conditions and actions. | [optional] 
**rules** | [**\PureCloudPlatform\Client\V2\Model\DialerRule[]**](DialerRule.md) | The list of rules. | 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


