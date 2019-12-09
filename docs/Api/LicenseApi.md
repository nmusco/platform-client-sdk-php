# PureCloudPlatform\Client\V2\LicenseApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLicenseDefinition**](LicenseApi.md#getLicenseDefinition) | **GET** /api/v2/license/definitions/{licenseId} | Get PureCloud license definition.
[**getLicenseDefinitions**](LicenseApi.md#getLicenseDefinitions) | **GET** /api/v2/license/definitions | Get all PureCloud license definitions available for the organization.
[**getLicenseToggle**](LicenseApi.md#getLicenseToggle) | **GET** /api/v2/license/toggles/{featureName} | Get PureCloud license feature toggle value.
[**getLicenseUser**](LicenseApi.md#getLicenseUser) | **GET** /api/v2/license/users/{userId} | Get licenses for specified user.
[**getLicenseUsers**](LicenseApi.md#getLicenseUsers) | **GET** /api/v2/license/users | Get a page of users and their licenses
[**postLicenseOrganization**](LicenseApi.md#postLicenseOrganization) | **POST** /api/v2/license/organization | Update the organization&#39;s license assignments in a batch.
[**postLicenseToggle**](LicenseApi.md#postLicenseToggle) | **POST** /api/v2/license/toggles/{featureName} | Switch PureCloud license feature toggle value.
[**postLicenseUsers**](LicenseApi.md#postLicenseUsers) | **POST** /api/v2/license/users | Fetch user licenses in a batch.


# **getLicenseDefinition**
> \PureCloudPlatform\Client\V2\Model\LicenseDefinition getLicenseDefinition($licenseId)

Get PureCloud license definition.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$licenseId = "licenseId_example"; // string | ID

try {
    $result = $apiInstance->getLicenseDefinition($licenseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getLicenseDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **licenseId** | **string**| ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LicenseDefinition**](../Model/LicenseDefinition.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseDefinitions**
> \PureCloudPlatform\Client\V2\Model\LicenseDefinition[] getLicenseDefinitions()

Get all PureCloud license definitions available for the organization.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLicenseDefinitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getLicenseDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\LicenseDefinition[]**](../Model/LicenseDefinition.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseToggle**
> \PureCloudPlatform\Client\V2\Model\LicenseOrgToggle getLicenseToggle($featureName)

Get PureCloud license feature toggle value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$featureName = "featureName_example"; // string | featureName

try {
    $result = $apiInstance->getLicenseToggle($featureName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getLicenseToggle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **featureName** | **string**| featureName |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LicenseOrgToggle**](../Model/LicenseOrgToggle.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseUser**
> \PureCloudPlatform\Client\V2\Model\LicenseUser getLicenseUser($userId)

Get licenses for specified user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | ID

try {
    $result = $apiInstance->getLicenseUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getLicenseUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LicenseUser**](../Model/LicenseUser.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseUsers**
> \PureCloudPlatform\Client\V2\Model\UserLicensesEntityListing getLicenseUsers($pageSize, $pageNumber)

Get a page of users and their licenses

Retrieve a page of users in an organization along with the licenses they possess.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getLicenseUsers($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getLicenseUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserLicensesEntityListing**](../Model/UserLicensesEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLicenseOrganization**
> \PureCloudPlatform\Client\V2\Model\LicenseUpdateStatus[] postLicenseOrganization($body)

Update the organization's license assignments in a batch.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LicenseBatchAssignmentRequest(); // \PureCloudPlatform\Client\V2\Model\LicenseBatchAssignmentRequest | The license assignments to update.

try {
    $result = $apiInstance->postLicenseOrganization($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->postLicenseOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LicenseBatchAssignmentRequest**](../Model/LicenseBatchAssignmentRequest.md)| The license assignments to update. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LicenseUpdateStatus[]**](../Model/LicenseUpdateStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLicenseToggle**
> \PureCloudPlatform\Client\V2\Model\LicenseOrgToggle postLicenseToggle($featureName)

Switch PureCloud license feature toggle value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$featureName = "featureName_example"; // string | featureName

try {
    $result = $apiInstance->postLicenseToggle($featureName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->postLicenseToggle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **featureName** | **string**| featureName |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LicenseOrgToggle**](../Model/LicenseOrgToggle.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postLicenseUsers**
> map[string,object] postLicenseUsers($body)

Fetch user licenses in a batch.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\LicenseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | The user IDs to fetch.

try {
    $result = $apiInstance->postLicenseUsers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->postLicenseUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string[]**| The user IDs to fetch. | [optional]

### Return type

**map[string,object]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

