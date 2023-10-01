# OpenAPI\Client\AuthApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTokenApiTokenPost()**](AuthApi.md#getTokenApiTokenPost) | **POST** /api/token | Get Token |


## `getTokenApiTokenPost()`

```php
getTokenApiTokenPost($username, $password, $grant_type, $scope, $client_id, $client_secret): \OpenAPI\Client\Model\Token
```

Get Token

OAuth2 compatible token login, get an access token for future requests

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**|  | |
| **password** | **string**|  | |
| **grant_type** | **string**|  | [optional] |
| **scope** | **string**|  | [optional] [default to &#39;&#39;] |
| **client_id** | **string**|  | [optional] |
| **client_secret** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
