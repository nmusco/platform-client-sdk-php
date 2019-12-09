# PureCloudPlatform\Client\V2\WorkforceManagementApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWorkforcemanagementManagementunit**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunit) | **DELETE** /api/v2/workforcemanagement/managementunits/{muId} | Delete management unit
[**deleteWorkforcemanagementManagementunitActivitycode**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunitActivitycode) | **DELETE** /api/v2/workforcemanagement/managementunits/{muId}/activitycodes/{acId} | Deletes an activity code
[**deleteWorkforcemanagementManagementunitSchedulingRun**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunitSchedulingRun) | **DELETE** /api/v2/workforcemanagement/managementunits/{managementUnitId}/scheduling/runs/{runId} | Cancel a schedule run
[**deleteWorkforcemanagementManagementunitServicegoalgroup**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunitServicegoalgroup) | **DELETE** /api/v2/workforcemanagement/managementunits/{managementUnitId}/servicegoalgroups/{serviceGoalGroupId} | Delete a service goal group
[**deleteWorkforcemanagementManagementunitWeekSchedule**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunitWeekSchedule) | **DELETE** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/{scheduleId} | Delete a schedule
[**deleteWorkforcemanagementManagementunitWeekShorttermforecast**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunitWeekShorttermforecast) | **DELETE** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts/{forecastId} | Delete a short term forecast
[**deleteWorkforcemanagementManagementunitWorkplan**](WorkforceManagementApi.md#deleteWorkforcemanagementManagementunitWorkplan) | **DELETE** /api/v2/workforcemanagement/managementunits/{managementUnitId}/workplans/{workPlanId} | Delete a work plan
[**getWorkforcemanagementAdherence**](WorkforceManagementApi.md#getWorkforcemanagementAdherence) | **GET** /api/v2/workforcemanagement/adherence | Get a list of UserScheduleAdherence records for the requested users
[**getWorkforcemanagementAdhocmodelingjob**](WorkforceManagementApi.md#getWorkforcemanagementAdhocmodelingjob) | **GET** /api/v2/workforcemanagement/adhocmodelingjobs/{jobId} | Get status of the modeling job
[**getWorkforcemanagementManagementunit**](WorkforceManagementApi.md#getWorkforcemanagementManagementunit) | **GET** /api/v2/workforcemanagement/managementunits/{muId} | Get management unit
[**getWorkforcemanagementManagementunitActivitycode**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitActivitycode) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/activitycodes/{acId} | Get an activity code
[**getWorkforcemanagementManagementunitActivitycodes**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitActivitycodes) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/activitycodes | Get activity codes
[**getWorkforcemanagementManagementunitAgent**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitAgent) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/agents/{agentId} | Get data for agent in the management unit
[**getWorkforcemanagementManagementunitIntradayQueues**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitIntradayQueues) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/intraday/queues | Get intraday queues for the given date
[**getWorkforcemanagementManagementunitSchedulingRun**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitSchedulingRun) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/scheduling/runs/{runId} | Gets the status for a specific scheduling run
[**getWorkforcemanagementManagementunitSchedulingRunResult**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitSchedulingRunResult) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/scheduling/runs/{runId}/result | Gets the result of a specific scheduling run
[**getWorkforcemanagementManagementunitSchedulingRuns**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitSchedulingRuns) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/scheduling/runs | Get the status of all the ongoing schedule runs
[**getWorkforcemanagementManagementunitServicegoalgroup**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitServicegoalgroup) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/servicegoalgroups/{serviceGoalGroupId} | Get a service goal group
[**getWorkforcemanagementManagementunitServicegoalgroups**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitServicegoalgroups) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/servicegoalgroups | Get service goal groups
[**getWorkforcemanagementManagementunitSettings**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitSettings) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/settings | Get the settings for the requested management unit. Deprecated, use the GET management unit route instead
[**getWorkforcemanagementManagementunitShifttradesMatched**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitShifttradesMatched) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/shifttrades/matched | Gets a summary of all shift trades in the matched state
[**getWorkforcemanagementManagementunitShifttradesUsers**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitShifttradesUsers) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/shifttrades/users | Gets list of users available for whom you can send direct shift trade requests
[**getWorkforcemanagementManagementunitUserTimeoffrequest**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitUserTimeoffrequest) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/users/{userId}/timeoffrequests/{timeOffRequestId} | Get a time off request
[**getWorkforcemanagementManagementunitUserTimeoffrequests**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitUserTimeoffrequests) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/users/{userId}/timeoffrequests | Get a list of time off requests for a given user
[**getWorkforcemanagementManagementunitUsers**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitUsers) | **GET** /api/v2/workforcemanagement/managementunits/{muId}/users | Get users in the management unit
[**getWorkforcemanagementManagementunitWeekSchedule**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWeekSchedule) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/{scheduleId} | Get a week schedule
[**getWorkforcemanagementManagementunitWeekScheduleGenerationresults**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWeekScheduleGenerationresults) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/{scheduleId}/generationresults | Get week schedule generation results
[**getWorkforcemanagementManagementunitWeekSchedules**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWeekSchedules) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules | Get the list of schedules in a week in management unit
[**getWorkforcemanagementManagementunitWeekShorttermforecastFinal**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWeekShorttermforecastFinal) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts/{forecastId}/final | Get the final result of a short term forecast calculation with modifications applied
[**getWorkforcemanagementManagementunitWeekShorttermforecasts**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWeekShorttermforecasts) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts | Get short term forecasts
[**getWorkforcemanagementManagementunitWorkplan**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWorkplan) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/workplans/{workPlanId} | Get a work plan
[**getWorkforcemanagementManagementunitWorkplans**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitWorkplans) | **GET** /api/v2/workforcemanagement/managementunits/{managementUnitId}/workplans | Get work plans
[**getWorkforcemanagementManagementunits**](WorkforceManagementApi.md#getWorkforcemanagementManagementunits) | **GET** /api/v2/workforcemanagement/managementunits | Get management units
[**getWorkforcemanagementManagementunitsDivisionviews**](WorkforceManagementApi.md#getWorkforcemanagementManagementunitsDivisionviews) | **GET** /api/v2/workforcemanagement/managementunits/divisionviews | Get management units across divisions
[**getWorkforcemanagementNotifications**](WorkforceManagementApi.md#getWorkforcemanagementNotifications) | **GET** /api/v2/workforcemanagement/notifications | Get a list of notifications for the current user
[**getWorkforcemanagementSchedulingjob**](WorkforceManagementApi.md#getWorkforcemanagementSchedulingjob) | **GET** /api/v2/workforcemanagement/schedulingjobs/{jobId} | Get status of the scheduling job
[**getWorkforcemanagementShifttrades**](WorkforceManagementApi.md#getWorkforcemanagementShifttrades) | **GET** /api/v2/workforcemanagement/shifttrades | Gets all of my shift trades
[**getWorkforcemanagementTimeoffrequest**](WorkforceManagementApi.md#getWorkforcemanagementTimeoffrequest) | **GET** /api/v2/workforcemanagement/timeoffrequests/{timeOffRequestId} | Get a time off request for the current user
[**getWorkforcemanagementTimeoffrequests**](WorkforceManagementApi.md#getWorkforcemanagementTimeoffrequests) | **GET** /api/v2/workforcemanagement/timeoffrequests | Get a list of time off requests for the current user
[**patchWorkforcemanagementManagementunit**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunit) | **PATCH** /api/v2/workforcemanagement/managementunits/{muId} | Update the requested management unit
[**patchWorkforcemanagementManagementunitActivitycode**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitActivitycode) | **PATCH** /api/v2/workforcemanagement/managementunits/{muId}/activitycodes/{acId} | Update an activity code
[**patchWorkforcemanagementManagementunitSchedulingRun**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitSchedulingRun) | **PATCH** /api/v2/workforcemanagement/managementunits/{managementUnitId}/scheduling/runs/{runId} | Marks a specific scheduling run as applied, allowing a new rescheduling run to be started
[**patchWorkforcemanagementManagementunitServicegoalgroup**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitServicegoalgroup) | **PATCH** /api/v2/workforcemanagement/managementunits/{managementUnitId}/servicegoalgroups/{serviceGoalGroupId} | Update a service goal group
[**patchWorkforcemanagementManagementunitSettings**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitSettings) | **PATCH** /api/v2/workforcemanagement/managementunits/{muId}/settings | Update the settings for the requested management unit
[**patchWorkforcemanagementManagementunitUserTimeoffrequest**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitUserTimeoffrequest) | **PATCH** /api/v2/workforcemanagement/managementunits/{muId}/users/{userId}/timeoffrequests/{timeOffRequestId} | Update a time off request
[**patchWorkforcemanagementManagementunitWeekSchedule**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitWeekSchedule) | **PATCH** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/{scheduleId} | Update a week schedule
[**patchWorkforcemanagementManagementunitWorkplan**](WorkforceManagementApi.md#patchWorkforcemanagementManagementunitWorkplan) | **PATCH** /api/v2/workforcemanagement/managementunits/{managementUnitId}/workplans/{workPlanId} | Update a work plan
[**patchWorkforcemanagementTimeoffrequest**](WorkforceManagementApi.md#patchWorkforcemanagementTimeoffrequest) | **PATCH** /api/v2/workforcemanagement/timeoffrequests/{timeOffRequestId} | Update a time off request for the current user
[**postWorkforcemanagementAdherenceHistorical**](WorkforceManagementApi.md#postWorkforcemanagementAdherenceHistorical) | **POST** /api/v2/workforcemanagement/adherence/historical | Request a historical adherence report for users across management units
[**postWorkforcemanagementManagementunitActivitycodes**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitActivitycodes) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/activitycodes | Create a new activity code
[**postWorkforcemanagementManagementunitHistoricaladherencequery**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitHistoricaladherencequery) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/historicaladherencequery | Request a historical adherence report
[**postWorkforcemanagementManagementunitIntraday**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitIntraday) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/intraday | Get intraday data for the given date for the requested queueIds
[**postWorkforcemanagementManagementunitMove**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitMove) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/move | Move the requested management unit to a new business unit
[**postWorkforcemanagementManagementunitSchedulesSearch**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitSchedulesSearch) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/schedules/search | Query published schedules for given given time range for set of users
[**postWorkforcemanagementManagementunitServicegoalgroups**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitServicegoalgroups) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/servicegoalgroups | Create a new service goal group
[**postWorkforcemanagementManagementunitTimeoffrequests**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitTimeoffrequests) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/timeoffrequests | Create a new time off request
[**postWorkforcemanagementManagementunitTimeoffrequestsFetchdetails**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitTimeoffrequestsFetchdetails) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/timeoffrequests/fetchdetails | Gets a list of time off requests from lookup ids
[**postWorkforcemanagementManagementunitTimeoffrequestsQuery**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitTimeoffrequestsQuery) | **POST** /api/v2/workforcemanagement/managementunits/{muId}/timeoffrequests/query | Gets the lookup ids to fetch the specified set of requests
[**postWorkforcemanagementManagementunitWeekScheduleCopy**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekScheduleCopy) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/{scheduleId}/copy | Copy a week schedule
[**postWorkforcemanagementManagementunitWeekScheduleReschedule**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekScheduleReschedule) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/{scheduleId}/reschedule | Start a scheduling run to compute the reschedule. When the scheduling run finishes, a client can get the reschedule changes and then the client can apply them to the schedule, save the schedule, and mark the scheduling run as applied
[**postWorkforcemanagementManagementunitWeekSchedules**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekSchedules) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules | Add a schedule for a week in management unit using imported data. Use partial uploads of user schedules if activity count in schedule is greater than 17500
[**postWorkforcemanagementManagementunitWeekSchedulesGenerate**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekSchedulesGenerate) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/generate | Generate a week schedule
[**postWorkforcemanagementManagementunitWeekSchedulesPartialupload**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekSchedulesPartialupload) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekId}/schedules/partialupload | Partial upload of user schedules where activity count is greater than 17500
[**postWorkforcemanagementManagementunitWeekShorttermforecastCopy**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekShorttermforecastCopy) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts/{forecastId}/copy | Copy a short term forecast
[**postWorkforcemanagementManagementunitWeekShorttermforecasts**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekShorttermforecasts) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts | Import a short term forecast
[**postWorkforcemanagementManagementunitWeekShorttermforecastsGenerate**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekShorttermforecastsGenerate) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts/generate | Generate a short term forecast
[**postWorkforcemanagementManagementunitWeekShorttermforecastsPartialupload**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWeekShorttermforecastsPartialupload) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/weeks/{weekDateId}/shorttermforecasts/partialupload | Import a short term forecast
[**postWorkforcemanagementManagementunitWorkplanCopy**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWorkplanCopy) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/workplans/{workPlanId}/copy | Create a copy of work plan
[**postWorkforcemanagementManagementunitWorkplans**](WorkforceManagementApi.md#postWorkforcemanagementManagementunitWorkplans) | **POST** /api/v2/workforcemanagement/managementunits/{managementUnitId}/workplans | Create a new work plan
[**postWorkforcemanagementManagementunits**](WorkforceManagementApi.md#postWorkforcemanagementManagementunits) | **POST** /api/v2/workforcemanagement/managementunits | Add a management unit
[**postWorkforcemanagementNotificationsUpdate**](WorkforceManagementApi.md#postWorkforcemanagementNotificationsUpdate) | **POST** /api/v2/workforcemanagement/notifications/update | Mark a list of notifications as read or unread
[**postWorkforcemanagementSchedules**](WorkforceManagementApi.md#postWorkforcemanagementSchedules) | **POST** /api/v2/workforcemanagement/schedules | Get published schedule for the current user
[**postWorkforcemanagementTimeoffrequests**](WorkforceManagementApi.md#postWorkforcemanagementTimeoffrequests) | **POST** /api/v2/workforcemanagement/timeoffrequests | Create a time off request for the current user


# **deleteWorkforcemanagementManagementunit**
> deleteWorkforcemanagementManagementunit($muId)

Delete management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $apiInstance->deleteWorkforcemanagementManagementunit($muId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkforcemanagementManagementunitActivitycode**
> deleteWorkforcemanagementManagementunitActivitycode($muId, $acId)

Deletes an activity code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$acId = "acId_example"; // string | The ID of the activity code to delete

try {
    $apiInstance->deleteWorkforcemanagementManagementunitActivitycode($muId, $acId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunitActivitycode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **acId** | **string**| The ID of the activity code to delete |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkforcemanagementManagementunitSchedulingRun**
> deleteWorkforcemanagementManagementunitSchedulingRun($managementUnitId, $runId)

Cancel a schedule run



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit.
$runId = "runId_example"; // string | The ID of the schedule run

try {
    $apiInstance->deleteWorkforcemanagementManagementunitSchedulingRun($managementUnitId, $runId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunitSchedulingRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit. |
 **runId** | **string**| The ID of the schedule run |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkforcemanagementManagementunitServicegoalgroup**
> deleteWorkforcemanagementManagementunitServicegoalgroup($managementUnitId, $serviceGoalGroupId)

Delete a service goal group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$serviceGoalGroupId = "serviceGoalGroupId_example"; // string | The ID of the service goal group to delete

try {
    $apiInstance->deleteWorkforcemanagementManagementunitServicegoalgroup($managementUnitId, $serviceGoalGroupId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunitServicegoalgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **serviceGoalGroupId** | **string**| The ID of the service goal group to delete |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkforcemanagementManagementunitWeekSchedule**
> deleteWorkforcemanagementManagementunitWeekSchedule($managementUnitId, $weekId, $scheduleId)

Delete a schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$scheduleId = "scheduleId_example"; // string | The ID of theschedule to delete

try {
    $apiInstance->deleteWorkforcemanagementManagementunitWeekSchedule($managementUnitId, $weekId, $scheduleId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunitWeekSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **scheduleId** | **string**| The ID of theschedule to delete |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkforcemanagementManagementunitWeekShorttermforecast**
> deleteWorkforcemanagementManagementunitWeekShorttermforecast($managementUnitId, $weekDateId, $forecastId)

Delete a short term forecast

Must not be tied to any schedules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format
$forecastId = "forecastId_example"; // string | The ID of the forecast

try {
    $apiInstance->deleteWorkforcemanagementManagementunitWeekShorttermforecast($managementUnitId, $weekDateId, $forecastId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunitWeekShorttermforecast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |
 **forecastId** | **string**| The ID of the forecast |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWorkforcemanagementManagementunitWorkplan**
> deleteWorkforcemanagementManagementunitWorkplan($managementUnitId, $workPlanId)

Delete a work plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$workPlanId = "workPlanId_example"; // string | The ID of the work plan to delete

try {
    $apiInstance->deleteWorkforcemanagementManagementunitWorkplan($managementUnitId, $workPlanId);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->deleteWorkforcemanagementManagementunitWorkplan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **workPlanId** | **string**| The ID of the work plan to delete |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementAdherence**
> \PureCloudPlatform\Client\V2\Model\UserScheduleAdherence[] getWorkforcemanagementAdherence($userId)

Get a list of UserScheduleAdherence records for the requested users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = array("userId_example"); // string[] | User Id(s) for which to fetch current schedule adherence information.  Min 1, Max of 100 userIds per request

try {
    $result = $apiInstance->getWorkforcemanagementAdherence($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementAdherence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | [**string[]**](../Model/string.md)| User Id(s) for which to fetch current schedule adherence information.  Min 1, Max of 100 userIds per request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserScheduleAdherence[]**](../Model/UserScheduleAdherence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementAdhocmodelingjob**
> \PureCloudPlatform\Client\V2\Model\ModelingStatusResponse getWorkforcemanagementAdhocmodelingjob($jobId)

Get status of the modeling job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | The id of the modeling job

try {
    $result = $apiInstance->getWorkforcemanagementAdhocmodelingjob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementAdhocmodelingjob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| The id of the modeling job |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelingStatusResponse**](../Model/ModelingStatusResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunit**
> \PureCloudPlatform\Client\V2\Model\ManagementUnit getWorkforcemanagementManagementunit($muId, $expand)

Get management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$expand = array("expand_example"); // string[] | 

try {
    $result = $apiInstance->getWorkforcemanagementManagementunit($muId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **expand** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnit**](../Model/ManagementUnit.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitActivitycode**
> \PureCloudPlatform\Client\V2\Model\ActivityCode getWorkforcemanagementManagementunitActivitycode($muId, $acId)

Get an activity code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$acId = "acId_example"; // string | The ID of the activity code to fetch

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitActivitycode($muId, $acId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitActivitycode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **acId** | **string**| The ID of the activity code to fetch |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActivityCode**](../Model/ActivityCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitActivitycodes**
> \PureCloudPlatform\Client\V2\Model\ActivityCodeContainer getWorkforcemanagementManagementunitActivitycodes($muId)

Get activity codes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitActivitycodes($muId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitActivitycodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActivityCodeContainer**](../Model/ActivityCodeContainer.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitAgent**
> \PureCloudPlatform\Client\V2\Model\WfmAgent getWorkforcemanagementManagementunitAgent($managementUnitId, $agentId)

Get data for agent in the management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The id of the management unit, or 'mine' for the management unit of the logged-in user.
$agentId = "agentId_example"; // string | The agent id

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitAgent($managementUnitId, $agentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The id of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **agentId** | **string**| The agent id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WfmAgent**](../Model/WfmAgent.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitIntradayQueues**
> \PureCloudPlatform\Client\V2\Model\WfmIntradayQueueListing getWorkforcemanagementManagementunitIntradayQueues($muId, $date)

Get intraday queues for the given date



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit
$date = "date_example"; // string | yyyy-MM-dd date string interpreted in the configured management unit time zone

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitIntradayQueues($muId, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitIntradayQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit |
 **date** | **string**| yyyy-MM-dd date string interpreted in the configured management unit time zone |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WfmIntradayQueueListing**](../Model/WfmIntradayQueueListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitSchedulingRun**
> \PureCloudPlatform\Client\V2\Model\SchedulingRunResponse getWorkforcemanagementManagementunitSchedulingRun($managementUnitId, $runId)

Gets the status for a specific scheduling run



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit.
$runId = "runId_example"; // string | The ID of the schedule run

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitSchedulingRun($managementUnitId, $runId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitSchedulingRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit. |
 **runId** | **string**| The ID of the schedule run |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SchedulingRunResponse**](../Model/SchedulingRunResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitSchedulingRunResult**
> \PureCloudPlatform\Client\V2\Model\RescheduleResult getWorkforcemanagementManagementunitSchedulingRunResult($managementUnitId, $runId)

Gets the result of a specific scheduling run



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit.
$runId = "runId_example"; // string | The ID of the schedule run

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitSchedulingRunResult($managementUnitId, $runId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitSchedulingRunResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit. |
 **runId** | **string**| The ID of the schedule run |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RescheduleResult**](../Model/RescheduleResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitSchedulingRuns**
> \PureCloudPlatform\Client\V2\Model\SchedulingRunListResponse getWorkforcemanagementManagementunitSchedulingRuns($managementUnitId)

Get the status of all the ongoing schedule runs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitSchedulingRuns($managementUnitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitSchedulingRuns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SchedulingRunListResponse**](../Model/SchedulingRunListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitServicegoalgroup**
> \PureCloudPlatform\Client\V2\Model\ServiceGoalGroup getWorkforcemanagementManagementunitServicegoalgroup($managementUnitId, $serviceGoalGroupId)

Get a service goal group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$serviceGoalGroupId = "serviceGoalGroupId_example"; // string | The ID of the service goal group to fetch

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitServicegoalgroup($managementUnitId, $serviceGoalGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitServicegoalgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **serviceGoalGroupId** | **string**| The ID of the service goal group to fetch |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ServiceGoalGroup**](../Model/ServiceGoalGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitServicegoalgroups**
> \PureCloudPlatform\Client\V2\Model\ServiceGoalGroupList getWorkforcemanagementManagementunitServicegoalgroups($managementUnitId)

Get service goal groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitServicegoalgroups($managementUnitId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitServicegoalgroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ServiceGoalGroupList**](../Model/ServiceGoalGroupList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitSettings**
> \PureCloudPlatform\Client\V2\Model\ManagementUnitSettings getWorkforcemanagementManagementunitSettings($muId)

Get the settings for the requested management unit. Deprecated, use the GET management unit route instead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitSettings($muId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnitSettings**](../Model/ManagementUnitSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitShifttradesMatched**
> \PureCloudPlatform\Client\V2\Model\ShiftTradeMatchesSummaryResponse getWorkforcemanagementManagementunitShifttradesMatched($muId)

Gets a summary of all shift trades in the matched state



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitShifttradesMatched($muId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitShifttradesMatched: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ShiftTradeMatchesSummaryResponse**](../Model/ShiftTradeMatchesSummaryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitShifttradesUsers**
> \PureCloudPlatform\Client\V2\Model\WfmUserEntityListing getWorkforcemanagementManagementunitShifttradesUsers($muId)

Gets list of users available for whom you can send direct shift trade requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitShifttradesUsers($muId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitShifttradesUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WfmUserEntityListing**](../Model/WfmUserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitUserTimeoffrequest**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse getWorkforcemanagementManagementunitUserTimeoffrequest($muId, $userId, $timeOffRequestId)

Get a time off request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The muId of the management unit, or 'mine' for the management unit of the logged-in user.
$userId = "userId_example"; // string | The userId to whom the Time Off Request applies.
$timeOffRequestId = "timeOffRequestId_example"; // string | Time Off Request Id

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitUserTimeoffrequest($muId, $userId, $timeOffRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitUserTimeoffrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The muId of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **userId** | **string**| The userId to whom the Time Off Request applies. |
 **timeOffRequestId** | **string**| Time Off Request Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse**](../Model/TimeOffRequestResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitUserTimeoffrequests**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestList getWorkforcemanagementManagementunitUserTimeoffrequests($muId, $userId, $recentlyReviewed)

Get a list of time off requests for a given user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The muId of the management unit, or 'mine' for the management unit of the logged-in user.
$userId = "userId_example"; // string | The userId to whom the Time Off Request applies.
$recentlyReviewed = false; // bool | Limit results to requests that have been reviewed within the preceding 30 days

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitUserTimeoffrequests($muId, $userId, $recentlyReviewed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitUserTimeoffrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The muId of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **userId** | **string**| The userId to whom the Time Off Request applies. |
 **recentlyReviewed** | **bool**| Limit results to requests that have been reviewed within the preceding 30 days | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestList**](../Model/TimeOffRequestList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitUsers**
> \PureCloudPlatform\Client\V2\Model\WfmUserEntityListing getWorkforcemanagementManagementunitUsers($muId)

Get users in the management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit, or 'mine' for the management unit of the logged-in user.

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitUsers($muId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WfmUserEntityListing**](../Model/WfmUserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWeekSchedule**
> \PureCloudPlatform\Client\V2\Model\WeekScheduleResponse getWorkforcemanagementManagementunitWeekSchedule($managementUnitId, $weekId, $scheduleId, $expand, $forceDownloadService)

Get a week schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$scheduleId = "scheduleId_example"; // string | The ID of the schedule to fetch
$expand = "expand_example"; // string | Which fields, if any, to expand
$forceDownloadService = true; // bool | Force the result of this operation to be sent via download service.  For testing/app development purposes

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWeekSchedule($managementUnitId, $weekId, $scheduleId, $expand, $forceDownloadService);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWeekSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **scheduleId** | **string**| The ID of the schedule to fetch |
 **expand** | **string**| Which fields, if any, to expand | [optional]
 **forceDownloadService** | **bool**| Force the result of this operation to be sent via download service.  For testing/app development purposes | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WeekScheduleResponse**](../Model/WeekScheduleResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWeekScheduleGenerationresults**
> \PureCloudPlatform\Client\V2\Model\WeekScheduleGenerationResult getWorkforcemanagementManagementunitWeekScheduleGenerationresults($managementUnitId, $weekId, $scheduleId)

Get week schedule generation results



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$scheduleId = "scheduleId_example"; // string | The ID of the schedule to fetch generation results

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWeekScheduleGenerationresults($managementUnitId, $weekId, $scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWeekScheduleGenerationresults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **scheduleId** | **string**| The ID of the schedule to fetch generation results |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WeekScheduleGenerationResult**](../Model/WeekScheduleGenerationResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWeekSchedules**
> \PureCloudPlatform\Client\V2\Model\WeekScheduleListResponse getWorkforcemanagementManagementunitWeekSchedules($managementUnitId, $weekId, $includeOnlyPublished, $earliestWeekDate, $latestWeekDate)

Get the list of schedules in a week in management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$includeOnlyPublished = true; // bool | Return only published schedules
$earliestWeekDate = "earliestWeekDate_example"; // string | The start date of the earliest week to query in yyyy-MM-dd format
$latestWeekDate = "latestWeekDate_example"; // string | The start date of the latest week to query in yyyy-MM-dd format

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWeekSchedules($managementUnitId, $weekId, $includeOnlyPublished, $earliestWeekDate, $latestWeekDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWeekSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **includeOnlyPublished** | **bool**| Return only published schedules | [optional]
 **earliestWeekDate** | **string**| The start date of the earliest week to query in yyyy-MM-dd format | [optional]
 **latestWeekDate** | **string**| The start date of the latest week to query in yyyy-MM-dd format | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WeekScheduleListResponse**](../Model/WeekScheduleListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWeekShorttermforecastFinal**
> \PureCloudPlatform\Client\V2\Model\ForecastResultResponse getWorkforcemanagementManagementunitWeekShorttermforecastFinal($managementUnitId, $weekDateId, $forecastId, $forceDownloadService)

Get the final result of a short term forecast calculation with modifications applied



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format
$forecastId = "forecastId_example"; // string | The ID of the forecast
$forceDownloadService = true; // bool | Force the result of this operation to be sent via download service.  For testing/app development purposes

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWeekShorttermforecastFinal($managementUnitId, $weekDateId, $forecastId, $forceDownloadService);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWeekShorttermforecastFinal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |
 **forecastId** | **string**| The ID of the forecast |
 **forceDownloadService** | **bool**| Force the result of this operation to be sent via download service.  For testing/app development purposes | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ForecastResultResponse**](../Model/ForecastResultResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWeekShorttermforecasts**
> \PureCloudPlatform\Client\V2\Model\ShortTermForecastListResponse getWorkforcemanagementManagementunitWeekShorttermforecasts($managementUnitId, $weekDateId)

Get short term forecasts

Use \"recent\" for the `weekDateId` path parameter to fetch all forecasts for +/- 26 weeks from the current date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWeekShorttermforecasts($managementUnitId, $weekDateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWeekShorttermforecasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ShortTermForecastListResponse**](../Model/ShortTermForecastListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWorkplan**
> \PureCloudPlatform\Client\V2\Model\WorkPlan getWorkforcemanagementManagementunitWorkplan($managementUnitId, $workPlanId)

Get a work plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$workPlanId = "workPlanId_example"; // string | The ID of the work plan to fetch

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWorkplan($managementUnitId, $workPlanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWorkplan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **workPlanId** | **string**| The ID of the work plan to fetch |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkPlan**](../Model/WorkPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitWorkplans**
> \PureCloudPlatform\Client\V2\Model\WorkPlanListResponse getWorkforcemanagementManagementunitWorkplans($managementUnitId, $expand)

Get work plans



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$expand = array("expand_example"); // string[] | 

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitWorkplans($managementUnitId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitWorkplans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **expand** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkPlanListResponse**](../Model/WorkPlanListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunits**
> \PureCloudPlatform\Client\V2\Model\ManagementUnitListing getWorkforcemanagementManagementunits($pageSize, $pageNumber, $expand, $feature, $divisionId)

Get management units



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 56; // int | 
$pageNumber = 56; // int | 
$expand = "expand_example"; // string | 
$feature = "feature_example"; // string | 
$divisionId = "divisionId_example"; // string | 

try {
    $result = $apiInstance->getWorkforcemanagementManagementunits($pageSize, $pageNumber, $expand, $feature, $divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**|  | [optional]
 **pageNumber** | **int**|  | [optional]
 **expand** | **string**|  | [optional]
 **feature** | **string**|  | [optional]
 **divisionId** | **string**|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnitListing**](../Model/ManagementUnitListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementManagementunitsDivisionviews**
> \PureCloudPlatform\Client\V2\Model\ManagementUnitListing getWorkforcemanagementManagementunitsDivisionviews($divisionId)

Get management units across divisions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divisionId = array("divisionId_example"); // string[] | The divisionIds to filter by. If omitted, will return all divisions

try {
    $result = $apiInstance->getWorkforcemanagementManagementunitsDivisionviews($divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementManagementunitsDivisionviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **divisionId** | [**string[]**](../Model/string.md)| The divisionIds to filter by. If omitted, will return all divisions | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnitListing**](../Model/ManagementUnitListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementNotifications**
> \PureCloudPlatform\Client\V2\Model\NotificationsResponse getWorkforcemanagementNotifications()

Get a list of notifications for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorkforcemanagementNotifications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\NotificationsResponse**](../Model/NotificationsResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementSchedulingjob**
> \PureCloudPlatform\Client\V2\Model\SchedulingStatusResponse getWorkforcemanagementSchedulingjob($jobId)

Get status of the scheduling job



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | The id of the scheduling job

try {
    $result = $apiInstance->getWorkforcemanagementSchedulingjob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementSchedulingjob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| The id of the scheduling job |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SchedulingStatusResponse**](../Model/SchedulingStatusResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementShifttrades**
> \PureCloudPlatform\Client\V2\Model\ShiftTradeListResponse getWorkforcemanagementShifttrades()

Gets all of my shift trades



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorkforcemanagementShifttrades();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementShifttrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ShiftTradeListResponse**](../Model/ShiftTradeListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementTimeoffrequest**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse getWorkforcemanagementTimeoffrequest($timeOffRequestId)

Get a time off request for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timeOffRequestId = "timeOffRequestId_example"; // string | Time Off Request Id

try {
    $result = $apiInstance->getWorkforcemanagementTimeoffrequest($timeOffRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementTimeoffrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeOffRequestId** | **string**| Time Off Request Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse**](../Model/TimeOffRequestResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkforcemanagementTimeoffrequests**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestList getWorkforcemanagementTimeoffrequests($recentlyReviewed)

Get a list of time off requests for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recentlyReviewed = false; // bool | Limit results to requests that have been reviewed within the preceding 30 days

try {
    $result = $apiInstance->getWorkforcemanagementTimeoffrequests($recentlyReviewed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->getWorkforcemanagementTimeoffrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recentlyReviewed** | **bool**| Limit results to requests that have been reviewed within the preceding 30 days | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestList**](../Model/TimeOffRequestList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunit**
> \PureCloudPlatform\Client\V2\Model\ManagementUnit patchWorkforcemanagementManagementunit($muId, $body)

Update the requested management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\UpdateManagementUnitRequest(); // \PureCloudPlatform\Client\V2\Model\UpdateManagementUnitRequest | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunit($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateManagementUnitRequest**](../Model/UpdateManagementUnitRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnit**](../Model/ManagementUnit.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitActivitycode**
> \PureCloudPlatform\Client\V2\Model\ActivityCode patchWorkforcemanagementManagementunitActivitycode($muId, $acId, $body)

Update an activity code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$acId = "acId_example"; // string | The ID of the activity code to update
$body = new \PureCloudPlatform\Client\V2\Model\UpdateActivityCodeRequest(); // \PureCloudPlatform\Client\V2\Model\UpdateActivityCodeRequest | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitActivitycode($muId, $acId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitActivitycode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **acId** | **string**| The ID of the activity code to update |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateActivityCodeRequest**](../Model/UpdateActivityCodeRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActivityCode**](../Model/ActivityCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitSchedulingRun**
> \PureCloudPlatform\Client\V2\Model\RescheduleResult patchWorkforcemanagementManagementunitSchedulingRun($managementUnitId, $runId, $body)

Marks a specific scheduling run as applied, allowing a new rescheduling run to be started



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit.
$runId = "runId_example"; // string | The ID of the schedule run
$body = new \PureCloudPlatform\Client\V2\Model\UpdateSchedulingRunRequest(); // \PureCloudPlatform\Client\V2\Model\UpdateSchedulingRunRequest | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitSchedulingRun($managementUnitId, $runId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitSchedulingRun: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit. |
 **runId** | **string**| The ID of the schedule run |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateSchedulingRunRequest**](../Model/UpdateSchedulingRunRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\RescheduleResult**](../Model/RescheduleResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitServicegoalgroup**
> \PureCloudPlatform\Client\V2\Model\ServiceGoalGroup patchWorkforcemanagementManagementunitServicegoalgroup($managementUnitId, $serviceGoalGroupId, $body)

Update a service goal group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$serviceGoalGroupId = "serviceGoalGroupId_example"; // string | The ID of the service goal group to update
$body = new \PureCloudPlatform\Client\V2\Model\ServiceGoalGroup(); // \PureCloudPlatform\Client\V2\Model\ServiceGoalGroup | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitServicegoalgroup($managementUnitId, $serviceGoalGroupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitServicegoalgroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **serviceGoalGroupId** | **string**| The ID of the service goal group to update |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ServiceGoalGroup**](../Model/ServiceGoalGroup.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ServiceGoalGroup**](../Model/ServiceGoalGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitSettings**
> \PureCloudPlatform\Client\V2\Model\ManagementUnitSettings patchWorkforcemanagementManagementunitSettings($muId, $body)

Update the settings for the requested management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\ManagementUnitSettings(); // \PureCloudPlatform\Client\V2\Model\ManagementUnitSettings | config

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitSettings($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ManagementUnitSettings**](../Model/ManagementUnitSettings.md)| config | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnitSettings**](../Model/ManagementUnitSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitUserTimeoffrequest**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse patchWorkforcemanagementManagementunitUserTimeoffrequest($muId, $userId, $timeOffRequestId, $body)

Update a time off request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The muId of the management unit, or 'mine' for the management unit of the logged-in user.
$userId = "userId_example"; // string | The id of the user the requested time off request belongs to
$timeOffRequestId = "timeOffRequestId_example"; // string | The id of the time off request to update
$body = new \PureCloudPlatform\Client\V2\Model\AdminTimeOffRequestPatch(); // \PureCloudPlatform\Client\V2\Model\AdminTimeOffRequestPatch | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitUserTimeoffrequest($muId, $userId, $timeOffRequestId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitUserTimeoffrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The muId of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **userId** | **string**| The id of the user the requested time off request belongs to |
 **timeOffRequestId** | **string**| The id of the time off request to update |
 **body** | [**\PureCloudPlatform\Client\V2\Model\AdminTimeOffRequestPatch**](../Model/AdminTimeOffRequestPatch.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse**](../Model/TimeOffRequestResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitWeekSchedule**
> \PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse patchWorkforcemanagementManagementunitWeekSchedule($managementUnitId, $weekId, $scheduleId, $forceAsync, $forceDownloadService, $body)

Update a week schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$scheduleId = "scheduleId_example"; // string | The ID of the schedule to update. Use partial uploads of user schedules if activity count in schedule is greater than 17500
$forceAsync = true; // bool | Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes
$forceDownloadService = true; // bool | Force the result of this operation to be sent via download service.  For testing/app development purposes
$body = new \PureCloudPlatform\Client\V2\Model\UpdateWeekScheduleRequest(); // \PureCloudPlatform\Client\V2\Model\UpdateWeekScheduleRequest | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitWeekSchedule($managementUnitId, $weekId, $scheduleId, $forceAsync, $forceDownloadService, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitWeekSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **scheduleId** | **string**| The ID of the schedule to update. Use partial uploads of user schedules if activity count in schedule is greater than 17500 |
 **forceAsync** | **bool**| Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes | [optional]
 **forceDownloadService** | **bool**| Force the result of this operation to be sent via download service.  For testing/app development purposes | [optional]
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateWeekScheduleRequest**](../Model/UpdateWeekScheduleRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse**](../Model/AsyncWeekScheduleResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementManagementunitWorkplan**
> \PureCloudPlatform\Client\V2\Model\WorkPlan patchWorkforcemanagementManagementunitWorkplan($managementUnitId, $workPlanId, $body)

Update a work plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$workPlanId = "workPlanId_example"; // string | The ID of the work plan to update
$body = new \PureCloudPlatform\Client\V2\Model\WorkPlan(); // \PureCloudPlatform\Client\V2\Model\WorkPlan | body

try {
    $result = $apiInstance->patchWorkforcemanagementManagementunitWorkplan($managementUnitId, $workPlanId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementManagementunitWorkplan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **workPlanId** | **string**| The ID of the work plan to update |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WorkPlan**](../Model/WorkPlan.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkPlan**](../Model/WorkPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkforcemanagementTimeoffrequest**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse patchWorkforcemanagementTimeoffrequest($timeOffRequestId, $body)

Update a time off request for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timeOffRequestId = "timeOffRequestId_example"; // string | Time Off Request Id
$body = new \PureCloudPlatform\Client\V2\Model\AgentTimeOffRequestPatch(); // \PureCloudPlatform\Client\V2\Model\AgentTimeOffRequestPatch | body

try {
    $result = $apiInstance->patchWorkforcemanagementTimeoffrequest($timeOffRequestId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->patchWorkforcemanagementTimeoffrequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timeOffRequestId** | **string**| Time Off Request Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\AgentTimeOffRequestPatch**](../Model/AgentTimeOffRequestPatch.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse**](../Model/TimeOffRequestResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementAdherenceHistorical**
> \PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceResponse postWorkforcemanagementAdherenceHistorical($body)

Request a historical adherence report for users across management units



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceQueryForUsers(); // \PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceQueryForUsers | body

try {
    $result = $apiInstance->postWorkforcemanagementAdherenceHistorical($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementAdherenceHistorical: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceQueryForUsers**](../Model/WfmHistoricalAdherenceQueryForUsers.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceResponse**](../Model/WfmHistoricalAdherenceResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitActivitycodes**
> \PureCloudPlatform\Client\V2\Model\ActivityCode postWorkforcemanagementManagementunitActivitycodes($muId, $body)

Create a new activity code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\CreateActivityCodeRequest(); // \PureCloudPlatform\Client\V2\Model\CreateActivityCodeRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitActivitycodes($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitActivitycodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateActivityCodeRequest**](../Model/CreateActivityCodeRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActivityCode**](../Model/ActivityCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitHistoricaladherencequery**
> \PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceResponse postWorkforcemanagementManagementunitHistoricaladherencequery($muId, $body)

Request a historical adherence report

The maximum supported range for historical adherence queries is 31 days, or 7 days with includeExceptions = true

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit
$body = new \PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceQuery(); // \PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceQuery | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitHistoricaladherencequery($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitHistoricaladherencequery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceQuery**](../Model/WfmHistoricalAdherenceQuery.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WfmHistoricalAdherenceResponse**](../Model/WfmHistoricalAdherenceResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitIntraday**
> \PureCloudPlatform\Client\V2\Model\IntradayResponse postWorkforcemanagementManagementunitIntraday($muId, $body)

Get intraday data for the given date for the requested queueIds



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit
$body = new \PureCloudPlatform\Client\V2\Model\IntradayQueryDataCommand(); // \PureCloudPlatform\Client\V2\Model\IntradayQueryDataCommand | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitIntraday($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitIntraday: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit |
 **body** | [**\PureCloudPlatform\Client\V2\Model\IntradayQueryDataCommand**](../Model/IntradayQueryDataCommand.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntradayResponse**](../Model/IntradayResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitMove**
> \PureCloudPlatform\Client\V2\Model\MoveManagementUnitResponse postWorkforcemanagementManagementunitMove($muId, $body)

Move the requested management unit to a new business unit

Returns status 200 if the management unit is already in the requested business unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\MoveManagementUnitRequest(); // \PureCloudPlatform\Client\V2\Model\MoveManagementUnitRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitMove($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MoveManagementUnitRequest**](../Model/MoveManagementUnitRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\MoveManagementUnitResponse**](../Model/MoveManagementUnitResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitSchedulesSearch**
> \PureCloudPlatform\Client\V2\Model\UserScheduleContainer postWorkforcemanagementManagementunitSchedulesSearch($muId, $body)

Query published schedules for given given time range for set of users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The management unit ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\UserListScheduleRequestBody(); // \PureCloudPlatform\Client\V2\Model\UserListScheduleRequestBody | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitSchedulesSearch($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitSchedulesSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The management unit ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserListScheduleRequestBody**](../Model/UserListScheduleRequestBody.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserScheduleContainer**](../Model/UserScheduleContainer.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitServicegoalgroups**
> \PureCloudPlatform\Client\V2\Model\ServiceGoalGroup postWorkforcemanagementManagementunitServicegoalgroups($managementUnitId, $body)

Create a new service goal group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\CreateServiceGoalGroupRequest(); // \PureCloudPlatform\Client\V2\Model\CreateServiceGoalGroupRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitServicegoalgroups($managementUnitId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitServicegoalgroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateServiceGoalGroupRequest**](../Model/CreateServiceGoalGroupRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ServiceGoalGroup**](../Model/ServiceGoalGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitTimeoffrequests**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestList postWorkforcemanagementManagementunitTimeoffrequests($muId, $body)

Create a new time off request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The muId of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\CreateAdminTimeOffRequest(); // \PureCloudPlatform\Client\V2\Model\CreateAdminTimeOffRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitTimeoffrequests($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitTimeoffrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The muId of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateAdminTimeOffRequest**](../Model/CreateAdminTimeOffRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestList**](../Model/TimeOffRequestList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitTimeoffrequestsFetchdetails**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestEntityList postWorkforcemanagementManagementunitTimeoffrequestsFetchdetails($muId, $body)

Gets a list of time off requests from lookup ids



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The muId of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\TimeOffRequestLookupList(); // \PureCloudPlatform\Client\V2\Model\TimeOffRequestLookupList | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitTimeoffrequestsFetchdetails($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitTimeoffrequestsFetchdetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The muId of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TimeOffRequestLookupList**](../Model/TimeOffRequestLookupList.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestEntityList**](../Model/TimeOffRequestEntityList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitTimeoffrequestsQuery**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestLookupList postWorkforcemanagementManagementunitTimeoffrequestsQuery($muId, $body)

Gets the lookup ids to fetch the specified set of requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$muId = "muId_example"; // string | The muId of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\TimeOffRequestQueryBody(); // \PureCloudPlatform\Client\V2\Model\TimeOffRequestQueryBody | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitTimeoffrequestsQuery($muId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitTimeoffrequestsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **muId** | **string**| The muId of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TimeOffRequestQueryBody**](../Model/TimeOffRequestQueryBody.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestLookupList**](../Model/TimeOffRequestLookupList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekScheduleCopy**
> \PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse postWorkforcemanagementManagementunitWeekScheduleCopy($managementUnitId, $weekId, $scheduleId, $forceAsync, $forceDownloadService, $body)

Copy a week schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$scheduleId = "scheduleId_example"; // string | The ID of the schedule to copy from
$forceAsync = true; // bool | Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes
$forceDownloadService = true; // bool | Force the result of this operation to be sent via download service.  For testing/app development purposes
$body = new \PureCloudPlatform\Client\V2\Model\CopyWeekScheduleRequest(); // \PureCloudPlatform\Client\V2\Model\CopyWeekScheduleRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekScheduleCopy($managementUnitId, $weekId, $scheduleId, $forceAsync, $forceDownloadService, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekScheduleCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **scheduleId** | **string**| The ID of the schedule to copy from |
 **forceAsync** | **bool**| Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes | [optional]
 **forceDownloadService** | **bool**| Force the result of this operation to be sent via download service.  For testing/app development purposes | [optional]
 **body** | [**\PureCloudPlatform\Client\V2\Model\CopyWeekScheduleRequest**](../Model/CopyWeekScheduleRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse**](../Model/AsyncWeekScheduleResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekScheduleReschedule**
> \PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse postWorkforcemanagementManagementunitWeekScheduleReschedule($managementUnitId, $weekId, $scheduleId, $body)

Start a scheduling run to compute the reschedule. When the scheduling run finishes, a client can get the reschedule changes and then the client can apply them to the schedule, save the schedule, and mark the scheduling run as applied



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$scheduleId = "scheduleId_example"; // string | The ID of the schedule to re-optimize
$body = new \PureCloudPlatform\Client\V2\Model\RescheduleRequest(); // \PureCloudPlatform\Client\V2\Model\RescheduleRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekScheduleReschedule($managementUnitId, $weekId, $scheduleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekScheduleReschedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **scheduleId** | **string**| The ID of the schedule to re-optimize |
 **body** | [**\PureCloudPlatform\Client\V2\Model\RescheduleRequest**](../Model/RescheduleRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse**](../Model/AsyncWeekScheduleResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekSchedules**
> \PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse postWorkforcemanagementManagementunitWeekSchedules($managementUnitId, $weekId, $forceAsync, $forceDownloadService, $body)

Add a schedule for a week in management unit using imported data. Use partial uploads of user schedules if activity count in schedule is greater than 17500



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$forceAsync = true; // bool | Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes
$forceDownloadService = true; // bool | Force the result of this operation to be sent via download service.  For testing/app development purposes
$body = new \PureCloudPlatform\Client\V2\Model\ImportWeekScheduleRequest(); // \PureCloudPlatform\Client\V2\Model\ImportWeekScheduleRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekSchedules($managementUnitId, $weekId, $forceAsync, $forceDownloadService, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **forceAsync** | **bool**| Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes | [optional]
 **forceDownloadService** | **bool**| Force the result of this operation to be sent via download service.  For testing/app development purposes | [optional]
 **body** | [**\PureCloudPlatform\Client\V2\Model\ImportWeekScheduleRequest**](../Model/ImportWeekScheduleRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncWeekScheduleResponse**](../Model/AsyncWeekScheduleResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekSchedulesGenerate**
> \PureCloudPlatform\Client\V2\Model\GenerateWeekScheduleResponse postWorkforcemanagementManagementunitWeekSchedulesGenerate($managementUnitId, $weekId, $body)

Generate a week schedule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$body = new \PureCloudPlatform\Client\V2\Model\GenerateWeekScheduleRequest(); // \PureCloudPlatform\Client\V2\Model\GenerateWeekScheduleRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekSchedulesGenerate($managementUnitId, $weekId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekSchedulesGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\GenerateWeekScheduleRequest**](../Model/GenerateWeekScheduleRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GenerateWeekScheduleResponse**](../Model/GenerateWeekScheduleResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekSchedulesPartialupload**
> \PureCloudPlatform\Client\V2\Model\PartialUploadResponse postWorkforcemanagementManagementunitWeekSchedulesPartialupload($managementUnitId, $weekId, $body)

Partial upload of user schedules where activity count is greater than 17500



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$weekId = "weekId_example"; // string | First day of schedule week in yyyy-MM-dd format.
$body = new \PureCloudPlatform\Client\V2\Model\UserSchedulesPartialUploadRequest(); // \PureCloudPlatform\Client\V2\Model\UserSchedulesPartialUploadRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekSchedulesPartialupload($managementUnitId, $weekId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekSchedulesPartialupload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **weekId** | **string**| First day of schedule week in yyyy-MM-dd format. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserSchedulesPartialUploadRequest**](../Model/UserSchedulesPartialUploadRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PartialUploadResponse**](../Model/PartialUploadResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekShorttermforecastCopy**
> \PureCloudPlatform\Client\V2\Model\ShortTermForecastResponse postWorkforcemanagementManagementunitWeekShorttermforecastCopy($managementUnitId, $weekDateId, $forecastId, $body, $forceAsync)

Copy a short term forecast



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format
$forecastId = "forecastId_example"; // string | The ID of the forecast to copy
$body = new \PureCloudPlatform\Client\V2\Model\CopyShortTermForecastRequest(); // \PureCloudPlatform\Client\V2\Model\CopyShortTermForecastRequest | body
$forceAsync = true; // bool | Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekShorttermforecastCopy($managementUnitId, $weekDateId, $forecastId, $body, $forceAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekShorttermforecastCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |
 **forecastId** | **string**| The ID of the forecast to copy |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CopyShortTermForecastRequest**](../Model/CopyShortTermForecastRequest.md)| body |
 **forceAsync** | **bool**| Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ShortTermForecastResponse**](../Model/ShortTermForecastResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekShorttermforecasts**
> \PureCloudPlatform\Client\V2\Model\ShortTermForecastResponse postWorkforcemanagementManagementunitWeekShorttermforecasts($managementUnitId, $weekDateId, $body, $forceAsync)

Import a short term forecast



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format
$body = new \PureCloudPlatform\Client\V2\Model\ImportShortTermForecastRequest(); // \PureCloudPlatform\Client\V2\Model\ImportShortTermForecastRequest | body
$forceAsync = true; // bool | Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekShorttermforecasts($managementUnitId, $weekDateId, $body, $forceAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekShorttermforecasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ImportShortTermForecastRequest**](../Model/ImportShortTermForecastRequest.md)| body |
 **forceAsync** | **bool**| Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ShortTermForecastResponse**](../Model/ShortTermForecastResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekShorttermforecastsGenerate**
> \PureCloudPlatform\Client\V2\Model\GenerateShortTermForecastResponse postWorkforcemanagementManagementunitWeekShorttermforecastsGenerate($managementUnitId, $weekDateId, $body, $forceAsync)

Generate a short term forecast



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format
$body = new \PureCloudPlatform\Client\V2\Model\GenerateShortTermForecastRequest(); // \PureCloudPlatform\Client\V2\Model\GenerateShortTermForecastRequest | 
$forceAsync = true; // bool | Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekShorttermforecastsGenerate($managementUnitId, $weekDateId, $body, $forceAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekShorttermforecastsGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |
 **body** | [**\PureCloudPlatform\Client\V2\Model\GenerateShortTermForecastRequest**](../Model/GenerateShortTermForecastRequest.md)|  |
 **forceAsync** | **bool**| Force the result of this operation to be sent asynchronously via notification.  For testing/app development purposes | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GenerateShortTermForecastResponse**](../Model/GenerateShortTermForecastResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWeekShorttermforecastsPartialupload**
> \PureCloudPlatform\Client\V2\Model\PartialUploadResponse postWorkforcemanagementManagementunitWeekShorttermforecastsPartialupload($managementUnitId, $weekDateId, $body)

Import a short term forecast



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The management unit ID of the management unit to which the forecast belongs
$weekDateId = "weekDateId_example"; // string | The week start date of the forecast in yyyy-MM-dd format
$body = new \PureCloudPlatform\Client\V2\Model\RouteGroupList(); // \PureCloudPlatform\Client\V2\Model\RouteGroupList | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWeekShorttermforecastsPartialupload($managementUnitId, $weekDateId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWeekShorttermforecastsPartialupload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The management unit ID of the management unit to which the forecast belongs |
 **weekDateId** | **string**| The week start date of the forecast in yyyy-MM-dd format |
 **body** | [**\PureCloudPlatform\Client\V2\Model\RouteGroupList**](../Model/RouteGroupList.md)| body |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PartialUploadResponse**](../Model/PartialUploadResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWorkplanCopy**
> \PureCloudPlatform\Client\V2\Model\WorkPlan postWorkforcemanagementManagementunitWorkplanCopy($managementUnitId, $workPlanId, $body)

Create a copy of work plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$workPlanId = "workPlanId_example"; // string | The ID of the work plan to create a copy
$body = new \PureCloudPlatform\Client\V2\Model\CopyWorkPlan(); // \PureCloudPlatform\Client\V2\Model\CopyWorkPlan | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWorkplanCopy($managementUnitId, $workPlanId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWorkplanCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **workPlanId** | **string**| The ID of the work plan to create a copy |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CopyWorkPlan**](../Model/CopyWorkPlan.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkPlan**](../Model/WorkPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunitWorkplans**
> \PureCloudPlatform\Client\V2\Model\WorkPlan postWorkforcemanagementManagementunitWorkplans($managementUnitId, $body)

Create a new work plan



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$managementUnitId = "managementUnitId_example"; // string | The ID of the management unit, or 'mine' for the management unit of the logged-in user.
$body = new \PureCloudPlatform\Client\V2\Model\CreateWorkPlan(); // \PureCloudPlatform\Client\V2\Model\CreateWorkPlan | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunitWorkplans($managementUnitId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunitWorkplans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **managementUnitId** | **string**| The ID of the management unit, or &#39;mine&#39; for the management unit of the logged-in user. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateWorkPlan**](../Model/CreateWorkPlan.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkPlan**](../Model/WorkPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementManagementunits**
> \PureCloudPlatform\Client\V2\Model\ManagementUnit postWorkforcemanagementManagementunits($body)

Add a management unit



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateManagementUnitApiRequest(); // \PureCloudPlatform\Client\V2\Model\CreateManagementUnitApiRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementManagementunits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementManagementunits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateManagementUnitApiRequest**](../Model/CreateManagementUnitApiRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ManagementUnit**](../Model/ManagementUnit.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementNotificationsUpdate**
> \PureCloudPlatform\Client\V2\Model\UpdateNotificationsResponse postWorkforcemanagementNotificationsUpdate($body)

Mark a list of notifications as read or unread



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UpdateNotificationsRequest(); // \PureCloudPlatform\Client\V2\Model\UpdateNotificationsRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementNotificationsUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementNotificationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateNotificationsRequest**](../Model/UpdateNotificationsRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UpdateNotificationsResponse**](../Model/UpdateNotificationsResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementSchedules**
> \PureCloudPlatform\Client\V2\Model\UserScheduleContainer postWorkforcemanagementSchedules($body)

Get published schedule for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CurrentUserScheduleRequestBody(); // \PureCloudPlatform\Client\V2\Model\CurrentUserScheduleRequestBody | body

try {
    $result = $apiInstance->postWorkforcemanagementSchedules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CurrentUserScheduleRequestBody**](../Model/CurrentUserScheduleRequestBody.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserScheduleContainer**](../Model/UserScheduleContainer.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkforcemanagementTimeoffrequests**
> \PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse postWorkforcemanagementTimeoffrequests($body)

Create a time off request for the current user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WorkforceManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateAgentTimeOffRequest(); // \PureCloudPlatform\Client\V2\Model\CreateAgentTimeOffRequest | body

try {
    $result = $apiInstance->postWorkforcemanagementTimeoffrequests($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkforceManagementApi->postWorkforcemanagementTimeoffrequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateAgentTimeOffRequest**](../Model/CreateAgentTimeOffRequest.md)| body | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeOffRequestResponse**](../Model/TimeOffRequestResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

