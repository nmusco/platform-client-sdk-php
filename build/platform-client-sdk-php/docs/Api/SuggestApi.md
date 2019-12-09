# PureCloudPlatform\Client\V2\SuggestApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSearch**](SuggestApi.md#getSearch) | **GET** /api/v2/search | Search using the q64 value returned from a previous search.
[**getSearchSuggest**](SuggestApi.md#getSearchSuggest) | **GET** /api/v2/search/suggest | Suggest resources using the q64 value returned from a previous suggest query.
[**postSearch**](SuggestApi.md#postSearch) | **POST** /api/v2/search | Search resources.
[**postSearchSuggest**](SuggestApi.md#postSearchSuggest) | **POST** /api/v2/search/suggest | Suggest resources.


# **getSearch**
> \PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse getSearch($q64, $expand, $profile)

Search using the q64 value returned from a previous search.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SuggestApi(
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
    echo 'Exception when calling SuggestApi->getSearch: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\SuggestApi(
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
    echo 'Exception when calling SuggestApi->getSearchSuggest: ', $e->getMessage(), PHP_EOL;
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

# **postSearch**
> \PureCloudPlatform\Client\V2\Model\JsonNodeSearchResponse postSearch($body, $profile)

Search resources.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SuggestApi(
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
    echo 'Exception when calling SuggestApi->postSearch: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\SuggestApi(
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
    echo 'Exception when calling SuggestApi->postSearchSuggest: ', $e->getMessage(), PHP_EOL;
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

