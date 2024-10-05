# WebMI\KeycloakApiClient\KeycloakApi\RoleMapperApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsGet()**](RoleMapperApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings | Get role mappings |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet()**](RoleMapperApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm/available | Get realm-level roles that can be mapped |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet()**](RoleMapperApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm/composite | Get effective realm-level role mappings This will recurse all composite roles to get the result. |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete()**](RoleMapperApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete) | **DELETE** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm | Delete realm-level role mappings |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet()**](RoleMapperApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm | Get realm-level role mappings |
| [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost()**](RoleMapperApi.md#adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost) | **POST** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm | Add realm-level role mappings to the user |
| [**adminRealmsRealmUsersUserIdRoleMappingsGet()**](RoleMapperApi.md#adminRealmsRealmUsersUserIdRoleMappingsGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings | Get role mappings |
| [**adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet()**](RoleMapperApi.md#adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/realm/available | Get realm-level roles that can be mapped |
| [**adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet()**](RoleMapperApi.md#adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/realm/composite | Get effective realm-level role mappings This will recurse all composite roles to get the result. |
| [**adminRealmsRealmUsersUserIdRoleMappingsRealmDelete()**](RoleMapperApi.md#adminRealmsRealmUsersUserIdRoleMappingsRealmDelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/role-mappings/realm | Delete realm-level role mappings |
| [**adminRealmsRealmUsersUserIdRoleMappingsRealmGet()**](RoleMapperApi.md#adminRealmsRealmUsersUserIdRoleMappingsRealmGet) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/realm | Get realm-level role mappings |
| [**adminRealmsRealmUsersUserIdRoleMappingsRealmPost()**](RoleMapperApi.md#adminRealmsRealmUsersUserIdRoleMappingsRealmPost) | **POST** /admin/realms/{realm}/users/{user-id}/role-mappings/realm | Add realm-level role mappings to the user |


## `adminRealmsRealmGroupsGroupIdRoleMappingsGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsGet($realm, $group_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation
```

Get role mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsGet($realm, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmGroupsGroupIdRoleMappingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |

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

## `adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet($realm, $group_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles that can be mapped

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet($realm, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |

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

## `adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet($realm, $group_id, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective realm-level role mappings This will recurse all composite roles to get the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet($realm, $group_id, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
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

## `adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete($realm, $group_id, $role_representation)
```

Delete realm-level role mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete($realm, $group_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
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

## `adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet($realm, $group_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level role mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet($realm, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |

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

## `adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost()`

```php
adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost($realm, $group_id, $role_representation)
```

Add realm-level role mappings to the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost($realm, $group_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
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

## `adminRealmsRealmUsersUserIdRoleMappingsGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsGet($realm, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\MappingsRepresentation
```

Get role mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmUsersUserIdRoleMappingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet($realm, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level roles that can be mapped

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet($realm, $user_id, $brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective realm-level role mappings This will recurse all composite roles to get the result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$brief_representation = true; // bool | if false, return roles with their attributes

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet($realm, $user_id, $brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
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

## `adminRealmsRealmUsersUserIdRoleMappingsRealmDelete()`

```php
adminRealmsRealmUsersUserIdRoleMappingsRealmDelete($realm, $user_id, $role_representation)
```

Delete realm-level role mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsRealmDelete($realm, $user_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmUsersUserIdRoleMappingsRealmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
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

## `adminRealmsRealmUsersUserIdRoleMappingsRealmGet()`

```php
adminRealmsRealmUsersUserIdRoleMappingsRealmGet($realm, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get realm-level role mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsRealmGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmUsersUserIdRoleMappingsRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdRoleMappingsRealmPost()`

```php
adminRealmsRealmUsersUserIdRoleMappingsRealmPost($realm, $user_id, $role_representation)
```

Add realm-level role mappings to the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RoleMapperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$role_representation = array(new \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation()); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]

try {
    $apiInstance->adminRealmsRealmUsersUserIdRoleMappingsRealmPost($realm, $user_id, $role_representation);
} catch (Exception $e) {
    echo 'Exception when calling RoleMapperApi->adminRealmsRealmUsersUserIdRoleMappingsRealmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
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
