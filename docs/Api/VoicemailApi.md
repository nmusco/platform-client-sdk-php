# PureCloudPlatform\Client\V2\VoicemailApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVoicemailMessage**](VoicemailApi.md#deleteVoicemailMessage) | **DELETE** /api/v2/voicemail/messages/{messageId} | Delete a voicemail message.
[**deleteVoicemailMessages**](VoicemailApi.md#deleteVoicemailMessages) | **DELETE** /api/v2/voicemail/messages | Delete all voicemail messages
[**getVoicemailGroupMailbox**](VoicemailApi.md#getVoicemailGroupMailbox) | **GET** /api/v2/voicemail/groups/{groupId}/mailbox | Get the group&#39;s mailbox information
[**getVoicemailGroupMessages**](VoicemailApi.md#getVoicemailGroupMessages) | **GET** /api/v2/voicemail/groups/{groupId}/messages | List voicemail messages
[**getVoicemailGroupPolicy**](VoicemailApi.md#getVoicemailGroupPolicy) | **GET** /api/v2/voicemail/groups/{groupId}/policy | Get a group&#39;s voicemail policy
[**getVoicemailMailbox**](VoicemailApi.md#getVoicemailMailbox) | **GET** /api/v2/voicemail/mailbox | Get the current user&#39;s mailbox information
[**getVoicemailMeMailbox**](VoicemailApi.md#getVoicemailMeMailbox) | **GET** /api/v2/voicemail/me/mailbox | Get the current user&#39;s mailbox information
[**getVoicemailMeMessages**](VoicemailApi.md#getVoicemailMeMessages) | **GET** /api/v2/voicemail/me/messages | List voicemail messages
[**getVoicemailMePolicy**](VoicemailApi.md#getVoicemailMePolicy) | **GET** /api/v2/voicemail/me/policy | Get the current user&#39;s voicemail policy
[**getVoicemailMessage**](VoicemailApi.md#getVoicemailMessage) | **GET** /api/v2/voicemail/messages/{messageId} | Get a voicemail message
[**getVoicemailMessageMedia**](VoicemailApi.md#getVoicemailMessageMedia) | **GET** /api/v2/voicemail/messages/{messageId}/media | Get media playback URI for this voicemail message
[**getVoicemailMessages**](VoicemailApi.md#getVoicemailMessages) | **GET** /api/v2/voicemail/messages | List voicemail messages
[**getVoicemailPolicy**](VoicemailApi.md#getVoicemailPolicy) | **GET** /api/v2/voicemail/policy | Get a policy
[**getVoicemailQueueMessages**](VoicemailApi.md#getVoicemailQueueMessages) | **GET** /api/v2/voicemail/queues/{queueId}/messages | List voicemail messages
[**getVoicemailSearch**](VoicemailApi.md#getVoicemailSearch) | **GET** /api/v2/voicemail/search | Search voicemails using the q64 value returned from a previous search
[**getVoicemailUserpolicy**](VoicemailApi.md#getVoicemailUserpolicy) | **GET** /api/v2/voicemail/userpolicies/{userId} | Get a user&#39;s voicemail policy
[**patchVoicemailGroupPolicy**](VoicemailApi.md#patchVoicemailGroupPolicy) | **PATCH** /api/v2/voicemail/groups/{groupId}/policy | Update a group&#39;s voicemail policy
[**patchVoicemailMePolicy**](VoicemailApi.md#patchVoicemailMePolicy) | **PATCH** /api/v2/voicemail/me/policy | Update the current user&#39;s voicemail policy
[**patchVoicemailMessage**](VoicemailApi.md#patchVoicemailMessage) | **PATCH** /api/v2/voicemail/messages/{messageId} | Update a voicemail message
[**patchVoicemailUserpolicy**](VoicemailApi.md#patchVoicemailUserpolicy) | **PATCH** /api/v2/voicemail/userpolicies/{userId} | Update a user&#39;s voicemail policy
[**postVoicemailMessages**](VoicemailApi.md#postVoicemailMessages) | **POST** /api/v2/voicemail/messages | Copy a voicemail message to a user or group
[**postVoicemailSearch**](VoicemailApi.md#postVoicemailSearch) | **POST** /api/v2/voicemail/search | Search voicemails
[**putVoicemailMessage**](VoicemailApi.md#putVoicemailMessage) | **PUT** /api/v2/voicemail/messages/{messageId} | Update a voicemail message
[**putVoicemailPolicy**](VoicemailApi.md#putVoicemailPolicy) | **PUT** /api/v2/voicemail/policy | Update a policy


# **deleteVoicemailMessage**
> deleteVoicemailMessage($messageId)

Delete a voicemail message.

A user voicemail can only be deleted by its associated user. A group voicemail can only be deleted by a user that is a member of the group. A queue voicemail can only be deleted by a user with the acd voicemail delete permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageId = "messageId_example"; // string | Message ID

try {
    $apiInstance->deleteVoicemailMessage($messageId);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->deleteVoicemailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageId** | **string**| Message ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVoicemailMessages**
> deleteVoicemailMessages()

Delete all voicemail messages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteVoicemailMessages();
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->deleteVoicemailMessages: ', $e->getMessage(), PHP_EOL;
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

# **getVoicemailGroupMailbox**
> \PureCloudPlatform\Client\V2\Model\VoicemailMailboxInfo getVoicemailGroupMailbox($groupId)

Get the group's mailbox information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | groupId

try {
    $result = $apiInstance->getVoicemailGroupMailbox($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailGroupMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| groupId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMailboxInfo**](../Model/VoicemailMailboxInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailGroupMessages**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing getVoicemailGroupMessages($groupId, $pageSize, $pageNumber)

List voicemail messages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getVoicemailGroupMessages($groupId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailGroupMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing**](../Model/VoicemailMessageEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailGroupPolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy getVoicemailGroupPolicy($groupId)

Get a group's voicemail policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID

try {
    $result = $apiInstance->getVoicemailGroupPolicy($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailGroupPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy**](../Model/VoicemailGroupPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMailbox**
> \PureCloudPlatform\Client\V2\Model\VoicemailMailboxInfo getVoicemailMailbox()

Get the current user's mailbox information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVoicemailMailbox();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMailboxInfo**](../Model/VoicemailMailboxInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMeMailbox**
> \PureCloudPlatform\Client\V2\Model\VoicemailMailboxInfo getVoicemailMeMailbox()

Get the current user's mailbox information



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVoicemailMeMailbox();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMeMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMailboxInfo**](../Model/VoicemailMailboxInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMeMessages**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing getVoicemailMeMessages($pageSize, $pageNumber)

List voicemail messages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getVoicemailMeMessages($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMeMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing**](../Model/VoicemailMessageEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMePolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy getVoicemailMePolicy()

Get the current user's voicemail policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVoicemailMePolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMePolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy**](../Model/VoicemailUserPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMessage**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessage getVoicemailMessage($messageId, $expand)

Get a voicemail message



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageId = "messageId_example"; // string | Message ID
$expand = array("expand_example"); // string[] | If the caller is a known user, which fields, if any, to expand

try {
    $result = $apiInstance->getVoicemailMessage($messageId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageId** | **string**| Message ID |
 **expand** | [**string[]**](../Model/string.md)| If the caller is a known user, which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessage**](../Model/VoicemailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMessageMedia**
> \PureCloudPlatform\Client\V2\Model\VoicemailMediaInfo getVoicemailMessageMedia($messageId, $formatId)

Get media playback URI for this voicemail message



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageId = "messageId_example"; // string | Message ID
$formatId = "WEBM"; // string | The desired media format.

try {
    $result = $apiInstance->getVoicemailMessageMedia($messageId, $formatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMessageMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageId** | **string**| Message ID |
 **formatId** | **string**| The desired media format. | [optional] [default to WEBM]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMediaInfo**](../Model/VoicemailMediaInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailMessages**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing getVoicemailMessages($ids, $expand)

List voicemail messages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = "ids_example"; // string | An optional comma separated list of VoicemailMessage ids
$expand = array("expand_example"); // string[] | If the caller is a known user, which fields, if any, to expand

try {
    $result = $apiInstance->getVoicemailMessages($ids, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **string**| An optional comma separated list of VoicemailMessage ids | [optional]
 **expand** | [**string[]**](../Model/string.md)| If the caller is a known user, which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing**](../Model/VoicemailMessageEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailPolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy getVoicemailPolicy()

Get a policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVoicemailPolicy();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy**](../Model/VoicemailOrganizationPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoicemailQueueMessages**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing getVoicemailQueueMessages($queueId, $pageSize, $pageNumber)

List voicemail messages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queueId = "queueId_example"; // string | Queue ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getVoicemailQueueMessages($queueId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailQueueMessages: ', $e->getMessage(), PHP_EOL;
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

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessageEntityListing**](../Model/VoicemailMessageEntityListing.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
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
    echo 'Exception when calling VoicemailApi->getVoicemailSearch: ', $e->getMessage(), PHP_EOL;
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

# **getVoicemailUserpolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy getVoicemailUserpolicy($userId)

Get a user's voicemail policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getVoicemailUserpolicy($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getVoicemailUserpolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy**](../Model/VoicemailUserPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchVoicemailGroupPolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy patchVoicemailGroupPolicy($groupId, $body)

Update a group's voicemail policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy(); // \PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy | The group's voicemail policy

try {
    $result = $apiInstance->patchVoicemailGroupPolicy($groupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->patchVoicemailGroupPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy**](../Model/VoicemailGroupPolicy.md)| The group&#39;s voicemail policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailGroupPolicy**](../Model/VoicemailGroupPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchVoicemailMePolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy patchVoicemailMePolicy($body)

Update the current user's voicemail policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy(); // \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy | The user's voicemail policy

try {
    $result = $apiInstance->patchVoicemailMePolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->patchVoicemailMePolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy**](../Model/VoicemailUserPolicy.md)| The user&#39;s voicemail policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy**](../Model/VoicemailUserPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchVoicemailMessage**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessage patchVoicemailMessage($messageId, $body)

Update a voicemail message

A user voicemail can only be modified by its associated user. A group voicemail can only be modified by a user that is a member of the group. A queue voicemail can only be modified by a participant of the conversation the voicemail is associated with.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageId = "messageId_example"; // string | Message ID
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailMessage(); // \PureCloudPlatform\Client\V2\Model\VoicemailMessage | VoicemailMessage

try {
    $result = $apiInstance->patchVoicemailMessage($messageId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->patchVoicemailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageId** | **string**| Message ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailMessage**](../Model/VoicemailMessage.md)| VoicemailMessage |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessage**](../Model/VoicemailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchVoicemailUserpolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy patchVoicemailUserpolicy($userId, $body)

Update a user's voicemail policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy(); // \PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy | The user's voicemail policy

try {
    $result = $apiInstance->patchVoicemailUserpolicy($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->patchVoicemailUserpolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy**](../Model/VoicemailUserPolicy.md)| The user&#39;s voicemail policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailUserPolicy**](../Model/VoicemailUserPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVoicemailMessages**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessage postVoicemailMessages($body)

Copy a voicemail message to a user or group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CopyVoicemailMessage(); // \PureCloudPlatform\Client\V2\Model\CopyVoicemailMessage | 

try {
    $result = $apiInstance->postVoicemailMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->postVoicemailMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CopyVoicemailMessage**](../Model/CopyVoicemailMessage.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessage**](../Model/VoicemailMessage.md)

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

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
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
    echo 'Exception when calling VoicemailApi->postVoicemailSearch: ', $e->getMessage(), PHP_EOL;
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

# **putVoicemailMessage**
> \PureCloudPlatform\Client\V2\Model\VoicemailMessage putVoicemailMessage($messageId, $body)

Update a voicemail message

A user voicemail can only be modified by its associated user. A group voicemail can only be modified by a user that is a member of the group. A queue voicemail can only be modified by a participant of the conversation the voicemail is associated with.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messageId = "messageId_example"; // string | Message ID
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailMessage(); // \PureCloudPlatform\Client\V2\Model\VoicemailMessage | VoicemailMessage

try {
    $result = $apiInstance->putVoicemailMessage($messageId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->putVoicemailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messageId** | **string**| Message ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailMessage**](../Model/VoicemailMessage.md)| VoicemailMessage |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailMessage**](../Model/VoicemailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVoicemailPolicy**
> \PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy putVoicemailPolicy($body)

Update a policy



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\VoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy(); // \PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy | Policy

try {
    $result = $apiInstance->putVoicemailPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->putVoicemailPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy**](../Model/VoicemailOrganizationPolicy.md)| Policy |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VoicemailOrganizationPolicy**](../Model/VoicemailOrganizationPolicy.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

