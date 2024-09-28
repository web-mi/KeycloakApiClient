# WebMI\KeycloakApiClient\KeycloakApi\GroupsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmGroupsCountGet()**](GroupsApi.md#adminRealmsRealmGroupsCountGet) | **GET** /admin/realms/{realm}/groups/count | Returns the groups counts. |
| [**adminRealmsRealmGroupsGet()**](GroupsApi.md#adminRealmsRealmGroupsGet) | **GET** /admin/realms/{realm}/groups | Get group hierarchy.  Only name and ids are returned. |
| [**adminRealmsRealmGroupsGroupIdChildrenGet()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdChildrenGet) | **GET** /admin/realms/{realm}/groups/{group-id}/children | Return a paginated list of subgroups that have a parent group corresponding to the group on the URL |
| [**adminRealmsRealmGroupsGroupIdChildrenPost()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdChildrenPost) | **POST** /admin/realms/{realm}/groups/{group-id}/children | Set or create child. |
| [**adminRealmsRealmGroupsGroupIdDelete()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdDelete) | **DELETE** /admin/realms/{realm}/groups/{group-id} |  |
| [**adminRealmsRealmGroupsGroupIdGet()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdGet) | **GET** /admin/realms/{realm}/groups/{group-id} |  |
| [**adminRealmsRealmGroupsGroupIdManagementPermissionsGet()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdManagementPermissionsGet) | **GET** /admin/realms/{realm}/groups/{group-id}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmGroupsGroupIdManagementPermissionsPut()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdManagementPermissionsPut) | **PUT** /admin/realms/{realm}/groups/{group-id}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmGroupsGroupIdMembersGet()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdMembersGet) | **GET** /admin/realms/{realm}/groups/{group-id}/members | Get users Returns a stream of users, filtered according to query parameters |
| [**adminRealmsRealmGroupsGroupIdPut()**](GroupsApi.md#adminRealmsRealmGroupsGroupIdPut) | **PUT** /admin/realms/{realm}/groups/{group-id} | Update group, ignores subgroups. |
| [**adminRealmsRealmGroupsPost()**](GroupsApi.md#adminRealmsRealmGroupsPost) | **POST** /admin/realms/{realm}/groups | create or add a top level realm groupSet or create child. |


## `adminRealmsRealmGroupsCountGet()`

```php
adminRealmsRealmGroupsCountGet($realm, $search, $top): array<string,int>
```

Returns the groups counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$search = 'search_example'; // string
$top = false; // bool

try {
    $result = $apiInstance->adminRealmsRealmGroupsCountGet($realm, $search, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **search** | **string**|  | [optional] |
| **top** | **bool**|  | [optional] [default to false] |

### Return type

**array<string,int>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmGroupsGet()`

```php
adminRealmsRealmGroupsGet($realm, $brief_representation, $exact, $first, $max, $populate_hierarchy, $q, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]
```

Get group hierarchy.  Only name and ids are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$brief_representation = true; // bool
$exact = false; // bool
$first = 56; // int
$max = 56; // int
$populate_hierarchy = true; // bool
$q = 'q_example'; // string
$search = 'search_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupsGet($realm, $brief_representation, $exact, $first, $max, $populate_hierarchy, $q, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **brief_representation** | **bool**|  | [optional] [default to true] |
| **exact** | **bool**|  | [optional] [default to false] |
| **first** | **int**|  | [optional] |
| **max** | **int**|  | [optional] |
| **populate_hierarchy** | **bool**|  | [optional] [default to true] |
| **q** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |

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

## `adminRealmsRealmGroupsGroupIdChildrenGet()`

```php
adminRealmsRealmGroupsGroupIdChildrenGet($realm, $group_id, $brief_representation, $exact, $first, $max, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]
```

Return a paginated list of subgroups that have a parent group corresponding to the group on the URL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$brief_representation = false; // bool | Boolean which defines whether brief groups representations are returned or not (default: false)
$exact = True; // bool | Boolean which defines whether the params \"search\" must match exactly or not
$first = 56; // int | The position of the first result to be returned (pagination offset).
$max = 56; // int | The maximum number of results that are to be returned. Defaults to 10
$search = 'search_example'; // string | A String representing either an exact group name or a partial name

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdChildrenGet($realm, $group_id, $brief_representation, $exact, $first, $max, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdChildrenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **brief_representation** | **bool**| Boolean which defines whether brief groups representations are returned or not (default: false) | [optional] [default to false] |
| **exact** | **bool**| Boolean which defines whether the params \&quot;search\&quot; must match exactly or not | [optional] |
| **first** | **int**| The position of the first result to be returned (pagination offset). | [optional] |
| **max** | **int**| The maximum number of results that are to be returned. Defaults to 10 | [optional] |
| **search** | **string**| A String representing either an exact group name or a partial name | [optional] |

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

## `adminRealmsRealmGroupsGroupIdChildrenPost()`

```php
adminRealmsRealmGroupsGroupIdChildrenPost($realm, $group_id, $group_representation)
```

Set or create child.

This will just set the parent if it exists. Create it and set the parent if the group doesn’t exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$group_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdChildrenPost($realm, $group_id, $group_representation);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdChildrenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **group_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation**](../Model/GroupRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmGroupsGroupIdDelete()`

```php
adminRealmsRealmGroupsGroupIdDelete($realm, $group_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdDelete($realm, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |

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

## `adminRealmsRealmGroupsGroupIdGet()`

```php
adminRealmsRealmGroupsGroupIdGet($realm, $group_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdGet($realm, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation**](../Model/GroupRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmGroupsGroupIdManagementPermissionsGet()`

```php
adminRealmsRealmGroupsGroupIdManagementPermissionsGet($realm, $group_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether client Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdManagementPermissionsGet($realm, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |

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

## `adminRealmsRealmGroupsGroupIdManagementPermissionsPut()`

```php
adminRealmsRealmGroupsGroupIdManagementPermissionsPut($realm, $group_id, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether client Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdManagementPermissionsPut($realm, $group_id, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
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

## `adminRealmsRealmGroupsGroupIdMembersGet()`

```php
adminRealmsRealmGroupsGroupIdMembersGet($realm, $group_id, $brief_representation, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation[]
```

Get users Returns a stream of users, filtered according to query parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$brief_representation = True; // bool | Only return basic information (only guaranteed to return id, username, created, first and last name, email, enabled state, email verification state, federation link, and access. Note that it means that namely user attributes, required actions, and not before are not returned.)
$first = 56; // int | Pagination offset
$max = 56; // int | Maximum results size (defaults to 100)

try {
    $result = $apiInstance->adminRealmsRealmGroupsGroupIdMembersGet($realm, $group_id, $brief_representation, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdMembersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **brief_representation** | **bool**| Only return basic information (only guaranteed to return id, username, created, first and last name, email, enabled state, email verification state, federation link, and access. Note that it means that namely user attributes, required actions, and not before are not returned.) | [optional] |
| **first** | **int**| Pagination offset | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |

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

## `adminRealmsRealmGroupsGroupIdPut()`

```php
adminRealmsRealmGroupsGroupIdPut($realm, $group_id, $group_representation)
```

Update group, ignores subgroups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string
$group_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation

try {
    $apiInstance->adminRealmsRealmGroupsGroupIdPut($realm, $group_id, $group_representation);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_id** | **string**|  | |
| **group_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation**](../Model/GroupRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmGroupsPost()`

```php
adminRealmsRealmGroupsPost($realm, $group_representation)
```

create or add a top level realm groupSet or create child.

This will update the group and set the parent if it exists. Create it and set the parent if the group doesn’t exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation

try {
    $apiInstance->adminRealmsRealmGroupsPost($realm, $group_representation);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->adminRealmsRealmGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **group_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation**](../Model/GroupRepresentation.md)|  | [optional] |

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
