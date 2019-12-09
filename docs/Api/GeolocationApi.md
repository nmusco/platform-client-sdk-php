# PureCloudPlatform\Client\V2\GeolocationApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGeolocationsSettings**](GeolocationApi.md#getGeolocationsSettings) | **GET** /api/v2/geolocations/settings | Get a organization&#39;s GeolocationSettings
[**getUserGeolocation**](GeolocationApi.md#getUserGeolocation) | **GET** /api/v2/users/{userId}/geolocations/{clientId} | Get a user&#39;s Geolocation
[**patchGeolocationsSettings**](GeolocationApi.md#patchGeolocationsSettings) | **PATCH** /api/v2/geolocations/settings | Patch a organization&#39;s GeolocationSettings
[**patchUserGeolocation**](GeolocationApi.md#patchUserGeolocation) | **PATCH** /api/v2/users/{userId}/geolocations/{clientId} | Patch a user&#39;s Geolocation


# **getGeolocationsSettings**
> \PureCloudPlatform\Client\V2\Model\GeolocationSettings getGeolocationsSettings()

Get a organization's GeolocationSettings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeolocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGeolocationsSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationApi->getGeolocationsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\GeolocationSettings**](../Model/GeolocationSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGeolocation**
> \PureCloudPlatform\Client\V2\Model\Geolocation getUserGeolocation($userId, $clientId)

Get a user's Geolocation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeolocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | user Id
$clientId = "clientId_example"; // string | client Id

try {
    $result = $apiInstance->getUserGeolocation($userId, $clientId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationApi->getUserGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| user Id |
 **clientId** | **string**| client Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Geolocation**](../Model/Geolocation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchGeolocationsSettings**
> \PureCloudPlatform\Client\V2\Model\GeolocationSettings patchGeolocationsSettings($body)

Patch a organization's GeolocationSettings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeolocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\GeolocationSettings(); // \PureCloudPlatform\Client\V2\Model\GeolocationSettings | Geolocation settings

try {
    $result = $apiInstance->patchGeolocationsSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationApi->patchGeolocationsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\GeolocationSettings**](../Model/GeolocationSettings.md)| Geolocation settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\GeolocationSettings**](../Model/GeolocationSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchUserGeolocation**
> \PureCloudPlatform\Client\V2\Model\Geolocation patchUserGeolocation($userId, $clientId, $body)

Patch a user's Geolocation

The geolocation object can be patched one of three ways. Option 1: Set the 'primary' property to true. This will set the client as the user's primary geolocation source.  Option 2: Provide the 'latitude' and 'longitude' values.  This will enqueue an asynchronous update of the 'city', 'region', and 'country', generating a notification. A subsequent GET operation will include the new values for 'city', 'region' and 'country'.  Option 3:  Provide the 'city', 'region', 'country' values.  Option 1 can be combined with Option 2 or Option 3.  For example, update the client as primary and provide latitude and longitude values.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeolocationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | user Id
$clientId = "clientId_example"; // string | client Id
$body = new \PureCloudPlatform\Client\V2\Model\Geolocation(); // \PureCloudPlatform\Client\V2\Model\Geolocation | Geolocation

try {
    $result = $apiInstance->patchUserGeolocation($userId, $clientId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeolocationApi->patchUserGeolocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| user Id |
 **clientId** | **string**| client Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Geolocation**](../Model/Geolocation.md)| Geolocation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Geolocation**](../Model/Geolocation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

