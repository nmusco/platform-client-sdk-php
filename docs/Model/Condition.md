# Condition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of the condition. | [optional] 
**inverted** | **bool** | If true, inverts the result of evaluating this Condition. Default is false. | [optional] 
**attributeName** | **string** | An attribute name associated with this Condition. Required for a contactAttributeCondition. | [optional] 
**value** | **string** | A value associated with this Condition. This could be text, a number, or a relative time. Not used for a DataActionCondition. | [optional] 
**valueType** | **string** | The type of the value associated with this Condition. Not used for a DataActionCondition. | [optional] 
**operator** | **string** | An operation with which to evaluate the Condition. Not used for a DataActionCondition. | [optional] 
**codes** | **string[]** | List of wrap-up code identifiers. Required for a wrapupCondition. | [optional] 
**property** | **string** | A value associated with the property type of this Condition. Required for a contactPropertyCondition. | [optional] 
**propertyType** | **string** | The type of the property associated with this Condition. Required for a contactPropertyCondition. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


