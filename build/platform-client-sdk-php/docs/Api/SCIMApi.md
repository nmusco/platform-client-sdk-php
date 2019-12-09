# PureCloudPlatform\Client\V2\SCIMApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteScimUser**](SCIMApi.md#deleteScimUser) | **DELETE** /api/v2/scim/users/{userId} | Delete a user
[**deleteScimV2User**](SCIMApi.md#deleteScimV2User) | **DELETE** /api/v2/scim/v2/users/{userId} | Delete a user
[**getScimGroup**](SCIMApi.md#getScimGroup) | **GET** /api/v2/scim/groups/{groupId} | Get a group
[**getScimGroups**](SCIMApi.md#getScimGroups) | **GET** /api/v2/scim/groups | Get a list of groups
[**getScimResourcetype**](SCIMApi.md#getScimResourcetype) | **GET** /api/v2/scim/resourcetypes/{resourceType} | Get a resource type
[**getScimResourcetypes**](SCIMApi.md#getScimResourcetypes) | **GET** /api/v2/scim/resourcetypes | Get a list of resource types
[**getScimServiceproviderconfig**](SCIMApi.md#getScimServiceproviderconfig) | **GET** /api/v2/scim/serviceproviderconfig | Get a service provider&#39;s configuration
[**getScimUser**](SCIMApi.md#getScimUser) | **GET** /api/v2/scim/users/{userId} | Get a user
[**getScimUsers**](SCIMApi.md#getScimUsers) | **GET** /api/v2/scim/users | Get a list of users
[**getScimV2Group**](SCIMApi.md#getScimV2Group) | **GET** /api/v2/scim/v2/groups/{groupId} | Get a group
[**getScimV2Groups**](SCIMApi.md#getScimV2Groups) | **GET** /api/v2/scim/v2/groups | Get a list of groups
[**getScimV2Resourcetype**](SCIMApi.md#getScimV2Resourcetype) | **GET** /api/v2/scim/v2/resourcetypes/{resourceType} | Get a resource type
[**getScimV2Resourcetypes**](SCIMApi.md#getScimV2Resourcetypes) | **GET** /api/v2/scim/v2/resourcetypes | Get a list of resource types
[**getScimV2Serviceproviderconfig**](SCIMApi.md#getScimV2Serviceproviderconfig) | **GET** /api/v2/scim/v2/serviceproviderconfig | Get a service provider&#39;s configuration
[**getScimV2User**](SCIMApi.md#getScimV2User) | **GET** /api/v2/scim/v2/users/{userId} | Get a user
[**getScimV2Users**](SCIMApi.md#getScimV2Users) | **GET** /api/v2/scim/v2/users | Get a list of users
[**patchScimGroup**](SCIMApi.md#patchScimGroup) | **PATCH** /api/v2/scim/groups/{groupId} | Modify a group
[**patchScimUser**](SCIMApi.md#patchScimUser) | **PATCH** /api/v2/scim/users/{userId} | Modify a user
[**patchScimV2Group**](SCIMApi.md#patchScimV2Group) | **PATCH** /api/v2/scim/v2/groups/{groupId} | Modify a group
[**patchScimV2User**](SCIMApi.md#patchScimV2User) | **PATCH** /api/v2/scim/v2/users/{userId} | Modify a user
[**postScimUsers**](SCIMApi.md#postScimUsers) | **POST** /api/v2/scim/users | Create a user
[**postScimV2Users**](SCIMApi.md#postScimV2Users) | **POST** /api/v2/scim/v2/users | Create a user
[**putScimGroup**](SCIMApi.md#putScimGroup) | **PUT** /api/v2/scim/groups/{groupId} | Replace a group
[**putScimUser**](SCIMApi.md#putScimUser) | **PUT** /api/v2/scim/users/{userId} | Replace a user
[**putScimV2Group**](SCIMApi.md#putScimV2Group) | **PUT** /api/v2/scim/v2/groups/{groupId} | Replace a group
[**putScimV2User**](SCIMApi.md#putScimV2User) | **PUT** /api/v2/scim/v2/users/{userId} | Replace a user


# **deleteScimUser**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteScimUser($userId, $ifMatch)

Delete a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/users.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->deleteScimUser($userId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->deleteScimUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/users. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScimV2User**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteScimV2User($userId, $ifMatch)

Delete a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/v2/users.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->deleteScimV2User($userId, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->deleteScimV2User: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/v2/users. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimGroup**
> \PureCloudPlatform\Client\V2\Model\ScimV2Group getScimGroup($groupId, $ifNoneMatch)

Get a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | The ID of a group. Returned with GET /api/v2/scim/groups.
$ifNoneMatch = "ifNoneMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/groups/{groupId}. Example: \"42\". If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified.

try {
    $result = $apiInstance->getScimGroup($groupId, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of a group. Returned with GET /api/v2/scim/groups. |
 **ifNoneMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/groups/{groupId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimGroups**
> \PureCloudPlatform\Client\V2\Model\ScimGroupListResponse getScimGroups($startIndex, $count, $filter)

Get a list of groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startIndex = 1; // int | The 1-based index of the first query result.
$count = 25; // int | The requested number of items per page. A value of 0 returns \"totalResults\".
$filter = "displayName eq groupName"; // string | Filters results.

try {
    $result = $apiInstance->getScimGroups($startIndex, $count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startIndex** | **int**| The 1-based index of the first query result. | [optional] [default to 1]
 **count** | **int**| The requested number of items per page. A value of 0 returns \&quot;totalResults\&quot;. | [optional] [default to 25]
 **filter** | **string**| Filters results. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimGroupListResponse**](../Model/ScimGroupListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimResourcetype**
> \PureCloudPlatform\Client\V2\Model\ScimConfigResourceType getScimResourcetype($resourceType)

Get a resource type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resourceType = "resourceType_example"; // string | The type of resource. Returned with GET /api/v2/scim/resourcetypes.

try {
    $result = $apiInstance->getScimResourcetype($resourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimResourcetype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceType** | **string**| The type of resource. Returned with GET /api/v2/scim/resourcetypes. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimConfigResourceType**](../Model/ScimConfigResourceType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimResourcetypes**
> \PureCloudPlatform\Client\V2\Model\ScimConfigResourceTypesListResponse getScimResourcetypes()

Get a list of resource types



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getScimResourcetypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimResourcetypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimConfigResourceTypesListResponse**](../Model/ScimConfigResourceTypesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimServiceproviderconfig**
> \PureCloudPlatform\Client\V2\Model\ScimServiceProviderConfig getScimServiceproviderconfig($ifNoneMatch)

Get a service provider's configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifNoneMatch = "ifNoneMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/serviceproviderconfig. Example: \"42\". If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified.

try {
    $result = $apiInstance->getScimServiceproviderconfig($ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimServiceproviderconfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifNoneMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/serviceproviderconfig. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimServiceProviderConfig**](../Model/ScimServiceProviderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimUser**
> \PureCloudPlatform\Client\V2\Model\ScimV2User getScimUser($userId, $attributes, $excludedAttributes, $ifNoneMatch)

Get a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/users.
$attributes = array("attributes_example"); // string[] | Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \"attributes\" to avoid expensive secondary calls for the default attributes.
$excludedAttributes = array("excludedAttributes_example"); // string[] | Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \"excludedAttributes\". Use \"excludedAttributes\" to avoid expensive secondary calls for the default attributes.
$ifNoneMatch = "ifNoneMatch_example"; // string | TThe ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified.

try {
    $result = $apiInstance->getScimUser($userId, $attributes, $excludedAttributes, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/users. |
 **attributes** | [**string[]**](../Model/string.md)| Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \&quot;attributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **excludedAttributes** | [**string[]**](../Model/string.md)| Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \&quot;excludedAttributes\&quot;. Use \&quot;excludedAttributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **ifNoneMatch** | **string**| TThe ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimUsers**
> \PureCloudPlatform\Client\V2\Model\ScimUserListResponse getScimUsers($startIndex, $count, $attributes, $excludedAttributes, $filter)

Get a list of users

To return all active users, do not use a filter parameter. To return inactive users, set \"filter\" to \"active eq false\". By default, returns SCIM attributes externalId, enterprise-user:manager, and roles. To exclude these attributes, set \"attributes\" to \"id,active\" or \"excludeAttributes\" to \"externalId,roles,urn:ietf:params:scim:schemas:extension:enterprise:2.0:User:division\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startIndex = 1; // int | The 1-based index of the first query result.
$count = 25; // int | The requested number of items per page. A value of 0 returns \"totalResults\".
$attributes = array("attributes_example"); // string[] | Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \"attributes\" to avoid expensive secondary calls for the default attributes.
$excludedAttributes = array("excludedAttributes_example"); // string[] | Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \"excludedAttributes\". Use \"excludedAttributes\" to avoid expensive secondary calls for the default attributes.
$filter = "filter_example"; // string | Filters results. If nothing is specified, returns all active users. Examples of valid values: \"id eq 857449b0-d9e7-4cd0-acbf-a6adfb9ef1e9\", \"userName eq search@sample.org\", \"manager eq 16e10e2f-1136-43fe-bb84-eac073168a49\", \"email eq search@sample.org\", \"division eq divisionName\", \"externalId eq 167844\", \"active eq false\".

try {
    $result = $apiInstance->getScimUsers($startIndex, $count, $attributes, $excludedAttributes, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startIndex** | **int**| The 1-based index of the first query result. | [optional] [default to 1]
 **count** | **int**| The requested number of items per page. A value of 0 returns \&quot;totalResults\&quot;. | [optional] [default to 25]
 **attributes** | [**string[]**](../Model/string.md)| Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \&quot;attributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **excludedAttributes** | [**string[]**](../Model/string.md)| Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \&quot;excludedAttributes\&quot;. Use \&quot;excludedAttributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **filter** | **string**| Filters results. If nothing is specified, returns all active users. Examples of valid values: \&quot;id eq 857449b0-d9e7-4cd0-acbf-a6adfb9ef1e9\&quot;, \&quot;userName eq search@sample.org\&quot;, \&quot;manager eq 16e10e2f-1136-43fe-bb84-eac073168a49\&quot;, \&quot;email eq search@sample.org\&quot;, \&quot;division eq divisionName\&quot;, \&quot;externalId eq 167844\&quot;, \&quot;active eq false\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimUserListResponse**](../Model/ScimUserListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2Group**
> \PureCloudPlatform\Client\V2\Model\ScimV2Group getScimV2Group($groupId, $ifNoneMatch)

Get a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | The ID of a group. Returned with GET /api/v2/scim/v2/groups.
$ifNoneMatch = "ifNoneMatch_example"; // string | TThe ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/groups/{groupId}. Example: \"42\". If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified.

try {
    $result = $apiInstance->getScimV2Group($groupId, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2Group: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of a group. Returned with GET /api/v2/scim/v2/groups. |
 **ifNoneMatch** | **string**| TThe ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/groups/{groupId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2Groups**
> \PureCloudPlatform\Client\V2\Model\ScimGroupListResponse getScimV2Groups($filter, $startIndex, $count)

Get a list of groups



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = "displayName eq groupName"; // string | Filters results.
$startIndex = 1; // int | The 1-based index of the first query result.
$count = 25; // int | The requested number of items per page. A value of 0 returns \"totalResults\".

try {
    $result = $apiInstance->getScimV2Groups($filter, $startIndex, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2Groups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| Filters results. |
 **startIndex** | **int**| The 1-based index of the first query result. | [optional] [default to 1]
 **count** | **int**| The requested number of items per page. A value of 0 returns \&quot;totalResults\&quot;. | [optional] [default to 25]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimGroupListResponse**](../Model/ScimGroupListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2Resourcetype**
> \PureCloudPlatform\Client\V2\Model\ScimConfigResourceType getScimV2Resourcetype($resourceType)

Get a resource type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resourceType = "resourceType_example"; // string | The type of resource. Returned with GET /api/v2/scim/v2/resourcetypes.

try {
    $result = $apiInstance->getScimV2Resourcetype($resourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2Resourcetype: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceType** | **string**| The type of resource. Returned with GET /api/v2/scim/v2/resourcetypes. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimConfigResourceType**](../Model/ScimConfigResourceType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2Resourcetypes**
> \PureCloudPlatform\Client\V2\Model\ScimConfigResourceTypesListResponse getScimV2Resourcetypes()

Get a list of resource types



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getScimV2Resourcetypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2Resourcetypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimConfigResourceTypesListResponse**](../Model/ScimConfigResourceTypesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2Serviceproviderconfig**
> \PureCloudPlatform\Client\V2\Model\ScimServiceProviderConfig getScimV2Serviceproviderconfig($ifNoneMatch)

Get a service provider's configuration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ifNoneMatch = "ifNoneMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/serviceproviderconfig. Example: \"42\". If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified.

try {
    $result = $apiInstance->getScimV2Serviceproviderconfig($ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2Serviceproviderconfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ifNoneMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/serviceproviderconfig. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimServiceProviderConfig**](../Model/ScimServiceProviderConfig.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2User**
> \PureCloudPlatform\Client\V2\Model\ScimV2User getScimV2User($userId, $attributes, $excludedAttributes, $ifNoneMatch)

Get a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/v2/users.
$attributes = array("attributes_example"); // string[] | Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \"attributes\" to avoid expensive secondary calls for the default attributes.
$excludedAttributes = array("excludedAttributes_example"); // string[] | Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \"excludedAttributes\". Use \"excludedAttributes\" to avoid expensive secondary calls for the default attributes.
$ifNoneMatch = "ifNoneMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified.

try {
    $result = $apiInstance->getScimV2User($userId, $attributes, $excludedAttributes, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2User: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/v2/users. |
 **attributes** | [**string[]**](../Model/string.md)| Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \&quot;attributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **excludedAttributes** | [**string[]**](../Model/string.md)| Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \&quot;excludedAttributes\&quot;. Use \&quot;excludedAttributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **ifNoneMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns the current configuration of the resource. If the ETag is current, returns 304 Not Modified. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScimV2Users**
> \PureCloudPlatform\Client\V2\Model\ScimUserListResponse getScimV2Users($startIndex, $count, $attributes, $excludedAttributes, $filter)

Get a list of users

To return all active users, do not use a filter parameter. To return inactive users, set \"filter\" to \"active eq false\". By default, returns SCIM attributes externalId, enterprise-user:manager, and roles. To exclude these attributes, set \"attributes\" to \"id,active\" or \"excludeAttributes\" to \"externalId,roles,urn:ietf:params:scim:schemas:extension:enterprise:2.0:User:division\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startIndex = 1; // int | The 1-based index of the first query result.
$count = 25; // int | The requested number of items per page. A value of 0 returns \"totalResults\".
$attributes = array("attributes_example"); // string[] | Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \"attributes\" to avoid expensive secondary calls for the default attributes.
$excludedAttributes = array("excludedAttributes_example"); // string[] | Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \"excludedAttributes\". Use \"excludedAttributes\" to avoid expensive secondary calls for the default attributes.
$filter = "filter_example"; // string | Filters results. If nothing is specified, returns all active users. Examples of valid values: \"id eq 857449b0-d9e7-4cd0-acbf-a6adfb9ef1e9\", \"userName eq search@sample.org\", \"manager eq 16e10e2f-1136-43fe-bb84-eac073168a49\", \"email eq search@sample.org\", \"division eq divisionName\", \"externalId eq 167844\", \"active eq false\".

try {
    $result = $apiInstance->getScimV2Users($startIndex, $count, $attributes, $excludedAttributes, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->getScimV2Users: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startIndex** | **int**| The 1-based index of the first query result. | [optional] [default to 1]
 **count** | **int**| The requested number of items per page. A value of 0 returns \&quot;totalResults\&quot;. | [optional] [default to 25]
 **attributes** | [**string[]**](../Model/string.md)| Indicates which attributes to include. Returns these attributes and the default attributes (externalId, enterprise-user:manager, roles). Use \&quot;attributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **excludedAttributes** | [**string[]**](../Model/string.md)| Indicates which attributes to exclude. Returns the default attributes (externalId, enterprise-user:manager, roles) minus \&quot;excludedAttributes\&quot;. Use \&quot;excludedAttributes\&quot; to avoid expensive secondary calls for the default attributes. | [optional]
 **filter** | **string**| Filters results. If nothing is specified, returns all active users. Examples of valid values: \&quot;id eq 857449b0-d9e7-4cd0-acbf-a6adfb9ef1e9\&quot;, \&quot;userName eq search@sample.org\&quot;, \&quot;manager eq 16e10e2f-1136-43fe-bb84-eac073168a49\&quot;, \&quot;email eq search@sample.org\&quot;, \&quot;division eq divisionName\&quot;, \&quot;externalId eq 167844\&quot;, \&quot;active eq false\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimUserListResponse**](../Model/ScimUserListResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchScimGroup**
> \PureCloudPlatform\Client\V2\Model\ScimV2Group patchScimGroup($groupId, $body, $ifMatch)

Modify a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | The ID of a group. Returned with GET /api/v2/scim/groups.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest(); // \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest | The information used to modify a group.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/groups/{groupId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->patchScimGroup($groupId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->patchScimGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of a group. Returned with GET /api/v2/scim/groups. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest**](../Model/ScimV2PatchRequest.md)| The information used to modify a group. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/groups/{groupId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchScimUser**
> \PureCloudPlatform\Client\V2\Model\ScimV2User patchScimUser($userId, $body, $ifMatch)

Modify a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/users.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest(); // \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest | The information used to modify a user.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->patchScimUser($userId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->patchScimUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/users. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest**](../Model/ScimV2PatchRequest.md)| The information used to modify a user. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchScimV2Group**
> \PureCloudPlatform\Client\V2\Model\ScimV2Group patchScimV2Group($groupId, $body, $ifMatch)

Modify a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | The ID of a group. Returned with GET /api/v2/scim/v2/groups.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest(); // \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest | The information used to modify a group.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/groups/{groupId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->patchScimV2Group($groupId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->patchScimV2Group: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of a group. Returned with GET /api/v2/scim/v2/groups. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest**](../Model/ScimV2PatchRequest.md)| The information used to modify a group. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/groups/{groupId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchScimV2User**
> \PureCloudPlatform\Client\V2\Model\ScimV2User patchScimV2User($userId, $body, $ifMatch)

Modify a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/v2/users.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest(); // \PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest | The information used to modify a user.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->patchScimV2User($userId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->patchScimV2User: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/v2/users. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2PatchRequest**](../Model/ScimV2PatchRequest.md)| The information used to modify a user. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postScimUsers**
> \PureCloudPlatform\Client\V2\Model\ScimV2User postScimUsers($body)

Create a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2CreateUser(); // \PureCloudPlatform\Client\V2\Model\ScimV2CreateUser | The information used to create a user.

try {
    $result = $apiInstance->postScimUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->postScimUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2CreateUser**](../Model/ScimV2CreateUser.md)| The information used to create a user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postScimV2Users**
> \PureCloudPlatform\Client\V2\Model\ScimV2User postScimV2Users($body)

Create a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2CreateUser(); // \PureCloudPlatform\Client\V2\Model\ScimV2CreateUser | The information used to create a user.

try {
    $result = $apiInstance->postScimV2Users($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->postScimV2Users: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2CreateUser**](../Model/ScimV2CreateUser.md)| The information used to create a user. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putScimGroup**
> \PureCloudPlatform\Client\V2\Model\ScimV2Group putScimGroup($groupId, $body, $ifMatch)

Replace a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | The ID of a group. Returned with GET /api/v2/scim/groups.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2Group(); // \PureCloudPlatform\Client\V2\Model\ScimV2Group | The information used to replace a group.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/groups/{groupId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->putScimGroup($groupId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->putScimGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of a group. Returned with GET /api/v2/scim/groups. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)| The information used to replace a group. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/groups/{groupId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putScimUser**
> \PureCloudPlatform\Client\V2\Model\ScimV2User putScimUser($userId, $body, $ifMatch)

Replace a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/users.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2User(); // \PureCloudPlatform\Client\V2\Model\ScimV2User | The information used to replace a user.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->putScimUser($userId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->putScimUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/users. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)| The information used to replace a user. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putScimV2Group**
> \PureCloudPlatform\Client\V2\Model\ScimV2Group putScimV2Group($groupId, $body, $ifMatch)

Replace a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | The ID of a group. Returned with GET /api/v2/scim/v2/groups.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2Group(); // \PureCloudPlatform\Client\V2\Model\ScimV2Group | The information used to replace a group.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/groups/{groupId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->putScimV2Group($groupId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->putScimV2Group: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| The ID of a group. Returned with GET /api/v2/scim/v2/groups. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)| The information used to replace a group. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/groups/{groupId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2Group**](../Model/ScimV2Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putScimV2User**
> \PureCloudPlatform\Client\V2\Model\ScimV2User putScimV2User($userId, $body, $ifMatch)

Replace a user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\SCIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | The ID of a user. Returned with GET /api/v2/scim/v2/users.
$body = new \PureCloudPlatform\Client\V2\Model\ScimV2User(); // \PureCloudPlatform\Client\V2\Model\ScimV2User | The information used to replace a user.
$ifMatch = "ifMatch_example"; // string | The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \"42\". If the ETag is different from the version on the server, returns 400 with a \"scimType\" of \"invalidVers\".

try {
    $result = $apiInstance->putScimV2User($userId, $body, $ifMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SCIMApi->putScimV2User: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| The ID of a user. Returned with GET /api/v2/scim/v2/users. |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)| The information used to replace a user. |
 **ifMatch** | **string**| The ETag of a resource in double quotes. Returned as header and meta.version with initial call to GET /api/v2/scim/v2/users/{userId}. Example: \&quot;42\&quot;. If the ETag is different from the version on the server, returns 400 with a \&quot;scimType\&quot; of \&quot;invalidVers\&quot;. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ScimV2User**](../Model/ScimV2User.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/scim+json
 - **Accept**: application/json, application/scim+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

