# PureCloudPlatform\Client\V2\UsersApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuthorizationSubjectDivisionRole**](UsersApi.md#deleteAuthorizationSubjectDivisionRole) | **DELETE** /api/v2/authorization/subjects/{subjectId}/divisions/{divisionId}/roles/{roleId} | Delete a grant of a role in a division
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /api/v2/users/{userId} | Delete user
[**deleteUserRoles**](UsersApi.md#deleteUserRoles) | **DELETE** /api/v2/users/{userId}/roles | Removes all the roles from the user.
[**deleteUserRoutinglanguage**](UsersApi.md#deleteUserRoutinglanguage) | **DELETE** /api/v2/users/{userId}/routinglanguages/{languageId} | Remove routing language from user
[**deleteUserRoutingskill**](UsersApi.md#deleteUserRoutingskill) | **DELETE** /api/v2/users/{userId}/routingskills/{skillId} | Remove routing skill from user
[**deleteUserStationAssociatedstation**](UsersApi.md#deleteUserStationAssociatedstation) | **DELETE** /api/v2/users/{userId}/station/associatedstation | Clear associated station
[**deleteUserStationDefaultstation**](UsersApi.md#deleteUserStationDefaultstation) | **DELETE** /api/v2/users/{userId}/station/defaultstation | Clear default station
[**getAuthorizationDivisionspermittedMe**](UsersApi.md#getAuthorizationDivisionspermittedMe) | **GET** /api/v2/authorization/divisionspermitted/me | Returns whether or not current user can perform the specified action(s).
[**getAuthorizationDivisionspermittedSubjectId**](UsersApi.md#getAuthorizationDivisionspermittedSubjectId) | **GET** /api/v2/authorization/divisionspermitted/{subjectId} | Returns whether or not specified user can perform the specified action(s).
[**getAuthorizationSubject**](UsersApi.md#getAuthorizationSubject) | **GET** /api/v2/authorization/subjects/{subjectId} | Returns a listing of roles and permissions for a user.
[**getAuthorizationSubjectsMe**](UsersApi.md#getAuthorizationSubjectsMe) | **GET** /api/v2/authorization/subjects/me | Returns a listing of roles and permissions for the currently authenticated user.
[**getFieldconfig**](UsersApi.md#getFieldconfig) | **GET** /api/v2/fieldconfig | Fetch field config for an entity type
[**getProfilesUsers**](UsersApi.md#getProfilesUsers) | **GET** /api/v2/profiles/users | Get a user profile listing
[**getUser**](UsersApi.md#getUser) | **GET** /api/v2/users/{userId} | Get user.
[**getUserAdjacents**](UsersApi.md#getUserAdjacents) | **GET** /api/v2/users/{userId}/adjacents | Get adjacents
[**getUserCallforwarding**](UsersApi.md#getUserCallforwarding) | **GET** /api/v2/users/{userId}/callforwarding | Get a user&#39;s CallForwarding
[**getUserDirectreports**](UsersApi.md#getUserDirectreports) | **GET** /api/v2/users/{userId}/directreports | Get direct reports
[**getUserFavorites**](UsersApi.md#getUserFavorites) | **GET** /api/v2/users/{userId}/favorites | Get favorites
[**getUserGeolocation**](UsersApi.md#getUserGeolocation) | **GET** /api/v2/users/{userId}/geolocations/{clientId} | Get a user&#39;s Geolocation
[**getUserOutofoffice**](UsersApi.md#getUserOutofoffice) | **GET** /api/v2/users/{userId}/outofoffice | Get a OutOfOffice
[**getUserProfile**](UsersApi.md#getUserProfile) | **GET** /api/v2/users/{userId}/profile | Get user profile
[**getUserProfileskills**](UsersApi.md#getUserProfileskills) | **GET** /api/v2/users/{userId}/profileskills | List profile skills for a user
[**getUserQueues**](UsersApi.md#getUserQueues) | **GET** /api/v2/users/{userId}/queues | Get queues for user
[**getUserRoles**](UsersApi.md#getUserRoles) | **GET** /api/v2/users/{userId}/roles | Returns a listing of roles and permissions for a user.
[**getUserRoutinglanguages**](UsersApi.md#getUserRoutinglanguages) | **GET** /api/v2/users/{userId}/routinglanguages | List routing language for user
[**getUserRoutingskills**](UsersApi.md#getUserRoutingskills) | **GET** /api/v2/users/{userId}/routingskills | List routing skills for user
[**getUserRoutingstatus**](UsersApi.md#getUserRoutingstatus) | **GET** /api/v2/users/{userId}/routingstatus | Fetch the routing status of a user
[**getUserStation**](UsersApi.md#getUserStation) | **GET** /api/v2/users/{userId}/station | Get station information for user
[**getUserSuperiors**](UsersApi.md#getUserSuperiors) | **GET** /api/v2/users/{userId}/superiors | Get superiors
[**getUserTrustors**](UsersApi.md#getUserTrustors) | **GET** /api/v2/users/{userId}/trustors | List the organizations that have authorized/trusted the user.
[**getUsers**](UsersApi.md#getUsers) | **GET** /api/v2/users | Get the list of available users.
[**getUsersMe**](UsersApi.md#getUsersMe) | **GET** /api/v2/users/me | Get current user details.
[**getUsersSearch**](UsersApi.md#getUsersSearch) | **GET** /api/v2/users/search | Search users using the q64 value returned from a previous search
[**patchUser**](UsersApi.md#patchUser) | **PATCH** /api/v2/users/{userId} | Update user
[**patchUserCallforwarding**](UsersApi.md#patchUserCallforwarding) | **PATCH** /api/v2/users/{userId}/callforwarding | Patch a user&#39;s CallForwarding
[**patchUserGeolocation**](UsersApi.md#patchUserGeolocation) | **PATCH** /api/v2/users/{userId}/geolocations/{clientId} | Patch a user&#39;s Geolocation
[**patchUserQueue**](UsersApi.md#patchUserQueue) | **PATCH** /api/v2/users/{userId}/queues/{queueId} | Join or unjoin a queue for a user
[**patchUserQueues**](UsersApi.md#patchUserQueues) | **PATCH** /api/v2/users/{userId}/queues | Join or unjoin a set of queues for a user
[**patchUserRoutinglanguage**](UsersApi.md#patchUserRoutinglanguage) | **PATCH** /api/v2/users/{userId}/routinglanguages/{languageId} | Update routing language proficiency or state.
[**patchUserRoutinglanguagesBulk**](UsersApi.md#patchUserRoutinglanguagesBulk) | **PATCH** /api/v2/users/{userId}/routinglanguages/bulk | Add bulk routing language to user. Max limit 50 languages
[**patchUserRoutingskillsBulk**](UsersApi.md#patchUserRoutingskillsBulk) | **PATCH** /api/v2/users/{userId}/routingskills/bulk | Bulk add routing skills to user
[**patchUsersBulk**](UsersApi.md#patchUsersBulk) | **PATCH** /api/v2/users/bulk | Update bulk acd autoanswer on users
[**postAnalyticsUsersAggregatesQuery**](UsersApi.md#postAnalyticsUsersAggregatesQuery) | **POST** /api/v2/analytics/users/aggregates/query | Query for user aggregates
[**postAnalyticsUsersDetailsQuery**](UsersApi.md#postAnalyticsUsersDetailsQuery) | **POST** /api/v2/analytics/users/details/query | Query for user details
[**postAnalyticsUsersObservationsQuery**](UsersApi.md#postAnalyticsUsersObservationsQuery) | **POST** /api/v2/analytics/users/observations/query | Query for user observations
[**postAuthorizationSubjectBulkadd**](UsersApi.md#postAuthorizationSubjectBulkadd) | **POST** /api/v2/authorization/subjects/{subjectId}/bulkadd | Bulk-grant roles and divisions to a subject.
[**postAuthorizationSubjectBulkremove**](UsersApi.md#postAuthorizationSubjectBulkremove) | **POST** /api/v2/authorization/subjects/{subjectId}/bulkremove | Bulk-remove grants from a subject.
[**postAuthorizationSubjectDivisionRole**](UsersApi.md#postAuthorizationSubjectDivisionRole) | **POST** /api/v2/authorization/subjects/{subjectId}/divisions/{divisionId}/roles/{roleId} | Make a grant of a role in a division
[**postUserInvite**](UsersApi.md#postUserInvite) | **POST** /api/v2/users/{userId}/invite | Send an activation email to the user
[**postUserPassword**](UsersApi.md#postUserPassword) | **POST** /api/v2/users/{userId}/password | Change a users password
[**postUserRoutinglanguages**](UsersApi.md#postUserRoutinglanguages) | **POST** /api/v2/users/{userId}/routinglanguages | Add routing language to user
[**postUserRoutingskills**](UsersApi.md#postUserRoutingskills) | **POST** /api/v2/users/{userId}/routingskills | Add routing skill to user
[**postUsers**](UsersApi.md#postUsers) | **POST** /api/v2/users | Create user
[**postUsersMePassword**](UsersApi.md#postUsersMePassword) | **POST** /api/v2/users/me/password | Change your password
[**postUsersSearch**](UsersApi.md#postUsersSearch) | **POST** /api/v2/users/search | Search users
[**putUserCallforwarding**](UsersApi.md#putUserCallforwarding) | **PUT** /api/v2/users/{userId}/callforwarding | Update a user&#39;s CallForwarding
[**putUserOutofoffice**](UsersApi.md#putUserOutofoffice) | **PUT** /api/v2/users/{userId}/outofoffice | Update an OutOfOffice
[**putUserProfileskills**](UsersApi.md#putUserProfileskills) | **PUT** /api/v2/users/{userId}/profileskills | Update profile skills for a user
[**putUserRoles**](UsersApi.md#putUserRoles) | **PUT** /api/v2/users/{userId}/roles | Sets the user&#39;s roles
[**putUserRoutingskill**](UsersApi.md#putUserRoutingskill) | **PUT** /api/v2/users/{userId}/routingskills/{skillId} | Update routing skill proficiency or state.
[**putUserRoutingskillsBulk**](UsersApi.md#putUserRoutingskillsBulk) | **PUT** /api/v2/users/{userId}/routingskills/bulk | Replace all routing skills assigned to a user
[**putUserRoutingstatus**](UsersApi.md#putUserRoutingstatus) | **PUT** /api/v2/users/{userId}/routingstatus | Update the routing status of a user
[**putUserStationAssociatedstationStationId**](UsersApi.md#putUserStationAssociatedstationStationId) | **PUT** /api/v2/users/{userId}/station/associatedstation/{stationId} | Set associated station
[**putUserStationDefaultstationStationId**](UsersApi.md#putUserStationDefaultstationStationId) | **PUT** /api/v2/users/{userId}/station/defaultstation/{stationId} | Set default station


# **deleteAuthorizationSubjectDivisionRole**
> deleteAuthorizationSubjectDivisionRole($subjectId, $divisionId, $roleId)

Delete a grant of a role in a division



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectId = "subjectId_example"; // string | Subject ID (user or group)
$divisionId = "divisionId_example"; // string | the id of the division of the grant
$roleId = "roleId_example"; // string | the id of the role of the grant

try {
    $apiInstance->deleteAuthorizationSubjectDivisionRole($subjectId, $divisionId, $roleId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteAuthorizationSubjectDivisionRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectId** | **string**| Subject ID (user or group) |
 **divisionId** | **string**| the id of the division of the grant |
 **roleId** | **string**| the id of the role of the grant |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUser**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteUser($userId)

Delete user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->deleteUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserRoles**
> deleteUserRoles($userId)

Removes all the roles from the user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $apiInstance->deleteUserRoles($userId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserRoutinglanguage**
> deleteUserRoutinglanguage($userId, $languageId)

Remove routing language from user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$languageId = "languageId_example"; // string | languageId

try {
    $apiInstance->deleteUserRoutinglanguage($userId, $languageId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserRoutinglanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **languageId** | **string**| languageId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserRoutingskill**
> deleteUserRoutingskill($userId, $skillId)

Remove routing skill from user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$skillId = "skillId_example"; // string | skillId

try {
    $apiInstance->deleteUserRoutingskill($userId, $skillId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserRoutingskill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **skillId** | **string**| skillId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserStationAssociatedstation**
> deleteUserStationAssociatedstation($userId)

Clear associated station



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $apiInstance->deleteUserStationAssociatedstation($userId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserStationAssociatedstation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUserStationDefaultstation**
> deleteUserStationDefaultstation($userId)

Clear default station



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $apiInstance->deleteUserStationDefaultstation($userId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserStationDefaultstation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationDivisionspermittedMe**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision[] getAuthorizationDivisionspermittedMe($permission, $name)

Returns whether or not current user can perform the specified action(s).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permission = "permission_example"; // string | The permission string, including the object to access, e.g. routing:queue:view
$name = "name_example"; // string | Search term to filter by division name

try {
    $result = $apiInstance->getAuthorizationDivisionspermittedMe($permission, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAuthorizationDivisionspermittedMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission** | **string**| The permission string, including the object to access, e.g. routing:queue:view |
 **name** | **string**| Search term to filter by division name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivision[]**](../Model/AuthzDivision.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationDivisionspermittedSubjectId**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision[] getAuthorizationDivisionspermittedSubjectId($subjectId, $permission, $name)

Returns whether or not specified user can perform the specified action(s).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectId = "subjectId_example"; // string | Subject ID (user or group)
$permission = "permission_example"; // string | The permission string, including the object to access, e.g. routing:queue:view
$name = "name_example"; // string | Search term to filter by division name

try {
    $result = $apiInstance->getAuthorizationDivisionspermittedSubjectId($subjectId, $permission, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAuthorizationDivisionspermittedSubjectId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectId** | **string**| Subject ID (user or group) |
 **permission** | **string**| The permission string, including the object to access, e.g. routing:queue:view |
 **name** | **string**| Search term to filter by division name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzDivision[]**](../Model/AuthzDivision.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationSubject**
> \PureCloudPlatform\Client\V2\Model\AuthzSubject getAuthorizationSubject($subjectId)

Returns a listing of roles and permissions for a user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectId = "subjectId_example"; // string | Subject ID (user or group)

try {
    $result = $apiInstance->getAuthorizationSubject($subjectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAuthorizationSubject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectId** | **string**| Subject ID (user or group) |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzSubject**](../Model/AuthzSubject.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationSubjectsMe**
> \PureCloudPlatform\Client\V2\Model\AuthzSubject getAuthorizationSubjectsMe()

Returns a listing of roles and permissions for the currently authenticated user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationSubjectsMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getAuthorizationSubjectsMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuthzSubject**](../Model/AuthzSubject.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFieldconfig**
> \PureCloudPlatform\Client\V2\Model\FieldConfig getFieldconfig($type)

Fetch field config for an entity type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Field type

try {
    $result = $apiInstance->getFieldconfig($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getFieldconfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Field type |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FieldConfig**](../Model/FieldConfig.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfilesUsers**
> \PureCloudPlatform\Client\V2\Model\UserProfileEntityListing getProfilesUsers($pageSize, $pageNumber, $id, $jid, $sortOrder, $expand)

Get a user profile listing



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$id = array("id_example"); // string[] | id
$jid = array("jid_example"); // string[] | jid
$sortOrder = "ASC"; // string | Ascending or descending sort order
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getProfilesUsers($pageSize, $pageNumber, $id, $jid, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getProfilesUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **jid** | [**string[]**](../Model/string.md)| jid | [optional]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserProfileEntityListing**](../Model/UserProfileEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \PureCloudPlatform\Client\V2\Model\User getUser($userId, $expand, $state)

Get user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand
$state = "active"; // string | Search for a user with this state

try {
    $result = $apiInstance->getUser($userId, $expand, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]
 **state** | **string**| Search for a user with this state | [optional] [default to active]

### Return type

[**\PureCloudPlatform\Client\V2\Model\User**](../Model/User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAdjacents**
> \PureCloudPlatform\Client\V2\Model\Adjacents getUserAdjacents($userId, $expand)

Get adjacents



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getUserAdjacents($userId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserAdjacents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Adjacents**](../Model/Adjacents.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserCallforwarding**
> \PureCloudPlatform\Client\V2\Model\CallForwarding getUserCallforwarding($userId)

Get a user's CallForwarding



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserCallforwarding($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserCallforwarding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallForwarding**](../Model/CallForwarding.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDirectreports**
> \PureCloudPlatform\Client\V2\Model\User[] getUserDirectreports($userId, $expand)

Get direct reports



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getUserDirectreports($userId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDirectreports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\User[]**](../Model/User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserFavorites**
> \PureCloudPlatform\Client\V2\Model\UserEntityListing getUserFavorites($userId, $pageSize, $pageNumber, $sortOrder, $expand)

Get favorites



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortOrder = "ASC"; // string | Sort order
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getUserFavorites($userId, $pageSize, $pageNumber, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserFavorites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserEntityListing**](../Model/UserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGeolocation**
> \PureCloudPlatform\Client\V2\Model\Geolocation getUserGeolocation($userId, $clientId)

Get a user's Geolocation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | user Id
$clientId = "clientId_example"; // string | client Id

try {
    $result = $apiInstance->getUserGeolocation($userId, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| user Id |
 **clientId** | **string**| client Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Geolocation**](../Model/Geolocation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserOutofoffice**
> \PureCloudPlatform\Client\V2\Model\OutOfOffice getUserOutofoffice($userId)

Get a OutOfOffice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserOutofoffice($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserOutofoffice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutOfOffice**](../Model/OutOfOffice.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserProfile**
> \PureCloudPlatform\Client\V2\Model\UserProfile getUserProfile($userId, $expand)

Get user profile



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | userId
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getUserProfile($userId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| userId |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserProfile**](../Model/UserProfile.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserProfileskills**
> string[] getUserProfileskills($userId)

List profile skills for a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserProfileskills($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserProfileskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserQueues**
> \PureCloudPlatform\Client\V2\Model\UserQueueEntityListing getUserQueues($userId, $pageSize, $pageNumber, $joined, $divisionId)

Get queues for user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$joined = true; // bool | Is joined to the queue
$divisionId = array("divisionId_example"); // string[] | Division ID(s)

try {
    $result = $apiInstance->getUserQueues($userId, $pageSize, $pageNumber, $joined, $divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **joined** | **bool**| Is joined to the queue | [optional] [default to true]
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserQueueEntityListing**](../Model/UserQueueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoles**
> \PureCloudPlatform\Client\V2\Model\UserAuthorization getUserRoles($userId)

Returns a listing of roles and permissions for a user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserRoles($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserAuthorization**](../Model/UserAuthorization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoutinglanguages**
> \PureCloudPlatform\Client\V2\Model\UserLanguageEntityListing getUserRoutinglanguages($userId, $pageSize, $pageNumber, $sortOrder)

List routing language for user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortOrder = "ASC"; // string | Ascending or descending sort order

try {
    $result = $apiInstance->getUserRoutinglanguages($userId, $pageSize, $pageNumber, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRoutinglanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserLanguageEntityListing**](../Model/UserLanguageEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoutingskills**
> \PureCloudPlatform\Client\V2\Model\UserSkillEntityListing getUserRoutingskills($userId, $pageSize, $pageNumber, $sortOrder)

List routing skills for user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortOrder = "ASC"; // string | Ascending or descending sort order

try {
    $result = $apiInstance->getUserRoutingskills($userId, $pageSize, $pageNumber, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRoutingskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserSkillEntityListing**](../Model/UserSkillEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserRoutingstatus**
> \PureCloudPlatform\Client\V2\Model\RoutingStatus getUserRoutingstatus($userId)

Fetch the routing status of a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserRoutingstatus($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserRoutingstatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RoutingStatus**](../Model/RoutingStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserStation**
> \PureCloudPlatform\Client\V2\Model\UserStations getUserStation($userId)

Get station information for user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserStation($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserStation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserStations**](../Model/UserStations.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserSuperiors**
> \PureCloudPlatform\Client\V2\Model\User[] getUserSuperiors($userId, $expand)

Get superiors



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getUserSuperiors($userId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserSuperiors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\User[]**](../Model/User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserTrustors**
> \PureCloudPlatform\Client\V2\Model\TrustorEntityListing getUserTrustors($userId, $pageSize, $pageNumber)

List the organizations that have authorized/trusted the user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getUserTrustors($userId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserTrustors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustorEntityListing**](../Model/TrustorEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \PureCloudPlatform\Client\V2\Model\UserEntityListing getUsers($pageSize, $pageNumber, $id, $jabberId, $sortOrder, $expand, $state)

Get the list of available users.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$id = array("id_example"); // string[] | A list of user IDs to fetch by bulk
$jabberId = array("jabberId_example"); // string[] | A list of jabberIds to fetch by bulk (cannot be used with the \"id\" parameter)
$sortOrder = "ASC"; // string | Ascending or descending sort order
$expand = array("expand_example"); // string[] | Which fields, if any, to expand
$state = "active"; // string | Only list users of this state

try {
    $result = $apiInstance->getUsers($pageSize, $pageNumber, $id, $jabberId, $sortOrder, $expand, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **id** | [**string[]**](../Model/string.md)| A list of user IDs to fetch by bulk | [optional]
 **jabberId** | [**string[]**](../Model/string.md)| A list of jabberIds to fetch by bulk (cannot be used with the \&quot;id\&quot; parameter) | [optional]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]
 **state** | **string**| Only list users of this state | [optional] [default to active]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserEntityListing**](../Model/UserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersMe**
> \PureCloudPlatform\Client\V2\Model\UserMe getUsersMe($expand)

Get current user details.

This request is not valid when using the Client Credentials OAuth grant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getUsersMe($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserMe**](../Model/UserMe.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->getUsersSearch: ', $e->getMessage(), PHP_EOL;
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

# **patchUser**
> \PureCloudPlatform\Client\V2\Model\User patchUser($userId, $body)

Update user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\UpdateUser(); // \PureCloudPlatform\Client\V2\Model\UpdateUser | User

try {
    $result = $apiInstance->patchUser($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UpdateUser**](../Model/UpdateUser.md)| User |

### Return type

[**\PureCloudPlatform\Client\V2\Model\User**](../Model/User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserCallforwarding**
> \PureCloudPlatform\Client\V2\Model\CallForwarding patchUserCallforwarding($userId, $body)

Patch a user's CallForwarding



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\CallForwarding(); // \PureCloudPlatform\Client\V2\Model\CallForwarding | Call forwarding

try {
    $result = $apiInstance->patchUserCallforwarding($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserCallforwarding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CallForwarding**](../Model/CallForwarding.md)| Call forwarding |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallForwarding**](../Model/CallForwarding.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserGeolocation**
> \PureCloudPlatform\Client\V2\Model\Geolocation patchUserGeolocation($userId, $clientId, $body)

Patch a user's Geolocation

The geolocation object can be patched one of three ways. Option 1: Set the 'primary' property to true. This will set the client as the user's primary geolocation source.  Option 2: Provide the 'latitude' and 'longitude' values.  This will enqueue an asynchronous update of the 'city', 'region', and 'country', generating a notification. A subsequent GET operation will include the new values for 'city', 'region' and 'country'.  Option 3:  Provide the 'city', 'region', 'country' values.  Option 1 can be combined with Option 2 or Option 3.  For example, update the client as primary and provide latitude and longitude values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | user Id
$clientId = "clientId_example"; // string | client Id
$body = new \PureCloudPlatform\Client\V2\Model\Geolocation(); // \PureCloudPlatform\Client\V2\Model\Geolocation | Geolocation

try {
    $result = $apiInstance->patchUserGeolocation($userId, $clientId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| user Id |
 **clientId** | **string**| client Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Geolocation**](../Model/Geolocation.md)| Geolocation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Geolocation**](../Model/Geolocation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserQueue**
> \PureCloudPlatform\Client\V2\Model\UserQueue patchUserQueue($queueId, $userId, $body)

Join or unjoin a queue for a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\UserQueue(); // \PureCloudPlatform\Client\V2\Model\UserQueue | Queue Member

try {
    $result = $apiInstance->patchUserQueue($queueId, $userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserQueue**](../Model/UserQueue.md)| Queue Member |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserQueue**](../Model/UserQueue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserQueues**
> \PureCloudPlatform\Client\V2\Model\UserQueueEntityListing patchUserQueues($userId, $body, $divisionId)

Join or unjoin a set of queues for a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = array(new \PureCloudPlatform\Client\V2\Model\UserQueue()); // \PureCloudPlatform\Client\V2\Model\UserQueue[] | User Queues
$divisionId = array("divisionId_example"); // string[] | Division ID(s)

try {
    $result = $apiInstance->patchUserQueues($userId, $body, $divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserQueue[]**](../Model/UserQueue.md)| User Queues |
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserQueueEntityListing**](../Model/UserQueueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserRoutinglanguage**
> \PureCloudPlatform\Client\V2\Model\UserRoutingLanguage patchUserRoutinglanguage($userId, $languageId, $body)

Update routing language proficiency or state.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$languageId = "languageId_example"; // string | languageId
$body = new \PureCloudPlatform\Client\V2\Model\UserRoutingLanguage(); // \PureCloudPlatform\Client\V2\Model\UserRoutingLanguage | Language

try {
    $result = $apiInstance->patchUserRoutinglanguage($userId, $languageId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserRoutinglanguage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **languageId** | **string**| languageId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingLanguage**](../Model/UserRoutingLanguage.md)| Language |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRoutingLanguage**](../Model/UserRoutingLanguage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserRoutinglanguagesBulk**
> \PureCloudPlatform\Client\V2\Model\UserLanguageEntityListing patchUserRoutinglanguagesBulk($userId, $body)

Add bulk routing language to user. Max limit 50 languages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = array(new \PureCloudPlatform\Client\V2\Model\UserRoutingLanguagePost()); // \PureCloudPlatform\Client\V2\Model\UserRoutingLanguagePost[] | Language

try {
    $result = $apiInstance->patchUserRoutinglanguagesBulk($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserRoutinglanguagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingLanguagePost[]**](../Model/UserRoutingLanguagePost.md)| Language |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserLanguageEntityListing**](../Model/UserLanguageEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserRoutingskillsBulk**
> \PureCloudPlatform\Client\V2\Model\UserSkillEntityListing patchUserRoutingskillsBulk($userId, $body)

Bulk add routing skills to user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = array(new \PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost()); // \PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost[] | Skill

try {
    $result = $apiInstance->patchUserRoutingskillsBulk($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserRoutingskillsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost[]**](../Model/UserRoutingSkillPost.md)| Skill |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserSkillEntityListing**](../Model/UserSkillEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUsersBulk**
> \PureCloudPlatform\Client\V2\Model\UserEntityListing patchUsersBulk($body)

Update bulk acd autoanswer on users



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \PureCloudPlatform\Client\V2\Model\PatchUser()); // \PureCloudPlatform\Client\V2\Model\PatchUser[] | Users

try {
    $result = $apiInstance->patchUsersBulk($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUsersBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PatchUser[]**](../Model/PatchUser.md)| Users |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserEntityListing**](../Model/UserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsUsersAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\UserAggregateQueryResponse postAnalyticsUsersAggregatesQuery($body)

Query for user aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\UserAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsUsersAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postAnalyticsUsersAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserAggregationQuery**](../Model/UserAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserAggregateQueryResponse**](../Model/UserAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsUsersDetailsQuery**
> \PureCloudPlatform\Client\V2\Model\AnalyticsUserDetailsQueryResponse postAnalyticsUsersDetailsQuery($body)

Query for user details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserDetailsQuery(); // \PureCloudPlatform\Client\V2\Model\UserDetailsQuery | query

try {
    $result = $apiInstance->postAnalyticsUsersDetailsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postAnalyticsUsersDetailsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserDetailsQuery**](../Model/UserDetailsQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsUserDetailsQueryResponse**](../Model/AnalyticsUserDetailsQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsUsersObservationsQuery**
> \PureCloudPlatform\Client\V2\Model\UserObservationQueryResponse postAnalyticsUsersObservationsQuery($body)

Query for user observations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserObservationQuery(); // \PureCloudPlatform\Client\V2\Model\UserObservationQuery | query

try {
    $result = $apiInstance->postAnalyticsUsersObservationsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postAnalyticsUsersObservationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserObservationQuery**](../Model/UserObservationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserObservationQueryResponse**](../Model/UserObservationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationSubjectBulkadd**
> postAuthorizationSubjectBulkadd($subjectId, $body, $subjectType)

Bulk-grant roles and divisions to a subject.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectId = "subjectId_example"; // string | Subject ID (user or group)
$body = new \PureCloudPlatform\Client\V2\Model\RoleDivisionGrants(); // \PureCloudPlatform\Client\V2\Model\RoleDivisionGrants | Pairs of role and division IDs
$subjectType = "PC_USER"; // string | what the type of the subject is (PC_GROUP, PC_USER or PC_OAUTH_CLIENT)

try {
    $apiInstance->postAuthorizationSubjectBulkadd($subjectId, $body, $subjectType);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postAuthorizationSubjectBulkadd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectId** | **string**| Subject ID (user or group) |
 **body** | [**\PureCloudPlatform\Client\V2\Model\RoleDivisionGrants**](../Model/RoleDivisionGrants.md)| Pairs of role and division IDs |
 **subjectType** | **string**| what the type of the subject is (PC_GROUP, PC_USER or PC_OAUTH_CLIENT) | [optional] [default to PC_USER]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationSubjectBulkremove**
> postAuthorizationSubjectBulkremove($subjectId, $body)

Bulk-remove grants from a subject.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectId = "subjectId_example"; // string | Subject ID (user or group)
$body = new \PureCloudPlatform\Client\V2\Model\RoleDivisionGrants(); // \PureCloudPlatform\Client\V2\Model\RoleDivisionGrants | Pairs of role and division IDs

try {
    $apiInstance->postAuthorizationSubjectBulkremove($subjectId, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postAuthorizationSubjectBulkremove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectId** | **string**| Subject ID (user or group) |
 **body** | [**\PureCloudPlatform\Client\V2\Model\RoleDivisionGrants**](../Model/RoleDivisionGrants.md)| Pairs of role and division IDs |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationSubjectDivisionRole**
> postAuthorizationSubjectDivisionRole($subjectId, $divisionId, $roleId, $subjectType)

Make a grant of a role in a division



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subjectId = "subjectId_example"; // string | Subject ID (user or group)
$divisionId = "divisionId_example"; // string | the id of the division to which to make the grant
$roleId = "roleId_example"; // string | the id of the role to grant
$subjectType = "PC_USER"; // string | what the type of the subject is: PC_GROUP, PC_USER or PC_OAUTH_CLIENT (note: for cross-org authorization, please use the Organization Authorization endpoints)

try {
    $apiInstance->postAuthorizationSubjectDivisionRole($subjectId, $divisionId, $roleId, $subjectType);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postAuthorizationSubjectDivisionRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subjectId** | **string**| Subject ID (user or group) |
 **divisionId** | **string**| the id of the division to which to make the grant |
 **roleId** | **string**| the id of the role to grant |
 **subjectType** | **string**| what the type of the subject is: PC_GROUP, PC_USER or PC_OAUTH_CLIENT (note: for cross-org authorization, please use the Organization Authorization endpoints) | [optional] [default to PC_USER]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserInvite**
> postUserInvite($userId, $force)

Send an activation email to the user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$force = false; // bool | Resend the invitation even if one is already outstanding

try {
    $apiInstance->postUserInvite($userId, $force);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **force** | **bool**| Resend the invitation even if one is already outstanding | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserPassword**
> postUserPassword($userId, $body)

Change a users password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\ChangePasswordRequest(); // \PureCloudPlatform\Client\V2\Model\ChangePasswordRequest | Password

try {
    $apiInstance->postUserPassword($userId, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ChangePasswordRequest**](../Model/ChangePasswordRequest.md)| Password |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserRoutinglanguages**
> \PureCloudPlatform\Client\V2\Model\UserRoutingLanguage postUserRoutinglanguages($userId, $body)

Add routing language to user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\UserRoutingLanguagePost(); // \PureCloudPlatform\Client\V2\Model\UserRoutingLanguagePost | Language

try {
    $result = $apiInstance->postUserRoutinglanguages($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserRoutinglanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingLanguagePost**](../Model/UserRoutingLanguagePost.md)| Language |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRoutingLanguage**](../Model/UserRoutingLanguage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserRoutingskills**
> \PureCloudPlatform\Client\V2\Model\UserRoutingSkill postUserRoutingskills($userId, $body)

Add routing skill to user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost(); // \PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost | Skill

try {
    $result = $apiInstance->postUserRoutingskills($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUserRoutingskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost**](../Model/UserRoutingSkillPost.md)| Skill |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRoutingSkill**](../Model/UserRoutingSkill.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsers**
> \PureCloudPlatform\Client\V2\Model\User postUsers($body)

Create user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateUser(); // \PureCloudPlatform\Client\V2\Model\CreateUser | User

try {
    $result = $apiInstance->postUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateUser**](../Model/CreateUser.md)| User |

### Return type

[**\PureCloudPlatform\Client\V2\Model\User**](../Model/User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsersMePassword**
> postUsersMePassword($body)

Change your password



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ChangeMyPasswordRequest(); // \PureCloudPlatform\Client\V2\Model\ChangeMyPasswordRequest | Password

try {
    $apiInstance->postUsersMePassword($body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsersMePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ChangeMyPasswordRequest**](../Model/ChangeMyPasswordRequest.md)| Password |

### Return type

void (empty response body)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->postUsersSearch: ', $e->getMessage(), PHP_EOL;
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

# **putUserCallforwarding**
> \PureCloudPlatform\Client\V2\Model\CallForwarding putUserCallforwarding($userId, $body)

Update a user's CallForwarding



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\CallForwarding(); // \PureCloudPlatform\Client\V2\Model\CallForwarding | Call forwarding

try {
    $result = $apiInstance->putUserCallforwarding($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserCallforwarding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CallForwarding**](../Model/CallForwarding.md)| Call forwarding |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallForwarding**](../Model/CallForwarding.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserOutofoffice**
> \PureCloudPlatform\Client\V2\Model\OutOfOffice putUserOutofoffice($userId, $body)

Update an OutOfOffice



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\OutOfOffice(); // \PureCloudPlatform\Client\V2\Model\OutOfOffice | The updated OutOffOffice

try {
    $result = $apiInstance->putUserOutofoffice($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserOutofoffice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\OutOfOffice**](../Model/OutOfOffice.md)| The updated OutOffOffice |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutOfOffice**](../Model/OutOfOffice.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserProfileskills**
> string[] putUserProfileskills($userId, $body)

Update profile skills for a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | Skills

try {
    $result = $apiInstance->putUserProfileskills($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserProfileskills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | **string[]**| Skills |

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserRoles**
> \PureCloudPlatform\Client\V2\Model\UserAuthorization putUserRoles($userId, $body)

Sets the user's roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | List of roles

try {
    $result = $apiInstance->putUserRoles($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | **string[]**| List of roles |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserAuthorization**](../Model/UserAuthorization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserRoutingskill**
> \PureCloudPlatform\Client\V2\Model\UserRoutingSkill putUserRoutingskill($userId, $skillId, $body)

Update routing skill proficiency or state.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$skillId = "skillId_example"; // string | skillId
$body = new \PureCloudPlatform\Client\V2\Model\UserRoutingSkill(); // \PureCloudPlatform\Client\V2\Model\UserRoutingSkill | Skill

try {
    $result = $apiInstance->putUserRoutingskill($userId, $skillId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserRoutingskill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **skillId** | **string**| skillId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingSkill**](../Model/UserRoutingSkill.md)| Skill |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserRoutingSkill**](../Model/UserRoutingSkill.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserRoutingskillsBulk**
> \PureCloudPlatform\Client\V2\Model\UserSkillEntityListing putUserRoutingskillsBulk($userId, $body)

Replace all routing skills assigned to a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = array(new \PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost()); // \PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost[] | Skill

try {
    $result = $apiInstance->putUserRoutingskillsBulk($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserRoutingskillsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserRoutingSkillPost[]**](../Model/UserRoutingSkillPost.md)| Skill |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserSkillEntityListing**](../Model/UserSkillEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserRoutingstatus**
> \PureCloudPlatform\Client\V2\Model\RoutingStatus putUserRoutingstatus($userId, $body)

Update the routing status of a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\RoutingStatus(); // \PureCloudPlatform\Client\V2\Model\RoutingStatus | Routing Status

try {
    $result = $apiInstance->putUserRoutingstatus($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserRoutingstatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\RoutingStatus**](../Model/RoutingStatus.md)| Routing Status |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RoutingStatus**](../Model/RoutingStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserStationAssociatedstationStationId**
> putUserStationAssociatedstationStationId($userId, $stationId)

Set associated station



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$stationId = "stationId_example"; // string | stationId

try {
    $apiInstance->putUserStationAssociatedstationStationId($userId, $stationId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserStationAssociatedstationStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **stationId** | **string**| stationId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserStationDefaultstationStationId**
> putUserStationDefaultstationStationId($userId, $stationId)

Set default station



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$stationId = "stationId_example"; // string | stationId

try {
    $apiInstance->putUserStationDefaultstationStationId($userId, $stationId);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUserStationDefaultstationStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **stationId** | **string**| stationId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

