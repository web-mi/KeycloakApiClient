# WebMI\KeycloakApiClient\KeycloakApi\ScopeMappingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client}/available | The available client-level roles Returns the roles for the client that can be associated with the client&#39;s scope |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client}/composite | Get effective client roles Returns the roles for the client that are associated with the client&#39;s scope. |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client} | Remove client-level roles from the client&#39;s scope. |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client} | Get the roles associated with a client&#39;s scope Returns roles for the client. |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost) | **POST** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client} | Add client-level roles to the client&#39;s scope |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings | Get all scope mappings for the client |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm/available | Get realm-level roles that are available to attach to this client&#39;s scope |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm/composite | Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists. |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm | Remove a set of realm-level roles from the client&#39;s scope |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm | Get realm-level roles associated with the client&#39;s scope |
| [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost()**](ScopeMappingsApi.md#adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost) | **POST** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm | Add a set of realm-level roles to the client&#39;s scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client}/available | The available client-level roles Returns the roles for the client that can be associated with the client&#39;s scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client}/composite | Get effective client roles Returns the roles for the client that are associated with the client&#39;s scope. |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client} | Remove client-level roles from the client&#39;s scope. |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client} | Get the roles associated with a client&#39;s scope Returns roles for the client. |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost) | **POST** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client} | Add client-level roles to the client&#39;s scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings | Get all scope mappings for the client |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm/available | Get realm-level roles that are available to attach to this client&#39;s scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm/composite | Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists. |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm | Remove a set of realm-level roles from the client&#39;s scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm | Get realm-level roles associated with the client&#39;s scope |
| [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost()**](ScopeMappingsApi.md#adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost) | **POST** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm | Add a set of realm-level roles to the client&#39;s scope |
| [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client}/available | The available client-level roles Returns the roles for the client that can be associated with the client&#39;s scope |
| [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client}/composite | Get effective client roles Returns the roles for the client that are associated with the client&#39;s scope. |
| [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client} | Remove client-level roles from the client&#39;s scope. |
| [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client} | Get the roles associated with a client&#39;s scope Returns roles for the client. |
| [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client} | Add client-level roles to the client&#39;s scope |
| [**adminRealmsRealmClientsClientUuidScopeMappingsGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings | Get all scope mappings for the client |
| [**adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm/available | Get realm-level roles that are available to attach to this client&#39;s scope |
| [**adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm/composite | Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists. |
| [**adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm | Remove a set of realm-level roles from the client&#39;s scope |
| [**adminRealmsRealmClientsClientUuidScopeMappingsRealmGet()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsRealmGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm | Get realm-level roles associated with the client&#39;s scope |
| [**adminRealmsRealmClientsClientUuidScopeMappingsRealmPost()**](ScopeMappingsApi.md#adminRealmsRealmClientsClientUuidScopeMappingsRealmPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm | Add a set of realm-level roles to the client&#39;s scope |


## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet($realm, $client_scope_id, $client): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

The available client-level roles Returns the roles for the client that can be associated with the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet($realm, $client_scope_id, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet($realm, $client_scope_id, $client, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective client roles Returns the roles for the client that are associated with the client's scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet($realm, $client_scope_id, $client, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |
| **brief_representation** | **bool**| if false, return roles with their attributes | [optional] [default to true] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete($realm, $client_scope_id, $client, $role_representation)
```

Remove client-level roles from the client's scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete($realm, $client_scope_id, $client, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet($realm, $client_scope_id, $client): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get the roles associated with a client's scope Returns roles for the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet($realm, $client_scope_id, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost($realm, $client_scope_id, $client, $role_representation)
```

Add client-level roles to the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost($realm, $client_scope_id, $client, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation
```

Get all scope mappings for the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation**](../Model/MappingsRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles that are available to attach to this client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet($realm, $client_scope_id, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists.

The method is really to show a comprehensive total view of realm-level roles associated with the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet($realm, $client_scope_id, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **brief_representation** | **bool**| if false, return roles with their attributes | [optional] [default to true] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete($realm, $client_scope_id, $role_representation)
```

Remove a set of realm-level roles from the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete($realm, $client_scope_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles associated with the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost()`

```php
adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost($realm, $client_scope_id, $role_representation)
```

Add a set of realm-level roles to the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost($realm, $client_scope_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet($realm, $client_scope_id, $client): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

The available client-level roles Returns the roles for the client that can be associated with the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet($realm, $client_scope_id, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet($realm, $client_scope_id, $client, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective client roles Returns the roles for the client that are associated with the client's scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet($realm, $client_scope_id, $client, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |
| **brief_representation** | **bool**| if false, return roles with their attributes | [optional] [default to true] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete($realm, $client_scope_id, $client, $role_representation)
```

Remove client-level roles from the client's scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete($realm, $client_scope_id, $client, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet($realm, $client_scope_id, $client): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get the roles associated with a client's scope Returns roles for the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet($realm, $client_scope_id, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost($realm, $client_scope_id, $client, $role_representation)
```

Add client-level roles to the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$client = 'client_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost($realm, $client_scope_id, $client, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **client** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation
```

Get all scope mappings for the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation**](../Model/MappingsRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles that are available to attach to this client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet($realm, $client_scope_id, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists.

The method is really to show a comprehensive total view of realm-level roles associated with the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet($realm, $client_scope_id, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **brief_representation** | **bool**| if false, return roles with their attributes | [optional] [default to true] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete($realm, $client_scope_id, $role_representation)
```

Remove a set of realm-level roles from the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete($realm, $client_scope_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet($realm, $client_scope_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles associated with the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet($realm, $client_scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost()`

```php
adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost($realm, $client_scope_id, $role_representation)
```

Add a set of realm-level roles to the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost($realm, $client_scope_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_scope_id** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet($realm, $client_uuid, $client): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

The available client-level roles Returns the roles for the client that can be associated with the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client = 'client_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet($realm, $client_uuid, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **client** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet($realm, $client_uuid, $client, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective client roles Returns the roles for the client that are associated with the client's scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client = 'client_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet($realm, $client_uuid, $client, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **client** | **string**|  | |
| **brief_representation** | **bool**| if false, return roles with their attributes | [optional] [default to true] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete($realm, $client_uuid, $client, $role_representation)
```

Remove client-level roles from the client's scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client = 'client_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete($realm, $client_uuid, $client, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **client** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet($realm, $client_uuid, $client): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get the roles associated with a client's scope Returns roles for the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client = 'client_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet($realm, $client_uuid, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **client** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost($realm, $client_uuid, $client, $role_representation)
```

Add client-level roles to the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client = 'client_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost($realm, $client_uuid, $client, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **client** | **string**|  | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidScopeMappingsGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation
```

Get all scope mappings for the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation**](../Model/MappingsRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles that are available to attach to this client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet($realm, $client_uuid, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists.

The method is really to show a comprehensive total view of realm-level roles associated with the client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet($realm, $client_uuid, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **brief_representation** | **bool**| if false, return roles with their attributes | [optional] [default to true] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete($realm, $client_uuid, $role_representation)
```

Remove a set of realm-level roles from the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete($realm, $client_uuid, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidScopeMappingsRealmGet()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsRealmGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles associated with the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsRealmGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidScopeMappingsRealmPost()`

```php
adminRealmsRealmClientsClientUuidScopeMappingsRealmPost($realm, $client_uuid, $role_representation)
```

Add a set of realm-level roles to the client's scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ScopeMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientsClientUuidScopeMappingsRealmPost($realm, $client_uuid, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ScopeMappingsApi->adminRealmsRealmClientsClientUuidScopeMappingsRealmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]**](../Model/RoleRepresentation.md)|  | [optional] |

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
