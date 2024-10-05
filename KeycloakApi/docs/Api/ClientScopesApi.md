# WebMI\KeycloakApiClient\KeycloakApi\ClientScopesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientScopesClientScopeIdDelete()**](ClientScopesApi.md#adminRealmsRealmClientScopesClientScopeIdDelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id} | Delete the client scope |
| [**adminRealmsRealmClientScopesClientScopeIdGet()**](ClientScopesApi.md#adminRealmsRealmClientScopesClientScopeIdGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id} | Get representation of the client scope |
| [**adminRealmsRealmClientScopesClientScopeIdPut()**](ClientScopesApi.md#adminRealmsRealmClientScopesClientScopeIdPut) | **PUT** /admin/realms/{realm}/client-scopes/{client-scope-id} | Update the client scope |
| [**adminRealmsRealmClientScopesGet()**](ClientScopesApi.md#adminRealmsRealmClientScopesGet) | **GET** /admin/realms/{realm}/client-scopes | Get client scopes belonging to the realm Returns a list of client scopes belonging to the realm |
| [**adminRealmsRealmClientScopesPost()**](ClientScopesApi.md#adminRealmsRealmClientScopesPost) | **POST** /admin/realms/{realm}/client-scopes | Create a new client scope Client Scope’s name must be unique! |
| [**adminRealmsRealmClientTemplatesClientScopeIdDelete()**](ClientScopesApi.md#adminRealmsRealmClientTemplatesClientScopeIdDelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id} | Delete the client scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdGet()**](ClientScopesApi.md#adminRealmsRealmClientTemplatesClientScopeIdGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id} | Get representation of the client scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdPut()**](ClientScopesApi.md#adminRealmsRealmClientTemplatesClientScopeIdPut) | **PUT** /admin/realms/{realm}/client-templates/{client-scope-id} | Update the client scope |
| [**adminRealmsRealmClientTemplatesGet()**](ClientScopesApi.md#adminRealmsRealmClientTemplatesGet) | **GET** /admin/realms/{realm}/client-templates | Get client scopes belonging to the realm Returns a list of client scopes belonging to the realm |
| [**adminRealmsRealmClientTemplatesPost()**](ClientScopesApi.md#adminRealmsRealmClientTemplatesPost) | **POST** /admin/realms/{realm}/client-templates | Create a new client scope Client Scope’s name must be unique! |


## `adminRealmsRealmClientScopesClientScopeIdDelete()`

```php
adminRealmsRealmClientScopesClientScopeIdDelete($realm, $client_scope_id)
```

Delete the client scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientScopesClientScopeIdDelete($realm, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientScopesClientScopeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

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

## `adminRealmsRealmClientScopesClientScopeIdGet()`

```php
adminRealmsRealmClientScopesClientScopeIdGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation
```

Get representation of the client scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientScopesClientScopeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation**](../Model/ClientScopeRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdPut()`

```php
adminRealmsRealmClientScopesClientScopeIdPut($realm, $client_scope_id, $client_scope_representation)
```

Update the client scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client_scope_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation

try {
    $apiInstance->adminRealmsRealmClientScopesClientScopeIdPut($realm, $client_scope_id, $client_scope_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientScopesClientScopeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client_scope_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation**](../Model/ClientScopeRepresentation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesGet()`

```php
adminRealmsRealmClientScopesGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]
```

Get client scopes belonging to the realm Returns a list of client scopes belonging to the realm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientScopesGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientScopesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]**](../Model/ClientScopeRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesPost()`

```php
adminRealmsRealmClientScopesPost($realm, $client_scope_representation)
```

Create a new client scope Client Scope’s name must be unique!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation

try {
    $apiInstance->adminRealmsRealmClientScopesPost($realm, $client_scope_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientScopesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation**](../Model/ClientScopeRepresentation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdDelete()`

```php
adminRealmsRealmClientTemplatesClientScopeIdDelete($realm, $client_scope_id)
```

Delete the client scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdDelete($realm, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientTemplatesClientScopeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

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

## `adminRealmsRealmClientTemplatesClientScopeIdGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation
```

Get representation of the client scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientTemplatesClientScopeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation**](../Model/ClientScopeRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdPut()`

```php
adminRealmsRealmClientTemplatesClientScopeIdPut($realm, $client_scope_id, $client_scope_representation)
```

Update the client scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client_scope_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation

try {
    $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdPut($realm, $client_scope_id, $client_scope_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientTemplatesClientScopeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client_scope_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation**](../Model/ClientScopeRepresentation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesGet()`

```php
adminRealmsRealmClientTemplatesGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]
```

Get client scopes belonging to the realm Returns a list of client scopes belonging to the realm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]**](../Model/ClientScopeRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesPost()`

```php
adminRealmsRealmClientTemplatesPost($realm, $client_scope_representation)
```

Create a new client scope Client Scope’s name must be unique!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation

try {
    $apiInstance->adminRealmsRealmClientTemplatesPost($realm, $client_scope_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientScopesApi->adminRealmsRealmClientTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation**](../Model/ClientScopeRepresentation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
