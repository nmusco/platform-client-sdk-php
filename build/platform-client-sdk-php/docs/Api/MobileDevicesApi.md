# PureCloudPlatform\Client\V2\MobileDevicesApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMobiledevice**](MobileDevicesApi.md#deleteMobiledevice) | **DELETE** /api/v2/mobiledevices/{deviceId} | Delete device
[**getMobiledevice**](MobileDevicesApi.md#getMobiledevice) | **GET** /api/v2/mobiledevices/{deviceId} | Get device
[**getMobiledevices**](MobileDevicesApi.md#getMobiledevices) | **GET** /api/v2/mobiledevices | Get a list of all devices.
[**postMobiledevices**](MobileDevicesApi.md#postMobiledevices) | **POST** /api/v2/mobiledevices | Create User device
[**putMobiledevice**](MobileDevicesApi.md#putMobiledevice) | **PUT** /api/v2/mobiledevices/{deviceId} | Update device


# **deleteMobiledevice**
> deleteMobiledevice($deviceId)

Delete device



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MobileDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deviceId = "deviceId_example"; // string | Device ID

try {
    $apiInstance->deleteMobiledevice($deviceId);
} catch (Exception $e) {
    echo 'Exception when calling MobileDevicesApi->deleteMobiledevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceId** | **string**| Device ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMobiledevice**
> \PureCloudPlatform\Client\V2\Model\UserDevice getMobiledevice($deviceId)

Get device



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MobileDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deviceId = "deviceId_example"; // string | Device ID

try {
    $result = $apiInstance->getMobiledevice($deviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileDevicesApi->getMobiledevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceId** | **string**| Device ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserDevice**](../Model/UserDevice.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMobiledevices**
> \PureCloudPlatform\Client\V2\Model\DirectoryUserDevicesListing getMobiledevices($pageSize, $pageNumber, $sortOrder)

Get a list of all devices.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MobileDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortOrder = "ascending"; // string | Ascending or descending sort order

try {
    $result = $apiInstance->getMobiledevices($pageSize, $pageNumber, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileDevicesApi->getMobiledevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortOrder** | **string**| Ascending or descending sort order | [optional] [default to ascending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DirectoryUserDevicesListing**](../Model/DirectoryUserDevicesListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMobiledevices**
> \PureCloudPlatform\Client\V2\Model\UserDevice postMobiledevices($body)

Create User device



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MobileDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\UserDevice(); // \PureCloudPlatform\Client\V2\Model\UserDevice | Device

try {
    $result = $apiInstance->postMobiledevices($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileDevicesApi->postMobiledevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserDevice**](../Model/UserDevice.md)| Device |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserDevice**](../Model/UserDevice.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMobiledevice**
> \PureCloudPlatform\Client\V2\Model\UserDevice putMobiledevice($deviceId, $body)

Update device



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\MobileDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deviceId = "deviceId_example"; // string | Device ID
$body = new \PureCloudPlatform\Client\V2\Model\UserDevice(); // \PureCloudPlatform\Client\V2\Model\UserDevice | Device

try {
    $result = $apiInstance->putMobiledevice($deviceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MobileDevicesApi->putMobiledevice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **deviceId** | **string**| Device ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UserDevice**](../Model/UserDevice.md)| Device | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserDevice**](../Model/UserDevice.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

