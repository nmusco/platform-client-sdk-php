# PureCloudPlatform\Client\V2\ObjectsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuthorizationDivision**](ObjectsApi.md#deleteAuthorizationDivision) | **DELETE** /api/v2/authorization/divisions/{divisionId} | Delete a division.
[**getAuthorizationDivision**](ObjectsApi.md#getAuthorizationDivision) | **GET** /api/v2/authorization/divisions/{divisionId} | Returns an authorization division.
[**getAuthorizationDivisions**](ObjectsApi.md#getAuthorizationDivisions) | **GET** /api/v2/authorization/divisions | Retrieve a list of all divisions defined for the organization
[**getAuthorizationDivisionsHome**](ObjectsApi.md#getAuthorizationDivisionsHome) | **GET** /api/v2/authorization/divisions/home | Retrieve the home division for the organization.
[**getAuthorizationDivisionsLimit**](ObjectsApi.md#getAuthorizationDivisionsLimit) | **GET** /api/v2/authorization/divisions/limit | Returns the maximum allowed number of divisions.
[**postAuthorizationDivisionObject**](ObjectsApi.md#postAuthorizationDivisionObject) | **POST** /api/v2/authorization/divisions/{divisionId}/objects/{objectType} | Assign a list of objects to a division
[**postAuthorizationDivisions**](ObjectsApi.md#postAuthorizationDivisions) | **POST** /api/v2/authorization/divisions | Create a division.
[**putAuthorizationDivision**](ObjectsApi.md#putAuthorizationDivision) | **PUT** /api/v2/authorization/divisions/{divisionId} | Update a division.


# **deleteAuthorizationDivision**
> deleteAuthorizationDivision($divisionId)

Delete a division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divisionId = "divisionId_example"; // string | Division ID

try {
    $apiInstance->deleteAuthorizationDivision($divisionId);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->deleteAuthorizationDivision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **divisionId** | **string**| Division ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationDivision**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision getAuthorizationDivision($divisionId, $objectCount)

Returns an authorization division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divisionId = "divisionId_example"; // string | Division ID
$objectCount = false; // bool | Get count of objects in this division, grouped by type

try {
    $result = $apiInstance->getAuthorizationDivision($divisionId, $objectCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getAuthorizationDivision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **divisionId** | **string**| Division ID |
 **objectCount** | **bool**| Get count of objects in this division, grouped by type | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivision**](../Model/AuthzDivision.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationDivisions**
> \PureCloudPlatform\Client\V2\Model\AuthzDivisionEntityListing getAuthorizationDivisions($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $objectCount, $id, $name)

Retrieve a list of all divisions defined for the organization

Request specific divisions by id using a query param \"id\", e.g.  ?id=5f777167-63be-4c24-ad41-374155d9e28b&id=72e9fb25-c484-488d-9312-7acba82435b3

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
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
$objectCount = false; // bool | Include the count of objects contained in the division
$id = array("id_example"); // string[] | Optionally request specific divisions by their IDs
$name = "name_example"; // string | Search term to filter by division name

try {
    $result = $apiInstance->getAuthorizationDivisions($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $objectCount, $id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getAuthorizationDivisions: ', $e->getMessage(), PHP_EOL;
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
 **objectCount** | **bool**| Include the count of objects contained in the division | [optional] [default to false]
 **id** | [**string[]**](../Model/string.md)| Optionally request specific divisions by their IDs | [optional]
 **name** | **string**| Search term to filter by division name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivisionEntityListing**](../Model/AuthzDivisionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationDivisionsHome**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision getAuthorizationDivisionsHome()

Retrieve the home division for the organization.

Will not include object counts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationDivisionsHome();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getAuthorizationDivisionsHome: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivision**](../Model/AuthzDivision.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationDivisionsLimit**
> int getAuthorizationDivisionsLimit()

Returns the maximum allowed number of divisions.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationDivisionsLimit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->getAuthorizationDivisionsLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationDivisionObject**
> postAuthorizationDivisionObject($divisionId, $objectType, $body)

Assign a list of objects to a division

Set the division of a specified list of objects. The objects must all be of the same type, one of:  CAMPAIGN, MANAGEMENTUNIT, FLOW, QUEUE, or USER.  The body of the request is a list of object IDs, which are expected to be  GUIDs, e.g. [\"206ce31f-61ec-40ed-a8b1-be6f06303998\",\"250a754e-f5e4-4f51-800f-a92f09d3bf8c\"]

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divisionId = "divisionId_example"; // string | Division ID
$objectType = "objectType_example"; // string | The type of the objects. Must be one of the valid object types
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | Object Id List

try {
    $apiInstance->postAuthorizationDivisionObject($divisionId, $objectType, $body);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->postAuthorizationDivisionObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **divisionId** | **string**| Division ID |
 **objectType** | **string**| The type of the objects. Must be one of the valid object types |
 **body** | **string[]**| Object Id List |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationDivisions**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision postAuthorizationDivisions($body)

Create a division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\AuthzDivision(); // \PureCloudPlatform\Client\V2\Model\AuthzDivision | Division

try {
    $result = $apiInstance->postAuthorizationDivisions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->postAuthorizationDivisions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\AuthzDivision**](../Model/AuthzDivision.md)| Division |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivision**](../Model/AuthzDivision.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAuthorizationDivision**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision putAuthorizationDivision($divisionId, $body)

Update a division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divisionId = "divisionId_example"; // string | Division ID
$body = new \PureCloudPlatform\Client\V2\Model\AuthzDivision(); // \PureCloudPlatform\Client\V2\Model\AuthzDivision | Updated division data

try {
    $result = $apiInstance->putAuthorizationDivision($divisionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectsApi->putAuthorizationDivision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **divisionId** | **string**| Division ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\AuthzDivision**](../Model/AuthzDivision.md)| Updated division data |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivision**](../Model/AuthzDivision.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

