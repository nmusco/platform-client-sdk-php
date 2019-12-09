# PureCloudPlatform\Client\V2\PresenceApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePresencedefinition**](PresenceApi.md#deletePresencedefinition) | **DELETE** /api/v2/presencedefinitions/{presenceId} | Delete a Presence Definition
[**getPresencedefinition**](PresenceApi.md#getPresencedefinition) | **GET** /api/v2/presencedefinitions/{presenceId} | Get a Presence Definition
[**getPresencedefinitions**](PresenceApi.md#getPresencedefinitions) | **GET** /api/v2/presencedefinitions | Get an Organization&#39;s list of Presence Definitions
[**getSystempresences**](PresenceApi.md#getSystempresences) | **GET** /api/v2/systempresences | Get the list of SystemPresences
[**getUserPresence**](PresenceApi.md#getUserPresence) | **GET** /api/v2/users/{userId}/presences/{sourceId} | Get a user&#39;s Presence
[**patchUserPresence**](PresenceApi.md#patchUserPresence) | **PATCH** /api/v2/users/{userId}/presences/{sourceId} | Patch a user&#39;s Presence
[**postPresencedefinitions**](PresenceApi.md#postPresencedefinitions) | **POST** /api/v2/presencedefinitions | Create a Presence Definition
[**putPresencedefinition**](PresenceApi.md#putPresencedefinition) | **PUT** /api/v2/presencedefinitions/{presenceId} | Update a Presence Definition
[**putUsersPresencesBulk**](PresenceApi.md#putUsersPresencesBulk) | **PUT** /api/v2/users/presences/bulk | Update bulk user Presences


# **deletePresencedefinition**
> deletePresencedefinition($presenceId)

Delete a Presence Definition



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$presenceId = "presenceId_example"; // string | Organization Presence ID

try {
    $apiInstance->deletePresencedefinition($presenceId);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->deletePresencedefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **presenceId** | **string**| Organization Presence ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPresencedefinition**
> \PureCloudPlatform\Client\V2\Model\OrganizationPresence getPresencedefinition($presenceId, $localeCode)

Get a Presence Definition



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$presenceId = "presenceId_example"; // string | Organization Presence ID
$localeCode = "localeCode_example"; // string | The locale code to fetch for the presence definition. Use ALL to fetch everything.

try {
    $result = $apiInstance->getPresencedefinition($presenceId, $localeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->getPresencedefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **presenceId** | **string**| Organization Presence ID |
 **localeCode** | **string**| The locale code to fetch for the presence definition. Use ALL to fetch everything. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationPresence**](../Model/OrganizationPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPresencedefinitions**
> \PureCloudPlatform\Client\V2\Model\OrganizationPresenceEntityListing getPresencedefinitions($pageNumber, $pageSize, $deleted, $localeCode)

Get an Organization's list of Presence Definitions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$deleted = "false"; // string | Deleted query can be TRUE, FALSE or ALL
$localeCode = "localeCode_example"; // string | The locale code to fetch for each presence definition. Use ALL to fetch everything.

try {
    $result = $apiInstance->getPresencedefinitions($pageNumber, $pageSize, $deleted, $localeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->getPresencedefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **deleted** | **string**| Deleted query can be TRUE, FALSE or ALL | [optional] [default to false]
 **localeCode** | **string**| The locale code to fetch for each presence definition. Use ALL to fetch everything. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationPresenceEntityListing**](../Model/OrganizationPresenceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSystempresences**
> \PureCloudPlatform\Client\V2\Model\SystemPresence[] getSystempresences()

Get the list of SystemPresences



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSystempresences();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->getSystempresences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\SystemPresence[]**](../Model/SystemPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserPresence**
> \PureCloudPlatform\Client\V2\Model\UserPresence getUserPresence($userId, $sourceId)

Get a user's Presence



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | user Id
$sourceId = "sourceId_example"; // string | Source

try {
    $result = $apiInstance->getUserPresence($userId, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->getUserPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| user Id |
 **sourceId** | **string**| Source |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserPresence**](../Model/UserPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserPresence**
> \PureCloudPlatform\Client\V2\Model\UserPresence patchUserPresence($userId, $sourceId, $body)

Patch a user's Presence

The presence object can be patched one of three ways. Option 1: Set the 'primary' property to true. This will set the 'source' defined in the path as the user's primary presence source. Option 2: Provide the presenceDefinition value. The 'id' is the only value required within the presenceDefinition. Option 3: Provide the message value. Option 1 can be combined with Option 2 and/or Option 3.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | user Id
$sourceId = "sourceId_example"; // string | Source
$body = new \PureCloudPlatform\Client\V2\Model\UserPresence(); // \PureCloudPlatform\Client\V2\Model\UserPresence | User presence

try {
    $result = $apiInstance->patchUserPresence($userId, $sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->patchUserPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| user Id |
 **sourceId** | **string**| Source |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserPresence**](../Model/UserPresence.md)| User presence |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserPresence**](../Model/UserPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPresencedefinitions**
> \PureCloudPlatform\Client\V2\Model\OrganizationPresence postPresencedefinitions($body)

Create a Presence Definition



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\OrganizationPresence(); // \PureCloudPlatform\Client\V2\Model\OrganizationPresence | The Presence Definition to create

try {
    $result = $apiInstance->postPresencedefinitions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->postPresencedefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\OrganizationPresence**](../Model/OrganizationPresence.md)| The Presence Definition to create |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationPresence**](../Model/OrganizationPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPresencedefinition**
> \PureCloudPlatform\Client\V2\Model\OrganizationPresence putPresencedefinition($presenceId, $body)

Update a Presence Definition



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$presenceId = "presenceId_example"; // string | Organization Presence ID
$body = new \PureCloudPlatform\Client\V2\Model\OrganizationPresence(); // \PureCloudPlatform\Client\V2\Model\OrganizationPresence | The OrganizationPresence to update

try {
    $result = $apiInstance->putPresencedefinition($presenceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->putPresencedefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **presenceId** | **string**| Organization Presence ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\OrganizationPresence**](../Model/OrganizationPresence.md)| The OrganizationPresence to update |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationPresence**](../Model/OrganizationPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUsersPresencesBulk**
> \PureCloudPlatform\Client\V2\Model\UserPresence[] putUsersPresencesBulk($body)

Update bulk user Presences



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\PresenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \PureCloudPlatform\Client\V2\Model\UserPresence()); // \PureCloudPlatform\Client\V2\Model\UserPresence[] | List of User presences

try {
    $result = $apiInstance->putUsersPresencesBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresenceApi->putUsersPresencesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserPresence[]**](../Model/UserPresence.md)| List of User presences |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserPresence[]**](../Model/UserPresence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

