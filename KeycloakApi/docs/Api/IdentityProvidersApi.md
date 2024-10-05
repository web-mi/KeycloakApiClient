# WebMI\KeycloakApiClient\KeycloakApi\IdentityProvidersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmIdentityProviderImportConfigPost()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderImportConfigPost) | **POST** /admin/realms/{realm}/identity-provider/import-config | Import identity provider from JSON body |
| [**adminRealmsRealmIdentityProviderInstancesAliasDelete()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasDelete) | **DELETE** /admin/realms/{realm}/identity-provider/instances/{alias} | Delete the identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasExportGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasExportGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/export | Export public broker configuration for identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias} | Get the identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut) | **PUT** /admin/realms/{realm}/identity-provider/instances/{alias}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/mapper-types | Get mapper types for identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasMappersGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasMappersGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers | Get mappers for identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete) | **DELETE** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers/{id} | Delete a mapper for the identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers/{id} | Get mapper by id for the identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut) | **PUT** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers/{id} | Update a mapper for the identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasMappersPost()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasMappersPost) | **POST** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers | Add a mapper to identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasPut()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasPut) | **PUT** /admin/realms/{realm}/identity-provider/instances/{alias} | Update the identity provider |
| [**adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/reload-keys | Reaload keys for the identity provider if the provider supports it, \&quot;true\&quot; is returned if reload was performed, \&quot;false\&quot; if not. |
| [**adminRealmsRealmIdentityProviderInstancesGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesGet) | **GET** /admin/realms/{realm}/identity-provider/instances | List identity providers |
| [**adminRealmsRealmIdentityProviderInstancesPost()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderInstancesPost) | **POST** /admin/realms/{realm}/identity-provider/instances | Create a new identity provider |
| [**adminRealmsRealmIdentityProviderProvidersProviderIdGet()**](IdentityProvidersApi.md#adminRealmsRealmIdentityProviderProvidersProviderIdGet) | **GET** /admin/realms/{realm}/identity-provider/providers/{provider_id} | Get the identity provider factory for that provider id |


## `adminRealmsRealmIdentityProviderImportConfigPost()`

```php
adminRealmsRealmIdentityProviderImportConfigPost($realm, $request_body): array<string,string>
```

Import identity provider from JSON body

Import identity provider from uploaded JSON file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$request_body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderImportConfigPost($realm, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderImportConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesAliasDelete()`

```php
adminRealmsRealmIdentityProviderInstancesAliasDelete($realm, $alias)
```

Delete the identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasDelete($realm, $alias);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |

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

## `adminRealmsRealmIdentityProviderInstancesAliasExportGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasExportGet($realm, $alias, $format)
```

Export public broker configuration for identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$format = 'format_example'; // string | Format to use

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasExportGet($realm, $alias, $format);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasExportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
| **format** | **string**| Format to use | [optional] |

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

## `adminRealmsRealmIdentityProviderInstancesAliasGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasGet($realm, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation
```

Get the identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation**](../Model/IdentityProviderRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet($realm, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether client Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |

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

## `adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut()`

```php
adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut($realm, $alias, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether client Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut($realm, $alias, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
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

## `adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet($realm, $alias): array<string,\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperTypeRepresentation>
```

Get mapper types for identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |

### Return type

[**array<string,\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperTypeRepresentation>**](../Model/IdentityProviderMapperTypeRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesAliasMappersGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasMappersGet($realm, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation[]
```

Get mappers for identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasMappersGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasMappersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation[]**](../Model/IdentityProviderMapperRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete()`

```php
adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete($realm, $alias, $id)
```

Delete a mapper for the identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$id = 'id_example'; // string | Mapper id

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete($realm, $alias, $id);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
| **id** | **string**| Mapper id | |

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

## `adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet($realm, $alias, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation
```

Get mapper by id for the identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet($realm, $alias, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation**](../Model/IdentityProviderMapperRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut()`

```php
adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut($realm, $alias, $id, $identity_provider_mapper_representation)
```

Update a mapper for the identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$id = 'id_example'; // string | Mapper id
$identity_provider_mapper_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut($realm, $alias, $id, $identity_provider_mapper_representation);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
| **id** | **string**| Mapper id | |
| **identity_provider_mapper_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation**](../Model/IdentityProviderMapperRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmIdentityProviderInstancesAliasMappersPost()`

```php
adminRealmsRealmIdentityProviderInstancesAliasMappersPost($realm, $alias, $identity_provider_mapper_representation)
```

Add a mapper to identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$identity_provider_mapper_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasMappersPost($realm, $alias, $identity_provider_mapper_representation);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasMappersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
| **identity_provider_mapper_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderMapperRepresentation**](../Model/IdentityProviderMapperRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmIdentityProviderInstancesAliasPut()`

```php
adminRealmsRealmIdentityProviderInstancesAliasPut($realm, $alias, $identity_provider_representation)
```

Update the identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string
$identity_provider_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasPut($realm, $alias, $identity_provider_representation);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |
| **identity_provider_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation**](../Model/IdentityProviderRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet()`

```php
adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet($realm, $alias): bool
```

Reaload keys for the identity provider if the provider supports it, \"true\" is returned if reload was performed, \"false\" if not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**|  | |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesGet()`

```php
adminRealmsRealmIdentityProviderInstancesGet($realm, $brief_representation, $first, $max, $realm_only, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation[]
```

List identity providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$brief_representation = True; // bool | Boolean which defines whether brief representations are returned (default: false)
$first = 56; // int | Pagination offset
$max = 56; // int | Maximum results size (defaults to 100)
$realm_only = True; // bool | Boolean which defines if only realm-level IDPs (not associated with orgs) should be returned (default: false)
$search = 'search_example'; // string | Filter specific providers by name. Search can be prefix (name*), contains (*name*) or exact (\"name\"). Default prefixed.

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderInstancesGet($realm, $brief_representation, $first, $max, $realm_only, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **brief_representation** | **bool**| Boolean which defines whether brief representations are returned (default: false) | [optional] |
| **first** | **int**| Pagination offset | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |
| **realm_only** | **bool**| Boolean which defines if only realm-level IDPs (not associated with orgs) should be returned (default: false) | [optional] |
| **search** | **string**| Filter specific providers by name. Search can be prefix (name*), contains (*name*) or exact (\&quot;name\&quot;). Default prefixed. | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation[]**](../Model/IdentityProviderRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmIdentityProviderInstancesPost()`

```php
adminRealmsRealmIdentityProviderInstancesPost($realm, $identity_provider_representation)
```

Create a new identity provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$identity_provider_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation

try {
    $apiInstance->adminRealmsRealmIdentityProviderInstancesPost($realm, $identity_provider_representation);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderInstancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **identity_provider_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation**](../Model/IdentityProviderRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmIdentityProviderProvidersProviderIdGet()`

```php
adminRealmsRealmIdentityProviderProvidersProviderIdGet($realm, $provider_id): object
```

Get the identity provider factory for that provider id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$provider_id = 'provider_id_example'; // string | The provider id to get the factory

try {
    $result = $apiInstance->adminRealmsRealmIdentityProviderProvidersProviderIdGet($realm, $provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->adminRealmsRealmIdentityProviderProvidersProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **provider_id** | **string**| The provider id to get the factory | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
