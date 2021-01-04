# OpenAPI\Client\DeveloperApi

All URIs are relative to https://api.enterprise.apigee.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeveloper()**](DeveloperApi.md#createDeveloper) | **POST** /organizations/{org_name}/developers | Create developer
[**deleteDeveloper()**](DeveloperApi.md#deleteDeveloper) | **DELETE** /organizations/{org_name}/developers/{developer_email} | Delete developer
[**deleteDeveloperAttribute()**](DeveloperApi.md#deleteDeveloperAttribute) | **DELETE** /organizations/{org_name}/developers/{developer_email}/attributes/{attribute_name} | Delete developer attribute
[**getDeveloper()**](DeveloperApi.md#getDeveloper) | **GET** /organizations/{org_name}/developers/{developer_email} | Get developer
[**getDeveloperAttribute()**](DeveloperApi.md#getDeveloperAttribute) | **GET** /organizations/{org_name}/developers/{developer_email}/attributes/{attribute_name} | Get developer attribute
[**getDeveloperAttributes()**](DeveloperApi.md#getDeveloperAttributes) | **GET** /organizations/{org_name}/developers/{developer_email}/attributes | Get developer attributes
[**listDevelopers()**](DeveloperApi.md#listDevelopers) | **GET** /organizations/{org_name}/developers | List developers
[**setDeveloperStatus()**](DeveloperApi.md#setDeveloperStatus) | **POST** /organizations/{org_name}/developers/{developer_email} | Set developer status
[**updateDeveloper()**](DeveloperApi.md#updateDeveloper) | **PUT** /organizations/{org_name}/developers/{developer_email} | Update developer
[**updateDeveloperAttribute()**](DeveloperApi.md#updateDeveloperAttribute) | **POST** /organizations/{org_name}/developers/{developer_email}/attributes/{attribute_name} | Update developer attribute
[**updateDeveloperAttributes()**](DeveloperApi.md#updateDeveloperAttributes) | **POST** /organizations/{org_name}/developers/{developer_email}/attributes | Update developer attributes


## `createDeveloper()`

```php
createDeveloper($org_name, $developer_request): \OpenAPI\Client\Model\Developer
```

Create developer

Creates a profile for a developer in an organization. After the developer is created, they can register an app and receive an API key.  The developer is always created with a status of `active`. To set the status explicitly, use the <a href=\"/docs/developers/1/routes/organizations/%7Borg_name%7D/developers/%7Bdeveloper_email%7D/post\">Set developer status API</a>.  When creating a developer, you can define one or more monetization attributes as custom attributes. For more information about the monetization attributes, see <a href=\"https://docs.apigee.com/api-platform/publish/adding-developers-your-api-product#monetization-attributes\">Configuring monetization attributes</a>. For example:   ``` {   \"email\" : \"developer_email\",   \"firstName\" : \"first_name\",   \"lastName\" : \"last_name\",   \"userName\" : \"user_name\",   \"attributes\" : [{      \"name\": \"MINT_BILLING_TYPE\",      \"value\": \"one of PREPAID | POSTPAID\"   }] } ```

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_request = {"email":"ahamilton@example.com","firstName":"Alex","lastName":"Hamilton","userName":"ahamilton@example.com","attributes":[{"name":"ADMIN_EMAIL","value":"admin@example.com"}]}; // \OpenAPI\Client\Model\DeveloperRequest | Developer details.

try {
    $result = $apiInstance->createDeveloper($org_name, $developer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->createDeveloper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_request** | [**\OpenAPI\Client\Model\DeveloperRequest**](../Model/DeveloperRequest.md)| Developer details. | [optional]

### Return type

[**\OpenAPI\Client\Model\Developer**](../Model/Developer.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeveloper()`

```php
deleteDeveloper($org_name, $developer_email): \OpenAPI\Client\Model\Developer
```

Delete developer

Deletes a developer from an organization. All apps and API keys associated with the developer are also removed from the organization.  **Note**: To avoid permanently deleting developers and their artifacts, consider deactivating developers instead using the <a href=\"/docs/developers/1/routes/organizations/%7Borg_name%7D/developers/%7Bdeveloper_email%7D/post\">Set developer status API</a>.  With Apigee Edge for Public Cloud, deletion of the developer and associated artifacts happens asynchronously. The developer is deleted immediately, but the resources associated with that developer, such as apps, may take anywhere from a few seconds to a few minutes to be deleted.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.

try {
    $result = $apiInstance->deleteDeveloper($org_name, $developer_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->deleteDeveloper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |

### Return type

[**\OpenAPI\Client\Model\Developer**](../Model/Developer.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeveloperAttribute()`

```php
deleteDeveloperAttribute($org_name, $developer_email, $attribute_name): \OpenAPI\Client\Model\Attribute
```

Delete developer attribute

Deletes a developer attribute.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.
$attribute_name = 'attribute_name_example'; // string | Name of the attribute.

try {
    $result = $apiInstance->deleteDeveloperAttribute($org_name, $developer_email, $attribute_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->deleteDeveloperAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |
 **attribute_name** | **string**| Name of the attribute. |

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeveloper()`

```php
getDeveloper($org_name, $developer_email): \OpenAPI\Client\Model\Developer
```

Get developer

Gets the profile for a developer by email address. With Apigee Edge for Public Cloud, the response includes only the first 100 apps.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.

try {
    $result = $apiInstance->getDeveloper($org_name, $developer_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->getDeveloper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |

### Return type

[**\OpenAPI\Client\Model\Developer**](../Model/Developer.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeveloperAttribute()`

```php
getDeveloperAttribute($org_name, $developer_email, $attribute_name): \OpenAPI\Client\Model\Attribute
```

Get developer attribute

Gets the value of a developer attribute.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.
$attribute_name = 'attribute_name_example'; // string | Name of the attribute.

try {
    $result = $apiInstance->getDeveloperAttribute($org_name, $developer_email, $attribute_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->getDeveloperAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |
 **attribute_name** | **string**| Name of the attribute. |

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeveloperAttributes()`

```php
getDeveloperAttributes($org_name, $developer_email): \OpenAPI\Client\Model\Attributes
```

Get developer attributes

Gets developer attributes and their values.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.

try {
    $result = $apiInstance->getDeveloperAttributes($org_name, $developer_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->getDeveloperAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |

### Return type

[**\OpenAPI\Client\Model\Attributes**](../Model/Attributes.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDevelopers()`

```php
listDevelopers($org_name, $expand, $count, $start_key, $app): OneOfArrayDevelopers
```

List developers

Lists all developers in an organization by email address. This call does not list any company developers who are a part of the organization.  To get the developers associated with a specific app, specify the name of the app using the `app` query parameter.  With Apigee Edge for Public Cloud:  * The limit on the number of developers returned is 1000. * Paginate the list of developers returned using the `startKey` and `count` query parameters.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$expand = True; // bool | Flag that specifies whether to view expanded details for each developer. Set to `true` to view expanded details. Defaults to `false`.
$count = 56; // int | **Apigee Edge for Public Cloud only**. Number of developers to return in the API call. The limit is 1000. Use with the `startKey` parameter to provide more targeted filtering.
$start_key = 'start_key_example'; // string | **Apigee Edge for Public Cloud only**. Email of a developer from which to start displaying the list of developers.  For example, if the an unfiltered list returns:  ``` westley@example.com fezzik@example.com   buttercup@example.com    ```  If your `startKey` is `fezzik@example.com`, the returned list will be:  ``` fezzik@example.com   buttercup@example.com  ```
$app = 'app_example'; // string | Name of the app for which you want to return associated developers.

try {
    $result = $apiInstance->listDevelopers($org_name, $expand, $count, $start_key, $app);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->listDevelopers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **expand** | **bool**| Flag that specifies whether to view expanded details for each developer. Set to &#x60;true&#x60; to view expanded details. Defaults to &#x60;false&#x60;. | [optional]
 **count** | **int**| **Apigee Edge for Public Cloud only**. Number of developers to return in the API call. The limit is 1000. Use with the &#x60;startKey&#x60; parameter to provide more targeted filtering. | [optional]
 **start_key** | **string**| **Apigee Edge for Public Cloud only**. Email of a developer from which to start displaying the list of developers.  For example, if the an unfiltered list returns:  &#x60;&#x60;&#x60; westley@example.com fezzik@example.com   buttercup@example.com    &#x60;&#x60;&#x60;  If your &#x60;startKey&#x60; is &#x60;fezzik@example.com&#x60;, the returned list will be:  &#x60;&#x60;&#x60; fezzik@example.com   buttercup@example.com  &#x60;&#x60;&#x60; | [optional]
 **app** | **string**| Name of the app for which you want to return associated developers. | [optional]

### Return type

[**OneOfArrayDevelopers**](../Model/OneOfArrayDevelopers.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setDeveloperStatus()`

```php
setDeveloperStatus($org_name, $developer_email, $action)
```

Set developer status

Sets a developer's status to `active` or `inactive` for a specific organization. Run this API for each organization where you want to change the developer's status.   By default, the status of a developer is set to `active`. If you set a developer's status to `inactive`, the API keys assigned to the developer's apps are no longer valid even though keys continue to show a status of \"Approved\". Inactive developers can still sign in to the developer portal and create apps; however, the new keys that get created won't be valid until the developer is set to `active`.  The HTTP status code for success is: `204 No Content`

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.
$action = 'action_example'; // string | Status of developer. Set to `active` or `inactive`.

try {
    $apiInstance->setDeveloperStatus($org_name, $developer_email, $action);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->setDeveloperStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |
 **action** | **string**| Status of developer. Set to &#x60;active&#x60; or &#x60;inactive&#x60;. |

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

## `updateDeveloper()`

```php
updateDeveloper($org_name, $developer_email, $developer_request): \OpenAPI\Client\Model\Developer
```

Update developer

Update an existing developer profile.  To add new values or update existing values, submit the new or updated portion of the developer profile along with the rest of the existing developer profile, even if no values are changing.  To delete attributes from a developer profile, submit the entire profile without the attributes that you want to delete.  **Apigee Edge for Public Cloud only**: OAuth access tokens and Key Management Service (KMS) entities (apps, developers, and API products) are cached for 180 seconds (current default). Any custom attributes associated with these entities also get cached for at least 180 seconds after the entity is accessed at runtime. Therefore, an ExpiresIn element on the OAuthV2 policy won't be able to expire an access token in less than 180 seconds.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.
$developer_request = {"email":"ahamilton@example.com","firstName":"Alex","lastName":"Hamilton","userName":"ahamilton@example.com","attributes":[{"name":"ADMIN_EMAIL","value":"admin@example.com"}]}; // \OpenAPI\Client\Model\DeveloperRequest | Developer details.

try {
    $result = $apiInstance->updateDeveloper($org_name, $developer_email, $developer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->updateDeveloper: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |
 **developer_request** | [**\OpenAPI\Client\Model\DeveloperRequest**](../Model/DeveloperRequest.md)| Developer details. | [optional]

### Return type

[**\OpenAPI\Client\Model\Developer**](../Model/Developer.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeveloperAttribute()`

```php
updateDeveloperAttribute($org_name, $developer_email, $attribute_name, $inline_object): \OpenAPI\Client\Model\Attribute
```

Update developer attribute

Update the value of a developer attribute.  **Apigee Edge for Public Cloud only**: OAuth access tokens and Key Management Service (KMS) entities (apps, developers, and API products) are cached for 180 seconds (current default). Any custom attributes associated with these entities also get cached for at least 180 seconds after the entity is accessed at runtime. Therefore, an ExpiresIn element on the OAuthV2 policy won't be able to expire an access token in less than 180 seconds.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.
$attribute_name = 'attribute_name_example'; // string | Name of the attribute.
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject

try {
    $result = $apiInstance->updateDeveloperAttribute($org_name, $developer_email, $attribute_name, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->updateDeveloperAttribute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |
 **attribute_name** | **string**| Name of the attribute. |
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeveloperAttributes()`

```php
updateDeveloperAttributes($org_name, $developer_email, $attributes): \OpenAPI\Client\Model\Attributes
```

Update developer attributes

Updates or creates developer attributes.  This API replaces the current list of attributes with the attributes specified in the request body. This lets you update existing attributes, add new attributes, or delete existing attributes by omitting them from the request body.  **Apigee Edge for Public Cloud only**: OAuth access tokens and Key Management Service (KMS) entities (apps, developers, and API products) are cached for 180 seconds (current default). Any custom attributes associated with these entities also get cached for at least 180 seconds after the entity is accessed at runtime. Therefore, an ExpiresIn element on the OAuthV2 policy won't be able to expire an access token in less than 180 seconds.

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


$apiInstance = new OpenAPI\Client\Api\DeveloperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_name = 'org_name_example'; // string | Organization name.
$developer_email = 'developer_email_example'; // string | Email address for the developer.
$attributes = {"attribute":[{"name":"ADMIN_EMAIL","value":"admin@example.com"}]}; // \OpenAPI\Client\Model\Attributes | Developer attributes.

try {
    $result = $apiInstance->updateDeveloperAttributes($org_name, $developer_email, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeveloperApi->updateDeveloperAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_name** | **string**| Organization name. |
 **developer_email** | **string**| Email address for the developer. |
 **attributes** | [**\OpenAPI\Client\Model\Attributes**](../Model/Attributes.md)| Developer attributes. | [optional]

### Return type

[**\OpenAPI\Client\Model\Attributes**](../Model/Attributes.md)

### Authorization

[Basic](../../README.md#Basic), [OAuth](../../README.md#OAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
