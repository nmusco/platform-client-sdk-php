# PureCloudPlatform\Client\V2\GeneralDataProtectionRegulationApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGdprRequest**](GeneralDataProtectionRegulationApi.md#getGdprRequest) | **GET** /api/v2/gdpr/requests/{requestId} | Get an existing GDPR request
[**getGdprRequests**](GeneralDataProtectionRegulationApi.md#getGdprRequests) | **GET** /api/v2/gdpr/requests | Get all GDPR requests
[**getGdprSubjects**](GeneralDataProtectionRegulationApi.md#getGdprSubjects) | **GET** /api/v2/gdpr/subjects | Get GDPR subjects
[**postGdprRequests**](GeneralDataProtectionRegulationApi.md#postGdprRequests) | **POST** /api/v2/gdpr/requests | Submit a new GDPR request


# **getGdprRequest**
> \PureCloudPlatform\Client\V2\Model\GDPRRequest getGdprRequest($requestId)

Get an existing GDPR request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeneralDataProtectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestId = "requestId_example"; // string | Request id

try {
    $result = $apiInstance->getGdprRequest($requestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProtectionRegulationApi->getGdprRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestId** | **string**| Request id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\GDPRRequest**](../Model/GDPRRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGdprRequests**
> \PureCloudPlatform\Client\V2\Model\GDPRRequestEntityListing getGdprRequests($pageSize, $pageNumber)

Get all GDPR requests



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeneralDataProtectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getGdprRequests($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProtectionRegulationApi->getGdprRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GDPRRequestEntityListing**](../Model/GDPRRequestEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGdprSubjects**
> \PureCloudPlatform\Client\V2\Model\GDPRSubjectEntityListing getGdprSubjects($searchType, $searchValue)

Get GDPR subjects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeneralDataProtectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchType = "searchType_example"; // string | Search Type
$searchValue = "searchValue_example"; // string | Search Value

try {
    $result = $apiInstance->getGdprSubjects($searchType, $searchValue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProtectionRegulationApi->getGdprSubjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchType** | **string**| Search Type |
 **searchValue** | **string**| Search Value |

### Return type

[**\PureCloudPlatform\Client\V2\Model\GDPRSubjectEntityListing**](../Model/GDPRSubjectEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGdprRequests**
> \PureCloudPlatform\Client\V2\Model\GDPRRequest postGdprRequests($body, $deleteConfirmed)

Submit a new GDPR request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GeneralDataProtectionRegulationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\GDPRRequest(); // \PureCloudPlatform\Client\V2\Model\GDPRRequest | GDPR request
$deleteConfirmed = false; // bool | Confirm delete

try {
    $result = $apiInstance->postGdprRequests($body, $deleteConfirmed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDataProtectionRegulationApi->postGdprRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\GDPRRequest**](../Model/GDPRRequest.md)| GDPR request |
 **deleteConfirmed** | **bool**| Confirm delete | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GDPRRequest**](../Model/GDPRRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

