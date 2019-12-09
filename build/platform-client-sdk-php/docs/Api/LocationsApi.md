# PureCloudPlatform\Client\V2\LocationsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteLocation**](LocationsApi.md#deleteLocation) | **DELETE** /api/v2/locations/{locationId} | Delete a location
[**getLocation**](LocationsApi.md#getLocation) | **GET** /api/v2/locations/{locationId} | Get Location by ID.
[**getLocationSublocations**](LocationsApi.md#getLocationSublocations) | **GET** /api/v2/locations/{locationId}/sublocations | Get sublocations for location ID.
[**getLocations**](LocationsApi.md#getLocations) | **GET** /api/v2/locations | Get a list of all locations.
[**getLocationsSearch**](LocationsApi.md#getLocationsSearch) | **GET** /api/v2/locations/search | Search locations using the q64 value returned from a previous search
[**patchLocation**](LocationsApi.md#patchLocation) | **PATCH** /api/v2/locations/{locationId} | Update a location
[**postLocations**](LocationsApi.md#postLocations) | **POST** /api/v2/locations | Create a location
[**postLocationsSearch**](LocationsApi.md#postLocationsSearch) | **POST** /api/v2/locations/search | Search locations


# **deleteLocation**
> deleteLocation($locationId)

Delete a location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = "locationId_example"; // string | Location ID

try {
    $apiInstance->deleteLocation($locationId);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->deleteLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locationId** | **string**| Location ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocation**
> \PureCloudPlatform\Client\V2\Model\LocationDefinition getLocation($locationId, $expand)

Get Location by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = "locationId_example"; // string | Location ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getLocation($locationId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locationId** | **string**| Location ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationDefinition**](../Model/LocationDefinition.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocationSublocations**
> \PureCloudPlatform\Client\V2\Model\LocationEntityListing getLocationSublocations($locationId)

Get sublocations for location ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = "locationId_example"; // string | Location ID

try {
    $result = $apiInstance->getLocationSublocations($locationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationSublocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locationId** | **string**| Location ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationEntityListing**](../Model/LocationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocations**
> \PureCloudPlatform\Client\V2\Model\LocationEntityListing getLocations($pageSize, $pageNumber, $id, $sortOrder)

Get a list of all locations.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$id = array("id_example"); // string[] | id
$sortOrder = "sortOrder_example"; // string | Sort order

try {
    $result = $apiInstance->getLocations($pageSize, $pageNumber, $id, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **sortOrder** | **string**| Sort order | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationEntityListing**](../Model/LocationEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
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
    echo 'Exception when calling LocationsApi->getLocationsSearch: ', $e->getMessage(), PHP_EOL;
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

# **patchLocation**
> \PureCloudPlatform\Client\V2\Model\LocationDefinition patchLocation($locationId, $body)

Update a location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locationId = "locationId_example"; // string | Location ID
$body = new \PureCloudPlatform\Client\V2\Model\LocationUpdateDefinition(); // \PureCloudPlatform\Client\V2\Model\LocationUpdateDefinition | Location

try {
    $result = $apiInstance->patchLocation($locationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->patchLocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locationId** | **string**| Location ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\LocationUpdateDefinition**](../Model/LocationUpdateDefinition.md)| Location |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationDefinition**](../Model/LocationDefinition.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLocations**
> \PureCloudPlatform\Client\V2\Model\LocationDefinition postLocations($body)

Create a location



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LocationCreateDefinition(); // \PureCloudPlatform\Client\V2\Model\LocationCreateDefinition | Location

try {
    $result = $apiInstance->postLocations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->postLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LocationCreateDefinition**](../Model/LocationCreateDefinition.md)| Location |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LocationDefinition**](../Model/LocationDefinition.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\LocationsApi(
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
    echo 'Exception when calling LocationsApi->postLocationsSearch: ', $e->getMessage(), PHP_EOL;
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

