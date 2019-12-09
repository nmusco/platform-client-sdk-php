# AttemptLimits

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**maxAttemptsPerContact** | **int** | The maximum number of times a contact can be called within the resetPeriod. Required if maxAttemptsPerNumber is not defined. | [optional] 
**maxAttemptsPerNumber** | **int** | The maximum number of times a phone number can be called within the resetPeriod. Required if maxAttemptsPerContact is not defined. | [optional] 
**timeZoneId** | **string** | If the resetPeriod is TODAY, this specifies the timezone in which TODAY occurs. Required if the resetPeriod is TODAY. | [optional] 
**resetPeriod** | **string** | After how long the number of attempts will be set back to 0. Defaults to NEVER. | [optional] 
**recallEntries** | [**map[string,\PureCloudPlatform\Client\V2\Model\RecallEntry]**](RecallEntry.md) | Configuration for recall attempts. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


