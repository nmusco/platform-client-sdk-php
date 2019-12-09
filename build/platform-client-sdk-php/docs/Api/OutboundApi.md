# PureCloudPlatform\Client\V2\OutboundApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOutboundAttemptlimit**](OutboundApi.md#deleteOutboundAttemptlimit) | **DELETE** /api/v2/outbound/attemptlimits/{attemptLimitsId} | Delete attempt limits
[**deleteOutboundCallabletimeset**](OutboundApi.md#deleteOutboundCallabletimeset) | **DELETE** /api/v2/outbound/callabletimesets/{callableTimeSetId} | Delete callable time set
[**deleteOutboundCallanalysisresponseset**](OutboundApi.md#deleteOutboundCallanalysisresponseset) | **DELETE** /api/v2/outbound/callanalysisresponsesets/{callAnalysisSetId} | Delete a dialer call analysis response set.
[**deleteOutboundCampaign**](OutboundApi.md#deleteOutboundCampaign) | **DELETE** /api/v2/outbound/campaigns/{campaignId} | Delete a campaign.
[**deleteOutboundCampaignProgress**](OutboundApi.md#deleteOutboundCampaignProgress) | **DELETE** /api/v2/outbound/campaigns/{campaignId}/progress | Reset campaign progress and recycle the campaign
[**deleteOutboundCampaignrule**](OutboundApi.md#deleteOutboundCampaignrule) | **DELETE** /api/v2/outbound/campaignrules/{campaignRuleId} | Delete Campaign Rule
[**deleteOutboundContactlist**](OutboundApi.md#deleteOutboundContactlist) | **DELETE** /api/v2/outbound/contactlists/{contactListId} | Delete a contact list.
[**deleteOutboundContactlistContact**](OutboundApi.md#deleteOutboundContactlistContact) | **DELETE** /api/v2/outbound/contactlists/{contactListId}/contacts/{contactId} | Delete a contact.
[**deleteOutboundContactlistContacts**](OutboundApi.md#deleteOutboundContactlistContacts) | **DELETE** /api/v2/outbound/contactlists/{contactListId}/contacts | Delete contacts from a contact list.
[**deleteOutboundContactlistfilter**](OutboundApi.md#deleteOutboundContactlistfilter) | **DELETE** /api/v2/outbound/contactlistfilters/{contactListFilterId} | Delete Contact List Filter
[**deleteOutboundContactlists**](OutboundApi.md#deleteOutboundContactlists) | **DELETE** /api/v2/outbound/contactlists | Delete multiple contact lists.
[**deleteOutboundDnclist**](OutboundApi.md#deleteOutboundDnclist) | **DELETE** /api/v2/outbound/dnclists/{dncListId} | Delete dialer DNC list
[**deleteOutboundRuleset**](OutboundApi.md#deleteOutboundRuleset) | **DELETE** /api/v2/outbound/rulesets/{ruleSetId} | Delete a Rule set.
[**deleteOutboundSchedulesCampaign**](OutboundApi.md#deleteOutboundSchedulesCampaign) | **DELETE** /api/v2/outbound/schedules/campaigns/{campaignId} | Delete a dialer campaign schedule.
[**deleteOutboundSchedulesSequence**](OutboundApi.md#deleteOutboundSchedulesSequence) | **DELETE** /api/v2/outbound/schedules/sequences/{sequenceId} | Delete a dialer sequence schedule.
[**deleteOutboundSequence**](OutboundApi.md#deleteOutboundSequence) | **DELETE** /api/v2/outbound/sequences/{sequenceId} | Delete a dialer campaign sequence.
[**getOutboundAttemptlimit**](OutboundApi.md#getOutboundAttemptlimit) | **GET** /api/v2/outbound/attemptlimits/{attemptLimitsId} | Get attempt limits
[**getOutboundAttemptlimits**](OutboundApi.md#getOutboundAttemptlimits) | **GET** /api/v2/outbound/attemptlimits | Query attempt limits list
[**getOutboundCallabletimeset**](OutboundApi.md#getOutboundCallabletimeset) | **GET** /api/v2/outbound/callabletimesets/{callableTimeSetId} | Get callable time set
[**getOutboundCallabletimesets**](OutboundApi.md#getOutboundCallabletimesets) | **GET** /api/v2/outbound/callabletimesets | Query callable time set list
[**getOutboundCallanalysisresponseset**](OutboundApi.md#getOutboundCallanalysisresponseset) | **GET** /api/v2/outbound/callanalysisresponsesets/{callAnalysisSetId} | Get a dialer call analysis response set.
[**getOutboundCallanalysisresponsesets**](OutboundApi.md#getOutboundCallanalysisresponsesets) | **GET** /api/v2/outbound/callanalysisresponsesets | Query a list of dialer call analysis response sets.
[**getOutboundCampaign**](OutboundApi.md#getOutboundCampaign) | **GET** /api/v2/outbound/campaigns/{campaignId} | Get dialer campaign.
[**getOutboundCampaignDiagnostics**](OutboundApi.md#getOutboundCampaignDiagnostics) | **GET** /api/v2/outbound/campaigns/{campaignId}/diagnostics | Get campaign diagnostics
[**getOutboundCampaignInteractions**](OutboundApi.md#getOutboundCampaignInteractions) | **GET** /api/v2/outbound/campaigns/{campaignId}/interactions | Get dialer campaign interactions.
[**getOutboundCampaignProgress**](OutboundApi.md#getOutboundCampaignProgress) | **GET** /api/v2/outbound/campaigns/{campaignId}/progress | Get campaign progress
[**getOutboundCampaignStats**](OutboundApi.md#getOutboundCampaignStats) | **GET** /api/v2/outbound/campaigns/{campaignId}/stats | Get statistics about a Dialer Campaign
[**getOutboundCampaignrule**](OutboundApi.md#getOutboundCampaignrule) | **GET** /api/v2/outbound/campaignrules/{campaignRuleId} | Get Campaign Rule
[**getOutboundCampaignrules**](OutboundApi.md#getOutboundCampaignrules) | **GET** /api/v2/outbound/campaignrules | Query Campaign Rule list
[**getOutboundCampaigns**](OutboundApi.md#getOutboundCampaigns) | **GET** /api/v2/outbound/campaigns | Query a list of dialer campaigns.
[**getOutboundCampaignsDivisionview**](OutboundApi.md#getOutboundCampaignsDivisionview) | **GET** /api/v2/outbound/campaigns/divisionviews/{campaignId} | Get a basic Campaign information object
[**getOutboundCampaignsDivisionviews**](OutboundApi.md#getOutboundCampaignsDivisionviews) | **GET** /api/v2/outbound/campaigns/divisionviews | Query a list of basic Campaign information objects
[**getOutboundContactlist**](OutboundApi.md#getOutboundContactlist) | **GET** /api/v2/outbound/contactlists/{contactListId} | Get a dialer contact list.
[**getOutboundContactlistContact**](OutboundApi.md#getOutboundContactlistContact) | **GET** /api/v2/outbound/contactlists/{contactListId}/contacts/{contactId} | Get a contact.
[**getOutboundContactlistExport**](OutboundApi.md#getOutboundContactlistExport) | **GET** /api/v2/outbound/contactlists/{contactListId}/export | Get the URI of a contact list export.
[**getOutboundContactlistImportstatus**](OutboundApi.md#getOutboundContactlistImportstatus) | **GET** /api/v2/outbound/contactlists/{contactListId}/importstatus | Get dialer contactList import status.
[**getOutboundContactlistTimezonemappingpreview**](OutboundApi.md#getOutboundContactlistTimezonemappingpreview) | **GET** /api/v2/outbound/contactlists/{contactListId}/timezonemappingpreview | Preview the result of applying Automatic Time Zone Mapping to a contact list
[**getOutboundContactlistfilter**](OutboundApi.md#getOutboundContactlistfilter) | **GET** /api/v2/outbound/contactlistfilters/{contactListFilterId} | Get Contact list filter
[**getOutboundContactlistfilters**](OutboundApi.md#getOutboundContactlistfilters) | **GET** /api/v2/outbound/contactlistfilters | Query Contact list filters
[**getOutboundContactlists**](OutboundApi.md#getOutboundContactlists) | **GET** /api/v2/outbound/contactlists | Query a list of contact lists.
[**getOutboundContactlistsDivisionview**](OutboundApi.md#getOutboundContactlistsDivisionview) | **GET** /api/v2/outbound/contactlists/divisionviews/{contactListId} | Get a basic ContactList information object
[**getOutboundContactlistsDivisionviews**](OutboundApi.md#getOutboundContactlistsDivisionviews) | **GET** /api/v2/outbound/contactlists/divisionviews | Query a list of simplified contact list objects.
[**getOutboundDnclist**](OutboundApi.md#getOutboundDnclist) | **GET** /api/v2/outbound/dnclists/{dncListId} | Get dialer DNC list
[**getOutboundDnclistExport**](OutboundApi.md#getOutboundDnclistExport) | **GET** /api/v2/outbound/dnclists/{dncListId}/export | Get the URI of a DNC list export.
[**getOutboundDnclistImportstatus**](OutboundApi.md#getOutboundDnclistImportstatus) | **GET** /api/v2/outbound/dnclists/{dncListId}/importstatus | Get dialer dncList import status.
[**getOutboundDnclists**](OutboundApi.md#getOutboundDnclists) | **GET** /api/v2/outbound/dnclists | Query dialer DNC lists
[**getOutboundDnclistsDivisionview**](OutboundApi.md#getOutboundDnclistsDivisionview) | **GET** /api/v2/outbound/dnclists/divisionviews/{dncListId} | Get a basic DncList information object
[**getOutboundDnclistsDivisionviews**](OutboundApi.md#getOutboundDnclistsDivisionviews) | **GET** /api/v2/outbound/dnclists/divisionviews | Query a list of simplified dnc list objects.
[**getOutboundEvent**](OutboundApi.md#getOutboundEvent) | **GET** /api/v2/outbound/events/{eventId} | Get Dialer Event
[**getOutboundEvents**](OutboundApi.md#getOutboundEvents) | **GET** /api/v2/outbound/events | Query Event Logs
[**getOutboundRuleset**](OutboundApi.md#getOutboundRuleset) | **GET** /api/v2/outbound/rulesets/{ruleSetId} | Get a Rule Set by ID.
[**getOutboundRulesets**](OutboundApi.md#getOutboundRulesets) | **GET** /api/v2/outbound/rulesets | Query a list of Rule Sets.
[**getOutboundSchedulesCampaign**](OutboundApi.md#getOutboundSchedulesCampaign) | **GET** /api/v2/outbound/schedules/campaigns/{campaignId} | Get a dialer campaign schedule.
[**getOutboundSchedulesCampaigns**](OutboundApi.md#getOutboundSchedulesCampaigns) | **GET** /api/v2/outbound/schedules/campaigns | Query for a list of dialer campaign schedules.
[**getOutboundSchedulesSequence**](OutboundApi.md#getOutboundSchedulesSequence) | **GET** /api/v2/outbound/schedules/sequences/{sequenceId} | Get a dialer sequence schedule.
[**getOutboundSchedulesSequences**](OutboundApi.md#getOutboundSchedulesSequences) | **GET** /api/v2/outbound/schedules/sequences | Query for a list of dialer sequence schedules.
[**getOutboundSequence**](OutboundApi.md#getOutboundSequence) | **GET** /api/v2/outbound/sequences/{sequenceId} | Get a dialer campaign sequence.
[**getOutboundSequences**](OutboundApi.md#getOutboundSequences) | **GET** /api/v2/outbound/sequences | Query a list of dialer campaign sequences.
[**getOutboundSettings**](OutboundApi.md#getOutboundSettings) | **GET** /api/v2/outbound/settings | Get the outbound settings for this organization
[**getOutboundWrapupcodemappings**](OutboundApi.md#getOutboundWrapupcodemappings) | **GET** /api/v2/outbound/wrapupcodemappings | Get the Dialer wrap up code mapping.
[**patchOutboundSettings**](OutboundApi.md#patchOutboundSettings) | **PATCH** /api/v2/outbound/settings | Update the outbound settings for this organization
[**postOutboundAttemptlimits**](OutboundApi.md#postOutboundAttemptlimits) | **POST** /api/v2/outbound/attemptlimits | Create attempt limits
[**postOutboundAudits**](OutboundApi.md#postOutboundAudits) | **POST** /api/v2/outbound/audits | Retrieves audits for dialer.
[**postOutboundCallabletimesets**](OutboundApi.md#postOutboundCallabletimesets) | **POST** /api/v2/outbound/callabletimesets | Create callable time set
[**postOutboundCallanalysisresponsesets**](OutboundApi.md#postOutboundCallanalysisresponsesets) | **POST** /api/v2/outbound/callanalysisresponsesets | Create a dialer call analysis response set.
[**postOutboundCampaignCallbackSchedule**](OutboundApi.md#postOutboundCampaignCallbackSchedule) | **POST** /api/v2/outbound/campaigns/{campaignId}/callback/schedule | Schedule a Callback for a Dialer Campaign (Deprecated)
[**postOutboundCampaignrules**](OutboundApi.md#postOutboundCampaignrules) | **POST** /api/v2/outbound/campaignrules | Create Campaign Rule
[**postOutboundCampaigns**](OutboundApi.md#postOutboundCampaigns) | **POST** /api/v2/outbound/campaigns | Create a campaign.
[**postOutboundCampaignsProgress**](OutboundApi.md#postOutboundCampaignsProgress) | **POST** /api/v2/outbound/campaigns/progress | Get progress for a list of campaigns
[**postOutboundContactlistClear**](OutboundApi.md#postOutboundContactlistClear) | **POST** /api/v2/outbound/contactlists/{contactListId}/clear | Deletes all contacts out of a list. All outstanding recalls or rule-scheduled callbacks for non-preview campaigns configured with the contactlist will be cancelled.
[**postOutboundContactlistContacts**](OutboundApi.md#postOutboundContactlistContacts) | **POST** /api/v2/outbound/contactlists/{contactListId}/contacts | Add contacts to a contact list.
[**postOutboundContactlistContactsBulk**](OutboundApi.md#postOutboundContactlistContactsBulk) | **POST** /api/v2/outbound/contactlists/{contactListId}/contacts/bulk | Get contacts from a contact list.
[**postOutboundContactlistExport**](OutboundApi.md#postOutboundContactlistExport) | **POST** /api/v2/outbound/contactlists/{contactListId}/export | Initiate the export of a contact list.
[**postOutboundContactlistfilters**](OutboundApi.md#postOutboundContactlistfilters) | **POST** /api/v2/outbound/contactlistfilters | Create Contact List Filter
[**postOutboundContactlistfiltersPreview**](OutboundApi.md#postOutboundContactlistfiltersPreview) | **POST** /api/v2/outbound/contactlistfilters/preview | Get a preview of the output of a contact list filter
[**postOutboundContactlists**](OutboundApi.md#postOutboundContactlists) | **POST** /api/v2/outbound/contactlists | Create a contact List.
[**postOutboundConversationDnc**](OutboundApi.md#postOutboundConversationDnc) | **POST** /api/v2/outbound/conversations/{conversationId}/dnc | Add phone numbers to a Dialer DNC list.
[**postOutboundDnclistExport**](OutboundApi.md#postOutboundDnclistExport) | **POST** /api/v2/outbound/dnclists/{dncListId}/export | Initiate the export of a dnc list.
[**postOutboundDnclistPhonenumbers**](OutboundApi.md#postOutboundDnclistPhonenumbers) | **POST** /api/v2/outbound/dnclists/{dncListId}/phonenumbers | Add phone numbers to a Dialer DNC list.
[**postOutboundDnclists**](OutboundApi.md#postOutboundDnclists) | **POST** /api/v2/outbound/dnclists | Create dialer DNC list
[**postOutboundRulesets**](OutboundApi.md#postOutboundRulesets) | **POST** /api/v2/outbound/rulesets | Create a Dialer Call Analysis Response Set.
[**postOutboundSequences**](OutboundApi.md#postOutboundSequences) | **POST** /api/v2/outbound/sequences | Create a new campaign sequence.
[**putOutboundAttemptlimit**](OutboundApi.md#putOutboundAttemptlimit) | **PUT** /api/v2/outbound/attemptlimits/{attemptLimitsId} | Update attempt limits
[**putOutboundCallabletimeset**](OutboundApi.md#putOutboundCallabletimeset) | **PUT** /api/v2/outbound/callabletimesets/{callableTimeSetId} | Update callable time set
[**putOutboundCallanalysisresponseset**](OutboundApi.md#putOutboundCallanalysisresponseset) | **PUT** /api/v2/outbound/callanalysisresponsesets/{callAnalysisSetId} | Update a dialer call analysis response set.
[**putOutboundCampaign**](OutboundApi.md#putOutboundCampaign) | **PUT** /api/v2/outbound/campaigns/{campaignId} | Update a campaign.
[**putOutboundCampaignAgent**](OutboundApi.md#putOutboundCampaignAgent) | **PUT** /api/v2/outbound/campaigns/{campaignId}/agents/{userId} | Send notification that an agent&#39;s state changed
[**putOutboundCampaignrule**](OutboundApi.md#putOutboundCampaignrule) | **PUT** /api/v2/outbound/campaignrules/{campaignRuleId} | Update Campaign Rule
[**putOutboundContactlist**](OutboundApi.md#putOutboundContactlist) | **PUT** /api/v2/outbound/contactlists/{contactListId} | Update a contact list.
[**putOutboundContactlistContact**](OutboundApi.md#putOutboundContactlistContact) | **PUT** /api/v2/outbound/contactlists/{contactListId}/contacts/{contactId} | Update a contact.
[**putOutboundContactlistfilter**](OutboundApi.md#putOutboundContactlistfilter) | **PUT** /api/v2/outbound/contactlistfilters/{contactListFilterId} | Update Contact List Filter
[**putOutboundDnclist**](OutboundApi.md#putOutboundDnclist) | **PUT** /api/v2/outbound/dnclists/{dncListId} | Update dialer DNC list
[**putOutboundRuleset**](OutboundApi.md#putOutboundRuleset) | **PUT** /api/v2/outbound/rulesets/{ruleSetId} | Update a RuleSet.
[**putOutboundSchedulesCampaign**](OutboundApi.md#putOutboundSchedulesCampaign) | **PUT** /api/v2/outbound/schedules/campaigns/{campaignId} | Update a new campaign schedule.
[**putOutboundSchedulesSequence**](OutboundApi.md#putOutboundSchedulesSequence) | **PUT** /api/v2/outbound/schedules/sequences/{sequenceId} | Update a new sequence schedule.
[**putOutboundSequence**](OutboundApi.md#putOutboundSequence) | **PUT** /api/v2/outbound/sequences/{sequenceId} | Update a new campaign sequence.
[**putOutboundWrapupcodemappings**](OutboundApi.md#putOutboundWrapupcodemappings) | **PUT** /api/v2/outbound/wrapupcodemappings | Update the Dialer wrap up code mapping.


# **deleteOutboundAttemptlimit**
> deleteOutboundAttemptlimit($attemptLimitsId)

Delete attempt limits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attemptLimitsId = "attemptLimitsId_example"; // string | Attempt limits ID

try {
    $apiInstance->deleteOutboundAttemptlimit($attemptLimitsId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundAttemptlimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attemptLimitsId** | **string**| Attempt limits ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundCallabletimeset**
> deleteOutboundCallabletimeset($callableTimeSetId)

Delete callable time set



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callableTimeSetId = "callableTimeSetId_example"; // string | Callable Time Set ID

try {
    $apiInstance->deleteOutboundCallabletimeset($callableTimeSetId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundCallabletimeset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callableTimeSetId** | **string**| Callable Time Set ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundCallanalysisresponseset**
> deleteOutboundCallanalysisresponseset($callAnalysisSetId)

Delete a dialer call analysis response set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callAnalysisSetId = "callAnalysisSetId_example"; // string | Call Analysis Response Set ID

try {
    $apiInstance->deleteOutboundCallanalysisresponseset($callAnalysisSetId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundCallanalysisresponseset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callAnalysisSetId** | **string**| Call Analysis Response Set ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundCampaign**
> \PureCloudPlatform\Client\V2\Model\Campaign deleteOutboundCampaign($campaignId)

Delete a campaign.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->deleteOutboundCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Campaign**](../Model/Campaign.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundCampaignProgress**
> deleteOutboundCampaignProgress($campaignId)

Reset campaign progress and recycle the campaign



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $apiInstance->deleteOutboundCampaignProgress($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundCampaignProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundCampaignrule**
> deleteOutboundCampaignrule($campaignRuleId)

Delete Campaign Rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRuleId = "campaignRuleId_example"; // string | Campaign Rule ID

try {
    $apiInstance->deleteOutboundCampaignrule($campaignRuleId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundCampaignrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRuleId** | **string**| Campaign Rule ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundContactlist**
> deleteOutboundContactlist($contactListId)

Delete a contact list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID

try {
    $apiInstance->deleteOutboundContactlist($contactListId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundContactlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundContactlistContact**
> deleteOutboundContactlistContact($contactListId, $contactId)

Delete a contact.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID
$contactId = "contactId_example"; // string | Contact ID

try {
    $apiInstance->deleteOutboundContactlistContact($contactListId, $contactId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundContactlistContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |
 **contactId** | **string**| Contact ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundContactlistContacts**
> deleteOutboundContactlistContacts($contactListId, $contactIds)

Delete contacts from a contact list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID
$contactIds = array("contactIds_example"); // string[] | ContactIds to delete.

try {
    $apiInstance->deleteOutboundContactlistContacts($contactListId, $contactIds);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundContactlistContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |
 **contactIds** | [**string[]**](../Model/string.md)| ContactIds to delete. |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundContactlistfilter**
> deleteOutboundContactlistfilter($contactListFilterId)

Delete Contact List Filter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListFilterId = "contactListFilterId_example"; // string | Contact List Filter ID

try {
    $apiInstance->deleteOutboundContactlistfilter($contactListFilterId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundContactlistfilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListFilterId** | **string**| Contact List Filter ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundContactlists**
> deleteOutboundContactlists($id)

Delete multiple contact lists.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | contact list id(s) to delete

try {
    $apiInstance->deleteOutboundContactlists($id);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundContactlists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| contact list id(s) to delete |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundDnclist**
> deleteOutboundDnclist($dncListId)

Delete dialer DNC list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID

try {
    $apiInstance->deleteOutboundDnclist($dncListId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundDnclist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundRuleset**
> deleteOutboundRuleset($ruleSetId)

Delete a Rule set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ruleSetId = "ruleSetId_example"; // string | Rule Set ID

try {
    $apiInstance->deleteOutboundRuleset($ruleSetId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleSetId** | **string**| Rule Set ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundSchedulesCampaign**
> deleteOutboundSchedulesCampaign($campaignId)

Delete a dialer campaign schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $apiInstance->deleteOutboundSchedulesCampaign($campaignId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundSchedulesCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundSchedulesSequence**
> deleteOutboundSchedulesSequence($sequenceId)

Delete a dialer sequence schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequenceId = "sequenceId_example"; // string | Sequence ID

try {
    $apiInstance->deleteOutboundSchedulesSequence($sequenceId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundSchedulesSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequenceId** | **string**| Sequence ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOutboundSequence**
> deleteOutboundSequence($sequenceId)

Delete a dialer campaign sequence.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequenceId = "sequenceId_example"; // string | Campaign Sequence ID

try {
    $apiInstance->deleteOutboundSequence($sequenceId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->deleteOutboundSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequenceId** | **string**| Campaign Sequence ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundAttemptlimit**
> \PureCloudPlatform\Client\V2\Model\AttemptLimits getOutboundAttemptlimit($attemptLimitsId)

Get attempt limits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attemptLimitsId = "attemptLimitsId_example"; // string | Attempt limits ID

try {
    $result = $apiInstance->getOutboundAttemptlimit($attemptLimitsId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundAttemptlimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attemptLimitsId** | **string**| Attempt limits ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AttemptLimits**](../Model/AttemptLimits.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundAttemptlimits**
> \PureCloudPlatform\Client\V2\Model\AttemptLimitsEntityListing getOutboundAttemptlimits($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder)

Query attempt limits list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundAttemptlimits($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundAttemptlimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AttemptLimitsEntityListing**](../Model/AttemptLimitsEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCallabletimeset**
> \PureCloudPlatform\Client\V2\Model\CallableTimeSet getOutboundCallabletimeset($callableTimeSetId)

Get callable time set



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callableTimeSetId = "callableTimeSetId_example"; // string | Callable Time Set ID

try {
    $result = $apiInstance->getOutboundCallabletimeset($callableTimeSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCallabletimeset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callableTimeSetId** | **string**| Callable Time Set ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallableTimeSet**](../Model/CallableTimeSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCallabletimesets**
> \PureCloudPlatform\Client\V2\Model\CallableTimeSetEntityListing getOutboundCallabletimesets($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder)

Query callable time set list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundCallabletimesets($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCallabletimesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallableTimeSetEntityListing**](../Model/CallableTimeSetEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCallanalysisresponseset**
> \PureCloudPlatform\Client\V2\Model\ResponseSet getOutboundCallanalysisresponseset($callAnalysisSetId)

Get a dialer call analysis response set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callAnalysisSetId = "callAnalysisSetId_example"; // string | Call Analysis Response Set ID

try {
    $result = $apiInstance->getOutboundCallanalysisresponseset($callAnalysisSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCallanalysisresponseset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callAnalysisSetId** | **string**| Call Analysis Response Set ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ResponseSet**](../Model/ResponseSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCallanalysisresponsesets**
> \PureCloudPlatform\Client\V2\Model\ResponseSetEntityListing getOutboundCallanalysisresponsesets($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder)

Query a list of dialer call analysis response sets.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundCallanalysisresponsesets($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCallanalysisresponsesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ResponseSetEntityListing**](../Model/ResponseSetEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaign**
> \PureCloudPlatform\Client\V2\Model\Campaign getOutboundCampaign($campaignId)

Get dialer campaign.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Campaign**](../Model/Campaign.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignDiagnostics**
> \PureCloudPlatform\Client\V2\Model\CampaignDiagnostics getOutboundCampaignDiagnostics($campaignId)

Get campaign diagnostics



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundCampaignDiagnostics($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignDiagnostics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignDiagnostics**](../Model/CampaignDiagnostics.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignInteractions**
> \PureCloudPlatform\Client\V2\Model\CampaignInteractions getOutboundCampaignInteractions($campaignId)

Get dialer campaign interactions.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundCampaignInteractions($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignInteractions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignInteractions**](../Model/CampaignInteractions.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignProgress**
> \PureCloudPlatform\Client\V2\Model\CampaignProgress getOutboundCampaignProgress($campaignId)

Get campaign progress



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundCampaignProgress($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignProgress**](../Model/CampaignProgress.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignStats**
> \PureCloudPlatform\Client\V2\Model\CampaignStats getOutboundCampaignStats($campaignId)

Get statistics about a Dialer Campaign



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundCampaignStats($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignStats**](../Model/CampaignStats.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignrule**
> \PureCloudPlatform\Client\V2\Model\CampaignRule getOutboundCampaignrule($campaignRuleId)

Get Campaign Rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRuleId = "campaignRuleId_example"; // string | Campaign Rule ID

try {
    $result = $apiInstance->getOutboundCampaignrule($campaignRuleId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRuleId** | **string**| Campaign Rule ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignRule**](../Model/CampaignRule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignrules**
> \PureCloudPlatform\Client\V2\Model\CampaignRuleEntityListing getOutboundCampaignrules($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder)

Query Campaign Rule list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundCampaignrules($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignrules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignRuleEntityListing**](../Model/CampaignRuleEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaigns**
> \PureCloudPlatform\Client\V2\Model\CampaignEntityListing getOutboundCampaigns($pageSize, $pageNumber, $filterType, $name, $id, $contactListId, $dncListIds, $distributionQueueId, $edgeGroupId, $callAnalysisResponseSetId, $divisionId, $sortBy, $sortOrder)

Query a list of dialer campaigns.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | id
$contactListId = "contactListId_example"; // string | Contact List ID
$dncListIds = "dncListIds_example"; // string | DNC list ID
$distributionQueueId = "distributionQueueId_example"; // string | Distribution queue ID
$edgeGroupId = "edgeGroupId_example"; // string | Edge group ID
$callAnalysisResponseSetId = "callAnalysisResponseSetId_example"; // string | Call analysis response set ID
$divisionId = array("divisionId_example"); // string[] | Division ID(s)
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundCampaigns($pageSize, $pageNumber, $filterType, $name, $id, $contactListId, $dncListIds, $distributionQueueId, $edgeGroupId, $callAnalysisResponseSetId, $divisionId, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **contactListId** | **string**| Contact List ID | [optional]
 **dncListIds** | **string**| DNC list ID | [optional]
 **distributionQueueId** | **string**| Distribution queue ID | [optional]
 **edgeGroupId** | **string**| Edge group ID | [optional]
 **callAnalysisResponseSetId** | **string**| Call analysis response set ID | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignEntityListing**](../Model/CampaignEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignsDivisionview**
> \PureCloudPlatform\Client\V2\Model\CampaignDivisionView getOutboundCampaignsDivisionview($campaignId)

Get a basic Campaign information object

This returns a simplified version of a Campaign, consisting of name and division.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundCampaignsDivisionview($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignsDivisionview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignDivisionView**](../Model/CampaignDivisionView.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundCampaignsDivisionviews**
> \PureCloudPlatform\Client\V2\Model\CampaignDivisionViewListing getOutboundCampaignsDivisionviews($pageSize, $pageNumber, $filterType, $name, $id, $sortBy, $sortOrder)

Query a list of basic Campaign information objects

This returns a simplified version of a Campaign, consisting of name and division.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | id
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundCampaignsDivisionviews($pageSize, $pageNumber, $filterType, $name, $id, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundCampaignsDivisionviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignDivisionViewListing**](../Model/CampaignDivisionViewListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlist**
> \PureCloudPlatform\Client\V2\Model\ContactList getOutboundContactlist($contactListId, $includeImportStatus, $includeSize)

Get a dialer contact list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID
$includeImportStatus = false; // bool | Import status
$includeSize = false; // bool | Include size

try {
    $result = $apiInstance->getOutboundContactlist($contactListId, $includeImportStatus, $includeSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |
 **includeImportStatus** | **bool**| Import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactList**](../Model/ContactList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistContact**
> \PureCloudPlatform\Client\V2\Model\DialerContact getOutboundContactlistContact($contactListId, $contactId)

Get a contact.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID
$contactId = "contactId_example"; // string | Contact ID

try {
    $result = $apiInstance->getOutboundContactlistContact($contactListId, $contactId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |
 **contactId** | **string**| Contact ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialerContact**](../Model/DialerContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistExport**
> \PureCloudPlatform\Client\V2\Model\ExportUri getOutboundContactlistExport($contactListId, $download)

Get the URI of a contact list export.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID
$download = "false"; // string | Redirect to download uri

try {
    $result = $apiInstance->getOutboundContactlistExport($contactListId, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |
 **download** | **string**| Redirect to download uri | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExportUri**](../Model/ExportUri.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistImportstatus**
> \PureCloudPlatform\Client\V2\Model\ImportStatus getOutboundContactlistImportstatus($contactListId)

Get dialer contactList import status.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID

try {
    $result = $apiInstance->getOutboundContactlistImportstatus($contactListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistImportstatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ImportStatus**](../Model/ImportStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistTimezonemappingpreview**
> \PureCloudPlatform\Client\V2\Model\TimeZoneMappingPreview getOutboundContactlistTimezonemappingpreview($contactListId)

Preview the result of applying Automatic Time Zone Mapping to a contact list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID

try {
    $result = $apiInstance->getOutboundContactlistTimezonemappingpreview($contactListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistTimezonemappingpreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeZoneMappingPreview**](../Model/TimeZoneMappingPreview.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistfilter**
> \PureCloudPlatform\Client\V2\Model\ContactListFilter getOutboundContactlistfilter($contactListFilterId)

Get Contact list filter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListFilterId = "contactListFilterId_example"; // string | Contact List Filter ID

try {
    $result = $apiInstance->getOutboundContactlistfilter($contactListFilterId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistfilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListFilterId** | **string**| Contact List Filter ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListFilter**](../Model/ContactListFilter.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistfilters**
> \PureCloudPlatform\Client\V2\Model\ContactListFilterEntityListing getOutboundContactlistfilters($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder, $contactListId)

Query Contact list filters



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order
$contactListId = "contactListId_example"; // string | Contact List ID

try {
    $result = $apiInstance->getOutboundContactlistfilters($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder, $contactListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistfilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]
 **contactListId** | **string**| Contact List ID | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListFilterEntityListing**](../Model/ContactListFilterEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlists**
> \PureCloudPlatform\Client\V2\Model\ContactListEntityListing getOutboundContactlists($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $id, $divisionId, $sortBy, $sortOrder)

Query a list of contact lists.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeImportStatus = false; // bool | Include import status
$includeSize = false; // bool | Include size
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | id
$divisionId = array("divisionId_example"); // string[] | Division ID(s)
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundContactlists($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $id, $divisionId, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeImportStatus** | **bool**| Include import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListEntityListing**](../Model/ContactListEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistsDivisionview**
> \PureCloudPlatform\Client\V2\Model\ContactListDivisionView getOutboundContactlistsDivisionview($contactListId, $includeImportStatus, $includeSize)

Get a basic ContactList information object

This returns a simplified version of a ContactList, consisting of the name, division, column names, phone columns, import status, and size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contactlist ID
$includeImportStatus = false; // bool | Include import status
$includeSize = false; // bool | Include size

try {
    $result = $apiInstance->getOutboundContactlistsDivisionview($contactListId, $includeImportStatus, $includeSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistsDivisionview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contactlist ID |
 **includeImportStatus** | **bool**| Include import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListDivisionView**](../Model/ContactListDivisionView.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundContactlistsDivisionviews**
> \PureCloudPlatform\Client\V2\Model\ContactListDivisionViewListing getOutboundContactlistsDivisionviews($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $id, $sortBy, $sortOrder)

Query a list of simplified contact list objects.

This return a simplified version of contact lists, consisting of the name, division, column names, phone columns, import status, and size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeImportStatus = false; // bool | Include import status
$includeSize = false; // bool | Include size
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | id
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundContactlistsDivisionviews($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $id, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundContactlistsDivisionviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeImportStatus** | **bool**| Include import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListDivisionViewListing**](../Model/ContactListDivisionViewListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundDnclist**
> \PureCloudPlatform\Client\V2\Model\DncList getOutboundDnclist($dncListId, $includeImportStatus, $includeSize)

Get dialer DNC list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID
$includeImportStatus = false; // bool | Import status
$includeSize = false; // bool | Include size

try {
    $result = $apiInstance->getOutboundDnclist($dncListId, $includeImportStatus, $includeSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundDnclist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |
 **includeImportStatus** | **bool**| Import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DncList**](../Model/DncList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundDnclistExport**
> \PureCloudPlatform\Client\V2\Model\ExportUri getOutboundDnclistExport($dncListId, $download)

Get the URI of a DNC list export.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID
$download = "false"; // string | Redirect to download uri

try {
    $result = $apiInstance->getOutboundDnclistExport($dncListId, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundDnclistExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |
 **download** | **string**| Redirect to download uri | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExportUri**](../Model/ExportUri.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundDnclistImportstatus**
> \PureCloudPlatform\Client\V2\Model\ImportStatus getOutboundDnclistImportstatus($dncListId)

Get dialer dncList import status.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID

try {
    $result = $apiInstance->getOutboundDnclistImportstatus($dncListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundDnclistImportstatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ImportStatus**](../Model/ImportStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundDnclists**
> \PureCloudPlatform\Client\V2\Model\DncListEntityListing getOutboundDnclists($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $dncSourceType, $divisionId, $sortBy, $sortOrder)

Query dialer DNC lists



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeImportStatus = false; // bool | Import status
$includeSize = false; // bool | Include size
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$dncSourceType = "dncSourceType_example"; // string | DncSourceType
$divisionId = array("divisionId_example"); // string[] | Division ID(s)
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "sortOrder_example"; // string | Sort order

try {
    $result = $apiInstance->getOutboundDnclists($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $dncSourceType, $divisionId, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundDnclists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeImportStatus** | **bool**| Import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **dncSourceType** | **string**| DncSourceType | [optional]
 **divisionId** | [**string[]**](../Model/string.md)| Division ID(s) | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DncListEntityListing**](../Model/DncListEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundDnclistsDivisionview**
> \PureCloudPlatform\Client\V2\Model\DncListDivisionView getOutboundDnclistsDivisionview($dncListId, $includeImportStatus, $includeSize)

Get a basic DncList information object

This returns a simplified version of a DncList, consisting of the name, division, import status, and size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | Dnclist ID
$includeImportStatus = false; // bool | Include import status
$includeSize = false; // bool | Include size

try {
    $result = $apiInstance->getOutboundDnclistsDivisionview($dncListId, $includeImportStatus, $includeSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundDnclistsDivisionview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| Dnclist ID |
 **includeImportStatus** | **bool**| Include import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DncListDivisionView**](../Model/DncListDivisionView.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundDnclistsDivisionviews**
> \PureCloudPlatform\Client\V2\Model\DncListDivisionViewListing getOutboundDnclistsDivisionviews($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $id, $sortBy, $sortOrder)

Query a list of simplified dnc list objects.

This return a simplified version of dnc lists, consisting of the name, division, import status, and size.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$includeImportStatus = false; // bool | Include import status
$includeSize = false; // bool | Include size
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$id = array("id_example"); // string[] | id
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundDnclistsDivisionviews($includeImportStatus, $includeSize, $pageSize, $pageNumber, $filterType, $name, $id, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundDnclistsDivisionviews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includeImportStatus** | **bool**| Include import status | [optional] [default to false]
 **includeSize** | **bool**| Include size | [optional] [default to false]
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **id** | [**string[]**](../Model/string.md)| id | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DncListDivisionViewListing**](../Model/DncListDivisionViewListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundEvent**
> \PureCloudPlatform\Client\V2\Model\EventLog getOutboundEvent($eventId)

Get Dialer Event



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$eventId = "eventId_example"; // string | Event Log ID

try {
    $result = $apiInstance->getOutboundEvent($eventId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **eventId** | **string**| Event Log ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EventLog**](../Model/EventLog.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundEvents**
> \PureCloudPlatform\Client\V2\Model\DialerEventEntityListing getOutboundEvents($pageSize, $pageNumber, $filterType, $category, $level, $sortBy, $sortOrder)

Query Event Logs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$category = "category_example"; // string | Category
$level = "level_example"; // string | Level
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundEvents($pageSize, $pageNumber, $filterType, $category, $level, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **category** | **string**| Category | [optional]
 **level** | **string**| Level | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialerEventEntityListing**](../Model/DialerEventEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundRuleset**
> \PureCloudPlatform\Client\V2\Model\RuleSet getOutboundRuleset($ruleSetId)

Get a Rule Set by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ruleSetId = "ruleSetId_example"; // string | Rule Set ID

try {
    $result = $apiInstance->getOutboundRuleset($ruleSetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleSetId** | **string**| Rule Set ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RuleSet**](../Model/RuleSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundRulesets**
> \PureCloudPlatform\Client\V2\Model\RuleSetEntityListing getOutboundRulesets($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder)

Query a list of Rule Sets.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundRulesets($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundRulesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\RuleSetEntityListing**](../Model/RuleSetEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSchedulesCampaign**
> \PureCloudPlatform\Client\V2\Model\CampaignSchedule getOutboundSchedulesCampaign($campaignId)

Get a dialer campaign schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID

try {
    $result = $apiInstance->getOutboundSchedulesCampaign($campaignId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSchedulesCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSchedule**](../Model/CampaignSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSchedulesCampaigns**
> \PureCloudPlatform\Client\V2\Model\CampaignSchedule[] getOutboundSchedulesCampaigns()

Query for a list of dialer campaign schedules.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOutboundSchedulesCampaigns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSchedulesCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSchedule[]**](../Model/CampaignSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSchedulesSequence**
> \PureCloudPlatform\Client\V2\Model\SequenceSchedule getOutboundSchedulesSequence($sequenceId)

Get a dialer sequence schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequenceId = "sequenceId_example"; // string | Sequence ID

try {
    $result = $apiInstance->getOutboundSchedulesSequence($sequenceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSchedulesSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequenceId** | **string**| Sequence ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SequenceSchedule**](../Model/SequenceSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSchedulesSequences**
> \PureCloudPlatform\Client\V2\Model\SequenceSchedule[] getOutboundSchedulesSequences()

Query for a list of dialer sequence schedules.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOutboundSchedulesSequences();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSchedulesSequences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\SequenceSchedule[]**](../Model/SequenceSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSequence**
> \PureCloudPlatform\Client\V2\Model\CampaignSequence getOutboundSequence($sequenceId)

Get a dialer campaign sequence.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequenceId = "sequenceId_example"; // string | Campaign Sequence ID

try {
    $result = $apiInstance->getOutboundSequence($sequenceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequenceId** | **string**| Campaign Sequence ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSequence**](../Model/CampaignSequence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSequences**
> \PureCloudPlatform\Client\V2\Model\CampaignSequenceEntityListing getOutboundSequences($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder)

Query a list of dialer campaign sequences.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size. The max that will be returned is 100.
$pageNumber = 1; // int | Page number
$filterType = "Prefix"; // string | Filter type
$name = "name_example"; // string | Name
$sortBy = "sortBy_example"; // string | Sort by
$sortOrder = "a"; // string | Sort order

try {
    $result = $apiInstance->getOutboundSequences($pageSize, $pageNumber, $filterType, $name, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSequences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size. The max that will be returned is 100. | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **filterType** | **string**| Filter type | [optional] [default to Prefix]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to a]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSequenceEntityListing**](../Model/CampaignSequenceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundSettings**
> \PureCloudPlatform\Client\V2\Model\OutboundSettings getOutboundSettings()

Get the outbound settings for this organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOutboundSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundSettings**](../Model/OutboundSettings.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOutboundWrapupcodemappings**
> \PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping getOutboundWrapupcodemappings()

Get the Dialer wrap up code mapping.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOutboundWrapupcodemappings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->getOutboundWrapupcodemappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping**](../Model/WrapUpCodeMapping.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchOutboundSettings**
> patchOutboundSettings($body)

Update the outbound settings for this organization



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\OutboundSettings(); // \PureCloudPlatform\Client\V2\Model\OutboundSettings | outboundSettings

try {
    $apiInstance->patchOutboundSettings($body);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->patchOutboundSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\OutboundSettings**](../Model/OutboundSettings.md)| outboundSettings |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundAttemptlimits**
> \PureCloudPlatform\Client\V2\Model\AttemptLimits postOutboundAttemptlimits($body)

Create attempt limits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\AttemptLimits(); // \PureCloudPlatform\Client\V2\Model\AttemptLimits | AttemptLimits

try {
    $result = $apiInstance->postOutboundAttemptlimits($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundAttemptlimits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\AttemptLimits**](../Model/AttemptLimits.md)| AttemptLimits |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AttemptLimits**](../Model/AttemptLimits.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundAudits**
> \PureCloudPlatform\Client\V2\Model\AuditSearchResult postOutboundAudits($body, $pageSize, $pageNumber, $sortBy, $sortOrder, $facetsOnly)

Retrieves audits for dialer.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DialerAuditRequest(); // \PureCloudPlatform\Client\V2\Model\DialerAuditRequest | AuditSearch
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "entity.name"; // string | Sort by
$sortOrder = "ascending"; // string | Sort order
$facetsOnly = false; // bool | Facets only

try {
    $result = $apiInstance->postOutboundAudits($body, $pageSize, $pageNumber, $sortBy, $sortOrder, $facetsOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundAudits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DialerAuditRequest**](../Model/DialerAuditRequest.md)| AuditSearch |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to entity.name]
 **sortOrder** | **string**| Sort order | [optional] [default to ascending]
 **facetsOnly** | **bool**| Facets only | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AuditSearchResult**](../Model/AuditSearchResult.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundCallabletimesets**
> \PureCloudPlatform\Client\V2\Model\CallableTimeSet postOutboundCallabletimesets($body)

Create callable time set



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CallableTimeSet(); // \PureCloudPlatform\Client\V2\Model\CallableTimeSet | DialerCallableTimeSet

try {
    $result = $apiInstance->postOutboundCallabletimesets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundCallabletimesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CallableTimeSet**](../Model/CallableTimeSet.md)| DialerCallableTimeSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallableTimeSet**](../Model/CallableTimeSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundCallanalysisresponsesets**
> \PureCloudPlatform\Client\V2\Model\ResponseSet postOutboundCallanalysisresponsesets($body)

Create a dialer call analysis response set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ResponseSet(); // \PureCloudPlatform\Client\V2\Model\ResponseSet | ResponseSet

try {
    $result = $apiInstance->postOutboundCallanalysisresponsesets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundCallanalysisresponsesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ResponseSet**](../Model/ResponseSet.md)| ResponseSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ResponseSet**](../Model/ResponseSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundCampaignCallbackSchedule**
> \PureCloudPlatform\Client\V2\Model\ContactCallbackRequest postOutboundCampaignCallbackSchedule($campaignId, $body)

Schedule a Callback for a Dialer Campaign (Deprecated)

This endpoint is deprecated and may have unexpected results. Please use \"/conversations/{conversationId}/participants/{participantId}/callbacks instead.\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID
$body = new \PureCloudPlatform\Client\V2\Model\ContactCallbackRequest(); // \PureCloudPlatform\Client\V2\Model\ContactCallbackRequest | ContactCallbackRequest

try {
    $result = $apiInstance->postOutboundCampaignCallbackSchedule($campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundCampaignCallbackSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContactCallbackRequest**](../Model/ContactCallbackRequest.md)| ContactCallbackRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactCallbackRequest**](../Model/ContactCallbackRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundCampaignrules**
> \PureCloudPlatform\Client\V2\Model\CampaignRule postOutboundCampaignrules($body)

Create Campaign Rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CampaignRule(); // \PureCloudPlatform\Client\V2\Model\CampaignRule | CampaignRule

try {
    $result = $apiInstance->postOutboundCampaignrules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundCampaignrules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CampaignRule**](../Model/CampaignRule.md)| CampaignRule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignRule**](../Model/CampaignRule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundCampaigns**
> \PureCloudPlatform\Client\V2\Model\Campaign postOutboundCampaigns($body)

Create a campaign.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Campaign(); // \PureCloudPlatform\Client\V2\Model\Campaign | Campaign

try {
    $result = $apiInstance->postOutboundCampaigns($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Campaign**](../Model/Campaign.md)| Campaign |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Campaign**](../Model/Campaign.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundCampaignsProgress**
> \PureCloudPlatform\Client\V2\Model\CampaignProgress[] postOutboundCampaignsProgress($body)

Get progress for a list of campaigns



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | Campaign IDs

try {
    $result = $apiInstance->postOutboundCampaignsProgress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundCampaignsProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string[]**| Campaign IDs |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignProgress[]**](../Model/CampaignProgress.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlistClear**
> postOutboundContactlistClear($contactListId)

Deletes all contacts out of a list. All outstanding recalls or rule-scheduled callbacks for non-preview campaigns configured with the contactlist will be cancelled.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID

try {
    $apiInstance->postOutboundContactlistClear($contactListId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlistClear: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlistContacts**
> \PureCloudPlatform\Client\V2\Model\DialerContact[] postOutboundContactlistContacts($contactListId, $body, $priority, $clearSystemData, $doNotQueue)

Add contacts to a contact list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID
$body = array(new \PureCloudPlatform\Client\V2\Model\WritableDialerContact()); // \PureCloudPlatform\Client\V2\Model\WritableDialerContact[] | Contact
$priority = true; // bool | Contact priority. True means the contact(s) will be dialed next; false means the contact will go to the end of the contact queue.
$clearSystemData = true; // bool | Clear system data. True means the system columns (attempts, callable status, etc) stored on the contact will be cleared if the contact already exists; false means they won't.
$doNotQueue = true; // bool | Do not queue. True means that updated contacts will not have their positions in the queue altered, so contacts that have already been dialed will not be redialed. For new contacts they will not be called until a campaign recycle; False means that updated contacts will be re-queued, according to the 'priority' parameter.

try {
    $result = $apiInstance->postOutboundContactlistContacts($contactListId, $body, $priority, $clearSystemData, $doNotQueue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlistContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WritableDialerContact[]**](../Model/WritableDialerContact.md)| Contact |
 **priority** | **bool**| Contact priority. True means the contact(s) will be dialed next; false means the contact will go to the end of the contact queue. | [optional]
 **clearSystemData** | **bool**| Clear system data. True means the system columns (attempts, callable status, etc) stored on the contact will be cleared if the contact already exists; false means they won&#39;t. | [optional]
 **doNotQueue** | **bool**| Do not queue. True means that updated contacts will not have their positions in the queue altered, so contacts that have already been dialed will not be redialed. For new contacts they will not be called until a campaign recycle; False means that updated contacts will be re-queued, according to the &#39;priority&#39; parameter. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialerContact[]**](../Model/DialerContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlistContactsBulk**
> \PureCloudPlatform\Client\V2\Model\DialerContact[] postOutboundContactlistContactsBulk($contactListId, $body)

Get contacts from a contact list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | ContactIds to get.

try {
    $result = $apiInstance->postOutboundContactlistContactsBulk($contactListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlistContactsBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |
 **body** | **string[]**| ContactIds to get. |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialerContact[]**](../Model/DialerContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlistExport**
> \PureCloudPlatform\Client\V2\Model\DomainEntityRef postOutboundContactlistExport($contactListId)

Initiate the export of a contact list.

Returns 200 if received OK.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID

try {
    $result = $apiInstance->postOutboundContactlistExport($contactListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlistExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](../Model/DomainEntityRef.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlistfilters**
> \PureCloudPlatform\Client\V2\Model\ContactListFilter postOutboundContactlistfilters($body)

Create Contact List Filter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ContactListFilter(); // \PureCloudPlatform\Client\V2\Model\ContactListFilter | ContactListFilter

try {
    $result = $apiInstance->postOutboundContactlistfilters($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlistfilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContactListFilter**](../Model/ContactListFilter.md)| ContactListFilter |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListFilter**](../Model/ContactListFilter.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlistfiltersPreview**
> \PureCloudPlatform\Client\V2\Model\FilterPreviewResponse postOutboundContactlistfiltersPreview($body)

Get a preview of the output of a contact list filter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ContactListFilter(); // \PureCloudPlatform\Client\V2\Model\ContactListFilter | ContactListFilter

try {
    $result = $apiInstance->postOutboundContactlistfiltersPreview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlistfiltersPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContactListFilter**](../Model/ContactListFilter.md)| ContactListFilter |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FilterPreviewResponse**](../Model/FilterPreviewResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundContactlists**
> \PureCloudPlatform\Client\V2\Model\ContactList postOutboundContactlists($body)

Create a contact List.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ContactList(); // \PureCloudPlatform\Client\V2\Model\ContactList | ContactList

try {
    $result = $apiInstance->postOutboundContactlists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundContactlists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContactList**](../Model/ContactList.md)| ContactList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactList**](../Model/ContactList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundConversationDnc**
> postOutboundConversationDnc($conversationId)

Add phone numbers to a Dialer DNC list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | Conversation ID

try {
    $apiInstance->postOutboundConversationDnc($conversationId);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundConversationDnc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| Conversation ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundDnclistExport**
> \PureCloudPlatform\Client\V2\Model\DomainEntityRef postOutboundDnclistExport($dncListId)

Initiate the export of a dnc list.

Returns 200 if received OK.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID

try {
    $result = $apiInstance->postOutboundDnclistExport($dncListId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundDnclistExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](../Model/DomainEntityRef.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundDnclistPhonenumbers**
> postOutboundDnclistPhonenumbers($dncListId, $body)

Add phone numbers to a Dialer DNC list.

Only Internal DNC lists may be appended to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | DNC Phone Numbers

try {
    $apiInstance->postOutboundDnclistPhonenumbers($dncListId, $body);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundDnclistPhonenumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |
 **body** | **string[]**| DNC Phone Numbers |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundDnclists**
> \PureCloudPlatform\Client\V2\Model\DncList postOutboundDnclists($body)

Create dialer DNC list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DncListCreate(); // \PureCloudPlatform\Client\V2\Model\DncListCreate | DncList

try {
    $result = $apiInstance->postOutboundDnclists($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundDnclists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DncListCreate**](../Model/DncListCreate.md)| DncList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DncList**](../Model/DncList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundRulesets**
> \PureCloudPlatform\Client\V2\Model\RuleSet postOutboundRulesets($body)

Create a Dialer Call Analysis Response Set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\RuleSet(); // \PureCloudPlatform\Client\V2\Model\RuleSet | RuleSet

try {
    $result = $apiInstance->postOutboundRulesets($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundRulesets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\RuleSet**](../Model/RuleSet.md)| RuleSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RuleSet**](../Model/RuleSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOutboundSequences**
> \PureCloudPlatform\Client\V2\Model\CampaignSequence postOutboundSequences($body)

Create a new campaign sequence.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CampaignSequence(); // \PureCloudPlatform\Client\V2\Model\CampaignSequence | Organization

try {
    $result = $apiInstance->postOutboundSequences($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->postOutboundSequences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CampaignSequence**](../Model/CampaignSequence.md)| Organization |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSequence**](../Model/CampaignSequence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundAttemptlimit**
> \PureCloudPlatform\Client\V2\Model\AttemptLimits putOutboundAttemptlimit($attemptLimitsId, $body)

Update attempt limits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attemptLimitsId = "attemptLimitsId_example"; // string | Attempt limits ID
$body = new \PureCloudPlatform\Client\V2\Model\AttemptLimits(); // \PureCloudPlatform\Client\V2\Model\AttemptLimits | AttemptLimits

try {
    $result = $apiInstance->putOutboundAttemptlimit($attemptLimitsId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundAttemptlimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attemptLimitsId** | **string**| Attempt limits ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\AttemptLimits**](../Model/AttemptLimits.md)| AttemptLimits |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AttemptLimits**](../Model/AttemptLimits.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundCallabletimeset**
> \PureCloudPlatform\Client\V2\Model\CallableTimeSet putOutboundCallabletimeset($callableTimeSetId, $body)

Update callable time set



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callableTimeSetId = "callableTimeSetId_example"; // string | Callable Time Set ID
$body = new \PureCloudPlatform\Client\V2\Model\CallableTimeSet(); // \PureCloudPlatform\Client\V2\Model\CallableTimeSet | DialerCallableTimeSet

try {
    $result = $apiInstance->putOutboundCallabletimeset($callableTimeSetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundCallabletimeset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callableTimeSetId** | **string**| Callable Time Set ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CallableTimeSet**](../Model/CallableTimeSet.md)| DialerCallableTimeSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallableTimeSet**](../Model/CallableTimeSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundCallanalysisresponseset**
> \PureCloudPlatform\Client\V2\Model\ResponseSet putOutboundCallanalysisresponseset($callAnalysisSetId, $body)

Update a dialer call analysis response set.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callAnalysisSetId = "callAnalysisSetId_example"; // string | Call Analysis Response Set ID
$body = new \PureCloudPlatform\Client\V2\Model\ResponseSet(); // \PureCloudPlatform\Client\V2\Model\ResponseSet | ResponseSet

try {
    $result = $apiInstance->putOutboundCallanalysisresponseset($callAnalysisSetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundCallanalysisresponseset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callAnalysisSetId** | **string**| Call Analysis Response Set ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ResponseSet**](../Model/ResponseSet.md)| ResponseSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ResponseSet**](../Model/ResponseSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundCampaign**
> \PureCloudPlatform\Client\V2\Model\Campaign putOutboundCampaign($campaignId, $body)

Update a campaign.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID
$body = new \PureCloudPlatform\Client\V2\Model\Campaign(); // \PureCloudPlatform\Client\V2\Model\Campaign | Campaign

try {
    $result = $apiInstance->putOutboundCampaign($campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Campaign**](../Model/Campaign.md)| Campaign |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Campaign**](../Model/Campaign.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundCampaignAgent**
> string putOutboundCampaignAgent($campaignId, $userId, $body)

Send notification that an agent's state changed

New agent state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID
$userId = "userId_example"; // string | Agent's user ID
$body = new \PureCloudPlatform\Client\V2\Model\Agent(); // \PureCloudPlatform\Client\V2\Model\Agent | agent

try {
    $result = $apiInstance->putOutboundCampaignAgent($campaignId, $userId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundCampaignAgent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |
 **userId** | **string**| Agent&#39;s user ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Agent**](../Model/Agent.md)| agent |

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundCampaignrule**
> \PureCloudPlatform\Client\V2\Model\CampaignRule putOutboundCampaignrule($campaignRuleId, $body)

Update Campaign Rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignRuleId = "campaignRuleId_example"; // string | Campaign Rule ID
$body = new \PureCloudPlatform\Client\V2\Model\CampaignRule(); // \PureCloudPlatform\Client\V2\Model\CampaignRule | CampaignRule

try {
    $result = $apiInstance->putOutboundCampaignrule($campaignRuleId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundCampaignrule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignRuleId** | **string**| Campaign Rule ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CampaignRule**](../Model/CampaignRule.md)| CampaignRule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignRule**](../Model/CampaignRule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundContactlist**
> \PureCloudPlatform\Client\V2\Model\ContactList putOutboundContactlist($contactListId, $body)

Update a contact list.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | ContactList ID
$body = new \PureCloudPlatform\Client\V2\Model\ContactList(); // \PureCloudPlatform\Client\V2\Model\ContactList | ContactList

try {
    $result = $apiInstance->putOutboundContactlist($contactListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundContactlist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| ContactList ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContactList**](../Model/ContactList.md)| ContactList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactList**](../Model/ContactList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundContactlistContact**
> \PureCloudPlatform\Client\V2\Model\DialerContact putOutboundContactlistContact($contactListId, $contactId, $body)

Update a contact.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListId = "contactListId_example"; // string | Contact List ID
$contactId = "contactId_example"; // string | Contact ID
$body = new \PureCloudPlatform\Client\V2\Model\DialerContact(); // \PureCloudPlatform\Client\V2\Model\DialerContact | Contact

try {
    $result = $apiInstance->putOutboundContactlistContact($contactListId, $contactId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundContactlistContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListId** | **string**| Contact List ID |
 **contactId** | **string**| Contact ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DialerContact**](../Model/DialerContact.md)| Contact |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DialerContact**](../Model/DialerContact.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundContactlistfilter**
> \PureCloudPlatform\Client\V2\Model\ContactListFilter putOutboundContactlistfilter($contactListFilterId, $body)

Update Contact List Filter



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactListFilterId = "contactListFilterId_example"; // string | Contact List Filter ID
$body = new \PureCloudPlatform\Client\V2\Model\ContactListFilter(); // \PureCloudPlatform\Client\V2\Model\ContactListFilter | ContactListFilter

try {
    $result = $apiInstance->putOutboundContactlistfilter($contactListFilterId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundContactlistfilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactListFilterId** | **string**| Contact List Filter ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ContactListFilter**](../Model/ContactListFilter.md)| ContactListFilter |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ContactListFilter**](../Model/ContactListFilter.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundDnclist**
> \PureCloudPlatform\Client\V2\Model\DncList putOutboundDnclist($dncListId, $body)

Update dialer DNC list



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dncListId = "dncListId_example"; // string | DncList ID
$body = new \PureCloudPlatform\Client\V2\Model\DncList(); // \PureCloudPlatform\Client\V2\Model\DncList | DncList

try {
    $result = $apiInstance->putOutboundDnclist($dncListId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundDnclist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dncListId** | **string**| DncList ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DncList**](../Model/DncList.md)| DncList |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DncList**](../Model/DncList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundRuleset**
> \PureCloudPlatform\Client\V2\Model\RuleSet putOutboundRuleset($ruleSetId, $body)

Update a RuleSet.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ruleSetId = "ruleSetId_example"; // string | Rule Set ID
$body = new \PureCloudPlatform\Client\V2\Model\RuleSet(); // \PureCloudPlatform\Client\V2\Model\RuleSet | RuleSet

try {
    $result = $apiInstance->putOutboundRuleset($ruleSetId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundRuleset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruleSetId** | **string**| Rule Set ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\RuleSet**](../Model/RuleSet.md)| RuleSet |

### Return type

[**\PureCloudPlatform\Client\V2\Model\RuleSet**](../Model/RuleSet.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundSchedulesCampaign**
> \PureCloudPlatform\Client\V2\Model\CampaignSchedule putOutboundSchedulesCampaign($campaignId, $body)

Update a new campaign schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaignId = "campaignId_example"; // string | Campaign ID
$body = new \PureCloudPlatform\Client\V2\Model\CampaignSchedule(); // \PureCloudPlatform\Client\V2\Model\CampaignSchedule | CampaignSchedule

try {
    $result = $apiInstance->putOutboundSchedulesCampaign($campaignId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundSchedulesCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaignId** | **string**| Campaign ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CampaignSchedule**](../Model/CampaignSchedule.md)| CampaignSchedule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSchedule**](../Model/CampaignSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundSchedulesSequence**
> \PureCloudPlatform\Client\V2\Model\SequenceSchedule putOutboundSchedulesSequence($sequenceId, $body)

Update a new sequence schedule.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequenceId = "sequenceId_example"; // string | Sequence ID
$body = new \PureCloudPlatform\Client\V2\Model\SequenceSchedule(); // \PureCloudPlatform\Client\V2\Model\SequenceSchedule | SequenceSchedule

try {
    $result = $apiInstance->putOutboundSchedulesSequence($sequenceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundSchedulesSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequenceId** | **string**| Sequence ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SequenceSchedule**](../Model/SequenceSchedule.md)| SequenceSchedule |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SequenceSchedule**](../Model/SequenceSchedule.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundSequence**
> \PureCloudPlatform\Client\V2\Model\CampaignSequence putOutboundSequence($sequenceId, $body)

Update a new campaign sequence.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sequenceId = "sequenceId_example"; // string | Campaign Sequence ID
$body = new \PureCloudPlatform\Client\V2\Model\CampaignSequence(); // \PureCloudPlatform\Client\V2\Model\CampaignSequence | Organization

try {
    $result = $apiInstance->putOutboundSequence($sequenceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sequenceId** | **string**| Campaign Sequence ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CampaignSequence**](../Model/CampaignSequence.md)| Organization |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CampaignSequence**](../Model/CampaignSequence.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOutboundWrapupcodemappings**
> \PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping putOutboundWrapupcodemappings($body)

Update the Dialer wrap up code mapping.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\OutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping(); // \PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping | wrapUpCodeMapping

try {
    $result = $apiInstance->putOutboundWrapupcodemappings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OutboundApi->putOutboundWrapupcodemappings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping**](../Model/WrapUpCodeMapping.md)| wrapUpCodeMapping |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapUpCodeMapping**](../Model/WrapUpCodeMapping.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

