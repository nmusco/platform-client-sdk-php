# PureCloudPlatform\Client\V2\WebChatApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebchatDeployment**](WebChatApi.md#deleteWebchatDeployment) | **DELETE** /api/v2/webchat/deployments/{deploymentId} | Delete a WebChat deployment
[**deleteWebchatGuestConversationMember**](WebChatApi.md#deleteWebchatGuestConversationMember) | **DELETE** /api/v2/webchat/guest/conversations/{conversationId}/members/{memberId} | Remove a member from a chat conversation
[**deleteWebchatSettings**](WebChatApi.md#deleteWebchatSettings) | **DELETE** /api/v2/webchat/settings | Remove WebChat deployment settings
[**getWebchatDeployment**](WebChatApi.md#getWebchatDeployment) | **GET** /api/v2/webchat/deployments/{deploymentId} | Get a WebChat deployment
[**getWebchatDeployments**](WebChatApi.md#getWebchatDeployments) | **GET** /api/v2/webchat/deployments | List WebChat deployments
[**getWebchatGuestConversationMediarequest**](WebChatApi.md#getWebchatGuestConversationMediarequest) | **GET** /api/v2/webchat/guest/conversations/{conversationId}/mediarequests/{mediaRequestId} | Get a media request in the conversation
[**getWebchatGuestConversationMediarequests**](WebChatApi.md#getWebchatGuestConversationMediarequests) | **GET** /api/v2/webchat/guest/conversations/{conversationId}/mediarequests | Get all media requests to the guest in the conversation
[**getWebchatGuestConversationMember**](WebChatApi.md#getWebchatGuestConversationMember) | **GET** /api/v2/webchat/guest/conversations/{conversationId}/members/{memberId} | Get a web chat conversation member
[**getWebchatGuestConversationMembers**](WebChatApi.md#getWebchatGuestConversationMembers) | **GET** /api/v2/webchat/guest/conversations/{conversationId}/members | Get the members of a chat conversation.
[**getWebchatGuestConversationMessage**](WebChatApi.md#getWebchatGuestConversationMessage) | **GET** /api/v2/webchat/guest/conversations/{conversationId}/messages/{messageId} | Get a web chat conversation message
[**getWebchatGuestConversationMessages**](WebChatApi.md#getWebchatGuestConversationMessages) | **GET** /api/v2/webchat/guest/conversations/{conversationId}/messages | Get the messages of a chat conversation.
[**getWebchatSettings**](WebChatApi.md#getWebchatSettings) | **GET** /api/v2/webchat/settings | Get WebChat deployment settings
[**patchWebchatGuestConversationMediarequest**](WebChatApi.md#patchWebchatGuestConversationMediarequest) | **PATCH** /api/v2/webchat/guest/conversations/{conversationId}/mediarequests/{mediaRequestId} | Update a media request in the conversation, setting the state to ACCEPTED/DECLINED/ERRORED
[**postWebchatDeployments**](WebChatApi.md#postWebchatDeployments) | **POST** /api/v2/webchat/deployments | Create WebChat deployment
[**postWebchatGuestConversationMemberMessages**](WebChatApi.md#postWebchatGuestConversationMemberMessages) | **POST** /api/v2/webchat/guest/conversations/{conversationId}/members/{memberId}/messages | Send a message in a chat conversation.
[**postWebchatGuestConversationMemberTyping**](WebChatApi.md#postWebchatGuestConversationMemberTyping) | **POST** /api/v2/webchat/guest/conversations/{conversationId}/members/{memberId}/typing | Send a typing-indicator in a chat conversation.
[**postWebchatGuestConversations**](WebChatApi.md#postWebchatGuestConversations) | **POST** /api/v2/webchat/guest/conversations | Create an ACD chat conversation from an external customer.
[**putWebchatDeployment**](WebChatApi.md#putWebchatDeployment) | **PUT** /api/v2/webchat/deployments/{deploymentId} | Update a WebChat deployment
[**putWebchatSettings**](WebChatApi.md#putWebchatSettings) | **PUT** /api/v2/webchat/settings | Update WebChat deployment settings


# **deleteWebchatDeployment**
> deleteWebchatDeployment($deploymentId)

Delete a WebChat deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploymentId = "deploymentId_example"; // string | Deployment Id

try {
    $apiInstance->deleteWebchatDeployment($deploymentId);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->deleteWebchatDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deploymentId** | **string**| Deployment Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebchatGuestConversationMember**
> deleteWebchatGuestConversationMember($conversationId, $memberId)

Remove a member from a chat conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$memberId = "memberId_example"; // string | memberId

try {
    $apiInstance->deleteWebchatGuestConversationMember($conversationId, $memberId);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->deleteWebchatGuestConversationMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **memberId** | **string**| memberId |

### Return type

void (empty response body)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebchatSettings**
> deleteWebchatSettings()

Remove WebChat deployment settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteWebchatSettings();
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->deleteWebchatSettings: ', $e->getMessage(), PHP_EOL;
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

# **getWebchatDeployment**
> \PureCloudPlatform\Client\V2\Model\WebChatDeployment getWebchatDeployment($deploymentId)

Get a WebChat deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploymentId = "deploymentId_example"; // string | Deployment Id

try {
    $result = $apiInstance->getWebchatDeployment($deploymentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deploymentId** | **string**| Deployment Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatDeployment**](../Model/WebChatDeployment.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatDeployments**
> \PureCloudPlatform\Client\V2\Model\WebChatDeploymentEntityListing getWebchatDeployments()

List WebChat deployments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebchatDeployments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatDeployments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatDeploymentEntityListing**](../Model/WebChatDeploymentEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatGuestConversationMediarequest**
> \PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest getWebchatGuestConversationMediarequest($conversationId, $mediaRequestId)

Get a media request in the conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$mediaRequestId = "mediaRequestId_example"; // string | mediaRequestId

try {
    $result = $apiInstance->getWebchatGuestConversationMediarequest($conversationId, $mediaRequestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatGuestConversationMediarequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **mediaRequestId** | **string**| mediaRequestId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest**](../Model/WebChatGuestMediaRequest.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatGuestConversationMediarequests**
> \PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequestEntityList getWebchatGuestConversationMediarequests($conversationId)

Get all media requests to the guest in the conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getWebchatGuestConversationMediarequests($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatGuestConversationMediarequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequestEntityList**](../Model/WebChatGuestMediaRequestEntityList.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatGuestConversationMember**
> \PureCloudPlatform\Client\V2\Model\WebChatMemberInfo getWebchatGuestConversationMember($conversationId, $memberId)

Get a web chat conversation member



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$memberId = "memberId_example"; // string | memberId

try {
    $result = $apiInstance->getWebchatGuestConversationMember($conversationId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatGuestConversationMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **memberId** | **string**| memberId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMemberInfo**](../Model/WebChatMemberInfo.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatGuestConversationMembers**
> \PureCloudPlatform\Client\V2\Model\WebChatMemberInfoEntityList getWebchatGuestConversationMembers($conversationId, $pageSize, $pageNumber, $excludeDisconnectedMembers)

Get the members of a chat conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$pageSize = 25; // int | The number of entries to return per page, or omitted for the default.
$pageNumber = 1; // int | The page number to return, or omitted for the first page.
$excludeDisconnectedMembers = false; // bool | If true, the results will not contain members who have a DISCONNECTED state.

try {
    $result = $apiInstance->getWebchatGuestConversationMembers($conversationId, $pageSize, $pageNumber, $excludeDisconnectedMembers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatGuestConversationMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **pageSize** | **int**| The number of entries to return per page, or omitted for the default. | [optional] [default to 25]
 **pageNumber** | **int**| The page number to return, or omitted for the first page. | [optional] [default to 1]
 **excludeDisconnectedMembers** | **bool**| If true, the results will not contain members who have a DISCONNECTED state. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMemberInfoEntityList**](../Model/WebChatMemberInfoEntityList.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatGuestConversationMessage**
> \PureCloudPlatform\Client\V2\Model\WebChatMessage getWebchatGuestConversationMessage($conversationId, $messageId)

Get a web chat conversation message



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$messageId = "messageId_example"; // string | messageId

try {
    $result = $apiInstance->getWebchatGuestConversationMessage($conversationId, $messageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatGuestConversationMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **messageId** | **string**| messageId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMessage**](../Model/WebChatMessage.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatGuestConversationMessages**
> \PureCloudPlatform\Client\V2\Model\WebChatMessageEntityList getWebchatGuestConversationMessages($conversationId, $after, $before, $sortOrder, $maxResults)

Get the messages of a chat conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$after = "after_example"; // string | If available, get the messages chronologically after the id of this message
$before = "before_example"; // string | If available, get the messages chronologically before the id of this message
$sortOrder = "ascending"; // string | Sort order
$maxResults = 100; // int | Limit the returned number of messages, up to a maximum of 100

try {
    $result = $apiInstance->getWebchatGuestConversationMessages($conversationId, $after, $before, $sortOrder, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatGuestConversationMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **after** | **string**| If available, get the messages chronologically after the id of this message | [optional]
 **before** | **string**| If available, get the messages chronologically before the id of this message | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to ascending]
 **maxResults** | **int**| Limit the returned number of messages, up to a maximum of 100 | [optional] [default to 100]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMessageEntityList**](../Model/WebChatMessageEntityList.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebchatSettings**
> \PureCloudPlatform\Client\V2\Model\WebChatSettings getWebchatSettings()

Get WebChat deployment settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebchatSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->getWebchatSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatSettings**](../Model/WebChatSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWebchatGuestConversationMediarequest**
> \PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest patchWebchatGuestConversationMediarequest($conversationId, $mediaRequestId, $body)

Update a media request in the conversation, setting the state to ACCEPTED/DECLINED/ERRORED



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$mediaRequestId = "mediaRequestId_example"; // string | mediaRequestId
$body = new \PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest(); // \PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest | Request

try {
    $result = $apiInstance->patchWebchatGuestConversationMediarequest($conversationId, $mediaRequestId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->patchWebchatGuestConversationMediarequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **mediaRequestId** | **string**| mediaRequestId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest**](../Model/WebChatGuestMediaRequest.md)| Request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatGuestMediaRequest**](../Model/WebChatGuestMediaRequest.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebchatDeployments**
> \PureCloudPlatform\Client\V2\Model\WebChatDeployment postWebchatDeployments($body)

Create WebChat deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WebChatDeployment(); // \PureCloudPlatform\Client\V2\Model\WebChatDeployment | Deployment

try {
    $result = $apiInstance->postWebchatDeployments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->postWebchatDeployments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WebChatDeployment**](../Model/WebChatDeployment.md)| Deployment |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatDeployment**](../Model/WebChatDeployment.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebchatGuestConversationMemberMessages**
> \PureCloudPlatform\Client\V2\Model\WebChatMessage postWebchatGuestConversationMemberMessages($conversationId, $memberId, $body)

Send a message in a chat conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$memberId = "memberId_example"; // string | memberId
$body = new \PureCloudPlatform\Client\V2\Model\CreateWebChatMessageRequest(); // \PureCloudPlatform\Client\V2\Model\CreateWebChatMessageRequest | Message

try {
    $result = $apiInstance->postWebchatGuestConversationMemberMessages($conversationId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->postWebchatGuestConversationMemberMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **memberId** | **string**| memberId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateWebChatMessageRequest**](../Model/CreateWebChatMessageRequest.md)| Message |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMessage**](../Model/WebChatMessage.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebchatGuestConversationMemberTyping**
> \PureCloudPlatform\Client\V2\Model\WebChatTyping postWebchatGuestConversationMemberTyping($conversationId, $memberId)

Send a typing-indicator in a chat conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Guest Chat JWT
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$memberId = "memberId_example"; // string | memberId

try {
    $result = $apiInstance->postWebchatGuestConversationMemberTyping($conversationId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->postWebchatGuestConversationMemberTyping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **memberId** | **string**| memberId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatTyping**](../Model/WebChatTyping.md)

### Authorization

[Guest Chat JWT](../../README.md#Guest Chat JWT)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebchatGuestConversations**
> \PureCloudPlatform\Client\V2\Model\CreateWebChatConversationResponse postWebchatGuestConversations($body)

Create an ACD chat conversation from an external customer.

This endpoint will create a new ACD Chat conversation under the specified Chat Deployment.  The conversation will begin with a guest member in it (with a role=CUSTOMER) according to the customer information that is supplied. If the guest member is authenticated, the 'memberAuthToken' field should include his JWT as generated by the 'POST /api/v2/signeddata' resource; if the guest member is anonymous (and the Deployment permits it) this field can be omitted.  The returned data includes the IDs of the conversation created, along with a newly-create JWT token that you can supply to all future endpoints as authentication to perform operations against that conversation. After successfully creating a conversation, you should connect a websocket to the event stream named in the 'eventStreamUri' field of the response; the conversation is not routed until the event stream is attached.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateWebChatConversationRequest(); // \PureCloudPlatform\Client\V2\Model\CreateWebChatConversationRequest | CreateConversationRequest

try {
    $result = $apiInstance->postWebchatGuestConversations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->postWebchatGuestConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateWebChatConversationRequest**](../Model/CreateWebChatConversationRequest.md)| CreateConversationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CreateWebChatConversationResponse**](../Model/CreateWebChatConversationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWebchatDeployment**
> \PureCloudPlatform\Client\V2\Model\WebChatDeployment putWebchatDeployment($deploymentId, $body)

Update a WebChat deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploymentId = "deploymentId_example"; // string | Deployment Id
$body = new \PureCloudPlatform\Client\V2\Model\WebChatDeployment(); // \PureCloudPlatform\Client\V2\Model\WebChatDeployment | Deployment

try {
    $result = $apiInstance->putWebchatDeployment($deploymentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->putWebchatDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deploymentId** | **string**| Deployment Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WebChatDeployment**](../Model/WebChatDeployment.md)| Deployment |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatDeployment**](../Model/WebChatDeployment.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWebchatSettings**
> \PureCloudPlatform\Client\V2\Model\WebChatSettings putWebchatSettings($body)

Update WebChat deployment settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WebChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WebChatSettings(); // \PureCloudPlatform\Client\V2\Model\WebChatSettings | webChatSettings

try {
    $result = $apiInstance->putWebchatSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebChatApi->putWebchatSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WebChatSettings**](../Model/WebChatSettings.md)| webChatSettings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatSettings**](../Model/WebChatSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

