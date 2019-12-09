# PureCloudPlatform\Client\V2\RoutingApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRoutingEmailDomain**](RoutingApi.md#deleteRoutingEmailDomain) | **DELETE** /api/v2/routing/email/domains/{domainId} | Delete a domain
[**deleteRoutingEmailDomainRoute**](RoutingApi.md#deleteRoutingEmailDomainRoute) | **DELETE** /api/v2/routing/email/domains/{domainName}/routes/{routeId} | Delete a route
[**deleteRoutingQueue**](RoutingApi.md#deleteRoutingQueue) | **DELETE** /api/v2/routing/queues/{queueId} | Delete a queue
[**deleteRoutingQueueUser**](RoutingApi.md#deleteRoutingQueueUser) | **DELETE** /api/v2/routing/queues/{queueId}/users/{memberId} | Delete queue member
[**deleteRoutingQueueWrapupcode**](RoutingApi.md#deleteRoutingQueueWrapupcode) | **DELETE** /api/v2/routing/queues/{queueId}/wrapupcodes/{codeId} | Delete a wrap-up code from a queue
[**deleteRoutingSkill**](RoutingApi.md#deleteRoutingSkill) | **DELETE** /api/v2/routing/skills/{skillId} | Delete Routing Skill
[**deleteRoutingSmsPhonenumber**](RoutingApi.md#deleteRoutingSmsPhonenumber) | **DELETE** /api/v2/routing/sms/phonenumbers/{addressId} | Delete a phone number provisioned for SMS.
[**deleteRoutingUtilization**](RoutingApi.md#deleteRoutingUtilization) | **DELETE** /api/v2/routing/utilization | Delete utilization settings and revert to system defaults.
[**deleteRoutingWrapupcode**](RoutingApi.md#deleteRoutingWrapupcode) | **DELETE** /api/v2/routing/wrapupcodes/{codeId} | Delete wrap-up code
[**deleteUserRoutinglanguage**](RoutingApi.md#deleteUserRoutinglanguage) | **DELETE** /api/v2/users/{userId}/routinglanguages/{languageId} | Remove routing language from user
[**deleteUserRoutingskill**](RoutingApi.md#deleteUserRoutingskill) | **DELETE** /api/v2/users/{userId}/routingskills/{skillId} | Remove routing skill from user
[**getRoutingEmailDomain**](RoutingApi.md#getRoutingEmailDomain) | **GET** /api/v2/routing/email/domains/{domainId} | Get domain
[**getRoutingEmailDomainRoute**](RoutingApi.md#getRoutingEmailDomainRoute) | **GET** /api/v2/routing/email/domains/{domainName}/routes/{routeId} | Get a route
[**getRoutingEmailDomainRoutes**](RoutingApi.md#getRoutingEmailDomainRoutes) | **GET** /api/v2/routing/email/domains/{domainName}/routes | Get routes
[**getRoutingEmailDomains**](RoutingApi.md#getRoutingEmailDomains) | **GET** /api/v2/routing/email/domains | Get domains
[**getRoutingEmailSetup**](RoutingApi.md#getRoutingEmailSetup) | **GET** /api/v2/routing/email/setup | Get email setup
[**getRoutingLanguages**](RoutingApi.md#getRoutingLanguages) | **GET** /api/v2/routing/languages | Get the list of supported languages.
[**getRoutingMessageRecipient**](RoutingApi.md#getRoutingMessageRecipient) | **GET** /api/v2/routing/message/recipients/{recipientId} | Get a recipient
[**getRoutingMessageRecipients**](RoutingApi.md#getRoutingMessageRecipients) | **GET** /api/v2/routing/message/recipients | Get recipients
[**getRoutingQueue**](RoutingApi.md#getRoutingQueue) | **GET** /api/v2/routing/queues/{queueId} | Get details about this queue.
[**getRoutingQueueEstimatedwaittime**](RoutingApi.md#getRoutingQueueEstimatedwaittime) | **GET** /api/v2/routing/queues/{queueId}/estimatedwaittime | Get Estimated Wait Time
[**getRoutingQueueMediatypeEstimatedwaittime**](RoutingApi.md#getRoutingQueueMediatypeEstimatedwaittime) | **GET** /api/v2/routing/queues/{queueId}/mediatypes/{mediaType}/estimatedwaittime | Get Estimated Wait Time
[**getRoutingQueueUsers**](RoutingApi.md#getRoutingQueueUsers) | **GET** /api/v2/routing/queues/{queueId}/users | Get the members of this queue
[**getRoutingQueueWrapupcodes**](RoutingApi.md#getRoutingQueueWrapupcodes) | **GET** /api/v2/routing/queues/{queueId}/wrapupcodes | Get the wrap-up codes for a queue
[**getRoutingQueues**](RoutingApi.md#getRoutingQueues) | **GET** /api/v2/routing/queues | Get list of queues.
[**getRoutingQueuesDivisionviews**](RoutingApi.md#getRoutingQueuesDivisionviews) | **GET** /api/v2/routing/queues/divisionviews | Get a paged listing of simplified queue objects, filterable by name, queue ID(s), or division ID(s).
[**getRoutingQueuesDivisionviewsAll**](RoutingApi.md#getRoutingQueuesDivisionviewsAll) | **GET** /api/v2/routing/queues/divisionviews/all | Get a paged listing of simplified queue objects.  Can be used to get a digest of all queues in an organization.
[**getRoutingQueuesMe**](RoutingApi.md#getRoutingQueuesMe) | **GET** /api/v2/routing/queues/me | Get a paged listing of queues the user is a member of.
[**getRoutingSkill**](RoutingApi.md#getRoutingSkill) | **GET** /api/v2/routing/skills/{skillId} | Get Routing Skill
[**getRoutingSkills**](RoutingApi.md#getRoutingSkills) | **GET** /api/v2/routing/skills | Get the list of routing skills.
[**getRoutingSmsAddress**](RoutingApi.md#getRoutingSmsAddress) | **GET** /api/v2/routing/sms/addresses/{addressId} | Get an Address by Id for SMS
[**getRoutingSmsAddresses**](RoutingApi.md#getRoutingSmsAddresses) | **GET** /api/v2/routing/sms/addresses | Get a list of Addresses for SMS
[**getRoutingSmsAvailablephonenumbers**](RoutingApi.md#getRoutingSmsAvailablephonenumbers) | **GET** /api/v2/routing/sms/availablephonenumbers | Get a list of available phone numbers for SMS provisioning.
[**getRoutingSmsPhonenumber**](RoutingApi.md#getRoutingSmsPhonenumber) | **GET** /api/v2/routing/sms/phonenumbers/{addressId} | Get a phone number provisioned for SMS.
[**getRoutingSmsPhonenumbers**](RoutingApi.md#getRoutingSmsPhonenumbers) | **GET** /api/v2/routing/sms/phonenumbers | Get a list of provisioned phone numbers.
[**getRoutingUtilization**](RoutingApi.md#getRoutingUtilization) | **GET** /api/v2/routing/utilization | Get the utilization settings.
[**getRoutingWrapupcode**](RoutingApi.md#getRoutingWrapupcode) | **GET** /api/v2/routing/wrapupcodes/{codeId} | Get details about this wrap-up code.
[**getRoutingWrapupcodes**](RoutingApi.md#getRoutingWrapupcodes) | **GET** /api/v2/routing/wrapupcodes | Get list of wrapup codes.
[**getUserRoutinglanguages**](RoutingApi.md#getUserRoutinglanguages) | **GET** /api/v2/users/{userId}/routinglanguages | List routing language for user
[**getUserRoutingskills**](RoutingApi.md#getUserRoutingskills) | **GET** /api/v2/users/{userId}/routingskills | List routing skills for user
[**patchRoutingQueueUser**](RoutingApi.md#patchRoutingQueueUser) | **PATCH** /api/v2/routing/queues/{queueId}/users/{memberId} | Update the ring number OR joined status for a User in a Queue
[**patchRoutingQueueUsers**](RoutingApi.md#patchRoutingQueueUsers) | **PATCH** /api/v2/routing/queues/{queueId}/users | Join or unjoin a set of users for a queue
[**patchUserRoutinglanguage**](RoutingApi.md#patchUserRoutinglanguage) | **PATCH** /api/v2/users/{userId}/routinglanguages/{languageId} | Update routing language proficiency or state.
[**patchUserRoutinglanguagesBulk**](RoutingApi.md#patchUserRoutinglanguagesBulk) | **PATCH** /api/v2/users/{userId}/routinglanguages/bulk | Add bulk routing language to user. Max limit 50 languages
[**patchUserRoutingskillsBulk**](RoutingApi.md#patchUserRoutingskillsBulk) | **PATCH** /api/v2/users/{userId}/routingskills/bulk | Bulk add routing skills to user
[**postAnalyticsQueuesObservationsQuery**](RoutingApi.md#postAnalyticsQueuesObservationsQuery) | **POST** /api/v2/analytics/queues/observations/query | Query for queue observations
[**postRoutingEmailDomainRoutes**](RoutingApi.md#postRoutingEmailDomainRoutes) | **POST** /api/v2/routing/email/domains/{domainName}/routes | Create a route
[**postRoutingEmailDomains**](RoutingApi.md#postRoutingEmailDomains) | **POST** /api/v2/routing/email/domains | Create a domain
[**postRoutingLanguages**](RoutingApi.md#postRoutingLanguages) | **POST** /api/v2/routing/languages | Create Language
[**postRoutingQueueUsers**](RoutingApi.md#postRoutingQueueUsers) | **POST** /api/v2/routing/queues/{queueId}/users | Bulk add or delete up to 100 queue members
[**postRoutingQueueWrapupcodes**](RoutingApi.md#postRoutingQueueWrapupcodes) | **POST** /api/v2/routing/queues/{queueId}/wrapupcodes | Add up to 100 wrap-up codes to a queue
[**postRoutingQueues**](RoutingApi.md#postRoutingQueues) | **POST** /api/v2/routing/queues | Create a queue
[**postRoutingSkills**](RoutingApi.md#postRoutingSkills) | **POST** /api/v2/routing/skills | Create Skill
[**postRoutingSmsAddresses**](RoutingApi.md#postRoutingSmsAddresses) | **POST** /api/v2/routing/sms/addresses | Provision an Address for SMS
[**postRoutingSmsPhonenumbers**](RoutingApi.md#postRoutingSmsPhonenumbers) | **POST** /api/v2/routing/sms/phonenumbers | Provision a phone number for SMS
[**postRoutingWrapupcodes**](RoutingApi.md#postRoutingWrapupcodes) | **POST** /api/v2/routing/wrapupcodes | Create a wrap-up code
[**postUserRoutinglanguages**](RoutingApi.md#postUserRoutinglanguages) | **POST** /api/v2/users/{userId}/routinglanguages | Add routing language to user
[**postUserRoutingskills**](RoutingApi.md#postUserRoutingskills) | **POST** /api/v2/users/{userId}/routingskills | Add routing skill to user
[**putRoutingEmailDomainRoute**](RoutingApi.md#putRoutingEmailDomainRoute) | **PUT** /api/v2/routing/email/domains/{domainName}/routes/{routeId} | Update a route
[**putRoutingMessageRecipient**](RoutingApi.md#putRoutingMessageRecipient) | **PUT** /api/v2/routing/message/recipients/{recipientId} | Update a recipient
[**putRoutingQueue**](RoutingApi.md#putRoutingQueue) | **PUT** /api/v2/routing/queues/{queueId} | Update a queue
[**putRoutingSmsPhonenumber**](RoutingApi.md#putRoutingSmsPhonenumber) | **PUT** /api/v2/routing/sms/phonenumbers/{addressId} | Update a phone number provisioned for SMS.
[**putRoutingUtilization**](RoutingApi.md#putRoutingUtilization) | **PUT** /api/v2/routing/utilization | Update the utilization settings.
[**putRoutingWrapupcode**](RoutingApi.md#putRoutingWrapupcode) | **PUT** /api/v2/routing/wrapupcodes/{codeId} | Update wrap-up code
[**putUserRoutingskill**](RoutingApi.md#putUserRoutingskill) | **PUT** /api/v2/users/{userId}/routingskills/{skillId} | Update routing skill proficiency or state.
[**putUserRoutingskillsBulk**](RoutingApi.md#putUserRoutingskillsBulk) | **PUT** /api/v2/users/{userId}/routingskills/bulk | Replace all routing skills assigned to a user


# **deleteRoutingEmailDomain**
> deleteRoutingEmailDomain($domainId)

Delete a domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainId = "domainId_example"; // string | domain ID

try {
    $apiInstance->deleteRoutingEmailDomain($domainId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainId** | **string**| domain ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingEmailDomainRoute**
> deleteRoutingEmailDomainRoute($domainName, $routeId)

Delete a route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = "domainName_example"; // string | email domain
$routeId = "routeId_example"; // string | route ID

try {
    $apiInstance->deleteRoutingEmailDomainRoute($domainName, $routeId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingEmailDomainRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainName** | **string**| email domain |
 **routeId** | **string**| route ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingQueue**
> deleteRoutingQueue($queueId, $forceDelete)

Delete a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$forceDelete = true; // bool | forceDelete

try {
    $apiInstance->deleteRoutingQueue($queueId, $forceDelete);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **forceDelete** | **bool**| forceDelete | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingQueueUser**
> deleteRoutingQueueUser($queueId, $memberId)

Delete queue member



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$memberId = "memberId_example"; // string | Member ID

try {
    $apiInstance->deleteRoutingQueueUser($queueId, $memberId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingQueueUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **memberId** | **string**| Member ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingQueueWrapupcode**
> deleteRoutingQueueWrapupcode($queueId, $codeId)

Delete a wrap-up code from a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$codeId = "codeId_example"; // string | Code ID

try {
    $apiInstance->deleteRoutingQueueWrapupcode($queueId, $codeId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingQueueWrapupcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **codeId** | **string**| Code ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingSkill**
> deleteRoutingSkill($skillId)

Delete Routing Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skillId = "skillId_example"; // string | Skill ID

try {
    $apiInstance->deleteRoutingSkill($skillId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingSkill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skillId** | **string**| Skill ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingSmsPhonenumber**
> deleteRoutingSmsPhonenumber($addressId)

Delete a phone number provisioned for SMS.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressId = "addressId_example"; // string | Address ID

try {
    $apiInstance->deleteRoutingSmsPhonenumber($addressId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingSmsPhonenumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressId** | **string**| Address ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingUtilization**
> deleteRoutingUtilization()

Delete utilization settings and revert to system defaults.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteRoutingUtilization();
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingUtilization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoutingWrapupcode**
> deleteRoutingWrapupcode($codeId)

Delete wrap-up code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = "codeId_example"; // string | Wrapup Code ID

try {
    $apiInstance->deleteRoutingWrapupcode($codeId);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->deleteRoutingWrapupcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **string**| Wrapup Code ID |

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->deleteUserRoutinglanguage: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->deleteUserRoutingskill: ', $e->getMessage(), PHP_EOL;
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

# **getRoutingEmailDomain**
> \PureCloudPlatform\Client\V2\Model\InboundDomain getRoutingEmailDomain($domainId)

Get domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainId = "domainId_example"; // string | domain ID

try {
    $result = $apiInstance->getRoutingEmailDomain($domainId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingEmailDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainId** | **string**| domain ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundDomain**](../Model/InboundDomain.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingEmailDomainRoute**
> \PureCloudPlatform\Client\V2\Model\InboundRoute getRoutingEmailDomainRoute($domainName, $routeId)

Get a route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = "domainName_example"; // string | email domain
$routeId = "routeId_example"; // string | route ID

try {
    $result = $apiInstance->getRoutingEmailDomainRoute($domainName, $routeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingEmailDomainRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainName** | **string**| email domain |
 **routeId** | **string**| route ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingEmailDomainRoutes**
> \PureCloudPlatform\Client\V2\Model\InboundRouteEntityListing getRoutingEmailDomainRoutes($domainName, $pageSize, $pageNumber, $pattern)

Get routes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = "domainName_example"; // string | email domain
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$pattern = "pattern_example"; // string | Filter routes by the route's pattern property

try {
    $result = $apiInstance->getRoutingEmailDomainRoutes($domainName, $pageSize, $pageNumber, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingEmailDomainRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainName** | **string**| email domain |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pattern** | **string**| Filter routes by the route&#39;s pattern property | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundRouteEntityListing**](../Model/InboundRouteEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingEmailDomains**
> \PureCloudPlatform\Client\V2\Model\InboundDomainEntityListing getRoutingEmailDomains()

Get domains



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoutingEmailDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingEmailDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundDomainEntityListing**](../Model/InboundDomainEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingEmailSetup**
> \PureCloudPlatform\Client\V2\Model\EmailSetup getRoutingEmailSetup()

Get email setup



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoutingEmailSetup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingEmailSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailSetup**](../Model/EmailSetup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingLanguages**
> \PureCloudPlatform\Client\V2\Model\LanguageEntityListing getRoutingLanguages($pageSize, $pageNumber, $sortOrder, $name, $id)

Get the list of supported languages.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortOrder = "ASC"; // string | Ascending or descending sort order
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | id

try {
    $result = $apiInstance->getRoutingLanguages($pageSize, $pageNumber, $sortOrder, $name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ASC]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LanguageEntityListing**](../Model/LanguageEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingMessageRecipient**
> \PureCloudPlatform\Client\V2\Model\Recipient getRoutingMessageRecipient($recipientId)

Get a recipient



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipientId = "recipientId_example"; // string | Recipient ID

try {
    $result = $apiInstance->getRoutingMessageRecipient($recipientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingMessageRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipientId** | **string**| Recipient ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recipient**](../Model/Recipient.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingMessageRecipients**
> \PureCloudPlatform\Client\V2\Model\RecipientListing getRoutingMessageRecipients($messengerType, $pageSize, $pageNumber)

Get recipients



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messengerType = "messengerType_example"; // string | Messenger Type
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getRoutingMessageRecipients($messengerType, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingMessageRecipients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messengerType** | **string**| Messenger Type | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\RecipientListing**](../Model/RecipientListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueue**
> \PureCloudPlatform\Client\V2\Model\Queue getRoutingQueue($queueId)

Get details about this queue.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID

try {
    $result = $apiInstance->getRoutingQueue($queueId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Queue**](../Model/Queue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueueEstimatedwaittime**
> \PureCloudPlatform\Client\V2\Model\EstimatedWaitTimePredictions getRoutingQueueEstimatedwaittime($queueId, $conversationId)

Get Estimated Wait Time



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | queueId
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getRoutingQueueEstimatedwaittime($queueId, $conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueueEstimatedwaittime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| queueId |
 **conversationId** | **string**| conversationId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EstimatedWaitTimePredictions**](../Model/EstimatedWaitTimePredictions.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueueMediatypeEstimatedwaittime**
> \PureCloudPlatform\Client\V2\Model\EstimatedWaitTimePredictions getRoutingQueueMediatypeEstimatedwaittime($queueId, $mediaType)

Get Estimated Wait Time



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | queueId
$mediaType = "mediaType_example"; // string | mediaType

try {
    $result = $apiInstance->getRoutingQueueMediatypeEstimatedwaittime($queueId, $mediaType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueueMediatypeEstimatedwaittime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| queueId |
 **mediaType** | **string**| mediaType |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EstimatedWaitTimePredictions**](../Model/EstimatedWaitTimePredictions.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueueUsers**
> \PureCloudPlatform\Client\V2\Model\QueueMemberEntityListing getRoutingQueueUsers($queueId, $pageSize, $pageNumber, $sortBy, $expand, $joined, $name, $profileSkills, $skills, $languages, $routingStatus, $presence)

Get the members of this queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.
$joined = true; // bool | Filter by joined status
$name = "name_example"; // string | Filter by queue member name
$profileSkills = array("profileSkills_example"); // string[] | Filter by profile skill
$skills = array("skills_example"); // string[] | Filter by skill
$languages = array("languages_example"); // string[] | Filter by language
$routingStatus = array("routingStatus_example"); // string[] | Filter by routing status
$presence = array("presence_example"); // string[] | Filter by presence

try {
    $result = $apiInstance->getRoutingQueueUsers($queueId, $pageSize, $pageNumber, $sortBy, $expand, $joined, $name, $profileSkills, $skills, $languages, $routingStatus, $presence);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueueUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]
 **joined** | **bool**| Filter by joined status | [optional]
 **name** | **string**| Filter by queue member name | [optional]
 **profileSkills** | [**string[]**](../Model/string.md)| Filter by profile skill | [optional]
 **skills** | [**string[]**](../Model/string.md)| Filter by skill | [optional]
 **languages** | [**string[]**](../Model/string.md)| Filter by language | [optional]
 **routingStatus** | [**string[]**](../Model/string.md)| Filter by routing status | [optional]
 **presence** | [**string[]**](../Model/string.md)| Filter by presence | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueMemberEntityListing**](../Model/QueueMemberEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueueWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCodeEntityListing getRoutingQueueWrapupcodes($queueId, $pageSize, $pageNumber)

Get the wrap-up codes for a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getRoutingQueueWrapupcodes($queueId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueueWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCodeEntityListing**](../Model/WrapupCodeEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueues**
> \PureCloudPlatform\Client\V2\Model\QueueEntityListing getRoutingQueues($pageSize, $pageNumber, $sortBy, $name, $id, $divisionId)

Get list of queues.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | ID(s)
$divisionId = array("divisionId_example"); // string[] | Division ID(s)

try {
    $result = $apiInstance->getRoutingQueues($pageSize, $pageNumber, $sortBy, $name, $id, $divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| ID(s) | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueEntityListing**](../Model/QueueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueuesDivisionviews**
> \PureCloudPlatform\Client\V2\Model\QueueEntityListing getRoutingQueuesDivisionviews($pageSize, $pageNumber, $sortBy, $sortOrder, $name, $id, $divisionId)

Get a paged listing of simplified queue objects, filterable by name, queue ID(s), or division ID(s).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size [max value is 100]
$pageNumber = 1; // int | Page number [max value is 5]
$sortBy = "name"; // string | Sort by
$sortOrder = "asc"; // string | Sort order
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | Queue ID(s)
$divisionId = array("divisionId_example"); // string[] | Division ID(s)

try {
    $result = $apiInstance->getRoutingQueuesDivisionviews($pageSize, $pageNumber, $sortBy, $sortOrder, $name, $id, $divisionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueuesDivisionviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size [max value is 100] | [optional] [default to 25]
 **pageNumber** | **int**| Page number [max value is 5] | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| Queue ID(s) | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueEntityListing**](../Model/QueueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueuesDivisionviewsAll**
> \PureCloudPlatform\Client\V2\Model\QueueEntityListing getRoutingQueuesDivisionviewsAll($pageSize, $pageNumber, $sortBy, $sortOrder)

Get a paged listing of simplified queue objects.  Can be used to get a digest of all queues in an organization.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size [max value is 500]
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$sortOrder = "asc"; // string | Sort order

try {
    $result = $apiInstance->getRoutingQueuesDivisionviewsAll($pageSize, $pageNumber, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueuesDivisionviewsAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size [max value is 500] | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueEntityListing**](../Model/QueueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingQueuesMe**
> \PureCloudPlatform\Client\V2\Model\UserQueueEntityListing getRoutingQueuesMe($joined, $pageSize, $pageNumber, $sortBy, $sortOrder)

Get a paged listing of queues the user is a member of.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$joined = true; // bool | Joined
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$sortOrder = "asc"; // string | Sort order

try {
    $result = $apiInstance->getRoutingQueuesMe($joined, $pageSize, $pageNumber, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingQueuesMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **joined** | **bool**| Joined | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to asc]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserQueueEntityListing**](../Model/UserQueueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSkill**
> \PureCloudPlatform\Client\V2\Model\RoutingSkill getRoutingSkill($skillId)

Get Routing Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skillId = "skillId_example"; // string | Skill ID

try {
    $result = $apiInstance->getRoutingSkill($skillId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSkill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skillId** | **string**| Skill ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RoutingSkill**](../Model/RoutingSkill.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSkills**
> \PureCloudPlatform\Client\V2\Model\SkillEntityListing getRoutingSkills($pageSize, $pageNumber, $name, $id)

Get the list of routing skills.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Filter for results that start with this value
$id = array("id_example"); // string[] | id

try {
    $result = $apiInstance->getRoutingSkills($pageSize, $pageNumber, $name, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Filter for results that start with this value | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SkillEntityListing**](../Model/SkillEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSmsAddress**
> \PureCloudPlatform\Client\V2\Model\SmsAddress getRoutingSmsAddress($addressId)

Get an Address by Id for SMS



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressId = "addressId_example"; // string | Address ID

try {
    $result = $apiInstance->getRoutingSmsAddress($addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSmsAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressId** | **string**| Address ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsAddress**](../Model/SmsAddress.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSmsAddresses**
> \PureCloudPlatform\Client\V2\Model\SmsAddressEntityListing getRoutingSmsAddresses($pageSize, $pageNumber)

Get a list of Addresses for SMS



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getRoutingSmsAddresses($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSmsAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsAddressEntityListing**](../Model/SmsAddressEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSmsAvailablephonenumbers**
> \PureCloudPlatform\Client\V2\Model\SMSAvailablePhoneNumberEntityListing getRoutingSmsAvailablephonenumbers($countryCode, $phoneNumberType, $region, $city, $areaCode, $pattern, $addressRequirement)

Get a list of available phone numbers for SMS provisioning.

This request will return up to 30 random phone numbers matching the criteria specified.  To get additional phone numbers repeat the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countryCode = "countryCode_example"; // string | The ISO 3166-1 alpha-2 country code of the county for which available phone numbers should be returned
$phoneNumberType = "phoneNumberType_example"; // string | Type of available phone numbers searched
$region = "region_example"; // string | Region/province/state that can be used to restrict the numbers returned
$city = "city_example"; // string | City that can be used to restrict the numbers returned
$areaCode = "areaCode_example"; // string | Area code that can be used to restrict the numbers returned
$pattern = "pattern_example"; // string | A pattern to match phone numbers. Valid characters are '*' and [0-9a-zA-Z]. The '*' character will match any single digit.
$addressRequirement = "addressRequirement_example"; // string | This indicates whether the phone number requires to have an Address registered.

try {
    $result = $apiInstance->getRoutingSmsAvailablephonenumbers($countryCode, $phoneNumberType, $region, $city, $areaCode, $pattern, $addressRequirement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSmsAvailablephonenumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countryCode** | **string**| The ISO 3166-1 alpha-2 country code of the county for which available phone numbers should be returned |
 **phoneNumberType** | **string**| Type of available phone numbers searched |
 **region** | **string**| Region/province/state that can be used to restrict the numbers returned | [optional]
 **city** | **string**| City that can be used to restrict the numbers returned | [optional]
 **areaCode** | **string**| Area code that can be used to restrict the numbers returned | [optional]
 **pattern** | **string**| A pattern to match phone numbers. Valid characters are &#39;*&#39; and [0-9a-zA-Z]. The &#39;*&#39; character will match any single digit. | [optional]
 **addressRequirement** | **string**| This indicates whether the phone number requires to have an Address registered. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SMSAvailablePhoneNumberEntityListing**](../Model/SMSAvailablePhoneNumberEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSmsPhonenumber**
> \PureCloudPlatform\Client\V2\Model\SmsPhoneNumber getRoutingSmsPhonenumber($addressId)

Get a phone number provisioned for SMS.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressId = "addressId_example"; // string | Address ID

try {
    $result = $apiInstance->getRoutingSmsPhonenumber($addressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSmsPhonenumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressId** | **string**| Address ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsPhoneNumber**](../Model/SmsPhoneNumber.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingSmsPhonenumbers**
> \PureCloudPlatform\Client\V2\Model\SmsPhoneNumberEntityListing getRoutingSmsPhonenumbers($phoneNumber, $phoneNumberType, $phoneNumberStatus, $pageSize, $pageNumber)

Get a list of provisioned phone numbers.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneNumber = "phoneNumber_example"; // string | Filter on phone number address. Allowable characters are the digits '0-9' and the wild card character '\\*'. If just digits are present, a contains search is done on the address pattern. For example, '317' could be matched anywhere in the address. An '\\*' will match multiple digits. For example, to match a specific area code within the US a pattern like '1317*' could be used.
$phoneNumberType = "phoneNumberType_example"; // string | Filter on phone number type
$phoneNumberStatus = "phoneNumberStatus_example"; // string | Filter on phone number status
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getRoutingSmsPhonenumbers($phoneNumber, $phoneNumberType, $phoneNumberStatus, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingSmsPhonenumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneNumber** | **string**| Filter on phone number address. Allowable characters are the digits &#39;0-9&#39; and the wild card character &#39;\\*&#39;. If just digits are present, a contains search is done on the address pattern. For example, &#39;317&#39; could be matched anywhere in the address. An &#39;\\*&#39; will match multiple digits. For example, to match a specific area code within the US a pattern like &#39;1317*&#39; could be used. | [optional]
 **phoneNumberType** | **string**| Filter on phone number type | [optional]
 **phoneNumberStatus** | **string**| Filter on phone number status | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsPhoneNumberEntityListing**](../Model/SmsPhoneNumberEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingUtilization**
> \PureCloudPlatform\Client\V2\Model\Utilization getRoutingUtilization()

Get the utilization settings.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoutingUtilization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingUtilization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\Utilization**](../Model/Utilization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingWrapupcode**
> \PureCloudPlatform\Client\V2\Model\WrapupCode getRoutingWrapupcode($codeId)

Get details about this wrap-up code.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = "codeId_example"; // string | Wrapup Code ID

try {
    $result = $apiInstance->getRoutingWrapupcode($codeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingWrapupcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **string**| Wrapup Code ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRoutingWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCodeEntityListing getRoutingWrapupcodes($pageSize, $pageNumber, $sortBy, $name)

Get list of wrapup codes.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$name = "name_example"; // string | Name

try {
    $result = $apiInstance->getRoutingWrapupcodes($pageSize, $pageNumber, $sortBy, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->getRoutingWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **name** | **string**| Name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCodeEntityListing**](../Model/WrapupCodeEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getUserRoutinglanguages: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->getUserRoutingskills: ', $e->getMessage(), PHP_EOL;
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

# **patchRoutingQueueUser**
> \PureCloudPlatform\Client\V2\Model\QueueMember patchRoutingQueueUser($queueId, $memberId, $body)

Update the ring number OR joined status for a User in a Queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$memberId = "memberId_example"; // string | Member ID
$body = new \PureCloudPlatform\Client\V2\Model\QueueMember(); // \PureCloudPlatform\Client\V2\Model\QueueMember | Queue Member

try {
    $result = $apiInstance->patchRoutingQueueUser($queueId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->patchRoutingQueueUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **memberId** | **string**| Member ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\QueueMember**](../Model/QueueMember.md)| Queue Member |

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueMember**](../Model/QueueMember.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRoutingQueueUsers**
> \PureCloudPlatform\Client\V2\Model\QueueMemberEntityListing patchRoutingQueueUsers($queueId, $body)

Join or unjoin a set of users for a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$body = array(new \PureCloudPlatform\Client\V2\Model\QueueMember()); // \PureCloudPlatform\Client\V2\Model\QueueMember[] | Queue Members

try {
    $result = $apiInstance->patchRoutingQueueUsers($queueId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->patchRoutingQueueUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\QueueMember[]**](../Model/QueueMember.md)| Queue Members |

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueMemberEntityListing**](../Model/QueueMemberEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->patchUserRoutinglanguage: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->patchUserRoutinglanguagesBulk: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->patchUserRoutingskillsBulk: ', $e->getMessage(), PHP_EOL;
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

# **postAnalyticsQueuesObservationsQuery**
> \PureCloudPlatform\Client\V2\Model\QueueObservationQueryResponse postAnalyticsQueuesObservationsQuery($body)

Query for queue observations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\QueueObservationQuery(); // \PureCloudPlatform\Client\V2\Model\QueueObservationQuery | query

try {
    $result = $apiInstance->postAnalyticsQueuesObservationsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postAnalyticsQueuesObservationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\QueueObservationQuery**](../Model/QueueObservationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueueObservationQueryResponse**](../Model/QueueObservationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingEmailDomainRoutes**
> \PureCloudPlatform\Client\V2\Model\InboundRoute postRoutingEmailDomainRoutes($domainName, $body)

Create a route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = "domainName_example"; // string | email domain
$body = new \PureCloudPlatform\Client\V2\Model\InboundRoute(); // \PureCloudPlatform\Client\V2\Model\InboundRoute | Route

try {
    $result = $apiInstance->postRoutingEmailDomainRoutes($domainName, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingEmailDomainRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainName** | **string**| email domain |
 **body** | [**\PureCloudPlatform\Client\V2\Model\InboundRoute**](../Model/InboundRoute.md)| Route |

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingEmailDomains**
> \PureCloudPlatform\Client\V2\Model\InboundDomain postRoutingEmailDomains($body)

Create a domain



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\InboundDomain(); // \PureCloudPlatform\Client\V2\Model\InboundDomain | Domain

try {
    $result = $apiInstance->postRoutingEmailDomains($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingEmailDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\InboundDomain**](../Model/InboundDomain.md)| Domain |

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundDomain**](../Model/InboundDomain.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingLanguages**
> \PureCloudPlatform\Client\V2\Model\Language postRoutingLanguages($body)

Create Language



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Language(); // \PureCloudPlatform\Client\V2\Model\Language | Language

try {
    $result = $apiInstance->postRoutingLanguages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Language**](../Model/Language.md)| Language |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Language**](../Model/Language.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingQueueUsers**
> string postRoutingQueueUsers($queueId, $body, $delete)

Bulk add or delete up to 100 queue members



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$body = array(new \PureCloudPlatform\Client\V2\Model\WritableEntity()); // \PureCloudPlatform\Client\V2\Model\WritableEntity[] | Queue Members
$delete = false; // bool | True to delete queue members

try {
    $result = $apiInstance->postRoutingQueueUsers($queueId, $body, $delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingQueueUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WritableEntity[]**](../Model/WritableEntity.md)| Queue Members |
 **delete** | **bool**| True to delete queue members | [optional] [default to false]

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingQueueWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] postRoutingQueueWrapupcodes($queueId, $body)

Add up to 100 wrap-up codes to a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$body = array(new \PureCloudPlatform\Client\V2\Model\WrapUpCodeReference()); // \PureCloudPlatform\Client\V2\Model\WrapUpCodeReference[] | List of wrapup codes

try {
    $result = $apiInstance->postRoutingQueueWrapupcodes($queueId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingQueueWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WrapUpCodeReference[]**](../Model/WrapUpCodeReference.md)| List of wrapup codes |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingQueues**
> \PureCloudPlatform\Client\V2\Model\Queue postRoutingQueues($body)

Create a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateQueueRequest(); // \PureCloudPlatform\Client\V2\Model\CreateQueueRequest | Queue

try {
    $result = $apiInstance->postRoutingQueues($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingQueues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateQueueRequest**](../Model/CreateQueueRequest.md)| Queue |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Queue**](../Model/Queue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingSkills**
> \PureCloudPlatform\Client\V2\Model\RoutingSkill postRoutingSkills($body)

Create Skill



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\RoutingSkill(); // \PureCloudPlatform\Client\V2\Model\RoutingSkill | Skill

try {
    $result = $apiInstance->postRoutingSkills($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingSkills: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\RoutingSkill**](../Model/RoutingSkill.md)| Skill |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RoutingSkill**](../Model/RoutingSkill.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingSmsAddresses**
> \PureCloudPlatform\Client\V2\Model\SmsAddress postRoutingSmsAddresses($body)

Provision an Address for SMS



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SmsAddressProvision(); // \PureCloudPlatform\Client\V2\Model\SmsAddressProvision | SmsAddress

try {
    $result = $apiInstance->postRoutingSmsAddresses($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingSmsAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SmsAddressProvision**](../Model/SmsAddressProvision.md)| SmsAddress |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsAddress**](../Model/SmsAddress.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingSmsPhonenumbers**
> \PureCloudPlatform\Client\V2\Model\SmsPhoneNumber postRoutingSmsPhonenumbers($body)

Provision a phone number for SMS



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\SmsPhoneNumberProvision(); // \PureCloudPlatform\Client\V2\Model\SmsPhoneNumberProvision | SmsPhoneNumber

try {
    $result = $apiInstance->postRoutingSmsPhonenumbers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingSmsPhonenumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\SmsPhoneNumberProvision**](../Model/SmsPhoneNumberProvision.md)| SmsPhoneNumber |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsPhoneNumber**](../Model/SmsPhoneNumber.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRoutingWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode postRoutingWrapupcodes($body)

Create a wrap-up code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WrapupCode(); // \PureCloudPlatform\Client\V2\Model\WrapupCode | WrapupCode

try {
    $result = $apiInstance->postRoutingWrapupcodes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->postRoutingWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WrapupCode**](../Model/WrapupCode.md)| WrapupCode |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode**](../Model/WrapupCode.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->postUserRoutinglanguages: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->postUserRoutingskills: ', $e->getMessage(), PHP_EOL;
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

# **putRoutingEmailDomainRoute**
> \PureCloudPlatform\Client\V2\Model\InboundRoute putRoutingEmailDomainRoute($domainName, $routeId, $body)

Update a route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domainName = "domainName_example"; // string | email domain
$routeId = "routeId_example"; // string | route ID
$body = new \PureCloudPlatform\Client\V2\Model\InboundRoute(); // \PureCloudPlatform\Client\V2\Model\InboundRoute | Route

try {
    $result = $apiInstance->putRoutingEmailDomainRoute($domainName, $routeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->putRoutingEmailDomainRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domainName** | **string**| email domain |
 **routeId** | **string**| route ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\InboundRoute**](../Model/InboundRoute.md)| Route |

### Return type

[**\PureCloudPlatform\Client\V2\Model\InboundRoute**](../Model/InboundRoute.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRoutingMessageRecipient**
> \PureCloudPlatform\Client\V2\Model\Recipient putRoutingMessageRecipient($recipientId, $body)

Update a recipient



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recipientId = "recipientId_example"; // string | Recipient ID
$body = new \PureCloudPlatform\Client\V2\Model\Recipient(); // \PureCloudPlatform\Client\V2\Model\Recipient | Recipient

try {
    $result = $apiInstance->putRoutingMessageRecipient($recipientId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->putRoutingMessageRecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recipientId** | **string**| Recipient ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Recipient**](../Model/Recipient.md)| Recipient |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Recipient**](../Model/Recipient.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRoutingQueue**
> \PureCloudPlatform\Client\V2\Model\Queue putRoutingQueue($queueId, $body)

Update a queue



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$body = new \PureCloudPlatform\Client\V2\Model\QueueRequest(); // \PureCloudPlatform\Client\V2\Model\QueueRequest | Queue

try {
    $result = $apiInstance->putRoutingQueue($queueId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->putRoutingQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queueId** | **string**| Queue ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\QueueRequest**](../Model/QueueRequest.md)| Queue |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Queue**](../Model/Queue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRoutingSmsPhonenumber**
> \PureCloudPlatform\Client\V2\Model\SmsPhoneNumber putRoutingSmsPhonenumber($addressId, $body)

Update a phone number provisioned for SMS.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressId = "addressId_example"; // string | Address ID
$body = new \PureCloudPlatform\Client\V2\Model\SmsPhoneNumber(); // \PureCloudPlatform\Client\V2\Model\SmsPhoneNumber | SmsPhoneNumber

try {
    $result = $apiInstance->putRoutingSmsPhonenumber($addressId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->putRoutingSmsPhonenumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressId** | **string**| Address ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SmsPhoneNumber**](../Model/SmsPhoneNumber.md)| SmsPhoneNumber |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SmsPhoneNumber**](../Model/SmsPhoneNumber.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRoutingUtilization**
> \PureCloudPlatform\Client\V2\Model\Utilization putRoutingUtilization($body)

Update the utilization settings.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Utilization(); // \PureCloudPlatform\Client\V2\Model\Utilization | utilization

try {
    $result = $apiInstance->putRoutingUtilization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->putRoutingUtilization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Utilization**](../Model/Utilization.md)| utilization |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Utilization**](../Model/Utilization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putRoutingWrapupcode**
> \PureCloudPlatform\Client\V2\Model\WrapupCode putRoutingWrapupcode($codeId, $body)

Update wrap-up code



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeId = "codeId_example"; // string | Wrapup Code ID
$body = new \PureCloudPlatform\Client\V2\Model\WrapupCode(); // \PureCloudPlatform\Client\V2\Model\WrapupCode | WrapupCode

try {
    $result = $apiInstance->putRoutingWrapupcode($codeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingApi->putRoutingWrapupcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeId** | **string**| Wrapup Code ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WrapupCode**](../Model/WrapupCode.md)| WrapupCode |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode**](../Model/WrapupCode.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->putUserRoutingskill: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new PureCloudPlatform\Client\V2\Api\RoutingApi(
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
    echo 'Exception when calling RoutingApi->putUserRoutingskillsBulk: ', $e->getMessage(), PHP_EOL;
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

