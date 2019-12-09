# PureCloudPlatform\Client\V2\MessagingApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMessagingIntegrationsFacebookIntegrationId**](MessagingApi.md#deleteMessagingIntegrationsFacebookIntegrationId) | **DELETE** /api/v2/messaging/integrations/facebook/{integrationId} | Delete a Facebook messaging integration
[**deleteMessagingIntegrationsLineIntegrationId**](MessagingApi.md#deleteMessagingIntegrationsLineIntegrationId) | **DELETE** /api/v2/messaging/integrations/line/{integrationId} | Delete a LINE messenger integration
[**deleteMessagingIntegrationsTwitterIntegrationId**](MessagingApi.md#deleteMessagingIntegrationsTwitterIntegrationId) | **DELETE** /api/v2/messaging/integrations/twitter/{integrationId} | Delete a Twitter messaging integration
[**getMessagingIntegrations**](MessagingApi.md#getMessagingIntegrations) | **GET** /api/v2/messaging/integrations | Get a list of Integrations
[**getMessagingIntegrationsFacebook**](MessagingApi.md#getMessagingIntegrationsFacebook) | **GET** /api/v2/messaging/integrations/facebook | Get a list of Facebook Integrations
[**getMessagingIntegrationsFacebookIntegrationId**](MessagingApi.md#getMessagingIntegrationsFacebookIntegrationId) | **GET** /api/v2/messaging/integrations/facebook/{integrationId} | Get a Facebook messaging integration
[**getMessagingIntegrationsLine**](MessagingApi.md#getMessagingIntegrationsLine) | **GET** /api/v2/messaging/integrations/line | Get a list of LINE messenger Integrations
[**getMessagingIntegrationsLineIntegrationId**](MessagingApi.md#getMessagingIntegrationsLineIntegrationId) | **GET** /api/v2/messaging/integrations/line/{integrationId} | Get a LINE messenger integration
[**getMessagingIntegrationsTwitter**](MessagingApi.md#getMessagingIntegrationsTwitter) | **GET** /api/v2/messaging/integrations/twitter | Get a list of Twitter Integrations
[**getMessagingIntegrationsTwitterIntegrationId**](MessagingApi.md#getMessagingIntegrationsTwitterIntegrationId) | **GET** /api/v2/messaging/integrations/twitter/{integrationId} | Get a Twitter messaging integration
[**getMessagingSticker**](MessagingApi.md#getMessagingSticker) | **GET** /api/v2/messaging/stickers/{messengerType} | Get a list of Messaging Stickers
[**postMessagingIntegrationsFacebook**](MessagingApi.md#postMessagingIntegrationsFacebook) | **POST** /api/v2/messaging/integrations/facebook | Create a Facebook Integration
[**postMessagingIntegrationsLine**](MessagingApi.md#postMessagingIntegrationsLine) | **POST** /api/v2/messaging/integrations/line | Create a LINE messenger Integration
[**postMessagingIntegrationsTwitter**](MessagingApi.md#postMessagingIntegrationsTwitter) | **POST** /api/v2/messaging/integrations/twitter | Create a Twitter Integration
[**putMessagingIntegrationsLineIntegrationId**](MessagingApi.md#putMessagingIntegrationsLineIntegrationId) | **PUT** /api/v2/messaging/integrations/line/{integrationId} | Update a LINE messenger integration


# **deleteMessagingIntegrationsFacebookIntegrationId**
> deleteMessagingIntegrationsFacebookIntegrationId($integrationId)

Delete a Facebook messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $apiInstance->deleteMessagingIntegrationsFacebookIntegrationId($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->deleteMessagingIntegrationsFacebookIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessagingIntegrationsLineIntegrationId**
> deleteMessagingIntegrationsLineIntegrationId($integrationId)

Delete a LINE messenger integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $apiInstance->deleteMessagingIntegrationsLineIntegrationId($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->deleteMessagingIntegrationsLineIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMessagingIntegrationsTwitterIntegrationId**
> deleteMessagingIntegrationsTwitterIntegrationId($integrationId)

Delete a Twitter messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $apiInstance->deleteMessagingIntegrationsTwitterIntegrationId($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->deleteMessagingIntegrationsTwitterIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrations**
> \PureCloudPlatform\Client\V2\Model\MessagingIntegrationEntityListing getMessagingIntegrations($pageSize, $pageNumber)

Get a list of Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getMessagingIntegrations($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessagingIntegrationEntityListing**](../Model/MessagingIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrationsFacebook**
> \PureCloudPlatform\Client\V2\Model\FacebookIntegrationEntityListing getMessagingIntegrationsFacebook($pageSize, $pageNumber)

Get a list of Facebook Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getMessagingIntegrationsFacebook($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrationsFacebook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FacebookIntegrationEntityListing**](../Model/FacebookIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrationsFacebookIntegrationId**
> \PureCloudPlatform\Client\V2\Model\FacebookIntegration getMessagingIntegrationsFacebookIntegrationId($integrationId)

Get a Facebook messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getMessagingIntegrationsFacebookIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrationsFacebookIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FacebookIntegration**](../Model/FacebookIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrationsLine**
> \PureCloudPlatform\Client\V2\Model\LineIntegrationEntityListing getMessagingIntegrationsLine($pageSize, $pageNumber)

Get a list of LINE messenger Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getMessagingIntegrationsLine($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrationsLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegrationEntityListing**](../Model/LineIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrationsLineIntegrationId**
> \PureCloudPlatform\Client\V2\Model\LineIntegration getMessagingIntegrationsLineIntegrationId($integrationId)

Get a LINE messenger integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getMessagingIntegrationsLineIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrationsLineIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegration**](../Model/LineIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrationsTwitter**
> \PureCloudPlatform\Client\V2\Model\TwitterIntegrationEntityListing getMessagingIntegrationsTwitter($pageSize, $pageNumber)

Get a list of Twitter Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getMessagingIntegrationsTwitter($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrationsTwitter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TwitterIntegrationEntityListing**](../Model/TwitterIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingIntegrationsTwitterIntegrationId**
> \PureCloudPlatform\Client\V2\Model\TwitterIntegration getMessagingIntegrationsTwitterIntegrationId($integrationId)

Get a Twitter messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getMessagingIntegrationsTwitterIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingIntegrationsTwitterIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TwitterIntegration**](../Model/TwitterIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessagingSticker**
> \PureCloudPlatform\Client\V2\Model\MessagingStickerEntityListing getMessagingSticker($messengerType, $pageSize, $pageNumber)

Get a list of Messaging Stickers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messengerType = "messengerType_example"; // string | Messenger Type
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getMessagingSticker($messengerType, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->getMessagingSticker: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messengerType** | **string**| Messenger Type |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessagingStickerEntityListing**](../Model/MessagingStickerEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMessagingIntegrationsFacebook**
> \PureCloudPlatform\Client\V2\Model\FacebookIntegration postMessagingIntegrationsFacebook($body)

Create a Facebook Integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FacebookIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\FacebookIntegrationRequest | FacebookIntegrationRequest

try {
    $result = $apiInstance->postMessagingIntegrationsFacebook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->postMessagingIntegrationsFacebook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FacebookIntegrationRequest**](../Model/FacebookIntegrationRequest.md)| FacebookIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FacebookIntegration**](../Model/FacebookIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMessagingIntegrationsLine**
> \PureCloudPlatform\Client\V2\Model\LineIntegration postMessagingIntegrationsLine($body)

Create a LINE messenger Integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest | LineIntegrationRequest

try {
    $result = $apiInstance->postMessagingIntegrationsLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->postMessagingIntegrationsLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LineIntegrationRequest**](../Model/LineIntegrationRequest.md)| LineIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegration**](../Model/LineIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMessagingIntegrationsTwitter**
> \PureCloudPlatform\Client\V2\Model\TwitterIntegration postMessagingIntegrationsTwitter($body)

Create a Twitter Integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TwitterIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\TwitterIntegrationRequest | TwitterIntegrationRequest

try {
    $result = $apiInstance->postMessagingIntegrationsTwitter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->postMessagingIntegrationsTwitter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TwitterIntegrationRequest**](../Model/TwitterIntegrationRequest.md)| TwitterIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TwitterIntegration**](../Model/TwitterIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMessagingIntegrationsLineIntegrationId**
> \PureCloudPlatform\Client\V2\Model\LineIntegration putMessagingIntegrationsLineIntegrationId($integrationId, $body)

Update a LINE messenger integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID
$body = new \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest | LineIntegrationRequest

try {
    $result = $apiInstance->putMessagingIntegrationsLineIntegrationId($integrationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->putMessagingIntegrationsLineIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\LineIntegrationRequest**](../Model/LineIntegrationRequest.md)| LineIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegration**](../Model/LineIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

