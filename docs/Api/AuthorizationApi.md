# PureCloudPlatform\Client\V2\AuthorizationApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuthorizationDivision**](AuthorizationApi.md#deleteAuthorizationDivision) | **DELETE** /api/v2/authorization/divisions/{divisionId} | Delete a division.
[**deleteAuthorizationRole**](AuthorizationApi.md#deleteAuthorizationRole) | **DELETE** /api/v2/authorization/roles/{roleId} | Delete an organization role.
[**deleteAuthorizationSubjectDivisionRole**](AuthorizationApi.md#deleteAuthorizationSubjectDivisionRole) | **DELETE** /api/v2/authorization/subjects/{subjectId}/divisions/{divisionId}/roles/{roleId} | Delete a grant of a role in a division
[**deleteUserRoles**](AuthorizationApi.md#deleteUserRoles) | **DELETE** /api/v2/users/{userId}/roles | Removes all the roles from the user.
[**getAuthorizationDivision**](AuthorizationApi.md#getAuthorizationDivision) | **GET** /api/v2/authorization/divisions/{divisionId} | Returns an authorization division.
[**getAuthorizationDivisions**](AuthorizationApi.md#getAuthorizationDivisions) | **GET** /api/v2/authorization/divisions | Retrieve a list of all divisions defined for the organization
[**getAuthorizationDivisionsHome**](AuthorizationApi.md#getAuthorizationDivisionsHome) | **GET** /api/v2/authorization/divisions/home | Retrieve the home division for the organization.
[**getAuthorizationDivisionsLimit**](AuthorizationApi.md#getAuthorizationDivisionsLimit) | **GET** /api/v2/authorization/divisions/limit | Returns the maximum allowed number of divisions.
[**getAuthorizationDivisionspermittedMe**](AuthorizationApi.md#getAuthorizationDivisionspermittedMe) | **GET** /api/v2/authorization/divisionspermitted/me | Returns whether or not current user can perform the specified action(s).
[**getAuthorizationDivisionspermittedSubjectId**](AuthorizationApi.md#getAuthorizationDivisionspermittedSubjectId) | **GET** /api/v2/authorization/divisionspermitted/{subjectId} | Returns whether or not specified user can perform the specified action(s).
[**getAuthorizationPermissions**](AuthorizationApi.md#getAuthorizationPermissions) | **GET** /api/v2/authorization/permissions | Get all permissions.
[**getAuthorizationProducts**](AuthorizationApi.md#getAuthorizationProducts) | **GET** /api/v2/authorization/products | Get the list of enabled products
[**getAuthorizationRole**](AuthorizationApi.md#getAuthorizationRole) | **GET** /api/v2/authorization/roles/{roleId} | Get a single organization role.
[**getAuthorizationRoleComparedefaultRightRoleId**](AuthorizationApi.md#getAuthorizationRoleComparedefaultRightRoleId) | **GET** /api/v2/authorization/roles/{leftRoleId}/comparedefault/{rightRoleId} | Get an org role to default role comparison
[**getAuthorizationRoleSubjectgrants**](AuthorizationApi.md#getAuthorizationRoleSubjectgrants) | **GET** /api/v2/authorization/roles/{roleId}/subjectgrants | Get the subjects&#39; granted divisions in the specified role.
[**getAuthorizationRoleUsers**](AuthorizationApi.md#getAuthorizationRoleUsers) | **GET** /api/v2/authorization/roles/{roleId}/users | Get a list of the users in a specified role.
[**getAuthorizationRoles**](AuthorizationApi.md#getAuthorizationRoles) | **GET** /api/v2/authorization/roles | Retrieve a list of all roles defined for the organization
[**getAuthorizationSubject**](AuthorizationApi.md#getAuthorizationSubject) | **GET** /api/v2/authorization/subjects/{subjectId} | Returns a listing of roles and permissions for a user.
[**getAuthorizationSubjectsMe**](AuthorizationApi.md#getAuthorizationSubjectsMe) | **GET** /api/v2/authorization/subjects/me | Returns a listing of roles and permissions for the currently authenticated user.
[**getAuthorizationSubjectsRolecounts**](AuthorizationApi.md#getAuthorizationSubjectsRolecounts) | **GET** /api/v2/authorization/subjects/rolecounts | Get the count of roles granted to a list of subjects
[**getUserRoles**](AuthorizationApi.md#getUserRoles) | **GET** /api/v2/users/{userId}/roles | Returns a listing of roles and permissions for a user.
[**patchAuthorizationRole**](AuthorizationApi.md#patchAuthorizationRole) | **PATCH** /api/v2/authorization/roles/{roleId} | Patch Organization Role for needsUpdate Field
[**postAuthorizationDivisionObject**](AuthorizationApi.md#postAuthorizationDivisionObject) | **POST** /api/v2/authorization/divisions/{divisionId}/objects/{objectType} | Assign a list of objects to a division
[**postAuthorizationDivisions**](AuthorizationApi.md#postAuthorizationDivisions) | **POST** /api/v2/authorization/divisions | Create a division.
[**postAuthorizationRole**](AuthorizationApi.md#postAuthorizationRole) | **POST** /api/v2/authorization/roles/{roleId} | Bulk-grant subjects and divisions with an organization role.
[**postAuthorizationRoleComparedefaultRightRoleId**](AuthorizationApi.md#postAuthorizationRoleComparedefaultRightRoleId) | **POST** /api/v2/authorization/roles/{leftRoleId}/comparedefault/{rightRoleId} | Get an unsaved org role to default role comparison
[**postAuthorizationRoles**](AuthorizationApi.md#postAuthorizationRoles) | **POST** /api/v2/authorization/roles | Create an organization role.
[**postAuthorizationRolesDefault**](AuthorizationApi.md#postAuthorizationRolesDefault) | **POST** /api/v2/authorization/roles/default | Restores all default roles
[**postAuthorizationSubjectBulkadd**](AuthorizationApi.md#postAuthorizationSubjectBulkadd) | **POST** /api/v2/authorization/subjects/{subjectId}/bulkadd | Bulk-grant roles and divisions to a subject.
[**postAuthorizationSubjectBulkremove**](AuthorizationApi.md#postAuthorizationSubjectBulkremove) | **POST** /api/v2/authorization/subjects/{subjectId}/bulkremove | Bulk-remove grants from a subject.
[**postAuthorizationSubjectDivisionRole**](AuthorizationApi.md#postAuthorizationSubjectDivisionRole) | **POST** /api/v2/authorization/subjects/{subjectId}/divisions/{divisionId}/roles/{roleId} | Make a grant of a role in a division
[**putAuthorizationDivision**](AuthorizationApi.md#putAuthorizationDivision) | **PUT** /api/v2/authorization/divisions/{divisionId} | Update a division.
[**putAuthorizationRole**](AuthorizationApi.md#putAuthorizationRole) | **PUT** /api/v2/authorization/roles/{roleId} | Update an organization role.
[**putAuthorizationRoleUsersAdd**](AuthorizationApi.md#putAuthorizationRoleUsersAdd) | **PUT** /api/v2/authorization/roles/{roleId}/users/add | Sets the users for the role
[**putAuthorizationRoleUsersRemove**](AuthorizationApi.md#putAuthorizationRoleUsersRemove) | **PUT** /api/v2/authorization/roles/{roleId}/users/remove | Removes the users from the role
[**putAuthorizationRolesDefault**](AuthorizationApi.md#putAuthorizationRolesDefault) | **PUT** /api/v2/authorization/roles/default | Restore specified default roles
[**putUserRoles**](AuthorizationApi.md#putUserRoles) | **PUT** /api/v2/users/{userId}/roles | Sets the user&#39;s roles


# **deleteAuthorizationDivision**
> deleteAuthorizationDivision($divisionId)

Delete a division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$divisionId = "divisionId_example"; // string | Division ID

try {
    $apiInstance->deleteAuthorizationDivision($divisionId);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->deleteAuthorizationDivision: ', $e->getMessage(), PHP_EOL;
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

# **deleteAuthorizationRole**
> deleteAuthorizationRole($roleId)

Delete an organization role.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID

try {
    $apiInstance->deleteAuthorizationRole($roleId);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->deleteAuthorizationRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAuthorizationSubjectDivisionRole**
> deleteAuthorizationSubjectDivisionRole($subjectId, $divisionId, $roleId)

Delete a grant of a role in a division



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->deleteAuthorizationSubjectDivisionRole: ', $e->getMessage(), PHP_EOL;
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

# **deleteUserRoles**
> deleteUserRoles($userId)

Removes all the roles from the user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $apiInstance->deleteUserRoles($userId);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->deleteUserRoles: ', $e->getMessage(), PHP_EOL;
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

# **getAuthorizationDivision**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision getAuthorizationDivision($divisionId, $objectCount)

Returns an authorization division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->getAuthorizationDivision: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->getAuthorizationDivisions: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationDivisionsHome();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationDivisionsHome: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationDivisionsLimit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationDivisionsLimit: ', $e->getMessage(), PHP_EOL;
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

# **getAuthorizationDivisionspermittedMe**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision[] getAuthorizationDivisionspermittedMe($permission, $name)

Returns whether or not current user can perform the specified action(s).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->getAuthorizationDivisionspermittedMe: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->getAuthorizationDivisionspermittedSubjectId: ', $e->getMessage(), PHP_EOL;
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

# **getAuthorizationPermissions**
> \PureCloudPlatform\Client\V2\Model\PermissionCollectionEntityListing getAuthorizationPermissions($pageSize, $pageNumber)

Get all permissions.

Retrieve a list of all permission defined in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getAuthorizationPermissions($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PermissionCollectionEntityListing**](../Model/PermissionCollectionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationProducts**
> \PureCloudPlatform\Client\V2\Model\OrganizationProductEntityListing getAuthorizationProducts()

Get the list of enabled products

Gets the list of enabled products. Some example product names are: collaborateFree, collaboratePro, communicate, and engage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationProducts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationProductEntityListing**](../Model/OrganizationProductEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationRole**
> \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole getAuthorizationRole($roleId, $expand)

Get a single organization role.

Get the organization role specified by its ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand. \"unusedPermissions\" returns the permissions not used for the role

try {
    $result = $apiInstance->getAuthorizationRole($roleId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. \&quot;unusedPermissions\&quot; returns the permissions not used for the role | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole**](../Model/DomainOrganizationRole.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationRoleComparedefaultRightRoleId**
> \PureCloudPlatform\Client\V2\Model\DomainOrgRoleDifference getAuthorizationRoleComparedefaultRightRoleId($leftRoleId, $rightRoleId)

Get an org role to default role comparison

Compares any organization role to a default role id and show differences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leftRoleId = "leftRoleId_example"; // string | Left Role ID
$rightRoleId = "rightRoleId_example"; // string | Right Role id

try {
    $result = $apiInstance->getAuthorizationRoleComparedefaultRightRoleId($leftRoleId, $rightRoleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationRoleComparedefaultRightRoleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leftRoleId** | **string**| Left Role ID |
 **rightRoleId** | **string**| Right Role id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainOrgRoleDifference**](../Model/DomainOrgRoleDifference.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationRoleSubjectgrants**
> \PureCloudPlatform\Client\V2\Model\SubjectDivisionGrantsEntityListing getAuthorizationRoleSubjectgrants($roleId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage)

Get the subjects' granted divisions in the specified role.

Includes the divisions for which the subject has a grant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$pageSize = 25; // int | The total page size requested
$pageNumber = 1; // int | The page number requested
$sortBy = "sortBy_example"; // string | variable name requested to sort by
$expand = array("expand_example"); // string[] | variable name requested by expand list
$nextPage = "nextPage_example"; // string | next page token
$previousPage = "previousPage_example"; // string | Previous page token

try {
    $result = $apiInstance->getAuthorizationRoleSubjectgrants($roleId, $pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationRoleSubjectgrants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **pageSize** | **int**| The total page size requested | [optional] [default to 25]
 **pageNumber** | **int**| The page number requested | [optional] [default to 1]
 **sortBy** | **string**| variable name requested to sort by | [optional]
 **expand** | [**string[]**](../Model/string.md)| variable name requested by expand list | [optional]
 **nextPage** | **string**| next page token | [optional]
 **previousPage** | **string**| Previous page token | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SubjectDivisionGrantsEntityListing**](../Model/SubjectDivisionGrantsEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationRoleUsers**
> \PureCloudPlatform\Client\V2\Model\UserEntityListing getAuthorizationRoleUsers($roleId, $pageSize, $pageNumber)

Get a list of the users in a specified role.

Get an array of the UUIDs of the users in the specified role.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getAuthorizationRoleUsers($roleId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationRoleUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserEntityListing**](../Model/UserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuthorizationRoles**
> \PureCloudPlatform\Client\V2\Model\OrganizationRoleEntityListing getAuthorizationRoles($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $name, $permission, $defaultRoleId, $userCount, $id)

Retrieve a list of all roles defined for the organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
$name = "name_example"; // string | 
$permission = array("permission_example"); // string[] | 
$defaultRoleId = array("defaultRoleId_example"); // string[] | 
$userCount = true; // bool | 
$id = array("id_example"); // string[] | id

try {
    $result = $apiInstance->getAuthorizationRoles($pageSize, $pageNumber, $sortBy, $expand, $nextPage, $previousPage, $name, $permission, $defaultRoleId, $userCount, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationRoles: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**|  | [optional]
 **permission** | [**string[]**](../Model/string.md)|  | [optional]
 **defaultRoleId** | [**string[]**](../Model/string.md)|  | [optional]
 **userCount** | **bool**|  | [optional] [default to true]
 **id** | [**string[]**](../Model/string.md)| id | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationRoleEntityListing**](../Model/OrganizationRoleEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->getAuthorizationSubject: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthorizationSubjectsMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationSubjectsMe: ', $e->getMessage(), PHP_EOL;
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

# **getAuthorizationSubjectsRolecounts**
> map[string,object] getAuthorizationSubjectsRolecounts($id)

Get the count of roles granted to a list of subjects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | id

try {
    $result = $apiInstance->getAuthorizationSubjectsRolecounts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->getAuthorizationSubjectsRolecounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| id | [optional]

### Return type

**map[string,object]**

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->getUserRoles: ', $e->getMessage(), PHP_EOL;
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

# **patchAuthorizationRole**
> \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole patchAuthorizationRole($roleId, $body)

Patch Organization Role for needsUpdate Field

Patch Organization Role for needsUpdate Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$body = new \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole(); // \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole | Organization role

try {
    $result = $apiInstance->patchAuthorizationRole($roleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->patchAuthorizationRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole**](../Model/DomainOrganizationRole.md)| Organization role |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole**](../Model/DomainOrganizationRole.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->postAuthorizationDivisionObject: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->postAuthorizationDivisions: ', $e->getMessage(), PHP_EOL;
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

# **postAuthorizationRole**
> postAuthorizationRole($roleId, $body, $subjectType)

Bulk-grant subjects and divisions with an organization role.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$body = new \PureCloudPlatform\Client\V2\Model\SubjectDivisions(); // \PureCloudPlatform\Client\V2\Model\SubjectDivisions | Subjects and Divisions
$subjectType = "PC_USER"; // string | what the type of the subjects are (PC_GROUP, PC_USER or PC_OAUTH_CLIENT)

try {
    $apiInstance->postAuthorizationRole($roleId, $body, $subjectType);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->postAuthorizationRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SubjectDivisions**](../Model/SubjectDivisions.md)| Subjects and Divisions |
 **subjectType** | **string**| what the type of the subjects are (PC_GROUP, PC_USER or PC_OAUTH_CLIENT) | [optional] [default to PC_USER]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationRoleComparedefaultRightRoleId**
> \PureCloudPlatform\Client\V2\Model\DomainOrgRoleDifference postAuthorizationRoleComparedefaultRightRoleId($leftRoleId, $rightRoleId, $body)

Get an unsaved org role to default role comparison

Allows users to compare their existing roles in an unsaved state to its default role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$leftRoleId = "leftRoleId_example"; // string | Left Role ID
$rightRoleId = "rightRoleId_example"; // string | Right Role id
$body = new \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole(); // \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole | Organization role

try {
    $result = $apiInstance->postAuthorizationRoleComparedefaultRightRoleId($leftRoleId, $rightRoleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->postAuthorizationRoleComparedefaultRightRoleId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **leftRoleId** | **string**| Left Role ID |
 **rightRoleId** | **string**| Right Role id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole**](../Model/DomainOrganizationRole.md)| Organization role |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainOrgRoleDifference**](../Model/DomainOrgRoleDifference.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationRoles**
> \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole postAuthorizationRoles($body)

Create an organization role.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DomainOrganizationRoleCreate(); // \PureCloudPlatform\Client\V2\Model\DomainOrganizationRoleCreate | Organization role

try {
    $result = $apiInstance->postAuthorizationRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->postAuthorizationRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRoleCreate**](../Model/DomainOrganizationRoleCreate.md)| Organization role |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole**](../Model/DomainOrganizationRole.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAuthorizationRolesDefault**
> \PureCloudPlatform\Client\V2\Model\OrganizationRoleEntityListing postAuthorizationRolesDefault($force)

Restores all default roles

This endpoint serves several purposes. 1. It provides the org with default roles. This is important for default roles that will be added after go-live (they can retroactively add the new default-role). Note: When not using a query param of force=true, it only adds the default roles not configured for the org; it does not overwrite roles. 2. Using the query param force=true, you can restore all default roles. Note: This does not have an effect on custom roles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$force = false; // bool | Restore default roles

try {
    $result = $apiInstance->postAuthorizationRolesDefault($force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->postAuthorizationRolesDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force** | **bool**| Restore default roles | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationRoleEntityListing**](../Model/OrganizationRoleEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->postAuthorizationSubjectBulkadd: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->postAuthorizationSubjectBulkremove: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->postAuthorizationSubjectDivisionRole: ', $e->getMessage(), PHP_EOL;
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

# **putAuthorizationDivision**
> \PureCloudPlatform\Client\V2\Model\AuthzDivision putAuthorizationDivision($divisionId, $body)

Update a division.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->putAuthorizationDivision: ', $e->getMessage(), PHP_EOL;
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

# **putAuthorizationRole**
> \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole putAuthorizationRole($roleId, $body)

Update an organization role.

Update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$body = new \PureCloudPlatform\Client\V2\Model\DomainOrganizationRoleUpdate(); // \PureCloudPlatform\Client\V2\Model\DomainOrganizationRoleUpdate | Organization role

try {
    $result = $apiInstance->putAuthorizationRole($roleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->putAuthorizationRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRoleUpdate**](../Model/DomainOrganizationRoleUpdate.md)| Organization role |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole**](../Model/DomainOrganizationRole.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAuthorizationRoleUsersAdd**
> string[] putAuthorizationRoleUsersAdd($roleId, $body)

Sets the users for the role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | List of user IDs

try {
    $result = $apiInstance->putAuthorizationRoleUsersAdd($roleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->putAuthorizationRoleUsersAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **body** | **string[]**| List of user IDs |

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAuthorizationRoleUsersRemove**
> string[] putAuthorizationRoleUsersRemove($roleId, $body)

Removes the users from the role



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$roleId = "roleId_example"; // string | Role ID
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | List of user IDs

try {
    $result = $apiInstance->putAuthorizationRoleUsersRemove($roleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->putAuthorizationRoleUsersRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **roleId** | **string**| Role ID |
 **body** | **string[]**| List of user IDs |

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAuthorizationRolesDefault**
> \PureCloudPlatform\Client\V2\Model\OrganizationRoleEntityListing putAuthorizationRolesDefault($body)

Restore specified default roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole()); // \PureCloudPlatform\Client\V2\Model\DomainOrganizationRole[] | Organization roles list

try {
    $result = $apiInstance->putAuthorizationRolesDefault($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->putAuthorizationRolesDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainOrganizationRole[]**](../Model/DomainOrganizationRole.md)| Organization roles list |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationRoleEntityListing**](../Model/OrganizationRoleEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\AuthorizationApi(
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
    echo 'Exception when calling AuthorizationApi->putUserRoles: ', $e->getMessage(), PHP_EOL;
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

