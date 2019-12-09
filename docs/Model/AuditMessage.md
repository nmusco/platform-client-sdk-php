# AuditMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | AuditMessage ID. | 
**user** | [**\PureCloudPlatform\Client\V2\Model\AuditUser**](AuditUser.md) |  | [optional] 
**correlationId** | **string** | Correlation ID. | [optional] 
**transactionId** | **string** | Transaction ID. | [optional] 
**transactionInitiator** | **bool** | Whether or not this audit can be considered the initiator of the transaction it is a part of. | [optional] 
**application** | **string** | The application through which the action of this AuditMessage was initiated. | [optional] 
**serviceName** | **string** | The name of the service which sent this AuditMessage. | 
**level** | **string** | The level of this audit. USER or SYSTEM. | 
**timestamp** | **string** | The time at which the action of this AuditMessage was initiated. | [optional] 
**receivedTimestamp** | **string** | The time at which this AuditMessage was received. | 
**status** | **string** | The status of the action of this AuditMessage | 
**actionContext** | **string** | The context of a system-level action | [optional] 
**action** | **string** | A string representing the action that took place | [optional] 
**changes** | [**\PureCloudPlatform\Client\V2\Model\Change[]**](Change.md) | Details about any changes that occurred in this audit | [optional] 
**entity** | [**\PureCloudPlatform\Client\V2\Model\AuditEntity**](AuditEntity.md) |  | [optional] 
**serviceContext** | [**\PureCloudPlatform\Client\V2\Model\ServiceContext**](ServiceContext.md) | The service-specific context associated with this AuditMessage. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


