# WebMI\KeycloakApiClient\KeycloakApi\RolesByIDApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/composites/clients/{clientUuid} | Get client-level roles for the client that are in the role&#39;s composite |
| [**adminRealmsRealmRolesByIdRoleIdCompositesDelete()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdCompositesDelete) | **DELETE** /admin/realms/{realm}/roles-by-id/{role-id}/composites | Remove a set of roles from the role&#39;s composite |
| [**adminRealmsRealmRolesByIdRoleIdCompositesGet()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdCompositesGet) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/composites | Get role&#39;s children Returns a set of role&#39;s children provided the role is a composite. |
| [**adminRealmsRealmRolesByIdRoleIdCompositesPost()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdCompositesPost) | **POST** /admin/realms/{realm}/roles-by-id/{role-id}/composites | Make the role a composite role by associating some child roles |
| [**adminRealmsRealmRolesByIdRoleIdCompositesRealmGet()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdCompositesRealmGet) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/composites/realm | Get realm-level roles that are in the role&#39;s composite |
| [**adminRealmsRealmRolesByIdRoleIdDelete()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdDelete) | **DELETE** /admin/realms/{realm}/roles-by-id/{role-id} | Delete the role |
| [**adminRealmsRealmRolesByIdRoleIdGet()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdGet) | **GET** /admin/realms/{realm}/roles-by-id/{role-id} | Get a specific role&#39;s representation |
| [**adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut) | **PUT** /admin/realms/{realm}/roles-by-id/{role-id}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmRolesByIdRoleIdPut()**](RolesByIDApi.md#adminRealmsRealmRolesByIdRoleIdPut) | **PUT** /admin/realms/{realm}/roles-by-id/{role-id} | Update the role |


## `adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet()`

```php
adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet($realm, $client_uuid, $role_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get client-level roles for the client that are in the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet($realm, $client_uuid, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**|  | |
| **role_id** | **string**|  | |

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

## `adminRealmsRealmRolesByIdRoleIdCompositesDelete()`

```php
adminRealmsRealmRolesByIdRoleIdCompositesDelete($realm, $role_id, $role_representation)
```

Remove a set of roles from the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string | Role id
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmRolesByIdRoleIdCompositesDelete($realm, $role_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdCompositesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**| Role id | |
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

## `adminRealmsRealmRolesByIdRoleIdCompositesGet()`

```php
adminRealmsRealmRolesByIdRoleIdCompositesGet($realm, $role_id, $first, $max, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get role's children Returns a set of role's children provided the role is a composite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string
$first = 56; // int
$max = 56; // int
$search = 'search_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmRolesByIdRoleIdCompositesGet($realm, $role_id, $first, $max, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdCompositesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**|  | |
| **first** | **int**|  | [optional] |
| **max** | **int**|  | [optional] |
| **search** | **string**|  | [optional] |

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

## `adminRealmsRealmRolesByIdRoleIdCompositesPost()`

```php
adminRealmsRealmRolesByIdRoleIdCompositesPost($realm, $role_id, $role_representation)
```

Make the role a composite role by associating some child roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmRolesByIdRoleIdCompositesPost($realm, $role_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdCompositesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**|  | |
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

## `adminRealmsRealmRolesByIdRoleIdCompositesRealmGet()`

```php
adminRealmsRealmRolesByIdRoleIdCompositesRealmGet($realm, $role_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles that are in the role's composite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmRolesByIdRoleIdCompositesRealmGet($realm, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdCompositesRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**|  | |

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

## `adminRealmsRealmRolesByIdRoleIdDelete()`

```php
adminRealmsRealmRolesByIdRoleIdDelete($realm, $role_id)
```

Delete the role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string | id of role

try {
    $apiInstance->adminRealmsRealmRolesByIdRoleIdDelete($realm, $role_id);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**| id of role | |

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

## `adminRealmsRealmRolesByIdRoleIdGet()`

```php
adminRealmsRealmRolesByIdRoleIdGet($realm, $role_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation
```

Get a specific role's representation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string | id of role

try {
    $result = $apiInstance->adminRealmsRealmRolesByIdRoleIdGet($realm, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**| id of role | |

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

## `adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet()`

```php
adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet($realm, $role_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether role Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet($realm, $role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**|  | |

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

## `adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut()`

```php
adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut($realm, $role_id, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether role Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut($realm, $role_id, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**|  | |
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

## `adminRealmsRealmRolesByIdRoleIdPut()`

```php
adminRealmsRealmRolesByIdRoleIdPut($realm, $role_id, $role_representation)
```

Update the role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RolesByIDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$role_id = 'role_id_example'; // string | id of role
$role_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation

try {
    $apiInstance->adminRealmsRealmRolesByIdRoleIdPut($realm, $role_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RolesByIDApi->adminRealmsRealmRolesByIdRoleIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **role_id** | **string**| id of role | |
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
