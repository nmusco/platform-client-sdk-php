# PureCloudPlatform\Client\V2\ContentManagementApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteContentmanagementDocument**](ContentManagementApi.md#deleteContentmanagementDocument) | **DELETE** /api/v2/contentmanagement/documents/{documentId} | Delete a document.
[**deleteContentmanagementShare**](ContentManagementApi.md#deleteContentmanagementShare) | **DELETE** /api/v2/contentmanagement/shares/{shareId} | Deletes an existing share.
[**deleteContentmanagementStatusStatusId**](ContentManagementApi.md#deleteContentmanagementStatusStatusId) | **DELETE** /api/v2/contentmanagement/status/{statusId} | Cancel the command for this status
[**deleteContentmanagementWorkspace**](ContentManagementApi.md#deleteContentmanagementWorkspace) | **DELETE** /api/v2/contentmanagement/workspaces/{workspaceId} | Delete a workspace
[**deleteContentmanagementWorkspaceMember**](ContentManagementApi.md#deleteContentmanagementWorkspaceMember) | **DELETE** /api/v2/contentmanagement/workspaces/{workspaceId}/members/{memberId} | Delete a member from a workspace
[**deleteContentmanagementWorkspaceTagvalue**](ContentManagementApi.md#deleteContentmanagementWorkspaceTagvalue) | **DELETE** /api/v2/contentmanagement/workspaces/{workspaceId}/tagvalues/{tagId} | Delete workspace tag
[**getContentmanagementDocument**](ContentManagementApi.md#getContentmanagementDocument) | **GET** /api/v2/contentmanagement/documents/{documentId} | Get a document.
[**getContentmanagementDocumentAudits**](ContentManagementApi.md#getContentmanagementDocumentAudits) | **GET** /api/v2/contentmanagement/documents/{documentId}/audits | Get a list of audits for a document.
[**getContentmanagementDocumentContent**](ContentManagementApi.md#getContentmanagementDocumentContent) | **GET** /api/v2/contentmanagement/documents/{documentId}/content | Download a document.
[**getContentmanagementDocuments**](ContentManagementApi.md#getContentmanagementDocuments) | **GET** /api/v2/contentmanagement/documents | Get a list of documents.
[**getContentmanagementQuery**](ContentManagementApi.md#getContentmanagementQuery) | **GET** /api/v2/contentmanagement/query | Query content
[**getContentmanagementSecurityprofile**](ContentManagementApi.md#getContentmanagementSecurityprofile) | **GET** /api/v2/contentmanagement/securityprofiles/{securityProfileId} | Get a Security Profile
[**getContentmanagementSecurityprofiles**](ContentManagementApi.md#getContentmanagementSecurityprofiles) | **GET** /api/v2/contentmanagement/securityprofiles | Get a List of Security Profiles
[**getContentmanagementShare**](ContentManagementApi.md#getContentmanagementShare) | **GET** /api/v2/contentmanagement/shares/{shareId} | Retrieve details about an existing share.
[**getContentmanagementSharedSharedId**](ContentManagementApi.md#getContentmanagementSharedSharedId) | **GET** /api/v2/contentmanagement/shared/{sharedId} | Get shared documents. Securely download a shared document.
[**getContentmanagementShares**](ContentManagementApi.md#getContentmanagementShares) | **GET** /api/v2/contentmanagement/shares | Gets a list of shares.  You must specify at least one filter (e.g. entityId).
[**getContentmanagementStatus**](ContentManagementApi.md#getContentmanagementStatus) | **GET** /api/v2/contentmanagement/status | Get a list of statuses for pending operations
[**getContentmanagementStatusStatusId**](ContentManagementApi.md#getContentmanagementStatusStatusId) | **GET** /api/v2/contentmanagement/status/{statusId} | Get a status.
[**getContentmanagementUsage**](ContentManagementApi.md#getContentmanagementUsage) | **GET** /api/v2/contentmanagement/usage | Get usage details.
[**getContentmanagementWorkspace**](ContentManagementApi.md#getContentmanagementWorkspace) | **GET** /api/v2/contentmanagement/workspaces/{workspaceId} | Get a workspace.
[**getContentmanagementWorkspaceDocuments**](ContentManagementApi.md#getContentmanagementWorkspaceDocuments) | **GET** /api/v2/contentmanagement/workspaces/{workspaceId}/documents | Get a list of documents.
[**getContentmanagementWorkspaceMember**](ContentManagementApi.md#getContentmanagementWorkspaceMember) | **GET** /api/v2/contentmanagement/workspaces/{workspaceId}/members/{memberId} | Get a workspace member
[**getContentmanagementWorkspaceMembers**](ContentManagementApi.md#getContentmanagementWorkspaceMembers) | **GET** /api/v2/contentmanagement/workspaces/{workspaceId}/members | Get a list workspace members
[**getContentmanagementWorkspaceTagvalue**](ContentManagementApi.md#getContentmanagementWorkspaceTagvalue) | **GET** /api/v2/contentmanagement/workspaces/{workspaceId}/tagvalues/{tagId} | Get a workspace tag
[**getContentmanagementWorkspaceTagvalues**](ContentManagementApi.md#getContentmanagementWorkspaceTagvalues) | **GET** /api/v2/contentmanagement/workspaces/{workspaceId}/tagvalues | Get a list of workspace tags
[**getContentmanagementWorkspaces**](ContentManagementApi.md#getContentmanagementWorkspaces) | **GET** /api/v2/contentmanagement/workspaces | Get a list of workspaces.
[**postContentmanagementAuditquery**](ContentManagementApi.md#postContentmanagementAuditquery) | **POST** /api/v2/contentmanagement/auditquery | Query audits
[**postContentmanagementDocument**](ContentManagementApi.md#postContentmanagementDocument) | **POST** /api/v2/contentmanagement/documents/{documentId} | Update a document.
[**postContentmanagementDocumentContent**](ContentManagementApi.md#postContentmanagementDocumentContent) | **POST** /api/v2/contentmanagement/documents/{documentId}/content | Replace the contents of a document.
[**postContentmanagementDocuments**](ContentManagementApi.md#postContentmanagementDocuments) | **POST** /api/v2/contentmanagement/documents | Add a document.
[**postContentmanagementQuery**](ContentManagementApi.md#postContentmanagementQuery) | **POST** /api/v2/contentmanagement/query | Query content
[**postContentmanagementShares**](ContentManagementApi.md#postContentmanagementShares) | **POST** /api/v2/contentmanagement/shares | Creates a new share or updates an existing share if the entity has already been shared
[**postContentmanagementWorkspaceTagvalues**](ContentManagementApi.md#postContentmanagementWorkspaceTagvalues) | **POST** /api/v2/contentmanagement/workspaces/{workspaceId}/tagvalues | Create a workspace tag
[**postContentmanagementWorkspaceTagvaluesQuery**](ContentManagementApi.md#postContentmanagementWorkspaceTagvaluesQuery) | **POST** /api/v2/contentmanagement/workspaces/{workspaceId}/tagvalues/query | Perform a prefix query on tags in the workspace
[**postContentmanagementWorkspaces**](ContentManagementApi.md#postContentmanagementWorkspaces) | **POST** /api/v2/contentmanagement/workspaces | Create a group workspace
[**putContentmanagementWorkspace**](ContentManagementApi.md#putContentmanagementWorkspace) | **PUT** /api/v2/contentmanagement/workspaces/{workspaceId} | Update a workspace
[**putContentmanagementWorkspaceMember**](ContentManagementApi.md#putContentmanagementWorkspaceMember) | **PUT** /api/v2/contentmanagement/workspaces/{workspaceId}/members/{memberId} | Add a member to a workspace
[**putContentmanagementWorkspaceTagvalue**](ContentManagementApi.md#putContentmanagementWorkspaceTagvalue) | **PUT** /api/v2/contentmanagement/workspaces/{workspaceId}/tagvalues/{tagId} | Update a workspace tag. Will update all documents with the new tag value.


# **deleteContentmanagementDocument**
> deleteContentmanagementDocument($documentId, $override)

Delete a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$override = true; // bool | Override any lock on the document

try {
    $apiInstance->deleteContentmanagementDocument($documentId, $override);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->deleteContentmanagementDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **override** | **bool**| Override any lock on the document | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentmanagementShare**
> deleteContentmanagementShare($shareId)

Deletes an existing share.

This revokes sharing rights specified in the share record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shareId = "shareId_example"; // string | Share ID

try {
    $apiInstance->deleteContentmanagementShare($shareId);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->deleteContentmanagementShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareId** | **string**| Share ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentmanagementStatusStatusId**
> deleteContentmanagementStatusStatusId($statusId)

Cancel the command for this status



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statusId = "statusId_example"; // string | Status ID

try {
    $apiInstance->deleteContentmanagementStatusStatusId($statusId);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->deleteContentmanagementStatusStatusId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statusId** | **string**| Status ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentmanagementWorkspace**
> deleteContentmanagementWorkspace($workspaceId, $moveChildrenToWorkspaceId)

Delete a workspace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$moveChildrenToWorkspaceId = "moveChildrenToWorkspaceId_example"; // string | New location for objects in deleted workspace.

try {
    $apiInstance->deleteContentmanagementWorkspace($workspaceId, $moveChildrenToWorkspaceId);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->deleteContentmanagementWorkspace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **moveChildrenToWorkspaceId** | **string**| New location for objects in deleted workspace. | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentmanagementWorkspaceMember**
> deleteContentmanagementWorkspaceMember($workspaceId, $memberId)

Delete a member from a workspace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$memberId = "memberId_example"; // string | Member ID

try {
    $apiInstance->deleteContentmanagementWorkspaceMember($workspaceId, $memberId);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->deleteContentmanagementWorkspaceMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **memberId** | **string**| Member ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContentmanagementWorkspaceTagvalue**
> deleteContentmanagementWorkspaceTagvalue($workspaceId, $tagId)

Delete workspace tag

Delete a tag from a workspace. Will remove this tag from all documents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$tagId = "tagId_example"; // string | Tag ID

try {
    $apiInstance->deleteContentmanagementWorkspaceTagvalue($workspaceId, $tagId);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->deleteContentmanagementWorkspaceTagvalue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **tagId** | **string**| Tag ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementDocument**
> \PureCloudPlatform\Client\V2\Model\Document getContentmanagementDocument($documentId, $expand)

Get a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementDocument($documentId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Document**](../Model/Document.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementDocumentAudits**
> \PureCloudPlatform\Client\V2\Model\DocumentAuditEntityListing getContentmanagementDocumentAudits($documentId, $pageSize, $pageNumber, $transactionFilter, $level, $sortBy, $sortOrder)

Get a list of audits for a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$transactionFilter = "transactionFilter_example"; // string | Transaction filter
$level = "USER"; // string | level
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "ascending"; // string | Sort order

try {
    $result = $apiInstance->getContentmanagementDocumentAudits($documentId, $pageSize, $pageNumber, $transactionFilter, $level, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementDocumentAudits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **transactionFilter** | **string**| Transaction filter | [optional]
 **level** | **string**| level | [optional] [default to USER]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to ascending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DocumentAuditEntityListing**](../Model/DocumentAuditEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementDocumentContent**
> \PureCloudPlatform\Client\V2\Model\DownloadResponse getContentmanagementDocumentContent($documentId, $disposition, $contentType)

Download a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$disposition = "disposition_example"; // string | Request how the content will be downloaded: a file attachment or inline. Default is attachment.
$contentType = "contentType_example"; // string | The requested format for the specified document. If supported, the document will be returned in that format. Example contentType=audio/wav

try {
    $result = $apiInstance->getContentmanagementDocumentContent($documentId, $disposition, $contentType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementDocumentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **disposition** | **string**| Request how the content will be downloaded: a file attachment or inline. Default is attachment. | [optional]
 **contentType** | **string**| The requested format for the specified document. If supported, the document will be returned in that format. Example contentType&#x3D;audio/wav | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DownloadResponse**](../Model/DownloadResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementDocuments**
> \PureCloudPlatform\Client\V2\Model\DocumentEntityListing getContentmanagementDocuments($workspaceId, $name, $expand, $pageSize, $pageNumber, $sortBy, $sortOrder)

Get a list of documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$name = "name_example"; // string | Name
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "sortBy_example"; // string | name or dateCreated
$sortOrder = "ascending"; // string | ascending or descending

try {
    $result = $apiInstance->getContentmanagementDocuments($workspaceId, $name, $expand, $pageSize, $pageNumber, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **name** | **string**| Name | [optional]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| name or dateCreated | [optional]
 **sortOrder** | **string**| ascending or descending | [optional] [default to ascending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DocumentEntityListing**](../Model/DocumentEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementQuery**
> \PureCloudPlatform\Client\V2\Model\QueryResults getContentmanagementQuery($queryPhrase, $pageSize, $pageNumber, $sortBy, $sortOrder, $expand)

Query content



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queryPhrase = "queryPhrase_example"; // string | Phrase tokens are ANDed together over all searchable fields
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | name or dateCreated
$sortOrder = "ascending"; // string | ascending or descending
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementQuery($queryPhrase, $pageSize, $pageNumber, $sortBy, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queryPhrase** | **string**| Phrase tokens are ANDed together over all searchable fields |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| name or dateCreated | [optional] [default to name]
 **sortOrder** | **string**| ascending or descending | [optional] [default to ascending]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueryResults**](../Model/QueryResults.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementSecurityprofile**
> \PureCloudPlatform\Client\V2\Model\SecurityProfile getContentmanagementSecurityprofile($securityProfileId)

Get a Security Profile



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityProfileId = "securityProfileId_example"; // string | Security Profile Id

try {
    $result = $apiInstance->getContentmanagementSecurityprofile($securityProfileId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementSecurityprofile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityProfileId** | **string**| Security Profile Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SecurityProfile**](../Model/SecurityProfile.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementSecurityprofiles**
> \PureCloudPlatform\Client\V2\Model\SecurityProfileEntityListing getContentmanagementSecurityprofiles()

Get a List of Security Profiles



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContentmanagementSecurityprofiles();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementSecurityprofiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\SecurityProfileEntityListing**](../Model/SecurityProfileEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementShare**
> \PureCloudPlatform\Client\V2\Model\Share getContentmanagementShare($shareId, $expand)

Retrieve details about an existing share.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shareId = "shareId_example"; // string | Share ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementShare($shareId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementShare: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shareId** | **string**| Share ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Share**](../Model/Share.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementSharedSharedId**
> \PureCloudPlatform\Client\V2\Model\SharedResponse getContentmanagementSharedSharedId($sharedId, $redirect, $disposition, $contentType, $expand)

Get shared documents. Securely download a shared document.

This method requires the download sharing URI obtained in the get document response (downloadSharingUri). Documents may be shared between users in the same workspace. Documents may also be shared between any user by creating a content management share.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharedId = "sharedId_example"; // string | Shared ID
$redirect = true; // bool | Turn on or off redirect
$disposition = "attachment"; // string | Request how the share content will be downloaded: attached as a file or inline. Default is attachment.
$contentType = "contentType_example"; // string | The requested format for the specified document. If supported, the document will be returned in that format. Example contentType=audio/wav
$expand = "expand_example"; // string | Expand some document fields

try {
    $result = $apiInstance->getContentmanagementSharedSharedId($sharedId, $redirect, $disposition, $contentType, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementSharedSharedId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharedId** | **string**| Shared ID |
 **redirect** | **bool**| Turn on or off redirect | [optional] [default to true]
 **disposition** | **string**| Request how the share content will be downloaded: attached as a file or inline. Default is attachment. | [optional] [default to attachment]
 **contentType** | **string**| The requested format for the specified document. If supported, the document will be returned in that format. Example contentType&#x3D;audio/wav | [optional]
 **expand** | **string**| Expand some document fields | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SharedResponse**](../Model/SharedResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementShares**
> \PureCloudPlatform\Client\V2\Model\ShareEntityListing getContentmanagementShares($entityId, $expand, $pageSize, $pageNumber)

Gets a list of shares.  You must specify at least one filter (e.g. entityId).

Failing to specify a filter will return 400.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityId = "entityId_example"; // string | Filters the shares returned to only the entity specified by the value of this parameter.
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getContentmanagementShares($entityId, $expand, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityId** | **string**| Filters the shares returned to only the entity specified by the value of this parameter. | [optional]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ShareEntityListing**](../Model/ShareEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementStatus**
> \PureCloudPlatform\Client\V2\Model\CommandStatusEntityListing getContentmanagementStatus($pageSize, $pageNumber)

Get a list of statuses for pending operations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getContentmanagementStatus($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CommandStatusEntityListing**](../Model/CommandStatusEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementStatusStatusId**
> \PureCloudPlatform\Client\V2\Model\CommandStatus getContentmanagementStatusStatusId($statusId)

Get a status.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statusId = "statusId_example"; // string | Status ID

try {
    $result = $apiInstance->getContentmanagementStatusStatusId($statusId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementStatusStatusId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **statusId** | **string**| Status ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CommandStatus**](../Model/CommandStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementUsage**
> \PureCloudPlatform\Client\V2\Model\Usage getContentmanagementUsage()

Get usage details.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getContentmanagementUsage();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\Usage**](../Model/Usage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspace**
> \PureCloudPlatform\Client\V2\Model\Workspace getContentmanagementWorkspace($workspaceId, $expand)

Get a workspace.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementWorkspace($workspaceId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Workspace**](../Model/Workspace.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspaceDocuments**
> \PureCloudPlatform\Client\V2\Model\DocumentEntityListing getContentmanagementWorkspaceDocuments($workspaceId, $expand, $pageSize, $pageNumber, $sortBy, $sortOrder)

Get a list of documents.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "sortBy_example"; // string | name or dateCreated
$sortOrder = "ascending"; // string | ascending or descending

try {
    $result = $apiInstance->getContentmanagementWorkspaceDocuments($workspaceId, $expand, $pageSize, $pageNumber, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspaceDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| name or dateCreated | [optional]
 **sortOrder** | **string**| ascending or descending | [optional] [default to ascending]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DocumentEntityListing**](../Model/DocumentEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspaceMember**
> \PureCloudPlatform\Client\V2\Model\WorkspaceMember getContentmanagementWorkspaceMember($workspaceId, $memberId, $expand)

Get a workspace member



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$memberId = "memberId_example"; // string | Member ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementWorkspaceMember($workspaceId, $memberId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspaceMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **memberId** | **string**| Member ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkspaceMember**](../Model/WorkspaceMember.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspaceMembers**
> \PureCloudPlatform\Client\V2\Model\WorkspaceMemberEntityListing getContentmanagementWorkspaceMembers($workspaceId, $pageSize, $pageNumber, $expand)

Get a list workspace members



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementWorkspaceMembers($workspaceId, $pageSize, $pageNumber, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspaceMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkspaceMemberEntityListing**](../Model/WorkspaceMemberEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspaceTagvalue**
> \PureCloudPlatform\Client\V2\Model\TagValue getContentmanagementWorkspaceTagvalue($workspaceId, $tagId, $expand)

Get a workspace tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$tagId = "tagId_example"; // string | Tag ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementWorkspaceTagvalue($workspaceId, $tagId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspaceTagvalue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **tagId** | **string**| Tag ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TagValue**](../Model/TagValue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspaceTagvalues**
> \PureCloudPlatform\Client\V2\Model\TagValueEntityListing getContentmanagementWorkspaceTagvalues($workspaceId, $value, $pageSize, $pageNumber, $expand)

Get a list of workspace tags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$value = "value_example"; // string | filter the list of tags returned
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementWorkspaceTagvalues($workspaceId, $value, $pageSize, $pageNumber, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspaceTagvalues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **value** | **string**| filter the list of tags returned | [optional]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TagValueEntityListing**](../Model/TagValueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentmanagementWorkspaces**
> \PureCloudPlatform\Client\V2\Model\WorkspaceEntityListing getContentmanagementWorkspaces($pageSize, $pageNumber, $access, $expand)

Get a list of workspaces.

Specifying 'content' access will return all workspaces the user has document access to, while 'admin' access will return all group workspaces the user has administrative rights to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$access = array("access_example"); // string[] | Requested access level.
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getContentmanagementWorkspaces($pageSize, $pageNumber, $access, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->getContentmanagementWorkspaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **access** | [**string[]**](../Model/string.md)| Requested access level. | [optional]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkspaceEntityListing**](../Model/WorkspaceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementAuditquery**
> \PureCloudPlatform\Client\V2\Model\QueryResults postContentmanagementAuditquery($body)

Query audits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ContentQueryRequest(); // \PureCloudPlatform\Client\V2\Model\ContentQueryRequest | Allows for a filtered query returning facet information

try {
    $result = $apiInstance->postContentmanagementAuditquery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementAuditquery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContentQueryRequest**](../Model/ContentQueryRequest.md)| Allows for a filtered query returning facet information |

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueryResults**](../Model/QueryResults.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementDocument**
> \PureCloudPlatform\Client\V2\Model\Document postContentmanagementDocument($documentId, $body, $expand, $override)

Update a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$body = new \PureCloudPlatform\Client\V2\Model\DocumentUpdate(); // \PureCloudPlatform\Client\V2\Model\DocumentUpdate | Document
$expand = "expand_example"; // string | Expand some document fields
$override = true; // bool | Override any lock on the document

try {
    $result = $apiInstance->postContentmanagementDocument($documentId, $body, $expand, $override);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DocumentUpdate**](../Model/DocumentUpdate.md)| Document |
 **expand** | **string**| Expand some document fields | [optional]
 **override** | **bool**| Override any lock on the document | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Document**](../Model/Document.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementDocumentContent**
> \PureCloudPlatform\Client\V2\Model\ReplaceResponse postContentmanagementDocumentContent($documentId, $body, $override)

Replace the contents of a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = "documentId_example"; // string | Document ID
$body = new \PureCloudPlatform\Client\V2\Model\ReplaceRequest(); // \PureCloudPlatform\Client\V2\Model\ReplaceRequest | Replace Request
$override = true; // bool | Override any lock on the document

try {
    $result = $apiInstance->postContentmanagementDocumentContent($documentId, $body, $override);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementDocumentContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documentId** | **string**| Document ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ReplaceRequest**](../Model/ReplaceRequest.md)| Replace Request |
 **override** | **bool**| Override any lock on the document | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReplaceResponse**](../Model/ReplaceResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementDocuments**
> \PureCloudPlatform\Client\V2\Model\Document postContentmanagementDocuments($body, $copySource, $moveSource, $override)

Add a document.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DocumentUpload(); // \PureCloudPlatform\Client\V2\Model\DocumentUpload | Document
$copySource = "copySource_example"; // string | Copy a document within a workspace or to a new workspace. Provide a document ID as the copy source.
$moveSource = "moveSource_example"; // string | Move a document to a new workspace. Provide a document ID as the move source.
$override = true; // bool | Override any lock on the source document

try {
    $result = $apiInstance->postContentmanagementDocuments($body, $copySource, $moveSource, $override);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DocumentUpload**](../Model/DocumentUpload.md)| Document |
 **copySource** | **string**| Copy a document within a workspace or to a new workspace. Provide a document ID as the copy source. | [optional]
 **moveSource** | **string**| Move a document to a new workspace. Provide a document ID as the move source. | [optional]
 **override** | **bool**| Override any lock on the source document | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Document**](../Model/Document.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementQuery**
> \PureCloudPlatform\Client\V2\Model\QueryResults postContentmanagementQuery($body, $expand)

Query content



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\QueryRequest(); // \PureCloudPlatform\Client\V2\Model\QueryRequest | Allows for a filtered query returning facet information
$expand = "expand_example"; // string | Expand some document fields

try {
    $result = $apiInstance->postContentmanagementQuery($body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\QueryRequest**](../Model/QueryRequest.md)| Allows for a filtered query returning facet information |
 **expand** | **string**| Expand some document fields | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\QueryResults**](../Model/QueryResults.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementShares**
> \PureCloudPlatform\Client\V2\Model\CreateShareResponse postContentmanagementShares($body)

Creates a new share or updates an existing share if the entity has already been shared



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateShareRequest(); // \PureCloudPlatform\Client\V2\Model\CreateShareRequest | CreateShareRequest - entity id and type and a single member or list of members are required

try {
    $result = $apiInstance->postContentmanagementShares($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementShares: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateShareRequest**](../Model/CreateShareRequest.md)| CreateShareRequest - entity id and type and a single member or list of members are required |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CreateShareResponse**](../Model/CreateShareResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementWorkspaceTagvalues**
> \PureCloudPlatform\Client\V2\Model\TagValue postContentmanagementWorkspaceTagvalues($workspaceId, $body)

Create a workspace tag



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$body = new \PureCloudPlatform\Client\V2\Model\TagValue(); // \PureCloudPlatform\Client\V2\Model\TagValue | tag

try {
    $result = $apiInstance->postContentmanagementWorkspaceTagvalues($workspaceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementWorkspaceTagvalues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TagValue**](../Model/TagValue.md)| tag |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TagValue**](../Model/TagValue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementWorkspaceTagvaluesQuery**
> \PureCloudPlatform\Client\V2\Model\TagValueEntityListing postContentmanagementWorkspaceTagvaluesQuery($workspaceId, $body, $expand)

Perform a prefix query on tags in the workspace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$body = new \PureCloudPlatform\Client\V2\Model\TagQueryRequest(); // \PureCloudPlatform\Client\V2\Model\TagQueryRequest | query
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->postContentmanagementWorkspaceTagvaluesQuery($workspaceId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementWorkspaceTagvaluesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TagQueryRequest**](../Model/TagQueryRequest.md)| query |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TagValueEntityListing**](../Model/TagValueEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContentmanagementWorkspaces**
> \PureCloudPlatform\Client\V2\Model\Workspace postContentmanagementWorkspaces($body)

Create a group workspace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WorkspaceCreate(); // \PureCloudPlatform\Client\V2\Model\WorkspaceCreate | Workspace

try {
    $result = $apiInstance->postContentmanagementWorkspaces($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->postContentmanagementWorkspaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WorkspaceCreate**](../Model/WorkspaceCreate.md)| Workspace |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Workspace**](../Model/Workspace.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContentmanagementWorkspace**
> \PureCloudPlatform\Client\V2\Model\Workspace putContentmanagementWorkspace($workspaceId, $body)

Update a workspace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$body = new \PureCloudPlatform\Client\V2\Model\Workspace(); // \PureCloudPlatform\Client\V2\Model\Workspace | Workspace

try {
    $result = $apiInstance->putContentmanagementWorkspace($workspaceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->putContentmanagementWorkspace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Workspace**](../Model/Workspace.md)| Workspace |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Workspace**](../Model/Workspace.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContentmanagementWorkspaceMember**
> \PureCloudPlatform\Client\V2\Model\WorkspaceMember putContentmanagementWorkspaceMember($workspaceId, $memberId, $body)

Add a member to a workspace



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$memberId = "memberId_example"; // string | Member ID
$body = new \PureCloudPlatform\Client\V2\Model\WorkspaceMember(); // \PureCloudPlatform\Client\V2\Model\WorkspaceMember | Workspace Member

try {
    $result = $apiInstance->putContentmanagementWorkspaceMember($workspaceId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->putContentmanagementWorkspaceMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **memberId** | **string**| Member ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WorkspaceMember**](../Model/WorkspaceMember.md)| Workspace Member |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WorkspaceMember**](../Model/WorkspaceMember.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putContentmanagementWorkspaceTagvalue**
> \PureCloudPlatform\Client\V2\Model\TagValue putContentmanagementWorkspaceTagvalue($workspaceId, $tagId, $body)

Update a workspace tag. Will update all documents with the new tag value.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ContentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspaceId = "workspaceId_example"; // string | Workspace ID
$tagId = "tagId_example"; // string | Tag ID
$body = new \PureCloudPlatform\Client\V2\Model\TagValue(); // \PureCloudPlatform\Client\V2\Model\TagValue | Workspace

try {
    $result = $apiInstance->putContentmanagementWorkspaceTagvalue($workspaceId, $tagId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentManagementApi->putContentmanagementWorkspaceTagvalue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspaceId** | **string**| Workspace ID |
 **tagId** | **string**| Tag ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TagValue**](../Model/TagValue.md)| Workspace |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TagValue**](../Model/TagValue.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

