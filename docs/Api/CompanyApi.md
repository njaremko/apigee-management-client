# OpenAPI\Client\CompanyApi

All URIs are relative to https://api.enterprise.apigee.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveRevokeCompanyApp()**](CompanyApi.md#approveRevokeCompanyApp) | **POST** /organizations/{org_name}/companies/{company_name}/apps/{app_name} | Approve or revoke a company app
[**createCompanyApp()**](CompanyApi.md#createCompanyApp) | **POST** /organizations/{org_name}/companies/{company_name}/apps | Create company app
[**deleteCompanyApp()**](CompanyApi.md#deleteCompanyApp) | **DELETE** /organizations/{org_name}/companies/{company_name}/apps/{app_name} | Delete company app
[**getCompanyApp()**](CompanyApi.md#getCompanyApp) | **GET** /organizations/{org_name}/companies/{company_name}/apps/{app_name} | Get company app
[**listCompanyApps()**](CompanyApi.md#listCompanyApps) | **GET** /organizations/{org_name}/companies/{company_name}/apps | List company apps
[**organizationsOrgNameCompaniesCompanyNameAppsAppNamePut()**](CompanyApi.md#organizationsOrgNameCompaniesCompanyNameAppsAppNamePut) | **PUT** /organizations/{org_name}/companies/{company_name}/apps/{app_name} | Update company app


## `approveRevokeCompanyApp()`

```php
approveRevokeCompanyApp($org_name, $company_name, $app_name, $action)
```

Approve or revoke a company app

Sets the API key status of a company app to `approved` or `revoked`. If a company app is revoked, none of its API keys are valid for API calls, even though the keys themselves still display an \"Approved\" status. The HTTP status code for success is: `204 No Content`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Name of the organization.
$company_name = 'company_name_example'; // string | Name of the company.
$app_name = 'app_name_example'; // string | Name of the application.
$action = 'action_example'; // string | Action to perform. Valid values include `approved` or `revoked`.

try {
    $apiInstance->approveRevokeCompanyApp($org_name, $company_name, $app_name, $action);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->approveRevokeCompanyApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Name of the organization. |
 **company_name** | **string**| Name of the company. |
 **app_name** | **string**| Name of the application. |
 **action** | **string**| Action to perform. Valid values include &#x60;approved&#x60; or &#x60;revoked&#x60;. |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCompanyApp()`

```php
createCompanyApp($org_name, $company_name, $company_app): \OpenAPI\Client\Model\CompanyApp
```

Create company app

Creates an app associated with a company, associates the app with an API product, and auto-generates an API key for the app to use in calls to API proxies inside the API product. You must create a profile for the company in your organization before you can register apps that are associated with the company.  **Ensure optimal API product and app security**  An organization-level property, `features.keymanagement.disable.unbounded.permissions`, strengthens the security of API products in verifying API calls. When the property is set to `true`, the following features are enforced.  * **App creation**: When creating a developer or company app, the Edge API requires that the app be associated with an API product. (The Edge UI already enforces this.)   * **API product configuration**: To create or update an API product, the API product must include at least one API proxy or a resource path in its definition.  * **Runtime security**: API calls are rejected by an API product in the following situations:    * An API product doesn't include at least one API proxy or resource path.     * If the `flow.resource.name` variable in the message doesn't include a resource path that the API product can evaluate.    * If the app making the API call isn't associated with an API product.   **Note:** Setting this organization property requires system administrator rights. Edge for Private Cloud system administrators can make add this property on their own with the Update organization properties API. If you are an Edge for Public Cloud user and the previously described restrictions are not in place, contact Apigee Support to set the organization property for you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Name of the organization.
$company_name = 'company_name_example'; // string | Name of the company.
$company_app = new \OpenAPI\Client\Model\CompanyApp(); // \OpenAPI\Client\Model\CompanyApp | Company app details.

try {
    $result = $apiInstance->createCompanyApp($org_name, $company_name, $company_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->createCompanyApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Name of the organization. |
 **company_name** | **string**| Name of the company. |
 **company_app** | [**\OpenAPI\Client\Model\CompanyApp**](../Model/CompanyApp.md)| Company app details. | [optional]

### Return type

[**\OpenAPI\Client\Model\CompanyApp**](../Model/CompanyApp.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCompanyApp()`

```php
deleteCompanyApp($org_name, $company_name, $app_name): \OpenAPI\Client\Model\CompanyApp
```

Delete company app

Deletes a company app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Name of the organization.
$company_name = 'company_name_example'; // string | Name of the company.
$app_name = 'app_name_example'; // string | Name of the application.

try {
    $result = $apiInstance->deleteCompanyApp($org_name, $company_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->deleteCompanyApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Name of the organization. |
 **company_name** | **string**| Name of the company. |
 **app_name** | **string**| Name of the application. |

### Return type

[**\OpenAPI\Client\Model\CompanyApp**](../Model/CompanyApp.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyApp()`

```php
getCompanyApp($org_name, $company_name, $app_name): \OpenAPI\Client\Model\CompanyApp
```

Get company app

Gets the profile for a company app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Name of the organization.
$company_name = 'company_name_example'; // string | Name of the company.
$app_name = 'app_name_example'; // string | Name of the application.

try {
    $result = $apiInstance->getCompanyApp($org_name, $company_name, $app_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->getCompanyApp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Name of the organization. |
 **company_name** | **string**| Name of the company. |
 **app_name** | **string**| Name of the application. |

### Return type

[**\OpenAPI\Client\Model\CompanyApp**](../Model/CompanyApp.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyApps()`

```php
listCompanyApps($org_name, $company_name, $expand, $key_status, $count, $start_key): OneOfArrayCompanyApps
```

List company apps

Lists company apps in an organization. Optionally, you can expand the response to include the profile for each app.  With Apigee Edge for Public Cloud: * A maximum of 100 company apps are returned per API call. * You can paginate the list of company apps returned using the `startKey` and `count` query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Name of the organization.
$company_name = 'company_name_example'; // string | Name of the company.
$expand = True; // bool | Flag that specifies whether to view expanded details for each app. Set to `true` to view expanded details. Defaults to `false`. Not applicable if you use the `count` or `startKey` query parameters.
$key_status = 'key_status_example'; // string | **Apigee Edge for Private Cloud only**. Filter list to apps with specific key status. Valid values include `approved`, `pending`, or `revoked`.
$count = 56; // int | **Apigee Edge for Public Cloud only**. Number of company apps to return in the API call. The limit is 100. Required if you specify `startKey`.
$start_key = 'start_key_example'; // string | **Apigee Edge for Public Cloud only**. ID of the app from which to start displaying the list of apps.    For example, if the unfiltered list includes the following app names:  ``` \"companyApp1\", \"companyApp2\", \"companyApp3\" ```  If you set the `startKey` to `companyApp2`, the list will include:  ``` \"companyrApp2\", \"companyApp3\" ```

try {
    $result = $apiInstance->listCompanyApps($org_name, $company_name, $expand, $key_status, $count, $start_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->listCompanyApps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Name of the organization. |
 **company_name** | **string**| Name of the company. |
 **expand** | **bool**| Flag that specifies whether to view expanded details for each app. Set to &#x60;true&#x60; to view expanded details. Defaults to &#x60;false&#x60;. Not applicable if you use the &#x60;count&#x60; or &#x60;startKey&#x60; query parameters. | [optional]
 **key_status** | **string**| **Apigee Edge for Private Cloud only**. Filter list to apps with specific key status. Valid values include &#x60;approved&#x60;, &#x60;pending&#x60;, or &#x60;revoked&#x60;. | [optional]
 **count** | **int**| **Apigee Edge for Public Cloud only**. Number of company apps to return in the API call. The limit is 100. Required if you specify &#x60;startKey&#x60;. | [optional]
 **start_key** | **string**| **Apigee Edge for Public Cloud only**. ID of the app from which to start displaying the list of apps.    For example, if the unfiltered list includes the following app names:  &#x60;&#x60;&#x60; \&quot;companyApp1\&quot;, \&quot;companyApp2\&quot;, \&quot;companyApp3\&quot; &#x60;&#x60;&#x60;  If you set the &#x60;startKey&#x60; to &#x60;companyApp2&#x60;, the list will include:  &#x60;&#x60;&#x60; \&quot;companyrApp2\&quot;, \&quot;companyApp3\&quot; &#x60;&#x60;&#x60; | [optional]

### Return type

[**OneOfArrayCompanyApps**](../Model/OneOfArrayCompanyApps.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsOrgNameCompaniesCompanyNameAppsAppNamePut()`

```php
organizationsOrgNameCompaniesCompanyNameAppsAppNamePut($org_name, $company_name, $app_name, $company_app): \OpenAPI\Client\Model\CompanyApp
```

Update company app

Updates an existing company app. **Note**: You must include all current attribute, API product, and callback values in the payload along with any changes you want to make; otherwise, the existing values are removed. To display the current values, see Get the company app API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: OAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CompanyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Name of the organization.
$company_name = 'company_name_example'; // string | Name of the company.
$app_name = 'app_name_example'; // string | Name of the application.
$company_app = new \OpenAPI\Client\Model\CompanyApp(); // \OpenAPI\Client\Model\CompanyApp | Company app details.

try {
    $result = $apiInstance->organizationsOrgNameCompaniesCompanyNameAppsAppNamePut($org_name, $company_name, $app_name, $company_app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyApi->organizationsOrgNameCompaniesCompanyNameAppsAppNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Name of the organization. |
 **company_name** | **string**| Name of the company. |
 **app_name** | **string**| Name of the application. |
 **company_app** | [**\OpenAPI\Client\Model\CompanyApp**](../Model/CompanyApp.md)| Company app details. | [optional]

### Return type

[**\OpenAPI\Client\Model\CompanyApp**](../Model/CompanyApp.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
