# PureCloudPlatform\Client\V2\ExternalContactsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteExternalcontactsContact**](ExternalContactsApi.md#deleteExternalcontactsContact) | **DELETE** /api/v2/externalcontacts/contacts/{contactId} | Delete an external contact
[**deleteExternalcontactsContactNote**](ExternalContactsApi.md#deleteExternalcontactsContactNote) | **DELETE** /api/v2/externalcontacts/contacts/{contactId}/notes/{noteId} | Delete a note for an external contact
[**deleteExternalcontactsOrganization**](ExternalContactsApi.md#deleteExternalcontactsOrganization) | **DELETE** /api/v2/externalcontacts/organizations/{externalOrganizationId} | Delete an external organization
[**deleteExternalcontactsOrganizationNote**](ExternalContactsApi.md#deleteExternalcontactsOrganizationNote) | **DELETE** /api/v2/externalcontacts/organizations/{externalOrganizationId}/notes/{noteId} | Delete a note for an external organization
[**deleteExternalcontactsOrganizationTrustor**](ExternalContactsApi.md#deleteExternalcontactsOrganizationTrustor) | **DELETE** /api/v2/externalcontacts/organizations/{externalOrganizationId}/trustor | Unlink the Trustor for this External Organization
[**deleteExternalcontactsRelationship**](ExternalContactsApi.md#deleteExternalcontactsRelationship) | **DELETE** /api/v2/externalcontacts/relationships/{relationshipId} | Delete a relationship
[**getExternalcontactsContact**](ExternalContactsApi.md#getExternalcontactsContact) | **GET** /api/v2/externalcontacts/contacts/{contactId} | Fetch an external contact
[**getExternalcontactsContactNote**](ExternalContactsApi.md#getExternalcontactsContactNote) | **GET** /api/v2/externalcontacts/contacts/{contactId}/notes/{noteId} | Fetch a note for an external contact
[**getExternalcontactsContactNotes**](ExternalContactsApi.md#getExternalcontactsContactNotes) | **GET** /api/v2/externalcontacts/contacts/{contactId}/notes | List notes for an external contact
[**getExternalcontactsContacts**](ExternalContactsApi.md#getExternalcontactsContacts) | **GET** /api/v2/externalcontacts/contacts | Search for external contacts
[**getExternalcontactsOrganization**](ExternalContactsApi.md#getExternalcontactsOrganization) | **GET** /api/v2/externalcontacts/organizations/{externalOrganizationId} | Fetch an external organization
[**getExternalcontactsOrganizationContacts**](ExternalContactsApi.md#getExternalcontactsOrganizationContacts) | **GET** /api/v2/externalcontacts/organizations/{externalOrganizationId}/contacts | Search for external contacts in an external organization
[**getExternalcontactsOrganizationNote**](ExternalContactsApi.md#getExternalcontactsOrganizationNote) | **GET** /api/v2/externalcontacts/organizations/{externalOrganizationId}/notes/{noteId} | Fetch a note for an external organization
[**getExternalcontactsOrganizationNotes**](ExternalContactsApi.md#getExternalcontactsOrganizationNotes) | **GET** /api/v2/externalcontacts/organizations/{externalOrganizationId}/notes | List notes for an external organization
[**getExternalcontactsOrganizationRelationships**](ExternalContactsApi.md#getExternalcontactsOrganizationRelationships) | **GET** /api/v2/externalcontacts/organizations/{externalOrganizationId}/relationships | Fetch a relationship for an external organization
[**getExternalcontactsOrganizations**](ExternalContactsApi.md#getExternalcontactsOrganizations) | **GET** /api/v2/externalcontacts/organizations | Search for external organizations
[**getExternalcontactsRelationship**](ExternalContactsApi.md#getExternalcontactsRelationship) | **GET** /api/v2/externalcontacts/relationships/{relationshipId} | Fetch a relationship
[**getExternalcontactsReversewhitepageslookup**](ExternalContactsApi.md#getExternalcontactsReversewhitepageslookup) | **GET** /api/v2/externalcontacts/reversewhitepageslookup | Look up contacts and externalOrganizations based on an attribute. Maximum of 25 values returned.
[**postExternalcontactsContactNotes**](ExternalContactsApi.md#postExternalcontactsContactNotes) | **POST** /api/v2/externalcontacts/contacts/{contactId}/notes | Create a note for an external contact
[**postExternalcontactsContacts**](ExternalContactsApi.md#postExternalcontactsContacts) | **POST** /api/v2/externalcontacts/contacts | Create an external contact
[**postExternalcontactsOrganizationNotes**](ExternalContactsApi.md#postExternalcontactsOrganizationNotes) | **POST** /api/v2/externalcontacts/organizations/{externalOrganizationId}/notes | Create a note for an external organization
[**postExternalcontactsOrganizations**](ExternalContactsApi.md#postExternalcontactsOrganizations) | **POST** /api/v2/externalcontacts/organizations | Create an external organization
[**postExternalcontactsRelationships**](ExternalContactsApi.md#postExternalcontactsRelationships) | **POST** /api/v2/externalcontacts/relationships | Create a relationship
[**putExternalcontactsContact**](ExternalContactsApi.md#putExternalcontactsContact) | **PUT** /api/v2/externalcontacts/contacts/{contactId} | Update an external contact
[**putExternalcontactsContactNote**](ExternalContactsApi.md#putExternalcontactsContactNote) | **PUT** /api/v2/externalcontacts/contacts/{contactId}/notes/{noteId} | Update a note for an external contact
[**putExternalcontactsConversation**](ExternalContactsApi.md#putExternalcontactsConversation) | **PUT** /api/v2/externalcontacts/conversations/{conversationId} | Associate an external contact with a conversation
[**putExternalcontactsOrganization**](ExternalContactsApi.md#putExternalcontactsOrganization) | **PUT** /api/v2/externalcontacts/organizations/{externalOrganizationId} | Update an external organization
[**putExternalcontactsOrganizationNote**](ExternalContactsApi.md#putExternalcontactsOrganizationNote) | **PUT** /api/v2/externalcontacts/organizations/{externalOrganizationId}/notes/{noteId} | Update a note for an external organization
[**putExternalcontactsOrganizationTrustorTrustorId**](ExternalContactsApi.md#putExternalcontactsOrganizationTrustorTrustorId) | **PUT** /api/v2/externalcontacts/organizations/{externalOrganizationId}/trustor/{trustorId} | Links a Trustor with an External Organization
[**putExternalcontactsRelationship**](ExternalContactsApi.md#putExternalcontactsRelationship) | **PUT** /api/v2/externalcontacts/relationships/{relationshipId} | Update a relationship


# **deleteExternalcontactsContact**
> deleteExternalcontactsContact($contactId)

Delete an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact ID

try {
    $apiInstance->deleteExternalcontactsContact($contactId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->deleteExternalcontactsContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalcontactsContactNote**
> deleteExternalcontactsContactNote($contactId, $noteId)

Delete a note for an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact Id
$noteId = "noteId_example"; // string | Note Id

try {
    $apiInstance->deleteExternalcontactsContactNote($contactId, $noteId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->deleteExternalcontactsContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact Id |
 **noteId** | **string**| Note Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalcontactsOrganization**
> deleteExternalcontactsOrganization($externalOrganizationId)

Delete an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID

try {
    $apiInstance->deleteExternalcontactsOrganization($externalOrganizationId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->deleteExternalcontactsOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalcontactsOrganizationNote**
> deleteExternalcontactsOrganizationNote($externalOrganizationId, $noteId)

Delete a note for an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization Id
$noteId = "noteId_example"; // string | Note Id

try {
    $apiInstance->deleteExternalcontactsOrganizationNote($externalOrganizationId, $noteId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->deleteExternalcontactsOrganizationNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization Id |
 **noteId** | **string**| Note Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalcontactsOrganizationTrustor**
> deleteExternalcontactsOrganizationTrustor($externalOrganizationId)

Unlink the Trustor for this External Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID

try {
    $apiInstance->deleteExternalcontactsOrganizationTrustor($externalOrganizationId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->deleteExternalcontactsOrganizationTrustor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalcontactsRelationship**
> deleteExternalcontactsRelationship($relationshipId)

Delete a relationship



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationshipId = "relationshipId_example"; // string | Relationship Id

try {
    $apiInstance->deleteExternalcontactsRelationship($relationshipId);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->deleteExternalcontactsRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relationshipId** | **string**| Relationship Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsContact**
> \PureCloudPlatform\Client\V2\Model\ExternalContact getExternalcontactsContact($contactId, $expand)

Fetch an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact ID
$expand = array("expand_example"); // string[] | which fields, if any, to expand (externalOrganization,externalDataSources)

try {
    $result = $apiInstance->getExternalcontactsContact($contactId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact ID |
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand (externalOrganization,externalDataSources) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalContact**](../Model/ExternalContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsContactNote**
> \PureCloudPlatform\Client\V2\Model\Note getExternalcontactsContactNote($contactId, $noteId, $expand)

Fetch a note for an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact Id
$noteId = "noteId_example"; // string | Note Id
$expand = array("expand_example"); // string[] | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsContactNote($contactId, $noteId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact Id |
 **noteId** | **string**| Note Id |
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsContactNotes**
> \PureCloudPlatform\Client\V2\Model\NoteListing getExternalcontactsContactNotes($contactId, $pageSize, $pageNumber, $sortOrder, $expand)

List notes for an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact Id
$pageSize = 20; // int | Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$pageNumber = 1; // int | Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$sortOrder = "sortOrder_example"; // string | Sort order
$expand = array("expand_example"); // string[] | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsContactNotes($contactId, $pageSize, $pageNumber, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsContactNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact Id |
 **pageSize** | **int**| Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 20]
 **pageNumber** | **int**| Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 1]
 **sortOrder** | **string**| Sort order | [optional]
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\NoteListing**](../Model/NoteListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsContacts**
> \PureCloudPlatform\Client\V2\Model\ContactListing getExternalcontactsContacts($pageSize, $pageNumber, $q, $sortOrder, $expand)

Search for external contacts



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 20; // int | Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$pageNumber = 1; // int | Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$q = "q_example"; // string | User supplied search keywords (no special syntax is currently supported)
$sortOrder = "sortOrder_example"; // string | Sort order
$expand = array("expand_example"); // string[] | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsContacts($pageSize, $pageNumber, $q, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 20]
 **pageNumber** | **int**| Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 1]
 **q** | **string**| User supplied search keywords (no special syntax is currently supported) | [optional]
 **sortOrder** | **string**| Sort order | [optional]
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListing**](../Model/ContactListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsOrganization**
> \PureCloudPlatform\Client\V2\Model\ExternalOrganization getExternalcontactsOrganization($externalOrganizationId, $expand, $includeTrustors)

Fetch an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID
$expand = "expand_example"; // string | which fields, if any, to expand (externalDataSources)
$includeTrustors = true; // bool | (true or false) whether or not to include trustor information embedded in the externalOrganization

try {
    $result = $apiInstance->getExternalcontactsOrganization($externalOrganizationId, $expand, $includeTrustors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |
 **expand** | **string**| which fields, if any, to expand (externalDataSources) | [optional]
 **includeTrustors** | **bool**| (true or false) whether or not to include trustor information embedded in the externalOrganization | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](../Model/ExternalOrganization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsOrganizationContacts**
> \PureCloudPlatform\Client\V2\Model\ContactListing getExternalcontactsOrganizationContacts($externalOrganizationId, $pageSize, $pageNumber, $q, $sortOrder, $expand)

Search for external contacts in an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID
$pageSize = 20; // int | Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$pageNumber = 1; // int | Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$q = "q_example"; // string | User supplied search keywords (no special syntax is currently supported)
$sortOrder = "sortOrder_example"; // string | Sort order
$expand = array("expand_example"); // string[] | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsOrganizationContacts($externalOrganizationId, $pageSize, $pageNumber, $q, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsOrganizationContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |
 **pageSize** | **int**| Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 20]
 **pageNumber** | **int**| Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 1]
 **q** | **string**| User supplied search keywords (no special syntax is currently supported) | [optional]
 **sortOrder** | **string**| Sort order | [optional]
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListing**](../Model/ContactListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsOrganizationNote**
> \PureCloudPlatform\Client\V2\Model\Note getExternalcontactsOrganizationNote($externalOrganizationId, $noteId, $expand)

Fetch a note for an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization Id
$noteId = "noteId_example"; // string | Note Id
$expand = array("expand_example"); // string[] | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsOrganizationNote($externalOrganizationId, $noteId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsOrganizationNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization Id |
 **noteId** | **string**| Note Id |
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsOrganizationNotes**
> \PureCloudPlatform\Client\V2\Model\NoteListing getExternalcontactsOrganizationNotes($externalOrganizationId, $pageSize, $pageNumber, $sortOrder, $expand)

List notes for an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization Id
$pageSize = 20; // int | Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$pageNumber = 1; // int | Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$sortOrder = "sortOrder_example"; // string | Sort order
$expand = array("expand_example"); // string[] | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsOrganizationNotes($externalOrganizationId, $pageSize, $pageNumber, $sortOrder, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsOrganizationNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization Id |
 **pageSize** | **int**| Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 20]
 **pageNumber** | **int**| Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 1]
 **sortOrder** | **string**| Sort order | [optional]
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\NoteListing**](../Model/NoteListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsOrganizationRelationships**
> \PureCloudPlatform\Client\V2\Model\RelationshipListing getExternalcontactsOrganizationRelationships($externalOrganizationId, $pageSize, $pageNumber, $expand, $sortOrder)

Fetch a relationship for an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID
$pageSize = 20; // int | Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$pageNumber = 1; // int | Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$expand = "expand_example"; // string | which fields, if any, to expand
$sortOrder = "sortOrder_example"; // string | Sort order

try {
    $result = $apiInstance->getExternalcontactsOrganizationRelationships($externalOrganizationId, $pageSize, $pageNumber, $expand, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsOrganizationRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |
 **pageSize** | **int**| Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 20]
 **pageNumber** | **int**| Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 1]
 **expand** | **string**| which fields, if any, to expand | [optional]
 **sortOrder** | **string**| Sort order | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\RelationshipListing**](../Model/RelationshipListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsOrganizations**
> \PureCloudPlatform\Client\V2\Model\ExternalOrganizationListing getExternalcontactsOrganizations($pageSize, $pageNumber, $q, $trustorId, $sortOrder, $expand, $includeTrustors)

Search for external organizations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 20; // int | Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$pageNumber = 1; // int | Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be <= 1,000)
$q = "q_example"; // string | Search query
$trustorId = array("trustorId_example"); // string[] | Search for external organizations by trustorIds (limit 25). If supplied, the 'q' parameters is ignored. Items are returned in the order requested
$sortOrder = "sortOrder_example"; // string | Sort order
$expand = array("expand_example"); // string[] | which fields, if any, to expand
$includeTrustors = true; // bool | (true or false) whether or not to include trustor information embedded in the externalOrganization

try {
    $result = $apiInstance->getExternalcontactsOrganizations($pageSize, $pageNumber, $q, $trustorId, $sortOrder, $expand, $includeTrustors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 20]
 **pageNumber** | **int**| Page number (limited to fetching first 1,000 records; pageNumber * pageSize must be &lt;&#x3D; 1,000) | [optional] [default to 1]
 **q** | **string**| Search query | [optional]
 **trustorId** | [**string[]**](../Model/string.md)| Search for external organizations by trustorIds (limit 25). If supplied, the &#39;q&#39; parameters is ignored. Items are returned in the order requested | [optional]
 **sortOrder** | **string**| Sort order | [optional]
 **expand** | [**string[]**](../Model/string.md)| which fields, if any, to expand | [optional]
 **includeTrustors** | **bool**| (true or false) whether or not to include trustor information embedded in the externalOrganization | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalOrganizationListing**](../Model/ExternalOrganizationListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsRelationship**
> \PureCloudPlatform\Client\V2\Model\Relationship getExternalcontactsRelationship($relationshipId, $expand)

Fetch a relationship



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationshipId = "relationshipId_example"; // string | Relationship Id
$expand = "expand_example"; // string | which fields, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsRelationship($relationshipId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relationshipId** | **string**| Relationship Id |
 **expand** | **string**| which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Relationship**](../Model/Relationship.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExternalcontactsReversewhitepageslookup**
> \PureCloudPlatform\Client\V2\Model\ReverseWhitepagesLookupResult getExternalcontactsReversewhitepageslookup($lookupVal, $expand)

Look up contacts and externalOrganizations based on an attribute. Maximum of 25 values returned.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lookupVal = "lookupVal_example"; // string | User supplied value to lookup contacts/externalOrganizations (supports email addresses, e164 phone numbers, Twitter screen names)
$expand = array("expand_example"); // string[] | which field, if any, to expand

try {
    $result = $apiInstance->getExternalcontactsReversewhitepageslookup($lookupVal, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->getExternalcontactsReversewhitepageslookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookupVal** | **string**| User supplied value to lookup contacts/externalOrganizations (supports email addresses, e164 phone numbers, Twitter screen names) |
 **expand** | [**string[]**](../Model/string.md)| which field, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ReverseWhitepagesLookupResult**](../Model/ReverseWhitepagesLookupResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalcontactsContactNotes**
> \PureCloudPlatform\Client\V2\Model\Note postExternalcontactsContactNotes($contactId, $body)

Create a note for an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact Id
$body = new \PureCloudPlatform\Client\V2\Model\Note(); // \PureCloudPlatform\Client\V2\Model\Note | ExternalContact

try {
    $result = $apiInstance->postExternalcontactsContactNotes($contactId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->postExternalcontactsContactNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)| ExternalContact |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalcontactsContacts**
> \PureCloudPlatform\Client\V2\Model\ExternalContact postExternalcontactsContacts($body)

Create an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ExternalContact(); // \PureCloudPlatform\Client\V2\Model\ExternalContact | ExternalContact

try {
    $result = $apiInstance->postExternalcontactsContacts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->postExternalcontactsContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExternalContact**](../Model/ExternalContact.md)| ExternalContact |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalContact**](../Model/ExternalContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalcontactsOrganizationNotes**
> \PureCloudPlatform\Client\V2\Model\Note postExternalcontactsOrganizationNotes($externalOrganizationId, $body)

Create a note for an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization Id
$body = new \PureCloudPlatform\Client\V2\Model\Note(); // \PureCloudPlatform\Client\V2\Model\Note | ExternalContact

try {
    $result = $apiInstance->postExternalcontactsOrganizationNotes($externalOrganizationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->postExternalcontactsOrganizationNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)| ExternalContact |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalcontactsOrganizations**
> \PureCloudPlatform\Client\V2\Model\ExternalOrganization postExternalcontactsOrganizations($body)

Create an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ExternalOrganization(); // \PureCloudPlatform\Client\V2\Model\ExternalOrganization | ExternalOrganization

try {
    $result = $apiInstance->postExternalcontactsOrganizations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->postExternalcontactsOrganizations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](../Model/ExternalOrganization.md)| ExternalOrganization |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](../Model/ExternalOrganization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postExternalcontactsRelationships**
> \PureCloudPlatform\Client\V2\Model\Relationship postExternalcontactsRelationships($body)

Create a relationship



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Relationship(); // \PureCloudPlatform\Client\V2\Model\Relationship | Relationship

try {
    $result = $apiInstance->postExternalcontactsRelationships($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->postExternalcontactsRelationships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Relationship**](../Model/Relationship.md)| Relationship |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Relationship**](../Model/Relationship.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsContact**
> \PureCloudPlatform\Client\V2\Model\ExternalContact putExternalcontactsContact($contactId, $body)

Update an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact ID
$body = new \PureCloudPlatform\Client\V2\Model\ExternalContact(); // \PureCloudPlatform\Client\V2\Model\ExternalContact | ExternalContact

try {
    $result = $apiInstance->putExternalcontactsContact($contactId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExternalContact**](../Model/ExternalContact.md)| ExternalContact |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalContact**](../Model/ExternalContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsContactNote**
> \PureCloudPlatform\Client\V2\Model\Note putExternalcontactsContactNote($contactId, $noteId, $body)

Update a note for an external contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactId = "contactId_example"; // string | ExternalContact Id
$noteId = "noteId_example"; // string | Note Id
$body = new \PureCloudPlatform\Client\V2\Model\Note(); // \PureCloudPlatform\Client\V2\Model\Note | Note

try {
    $result = $apiInstance->putExternalcontactsContactNote($contactId, $noteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsContactNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactId** | **string**| ExternalContact Id |
 **noteId** | **string**| Note Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)| Note |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsConversation**
> putExternalcontactsConversation($conversationId, $body)

Associate an external contact with a conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID
$body = new \PureCloudPlatform\Client\V2\Model\ConversationAssociation(); // \PureCloudPlatform\Client\V2\Model\ConversationAssociation | ConversationAssociation

try {
    $apiInstance->putExternalcontactsConversation($conversationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationAssociation**](../Model/ConversationAssociation.md)| ConversationAssociation |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsOrganization**
> \PureCloudPlatform\Client\V2\Model\ExternalOrganization putExternalcontactsOrganization($externalOrganizationId, $body)

Update an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID
$body = new \PureCloudPlatform\Client\V2\Model\ExternalOrganization(); // \PureCloudPlatform\Client\V2\Model\ExternalOrganization | ExternalOrganization

try {
    $result = $apiInstance->putExternalcontactsOrganization($externalOrganizationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](../Model/ExternalOrganization.md)| ExternalOrganization |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](../Model/ExternalOrganization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsOrganizationNote**
> \PureCloudPlatform\Client\V2\Model\Note putExternalcontactsOrganizationNote($externalOrganizationId, $noteId, $body)

Update a note for an external organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization Id
$noteId = "noteId_example"; // string | Note Id
$body = new \PureCloudPlatform\Client\V2\Model\Note(); // \PureCloudPlatform\Client\V2\Model\Note | Note

try {
    $result = $apiInstance->putExternalcontactsOrganizationNote($externalOrganizationId, $noteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsOrganizationNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization Id |
 **noteId** | **string**| Note Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)| Note |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Note**](../Model/Note.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsOrganizationTrustorTrustorId**
> \PureCloudPlatform\Client\V2\Model\ExternalOrganization putExternalcontactsOrganizationTrustorTrustorId($externalOrganizationId, $trustorId)

Links a Trustor with an External Organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$externalOrganizationId = "externalOrganizationId_example"; // string | External Organization ID
$trustorId = "trustorId_example"; // string | Trustor ID

try {
    $result = $apiInstance->putExternalcontactsOrganizationTrustorTrustorId($externalOrganizationId, $trustorId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsOrganizationTrustorTrustorId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **externalOrganizationId** | **string**| External Organization ID |
 **trustorId** | **string**| Trustor ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExternalOrganization**](../Model/ExternalOrganization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putExternalcontactsRelationship**
> \PureCloudPlatform\Client\V2\Model\Relationship putExternalcontactsRelationship($relationshipId, $body)

Update a relationship



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ExternalContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relationshipId = "relationshipId_example"; // string | Relationship Id
$body = new \PureCloudPlatform\Client\V2\Model\Relationship(); // \PureCloudPlatform\Client\V2\Model\Relationship | Relationship

try {
    $result = $apiInstance->putExternalcontactsRelationship($relationshipId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalContactsApi->putExternalcontactsRelationship: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relationshipId** | **string**| Relationship Id |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Relationship**](../Model/Relationship.md)| Relationship |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Relationship**](../Model/Relationship.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

