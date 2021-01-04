# OpenAPI\Client\CompanyDeveloperApi

All URIs are relative to https://api.enterprise.apigee.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUpdateCompanyDevelopers()**](CompanyDeveloperApi.md#addUpdateCompanyDevelopers) | **POST** /organizations/{org_name}/companies/{company_name}/developers | Add or update company developers
[**listDevelopersCompany()**](CompanyDeveloperApi.md#listDevelopersCompany) | **GET** /organizations/{org_name}/companies/{company_name}/developers | List developers in company
[**removeDeveloperCompany()**](CompanyDeveloperApi.md#removeDeveloperCompany) | **DELETE** /organizations/{org_name}/companies/{company_name}/developers/{developer_email} | Remove developer from company


## `addUpdateCompanyDevelopers()`

```php
addUpdateCompanyDevelopers($org_name, $company_name, $company_developers): \OpenAPI\Client\Model\CompanyDevelopers
```

Add or update company developers

Adds a developer to a company, or updates an existing developer in the company.  Optionally, you can assign a role to the developer, though it is not required. You can create roles for your partners, such as administrator or application developer. Those roles can then be assigned to specific partner employees.  When updating an existing developer, specify both the developer's email and role (if applicable).

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


$apiInstance = new OpenAPI\Client\Api\CompanyDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$company_name = 'company_name_example'; // string | Company name.
$company_developers = {"developer":[{"email":"ahamilton@example.com","role":"myrole"}]}; // \OpenAPI\Client\Model\CompanyDevelopers | Add or update a company developer.

try {
    $result = $apiInstance->addUpdateCompanyDevelopers($org_name, $company_name, $company_developers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyDeveloperApi->addUpdateCompanyDevelopers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **company_name** | **string**| Company name. |
 **company_developers** | [**\OpenAPI\Client\Model\CompanyDevelopers**](../Model/CompanyDevelopers.md)| Add or update a company developer. | [optional]

### Return type

[**\OpenAPI\Client\Model\CompanyDevelopers**](../Model/CompanyDevelopers.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDevelopersCompany()`

```php
listDevelopersCompany($org_name, $company_name): \OpenAPI\Client\Model\CompanyDevelopers
```

List developers in company

Lists developers in a company.

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


$apiInstance = new OpenAPI\Client\Api\CompanyDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$company_name = 'company_name_example'; // string | Company name.

try {
    $result = $apiInstance->listDevelopersCompany($org_name, $company_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyDeveloperApi->listDevelopersCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **company_name** | **string**| Company name. |

### Return type

[**\OpenAPI\Client\Model\CompanyDevelopers**](../Model/CompanyDevelopers.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeDeveloperCompany()`

```php
removeDeveloperCompany($org_name, $company_name, $developer_email)
```

Remove developer from company

Removes a developer from a company.

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


$apiInstance = new OpenAPI\Client\Api\CompanyDeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$company_name = 'company_name_example'; // string | Company name.
$developer_email = 'developer_email_example'; // string | Email address of the developer.

try {
    $apiInstance->removeDeveloperCompany($org_name, $company_name, $developer_email);
} catch (Exception $e) {
    echo 'Exception when calling CompanyDeveloperApi->removeDeveloperCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **company_name** | **string**| Company name. |
 **developer_email** | **string**| Email address of the developer. |

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
