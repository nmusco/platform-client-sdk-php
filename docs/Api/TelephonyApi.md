# PureCloudPlatform\Client\V2\TelephonyApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTelephonySiptraces**](TelephonyApi.md#getTelephonySiptraces) | **GET** /api/v2/telephony/siptraces | Fetch SIP metadata
[**getTelephonySiptracesDownloadDownloadId**](TelephonyApi.md#getTelephonySiptracesDownloadDownloadId) | **GET** /api/v2/telephony/siptraces/download/{downloadId} | Get signed S3 URL for a pcap download
[**postTelephonySiptracesDownload**](TelephonyApi.md#postTelephonySiptracesDownload) | **POST** /api/v2/telephony/siptraces/download | Request a download of a pcap file to S3


# **getTelephonySiptraces**
> \PureCloudPlatform\Client\V2\Model\SipSearchResult getTelephonySiptraces($dateStart, $dateEnd, $callId, $toUser, $fromUser, $conversationId)

Fetch SIP metadata

Fetch SIP metadata that matches a given parameter. If exactMatch is passed as a parameter only sip records that have exactly that value will be returned. For example, some records contain conversationId but not all relevant records for that call may contain the conversationId so only a partial view of the call will be reflected

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dateStart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of the search. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$dateEnd = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date of the search. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$callId = "callId_example"; // string | unique identification of the placed call
$toUser = "toUser_example"; // string | User to who the call was placed
$fromUser = "fromUser_example"; // string | user who placed the call
$conversationId = "conversationId_example"; // string | Unique identification of the conversation

try {
    $result = $apiInstance->getTelephonySiptraces($dateStart, $dateEnd, $callId, $toUser, $fromUser, $conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyApi->getTelephonySiptraces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dateStart** | **\DateTime**| Start date of the search. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ |
 **dateEnd** | **\DateTime**| End date of the search. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ |
 **callId** | **string**| unique identification of the placed call | [optional]
 **toUser** | **string**| User to who the call was placed | [optional]
 **fromUser** | **string**| user who placed the call | [optional]
 **conversationId** | **string**| Unique identification of the conversation | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SipSearchResult**](../Model/SipSearchResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonySiptracesDownloadDownloadId**
> \PureCloudPlatform\Client\V2\Model\SignedUrlResponse getTelephonySiptracesDownloadDownloadId($downloadId)

Get signed S3 URL for a pcap download



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$downloadId = "downloadId_example"; // string | unique id for the downloaded file in S3

try {
    $result = $apiInstance->getTelephonySiptracesDownloadDownloadId($downloadId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyApi->getTelephonySiptracesDownloadDownloadId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **downloadId** | **string**| unique id for the downloaded file in S3 |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SignedUrlResponse**](../Model/SignedUrlResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonySiptracesDownload**
> \PureCloudPlatform\Client\V2\Model\SipDownloadResponse postTelephonySiptracesDownload($sIPSearchPublicRequest)

Request a download of a pcap file to S3



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sIPSearchPublicRequest = new \PureCloudPlatform\Client\V2\Model\SIPSearchPublicRequest(); // \PureCloudPlatform\Client\V2\Model\SIPSearchPublicRequest | 

try {
    $result = $apiInstance->postTelephonySiptracesDownload($sIPSearchPublicRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyApi->postTelephonySiptracesDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sIPSearchPublicRequest** | [**\PureCloudPlatform\Client\V2\Model\SIPSearchPublicRequest**](../Model/SIPSearchPublicRequest.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SipDownloadResponse**](../Model/SipDownloadResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

