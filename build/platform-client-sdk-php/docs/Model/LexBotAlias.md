# LexBotAlias

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**bot** | [**\PureCloudPlatform\Client\V2\Model\LexBot**](LexBot.md) | The Lex bot this is an alias for | [optional] 
**botVersion** | **string** | The version of the Lex bot this alias points at | [optional] 
**status** | **string** | The status of the Lex bot alias | 
**failureReason** | **string** | If the status is FAILED, Amazon Lex explains why it failed to build the bot | [optional] 
**language** | **string** | The target language of the Lex bot | [optional] 
**intents** | [**\PureCloudPlatform\Client\V2\Model\LexIntent[]**](LexIntent.md) | An array of Intents associated with this bot alias | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


