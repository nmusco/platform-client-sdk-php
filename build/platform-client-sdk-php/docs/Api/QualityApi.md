# PureCloudPlatform\Client\V2\QualityApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteQualityCalibration**](QualityApi.md#deleteQualityCalibration) | **DELETE** /api/v2/quality/calibrations/{calibrationId} | Delete a calibration by id.
[**deleteQualityConversationEvaluation**](QualityApi.md#deleteQualityConversationEvaluation) | **DELETE** /api/v2/quality/conversations/{conversationId}/evaluations/{evaluationId} | Delete an evaluation
[**deleteQualityForm**](QualityApi.md#deleteQualityForm) | **DELETE** /api/v2/quality/forms/{formId} | Delete an evaluation form.
[**deleteQualityFormsEvaluation**](QualityApi.md#deleteQualityFormsEvaluation) | **DELETE** /api/v2/quality/forms/evaluations/{formId} | Delete an evaluation form.
[**deleteQualityFormsSurvey**](QualityApi.md#deleteQualityFormsSurvey) | **DELETE** /api/v2/quality/forms/surveys/{formId} | Delete a survey form.
[**deleteQualityKeywordset**](QualityApi.md#deleteQualityKeywordset) | **DELETE** /api/v2/quality/keywordsets/{keywordSetId} | Delete a keywordSet by id.
[**deleteQualityKeywordsets**](QualityApi.md#deleteQualityKeywordsets) | **DELETE** /api/v2/quality/keywordsets | Delete keyword sets
[**getQualityAgentsActivity**](QualityApi.md#getQualityAgentsActivity) | **GET** /api/v2/quality/agents/activity | Gets a list of Agent Activities
[**getQualityCalibration**](QualityApi.md#getQualityCalibration) | **GET** /api/v2/quality/calibrations/{calibrationId} | Get a calibration by id.  Requires either calibrator id or conversation id
[**getQualityCalibrations**](QualityApi.md#getQualityCalibrations) | **GET** /api/v2/quality/calibrations | Get the list of calibrations
[**getQualityConversationAudits**](QualityApi.md#getQualityConversationAudits) | **GET** /api/v2/quality/conversations/{conversationId}/audits | Get audits for conversation or recording
[**getQualityConversationEvaluation**](QualityApi.md#getQualityConversationEvaluation) | **GET** /api/v2/quality/conversations/{conversationId}/evaluations/{evaluationId} | Get an evaluation
[**getQualityConversationSurveys**](QualityApi.md#getQualityConversationSurveys) | **GET** /api/v2/quality/conversations/{conversationId}/surveys | Get the surveys for a conversation
[**getQualityEvaluationsQuery**](QualityApi.md#getQualityEvaluationsQuery) | **GET** /api/v2/quality/evaluations/query | Queries Evaluations and returns a paged list
[**getQualityEvaluatorsActivity**](QualityApi.md#getQualityEvaluatorsActivity) | **GET** /api/v2/quality/evaluators/activity | Get an evaluator activity
[**getQualityForm**](QualityApi.md#getQualityForm) | **GET** /api/v2/quality/forms/{formId} | Get an evaluation form
[**getQualityFormVersions**](QualityApi.md#getQualityFormVersions) | **GET** /api/v2/quality/forms/{formId}/versions | Gets all the revisions for a specific evaluation.
[**getQualityForms**](QualityApi.md#getQualityForms) | **GET** /api/v2/quality/forms | Get the list of evaluation forms
[**getQualityFormsEvaluation**](QualityApi.md#getQualityFormsEvaluation) | **GET** /api/v2/quality/forms/evaluations/{formId} | Get an evaluation form
[**getQualityFormsEvaluationVersions**](QualityApi.md#getQualityFormsEvaluationVersions) | **GET** /api/v2/quality/forms/evaluations/{formId}/versions | Gets all the revisions for a specific evaluation.
[**getQualityFormsEvaluations**](QualityApi.md#getQualityFormsEvaluations) | **GET** /api/v2/quality/forms/evaluations | Get the list of evaluation forms
[**getQualityFormsSurvey**](QualityApi.md#getQualityFormsSurvey) | **GET** /api/v2/quality/forms/surveys/{formId} | Get a survey form
[**getQualityFormsSurveyVersions**](QualityApi.md#getQualityFormsSurveyVersions) | **GET** /api/v2/quality/forms/surveys/{formId}/versions | Gets all the revisions for a specific survey.
[**getQualityFormsSurveys**](QualityApi.md#getQualityFormsSurveys) | **GET** /api/v2/quality/forms/surveys | Get the list of survey forms
[**getQualityFormsSurveysBulk**](QualityApi.md#getQualityFormsSurveysBulk) | **GET** /api/v2/quality/forms/surveys/bulk | Retrieve a list of survey forms by their ids
[**getQualityFormsSurveysBulkContexts**](QualityApi.md#getQualityFormsSurveysBulkContexts) | **GET** /api/v2/quality/forms/surveys/bulk/contexts | Retrieve a list of the latest form versions by context ids
[**getQualityKeywordset**](QualityApi.md#getQualityKeywordset) | **GET** /api/v2/quality/keywordsets/{keywordSetId} | Get a keywordSet by id.
[**getQualityKeywordsets**](QualityApi.md#getQualityKeywordsets) | **GET** /api/v2/quality/keywordsets | Get the list of keyword sets
[**getQualityPublishedform**](QualityApi.md#getQualityPublishedform) | **GET** /api/v2/quality/publishedforms/{formId} | Get the published evaluation forms.
[**getQualityPublishedforms**](QualityApi.md#getQualityPublishedforms) | **GET** /api/v2/quality/publishedforms | Get the published evaluation forms.
[**getQualityPublishedformsEvaluation**](QualityApi.md#getQualityPublishedformsEvaluation) | **GET** /api/v2/quality/publishedforms/evaluations/{formId} | Get the most recent published version of an evaluation form.
[**getQualityPublishedformsEvaluations**](QualityApi.md#getQualityPublishedformsEvaluations) | **GET** /api/v2/quality/publishedforms/evaluations | Get the published evaluation forms.
[**getQualityPublishedformsSurvey**](QualityApi.md#getQualityPublishedformsSurvey) | **GET** /api/v2/quality/publishedforms/surveys/{formId} | Get the most recent published version of a survey form.
[**getQualityPublishedformsSurveys**](QualityApi.md#getQualityPublishedformsSurveys) | **GET** /api/v2/quality/publishedforms/surveys | Get the published survey forms.
[**getQualitySurvey**](QualityApi.md#getQualitySurvey) | **GET** /api/v2/quality/surveys/{surveyId} | Get a survey for a conversation
[**getQualitySurveysScorable**](QualityApi.md#getQualitySurveysScorable) | **GET** /api/v2/quality/surveys/scorable | Get a survey as an end-customer, for the purposes of scoring it.
[**patchQualityFormsSurvey**](QualityApi.md#patchQualityFormsSurvey) | **PATCH** /api/v2/quality/forms/surveys/{formId} | Disable a particular version of a survey form and invalidates any invitations that have already been sent to customers using this version of the form.
[**postAnalyticsEvaluationsAggregatesQuery**](QualityApi.md#postAnalyticsEvaluationsAggregatesQuery) | **POST** /api/v2/analytics/evaluations/aggregates/query | Query for evaluation aggregates
[**postAnalyticsSurveysAggregatesQuery**](QualityApi.md#postAnalyticsSurveysAggregatesQuery) | **POST** /api/v2/analytics/surveys/aggregates/query | Query for survey aggregates
[**postQualityCalibrations**](QualityApi.md#postQualityCalibrations) | **POST** /api/v2/quality/calibrations | Create a calibration
[**postQualityConversationEvaluations**](QualityApi.md#postQualityConversationEvaluations) | **POST** /api/v2/quality/conversations/{conversationId}/evaluations | Create an evaluation
[**postQualityEvaluationsScoring**](QualityApi.md#postQualityEvaluationsScoring) | **POST** /api/v2/quality/evaluations/scoring | Score evaluation
[**postQualityForms**](QualityApi.md#postQualityForms) | **POST** /api/v2/quality/forms | Create an evaluation form.
[**postQualityFormsEvaluations**](QualityApi.md#postQualityFormsEvaluations) | **POST** /api/v2/quality/forms/evaluations | Create an evaluation form.
[**postQualityFormsSurveys**](QualityApi.md#postQualityFormsSurveys) | **POST** /api/v2/quality/forms/surveys | Create a survey form.
[**postQualityKeywordsets**](QualityApi.md#postQualityKeywordsets) | **POST** /api/v2/quality/keywordsets | Create a Keyword Set
[**postQualityPublishedforms**](QualityApi.md#postQualityPublishedforms) | **POST** /api/v2/quality/publishedforms | Publish an evaluation form.
[**postQualityPublishedformsEvaluations**](QualityApi.md#postQualityPublishedformsEvaluations) | **POST** /api/v2/quality/publishedforms/evaluations | Publish an evaluation form.
[**postQualityPublishedformsSurveys**](QualityApi.md#postQualityPublishedformsSurveys) | **POST** /api/v2/quality/publishedforms/surveys | Publish a survey form.
[**postQualitySpotability**](QualityApi.md#postQualitySpotability) | **POST** /api/v2/quality/spotability | Retrieve the spotability statistic
[**postQualitySurveysScoring**](QualityApi.md#postQualitySurveysScoring) | **POST** /api/v2/quality/surveys/scoring | Score survey
[**putQualityCalibration**](QualityApi.md#putQualityCalibration) | **PUT** /api/v2/quality/calibrations/{calibrationId} | Update a calibration to the specified calibration via PUT.  Editable fields include: evaluators, expertEvaluator, and scoringIndex
[**putQualityConversationEvaluation**](QualityApi.md#putQualityConversationEvaluation) | **PUT** /api/v2/quality/conversations/{conversationId}/evaluations/{evaluationId} | Update an evaluation
[**putQualityForm**](QualityApi.md#putQualityForm) | **PUT** /api/v2/quality/forms/{formId} | Update an evaluation form.
[**putQualityFormsEvaluation**](QualityApi.md#putQualityFormsEvaluation) | **PUT** /api/v2/quality/forms/evaluations/{formId} | Update an evaluation form.
[**putQualityFormsSurvey**](QualityApi.md#putQualityFormsSurvey) | **PUT** /api/v2/quality/forms/surveys/{formId} | Update a survey form.
[**putQualityKeywordset**](QualityApi.md#putQualityKeywordset) | **PUT** /api/v2/quality/keywordsets/{keywordSetId} | Update a keywordSet to the specified keywordSet via PUT.
[**putQualitySurveysScorable**](QualityApi.md#putQualitySurveysScorable) | **PUT** /api/v2/quality/surveys/scorable | Update a survey as an end-customer, for the purposes of scoring it.


# **deleteQualityCalibration**
> \PureCloudPlatform\Client\V2\Model\Calibration deleteQualityCalibration($calibrationId, $calibratorId)

Delete a calibration by id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calibrationId = "calibrationId_example"; // string | Calibration ID
$calibratorId = "calibratorId_example"; // string | calibratorId

try {
    $result = $apiInstance->deleteQualityCalibration($calibrationId, $calibratorId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityCalibration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calibrationId** | **string**| Calibration ID |
 **calibratorId** | **string**| calibratorId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Calibration**](../Model/Calibration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQualityConversationEvaluation**
> \PureCloudPlatform\Client\V2\Model\Evaluation deleteQualityConversationEvaluation($conversationId, $evaluationId, $expand)

Delete an evaluation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$evaluationId = "evaluationId_example"; // string | evaluationId
$expand = "expand_example"; // string | evaluatorId

try {
    $result = $apiInstance->deleteQualityConversationEvaluation($conversationId, $evaluationId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityConversationEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **evaluationId** | **string**| evaluationId |
 **expand** | **string**| evaluatorId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Evaluation**](../Model/Evaluation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQualityForm**
> deleteQualityForm($formId)

Delete an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $apiInstance->deleteQualityForm($formId);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQualityFormsEvaluation**
> deleteQualityFormsEvaluation($formId)

Delete an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $apiInstance->deleteQualityFormsEvaluation($formId);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityFormsEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQualityFormsSurvey**
> deleteQualityFormsSurvey($formId)

Delete a survey form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $apiInstance->deleteQualityFormsSurvey($formId);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityFormsSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQualityKeywordset**
> deleteQualityKeywordset($keywordSetId)

Delete a keywordSet by id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordSetId = "keywordSetId_example"; // string | KeywordSet ID

try {
    $apiInstance->deleteQualityKeywordset($keywordSetId);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityKeywordset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywordSetId** | **string**| KeywordSet ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQualityKeywordsets**
> deleteQualityKeywordsets($ids)

Delete keyword sets

Bulk delete of keyword sets; this will only delete the keyword sets that match the ids specified in the query param.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | A comma-delimited list of valid KeywordSet ids

try {
    $apiInstance->deleteQualityKeywordsets($ids);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->deleteQualityKeywordsets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| A comma-delimited list of valid KeywordSet ids |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityAgentsActivity**
> \PureCloudPlatform\Client\V2\Model\AgentActivityEntityListing getQualityAgentsActivity($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $startTime, $endTime, $agentUserId, $evaluatorUserId, $name, $group)

Gets a list of Agent Activities

Including the number of evaluations and average evaluation score

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
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
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time of agent activity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time of agent activity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$agentUserId = array("agentUserId_example"); // string[] | user id of agent requested
$evaluatorUserId = "evaluatorUserId_example"; // string | user id of the evaluator
$name = "name_example"; // string | name
$group = "group_example"; // string | group id

try {
    $result = $apiInstance->getQualityAgentsActivity($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $startTime, $endTime, $agentUserId, $evaluatorUserId, $name, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityAgentsActivity: ', $e->getMessage(), PHP_EOL;
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
 **startTime** | **\DateTime**| Start time of agent activity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional]
 **endTime** | **\DateTime**| End time of agent activity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional]
 **agentUserId** | [**string[]**](../Model/string.md)| user id of agent requested | [optional]
 **evaluatorUserId** | **string**| user id of the evaluator | [optional]
 **name** | **string**| name | [optional]
 **group** | **string**| group id | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AgentActivityEntityListing**](../Model/AgentActivityEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityCalibration**
> \PureCloudPlatform\Client\V2\Model\Calibration getQualityCalibration($calibrationId, $calibratorId, $conversationId)

Get a calibration by id.  Requires either calibrator id or conversation id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calibrationId = "calibrationId_example"; // string | Calibration ID
$calibratorId = "calibratorId_example"; // string | calibratorId
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getQualityCalibration($calibrationId, $calibratorId, $conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityCalibration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calibrationId** | **string**| Calibration ID |
 **calibratorId** | **string**| calibratorId | [optional]
 **conversationId** | **string**| conversationId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Calibration**](../Model/Calibration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityCalibrations**
> \PureCloudPlatform\Client\V2\Model\CalibrationEntityListing getQualityCalibrations($calibratorId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $conversationId, $startTime, $endTime)

Get the list of calibrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calibratorId = "calibratorId_example"; // string | user id of calibrator
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$conversationId = "conversationId_example"; // string | conversation id
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Beginning of the calibration query. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | end of the calibration query. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ

try {
    $result = $apiInstance->getQualityCalibrations($calibratorId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $conversationId, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityCalibrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calibratorId** | **string**| user id of calibrator |
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **conversationId** | **string**| conversation id | [optional]
 **startTime** | **\DateTime**| Beginning of the calibration query. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional]
 **endTime** | **\DateTime**| end of the calibration query. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CalibrationEntityListing**](../Model/CalibrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityConversationAudits**
> \PureCloudPlatform\Client\V2\Model\QualityAuditPage getQualityConversationAudits($conversationId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $recordingId, $entityType)

Get audits for conversation or recording

Different permissions are required for viewing different resource audit entries.  The quality:evaluation:viewAudit permission is required to view evaluation audits, the recording:recording:viewAudit permission is required to view recording audits, and so on.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$recordingId = "recordingId_example"; // string | id of the recording
$entityType = "RECORDING"; // string | entity type options: Recording, Calibration, Evaluation, Annotation, Screen_Recording

try {
    $result = $apiInstance->getQualityConversationAudits($conversationId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $recordingId, $entityType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityConversationAudits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **recordingId** | **string**| id of the recording | [optional]
 **entityType** | **string**| entity type options: Recording, Calibration, Evaluation, Annotation, Screen_Recording | [optional] [default to RECORDING]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QualityAuditPage**](../Model/QualityAuditPage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityConversationEvaluation**
> \PureCloudPlatform\Client\V2\Model\Evaluation getQualityConversationEvaluation($conversationId, $evaluationId, $expand)

Get an evaluation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$evaluationId = "evaluationId_example"; // string | evaluationId
$expand = "expand_example"; // string | agent, evaluator, evaluationForm

try {
    $result = $apiInstance->getQualityConversationEvaluation($conversationId, $evaluationId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityConversationEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **evaluationId** | **string**| evaluationId |
 **expand** | **string**| agent, evaluator, evaluationForm | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Evaluation**](../Model/Evaluation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityConversationSurveys**
> \PureCloudPlatform\Client\V2\Model\Survey[] getQualityConversationSurveys($conversationId)

Get the surveys for a conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getQualityConversationSurveys($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityConversationSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Survey[]**](../Model/Survey.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityEvaluationsQuery**
> \PureCloudPlatform\Client\V2\Model\EvaluationEntityListing getQualityEvaluationsQuery($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $conversationId, $agentUserId, $evaluatorUserId, $queueId, $startTime, $endTime, $evaluationState, $isReleased, $agentHasRead, $expandAnswerTotalScores, $maximum, $sortOrder)

Queries Evaluations and returns a paged list

Query params must include one of conversationId, evaluatorUserId, or agentUserId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
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
$conversationId = "conversationId_example"; // string | conversationId specified
$agentUserId = "agentUserId_example"; // string | user id of the agent
$evaluatorUserId = "evaluatorUserId_example"; // string | evaluator user id
$queueId = "queueId_example"; // string | queue id
$startTime = "startTime_example"; // string | start time of the evaluation query
$endTime = "endTime_example"; // string | end time of the evaluation query
$evaluationState = array("evaluationState_example"); // string[] | 
$isReleased = true; // bool | the evaluation has been released
$agentHasRead = true; // bool | agent has the evaluation
$expandAnswerTotalScores = true; // bool | get the total scores for evaluations
$maximum = 56; // int | maximum
$sortOrder = "sortOrder_example"; // string | sort order options for agentUserId or evaluatorUserId query. Valid options are 'a', 'asc', 'ascending', 'd', 'desc', 'descending'

try {
    $result = $apiInstance->getQualityEvaluationsQuery($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $conversationId, $agentUserId, $evaluatorUserId, $queueId, $startTime, $endTime, $evaluationState, $isReleased, $agentHasRead, $expandAnswerTotalScores, $maximum, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityEvaluationsQuery: ', $e->getMessage(), PHP_EOL;
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
 **conversationId** | **string**| conversationId specified | [optional]
 **agentUserId** | **string**| user id of the agent | [optional]
 **evaluatorUserId** | **string**| evaluator user id | [optional]
 **queueId** | **string**| queue id | [optional]
 **startTime** | **string**| start time of the evaluation query | [optional]
 **endTime** | **string**| end time of the evaluation query | [optional]
 **evaluationState** | [**string[]**](../Model/string.md)|  | [optional]
 **isReleased** | **bool**| the evaluation has been released | [optional]
 **agentHasRead** | **bool**| agent has the evaluation | [optional]
 **expandAnswerTotalScores** | **bool**| get the total scores for evaluations | [optional]
 **maximum** | **int**| maximum | [optional]
 **sortOrder** | **string**| sort order options for agentUserId or evaluatorUserId query. Valid options are &#39;a&#39;, &#39;asc&#39;, &#39;ascending&#39;, &#39;d&#39;, &#39;desc&#39;, &#39;descending&#39; | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationEntityListing**](../Model/EvaluationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityEvaluatorsActivity**
> \PureCloudPlatform\Client\V2\Model\EvaluatorActivityEntityListing getQualityEvaluatorsActivity($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $startTime, $endTime, $name, $permission, $group)

Get an evaluator activity



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
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
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start time specified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end time specified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$name = "name_example"; // string | Evaluator name
$permission = array("permission_example"); // string[] | permission strings
$group = "group_example"; // string | group id

try {
    $result = $apiInstance->getQualityEvaluatorsActivity($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $startTime, $endTime, $name, $permission, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityEvaluatorsActivity: ', $e->getMessage(), PHP_EOL;
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
 **startTime** | **\DateTime**| The start time specified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional]
 **endTime** | **\DateTime**| The end time specified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional]
 **name** | **string**| Evaluator name | [optional]
 **permission** | [**string[]**](../Model/string.md)| permission strings | [optional]
 **group** | **string**| group id | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluatorActivityEntityListing**](../Model/EvaluatorActivityEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityForm**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm getQualityForm($formId)

Get an evaluation form



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $result = $apiInstance->getQualityForm($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormVersions**
> \PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing getQualityFormVersions($formId, $pageSize, $pageNumber)

Gets all the revisions for a specific evaluation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getQualityFormVersions($formId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing**](../Model/EvaluationFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityForms**
> \PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing getQualityForms($pageSize, $pageNumber, $sortBy, $nextPage, $previousPage, $expand, $name, $sortOrder)

Get the list of evaluation forms



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$expand = "expand_example"; // string | Expand
$name = "name_example"; // string | Name
$sortOrder = "sortOrder_example"; // string | Order to sort results, either asc or desc

try {
    $result = $apiInstance->getQualityForms($pageSize, $pageNumber, $sortBy, $nextPage, $previousPage, $expand, $name, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityForms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **expand** | **string**| Expand | [optional]
 **name** | **string**| Name | [optional]
 **sortOrder** | **string**| Order to sort results, either asc or desc | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing**](../Model/EvaluationFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsEvaluation**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm getQualityFormsEvaluation($formId)

Get an evaluation form



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $result = $apiInstance->getQualityFormsEvaluation($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsEvaluationVersions**
> \PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing getQualityFormsEvaluationVersions($formId, $pageSize, $pageNumber)

Gets all the revisions for a specific evaluation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getQualityFormsEvaluationVersions($formId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsEvaluationVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing**](../Model/EvaluationFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsEvaluations**
> \PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing getQualityFormsEvaluations($pageSize, $pageNumber, $sortBy, $nextPage, $previousPage, $expand, $name, $sortOrder)

Get the list of evaluation forms



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$expand = "expand_example"; // string | Expand
$name = "name_example"; // string | Name
$sortOrder = "sortOrder_example"; // string | Order to sort results, either asc or desc

try {
    $result = $apiInstance->getQualityFormsEvaluations($pageSize, $pageNumber, $sortBy, $nextPage, $previousPage, $expand, $name, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsEvaluations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **expand** | **string**| Expand | [optional]
 **name** | **string**| Name | [optional]
 **sortOrder** | **string**| Order to sort results, either asc or desc | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing**](../Model/EvaluationFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsSurvey**
> \PureCloudPlatform\Client\V2\Model\SurveyForm getQualityFormsSurvey($formId)

Get a survey form



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $result = $apiInstance->getQualityFormsSurvey($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsSurveyVersions**
> \PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing getQualityFormsSurveyVersions($formId, $pageSize, $pageNumber)

Gets all the revisions for a specific survey.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getQualityFormsSurveyVersions($formId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsSurveyVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing**](../Model/SurveyFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsSurveys**
> \PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing getQualityFormsSurveys($pageSize, $pageNumber, $sortBy, $nextPage, $previousPage, $expand, $name, $sortOrder)

Get the list of survey forms



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$expand = "expand_example"; // string | Expand
$name = "name_example"; // string | Name
$sortOrder = "sortOrder_example"; // string | Order to sort results, either asc or desc

try {
    $result = $apiInstance->getQualityFormsSurveys($pageSize, $pageNumber, $sortBy, $nextPage, $previousPage, $expand, $name, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **expand** | **string**| Expand | [optional]
 **name** | **string**| Name | [optional]
 **sortOrder** | **string**| Order to sort results, either asc or desc | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing**](../Model/SurveyFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsSurveysBulk**
> \PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing getQualityFormsSurveysBulk($id)

Retrieve a list of survey forms by their ids



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | A comma-delimited list of valid survey form ids

try {
    $result = $apiInstance->getQualityFormsSurveysBulk($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsSurveysBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| A comma-delimited list of valid survey form ids |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing**](../Model/SurveyFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityFormsSurveysBulkContexts**
> \PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing getQualityFormsSurveysBulkContexts($contextId, $published)

Retrieve a list of the latest form versions by context ids



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contextId = array("contextId_example"); // string[] | A comma-delimited list of valid survey form context ids
$published = true; // bool | If true, the latest published version will be included. If false, only the unpublished version will be included.

try {
    $result = $apiInstance->getQualityFormsSurveysBulkContexts($contextId, $published);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityFormsSurveysBulkContexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contextId** | [**string[]**](../Model/string.md)| A comma-delimited list of valid survey form context ids |
 **published** | **bool**| If true, the latest published version will be included. If false, only the unpublished version will be included. | [optional] [default to true]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing**](../Model/SurveyFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityKeywordset**
> \PureCloudPlatform\Client\V2\Model\KeywordSet getQualityKeywordset($keywordSetId)

Get a keywordSet by id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordSetId = "keywordSetId_example"; // string | KeywordSet ID

try {
    $result = $apiInstance->getQualityKeywordset($keywordSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityKeywordset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywordSetId** | **string**| KeywordSet ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityKeywordsets**
> \PureCloudPlatform\Client\V2\Model\KeywordSetEntityListing getQualityKeywordsets($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $name, $queueId, $agentId, $operator)

Get the list of keyword sets



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
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
$name = "name_example"; // string | the keyword set name - used for filtering results in searches.
$queueId = "queueId_example"; // string | the queue id - used for filtering results in searches.
$agentId = "agentId_example"; // string | the agent id - used for filtering results in searches.
$operator = "operator_example"; // string | If agentID and queueId are both present, this determines whether the query is an AND or OR between those parameters.

try {
    $result = $apiInstance->getQualityKeywordsets($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $name, $queueId, $agentId, $operator);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityKeywordsets: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| the keyword set name - used for filtering results in searches. | [optional]
 **queueId** | **string**| the queue id - used for filtering results in searches. | [optional]
 **agentId** | **string**| the agent id - used for filtering results in searches. | [optional]
 **operator** | **string**| If agentID and queueId are both present, this determines whether the query is an AND or OR between those parameters. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeywordSetEntityListing**](../Model/KeywordSetEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityPublishedform**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm getQualityPublishedform($formId)

Get the published evaluation forms.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $result = $apiInstance->getQualityPublishedform($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityPublishedform: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityPublishedforms**
> \PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing getQualityPublishedforms($pageSize, $pageNumber, $name, $onlyLatestPerContext)

Get the published evaluation forms.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$onlyLatestPerContext = false; // bool | onlyLatestPerContext

try {
    $result = $apiInstance->getQualityPublishedforms($pageSize, $pageNumber, $name, $onlyLatestPerContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityPublishedforms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **onlyLatestPerContext** | **bool**| onlyLatestPerContext | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing**](../Model/EvaluationFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityPublishedformsEvaluation**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm getQualityPublishedformsEvaluation($formId)

Get the most recent published version of an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $result = $apiInstance->getQualityPublishedformsEvaluation($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityPublishedformsEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityPublishedformsEvaluations**
> \PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing getQualityPublishedformsEvaluations($pageSize, $pageNumber, $name, $onlyLatestPerContext)

Get the published evaluation forms.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$onlyLatestPerContext = false; // bool | onlyLatestPerContext

try {
    $result = $apiInstance->getQualityPublishedformsEvaluations($pageSize, $pageNumber, $name, $onlyLatestPerContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityPublishedformsEvaluations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **onlyLatestPerContext** | **bool**| onlyLatestPerContext | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationFormEntityListing**](../Model/EvaluationFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityPublishedformsSurvey**
> \PureCloudPlatform\Client\V2\Model\SurveyForm getQualityPublishedformsSurvey($formId)

Get the most recent published version of a survey form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID

try {
    $result = $apiInstance->getQualityPublishedformsSurvey($formId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityPublishedformsSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualityPublishedformsSurveys**
> \PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing getQualityPublishedformsSurveys($pageSize, $pageNumber, $name, $onlyLatestEnabledPerContext)

Get the published survey forms.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$onlyLatestEnabledPerContext = false; // bool | onlyLatestEnabledPerContext

try {
    $result = $apiInstance->getQualityPublishedformsSurveys($pageSize, $pageNumber, $name, $onlyLatestEnabledPerContext);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualityPublishedformsSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **onlyLatestEnabledPerContext** | **bool**| onlyLatestEnabledPerContext | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyFormEntityListing**](../Model/SurveyFormEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualitySurvey**
> \PureCloudPlatform\Client\V2\Model\Survey getQualitySurvey($surveyId)

Get a survey for a conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$surveyId = "surveyId_example"; // string | surveyId

try {
    $result = $apiInstance->getQualitySurvey($surveyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualitySurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **surveyId** | **string**| surveyId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Survey**](../Model/Survey.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQualitySurveysScorable**
> \PureCloudPlatform\Client\V2\Model\ScorableSurvey getQualitySurveysScorable($customerSurveyUrl)

Get a survey as an end-customer, for the purposes of scoring it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customerSurveyUrl = "customerSurveyUrl_example"; // string | customerSurveyUrl

try {
    $result = $apiInstance->getQualitySurveysScorable($customerSurveyUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->getQualitySurveysScorable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customerSurveyUrl** | **string**| customerSurveyUrl | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScorableSurvey**](../Model/ScorableSurvey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchQualityFormsSurvey**
> \PureCloudPlatform\Client\V2\Model\SurveyForm patchQualityFormsSurvey($formId, $body)

Disable a particular version of a survey form and invalidates any invitations that have already been sent to customers using this version of the form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$body = new \PureCloudPlatform\Client\V2\Model\SurveyForm(); // \PureCloudPlatform\Client\V2\Model\SurveyForm | Survey form

try {
    $result = $apiInstance->patchQualityFormsSurvey($formId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->patchQualityFormsSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)| Survey form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
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
    echo 'Exception when calling QualityApi->postAnalyticsEvaluationsAggregatesQuery: ', $e->getMessage(), PHP_EOL;
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

# **postAnalyticsSurveysAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\SurveyAggregateQueryResponse postAnalyticsSurveysAggregatesQuery($body)

Query for survey aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
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
    echo 'Exception when calling QualityApi->postAnalyticsSurveysAggregatesQuery: ', $e->getMessage(), PHP_EOL;
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

# **postQualityCalibrations**
> \PureCloudPlatform\Client\V2\Model\Calibration postQualityCalibrations($body, $expand)

Create a calibration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CalibrationCreate(); // \PureCloudPlatform\Client\V2\Model\CalibrationCreate | calibration
$expand = "expand_example"; // string | calibratorId

try {
    $result = $apiInstance->postQualityCalibrations($body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityCalibrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CalibrationCreate**](../Model/CalibrationCreate.md)| calibration |
 **expand** | **string**| calibratorId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Calibration**](../Model/Calibration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityConversationEvaluations**
> \PureCloudPlatform\Client\V2\Model\Evaluation postQualityConversationEvaluations($conversationId, $body, $expand)

Create an evaluation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Evaluation(); // \PureCloudPlatform\Client\V2\Model\Evaluation | evaluation
$expand = "expand_example"; // string | evaluatorId

try {
    $result = $apiInstance->postQualityConversationEvaluations($conversationId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityConversationEvaluations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Evaluation**](../Model/Evaluation.md)| evaluation |
 **expand** | **string**| evaluatorId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Evaluation**](../Model/Evaluation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityEvaluationsScoring**
> \PureCloudPlatform\Client\V2\Model\EvaluationScoringSet postQualityEvaluationsScoring($body)

Score evaluation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EvaluationFormAndScoringSet(); // \PureCloudPlatform\Client\V2\Model\EvaluationFormAndScoringSet | evaluationAndScoringSet

try {
    $result = $apiInstance->postQualityEvaluationsScoring($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityEvaluationsScoring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EvaluationFormAndScoringSet**](../Model/EvaluationFormAndScoringSet.md)| evaluationAndScoringSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationScoringSet**](../Model/EvaluationScoringSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityForms**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm postQualityForms($body)

Create an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EvaluationForm(); // \PureCloudPlatform\Client\V2\Model\EvaluationForm | Evaluation form

try {
    $result = $apiInstance->postQualityForms($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityForms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)| Evaluation form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityFormsEvaluations**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm postQualityFormsEvaluations($body)

Create an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EvaluationForm(); // \PureCloudPlatform\Client\V2\Model\EvaluationForm | Evaluation form

try {
    $result = $apiInstance->postQualityFormsEvaluations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityFormsEvaluations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)| Evaluation form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityFormsSurveys**
> \PureCloudPlatform\Client\V2\Model\SurveyForm postQualityFormsSurveys($body)

Create a survey form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SurveyForm(); // \PureCloudPlatform\Client\V2\Model\SurveyForm | Survey form

try {
    $result = $apiInstance->postQualityFormsSurveys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityFormsSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)| Survey form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityKeywordsets**
> \PureCloudPlatform\Client\V2\Model\KeywordSet postQualityKeywordsets($body, $expand)

Create a Keyword Set



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\KeywordSet(); // \PureCloudPlatform\Client\V2\Model\KeywordSet | keywordSet
$expand = "expand_example"; // string | queueId

try {
    $result = $apiInstance->postQualityKeywordsets($body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityKeywordsets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)| keywordSet |
 **expand** | **string**| queueId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityPublishedforms**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm postQualityPublishedforms($body)

Publish an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PublishForm(); // \PureCloudPlatform\Client\V2\Model\PublishForm | Publish request containing id of form to publish

try {
    $result = $apiInstance->postQualityPublishedforms($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityPublishedforms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PublishForm**](../Model/PublishForm.md)| Publish request containing id of form to publish |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityPublishedformsEvaluations**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm postQualityPublishedformsEvaluations($body)

Publish an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PublishForm(); // \PureCloudPlatform\Client\V2\Model\PublishForm | Publish request containing id of form to publish

try {
    $result = $apiInstance->postQualityPublishedformsEvaluations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityPublishedformsEvaluations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PublishForm**](../Model/PublishForm.md)| Publish request containing id of form to publish |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualityPublishedformsSurveys**
> \PureCloudPlatform\Client\V2\Model\SurveyForm postQualityPublishedformsSurveys($body)

Publish a survey form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PublishForm(); // \PureCloudPlatform\Client\V2\Model\PublishForm | Survey form

try {
    $result = $apiInstance->postQualityPublishedformsSurveys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualityPublishedformsSurveys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PublishForm**](../Model/PublishForm.md)| Survey form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualitySpotability**
> \PureCloudPlatform\Client\V2\Model\KeywordSet postQualitySpotability($body)

Retrieve the spotability statistic



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\KeywordSet(); // \PureCloudPlatform\Client\V2\Model\KeywordSet | Keyword Set

try {
    $result = $apiInstance->postQualitySpotability($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualitySpotability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)| Keyword Set | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postQualitySurveysScoring**
> \PureCloudPlatform\Client\V2\Model\SurveyScoringSet postQualitySurveysScoring($body)

Score survey



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SurveyFormAndScoringSet(); // \PureCloudPlatform\Client\V2\Model\SurveyFormAndScoringSet | surveyAndScoringSet

try {
    $result = $apiInstance->postQualitySurveysScoring($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->postQualitySurveysScoring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SurveyFormAndScoringSet**](../Model/SurveyFormAndScoringSet.md)| surveyAndScoringSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyScoringSet**](../Model/SurveyScoringSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualityCalibration**
> \PureCloudPlatform\Client\V2\Model\Calibration putQualityCalibration($calibrationId, $body)

Update a calibration to the specified calibration via PUT.  Editable fields include: evaluators, expertEvaluator, and scoringIndex



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$calibrationId = "calibrationId_example"; // string | Calibration ID
$body = new \PureCloudPlatform\Client\V2\Model\Calibration(); // \PureCloudPlatform\Client\V2\Model\Calibration | Calibration

try {
    $result = $apiInstance->putQualityCalibration($calibrationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualityCalibration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **calibrationId** | **string**| Calibration ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Calibration**](../Model/Calibration.md)| Calibration |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Calibration**](../Model/Calibration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualityConversationEvaluation**
> \PureCloudPlatform\Client\V2\Model\Evaluation putQualityConversationEvaluation($conversationId, $evaluationId, $body, $expand)

Update an evaluation

The quality:evaluation:edit permission allows modification of most fields, while the quality:evaluation:editScore permission allows an evaluator to change just the question scores, and the quality:evaluation:editAgentSignoff permission allows an agent to change the agent comments and sign off on the evaluation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$evaluationId = "evaluationId_example"; // string | evaluationId
$body = new \PureCloudPlatform\Client\V2\Model\Evaluation(); // \PureCloudPlatform\Client\V2\Model\Evaluation | evaluation
$expand = "expand_example"; // string | evaluatorId

try {
    $result = $apiInstance->putQualityConversationEvaluation($conversationId, $evaluationId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualityConversationEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **evaluationId** | **string**| evaluationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Evaluation**](../Model/Evaluation.md)| evaluation |
 **expand** | **string**| evaluatorId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Evaluation**](../Model/Evaluation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualityForm**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm putQualityForm($formId, $body)

Update an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$body = new \PureCloudPlatform\Client\V2\Model\EvaluationForm(); // \PureCloudPlatform\Client\V2\Model\EvaluationForm | Evaluation form

try {
    $result = $apiInstance->putQualityForm($formId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualityForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)| Evaluation form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualityFormsEvaluation**
> \PureCloudPlatform\Client\V2\Model\EvaluationForm putQualityFormsEvaluation($formId, $body)

Update an evaluation form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$body = new \PureCloudPlatform\Client\V2\Model\EvaluationForm(); // \PureCloudPlatform\Client\V2\Model\EvaluationForm | Evaluation form

try {
    $result = $apiInstance->putQualityFormsEvaluation($formId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualityFormsEvaluation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)| Evaluation form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EvaluationForm**](../Model/EvaluationForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualityFormsSurvey**
> \PureCloudPlatform\Client\V2\Model\SurveyForm putQualityFormsSurvey($formId, $body)

Update a survey form.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$formId = "formId_example"; // string | Form ID
$body = new \PureCloudPlatform\Client\V2\Model\SurveyForm(); // \PureCloudPlatform\Client\V2\Model\SurveyForm | Survey form

try {
    $result = $apiInstance->putQualityFormsSurvey($formId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualityFormsSurvey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **formId** | **string**| Form ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)| Survey form |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SurveyForm**](../Model/SurveyForm.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualityKeywordset**
> \PureCloudPlatform\Client\V2\Model\KeywordSet putQualityKeywordset($keywordSetId, $body)

Update a keywordSet to the specified keywordSet via PUT.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywordSetId = "keywordSetId_example"; // string | KeywordSet ID
$body = new \PureCloudPlatform\Client\V2\Model\KeywordSet(); // \PureCloudPlatform\Client\V2\Model\KeywordSet | keywordSet

try {
    $result = $apiInstance->putQualityKeywordset($keywordSetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualityKeywordset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywordSetId** | **string**| KeywordSet ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)| keywordSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\KeywordSet**](../Model/KeywordSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putQualitySurveysScorable**
> \PureCloudPlatform\Client\V2\Model\ScorableSurvey putQualitySurveysScorable($body, $customerSurveyUrl)

Update a survey as an end-customer, for the purposes of scoring it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\QualityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PureCloudPlatform\Client\V2\Model\ScorableSurvey(); // \PureCloudPlatform\Client\V2\Model\ScorableSurvey | survey
$customerSurveyUrl = "customerSurveyUrl_example"; // string | customerSurveyUrl

try {
    $result = $apiInstance->putQualitySurveysScorable($body, $customerSurveyUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QualityApi->putQualitySurveysScorable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScorableSurvey**](../Model/ScorableSurvey.md)| survey |
 **customerSurveyUrl** | **string**| customerSurveyUrl | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScorableSurvey**](../Model/ScorableSurvey.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

