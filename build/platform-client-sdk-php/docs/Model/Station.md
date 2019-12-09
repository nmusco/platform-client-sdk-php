# Station

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**status** | **string** |  | [optional] 
**userId** | **string** | The Id of the user currently logged in and associated with the station. | [optional] 
**webRtcUserId** | **string** | The Id of the user configured for the station if it is of type inin_webrtc_softphone. Empty if station type is not inin_webrtc_softphone. | [optional] 
**primaryEdge** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**secondaryEdge** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) |  | [optional] 
**type** | **string** |  | [optional] 
**lineAppearanceId** | **string** |  | [optional] 
**webRtcMediaDscp** | **int** | The default or configured value of media dscp for the station. Empty if station type is not inin_webrtc_softphone. | [optional] 
**webRtcPersistentEnabled** | **bool** | The default or configured value of persistent connection setting for the station. Empty if station type is not inin_webrtc_softphone. | [optional] 
**webRtcForceTurn** | **bool** | Whether the station is configured to require TURN for routing WebRTC calls. Empty if station type is not inin_webrtc_softphone. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


