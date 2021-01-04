# # Company

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apps** | **string[]** | Output only. Apps associated with the company. | [optional]
**name** | **string** | Name of the company. See &lt;a href&#x3D;\&quot;https://docs.apigee.com/api-platform/reference/naming-guidelines\&quot;&gt;naming restrictions&lt;/a&gt;. Required when creating a company. | [optional]
**display_name** | **string** | Display name for the company. | [optional]
**organization** | **string** | Output only. Organization name. | [optional]
**status** | **string** | Output only. Status of the company. Valid values are &#x60;active&#x60; or &#x60;inactive&#x60;. Defaults to &#x60;active&#x60; when creating the company. To change the value, see Update a company. | [optional]
**attributes** | [**\OpenAPI\Client\Model\CompanyAttributes[]**](CompanyAttributes.md) | Name/value formatted attributes used to extend the default company profile. **Note**: With Apigee Edge for Public Cloud, the custom attribute limit is 18. | [optional]
**created_at** | **int** | Output only. Time when the company was last modified in seconds since epoch. | [optional]
**last_modified_at** | **int** | Output only. Time when the company was last modified in seconds since epoch. | [optional]
**last_modified_by** | **string** | Output only. Email address of developer that last modified the company. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
