# PureCloudPlatform\Client\V2\FlowsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postAnalyticsFlowsAggregatesQuery**](FlowsApi.md#postAnalyticsFlowsAggregatesQuery) | **POST** /api/v2/analytics/flows/aggregates/query | Query for flow aggregates
[**postAnalyticsFlowsObservationsQuery**](FlowsApi.md#postAnalyticsFlowsObservationsQuery) | **POST** /api/v2/analytics/flows/observations/query | Query for flow observations


# **postAnalyticsFlowsAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\FlowAggregateQueryResponse postAnalyticsFlowsAggregatesQuery($body)

Query for flow aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FlowAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\FlowAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsFlowsAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->postAnalyticsFlowsAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FlowAggregationQuery**](../Model/FlowAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowAggregateQueryResponse**](../Model/FlowAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsFlowsObservationsQuery**
> \PureCloudPlatform\Client\V2\Model\FlowObservationQueryResponse postAnalyticsFlowsObservationsQuery($body)

Query for flow observations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FlowObservationQuery(); // \PureCloudPlatform\Client\V2\Model\FlowObservationQuery | query

try {
    $result = $apiInstance->postAnalyticsFlowsObservationsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->postAnalyticsFlowsObservationsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FlowObservationQuery**](../Model/FlowObservationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FlowObservationQueryResponse**](../Model/FlowObservationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

