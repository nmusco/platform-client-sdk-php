# TrustCreate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pairingId** | **string** | The pairing Id created by the trustee. This is required to prove that the trustee agrees to the relationship. | 
**enabled** | **bool** | If disabled no trustee user will have access, even if they were previously added. | 
**users** | [**\PureCloudPlatform\Client\V2\Model\TrustMemberCreate[]**](TrustMemberCreate.md) | The list of users and their roles to which access will be granted. The users are from the trustee and the roles are from the trustor. If no users are specified, at least one group is required. | [optional] 
**groups** | [**\PureCloudPlatform\Client\V2\Model\TrustMemberCreate[]**](TrustMemberCreate.md) | The list of groups and their roles to which access will be granted. The groups are from the trustee and the roles are from the trustor. If no groups are specified, at least one user is required. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


