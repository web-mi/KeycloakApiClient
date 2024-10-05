# WebMI\KeycloakApiClient\KeycloakApi\RolesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientsClientUuidRolesGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles | Get all roles for the realm or client |
| [**adminRealmsRealmClientsClientUuidRolesPost()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/roles | Create a new role for the realm or client |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites/clients/{client-uuid} | Get client-level roles for the client that are in the role&#39;s composite |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites | Remove roles from the role&#39;s composite |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites | Get composites of the role |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites | Add a composite to the role |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites/realm | Get realm-level roles of the role&#39;s composite |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameDelete()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name} | Delete a role by name |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name} | Get a role by name |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/groups | Returns a stream of groups that have the specified role name |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmClientsClientUuidRolesRoleNamePut()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNamePut) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name} | Update a role by name |
| [**adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet()**](RolesApi.md#adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/users | Returns a stream of users that have the specified role name. |
| [**adminRealmsRealmRolesGet()**](RolesApi.md#adminRealmsRealmRolesGet) | **GET** /admin/realms/{realm}/roles | Get all roles for the realm or client |
| [**adminRealmsRealmRolesPost()**](RolesApi.md#adminRealmsRealmRolesPost) | **POST** /admin/realms/{realm}/roles | Create a new role for the realm or client |
| [**adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet) | **GET** /admin/realms/{realm}/roles/{role-name}/composites/clients/{client-uuid} | Get client-level roles for the client that are in the role&#39;s composite |
| [**adminRealmsRealmRolesRoleNameCompositesDelete()**](RolesApi.md#adminRealmsRealmRolesRoleNameCompositesDelete) | **DELETE** /admin/realms/{realm}/roles/{role-name}/composites | Remove roles from the role&#39;s composite |
| [**adminRealmsRealmRolesRoleNameCompositesGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameCompositesGet) | **GET** /admin/realms/{realm}/roles/{role-name}/composites | Get composites of the role |
| [**adminRealmsRealmRolesRoleNameCompositesPost()**](RolesApi.md#adminRealmsRealmRolesRoleNameCompositesPost) | **POST** /admin/realms/{realm}/roles/{role-name}/composites | Add a composite to the role |
| [**adminRealmsRealmRolesRoleNameCompositesRealmGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameCompositesRealmGet) | **GET** /admin/realms/{realm}/roles/{role-name}/composites/realm | Get realm-level roles of the role&#39;s composite |
| [**adminRealmsRealmRolesRoleNameDelete()**](RolesApi.md#adminRealmsRealmRolesRoleNameDelete) | **DELETE** /admin/realms/{realm}/roles/{role-name} | Delete a role by name |
| [**adminRealmsRealmRolesRoleNameGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameGet) | **GET** /admin/realms/{realm}/roles/{role-name} | Get a role by name |
| [**adminRealmsRealmRolesRoleNameGroupsGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameGroupsGet) | **GET** /admin/realms/{realm}/roles/{role-name}/groups | Returns a stream of groups that have the specified role name |
| [**adminRealmsRealmRolesRoleNameManagementPermissionsGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameManagementPermissionsGet) | **GET** /admin/realms/{realm}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmRolesRoleNameManagementPermissionsPut()**](RolesApi.md#adminRealmsRealmRolesRoleNameManagementPermissionsPut) | **PUT** /admin/realms/{realm}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmRolesRoleNamePut()**](RolesApi.md#adminRealmsRealmRolesRoleNamePut) | **PUT** /admin/realms/{realm}/roles/{role-name} | Update a role by name |
| [**adminRealmsRealmRolesRoleNameUsersGet()**](RolesApi.md#adminRealmsRealmRolesRoleNameUsersGet) | **GET** /admin/realms/{realm}/roles/{role-name}/users | Returns a stream of users that have the specified role name. |


## `adminRealmsRealmClientsClientUuidRolesGet()`

```php
adminRealmsRealmClientsClientUuidRolesGet($realm, $client_uuid, $brief_representation, $first, $max, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get all roles for the realm or client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$brief_representation = true; // bool
$first = 56; // int
$max = 56; // int
$search = ''; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesGet($realm, $client_uuid, $brief_representation, $first, $max, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **brief_representation** | **bool**|  | [optional] [default to true] |
| **first** | **int**|  | [optional] |
| **max** | **int**|  | [optional] |
| **search** | **string**|  | [optional] [default to &#39;&#39;] |

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

## `adminRealmsRealmClientsClientUuidRolesPost()`

```php
adminRealmsRealmClientsClientUuidRolesPost($realm, $client_uuid, $role_representation)
```

Create a new role for the realm or client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation

try {
    $apiInstance->adminRealmsRealmClientsClientUuidRolesPost($realm, $client_uuid, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet($realm, $client_uuid, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get client-level roles for the client that are in the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet($realm, $client_uuid, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**|  | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete($realm, $client_uuid, $role_name, $role_representation)
```

Remove roles from the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete($realm, $client_uuid, $role_name, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |
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

## `adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet($realm, $client_uuid, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get composites of the role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet($realm, $client_uuid, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost($realm, $client_uuid, $role_name, $role_representation)
```

Add a composite to the role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost($realm, $client_uuid, $role_name, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |
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

## `adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet($realm, $client_uuid, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles of the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet($realm, $client_uuid, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmClientsClientUuidRolesRoleNameDelete()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameDelete($realm, $client_uuid, $role_name)
```

Delete a role by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameDelete($realm, $client_uuid, $role_name);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmClientsClientUuidRolesRoleNameGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameGet($realm, $client_uuid, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation
```

Get a role by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameGet($realm, $client_uuid, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet($realm, $client_uuid, $role_name, $brief_representation, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]
```

Returns a stream of groups that have the specified role name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | the role name.
$brief_representation = true; // bool | if false, return a full representation of the {@code GroupRepresentation} objects.
$first = 56; // int | first result to return. Ignored if negative or {@code null}.
$max = 56; // int | maximum number of results to return. Ignored if negative or {@code null}.

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet($realm, $client_uuid, $role_name, $brief_representation, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| the role name. | |
| **brief_representation** | **bool**| if false, return a full representation of the {@code GroupRepresentation} objects. | [optional] [default to true] |
| **first** | **int**| first result to return. Ignored if negative or {@code null}. | [optional] |
| **max** | **int**| maximum number of results to return. Ignored if negative or {@code null}. | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]**](../Model/GroupRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet($realm, $client_uuid, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether role Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet($realm, $client_uuid, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference**](../Model/ManagementPermissionReference.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut($realm, $client_uuid, $role_name, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether role Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut($realm, $client_uuid, $role_name, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**|  | |
| **management_permission_reference** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference**](../Model/ManagementPermissionReference.md)|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference**](../Model/ManagementPermissionReference.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidRolesRoleNamePut()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNamePut($realm, $client_uuid, $role_name, $role_representation)
```

Update a role by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | role's name (not id!)
$role_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation

try {
    $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNamePut($realm, $client_uuid, $role_name, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet()`

```php
adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet($realm, $client_uuid, $role_name, $brief_representation, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation[]
```

Returns a stream of users that have the specified role name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_name = 'role_name_example'; // string | the role name.
$brief_representation = True; // bool | Boolean which defines whether brief representations are returned (default: false)
$first = 56; // int | first result to return. Ignored if negative or {@code null}.
$max = 56; // int | maximum number of results to return. Ignored if negative or {@code null}.

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet($realm, $client_uuid, $role_name, $brief_representation, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_name** | **string**| the role name. | |
| **brief_representation** | **bool**| Boolean which defines whether brief representations are returned (default: false) | [optional] |
| **first** | **int**| first result to return. Ignored if negative or {@code null}. | [optional] |
| **max** | **int**| maximum number of results to return. Ignored if negative or {@code null}. | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation[]**](../Model/UserRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmRolesGet()`

```php
adminRealmsRealmRolesGet($realm, $brief_representation, $first, $max, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get all roles for the realm or client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$brief_representation = true; // bool
$first = 56; // int
$max = 56; // int
$search = ''; // string

try {
    $result = $apiInstance->adminRealmsRealmRolesGet($realm, $brief_representation, $first, $max, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **brief_representation** | **bool**|  | [optional] [default to true] |
| **first** | **int**|  | [optional] |
| **max** | **int**|  | [optional] |
| **search** | **string**|  | [optional] [default to &#39;&#39;] |

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

## `adminRealmsRealmRolesPost()`

```php
adminRealmsRealmRolesPost($realm, $role_representation)
```

Create a new role for the realm or client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation

try {
    $apiInstance->adminRealmsRealmRolesPost($realm, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet()`

```php
adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet($realm, $client_uuid, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get client-level roles for the client that are in the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet($realm, $client_uuid, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**|  | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmRolesRoleNameCompositesDelete()`

```php
adminRealmsRealmRolesRoleNameCompositesDelete($realm, $role_name, $role_representation)
```

Remove roles from the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmRolesRoleNameCompositesDelete($realm, $role_name, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameCompositesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |
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

## `adminRealmsRealmRolesRoleNameCompositesGet()`

```php
adminRealmsRealmRolesRoleNameCompositesGet($realm, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get composites of the role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameCompositesGet($realm, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameCompositesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmRolesRoleNameCompositesPost()`

```php
adminRealmsRealmRolesRoleNameCompositesPost($realm, $role_name, $role_representation)
```

Add a composite to the role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmRolesRoleNameCompositesPost($realm, $role_name, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameCompositesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |
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

## `adminRealmsRealmRolesRoleNameCompositesRealmGet()`

```php
adminRealmsRealmRolesRoleNameCompositesRealmGet($realm, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles of the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameCompositesRealmGet($realm, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameCompositesRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmRolesRoleNameDelete()`

```php
adminRealmsRealmRolesRoleNameDelete($realm, $role_name)
```

Delete a role by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $apiInstance->adminRealmsRealmRolesRoleNameDelete($realm, $role_name);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

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

## `adminRealmsRealmRolesRoleNameGet()`

```php
adminRealmsRealmRolesRoleNameGet($realm, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation
```

Get a role by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameGet($realm, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation**](../Model/RoleRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmRolesRoleNameGroupsGet()`

```php
adminRealmsRealmRolesRoleNameGroupsGet($realm, $role_name, $brief_representation, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]
```

Returns a stream of groups that have the specified role name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | the role name.
$brief_representation = true; // bool | if false, return a full representation of the {@code GroupRepresentation} objects.
$first = 56; // int | first result to return. Ignored if negative or {@code null}.
$max = 56; // int | maximum number of results to return. Ignored if negative or {@code null}.

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameGroupsGet($realm, $role_name, $brief_representation, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| the role name. | |
| **brief_representation** | **bool**| if false, return a full representation of the {@code GroupRepresentation} objects. | [optional] [default to true] |
| **first** | **int**| first result to return. Ignored if negative or {@code null}. | [optional] |
| **max** | **int**| maximum number of results to return. Ignored if negative or {@code null}. | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]**](../Model/GroupRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmRolesRoleNameManagementPermissionsGet()`

```php
adminRealmsRealmRolesRoleNameManagementPermissionsGet($realm, $role_name): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether role Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameManagementPermissionsGet($realm, $role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference**](../Model/ManagementPermissionReference.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmRolesRoleNameManagementPermissionsPut()`

```php
adminRealmsRealmRolesRoleNameManagementPermissionsPut($realm, $role_name, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether role Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameManagementPermissionsPut($realm, $role_name, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**|  | |
| **management_permission_reference** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference**](../Model/ManagementPermissionReference.md)|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference**](../Model/ManagementPermissionReference.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmRolesRoleNamePut()`

```php
adminRealmsRealmRolesRoleNamePut($realm, $role_name, $role_representation)
```

Update a role by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | role's name (not id!)
$role_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation

try {
    $apiInstance->adminRealmsRealmRolesRoleNamePut($realm, $role_name, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| role&#39;s name (not id!) | |
| **role_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation**](../Model/RoleRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmRolesRoleNameUsersGet()`

```php
adminRealmsRealmRolesRoleNameUsersGet($realm, $role_name, $brief_representation, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation[]
```

Returns a stream of users that have the specified role name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_name = 'role_name_example'; // string | the role name.
$brief_representation = True; // bool | Boolean which defines whether brief representations are returned (default: false)
$first = 56; // int | first result to return. Ignored if negative or {@code null}.
$max = 56; // int | maximum number of results to return. Ignored if negative or {@code null}.

try {
    $result = $apiInstance->adminRealmsRealmRolesRoleNameUsersGet($realm, $role_name, $brief_representation, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->adminRealmsRealmRolesRoleNameUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_name** | **string**| the role name. | |
| **brief_representation** | **bool**| Boolean which defines whether brief representations are returned (default: false) | [optional] |
| **first** | **int**| first result to return. Ignored if negative or {@code null}. | [optional] |
| **max** | **int**| maximum number of results to return. Ignored if negative or {@code null}. | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation[]**](../Model/UserRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
