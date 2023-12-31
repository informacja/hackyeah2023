# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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




$apiInstance = new OpenAPI\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string
$password = 'password_example'; // string
$grant_type = 'grant_type_example'; // string
$scope = ''; // string
$client_id = 'client_id_example'; // string
$client_secret = 'client_secret_example'; // string

try {
    $result = $apiInstance->getTokenApiTokenPost($username, $password, $grant_type, $scope, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getTokenApiTokenPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**getTokenApiTokenPost**](docs/Api/AuthApi.md#gettokenapitokenpost) | **POST** /api/token | Get Token
*ProjectsApi* | [**getProjectsApiProjectsGet**](docs/Api/ProjectsApi.md#getprojectsapiprojectsget) | **GET** /api/projects | Get Projects
*ProjectsApi* | [**rateProjectApiRateProjectPost**](docs/Api/ProjectsApi.md#rateprojectapirateprojectpost) | **POST** /api/rate-project | Rate Project
*QuestionsApi* | [**getQuestionsApiQuestionsGet**](docs/Api/QuestionsApi.md#getquestionsapiquestionsget) | **GET** /api/questions | Get Questions
*QuestionsApi* | [**rateQuestionApiRateQuestionPost**](docs/Api/QuestionsApi.md#ratequestionapiratequestionpost) | **POST** /api/rate-question | Rate Question
*QuestionsApi* | [**validateResponseApiQuestionResponsePost**](docs/Api/QuestionsApi.md#validateresponseapiquestionresponsepost) | **POST** /api/question-response | Validate Response
*UserApi* | [**createUserApiCreateUserPost**](docs/Api/UserApi.md#createuserapicreateuserpost) | **POST** /api/create-user | Create User
*UserApi* | [**getUserInfoApiUserInfoGet**](docs/Api/UserApi.md#getuserinfoapiuserinfoget) | **GET** /api/user-info | Get User Info

## Models

- [CreateUserRequest](docs/Model/CreateUserRequest.md)
- [HTTPValidationError](docs/Model/HTTPValidationError.md)
- [Pagination](docs/Model/Pagination.md)
- [Project](docs/Model/Project.md)
- [ProjectCategory](docs/Model/ProjectCategory.md)
- [ProjectsResponse](docs/Model/ProjectsResponse.md)
- [QuestionDifficulty](docs/Model/QuestionDifficulty.md)
- [QuestionResponseRequest](docs/Model/QuestionResponseRequest.md)
- [RateProjectRequest](docs/Model/RateProjectRequest.md)
- [RateQuestionRequest](docs/Model/RateQuestionRequest.md)
- [Token](docs/Model/Token.md)
- [ValidationError](docs/Model/ValidationError.md)
- [ValidationErrorLocInner](docs/Model/ValidationErrorLocInner.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2PasswordBearer

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
