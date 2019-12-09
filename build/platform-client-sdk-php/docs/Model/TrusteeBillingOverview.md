# TrusteeBillingOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** |  | [optional] 
**organization** | [**\PureCloudPlatform\Client\V2\Model\Entity**](Entity.md) | Organization | 
**currency** | **string** | The currency type. | 
**enabledProducts** | **string[]** | The charge short names for products enabled during the specified period. | 
**subscriptionType** | **string** | The subscription type. | 
**rampPeriodStartDate** | [**\DateTime**](\DateTime.md) | Date-time the ramp period starts. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**rampPeriodEndDate** | [**\DateTime**](\DateTime.md) | Date-time the ramp period ends. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**billingPeriodStartDate** | [**\DateTime**](\DateTime.md) | Date-time the billing period started. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**billingPeriodEndDate** | [**\DateTime**](\DateTime.md) | Date-time the billing period ended. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**usages** | [**\PureCloudPlatform\Client\V2\Model\SubscriptionOverviewUsage[]**](SubscriptionOverviewUsage.md) | Usages for the specified period. | 
**contractAmendmentDate** | [**\DateTime**](\DateTime.md) | Date-time the contract was last amended. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**contractEffectiveDate** | [**\DateTime**](\DateTime.md) | Date-time the contract became effective. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**contractEndDate** | [**\DateTime**](\DateTime.md) | Date-time the contract ends. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**minimumMonthlyAmount** | **string** | Minimum amount that will be charged for the month | [optional] 
**inRampPeriod** | **bool** |  | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


