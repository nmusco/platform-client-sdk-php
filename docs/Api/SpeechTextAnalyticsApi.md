# PureCloudPlatform\Client\V2\SpeechTextAnalyticsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConversationTranscriptproperty**](SpeechTextAnalyticsApi.md#getConversationTranscriptproperty) | **GET** /api/v2/conversations/{conversationId}/transcriptproperties/{communicationId} | Get the pre-signed S3 URL for the transcript of a specific communication of a conversation


# **getConversationTranscriptproperty**
> \PureCloudPlatform\Client\V2\Model\TranscriptProperty getConversationTranscriptproperty($conversationId, $communicationId)

Get the pre-signed S3 URL for the transcript of a specific communication of a conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SpeechTextAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$communicationId = "communicationId_example"; // string | Communication ID

try {
    $result = $apiInstance->getConversationTranscriptproperty($conversationId, $communicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpeechTextAnalyticsApi->getConversationTranscriptproperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **communicationId** | **string**| Communication ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TranscriptProperty**](../Model/TranscriptProperty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

