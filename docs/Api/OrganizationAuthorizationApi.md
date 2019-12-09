# PureCloudPlatform\Client\V2\OrganizationAuthorizationApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrgauthorizationTrustee**](OrganizationAuthorizationApi.md#deleteOrgauthorizationTrustee) | **DELETE** /api/v2/orgauthorization/trustees/{trusteeOrgId} | Delete Org Trust
[**deleteOrgauthorizationTrusteeUser**](OrganizationAuthorizationApi.md#deleteOrgauthorizationTrusteeUser) | **DELETE** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users/{trusteeUserId} | Delete Trustee User
[**deleteOrgauthorizationTrusteeUserRoles**](OrganizationAuthorizationApi.md#deleteOrgauthorizationTrusteeUserRoles) | **DELETE** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users/{trusteeUserId}/roles | Delete Trustee User Roles
[**deleteOrgauthorizationTrustor**](OrganizationAuthorizationApi.md#deleteOrgauthorizationTrustor) | **DELETE** /api/v2/orgauthorization/trustors/{trustorOrgId} | Delete Org Trust
[**deleteOrgauthorizationTrustorUser**](OrganizationAuthorizationApi.md#deleteOrgauthorizationTrustorUser) | **DELETE** /api/v2/orgauthorization/trustors/{trustorOrgId}/users/{trusteeUserId} | Delete Trustee User
[**getOrgauthorizationPairing**](OrganizationAuthorizationApi.md#getOrgauthorizationPairing) | **GET** /api/v2/orgauthorization/pairings/{pairingId} | Get Pairing Info
[**getOrgauthorizationTrustee**](OrganizationAuthorizationApi.md#getOrgauthorizationTrustee) | **GET** /api/v2/orgauthorization/trustees/{trusteeOrgId} | Get Org Trust
[**getOrgauthorizationTrusteeUser**](OrganizationAuthorizationApi.md#getOrgauthorizationTrusteeUser) | **GET** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users/{trusteeUserId} | Get Trustee User
[**getOrgauthorizationTrusteeUserRoles**](OrganizationAuthorizationApi.md#getOrgauthorizationTrusteeUserRoles) | **GET** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users/{trusteeUserId}/roles | Get Trustee User Roles
[**getOrgauthorizationTrusteeUsers**](OrganizationAuthorizationApi.md#getOrgauthorizationTrusteeUsers) | **GET** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users | The list of trustee users for this organization (i.e. users granted access to this organization).
[**getOrgauthorizationTrustees**](OrganizationAuthorizationApi.md#getOrgauthorizationTrustees) | **GET** /api/v2/orgauthorization/trustees | The list of trustees for this organization (i.e. organizations granted access to this organization).
[**getOrgauthorizationTrustor**](OrganizationAuthorizationApi.md#getOrgauthorizationTrustor) | **GET** /api/v2/orgauthorization/trustors/{trustorOrgId} | Get Org Trust
[**getOrgauthorizationTrustorUser**](OrganizationAuthorizationApi.md#getOrgauthorizationTrustorUser) | **GET** /api/v2/orgauthorization/trustors/{trustorOrgId}/users/{trusteeUserId} | Get Trustee User
[**getOrgauthorizationTrustorUsers**](OrganizationAuthorizationApi.md#getOrgauthorizationTrustorUsers) | **GET** /api/v2/orgauthorization/trustors/{trustorOrgId}/users | The list of users in the trustor organization (i.e. users granted access).
[**getOrgauthorizationTrustors**](OrganizationAuthorizationApi.md#getOrgauthorizationTrustors) | **GET** /api/v2/orgauthorization/trustors | The list of organizations that have authorized/trusted your organization.
[**postOrgauthorizationPairings**](OrganizationAuthorizationApi.md#postOrgauthorizationPairings) | **POST** /api/v2/orgauthorization/pairings | A pairing id is created by the trustee and given to the trustor to create a trust.
[**postOrgauthorizationTrusteeUsers**](OrganizationAuthorizationApi.md#postOrgauthorizationTrusteeUsers) | **POST** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users | Add a user to the trust.
[**postOrgauthorizationTrustees**](OrganizationAuthorizationApi.md#postOrgauthorizationTrustees) | **POST** /api/v2/orgauthorization/trustees | Create a new organization authorization trust. This is required to grant other organizations access to your organization.
[**postOrgauthorizationTrusteesAudits**](OrganizationAuthorizationApi.md#postOrgauthorizationTrusteesAudits) | **POST** /api/v2/orgauthorization/trustees/audits | Get Org Trustee Audits
[**postOrgauthorizationTrustorAudits**](OrganizationAuthorizationApi.md#postOrgauthorizationTrustorAudits) | **POST** /api/v2/orgauthorization/trustor/audits | Get Org Trustor Audits
[**putOrgauthorizationTrustee**](OrganizationAuthorizationApi.md#putOrgauthorizationTrustee) | **PUT** /api/v2/orgauthorization/trustees/{trusteeOrgId} | Update Org Trust
[**putOrgauthorizationTrusteeUserRoles**](OrganizationAuthorizationApi.md#putOrgauthorizationTrusteeUserRoles) | **PUT** /api/v2/orgauthorization/trustees/{trusteeOrgId}/users/{trusteeUserId}/roles | Update Trustee User Roles
[**putOrgauthorizationTrustorUser**](OrganizationAuthorizationApi.md#putOrgauthorizationTrustorUser) | **PUT** /api/v2/orgauthorization/trustors/{trustorOrgId}/users/{trusteeUserId} | Add a Trustee user to the trust.


# **deleteOrgauthorizationTrustee**
> deleteOrgauthorizationTrustee($trusteeOrgId)

Delete Org Trust



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id

try {
    $apiInstance->deleteOrgauthorizationTrustee($trusteeOrgId);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->deleteOrgauthorizationTrustee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrgauthorizationTrusteeUser**
> deleteOrgauthorizationTrusteeUser($trusteeOrgId, $trusteeUserId)

Delete Trustee User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $apiInstance->deleteOrgauthorizationTrusteeUser($trusteeOrgId, $trusteeUserId);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->deleteOrgauthorizationTrusteeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrgauthorizationTrusteeUserRoles**
> deleteOrgauthorizationTrusteeUserRoles($trusteeOrgId, $trusteeUserId)

Delete Trustee User Roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $apiInstance->deleteOrgauthorizationTrusteeUserRoles($trusteeOrgId, $trusteeUserId);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->deleteOrgauthorizationTrusteeUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrgauthorizationTrustor**
> deleteOrgauthorizationTrustor($trustorOrgId)

Delete Org Trust



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | Trustor Organization Id

try {
    $apiInstance->deleteOrgauthorizationTrustor($trustorOrgId);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->deleteOrgauthorizationTrustor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| Trustor Organization Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrgauthorizationTrustorUser**
> deleteOrgauthorizationTrustorUser($trustorOrgId, $trusteeUserId)

Delete Trustee User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | Trustor Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $apiInstance->deleteOrgauthorizationTrustorUser($trustorOrgId, $trusteeUserId);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->deleteOrgauthorizationTrustorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| Trustor Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationPairing**
> \PureCloudPlatform\Client\V2\Model\TrustRequest getOrgauthorizationPairing($pairingId)

Get Pairing Info



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pairingId = "pairingId_example"; // string | Pairing Id

try {
    $result = $apiInstance->getOrgauthorizationPairing($pairingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationPairing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pairingId** | **string**| Pairing Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustRequest**](../Model/TrustRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrustee**
> \PureCloudPlatform\Client\V2\Model\Trustee getOrgauthorizationTrustee($trusteeOrgId)

Get Org Trust



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id

try {
    $result = $apiInstance->getOrgauthorizationTrustee($trusteeOrgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrustee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Trustee**](../Model/Trustee.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrusteeUser**
> \PureCloudPlatform\Client\V2\Model\TrustUser getOrgauthorizationTrusteeUser($trusteeOrgId, $trusteeUserId)

Get Trustee User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $result = $apiInstance->getOrgauthorizationTrusteeUser($trusteeOrgId, $trusteeUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrusteeUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustUser**](../Model/TrustUser.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrusteeUserRoles**
> \PureCloudPlatform\Client\V2\Model\UserAuthorization getOrgauthorizationTrusteeUserRoles($trusteeOrgId, $trusteeUserId)

Get Trustee User Roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $result = $apiInstance->getOrgauthorizationTrusteeUserRoles($trusteeOrgId, $trusteeUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrusteeUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserAuthorization**](../Model/UserAuthorization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrusteeUsers**
> \PureCloudPlatform\Client\V2\Model\TrustUserEntityListing getOrgauthorizationTrusteeUsers($trusteeOrgId, $pageSize, $pageNumber)

The list of trustee users for this organization (i.e. users granted access to this organization).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getOrgauthorizationTrusteeUsers($trusteeOrgId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrusteeUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustUserEntityListing**](../Model/TrustUserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrustees**
> \PureCloudPlatform\Client\V2\Model\TrustEntityListing getOrgauthorizationTrustees($pageSize, $pageNumber)

The list of trustees for this organization (i.e. organizations granted access to this organization).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getOrgauthorizationTrustees($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrustees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustEntityListing**](../Model/TrustEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrustor**
> \PureCloudPlatform\Client\V2\Model\Trustor getOrgauthorizationTrustor($trustorOrgId)

Get Org Trust



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | Trustor Organization Id

try {
    $result = $apiInstance->getOrgauthorizationTrustor($trustorOrgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrustor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| Trustor Organization Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Trustor**](../Model/Trustor.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrustorUser**
> \PureCloudPlatform\Client\V2\Model\TrustUser getOrgauthorizationTrustorUser($trustorOrgId, $trusteeUserId)

Get Trustee User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | Trustor Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $result = $apiInstance->getOrgauthorizationTrustorUser($trustorOrgId, $trusteeUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrustorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| Trustor Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustUser**](../Model/TrustUser.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrustorUsers**
> \PureCloudPlatform\Client\V2\Model\TrustUserEntityListing getOrgauthorizationTrustorUsers($trustorOrgId, $pageSize, $pageNumber)

The list of users in the trustor organization (i.e. users granted access).



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | Trustee Organization Id
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getOrgauthorizationTrustorUsers($trustorOrgId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrustorUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| Trustee Organization Id |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustUserEntityListing**](../Model/TrustUserEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrgauthorizationTrustors**
> \PureCloudPlatform\Client\V2\Model\TrustorEntityListing getOrgauthorizationTrustors($pageSize, $pageNumber)

The list of organizations that have authorized/trusted your organization.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getOrgauthorizationTrustors($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->getOrgauthorizationTrustors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustorEntityListing**](../Model/TrustorEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrgauthorizationPairings**
> \PureCloudPlatform\Client\V2\Model\TrustRequest postOrgauthorizationPairings($body)

A pairing id is created by the trustee and given to the trustor to create a trust.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TrustRequestCreate(); // \PureCloudPlatform\Client\V2\Model\TrustRequestCreate | Pairing Info

try {
    $result = $apiInstance->postOrgauthorizationPairings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->postOrgauthorizationPairings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrustRequestCreate**](../Model/TrustRequestCreate.md)| Pairing Info |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustRequest**](../Model/TrustRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrgauthorizationTrusteeUsers**
> \PureCloudPlatform\Client\V2\Model\TrustUser postOrgauthorizationTrusteeUsers($trusteeOrgId, $body)

Add a user to the trust.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$body = new \PureCloudPlatform\Client\V2\Model\TrustMemberCreate(); // \PureCloudPlatform\Client\V2\Model\TrustMemberCreate | Trust

try {
    $result = $apiInstance->postOrgauthorizationTrusteeUsers($trusteeOrgId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->postOrgauthorizationTrusteeUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrustMemberCreate**](../Model/TrustMemberCreate.md)| Trust |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustUser**](../Model/TrustUser.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrgauthorizationTrustees**
> \PureCloudPlatform\Client\V2\Model\Trustee postOrgauthorizationTrustees($body)

Create a new organization authorization trust. This is required to grant other organizations access to your organization.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TrustCreate(); // \PureCloudPlatform\Client\V2\Model\TrustCreate | Trust

try {
    $result = $apiInstance->postOrgauthorizationTrustees($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->postOrgauthorizationTrustees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrustCreate**](../Model/TrustCreate.md)| Trust |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Trustee**](../Model/Trustee.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrgauthorizationTrusteesAudits**
> \PureCloudPlatform\Client\V2\Model\AuditQueryResponse postOrgauthorizationTrusteesAudits($body, $pageSize, $pageNumber, $sortBy, $sortOrder)

Get Org Trustee Audits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TrusteeAuditQueryRequest(); // \PureCloudPlatform\Client\V2\Model\TrusteeAuditQueryRequest | Values to scope the request.
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "timestamp"; // string | Sort by
$sortOrder = "descending"; // string | Sort order

try {
    $result = $apiInstance->postOrgauthorizationTrusteesAudits($body, $pageSize, $pageNumber, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->postOrgauthorizationTrusteesAudits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrusteeAuditQueryRequest**](../Model/TrusteeAuditQueryRequest.md)| Values to scope the request. |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to timestamp]
 **sortOrder** | **string**| Sort order | [optional] [default to descending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuditQueryResponse**](../Model/AuditQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOrgauthorizationTrustorAudits**
> \PureCloudPlatform\Client\V2\Model\AuditQueryResponse postOrgauthorizationTrustorAudits($body, $pageSize, $pageNumber, $sortBy, $sortOrder)

Get Org Trustor Audits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TrustorAuditQueryRequest(); // \PureCloudPlatform\Client\V2\Model\TrustorAuditQueryRequest | Values to scope the request.
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "timestamp"; // string | Sort by
$sortOrder = "descending"; // string | Sort order

try {
    $result = $apiInstance->postOrgauthorizationTrustorAudits($body, $pageSize, $pageNumber, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->postOrgauthorizationTrustorAudits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrustorAuditQueryRequest**](../Model/TrustorAuditQueryRequest.md)| Values to scope the request. |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to timestamp]
 **sortOrder** | **string**| Sort order | [optional] [default to descending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuditQueryResponse**](../Model/AuditQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrgauthorizationTrustee**
> \PureCloudPlatform\Client\V2\Model\Trustee putOrgauthorizationTrustee($trusteeOrgId, $body)

Update Org Trust



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$body = new \PureCloudPlatform\Client\V2\Model\Trustee(); // \PureCloudPlatform\Client\V2\Model\Trustee | Client

try {
    $result = $apiInstance->putOrgauthorizationTrustee($trusteeOrgId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->putOrgauthorizationTrustee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Trustee**](../Model/Trustee.md)| Client |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Trustee**](../Model/Trustee.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrgauthorizationTrusteeUserRoles**
> \PureCloudPlatform\Client\V2\Model\UserAuthorization putOrgauthorizationTrusteeUserRoles($trusteeOrgId, $trusteeUserId, $body)

Update Trustee User Roles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trusteeOrgId = "trusteeOrgId_example"; // string | Trustee Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | List of roles

try {
    $result = $apiInstance->putOrgauthorizationTrusteeUserRoles($trusteeOrgId, $trusteeUserId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->putOrgauthorizationTrusteeUserRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trusteeOrgId** | **string**| Trustee Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |
 **body** | **string[]**| List of roles |

### Return type

[**\PureCloudPlatform\Client\V2\Model\UserAuthorization**](../Model/UserAuthorization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrgauthorizationTrustorUser**
> \PureCloudPlatform\Client\V2\Model\TrustUser putOrgauthorizationTrustorUser($trustorOrgId, $trusteeUserId)

Add a Trustee user to the trust.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | Trustor Organization Id
$trusteeUserId = "trusteeUserId_example"; // string | Trustee User Id

try {
    $result = $apiInstance->putOrgauthorizationTrustorUser($trustorOrgId, $trusteeUserId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationAuthorizationApi->putOrgauthorizationTrustorUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| Trustor Organization Id |
 **trusteeUserId** | **string**| Trustee User Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrustUser**](../Model/TrustUser.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

