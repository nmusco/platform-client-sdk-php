# PureCloudPlatform\Client\V2\IdentityProviderApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteIdentityprovidersAdfs**](IdentityProviderApi.md#deleteIdentityprovidersAdfs) | **DELETE** /api/v2/identityproviders/adfs | Delete ADFS Identity Provider
[**deleteIdentityprovidersCic**](IdentityProviderApi.md#deleteIdentityprovidersCic) | **DELETE** /api/v2/identityproviders/cic | Delete Customer Interaction Center (CIC) Identity Provider
[**deleteIdentityprovidersGsuite**](IdentityProviderApi.md#deleteIdentityprovidersGsuite) | **DELETE** /api/v2/identityproviders/gsuite | Delete G Suite Identity Provider
[**deleteIdentityprovidersIdentitynow**](IdentityProviderApi.md#deleteIdentityprovidersIdentitynow) | **DELETE** /api/v2/identityproviders/identitynow | Delete IdentityNow Provider
[**deleteIdentityprovidersOkta**](IdentityProviderApi.md#deleteIdentityprovidersOkta) | **DELETE** /api/v2/identityproviders/okta | Delete Okta Identity Provider
[**deleteIdentityprovidersOnelogin**](IdentityProviderApi.md#deleteIdentityprovidersOnelogin) | **DELETE** /api/v2/identityproviders/onelogin | Delete OneLogin Identity Provider
[**deleteIdentityprovidersPing**](IdentityProviderApi.md#deleteIdentityprovidersPing) | **DELETE** /api/v2/identityproviders/ping | Delete Ping Identity Provider
[**deleteIdentityprovidersPurecloud**](IdentityProviderApi.md#deleteIdentityprovidersPurecloud) | **DELETE** /api/v2/identityproviders/purecloud | Delete PureCloud Identity Provider
[**deleteIdentityprovidersPureengage**](IdentityProviderApi.md#deleteIdentityprovidersPureengage) | **DELETE** /api/v2/identityproviders/pureengage | Delete PureEngage Identity Provider
[**deleteIdentityprovidersSalesforce**](IdentityProviderApi.md#deleteIdentityprovidersSalesforce) | **DELETE** /api/v2/identityproviders/salesforce | Delete Salesforce Identity Provider
[**getIdentityproviders**](IdentityProviderApi.md#getIdentityproviders) | **GET** /api/v2/identityproviders | The list of identity providers
[**getIdentityprovidersAdfs**](IdentityProviderApi.md#getIdentityprovidersAdfs) | **GET** /api/v2/identityproviders/adfs | Get ADFS Identity Provider
[**getIdentityprovidersCic**](IdentityProviderApi.md#getIdentityprovidersCic) | **GET** /api/v2/identityproviders/cic | Get Customer Interaction Center (CIC) Identity Provider
[**getIdentityprovidersGsuite**](IdentityProviderApi.md#getIdentityprovidersGsuite) | **GET** /api/v2/identityproviders/gsuite | Get G Suite Identity Provider
[**getIdentityprovidersIdentitynow**](IdentityProviderApi.md#getIdentityprovidersIdentitynow) | **GET** /api/v2/identityproviders/identitynow | Get IdentityNow Provider
[**getIdentityprovidersOkta**](IdentityProviderApi.md#getIdentityprovidersOkta) | **GET** /api/v2/identityproviders/okta | Get Okta Identity Provider
[**getIdentityprovidersOnelogin**](IdentityProviderApi.md#getIdentityprovidersOnelogin) | **GET** /api/v2/identityproviders/onelogin | Get OneLogin Identity Provider
[**getIdentityprovidersPing**](IdentityProviderApi.md#getIdentityprovidersPing) | **GET** /api/v2/identityproviders/ping | Get Ping Identity Provider
[**getIdentityprovidersPurecloud**](IdentityProviderApi.md#getIdentityprovidersPurecloud) | **GET** /api/v2/identityproviders/purecloud | Get PureCloud Identity Provider
[**getIdentityprovidersPureengage**](IdentityProviderApi.md#getIdentityprovidersPureengage) | **GET** /api/v2/identityproviders/pureengage | Get PureEngage Identity Provider
[**getIdentityprovidersSalesforce**](IdentityProviderApi.md#getIdentityprovidersSalesforce) | **GET** /api/v2/identityproviders/salesforce | Get Salesforce Identity Provider
[**putIdentityprovidersAdfs**](IdentityProviderApi.md#putIdentityprovidersAdfs) | **PUT** /api/v2/identityproviders/adfs | Update/Create ADFS Identity Provider
[**putIdentityprovidersCic**](IdentityProviderApi.md#putIdentityprovidersCic) | **PUT** /api/v2/identityproviders/cic | Update/Create Customer Interaction Center (CIC) Identity Provider
[**putIdentityprovidersGsuite**](IdentityProviderApi.md#putIdentityprovidersGsuite) | **PUT** /api/v2/identityproviders/gsuite | Update/Create G Suite Identity Provider
[**putIdentityprovidersIdentitynow**](IdentityProviderApi.md#putIdentityprovidersIdentitynow) | **PUT** /api/v2/identityproviders/identitynow | Update/Create IdentityNow Provider
[**putIdentityprovidersOkta**](IdentityProviderApi.md#putIdentityprovidersOkta) | **PUT** /api/v2/identityproviders/okta | Update/Create Okta Identity Provider
[**putIdentityprovidersOnelogin**](IdentityProviderApi.md#putIdentityprovidersOnelogin) | **PUT** /api/v2/identityproviders/onelogin | Update/Create OneLogin Identity Provider
[**putIdentityprovidersPing**](IdentityProviderApi.md#putIdentityprovidersPing) | **PUT** /api/v2/identityproviders/ping | Update/Create Ping Identity Provider
[**putIdentityprovidersPurecloud**](IdentityProviderApi.md#putIdentityprovidersPurecloud) | **PUT** /api/v2/identityproviders/purecloud | Update/Create PureCloud Identity Provider
[**putIdentityprovidersPureengage**](IdentityProviderApi.md#putIdentityprovidersPureengage) | **PUT** /api/v2/identityproviders/pureengage | Update/Create PureEngage Identity Provider
[**putIdentityprovidersSalesforce**](IdentityProviderApi.md#putIdentityprovidersSalesforce) | **PUT** /api/v2/identityproviders/salesforce | Update/Create Salesforce Identity Provider


# **deleteIdentityprovidersAdfs**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersAdfs()

Delete ADFS Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersAdfs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersAdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersCic**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersCic()

Delete Customer Interaction Center (CIC) Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersCic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersCic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersGsuite**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersGsuite()

Delete G Suite Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersGsuite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersGsuite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersIdentitynow**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersIdentitynow()

Delete IdentityNow Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersIdentitynow();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersIdentitynow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersOkta**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersOkta()

Delete Okta Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersOkta();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersOkta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersOnelogin**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersOnelogin()

Delete OneLogin Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersOnelogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersOnelogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersPing**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersPing()

Delete Ping Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersPurecloud**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersPurecloud()

Delete PureCloud Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersPurecloud();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersPurecloud: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersPureengage**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersPureengage()

Delete PureEngage Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersPureengage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersPureengage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteIdentityprovidersSalesforce**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty deleteIdentityprovidersSalesforce()

Delete Salesforce Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deleteIdentityprovidersSalesforce();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->deleteIdentityprovidersSalesforce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityproviders**
> \PureCloudPlatform\Client\V2\Model\OAuthProviderEntityListing getIdentityproviders()

The list of identity providers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityproviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityproviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProviderEntityListing**](../Model/OAuthProviderEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersAdfs**
> \PureCloudPlatform\Client\V2\Model\ADFS getIdentityprovidersAdfs()

Get ADFS Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersAdfs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersAdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ADFS**](../Model/ADFS.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersCic**
> \PureCloudPlatform\Client\V2\Model\CustomerInteractionCenter getIdentityprovidersCic()

Get Customer Interaction Center (CIC) Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersCic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersCic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CustomerInteractionCenter**](../Model/CustomerInteractionCenter.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersGsuite**
> \PureCloudPlatform\Client\V2\Model\GSuite getIdentityprovidersGsuite()

Get G Suite Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersGsuite();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersGsuite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\GSuite**](../Model/GSuite.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersIdentitynow**
> \PureCloudPlatform\Client\V2\Model\IdentityNow getIdentityprovidersIdentitynow()

Get IdentityNow Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersIdentitynow();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersIdentitynow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\IdentityNow**](../Model/IdentityNow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersOkta**
> \PureCloudPlatform\Client\V2\Model\Okta getIdentityprovidersOkta()

Get Okta Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersOkta();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersOkta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\Okta**](../Model/Okta.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersOnelogin**
> \PureCloudPlatform\Client\V2\Model\OneLogin getIdentityprovidersOnelogin()

Get OneLogin Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersOnelogin();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersOnelogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\OneLogin**](../Model/OneLogin.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersPing**
> \PureCloudPlatform\Client\V2\Model\PingIdentity getIdentityprovidersPing()

Get Ping Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersPing();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\PingIdentity**](../Model/PingIdentity.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersPurecloud**
> \PureCloudPlatform\Client\V2\Model\PureCloud getIdentityprovidersPurecloud()

Get PureCloud Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersPurecloud();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersPurecloud: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\PureCloud**](../Model/PureCloud.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersPureengage**
> \PureCloudPlatform\Client\V2\Model\PureEngage getIdentityprovidersPureengage()

Get PureEngage Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersPureengage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersPureengage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\PureEngage**](../Model/PureEngage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getIdentityprovidersSalesforce**
> \PureCloudPlatform\Client\V2\Model\Salesforce getIdentityprovidersSalesforce()

Get Salesforce Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getIdentityprovidersSalesforce();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->getIdentityprovidersSalesforce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\Salesforce**](../Model/Salesforce.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersAdfs**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersAdfs($body)

Update/Create ADFS Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ADFS(); // \PureCloudPlatform\Client\V2\Model\ADFS | Provider

try {
    $result = $apiInstance->putIdentityprovidersAdfs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersAdfs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ADFS**](../Model/ADFS.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersCic**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersCic($body)

Update/Create Customer Interaction Center (CIC) Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CustomerInteractionCenter(); // \PureCloudPlatform\Client\V2\Model\CustomerInteractionCenter | Provider

try {
    $result = $apiInstance->putIdentityprovidersCic($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersCic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CustomerInteractionCenter**](../Model/CustomerInteractionCenter.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersGsuite**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersGsuite($body)

Update/Create G Suite Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\GSuite(); // \PureCloudPlatform\Client\V2\Model\GSuite | Provider

try {
    $result = $apiInstance->putIdentityprovidersGsuite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersGsuite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\GSuite**](../Model/GSuite.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersIdentitynow**
> \PureCloudPlatform\Client\V2\Model\IdentityNow putIdentityprovidersIdentitynow($body)

Update/Create IdentityNow Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\IdentityNow(); // \PureCloudPlatform\Client\V2\Model\IdentityNow | Provider

try {
    $result = $apiInstance->putIdentityprovidersIdentitynow($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersIdentitynow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\IdentityNow**](../Model/IdentityNow.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\IdentityNow**](../Model/IdentityNow.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersOkta**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersOkta($body)

Update/Create Okta Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Okta(); // \PureCloudPlatform\Client\V2\Model\Okta | Provider

try {
    $result = $apiInstance->putIdentityprovidersOkta($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersOkta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Okta**](../Model/Okta.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersOnelogin**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersOnelogin($body)

Update/Create OneLogin Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\OneLogin(); // \PureCloudPlatform\Client\V2\Model\OneLogin | Provider

try {
    $result = $apiInstance->putIdentityprovidersOnelogin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersOnelogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\OneLogin**](../Model/OneLogin.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersPing**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersPing($body)

Update/Create Ping Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PingIdentity(); // \PureCloudPlatform\Client\V2\Model\PingIdentity | Provider

try {
    $result = $apiInstance->putIdentityprovidersPing($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersPing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PingIdentity**](../Model/PingIdentity.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersPurecloud**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersPurecloud($body)

Update/Create PureCloud Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PureCloud(); // \PureCloudPlatform\Client\V2\Model\PureCloud | Provider

try {
    $result = $apiInstance->putIdentityprovidersPurecloud($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersPurecloud: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PureCloud**](../Model/PureCloud.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersPureengage**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersPureengage($body)

Update/Create PureEngage Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PureEngage(); // \PureCloudPlatform\Client\V2\Model\PureEngage | Provider

try {
    $result = $apiInstance->putIdentityprovidersPureengage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersPureengage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PureEngage**](../Model/PureEngage.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putIdentityprovidersSalesforce**
> \PureCloudPlatform\Client\V2\Model\OAuthProvider putIdentityprovidersSalesforce($body)

Update/Create Salesforce Identity Provider



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\IdentityProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Salesforce(); // \PureCloudPlatform\Client\V2\Model\Salesforce | Provider

try {
    $result = $apiInstance->putIdentityprovidersSalesforce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProviderApi->putIdentityprovidersSalesforce: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Salesforce**](../Model/Salesforce.md)| Provider |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OAuthProvider**](../Model/OAuthProvider.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

