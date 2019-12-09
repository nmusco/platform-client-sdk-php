# TtsEngineEntity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**languages** | **string[]** | The set of languages the TTS engine supports | 
**outputFormats** | **string[]** | The set of output formats the TTS engine can produce | 
**voices** | [**\PureCloudPlatform\Client\V2\Model\TtsVoiceEntity[]**](TtsVoiceEntity.md) | The set of voices the TTS engine supports | [optional] 
**isDefault** | **bool** | The TTS engine is the global default engine | [optional] 
**isSecure** | **bool** | The TTS engine can be used in a secure call flow | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


