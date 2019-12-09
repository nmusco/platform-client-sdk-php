# Campaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The globally unique identifier for the object. | [optional] 
**name** | **string** | The name of the Campaign. | 
**dateCreated** | [**\DateTime**](\DateTime.md) | Creation time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**dateModified** | [**\DateTime**](\DateTime.md) | Last modified time of the entity. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ | [optional] 
**version** | **int** | Required for updates, must match the version number of the most recent update | [optional] 
**contactList** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The ContactList for this Campaign to dial. | 
**queue** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Queue for this Campaign to route calls to. Required for all dialing modes except agentless. | [optional] 
**dialingMode** | **string** | The strategy this Campaign will use for dialing. | 
**script** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The Script to be displayed to agents that are handling outbound calls. Required for all dialing modes except agentless. | [optional] 
**edgeGroup** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The EdgeGroup that will place the calls. Required for all dialing modes except preview. | [optional] 
**site** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The identifier of the site to be used for dialing; can be set in place of an edge group. | [optional] 
**campaignStatus** | **string** | The current status of the Campaign. A Campaign may be turned &#39;on&#39; or &#39;off&#39;. Required for updates. | [optional] 
**phoneColumns** | [**\PureCloudPlatform\Client\V2\Model\PhoneColumn[]**](PhoneColumn.md) | The ContactPhoneNumberColumns on the ContactList that this Campaign should dial. | 
**abandonRate** | **double** | The targeted abandon rate percentage. Required for progressive, power, and predictive campaigns. | [optional] 
**dncLists** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | DncLists for this Campaign to check before placing a call. | [optional] 
**callableTimeSet** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The callable time set for this campaign to check before placing a call. | [optional] 
**callAnalysisResponseSet** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The call analysis response set to handle call analysis results from the edge. Required for all dialing modes except preview. | [optional] 
**errors** | [**\PureCloudPlatform\Client\V2\Model\RestErrorDetail[]**](RestErrorDetail.md) | A list of current error conditions associated with the campaign. | [optional] 
**callerName** | **string** | The caller id name to be displayed on the outbound call. | 
**callerAddress** | **string** | The caller id phone number to be displayed on the outbound call. | 
**outboundLineCount** | **int** | The number of outbound lines to be concurrently dialed. Only applicable to non-preview campaigns; only required for agentless. | [optional] 
**ruleSets** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | Rule sets to be applied while this campaign is dialing. | [optional] 
**skipPreviewDisabled** | **bool** | Whether or not agents can skip previews without placing a call. Only applicable for preview campaigns. | [optional] 
**previewTimeOutSeconds** | **int** | The number of seconds before a call will be automatically placed on a preview. A value of 0 indicates no automatic placement of calls. Only applicable to preview campaigns. | [optional] 
**alwaysRunning** | **bool** | Indicates (when true) that the campaign will remain on after contacts are depleted, allowing additional contacts to be appended/added to the contact list and processed by the still-running campaign. The campaign can still be turned off manually. | [optional] 
**contactSort** | [**\PureCloudPlatform\Client\V2\Model\ContactSort**](ContactSort.md) | The order in which to sort contacts for dialing, based on a column. | [optional] 
**contactSorts** | [**\PureCloudPlatform\Client\V2\Model\ContactSort[]**](ContactSort.md) | The order in which to sort contacts for dialing, based on up to four columns. | [optional] 
**noAnswerTimeout** | **int** | How long to wait before dispositioning a call as &#39;no-answer&#39;. Default 30 seconds. Only applicable to non-preview campaigns. | [optional] 
**callAnalysisLanguage** | **string** | The language the edge will use to analyze the call. | [optional] 
**priority** | **int** | The priority of this campaign relative to other campaigns that are running on the same queue. 5 is the highest priority, 1 the lowest. | [optional] 
**contactListFilters** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]**](DomainEntityRef.md) | Filter to apply to the contact list before dialing. Currently a campaign can only have one filter applied. | [optional] 
**division** | [**\PureCloudPlatform\Client\V2\Model\DomainEntityRef**](DomainEntityRef.md) | The division this campaign belongs to. | [optional] 
**selfUri** | **string** | The URI for this object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


