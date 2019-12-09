# PureCloudPlatform\Client\V2\IntegrationsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteIntegration**](IntegrationsApi.md#deleteIntegration) | **DELETE** /api/v2/integrations/{integrationId} | Delete integration.
[**deleteIntegrationsAction**](IntegrationsApi.md#deleteIntegrationsAction) | **DELETE** /api/v2/integrations/actions/{actionId} | Delete an Action
[**deleteIntegrationsActionDraft**](IntegrationsApi.md#deleteIntegrationsActionDraft) | **DELETE** /api/v2/integrations/actions/{actionId}/draft | Delete a Draft
[**deleteIntegrationsCredential**](IntegrationsApi.md#deleteIntegrationsCredential) | **DELETE** /api/v2/integrations/credentials/{credentialId} | Delete a set of credentials
[**getIntegration**](IntegrationsApi.md#getIntegration) | **GET** /api/v2/integrations/{integrationId} | Get integration.
[**getIntegrationConfigCurrent**](IntegrationsApi.md#getIntegrationConfigCurrent) | **GET** /api/v2/integrations/{integrationId}/config/current | Get integration configuration.
[**getIntegrations**](IntegrationsApi.md#getIntegrations) | **GET** /api/v2/integrations | List integrations
[**getIntegrationsAction**](IntegrationsApi.md#getIntegrationsAction) | **GET** /api/v2/integrations/actions/{actionId} | Retrieves a single Action matching id.
[**getIntegrationsActionDraft**](IntegrationsApi.md#getIntegrationsActionDraft) | **GET** /api/v2/integrations/actions/{actionId}/draft | Retrieve a Draft
[**getIntegrationsActionDraftSchema**](IntegrationsApi.md#getIntegrationsActionDraftSchema) | **GET** /api/v2/integrations/actions/{actionId}/draft/schemas/{fileName} | Retrieve schema for a Draft based on filename.
[**getIntegrationsActionDraftTemplate**](IntegrationsApi.md#getIntegrationsActionDraftTemplate) | **GET** /api/v2/integrations/actions/{actionId}/draft/templates/{fileName} | Retrieve templates for a Draft based on filename.
[**getIntegrationsActionDraftValidation**](IntegrationsApi.md#getIntegrationsActionDraftValidation) | **GET** /api/v2/integrations/actions/{actionId}/draft/validation | Validate current Draft configuration.
[**getIntegrationsActionSchema**](IntegrationsApi.md#getIntegrationsActionSchema) | **GET** /api/v2/integrations/actions/{actionId}/schemas/{fileName} | Retrieve schema for an action based on filename.
[**getIntegrationsActionTemplate**](IntegrationsApi.md#getIntegrationsActionTemplate) | **GET** /api/v2/integrations/actions/{actionId}/templates/{fileName} | Retrieve text of templates for an action based on filename.
[**getIntegrationsActions**](IntegrationsApi.md#getIntegrationsActions) | **GET** /api/v2/integrations/actions | Retrieves all actions associated with filters passed in via query param.
[**getIntegrationsActionsCategories**](IntegrationsApi.md#getIntegrationsActionsCategories) | **GET** /api/v2/integrations/actions/categories | Retrieves all categories of available Actions
[**getIntegrationsActionsDrafts**](IntegrationsApi.md#getIntegrationsActionsDrafts) | **GET** /api/v2/integrations/actions/drafts | Retrieves all action drafts associated with the filters passed in via query param.
[**getIntegrationsClientapps**](IntegrationsApi.md#getIntegrationsClientapps) | **GET** /api/v2/integrations/clientapps | List permitted client app integrations for the logged in user
[**getIntegrationsCredential**](IntegrationsApi.md#getIntegrationsCredential) | **GET** /api/v2/integrations/credentials/{credentialId} | Get a single credential with sensitive fields redacted
[**getIntegrationsCredentials**](IntegrationsApi.md#getIntegrationsCredentials) | **GET** /api/v2/integrations/credentials | List multiple sets of credentials
[**getIntegrationsCredentialsTypes**](IntegrationsApi.md#getIntegrationsCredentialsTypes) | **GET** /api/v2/integrations/credentials/types | List all credential types
[**getIntegrationsEventlog**](IntegrationsApi.md#getIntegrationsEventlog) | **GET** /api/v2/integrations/eventlog | List all events
[**getIntegrationsEventlogEventId**](IntegrationsApi.md#getIntegrationsEventlogEventId) | **GET** /api/v2/integrations/eventlog/{eventId} | Get a single event
[**getIntegrationsSpeechDialogflowAgent**](IntegrationsApi.md#getIntegrationsSpeechDialogflowAgent) | **GET** /api/v2/integrations/speech/dialogflow/agents/{agentId} | Get details about a Dialogflow agent
[**getIntegrationsSpeechDialogflowAgents**](IntegrationsApi.md#getIntegrationsSpeechDialogflowAgents) | **GET** /api/v2/integrations/speech/dialogflow/agents | Get a list of Dialogflow agents in the customers&#39; Google accounts
[**getIntegrationsSpeechLexBotAlias**](IntegrationsApi.md#getIntegrationsSpeechLexBotAlias) | **GET** /api/v2/integrations/speech/lex/bot/alias/{aliasId} | Get details about a Lex bot alias
[**getIntegrationsSpeechLexBotBotIdAliases**](IntegrationsApi.md#getIntegrationsSpeechLexBotBotIdAliases) | **GET** /api/v2/integrations/speech/lex/bot/{botId}/aliases | Get a list of aliases for a bot in the customer&#39;s AWS accounts
[**getIntegrationsSpeechLexBots**](IntegrationsApi.md#getIntegrationsSpeechLexBots) | **GET** /api/v2/integrations/speech/lex/bots | Get a list of Lex bots in the customers&#39; AWS accounts
[**getIntegrationsSpeechTtsEngine**](IntegrationsApi.md#getIntegrationsSpeechTtsEngine) | **GET** /api/v2/integrations/speech/tts/engines/{engineId} | Get details about a TTS engine
[**getIntegrationsSpeechTtsEngineVoice**](IntegrationsApi.md#getIntegrationsSpeechTtsEngineVoice) | **GET** /api/v2/integrations/speech/tts/engines/{engineId}/voices/{voiceId} | Get details about a specific voice for a TTS engine
[**getIntegrationsSpeechTtsEngineVoices**](IntegrationsApi.md#getIntegrationsSpeechTtsEngineVoices) | **GET** /api/v2/integrations/speech/tts/engines/{engineId}/voices | Get a list of voices for a TTS engine
[**getIntegrationsSpeechTtsEngines**](IntegrationsApi.md#getIntegrationsSpeechTtsEngines) | **GET** /api/v2/integrations/speech/tts/engines | Get a list of TTS engines enabled for org
[**getIntegrationsSpeechTtsSettings**](IntegrationsApi.md#getIntegrationsSpeechTtsSettings) | **GET** /api/v2/integrations/speech/tts/settings | Get TTS settings for an org
[**getIntegrationsType**](IntegrationsApi.md#getIntegrationsType) | **GET** /api/v2/integrations/types/{typeId} | Get integration type.
[**getIntegrationsTypeConfigschema**](IntegrationsApi.md#getIntegrationsTypeConfigschema) | **GET** /api/v2/integrations/types/{typeId}/configschemas/{configType} | Get properties config schema for an integration type.
[**getIntegrationsTypes**](IntegrationsApi.md#getIntegrationsTypes) | **GET** /api/v2/integrations/types | List integration types
[**patchIntegration**](IntegrationsApi.md#patchIntegration) | **PATCH** /api/v2/integrations/{integrationId} | Update an integration.
[**patchIntegrationsAction**](IntegrationsApi.md#patchIntegrationsAction) | **PATCH** /api/v2/integrations/actions/{actionId} | Patch an Action
[**patchIntegrationsActionDraft**](IntegrationsApi.md#patchIntegrationsActionDraft) | **PATCH** /api/v2/integrations/actions/{actionId}/draft | Update an existing Draft
[**postIntegrations**](IntegrationsApi.md#postIntegrations) | **POST** /api/v2/integrations | Create an integration.
[**postIntegrationsActionDraft**](IntegrationsApi.md#postIntegrationsActionDraft) | **POST** /api/v2/integrations/actions/{actionId}/draft | Create a new Draft from existing Action
[**postIntegrationsActionDraftPublish**](IntegrationsApi.md#postIntegrationsActionDraftPublish) | **POST** /api/v2/integrations/actions/{actionId}/draft/publish | Publish a Draft and make it the active Action configuration
[**postIntegrationsActionDraftTest**](IntegrationsApi.md#postIntegrationsActionDraftTest) | **POST** /api/v2/integrations/actions/{actionId}/draft/test | Test the execution of a draft. Responses will show execution steps broken out with intermediate results to help in debugging.
[**postIntegrationsActionExecute**](IntegrationsApi.md#postIntegrationsActionExecute) | **POST** /api/v2/integrations/actions/{actionId}/execute | Execute Action and return response from 3rd party.  Responses will follow the schemas defined on the Action for success and error.
[**postIntegrationsActionTest**](IntegrationsApi.md#postIntegrationsActionTest) | **POST** /api/v2/integrations/actions/{actionId}/test | Test the execution of an action. Responses will show execution steps broken out with intermediate results to help in debugging.
[**postIntegrationsActions**](IntegrationsApi.md#postIntegrationsActions) | **POST** /api/v2/integrations/actions | Create a new Action
[**postIntegrationsActionsDrafts**](IntegrationsApi.md#postIntegrationsActionsDrafts) | **POST** /api/v2/integrations/actions/drafts | Create a new Draft
[**postIntegrationsCredentials**](IntegrationsApi.md#postIntegrationsCredentials) | **POST** /api/v2/integrations/credentials | Create a set of credentials
[**postIntegrationsWorkforcemanagementVendorconnection**](IntegrationsApi.md#postIntegrationsWorkforcemanagementVendorconnection) | **POST** /api/v2/integrations/workforcemanagement/vendorconnection | Add a vendor connection
[**putIntegrationConfigCurrent**](IntegrationsApi.md#putIntegrationConfigCurrent) | **PUT** /api/v2/integrations/{integrationId}/config/current | Update integration configuration.
[**putIntegrationsCredential**](IntegrationsApi.md#putIntegrationsCredential) | **PUT** /api/v2/integrations/credentials/{credentialId} | Update a set of credentials
[**putIntegrationsSpeechTtsSettings**](IntegrationsApi.md#putIntegrationsSpeechTtsSettings) | **PUT** /api/v2/integrations/speech/tts/settings | Update TTS settings for an org


# **deleteIntegration**
> \PureCloudPlatform\Client\V2\Model\Integration deleteIntegration($integrationId)

Delete integration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration Id

try {
    $result = $apiInstance->deleteIntegration($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Integration**](../Model/Integration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIntegrationsAction**
> deleteIntegrationsAction($actionId)

Delete an Action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId

try {
    $apiInstance->deleteIntegrationsAction($actionId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegrationsAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIntegrationsActionDraft**
> deleteIntegrationsActionDraft($actionId)

Delete a Draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId

try {
    $apiInstance->deleteIntegrationsActionDraft($actionId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegrationsActionDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIntegrationsCredential**
> deleteIntegrationsCredential($credentialId)

Delete a set of credentials



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentialId = "credentialId_example"; // string | Credential ID

try {
    $apiInstance->deleteIntegrationsCredential($credentialId);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteIntegrationsCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentialId** | **string**| Credential ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegration**
> \PureCloudPlatform\Client\V2\Model\Integration getIntegration($integrationId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage)

Get integration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration Id
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token

try {
    $result = $apiInstance->getIntegration($integrationId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration Id |
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Integration**](../Model/Integration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationConfigCurrent**
> \PureCloudPlatform\Client\V2\Model\IntegrationConfiguration getIntegrationConfigCurrent($integrationId)

Get integration configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration Id

try {
    $result = $apiInstance->getIntegrationConfigCurrent($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationConfigCurrent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationConfiguration**](../Model/IntegrationConfiguration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrations**
> \PureCloudPlatform\Client\V2\Model\IntegrationEntityListing getIntegrations($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage)

List integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
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

try {
    $result = $apiInstance->getIntegrations($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrations: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationEntityListing**](../Model/IntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsAction**
> \PureCloudPlatform\Client\V2\Model\Action getIntegrationsAction($actionId, $expand, $includeConfig)

Retrieves a single Action matching id.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$expand = "expand_example"; // string | Indicates a field in the response which should be expanded.
$includeConfig = false; // bool | Return config in response.

try {
    $result = $apiInstance->getIntegrationsAction($actionId, $expand, $includeConfig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **expand** | **string**| Indicates a field in the response which should be expanded. | [optional]
 **includeConfig** | **bool**| Return config in response. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionDraft**
> \PureCloudPlatform\Client\V2\Model\Action getIntegrationsActionDraft($actionId, $expand, $includeConfig)

Retrieve a Draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$expand = "expand_example"; // string | Indicates a field in the response which should be expanded.
$includeConfig = false; // bool | Return config in response.

try {
    $result = $apiInstance->getIntegrationsActionDraft($actionId, $expand, $includeConfig);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **expand** | **string**| Indicates a field in the response which should be expanded. | [optional]
 **includeConfig** | **bool**| Return config in response. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionDraftSchema**
> \PureCloudPlatform\Client\V2\Model\JsonSchemaDocument getIntegrationsActionDraftSchema($actionId, $fileName)

Retrieve schema for a Draft based on filename.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$fileName = "fileName_example"; // string | Name of schema file to be retrieved for this draft.

try {
    $result = $apiInstance->getIntegrationsActionDraftSchema($actionId, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionDraftSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **fileName** | **string**| Name of schema file to be retrieved for this draft. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](../Model/JsonSchemaDocument.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionDraftTemplate**
> string getIntegrationsActionDraftTemplate($actionId, $fileName)

Retrieve templates for a Draft based on filename.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$fileName = "fileName_example"; // string | Name of template file to be retrieved for this action draft.

try {
    $result = $apiInstance->getIntegrationsActionDraftTemplate($actionId, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionDraftTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **fileName** | **string**| Name of template file to be retrieved for this action draft. |

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionDraftValidation**
> \PureCloudPlatform\Client\V2\Model\DraftValidationResult getIntegrationsActionDraftValidation($actionId)

Validate current Draft configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId

try {
    $result = $apiInstance->getIntegrationsActionDraftValidation($actionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionDraftValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DraftValidationResult**](../Model/DraftValidationResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionSchema**
> \PureCloudPlatform\Client\V2\Model\JsonSchemaDocument getIntegrationsActionSchema($actionId, $fileName)

Retrieve schema for an action based on filename.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$fileName = "fileName_example"; // string | Name of schema file to be retrieved for this action.

try {
    $result = $apiInstance->getIntegrationsActionSchema($actionId, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **fileName** | **string**| Name of schema file to be retrieved for this action. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](../Model/JsonSchemaDocument.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionTemplate**
> string getIntegrationsActionTemplate($actionId, $fileName)

Retrieve text of templates for an action based on filename.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$fileName = "fileName_example"; // string | Name of template file to be retrieved for this action.

try {
    $result = $apiInstance->getIntegrationsActionTemplate($actionId, $fileName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **fileName** | **string**| Name of template file to be retrieved for this action. |

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActions**
> \PureCloudPlatform\Client\V2\Model\ActionEntityListing getIntegrationsActions($pageSize, $pageNumber, $nextPage, $previousPage, $sortBy, $sortOrder, $category, $name, $secure, $includeAuthActions)

Retrieves all actions associated with filters passed in via query param.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$sortBy = "sortBy_example"; // string | Root level field name to sort on.
$sortOrder = "asc"; // string | Direction to sort 'sortBy' field.
$category = "category_example"; // string | Filter by category name
$name = "name_example"; // string | Filter by action name. Provide full or just the first part of name.
$secure = "secure_example"; // string | Filter to only include secure actions. True will only include actions marked secured. False will include only unsecure actions. Do not use filter if you want all Actions.
$includeAuthActions = "false"; // string | Whether or not to include authentication actions in the response. These actions are not directly executable. Some integrations create them and will run them as needed to refresh authentication information for other actions.

try {
    $result = $apiInstance->getIntegrationsActions($pageSize, $pageNumber, $nextPage, $previousPage, $sortBy, $sortOrder, $category, $name, $secure, $includeAuthActions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **sortBy** | **string**| Root level field name to sort on. | [optional]
 **sortOrder** | **string**| Direction to sort &#39;sortBy&#39; field. | [optional] [default to asc]
 **category** | **string**| Filter by category name | [optional]
 **name** | **string**| Filter by action name. Provide full or just the first part of name. | [optional]
 **secure** | **string**| Filter to only include secure actions. True will only include actions marked secured. False will include only unsecure actions. Do not use filter if you want all Actions. | [optional]
 **includeAuthActions** | **string**| Whether or not to include authentication actions in the response. These actions are not directly executable. Some integrations create them and will run them as needed to refresh authentication information for other actions. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActionEntityListing**](../Model/ActionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionsCategories**
> \PureCloudPlatform\Client\V2\Model\CategoryEntityListing getIntegrationsActionsCategories($pageSize, $pageNumber, $nextPage, $previousPage, $sortBy, $sortOrder, $secure)

Retrieves all categories of available Actions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$sortBy = "sortBy_example"; // string | Root level field name to sort on.
$sortOrder = "asc"; // string | Direction to sort 'sortBy' field.
$secure = "secure_example"; // string | Filter to only include secure actions. True will only include actions marked secured. False will include only unsecure actions. Do not use filter if you want all Actions.

try {
    $result = $apiInstance->getIntegrationsActionsCategories($pageSize, $pageNumber, $nextPage, $previousPage, $sortBy, $sortOrder, $secure);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionsCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **sortBy** | **string**| Root level field name to sort on. | [optional]
 **sortOrder** | **string**| Direction to sort &#39;sortBy&#39; field. | [optional] [default to asc]
 **secure** | **string**| Filter to only include secure actions. True will only include actions marked secured. False will include only unsecure actions. Do not use filter if you want all Actions. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CategoryEntityListing**](../Model/CategoryEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsActionsDrafts**
> \PureCloudPlatform\Client\V2\Model\ActionEntityListing getIntegrationsActionsDrafts($pageSize, $pageNumber, $nextPage, $previousPage, $sortBy, $sortOrder, $category, $name, $secure, $includeAuthActions)

Retrieves all action drafts associated with the filters passed in via query param.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token
$sortBy = "sortBy_example"; // string | Root level field name to sort on.
$sortOrder = "asc"; // string | Direction to sort 'sortBy' field.
$category = "category_example"; // string | Filter by category name
$name = "name_example"; // string | Filter by action name. Provide full or just the first part of name.
$secure = "secure_example"; // string | Filter to only include secure actions. True will only include actions marked secured. False will include only unsecure actions. Do not use filter if you want all Actions.
$includeAuthActions = "false"; // string | Whether or not to include authentication actions in the response. These actions are not directly executable. Some integrations create them and will run them as needed to refresh authentication information for other actions.

try {
    $result = $apiInstance->getIntegrationsActionsDrafts($pageSize, $pageNumber, $nextPage, $previousPage, $sortBy, $sortOrder, $category, $name, $secure, $includeAuthActions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsActionsDrafts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]
 **sortBy** | **string**| Root level field name to sort on. | [optional]
 **sortOrder** | **string**| Direction to sort &#39;sortBy&#39; field. | [optional] [default to asc]
 **category** | **string**| Filter by category name | [optional]
 **name** | **string**| Filter by action name. Provide full or just the first part of name. | [optional]
 **secure** | **string**| Filter to only include secure actions. True will only include actions marked secured. False will include only unsecure actions. Do not use filter if you want all Actions. | [optional]
 **includeAuthActions** | **string**| Whether or not to include authentication actions in the response. These actions are not directly executable. Some integrations create them and will run them as needed to refresh authentication information for other actions. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActionEntityListing**](../Model/ActionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsClientapps**
> \PureCloudPlatform\Client\V2\Model\ClientAppEntityListing getIntegrationsClientapps($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage)

List permitted client app integrations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
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

try {
    $result = $apiInstance->getIntegrationsClientapps($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsClientapps: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\PureCloudPlatform\Client\V2\Model\ClientAppEntityListing**](../Model/ClientAppEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsCredential**
> \PureCloudPlatform\Client\V2\Model\Credential getIntegrationsCredential($credentialId)

Get a single credential with sensitive fields redacted



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentialId = "credentialId_example"; // string | Credential ID

try {
    $result = $apiInstance->getIntegrationsCredential($credentialId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentialId** | **string**| Credential ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Credential**](../Model/Credential.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsCredentials**
> \PureCloudPlatform\Client\V2\Model\CredentialInfoListing getIntegrationsCredentials($pageNumber, $pageSize)

List multiple sets of credentials



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getIntegrationsCredentials($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CredentialInfoListing**](../Model/CredentialInfoListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsCredentialsTypes**
> \PureCloudPlatform\Client\V2\Model\CredentialTypeListing getIntegrationsCredentialsTypes()

List all credential types



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIntegrationsCredentialsTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsCredentialsTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CredentialTypeListing**](../Model/CredentialTypeListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsEventlog**
> \PureCloudPlatform\Client\V2\Model\IntegrationEventEntityListing getIntegrationsEventlog($pageSize, $pageNumber, $sortBy, $sortOrder, $entityId)

List all events



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "timestamp"; // string | Sort by
$sortOrder = "descending"; // string | Order by
$entityId = "entityId_example"; // string | Include only events with this entity ID

try {
    $result = $apiInstance->getIntegrationsEventlog($pageSize, $pageNumber, $sortBy, $sortOrder, $entityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsEventlog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to timestamp]
 **sortOrder** | **string**| Order by | [optional] [default to descending]
 **entityId** | **string**| Include only events with this entity ID | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationEventEntityListing**](../Model/IntegrationEventEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsEventlogEventId**
> \PureCloudPlatform\Client\V2\Model\IntegrationEvent getIntegrationsEventlogEventId($eventId)

Get a single event



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = "eventId_example"; // string | Event Id

try {
    $result = $apiInstance->getIntegrationsEventlogEventId($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsEventlogEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationEvent**](../Model/IntegrationEvent.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechDialogflowAgent**
> \PureCloudPlatform\Client\V2\Model\DialogflowAgent getIntegrationsSpeechDialogflowAgent($agentId)

Get details about a Dialogflow agent



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agentId = "agentId_example"; // string | The agent ID

try {
    $result = $apiInstance->getIntegrationsSpeechDialogflowAgent($agentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechDialogflowAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentId** | **string**| The agent ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialogflowAgent**](../Model/DialogflowAgent.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechDialogflowAgents**
> \PureCloudPlatform\Client\V2\Model\DialogflowAgentSummaryEntityListing getIntegrationsSpeechDialogflowAgents($pageNumber, $pageSize, $name)

Get a list of Dialogflow agents in the customers' Google accounts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$name = "name_example"; // string | Filter on agent name

try {
    $result = $apiInstance->getIntegrationsSpeechDialogflowAgents($pageNumber, $pageSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechDialogflowAgents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **name** | **string**| Filter on agent name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialogflowAgentSummaryEntityListing**](../Model/DialogflowAgentSummaryEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechLexBotAlias**
> \PureCloudPlatform\Client\V2\Model\LexBotAlias getIntegrationsSpeechLexBotAlias($aliasId)

Get details about a Lex bot alias



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$aliasId = "aliasId_example"; // string | The alias ID

try {
    $result = $apiInstance->getIntegrationsSpeechLexBotAlias($aliasId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechLexBotAlias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aliasId** | **string**| The alias ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LexBotAlias**](../Model/LexBotAlias.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechLexBotBotIdAliases**
> \PureCloudPlatform\Client\V2\Model\LexBotAliasEntityListing getIntegrationsSpeechLexBotBotIdAliases($botId, $pageNumber, $pageSize, $status, $name)

Get a list of aliases for a bot in the customer's AWS accounts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$botId = "botId_example"; // string | The bot ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$status = "status_example"; // string | Filter on alias status
$name = "name_example"; // string | Filter on alias name

try {
    $result = $apiInstance->getIntegrationsSpeechLexBotBotIdAliases($botId, $pageNumber, $pageSize, $status, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechLexBotBotIdAliases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **botId** | **string**| The bot ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **status** | **string**| Filter on alias status | [optional]
 **name** | **string**| Filter on alias name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LexBotAliasEntityListing**](../Model/LexBotAliasEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechLexBots**
> \PureCloudPlatform\Client\V2\Model\LexBotEntityListing getIntegrationsSpeechLexBots($pageNumber, $pageSize, $name)

Get a list of Lex bots in the customers' AWS accounts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$name = "name_example"; // string | Filter on bot name

try {
    $result = $apiInstance->getIntegrationsSpeechLexBots($pageNumber, $pageSize, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechLexBots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **name** | **string**| Filter on bot name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LexBotEntityListing**](../Model/LexBotEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechTtsEngine**
> \PureCloudPlatform\Client\V2\Model\TtsEngineEntity getIntegrationsSpeechTtsEngine($engineId, $includeVoices)

Get details about a TTS engine



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engineId = "engineId_example"; // string | The engine ID
$includeVoices = false; // bool | Include voices for the engine

try {
    $result = $apiInstance->getIntegrationsSpeechTtsEngine($engineId, $includeVoices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechTtsEngine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engineId** | **string**| The engine ID |
 **includeVoices** | **bool**| Include voices for the engine | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TtsEngineEntity**](../Model/TtsEngineEntity.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechTtsEngineVoice**
> \PureCloudPlatform\Client\V2\Model\TtsVoiceEntity getIntegrationsSpeechTtsEngineVoice($engineId, $voiceId)

Get details about a specific voice for a TTS engine



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engineId = "engineId_example"; // string | The engine ID
$voiceId = "voiceId_example"; // string | The voice ID

try {
    $result = $apiInstance->getIntegrationsSpeechTtsEngineVoice($engineId, $voiceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechTtsEngineVoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engineId** | **string**| The engine ID |
 **voiceId** | **string**| The voice ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TtsVoiceEntity**](../Model/TtsVoiceEntity.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechTtsEngineVoices**
> \PureCloudPlatform\Client\V2\Model\TtsVoiceEntityListing getIntegrationsSpeechTtsEngineVoices($engineId, $pageNumber, $pageSize)

Get a list of voices for a TTS engine



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engineId = "engineId_example"; // string | The engine ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getIntegrationsSpeechTtsEngineVoices($engineId, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechTtsEngineVoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engineId** | **string**| The engine ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TtsVoiceEntityListing**](../Model/TtsVoiceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechTtsEngines**
> \PureCloudPlatform\Client\V2\Model\TtsEngineEntityListing getIntegrationsSpeechTtsEngines($pageNumber, $pageSize, $includeVoices, $name, $language)

Get a list of TTS engines enabled for org



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$includeVoices = false; // bool | Include voices for the engine
$name = "name_example"; // string | Filter on engine name
$language = "language_example"; // string | Filter on supported language. If includeVoices=true then the voices are also filtered.

try {
    $result = $apiInstance->getIntegrationsSpeechTtsEngines($pageNumber, $pageSize, $includeVoices, $name, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechTtsEngines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **includeVoices** | **bool**| Include voices for the engine | [optional] [default to false]
 **name** | **string**| Filter on engine name | [optional]
 **language** | **string**| Filter on supported language. If includeVoices&#x3D;true then the voices are also filtered. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TtsEngineEntityListing**](../Model/TtsEngineEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsSpeechTtsSettings**
> \PureCloudPlatform\Client\V2\Model\TtsSettings getIntegrationsSpeechTtsSettings()

Get TTS settings for an org



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIntegrationsSpeechTtsSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsSpeechTtsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\TtsSettings**](../Model/TtsSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsType**
> \PureCloudPlatform\Client\V2\Model\IntegrationType getIntegrationsType($typeId)

Get integration type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$typeId = "typeId_example"; // string | Integration Type Id

try {
    $result = $apiInstance->getIntegrationsType($typeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **typeId** | **string**| Integration Type Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationType**](../Model/IntegrationType.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsTypeConfigschema**
> \PureCloudPlatform\Client\V2\Model\JsonSchemaDocument getIntegrationsTypeConfigschema($typeId, $configType)

Get properties config schema for an integration type.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$typeId = "typeId_example"; // string | Integration Type Id
$configType = "configType_example"; // string | Config schema type

try {
    $result = $apiInstance->getIntegrationsTypeConfigschema($typeId, $configType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsTypeConfigschema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **typeId** | **string**| Integration Type Id |
 **configType** | **string**| Config schema type |

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonSchemaDocument**](../Model/JsonSchemaDocument.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIntegrationsTypes**
> \PureCloudPlatform\Client\V2\Model\IntegrationTypeEntityListing getIntegrationsTypes($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage)

List integration types



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
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

try {
    $result = $apiInstance->getIntegrationsTypes($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getIntegrationsTypes: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationTypeEntityListing**](../Model/IntegrationTypeEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchIntegration**
> \PureCloudPlatform\Client\V2\Model\Integration patchIntegration($integrationId, $body, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage)

Update an integration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration Id
$body = new \PureCloudPlatform\Client\V2\Model\Integration(); // \PureCloudPlatform\Client\V2\Model\Integration | Integration Update
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token

try {
    $result = $apiInstance->patchIntegration($integrationId, $body, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->patchIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Integration**](../Model/Integration.md)| Integration Update | [optional]
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Integration**](../Model/Integration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchIntegrationsAction**
> \PureCloudPlatform\Client\V2\Model\Action patchIntegrationsAction($actionId, $body)

Patch an Action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$body = new \PureCloudPlatform\Client\V2\Model\UpdateActionInput(); // \PureCloudPlatform\Client\V2\Model\UpdateActionInput | Input used to patch the Action.

try {
    $result = $apiInstance->patchIntegrationsAction($actionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->patchIntegrationsAction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateActionInput**](../Model/UpdateActionInput.md)| Input used to patch the Action. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchIntegrationsActionDraft**
> \PureCloudPlatform\Client\V2\Model\Action patchIntegrationsActionDraft($actionId, $body)

Update an existing Draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$body = new \PureCloudPlatform\Client\V2\Model\UpdateDraftInput(); // \PureCloudPlatform\Client\V2\Model\UpdateDraftInput | Input used to patch the Action Draft.

try {
    $result = $apiInstance->patchIntegrationsActionDraft($actionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->patchIntegrationsActionDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateDraftInput**](../Model/UpdateDraftInput.md)| Input used to patch the Action Draft. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrations**
> \PureCloudPlatform\Client\V2\Model\Integration postIntegrations($body)

Create an integration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\CreateIntegrationRequest | Integration

try {
    $result = $apiInstance->postIntegrations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateIntegrationRequest**](../Model/CreateIntegrationRequest.md)| Integration | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Integration**](../Model/Integration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActionDraft**
> \PureCloudPlatform\Client\V2\Model\Action postIntegrationsActionDraft($actionId)

Create a new Draft from existing Action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId

try {
    $result = $apiInstance->postIntegrationsActionDraft($actionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActionDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActionDraftPublish**
> \PureCloudPlatform\Client\V2\Model\Action postIntegrationsActionDraftPublish($actionId, $body)

Publish a Draft and make it the active Action configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$body = new \PureCloudPlatform\Client\V2\Model\PublishDraftInput(); // \PureCloudPlatform\Client\V2\Model\PublishDraftInput | Input used to patch the Action.

try {
    $result = $apiInstance->postIntegrationsActionDraftPublish($actionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActionDraftPublish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\PublishDraftInput**](../Model/PublishDraftInput.md)| Input used to patch the Action. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActionDraftTest**
> \PureCloudPlatform\Client\V2\Model\TestExecutionResult postIntegrationsActionDraftTest($actionId, $body)

Test the execution of a draft. Responses will show execution steps broken out with intermediate results to help in debugging.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$body = new \stdClass; // object | Map of parameters used for variable substitution.

try {
    $result = $apiInstance->postIntegrationsActionDraftTest($actionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActionDraftTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **body** | **object**| Map of parameters used for variable substitution. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TestExecutionResult**](../Model/TestExecutionResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActionExecute**
> object postIntegrationsActionExecute($actionId, $body)

Execute Action and return response from 3rd party.  Responses will follow the schemas defined on the Action for success and error.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$body = new \stdClass; // object | Map of parameters used for variable substitution.

try {
    $result = $apiInstance->postIntegrationsActionExecute($actionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActionExecute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **body** | **object**| Map of parameters used for variable substitution. |

### Return type

**object**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActionTest**
> \PureCloudPlatform\Client\V2\Model\TestExecutionResult postIntegrationsActionTest($actionId, $body)

Test the execution of an action. Responses will show execution steps broken out with intermediate results to help in debugging.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$actionId = "actionId_example"; // string | actionId
$body = new \stdClass; // object | Map of parameters used for variable substitution.

try {
    $result = $apiInstance->postIntegrationsActionTest($actionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActionTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **actionId** | **string**| actionId |
 **body** | **object**| Map of parameters used for variable substitution. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TestExecutionResult**](../Model/TestExecutionResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActions**
> \PureCloudPlatform\Client\V2\Model\Action postIntegrationsActions($body)

Create a new Action



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PostActionInput(); // \PureCloudPlatform\Client\V2\Model\PostActionInput | Input used to create Action.

try {
    $result = $apiInstance->postIntegrationsActions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PostActionInput**](../Model/PostActionInput.md)| Input used to create Action. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsActionsDrafts**
> \PureCloudPlatform\Client\V2\Model\Action postIntegrationsActionsDrafts($body)

Create a new Draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PostActionInput(); // \PureCloudPlatform\Client\V2\Model\PostActionInput | Input used to create Action Draft.

try {
    $result = $apiInstance->postIntegrationsActionsDrafts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsActionsDrafts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PostActionInput**](../Model/PostActionInput.md)| Input used to create Action Draft. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Action**](../Model/Action.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsCredentials**
> \PureCloudPlatform\Client\V2\Model\CredentialInfo postIntegrationsCredentials($body)

Create a set of credentials



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Credential(); // \PureCloudPlatform\Client\V2\Model\Credential | Credential

try {
    $result = $apiInstance->postIntegrationsCredentials($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Credential**](../Model/Credential.md)| Credential | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CredentialInfo**](../Model/CredentialInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationsWorkforcemanagementVendorconnection**
> \PureCloudPlatform\Client\V2\Model\UserActionCategoryEntityListing postIntegrationsWorkforcemanagementVendorconnection($body)

Add a vendor connection



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\VendorConnectionRequest(); // \PureCloudPlatform\Client\V2\Model\VendorConnectionRequest | 

try {
    $result = $apiInstance->postIntegrationsWorkforcemanagementVendorconnection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->postIntegrationsWorkforcemanagementVendorconnection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\VendorConnectionRequest**](../Model/VendorConnectionRequest.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserActionCategoryEntityListing**](../Model/UserActionCategoryEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIntegrationConfigCurrent**
> \PureCloudPlatform\Client\V2\Model\IntegrationConfiguration putIntegrationConfigCurrent($integrationId, $body)

Update integration configuration.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration Id
$body = new \PureCloudPlatform\Client\V2\Model\IntegrationConfiguration(); // \PureCloudPlatform\Client\V2\Model\IntegrationConfiguration | Integration Configuration

try {
    $result = $apiInstance->putIntegrationConfigCurrent($integrationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->putIntegrationConfigCurrent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\IntegrationConfiguration**](../Model/IntegrationConfiguration.md)| Integration Configuration | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\IntegrationConfiguration**](../Model/IntegrationConfiguration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIntegrationsCredential**
> \PureCloudPlatform\Client\V2\Model\CredentialInfo putIntegrationsCredential($credentialId, $body)

Update a set of credentials



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentialId = "credentialId_example"; // string | Credential ID
$body = new \PureCloudPlatform\Client\V2\Model\Credential(); // \PureCloudPlatform\Client\V2\Model\Credential | Credential

try {
    $result = $apiInstance->putIntegrationsCredential($credentialId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->putIntegrationsCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentialId** | **string**| Credential ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Credential**](../Model/Credential.md)| Credential | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CredentialInfo**](../Model/CredentialInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIntegrationsSpeechTtsSettings**
> \PureCloudPlatform\Client\V2\Model\TtsSettings putIntegrationsSpeechTtsSettings($body)

Update TTS settings for an org



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TtsSettings(); // \PureCloudPlatform\Client\V2\Model\TtsSettings | Updated TtsSettings

try {
    $result = $apiInstance->putIntegrationsSpeechTtsSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->putIntegrationsSpeechTtsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TtsSettings**](../Model/TtsSettings.md)| Updated TtsSettings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TtsSettings**](../Model/TtsSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

