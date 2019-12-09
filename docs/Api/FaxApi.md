# PureCloudPlatform\Client\V2\FaxApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFaxDocument**](FaxApi.md#deleteFaxDocument) | **DELETE** /api/v2/fax/documents/{documentId} | Delete a fax document.
[**getFaxDocument**](FaxApi.md#getFaxDocument) | **GET** /api/v2/fax/documents/{documentId} | Get a document.
[**getFaxDocumentContent**](FaxApi.md#getFaxDocumentContent) | **GET** /api/v2/fax/documents/{documentId}/content | Download a fax document.
[**getFaxDocuments**](FaxApi.md#getFaxDocuments) | **GET** /api/v2/fax/documents | Get a list of fax documents.
[**getFaxSummary**](FaxApi.md#getFaxSummary) | **GET** /api/v2/fax/summary | Get fax summary
[**putFaxDocument**](FaxApi.md#putFaxDocument) | **PUT** /api/v2/fax/documents/{documentId} | Update a fax document.


# **deleteFaxDocument**
> deleteFaxDocument($documentId)

Delete a fax document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID

try {
    $apiInstance->deleteFaxDocument($documentId);
} catch (Exception $e) {
    echo 'Exception when calling FaxApi->deleteFaxDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFaxDocument**
> \PureCloudPlatform\Client\V2\Model\FaxDocument getFaxDocument($documentId)

Get a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID

try {
    $result = $apiInstance->getFaxDocument($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxApi->getFaxDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FaxDocument**](../Model/FaxDocument.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFaxDocumentContent**
> \PureCloudPlatform\Client\V2\Model\DownloadResponse getFaxDocumentContent($documentId)

Download a fax document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID

try {
    $result = $apiInstance->getFaxDocumentContent($documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxApi->getFaxDocumentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DownloadResponse**](../Model/DownloadResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFaxDocuments**
> \PureCloudPlatform\Client\V2\Model\FaxDocumentEntityListing getFaxDocuments($pageSize, $pageNumber)

Get a list of fax documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getFaxDocuments($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxApi->getFaxDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FaxDocumentEntityListing**](../Model/FaxDocumentEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFaxSummary**
> \PureCloudPlatform\Client\V2\Model\FaxSummary getFaxSummary()

Get fax summary



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFaxSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxApi->getFaxSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\FaxSummary**](../Model/FaxSummary.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFaxDocument**
> \PureCloudPlatform\Client\V2\Model\FaxDocument putFaxDocument($documentId, $body)

Update a fax document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$body = new \PureCloudPlatform\Client\V2\Model\FaxDocument(); // \PureCloudPlatform\Client\V2\Model\FaxDocument | Document

try {
    $result = $apiInstance->putFaxDocument($documentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FaxApi->putFaxDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\FaxDocument**](../Model/FaxDocument.md)| Document |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FaxDocument**](../Model/FaxDocument.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

