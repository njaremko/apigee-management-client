# OpenAPIClient-php

Developers must register with an organization on Apigee Edge. After they are registered, developers register their apps, choose the APIs they want to use, and receive the unique API credentials (consumer keys and secrets) needed to access your APIs.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.enterprise.apigee.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeveloperApi* | [**createDeveloper**](docs/Api/DeveloperApi.md#createdeveloper) | **POST** /organizations/{org_name}/developers | Create developer
*DeveloperApi* | [**deleteDeveloper**](docs/Api/DeveloperApi.md#deletedeveloper) | **DELETE** /organizations/{org_name}/developers/{developer_email} | Delete developer
*DeveloperApi* | [**deleteDeveloperAttribute**](docs/Api/DeveloperApi.md#deletedeveloperattribute) | **DELETE** /organizations/{org_name}/developers/{developer_email}/attributes/{attribute_name} | Delete developer attribute
*DeveloperApi* | [**getDeveloper**](docs/Api/DeveloperApi.md#getdeveloper) | **GET** /organizations/{org_name}/developers/{developer_email} | Get developer
*DeveloperApi* | [**getDeveloperAttribute**](docs/Api/DeveloperApi.md#getdeveloperattribute) | **GET** /organizations/{org_name}/developers/{developer_email}/attributes/{attribute_name} | Get developer attribute
*DeveloperApi* | [**getDeveloperAttributes**](docs/Api/DeveloperApi.md#getdeveloperattributes) | **GET** /organizations/{org_name}/developers/{developer_email}/attributes | Get developer attributes
*DeveloperApi* | [**listDevelopers**](docs/Api/DeveloperApi.md#listdevelopers) | **GET** /organizations/{org_name}/developers | List developers
*DeveloperApi* | [**setDeveloperStatus**](docs/Api/DeveloperApi.md#setdeveloperstatus) | **POST** /organizations/{org_name}/developers/{developer_email} | Set developer status
*DeveloperApi* | [**updateDeveloper**](docs/Api/DeveloperApi.md#updatedeveloper) | **PUT** /organizations/{org_name}/developers/{developer_email} | Update developer
*DeveloperApi* | [**updateDeveloperAttribute**](docs/Api/DeveloperApi.md#updatedeveloperattribute) | **POST** /organizations/{org_name}/developers/{developer_email}/attributes/{attribute_name} | Update developer attribute
*DeveloperApi* | [**updateDeveloperAttributes**](docs/Api/DeveloperApi.md#updatedeveloperattributes) | **POST** /organizations/{org_name}/developers/{developer_email}/attributes | Update developer attributes

## Models

- [Attribute](docs/Model/Attribute.md)
- [Attributes](docs/Model/Attributes.md)
- [Developer](docs/Model/Developer.md)
- [DeveloperRequest](docs/Model/DeveloperRequest.md)
- [Developers](docs/Model/Developers.md)
- [InlineObject](docs/Model/InlineObject.md)

## Authorization

### Basic

- **Type**: HTTP basic authentication


### OAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
