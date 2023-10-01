# OpenAPI\Client\QuestionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getQuestionsApiQuestionsGet()**](QuestionsApi.md#getQuestionsApiQuestionsGet) | **GET** /api/questions | Get Questions |
| [**rateQuestionApiRateQuestionPost()**](QuestionsApi.md#rateQuestionApiRateQuestionPost) | **POST** /api/rate-question | Rate Question |
| [**validateResponseApiQuestionResponsePost()**](QuestionsApi.md#validateResponseApiQuestionResponsePost) | **POST** /api/question-response | Validate Response |


## `getQuestionsApiQuestionsGet()`

```php
getQuestionsApiQuestionsGet($project_id, $difficulty, $page, $page_size)
```

Get Questions

Get questions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = 56; // int | Project ID
$difficulty = new \OpenAPI\Client\Model\QuestionDifficulty(); // QuestionDifficulty | Difficulty
$page = 0; // int | Page number
$page_size = 10; // int | Page size

try {
    $apiInstance->getQuestionsApiQuestionsGet($project_id, $difficulty, $page, $page_size);
} catch (Exception $e) {
    echo 'Exception when calling QuestionsApi->getQuestionsApiQuestionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **int**| Project ID | |
| **difficulty** | [**QuestionDifficulty**](../Model/.md)| Difficulty | [optional] |
| **page** | **int**| Page number | [optional] [default to 0] |
| **page_size** | **int**| Page size | [optional] [default to 10] |

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateQuestionApiRateQuestionPost()`

```php
rateQuestionApiRateQuestionPost($rate_question_request)
```

Rate Question

Rate a question.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_question_request = new \OpenAPI\Client\Model\RateQuestionRequest(); // \OpenAPI\Client\Model\RateQuestionRequest

try {
    $apiInstance->rateQuestionApiRateQuestionPost($rate_question_request);
} catch (Exception $e) {
    echo 'Exception when calling QuestionsApi->rateQuestionApiRateQuestionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rate_question_request** | [**\OpenAPI\Client\Model\RateQuestionRequest**](../Model/RateQuestionRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateResponseApiQuestionResponsePost()`

```php
validateResponseApiQuestionResponsePost($question_response_request)
```

Validate Response

Validate user response to a question.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\QuestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$question_response_request = new \OpenAPI\Client\Model\QuestionResponseRequest(); // \OpenAPI\Client\Model\QuestionResponseRequest

try {
    $apiInstance->validateResponseApiQuestionResponsePost($question_response_request);
} catch (Exception $e) {
    echo 'Exception when calling QuestionsApi->validateResponseApiQuestionResponsePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **question_response_request** | [**\OpenAPI\Client\Model\QuestionResponseRequest**](../Model/QuestionResponseRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
