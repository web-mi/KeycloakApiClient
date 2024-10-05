# WebMI\KeycloakApiClient\KeycloakApi\ClientRoleMappingsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet()**](ClientRoleMappingsApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id}/available | Get available client-level roles that can be mapped to the user or group |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet()**](ClientRoleMappingsApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id}/composite | Get effective client-level role mappings This recurses any composite roles |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete()**](ClientRoleMappingsApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete) | **DELETE** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id} | Delete client-level roles from user or group role mapping |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet()**](ClientRoleMappingsApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id} | Get client-level role mappings for the user or group, and the app |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost()**](ClientRoleMappingsApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost) | **POST** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id} | Add client-level roles to the user or group role mapping |
| [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet()**](ClientRoleMappingsApi.md#adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id}/available | Get available client-level roles that can be mapped to the user or group |
| [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet()**](ClientRoleMappingsApi.md#adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id}/composite | Get effective client-level role mappings This recurses any composite roles |
| [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete()**](ClientRoleMappingsApi.md#adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id} | Delete client-level roles from user or group role mapping |
| [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet()**](ClientRoleMappingsApi.md#adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id} | Get client-level role mappings for the user or group, and the app |
| [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost()**](ClientRoleMappingsApi.md#adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost) | **POST** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id} | Add client-level roles to the user or group role mapping |


## `adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet($realm, $group_id, $client_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get available client-level roles that can be mapped to the user or group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet($realm, $group_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |

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

## `adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet($realm, $group_id, $client_id, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective client-level role mappings This recurses any composite roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet($realm, $group_id, $client_id, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |
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

## `adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete($realm, $group_id, $client_id, $role_representation)
```

Delete client-level roles from user or group role mapping

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete($realm, $group_id, $client_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |
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

## `adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet($realm, $group_id, $client_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get client-level role mappings for the user or group, and the app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet($realm, $group_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |

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

## `adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost($realm, $group_id, $client_id, $role_representation)
```

Add client-level roles to the user or group role mapping

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost($realm, $group_id, $client_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |
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

## `adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet($realm, $user_id, $client_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get available client-level roles that can be mapped to the user or group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet($realm, $user_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |

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

## `adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet($realm, $user_id, $client_id, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective client-level role mappings This recurses any composite roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet($realm, $user_id, $client_id, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |
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

## `adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete()`

```php
adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete($realm, $user_id, $client_id, $role_representation)
```

Delete client-level roles from user or group role mapping

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete($realm, $user_id, $client_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |
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

## `adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet($realm, $user_id, $client_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get client-level role mappings for the user or group, and the app

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet($realm, $user_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |

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

## `adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost()`

```php
adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost($realm, $user_id, $client_id, $role_representation)
```

Add client-level roles to the user or group role mapping

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRoleMappingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | client id (not clientId!)
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost($realm, $user_id, $client_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientRoleMappingsApi->adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| client id (not clientId!) | |
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
