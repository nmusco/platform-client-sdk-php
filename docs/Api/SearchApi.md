# PureCloudPlatform\Client\V2\SearchApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDocumentationGknSearch**](SearchApi.md#getDocumentationGknSearch) | **GET** /api/v2/documentation/gkn/search | Search gkn documentation using the q64 value returned from a previous search
[**getDocumentationSearch**](SearchApi.md#getDocumentationSearch) | **GET** /api/v2/documentation/search | Search documentation using the q64 value returned from a previous search
[**getGroupsSearch**](SearchApi.md#getGroupsSearch) | **GET** /api/v2/groups/search | Search groups using the q64 value returned from a previous search
[**getLocationsSearch**](SearchApi.md#getLocationsSearch) | **GET** /api/v2/locations/search | Search locations using the q64 value returned from a previous search
[**getSearch**](SearchApi.md#getSearch) | **GET** /api/v2/search | Search using the q64 value returned from a previous search.
[**getSearchSuggest**](SearchApi.md#getSearchSuggest) | **GET** /api/v2/search/suggest | Suggest resources using the q64 value returned from a previous suggest query.
[**getUsersSearch**](SearchApi.md#getUsersSearch) | **GET** /api/v2/users/search | Search users using the q64 value returned from a previous search
[**getVoicemailSearch**](SearchApi.md#getVoicemailSearch) | **GET** /api/v2/voicemail/search | Search voicemails using the q64 value returned from a previous search
[**postDocumentationGknSearch**](SearchApi.md#postDocumentationGknSearch) | **POST** /api/v2/documentation/gkn/search | Search gkn documentation
[**postDocumentationSearch**](SearchApi.md#postDocumentationSearch) | **POST** /api/v2/documentation/search | Search documentation
[**postGroupsSearch**](SearchApi.md#postGroupsSearch) | **POST** /api/v2/groups/search | Search groups
[**postLocationsSearch**](SearchApi.md#postLocationsSearch) | **POST** /api/v2/locations/search | Search locations
[**postSearch**](SearchApi.md#postSearch) | **POST** /api/v2/search | Search resources.
[**postSearchSuggest**](SearchApi.md#postSearchSuggest) | **POST** /api/v2/search/suggest | Suggest resources.
[**postUsersSearch**](SearchApi.md#postUsersSearch) | **POST** /api/v2/users/search | Search users
[**postVoicemailSearch**](SearchApi.md#postVoicemailSearch) | **POST** /api/v2/voicemail/search | Search voicemails


# **getDocumentationGknSearch**
> \PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchResponse getDocumentationGknSearch($q64)

Search gkn documentation using the q64 value returned from a previous search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q64 = "q64_example"; // string | q64

try {
    $result = $apiInstance->getDocumentationGknSearch($q64);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getDocumentationGknSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |

### Return type

[**\PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchResponse**](../Model/GKNDocumentationSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentationSearch**
> \PureCloudPlatform\Client\V2\Model\DocumentationSearchResponse getDocumentationSearch($q64)

Search documentation using the q64 value returned from a previous search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q64 = "q64_example"; // string | q64

try {
    $result = $apiInstance->getDocumentationSearch($q64);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getDocumentationSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DocumentationSearchResponse**](../Model/DocumentationSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsSearch**
> \PureCloudPlatform\Client\V2\Model\GroupsSearchResponse getGroupsSearch($q64, $expand)

Search groups using the q64 value returned from a previous search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q64 = "q64_example"; // string | q64
$expand = array("expand_example"); // string[] | expand

try {
    $result = $apiInstance->getGroupsSearch($q64, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getGroupsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |
 **expand** | [**string[]**](../Model/string.md)| expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GroupsSearchResponse**](../Model/GroupsSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationsSearch**
> \PureCloudPlatform\Client\V2\Model\LocationsSearchResponse getLocationsSearch($q64, $expand)

Search locations using the q64 value returned from a previous search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q64 = "q64_example"; // string | q64
$expand = array("expand_example"); // string[] | Provides more details about a specified resource

try {
    $result = $apiInstance->getLocationsSearch($q64, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getLocationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |
 **expand** | [**string[]**](../Model/string.md)| Provides more details about a specified resource | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationsSearchResponse**](../Model/LocationsSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearch**
> \PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse getSearch($q64, $expand, $profile)

Search using the q64 value returned from a previous search.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q64 = "q64_example"; // string | q64
$expand = array("expand_example"); // string[] | Which fields, if any, to expand
$profile = true; // bool | profile

try {
    $result = $apiInstance->getSearch($q64, $expand, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]
 **profile** | **bool**| profile | [optional] [default to true]

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse**](../Model/JsonNodeSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearchSuggest**
> \PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse getSearchSuggest($q64, $expand, $profile)

Suggest resources using the q64 value returned from a previous suggest query.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q64 = "q64_example"; // string | q64
$expand = array("expand_example"); // string[] | Which fields, if any, to expand
$profile = true; // bool | profile

try {
    $result = $apiInstance->getSearchSuggest($q64, $expand, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearchSuggest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]
 **profile** | **bool**| profile | [optional] [default to true]

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse**](../Model/JsonNodeSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersSearch**
> \PureCloudPlatform\Client\V2\Model\UsersSearchResponse getUsersSearch($q64, $expand)

Search users using the q64 value returned from a previous search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q64 = "q64_example"; // string | q64
$expand = array("expand_example"); // string[] | expand

try {
    $result = $apiInstance->getUsersSearch($q64, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getUsersSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |
 **expand** | [**string[]**](../Model/string.md)| expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UsersSearchResponse**](../Model/UsersSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailSearch**
> \PureCloudPlatform\Client\V2\Model\VoicemailsSearchResponse getVoicemailSearch($q64, $expand)

Search voicemails using the q64 value returned from a previous search



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q64 = "q64_example"; // string | q64
$expand = array("expand_example"); // string[] | expand

try {
    $result = $apiInstance->getVoicemailSearch($q64, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getVoicemailSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q64** | **string**| q64 |
 **expand** | [**string[]**](../Model/string.md)| expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailsSearchResponse**](../Model/VoicemailsSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocumentationGknSearch**
> \PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchResponse postDocumentationGknSearch($body)

Search gkn documentation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchRequest(); // \PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchRequest | Search request options

try {
    $result = $apiInstance->postDocumentationGknSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postDocumentationGknSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchRequest**](../Model/GKNDocumentationSearchRequest.md)| Search request options |

### Return type

[**\PureCloudPlatform\Client\V2\Model\GKNDocumentationSearchResponse**](../Model/GKNDocumentationSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocumentationSearch**
> \PureCloudPlatform\Client\V2\Model\DocumentationSearchResponse postDocumentationSearch($body)

Search documentation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PureCloudPlatform\Client\V2\Model\DocumentationSearchRequest(); // \PureCloudPlatform\Client\V2\Model\DocumentationSearchRequest | Search request options

try {
    $result = $apiInstance->postDocumentationSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postDocumentationSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DocumentationSearchRequest**](../Model/DocumentationSearchRequest.md)| Search request options |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DocumentationSearchResponse**](../Model/DocumentationSearchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupsSearch**
> \PureCloudPlatform\Client\V2\Model\GroupsSearchResponse postGroupsSearch($body)

Search groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\GroupSearchRequest(); // \PureCloudPlatform\Client\V2\Model\GroupSearchRequest | Search request options

try {
    $result = $apiInstance->postGroupsSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postGroupsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\GroupSearchRequest**](../Model/GroupSearchRequest.md)| Search request options |

### Return type

[**\PureCloudPlatform\Client\V2\Model\GroupsSearchResponse**](../Model/GroupsSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLocationsSearch**
> \PureCloudPlatform\Client\V2\Model\LocationsSearchResponse postLocationsSearch($body)

Search locations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LocationSearchRequest(); // \PureCloudPlatform\Client\V2\Model\LocationSearchRequest | Search request options

try {
    $result = $apiInstance->postLocationsSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postLocationsSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LocationSearchRequest**](../Model/LocationSearchRequest.md)| Search request options |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationsSearchResponse**](../Model/LocationsSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSearch**
> \PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse postSearch($body, $profile)

Search resources.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SearchRequest(); // \PureCloudPlatform\Client\V2\Model\SearchRequest | Search request options
$profile = true; // bool | profile

try {
    $result = $apiInstance->postSearch($body, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SearchRequest**](../Model/SearchRequest.md)| Search request options |
 **profile** | **bool**| profile | [optional] [default to true]

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse**](../Model/JsonNodeSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSearchSuggest**
> \PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse postSearchSuggest($body, $profile)

Suggest resources.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SuggestSearchRequest(); // \PureCloudPlatform\Client\V2\Model\SuggestSearchRequest | Search request options
$profile = true; // bool | profile

try {
    $result = $apiInstance->postSearchSuggest($body, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postSearchSuggest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SuggestSearchRequest**](../Model/SuggestSearchRequest.md)| Search request options |
 **profile** | **bool**| profile | [optional] [default to true]

### Return type

[**\PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse**](../Model/JsonNodeSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsersSearch**
> \PureCloudPlatform\Client\V2\Model\UsersSearchResponse postUsersSearch($body)

Search users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserSearchRequest(); // \PureCloudPlatform\Client\V2\Model\UserSearchRequest | Search request options

try {
    $result = $apiInstance->postUsersSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postUsersSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserSearchRequest**](../Model/UserSearchRequest.md)| Search request options |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UsersSearchResponse**](../Model/UsersSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVoicemailSearch**
> \PureCloudPlatform\Client\V2\Model\VoicemailsSearchResponse postVoicemailSearch($body)

Search voicemails



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailSearchRequest(); // \PureCloudPlatform\Client\V2\Model\VoicemailSearchRequest | Search request options

try {
    $result = $apiInstance->postVoicemailSearch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->postVoicemailSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailSearchRequest**](../Model/VoicemailSearchRequest.md)| Search request options |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailsSearchResponse**](../Model/VoicemailsSearchResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

