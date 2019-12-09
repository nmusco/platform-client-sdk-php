# CreateShareRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sharedEntityType** | **string** | The share entity type | 
**sharedEntity** | [**\PureCloudPlatform\Client\V2\Model\SharedEntity**](SharedEntity.md) | The entity that will be shared | 
**memberType** | **string** |  | [optional] 
**member** | [**\PureCloudPlatform\Client\V2\Model\SharedEntity**](SharedEntity.md) | The member that will have access to this share. Only required if a list of members is not provided. | [optional] 
**members** | [**\PureCloudPlatform\Client\V2\Model\CreateShareRequestMember[]**](CreateShareRequestMember.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


