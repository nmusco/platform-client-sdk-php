# PureCloudPlatform\Client\V2\RecordingApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteConversationRecordingAnnotation**](RecordingApi.md#deleteConversationRecordingAnnotation) | **DELETE** /api/v2/conversations/{conversationId}/recordings/{recordingId}/annotations/{annotationId} | Delete annotation
[**deleteOrphanrecording**](RecordingApi.md#deleteOrphanrecording) | **DELETE** /api/v2/orphanrecordings/{orphanId} | Deletes a single orphan recording
[**deleteRecordingJob**](RecordingApi.md#deleteRecordingJob) | **DELETE** /api/v2/recording/jobs/{jobId} | Delete the recording bulk job
[**deleteRecordingMediaretentionpolicies**](RecordingApi.md#deleteRecordingMediaretentionpolicies) | **DELETE** /api/v2/recording/mediaretentionpolicies | Delete media retention policies
[**deleteRecordingMediaretentionpolicy**](RecordingApi.md#deleteRecordingMediaretentionpolicy) | **DELETE** /api/v2/recording/mediaretentionpolicies/{policyId} | Delete a media retention policy
[**getConversationRecording**](RecordingApi.md#getConversationRecording) | **GET** /api/v2/conversations/{conversationId}/recordings/{recordingId} | Gets a specific recording.
[**getConversationRecordingAnnotation**](RecordingApi.md#getConversationRecordingAnnotation) | **GET** /api/v2/conversations/{conversationId}/recordings/{recordingId}/annotations/{annotationId} | Get annotation
[**getConversationRecordingAnnotations**](RecordingApi.md#getConversationRecordingAnnotations) | **GET** /api/v2/conversations/{conversationId}/recordings/{recordingId}/annotations | Get annotations for recording
[**getConversationRecordingmetadata**](RecordingApi.md#getConversationRecordingmetadata) | **GET** /api/v2/conversations/{conversationId}/recordingmetadata | Get recording metadata for a conversation. Does not return playable media.
[**getConversationRecordingmetadataRecordingId**](RecordingApi.md#getConversationRecordingmetadataRecordingId) | **GET** /api/v2/conversations/{conversationId}/recordingmetadata/{recordingId} | Get metadata for a specific recording. Does not return playable media.
[**getConversationRecordings**](RecordingApi.md#getConversationRecordings) | **GET** /api/v2/conversations/{conversationId}/recordings | Get all of a Conversation&#39;s Recordings.
[**getOrphanrecording**](RecordingApi.md#getOrphanrecording) | **GET** /api/v2/orphanrecordings/{orphanId} | Gets a single orphan recording
[**getOrphanrecordingMedia**](RecordingApi.md#getOrphanrecordingMedia) | **GET** /api/v2/orphanrecordings/{orphanId}/media | Gets the media of a single orphan recording
[**getOrphanrecordings**](RecordingApi.md#getOrphanrecordings) | **GET** /api/v2/orphanrecordings | Gets all orphan recordings
[**getRecordingBatchrequest**](RecordingApi.md#getRecordingBatchrequest) | **GET** /api/v2/recording/batchrequests/{jobId} | Get the status and results for a batch request job, only the user that submitted the job may retrieve results
[**getRecordingJob**](RecordingApi.md#getRecordingJob) | **GET** /api/v2/recording/jobs/{jobId} | Get the status of the job associated with the job id.
[**getRecordingJobs**](RecordingApi.md#getRecordingJobs) | **GET** /api/v2/recording/jobs | Get the status of all jobs within the user&#39;s organization
[**getRecordingLocalkeysSetting**](RecordingApi.md#getRecordingLocalkeysSetting) | **GET** /api/v2/recording/localkeys/settings/{settingsId} | Get the local encryption settings
[**getRecordingLocalkeysSettings**](RecordingApi.md#getRecordingLocalkeysSettings) | **GET** /api/v2/recording/localkeys/settings | gets a list local key settings data
[**getRecordingMediaretentionpolicies**](RecordingApi.md#getRecordingMediaretentionpolicies) | **GET** /api/v2/recording/mediaretentionpolicies | Gets media retention policy list with query options to filter on name and enabled.
[**getRecordingMediaretentionpolicy**](RecordingApi.md#getRecordingMediaretentionpolicy) | **GET** /api/v2/recording/mediaretentionpolicies/{policyId} | Get a media retention policy
[**getRecordingRecordingkeys**](RecordingApi.md#getRecordingRecordingkeys) | **GET** /api/v2/recording/recordingkeys | Get encryption key list
[**getRecordingRecordingkeysRotationschedule**](RecordingApi.md#getRecordingRecordingkeysRotationschedule) | **GET** /api/v2/recording/recordingkeys/rotationschedule | Get key rotation schedule
[**getRecordingSettings**](RecordingApi.md#getRecordingSettings) | **GET** /api/v2/recording/settings | Get the Recording Settings for the Organization
[**getRecordingsScreensessions**](RecordingApi.md#getRecordingsScreensessions) | **GET** /api/v2/recordings/screensessions | Retrieves a paged listing of screen recording sessions
[**patchRecordingMediaretentionpolicy**](RecordingApi.md#patchRecordingMediaretentionpolicy) | **PATCH** /api/v2/recording/mediaretentionpolicies/{policyId} | Patch a media retention policy
[**patchRecordingsScreensession**](RecordingApi.md#patchRecordingsScreensession) | **PATCH** /api/v2/recordings/screensessions/{recordingSessionId} | Update a screen recording session
[**postConversationRecordingAnnotations**](RecordingApi.md#postConversationRecordingAnnotations) | **POST** /api/v2/conversations/{conversationId}/recordings/{recordingId}/annotations | Create annotation
[**postRecordingBatchrequests**](RecordingApi.md#postRecordingBatchrequests) | **POST** /api/v2/recording/batchrequests | Submit a batch download request for recordings. Recordings in response will be in their original format/codec - configured in the Trunk configuration.
[**postRecordingJobs**](RecordingApi.md#postRecordingJobs) | **POST** /api/v2/recording/jobs | Create a recording bulk job
[**postRecordingLocalkeys**](RecordingApi.md#postRecordingLocalkeys) | **POST** /api/v2/recording/localkeys | create a local recording key
[**postRecordingLocalkeysSettings**](RecordingApi.md#postRecordingLocalkeysSettings) | **POST** /api/v2/recording/localkeys/settings | create settings for local key creation
[**postRecordingMediaretentionpolicies**](RecordingApi.md#postRecordingMediaretentionpolicies) | **POST** /api/v2/recording/mediaretentionpolicies | Create media retention policy
[**postRecordingRecordingkeys**](RecordingApi.md#postRecordingRecordingkeys) | **POST** /api/v2/recording/recordingkeys | Create encryption key
[**postRecordingsDeletionprotection**](RecordingApi.md#postRecordingsDeletionprotection) | **POST** /api/v2/recordings/deletionprotection | Get a list of conversations with protected recordings
[**putConversationRecording**](RecordingApi.md#putConversationRecording) | **PUT** /api/v2/conversations/{conversationId}/recordings/{recordingId} | Updates the retention records on a recording.
[**putConversationRecordingAnnotation**](RecordingApi.md#putConversationRecordingAnnotation) | **PUT** /api/v2/conversations/{conversationId}/recordings/{recordingId}/annotations/{annotationId} | Update annotation
[**putOrphanrecording**](RecordingApi.md#putOrphanrecording) | **PUT** /api/v2/orphanrecordings/{orphanId} | Updates an orphan recording to a regular recording with retention values
[**putRecordingJob**](RecordingApi.md#putRecordingJob) | **PUT** /api/v2/recording/jobs/{jobId} | Execute the recording bulk job
[**putRecordingLocalkeysSetting**](RecordingApi.md#putRecordingLocalkeysSetting) | **PUT** /api/v2/recording/localkeys/settings/{settingsId} | Update the local encryption settings
[**putRecordingMediaretentionpolicy**](RecordingApi.md#putRecordingMediaretentionpolicy) | **PUT** /api/v2/recording/mediaretentionpolicies/{policyId} | Update a media retention policy
[**putRecordingRecordingkeysRotationschedule**](RecordingApi.md#putRecordingRecordingkeysRotationschedule) | **PUT** /api/v2/recording/recordingkeys/rotationschedule | Update key rotation schedule
[**putRecordingSettings**](RecordingApi.md#putRecordingSettings) | **PUT** /api/v2/recording/settings | Update the Recording Settings for the Organization
[**putRecordingsDeletionprotection**](RecordingApi.md#putRecordingsDeletionprotection) | **PUT** /api/v2/recordings/deletionprotection | Apply or revoke recording protection for conversations


# **deleteConversationRecordingAnnotation**
> deleteConversationRecordingAnnotation($conversationId, $recordingId, $annotationId)

Delete annotation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID
$annotationId = "annotationId_example"; // string | Annotation ID

try {
    $apiInstance->deleteConversationRecordingAnnotation($conversationId, $recordingId, $annotationId);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteConversationRecordingAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |
 **annotationId** | **string**| Annotation ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrphanrecording**
> \PureCloudPlatform\Client\V2\Model\OrphanRecording deleteOrphanrecording($orphanId)

Deletes a single orphan recording



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orphanId = "orphanId_example"; // string | Orphan ID

try {
    $result = $apiInstance->deleteOrphanrecording($orphanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteOrphanrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orphanId** | **string**| Orphan ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrphanRecording**](../Model/OrphanRecording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordingJob**
> deleteRecordingJob($jobId)

Delete the recording bulk job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $apiInstance->deleteRecordingJob($jobId);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteRecordingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordingMediaretentionpolicies**
> deleteRecordingMediaretentionpolicies($ids)

Delete media retention policies

Bulk delete of media retention policies, this will only delete the polices that match the ids specified in the query param.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | 

try {
    $apiInstance->deleteRecordingMediaretentionpolicies($ids);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteRecordingMediaretentionpolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**|  |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecordingMediaretentionpolicy**
> deleteRecordingMediaretentionpolicy($policyId)

Delete a media retention policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policyId = "policyId_example"; // string | Policy ID

try {
    $apiInstance->deleteRecordingMediaretentionpolicy($policyId);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->deleteRecordingMediaretentionpolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policyId** | **string**| Policy ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationRecording**
> \PureCloudPlatform\Client\V2\Model\Recording getConversationRecording($conversationId, $recordingId, $formatId, $download, $fileName)

Gets a specific recording.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID
$formatId = "WEBM"; // string | The desired media format.
$download = false; // bool | requesting a download format of the recording
$fileName = "fileName_example"; // string | the name of the downloaded fileName

try {
    $result = $apiInstance->getConversationRecording($conversationId, $recordingId, $formatId, $download, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getConversationRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |
 **formatId** | **string**| The desired media format. | [optional] [default to WEBM]
 **download** | **bool**| requesting a download format of the recording | [optional] [default to false]
 **fileName** | **string**| the name of the downloaded fileName | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recording**](../Model/Recording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationRecordingAnnotation**
> \PureCloudPlatform\Client\V2\Model\Annotation getConversationRecordingAnnotation($conversationId, $recordingId, $annotationId)

Get annotation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID
$annotationId = "annotationId_example"; // string | Annotation ID

try {
    $result = $apiInstance->getConversationRecordingAnnotation($conversationId, $recordingId, $annotationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getConversationRecordingAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |
 **annotationId** | **string**| Annotation ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Annotation**](../Model/Annotation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationRecordingAnnotations**
> \PureCloudPlatform\Client\V2\Model\Annotation[] getConversationRecordingAnnotations($conversationId, $recordingId)

Get annotations for recording



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID

try {
    $result = $apiInstance->getConversationRecordingAnnotations($conversationId, $recordingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getConversationRecordingAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Annotation[]**](../Model/Annotation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationRecordingmetadata**
> \PureCloudPlatform\Client\V2\Model\Recording[] getConversationRecordingmetadata($conversationId)

Get recording metadata for a conversation. Does not return playable media.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID

try {
    $result = $apiInstance->getConversationRecordingmetadata($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getConversationRecordingmetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recording[]**](../Model/Recording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationRecordingmetadataRecordingId**
> \PureCloudPlatform\Client\V2\Model\RecordingMetadata getConversationRecordingmetadataRecordingId($conversationId, $recordingId)

Get metadata for a specific recording. Does not return playable media.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID

try {
    $result = $apiInstance->getConversationRecordingmetadataRecordingId($conversationId, $recordingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getConversationRecordingmetadataRecordingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingMetadata**](../Model/RecordingMetadata.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationRecordings**
> \PureCloudPlatform\Client\V2\Model\Recording[] getConversationRecordings($conversationId, $maxWaitMs, $formatId)

Get all of a Conversation's Recordings.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$maxWaitMs = 5000; // int | The maximum number of milliseconds to wait for the recording to be ready. Must be a positive value.
$formatId = "WEBM"; // string | The desired media format. Possible values: NONE, MP3, WAV, or WEBM

try {
    $result = $apiInstance->getConversationRecordings($conversationId, $maxWaitMs, $formatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getConversationRecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **maxWaitMs** | **int**| The maximum number of milliseconds to wait for the recording to be ready. Must be a positive value. | [optional] [default to 5000]
 **formatId** | **string**| The desired media format. Possible values: NONE, MP3, WAV, or WEBM | [optional] [default to WEBM]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recording[]**](../Model/Recording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrphanrecording**
> \PureCloudPlatform\Client\V2\Model\OrphanRecording getOrphanrecording($orphanId)

Gets a single orphan recording



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orphanId = "orphanId_example"; // string | Orphan ID

try {
    $result = $apiInstance->getOrphanrecording($orphanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getOrphanrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orphanId** | **string**| Orphan ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrphanRecording**](../Model/OrphanRecording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrphanrecordingMedia**
> \PureCloudPlatform\Client\V2\Model\Recording getOrphanrecordingMedia($orphanId, $formatId, $download, $fileName)

Gets the media of a single orphan recording

A 202 response means the orphaned media is currently transcoding and will be available shortly.A 200 response denotes the transcoded orphan media is available now and is contained in the response body.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orphanId = "orphanId_example"; // string | Orphan ID
$formatId = "WEBM"; // string | The desired media format.
$download = false; // bool | requesting a download format of the recording
$fileName = "fileName_example"; // string | the name of the downloaded fileName

try {
    $result = $apiInstance->getOrphanrecordingMedia($orphanId, $formatId, $download, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getOrphanrecordingMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orphanId** | **string**| Orphan ID |
 **formatId** | **string**| The desired media format. | [optional] [default to WEBM]
 **download** | **bool**| requesting a download format of the recording | [optional] [default to false]
 **fileName** | **string**| the name of the downloaded fileName | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recording**](../Model/Recording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrphanrecordings**
> \PureCloudPlatform\Client\V2\Model\OrphanRecordingListing getOrphanrecordings($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $hasConversation, $media)

Gets all orphan recordings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$hasConversation = false; // bool | Filter resulting orphans by whether the conversation is known. False returns all orphans for the organization.
$media = "media_example"; // string | Filter resulting orphans based on their media type

try {
    $result = $apiInstance->getOrphanrecordings($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $hasConversation, $media);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getOrphanrecordings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **hasConversation** | **bool**| Filter resulting orphans by whether the conversation is known. False returns all orphans for the organization. | [optional] [default to false]
 **media** | **string**| Filter resulting orphans based on their media type | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrphanRecordingListing**](../Model/OrphanRecordingListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingBatchrequest**
> \PureCloudPlatform\Client\V2\Model\BatchDownloadJobStatusResult getRecordingBatchrequest($jobId)

Get the status and results for a batch request job, only the user that submitted the job may retrieve results



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $result = $apiInstance->getRecordingBatchrequest($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingBatchrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\BatchDownloadJobStatusResult**](../Model/BatchDownloadJobStatusResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingJob**
> \PureCloudPlatform\Client\V2\Model\RecordingJob getRecordingJob($jobId)

Get the status of the job associated with the job id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $result = $apiInstance->getRecordingJob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingJob**](../Model/RecordingJob.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingJobs**
> \PureCloudPlatform\Client\V2\Model\RecordingJobEntityListing getRecordingJobs($pageSize, $pageNumber, $sortBy, $state, $showOnlyMyJobs, $jobType)

Get the status of all jobs within the user's organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "userId"; // string | Sort by
$state = "state_example"; // string | Filter by state
$showOnlyMyJobs = true; // bool | Show only my jobs
$jobType = "jobType_example"; // string | Job Type (Can be left empty for both)

try {
    $result = $apiInstance->getRecordingJobs($pageSize, $pageNumber, $sortBy, $state, $showOnlyMyJobs, $jobType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to userId]
 **state** | **string**| Filter by state | [optional]
 **showOnlyMyJobs** | **bool**| Show only my jobs | [optional]
 **jobType** | **string**| Job Type (Can be left empty for both) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingJobEntityListing**](../Model/RecordingJobEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingLocalkeysSetting**
> \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration getRecordingLocalkeysSetting($settingsId)

Get the local encryption settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settingsId = "settingsId_example"; // string | Settings Id

try {
    $result = $apiInstance->getRecordingLocalkeysSetting($settingsId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingLocalkeysSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settingsId** | **string**| Settings Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration**](../Model/LocalEncryptionConfiguration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingLocalkeysSettings**
> \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfigurationListing getRecordingLocalkeysSettings()

gets a list local key settings data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRecordingLocalkeysSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingLocalkeysSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfigurationListing**](../Model/LocalEncryptionConfigurationListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingMediaretentionpolicies**
> \PureCloudPlatform\Client\V2\Model\PolicyEntityListing getRecordingMediaretentionpolicies($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $name, $enabled, $summary, $hasErrors)

Gets media retention policy list with query options to filter on name and enabled.

for a less verbose response, add summary=true to this endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$name = "name_example"; // string | the policy name - used for filtering results in searches.
$enabled = true; // bool | checks to see if policy is enabled - use enabled = true or enabled = false
$summary = false; // bool | provides a less verbose response of policy lists.
$hasErrors = true; // bool | provides a way to fetch all policies with errors or policies that do not have errors

try {
    $result = $apiInstance->getRecordingMediaretentionpolicies($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $name, $enabled, $summary, $hasErrors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingMediaretentionpolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **name** | **string**| the policy name - used for filtering results in searches. | [optional]
 **enabled** | **bool**| checks to see if policy is enabled - use enabled &#x3D; true or enabled &#x3D; false | [optional]
 **summary** | **bool**| provides a less verbose response of policy lists. | [optional] [default to false]
 **hasErrors** | **bool**| provides a way to fetch all policies with errors or policies that do not have errors | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PolicyEntityListing**](../Model/PolicyEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingMediaretentionpolicy**
> \PureCloudPlatform\Client\V2\Model\Policy getRecordingMediaretentionpolicy($policyId)

Get a media retention policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policyId = "policyId_example"; // string | Policy ID

try {
    $result = $apiInstance->getRecordingMediaretentionpolicy($policyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingMediaretentionpolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policyId** | **string**| Policy ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Policy**](../Model/Policy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingRecordingkeys**
> \PureCloudPlatform\Client\V2\Model\EncryptionKeyEntityListing getRecordingRecordingkeys($pageSize, $pageNumber)

Get encryption key list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getRecordingRecordingkeys($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingRecordingkeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EncryptionKeyEntityListing**](../Model/EncryptionKeyEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingRecordingkeysRotationschedule**
> \PureCloudPlatform\Client\V2\Model\KeyRotationSchedule getRecordingRecordingkeysRotationschedule()

Get key rotation schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRecordingRecordingkeysRotationschedule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingRecordingkeysRotationschedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeyRotationSchedule**](../Model/KeyRotationSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingSettings**
> \PureCloudPlatform\Client\V2\Model\RecordingSettings getRecordingSettings($createDefault)

Get the Recording Settings for the Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createDefault = false; // bool | If no settings are found, a new one is created with default values

try {
    $result = $apiInstance->getRecordingSettings($createDefault);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createDefault** | **bool**| If no settings are found, a new one is created with default values | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingSettings**](../Model/RecordingSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordingsScreensessions**
> \PureCloudPlatform\Client\V2\Model\ScreenRecordingSessionListing getRecordingsScreensessions($pageSize, $pageNumber)

Retrieves a paged listing of screen recording sessions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getRecordingsScreensessions($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->getRecordingsScreensessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScreenRecordingSessionListing**](../Model/ScreenRecordingSessionListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRecordingMediaretentionpolicy**
> \PureCloudPlatform\Client\V2\Model\Policy patchRecordingMediaretentionpolicy($policyId, $body)

Patch a media retention policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policyId = "policyId_example"; // string | Policy ID
$body = new \PureCloudPlatform\Client\V2\Model\Policy(); // \PureCloudPlatform\Client\V2\Model\Policy | Policy

try {
    $result = $apiInstance->patchRecordingMediaretentionpolicy($policyId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->patchRecordingMediaretentionpolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policyId** | **string**| Policy ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Policy**](../Model/Policy.md)| Policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Policy**](../Model/Policy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRecordingsScreensession**
> patchRecordingsScreensession($recordingSessionId, $body)

Update a screen recording session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recordingSessionId = "recordingSessionId_example"; // string | Screen recording session ID
$body = new \PureCloudPlatform\Client\V2\Model\ScreenRecordingSessionRequest(); // \PureCloudPlatform\Client\V2\Model\ScreenRecordingSessionRequest | 

try {
    $apiInstance->patchRecordingsScreensession($recordingSessionId, $body);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->patchRecordingsScreensession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recordingSessionId** | **string**| Screen recording session ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScreenRecordingSessionRequest**](../Model/ScreenRecordingSessionRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationRecordingAnnotations**
> \PureCloudPlatform\Client\V2\Model\Annotation postConversationRecordingAnnotations($conversationId, $recordingId, $body)

Create annotation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID
$body = new \PureCloudPlatform\Client\V2\Model\Annotation(); // \PureCloudPlatform\Client\V2\Model\Annotation | annotation

try {
    $result = $apiInstance->postConversationRecordingAnnotations($conversationId, $recordingId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postConversationRecordingAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Annotation**](../Model/Annotation.md)| annotation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Annotation**](../Model/Annotation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingBatchrequests**
> \PureCloudPlatform\Client\V2\Model\BatchDownloadJobSubmissionResult postRecordingBatchrequests($body)

Submit a batch download request for recordings. Recordings in response will be in their original format/codec - configured in the Trunk configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\BatchDownloadJobSubmission(); // \PureCloudPlatform\Client\V2\Model\BatchDownloadJobSubmission | Job submission criteria

try {
    $result = $apiInstance->postRecordingBatchrequests($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingBatchrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\BatchDownloadJobSubmission**](../Model/BatchDownloadJobSubmission.md)| Job submission criteria |

### Return type

[**\PureCloudPlatform\Client\V2\Model\BatchDownloadJobSubmissionResult**](../Model/BatchDownloadJobSubmissionResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingJobs**
> \PureCloudPlatform\Client\V2\Model\RecordingJob postRecordingJobs($body)

Create a recording bulk job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\RecordingJobsQuery(); // \PureCloudPlatform\Client\V2\Model\RecordingJobsQuery | query

try {
    $result = $apiInstance->postRecordingJobs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\RecordingJobsQuery**](../Model/RecordingJobsQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingJob**](../Model/RecordingJob.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingLocalkeys**
> \PureCloudPlatform\Client\V2\Model\EncryptionKey postRecordingLocalkeys($body)

create a local recording key



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LocalEncryptionKeyRequest(); // \PureCloudPlatform\Client\V2\Model\LocalEncryptionKeyRequest | Local Encryption body

try {
    $result = $apiInstance->postRecordingLocalkeys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingLocalkeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LocalEncryptionKeyRequest**](../Model/LocalEncryptionKeyRequest.md)| Local Encryption body |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EncryptionKey**](../Model/EncryptionKey.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingLocalkeysSettings**
> \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration postRecordingLocalkeysSettings($body)

create settings for local key creation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration(); // \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration | Local Encryption Configuration

try {
    $result = $apiInstance->postRecordingLocalkeysSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingLocalkeysSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration**](../Model/LocalEncryptionConfiguration.md)| Local Encryption Configuration |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration**](../Model/LocalEncryptionConfiguration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingMediaretentionpolicies**
> \PureCloudPlatform\Client\V2\Model\Policy postRecordingMediaretentionpolicies($body)

Create media retention policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PolicyCreate(); // \PureCloudPlatform\Client\V2\Model\PolicyCreate | Policy

try {
    $result = $apiInstance->postRecordingMediaretentionpolicies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingMediaretentionpolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PolicyCreate**](../Model/PolicyCreate.md)| Policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Policy**](../Model/Policy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingRecordingkeys**
> \PureCloudPlatform\Client\V2\Model\EncryptionKey postRecordingRecordingkeys()

Create encryption key



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postRecordingRecordingkeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingRecordingkeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\EncryptionKey**](../Model/EncryptionKey.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecordingsDeletionprotection**
> \PureCloudPlatform\Client\V2\Model\AddressableEntityRef[] postRecordingsDeletionprotection($body)

Get a list of conversations with protected recordings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ConversationDeletionProtectionQuery(); // \PureCloudPlatform\Client\V2\Model\ConversationDeletionProtectionQuery | conversationIds

try {
    $result = $apiInstance->postRecordingsDeletionprotection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->postRecordingsDeletionprotection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationDeletionProtectionQuery**](../Model/ConversationDeletionProtectionQuery.md)| conversationIds |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AddressableEntityRef[]**](../Model/AddressableEntityRef.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConversationRecording**
> \PureCloudPlatform\Client\V2\Model\Recording putConversationRecording($conversationId, $recordingId, $body)

Updates the retention records on a recording.

Currently supports updating and removing both archive and delete dates for eligible recordings. A request to change the archival date of an archived recording will result in a restoration of the recording until the new date set. The recording:recording:view permission is required for the recording, as well as either the recording:recording:editRetention or recording:screenRecording:editRetention permissions depending on the type of recording.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID
$body = new \PureCloudPlatform\Client\V2\Model\Recording(); // \PureCloudPlatform\Client\V2\Model\Recording | recording

try {
    $result = $apiInstance->putConversationRecording($conversationId, $recordingId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putConversationRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Recording**](../Model/Recording.md)| recording |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recording**](../Model/Recording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConversationRecordingAnnotation**
> \PureCloudPlatform\Client\V2\Model\Annotation putConversationRecordingAnnotation($conversationId, $recordingId, $annotationId, $body)

Update annotation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$recordingId = "recordingId_example"; // string | Recording ID
$annotationId = "annotationId_example"; // string | Annotation ID
$body = new \PureCloudPlatform\Client\V2\Model\Annotation(); // \PureCloudPlatform\Client\V2\Model\Annotation | annotation

try {
    $result = $apiInstance->putConversationRecordingAnnotation($conversationId, $recordingId, $annotationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putConversationRecordingAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **recordingId** | **string**| Recording ID |
 **annotationId** | **string**| Annotation ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Annotation**](../Model/Annotation.md)| annotation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Annotation**](../Model/Annotation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrphanrecording**
> \PureCloudPlatform\Client\V2\Model\Recording putOrphanrecording($orphanId, $body)

Updates an orphan recording to a regular recording with retention values

If this operation is successful the orphan will no longer exist. It will be replaced by the resulting recording in the response. This replacement recording is accessible by the normal Recording api.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orphanId = "orphanId_example"; // string | Orphan ID
$body = new \PureCloudPlatform\Client\V2\Model\OrphanUpdateRequest(); // \PureCloudPlatform\Client\V2\Model\OrphanUpdateRequest | 

try {
    $result = $apiInstance->putOrphanrecording($orphanId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putOrphanrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orphanId** | **string**| Orphan ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\OrphanUpdateRequest**](../Model/OrphanUpdateRequest.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recording**](../Model/Recording.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRecordingJob**
> \PureCloudPlatform\Client\V2\Model\RecordingJob putRecordingJob($jobId, $body)

Execute the recording bulk job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId
$body = new \PureCloudPlatform\Client\V2\Model\ExecuteRecordingJobsQuery(); // \PureCloudPlatform\Client\V2\Model\ExecuteRecordingJobsQuery | query

try {
    $result = $apiInstance->putRecordingJob($jobId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putRecordingJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExecuteRecordingJobsQuery**](../Model/ExecuteRecordingJobsQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingJob**](../Model/RecordingJob.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRecordingLocalkeysSetting**
> \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration putRecordingLocalkeysSetting($settingsId, $body)

Update the local encryption settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settingsId = "settingsId_example"; // string | Settings Id
$body = new \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration(); // \PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration | Local Encryption metadata

try {
    $result = $apiInstance->putRecordingLocalkeysSetting($settingsId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putRecordingLocalkeysSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settingsId** | **string**| Settings Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration**](../Model/LocalEncryptionConfiguration.md)| Local Encryption metadata |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocalEncryptionConfiguration**](../Model/LocalEncryptionConfiguration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRecordingMediaretentionpolicy**
> \PureCloudPlatform\Client\V2\Model\Policy putRecordingMediaretentionpolicy($policyId, $body)

Update a media retention policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$policyId = "policyId_example"; // string | Policy ID
$body = new \PureCloudPlatform\Client\V2\Model\Policy(); // \PureCloudPlatform\Client\V2\Model\Policy | Policy

try {
    $result = $apiInstance->putRecordingMediaretentionpolicy($policyId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putRecordingMediaretentionpolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **policyId** | **string**| Policy ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Policy**](../Model/Policy.md)| Policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Policy**](../Model/Policy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRecordingRecordingkeysRotationschedule**
> \PureCloudPlatform\Client\V2\Model\KeyRotationSchedule putRecordingRecordingkeysRotationschedule($body)

Update key rotation schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\KeyRotationSchedule(); // \PureCloudPlatform\Client\V2\Model\KeyRotationSchedule | KeyRotationSchedule

try {
    $result = $apiInstance->putRecordingRecordingkeysRotationschedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putRecordingRecordingkeysRotationschedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\KeyRotationSchedule**](../Model/KeyRotationSchedule.md)| KeyRotationSchedule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeyRotationSchedule**](../Model/KeyRotationSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRecordingSettings**
> \PureCloudPlatform\Client\V2\Model\RecordingSettings putRecordingSettings($body)

Update the Recording Settings for the Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\RecordingSettings(); // \PureCloudPlatform\Client\V2\Model\RecordingSettings | Recording settings

try {
    $result = $apiInstance->putRecordingSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putRecordingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\RecordingSettings**](../Model/RecordingSettings.md)| Recording settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecordingSettings**](../Model/RecordingSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRecordingsDeletionprotection**
> putRecordingsDeletionprotection($protect, $body)

Apply or revoke recording protection for conversations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RecordingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$protect = true; // bool | Check for apply, uncheck for revoke (each action requires the respective permission)
$body = new \PureCloudPlatform\Client\V2\Model\ConversationDeletionProtectionQuery(); // \PureCloudPlatform\Client\V2\Model\ConversationDeletionProtectionQuery | 

try {
    $apiInstance->putRecordingsDeletionprotection($protect, $body);
} catch (Exception $e) {
    echo 'Exception when calling RecordingApi->putRecordingsDeletionprotection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **protect** | **bool**| Check for apply, uncheck for revoke (each action requires the respective permission) | [optional] [default to true]
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationDeletionProtectionQuery**](../Model/ConversationDeletionProtectionQuery.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

