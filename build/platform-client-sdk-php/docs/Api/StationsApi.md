# PureCloudPlatform\Client\V2\StationsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStationAssociateduser**](StationsApi.md#deleteStationAssociateduser) | **DELETE** /api/v2/stations/{stationId}/associateduser | Unassigns the user assigned to this station
[**getStation**](StationsApi.md#getStation) | **GET** /api/v2/stations/{stationId} | Get station.
[**getStations**](StationsApi.md#getStations) | **GET** /api/v2/stations | Get the list of available stations.
[**getStationsSettings**](StationsApi.md#getStationsSettings) | **GET** /api/v2/stations/settings | Get an organization&#39;s StationSettings
[**patchStationsSettings**](StationsApi.md#patchStationsSettings) | **PATCH** /api/v2/stations/settings | Patch an organization&#39;s StationSettings


# **deleteStationAssociateduser**
> deleteStationAssociateduser($stationId)

Unassigns the user assigned to this station



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = "stationId_example"; // string | Station ID

try {
    $apiInstance->deleteStationAssociateduser($stationId);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->deleteStationAssociateduser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stationId** | **string**| Station ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStation**
> \PureCloudPlatform\Client\V2\Model\Station getStation($stationId)

Get station.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stationId = "stationId_example"; // string | Station ID

try {
    $result = $apiInstance->getStation($stationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getStation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stationId** | **string**| Station ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Station**](../Model/Station.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStations**
> \PureCloudPlatform\Client\V2\Model\StationEntityListing getStations($pageSize, $pageNumber, $sortBy, $name, $userSelectable, $webRtcUserId, $id, $lineAppearanceId)

Get the list of available stations.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$name = "name_example"; // string | Name
$userSelectable = "userSelectable_example"; // string | True for stations that the user can select otherwise false
$webRtcUserId = "webRtcUserId_example"; // string | Filter for the webRtc station of the webRtcUserId
$id = "id_example"; // string | Comma separated list of stationIds
$lineAppearanceId = "lineAppearanceId_example"; // string | lineAppearanceId

try {
    $result = $apiInstance->getStations($pageSize, $pageNumber, $sortBy, $name, $userSelectable, $webRtcUserId, $id, $lineAppearanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getStations: ', $e->getMessage(), PHP_EOL;
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
 **userSelectable** | **string**| True for stations that the user can select otherwise false | [optional]
 **webRtcUserId** | **string**| Filter for the webRtc station of the webRtcUserId | [optional]
 **id** | **string**| Comma separated list of stationIds | [optional]
 **lineAppearanceId** | **string**| lineAppearanceId | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\StationEntityListing**](../Model/StationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStationsSettings**
> \PureCloudPlatform\Client\V2\Model\StationSettings getStationsSettings()

Get an organization's StationSettings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStationsSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->getStationsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\StationSettings**](../Model/StationSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchStationsSettings**
> \PureCloudPlatform\Client\V2\Model\StationSettings patchStationsSettings($body)

Patch an organization's StationSettings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\StationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\StationSettings(); // \PureCloudPlatform\Client\V2\Model\StationSettings | Station settings

try {
    $result = $apiInstance->patchStationsSettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StationsApi->patchStationsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\StationSettings**](../Model/StationSettings.md)| Station settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\StationSettings**](../Model/StationSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

