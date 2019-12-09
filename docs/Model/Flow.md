# Flow

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The flow identifier | [optional] 
**name** | **string** | The flow name | 
**division** | [**\PureCloudPlatform\Client\V2\Model\WritableDivision**](WritableDivision.md) | The division to which this entity belongs. | [optional] 
**description** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**lockedUser** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) | User that has the flow locked. | [optional] 
**lockedClient** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | OAuth client that has the flow locked. | [optional] 
**active** | **bool** |  | [optional] 
**system** | **bool** |  | [optional] 
**deleted** | **bool** |  | [optional] 
**publishedVersion** | [**\PureCloudPlatform\Client\V2\Model\FlowVersion**](FlowVersion.md) |  | [optional] 
**savedVersion** | [**\PureCloudPlatform\Client\V2\Model\FlowVersion**](FlowVersion.md) |  | [optional] 
**inputSchema** | **object** | json schema describing the inputs for the flow | [optional] 
**outputSchema** | **object** | json schema describing the outputs for the flow | [optional] 
**checkedInVersion** | [**\PureCloudPlatform\Client\V2\Model\FlowVersion**](FlowVersion.md) |  | [optional] 
**publishedBy** | [**\PureCloudPlatform\Client\V2\Model\User**](User.md) |  | [optional] 
**currentOperation** | [**\PureCloudPlatform\Client\V2\Model\Operation**](Operation.md) |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


