# PureCloudPlatform\Client\V2\ResponseManagementApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteResponsemanagementLibrary**](ResponseManagementApi.md#deleteResponsemanagementLibrary) | **DELETE** /api/v2/responsemanagement/libraries/{libraryId} | Delete an existing response library.
[**deleteResponsemanagementResponse**](ResponseManagementApi.md#deleteResponsemanagementResponse) | **DELETE** /api/v2/responsemanagement/responses/{responseId} | Delete an existing response.
[**getResponsemanagementLibraries**](ResponseManagementApi.md#getResponsemanagementLibraries) | **GET** /api/v2/responsemanagement/libraries | Gets a list of existing response libraries.
[**getResponsemanagementLibrary**](ResponseManagementApi.md#getResponsemanagementLibrary) | **GET** /api/v2/responsemanagement/libraries/{libraryId} | Get details about an existing response library.
[**getResponsemanagementResponse**](ResponseManagementApi.md#getResponsemanagementResponse) | **GET** /api/v2/responsemanagement/responses/{responseId} | Get details about an existing response.
[**getResponsemanagementResponses**](ResponseManagementApi.md#getResponsemanagementResponses) | **GET** /api/v2/responsemanagement/responses | Gets a list of existing responses.
[**postResponsemanagementLibraries**](ResponseManagementApi.md#postResponsemanagementLibraries) | **POST** /api/v2/responsemanagement/libraries | Create a response library.
[**postResponsemanagementResponses**](ResponseManagementApi.md#postResponsemanagementResponses) | **POST** /api/v2/responsemanagement/responses | Create a response.
[**postResponsemanagementResponsesQuery**](ResponseManagementApi.md#postResponsemanagementResponsesQuery) | **POST** /api/v2/responsemanagement/responses/query | Query responses
[**putResponsemanagementLibrary**](ResponseManagementApi.md#putResponsemanagementLibrary) | **PUT** /api/v2/responsemanagement/libraries/{libraryId} | Update an existing response library.
[**putResponsemanagementResponse**](ResponseManagementApi.md#putResponsemanagementResponse) | **PUT** /api/v2/responsemanagement/responses/{responseId} | Update an existing response.


# **deleteResponsemanagementLibrary**
> deleteResponsemanagementLibrary($libraryId)

Delete an existing response library.

This will remove any responses associated with the library.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$libraryId = "libraryId_example"; // string | Library ID

try {
    $apiInstance->deleteResponsemanagementLibrary($libraryId);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->deleteResponsemanagementLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **libraryId** | **string**| Library ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResponsemanagementResponse**
> deleteResponsemanagementResponse($responseId)

Delete an existing response.

This will remove the response from any libraries associated with it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$responseId = "responseId_example"; // string | Response ID

try {
    $apiInstance->deleteResponsemanagementResponse($responseId);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->deleteResponsemanagementResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **responseId** | **string**| Response ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResponsemanagementLibraries**
> \PureCloudPlatform\Client\V2\Model\LibraryEntityListing getResponsemanagementLibraries($pageNumber, $pageSize)

Gets a list of existing response libraries.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size

try {
    $result = $apiInstance->getResponsemanagementLibraries($pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->getResponsemanagementLibraries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LibraryEntityListing**](../Model/LibraryEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResponsemanagementLibrary**
> \PureCloudPlatform\Client\V2\Model\Library getResponsemanagementLibrary($libraryId)

Get details about an existing response library.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$libraryId = "libraryId_example"; // string | Library ID

try {
    $result = $apiInstance->getResponsemanagementLibrary($libraryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->getResponsemanagementLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **libraryId** | **string**| Library ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Library**](../Model/Library.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResponsemanagementResponse**
> \PureCloudPlatform\Client\V2\Model\Response getResponsemanagementResponse($responseId, $expand)

Get details about an existing response.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$responseId = "responseId_example"; // string | Response ID
$expand = "expand_example"; // string | Expand instructions for the return value.

try {
    $result = $apiInstance->getResponsemanagementResponse($responseId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->getResponsemanagementResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **responseId** | **string**| Response ID |
 **expand** | **string**| Expand instructions for the return value. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Response**](../Model/Response.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResponsemanagementResponses**
> \PureCloudPlatform\Client\V2\Model\ResponseEntityListing getResponsemanagementResponses($libraryId, $pageNumber, $pageSize, $expand)

Gets a list of existing responses.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$libraryId = "libraryId_example"; // string | Library ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$expand = "expand_example"; // string | Expand instructions for the return value.

try {
    $result = $apiInstance->getResponsemanagementResponses($libraryId, $pageNumber, $pageSize, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->getResponsemanagementResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **libraryId** | **string**| Library ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **expand** | **string**| Expand instructions for the return value. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ResponseEntityListing**](../Model/ResponseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postResponsemanagementLibraries**
> \PureCloudPlatform\Client\V2\Model\Library postResponsemanagementLibraries($body)

Create a response library.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Library(); // \PureCloudPlatform\Client\V2\Model\Library | Library

try {
    $result = $apiInstance->postResponsemanagementLibraries($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->postResponsemanagementLibraries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Library**](../Model/Library.md)| Library |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Library**](../Model/Library.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postResponsemanagementResponses**
> \PureCloudPlatform\Client\V2\Model\Response postResponsemanagementResponses($body, $expand)

Create a response.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Response(); // \PureCloudPlatform\Client\V2\Model\Response | Response
$expand = "expand_example"; // string | Expand instructions for the return value.

try {
    $result = $apiInstance->postResponsemanagementResponses($body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->postResponsemanagementResponses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Response**](../Model/Response.md)| Response |
 **expand** | **string**| Expand instructions for the return value. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Response**](../Model/Response.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postResponsemanagementResponsesQuery**
> \PureCloudPlatform\Client\V2\Model\ResponseQueryResults postResponsemanagementResponsesQuery($body)

Query responses



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ResponseQueryRequest(); // \PureCloudPlatform\Client\V2\Model\ResponseQueryRequest | Response

try {
    $result = $apiInstance->postResponsemanagementResponsesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->postResponsemanagementResponsesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ResponseQueryRequest**](../Model/ResponseQueryRequest.md)| Response |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ResponseQueryResults**](../Model/ResponseQueryResults.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putResponsemanagementLibrary**
> \PureCloudPlatform\Client\V2\Model\Library putResponsemanagementLibrary($libraryId, $body)

Update an existing response library.

Fields that can be updated: name. The most recent version is required for updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$libraryId = "libraryId_example"; // string | Library ID
$body = new \PureCloudPlatform\Client\V2\Model\Library(); // \PureCloudPlatform\Client\V2\Model\Library | Library

try {
    $result = $apiInstance->putResponsemanagementLibrary($libraryId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->putResponsemanagementLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **libraryId** | **string**| Library ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Library**](../Model/Library.md)| Library |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Library**](../Model/Library.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putResponsemanagementResponse**
> \PureCloudPlatform\Client\V2\Model\Response putResponsemanagementResponse($responseId, $body, $expand)

Update an existing response.

Fields that can be updated: name, libraries, and texts. The most recent version is required for updates.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ResponseManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$responseId = "responseId_example"; // string | Response ID
$body = new \PureCloudPlatform\Client\V2\Model\Response(); // \PureCloudPlatform\Client\V2\Model\Response | Response
$expand = "expand_example"; // string | Expand instructions for the return value.

try {
    $result = $apiInstance->putResponsemanagementResponse($responseId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResponseManagementApi->putResponsemanagementResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **responseId** | **string**| Response ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Response**](../Model/Response.md)| Response |
 **expand** | **string**| Expand instructions for the return value. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Response**](../Model/Response.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

