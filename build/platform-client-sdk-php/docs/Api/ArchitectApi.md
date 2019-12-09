# PureCloudPlatform\Client\V2\ArchitectApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteArchitectEmergencygroup**](ArchitectApi.md#deleteArchitectEmergencygroup) | **DELETE** /api/v2/architect/emergencygroups/{emergencyGroupId} | Deletes a emergency group by ID
[**deleteArchitectIvr**](ArchitectApi.md#deleteArchitectIvr) | **DELETE** /api/v2/architect/ivrs/{ivrId} | Delete an IVR Config.
[**deleteArchitectPrompt**](ArchitectApi.md#deleteArchitectPrompt) | **DELETE** /api/v2/architect/prompts/{promptId} | Delete specified user prompt
[**deleteArchitectPromptResource**](ArchitectApi.md#deleteArchitectPromptResource) | **DELETE** /api/v2/architect/prompts/{promptId}/resources/{languageCode} | Delete specified user prompt resource
[**deleteArchitectPromptResourceAudio**](ArchitectApi.md#deleteArchitectPromptResourceAudio) | **DELETE** /api/v2/architect/prompts/{promptId}/resources/{languageCode}/audio | Delete specified user prompt resource audio
[**deleteArchitectPrompts**](ArchitectApi.md#deleteArchitectPrompts) | **DELETE** /api/v2/architect/prompts | Batch-delete a list of prompts
[**deleteArchitectSchedule**](ArchitectApi.md#deleteArchitectSchedule) | **DELETE** /api/v2/architect/schedules/{scheduleId} | Delete a schedule by id
[**deleteArchitectSchedulegroup**](ArchitectApi.md#deleteArchitectSchedulegroup) | **DELETE** /api/v2/architect/schedulegroups/{scheduleGroupId} | Deletes a schedule group by ID
[**deleteArchitectSystempromptResource**](ArchitectApi.md#deleteArchitectSystempromptResource) | **DELETE** /api/v2/architect/systemprompts/{promptId}/resources/{languageCode} | Delete a system prompt resource override.
[**deleteFlow**](ArchitectApi.md#deleteFlow) | **DELETE** /api/v2/flows/{flowId} | Delete flow
[**deleteFlows**](ArchitectApi.md#deleteFlows) | **DELETE** /api/v2/flows | Batch-delete a list of flows
[**deleteFlowsDatatable**](ArchitectApi.md#deleteFlowsDatatable) | **DELETE** /api/v2/flows/datatables/{datatableId} | deletes a specific datatable by id
[**deleteFlowsDatatableRow**](ArchitectApi.md#deleteFlowsDatatableRow) | **DELETE** /api/v2/flows/datatables/{datatableId}/rows/{rowId} | Delete a row entry
[**getArchitectDependencytracking**](ArchitectApi.md#getArchitectDependencytracking) | **GET** /api/v2/architect/dependencytracking | Get Dependency Tracking objects that have a given display name
[**getArchitectDependencytrackingBuild**](ArchitectApi.md#getArchitectDependencytrackingBuild) | **GET** /api/v2/architect/dependencytracking/build | Get Dependency Tracking build status for an organization
[**getArchitectDependencytrackingConsumedresources**](ArchitectApi.md#getArchitectDependencytrackingConsumedresources) | **GET** /api/v2/architect/dependencytracking/consumedresources | Get resources that are consumed by a given Dependency Tracking object
[**getArchitectDependencytrackingConsumingresources**](ArchitectApi.md#getArchitectDependencytrackingConsumingresources) | **GET** /api/v2/architect/dependencytracking/consumingresources | Get resources that consume a given Dependency Tracking object
[**getArchitectDependencytrackingDeletedresourceconsumers**](ArchitectApi.md#getArchitectDependencytrackingDeletedresourceconsumers) | **GET** /api/v2/architect/dependencytracking/deletedresourceconsumers | Get Dependency Tracking objects that consume deleted resources
[**getArchitectDependencytrackingObject**](ArchitectApi.md#getArchitectDependencytrackingObject) | **GET** /api/v2/architect/dependencytracking/object | Get a Dependency Tracking object
[**getArchitectDependencytrackingType**](ArchitectApi.md#getArchitectDependencytrackingType) | **GET** /api/v2/architect/dependencytracking/types/{typeId} | Get a Dependency Tracking type.
[**getArchitectDependencytrackingTypes**](ArchitectApi.md#getArchitectDependencytrackingTypes) | **GET** /api/v2/architect/dependencytracking/types | Get Dependency Tracking types.
[**getArchitectDependencytrackingUpdatedresourceconsumers**](ArchitectApi.md#getArchitectDependencytrackingUpdatedresourceconsumers) | **GET** /api/v2/architect/dependencytracking/updatedresourceconsumers | Get Dependency Tracking objects that depend on updated resources
[**getArchitectEmergencygroup**](ArchitectApi.md#getArchitectEmergencygroup) | **GET** /api/v2/architect/emergencygroups/{emergencyGroupId} | Gets a emergency group by ID
[**getArchitectEmergencygroups**](ArchitectApi.md#getArchitectEmergencygroups) | **GET** /api/v2/architect/emergencygroups | Get a list of emergency groups.
[**getArchitectIvr**](ArchitectApi.md#getArchitectIvr) | **GET** /api/v2/architect/ivrs/{ivrId} | Get an IVR config.
[**getArchitectIvrs**](ArchitectApi.md#getArchitectIvrs) | **GET** /api/v2/architect/ivrs | Get IVR configs.
[**getArchitectPrompt**](ArchitectApi.md#getArchitectPrompt) | **GET** /api/v2/architect/prompts/{promptId} | Get specified user prompt
[**getArchitectPromptHistoryHistoryId**](ArchitectApi.md#getArchitectPromptHistoryHistoryId) | **GET** /api/v2/architect/prompts/{promptId}/history/{historyId} | Get generated prompt history
[**getArchitectPromptResource**](ArchitectApi.md#getArchitectPromptResource) | **GET** /api/v2/architect/prompts/{promptId}/resources/{languageCode} | Get specified user prompt resource
[**getArchitectPromptResources**](ArchitectApi.md#getArchitectPromptResources) | **GET** /api/v2/architect/prompts/{promptId}/resources | Get a pageable list of user prompt resources
[**getArchitectPrompts**](ArchitectApi.md#getArchitectPrompts) | **GET** /api/v2/architect/prompts | Get a pageable list of user prompts
[**getArchitectSchedule**](ArchitectApi.md#getArchitectSchedule) | **GET** /api/v2/architect/schedules/{scheduleId} | Get a schedule by ID
[**getArchitectSchedulegroup**](ArchitectApi.md#getArchitectSchedulegroup) | **GET** /api/v2/architect/schedulegroups/{scheduleGroupId} | Gets a schedule group by ID
[**getArchitectSchedulegroups**](ArchitectApi.md#getArchitectSchedulegroups) | **GET** /api/v2/architect/schedulegroups | Get a list of schedule groups.
[**getArchitectSchedules**](ArchitectApi.md#getArchitectSchedules) | **GET** /api/v2/architect/schedules | Get a list of schedules.
[**getArchitectSystemprompt**](ArchitectApi.md#getArchitectSystemprompt) | **GET** /api/v2/architect/systemprompts/{promptId} | Get a system prompt
[**getArchitectSystempromptHistoryHistoryId**](ArchitectApi.md#getArchitectSystempromptHistoryHistoryId) | **GET** /api/v2/architect/systemprompts/{promptId}/history/{historyId} | Get generated prompt history
[**getArchitectSystempromptResource**](ArchitectApi.md#getArchitectSystempromptResource) | **GET** /api/v2/architect/systemprompts/{promptId}/resources/{languageCode} | Get a system prompt resource.
[**getArchitectSystempromptResources**](ArchitectApi.md#getArchitectSystempromptResources) | **GET** /api/v2/architect/systemprompts/{promptId}/resources | Get system prompt resources.
[**getArchitectSystemprompts**](ArchitectApi.md#getArchitectSystemprompts) | **GET** /api/v2/architect/systemprompts | Get System Prompts
[**getFlow**](ArchitectApi.md#getFlow) | **GET** /api/v2/flows/{flowId} | Get flow
[**getFlowHistoryHistoryId**](ArchitectApi.md#getFlowHistoryHistoryId) | **GET** /api/v2/flows/{flowId}/history/{historyId} | Get generated flow history
[**getFlowLatestconfiguration**](ArchitectApi.md#getFlowLatestconfiguration) | **GET** /api/v2/flows/{flowId}/latestconfiguration | Get the latest configuration for flow
[**getFlowVersion**](ArchitectApi.md#getFlowVersion) | **GET** /api/v2/flows/{flowId}/versions/{versionId} | Get flow version
[**getFlowVersionConfiguration**](ArchitectApi.md#getFlowVersionConfiguration) | **GET** /api/v2/flows/{flowId}/versions/{versionId}/configuration | Create flow version configuration
[**getFlowVersions**](ArchitectApi.md#getFlowVersions) | **GET** /api/v2/flows/{flowId}/versions | Get flow version list
[**getFlows**](ArchitectApi.md#getFlows) | **GET** /api/v2/flows | Get a pageable list of flows, filtered by query parameters
[**getFlowsDatatable**](ArchitectApi.md#getFlowsDatatable) | **GET** /api/v2/flows/datatables/{datatableId} | Returns a specific datatable by id
[**getFlowsDatatableRow**](ArchitectApi.md#getFlowsDatatableRow) | **GET** /api/v2/flows/datatables/{datatableId}/rows/{rowId} | Returns a specific row for the datatable
[**getFlowsDatatableRows**](ArchitectApi.md#getFlowsDatatableRows) | **GET** /api/v2/flows/datatables/{datatableId}/rows | Returns the rows for the datatable with the given id
[**getFlowsDatatables**](ArchitectApi.md#getFlowsDatatables) | **GET** /api/v2/flows/datatables | Retrieve a list of datatables for the org
[**getFlowsDivisionviews**](ArchitectApi.md#getFlowsDivisionviews) | **GET** /api/v2/flows/divisionviews | Get a pageable list of basic flow information objects filterable by query parameters.
[**getFlowsOutcome**](ArchitectApi.md#getFlowsOutcome) | **GET** /api/v2/flows/outcomes/{flowOutcomeId} | Get a flow outcome
[**getFlowsOutcomes**](ArchitectApi.md#getFlowsOutcomes) | **GET** /api/v2/flows/outcomes | Get a pageable list of flow outcomes, filtered by query parameters
[**postArchitectDependencytrackingBuild**](ArchitectApi.md#postArchitectDependencytrackingBuild) | **POST** /api/v2/architect/dependencytracking/build | Rebuild Dependency Tracking data for an organization
[**postArchitectEmergencygroups**](ArchitectApi.md#postArchitectEmergencygroups) | **POST** /api/v2/architect/emergencygroups | Creates a new emergency group
[**postArchitectIvrs**](ArchitectApi.md#postArchitectIvrs) | **POST** /api/v2/architect/ivrs | Create IVR config.
[**postArchitectPromptHistory**](ArchitectApi.md#postArchitectPromptHistory) | **POST** /api/v2/architect/prompts/{promptId}/history | Generate prompt history
[**postArchitectPromptResources**](ArchitectApi.md#postArchitectPromptResources) | **POST** /api/v2/architect/prompts/{promptId}/resources | Create a new user prompt resource
[**postArchitectPrompts**](ArchitectApi.md#postArchitectPrompts) | **POST** /api/v2/architect/prompts | Create a new user prompt
[**postArchitectSchedulegroups**](ArchitectApi.md#postArchitectSchedulegroups) | **POST** /api/v2/architect/schedulegroups | Creates a new schedule group
[**postArchitectSchedules**](ArchitectApi.md#postArchitectSchedules) | **POST** /api/v2/architect/schedules | Create a new schedule.
[**postArchitectSystempromptHistory**](ArchitectApi.md#postArchitectSystempromptHistory) | **POST** /api/v2/architect/systemprompts/{promptId}/history | Generate system prompt history
[**postArchitectSystempromptResources**](ArchitectApi.md#postArchitectSystempromptResources) | **POST** /api/v2/architect/systemprompts/{promptId}/resources | Create system prompt resource override.
[**postFlowVersions**](ArchitectApi.md#postFlowVersions) | **POST** /api/v2/flows/{flowId}/versions | Create flow version
[**postFlows**](ArchitectApi.md#postFlows) | **POST** /api/v2/flows | Create flow
[**postFlowsActionsCheckin**](ArchitectApi.md#postFlowsActionsCheckin) | **POST** /api/v2/flows/actions/checkin | Check-in flow
[**postFlowsActionsCheckout**](ArchitectApi.md#postFlowsActionsCheckout) | **POST** /api/v2/flows/actions/checkout | Check-out flow
[**postFlowsActionsDeactivate**](ArchitectApi.md#postFlowsActionsDeactivate) | **POST** /api/v2/flows/actions/deactivate | Deactivate flow
[**postFlowsActionsPublish**](ArchitectApi.md#postFlowsActionsPublish) | **POST** /api/v2/flows/actions/publish | Publish flow
[**postFlowsActionsRevert**](ArchitectApi.md#postFlowsActionsRevert) | **POST** /api/v2/flows/actions/revert | Revert flow
[**postFlowsActionsUnlock**](ArchitectApi.md#postFlowsActionsUnlock) | **POST** /api/v2/flows/actions/unlock | Unlock flow
[**postFlowsDatatableRows**](ArchitectApi.md#postFlowsDatatableRows) | **POST** /api/v2/flows/datatables/{datatableId}/rows | Create a new row entry for the datatable.
[**postFlowsDatatables**](ArchitectApi.md#postFlowsDatatables) | **POST** /api/v2/flows/datatables | Create a new datatable with the specified json-schema definition
[**postFlowsOutcomes**](ArchitectApi.md#postFlowsOutcomes) | **POST** /api/v2/flows/outcomes | Create a flow outcome
[**putArchitectEmergencygroup**](ArchitectApi.md#putArchitectEmergencygroup) | **PUT** /api/v2/architect/emergencygroups/{emergencyGroupId} | Updates a emergency group by ID
[**putArchitectIvr**](ArchitectApi.md#putArchitectIvr) | **PUT** /api/v2/architect/ivrs/{ivrId} | Update an IVR Config.
[**putArchitectPrompt**](ArchitectApi.md#putArchitectPrompt) | **PUT** /api/v2/architect/prompts/{promptId} | Update specified user prompt
[**putArchitectPromptResource**](ArchitectApi.md#putArchitectPromptResource) | **PUT** /api/v2/architect/prompts/{promptId}/resources/{languageCode} | Update specified user prompt resource
[**putArchitectSchedule**](ArchitectApi.md#putArchitectSchedule) | **PUT** /api/v2/architect/schedules/{scheduleId} | Update schedule by ID
[**putArchitectSchedulegroup**](ArchitectApi.md#putArchitectSchedulegroup) | **PUT** /api/v2/architect/schedulegroups/{scheduleGroupId} | Updates a schedule group by ID
[**putArchitectSystempromptResource**](ArchitectApi.md#putArchitectSystempromptResource) | **PUT** /api/v2/architect/systemprompts/{promptId}/resources/{languageCode} | Updates a system prompt resource override.
[**putFlow**](ArchitectApi.md#putFlow) | **PUT** /api/v2/flows/{flowId} | Update flow
[**putFlowsDatatable**](ArchitectApi.md#putFlowsDatatable) | **PUT** /api/v2/flows/datatables/{datatableId} | Updates a specific datatable by id
[**putFlowsDatatableRow**](ArchitectApi.md#putFlowsDatatableRow) | **PUT** /api/v2/flows/datatables/{datatableId}/rows/{rowId} | Update a row entry
[**putFlowsOutcome**](ArchitectApi.md#putFlowsOutcome) | **PUT** /api/v2/flows/outcomes/{flowOutcomeId} | Updates a flow outcome


# **deleteArchitectEmergencygroup**
> deleteArchitectEmergencygroup($emergencyGroupId)

Deletes a emergency group by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emergencyGroupId = "emergencyGroupId_example"; // string | Emergency group ID

try {
    $apiInstance->deleteArchitectEmergencygroup($emergencyGroupId);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectEmergencygroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emergencyGroupId** | **string**| Emergency group ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectIvr**
> deleteArchitectIvr($ivrId)

Delete an IVR Config.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ivrId = "ivrId_example"; // string | IVR id

try {
    $apiInstance->deleteArchitectIvr($ivrId);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectIvr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ivrId** | **string**| IVR id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectPrompt**
> deleteArchitectPrompt($promptId, $allResources)

Delete specified user prompt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$allResources = true; // bool | Whether or not to delete all the prompt resources

try {
    $apiInstance->deleteArchitectPrompt($promptId, $allResources);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **allResources** | **bool**| Whether or not to delete all the prompt resources | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectPromptResource**
> deleteArchitectPromptResource($promptId, $languageCode)

Delete specified user prompt resource



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language

try {
    $apiInstance->deleteArchitectPromptResource($promptId, $languageCode);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectPromptResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectPromptResourceAudio**
> deleteArchitectPromptResourceAudio($promptId, $languageCode)

Delete specified user prompt resource audio



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language

try {
    $apiInstance->deleteArchitectPromptResourceAudio($promptId, $languageCode);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectPromptResourceAudio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectPrompts**
> \PureCloudPlatform\Client\V2\Model\Operation deleteArchitectPrompts($id)

Batch-delete a list of prompts

Multiple IDs can be specified, in which case all specified prompts will be deleted.  Asynchronous.  Notification topic: v2.architect.prompts.{promptId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | List of Prompt IDs

try {
    $result = $apiInstance->deleteArchitectPrompts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectPrompts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| List of Prompt IDs |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectSchedule**
> deleteArchitectSchedule($scheduleId)

Delete a schedule by id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $apiInstance->deleteArchitectSchedule($scheduleId);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectSchedule: ', $e->getMessage(), PHP_EOL;
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

# **deleteArchitectSchedulegroup**
> deleteArchitectSchedulegroup($scheduleGroupId)

Deletes a schedule group by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleGroupId = "scheduleGroupId_example"; // string | Schedule group ID

try {
    $apiInstance->deleteArchitectSchedulegroup($scheduleGroupId);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectSchedulegroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleGroupId** | **string**| Schedule group ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteArchitectSystempromptResource**
> deleteArchitectSystempromptResource($promptId, $languageCode)

Delete a system prompt resource override.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language

try {
    $apiInstance->deleteArchitectSystempromptResource($promptId, $languageCode);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteArchitectSystempromptResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlow**
> deleteFlow($flowId)

Delete flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID

try {
    $apiInstance->deleteFlow($flowId);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlows**
> \PureCloudPlatform\Client\V2\Model\Operation deleteFlows($id)

Batch-delete a list of flows

Multiple IDs can be specified, in which case all specified flows will be deleted.  Asynchronous.  Notification topic: v2.flows.{flowId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | List of Flow IDs

try {
    $result = $apiInstance->deleteFlows($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteFlows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| List of Flow IDs |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlowsDatatable**
> deleteFlowsDatatable($datatableId, $force)

deletes a specific datatable by id

Deletes an entire datatable (including the schema and data) with a given datatableId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$force = false; // bool | force delete, even if in use

try {
    $apiInstance->deleteFlowsDatatable($datatableId, $force);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteFlowsDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **force** | **bool**| force delete, even if in use | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlowsDatatableRow**
> deleteFlowsDatatableRow($datatableId, $rowId)

Delete a row entry

Deletes a row with a given rowId (the value of the key field).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$rowId = "rowId_example"; // string | the key for the row

try {
    $apiInstance->deleteFlowsDatatableRow($datatableId, $rowId);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->deleteFlowsDatatableRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **rowId** | **string**| the key for the row |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytracking**
> \PureCloudPlatform\Client\V2\Model\DependencyObjectEntityListing getArchitectDependencytracking($name, $pageNumber, $pageSize, $objectType, $consumedResources, $consumingResources, $consumedResourceType, $consumingResourceType)

Get Dependency Tracking objects that have a given display name



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Object name to search for
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$objectType = array("objectType_example"); // string[] | Object type(s) to search for
$consumedResources = true; // bool | Include resources each result item consumes
$consumingResources = true; // bool | Include resources that consume each result item
$consumedResourceType = array("consumedResourceType_example"); // string[] | Types of consumed resources to return, if consumed resources are requested
$consumingResourceType = array("consumingResourceType_example"); // string[] | Types of consuming resources to return, if consuming resources are requested

try {
    $result = $apiInstance->getArchitectDependencytracking($name, $pageNumber, $pageSize, $objectType, $consumedResources, $consumingResources, $consumedResourceType, $consumingResourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Object name to search for |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **objectType** | [**string[]**](../Model/string.md)| Object type(s) to search for | [optional]
 **consumedResources** | **bool**| Include resources each result item consumes | [optional]
 **consumingResources** | **bool**| Include resources that consume each result item | [optional]
 **consumedResourceType** | [**string[]**](../Model/string.md)| Types of consumed resources to return, if consumed resources are requested | [optional]
 **consumingResourceType** | [**string[]**](../Model/string.md)| Types of consuming resources to return, if consuming resources are requested | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyObjectEntityListing**](../Model/DependencyObjectEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingBuild**
> \PureCloudPlatform\Client\V2\Model\DependencyStatus getArchitectDependencytrackingBuild()

Get Dependency Tracking build status for an organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getArchitectDependencytrackingBuild();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyStatus**](../Model/DependencyStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingConsumedresources**
> \PureCloudPlatform\Client\V2\Model\ConsumedResourcesEntityListing getArchitectDependencytrackingConsumedresources($id, $version, $objectType, $resourceType, $pageNumber, $pageSize)

Get resources that are consumed by a given Dependency Tracking object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Consuming object ID
$version = "version_example"; // string | Consuming object version
$objectType = "objectType_example"; // string | Consuming object type.  Only versioned types are allowed here.
$resourceType = array("resourceType_example"); // string[] | Types of consumed resources to show
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getArchitectDependencytrackingConsumedresources($id, $version, $objectType, $resourceType, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingConsumedresources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Consuming object ID |
 **version** | **string**| Consuming object version |
 **objectType** | **string**| Consuming object type.  Only versioned types are allowed here. |
 **resourceType** | [**string[]**](../Model/string.md)| Types of consumed resources to show | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConsumedResourcesEntityListing**](../Model/ConsumedResourcesEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingConsumingresources**
> \PureCloudPlatform\Client\V2\Model\ConsumingResourcesEntityListing getArchitectDependencytrackingConsumingresources($id, $objectType, $resourceType, $pageNumber, $pageSize, $flowFilter)

Get resources that consume a given Dependency Tracking object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Consumed object ID
$objectType = "objectType_example"; // string | Consumed object type
$resourceType = array("resourceType_example"); // string[] | Types of consuming resources to show.  Only versioned types are allowed here.
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$flowFilter = "flowFilter_example"; // string | Show only checkedIn or published flows

try {
    $result = $apiInstance->getArchitectDependencytrackingConsumingresources($id, $objectType, $resourceType, $pageNumber, $pageSize, $flowFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingConsumingresources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Consumed object ID |
 **objectType** | **string**| Consumed object type |
 **resourceType** | [**string[]**](../Model/string.md)| Types of consuming resources to show.  Only versioned types are allowed here. | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **flowFilter** | **string**| Show only checkedIn or published flows | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConsumingResourcesEntityListing**](../Model/ConsumingResourcesEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingDeletedresourceconsumers**
> \PureCloudPlatform\Client\V2\Model\DependencyObjectEntityListing getArchitectDependencytrackingDeletedresourceconsumers($name, $objectType, $flowFilter, $consumedResources, $consumedResourceType, $pageNumber, $pageSize)

Get Dependency Tracking objects that consume deleted resources



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name to search for
$objectType = array("objectType_example"); // string[] | Object type(s) to search for
$flowFilter = "flowFilter_example"; // string | Show only checkedIn or published flows
$consumedResources = false; // bool | Return consumed resources?
$consumedResourceType = array("consumedResourceType_example"); // string[] | Resource type(s) to return
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getArchitectDependencytrackingDeletedresourceconsumers($name, $objectType, $flowFilter, $consumedResources, $consumedResourceType, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingDeletedresourceconsumers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name to search for | [optional]
 **objectType** | [**string[]**](../Model/string.md)| Object type(s) to search for | [optional]
 **flowFilter** | **string**| Show only checkedIn or published flows | [optional]
 **consumedResources** | **bool**| Return consumed resources? | [optional] [default to false]
 **consumedResourceType** | [**string[]**](../Model/string.md)| Resource type(s) to return | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyObjectEntityListing**](../Model/DependencyObjectEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingObject**
> \PureCloudPlatform\Client\V2\Model\DependencyObject getArchitectDependencytrackingObject($id, $version, $objectType, $consumedResources, $consumingResources, $consumedResourceType, $consumingResourceType)

Get a Dependency Tracking object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Object ID
$version = "version_example"; // string | Object version
$objectType = "objectType_example"; // string | Object type
$consumedResources = true; // bool | Include resources this item consumes
$consumingResources = true; // bool | Include resources that consume this item
$consumedResourceType = array("consumedResourceType_example"); // string[] | Types of consumed resources to return, if consumed resources are requested
$consumingResourceType = array("consumingResourceType_example"); // string[] | Types of consuming resources to return, if consuming resources are requested

try {
    $result = $apiInstance->getArchitectDependencytrackingObject($id, $version, $objectType, $consumedResources, $consumingResources, $consumedResourceType, $consumingResourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Object ID |
 **version** | **string**| Object version | [optional]
 **objectType** | **string**| Object type | [optional]
 **consumedResources** | **bool**| Include resources this item consumes | [optional]
 **consumingResources** | **bool**| Include resources that consume this item | [optional]
 **consumedResourceType** | [**string[]**](../Model/string.md)| Types of consumed resources to return, if consumed resources are requested | [optional]
 **consumingResourceType** | [**string[]**](../Model/string.md)| Types of consuming resources to return, if consuming resources are requested | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyObject**](../Model/DependencyObject.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingType**
> \PureCloudPlatform\Client\V2\Model\DependencyType getArchitectDependencytrackingType($typeId)

Get a Dependency Tracking type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$typeId = "typeId_example"; // string | Type ID

try {
    $result = $apiInstance->getArchitectDependencytrackingType($typeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **typeId** | **string**| Type ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyType**](../Model/DependencyType.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingTypes**
> \PureCloudPlatform\Client\V2\Model\DependencyTypeEntityListing getArchitectDependencytrackingTypes($pageNumber, $pageSize)

Get Dependency Tracking types.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getArchitectDependencytrackingTypes($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyTypeEntityListing**](../Model/DependencyTypeEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectDependencytrackingUpdatedresourceconsumers**
> \PureCloudPlatform\Client\V2\Model\DependencyObjectEntityListing getArchitectDependencytrackingUpdatedresourceconsumers($name, $objectType, $consumedResources, $consumedResourceType, $pageNumber, $pageSize)

Get Dependency Tracking objects that depend on updated resources



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Name to search for
$objectType = array("objectType_example"); // string[] | Object type(s) to search for
$consumedResources = false; // bool | Return consumed resources?
$consumedResourceType = array("consumedResourceType_example"); // string[] | Resource type(s) to return
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getArchitectDependencytrackingUpdatedresourceconsumers($name, $objectType, $consumedResources, $consumedResourceType, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectDependencytrackingUpdatedresourceconsumers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name to search for | [optional]
 **objectType** | [**string[]**](../Model/string.md)| Object type(s) to search for | [optional]
 **consumedResources** | **bool**| Return consumed resources? | [optional] [default to false]
 **consumedResourceType** | [**string[]**](../Model/string.md)| Resource type(s) to return | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DependencyObjectEntityListing**](../Model/DependencyObjectEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectEmergencygroup**
> \PureCloudPlatform\Client\V2\Model\EmergencyGroup getArchitectEmergencygroup($emergencyGroupId)

Gets a emergency group by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emergencyGroupId = "emergencyGroupId_example"; // string | Emergency group ID

try {
    $result = $apiInstance->getArchitectEmergencygroup($emergencyGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectEmergencygroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emergencyGroupId** | **string**| Emergency group ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmergencyGroup**](../Model/EmergencyGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectEmergencygroups**
> \PureCloudPlatform\Client\V2\Model\EmergencyGroupListing getArchitectEmergencygroups($pageNumber, $pageSize, $sortBy, $sortOrder, $name)

Get a list of emergency groups.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$name = "name_example"; // string | Name of the Emergency Group to filter by.

try {
    $result = $apiInstance->getArchitectEmergencygroups($pageNumber, $pageSize, $sortBy, $sortOrder, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectEmergencygroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **name** | **string**| Name of the Emergency Group to filter by. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmergencyGroupListing**](../Model/EmergencyGroupListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectIvr**
> \PureCloudPlatform\Client\V2\Model\IVR getArchitectIvr($ivrId)

Get an IVR config.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ivrId = "ivrId_example"; // string | IVR id

try {
    $result = $apiInstance->getArchitectIvr($ivrId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectIvr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ivrId** | **string**| IVR id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IVR**](../Model/IVR.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectIvrs**
> \PureCloudPlatform\Client\V2\Model\IVREntityListing getArchitectIvrs($pageNumber, $pageSize, $sortBy, $sortOrder, $name)

Get IVR configs.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$name = "name_example"; // string | Name of the IVR to filter by.

try {
    $result = $apiInstance->getArchitectIvrs($pageNumber, $pageSize, $sortBy, $sortOrder, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectIvrs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **name** | **string**| Name of the IVR to filter by. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\IVREntityListing**](../Model/IVREntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectPrompt**
> \PureCloudPlatform\Client\V2\Model\Prompt getArchitectPrompt($promptId)

Get specified user prompt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID

try {
    $result = $apiInstance->getArchitectPrompt($promptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Prompt**](../Model/Prompt.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectPromptHistoryHistoryId**
> \PureCloudPlatform\Client\V2\Model\HistoryListing getArchitectPromptHistoryHistoryId($promptId, $historyId, $pageNumber, $pageSize, $sortOrder, $sortBy, $action)

Get generated prompt history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$historyId = "historyId_example"; // string | History request ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortOrder = "desc"; // string | Sort order
$sortBy = "timestamp"; // string | Sort by
$action = array("action_example"); // string[] | Flow actions to include (omit to include all)

try {
    $result = $apiInstance->getArchitectPromptHistoryHistoryId($promptId, $historyId, $pageNumber, $pageSize, $sortOrder, $sortBy, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectPromptHistoryHistoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **historyId** | **string**| History request ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortOrder** | **string**| Sort order | [optional] [default to desc]
 **sortBy** | **string**| Sort by | [optional] [default to timestamp]
 **action** | [**string[]**](../Model/string.md)| Flow actions to include (omit to include all) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\HistoryListing**](../Model/HistoryListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectPromptResource**
> \PureCloudPlatform\Client\V2\Model\PromptAsset getArchitectPromptResource($promptId, $languageCode)

Get specified user prompt resource



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language

try {
    $result = $apiInstance->getArchitectPromptResource($promptId, $languageCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectPromptResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PromptAsset**](../Model/PromptAsset.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectPromptResources**
> \PureCloudPlatform\Client\V2\Model\PromptAssetEntityListing getArchitectPromptResources($promptId, $pageNumber, $pageSize)

Get a pageable list of user prompt resources

The returned list is pageable, and query parameters can be used for filtering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getArchitectPromptResources($promptId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectPromptResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PromptAssetEntityListing**](../Model/PromptAssetEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectPrompts**
> \PureCloudPlatform\Client\V2\Model\PromptEntityListing getArchitectPrompts($pageNumber, $pageSize, $name, $description, $nameOrDescription, $sortBy, $sortOrder)

Get a pageable list of user prompts

The returned list is pageable, and query parameters can be used for filtering.  Multiple names can be specified, in which case all matching prompts will be returned, and no other filters will be evaluated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$name = array("name_example"); // string[] | Name
$description = "description_example"; // string | Description
$nameOrDescription = "nameOrDescription_example"; // string | Name or description
$sortBy = "id"; // string | Sort by
$sortOrder = "asc"; // string | Sort order

try {
    $result = $apiInstance->getArchitectPrompts($pageNumber, $pageSize, $name, $description, $nameOrDescription, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectPrompts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **name** | [**string[]**](../Model/string.md)| Name | [optional]
 **description** | **string**| Description | [optional]
 **nameOrDescription** | **string**| Name or description | [optional]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PromptEntityListing**](../Model/PromptEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSchedule**
> \PureCloudPlatform\Client\V2\Model\Schedule getArchitectSchedule($scheduleId)

Get a schedule by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID

try {
    $result = $apiInstance->getArchitectSchedule($scheduleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Schedule**](../Model/Schedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSchedulegroup**
> \PureCloudPlatform\Client\V2\Model\ScheduleGroup getArchitectSchedulegroup($scheduleGroupId)

Gets a schedule group by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleGroupId = "scheduleGroupId_example"; // string | Schedule group ID

try {
    $result = $apiInstance->getArchitectSchedulegroup($scheduleGroupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSchedulegroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleGroupId** | **string**| Schedule group ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScheduleGroup**](../Model/ScheduleGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSchedulegroups**
> \PureCloudPlatform\Client\V2\Model\ScheduleGroupEntityListing getArchitectSchedulegroups($pageNumber, $pageSize, $sortBy, $sortOrder, $name)

Get a list of schedule groups.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$name = "name_example"; // string | Name of the Schedule Group to filter by.

try {
    $result = $apiInstance->getArchitectSchedulegroups($pageNumber, $pageSize, $sortBy, $sortOrder, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSchedulegroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **name** | **string**| Name of the Schedule Group to filter by. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScheduleGroupEntityListing**](../Model/ScheduleGroupEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSchedules**
> \PureCloudPlatform\Client\V2\Model\ScheduleEntityListing getArchitectSchedules($pageNumber, $pageSize, $sortBy, $sortOrder, $name)

Get a list of schedules.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$name = "name_example"; // string | Name of the Schedule to filter by.

try {
    $result = $apiInstance->getArchitectSchedules($pageNumber, $pageSize, $sortBy, $sortOrder, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **name** | **string**| Name of the Schedule to filter by. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScheduleEntityListing**](../Model/ScheduleEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSystemprompt**
> \PureCloudPlatform\Client\V2\Model\SystemPrompt getArchitectSystemprompt($promptId)

Get a system prompt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | promptId

try {
    $result = $apiInstance->getArchitectSystemprompt($promptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSystemprompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| promptId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPrompt**](../Model/SystemPrompt.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSystempromptHistoryHistoryId**
> \PureCloudPlatform\Client\V2\Model\HistoryListing getArchitectSystempromptHistoryHistoryId($promptId, $historyId, $pageNumber, $pageSize, $sortOrder, $sortBy, $action)

Get generated prompt history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | promptId
$historyId = "historyId_example"; // string | History request ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortOrder = "desc"; // string | Sort order
$sortBy = "timestamp"; // string | Sort by
$action = array("action_example"); // string[] | Flow actions to include (omit to include all)

try {
    $result = $apiInstance->getArchitectSystempromptHistoryHistoryId($promptId, $historyId, $pageNumber, $pageSize, $sortOrder, $sortBy, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSystempromptHistoryHistoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| promptId |
 **historyId** | **string**| History request ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortOrder** | **string**| Sort order | [optional] [default to desc]
 **sortBy** | **string**| Sort by | [optional] [default to timestamp]
 **action** | [**string[]**](../Model/string.md)| Flow actions to include (omit to include all) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\HistoryListing**](../Model/HistoryListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSystempromptResource**
> \PureCloudPlatform\Client\V2\Model\SystemPromptAsset getArchitectSystempromptResource($promptId, $languageCode)

Get a system prompt resource.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language

try {
    $result = $apiInstance->getArchitectSystempromptResource($promptId, $languageCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSystempromptResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPromptAsset**](../Model/SystemPromptAsset.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSystempromptResources**
> \PureCloudPlatform\Client\V2\Model\SystemPromptAssetEntityListing getArchitectSystempromptResources($promptId, $pageNumber, $pageSize, $sortBy, $sortOrder)

Get system prompt resources.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "id"; // string | Sort by
$sortOrder = "asc"; // string | Sort order

try {
    $result = $apiInstance->getArchitectSystempromptResources($promptId, $pageNumber, $pageSize, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSystempromptResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPromptAssetEntityListing**](../Model/SystemPromptAssetEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchitectSystemprompts**
> \PureCloudPlatform\Client\V2\Model\SystemPromptEntityListing getArchitectSystemprompts($pageNumber, $pageSize, $sortBy, $sortOrder, $name, $description, $nameOrDescription)

Get System Prompts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "id"; // string | Sort by
$sortOrder = "asc"; // string | Sort order
$name = "name_example"; // string | Name
$description = "description_example"; // string | Description
$nameOrDescription = "nameOrDescription_example"; // string | Name or description

try {
    $result = $apiInstance->getArchitectSystemprompts($pageNumber, $pageSize, $sortBy, $sortOrder, $name, $description, $nameOrDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getArchitectSystemprompts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]
 **name** | **string**| Name | [optional]
 **description** | **string**| Description | [optional]
 **nameOrDescription** | **string**| Name or description | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPromptEntityListing**](../Model/SystemPromptEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlow**
> \PureCloudPlatform\Client\V2\Model\Flow getFlow($flowId, $deleted)

Get flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$deleted = false; // bool | Include deleted flows

try {
    $result = $apiInstance->getFlow($flowId, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **deleted** | **bool**| Include deleted flows | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowHistoryHistoryId**
> \PureCloudPlatform\Client\V2\Model\HistoryListing getFlowHistoryHistoryId($flowId, $historyId, $pageNumber, $pageSize, $sortOrder, $sortBy, $action)

Get generated flow history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$historyId = "historyId_example"; // string | History request ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortOrder = "desc"; // string | Sort order
$sortBy = "timestamp"; // string | Sort by
$action = array("action_example"); // string[] | Flow actions to include (omit to include all)

try {
    $result = $apiInstance->getFlowHistoryHistoryId($flowId, $historyId, $pageNumber, $pageSize, $sortOrder, $sortBy, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowHistoryHistoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **historyId** | **string**| History request ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortOrder** | **string**| Sort order | [optional] [default to desc]
 **sortBy** | **string**| Sort by | [optional] [default to timestamp]
 **action** | [**string[]**](../Model/string.md)| Flow actions to include (omit to include all) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\HistoryListing**](../Model/HistoryListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowLatestconfiguration**
> object getFlowLatestconfiguration($flowId, $deleted)

Get the latest configuration for flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$deleted = false; // bool | Include deleted flows

try {
    $result = $apiInstance->getFlowLatestconfiguration($flowId, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowLatestconfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **deleted** | **bool**| Include deleted flows | [optional] [default to false]

### Return type

**object**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowVersion**
> \PureCloudPlatform\Client\V2\Model\FlowVersion getFlowVersion($flowId, $versionId, $deleted)

Get flow version



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$versionId = "versionId_example"; // string | Version ID
$deleted = "deleted_example"; // string | Include deleted flows

try {
    $result = $apiInstance->getFlowVersion($flowId, $versionId, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **versionId** | **string**| Version ID |
 **deleted** | **string**| Include deleted flows | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowVersion**](../Model/FlowVersion.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowVersionConfiguration**
> object getFlowVersionConfiguration($flowId, $versionId, $deleted)

Create flow version configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$versionId = "versionId_example"; // string | Version ID
$deleted = "deleted_example"; // string | Include deleted flows

try {
    $result = $apiInstance->getFlowVersionConfiguration($flowId, $versionId, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **versionId** | **string**| Version ID |
 **deleted** | **string**| Include deleted flows | [optional]

### Return type

**object**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowVersions**
> \PureCloudPlatform\Client\V2\Model\FlowVersionEntityListing getFlowVersions($flowId, $pageNumber, $pageSize, $deleted)

Get flow version list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$deleted = true; // bool | Include deleted flows

try {
    $result = $apiInstance->getFlowVersions($flowId, $pageNumber, $pageSize, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **deleted** | **bool**| Include deleted flows | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowVersionEntityListing**](../Model/FlowVersionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlows**
> \PureCloudPlatform\Client\V2\Model\FlowEntityListing getFlows($type, $pageNumber, $pageSize, $sortBy, $sortOrder, $id, $name, $description, $nameOrDescription, $publishVersionId, $editableBy, $lockedBy, $lockedByClientId, $secure, $deleted, $includeSchemas, $publishedAfter, $publishedBefore, $divisionId)

Get a pageable list of flows, filtered by query parameters

If one or more IDs are specified, the search will fetch flows that match the given ID(s) and not use any additional supplied query parameters in the search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = array("type_example"); // string[] | Type
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "id"; // string | Sort by
$sortOrder = "asc"; // string | Sort order
$id = array("id_example"); // string[] | ID
$name = "name_example"; // string | Name
$description = "description_example"; // string | Description
$nameOrDescription = "nameOrDescription_example"; // string | Name or description
$publishVersionId = "publishVersionId_example"; // string | Publish version ID
$editableBy = "editableBy_example"; // string | Editable by
$lockedBy = "lockedBy_example"; // string | Locked by
$lockedByClientId = "lockedByClientId_example"; // string | Locked by client ID
$secure = "secure_example"; // string | Secure
$deleted = false; // bool | Include deleted
$includeSchemas = false; // bool | Include variable schemas
$publishedAfter = "2015-01-01T12:00:00-0600, 2015-01-01T18:00:00Z, 2015-01-01T12:00:00.000-0600, 2015-01-01T18:00:00.000Z, 2015-01-01"; // string | Published after
$publishedBefore = "2015-01-01T12:00:00-0600, 2015-01-01T18:00:00Z, 2015-01-01T12:00:00.000-0600, 2015-01-01T18:00:00.000Z, 2015-01-01"; // string | Published before
$divisionId = array("divisionId_example"); // string[] | division ID(s)

try {
    $result = $apiInstance->getFlows($type, $pageNumber, $pageSize, $sortBy, $sortOrder, $id, $name, $description, $nameOrDescription, $publishVersionId, $editableBy, $lockedBy, $lockedByClientId, $secure, $deleted, $includeSchemas, $publishedAfter, $publishedBefore, $divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**string[]**](../Model/string.md)| Type | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]
 **id** | [**string[]**](../Model/string.md)| ID | [optional]
 **name** | **string**| Name | [optional]
 **description** | **string**| Description | [optional]
 **nameOrDescription** | **string**| Name or description | [optional]
 **publishVersionId** | **string**| Publish version ID | [optional]
 **editableBy** | **string**| Editable by | [optional]
 **lockedBy** | **string**| Locked by | [optional]
 **lockedByClientId** | **string**| Locked by client ID | [optional]
 **secure** | **string**| Secure | [optional]
 **deleted** | **bool**| Include deleted | [optional] [default to false]
 **includeSchemas** | **bool**| Include variable schemas | [optional] [default to false]
 **publishedAfter** | **string**| Published after | [optional]
 **publishedBefore** | **string**| Published before | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| division ID(s) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowEntityListing**](../Model/FlowEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsDatatable**
> \PureCloudPlatform\Client\V2\Model\DataTable getFlowsDatatable($datatableId, $expand)

Returns a specific datatable by id

Given a datatableId returns the datatable object and schema associated with it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$expand = "expand_example"; // string | Expand instructions for the result

try {
    $result = $apiInstance->getFlowsDatatable($datatableId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **expand** | **string**| Expand instructions for the result | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DataTable**](../Model/DataTable.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsDatatableRow**
> map[string,object] getFlowsDatatableRow($datatableId, $rowId, $showbrief)

Returns a specific row for the datatable

Given a datatableId and a rowId (the value of the key field) this will return the full row contents for that rowId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$rowId = "rowId_example"; // string | The key for the row
$showbrief = true; // bool | if true returns just the key field for the row

try {
    $result = $apiInstance->getFlowsDatatableRow($datatableId, $rowId, $showbrief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsDatatableRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **rowId** | **string**| The key for the row |
 **showbrief** | **bool**| if true returns just the key field for the row | [optional] [default to true]

### Return type

**map[string,object]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsDatatableRows**
> \PureCloudPlatform\Client\V2\Model\DataTableRowEntityListing getFlowsDatatableRows($datatableId, $pageNumber, $pageSize, $showbrief)

Returns the rows for the datatable with the given id

Returns all of the rows for the datatable with the given datatableId.  By default this will just be a truncated list returning the key for each row. Set showBrief to false to return all of the row contents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$showbrief = true; // bool | If true returns just the key value of the row

try {
    $result = $apiInstance->getFlowsDatatableRows($datatableId, $pageNumber, $pageSize, $showbrief);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsDatatableRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **showbrief** | **bool**| If true returns just the key value of the row | [optional] [default to true]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DataTableRowEntityListing**](../Model/DataTableRowEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsDatatables**
> \PureCloudPlatform\Client\V2\Model\DataTablesDomainEntityListing getFlowsDatatables($expand, $pageNumber, $pageSize, $sortBy, $sortOrder)

Retrieve a list of datatables for the org

Returns a metadata list of the datatables associated with this org, including datatableId, name and description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = "expand_example"; // string | Expand instructions for the result
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "id"; // string | Sort by
$sortOrder = "ascending"; // string | Sort order

try {
    $result = $apiInstance->getFlowsDatatables($expand, $pageNumber, $pageSize, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsDatatables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand** | **string**| Expand instructions for the result | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to ascending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DataTablesDomainEntityListing**](../Model/DataTablesDomainEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsDivisionviews**
> \PureCloudPlatform\Client\V2\Model\FlowDivisionViewEntityListing getFlowsDivisionviews($type, $pageNumber, $pageSize, $sortBy, $sortOrder, $id, $name, $publishVersionId, $publishedAfter, $publishedBefore, $divisionId, $includeSchemas)

Get a pageable list of basic flow information objects filterable by query parameters.

This returns a simplified version of /flow consisting of name and type. If one or more IDs are specified, the search will fetch flows that match the given ID(s) and not use any additional supplied query parameters in the search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = array("type_example"); // string[] | Type
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "id"; // string | Sort by
$sortOrder = "asc"; // string | Sort order
$id = array("id_example"); // string[] | ID
$name = "name_example"; // string | Name
$publishVersionId = "publishVersionId_example"; // string | Publish version ID
$publishedAfter = "2015-01-01T12:00:00-0600, 2015-01-01T18:00:00Z, 2015-01-01T12:00:00.000-0600, 2015-01-01T18:00:00.000Z, 2015-01-01"; // string | Published after
$publishedBefore = "2015-01-01T12:00:00-0600, 2015-01-01T18:00:00Z, 2015-01-01T12:00:00.000-0600, 2015-01-01T18:00:00.000Z, 2015-01-01"; // string | Published before
$divisionId = array("divisionId_example"); // string[] | division ID(s)
$includeSchemas = false; // bool | Include variable schemas

try {
    $result = $apiInstance->getFlowsDivisionviews($type, $pageNumber, $pageSize, $sortBy, $sortOrder, $id, $name, $publishVersionId, $publishedAfter, $publishedBefore, $divisionId, $includeSchemas);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsDivisionviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | [**string[]**](../Model/string.md)| Type | [optional]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]
 **id** | [**string[]**](../Model/string.md)| ID | [optional]
 **name** | **string**| Name | [optional]
 **publishVersionId** | **string**| Publish version ID | [optional]
 **publishedAfter** | **string**| Published after | [optional]
 **publishedBefore** | **string**| Published before | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| division ID(s) | [optional]
 **includeSchemas** | **bool**| Include variable schemas | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowDivisionViewEntityListing**](../Model/FlowDivisionViewEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsOutcome**
> \PureCloudPlatform\Client\V2\Model\FlowOutcome getFlowsOutcome($flowOutcomeId)

Get a flow outcome

Returns a specified flow outcome

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowOutcomeId = "flowOutcomeId_example"; // string | flow outcome ID

try {
    $result = $apiInstance->getFlowsOutcome($flowOutcomeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsOutcome: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowOutcomeId** | **string**| flow outcome ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowOutcome**](../Model/FlowOutcome.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlowsOutcomes**
> \PureCloudPlatform\Client\V2\Model\FlowOutcomeListing getFlowsOutcomes($pageNumber, $pageSize, $sortBy, $sortOrder, $id, $name, $description, $nameOrDescription)

Get a pageable list of flow outcomes, filtered by query parameters

Multiple IDs can be specified, in which case all matching flow outcomes will be returned, and no other parameters will be evaluated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "id"; // string | Sort by
$sortOrder = "asc"; // string | Sort order
$id = array("id_example"); // string[] | ID
$name = "name_example"; // string | Name
$description = "description_example"; // string | Description
$nameOrDescription = "nameOrDescription_example"; // string | Name or description

try {
    $result = $apiInstance->getFlowsOutcomes($pageNumber, $pageSize, $sortBy, $sortOrder, $id, $name, $description, $nameOrDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->getFlowsOutcomes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Sort by | [optional] [default to id]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]
 **id** | [**string[]**](../Model/string.md)| ID | [optional]
 **name** | **string**| Name | [optional]
 **description** | **string**| Description | [optional]
 **nameOrDescription** | **string**| Name or description | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowOutcomeListing**](../Model/FlowOutcomeListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectDependencytrackingBuild**
> postArchitectDependencytrackingBuild()

Rebuild Dependency Tracking data for an organization

Asynchronous.  Notification topic: v2.architect.dependencytracking.build

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->postArchitectDependencytrackingBuild();
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectDependencytrackingBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectEmergencygroups**
> \PureCloudPlatform\Client\V2\Model\EmergencyGroup postArchitectEmergencygroups($body)

Creates a new emergency group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EmergencyGroup(); // \PureCloudPlatform\Client\V2\Model\EmergencyGroup | 

try {
    $result = $apiInstance->postArchitectEmergencygroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectEmergencygroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EmergencyGroup**](../Model/EmergencyGroup.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmergencyGroup**](../Model/EmergencyGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectIvrs**
> \PureCloudPlatform\Client\V2\Model\IVR postArchitectIvrs($body)

Create IVR config.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\IVR(); // \PureCloudPlatform\Client\V2\Model\IVR | 

try {
    $result = $apiInstance->postArchitectIvrs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectIvrs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\IVR**](../Model/IVR.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IVR**](../Model/IVR.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectPromptHistory**
> \PureCloudPlatform\Client\V2\Model\Operation postArchitectPromptHistory($promptId)

Generate prompt history

Asynchronous.  Notification topic: v2.architect.prompts.{promptId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID

try {
    $result = $apiInstance->postArchitectPromptHistory($promptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectPromptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectPromptResources**
> \PureCloudPlatform\Client\V2\Model\PromptAsset postArchitectPromptResources($promptId, $body)

Create a new user prompt resource



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$body = new \PureCloudPlatform\Client\V2\Model\PromptAssetCreate(); // \PureCloudPlatform\Client\V2\Model\PromptAssetCreate | 

try {
    $result = $apiInstance->postArchitectPromptResources($promptId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectPromptResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\PromptAssetCreate**](../Model/PromptAssetCreate.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PromptAsset**](../Model/PromptAsset.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectPrompts**
> \PureCloudPlatform\Client\V2\Model\Prompt postArchitectPrompts($body)

Create a new user prompt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Prompt(); // \PureCloudPlatform\Client\V2\Model\Prompt | 

try {
    $result = $apiInstance->postArchitectPrompts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectPrompts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Prompt**](../Model/Prompt.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Prompt**](../Model/Prompt.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectSchedulegroups**
> \PureCloudPlatform\Client\V2\Model\ScheduleGroup postArchitectSchedulegroups($body)

Creates a new schedule group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ScheduleGroup(); // \PureCloudPlatform\Client\V2\Model\ScheduleGroup | 

try {
    $result = $apiInstance->postArchitectSchedulegroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectSchedulegroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScheduleGroup**](../Model/ScheduleGroup.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScheduleGroup**](../Model/ScheduleGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectSchedules**
> \PureCloudPlatform\Client\V2\Model\Schedule postArchitectSchedules($body)

Create a new schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Schedule(); // \PureCloudPlatform\Client\V2\Model\Schedule | 

try {
    $result = $apiInstance->postArchitectSchedules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Schedule**](../Model/Schedule.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Schedule**](../Model/Schedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectSystempromptHistory**
> \PureCloudPlatform\Client\V2\Model\Operation postArchitectSystempromptHistory($promptId)

Generate system prompt history

Asynchronous.  Notification topic: v2.architect.systemprompts.{systemPromptId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | promptId

try {
    $result = $apiInstance->postArchitectSystempromptHistory($promptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectSystempromptHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| promptId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchitectSystempromptResources**
> \PureCloudPlatform\Client\V2\Model\SystemPromptAsset postArchitectSystempromptResources($promptId, $body)

Create system prompt resource override.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$body = new \PureCloudPlatform\Client\V2\Model\SystemPromptAsset(); // \PureCloudPlatform\Client\V2\Model\SystemPromptAsset | 

try {
    $result = $apiInstance->postArchitectSystempromptResources($promptId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postArchitectSystempromptResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SystemPromptAsset**](../Model/SystemPromptAsset.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPromptAsset**](../Model/SystemPromptAsset.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowVersions**
> \PureCloudPlatform\Client\V2\Model\FlowVersion postFlowVersions($flowId, $body)

Create flow version



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->postFlowVersions($flowId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **body** | **object**|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowVersion**](../Model/FlowVersion.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlows**
> \PureCloudPlatform\Client\V2\Model\Flow postFlows($body)

Create flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Flow(); // \PureCloudPlatform\Client\V2\Model\Flow | 

try {
    $result = $apiInstance->postFlows($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsActionsCheckin**
> \PureCloudPlatform\Client\V2\Model\Operation postFlowsActionsCheckin($flow)

Check-in flow

Asynchronous.  Notification topic: v2.flows.{flowId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow = "flow_example"; // string | Flow ID

try {
    $result = $apiInstance->postFlowsActionsCheckin($flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsActionsCheckin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow** | **string**| Flow ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsActionsCheckout**
> \PureCloudPlatform\Client\V2\Model\Flow postFlowsActionsCheckout($flow)

Check-out flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow = "flow_example"; // string | Flow ID

try {
    $result = $apiInstance->postFlowsActionsCheckout($flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsActionsCheckout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow** | **string**| Flow ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsActionsDeactivate**
> \PureCloudPlatform\Client\V2\Model\Flow postFlowsActionsDeactivate($flow)

Deactivate flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow = "flow_example"; // string | Flow ID

try {
    $result = $apiInstance->postFlowsActionsDeactivate($flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsActionsDeactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow** | **string**| Flow ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsActionsPublish**
> \PureCloudPlatform\Client\V2\Model\Operation postFlowsActionsPublish($flow, $version)

Publish flow

Asynchronous.  Notification topic: v2.flows.{flowId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow = "flow_example"; // string | Flow ID
$version = "version_example"; // string | version

try {
    $result = $apiInstance->postFlowsActionsPublish($flow, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsActionsPublish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow** | **string**| Flow ID |
 **version** | **string**| version | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsActionsRevert**
> \PureCloudPlatform\Client\V2\Model\Flow postFlowsActionsRevert($flow)

Revert flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow = "flow_example"; // string | Flow ID

try {
    $result = $apiInstance->postFlowsActionsRevert($flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsActionsRevert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow** | **string**| Flow ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsActionsUnlock**
> \PureCloudPlatform\Client\V2\Model\Flow postFlowsActionsUnlock($flow)

Unlock flow

Allows for unlocking a flow in the case where there is no flow configuration available, and thus a check-in will not unlock the flow. The user must have Architect Admin permissions to perform this action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flow = "flow_example"; // string | Flow ID

try {
    $result = $apiInstance->postFlowsActionsUnlock($flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsActionsUnlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flow** | **string**| Flow ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsDatatableRows**
> map[string,object] postFlowsDatatableRows($datatableId, $dataTableRow)

Create a new row entry for the datatable.

Will add the passed in row entry to the datatable with the given datatableId after verifying it against the schema.  The DataTableRow should be a json-ized' stream of key -> value pairs {      \"Field1\": \"XYZZY\",      \"Field2\": false,      \"KEY\": \"27272\"  }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$dataTableRow = new \stdClass; // object | 

try {
    $result = $apiInstance->postFlowsDatatableRows($datatableId, $dataTableRow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsDatatableRows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **dataTableRow** | **object**|  |

### Return type

**map[string,object]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsDatatables**
> \PureCloudPlatform\Client\V2\Model\DataTable postFlowsDatatables($body)

Create a new datatable with the specified json-schema definition

This will create a new datatable with fields that match the property definitions in the JSON schema.  The schema's title field will be overridden by the name field in the DataTable object.  See also http://json-schema.org/

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DataTable(); // \PureCloudPlatform\Client\V2\Model\DataTable | datatable json-schema

try {
    $result = $apiInstance->postFlowsDatatables($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsDatatables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DataTable**](../Model/DataTable.md)| datatable json-schema |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DataTable**](../Model/DataTable.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFlowsOutcomes**
> \PureCloudPlatform\Client\V2\Model\FlowOutcome postFlowsOutcomes($body)

Create a flow outcome

Asynchronous.  Notification topic: v2.flows.outcomes.{flowOutcomeId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FlowOutcome(); // \PureCloudPlatform\Client\V2\Model\FlowOutcome | 

try {
    $result = $apiInstance->postFlowsOutcomes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->postFlowsOutcomes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FlowOutcome**](../Model/FlowOutcome.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowOutcome**](../Model/FlowOutcome.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectEmergencygroup**
> \PureCloudPlatform\Client\V2\Model\EmergencyGroup putArchitectEmergencygroup($emergencyGroupId, $body)

Updates a emergency group by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emergencyGroupId = "emergencyGroupId_example"; // string | Emergency group ID
$body = new \PureCloudPlatform\Client\V2\Model\EmergencyGroup(); // \PureCloudPlatform\Client\V2\Model\EmergencyGroup | 

try {
    $result = $apiInstance->putArchitectEmergencygroup($emergencyGroupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectEmergencygroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **emergencyGroupId** | **string**| Emergency group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EmergencyGroup**](../Model/EmergencyGroup.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmergencyGroup**](../Model/EmergencyGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectIvr**
> \PureCloudPlatform\Client\V2\Model\IVR putArchitectIvr($ivrId, $body)

Update an IVR Config.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ivrId = "ivrId_example"; // string | IVR id
$body = new \PureCloudPlatform\Client\V2\Model\IVR(); // \PureCloudPlatform\Client\V2\Model\IVR | 

try {
    $result = $apiInstance->putArchitectIvr($ivrId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectIvr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ivrId** | **string**| IVR id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\IVR**](../Model/IVR.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IVR**](../Model/IVR.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectPrompt**
> \PureCloudPlatform\Client\V2\Model\Prompt putArchitectPrompt($promptId, $body)

Update specified user prompt



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$body = new \PureCloudPlatform\Client\V2\Model\Prompt(); // \PureCloudPlatform\Client\V2\Model\Prompt | 

try {
    $result = $apiInstance->putArchitectPrompt($promptId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectPrompt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Prompt**](../Model/Prompt.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Prompt**](../Model/Prompt.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectPromptResource**
> \PureCloudPlatform\Client\V2\Model\PromptAsset putArchitectPromptResource($promptId, $languageCode, $body)

Update specified user prompt resource



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language
$body = new \PureCloudPlatform\Client\V2\Model\PromptAsset(); // \PureCloudPlatform\Client\V2\Model\PromptAsset | 

try {
    $result = $apiInstance->putArchitectPromptResource($promptId, $languageCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectPromptResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |
 **body** | [**\PureCloudPlatform\Client\V2\Model\PromptAsset**](../Model/PromptAsset.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PromptAsset**](../Model/PromptAsset.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectSchedule**
> \PureCloudPlatform\Client\V2\Model\Schedule putArchitectSchedule($scheduleId, $body)

Update schedule by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleId = "scheduleId_example"; // string | Schedule ID
$body = new \PureCloudPlatform\Client\V2\Model\Schedule(); // \PureCloudPlatform\Client\V2\Model\Schedule | 

try {
    $result = $apiInstance->putArchitectSchedule($scheduleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleId** | **string**| Schedule ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Schedule**](../Model/Schedule.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Schedule**](../Model/Schedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectSchedulegroup**
> \PureCloudPlatform\Client\V2\Model\ScheduleGroup putArchitectSchedulegroup($scheduleGroupId, $body)

Updates a schedule group by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scheduleGroupId = "scheduleGroupId_example"; // string | Schedule group ID
$body = new \PureCloudPlatform\Client\V2\Model\ScheduleGroup(); // \PureCloudPlatform\Client\V2\Model\ScheduleGroup | 

try {
    $result = $apiInstance->putArchitectSchedulegroup($scheduleGroupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectSchedulegroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scheduleGroupId** | **string**| Schedule group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScheduleGroup**](../Model/ScheduleGroup.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScheduleGroup**](../Model/ScheduleGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putArchitectSystempromptResource**
> \PureCloudPlatform\Client\V2\Model\SystemPromptAsset putArchitectSystempromptResource($promptId, $languageCode, $body)

Updates a system prompt resource override.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$promptId = "promptId_example"; // string | Prompt ID
$languageCode = "languageCode_example"; // string | Language
$body = new \PureCloudPlatform\Client\V2\Model\SystemPromptAsset(); // \PureCloudPlatform\Client\V2\Model\SystemPromptAsset | 

try {
    $result = $apiInstance->putArchitectSystempromptResource($promptId, $languageCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putArchitectSystempromptResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promptId** | **string**| Prompt ID |
 **languageCode** | **string**| Language |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SystemPromptAsset**](../Model/SystemPromptAsset.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPromptAsset**](../Model/SystemPromptAsset.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlow**
> \PureCloudPlatform\Client\V2\Model\Flow putFlow($flowId, $body)

Update flow



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowId = "flowId_example"; // string | Flow ID
$body = new \PureCloudPlatform\Client\V2\Model\Flow(); // \PureCloudPlatform\Client\V2\Model\Flow | 

try {
    $result = $apiInstance->putFlow($flowId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowId** | **string**| Flow ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)|  |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Flow**](../Model/Flow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlowsDatatable**
> \PureCloudPlatform\Client\V2\Model\DataTable putFlowsDatatable($datatableId, $expand, $body)

Updates a specific datatable by id

Updates a schema for a datatable with the given datatableId -updates allow only new fields to be added in the schema, no changes or removals of existing fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$expand = "expand_example"; // string | Expand instructions for the result
$body = new \PureCloudPlatform\Client\V2\Model\DataTable(); // \PureCloudPlatform\Client\V2\Model\DataTable | datatable json-schema

try {
    $result = $apiInstance->putFlowsDatatable($datatableId, $expand, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putFlowsDatatable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **expand** | **string**| Expand instructions for the result | [optional]
 **body** | [**\PureCloudPlatform\Client\V2\Model\DataTable**](../Model/DataTable.md)| datatable json-schema | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DataTable**](../Model/DataTable.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlowsDatatableRow**
> map[string,object] putFlowsDatatableRow($datatableId, $rowId, $body)

Update a row entry

Updates a row with the given rowId (the value of the key field) to the new values.  The DataTableRow should be a json-ized' stream of key -> value pairs {     \"Field1\": \"XYZZY\",     \"Field2\": false,     \"KEY\": \"27272\" }

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datatableId = "datatableId_example"; // string | id of datatable
$rowId = "rowId_example"; // string | the key for the row
$body = new \stdClass; // object | datatable row

try {
    $result = $apiInstance->putFlowsDatatableRow($datatableId, $rowId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putFlowsDatatableRow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datatableId** | **string**| id of datatable |
 **rowId** | **string**| the key for the row |
 **body** | **object**| datatable row | [optional]

### Return type

**map[string,object]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFlowsOutcome**
> \PureCloudPlatform\Client\V2\Model\Operation putFlowsOutcome($flowOutcomeId, $body)

Updates a flow outcome

Updates a flow outcome.  Asynchronous.  Notification topic: v2.flowoutcomes.{flowoutcomeId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ArchitectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flowOutcomeId = "flowOutcomeId_example"; // string | flow outcome ID
$body = new \PureCloudPlatform\Client\V2\Model\FlowOutcome(); // \PureCloudPlatform\Client\V2\Model\FlowOutcome | 

try {
    $result = $apiInstance->putFlowsOutcome($flowOutcomeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchitectApi->putFlowsOutcome: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flowOutcomeId** | **string**| flow outcome ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\FlowOutcome**](../Model/FlowOutcome.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Operation**](../Model/Operation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

