# OpenAPI\Client\ProjectsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProjectsApiProjectsGet()**](ProjectsApi.md#getProjectsApiProjectsGet) | **GET** /api/projects | Get Projects |
| [**rateProjectApiRateProjectPost()**](ProjectsApi.md#rateProjectApiRateProjectPost) | **POST** /api/rate-project | Rate Project |


## `getProjectsApiProjectsGet()`

```php
getProjectsApiProjectsGet($categories, $include_paid, $page, $page_size): \OpenAPI\Client\Model\ProjectsResponse
```

Get Projects

Get projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categories = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ProjectCategory()); // \OpenAPI\Client\Model\ProjectCategory[] | Category
$include_paid = false; // bool | Show paid projects
$page = 0; // int | Page number
$page_size = 10; // int | Page size

try {
    $result = $apiInstance->getProjectsApiProjectsGet($categories, $include_paid, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectsApiProjectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categories** | [**\OpenAPI\Client\Model\ProjectCategory[]**](../Model/\OpenAPI\Client\Model\ProjectCategory.md)| Category | [optional] |
| **include_paid** | **bool**| Show paid projects | [optional] [default to false] |
| **page** | **int**| Page number | [optional] [default to 0] |
| **page_size** | **int**| Page size | [optional] [default to 10] |

### Return type

[**\OpenAPI\Client\Model\ProjectsResponse**](../Model/ProjectsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateProjectApiRateProjectPost()`

```php
rateProjectApiRateProjectPost($rate_project_request)
```

Rate Project

Rate a project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rate_project_request = new \OpenAPI\Client\Model\RateProjectRequest(); // \OpenAPI\Client\Model\RateProjectRequest

try {
    $apiInstance->rateProjectApiRateProjectPost($rate_project_request);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->rateProjectApiRateProjectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rate_project_request** | [**\OpenAPI\Client\Model\RateProjectRequest**](../Model/RateProjectRequest.md)|  | |

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
