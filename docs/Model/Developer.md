# # Developer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apps** | **string[]** | Output only. List of apps associated with the developer. | [optional]
**attributes** | [**\OpenAPI\Client\Model\Attribute[]**](Attribute.md) | List of attributes that can be used to extend the default developer profile. With Apigee Edge for Public Cloud, the custom attribute limit is 18. | [optional]
**companies** | **string[]** | Output only. List of companies associated with the developer. | [optional]
**created_at** | **int** | Output only. Time the developer was created in milliseconds since epoch. | [optional]
**created_by** | **string** | Output only. Email address of the developer that created the developer. | [optional]
**developer_id** | **string** | ID of the developer. Generated internally by Apigee and not guaranteed to stay consistent over time. | [optional]
**email** | **string** | Email address of the developer. This value is used to uniquely identify the developer in Apigee Edge. | [optional]
**first_name** | **string** | First name of the developer. | [optional]
**last_name** | **string** | Last name of the developer. | [optional]
**last_modified_at** | **int** | Output only. Last modified time as milliseconds since epoch. | [optional]
**last_modified_by** | **string** | Output only. Email of developer that last modified the app. | [optional]
**organization_name** | **string** | Output only. Name of the organization associated with the developer. | [optional]
**status** | **mixed** | Status of the developer. Valid values are &#x60;active&#x60; and &#x60;inactive&#x60;. | [optional]
**username** | **string** | Username. Not used by Apigee. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
