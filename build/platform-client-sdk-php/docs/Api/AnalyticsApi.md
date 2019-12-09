# PureCloudPlatform\Client\V2\AnalyticsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAnalyticsConversationsDetailsJob**](AnalyticsApi.md#deleteAnalyticsConversationsDetailsJob) | **DELETE** /api/v2/analytics/conversations/details/jobs/{jobId} | Delete/cancel an async request
[**deleteAnalyticsReportingSchedule**](AnalyticsApi.md#deleteAnalyticsReportingSchedule) | **DELETE** /api/v2/analytics/reporting/schedules/{scheduleId} | Delete a scheduled report job.
[**getAnalyticsConversationDetails**](AnalyticsApi.md#getAnalyticsConversationDetails) | **GET** /api/v2/analytics/conversations/{conversationId}/details | Get a conversation by id
[**getAnalyticsConversationsDetails**](AnalyticsApi.md#getAnalyticsConversationsDetails) | **GET** /api/v2/analytics/conversations/details | Gets multiple conversations by id
[**getAnalyticsConversationsDetailsJob**](AnalyticsApi.md#getAnalyticsConversationsDetailsJob) | **GET** /api/v2/analytics/conversations/details/jobs/{jobId} | Get status for async query for conversation details
[**getAnalyticsConversationsDetailsJobResults**](AnalyticsApi.md#getAnalyticsConversationsDetailsJobResults) | **GET** /api/v2/analytics/conversations/details/jobs/{jobId}/results | Fetch a page of results for an async query
[**getAnalyticsReportingExports**](AnalyticsApi.md#getAnalyticsReportingExports) | **GET** /api/v2/analytics/reporting/exports | Get all view export requests for a user
[**getAnalyticsReportingMetadata**](AnalyticsApi.md#getAnalyticsReportingMetadata) | **GET** /api/v2/analytics/reporting/metadata | Get list of reporting metadata.
[**getAnalyticsReportingReportIdMetadata**](AnalyticsApi.md#getAnalyticsReportingReportIdMetadata) | **GET** /api/v2/analytics/reporting/{reportId}/metadata | Get a reporting metadata.
[**getAnalyticsReportingReportformats**](AnalyticsApi.md#getAnalyticsReportingReportformats) | **GET** /api/v2/analytics/reporting/reportformats | Get a list of report formats
[**getAnalyticsReportingSchedule**](AnalyticsApi.md#getAnalyticsReportingSchedule) | **GET** /api/v2/analytics/reporting/schedules/{scheduleId} | Get a scheduled report job.
[**getAnalyticsReportingScheduleHistory**](AnalyticsApi.md#getAnalyticsReportingScheduleHistory) | **GET** /api/v2/analytics/reporting/schedules/{scheduleId}/history | Get list of completed scheduled report jobs.
[**getAnalyticsReportingScheduleHistoryLatest**](AnalyticsApi.md#getAnalyticsReportingScheduleHistoryLatest) | **GET** /api/v2/analytics/reporting/schedules/{scheduleId}/history/latest | Get most recently completed scheduled report job.
[**getAnalyticsReportingScheduleHistoryRunId**](AnalyticsApi.md#getAnalyticsReportingScheduleHistoryRunId) | **GET** /api/v2/analytics/reporting/schedules/{scheduleId}/history/{runId} | A completed scheduled report job
[**getAnalyticsReportingSchedules**](AnalyticsApi.md#getAnalyticsReportingSchedules) | **GET** /api/v2/analytics/reporting/schedules | Get a list of scheduled report jobs
[**getAnalyticsReportingTimeperiods**](AnalyticsApi.md#getAnalyticsReportingTimeperiods) | **GET** /api/v2/analytics/reporting/timeperiods | Get a list of report time periods.
[**postAnalyticsConversationDetailsProperties**](AnalyticsApi.md#postAnalyticsConversationDetailsProperties) | **POST** /api/v2/analytics/conversations/{conversationId}/details/properties | Index conversation properties
[**postAnalyticsConversationsAggregatesQuery**](AnalyticsApi.md#postAnalyticsConversationsAggregatesQuery) | **POST** /api/v2/analytics/conversations/aggregates/query | Query for conversation aggregates
[**postAnalyticsConversationsDetailsJobs**](AnalyticsApi.md#postAnalyticsConversationsDetailsJobs) | **POST** /api/v2/analytics/conversations/details/jobs | Query for conversation details asynchronously
[**postAnalyticsConversationsDetailsQuery**](AnalyticsApi.md#postAnalyticsConversationsDetailsQuery) | **POST** /api/v2/analytics/conversations/details/query | Query for conversation details
[**postAnalyticsEvaluationsAggregatesQuery**](AnalyticsApi.md#postAnalyticsEvaluationsAggregatesQuery) | **POST** /api/v2/analytics/evaluations/aggregates/query | Query for evaluation aggregates
[**postAnalyticsFlowsAggregatesQuery**](AnalyticsApi.md#postAnalyticsFlowsAggregatesQuery) | **POST** /api/v2/analytics/flows/aggregates/query | Query for flow aggregates
[**postAnalyticsFlowsObservationsQuery**](AnalyticsApi.md#postAnalyticsFlowsObservationsQuery) | **POST** /api/v2/analytics/flows/observations/query | Query for flow observations
[**postAnalyticsQueuesObservationsQuery**](AnalyticsApi.md#postAnalyticsQueuesObservationsQuery) | **POST** /api/v2/analytics/queues/observations/query | Query for queue observations
[**postAnalyticsReportingExports**](AnalyticsApi.md#postAnalyticsReportingExports) | **POST** /api/v2/analytics/reporting/exports | Generate a view export request
[**postAnalyticsReportingScheduleRunreport**](AnalyticsApi.md#postAnalyticsReportingScheduleRunreport) | **POST** /api/v2/analytics/reporting/schedules/{scheduleId}/runreport | Place a scheduled report immediately into the reporting queue
[**postAnalyticsReportingSchedules**](AnalyticsApi.md#postAnalyticsReportingSchedules) | **POST** /api/v2/analytics/reporting/schedules | Create a scheduled report job
[**postAnalyticsSurveysAggregatesQuery**](AnalyticsApi.md#postAnalyticsSurveysAggregatesQuery) | **POST** /api/v2/analytics/surveys/aggregates/query | Query for survey aggregates
[**postAnalyticsUsersAggregatesQuery**](AnalyticsApi.md#postAnalyticsUsersAggregatesQuery) | **POST** /api/v2/analytics/users/aggregates/query | Query for user aggregates
[**postAnalyticsUsersDetailsQuery**](AnalyticsApi.md#postAnalyticsUsersDetailsQuery) | **POST** /api/v2/analytics/users/details/query | Query for user details
[**postAnalyticsUsersObservationsQuery**](AnalyticsApi.md#postAnalyticsUsersObservationsQuery) | **POST** /api/v2/analytics/users/observations/query | Query for user observations
[**putAnalyticsReportingSchedule**](AnalyticsApi.md#putAnalyticsReportingSchedule) | **PUT** /api/v2/analytics/reporting/schedules/{scheduleId} | Update a scheduled report job.


# **deleteAnalyticsConversationsDetailsJob**
> deleteAnalyticsConversationsDetailsJob($jobId)

Delete/cancel an async request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $apiInstance->deleteAnalyticsConversationsDetailsJob($jobId);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->deleteAnalyticsConversationsDetailsJob: ', $e->getMessage(), PHP_EOL;
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

# **deleteAnalyticsReportingSchedule**
> deleteAnalyticsReportingSchedule($scheduleId)

Delete a scheduled report job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $apiInstance->deleteAnalyticsReportingSchedule($scheduleId);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->deleteAnalyticsReportingSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationDetails**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversation getAnalyticsConversationDetails($conversationId)

Get a conversation by id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getAnalyticsConversationDetails($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsConversationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversation**](../Model/AnalyticsConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationsDetails**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversationMultiGetResponse getAnalyticsConversationsDetails($id)

Gets multiple conversations by id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | Comma-separated conversation ids

try {
    $result = $apiInstance->getAnalyticsConversationsDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsConversationsDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| Comma-separated conversation ids | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversationMultiGetResponse**](../Model/AnalyticsConversationMultiGetResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationsDetailsJob**
> \PureCloudPlatform\Client\V2\Model\AsyncQueryStatus getAnalyticsConversationsDetailsJob($jobId)

Get status for async query for conversation details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $result = $apiInstance->getAnalyticsConversationsDetailsJob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsConversationsDetailsJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncQueryStatus**](../Model/AsyncQueryStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationsDetailsJobResults**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversationAsyncQueryResponse getAnalyticsConversationsDetailsJobResults($jobId, $cursor)

Fetch a page of results for an async query



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId
$cursor = "cursor_example"; // string | Indicates where to resume query results (not required for first page)

try {
    $result = $apiInstance->getAnalyticsConversationsDetailsJobResults($jobId, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsConversationsDetailsJobResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |
 **cursor** | **string**| Indicates where to resume query results (not required for first page) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversationAsyncQueryResponse**](../Model/AnalyticsConversationAsyncQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingExports**
> \PureCloudPlatform\Client\V2\Model\ReportingExportJobListing getAnalyticsReportingExports()

Get all view export requests for a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticsReportingExports();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportingExportJobListing**](../Model/ReportingExportJobListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingMetadata**
> \PureCloudPlatform\Client\V2\Model\ReportMetaDataEntityListing getAnalyticsReportingMetadata($pageNumber, $pageSize, $locale)

Get list of reporting metadata.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$locale = "locale_example"; // string | Locale

try {
    $result = $apiInstance->getAnalyticsReportingMetadata($pageNumber, $pageSize, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **locale** | **string**| Locale | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportMetaDataEntityListing**](../Model/ReportMetaDataEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingReportIdMetadata**
> \PureCloudPlatform\Client\V2\Model\ReportMetaData getAnalyticsReportingReportIdMetadata($reportId, $locale)

Get a reporting metadata.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = "reportId_example"; // string | Report ID
$locale = "locale_example"; // string | Locale

try {
    $result = $apiInstance->getAnalyticsReportingReportIdMetadata($reportId, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingReportIdMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportId** | **string**| Report ID |
 **locale** | **string**| Locale | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportMetaData**](../Model/ReportMetaData.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingReportformats**
> string[] getAnalyticsReportingReportformats()

Get a list of report formats

Get a list of report formats.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticsReportingReportformats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingReportformats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingSchedule**
> \PureCloudPlatform\Client\V2\Model\ReportSchedule getAnalyticsReportingSchedule($scheduleId)

Get a scheduled report job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $result = $apiInstance->getAnalyticsReportingSchedule($scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportSchedule**](../Model/ReportSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingScheduleHistory**
> \PureCloudPlatform\Client\V2\Model\ReportRunEntryEntityDomainListing getAnalyticsReportingScheduleHistory($scheduleId, $pageNumber, $pageSize)

Get list of completed scheduled report jobs.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID
$pageNumber = 1; // int | 
$pageSize = 25; // int | 

try {
    $result = $apiInstance->getAnalyticsReportingScheduleHistory($scheduleId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingScheduleHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |
 **pageNumber** | **int**|  | [optional] [default to 1]
 **pageSize** | **int**|  | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportRunEntryEntityDomainListing**](../Model/ReportRunEntryEntityDomainListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingScheduleHistoryLatest**
> \PureCloudPlatform\Client\V2\Model\ReportRunEntry getAnalyticsReportingScheduleHistoryLatest($scheduleId)

Get most recently completed scheduled report job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $result = $apiInstance->getAnalyticsReportingScheduleHistoryLatest($scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingScheduleHistoryLatest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportRunEntry**](../Model/ReportRunEntry.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingScheduleHistoryRunId**
> \PureCloudPlatform\Client\V2\Model\ReportRunEntry getAnalyticsReportingScheduleHistoryRunId($runId, $scheduleId)

A completed scheduled report job

A completed scheduled report job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$runId = "runId_example"; // string | Run ID
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $result = $apiInstance->getAnalyticsReportingScheduleHistoryRunId($runId, $scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingScheduleHistoryRunId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **runId** | **string**| Run ID |
 **scheduleId** | **string**| Schedule ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportRunEntry**](../Model/ReportRunEntry.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingSchedules**
> \PureCloudPlatform\Client\V2\Model\ReportScheduleEntityListing getAnalyticsReportingSchedules($pageNumber, $pageSize)

Get a list of scheduled report jobs

Get a list of scheduled report jobs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getAnalyticsReportingSchedules($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportScheduleEntityListing**](../Model/ReportScheduleEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsReportingTimeperiods**
> string[] getAnalyticsReportingTimeperiods()

Get a list of report time periods.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnalyticsReportingTimeperiods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAnalyticsReportingTimeperiods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationDetailsProperties**
> \PureCloudPlatform\Client\V2\Model\PropertyIndexRequest postAnalyticsConversationDetailsProperties($conversationId, $body)

Index conversation properties



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\PropertyIndexRequest(); // \PureCloudPlatform\Client\V2\Model\PropertyIndexRequest | request

try {
    $result = $apiInstance->postAnalyticsConversationDetailsProperties($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsConversationDetailsProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\PropertyIndexRequest**](../Model/PropertyIndexRequest.md)| request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PropertyIndexRequest**](../Model/PropertyIndexRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationsAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\ConversationAggregateQueryResponse postAnalyticsConversationsAggregatesQuery($body)

Query for conversation aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ConversationAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\ConversationAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsConversationsAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsConversationsAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationAggregationQuery**](../Model/ConversationAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConversationAggregateQueryResponse**](../Model/ConversationAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationsDetailsJobs**
> \PureCloudPlatform\Client\V2\Model\AsyncQueryResponse postAnalyticsConversationsDetailsJobs($body)

Query for conversation details asynchronously



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\AsyncConversationQuery(); // \PureCloudPlatform\Client\V2\Model\AsyncConversationQuery | query

try {
    $result = $apiInstance->postAnalyticsConversationsDetailsJobs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsConversationsDetailsJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\AsyncConversationQuery**](../Model/AsyncConversationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncQueryResponse**](../Model/AsyncQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationsDetailsQuery**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversationQueryResponse postAnalyticsConversationsDetailsQuery($body)

Query for conversation details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ConversationQuery(); // \PureCloudPlatform\Client\V2\Model\ConversationQuery | query

try {
    $result = $apiInstance->postAnalyticsConversationsDetailsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsConversationsDetailsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationQuery**](../Model/ConversationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversationQueryResponse**](../Model/AnalyticsConversationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsEvaluationsAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\EvaluationAggregateQueryResponse postAnalyticsEvaluationsAggregatesQuery($body)

Query for evaluation aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EvaluationAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\EvaluationAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsEvaluationsAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsEvaluationsAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EvaluationAggregationQuery**](../Model/EvaluationAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationAggregateQueryResponse**](../Model/EvaluationAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsFlowsAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\FlowAggregateQueryResponse postAnalyticsFlowsAggregatesQuery($body)

Query for flow aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FlowAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\FlowAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsFlowsAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsFlowsAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FlowAggregationQuery**](../Model/FlowAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowAggregateQueryResponse**](../Model/FlowAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsFlowsObservationsQuery**
> \PureCloudPlatform\Client\V2\Model\FlowObservationQueryResponse postAnalyticsFlowsObservationsQuery($body)

Query for flow observations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FlowObservationQuery(); // \PureCloudPlatform\Client\V2\Model\FlowObservationQuery | query

try {
    $result = $apiInstance->postAnalyticsFlowsObservationsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsFlowsObservationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FlowObservationQuery**](../Model/FlowObservationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowObservationQueryResponse**](../Model/FlowObservationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsQueuesObservationsQuery**
> \PureCloudPlatform\Client\V2\Model\QueueObservationQueryResponse postAnalyticsQueuesObservationsQuery($body)

Query for queue observations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\QueueObservationQuery(); // \PureCloudPlatform\Client\V2\Model\QueueObservationQuery | query

try {
    $result = $apiInstance->postAnalyticsQueuesObservationsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsQueuesObservationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\QueueObservationQuery**](../Model/QueueObservationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueObservationQueryResponse**](../Model/QueueObservationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsReportingExports**
> \PureCloudPlatform\Client\V2\Model\ReportingExportJobResponse postAnalyticsReportingExports($body)

Generate a view export request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ReportingExportJobRequest(); // \PureCloudPlatform\Client\V2\Model\ReportingExportJobRequest | ReportingExportJobRequest

try {
    $result = $apiInstance->postAnalyticsReportingExports($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsReportingExports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ReportingExportJobRequest**](../Model/ReportingExportJobRequest.md)| ReportingExportJobRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportingExportJobResponse**](../Model/ReportingExportJobResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsReportingScheduleRunreport**
> \PureCloudPlatform\Client\V2\Model\RunNowResponse postAnalyticsReportingScheduleRunreport($scheduleId)

Place a scheduled report immediately into the reporting queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $result = $apiInstance->postAnalyticsReportingScheduleRunreport($scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsReportingScheduleRunreport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RunNowResponse**](../Model/RunNowResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsReportingSchedules**
> \PureCloudPlatform\Client\V2\Model\ReportSchedule postAnalyticsReportingSchedules($body)

Create a scheduled report job

Create a scheduled report job.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ReportSchedule(); // \PureCloudPlatform\Client\V2\Model\ReportSchedule | ReportSchedule

try {
    $result = $apiInstance->postAnalyticsReportingSchedules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsReportingSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ReportSchedule**](../Model/ReportSchedule.md)| ReportSchedule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportSchedule**](../Model/ReportSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsSurveysAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\SurveyAggregateQueryResponse postAnalyticsSurveysAggregatesQuery($body)

Query for survey aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SurveyAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\SurveyAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsSurveysAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsSurveysAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SurveyAggregationQuery**](../Model/SurveyAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyAggregateQueryResponse**](../Model/SurveyAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsUsersAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\UserAggregateQueryResponse postAnalyticsUsersAggregatesQuery($body)

Query for user aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\UserAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsUsersAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsUsersAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserAggregationQuery**](../Model/UserAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserAggregateQueryResponse**](../Model/UserAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsUsersDetailsQuery**
> \PureCloudPlatform\Client\V2\Model\AnalyticsUserDetailsQueryResponse postAnalyticsUsersDetailsQuery($body)

Query for user details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserDetailsQuery(); // \PureCloudPlatform\Client\V2\Model\UserDetailsQuery | query

try {
    $result = $apiInstance->postAnalyticsUsersDetailsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsUsersDetailsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserDetailsQuery**](../Model/UserDetailsQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsUserDetailsQueryResponse**](../Model/AnalyticsUserDetailsQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsUsersObservationsQuery**
> \PureCloudPlatform\Client\V2\Model\UserObservationQueryResponse postAnalyticsUsersObservationsQuery($body)

Query for user observations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserObservationQuery(); // \PureCloudPlatform\Client\V2\Model\UserObservationQuery | query

try {
    $result = $apiInstance->postAnalyticsUsersObservationsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->postAnalyticsUsersObservationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserObservationQuery**](../Model/UserObservationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserObservationQueryResponse**](../Model/UserObservationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAnalyticsReportingSchedule**
> \PureCloudPlatform\Client\V2\Model\ReportSchedule putAnalyticsReportingSchedule($scheduleId, $body)

Update a scheduled report job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID
$body = new \PureCloudPlatform\Client\V2\Model\ReportSchedule(); // \PureCloudPlatform\Client\V2\Model\ReportSchedule | ReportSchedule

try {
    $result = $apiInstance->putAnalyticsReportingSchedule($scheduleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->putAnalyticsReportingSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ReportSchedule**](../Model/ReportSchedule.md)| ReportSchedule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReportSchedule**](../Model/ReportSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

