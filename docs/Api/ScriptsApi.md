# PureCloudPlatform\Client\V2\ScriptsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getScript**](ScriptsApi.md#getScript) | **GET** /api/v2/scripts/{scriptId} | Get a script
[**getScriptPage**](ScriptsApi.md#getScriptPage) | **GET** /api/v2/scripts/{scriptId}/pages/{pageId} | Get a page
[**getScriptPages**](ScriptsApi.md#getScriptPages) | **GET** /api/v2/scripts/{scriptId}/pages | Get the list of pages
[**getScripts**](ScriptsApi.md#getScripts) | **GET** /api/v2/scripts | Get the list of scripts
[**getScriptsPublished**](ScriptsApi.md#getScriptsPublished) | **GET** /api/v2/scripts/published | Get the published scripts.
[**getScriptsPublishedScriptId**](ScriptsApi.md#getScriptsPublishedScriptId) | **GET** /api/v2/scripts/published/{scriptId} | Get the published script.
[**getScriptsPublishedScriptIdPage**](ScriptsApi.md#getScriptsPublishedScriptIdPage) | **GET** /api/v2/scripts/published/{scriptId}/pages/{pageId} | Get the published page.
[**getScriptsPublishedScriptIdPages**](ScriptsApi.md#getScriptsPublishedScriptIdPages) | **GET** /api/v2/scripts/published/{scriptId}/pages | Get the list of published pages
[**getScriptsPublishedScriptIdVariables**](ScriptsApi.md#getScriptsPublishedScriptIdVariables) | **GET** /api/v2/scripts/published/{scriptId}/variables | Get the published variables
[**getScriptsUploadStatus**](ScriptsApi.md#getScriptsUploadStatus) | **GET** /api/v2/scripts/uploads/{uploadId}/status | Get the upload status of an imported script
[**postScriptExport**](ScriptsApi.md#postScriptExport) | **POST** /api/v2/scripts/{scriptId}/export | Export a script via download service.


# **getScript**
> \PureCloudPlatform\Client\V2\Model\Script getScript($scriptId)

Get a script



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID

try {
    $result = $apiInstance->getScript($scriptId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScript: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Script**](../Model/Script.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptPage**
> \PureCloudPlatform\Client\V2\Model\Page getScriptPage($scriptId, $pageId, $scriptDataVersion)

Get a page



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$pageId = "pageId_example"; // string | Page ID
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptPage($scriptId, $pageId, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **pageId** | **string**| Page ID |
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Page**](../Model/Page.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptPages**
> \PureCloudPlatform\Client\V2\Model\Page[] getScriptPages($scriptId, $scriptDataVersion)

Get the list of pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptPages($scriptId, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Page[]**](../Model/Page.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScripts**
> \PureCloudPlatform\Client\V2\Model\ScriptEntityListing getScripts($pageSize, $pageNumber, $expand, $name, $feature, $flowId, $sortBy, $sortOrder, $scriptDataVersion)

Get the list of scripts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$expand = "expand_example"; // string | Expand
$name = "name_example"; // string | Name filter
$feature = "feature_example"; // string | Feature filter
$flowId = "flowId_example"; // string | Secure flow id filter
$sortBy = "sortBy_example"; // string | SortBy
$sortOrder = "sortOrder_example"; // string | SortOrder
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScripts($pageSize, $pageNumber, $expand, $name, $feature, $flowId, $sortBy, $sortOrder, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScripts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **expand** | **string**| Expand | [optional]
 **name** | **string**| Name filter | [optional]
 **feature** | **string**| Feature filter | [optional]
 **flowId** | **string**| Secure flow id filter | [optional]
 **sortBy** | **string**| SortBy | [optional]
 **sortOrder** | **string**| SortOrder | [optional]
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScriptEntityListing**](../Model/ScriptEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptsPublished**
> \PureCloudPlatform\Client\V2\Model\ScriptEntityListing getScriptsPublished($pageSize, $pageNumber, $expand, $name, $feature, $flowId, $scriptDataVersion)

Get the published scripts.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$expand = "expand_example"; // string | Expand
$name = "name_example"; // string | Name filter
$feature = "feature_example"; // string | Feature filter
$flowId = "flowId_example"; // string | Secure flow id filter
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptsPublished($pageSize, $pageNumber, $expand, $name, $feature, $flowId, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptsPublished: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **expand** | **string**| Expand | [optional]
 **name** | **string**| Name filter | [optional]
 **feature** | **string**| Feature filter | [optional]
 **flowId** | **string**| Secure flow id filter | [optional]
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScriptEntityListing**](../Model/ScriptEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptsPublishedScriptId**
> \PureCloudPlatform\Client\V2\Model\Script getScriptsPublishedScriptId($scriptId, $scriptDataVersion)

Get the published script.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptsPublishedScriptId($scriptId, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptsPublishedScriptId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Script**](../Model/Script.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptsPublishedScriptIdPage**
> \PureCloudPlatform\Client\V2\Model\Page getScriptsPublishedScriptIdPage($scriptId, $pageId, $scriptDataVersion)

Get the published page.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$pageId = "pageId_example"; // string | Page ID
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptsPublishedScriptIdPage($scriptId, $pageId, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptsPublishedScriptIdPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **pageId** | **string**| Page ID |
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Page**](../Model/Page.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptsPublishedScriptIdPages**
> \PureCloudPlatform\Client\V2\Model\Page[] getScriptsPublishedScriptIdPages($scriptId, $scriptDataVersion)

Get the list of published pages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptsPublishedScriptIdPages($scriptId, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptsPublishedScriptIdPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Page[]**](../Model/Page.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptsPublishedScriptIdVariables**
> object getScriptsPublishedScriptIdVariables($scriptId, $input, $output, $type, $scriptDataVersion)

Get the published variables



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$input = "input_example"; // string | input
$output = "output_example"; // string | output
$type = "type_example"; // string | type
$scriptDataVersion = "scriptDataVersion_example"; // string | Advanced usage - controls the data version of the script

try {
    $result = $apiInstance->getScriptsPublishedScriptIdVariables($scriptId, $input, $output, $type, $scriptDataVersion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptsPublishedScriptIdVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **input** | **string**| input | [optional]
 **output** | **string**| output | [optional]
 **type** | **string**| type | [optional]
 **scriptDataVersion** | **string**| Advanced usage - controls the data version of the script | [optional]

### Return type

**object**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScriptsUploadStatus**
> \PureCloudPlatform\Client\V2\Model\ImportScriptStatusResponse getScriptsUploadStatus($uploadId, $longPoll)

Get the upload status of an imported script



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uploadId = "uploadId_example"; // string | Upload ID
$longPoll = false; // bool | Enable longPolling endpoint

try {
    $result = $apiInstance->getScriptsUploadStatus($uploadId, $longPoll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->getScriptsUploadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uploadId** | **string**| Upload ID |
 **longPoll** | **bool**| Enable longPolling endpoint | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ImportScriptStatusResponse**](../Model/ImportScriptStatusResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postScriptExport**
> \PureCloudPlatform\Client\V2\Model\ExportScriptResponse postScriptExport($scriptId, $body)

Export a script via download service.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ScriptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scriptId = "scriptId_example"; // string | Script ID
$body = new \PureCloudPlatform\Client\V2\Model\ExportScriptRequest(); // \PureCloudPlatform\Client\V2\Model\ExportScriptRequest | 

try {
    $result = $apiInstance->postScriptExport($scriptId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScriptsApi->postScriptExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scriptId** | **string**| Script ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExportScriptRequest**](../Model/ExportScriptRequest.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExportScriptResponse**](../Model/ExportScriptResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

