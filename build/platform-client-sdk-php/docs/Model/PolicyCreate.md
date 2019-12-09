# PolicyCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The policy name. | 
**modifiedDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**createdDate** | [**\DateTime**](\DateTime.md) | Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**order** | **int** |  | [optional] 
**description** | **string** |  | [optional] 
**enabled** | **bool** |  | [optional] 
**mediaPolicies** | [**\PureCloudPlatform\Client\V2\Model\MediaPolicies**](MediaPolicies.md) | Conditions and actions per media type | [optional] 
**conditions** | [**\PureCloudPlatform\Client\V2\Model\PolicyConditions**](PolicyConditions.md) | Conditions | [optional] 
**actions** | [**\PureCloudPlatform\Client\V2\Model\PolicyActions**](PolicyActions.md) | Actions | [optional] 
**policyErrors** | [**\PureCloudPlatform\Client\V2\Model\PolicyErrors**](PolicyErrors.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


