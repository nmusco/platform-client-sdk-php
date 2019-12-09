# PureCloudPlatform\Client\V2\TelephonyProvidersEdgeApi

All URIs are relative to *https://api.mypurecloud.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTelephonyProvidersEdge**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdge) | **DELETE** /api/v2/telephony/providers/edges/{edgeId} | Delete a edge.
[**deleteTelephonyProvidersEdgeLogicalinterface**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgeLogicalinterface) | **DELETE** /api/v2/telephony/providers/edges/{edgeId}/logicalinterfaces/{interfaceId} | Delete an edge logical interface
[**deleteTelephonyProvidersEdgeSoftwareupdate**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgeSoftwareupdate) | **DELETE** /api/v2/telephony/providers/edges/{edgeId}/softwareupdate | Cancels any in-progress update for this edge.
[**deleteTelephonyProvidersEdgesCertificateauthority**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesCertificateauthority) | **DELETE** /api/v2/telephony/providers/edges/certificateauthorities/{certificateId} | Delete a certificate authority.
[**deleteTelephonyProvidersEdgesDidpool**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesDidpool) | **DELETE** /api/v2/telephony/providers/edges/didpools/{didPoolId} | Delete a DID Pool by ID.
[**deleteTelephonyProvidersEdgesEdgegroup**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesEdgegroup) | **DELETE** /api/v2/telephony/providers/edges/edgegroups/{edgeGroupId} | Delete an edge group.
[**deleteTelephonyProvidersEdgesExtensionpool**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesExtensionpool) | **DELETE** /api/v2/telephony/providers/edges/extensionpools/{extensionPoolId} | Delete an extension pool by ID
[**deleteTelephonyProvidersEdgesOutboundroute**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesOutboundroute) | **DELETE** /api/v2/telephony/providers/edges/outboundroutes/{outboundRouteId} | Delete Outbound Route
[**deleteTelephonyProvidersEdgesPhone**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesPhone) | **DELETE** /api/v2/telephony/providers/edges/phones/{phoneId} | Delete a Phone by ID
[**deleteTelephonyProvidersEdgesPhonebasesetting**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesPhonebasesetting) | **DELETE** /api/v2/telephony/providers/edges/phonebasesettings/{phoneBaseId} | Delete a Phone Base Settings by ID
[**deleteTelephonyProvidersEdgesSite**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesSite) | **DELETE** /api/v2/telephony/providers/edges/sites/{siteId} | Delete a Site by ID
[**deleteTelephonyProvidersEdgesSiteOutboundroute**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesSiteOutboundroute) | **DELETE** /api/v2/telephony/providers/edges/sites/{siteId}/outboundroutes/{outboundRouteId} | Delete Outbound Route
[**deleteTelephonyProvidersEdgesTrunkbasesetting**](TelephonyProvidersEdgeApi.md#deleteTelephonyProvidersEdgesTrunkbasesetting) | **DELETE** /api/v2/telephony/providers/edges/trunkbasesettings/{trunkBaseSettingsId} | Delete a Trunk Base Settings object by ID
[**getConfigurationSchemasEdgesVnext**](TelephonyProvidersEdgeApi.md#getConfigurationSchemasEdgesVnext) | **GET** /api/v2/configuration/schemas/edges/vnext | Lists available schema categories (Deprecated)
[**getConfigurationSchemasEdgesVnextSchemaCategory**](TelephonyProvidersEdgeApi.md#getConfigurationSchemasEdgesVnextSchemaCategory) | **GET** /api/v2/configuration/schemas/edges/vnext/{schemaCategory} | List schemas of a specific category (Deprecated)
[**getConfigurationSchemasEdgesVnextSchemaCategorySchemaType**](TelephonyProvidersEdgeApi.md#getConfigurationSchemasEdgesVnextSchemaCategorySchemaType) | **GET** /api/v2/configuration/schemas/edges/vnext/{schemaCategory}/{schemaType} | List schemas of a specific category (Deprecated)
[**getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaId**](TelephonyProvidersEdgeApi.md#getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaId) | **GET** /api/v2/configuration/schemas/edges/vnext/{schemaCategory}/{schemaType}/{schemaId} | Get a json schema (Deprecated)
[**getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaIdExtensionTypeMetadataId**](TelephonyProvidersEdgeApi.md#getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaIdExtensionTypeMetadataId) | **GET** /api/v2/configuration/schemas/edges/vnext/{schemaCategory}/{schemaType}/{schemaId}/{extensionType}/{metadataId} | Get metadata for a schema (Deprecated)
[**getTelephonyProvidersEdge**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdge) | **GET** /api/v2/telephony/providers/edges/{edgeId} | Get edge.
[**getTelephonyProvidersEdgeLine**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeLine) | **GET** /api/v2/telephony/providers/edges/{edgeId}/lines/{lineId} | Get line
[**getTelephonyProvidersEdgeLines**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeLines) | **GET** /api/v2/telephony/providers/edges/{edgeId}/lines | Get the list of lines.
[**getTelephonyProvidersEdgeLogicalinterface**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeLogicalinterface) | **GET** /api/v2/telephony/providers/edges/{edgeId}/logicalinterfaces/{interfaceId} | Get an edge logical interface
[**getTelephonyProvidersEdgeLogicalinterfaces**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeLogicalinterfaces) | **GET** /api/v2/telephony/providers/edges/{edgeId}/logicalinterfaces | Get edge logical interfaces.
[**getTelephonyProvidersEdgeLogsJob**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeLogsJob) | **GET** /api/v2/telephony/providers/edges/{edgeId}/logs/jobs/{jobId} | Get an Edge logs job.
[**getTelephonyProvidersEdgeMetrics**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeMetrics) | **GET** /api/v2/telephony/providers/edges/{edgeId}/metrics | Get the edge metrics.
[**getTelephonyProvidersEdgePhysicalinterface**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgePhysicalinterface) | **GET** /api/v2/telephony/providers/edges/{edgeId}/physicalinterfaces/{interfaceId} | Get edge physical interface.
[**getTelephonyProvidersEdgePhysicalinterfaces**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgePhysicalinterfaces) | **GET** /api/v2/telephony/providers/edges/{edgeId}/physicalinterfaces | Retrieve a list of all configured physical interfaces from a specific edge.
[**getTelephonyProvidersEdgeSetuppackage**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeSetuppackage) | **GET** /api/v2/telephony/providers/edges/{edgeId}/setuppackage | Get the setup package for a locally deployed edge device. This is needed to complete the setup process for the virtual edge.
[**getTelephonyProvidersEdgeSoftwareupdate**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeSoftwareupdate) | **GET** /api/v2/telephony/providers/edges/{edgeId}/softwareupdate | Gets software update status information about any edge.
[**getTelephonyProvidersEdgeSoftwareversions**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeSoftwareversions) | **GET** /api/v2/telephony/providers/edges/{edgeId}/softwareversions | Gets all the available software versions for this edge.
[**getTelephonyProvidersEdgeTrunks**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgeTrunks) | **GET** /api/v2/telephony/providers/edges/{edgeId}/trunks | Get the list of available trunks for the given Edge.
[**getTelephonyProvidersEdges**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdges) | **GET** /api/v2/telephony/providers/edges | Get the list of edges.
[**getTelephonyProvidersEdgesAvailablelanguages**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesAvailablelanguages) | **GET** /api/v2/telephony/providers/edges/availablelanguages | Get the list of available languages.
[**getTelephonyProvidersEdgesCertificateauthorities**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesCertificateauthorities) | **GET** /api/v2/telephony/providers/edges/certificateauthorities | Get the list of certificate authorities.
[**getTelephonyProvidersEdgesCertificateauthority**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesCertificateauthority) | **GET** /api/v2/telephony/providers/edges/certificateauthorities/{certificateId} | Get a certificate authority.
[**getTelephonyProvidersEdgesDid**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesDid) | **GET** /api/v2/telephony/providers/edges/dids/{didId} | Get a DID by ID.
[**getTelephonyProvidersEdgesDidpool**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesDidpool) | **GET** /api/v2/telephony/providers/edges/didpools/{didPoolId} | Get a DID Pool by ID.
[**getTelephonyProvidersEdgesDidpools**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesDidpools) | **GET** /api/v2/telephony/providers/edges/didpools | Get a listing of DID Pools
[**getTelephonyProvidersEdgesDids**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesDids) | **GET** /api/v2/telephony/providers/edges/dids | Get a listing of DIDs
[**getTelephonyProvidersEdgesEdgegroup**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesEdgegroup) | **GET** /api/v2/telephony/providers/edges/edgegroups/{edgeGroupId} | Get edge group.
[**getTelephonyProvidersEdgesEdgegroupEdgetrunkbase**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesEdgegroupEdgetrunkbase) | **GET** /api/v2/telephony/providers/edges/edgegroups/{edgegroupId}/edgetrunkbases/{edgetrunkbaseId} | Gets the edge trunk base associated with the edge group
[**getTelephonyProvidersEdgesEdgegroups**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesEdgegroups) | **GET** /api/v2/telephony/providers/edges/edgegroups | Get the list of edge groups.
[**getTelephonyProvidersEdgesEdgeversionreport**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesEdgeversionreport) | **GET** /api/v2/telephony/providers/edges/edgeversionreport | Get the edge version report.
[**getTelephonyProvidersEdgesExtension**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesExtension) | **GET** /api/v2/telephony/providers/edges/extensions/{extensionId} | Get an extension by ID.
[**getTelephonyProvidersEdgesExtensionpool**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesExtensionpool) | **GET** /api/v2/telephony/providers/edges/extensionpools/{extensionPoolId} | Get an extension pool by ID
[**getTelephonyProvidersEdgesExtensionpools**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesExtensionpools) | **GET** /api/v2/telephony/providers/edges/extensionpools | Get a listing of extension pools
[**getTelephonyProvidersEdgesExtensions**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesExtensions) | **GET** /api/v2/telephony/providers/edges/extensions | Get a listing of extensions
[**getTelephonyProvidersEdgesLine**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesLine) | **GET** /api/v2/telephony/providers/edges/lines/{lineId} | Get a Line by ID
[**getTelephonyProvidersEdgesLinebasesetting**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesLinebasesetting) | **GET** /api/v2/telephony/providers/edges/linebasesettings/{lineBaseId} | Get a line base settings object by ID
[**getTelephonyProvidersEdgesLinebasesettings**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesLinebasesettings) | **GET** /api/v2/telephony/providers/edges/linebasesettings | Get a listing of line base settings objects
[**getTelephonyProvidersEdgesLines**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesLines) | **GET** /api/v2/telephony/providers/edges/lines | Get a list of Lines
[**getTelephonyProvidersEdgesLinesTemplate**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesLinesTemplate) | **GET** /api/v2/telephony/providers/edges/lines/template | Get a Line instance template based on a Line Base Settings object. This object can then be modified and saved as a new Line instance
[**getTelephonyProvidersEdgesLogicalinterfaces**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesLogicalinterfaces) | **GET** /api/v2/telephony/providers/edges/logicalinterfaces | Get edge logical interfaces.
[**getTelephonyProvidersEdgesMetrics**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesMetrics) | **GET** /api/v2/telephony/providers/edges/metrics | Get the metrics for a list of edges.
[**getTelephonyProvidersEdgesOutboundroute**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesOutboundroute) | **GET** /api/v2/telephony/providers/edges/outboundroutes/{outboundRouteId} | Get outbound route
[**getTelephonyProvidersEdgesOutboundroutes**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesOutboundroutes) | **GET** /api/v2/telephony/providers/edges/outboundroutes | Get outbound routes
[**getTelephonyProvidersEdgesPhone**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhone) | **GET** /api/v2/telephony/providers/edges/phones/{phoneId} | Get a Phone by ID
[**getTelephonyProvidersEdgesPhonebasesetting**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhonebasesetting) | **GET** /api/v2/telephony/providers/edges/phonebasesettings/{phoneBaseId} | Get a Phone Base Settings object by ID
[**getTelephonyProvidersEdgesPhonebasesettings**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhonebasesettings) | **GET** /api/v2/telephony/providers/edges/phonebasesettings | Get a list of Phone Base Settings objects
[**getTelephonyProvidersEdgesPhonebasesettingsAvailablemetabases**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhonebasesettingsAvailablemetabases) | **GET** /api/v2/telephony/providers/edges/phonebasesettings/availablemetabases | Get a list of available makes and models to create a new Phone Base Settings
[**getTelephonyProvidersEdgesPhonebasesettingsTemplate**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhonebasesettingsTemplate) | **GET** /api/v2/telephony/providers/edges/phonebasesettings/template | Get a Phone Base Settings instance template from a given make and model. This object can then be modified and saved as a new Phone Base Settings instance
[**getTelephonyProvidersEdgesPhones**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhones) | **GET** /api/v2/telephony/providers/edges/phones | Get a list of Phone Instances
[**getTelephonyProvidersEdgesPhonesTemplate**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhonesTemplate) | **GET** /api/v2/telephony/providers/edges/phones/template | Get a Phone instance template based on a Phone Base Settings object. This object can then be modified and saved as a new Phone instance
[**getTelephonyProvidersEdgesPhysicalinterfaces**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesPhysicalinterfaces) | **GET** /api/v2/telephony/providers/edges/physicalinterfaces | Get physical interfaces for edges.
[**getTelephonyProvidersEdgesSite**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSite) | **GET** /api/v2/telephony/providers/edges/sites/{siteId} | Get a Site by ID.
[**getTelephonyProvidersEdgesSiteNumberplan**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSiteNumberplan) | **GET** /api/v2/telephony/providers/edges/sites/{siteId}/numberplans/{numberPlanId} | Get a Number Plan by ID.
[**getTelephonyProvidersEdgesSiteNumberplans**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSiteNumberplans) | **GET** /api/v2/telephony/providers/edges/sites/{siteId}/numberplans | Get the list of Number Plans for this Site. Only fetches the first 200 records.
[**getTelephonyProvidersEdgesSiteNumberplansClassifications**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSiteNumberplansClassifications) | **GET** /api/v2/telephony/providers/edges/sites/{siteId}/numberplans/classifications | Get a list of Classifications for this Site
[**getTelephonyProvidersEdgesSiteOutboundroute**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSiteOutboundroute) | **GET** /api/v2/telephony/providers/edges/sites/{siteId}/outboundroutes/{outboundRouteId} | Get an outbound route
[**getTelephonyProvidersEdgesSiteOutboundroutes**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSiteOutboundroutes) | **GET** /api/v2/telephony/providers/edges/sites/{siteId}/outboundroutes | Get outbound routes
[**getTelephonyProvidersEdgesSites**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesSites) | **GET** /api/v2/telephony/providers/edges/sites | Get the list of Sites.
[**getTelephonyProvidersEdgesTimezones**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTimezones) | **GET** /api/v2/telephony/providers/edges/timezones | Get a list of Edge-compatible time zones
[**getTelephonyProvidersEdgesTrunk**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunk) | **GET** /api/v2/telephony/providers/edges/trunks/{trunkId} | Get a Trunk by ID
[**getTelephonyProvidersEdgesTrunkMetrics**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunkMetrics) | **GET** /api/v2/telephony/providers/edges/trunks/{trunkId}/metrics | Get the trunk metrics.
[**getTelephonyProvidersEdgesTrunkbasesetting**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunkbasesetting) | **GET** /api/v2/telephony/providers/edges/trunkbasesettings/{trunkBaseSettingsId} | Get a Trunk Base Settings object by ID
[**getTelephonyProvidersEdgesTrunkbasesettings**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunkbasesettings) | **GET** /api/v2/telephony/providers/edges/trunkbasesettings | Get Trunk Base Settings listing
[**getTelephonyProvidersEdgesTrunkbasesettingsAvailablemetabases**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunkbasesettingsAvailablemetabases) | **GET** /api/v2/telephony/providers/edges/trunkbasesettings/availablemetabases | Get a list of available makes and models to create a new Trunk Base Settings
[**getTelephonyProvidersEdgesTrunkbasesettingsTemplate**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunkbasesettingsTemplate) | **GET** /api/v2/telephony/providers/edges/trunkbasesettings/template | Get a Trunk Base Settings instance template from a given make and model. This object can then be modified and saved as a new Trunk Base Settings instance
[**getTelephonyProvidersEdgesTrunks**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunks) | **GET** /api/v2/telephony/providers/edges/trunks | Get the list of available trunks.
[**getTelephonyProvidersEdgesTrunksMetrics**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunksMetrics) | **GET** /api/v2/telephony/providers/edges/trunks/metrics | Get the metrics for a list of trunks.
[**getTelephonyProvidersEdgesTrunkswithrecording**](TelephonyProvidersEdgeApi.md#getTelephonyProvidersEdgesTrunkswithrecording) | **GET** /api/v2/telephony/providers/edges/trunkswithrecording | Get Counts of trunks that have recording disabled or enabled
[**postTelephonyProvidersEdgeLogicalinterfaces**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeLogicalinterfaces) | **POST** /api/v2/telephony/providers/edges/{edgeId}/logicalinterfaces | Create an edge logical interface.
[**postTelephonyProvidersEdgeLogsJobUpload**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeLogsJobUpload) | **POST** /api/v2/telephony/providers/edges/{edgeId}/logs/jobs/{jobId}/upload | Request that the specified fileIds be uploaded from the Edge.
[**postTelephonyProvidersEdgeLogsJobs**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeLogsJobs) | **POST** /api/v2/telephony/providers/edges/{edgeId}/logs/jobs | Create a job to upload a list of Edge logs.
[**postTelephonyProvidersEdgeReboot**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeReboot) | **POST** /api/v2/telephony/providers/edges/{edgeId}/reboot | Reboot an Edge
[**postTelephonyProvidersEdgeSoftwareupdate**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeSoftwareupdate) | **POST** /api/v2/telephony/providers/edges/{edgeId}/softwareupdate | Starts a software update for this edge.
[**postTelephonyProvidersEdgeStatuscode**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeStatuscode) | **POST** /api/v2/telephony/providers/edges/{edgeId}/statuscode | Take an Edge in or out of service
[**postTelephonyProvidersEdgeUnpair**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgeUnpair) | **POST** /api/v2/telephony/providers/edges/{edgeId}/unpair | Unpair an Edge
[**postTelephonyProvidersEdges**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdges) | **POST** /api/v2/telephony/providers/edges | Create an edge.
[**postTelephonyProvidersEdgesAddressvalidation**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesAddressvalidation) | **POST** /api/v2/telephony/providers/edges/addressvalidation | Validates a street address
[**postTelephonyProvidersEdgesCertificateauthorities**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesCertificateauthorities) | **POST** /api/v2/telephony/providers/edges/certificateauthorities | Create a certificate authority.
[**postTelephonyProvidersEdgesDidpools**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesDidpools) | **POST** /api/v2/telephony/providers/edges/didpools | Create a new DID pool
[**postTelephonyProvidersEdgesEdgegroups**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesEdgegroups) | **POST** /api/v2/telephony/providers/edges/edgegroups | Create an edge group.
[**postTelephonyProvidersEdgesExtensionpools**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesExtensionpools) | **POST** /api/v2/telephony/providers/edges/extensionpools | Create a new extension pool
[**postTelephonyProvidersEdgesOutboundroutes**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesOutboundroutes) | **POST** /api/v2/telephony/providers/edges/outboundroutes | Create outbound rule
[**postTelephonyProvidersEdgesPhoneReboot**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesPhoneReboot) | **POST** /api/v2/telephony/providers/edges/phones/{phoneId}/reboot | Reboot a Phone
[**postTelephonyProvidersEdgesPhonebasesettings**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesPhonebasesettings) | **POST** /api/v2/telephony/providers/edges/phonebasesettings | Create a new Phone Base Settings object
[**postTelephonyProvidersEdgesPhones**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesPhones) | **POST** /api/v2/telephony/providers/edges/phones | Create a new Phone
[**postTelephonyProvidersEdgesPhonesReboot**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesPhonesReboot) | **POST** /api/v2/telephony/providers/edges/phones/reboot | Reboot Multiple Phones
[**postTelephonyProvidersEdgesSiteOutboundroutes**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesSiteOutboundroutes) | **POST** /api/v2/telephony/providers/edges/sites/{siteId}/outboundroutes | Create outbound route
[**postTelephonyProvidersEdgesSiteRebalance**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesSiteRebalance) | **POST** /api/v2/telephony/providers/edges/sites/{siteId}/rebalance | Triggers the rebalance operation.
[**postTelephonyProvidersEdgesSites**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesSites) | **POST** /api/v2/telephony/providers/edges/sites | Create a Site.
[**postTelephonyProvidersEdgesTrunkbasesettings**](TelephonyProvidersEdgeApi.md#postTelephonyProvidersEdgesTrunkbasesettings) | **POST** /api/v2/telephony/providers/edges/trunkbasesettings | Create a Trunk Base Settings object
[**putTelephonyProvidersEdge**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdge) | **PUT** /api/v2/telephony/providers/edges/{edgeId} | Update a edge.
[**putTelephonyProvidersEdgeLine**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgeLine) | **PUT** /api/v2/telephony/providers/edges/{edgeId}/lines/{lineId} | Update a line.
[**putTelephonyProvidersEdgeLogicalinterface**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgeLogicalinterface) | **PUT** /api/v2/telephony/providers/edges/{edgeId}/logicalinterfaces/{interfaceId} | Update an edge logical interface.
[**putTelephonyProvidersEdgesCertificateauthority**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesCertificateauthority) | **PUT** /api/v2/telephony/providers/edges/certificateauthorities/{certificateId} | Update a certificate authority.
[**putTelephonyProvidersEdgesDid**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesDid) | **PUT** /api/v2/telephony/providers/edges/dids/{didId} | Update a DID by ID.
[**putTelephonyProvidersEdgesDidpool**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesDidpool) | **PUT** /api/v2/telephony/providers/edges/didpools/{didPoolId} | Update a DID Pool by ID.
[**putTelephonyProvidersEdgesEdgegroup**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesEdgegroup) | **PUT** /api/v2/telephony/providers/edges/edgegroups/{edgeGroupId} | Update an edge group.
[**putTelephonyProvidersEdgesEdgegroupEdgetrunkbase**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesEdgegroupEdgetrunkbase) | **PUT** /api/v2/telephony/providers/edges/edgegroups/{edgegroupId}/edgetrunkbases/{edgetrunkbaseId} | Update the edge trunk base associated with the edge group
[**putTelephonyProvidersEdgesExtension**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesExtension) | **PUT** /api/v2/telephony/providers/edges/extensions/{extensionId} | Update an extension by ID.
[**putTelephonyProvidersEdgesExtensionpool**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesExtensionpool) | **PUT** /api/v2/telephony/providers/edges/extensionpools/{extensionPoolId} | Update an extension pool by ID
[**putTelephonyProvidersEdgesOutboundroute**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesOutboundroute) | **PUT** /api/v2/telephony/providers/edges/outboundroutes/{outboundRouteId} | Update outbound route
[**putTelephonyProvidersEdgesPhone**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesPhone) | **PUT** /api/v2/telephony/providers/edges/phones/{phoneId} | Update a Phone by ID
[**putTelephonyProvidersEdgesPhonebasesetting**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesPhonebasesetting) | **PUT** /api/v2/telephony/providers/edges/phonebasesettings/{phoneBaseId} | Update a Phone Base Settings by ID
[**putTelephonyProvidersEdgesSite**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesSite) | **PUT** /api/v2/telephony/providers/edges/sites/{siteId} | Update a Site by ID.
[**putTelephonyProvidersEdgesSiteNumberplans**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesSiteNumberplans) | **PUT** /api/v2/telephony/providers/edges/sites/{siteId}/numberplans | Update the list of Number Plans. A user can update maximum 200 number plans at a time.
[**putTelephonyProvidersEdgesSiteOutboundroute**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesSiteOutboundroute) | **PUT** /api/v2/telephony/providers/edges/sites/{siteId}/outboundroutes/{outboundRouteId} | Update outbound route
[**putTelephonyProvidersEdgesTrunkbasesetting**](TelephonyProvidersEdgeApi.md#putTelephonyProvidersEdgesTrunkbasesetting) | **PUT** /api/v2/telephony/providers/edges/trunkbasesettings/{trunkBaseSettingsId} | Update a Trunk Base Settings object by ID


# **deleteTelephonyProvidersEdge**
> deleteTelephonyProvidersEdge($edgeId)

Delete a edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID

try {
    $apiInstance->deleteTelephonyProvidersEdge($edgeId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgeLogicalinterface**
> deleteTelephonyProvidersEdgeLogicalinterface($edgeId, $interfaceId)

Delete an edge logical interface



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$interfaceId = "interfaceId_example"; // string | Interface ID

try {
    $apiInstance->deleteTelephonyProvidersEdgeLogicalinterface($edgeId, $interfaceId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgeLogicalinterface: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **interfaceId** | **string**| Interface ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgeSoftwareupdate**
> deleteTelephonyProvidersEdgeSoftwareupdate($edgeId)

Cancels any in-progress update for this edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID

try {
    $apiInstance->deleteTelephonyProvidersEdgeSoftwareupdate($edgeId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgeSoftwareupdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesCertificateauthority**
> deleteTelephonyProvidersEdgesCertificateauthority($certificateId)

Delete a certificate authority.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificateId = "certificateId_example"; // string | Certificate ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesCertificateauthority($certificateId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesCertificateauthority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificateId** | **string**| Certificate ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesDidpool**
> deleteTelephonyProvidersEdgesDidpool($didPoolId)

Delete a DID Pool by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$didPoolId = "didPoolId_example"; // string | DID pool ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesDidpool($didPoolId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesDidpool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **didPoolId** | **string**| DID pool ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesEdgegroup**
> deleteTelephonyProvidersEdgesEdgegroup($edgeGroupId)

Delete an edge group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeGroupId = "edgeGroupId_example"; // string | Edge group ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesEdgegroup($edgeGroupId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesEdgegroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeGroupId** | **string**| Edge group ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesExtensionpool**
> deleteTelephonyProvidersEdgesExtensionpool($extensionPoolId)

Delete an extension pool by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extensionPoolId = "extensionPoolId_example"; // string | Extension pool ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesExtensionpool($extensionPoolId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesExtensionpool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extensionPoolId** | **string**| Extension pool ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesOutboundroute**
> deleteTelephonyProvidersEdgesOutboundroute($outboundRouteId)

Delete Outbound Route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$outboundRouteId = "outboundRouteId_example"; // string | Outbound route ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesOutboundroute($outboundRouteId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesOutboundroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outboundRouteId** | **string**| Outbound route ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesPhone**
> deleteTelephonyProvidersEdgesPhone($phoneId)

Delete a Phone by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = "phoneId_example"; // string | Phone ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesPhone($phoneId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneId** | **string**| Phone ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesPhonebasesetting**
> deleteTelephonyProvidersEdgesPhonebasesetting($phoneBaseId)

Delete a Phone Base Settings by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneBaseId = "phoneBaseId_example"; // string | Phone base ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesPhonebasesetting($phoneBaseId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesPhonebasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneBaseId** | **string**| Phone base ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesSite**
> deleteTelephonyProvidersEdgesSite($siteId)

Delete a Site by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesSite($siteId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesSiteOutboundroute**
> deleteTelephonyProvidersEdgesSiteOutboundroute($siteId, $outboundRouteId)

Delete Outbound Route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$outboundRouteId = "outboundRouteId_example"; // string | Outbound route ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesSiteOutboundroute($siteId, $outboundRouteId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesSiteOutboundroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **outboundRouteId** | **string**| Outbound route ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTelephonyProvidersEdgesTrunkbasesetting**
> deleteTelephonyProvidersEdgesTrunkbasesetting($trunkBaseSettingsId)

Delete a Trunk Base Settings object by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkBaseSettingsId = "trunkBaseSettingsId_example"; // string | Trunk Base ID

try {
    $apiInstance->deleteTelephonyProvidersEdgesTrunkbasesetting($trunkBaseSettingsId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->deleteTelephonyProvidersEdgesTrunkbasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkBaseSettingsId** | **string**| Trunk Base ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurationSchemasEdgesVnext**
> \PureCloudPlatform\Client\V2\Model\SchemaCategoryEntityListing getConfigurationSchemasEdgesVnext($pageSize, $pageNumber)

Lists available schema categories (Deprecated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConfigurationSchemasEdgesVnext($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getConfigurationSchemasEdgesVnext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SchemaCategoryEntityListing**](../Model/SchemaCategoryEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurationSchemasEdgesVnextSchemaCategory**
> \PureCloudPlatform\Client\V2\Model\SchemaReferenceEntityListing getConfigurationSchemasEdgesVnextSchemaCategory($schemaCategory, $pageSize, $pageNumber)

List schemas of a specific category (Deprecated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schemaCategory = "schemaCategory_example"; // string | Schema category
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConfigurationSchemasEdgesVnextSchemaCategory($schemaCategory, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getConfigurationSchemasEdgesVnextSchemaCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schemaCategory** | **string**| Schema category |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SchemaReferenceEntityListing**](../Model/SchemaReferenceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurationSchemasEdgesVnextSchemaCategorySchemaType**
> \PureCloudPlatform\Client\V2\Model\SchemaReferenceEntityListing getConfigurationSchemasEdgesVnextSchemaCategorySchemaType($schemaCategory, $schemaType, $pageSize, $pageNumber)

List schemas of a specific category (Deprecated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schemaCategory = "schemaCategory_example"; // string | Schema category
$schemaType = "schemaType_example"; // string | Schema type
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getConfigurationSchemasEdgesVnextSchemaCategorySchemaType($schemaCategory, $schemaType, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getConfigurationSchemasEdgesVnextSchemaCategorySchemaType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schemaCategory** | **string**| Schema category |
 **schemaType** | **string**| Schema type |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SchemaReferenceEntityListing**](../Model/SchemaReferenceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaId**
> \PureCloudPlatform\Client\V2\Model\Organization getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaId($schemaCategory, $schemaType, $schemaId)

Get a json schema (Deprecated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schemaCategory = "schemaCategory_example"; // string | Schema category
$schemaType = "schemaType_example"; // string | Schema type
$schemaId = "schemaId_example"; // string | Schema ID

try {
    $result = $apiInstance->getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaId($schemaCategory, $schemaType, $schemaId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schemaCategory** | **string**| Schema category |
 **schemaType** | **string**| Schema type |
 **schemaId** | **string**| Schema ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Organization**](../Model/Organization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaIdExtensionTypeMetadataId**
> \PureCloudPlatform\Client\V2\Model\Organization getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaIdExtensionTypeMetadataId($schemaCategory, $schemaType, $schemaId, $extensionType, $metadataId, $type)

Get metadata for a schema (Deprecated)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schemaCategory = "schemaCategory_example"; // string | Schema category
$schemaType = "schemaType_example"; // string | Schema type
$schemaId = "schemaId_example"; // string | Schema ID
$extensionType = "extensionType_example"; // string | extension
$metadataId = "metadataId_example"; // string | Metadata ID
$type = "type_example"; // string | Type

try {
    $result = $apiInstance->getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaIdExtensionTypeMetadataId($schemaCategory, $schemaType, $schemaId, $extensionType, $metadataId, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getConfigurationSchemasEdgesVnextSchemaCategorySchemaTypeSchemaIdExtensionTypeMetadataId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schemaCategory** | **string**| Schema category |
 **schemaType** | **string**| Schema type |
 **schemaId** | **string**| Schema ID |
 **extensionType** | **string**| extension |
 **metadataId** | **string**| Metadata ID |
 **type** | **string**| Type | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Organization**](../Model/Organization.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdge**
> \PureCloudPlatform\Client\V2\Model\Edge getTelephonyProvidersEdge($edgeId, $expand)

Get edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$expand = array("expand_example"); // string[] | Fields to expand in the response, comma-separated

try {
    $result = $apiInstance->getTelephonyProvidersEdge($edgeId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **expand** | [**string[]**](../Model/string.md)| Fields to expand in the response, comma-separated | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\Edge**](../Model/Edge.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeLine**
> \PureCloudPlatform\Client\V2\Model\EdgeLine getTelephonyProvidersEdgeLine($edgeId, $lineId)

Get line



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$lineId = "lineId_example"; // string | Line ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgeLine($edgeId, $lineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **lineId** | **string**| Line ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeLine**](../Model/EdgeLine.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeLines**
> \PureCloudPlatform\Client\V2\Model\EdgeLineEntityListing getTelephonyProvidersEdgeLines($edgeId, $pageSize, $pageNumber)

Get the list of lines.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getTelephonyProvidersEdgeLines($edgeId, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeLineEntityListing**](../Model/EdgeLineEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeLogicalinterface**
> \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface getTelephonyProvidersEdgeLogicalinterface($edgeId, $interfaceId, $expand)

Get an edge logical interface



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$interfaceId = "interfaceId_example"; // string | Interface ID
$expand = array("expand_example"); // string[] | Field to expand in the response

try {
    $result = $apiInstance->getTelephonyProvidersEdgeLogicalinterface($edgeId, $interfaceId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeLogicalinterface: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **interfaceId** | **string**| Interface ID |
 **expand** | [**string[]**](../Model/string.md)| Field to expand in the response | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainLogicalInterface**](../Model/DomainLogicalInterface.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeLogicalinterfaces**
> \PureCloudPlatform\Client\V2\Model\LogicalInterfaceEntityListing getTelephonyProvidersEdgeLogicalinterfaces($edgeId, $expand)

Get edge logical interfaces.

Retrieve a list of all configured logical interfaces from a specific edge.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$expand = array("expand_example"); // string[] | Field to expand in the response

try {
    $result = $apiInstance->getTelephonyProvidersEdgeLogicalinterfaces($edgeId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeLogicalinterfaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **expand** | [**string[]**](../Model/string.md)| Field to expand in the response | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LogicalInterfaceEntityListing**](../Model/LogicalInterfaceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeLogsJob**
> \PureCloudPlatform\Client\V2\Model\EdgeLogsJob getTelephonyProvidersEdgeLogsJob($edgeId, $jobId)

Get an Edge logs job.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$jobId = "jobId_example"; // string | Job ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgeLogsJob($edgeId, $jobId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeLogsJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **jobId** | **string**| Job ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeLogsJob**](../Model/EdgeLogsJob.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeMetrics**
> \PureCloudPlatform\Client\V2\Model\EdgeMetrics getTelephonyProvidersEdgeMetrics($edgeId)

Get the edge metrics.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge Id

try {
    $result = $apiInstance->getTelephonyProvidersEdgeMetrics($edgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeMetrics**](../Model/EdgeMetrics.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgePhysicalinterface**
> \PureCloudPlatform\Client\V2\Model\DomainPhysicalInterface getTelephonyProvidersEdgePhysicalinterface($edgeId, $interfaceId)

Get edge physical interface.

Retrieve a physical interface from a specific edge.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$interfaceId = "interfaceId_example"; // string | Interface ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgePhysicalinterface($edgeId, $interfaceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgePhysicalinterface: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **interfaceId** | **string**| Interface ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainPhysicalInterface**](../Model/DomainPhysicalInterface.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgePhysicalinterfaces**
> \PureCloudPlatform\Client\V2\Model\PhysicalInterfaceEntityListing getTelephonyProvidersEdgePhysicalinterfaces($edgeId)

Retrieve a list of all configured physical interfaces from a specific edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgePhysicalinterfaces($edgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgePhysicalinterfaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhysicalInterfaceEntityListing**](../Model/PhysicalInterfaceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeSetuppackage**
> \PureCloudPlatform\Client\V2\Model\VmPairingInfo getTelephonyProvidersEdgeSetuppackage($edgeId)

Get the setup package for a locally deployed edge device. This is needed to complete the setup process for the virtual edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgeSetuppackage($edgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeSetuppackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\VmPairingInfo**](../Model/VmPairingInfo.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeSoftwareupdate**
> \PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto getTelephonyProvidersEdgeSoftwareupdate($edgeId)

Gets software update status information about any edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgeSoftwareupdate($edgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeSoftwareupdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto**](../Model/DomainEdgeSoftwareUpdateDto.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeSoftwareversions**
> \PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareVersionDtoEntityListing getTelephonyProvidersEdgeSoftwareversions($edgeId)

Gets all the available software versions for this edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgeSoftwareversions($edgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeSoftwareversions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareVersionDtoEntityListing**](../Model/DomainEdgeSoftwareVersionDtoEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgeTrunks**
> \PureCloudPlatform\Client\V2\Model\TrunkEntityListing getTelephonyProvidersEdgeTrunks($edgeId, $pageNumber, $pageSize, $sortBy, $sortOrder, $trunkBaseId, $trunkType)

Get the list of available trunks for the given Edge.

Trunks are created by assigning trunk base settings to an Edge or Edge Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Value by which to sort
$sortOrder = "ASC"; // string | Sort order
$trunkBaseId = "trunkBaseId_example"; // string | Filter by Trunk Base Ids
$trunkType = "trunkType_example"; // string | Filter by a Trunk type

try {
    $result = $apiInstance->getTelephonyProvidersEdgeTrunks($edgeId, $pageNumber, $pageSize, $sortBy, $sortOrder, $trunkBaseId, $trunkType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgeTrunks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **trunkBaseId** | **string**| Filter by Trunk Base Ids | [optional]
 **trunkType** | **string**| Filter by a Trunk type | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkEntityListing**](../Model/TrunkEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdges**
> \PureCloudPlatform\Client\V2\Model\EdgeEntityListing getTelephonyProvidersEdges($pageSize, $pageNumber, $name, $siteId, $edgeGroupId, $sortBy, $managed)

Get the list of edges.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$siteId = "siteId_example"; // string | Filter by site.id
$edgeGroupId = "edgeGroupId_example"; // string | Filter by edgeGroup.id
$sortBy = "name"; // string | Sort by
$managed = true; // bool | Filter by managed

try {
    $result = $apiInstance->getTelephonyProvidersEdges($pageSize, $pageNumber, $name, $siteId, $edgeGroupId, $sortBy, $managed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **siteId** | **string**| Filter by site.id | [optional]
 **edgeGroupId** | **string**| Filter by edgeGroup.id | [optional]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **managed** | **bool**| Filter by managed | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeEntityListing**](../Model/EdgeEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesAvailablelanguages**
> \PureCloudPlatform\Client\V2\Model\AvailableLanguageList getTelephonyProvidersEdgesAvailablelanguages()

Get the list of available languages.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTelephonyProvidersEdgesAvailablelanguages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesAvailablelanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\AvailableLanguageList**](../Model/AvailableLanguageList.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesCertificateauthorities**
> \PureCloudPlatform\Client\V2\Model\CertificateAuthorityEntityListing getTelephonyProvidersEdgesCertificateauthorities()

Get the list of certificate authorities.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTelephonyProvidersEdgesCertificateauthorities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesCertificateauthorities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\CertificateAuthorityEntityListing**](../Model/CertificateAuthorityEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesCertificateauthority**
> \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority getTelephonyProvidersEdgesCertificateauthority($certificateId)

Get a certificate authority.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificateId = "certificateId_example"; // string | Certificate ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesCertificateauthority($certificateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesCertificateauthority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificateId** | **string**| Certificate ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority**](../Model/DomainCertificateAuthority.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesDid**
> \PureCloudPlatform\Client\V2\Model\DID getTelephonyProvidersEdgesDid($didId)

Get a DID by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$didId = "didId_example"; // string | DID ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesDid($didId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesDid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **didId** | **string**| DID ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DID**](../Model/DID.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesDidpool**
> \PureCloudPlatform\Client\V2\Model\DIDPool getTelephonyProvidersEdgesDidpool($didPoolId)

Get a DID Pool by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$didPoolId = "didPoolId_example"; // string | DID pool ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesDidpool($didPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesDidpool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **didPoolId** | **string**| DID pool ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DIDPool**](../Model/DIDPool.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesDidpools**
> \PureCloudPlatform\Client\V2\Model\DIDPoolEntityListing getTelephonyProvidersEdgesDidpools($pageSize, $pageNumber, $sortBy)

Get a listing of DID Pools



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "number"; // string | Sort by

try {
    $result = $apiInstance->getTelephonyProvidersEdgesDidpools($pageSize, $pageNumber, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesDidpools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to number]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DIDPoolEntityListing**](../Model/DIDPoolEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesDids**
> \PureCloudPlatform\Client\V2\Model\DIDEntityListing getTelephonyProvidersEdgesDids($pageSize, $pageNumber, $sortBy, $sortOrder, $phoneNumber, $ownerId, $didPoolId)

Get a listing of DIDs



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "number"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$phoneNumber = "phoneNumber_example"; // string | Filter by phoneNumber
$ownerId = "ownerId_example"; // string | Filter by the owner of a phone number
$didPoolId = "didPoolId_example"; // string | Filter by the DID Pool assignment

try {
    $result = $apiInstance->getTelephonyProvidersEdgesDids($pageSize, $pageNumber, $sortBy, $sortOrder, $phoneNumber, $ownerId, $didPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesDids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to number]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **phoneNumber** | **string**| Filter by phoneNumber | [optional]
 **ownerId** | **string**| Filter by the owner of a phone number | [optional]
 **didPoolId** | **string**| Filter by the DID Pool assignment | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\DIDEntityListing**](../Model/DIDEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesEdgegroup**
> \PureCloudPlatform\Client\V2\Model\EdgeGroup getTelephonyProvidersEdgesEdgegroup($edgeGroupId, $expand)

Get edge group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeGroupId = "edgeGroupId_example"; // string | Edge group ID
$expand = array("expand_example"); // string[] | Fields to expand in the response

try {
    $result = $apiInstance->getTelephonyProvidersEdgesEdgegroup($edgeGroupId, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesEdgegroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeGroupId** | **string**| Edge group ID |
 **expand** | [**string[]**](../Model/string.md)| Fields to expand in the response | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](../Model/EdgeGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesEdgegroupEdgetrunkbase**
> \PureCloudPlatform\Client\V2\Model\EdgeTrunkBase getTelephonyProvidersEdgesEdgegroupEdgetrunkbase($edgegroupId, $edgetrunkbaseId)

Gets the edge trunk base associated with the edge group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgegroupId = "edgegroupId_example"; // string | Edge Group ID
$edgetrunkbaseId = "edgetrunkbaseId_example"; // string | Edge Trunk Base ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesEdgegroupEdgetrunkbase($edgegroupId, $edgetrunkbaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesEdgegroupEdgetrunkbase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgegroupId** | **string**| Edge Group ID |
 **edgetrunkbaseId** | **string**| Edge Trunk Base ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeTrunkBase**](../Model/EdgeTrunkBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesEdgegroups**
> \PureCloudPlatform\Client\V2\Model\EdgeGroupEntityListing getTelephonyProvidersEdgesEdgegroups($pageSize, $pageNumber, $name, $sortBy, $managed)

Get the list of edge groups.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$sortBy = "name"; // string | Sort by
$managed = true; // bool | Filter by managed

try {
    $result = $apiInstance->getTelephonyProvidersEdgesEdgegroups($pageSize, $pageNumber, $name, $sortBy, $managed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesEdgegroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **managed** | **bool**| Filter by managed | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeGroupEntityListing**](../Model/EdgeGroupEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesEdgeversionreport**
> \PureCloudPlatform\Client\V2\Model\EdgeVersionReport getTelephonyProvidersEdgesEdgeversionreport()

Get the edge version report.

The report will not have consistent data about the edge version(s) until all edges have been reset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTelephonyProvidersEdgesEdgeversionreport();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesEdgeversionreport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeVersionReport**](../Model/EdgeVersionReport.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesExtension**
> \PureCloudPlatform\Client\V2\Model\Extension getTelephonyProvidersEdgesExtension($extensionId)

Get an extension by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extensionId = "extensionId_example"; // string | Extension ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesExtension($extensionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extensionId** | **string**| Extension ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Extension**](../Model/Extension.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesExtensionpool**
> \PureCloudPlatform\Client\V2\Model\ExtensionPool getTelephonyProvidersEdgesExtensionpool($extensionPoolId)

Get an extension pool by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extensionPoolId = "extensionPoolId_example"; // string | Extension pool ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesExtensionpool($extensionPoolId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesExtensionpool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extensionPoolId** | **string**| Extension pool ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExtensionPool**](../Model/ExtensionPool.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesExtensionpools**
> \PureCloudPlatform\Client\V2\Model\ExtensionPoolEntityListing getTelephonyProvidersEdgesExtensionpools($pageSize, $pageNumber, $sortBy, $number)

Get a listing of extension pools



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "startNumber"; // string | Sort by
$number = "number_example"; // string | Number

try {
    $result = $apiInstance->getTelephonyProvidersEdgesExtensionpools($pageSize, $pageNumber, $sortBy, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesExtensionpools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to startNumber]
 **number** | **string**| Number | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExtensionPoolEntityListing**](../Model/ExtensionPoolEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesExtensions**
> \PureCloudPlatform\Client\V2\Model\ExtensionEntityListing getTelephonyProvidersEdgesExtensions($pageSize, $pageNumber, $sortBy, $sortOrder, $number)

Get a listing of extensions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "number"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$number = "number_example"; // string | Filter by number

try {
    $result = $apiInstance->getTelephonyProvidersEdgesExtensions($pageSize, $pageNumber, $sortBy, $sortOrder, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesExtensions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to number]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **number** | **string**| Filter by number | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExtensionEntityListing**](../Model/ExtensionEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesLine**
> \PureCloudPlatform\Client\V2\Model\Line getTelephonyProvidersEdgesLine($lineId)

Get a Line by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lineId = "lineId_example"; // string | Line ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesLine($lineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lineId** | **string**| Line ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Line**](../Model/Line.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesLinebasesetting**
> \PureCloudPlatform\Client\V2\Model\LineBase getTelephonyProvidersEdgesLinebasesetting($lineBaseId)

Get a line base settings object by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lineBaseId = "lineBaseId_example"; // string | Line base ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesLinebasesetting($lineBaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesLinebasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lineBaseId** | **string**| Line base ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineBase**](../Model/LineBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesLinebasesettings**
> \PureCloudPlatform\Client\V2\Model\LineBaseEntityListing getTelephonyProvidersEdgesLinebasesettings($pageNumber, $pageSize, $sortBy, $sortOrder)

Get a listing of line base settings objects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Value by which to sort
$sortOrder = "ASC"; // string | Sort order

try {
    $result = $apiInstance->getTelephonyProvidersEdgesLinebasesettings($pageNumber, $pageSize, $sortBy, $sortOrder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesLinebasesettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineBaseEntityListing**](../Model/LineBaseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesLines**
> \PureCloudPlatform\Client\V2\Model\LineEntityListing getTelephonyProvidersEdgesLines($pageSize, $pageNumber, $name, $sortBy, $expand)

Get a list of Lines



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$sortBy = "name"; // string | Value by which to sort
$expand = array("expand_example"); // string[] | Fields to expand in the response, comma-separated

try {
    $result = $apiInstance->getTelephonyProvidersEdgesLines($pageSize, $pageNumber, $name, $sortBy, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesLines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **expand** | [**string[]**](../Model/string.md)| Fields to expand in the response, comma-separated | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LineEntityListing**](../Model/LineEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesLinesTemplate**
> \PureCloudPlatform\Client\V2\Model\Line getTelephonyProvidersEdgesLinesTemplate($lineBaseSettingsId)

Get a Line instance template based on a Line Base Settings object. This object can then be modified and saved as a new Line instance



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lineBaseSettingsId = "lineBaseSettingsId_example"; // string | The id of a Line Base Settings object upon which to base this Line

try {
    $result = $apiInstance->getTelephonyProvidersEdgesLinesTemplate($lineBaseSettingsId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesLinesTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lineBaseSettingsId** | **string**| The id of a Line Base Settings object upon which to base this Line |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Line**](../Model/Line.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesLogicalinterfaces**
> \PureCloudPlatform\Client\V2\Model\LogicalInterfaceEntityListing getTelephonyProvidersEdgesLogicalinterfaces($edgeIds, $expand)

Get edge logical interfaces.

Retrieve the configured logical interfaces for a list edges. Only 100 edges can be requested at a time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeIds = "edgeIds_example"; // string | Comma separated list of Edge Id's
$expand = array("expand_example"); // string[] | Field to expand in the response

try {
    $result = $apiInstance->getTelephonyProvidersEdgesLogicalinterfaces($edgeIds, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesLogicalinterfaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeIds** | **string**| Comma separated list of Edge Id&#39;s |
 **expand** | [**string[]**](../Model/string.md)| Field to expand in the response | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\LogicalInterfaceEntityListing**](../Model/LogicalInterfaceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesMetrics**
> \PureCloudPlatform\Client\V2\Model\EdgeMetrics[] getTelephonyProvidersEdgesMetrics($edgeIds)

Get the metrics for a list of edges.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeIds = "edgeIds_example"; // string | Comma separated list of Edge Id's

try {
    $result = $apiInstance->getTelephonyProvidersEdgesMetrics($edgeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeIds** | **string**| Comma separated list of Edge Id&#39;s |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeMetrics[]**](../Model/EdgeMetrics.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesOutboundroute**
> \PureCloudPlatform\Client\V2\Model\OutboundRoute getTelephonyProvidersEdgesOutboundroute($outboundRouteId)

Get outbound route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$outboundRouteId = "outboundRouteId_example"; // string | Outbound route ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesOutboundroute($outboundRouteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesOutboundroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outboundRouteId** | **string**| Outbound route ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRoute**](../Model/OutboundRoute.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesOutboundroutes**
> \PureCloudPlatform\Client\V2\Model\OutboundRouteEntityListing getTelephonyProvidersEdgesOutboundroutes($pageSize, $pageNumber, $name, $siteId, $externalTrunkBasesIds, $sortBy)

Get outbound routes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$siteId = "siteId_example"; // string | Filter by site.id
$externalTrunkBasesIds = "externalTrunkBasesIds_example"; // string | Filter by externalTrunkBases.ids
$sortBy = "name"; // string | Sort by

try {
    $result = $apiInstance->getTelephonyProvidersEdgesOutboundroutes($pageSize, $pageNumber, $name, $siteId, $externalTrunkBasesIds, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesOutboundroutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **siteId** | **string**| Filter by site.id | [optional]
 **externalTrunkBasesIds** | **string**| Filter by externalTrunkBases.ids | [optional]
 **sortBy** | **string**| Sort by | [optional] [default to name]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRouteEntityListing**](../Model/OutboundRouteEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhone**
> \PureCloudPlatform\Client\V2\Model\Phone getTelephonyProvidersEdgesPhone($phoneId)

Get a Phone by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = "phoneId_example"; // string | Phone ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhone($phoneId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneId** | **string**| Phone ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Phone**](../Model/Phone.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhonebasesetting**
> \PureCloudPlatform\Client\V2\Model\PhoneBase getTelephonyProvidersEdgesPhonebasesetting($phoneBaseId)

Get a Phone Base Settings object by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneBaseId = "phoneBaseId_example"; // string | Phone base ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhonebasesetting($phoneBaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhonebasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneBaseId** | **string**| Phone base ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneBase**](../Model/PhoneBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhonebasesettings**
> \PureCloudPlatform\Client\V2\Model\PhoneBaseEntityListing getTelephonyProvidersEdgesPhonebasesettings($pageSize, $pageNumber, $sortBy, $sortOrder, $expand, $name)

Get a list of Phone Base Settings objects



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Value by which to sort
$sortOrder = "ASC"; // string | Sort order
$expand = array("expand_example"); // string[] | Fields to expand in the response, comma-separated
$name = "name_example"; // string | Name

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhonebasesettings($pageSize, $pageNumber, $sortBy, $sortOrder, $expand, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhonebasesettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **expand** | [**string[]**](../Model/string.md)| Fields to expand in the response, comma-separated | [optional]
 **name** | **string**| Name | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneBaseEntityListing**](../Model/PhoneBaseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhonebasesettingsAvailablemetabases**
> \PureCloudPlatform\Client\V2\Model\PhoneMetaBaseEntityListing getTelephonyProvidersEdgesPhonebasesettingsAvailablemetabases($pageSize, $pageNumber)

Get a list of available makes and models to create a new Phone Base Settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhonebasesettingsAvailablemetabases($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhonebasesettingsAvailablemetabases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneMetaBaseEntityListing**](../Model/PhoneMetaBaseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhonebasesettingsTemplate**
> \PureCloudPlatform\Client\V2\Model\PhoneBase getTelephonyProvidersEdgesPhonebasesettingsTemplate($phoneMetabaseId)

Get a Phone Base Settings instance template from a given make and model. This object can then be modified and saved as a new Phone Base Settings instance



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneMetabaseId = "phoneMetabaseId_example"; // string | The id of a metabase object upon which to base this Phone Base Settings

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhonebasesettingsTemplate($phoneMetabaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhonebasesettingsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneMetabaseId** | **string**| The id of a metabase object upon which to base this Phone Base Settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneBase**](../Model/PhoneBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhones**
> \PureCloudPlatform\Client\V2\Model\PhoneEntityListing getTelephonyProvidersEdgesPhones($pageNumber, $pageSize, $sortBy, $sortOrder, $siteId, $webRtcUserId, $phoneBaseSettingsId, $linesLoggedInUserId, $linesDefaultForUserId, $phoneHardwareId, $linesId, $linesName, $name, $expand, $fields)

Get a list of Phone Instances



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Value by which to sort
$sortOrder = "ASC"; // string | Sort order
$siteId = "siteId_example"; // string | Filter by site.id
$webRtcUserId = "webRtcUserId_example"; // string | Filter by webRtcUser.id
$phoneBaseSettingsId = "phoneBaseSettingsId_example"; // string | Filter by phoneBaseSettings.id
$linesLoggedInUserId = "linesLoggedInUserId_example"; // string | Filter by lines.loggedInUser.id
$linesDefaultForUserId = "linesDefaultForUserId_example"; // string | Filter by lines.defaultForUser.id
$phoneHardwareId = "phoneHardwareId_example"; // string | Filter by phone_hardwareId
$linesId = "linesId_example"; // string | Filter by lines.id
$linesName = "linesName_example"; // string | Filter by lines.name
$name = "name_example"; // string | Name of the Phone to filter by
$expand = array("expand_example"); // string[] | Fields to expand in the response, comma-separated
$fields = array("fields_example"); // string[] | Fields and properties to get, comma-separated

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhones($pageNumber, $pageSize, $sortBy, $sortOrder, $siteId, $webRtcUserId, $phoneBaseSettingsId, $linesLoggedInUserId, $linesDefaultForUserId, $phoneHardwareId, $linesId, $linesName, $name, $expand, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **siteId** | **string**| Filter by site.id | [optional]
 **webRtcUserId** | **string**| Filter by webRtcUser.id | [optional]
 **phoneBaseSettingsId** | **string**| Filter by phoneBaseSettings.id | [optional]
 **linesLoggedInUserId** | **string**| Filter by lines.loggedInUser.id | [optional]
 **linesDefaultForUserId** | **string**| Filter by lines.defaultForUser.id | [optional]
 **phoneHardwareId** | **string**| Filter by phone_hardwareId | [optional]
 **linesId** | **string**| Filter by lines.id | [optional]
 **linesName** | **string**| Filter by lines.name | [optional]
 **name** | **string**| Name of the Phone to filter by | [optional]
 **expand** | [**string[]**](../Model/string.md)| Fields to expand in the response, comma-separated | [optional]
 **fields** | [**string[]**](../Model/string.md)| Fields and properties to get, comma-separated | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneEntityListing**](../Model/PhoneEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhonesTemplate**
> \PureCloudPlatform\Client\V2\Model\Phone getTelephonyProvidersEdgesPhonesTemplate($phoneBaseSettingsId)

Get a Phone instance template based on a Phone Base Settings object. This object can then be modified and saved as a new Phone instance



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneBaseSettingsId = "phoneBaseSettingsId_example"; // string | The id of a Phone Base Settings object upon which to base this Phone

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhonesTemplate($phoneBaseSettingsId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhonesTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneBaseSettingsId** | **string**| The id of a Phone Base Settings object upon which to base this Phone |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Phone**](../Model/Phone.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesPhysicalinterfaces**
> \PureCloudPlatform\Client\V2\Model\PhysicalInterfaceEntityListing getTelephonyProvidersEdgesPhysicalinterfaces($edgeIds)

Get physical interfaces for edges.

Retrieves a list of all configured physical interfaces for a list of edges. Only 100 edges can be requested at a time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeIds = "edgeIds_example"; // string | Comma separated list of Edge Id's

try {
    $result = $apiInstance->getTelephonyProvidersEdgesPhysicalinterfaces($edgeIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesPhysicalinterfaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeIds** | **string**| Comma separated list of Edge Id&#39;s |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhysicalInterfaceEntityListing**](../Model/PhysicalInterfaceEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSite**
> \PureCloudPlatform\Client\V2\Model\Site getTelephonyProvidersEdgesSite($siteId)

Get a Site by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSite($siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Site**](../Model/Site.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSiteNumberplan**
> \PureCloudPlatform\Client\V2\Model\NumberPlan getTelephonyProvidersEdgesSiteNumberplan($siteId, $numberPlanId)

Get a Number Plan by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$numberPlanId = "numberPlanId_example"; // string | Number Plan ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSiteNumberplan($siteId, $numberPlanId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSiteNumberplan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **numberPlanId** | **string**| Number Plan ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\NumberPlan**](../Model/NumberPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSiteNumberplans**
> \PureCloudPlatform\Client\V2\Model\NumberPlan[] getTelephonyProvidersEdgesSiteNumberplans($siteId)

Get the list of Number Plans for this Site. Only fetches the first 200 records.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSiteNumberplans($siteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSiteNumberplans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\NumberPlan[]**](../Model/NumberPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSiteNumberplansClassifications**
> string[] getTelephonyProvidersEdgesSiteNumberplansClassifications($siteId, $classification)

Get a list of Classifications for this Site



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$classification = "classification_example"; // string | Classification

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSiteNumberplansClassifications($siteId, $classification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSiteNumberplansClassifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **classification** | **string**| Classification | [optional]

### Return type

**string[]**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSiteOutboundroute**
> \PureCloudPlatform\Client\V2\Model\OutboundRouteBase getTelephonyProvidersEdgesSiteOutboundroute($siteId, $outboundRouteId)

Get an outbound route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$outboundRouteId = "outboundRouteId_example"; // string | Outbound route ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSiteOutboundroute($siteId, $outboundRouteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSiteOutboundroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **outboundRouteId** | **string**| Outbound route ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRouteBase**](../Model/OutboundRouteBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSiteOutboundroutes**
> \PureCloudPlatform\Client\V2\Model\OutboundRouteBaseEntityListing getTelephonyProvidersEdgesSiteOutboundroutes($siteId, $pageSize, $pageNumber, $name, $externalTrunkBasesIds, $sortBy)

Get outbound routes



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$name = "name_example"; // string | Name
$externalTrunkBasesIds = "externalTrunkBasesIds_example"; // string | externalTrunkBases.ids
$sortBy = "name"; // string | Sort by

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSiteOutboundroutes($siteId, $pageSize, $pageNumber, $name, $externalTrunkBasesIds, $sortBy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSiteOutboundroutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **name** | **string**| Name | [optional]
 **externalTrunkBasesIds** | **string**| externalTrunkBases.ids | [optional]
 **sortBy** | **string**| Sort by | [optional] [default to name]

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRouteBaseEntityListing**](../Model/OutboundRouteBaseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesSites**
> \PureCloudPlatform\Client\V2\Model\SiteEntityListing getTelephonyProvidersEdgesSites($pageSize, $pageNumber, $sortBy, $sortOrder, $name, $locationId, $managed)

Get the list of Sites.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 25; // int | Page size
$pageNumber = 1; // int | Page number
$sortBy = "name"; // string | Sort by
$sortOrder = "ASC"; // string | Sort order
$name = "name_example"; // string | Name
$locationId = "locationId_example"; // string | Location Id
$managed = true; // bool | Filter by managed

try {
    $result = $apiInstance->getTelephonyProvidersEdgesSites($pageSize, $pageNumber, $sortBy, $sortOrder, $name, $locationId, $managed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **sortBy** | **string**| Sort by | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **name** | **string**| Name | [optional]
 **locationId** | **string**| Location Id | [optional]
 **managed** | **bool**| Filter by managed | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\SiteEntityListing**](../Model/SiteEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTimezones**
> \PureCloudPlatform\Client\V2\Model\TimeZoneEntityListing getTelephonyProvidersEdgesTimezones($pageSize, $pageNumber)

Get a list of Edge-compatible time zones



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageSize = 1000; // int | Page size
$pageNumber = 1; // int | Page number

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTimezones($pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTimezones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageSize** | **int**| Page size | [optional] [default to 1000]
 **pageNumber** | **int**| Page number | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TimeZoneEntityListing**](../Model/TimeZoneEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunk**
> \PureCloudPlatform\Client\V2\Model\Trunk getTelephonyProvidersEdgesTrunk($trunkId)

Get a Trunk by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkId = "trunkId_example"; // string | Trunk ID

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunk($trunkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkId** | **string**| Trunk ID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Trunk**](../Model/Trunk.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunkMetrics**
> \PureCloudPlatform\Client\V2\Model\TrunkMetrics getTelephonyProvidersEdgesTrunkMetrics($trunkId)

Get the trunk metrics.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkId = "trunkId_example"; // string | Trunk Id

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunkMetrics($trunkId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunkMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkId** | **string**| Trunk Id |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkMetrics**](../Model/TrunkMetrics.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunkbasesetting**
> \PureCloudPlatform\Client\V2\Model\TrunkBase getTelephonyProvidersEdgesTrunkbasesetting($trunkBaseSettingsId, $ignoreHidden)

Get a Trunk Base Settings object by ID

Managed properties will not be returned unless the user is assigned the internal:trunk:edit permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkBaseSettingsId = "trunkBaseSettingsId_example"; // string | Trunk Base ID
$ignoreHidden = true; // bool | Set this to true to not receive trunk properties that are meant to be hidden or for internal system usage only.

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunkbasesetting($trunkBaseSettingsId, $ignoreHidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunkbasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkBaseSettingsId** | **string**| Trunk Base ID |
 **ignoreHidden** | **bool**| Set this to true to not receive trunk properties that are meant to be hidden or for internal system usage only. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkBase**](../Model/TrunkBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunkbasesettings**
> \PureCloudPlatform\Client\V2\Model\TrunkBaseEntityListing getTelephonyProvidersEdgesTrunkbasesettings($pageNumber, $pageSize, $sortBy, $sortOrder, $recordingEnabled, $ignoreHidden, $managed, $expand, $name)

Get Trunk Base Settings listing

Managed properties will not be returned unless the user is assigned the internal:trunk:edit permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Value by which to sort
$sortOrder = "ASC"; // string | Sort order
$recordingEnabled = true; // bool | Filter trunks by recording enabled
$ignoreHidden = true; // bool | Set this to true to not receive trunk properties that are meant to be hidden or for internal system usage only.
$managed = true; // bool | Filter by managed
$expand = array("expand_example"); // string[] | Fields to expand in the response, comma-separated
$name = "name_example"; // string | Name of the TrunkBase to filter by

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunkbasesettings($pageNumber, $pageSize, $sortBy, $sortOrder, $recordingEnabled, $ignoreHidden, $managed, $expand, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunkbasesettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **recordingEnabled** | **bool**| Filter trunks by recording enabled | [optional]
 **ignoreHidden** | **bool**| Set this to true to not receive trunk properties that are meant to be hidden or for internal system usage only. | [optional]
 **managed** | **bool**| Filter by managed | [optional]
 **expand** | [**string[]**](../Model/string.md)| Fields to expand in the response, comma-separated | [optional]
 **name** | **string**| Name of the TrunkBase to filter by | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkBaseEntityListing**](../Model/TrunkBaseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunkbasesettingsAvailablemetabases**
> \PureCloudPlatform\Client\V2\Model\TrunkMetabaseEntityListing getTelephonyProvidersEdgesTrunkbasesettingsAvailablemetabases($type, $pageSize, $pageNumber)

Get a list of available makes and models to create a new Trunk Base Settings



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | 
$pageSize = 25; // int | 
$pageNumber = 1; // int | 

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunkbasesettingsAvailablemetabases($type, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunkbasesettingsAvailablemetabases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  | [optional]
 **pageSize** | **int**|  | [optional] [default to 25]
 **pageNumber** | **int**|  | [optional] [default to 1]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkMetabaseEntityListing**](../Model/TrunkMetabaseEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunkbasesettingsTemplate**
> \PureCloudPlatform\Client\V2\Model\TrunkBase getTelephonyProvidersEdgesTrunkbasesettingsTemplate($trunkMetabaseId)

Get a Trunk Base Settings instance template from a given make and model. This object can then be modified and saved as a new Trunk Base Settings instance



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkMetabaseId = "trunkMetabaseId_example"; // string | The id of a metabase object upon which to base this Trunk Base Settings

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunkbasesettingsTemplate($trunkMetabaseId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunkbasesettingsTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkMetabaseId** | **string**| The id of a metabase object upon which to base this Trunk Base Settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkBase**](../Model/TrunkBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunks**
> \PureCloudPlatform\Client\V2\Model\TrunkEntityListing getTelephonyProvidersEdgesTrunks($pageNumber, $pageSize, $sortBy, $sortOrder, $edgeId, $trunkBaseId, $trunkType)

Get the list of available trunks.

Trunks are created by assigning trunk base settings to an Edge or Edge Group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageNumber = 1; // int | Page number
$pageSize = 25; // int | Page size
$sortBy = "name"; // string | Value by which to sort
$sortOrder = "ASC"; // string | Sort order
$edgeId = "edgeId_example"; // string | Filter by Edge Ids
$trunkBaseId = "trunkBaseId_example"; // string | Filter by Trunk Base Ids
$trunkType = "trunkType_example"; // string | Filter by a Trunk type

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunks($pageNumber, $pageSize, $sortBy, $sortOrder, $edgeId, $trunkBaseId, $trunkType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageNumber** | **int**| Page number | [optional] [default to 1]
 **pageSize** | **int**| Page size | [optional] [default to 25]
 **sortBy** | **string**| Value by which to sort | [optional] [default to name]
 **sortOrder** | **string**| Sort order | [optional] [default to ASC]
 **edgeId** | **string**| Filter by Edge Ids | [optional]
 **trunkBaseId** | **string**| Filter by Trunk Base Ids | [optional]
 **trunkType** | **string**| Filter by a Trunk type | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkEntityListing**](../Model/TrunkEntityListing.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunksMetrics**
> \PureCloudPlatform\Client\V2\Model\TrunkMetrics[] getTelephonyProvidersEdgesTrunksMetrics($trunkIds)

Get the metrics for a list of trunks.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkIds = "trunkIds_example"; // string | Comma separated list of Trunk Id's

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunksMetrics($trunkIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunksMetrics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkIds** | **string**| Comma separated list of Trunk Id&#39;s |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkMetrics[]**](../Model/TrunkMetrics.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTelephonyProvidersEdgesTrunkswithrecording**
> \PureCloudPlatform\Client\V2\Model\TrunkRecordingEnabledCount getTelephonyProvidersEdgesTrunkswithrecording($trunkType)

Get Counts of trunks that have recording disabled or enabled



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkType = "trunkType_example"; // string | The type of this trunk base.

try {
    $result = $apiInstance->getTelephonyProvidersEdgesTrunkswithrecording($trunkType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->getTelephonyProvidersEdgesTrunkswithrecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkType** | **string**| The type of this trunk base. | [optional]

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkRecordingEnabledCount**](../Model/TrunkRecordingEnabledCount.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeLogicalinterfaces**
> \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface postTelephonyProvidersEdgeLogicalinterfaces($edgeId, $body)

Create an edge logical interface.

Create

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$body = new \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface(); // \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface | Logical interface

try {
    $result = $apiInstance->postTelephonyProvidersEdgeLogicalinterfaces($edgeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeLogicalinterfaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainLogicalInterface**](../Model/DomainLogicalInterface.md)| Logical interface |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainLogicalInterface**](../Model/DomainLogicalInterface.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeLogsJobUpload**
> postTelephonyProvidersEdgeLogsJobUpload($edgeId, $jobId, $body)

Request that the specified fileIds be uploaded from the Edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$jobId = "jobId_example"; // string | Job ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeLogsJobUploadRequest(); // \PureCloudPlatform\Client\V2\Model\EdgeLogsJobUploadRequest | Log upload request

try {
    $apiInstance->postTelephonyProvidersEdgeLogsJobUpload($edgeId, $jobId, $body);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeLogsJobUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **jobId** | **string**| Job ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeLogsJobUploadRequest**](../Model/EdgeLogsJobUploadRequest.md)| Log upload request |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeLogsJobs**
> \PureCloudPlatform\Client\V2\Model\EdgeLogsJobResponse postTelephonyProvidersEdgeLogsJobs($edgeId, $body)

Create a job to upload a list of Edge logs.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeLogsJobRequest(); // \PureCloudPlatform\Client\V2\Model\EdgeLogsJobRequest | EdgeLogsJobRequest

try {
    $result = $apiInstance->postTelephonyProvidersEdgeLogsJobs($edgeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeLogsJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeLogsJobRequest**](../Model/EdgeLogsJobRequest.md)| EdgeLogsJobRequest |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeLogsJobResponse**](../Model/EdgeLogsJobResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeReboot**
> string postTelephonyProvidersEdgeReboot($edgeId, $body)

Reboot an Edge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeRebootParameters(); // \PureCloudPlatform\Client\V2\Model\EdgeRebootParameters | Parameters for the edge reboot

try {
    $result = $apiInstance->postTelephonyProvidersEdgeReboot($edgeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeReboot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeRebootParameters**](../Model/EdgeRebootParameters.md)| Parameters for the edge reboot | [optional]

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeSoftwareupdate**
> \PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto postTelephonyProvidersEdgeSoftwareupdate($edgeId, $body)

Starts a software update for this edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$body = new \PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto(); // \PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto | Software update request

try {
    $result = $apiInstance->postTelephonyProvidersEdgeSoftwareupdate($edgeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeSoftwareupdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto**](../Model/DomainEdgeSoftwareUpdateDto.md)| Software update request |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainEdgeSoftwareUpdateDto**](../Model/DomainEdgeSoftwareUpdateDto.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeStatuscode**
> string postTelephonyProvidersEdgeStatuscode($edgeId, $body)

Take an Edge in or out of service



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeServiceStateRequest(); // \PureCloudPlatform\Client\V2\Model\EdgeServiceStateRequest | Edge Service State

try {
    $result = $apiInstance->postTelephonyProvidersEdgeStatuscode($edgeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeStatuscode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeServiceStateRequest**](../Model/EdgeServiceStateRequest.md)| Edge Service State | [optional]

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgeUnpair**
> string postTelephonyProvidersEdgeUnpair($edgeId)

Unpair an Edge



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge Id

try {
    $result = $apiInstance->postTelephonyProvidersEdgeUnpair($edgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgeUnpair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge Id |

### Return type

**string**

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdges**
> \PureCloudPlatform\Client\V2\Model\Edge postTelephonyProvidersEdges($body)

Create an edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Edge(); // \PureCloudPlatform\Client\V2\Model\Edge | Edge

try {
    $result = $apiInstance->postTelephonyProvidersEdges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Edge**](../Model/Edge.md)| Edge |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Edge**](../Model/Edge.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesAddressvalidation**
> \PureCloudPlatform\Client\V2\Model\ValidateAddressResponse postTelephonyProvidersEdgesAddressvalidation($body)

Validates a street address



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ValidateAddressRequest(); // \PureCloudPlatform\Client\V2\Model\ValidateAddressRequest | Address

try {
    $result = $apiInstance->postTelephonyProvidersEdgesAddressvalidation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesAddressvalidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ValidateAddressRequest**](../Model/ValidateAddressRequest.md)| Address |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ValidateAddressResponse**](../Model/ValidateAddressResponse.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesCertificateauthorities**
> \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority postTelephonyProvidersEdgesCertificateauthorities($body)

Create a certificate authority.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority(); // \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority | CertificateAuthority

try {
    $result = $apiInstance->postTelephonyProvidersEdgesCertificateauthorities($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesCertificateauthorities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority**](../Model/DomainCertificateAuthority.md)| CertificateAuthority |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority**](../Model/DomainCertificateAuthority.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesDidpools**
> \PureCloudPlatform\Client\V2\Model\DIDPool postTelephonyProvidersEdgesDidpools($body)

Create a new DID pool



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\DIDPool(); // \PureCloudPlatform\Client\V2\Model\DIDPool | DID pool

try {
    $result = $apiInstance->postTelephonyProvidersEdgesDidpools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesDidpools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\DIDPool**](../Model/DIDPool.md)| DID pool |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DIDPool**](../Model/DIDPool.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesEdgegroups**
> \PureCloudPlatform\Client\V2\Model\EdgeGroup postTelephonyProvidersEdgesEdgegroups($body)

Create an edge group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\EdgeGroup(); // \PureCloudPlatform\Client\V2\Model\EdgeGroup | EdgeGroup

try {
    $result = $apiInstance->postTelephonyProvidersEdgesEdgegroups($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesEdgegroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](../Model/EdgeGroup.md)| EdgeGroup |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](../Model/EdgeGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesExtensionpools**
> \PureCloudPlatform\Client\V2\Model\ExtensionPool postTelephonyProvidersEdgesExtensionpools($body)

Create a new extension pool



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\ExtensionPool(); // \PureCloudPlatform\Client\V2\Model\ExtensionPool | ExtensionPool

try {
    $result = $apiInstance->postTelephonyProvidersEdgesExtensionpools($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesExtensionpools: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExtensionPool**](../Model/ExtensionPool.md)| ExtensionPool |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExtensionPool**](../Model/ExtensionPool.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesOutboundroutes**
> \PureCloudPlatform\Client\V2\Model\OutboundRoute postTelephonyProvidersEdgesOutboundroutes($body)

Create outbound rule



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\OutboundRoute(); // \PureCloudPlatform\Client\V2\Model\OutboundRoute | OutboundRoute

try {
    $result = $apiInstance->postTelephonyProvidersEdgesOutboundroutes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesOutboundroutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\OutboundRoute**](../Model/OutboundRoute.md)| OutboundRoute |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRoute**](../Model/OutboundRoute.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesPhoneReboot**
> postTelephonyProvidersEdgesPhoneReboot($phoneId)

Reboot a Phone



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = "phoneId_example"; // string | Phone Id

try {
    $apiInstance->postTelephonyProvidersEdgesPhoneReboot($phoneId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesPhoneReboot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneId** | **string**| Phone Id |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesPhonebasesettings**
> \PureCloudPlatform\Client\V2\Model\PhoneBase postTelephonyProvidersEdgesPhonebasesettings($body)

Create a new Phone Base Settings object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PhoneBase(); // \PureCloudPlatform\Client\V2\Model\PhoneBase | Phone base settings

try {
    $result = $apiInstance->postTelephonyProvidersEdgesPhonebasesettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesPhonebasesettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PhoneBase**](../Model/PhoneBase.md)| Phone base settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneBase**](../Model/PhoneBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesPhones**
> \PureCloudPlatform\Client\V2\Model\Phone postTelephonyProvidersEdgesPhones($body)

Create a new Phone



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Phone(); // \PureCloudPlatform\Client\V2\Model\Phone | Phone

try {
    $result = $apiInstance->postTelephonyProvidersEdgesPhones($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesPhones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Phone**](../Model/Phone.md)| Phone |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Phone**](../Model/Phone.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesPhonesReboot**
> postTelephonyProvidersEdgesPhonesReboot($body)

Reboot Multiple Phones



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\PhonesReboot(); // \PureCloudPlatform\Client\V2\Model\PhonesReboot | Phones

try {
    $apiInstance->postTelephonyProvidersEdgesPhonesReboot($body);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesPhonesReboot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\PhonesReboot**](../Model/PhonesReboot.md)| Phones |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesSiteOutboundroutes**
> \PureCloudPlatform\Client\V2\Model\OutboundRouteBase postTelephonyProvidersEdgesSiteOutboundroutes($siteId, $body)

Create outbound route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$body = new \PureCloudPlatform\Client\V2\Model\OutboundRouteBase(); // \PureCloudPlatform\Client\V2\Model\OutboundRouteBase | OutboundRoute

try {
    $result = $apiInstance->postTelephonyProvidersEdgesSiteOutboundroutes($siteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesSiteOutboundroutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\OutboundRouteBase**](../Model/OutboundRouteBase.md)| OutboundRoute |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRouteBase**](../Model/OutboundRouteBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesSiteRebalance**
> postTelephonyProvidersEdgesSiteRebalance($siteId)

Triggers the rebalance operation.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID

try {
    $apiInstance->postTelephonyProvidersEdgesSiteRebalance($siteId);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesSiteRebalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |

### Return type

void (empty response body)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesSites**
> \PureCloudPlatform\Client\V2\Model\Site postTelephonyProvidersEdgesSites($body)

Create a Site.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\Site(); // \PureCloudPlatform\Client\V2\Model\Site | Site

try {
    $result = $apiInstance->postTelephonyProvidersEdgesSites($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\Site**](../Model/Site.md)| Site |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Site**](../Model/Site.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTelephonyProvidersEdgesTrunkbasesettings**
> \PureCloudPlatform\Client\V2\Model\TrunkBase postTelephonyProvidersEdgesTrunkbasesettings($body)

Create a Trunk Base Settings object



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \PureCloudPlatform\Client\V2\Model\TrunkBase(); // \PureCloudPlatform\Client\V2\Model\TrunkBase | Trunk base settings

try {
    $result = $apiInstance->postTelephonyProvidersEdgesTrunkbasesettings($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->postTelephonyProvidersEdgesTrunkbasesettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrunkBase**](../Model/TrunkBase.md)| Trunk base settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkBase**](../Model/TrunkBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdge**
> \PureCloudPlatform\Client\V2\Model\Edge putTelephonyProvidersEdge($edgeId, $body)

Update a edge.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$body = new \PureCloudPlatform\Client\V2\Model\Edge(); // \PureCloudPlatform\Client\V2\Model\Edge | Edge

try {
    $result = $apiInstance->putTelephonyProvidersEdge($edgeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Edge**](../Model/Edge.md)| Edge |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Edge**](../Model/Edge.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgeLine**
> \PureCloudPlatform\Client\V2\Model\EdgeLine putTelephonyProvidersEdgeLine($edgeId, $lineId, $body)

Update a line.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$lineId = "lineId_example"; // string | Line ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeLine(); // \PureCloudPlatform\Client\V2\Model\EdgeLine | Line

try {
    $result = $apiInstance->putTelephonyProvidersEdgeLine($edgeId, $lineId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgeLine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **lineId** | **string**| Line ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeLine**](../Model/EdgeLine.md)| Line |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeLine**](../Model/EdgeLine.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgeLogicalinterface**
> \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface putTelephonyProvidersEdgeLogicalinterface($edgeId, $interfaceId, $body)

Update an edge logical interface.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeId = "edgeId_example"; // string | Edge ID
$interfaceId = "interfaceId_example"; // string | Interface ID
$body = new \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface(); // \PureCloudPlatform\Client\V2\Model\DomainLogicalInterface | Logical interface

try {
    $result = $apiInstance->putTelephonyProvidersEdgeLogicalinterface($edgeId, $interfaceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgeLogicalinterface: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeId** | **string**| Edge ID |
 **interfaceId** | **string**| Interface ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainLogicalInterface**](../Model/DomainLogicalInterface.md)| Logical interface |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainLogicalInterface**](../Model/DomainLogicalInterface.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesCertificateauthority**
> \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority putTelephonyProvidersEdgesCertificateauthority($certificateId, $body)

Update a certificate authority.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$certificateId = "certificateId_example"; // string | Certificate ID
$body = new \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority(); // \PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority | Certificate authority

try {
    $result = $apiInstance->putTelephonyProvidersEdgesCertificateauthority($certificateId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesCertificateauthority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **certificateId** | **string**| Certificate ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority**](../Model/DomainCertificateAuthority.md)| Certificate authority |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DomainCertificateAuthority**](../Model/DomainCertificateAuthority.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesDid**
> \PureCloudPlatform\Client\V2\Model\DID putTelephonyProvidersEdgesDid($didId, $body)

Update a DID by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$didId = "didId_example"; // string | DID ID
$body = new \PureCloudPlatform\Client\V2\Model\DID(); // \PureCloudPlatform\Client\V2\Model\DID | DID

try {
    $result = $apiInstance->putTelephonyProvidersEdgesDid($didId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesDid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **didId** | **string**| DID ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DID**](../Model/DID.md)| DID |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DID**](../Model/DID.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesDidpool**
> \PureCloudPlatform\Client\V2\Model\DIDPool putTelephonyProvidersEdgesDidpool($didPoolId, $body)

Update a DID Pool by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$didPoolId = "didPoolId_example"; // string | DID pool ID
$body = new \PureCloudPlatform\Client\V2\Model\DIDPool(); // \PureCloudPlatform\Client\V2\Model\DIDPool | DID pool

try {
    $result = $apiInstance->putTelephonyProvidersEdgesDidpool($didPoolId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesDidpool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **didPoolId** | **string**| DID pool ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\DIDPool**](../Model/DIDPool.md)| DID pool |

### Return type

[**\PureCloudPlatform\Client\V2\Model\DIDPool**](../Model/DIDPool.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesEdgegroup**
> \PureCloudPlatform\Client\V2\Model\EdgeGroup putTelephonyProvidersEdgesEdgegroup($edgeGroupId, $body)

Update an edge group.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgeGroupId = "edgeGroupId_example"; // string | Edge group ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeGroup(); // \PureCloudPlatform\Client\V2\Model\EdgeGroup | EdgeGroup

try {
    $result = $apiInstance->putTelephonyProvidersEdgesEdgegroup($edgeGroupId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesEdgegroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgeGroupId** | **string**| Edge group ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](../Model/EdgeGroup.md)| EdgeGroup |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeGroup**](../Model/EdgeGroup.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesEdgegroupEdgetrunkbase**
> \PureCloudPlatform\Client\V2\Model\EdgeTrunkBase putTelephonyProvidersEdgesEdgegroupEdgetrunkbase($edgegroupId, $edgetrunkbaseId, $body)

Update the edge trunk base associated with the edge group



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$edgegroupId = "edgegroupId_example"; // string | Edge Group ID
$edgetrunkbaseId = "edgetrunkbaseId_example"; // string | Edge Trunk Base ID
$body = new \PureCloudPlatform\Client\V2\Model\EdgeTrunkBase(); // \PureCloudPlatform\Client\V2\Model\EdgeTrunkBase | EdgeTrunkBase

try {
    $result = $apiInstance->putTelephonyProvidersEdgesEdgegroupEdgetrunkbase($edgegroupId, $edgetrunkbaseId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesEdgegroupEdgetrunkbase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **edgegroupId** | **string**| Edge Group ID |
 **edgetrunkbaseId** | **string**| Edge Trunk Base ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\EdgeTrunkBase**](../Model/EdgeTrunkBase.md)| EdgeTrunkBase |

### Return type

[**\PureCloudPlatform\Client\V2\Model\EdgeTrunkBase**](../Model/EdgeTrunkBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesExtension**
> \PureCloudPlatform\Client\V2\Model\Extension putTelephonyProvidersEdgesExtension($extensionId, $body)

Update an extension by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extensionId = "extensionId_example"; // string | Extension ID
$body = new \PureCloudPlatform\Client\V2\Model\Extension(); // \PureCloudPlatform\Client\V2\Model\Extension | Extension

try {
    $result = $apiInstance->putTelephonyProvidersEdgesExtension($extensionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extensionId** | **string**| Extension ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Extension**](../Model/Extension.md)| Extension |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Extension**](../Model/Extension.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesExtensionpool**
> \PureCloudPlatform\Client\V2\Model\ExtensionPool putTelephonyProvidersEdgesExtensionpool($extensionPoolId, $body)

Update an extension pool by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extensionPoolId = "extensionPoolId_example"; // string | Extension pool ID
$body = new \PureCloudPlatform\Client\V2\Model\ExtensionPool(); // \PureCloudPlatform\Client\V2\Model\ExtensionPool | ExtensionPool

try {
    $result = $apiInstance->putTelephonyProvidersEdgesExtensionpool($extensionPoolId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesExtensionpool: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extensionPoolId** | **string**| Extension pool ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\ExtensionPool**](../Model/ExtensionPool.md)| ExtensionPool |

### Return type

[**\PureCloudPlatform\Client\V2\Model\ExtensionPool**](../Model/ExtensionPool.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesOutboundroute**
> \PureCloudPlatform\Client\V2\Model\OutboundRoute putTelephonyProvidersEdgesOutboundroute($outboundRouteId, $body)

Update outbound route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$outboundRouteId = "outboundRouteId_example"; // string | Outbound route ID
$body = new \PureCloudPlatform\Client\V2\Model\OutboundRoute(); // \PureCloudPlatform\Client\V2\Model\OutboundRoute | OutboundRoute

try {
    $result = $apiInstance->putTelephonyProvidersEdgesOutboundroute($outboundRouteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesOutboundroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **outboundRouteId** | **string**| Outbound route ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\OutboundRoute**](../Model/OutboundRoute.md)| OutboundRoute |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRoute**](../Model/OutboundRoute.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesPhone**
> \PureCloudPlatform\Client\V2\Model\Phone putTelephonyProvidersEdgesPhone($phoneId, $body)

Update a Phone by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneId = "phoneId_example"; // string | Phone ID
$body = new \PureCloudPlatform\Client\V2\Model\Phone(); // \PureCloudPlatform\Client\V2\Model\Phone | Phone

try {
    $result = $apiInstance->putTelephonyProvidersEdgesPhone($phoneId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneId** | **string**| Phone ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Phone**](../Model/Phone.md)| Phone |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Phone**](../Model/Phone.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesPhonebasesetting**
> \PureCloudPlatform\Client\V2\Model\PhoneBase putTelephonyProvidersEdgesPhonebasesetting($phoneBaseId, $body)

Update a Phone Base Settings by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phoneBaseId = "phoneBaseId_example"; // string | Phone base ID
$body = new \PureCloudPlatform\Client\V2\Model\PhoneBase(); // \PureCloudPlatform\Client\V2\Model\PhoneBase | Phone base settings

try {
    $result = $apiInstance->putTelephonyProvidersEdgesPhonebasesetting($phoneBaseId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesPhonebasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phoneBaseId** | **string**| Phone base ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\PhoneBase**](../Model/PhoneBase.md)| Phone base settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\PhoneBase**](../Model/PhoneBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesSite**
> \PureCloudPlatform\Client\V2\Model\Site putTelephonyProvidersEdgesSite($siteId, $body)

Update a Site by ID.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$body = new \PureCloudPlatform\Client\V2\Model\Site(); // \PureCloudPlatform\Client\V2\Model\Site | Site

try {
    $result = $apiInstance->putTelephonyProvidersEdgesSite($siteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\Site**](../Model/Site.md)| Site |

### Return type

[**\PureCloudPlatform\Client\V2\Model\Site**](../Model/Site.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesSiteNumberplans**
> \PureCloudPlatform\Client\V2\Model\NumberPlan[] putTelephonyProvidersEdgesSiteNumberplans($siteId, $body)

Update the list of Number Plans. A user can update maximum 200 number plans at a time.



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$body = array(new \PureCloudPlatform\Client\V2\Model\NumberPlan()); // \PureCloudPlatform\Client\V2\Model\NumberPlan[] | List of number plans

try {
    $result = $apiInstance->putTelephonyProvidersEdgesSiteNumberplans($siteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesSiteNumberplans: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\NumberPlan[]**](../Model/NumberPlan.md)| List of number plans |

### Return type

[**\PureCloudPlatform\Client\V2\Model\NumberPlan[]**](../Model/NumberPlan.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesSiteOutboundroute**
> \PureCloudPlatform\Client\V2\Model\OutboundRouteBase putTelephonyProvidersEdgesSiteOutboundroute($siteId, $outboundRouteId, $body)

Update outbound route



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$siteId = "siteId_example"; // string | Site ID
$outboundRouteId = "outboundRouteId_example"; // string | Outbound route ID
$body = new \PureCloudPlatform\Client\V2\Model\OutboundRouteBase(); // \PureCloudPlatform\Client\V2\Model\OutboundRouteBase | OutboundRoute

try {
    $result = $apiInstance->putTelephonyProvidersEdgesSiteOutboundroute($siteId, $outboundRouteId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesSiteOutboundroute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **siteId** | **string**| Site ID |
 **outboundRouteId** | **string**| Outbound route ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\OutboundRouteBase**](../Model/OutboundRouteBase.md)| OutboundRoute |

### Return type

[**\PureCloudPlatform\Client\V2\Model\OutboundRouteBase**](../Model/OutboundRouteBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTelephonyProvidersEdgesTrunkbasesetting**
> \PureCloudPlatform\Client\V2\Model\TrunkBase putTelephonyProvidersEdgesTrunkbasesetting($trunkBaseSettingsId, $body)

Update a Trunk Base Settings object by ID



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: PureCloud OAuth
$config = PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trunkBaseSettingsId = "trunkBaseSettingsId_example"; // string | Trunk Base ID
$body = new \PureCloudPlatform\Client\V2\Model\TrunkBase(); // \PureCloudPlatform\Client\V2\Model\TrunkBase | Trunk base settings

try {
    $result = $apiInstance->putTelephonyProvidersEdgesTrunkbasesetting($trunkBaseSettingsId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TelephonyProvidersEdgeApi->putTelephonyProvidersEdgesTrunkbasesetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trunkBaseSettingsId** | **string**| Trunk Base ID |
 **body** | [**\PureCloudPlatform\Client\V2\Model\TrunkBase**](../Model/TrunkBase.md)| Trunk base settings |

### Return type

[**\PureCloudPlatform\Client\V2\Model\TrunkBase**](../Model/TrunkBase.md)

### Authorization

[PureCloud OAuth](../../README.md#PureCloud OAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

