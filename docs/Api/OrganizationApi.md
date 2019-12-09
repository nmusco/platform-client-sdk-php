# PureCloudPlatform\Client\V2\OrganizationApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFieldconfig**](OrganizationApi.md#getFieldconfig) | **GET** /api/v2/fieldconfig | Fetch field config for an entity type
[**getOrganizationsEmbeddedintegration**](OrganizationApi.md#getOrganizationsEmbeddedintegration) | **GET** /api/v2/organizations/embeddedintegration | Get the list of domains that will be allowed to embed PureCloud applications
[**getOrganizationsMe**](OrganizationApi.md#getOrganizationsMe) | **GET** /api/v2/organizations/me | Get organization.
[**getOrganizationsWhitelist**](OrganizationApi.md#getOrganizationsWhitelist) | **GET** /api/v2/organizations/whitelist | Use PUT /api/v2/organizations/embeddedintegration instead
[**patchOrganizationsFeature**](OrganizationApi.md#patchOrganizationsFeature) | **PATCH** /api/v2/organizations/features/{featureName} | Update organization
[**putOrganizationsEmbeddedintegration**](OrganizationApi.md#putOrganizationsEmbeddedintegration) | **PUT** /api/v2/organizations/embeddedintegration | Update the list of domains that will be allowed to embed PureCloud applications
[**putOrganizationsMe**](OrganizationApi.md#putOrganizationsMe) | **PUT** /api/v2/organizations/me | Update organization.
[**putOrganizationsWhitelist**](OrganizationApi.md#putOrganizationsWhitelist) | **PUT** /api/v2/organizations/whitelist | Use PUT /api/v2/organizations/embeddedintegration instead


# **getFieldconfig**
> \PureCloudPlatform\Client\V2\Model\FieldConfig getFieldconfig($type)

Fetch field config for an entity type



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
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
    echo 'Exception when calling OrganizationApi->getFieldconfig: ', $e->getMessage(), PHP_EOL;
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

# **getOrganizationsEmbeddedintegration**
> \PureCloudPlatform\Client\V2\Model\EmbeddedIntegration getOrganizationsEmbeddedintegration()

Get the list of domains that will be allowed to embed PureCloud applications



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationsEmbeddedintegration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationsEmbeddedintegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmbeddedIntegration**](../Model/EmbeddedIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationsMe**
> \PureCloudPlatform\Client\V2\Model\Organization getOrganizationsMe()

Get organization.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationsMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationsMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\Organization**](../Model/Organization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationsWhitelist**
> \PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings getOrganizationsWhitelist()

Use PUT /api/v2/organizations/embeddedintegration instead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOrganizationsWhitelist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationsWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings**](../Model/OrgWhitelistSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOrganizationsFeature**
> \PureCloudPlatform\Client\V2\Model\OrganizationFeatures patchOrganizationsFeature($featureName, $enabled)

Update organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$featureName = "featureName_example"; // string | Organization feature
$enabled = new \PureCloudPlatform\Client\V2\Model\FeatureState(); // \PureCloudPlatform\Client\V2\Model\FeatureState | New state of feature

try {
    $result = $apiInstance->patchOrganizationsFeature($featureName, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->patchOrganizationsFeature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **featureName** | **string**| Organization feature |
 **enabled** | [**\PureCloudPlatform\Client\V2\Model\FeatureState**](../Model/FeatureState.md)| New state of feature |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrganizationFeatures**](../Model/OrganizationFeatures.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrganizationsEmbeddedintegration**
> \PureCloudPlatform\Client\V2\Model\EmbeddedIntegration putOrganizationsEmbeddedintegration($body)

Update the list of domains that will be allowed to embed PureCloud applications



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EmbeddedIntegration(); // \PureCloudPlatform\Client\V2\Model\EmbeddedIntegration | Whitelist settings

try {
    $result = $apiInstance->putOrganizationsEmbeddedintegration($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganizationsEmbeddedintegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EmbeddedIntegration**](../Model/EmbeddedIntegration.md)| Whitelist settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmbeddedIntegration**](../Model/EmbeddedIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrganizationsMe**
> \PureCloudPlatform\Client\V2\Model\Organization putOrganizationsMe($body)

Update organization.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Organization(); // \PureCloudPlatform\Client\V2\Model\Organization | Organization

try {
    $result = $apiInstance->putOrganizationsMe($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganizationsMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Organization**](../Model/Organization.md)| Organization | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Organization**](../Model/Organization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrganizationsWhitelist**
> \PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings putOrganizationsWhitelist($body)

Use PUT /api/v2/organizations/embeddedintegration instead



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings(); // \PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings | Whitelist settings

try {
    $result = $apiInstance->putOrganizationsWhitelist($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganizationsWhitelist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings**](../Model/OrgWhitelistSettings.md)| Whitelist settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OrgWhitelistSettings**](../Model/OrgWhitelistSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

