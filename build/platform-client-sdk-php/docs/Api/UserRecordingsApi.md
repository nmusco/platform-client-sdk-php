# PureCloudPlatform\Client\V2\UserRecordingsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUserrecording**](UserRecordingsApi.md#deleteUserrecording) | **DELETE** /api/v2/userrecordings/{recordingId} | Delete a user recording.
[**getUserrecording**](UserRecordingsApi.md#getUserrecording) | **GET** /api/v2/userrecordings/{recordingId} | Get a user recording.
[**getUserrecordingMedia**](UserRecordingsApi.md#getUserrecordingMedia) | **GET** /api/v2/userrecordings/{recordingId}/media | Download a user recording.
[**getUserrecordings**](UserRecordingsApi.md#getUserrecordings) | **GET** /api/v2/userrecordings | Get a list of user recordings.
[**getUserrecordingsSummary**](UserRecordingsApi.md#getUserrecordingsSummary) | **GET** /api/v2/userrecordings/summary | Get user recording summary
[**putUserrecording**](UserRecordingsApi.md#putUserrecording) | **PUT** /api/v2/userrecordings/{recordingId} | Update a user recording.


# **deleteUserrecording**
> deleteUserrecording($recordingId)

Delete a user recording.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UserRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordingId = "recordingId_example"; // string | User Recording ID

try {
    $apiInstance->deleteUserrecording($recordingId);
} catch (Exception $e) {
    echo 'Exception when calling UserRecordingsApi->deleteUserrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordingId** | **string**| User Recording ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserrecording**
> \PureCloudPlatform\Client\V2\Model\UserRecording getUserrecording($recordingId, $expand)

Get a user recording.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UserRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordingId = "recordingId_example"; // string | User Recording ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getUserrecording($recordingId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRecordingsApi->getUserrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordingId** | **string**| User Recording ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRecording**](../Model/UserRecording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserrecordingMedia**
> \PureCloudPlatform\Client\V2\Model\DownloadResponse getUserrecordingMedia($recordingId, $formatId)

Download a user recording.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UserRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordingId = "recordingId_example"; // string | User Recording ID
$formatId = "WEBM"; // string | The desired media format.

try {
    $result = $apiInstance->getUserrecordingMedia($recordingId, $formatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRecordingsApi->getUserrecordingMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordingId** | **string**| User Recording ID |
 **formatId** | **string**| The desired media format. | [optional] [default to WEBM]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DownloadResponse**](../Model/DownloadResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserrecordings**
> \PureCloudPlatform\Client\V2\Model\UserRecordingEntityListing getUserrecordings($pageSize, $pageNumber, $expand)

Get a list of user recordings.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UserRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getUserrecordings($pageSize, $pageNumber, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRecordingsApi->getUserrecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRecordingEntityListing**](../Model/UserRecordingEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserrecordingsSummary**
> \PureCloudPlatform\Client\V2\Model\FaxSummary getUserrecordingsSummary()

Get user recording summary



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UserRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserrecordingsSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRecordingsApi->getUserrecordingsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\FaxSummary**](../Model/FaxSummary.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserrecording**
> \PureCloudPlatform\Client\V2\Model\UserRecording putUserrecording($recordingId, $body, $expand)

Update a user recording.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UserRecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordingId = "recordingId_example"; // string | User Recording ID
$body = new \PureCloudPlatform\Client\V2\Model\UserRecording(); // \PureCloudPlatform\Client\V2\Model\UserRecording | UserRecording
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->putUserrecording($recordingId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserRecordingsApi->putUserrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordingId** | **string**| User Recording ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRecording**](../Model/UserRecording.md)| UserRecording |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRecording**](../Model/UserRecording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

