# OpenAPI\Client\UserApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUserApiCreateUserPost()**](UserApi.md#createUserApiCreateUserPost) | **POST** /api/create-user | Create User |
| [**getUserInfoApiUserInfoGet()**](UserApi.md#getUserInfoApiUserInfoGet) | **GET** /api/user-info | Get User Info |


## `createUserApiCreateUserPost()`

```php
createUserApiCreateUserPost($create_user_request)
```

Create User

Create a new user with username, password and email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_user_request = new \OpenAPI\Client\Model\CreateUserRequest(); // \OpenAPI\Client\Model\CreateUserRequest

try {
    $apiInstance->createUserApiCreateUserPost($create_user_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUserApiCreateUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_request** | [**\OpenAPI\Client\Model\CreateUserRequest**](../Model/CreateUserRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserInfoApiUserInfoGet()`

```php
getUserInfoApiUserInfoGet()
```

Get User Info

Get basic user info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getUserInfoApiUserInfoGet();
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserInfoApiUserInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
