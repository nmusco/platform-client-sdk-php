# PureCloudPlatform\Client\V2\BillingApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBillingReportsBillableusage**](BillingApi.md#getBillingReportsBillableusage) | **GET** /api/v2/billing/reports/billableusage | Get a report of the billable license usages
[**getBillingTrusteebillingoverviewTrustorOrgId**](BillingApi.md#getBillingTrusteebillingoverviewTrustorOrgId) | **GET** /api/v2/billing/trusteebillingoverview/{trustorOrgId} | Get the billing overview for an organization that is managed by a partner.


# **getBillingReportsBillableusage**
> \PureCloudPlatform\Client\V2\Model\BillingUsageReport getBillingReportsBillableusage($startDate, $endDate)

Get a report of the billable license usages

Report is of the billable usages (e.g. licenses and devices utilized) for a given period. If response's status is InProgress, wait a few seconds, then try the same request again.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period start date. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The period end date. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ

try {
    $result = $apiInstance->getBillingReportsBillableusage($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingReportsBillableusage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**| The period start date. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ |
 **endDate** | **\DateTime**| The period end date. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ |

### Return type

[**\PureCloudPlatform\Client\V2\Model\BillingUsageReport**](../Model/BillingUsageReport.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBillingTrusteebillingoverviewTrustorOrgId**
> \PureCloudPlatform\Client\V2\Model\TrusteeBillingOverview getBillingTrusteebillingoverviewTrustorOrgId($trustorOrgId, $billingPeriodIndex)

Get the billing overview for an organization that is managed by a partner.

Tax Disclaimer: Prices returned by this API do not include applicable taxes. It is the responsibility of the customer to pay all taxes that are appropriate in their jurisdiction. See the PureCloud API Documentation in the Developer Center for more information about this API: https://developer.mypurecloud.com/api/rest/v2/

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\BillingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trustorOrgId = "trustorOrgId_example"; // string | The organization ID of the trustor (customer) organization.
$billingPeriodIndex = 0; // int | 0 for active period (overview data may change until period closes). 1 for prior completed billing period. 2 for two billing cycles prior, and so on.

try {
    $result = $apiInstance->getBillingTrusteebillingoverviewTrustorOrgId($trustorOrgId, $billingPeriodIndex);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingApi->getBillingTrusteebillingoverviewTrustorOrgId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trustorOrgId** | **string**| The organization ID of the trustor (customer) organization. |
 **billingPeriodIndex** | **int**| 0 for active period (overview data may change until period closes). 1 for prior completed billing period. 2 for two billing cycles prior, and so on. | [optional] [default to 0]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrusteeBillingOverview**](../Model/TrusteeBillingOverview.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

