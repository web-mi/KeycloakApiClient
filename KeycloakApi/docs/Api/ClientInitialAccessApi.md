# WebMI\KeycloakApiClient\KeycloakApi\ClientInitialAccessApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientsInitialAccessGet()**](ClientInitialAccessApi.md#adminRealmsRealmClientsInitialAccessGet) | **GET** /admin/realms/{realm}/clients-initial-access |  |
| [**adminRealmsRealmClientsInitialAccessIdDelete()**](ClientInitialAccessApi.md#adminRealmsRealmClientsInitialAccessIdDelete) | **DELETE** /admin/realms/{realm}/clients-initial-access/{id} |  |
| [**adminRealmsRealmClientsInitialAccessPost()**](ClientInitialAccessApi.md#adminRealmsRealmClientsInitialAccessPost) | **POST** /admin/realms/{realm}/clients-initial-access | Create a new initial access token. |


## `adminRealmsRealmClientsInitialAccessGet()`

```php
adminRealmsRealmClientsInitialAccessGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessPresentation[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientInitialAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsInitialAccessGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientInitialAccessApi->adminRealmsRealmClientsInitialAccessGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessPresentation[]**](../Model/ClientInitialAccessPresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsInitialAccessIdDelete()`

```php
adminRealmsRealmClientsInitialAccessIdDelete($realm, $id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientInitialAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsInitialAccessIdDelete($realm, $id);
} catch (Exception $e) {
    echo 'Exception when calling ClientInitialAccessApi->adminRealmsRealmClientsInitialAccessIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsInitialAccessPost()`

```php
adminRealmsRealmClientsInitialAccessPost($realm, $client_initial_access_create_presentation): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessCreatePresentation
```

Create a new initial access token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientInitialAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_initial_access_create_presentation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessCreatePresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessCreatePresentation

try {
    $result = $apiInstance->adminRealmsRealmClientsInitialAccessPost($realm, $client_initial_access_create_presentation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientInitialAccessApi->adminRealmsRealmClientsInitialAccessPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_initial_access_create_presentation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessCreatePresentation**](../Model/ClientInitialAccessCreatePresentation.md)|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientInitialAccessCreatePresentation**](../Model/ClientInitialAccessCreatePresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
