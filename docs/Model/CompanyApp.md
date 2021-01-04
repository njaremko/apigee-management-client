# # CompanyApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_family** | **string** | Output only. App family. | [optional]
**app_id** | **string** | Output only. ID of the app. | [optional]
**attributes** | [**\OpenAPI\Client\Model\CompanyAppAttributes[]**](CompanyAppAttributes.md) | List of attributes used for customizing profile information or for app-specific processing. With Apigee Edge for Public Cloud, the custom attribute limit is 18. | [optional]
**callback_url** | **string** | Callback URL used by OAuth 2.0 authorization servers to communicate authorization codes back to apps. | [optional]
**company_name** | **string** | Output only. Name of the company. | [optional]
**created_at** | **int** | Output only. Time the app was created in milliseconds since epoch. | [optional]
**created_by** | **string** | Output only. Email address of the developer that created the app. | [optional]
**credentials** | [**\OpenAPI\Client\Model\CompanyAppCredentials[]**](CompanyAppCredentials.md) | Output only. Set of credentials for the app. Credentials are API key/secret pairs associated with API products. | [optional]
**last_modified_at** | **int** | Output only. Last modified time as milliseconds since epoch. | [optional]
**last_modified_by** | **string** | Output only. Email of developer that last modified the app. | [optional]
**name** | **string** | Name of the company app. Required when creating a company app; not required when updating a company app. The name becomes the unique ID of the app for this organization and company. Names must begin with an alphanumeric character and can contain letters, numbers, spaces, and the following characters: &#x60;. _ # - $ %&#x60;. While you can use spaces in the name, we recommend that you use camel case, underscores, or hyphens instead. Otherwise, you will have to URL encode the app name when you need to include it in the URL of other Edge API calls. | [optional]
**scopes** | **string[]** | Scopes to apply to the app. The specified scope names must already exist on the API product that you associate with the app. | [optional]
**status** | **string** | Status of the credential. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
