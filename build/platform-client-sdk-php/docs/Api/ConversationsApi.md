# PureCloudPlatform\Client\V2\ConversationsApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAnalyticsConversationsDetailsJob**](ConversationsApi.md#deleteAnalyticsConversationsDetailsJob) | **DELETE** /api/v2/analytics/conversations/details/jobs/{jobId} | Delete/cancel an async request
[**deleteConversationParticipantCode**](ConversationsApi.md#deleteConversationParticipantCode) | **DELETE** /api/v2/conversations/{conversationId}/participants/{participantId}/codes/{addCommunicationCode} | Delete a code used to add a communication to this participant
[**deleteConversationParticipantFlaggedreason**](ConversationsApi.md#deleteConversationParticipantFlaggedreason) | **DELETE** /api/v2/conversations/{conversationId}/participants/{participantId}/flaggedreason | Remove flagged reason from conversation participant.
[**deleteConversationsCallParticipantConsult**](ConversationsApi.md#deleteConversationsCallParticipantConsult) | **DELETE** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/consult | Cancel the transfer
[**deleteConversationsEmailMessagesDraftAttachment**](ConversationsApi.md#deleteConversationsEmailMessagesDraftAttachment) | **DELETE** /api/v2/conversations/emails/{conversationId}/messages/draft/attachments/{attachmentId} | Delete attachment from draft
[**deleteConversationsMessagingIntegrationsFacebookIntegrationId**](ConversationsApi.md#deleteConversationsMessagingIntegrationsFacebookIntegrationId) | **DELETE** /api/v2/conversations/messaging/integrations/facebook/{integrationId} | Delete a Facebook messaging integration
[**deleteConversationsMessagingIntegrationsLineIntegrationId**](ConversationsApi.md#deleteConversationsMessagingIntegrationsLineIntegrationId) | **DELETE** /api/v2/conversations/messaging/integrations/line/{integrationId} | Delete a LINE messenger integration
[**deleteConversationsMessagingIntegrationsTwitterIntegrationId**](ConversationsApi.md#deleteConversationsMessagingIntegrationsTwitterIntegrationId) | **DELETE** /api/v2/conversations/messaging/integrations/twitter/{integrationId} | Delete a Twitter messaging integration
[**getAnalyticsConversationDetails**](ConversationsApi.md#getAnalyticsConversationDetails) | **GET** /api/v2/analytics/conversations/{conversationId}/details | Get a conversation by id
[**getAnalyticsConversationsDetails**](ConversationsApi.md#getAnalyticsConversationsDetails) | **GET** /api/v2/analytics/conversations/details | Gets multiple conversations by id
[**getAnalyticsConversationsDetailsJob**](ConversationsApi.md#getAnalyticsConversationsDetailsJob) | **GET** /api/v2/analytics/conversations/details/jobs/{jobId} | Get status for async query for conversation details
[**getAnalyticsConversationsDetailsJobResults**](ConversationsApi.md#getAnalyticsConversationsDetailsJobResults) | **GET** /api/v2/analytics/conversations/details/jobs/{jobId}/results | Fetch a page of results for an async query
[**getConversation**](ConversationsApi.md#getConversation) | **GET** /api/v2/conversations/{conversationId} | Get conversation
[**getConversationParticipantSecureivrsession**](ConversationsApi.md#getConversationParticipantSecureivrsession) | **GET** /api/v2/conversations/{conversationId}/participants/{participantId}/secureivrsessions/{secureSessionId} | Fetch info on a secure session
[**getConversationParticipantSecureivrsessions**](ConversationsApi.md#getConversationParticipantSecureivrsessions) | **GET** /api/v2/conversations/{conversationId}/participants/{participantId}/secureivrsessions | Get a list of secure sessions for this participant.
[**getConversationParticipantWrapup**](ConversationsApi.md#getConversationParticipantWrapup) | **GET** /api/v2/conversations/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationParticipantWrapupcodes**](ConversationsApi.md#getConversationParticipantWrapupcodes) | **GET** /api/v2/conversations/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversations**](ConversationsApi.md#getConversations) | **GET** /api/v2/conversations | Get active conversations for the logged in user
[**getConversationsCall**](ConversationsApi.md#getConversationsCall) | **GET** /api/v2/conversations/calls/{conversationId} | Get call conversation
[**getConversationsCallParticipantWrapup**](ConversationsApi.md#getConversationsCallParticipantWrapup) | **GET** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationsCallParticipantWrapupcodes**](ConversationsApi.md#getConversationsCallParticipantWrapupcodes) | **GET** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversationsCallback**](ConversationsApi.md#getConversationsCallback) | **GET** /api/v2/conversations/callbacks/{conversationId} | Get callback conversation
[**getConversationsCallbackParticipantWrapup**](ConversationsApi.md#getConversationsCallbackParticipantWrapup) | **GET** /api/v2/conversations/callbacks/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationsCallbackParticipantWrapupcodes**](ConversationsApi.md#getConversationsCallbackParticipantWrapupcodes) | **GET** /api/v2/conversations/callbacks/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversationsCallbacks**](ConversationsApi.md#getConversationsCallbacks) | **GET** /api/v2/conversations/callbacks | Get active callback conversations for the logged in user
[**getConversationsCalls**](ConversationsApi.md#getConversationsCalls) | **GET** /api/v2/conversations/calls | Get active call conversations for the logged in user
[**getConversationsCallsHistory**](ConversationsApi.md#getConversationsCallsHistory) | **GET** /api/v2/conversations/calls/history | Get call history
[**getConversationsCallsMaximumconferenceparties**](ConversationsApi.md#getConversationsCallsMaximumconferenceparties) | **GET** /api/v2/conversations/calls/maximumconferenceparties | Get the maximum number of participants that this user can have on a conference
[**getConversationsChat**](ConversationsApi.md#getConversationsChat) | **GET** /api/v2/conversations/chats/{conversationId} | Get chat conversation
[**getConversationsChatMessage**](ConversationsApi.md#getConversationsChatMessage) | **GET** /api/v2/conversations/chats/{conversationId}/messages/{messageId} | Get a web chat conversation message
[**getConversationsChatMessages**](ConversationsApi.md#getConversationsChatMessages) | **GET** /api/v2/conversations/chats/{conversationId}/messages | Get the messages of a chat conversation.
[**getConversationsChatParticipantWrapup**](ConversationsApi.md#getConversationsChatParticipantWrapup) | **GET** /api/v2/conversations/chats/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationsChatParticipantWrapupcodes**](ConversationsApi.md#getConversationsChatParticipantWrapupcodes) | **GET** /api/v2/conversations/chats/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversationsChats**](ConversationsApi.md#getConversationsChats) | **GET** /api/v2/conversations/chats | Get active chat conversations for the logged in user
[**getConversationsCobrowsesession**](ConversationsApi.md#getConversationsCobrowsesession) | **GET** /api/v2/conversations/cobrowsesessions/{conversationId} | Get cobrowse conversation
[**getConversationsCobrowsesessionParticipantWrapup**](ConversationsApi.md#getConversationsCobrowsesessionParticipantWrapup) | **GET** /api/v2/conversations/cobrowsesessions/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationsCobrowsesessionParticipantWrapupcodes**](ConversationsApi.md#getConversationsCobrowsesessionParticipantWrapupcodes) | **GET** /api/v2/conversations/cobrowsesessions/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversationsCobrowsesessions**](ConversationsApi.md#getConversationsCobrowsesessions) | **GET** /api/v2/conversations/cobrowsesessions | Get active cobrowse conversations for the logged in user
[**getConversationsEmail**](ConversationsApi.md#getConversationsEmail) | **GET** /api/v2/conversations/emails/{conversationId} | Get email conversation
[**getConversationsEmailMessage**](ConversationsApi.md#getConversationsEmailMessage) | **GET** /api/v2/conversations/emails/{conversationId}/messages/{messageId} | Get conversation message
[**getConversationsEmailMessages**](ConversationsApi.md#getConversationsEmailMessages) | **GET** /api/v2/conversations/emails/{conversationId}/messages | Get conversation messages
[**getConversationsEmailMessagesDraft**](ConversationsApi.md#getConversationsEmailMessagesDraft) | **GET** /api/v2/conversations/emails/{conversationId}/messages/draft | Get conversation draft reply
[**getConversationsEmailParticipantWrapup**](ConversationsApi.md#getConversationsEmailParticipantWrapup) | **GET** /api/v2/conversations/emails/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationsEmailParticipantWrapupcodes**](ConversationsApi.md#getConversationsEmailParticipantWrapupcodes) | **GET** /api/v2/conversations/emails/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversationsEmails**](ConversationsApi.md#getConversationsEmails) | **GET** /api/v2/conversations/emails | Get active email conversations for the logged in user
[**getConversationsMessage**](ConversationsApi.md#getConversationsMessage) | **GET** /api/v2/conversations/messages/{conversationId} | Get message conversation
[**getConversationsMessageCommunicationMessagesMediaMediaId**](ConversationsApi.md#getConversationsMessageCommunicationMessagesMediaMediaId) | **GET** /api/v2/conversations/messages/{conversationId}/communications/{communicationId}/messages/media/{mediaId} | Get media
[**getConversationsMessageMessage**](ConversationsApi.md#getConversationsMessageMessage) | **GET** /api/v2/conversations/messages/{conversationId}/messages/{messageId} | Get message
[**getConversationsMessageParticipantWrapup**](ConversationsApi.md#getConversationsMessageParticipantWrapup) | **GET** /api/v2/conversations/messages/{conversationId}/participants/{participantId}/wrapup | Get the wrap-up for this conversation participant.
[**getConversationsMessageParticipantWrapupcodes**](ConversationsApi.md#getConversationsMessageParticipantWrapupcodes) | **GET** /api/v2/conversations/messages/{conversationId}/participants/{participantId}/wrapupcodes | Get list of wrapup codes for this conversation participant
[**getConversationsMessages**](ConversationsApi.md#getConversationsMessages) | **GET** /api/v2/conversations/messages | Get active message conversations for the logged in user
[**getConversationsMessagingIntegrations**](ConversationsApi.md#getConversationsMessagingIntegrations) | **GET** /api/v2/conversations/messaging/integrations | Get a list of Integrations
[**getConversationsMessagingIntegrationsFacebook**](ConversationsApi.md#getConversationsMessagingIntegrationsFacebook) | **GET** /api/v2/conversations/messaging/integrations/facebook | Get a list of Facebook Integrations
[**getConversationsMessagingIntegrationsFacebookIntegrationId**](ConversationsApi.md#getConversationsMessagingIntegrationsFacebookIntegrationId) | **GET** /api/v2/conversations/messaging/integrations/facebook/{integrationId} | Get a Facebook messaging integration
[**getConversationsMessagingIntegrationsLine**](ConversationsApi.md#getConversationsMessagingIntegrationsLine) | **GET** /api/v2/conversations/messaging/integrations/line | Get a list of LINE messenger Integrations
[**getConversationsMessagingIntegrationsLineIntegrationId**](ConversationsApi.md#getConversationsMessagingIntegrationsLineIntegrationId) | **GET** /api/v2/conversations/messaging/integrations/line/{integrationId} | Get a LINE messenger integration
[**getConversationsMessagingIntegrationsTwitter**](ConversationsApi.md#getConversationsMessagingIntegrationsTwitter) | **GET** /api/v2/conversations/messaging/integrations/twitter | Get a list of Twitter Integrations
[**getConversationsMessagingIntegrationsTwitterIntegrationId**](ConversationsApi.md#getConversationsMessagingIntegrationsTwitterIntegrationId) | **GET** /api/v2/conversations/messaging/integrations/twitter/{integrationId} | Get a Twitter messaging integration
[**getConversationsMessagingIntegrationsWhatsapp**](ConversationsApi.md#getConversationsMessagingIntegrationsWhatsapp) | **GET** /api/v2/conversations/messaging/integrations/whatsapp | Get a list of WhatsApp Integrations
[**getConversationsMessagingIntegrationsWhatsappIntegrationId**](ConversationsApi.md#getConversationsMessagingIntegrationsWhatsappIntegrationId) | **GET** /api/v2/conversations/messaging/integrations/whatsapp/{integrationId} | Get a WhatsApp messaging integration
[**getConversationsMessagingSticker**](ConversationsApi.md#getConversationsMessagingSticker) | **GET** /api/v2/conversations/messaging/stickers/{messengerType} | Get a list of Messaging Stickers
[**patchConversationParticipant**](ConversationsApi.md#patchConversationParticipant) | **PATCH** /api/v2/conversations/{conversationId}/participants/{participantId} | Update a participant.
[**patchConversationParticipantAttributes**](ConversationsApi.md#patchConversationParticipantAttributes) | **PATCH** /api/v2/conversations/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsCall**](ConversationsApi.md#patchConversationsCall) | **PATCH** /api/v2/conversations/calls/{conversationId} | Update a conversation by setting it&#39;s recording state, merging in other conversations to create a conference, or disconnecting all of the participants
[**patchConversationsCallParticipant**](ConversationsApi.md#patchConversationsCallParticipant) | **PATCH** /api/v2/conversations/calls/{conversationId}/participants/{participantId} | Update conversation participant
[**patchConversationsCallParticipantAttributes**](ConversationsApi.md#patchConversationsCallParticipantAttributes) | **PATCH** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsCallParticipantCommunication**](ConversationsApi.md#patchConversationsCallParticipantCommunication) | **PATCH** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/communications/{communicationId} | Update conversation participant&#39;s communication by disconnecting it.
[**patchConversationsCallParticipantConsult**](ConversationsApi.md#patchConversationsCallParticipantConsult) | **PATCH** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/consult | Change who can speak
[**patchConversationsCallback**](ConversationsApi.md#patchConversationsCallback) | **PATCH** /api/v2/conversations/callbacks/{conversationId} | Update a conversation by disconnecting all of the participants
[**patchConversationsCallbackParticipant**](ConversationsApi.md#patchConversationsCallbackParticipant) | **PATCH** /api/v2/conversations/callbacks/{conversationId}/participants/{participantId} | Update conversation participant
[**patchConversationsCallbackParticipantAttributes**](ConversationsApi.md#patchConversationsCallbackParticipantAttributes) | **PATCH** /api/v2/conversations/callbacks/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsCallbackParticipantCommunication**](ConversationsApi.md#patchConversationsCallbackParticipantCommunication) | **PATCH** /api/v2/conversations/callbacks/{conversationId}/participants/{participantId}/communications/{communicationId} | Update conversation participant&#39;s communication by disconnecting it.
[**patchConversationsChat**](ConversationsApi.md#patchConversationsChat) | **PATCH** /api/v2/conversations/chats/{conversationId} | Update a conversation by disconnecting all of the participants
[**patchConversationsChatParticipant**](ConversationsApi.md#patchConversationsChatParticipant) | **PATCH** /api/v2/conversations/chats/{conversationId}/participants/{participantId} | Update conversation participant
[**patchConversationsChatParticipantAttributes**](ConversationsApi.md#patchConversationsChatParticipantAttributes) | **PATCH** /api/v2/conversations/chats/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsChatParticipantCommunication**](ConversationsApi.md#patchConversationsChatParticipantCommunication) | **PATCH** /api/v2/conversations/chats/{conversationId}/participants/{participantId}/communications/{communicationId} | Update conversation participant&#39;s communication by disconnecting it.
[**patchConversationsCobrowsesession**](ConversationsApi.md#patchConversationsCobrowsesession) | **PATCH** /api/v2/conversations/cobrowsesessions/{conversationId} | Update a conversation by disconnecting all of the participants
[**patchConversationsCobrowsesessionParticipant**](ConversationsApi.md#patchConversationsCobrowsesessionParticipant) | **PATCH** /api/v2/conversations/cobrowsesessions/{conversationId}/participants/{participantId} | Update conversation participant
[**patchConversationsCobrowsesessionParticipantAttributes**](ConversationsApi.md#patchConversationsCobrowsesessionParticipantAttributes) | **PATCH** /api/v2/conversations/cobrowsesessions/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsCobrowsesessionParticipantCommunication**](ConversationsApi.md#patchConversationsCobrowsesessionParticipantCommunication) | **PATCH** /api/v2/conversations/cobrowsesessions/{conversationId}/participants/{participantId}/communications/{communicationId} | Update conversation participant&#39;s communication by disconnecting it.
[**patchConversationsEmail**](ConversationsApi.md#patchConversationsEmail) | **PATCH** /api/v2/conversations/emails/{conversationId} | Update a conversation by disconnecting all of the participants
[**patchConversationsEmailParticipant**](ConversationsApi.md#patchConversationsEmailParticipant) | **PATCH** /api/v2/conversations/emails/{conversationId}/participants/{participantId} | Update conversation participant
[**patchConversationsEmailParticipantAttributes**](ConversationsApi.md#patchConversationsEmailParticipantAttributes) | **PATCH** /api/v2/conversations/emails/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsEmailParticipantCommunication**](ConversationsApi.md#patchConversationsEmailParticipantCommunication) | **PATCH** /api/v2/conversations/emails/{conversationId}/participants/{participantId}/communications/{communicationId} | Update conversation participant&#39;s communication by disconnecting it.
[**patchConversationsMessage**](ConversationsApi.md#patchConversationsMessage) | **PATCH** /api/v2/conversations/messages/{conversationId} | Update a conversation by disconnecting all of the participants
[**patchConversationsMessageParticipant**](ConversationsApi.md#patchConversationsMessageParticipant) | **PATCH** /api/v2/conversations/messages/{conversationId}/participants/{participantId} | Update conversation participant
[**patchConversationsMessageParticipantAttributes**](ConversationsApi.md#patchConversationsMessageParticipantAttributes) | **PATCH** /api/v2/conversations/messages/{conversationId}/participants/{participantId}/attributes | Update the attributes on a conversation participant.
[**patchConversationsMessageParticipantCommunication**](ConversationsApi.md#patchConversationsMessageParticipantCommunication) | **PATCH** /api/v2/conversations/messages/{conversationId}/participants/{participantId}/communications/{communicationId} | Update conversation participant&#39;s communication by disconnecting it.
[**patchConversationsMessagingIntegrationsWhatsappIntegrationId**](ConversationsApi.md#patchConversationsMessagingIntegrationsWhatsappIntegrationId) | **PATCH** /api/v2/conversations/messaging/integrations/whatsapp/{integrationId} | Activate a WhatsApp messaging integration.
[**postAnalyticsConversationDetailsProperties**](ConversationsApi.md#postAnalyticsConversationDetailsProperties) | **POST** /api/v2/analytics/conversations/{conversationId}/details/properties | Index conversation properties
[**postAnalyticsConversationsAggregatesQuery**](ConversationsApi.md#postAnalyticsConversationsAggregatesQuery) | **POST** /api/v2/analytics/conversations/aggregates/query | Query for conversation aggregates
[**postAnalyticsConversationsDetailsJobs**](ConversationsApi.md#postAnalyticsConversationsDetailsJobs) | **POST** /api/v2/analytics/conversations/details/jobs | Query for conversation details asynchronously
[**postAnalyticsConversationsDetailsQuery**](ConversationsApi.md#postAnalyticsConversationsDetailsQuery) | **POST** /api/v2/analytics/conversations/details/query | Query for conversation details
[**postConversationDisconnect**](ConversationsApi.md#postConversationDisconnect) | **POST** /api/v2/conversations/{conversationId}/disconnect | Performs a full conversation teardown. Issues disconnect requests for any connected media. Applies a system wrap-up code to any participants that are pending wrap-up. This is not intended to be the normal way of ending interactions but is available in the event of problems with the application to allow a resyncronization of state across all components. It is recommended that users submit a support case if they are relying on this endpoint systematically as there is likely something that needs investigation.
[**postConversationParticipantCallbacks**](ConversationsApi.md#postConversationParticipantCallbacks) | **POST** /api/v2/conversations/{conversationId}/participants/{participantId}/callbacks | Create a new callback for the specified participant on the conversation.
[**postConversationParticipantDigits**](ConversationsApi.md#postConversationParticipantDigits) | **POST** /api/v2/conversations/{conversationId}/participants/{participantId}/digits | Sends DTMF to the participant
[**postConversationParticipantReplace**](ConversationsApi.md#postConversationParticipantReplace) | **POST** /api/v2/conversations/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationParticipantSecureivrsessions**](ConversationsApi.md#postConversationParticipantSecureivrsessions) | **POST** /api/v2/conversations/{conversationId}/participants/{participantId}/secureivrsessions | Create secure IVR session. Only a participant in the conversation can invoke a secure IVR.
[**postConversationsCall**](ConversationsApi.md#postConversationsCall) | **POST** /api/v2/conversations/calls/{conversationId} | Place a new call as part of a callback conversation.
[**postConversationsCallParticipantConsult**](ConversationsApi.md#postConversationsCallParticipantConsult) | **POST** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/consult | Initiate and update consult transfer
[**postConversationsCallParticipantMonitor**](ConversationsApi.md#postConversationsCallParticipantMonitor) | **POST** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/monitor | Listen in on the conversation from the point of view of a given participant.
[**postConversationsCallParticipantReplace**](ConversationsApi.md#postConversationsCallParticipantReplace) | **POST** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationsCallParticipants**](ConversationsApi.md#postConversationsCallParticipants) | **POST** /api/v2/conversations/calls/{conversationId}/participants | Add participants to a conversation
[**postConversationsCallbackParticipantReplace**](ConversationsApi.md#postConversationsCallbackParticipantReplace) | **POST** /api/v2/conversations/callbacks/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationsCallbacks**](ConversationsApi.md#postConversationsCallbacks) | **POST** /api/v2/conversations/callbacks | Create a Callback
[**postConversationsCalls**](ConversationsApi.md#postConversationsCalls) | **POST** /api/v2/conversations/calls | Create a call conversation
[**postConversationsChatCommunicationMessages**](ConversationsApi.md#postConversationsChatCommunicationMessages) | **POST** /api/v2/conversations/chats/{conversationId}/communications/{communicationId}/messages | Send a message on behalf of a communication in a chat conversation.
[**postConversationsChatCommunicationTyping**](ConversationsApi.md#postConversationsChatCommunicationTyping) | **POST** /api/v2/conversations/chats/{conversationId}/communications/{communicationId}/typing | Send a typing-indicator on behalf of a communication in a chat conversation.
[**postConversationsChatParticipantReplace**](ConversationsApi.md#postConversationsChatParticipantReplace) | **POST** /api/v2/conversations/chats/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationsChats**](ConversationsApi.md#postConversationsChats) | **POST** /api/v2/conversations/chats | Create a web chat conversation
[**postConversationsCobrowsesessionParticipantReplace**](ConversationsApi.md#postConversationsCobrowsesessionParticipantReplace) | **POST** /api/v2/conversations/cobrowsesessions/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationsEmailInboundmessages**](ConversationsApi.md#postConversationsEmailInboundmessages) | **POST** /api/v2/conversations/emails/{conversationId}/inboundmessages | Send an email to an external conversation. An external conversation is one where the provider is not PureCloud based. This endpoint allows the sender of the external email to reply or send a new message to the existing conversation. The new message will be treated as part of the existing conversation and chained to it.
[**postConversationsEmailMessages**](ConversationsApi.md#postConversationsEmailMessages) | **POST** /api/v2/conversations/emails/{conversationId}/messages | Send an email reply
[**postConversationsEmailParticipantReplace**](ConversationsApi.md#postConversationsEmailParticipantReplace) | **POST** /api/v2/conversations/emails/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationsEmails**](ConversationsApi.md#postConversationsEmails) | **POST** /api/v2/conversations/emails | Create an email conversation
[**postConversationsFaxes**](ConversationsApi.md#postConversationsFaxes) | **POST** /api/v2/conversations/faxes | Create Fax Conversation
[**postConversationsMessageCommunicationMessages**](ConversationsApi.md#postConversationsMessageCommunicationMessages) | **POST** /api/v2/conversations/messages/{conversationId}/communications/{communicationId}/messages | Send message
[**postConversationsMessageCommunicationMessagesMedia**](ConversationsApi.md#postConversationsMessageCommunicationMessagesMedia) | **POST** /api/v2/conversations/messages/{conversationId}/communications/{communicationId}/messages/media | Create media
[**postConversationsMessageMessagesBulk**](ConversationsApi.md#postConversationsMessageMessagesBulk) | **POST** /api/v2/conversations/messages/{conversationId}/messages/bulk | Get messages in batch
[**postConversationsMessageParticipantReplace**](ConversationsApi.md#postConversationsMessageParticipantReplace) | **POST** /api/v2/conversations/messages/{conversationId}/participants/{participantId}/replace | Replace this participant with the specified user and/or address
[**postConversationsMessages**](ConversationsApi.md#postConversationsMessages) | **POST** /api/v2/conversations/messages | Create an outbound messaging conversation.
[**postConversationsMessagingIntegrationsFacebook**](ConversationsApi.md#postConversationsMessagingIntegrationsFacebook) | **POST** /api/v2/conversations/messaging/integrations/facebook | Create a Facebook Integration
[**postConversationsMessagingIntegrationsLine**](ConversationsApi.md#postConversationsMessagingIntegrationsLine) | **POST** /api/v2/conversations/messaging/integrations/line | Create a LINE messenger Integration
[**postConversationsMessagingIntegrationsTwitter**](ConversationsApi.md#postConversationsMessagingIntegrationsTwitter) | **POST** /api/v2/conversations/messaging/integrations/twitter | Create a Twitter Integration
[**putConversationParticipantFlaggedreason**](ConversationsApi.md#putConversationParticipantFlaggedreason) | **PUT** /api/v2/conversations/{conversationId}/participants/{participantId}/flaggedreason | Set flagged reason on conversation participant to indicate bad conversation quality.
[**putConversationsCallParticipantCommunicationUuidata**](ConversationsApi.md#putConversationsCallParticipantCommunicationUuidata) | **PUT** /api/v2/conversations/calls/{conversationId}/participants/{participantId}/communications/{communicationId}/uuidata | Set uuiData to be sent on future commands.
[**putConversationsEmailMessagesDraft**](ConversationsApi.md#putConversationsEmailMessagesDraft) | **PUT** /api/v2/conversations/emails/{conversationId}/messages/draft | Update conversation draft reply
[**putConversationsMessagingIntegrationsLineIntegrationId**](ConversationsApi.md#putConversationsMessagingIntegrationsLineIntegrationId) | **PUT** /api/v2/conversations/messaging/integrations/line/{integrationId} | Update a LINE messenger integration


# **deleteAnalyticsConversationsDetailsJob**
> deleteAnalyticsConversationsDetailsJob($jobId)

Delete/cancel an async request



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $apiInstance->deleteAnalyticsConversationsDetailsJob($jobId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteAnalyticsConversationsDetailsJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationParticipantCode**
> deleteConversationParticipantCode($conversationId, $participantId, $addCommunicationCode)

Delete a code used to add a communication to this participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$addCommunicationCode = "addCommunicationCode_example"; // string | addCommunicationCode

try {
    $apiInstance->deleteConversationParticipantCode($conversationId, $participantId, $addCommunicationCode);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationParticipantCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **addCommunicationCode** | **string**| addCommunicationCode |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationParticipantFlaggedreason**
> deleteConversationParticipantFlaggedreason($conversationId, $participantId)

Remove flagged reason from conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID

try {
    $apiInstance->deleteConversationParticipantFlaggedreason($conversationId, $participantId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationParticipantFlaggedreason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationsCallParticipantConsult**
> deleteConversationsCallParticipantConsult($conversationId, $participantId)

Cancel the transfer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $apiInstance->deleteConversationsCallParticipantConsult($conversationId, $participantId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationsCallParticipantConsult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationsEmailMessagesDraftAttachment**
> deleteConversationsEmailMessagesDraftAttachment($conversationId, $attachmentId)

Delete attachment from draft



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$attachmentId = "attachmentId_example"; // string | attachmentId

try {
    $apiInstance->deleteConversationsEmailMessagesDraftAttachment($conversationId, $attachmentId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationsEmailMessagesDraftAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **attachmentId** | **string**| attachmentId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationsMessagingIntegrationsFacebookIntegrationId**
> deleteConversationsMessagingIntegrationsFacebookIntegrationId($integrationId)

Delete a Facebook messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $apiInstance->deleteConversationsMessagingIntegrationsFacebookIntegrationId($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationsMessagingIntegrationsFacebookIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationsMessagingIntegrationsLineIntegrationId**
> deleteConversationsMessagingIntegrationsLineIntegrationId($integrationId)

Delete a LINE messenger integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $apiInstance->deleteConversationsMessagingIntegrationsLineIntegrationId($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationsMessagingIntegrationsLineIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteConversationsMessagingIntegrationsTwitterIntegrationId**
> deleteConversationsMessagingIntegrationsTwitterIntegrationId($integrationId)

Delete a Twitter messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $apiInstance->deleteConversationsMessagingIntegrationsTwitterIntegrationId($integrationId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->deleteConversationsMessagingIntegrationsTwitterIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationDetails**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversation getAnalyticsConversationDetails($conversationId)

Get a conversation by id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getAnalyticsConversationDetails($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getAnalyticsConversationDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversation**](../Model/AnalyticsConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationsDetails**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversationMultiGetResponse getAnalyticsConversationsDetails($id)

Gets multiple conversations by id



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array("id_example"); // string[] | Comma-separated conversation ids

try {
    $result = $apiInstance->getAnalyticsConversationsDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getAnalyticsConversationsDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string[]**](../Model/string.md)| Comma-separated conversation ids | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversationMultiGetResponse**](../Model/AnalyticsConversationMultiGetResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationsDetailsJob**
> \PureCloudPlatform\Client\V2\Model\AsyncQueryStatus getAnalyticsConversationsDetailsJob($jobId)

Get status for async query for conversation details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId

try {
    $result = $apiInstance->getAnalyticsConversationsDetailsJob($jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getAnalyticsConversationsDetailsJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncQueryStatus**](../Model/AsyncQueryStatus.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnalyticsConversationsDetailsJobResults**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversationAsyncQueryResponse getAnalyticsConversationsDetailsJobResults($jobId, $cursor)

Fetch a page of results for an async query



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobId = "jobId_example"; // string | jobId
$cursor = "cursor_example"; // string | Indicates where to resume query results (not required for first page)

try {
    $result = $apiInstance->getAnalyticsConversationsDetailsJobResults($jobId, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getAnalyticsConversationsDetailsJobResults: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobId** | **string**| jobId |
 **cursor** | **string**| Indicates where to resume query results (not required for first page) | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversationAsyncQueryResponse**](../Model/AnalyticsConversationAsyncQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversation**
> \PureCloudPlatform\Client\V2\Model\Conversation getConversation($conversationId)

Get conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID

try {
    $result = $apiInstance->getConversation($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationParticipantSecureivrsession**
> \PureCloudPlatform\Client\V2\Model\SecureSession getConversationParticipantSecureivrsession($conversationId, $participantId, $secureSessionId)

Fetch info on a secure session



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$secureSessionId = "secureSessionId_example"; // string | secure IVR session ID

try {
    $result = $apiInstance->getConversationParticipantSecureivrsession($conversationId, $participantId, $secureSessionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationParticipantSecureivrsession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **secureSessionId** | **string**| secure IVR session ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SecureSession**](../Model/SecureSession.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationParticipantSecureivrsessions**
> \PureCloudPlatform\Client\V2\Model\SecureSessionEntityListing getConversationParticipantSecureivrsessions($conversationId, $participantId)

Get a list of secure sessions for this participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID

try {
    $result = $apiInstance->getConversationParticipantSecureivrsessions($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationParticipantSecureivrsessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\SecureSessionEntityListing**](../Model/SecureSessionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID

try {
    $result = $apiInstance->getConversationParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversations**
> \PureCloudPlatform\Client\V2\Model\ConversationEntityListing getConversations($communicationType)

Get active conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communicationType = "communicationType_example"; // string | Call or Chat communication filtering

try {
    $result = $apiInstance->getConversations($communicationType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communicationType** | **string**| Call or Chat communication filtering | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConversationEntityListing**](../Model/ConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCall**
> \PureCloudPlatform\Client\V2\Model\CallConversation getConversationsCall($conversationId)

Get call conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsCall($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallConversation**](../Model/CallConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationsCallParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationsCallParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationsCallParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $result = $apiInstance->getConversationsCallParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallback**
> \PureCloudPlatform\Client\V2\Model\CallbackConversation getConversationsCallback($conversationId)

Get callback conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsCallback($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallbackConversation**](../Model/CallbackConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallbackParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationsCallbackParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationsCallbackParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallbackParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallbackParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationsCallbackParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $result = $apiInstance->getConversationsCallbackParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallbackParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallbacks**
> \PureCloudPlatform\Client\V2\Model\CallbackConversationEntityListing getConversationsCallbacks()

Get active callback conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsCallbacks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallbacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallbackConversationEntityListing**](../Model/CallbackConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCalls**
> \PureCloudPlatform\Client\V2\Model\CallConversationEntityListing getConversationsCalls()

Get active call conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsCalls();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallConversationEntityListing**](../Model/CallConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallsHistory**
> \PureCloudPlatform\Client\V2\Model\CallHistoryConversationEntityListing getConversationsCallsHistory($pageSize, $pageNumber, $interval, $expand)

Get call history



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size, maximum 50
$pageNumber = 1; // int | Page number
$interval = "interval_example"; // string | Interval string; format is ISO-8601. Separate start and end times with forward slash '/'
$expand = array("expand_example"); // string[] | Which fields, if any, to expand.

try {
    $result = $apiInstance->getConversationsCallsHistory($pageSize, $pageNumber, $interval, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size, maximum 50 | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **interval** | **string**| Interval string; format is ISO-8601. Separate start and end times with forward slash &#39;/&#39; | [optional]
 **expand** | [**string[]**](../Model/string.md)| Which fields, if any, to expand. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\CallHistoryConversationEntityListing**](../Model/CallHistoryConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCallsMaximumconferenceparties**
> \PureCloudPlatform\Client\V2\Model\MaxParticipants getConversationsCallsMaximumconferenceparties()

Get the maximum number of participants that this user can have on a conference



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsCallsMaximumconferenceparties();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCallsMaximumconferenceparties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\MaxParticipants**](../Model/MaxParticipants.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsChat**
> \PureCloudPlatform\Client\V2\Model\ChatConversation getConversationsChat($conversationId)

Get chat conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsChat($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChatConversation**](../Model/ChatConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsChatMessage**
> \PureCloudPlatform\Client\V2\Model\WebChatMessage getConversationsChatMessage($conversationId, $messageId)

Get a web chat conversation message

The current user must be involved with the conversation to get its messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$messageId = "messageId_example"; // string | messageId

try {
    $result = $apiInstance->getConversationsChatMessage($conversationId, $messageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsChatMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **messageId** | **string**| messageId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMessage**](../Model/WebChatMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsChatMessages**
> \PureCloudPlatform\Client\V2\Model\WebChatMessageEntityList getConversationsChatMessages($conversationId, $after, $before, $sortOrder, $maxResults)

Get the messages of a chat conversation.

The current user must be involved with the conversation to get its messages.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$after = "after_example"; // string | If specified, get the messages chronologically after the id of this message
$before = "before_example"; // string | If specified, get the messages chronologically before the id of this message
$sortOrder = "ascending"; // string | Sort order
$maxResults = 100; // int | Limit the returned number of messages, up to a maximum of 100

try {
    $result = $apiInstance->getConversationsChatMessages($conversationId, $after, $before, $sortOrder, $maxResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsChatMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **after** | **string**| If specified, get the messages chronologically after the id of this message | [optional]
 **before** | **string**| If specified, get the messages chronologically before the id of this message | [optional]
 **sortOrder** | **string**| Sort order | [optional] [default to ascending]
 **maxResults** | **int**| Limit the returned number of messages, up to a maximum of 100 | [optional] [default to 100]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMessageEntityList**](../Model/WebChatMessageEntityList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsChatParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationsChatParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationsChatParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsChatParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsChatParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationsChatParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $result = $apiInstance->getConversationsChatParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsChatParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsChats**
> \PureCloudPlatform\Client\V2\Model\ChatConversationEntityListing getConversationsChats()

Get active chat conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsChats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChatConversationEntityListing**](../Model/ChatConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCobrowsesession**
> \PureCloudPlatform\Client\V2\Model\CobrowseConversation getConversationsCobrowsesession($conversationId)

Get cobrowse conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsCobrowsesession($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCobrowsesession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CobrowseConversation**](../Model/CobrowseConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCobrowsesessionParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationsCobrowsesessionParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationsCobrowsesessionParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCobrowsesessionParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCobrowsesessionParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationsCobrowsesessionParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $result = $apiInstance->getConversationsCobrowsesessionParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCobrowsesessionParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsCobrowsesessions**
> \PureCloudPlatform\Client\V2\Model\CobrowseConversationEntityListing getConversationsCobrowsesessions()

Get active cobrowse conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsCobrowsesessions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsCobrowsesessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CobrowseConversationEntityListing**](../Model/CobrowseConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmail**
> \PureCloudPlatform\Client\V2\Model\EmailConversation getConversationsEmail($conversationId)

Get email conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsEmail($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailConversation**](../Model/EmailConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmailMessage**
> \PureCloudPlatform\Client\V2\Model\EmailMessage getConversationsEmailMessage($conversationId, $messageId)

Get conversation message



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$messageId = "messageId_example"; // string | messageId

try {
    $result = $apiInstance->getConversationsEmailMessage($conversationId, $messageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmailMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **messageId** | **string**| messageId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailMessage**](../Model/EmailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmailMessages**
> \PureCloudPlatform\Client\V2\Model\EmailMessageListing getConversationsEmailMessages($conversationId)

Get conversation messages



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsEmailMessages($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmailMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailMessageListing**](../Model/EmailMessageListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmailMessagesDraft**
> \PureCloudPlatform\Client\V2\Model\EmailMessage getConversationsEmailMessagesDraft($conversationId)

Get conversation draft reply



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsEmailMessagesDraft($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmailMessagesDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailMessage**](../Model/EmailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmailParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationsEmailParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationsEmailParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmailParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmailParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationsEmailParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $result = $apiInstance->getConversationsEmailParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmailParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsEmails**
> \PureCloudPlatform\Client\V2\Model\EmailConversationEntityListing getConversationsEmails()

Get active email conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsEmails();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailConversationEntityListing**](../Model/EmailConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessage**
> \PureCloudPlatform\Client\V2\Model\MessageConversation getConversationsMessage($conversationId)

Get message conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId

try {
    $result = $apiInstance->getConversationsMessage($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageConversation**](../Model/MessageConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessageCommunicationMessagesMediaMediaId**
> \PureCloudPlatform\Client\V2\Model\MessageMediaData getConversationsMessageCommunicationMessagesMediaMediaId($conversationId, $communicationId, $mediaId)

Get media



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$communicationId = "communicationId_example"; // string | communicationId
$mediaId = "mediaId_example"; // string | mediaId

try {
    $result = $apiInstance->getConversationsMessageCommunicationMessagesMediaMediaId($conversationId, $communicationId, $mediaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessageCommunicationMessagesMediaMediaId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **communicationId** | **string**| communicationId |
 **mediaId** | **string**| mediaId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageMediaData**](../Model/MessageMediaData.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessageMessage**
> \PureCloudPlatform\Client\V2\Model\MessageData getConversationsMessageMessage($conversationId, $messageId)

Get message



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$messageId = "messageId_example"; // string | messageId

try {
    $result = $apiInstance->getConversationsMessageMessage($conversationId, $messageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessageMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **messageId** | **string**| messageId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageData**](../Model/MessageData.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessageParticipantWrapup**
> \PureCloudPlatform\Client\V2\Model\AssignedWrapupCode getConversationsMessageParticipantWrapup($conversationId, $participantId, $provisional)

Get the wrap-up for this conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$provisional = false; // bool | Indicates if the wrap-up code is provisional.

try {
    $result = $apiInstance->getConversationsMessageParticipantWrapup($conversationId, $participantId, $provisional);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessageParticipantWrapup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **provisional** | **bool**| Indicates if the wrap-up code is provisional. | [optional] [default to false]

### Return type

[**\PureCloudPlatform\Client\V2\Model\AssignedWrapupCode**](../Model/AssignedWrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessageParticipantWrapupcodes**
> \PureCloudPlatform\Client\V2\Model\WrapupCode[] getConversationsMessageParticipantWrapupcodes($conversationId, $participantId)

Get list of wrapup codes for this conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $result = $apiInstance->getConversationsMessageParticipantWrapupcodes($conversationId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessageParticipantWrapupcodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WrapupCode[]**](../Model/WrapupCode.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessages**
> \PureCloudPlatform\Client\V2\Model\MessageConversationEntityListing getConversationsMessages()

Get active message conversations for the logged in user



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConversationsMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageConversationEntityListing**](../Model/MessageConversationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrations**
> \PureCloudPlatform\Client\V2\Model\MessagingIntegrationEntityListing getConversationsMessagingIntegrations($pageSize, $pageNumber)

Get a list of Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConversationsMessagingIntegrations($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessagingIntegrationEntityListing**](../Model/MessagingIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsFacebook**
> \PureCloudPlatform\Client\V2\Model\FacebookIntegrationEntityListing getConversationsMessagingIntegrationsFacebook($pageSize, $pageNumber)

Get a list of Facebook Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsFacebook($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsFacebook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\FacebookIntegrationEntityListing**](../Model/FacebookIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsFacebookIntegrationId**
> \PureCloudPlatform\Client\V2\Model\FacebookIntegration getConversationsMessagingIntegrationsFacebookIntegrationId($integrationId)

Get a Facebook messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsFacebookIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsFacebookIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FacebookIntegration**](../Model/FacebookIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsLine**
> \PureCloudPlatform\Client\V2\Model\LineIntegrationEntityListing getConversationsMessagingIntegrationsLine($pageSize, $pageNumber)

Get a list of LINE messenger Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsLine($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegrationEntityListing**](../Model/LineIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsLineIntegrationId**
> \PureCloudPlatform\Client\V2\Model\LineIntegration getConversationsMessagingIntegrationsLineIntegrationId($integrationId)

Get a LINE messenger integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsLineIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsLineIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegration**](../Model/LineIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsTwitter**
> \PureCloudPlatform\Client\V2\Model\TwitterIntegrationEntityListing getConversationsMessagingIntegrationsTwitter($pageSize, $pageNumber)

Get a list of Twitter Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsTwitter($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsTwitter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TwitterIntegrationEntityListing**](../Model/TwitterIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsTwitterIntegrationId**
> \PureCloudPlatform\Client\V2\Model\TwitterIntegration getConversationsMessagingIntegrationsTwitterIntegrationId($integrationId)

Get a Twitter messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsTwitterIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsTwitterIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TwitterIntegration**](../Model/TwitterIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsWhatsapp**
> \PureCloudPlatform\Client\V2\Model\WhatsAppIntegrationEntityListing getConversationsMessagingIntegrationsWhatsapp($pageSize, $pageNumber)

Get a list of WhatsApp Integrations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsWhatsapp($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsWhatsapp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\WhatsAppIntegrationEntityListing**](../Model/WhatsAppIntegrationEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingIntegrationsWhatsappIntegrationId**
> \PureCloudPlatform\Client\V2\Model\WhatsAppIntegration getConversationsMessagingIntegrationsWhatsappIntegrationId($integrationId)

Get a WhatsApp messaging integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID

try {
    $result = $apiInstance->getConversationsMessagingIntegrationsWhatsappIntegrationId($integrationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingIntegrationsWhatsappIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WhatsAppIntegration**](../Model/WhatsAppIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConversationsMessagingSticker**
> \PureCloudPlatform\Client\V2\Model\MessagingStickerEntityListing getConversationsMessagingSticker($messengerType, $pageSize, $pageNumber)

Get a list of Messaging Stickers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$messengerType = "messengerType_example"; // string | Messenger Type
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConversationsMessagingSticker($messengerType, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->getConversationsMessagingSticker: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **messengerType** | **string**| Messenger Type |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessagingStickerEntityListing**](../Model/MessagingStickerEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationParticipant**
> patchConversationParticipant($conversationId, $participantId, $body)

Update a participant.

Update conversation participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Update request

try {
    $apiInstance->patchConversationParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Update request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationParticipantAttributes**
> patchConversationParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | Participant attributes

try {
    $apiInstance->patchConversationParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)| Participant attributes |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCall**
> \PureCloudPlatform\Client\V2\Model\Conversation patchConversationsCall($conversationId, $body)

Update a conversation by setting it's recording state, merging in other conversations to create a conference, or disconnecting all of the participants



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->patchConversationsCall($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallParticipant**
> patchConversationsCallParticipant($conversationId, $participantId, $body)

Update conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant request

try {
    $apiInstance->patchConversationsCallParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallParticipantAttributes**
> patchConversationsCallParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | Participant attributes

try {
    $apiInstance->patchConversationsCallParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)| Participant attributes |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallParticipantCommunication**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty patchConversationsCallParticipantCommunication($conversationId, $participantId, $communicationId, $body)

Update conversation participant's communication by disconnecting it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $result = $apiInstance->patchConversationsCallParticipantCommunication($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallParticipantCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallParticipantConsult**
> \PureCloudPlatform\Client\V2\Model\ConsultTransferResponse patchConversationsCallParticipantConsult($conversationId, $participantId, $body)

Change who can speak



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ConsultTransferUpdate(); // \PureCloudPlatform\Client\V2\Model\ConsultTransferUpdate | new speak to

try {
    $result = $apiInstance->patchConversationsCallParticipantConsult($conversationId, $participantId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallParticipantConsult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConsultTransferUpdate**](../Model/ConsultTransferUpdate.md)| new speak to |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConsultTransferResponse**](../Model/ConsultTransferResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallback**
> \PureCloudPlatform\Client\V2\Model\Conversation patchConversationsCallback($conversationId, $body)

Update a conversation by disconnecting all of the participants



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->patchConversationsCallback($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallbackParticipant**
> patchConversationsCallbackParticipant($conversationId, $participantId, $body)

Update conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $apiInstance->patchConversationsCallbackParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallbackParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallbackParticipantAttributes**
> patchConversationsCallbackParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | Attributes

try {
    $apiInstance->patchConversationsCallbackParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallbackParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)| Attributes |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCallbackParticipantCommunication**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty patchConversationsCallbackParticipantCommunication($conversationId, $participantId, $communicationId, $body)

Update conversation participant's communication by disconnecting it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $result = $apiInstance->patchConversationsCallbackParticipantCommunication($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCallbackParticipantCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsChat**
> \PureCloudPlatform\Client\V2\Model\Conversation patchConversationsChat($conversationId, $body)

Update a conversation by disconnecting all of the participants



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->patchConversationsChat($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsChatParticipant**
> patchConversationsChatParticipant($conversationId, $participantId, $body)

Update conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Update request

try {
    $apiInstance->patchConversationsChatParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsChatParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Update request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsChatParticipantAttributes**
> patchConversationsChatParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | Participant attributes

try {
    $apiInstance->patchConversationsChatParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsChatParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)| Participant attributes |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsChatParticipantCommunication**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty patchConversationsChatParticipantCommunication($conversationId, $participantId, $communicationId, $body)

Update conversation participant's communication by disconnecting it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $result = $apiInstance->patchConversationsChatParticipantCommunication($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsChatParticipantCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCobrowsesession**
> \PureCloudPlatform\Client\V2\Model\Conversation patchConversationsCobrowsesession($conversationId, $body)

Update a conversation by disconnecting all of the participants



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->patchConversationsCobrowsesession($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCobrowsesession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCobrowsesessionParticipant**
> patchConversationsCobrowsesessionParticipant($conversationId, $participantId, $body)

Update conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | 

try {
    $apiInstance->patchConversationsCobrowsesessionParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCobrowsesessionParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCobrowsesessionParticipantAttributes**
> patchConversationsCobrowsesessionParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | 

try {
    $apiInstance->patchConversationsCobrowsesessionParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCobrowsesessionParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsCobrowsesessionParticipantCommunication**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty patchConversationsCobrowsesessionParticipantCommunication($conversationId, $participantId, $communicationId, $body)

Update conversation participant's communication by disconnecting it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $result = $apiInstance->patchConversationsCobrowsesessionParticipantCommunication($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsCobrowsesessionParticipantCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsEmail**
> \PureCloudPlatform\Client\V2\Model\Conversation patchConversationsEmail($conversationId, $body)

Update a conversation by disconnecting all of the participants



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->patchConversationsEmail($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsEmailParticipant**
> patchConversationsEmailParticipant($conversationId, $participantId, $body)

Update conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Update request

try {
    $apiInstance->patchConversationsEmailParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsEmailParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Update request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsEmailParticipantAttributes**
> patchConversationsEmailParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | Participant attributes

try {
    $apiInstance->patchConversationsEmailParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsEmailParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)| Participant attributes |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsEmailParticipantCommunication**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty patchConversationsEmailParticipantCommunication($conversationId, $participantId, $communicationId, $body)

Update conversation participant's communication by disconnecting it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $result = $apiInstance->patchConversationsEmailParticipantCommunication($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsEmailParticipantCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsMessage**
> \PureCloudPlatform\Client\V2\Model\Conversation patchConversationsMessage($conversationId, $body)

Update a conversation by disconnecting all of the participants



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->patchConversationsMessage($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsMessageParticipant**
> patchConversationsMessageParticipant($conversationId, $participantId, $body)

Update conversation participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | 

try {
    $apiInstance->patchConversationsMessageParticipant($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsMessageParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsMessageParticipantAttributes**
> patchConversationsMessageParticipantAttributes($conversationId, $participantId, $body)

Update the attributes on a conversation participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ParticipantAttributes(); // \PureCloudPlatform\Client\V2\Model\ParticipantAttributes | 

try {
    $apiInstance->patchConversationsMessageParticipantAttributes($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsMessageParticipantAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ParticipantAttributes**](../Model/ParticipantAttributes.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsMessageParticipantCommunication**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty patchConversationsMessageParticipantCommunication($conversationId, $participantId, $communicationId, $body)

Update conversation participant's communication by disconnecting it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest(); // \PureCloudPlatform\Client\V2\Model\MediaParticipantRequest | Participant

try {
    $result = $apiInstance->patchConversationsMessageParticipantCommunication($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsMessageParticipantCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\MediaParticipantRequest**](../Model/MediaParticipantRequest.md)| Participant |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchConversationsMessagingIntegrationsWhatsappIntegrationId**
> \PureCloudPlatform\Client\V2\Model\WhatsAppIntegration patchConversationsMessagingIntegrationsWhatsappIntegrationId($integrationId, $body)

Activate a WhatsApp messaging integration.

The following steps are required in order to fully activate a Whatsapp Integration: Initially, you will need to get an activation code by sending: an action set to Activate, and an authenticationMethod choosing from Sms or Voice. Finally, once you have been informed of an activation code on selected authenticationMethod, you will need to confirm the code by sending: an action set to Confirm, and the confirmationCode you have received from Whatsapp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID
$body = new \PureCloudPlatform\Client\V2\Model\WhatsAppIntegrationUpdateRequest(); // \PureCloudPlatform\Client\V2\Model\WhatsAppIntegrationUpdateRequest | WhatsAppIntegrationUpdateRequest

try {
    $result = $apiInstance->patchConversationsMessagingIntegrationsWhatsappIntegrationId($integrationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->patchConversationsMessagingIntegrationsWhatsappIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\WhatsAppIntegrationUpdateRequest**](../Model/WhatsAppIntegrationUpdateRequest.md)| WhatsAppIntegrationUpdateRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WhatsAppIntegration**](../Model/WhatsAppIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationDetailsProperties**
> \PureCloudPlatform\Client\V2\Model\PropertyIndexRequest postAnalyticsConversationDetailsProperties($conversationId, $body)

Index conversation properties



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\PropertyIndexRequest(); // \PureCloudPlatform\Client\V2\Model\PropertyIndexRequest | request

try {
    $result = $apiInstance->postAnalyticsConversationDetailsProperties($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postAnalyticsConversationDetailsProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\PropertyIndexRequest**](../Model/PropertyIndexRequest.md)| request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PropertyIndexRequest**](../Model/PropertyIndexRequest.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationsAggregatesQuery**
> \PureCloudPlatform\Client\V2\Model\ConversationAggregateQueryResponse postAnalyticsConversationsAggregatesQuery($body)

Query for conversation aggregates



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ConversationAggregationQuery(); // \PureCloudPlatform\Client\V2\Model\ConversationAggregationQuery | query

try {
    $result = $apiInstance->postAnalyticsConversationsAggregatesQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postAnalyticsConversationsAggregatesQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationAggregationQuery**](../Model/ConversationAggregationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConversationAggregateQueryResponse**](../Model/ConversationAggregateQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationsDetailsJobs**
> \PureCloudPlatform\Client\V2\Model\AsyncQueryResponse postAnalyticsConversationsDetailsJobs($body)

Query for conversation details asynchronously



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\AsyncConversationQuery(); // \PureCloudPlatform\Client\V2\Model\AsyncConversationQuery | query

try {
    $result = $apiInstance->postAnalyticsConversationsDetailsJobs($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postAnalyticsConversationsDetailsJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\AsyncConversationQuery**](../Model/AsyncConversationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AsyncQueryResponse**](../Model/AsyncQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAnalyticsConversationsDetailsQuery**
> \PureCloudPlatform\Client\V2\Model\AnalyticsConversationQueryResponse postAnalyticsConversationsDetailsQuery($body)

Query for conversation details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ConversationQuery(); // \PureCloudPlatform\Client\V2\Model\ConversationQuery | query

try {
    $result = $apiInstance->postAnalyticsConversationsDetailsQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postAnalyticsConversationsDetailsQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConversationQuery**](../Model/ConversationQuery.md)| query |

### Return type

[**\PureCloudPlatform\Client\V2\Model\AnalyticsConversationQueryResponse**](../Model/AnalyticsConversationQueryResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationDisconnect**
> string postConversationDisconnect($conversationId)

Performs a full conversation teardown. Issues disconnect requests for any connected media. Applies a system wrap-up code to any participants that are pending wrap-up. This is not intended to be the normal way of ending interactions but is available in the event of problems with the application to allow a resyncronization of state across all components. It is recommended that users submit a support case if they are relying on this endpoint systematically as there is likely something that needs investigation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID

try {
    $result = $apiInstance->postConversationDisconnect($conversationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationDisconnect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationParticipantCallbacks**
> postConversationParticipantCallbacks($conversationId, $participantId, $body)

Create a new callback for the specified participant on the conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$body = new \PureCloudPlatform\Client\V2\Model\CreateCallbackOnConversationCommand(); // \PureCloudPlatform\Client\V2\Model\CreateCallbackOnConversationCommand | 

try {
    $apiInstance->postConversationParticipantCallbacks($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationParticipantCallbacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateCallbackOnConversationCommand**](../Model/CreateCallbackOnConversationCommand.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationParticipantDigits**
> postConversationParticipantDigits($conversationId, $participantId, $body)

Sends DTMF to the participant



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$body = new \PureCloudPlatform\Client\V2\Model\Digits(); // \PureCloudPlatform\Client\V2\Model\Digits | Digits

try {
    $apiInstance->postConversationParticipantDigits($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationParticipantDigits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Digits**](../Model/Digits.md)| Digits | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationParticipantReplace**
> postConversationParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | Transfer request

try {
    $apiInstance->postConversationParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)| Transfer request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationParticipantSecureivrsessions**
> \PureCloudPlatform\Client\V2\Model\SecureSession postConversationParticipantSecureivrsessions($conversationId, $participantId, $body)

Create secure IVR session. Only a participant in the conversation can invoke a secure IVR.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID
$body = new \PureCloudPlatform\Client\V2\Model\CreateSecureSession(); // \PureCloudPlatform\Client\V2\Model\CreateSecureSession | 

try {
    $result = $apiInstance->postConversationParticipantSecureivrsessions($conversationId, $participantId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationParticipantSecureivrsessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateSecureSession**](../Model/CreateSecureSession.md)|  | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SecureSession**](../Model/SecureSession.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCall**
> \PureCloudPlatform\Client\V2\Model\Conversation postConversationsCall($conversationId, $body)

Place a new call as part of a callback conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\CallCommand(); // \PureCloudPlatform\Client\V2\Model\CallCommand | Conversation

try {
    $result = $apiInstance->postConversationsCall($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CallCommand**](../Model/CallCommand.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCallParticipantConsult**
> \PureCloudPlatform\Client\V2\Model\ConsultTransferResponse postConversationsCallParticipantConsult($conversationId, $participantId, $body)

Initiate and update consult transfer



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\ConsultTransfer(); // \PureCloudPlatform\Client\V2\Model\ConsultTransfer | Destination address & initial speak to

try {
    $result = $apiInstance->postConversationsCallParticipantConsult($conversationId, $participantId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCallParticipantConsult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ConsultTransfer**](../Model/ConsultTransfer.md)| Destination address &amp; initial speak to |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ConsultTransferResponse**](../Model/ConsultTransferResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCallParticipantMonitor**
> postConversationsCallParticipantMonitor($conversationId, $participantId)

Listen in on the conversation from the point of view of a given participant.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId

try {
    $apiInstance->postConversationsCallParticipantMonitor($conversationId, $participantId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCallParticipantMonitor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCallParticipantReplace**
> postConversationsCallParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | Transfer request

try {
    $apiInstance->postConversationsCallParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCallParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)| Transfer request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCallParticipants**
> \PureCloudPlatform\Client\V2\Model\Conversation postConversationsCallParticipants($conversationId, $body)

Add participants to a conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\Conversation(); // \PureCloudPlatform\Client\V2\Model\Conversation | Conversation

try {
    $result = $apiInstance->postConversationsCallParticipants($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCallParticipants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)| Conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Conversation**](../Model/Conversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCallbackParticipantReplace**
> postConversationsCallbackParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | Transfer request

try {
    $apiInstance->postConversationsCallbackParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCallbackParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)| Transfer request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCallbacks**
> \PureCloudPlatform\Client\V2\Model\CreateCallbackResponse postConversationsCallbacks($body)

Create a Callback



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateCallbackCommand(); // \PureCloudPlatform\Client\V2\Model\CreateCallbackCommand | Callback

try {
    $result = $apiInstance->postConversationsCallbacks($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCallbacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateCallbackCommand**](../Model/CreateCallbackCommand.md)| Callback |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CreateCallbackResponse**](../Model/CreateCallbackResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCalls**
> \PureCloudPlatform\Client\V2\Model\CreateCallResponse postConversationsCalls($body)

Create a call conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateCallRequest(); // \PureCloudPlatform\Client\V2\Model\CreateCallRequest | Call request

try {
    $result = $apiInstance->postConversationsCalls($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCalls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateCallRequest**](../Model/CreateCallRequest.md)| Call request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\CreateCallResponse**](../Model/CreateCallResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsChatCommunicationMessages**
> \PureCloudPlatform\Client\V2\Model\WebChatMessage postConversationsChatCommunicationMessages($conversationId, $communicationId, $body)

Send a message on behalf of a communication in a chat conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\CreateWebChatMessageRequest(); // \PureCloudPlatform\Client\V2\Model\CreateWebChatMessageRequest | Message

try {
    $result = $apiInstance->postConversationsChatCommunicationMessages($conversationId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsChatCommunicationMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateWebChatMessageRequest**](../Model/CreateWebChatMessageRequest.md)| Message |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatMessage**](../Model/WebChatMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsChatCommunicationTyping**
> \PureCloudPlatform\Client\V2\Model\WebChatTyping postConversationsChatCommunicationTyping($conversationId, $communicationId)

Send a typing-indicator on behalf of a communication in a chat conversation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$communicationId = "communicationId_example"; // string | communicationId

try {
    $result = $apiInstance->postConversationsChatCommunicationTyping($conversationId, $communicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsChatCommunicationTyping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **communicationId** | **string**| communicationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\WebChatTyping**](../Model/WebChatTyping.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsChatParticipantReplace**
> postConversationsChatParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | Transfer request

try {
    $apiInstance->postConversationsChatParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsChatParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)| Transfer request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsChats**
> \PureCloudPlatform\Client\V2\Model\ChatConversation postConversationsChats($body)

Create a web chat conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateWebChatRequest(); // \PureCloudPlatform\Client\V2\Model\CreateWebChatRequest | Create web chat request

try {
    $result = $apiInstance->postConversationsChats($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateWebChatRequest**](../Model/CreateWebChatRequest.md)| Create web chat request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ChatConversation**](../Model/ChatConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsCobrowsesessionParticipantReplace**
> postConversationsCobrowsesessionParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | 

try {
    $apiInstance->postConversationsCobrowsesessionParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsCobrowsesessionParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsEmailInboundmessages**
> \PureCloudPlatform\Client\V2\Model\EmailConversation postConversationsEmailInboundmessages($conversationId, $body)

Send an email to an external conversation. An external conversation is one where the provider is not PureCloud based. This endpoint allows the sender of the external email to reply or send a new message to the existing conversation. The new message will be treated as part of the existing conversation and chained to it.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\InboundMessageRequest(); // \PureCloudPlatform\Client\V2\Model\InboundMessageRequest | Send external email reply

try {
    $result = $apiInstance->postConversationsEmailInboundmessages($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsEmailInboundmessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\InboundMessageRequest**](../Model/InboundMessageRequest.md)| Send external email reply |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailConversation**](../Model/EmailConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsEmailMessages**
> \PureCloudPlatform\Client\V2\Model\EmailMessage postConversationsEmailMessages($conversationId, $body)

Send an email reply



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\EmailMessage(); // \PureCloudPlatform\Client\V2\Model\EmailMessage | Reply

try {
    $result = $apiInstance->postConversationsEmailMessages($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsEmailMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EmailMessage**](../Model/EmailMessage.md)| Reply |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailMessage**](../Model/EmailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsEmailParticipantReplace**
> postConversationsEmailParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | Transfer request

try {
    $apiInstance->postConversationsEmailParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsEmailParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)| Transfer request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsEmails**
> \PureCloudPlatform\Client\V2\Model\EmailConversation postConversationsEmails($body)

Create an email conversation

If the direction of the request is INBOUND, this will create an external conversation with a third party provider. If the direction of the the request is OUTBOUND, this will create a conversation to send outbound emails on behalf of a queue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateEmailRequest(); // \PureCloudPlatform\Client\V2\Model\CreateEmailRequest | Create email request

try {
    $result = $apiInstance->postConversationsEmails($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateEmailRequest**](../Model/CreateEmailRequest.md)| Create email request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailConversation**](../Model/EmailConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsFaxes**
> \PureCloudPlatform\Client\V2\Model\FaxSendResponse postConversationsFaxes($body)

Create Fax Conversation



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FaxSendRequest(); // \PureCloudPlatform\Client\V2\Model\FaxSendRequest | Fax

try {
    $result = $apiInstance->postConversationsFaxes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsFaxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FaxSendRequest**](../Model/FaxSendRequest.md)| Fax |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FaxSendResponse**](../Model/FaxSendResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessageCommunicationMessages**
> \PureCloudPlatform\Client\V2\Model\MessageData postConversationsMessageCommunicationMessages($conversationId, $communicationId, $body)

Send message



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\AdditionalMessage(); // \PureCloudPlatform\Client\V2\Model\AdditionalMessage | Message

try {
    $result = $apiInstance->postConversationsMessageCommunicationMessages($conversationId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessageCommunicationMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\AdditionalMessage**](../Model/AdditionalMessage.md)| Message |

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageData**](../Model/MessageData.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessageCommunicationMessagesMedia**
> \PureCloudPlatform\Client\V2\Model\MessageMediaData postConversationsMessageCommunicationMessagesMedia($conversationId, $communicationId)

Create media



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$communicationId = "communicationId_example"; // string | communicationId

try {
    $result = $apiInstance->postConversationsMessageCommunicationMessagesMedia($conversationId, $communicationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessageCommunicationMessagesMedia: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **communicationId** | **string**| communicationId |

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageMediaData**](../Model/MessageMediaData.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessageMessagesBulk**
> \PureCloudPlatform\Client\V2\Model\TextMessageListing postConversationsMessageMessagesBulk($conversationId, $body)

Get messages in batch



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = array(new \PureCloudPlatform\Client\V2\Model\string[]()); // string[] | messageIds

try {
    $result = $apiInstance->postConversationsMessageMessagesBulk($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessageMessagesBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | **string[]**| messageIds | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TextMessageListing**](../Model/TextMessageListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessageParticipantReplace**
> postConversationsMessageParticipantReplace($conversationId, $participantId, $body)

Replace this participant with the specified user and/or address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$body = new \PureCloudPlatform\Client\V2\Model\TransferRequest(); // \PureCloudPlatform\Client\V2\Model\TransferRequest | Transfer request

try {
    $apiInstance->postConversationsMessageParticipantReplace($conversationId, $participantId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessageParticipantReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TransferRequest**](../Model/TransferRequest.md)| Transfer request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessages**
> \PureCloudPlatform\Client\V2\Model\MessageConversation postConversationsMessages($body)

Create an outbound messaging conversation.

If there is an existing conversation between the remote address and the address associated with the queue specified in createOutboundRequest then the result of this request depends on the state of that conversation and the useExistingConversation field of createOutboundRequest. If the existing conversation is in alerting or connected state, then the request will fail. If the existing conversation is disconnected but still within the conversation window then the request will fail unless useExistingConversation is set to true.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\CreateOutboundMessagingConversationRequest(); // \PureCloudPlatform\Client\V2\Model\CreateOutboundMessagingConversationRequest | Create outbound messaging conversation

try {
    $result = $apiInstance->postConversationsMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\CreateOutboundMessagingConversationRequest**](../Model/CreateOutboundMessagingConversationRequest.md)| Create outbound messaging conversation |

### Return type

[**\PureCloudPlatform\Client\V2\Model\MessageConversation**](../Model/MessageConversation.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessagingIntegrationsFacebook**
> \PureCloudPlatform\Client\V2\Model\FacebookIntegration postConversationsMessagingIntegrationsFacebook($body)

Create a Facebook Integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\FacebookIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\FacebookIntegrationRequest | FacebookIntegrationRequest

try {
    $result = $apiInstance->postConversationsMessagingIntegrationsFacebook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessagingIntegrationsFacebook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\FacebookIntegrationRequest**](../Model/FacebookIntegrationRequest.md)| FacebookIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\FacebookIntegration**](../Model/FacebookIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessagingIntegrationsLine**
> \PureCloudPlatform\Client\V2\Model\LineIntegration postConversationsMessagingIntegrationsLine($body)

Create a LINE messenger Integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest | LineIntegrationRequest

try {
    $result = $apiInstance->postConversationsMessagingIntegrationsLine($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessagingIntegrationsLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\LineIntegrationRequest**](../Model/LineIntegrationRequest.md)| LineIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegration**](../Model/LineIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postConversationsMessagingIntegrationsTwitter**
> \PureCloudPlatform\Client\V2\Model\TwitterIntegration postConversationsMessagingIntegrationsTwitter($body)

Create a Twitter Integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TwitterIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\TwitterIntegrationRequest | TwitterIntegrationRequest

try {
    $result = $apiInstance->postConversationsMessagingIntegrationsTwitter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->postConversationsMessagingIntegrationsTwitter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TwitterIntegrationRequest**](../Model/TwitterIntegrationRequest.md)| TwitterIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TwitterIntegration**](../Model/TwitterIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConversationParticipantFlaggedreason**
> putConversationParticipantFlaggedreason($conversationId, $participantId)

Set flagged reason on conversation participant to indicate bad conversation quality.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversation ID
$participantId = "participantId_example"; // string | participant ID

try {
    $apiInstance->putConversationParticipantFlaggedreason($conversationId, $participantId);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->putConversationParticipantFlaggedreason: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversation ID |
 **participantId** | **string**| participant ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConversationsCallParticipantCommunicationUuidata**
> \PureCloudPlatform\Client\V2\Model\ModelEmpty putConversationsCallParticipantCommunicationUuidata($conversationId, $participantId, $communicationId, $body)

Set uuiData to be sent on future commands.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$participantId = "participantId_example"; // string | participantId
$communicationId = "communicationId_example"; // string | communicationId
$body = new \PureCloudPlatform\Client\V2\Model\SetUuiDataRequest(); // \PureCloudPlatform\Client\V2\Model\SetUuiDataRequest | UUIData Request

try {
    $result = $apiInstance->putConversationsCallParticipantCommunicationUuidata($conversationId, $participantId, $communicationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->putConversationsCallParticipantCommunicationUuidata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **participantId** | **string**| participantId |
 **communicationId** | **string**| communicationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\SetUuiDataRequest**](../Model/SetUuiDataRequest.md)| UUIData Request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConversationsEmailMessagesDraft**
> \PureCloudPlatform\Client\V2\Model\EmailMessage putConversationsEmailMessagesDraft($conversationId, $body)

Update conversation draft reply



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = "conversationId_example"; // string | conversationId
$body = new \PureCloudPlatform\Client\V2\Model\EmailMessage(); // \PureCloudPlatform\Client\V2\Model\EmailMessage | Draft

try {
    $result = $apiInstance->putConversationsEmailMessagesDraft($conversationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->putConversationsEmailMessagesDraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **string**| conversationId |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EmailMessage**](../Model/EmailMessage.md)| Draft |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EmailMessage**](../Model/EmailMessage.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putConversationsMessagingIntegrationsLineIntegrationId**
> \PureCloudPlatform\Client\V2\Model\LineIntegration putConversationsMessagingIntegrationsLineIntegrationId($integrationId, $body)

Update a LINE messenger integration



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\ConversationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integrationId = "integrationId_example"; // string | Integration ID
$body = new \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest(); // \PureCloudPlatform\Client\V2\Model\LineIntegrationRequest | LineIntegrationRequest

try {
    $result = $apiInstance->putConversationsMessagingIntegrationsLineIntegrationId($integrationId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversationsApi->putConversationsMessagingIntegrationsLineIntegrationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integrationId** | **string**| Integration ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\LineIntegrationRequest**](../Model/LineIntegrationRequest.md)| LineIntegrationRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineIntegration**](../Model/LineIntegration.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

