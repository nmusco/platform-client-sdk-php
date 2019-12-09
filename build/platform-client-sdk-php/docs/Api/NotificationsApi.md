# PureCloudPlatform\Client\V2\NotificationsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNotificationsChannelSubscriptions**](NotificationsApi.md#deleteNotificationsChannelSubscriptions) | **DELETE** /api/v2/notifications/channels/{channelId}/subscriptions | Remove all subscriptions
[**getNotificationsAvailabletopics**](NotificationsApi.md#getNotificationsAvailabletopics) | **GET** /api/v2/notifications/availabletopics | Get available notification topics.
[**getNotificationsChannelSubscriptions**](NotificationsApi.md#getNotificationsChannelSubscriptions) | **GET** /api/v2/notifications/channels/{channelId}/subscriptions | The list of all subscriptions for this channel
[**getNotificationsChannels**](NotificationsApi.md#getNotificationsChannels) | **GET** /api/v2/notifications/channels | The list of existing channels
[**postNotificationsChannelSubscriptions**](NotificationsApi.md#postNotificationsChannelSubscriptions) | **POST** /api/v2/notifications/channels/{channelId}/subscriptions | Add a list of subscriptions to the existing list of subscriptions
[**postNotificationsChannels**](NotificationsApi.md#postNotificationsChannels) | **POST** /api/v2/notifications/channels | Create a new channel
[**putNotificationsChannelSubscriptions**](NotificationsApi.md#putNotificationsChannelSubscriptions) | **PUT** /api/v2/notifications/channels/{channelId}/subscriptions | Replace the current list of subscriptions with a new list.


# **deleteNotificationsChannelSubscriptions**
> deleteNotificationsChannelSubscriptions($channelId)

Remove all subscriptions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = "channelId_example"; // string | Channel ID

try {
    $apiInstance->deleteNotificationsChannelSubscriptions($channelId);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteNotificationsChannelSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **string**| Channel ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationsAvailabletopics**
> \PureCloudPlatform\Client\V2\Model\AvailableTopicEntityListing getNotificationsAvailabletopics($expand)

Get available notification topics.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getNotificationsAvailabletopics($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationsAvailabletopics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AvailableTopicEntityListing**](../Model/AvailableTopicEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationsChannelSubscriptions**
> \PureCloudPlatform\Client\V2\Model\ChannelTopicEntityListing getNotificationsChannelSubscriptions($channelId)

The list of all subscriptions for this channel



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = "channelId_example"; // string | Channel ID

try {
    $result = $apiInstance->getNotificationsChannelSubscriptions($channelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationsChannelSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **string**| Channel ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChannelTopicEntityListing**](../Model/ChannelTopicEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotificationsChannels**
> \PureCloudPlatform\Client\V2\Model\ChannelEntityListing getNotificationsChannels($includechannels)

The list of existing channels



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includechannels = "token"; // string | Show user's channels for this specific token or across all tokens for this user and app.  Channel Ids for other access tokens will not be shown, but will be presented to show their existence.

try {
    $result = $apiInstance->getNotificationsChannels($includechannels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationsChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includechannels** | **string**| Show user&#39;s channels for this specific token or across all tokens for this user and app.  Channel Ids for other access tokens will not be shown, but will be presented to show their existence. | [optional] [default to token]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChannelEntityListing**](../Model/ChannelEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNotificationsChannelSubscriptions**
> \PureCloudPlatform\Client\V2\Model\ChannelTopicEntityListing postNotificationsChannelSubscriptions($channelId, $body)

Add a list of subscriptions to the existing list of subscriptions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = "channelId_example"; // string | Channel ID
$body = array(new \PureCloudPlatform\Client\V2\Model\ChannelTopic()); // \PureCloudPlatform\Client\V2\Model\ChannelTopic[] | Body

try {
    $result = $apiInstance->postNotificationsChannelSubscriptions($channelId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->postNotificationsChannelSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **string**| Channel ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ChannelTopic[]**](../Model/ChannelTopic.md)| Body |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChannelTopicEntityListing**](../Model/ChannelTopicEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNotificationsChannels**
> \PureCloudPlatform\Client\V2\Model\Channel postNotificationsChannels()

Create a new channel

There is a limit of 10 channels per user/app combination. Creating an 11th channel will remove the channel with oldest last used date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postNotificationsChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->postNotificationsChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\Channel**](../Model/Channel.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putNotificationsChannelSubscriptions**
> \PureCloudPlatform\Client\V2\Model\ChannelTopicEntityListing putNotificationsChannelSubscriptions($channelId, $body)

Replace the current list of subscriptions with a new list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = "channelId_example"; // string | Channel ID
$body = array(new \PureCloudPlatform\Client\V2\Model\ChannelTopic()); // \PureCloudPlatform\Client\V2\Model\ChannelTopic[] | Body

try {
    $result = $apiInstance->putNotificationsChannelSubscriptions($channelId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->putNotificationsChannelSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **channelId** | **string**| Channel ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ChannelTopic[]**](../Model/ChannelTopic.md)| Body |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChannelTopicEntityListing**](../Model/ChannelTopicEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

