# PureCloudPlatform\Client\V2\GreetingsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGreeting**](GreetingsApi.md#deleteGreeting) | **DELETE** /api/v2/greetings/{greetingId} | Deletes a Greeting with the given GreetingId
[**getGreeting**](GreetingsApi.md#getGreeting) | **GET** /api/v2/greetings/{greetingId} | Get a Greeting with the given GreetingId
[**getGreetingMedia**](GreetingsApi.md#getGreetingMedia) | **GET** /api/v2/greetings/{greetingId}/media | Get media playback URI for this greeting
[**getGreetings**](GreetingsApi.md#getGreetings) | **GET** /api/v2/greetings | Gets an Organization&#39;s Greetings
[**getGreetingsDefaults**](GreetingsApi.md#getGreetingsDefaults) | **GET** /api/v2/greetings/defaults | Get an Organization&#39;s DefaultGreetingList
[**getGroupGreetings**](GreetingsApi.md#getGroupGreetings) | **GET** /api/v2/groups/{groupId}/greetings | Get a list of the Group&#39;s Greetings
[**getGroupGreetingsDefaults**](GreetingsApi.md#getGroupGreetingsDefaults) | **GET** /api/v2/groups/{groupId}/greetings/defaults | Grabs the list of Default Greetings given a Group&#39;s ID
[**getUserGreetings**](GreetingsApi.md#getUserGreetings) | **GET** /api/v2/users/{userId}/greetings | Get a list of the User&#39;s Greetings
[**getUserGreetingsDefaults**](GreetingsApi.md#getUserGreetingsDefaults) | **GET** /api/v2/users/{userId}/greetings/defaults | Grabs the list of Default Greetings given a User&#39;s ID
[**postGreetings**](GreetingsApi.md#postGreetings) | **POST** /api/v2/greetings | Create a Greeting for an Organization
[**postGroupGreetings**](GreetingsApi.md#postGroupGreetings) | **POST** /api/v2/groups/{groupId}/greetings | Creates a Greeting for a Group
[**postUserGreetings**](GreetingsApi.md#postUserGreetings) | **POST** /api/v2/users/{userId}/greetings | Creates a Greeting for a User
[**putGreeting**](GreetingsApi.md#putGreeting) | **PUT** /api/v2/greetings/{greetingId} | Updates the Greeting with the given GreetingId
[**putGreetingsDefaults**](GreetingsApi.md#putGreetingsDefaults) | **PUT** /api/v2/greetings/defaults | Update an Organization&#39;s DefaultGreetingList
[**putGroupGreetingsDefaults**](GreetingsApi.md#putGroupGreetingsDefaults) | **PUT** /api/v2/groups/{groupId}/greetings/defaults | Updates the DefaultGreetingList of the specified Group
[**putUserGreetingsDefaults**](GreetingsApi.md#putUserGreetingsDefaults) | **PUT** /api/v2/users/{userId}/greetings/defaults | Updates the DefaultGreetingList of the specified User


# **deleteGreeting**
> deleteGreeting($greetingId)

Deletes a Greeting with the given GreetingId



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greetingId = "greetingId_example"; // string | Greeting ID

try {
    $apiInstance->deleteGreeting($greetingId);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->deleteGreeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greetingId** | **string**| Greeting ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGreeting**
> \PureCloudPlatform\Client\V2\Model\Greeting getGreeting($greetingId)

Get a Greeting with the given GreetingId



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greetingId = "greetingId_example"; // string | Greeting ID

try {
    $result = $apiInstance->getGreeting($greetingId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getGreeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greetingId** | **string**| Greeting ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGreetingMedia**
> \PureCloudPlatform\Client\V2\Model\GreetingMediaInfo getGreetingMedia($greetingId, $formatId)

Get media playback URI for this greeting



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greetingId = "greetingId_example"; // string | Greeting ID
$formatId = "WAV"; // string | The desired media format.

try {
    $result = $apiInstance->getGreetingMedia($greetingId, $formatId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getGreetingMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greetingId** | **string**| Greeting ID |
 **formatId** | **string**| The desired media format. | [optional] [default to WAV]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GreetingMediaInfo**](../Model/GreetingMediaInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGreetings**
> \PureCloudPlatform\Client\V2\Model\DomainEntityListing getGreetings($pageSize, $pageNumber)

Gets an Organization's Greetings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getGreetings($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getGreetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEntityListing**](../Model/DomainEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGreetingsDefaults**
> \PureCloudPlatform\Client\V2\Model\DefaultGreetingList getGreetingsDefaults()

Get an Organization's DefaultGreetingList



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGreetingsDefaults();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getGreetingsDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupGreetings**
> \PureCloudPlatform\Client\V2\Model\GreetingListing getGroupGreetings($groupId, $pageSize, $pageNumber)

Get a list of the Group's Greetings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getGroupGreetings($groupId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getGroupGreetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\GreetingListing**](../Model/GreetingListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupGreetingsDefaults**
> \PureCloudPlatform\Client\V2\Model\DefaultGreetingList getGroupGreetingsDefaults($groupId)

Grabs the list of Default Greetings given a Group's ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID

try {
    $result = $apiInstance->getGroupGreetingsDefaults($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getGroupGreetingsDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGreetings**
> \PureCloudPlatform\Client\V2\Model\DomainEntityListing getUserGreetings($userId, $pageSize, $pageNumber)

Get a list of the User's Greetings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getUserGreetings($userId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getUserGreetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEntityListing**](../Model/DomainEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserGreetingsDefaults**
> \PureCloudPlatform\Client\V2\Model\DefaultGreetingList getUserGreetingsDefaults($userId)

Grabs the list of Default Greetings given a User's ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID

try {
    $result = $apiInstance->getUserGreetingsDefaults($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->getUserGreetingsDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGreetings**
> \PureCloudPlatform\Client\V2\Model\Greeting postGreetings($body)

Create a Greeting for an Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Greeting(); // \PureCloudPlatform\Client\V2\Model\Greeting | The Greeting to create

try {
    $result = $apiInstance->postGreetings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->postGreetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)| The Greeting to create |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupGreetings**
> \PureCloudPlatform\Client\V2\Model\Greeting postGroupGreetings($groupId, $body)

Creates a Greeting for a Group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$body = new \PureCloudPlatform\Client\V2\Model\Greeting(); // \PureCloudPlatform\Client\V2\Model\Greeting | The Greeting to create

try {
    $result = $apiInstance->postGroupGreetings($groupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->postGroupGreetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)| The Greeting to create |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserGreetings**
> \PureCloudPlatform\Client\V2\Model\Greeting postUserGreetings($userId, $body)

Creates a Greeting for a User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\Greeting(); // \PureCloudPlatform\Client\V2\Model\Greeting | The Greeting to create

try {
    $result = $apiInstance->postUserGreetings($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->postUserGreetings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)| The Greeting to create |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGreeting**
> \PureCloudPlatform\Client\V2\Model\Greeting putGreeting($greetingId, $body)

Updates the Greeting with the given GreetingId



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$greetingId = "greetingId_example"; // string | Greeting ID
$body = new \PureCloudPlatform\Client\V2\Model\Greeting(); // \PureCloudPlatform\Client\V2\Model\Greeting | The updated Greeting

try {
    $result = $apiInstance->putGreeting($greetingId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->putGreeting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **greetingId** | **string**| Greeting ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)| The updated Greeting |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Greeting**](../Model/Greeting.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGreetingsDefaults**
> \PureCloudPlatform\Client\V2\Model\DefaultGreetingList putGreetingsDefaults($body)

Update an Organization's DefaultGreetingList



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DefaultGreetingList(); // \PureCloudPlatform\Client\V2\Model\DefaultGreetingList | The updated defaultGreetingList

try {
    $result = $apiInstance->putGreetingsDefaults($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->putGreetingsDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)| The updated defaultGreetingList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupGreetingsDefaults**
> \PureCloudPlatform\Client\V2\Model\DefaultGreetingList putGroupGreetingsDefaults($groupId, $body)

Updates the DefaultGreetingList of the specified Group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = "groupId_example"; // string | Group ID
$body = new \PureCloudPlatform\Client\V2\Model\DefaultGreetingList(); // \PureCloudPlatform\Client\V2\Model\DefaultGreetingList | The updated defaultGreetingList

try {
    $result = $apiInstance->putGroupGreetingsDefaults($groupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->putGroupGreetingsDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| Group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)| The updated defaultGreetingList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUserGreetingsDefaults**
> \PureCloudPlatform\Client\V2\Model\DefaultGreetingList putUserGreetingsDefaults($userId, $body)

Updates the DefaultGreetingList of the specified User



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\GreetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userId = "userId_example"; // string | User ID
$body = new \PureCloudPlatform\Client\V2\Model\DefaultGreetingList(); // \PureCloudPlatform\Client\V2\Model\DefaultGreetingList | The updated defaultGreetingList

try {
    $result = $apiInstance->putUserGreetingsDefaults($userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GreetingsApi->putUserGreetingsDefaults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| User ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)| The updated defaultGreetingList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DefaultGreetingList**](../Model/DefaultGreetingList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

