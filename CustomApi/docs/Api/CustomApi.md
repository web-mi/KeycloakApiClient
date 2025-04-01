# WebMI\KeycloakApiClient\CustomApi\CustomApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**realmsRealmProtocolOpenidConnectTokenPost()**](CustomApi.md#realmsRealmProtocolOpenidConnectTokenPost) | **POST** /realms/{realm}/protocol/openid-connect/token | Oidc Login |


## `realmsRealmProtocolOpenidConnectTokenPost()`

```php
realmsRealmProtocolOpenidConnectTokenPost($realm, $username, $password, $client_id, $grant_type, $refresh_token): \WebMI\KeycloakApiClient\CustomApi\Model\RealmsRealmProtocolOpenidConnectTokenPost200Response
```

Oidc Login

Realm name must be unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\CustomApi\Api\CustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$username = 'username_example'; // string | Username
$password = 'password_example'; // string | User Password
$client_id = 'client_id_example'; // string | Client id
$grant_type = 'grant_type_example'; // string | Grant Type
$refresh_token = 'refresh_token_example'; // string | Refresh Token

try {
    $result = $apiInstance->realmsRealmProtocolOpenidConnectTokenPost($realm, $username, $password, $client_id, $grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomApi->realmsRealmProtocolOpenidConnectTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **username** | **string**| Username | [optional] |
| **password** | **string**| User Password | [optional] |
| **client_id** | **string**| Client id | [optional] |
| **grant_type** | **string**| Grant Type | [optional] |
| **refresh_token** | **string**| Refresh Token | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\CustomApi\Model\RealmsRealmProtocolOpenidConnectTokenPost200Response**](../Model/RealmsRealmProtocolOpenidConnectTokenPost200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
