# LocationDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**contactUser** | [**\PureCloudPlatform\Client\V2\Model\AddressableEntityRef**](AddressableEntityRef.md) | Site contact for the location entity | [optional] 
**emergencyNumber** | [**\PureCloudPlatform\Client\V2\Model\LocationEmergencyNumber**](LocationEmergencyNumber.md) | Emergency number for the location entity | [optional] 
**address** | [**\PureCloudPlatform\Client\V2\Model\LocationAddress**](LocationAddress.md) |  | [optional] 
**state** | **string** | Current state of the location entity | [optional] 
**notes** | **string** | Notes for the location entity | [optional] 
**version** | **int** | Current version of the location entity, value to be supplied should be retrieved by a GET or on create/update response | [optional] 
**path** | **string[]** | A list of ancestor IDs in order | [optional] 
**profileImage** | [**\PureCloudPlatform\Client\V2\Model\LocationImage[]**](LocationImage.md) | Profile image of the location entity, retrieved with ?expand&#x3D;images query parameter | [optional] 
**floorplanImage** | [**\PureCloudPlatform\Client\V2\Model\LocationImage[]**](LocationImage.md) | Floorplan images of the location entity, retrieved with ?expand&#x3D;images query parameter | [optional] 
**addressVerificationDetails** | [**\PureCloudPlatform\Client\V2\Model\LocationAddressVerificationDetails**](LocationAddressVerificationDetails.md) | Address verification information, retrieve dwith the ?expand&#x3D;addressVerificationDetails query parameter | [optional] 
**addressVerified** | **bool** | Boolean field which states if the address has been verified as an actual address | [optional] 
**addressStored** | **bool** | Boolean field which states if the address has been stored for E911 | [optional] 
**images** | **string** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


