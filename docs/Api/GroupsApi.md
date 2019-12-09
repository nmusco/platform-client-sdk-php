# PureCloudPlatform\Client\V2\GroupsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGroup**](GroupsApi.md#deleteGroup) | **DELETE** /api/v2/groups/{groupId} | Delete group
[**deleteGroupMembers**](GroupsApi.md#deleteGroupMembers) | **DELETE** /api/v2/groups/{groupId}/members | Remove members
[**getFieldconfig**](GroupsApi.md#getFieldconfig) | **GET** /api/v2/fieldconfig | Fetch field config for an entity type
[**getGroup**](GroupsApi.md#getGroup) | **GET** /api/v2/groups/{groupId} | Get group
[**getGroupIndividuals**](GroupsApi.md#getGroupIndividuals) | **GET** /api/v2/groups/{groupId}/individuals | Get all individuals associated with the group
[**getGroupMembers**](GroupsApi.md#getGroupMembers) | **GET** /api/v2/groups/{groupId}/members | Get group members, includes individuals, owners, and dynamically included people
[**getGroupProfile**](GroupsApi.md#getGroupProfile) | **GET** /api/v2/groups/{groupId}/profile | Get group profile
[**getGroups**](GroupsApi.md#getGroups) | **GET** /api/v2/groups | Get a group list
[**getGroupsSearch**](GroupsApi.md#getGroupsSearch) | **GET** /api/v2/groups/search | Search groups using the q64 value returned from a previous search
[**getProfilesGroups**](GroupsApi.md#getProfilesGroups) | **GET** /api/v2/profiles/groups | Get group profile listing
[**postGroupMembers**](GroupsApi.md#postGroupMembers) | **POST** /api/v2/groups/{groupId}/members | Add members
[**postGroups**](GroupsApi.md#postGroups) | **POST** /api/v2/groups | Create a group
[**postGroupsSearch**](GroupsApi.md#postGroupsSearch) | **POST** /api/v2/groups/search | Search groups
[**putGroup**](GroupsApi.md#putGroup) | **PUT** /api/v2/groups/{groupId} | Update group


# **deleteGroup**
> deleteGroup($groupId)

Delete group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID

try {
    $apiInstance->deleteGroup($groupId);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupMembers**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteGroupMembers($groupId, $ids)

Remove members



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$ids = "ids_example"; // string | Comma separated list of userIds to remove

try {
    $result = $apiInstance->deleteGroupMembers($groupId, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **ids** | **string**| Comma separated list of userIds to remove |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->getFieldconfig: ', $e->getMessage(), PHP_EOL;
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

# **getGroup**
> \PureCloudPlatform\Client\V2\Model\Group getGroup($groupId)

Get group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID

try {
    $result = $apiInstance->getGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Group**](../Model/Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupIndividuals**
> \PureCloudPlatform\Client\V2\Model\UserEntityListing getGroupIndividuals($groupId)

Get all individuals associated with the group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID

try {
    $result = $apiInstance->getGroupIndividuals($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupIndividuals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserEntityListing**](../Model/UserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupMembers**
> \PureCloudPlatform\Client\V2\Model\UserEntityListing getGroupMembers($groupId, $pageSize, $pageNumber, $sortOrder, $expand)

Get group members, includes individuals, owners, and dynamically included people



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortOrder = "ASC"; // string | Ascending or descending sort order
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getGroupMembers($groupId, $pageSize, $pageNumber, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserEntityListing**](../Model/UserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupProfile**
> \PureCloudPlatform\Client\V2\Model\GroupProfile getGroupProfile($groupId, $fields)

Get group profile



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | groupId
$fields = "fields_example"; // string | Comma separated fields to return.  Allowable values can be found by querying /api/v2/fieldconfig?type=group and using the key for the elements returned by the fieldList

try {
    $result = $apiInstance->getGroupProfile($groupId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| groupId |
 **fields** | **string**| Comma separated fields to return.  Allowable values can be found by querying /api/v2/fieldconfig?type&#x3D;group and using the key for the elements returned by the fieldList | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GroupProfile**](../Model/GroupProfile.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \PureCloudPlatform\Client\V2\Model\GroupEntityListing getGroups($pageSize, $pageNumber, $id, $jabberId, $sortOrder)

Get a group list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$id = array("id_example"); // string[] | id
$jabberId = array("jabberId_example"); // string[] | A list of jabberIds to fetch by bulk (cannot be used with the \"id\" parameter)
$sortOrder = "ASC"; // string | Ascending or descending sort order

try {
    $result = $apiInstance->getGroups($pageSize, $pageNumber, $id, $jabberId, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **jabberId** | [**string[]**](../Model/string.md)| A list of jabberIds to fetch by bulk (cannot be used with the \&quot;id\&quot; parameter) | [optional]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GroupEntityListing**](../Model/GroupEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->getGroupsSearch: ', $e->getMessage(), PHP_EOL;
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

# **getProfilesGroups**
> \PureCloudPlatform\Client\V2\Model\GroupProfileEntityListing getProfilesGroups($pageSize, $pageNumber, $id, $sortOrder)

Get group profile listing



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$id = array("id_example"); // string[] | id
$sortOrder = "ASC"; // string | Ascending or descending sort order

try {
    $result = $apiInstance->getProfilesGroups($pageSize, $pageNumber, $id, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getProfilesGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GroupProfileEntityListing**](../Model/GroupProfileEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupMembers**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty postGroupMembers($groupId, $body)

Add members



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$body = new \PureCloudPlatform\Client\V2\Model\GroupMembersUpdate(); // \PureCloudPlatform\Client\V2\Model\GroupMembersUpdate | Add members

try {
    $result = $apiInstance->postGroupMembers($groupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroupMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\GroupMembersUpdate**](../Model/GroupMembersUpdate.md)| Add members |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroups**
> \PureCloudPlatform\Client\V2\Model\Group postGroups($body)

Create a group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\GroupCreate(); // \PureCloudPlatform\Client\V2\Model\GroupCreate | Group

try {
    $result = $apiInstance->postGroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\GroupCreate**](../Model/GroupCreate.md)| Group |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Group**](../Model/Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
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
    echo 'Exception when calling GroupsApi->postGroupsSearch: ', $e->getMessage(), PHP_EOL;
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

# **putGroup**
> \PureCloudPlatform\Client\V2\Model\Group putGroup($groupId, $body)

Update group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$body = new \PureCloudPlatform\Client\V2\Model\GroupUpdate(); // \PureCloudPlatform\Client\V2\Model\GroupUpdate | Group

try {
    $result = $apiInstance->putGroup($groupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\GroupUpdate**](../Model/GroupUpdate.md)| Group | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Group**](../Model/Group.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

