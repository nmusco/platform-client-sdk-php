# PureCloudPlatform\Client\V2\AlertingApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAlertingInteractionstatsAlert**](AlertingApi.md#deleteAlertingInteractionstatsAlert) | **DELETE** /api/v2/alerting/interactionstats/alerts/{alertId} | Delete an interaction stats alert
[**deleteAlertingInteractionstatsRule**](AlertingApi.md#deleteAlertingInteractionstatsRule) | **DELETE** /api/v2/alerting/interactionstats/rules/{ruleId} | Delete an interaction stats rule.
[**getAlertingAlertsActive**](AlertingApi.md#getAlertingAlertsActive) | **GET** /api/v2/alerting/alerts/active | Gets active alert count for a user.
[**getAlertingInteractionstatsAlert**](AlertingApi.md#getAlertingInteractionstatsAlert) | **GET** /api/v2/alerting/interactionstats/alerts/{alertId} | Get an interaction stats alert
[**getAlertingInteractionstatsAlerts**](AlertingApi.md#getAlertingInteractionstatsAlerts) | **GET** /api/v2/alerting/interactionstats/alerts | Get interaction stats alert list.
[**getAlertingInteractionstatsAlertsUnread**](AlertingApi.md#getAlertingInteractionstatsAlertsUnread) | **GET** /api/v2/alerting/interactionstats/alerts/unread | Gets user unread count of interaction stats alerts.
[**getAlertingInteractionstatsRule**](AlertingApi.md#getAlertingInteractionstatsRule) | **GET** /api/v2/alerting/interactionstats/rules/{ruleId} | Get an interaction stats rule.
[**getAlertingInteractionstatsRules**](AlertingApi.md#getAlertingInteractionstatsRules) | **GET** /api/v2/alerting/interactionstats/rules | Get an interaction stats rule list.
[**postAlertingInteractionstatsRules**](AlertingApi.md#postAlertingInteractionstatsRules) | **POST** /api/v2/alerting/interactionstats/rules | Create an interaction stats rule.
[**putAlertingInteractionstatsAlert**](AlertingApi.md#putAlertingInteractionstatsAlert) | **PUT** /api/v2/alerting/interactionstats/alerts/{alertId} | Update an interaction stats alert read status
[**putAlertingInteractionstatsRule**](AlertingApi.md#putAlertingInteractionstatsRule) | **PUT** /api/v2/alerting/interactionstats/rules/{ruleId} | Update an interaction stats rule


# **deleteAlertingInteractionstatsAlert**
> deleteAlertingInteractionstatsAlert($alertId)

Delete an interaction stats alert



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alertId = "alertId_example"; // string | Alert ID

try {
    $apiInstance->deleteAlertingInteractionstatsAlert($alertId);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->deleteAlertingInteractionstatsAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alertId** | **string**| Alert ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAlertingInteractionstatsRule**
> deleteAlertingInteractionstatsRule($ruleId)

Delete an interaction stats rule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ruleId = "ruleId_example"; // string | Rule ID

try {
    $apiInstance->deleteAlertingInteractionstatsRule($ruleId);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->deleteAlertingInteractionstatsRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **string**| Rule ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertingAlertsActive**
> \PureCloudPlatform\Client\V2\Model\ActiveAlertCount getAlertingAlertsActive()

Gets active alert count for a user.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAlertingAlertsActive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->getAlertingAlertsActive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ActiveAlertCount**](../Model/ActiveAlertCount.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertingInteractionstatsAlert**
> \PureCloudPlatform\Client\V2\Model\InteractionStatsAlert getAlertingInteractionstatsAlert($alertId, $expand)

Get an interaction stats alert



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alertId = "alertId_example"; // string | Alert ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getAlertingInteractionstatsAlert($alertId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->getAlertingInteractionstatsAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alertId** | **string**| Alert ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InteractionStatsAlert**](../Model/InteractionStatsAlert.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertingInteractionstatsAlerts**
> \PureCloudPlatform\Client\V2\Model\InteractionStatsAlertContainer getAlertingInteractionstatsAlerts($expand)

Get interaction stats alert list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getAlertingInteractionstatsAlerts($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->getAlertingInteractionstatsAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InteractionStatsAlertContainer**](../Model/InteractionStatsAlertContainer.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertingInteractionstatsAlertsUnread**
> \PureCloudPlatform\Client\V2\Model\UnreadMetric getAlertingInteractionstatsAlertsUnread()

Gets user unread count of interaction stats alerts.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAlertingInteractionstatsAlertsUnread();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->getAlertingInteractionstatsAlertsUnread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\UnreadMetric**](../Model/UnreadMetric.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertingInteractionstatsRule**
> \PureCloudPlatform\Client\V2\Model\InteractionStatsRule getAlertingInteractionstatsRule($ruleId, $expand)

Get an interaction stats rule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ruleId = "ruleId_example"; // string | Rule ID
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getAlertingInteractionstatsRule($ruleId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->getAlertingInteractionstatsRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **string**| Rule ID |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InteractionStatsRule**](../Model/InteractionStatsRule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlertingInteractionstatsRules**
> \PureCloudPlatform\Client\V2\Model\InteractionStatsRuleContainer getAlertingInteractionstatsRules($expand)

Get an interaction stats rule list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->getAlertingInteractionstatsRules($expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->getAlertingInteractionstatsRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InteractionStatsRuleContainer**](../Model/InteractionStatsRuleContainer.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAlertingInteractionstatsRules**
> \PureCloudPlatform\Client\V2\Model\InteractionStatsRule postAlertingInteractionstatsRules($body, $expand)

Create an interaction stats rule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\InteractionStatsRule(); // \PureCloudPlatform\Client\V2\Model\InteractionStatsRule | AlertingRule
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->postAlertingInteractionstatsRules($body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->postAlertingInteractionstatsRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\InteractionStatsRule**](../Model/InteractionStatsRule.md)| AlertingRule |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InteractionStatsRule**](../Model/InteractionStatsRule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAlertingInteractionstatsAlert**
> \PureCloudPlatform\Client\V2\Model\UnreadStatus putAlertingInteractionstatsAlert($alertId, $body, $expand)

Update an interaction stats alert read status



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alertId = "alertId_example"; // string | Alert ID
$body = new \PureCloudPlatform\Client\V2\Model\UnreadStatus(); // \PureCloudPlatform\Client\V2\Model\UnreadStatus | InteractionStatsAlert
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->putAlertingInteractionstatsAlert($alertId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->putAlertingInteractionstatsAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alertId** | **string**| Alert ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\UnreadStatus**](../Model/UnreadStatus.md)| InteractionStatsAlert |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\UnreadStatus**](../Model/UnreadStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAlertingInteractionstatsRule**
> \PureCloudPlatform\Client\V2\Model\InteractionStatsRule putAlertingInteractionstatsRule($ruleId, $body, $expand)

Update an interaction stats rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\AlertingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ruleId = "ruleId_example"; // string | Rule ID
$body = new \PureCloudPlatform\Client\V2\Model\InteractionStatsRule(); // \PureCloudPlatform\Client\V2\Model\InteractionStatsRule | AlertingRule
$expand = array("expand_example"); // string[] | Which fields, if any, to expand

try {
    $result = $apiInstance->putAlertingInteractionstatsRule($ruleId, $body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertingApi->putAlertingInteractionstatsRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleId** | **string**| Rule ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\InteractionStatsRule**](../Model/InteractionStatsRule.md)| AlertingRule |
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\InteractionStatsRule**](../Model/InteractionStatsRule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

