# PureCloudPlatform\Client\V2\WidgetsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWidgetsDeployment**](WidgetsApi.md#deleteWidgetsDeployment) | **DELETE** /api/v2/widgets/deployments/{deploymentId} | Delete a Widget deployment
[**getWidgetsDeployment**](WidgetsApi.md#getWidgetsDeployment) | **GET** /api/v2/widgets/deployments/{deploymentId} | Get a Widget deployment
[**getWidgetsDeployments**](WidgetsApi.md#getWidgetsDeployments) | **GET** /api/v2/widgets/deployments | List Widget deployments
[**postWidgetsDeployments**](WidgetsApi.md#postWidgetsDeployments) | **POST** /api/v2/widgets/deployments | Create Widget deployment
[**putWidgetsDeployment**](WidgetsApi.md#putWidgetsDeployment) | **PUT** /api/v2/widgets/deployments/{deploymentId} | Update a Widget deployment


# **deleteWidgetsDeployment**
> deleteWidgetsDeployment($deploymentId)

Delete a Widget deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploymentId = "deploymentId_example"; // string | Widget Config Id

try {
    $apiInstance->deleteWidgetsDeployment($deploymentId);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->deleteWidgetsDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deploymentId** | **string**| Widget Config Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetsDeployment**
> \PureCloudPlatform\Client\V2\Model\WidgetDeployment getWidgetsDeployment($deploymentId)

Get a Widget deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploymentId = "deploymentId_example"; // string | Widget Config Id

try {
    $result = $apiInstance->getWidgetsDeployment($deploymentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetsDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deploymentId** | **string**| Widget Config Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WidgetDeployment**](../Model/WidgetDeployment.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetsDeployments**
> \PureCloudPlatform\Client\V2\Model\WidgetDeploymentEntityListing getWidgetsDeployments()

List Widget deployments



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWidgetsDeployments();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetsDeployments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\WidgetDeploymentEntityListing**](../Model/WidgetDeploymentEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWidgetsDeployments**
> \PureCloudPlatform\Client\V2\Model\WidgetDeployment postWidgetsDeployments($body)

Create Widget deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WidgetDeployment(); // \PureCloudPlatform\Client\V2\Model\WidgetDeployment | Deployment

try {
    $result = $apiInstance->postWidgetsDeployments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->postWidgetsDeployments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WidgetDeployment**](../Model/WidgetDeployment.md)| Deployment |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WidgetDeployment**](../Model/WidgetDeployment.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWidgetsDeployment**
> \PureCloudPlatform\Client\V2\Model\WidgetDeployment putWidgetsDeployment($deploymentId, $body)

Update a Widget deployment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deploymentId = "deploymentId_example"; // string | Widget Config Id
$body = new \PureCloudPlatform\Client\V2\Model\WidgetDeployment(); // \PureCloudPlatform\Client\V2\Model\WidgetDeployment | Deployment

try {
    $result = $apiInstance->putWidgetsDeployment($deploymentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->putWidgetsDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deploymentId** | **string**| Widget Config Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WidgetDeployment**](../Model/WidgetDeployment.md)| Deployment |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WidgetDeployment**](../Model/WidgetDeployment.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

