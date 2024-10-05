# WebMI\KeycloakApiClient\KeycloakApi\ComponentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmComponentsGet()**](ComponentApi.md#adminRealmsRealmComponentsGet) | **GET** /admin/realms/{realm}/components |  |
| [**adminRealmsRealmComponentsIdDelete()**](ComponentApi.md#adminRealmsRealmComponentsIdDelete) | **DELETE** /admin/realms/{realm}/components/{id} |  |
| [**adminRealmsRealmComponentsIdGet()**](ComponentApi.md#adminRealmsRealmComponentsIdGet) | **GET** /admin/realms/{realm}/components/{id} |  |
| [**adminRealmsRealmComponentsIdPut()**](ComponentApi.md#adminRealmsRealmComponentsIdPut) | **PUT** /admin/realms/{realm}/components/{id} |  |
| [**adminRealmsRealmComponentsIdSubComponentTypesGet()**](ComponentApi.md#adminRealmsRealmComponentsIdSubComponentTypesGet) | **GET** /admin/realms/{realm}/components/{id}/sub-component-types | List of subcomponent types that are available to configure for a particular parent component. |
| [**adminRealmsRealmComponentsPost()**](ComponentApi.md#adminRealmsRealmComponentsPost) | **POST** /admin/realms/{realm}/components |  |


## `adminRealmsRealmComponentsGet()`

```php
adminRealmsRealmComponentsGet($realm, $name, $parent, $type): \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$name = 'name_example'; // string
$parent = 'parent_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmComponentsGet($realm, $name, $parent, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->adminRealmsRealmComponentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **name** | **string**|  | [optional] |
| **parent** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation[]**](../Model/ComponentRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmComponentsIdDelete()`

```php
adminRealmsRealmComponentsIdDelete($realm, $id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $apiInstance->adminRealmsRealmComponentsIdDelete($realm, $id);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->adminRealmsRealmComponentsIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmComponentsIdGet()`

```php
adminRealmsRealmComponentsIdGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmComponentsIdGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->adminRealmsRealmComponentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation**](../Model/ComponentRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmComponentsIdPut()`

```php
adminRealmsRealmComponentsIdPut($realm, $id, $component_representation)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$component_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation

try {
    $apiInstance->adminRealmsRealmComponentsIdPut($realm, $id, $component_representation);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->adminRealmsRealmComponentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **component_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation**](../Model/ComponentRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmComponentsIdSubComponentTypesGet()`

```php
adminRealmsRealmComponentsIdSubComponentTypesGet($realm, $id, $type): \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentTypeRepresentation[]
```

List of subcomponent types that are available to configure for a particular parent component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmComponentsIdSubComponentTypesGet($realm, $id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->adminRealmsRealmComponentsIdSubComponentTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **type** | **string**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentTypeRepresentation[]**](../Model/ComponentTypeRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmComponentsPost()`

```php
adminRealmsRealmComponentsPost($realm, $component_representation)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ComponentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$component_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation

try {
    $apiInstance->adminRealmsRealmComponentsPost($realm, $component_representation);
} catch (Exception $e) {
    echo 'Exception when calling ComponentApi->adminRealmsRealmComponentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **component_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentRepresentation**](../Model/ComponentRepresentation.md)|  | [optional] |

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
