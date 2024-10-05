# WebMI\KeycloakApiClient\KeycloakApi\RealmsAdminApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsGet()**](RealmsAdminApi.md#adminRealmsGet) | **GET** /admin/realms | Get accessible realms Returns a list of accessible realms. The list is filtered based on what realms the caller is allowed to view. |
| [**adminRealmsPost()**](RealmsAdminApi.md#adminRealmsPost) | **POST** /admin/realms | Import a realm. Imports a realm from a full representation of that realm. |
| [**adminRealmsRealmAdminEventsDelete()**](RealmsAdminApi.md#adminRealmsRealmAdminEventsDelete) | **DELETE** /admin/realms/{realm}/admin-events | Delete all admin events |
| [**adminRealmsRealmAdminEventsGet()**](RealmsAdminApi.md#adminRealmsRealmAdminEventsGet) | **GET** /admin/realms/{realm}/admin-events | Get admin events Returns all admin events, or filters events based on URL query parameters listed here |
| [**adminRealmsRealmClientDescriptionConverterPost()**](RealmsAdminApi.md#adminRealmsRealmClientDescriptionConverterPost) | **POST** /admin/realms/{realm}/client-description-converter | Base path for importing clients under this realm. |
| [**adminRealmsRealmClientPoliciesPoliciesGet()**](RealmsAdminApi.md#adminRealmsRealmClientPoliciesPoliciesGet) | **GET** /admin/realms/{realm}/client-policies/policies |  |
| [**adminRealmsRealmClientPoliciesPoliciesPut()**](RealmsAdminApi.md#adminRealmsRealmClientPoliciesPoliciesPut) | **PUT** /admin/realms/{realm}/client-policies/policies |  |
| [**adminRealmsRealmClientPoliciesProfilesGet()**](RealmsAdminApi.md#adminRealmsRealmClientPoliciesProfilesGet) | **GET** /admin/realms/{realm}/client-policies/profiles |  |
| [**adminRealmsRealmClientPoliciesProfilesPut()**](RealmsAdminApi.md#adminRealmsRealmClientPoliciesProfilesPut) | **PUT** /admin/realms/{realm}/client-policies/profiles |  |
| [**adminRealmsRealmClientSessionStatsGet()**](RealmsAdminApi.md#adminRealmsRealmClientSessionStatsGet) | **GET** /admin/realms/{realm}/client-session-stats | Get client session stats Returns a JSON map. |
| [**adminRealmsRealmClientTypesGet()**](RealmsAdminApi.md#adminRealmsRealmClientTypesGet) | **GET** /admin/realms/{realm}/client-types | List all client types available in the current realm |
| [**adminRealmsRealmClientTypesPut()**](RealmsAdminApi.md#adminRealmsRealmClientTypesPut) | **PUT** /admin/realms/{realm}/client-types | Update a client type |
| [**adminRealmsRealmCredentialRegistratorsGet()**](RealmsAdminApi.md#adminRealmsRealmCredentialRegistratorsGet) | **GET** /admin/realms/{realm}/credential-registrators |  |
| [**adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete()**](RealmsAdminApi.md#adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete) | **DELETE** /admin/realms/{realm}/default-default-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut()**](RealmsAdminApi.md#adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut) | **PUT** /admin/realms/{realm}/default-default-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmDefaultDefaultClientScopesGet()**](RealmsAdminApi.md#adminRealmsRealmDefaultDefaultClientScopesGet) | **GET** /admin/realms/{realm}/default-default-client-scopes | Get realm default client scopes.  Only name and ids are returned. |
| [**adminRealmsRealmDefaultGroupsGet()**](RealmsAdminApi.md#adminRealmsRealmDefaultGroupsGet) | **GET** /admin/realms/{realm}/default-groups | Get group hierarchy.  Only name and ids are returned. |
| [**adminRealmsRealmDefaultGroupsGroupIdDelete()**](RealmsAdminApi.md#adminRealmsRealmDefaultGroupsGroupIdDelete) | **DELETE** /admin/realms/{realm}/default-groups/{groupId} |  |
| [**adminRealmsRealmDefaultGroupsGroupIdPut()**](RealmsAdminApi.md#adminRealmsRealmDefaultGroupsGroupIdPut) | **PUT** /admin/realms/{realm}/default-groups/{groupId} |  |
| [**adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete()**](RealmsAdminApi.md#adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete) | **DELETE** /admin/realms/{realm}/default-optional-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut()**](RealmsAdminApi.md#adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut) | **PUT** /admin/realms/{realm}/default-optional-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmDefaultOptionalClientScopesGet()**](RealmsAdminApi.md#adminRealmsRealmDefaultOptionalClientScopesGet) | **GET** /admin/realms/{realm}/default-optional-client-scopes | Get realm optional client scopes.  Only name and ids are returned. |
| [**adminRealmsRealmDelete()**](RealmsAdminApi.md#adminRealmsRealmDelete) | **DELETE** /admin/realms/{realm} | Delete the realm |
| [**adminRealmsRealmEventsConfigGet()**](RealmsAdminApi.md#adminRealmsRealmEventsConfigGet) | **GET** /admin/realms/{realm}/events/config | Get the events provider configuration Returns JSON object with events provider configuration |
| [**adminRealmsRealmEventsConfigPut()**](RealmsAdminApi.md#adminRealmsRealmEventsConfigPut) | **PUT** /admin/realms/{realm}/events/config |  |
| [**adminRealmsRealmEventsDelete()**](RealmsAdminApi.md#adminRealmsRealmEventsDelete) | **DELETE** /admin/realms/{realm}/events | Delete all events |
| [**adminRealmsRealmEventsGet()**](RealmsAdminApi.md#adminRealmsRealmEventsGet) | **GET** /admin/realms/{realm}/events | Get events Returns all events, or filters them based on URL query parameters listed here |
| [**adminRealmsRealmGet()**](RealmsAdminApi.md#adminRealmsRealmGet) | **GET** /admin/realms/{realm} | Get the top-level representation of the realm It will not include nested information like User and Client representations. |
| [**adminRealmsRealmGroupByPathPathGet()**](RealmsAdminApi.md#adminRealmsRealmGroupByPathPathGet) | **GET** /admin/realms/{realm}/group-by-path/{path} |  |
| [**adminRealmsRealmLocalizationGet()**](RealmsAdminApi.md#adminRealmsRealmLocalizationGet) | **GET** /admin/realms/{realm}/localization |  |
| [**adminRealmsRealmLocalizationLocaleDelete()**](RealmsAdminApi.md#adminRealmsRealmLocalizationLocaleDelete) | **DELETE** /admin/realms/{realm}/localization/{locale} |  |
| [**adminRealmsRealmLocalizationLocaleGet()**](RealmsAdminApi.md#adminRealmsRealmLocalizationLocaleGet) | **GET** /admin/realms/{realm}/localization/{locale} |  |
| [**adminRealmsRealmLocalizationLocaleKeyDelete()**](RealmsAdminApi.md#adminRealmsRealmLocalizationLocaleKeyDelete) | **DELETE** /admin/realms/{realm}/localization/{locale}/{key} |  |
| [**adminRealmsRealmLocalizationLocaleKeyGet()**](RealmsAdminApi.md#adminRealmsRealmLocalizationLocaleKeyGet) | **GET** /admin/realms/{realm}/localization/{locale}/{key} |  |
| [**adminRealmsRealmLocalizationLocaleKeyPut()**](RealmsAdminApi.md#adminRealmsRealmLocalizationLocaleKeyPut) | **PUT** /admin/realms/{realm}/localization/{locale}/{key} |  |
| [**adminRealmsRealmLocalizationLocalePost()**](RealmsAdminApi.md#adminRealmsRealmLocalizationLocalePost) | **POST** /admin/realms/{realm}/localization/{locale} | Import localization from uploaded JSON file |
| [**adminRealmsRealmLogoutAllPost()**](RealmsAdminApi.md#adminRealmsRealmLogoutAllPost) | **POST** /admin/realms/{realm}/logout-all | Removes all user sessions. |
| [**adminRealmsRealmPartialExportPost()**](RealmsAdminApi.md#adminRealmsRealmPartialExportPost) | **POST** /admin/realms/{realm}/partial-export | Partial export of existing realm into a JSON file. |
| [**adminRealmsRealmPartialImportPost()**](RealmsAdminApi.md#adminRealmsRealmPartialImportPost) | **POST** /admin/realms/{realm}/partialImport | Partial import from a JSON file to an existing realm. |
| [**adminRealmsRealmPushRevocationPost()**](RealmsAdminApi.md#adminRealmsRealmPushRevocationPost) | **POST** /admin/realms/{realm}/push-revocation | Push the realm&#39;s revocation policy to any client that has an admin url associated with it. |
| [**adminRealmsRealmPut()**](RealmsAdminApi.md#adminRealmsRealmPut) | **PUT** /admin/realms/{realm} | Update the top-level information of the realm Any user, roles or client information in the representation will be ignored. |
| [**adminRealmsRealmSessionsSessionDelete()**](RealmsAdminApi.md#adminRealmsRealmSessionsSessionDelete) | **DELETE** /admin/realms/{realm}/sessions/{session} | Remove a specific user session. |
| [**adminRealmsRealmTestSMTPConnectionPost()**](RealmsAdminApi.md#adminRealmsRealmTestSMTPConnectionPost) | **POST** /admin/realms/{realm}/testSMTPConnection | Test SMTP connection with current logged in user |
| [**adminRealmsRealmUsersManagementPermissionsGet()**](RealmsAdminApi.md#adminRealmsRealmUsersManagementPermissionsGet) | **GET** /admin/realms/{realm}/users-management-permissions |  |
| [**adminRealmsRealmUsersManagementPermissionsPut()**](RealmsAdminApi.md#adminRealmsRealmUsersManagementPermissionsPut) | **PUT** /admin/realms/{realm}/users-management-permissions |  |


## `adminRealmsGet()`

```php
adminRealmsGet($brief_representation): \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation[]
```

Get accessible realms Returns a list of accessible realms. The list is filtered based on what realms the caller is allowed to view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$brief_representation = false; // bool

try {
    $result = $apiInstance->adminRealmsGet($brief_representation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brief_representation** | **bool**|  | [optional] [default to false] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation[]**](../Model/RealmRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsPost()`

```php
adminRealmsPost($body)
```

Import a realm. Imports a realm from a full representation of that realm.

Realm name must be unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->adminRealmsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

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

## `adminRealmsRealmAdminEventsDelete()`

```php
adminRealmsRealmAdminEventsDelete($realm)
```

Delete all admin events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $apiInstance->adminRealmsRealmAdminEventsDelete($realm);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmAdminEventsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

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

## `adminRealmsRealmAdminEventsGet()`

```php
adminRealmsRealmAdminEventsGet($realm, $auth_client, $auth_ip_address, $auth_realm, $auth_user, $date_from, $date_to, $first, $max, $operation_types, $resource_path, $resource_types): \WebMI\KeycloakApiClient\KeycloakApi\Model\AdminEventRepresentation[]
```

Get admin events Returns all admin events, or filters events based on URL query parameters listed here

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$auth_client = 'auth_client_example'; // string
$auth_ip_address = 'auth_ip_address_example'; // string
$auth_realm = 'auth_realm_example'; // string
$auth_user = 'auth_user_example'; // string | user id
$date_from = 'date_from_example'; // string
$date_to = 'date_to_example'; // string
$first = 56; // int
$max = 56; // int | Maximum results size (defaults to 100)
$operation_types = array('operation_types_example'); // string[]
$resource_path = 'resource_path_example'; // string
$resource_types = array('resource_types_example'); // string[]

try {
    $result = $apiInstance->adminRealmsRealmAdminEventsGet($realm, $auth_client, $auth_ip_address, $auth_realm, $auth_user, $date_from, $date_to, $first, $max, $operation_types, $resource_path, $resource_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmAdminEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **auth_client** | **string**|  | [optional] |
| **auth_ip_address** | **string**|  | [optional] |
| **auth_realm** | **string**|  | [optional] |
| **auth_user** | **string**| user id | [optional] |
| **date_from** | **string**|  | [optional] |
| **date_to** | **string**|  | [optional] |
| **first** | **int**|  | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |
| **operation_types** | [**string[]**](../Model/string.md)|  | [optional] |
| **resource_path** | **string**|  | [optional] |
| **resource_types** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AdminEventRepresentation[]**](../Model/AdminEventRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientDescriptionConverterPost()`

```php
adminRealmsRealmClientDescriptionConverterPost($realm, $body): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation
```

Base path for importing clients under this realm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$body = 'body_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientDescriptionConverterPost($realm, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientDescriptionConverterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **body** | **string**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation**](../Model/ClientRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/xml`, `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientPoliciesPoliciesGet()`

```php
adminRealmsRealmClientPoliciesPoliciesGet($realm, $include_global_policies): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientPoliciesRepresentation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$include_global_policies = True; // bool

try {
    $result = $apiInstance->adminRealmsRealmClientPoliciesPoliciesGet($realm, $include_global_policies);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientPoliciesPoliciesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **include_global_policies** | **bool**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientPoliciesRepresentation**](../Model/ClientPoliciesRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientPoliciesPoliciesPut()`

```php
adminRealmsRealmClientPoliciesPoliciesPut($realm, $client_policies_representation)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_policies_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientPoliciesRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientPoliciesRepresentation

try {
    $apiInstance->adminRealmsRealmClientPoliciesPoliciesPut($realm, $client_policies_representation);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientPoliciesPoliciesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_policies_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientPoliciesRepresentation**](../Model/ClientPoliciesRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientPoliciesProfilesGet()`

```php
adminRealmsRealmClientPoliciesProfilesGet($realm, $include_global_profiles): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientProfilesRepresentation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$include_global_profiles = True; // bool

try {
    $result = $apiInstance->adminRealmsRealmClientPoliciesProfilesGet($realm, $include_global_profiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientPoliciesProfilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **include_global_profiles** | **bool**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientProfilesRepresentation**](../Model/ClientProfilesRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientPoliciesProfilesPut()`

```php
adminRealmsRealmClientPoliciesProfilesPut($realm, $client_profiles_representation)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_profiles_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientProfilesRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientProfilesRepresentation

try {
    $apiInstance->adminRealmsRealmClientPoliciesProfilesPut($realm, $client_profiles_representation);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientPoliciesProfilesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_profiles_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientProfilesRepresentation**](../Model/ClientProfilesRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientSessionStatsGet()`

```php
adminRealmsRealmClientSessionStatsGet($realm): array<string,string>[]
```

Get client session stats Returns a JSON map.

The key is the client id, the value is the number of sessions that currently are active with that client. Only clients that actually have a session associated with them will be in this map.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientSessionStatsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientSessionStatsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**array<string,string>[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTypesGet()`

```php
adminRealmsRealmClientTypesGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientTypesRepresentation
```

List all client types available in the current realm

This endpoint returns a list of both global and realm level client types and the attributes they set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientTypesGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientTypesRepresentation**](../Model/ClientTypesRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientTypesPut()`

```php
adminRealmsRealmClientTypesPut($realm, $client_types_representation)
```

Update a client type

This endpoint allows you to update a realm level client type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_types_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientTypesRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientTypesRepresentation

try {
    $apiInstance->adminRealmsRealmClientTypesPut($realm, $client_types_representation);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmClientTypesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_types_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientTypesRepresentation**](../Model/ClientTypesRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmCredentialRegistratorsGet()`

```php
adminRealmsRealmCredentialRegistratorsGet($realm): string[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmCredentialRegistratorsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmCredentialRegistratorsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete()`

```php
adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete($realm, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete($realm, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut()`

```php
adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut($realm, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut($realm, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultDefaultClientScopesGet()`

```php
adminRealmsRealmDefaultDefaultClientScopesGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]
```

Get realm default client scopes.  Only name and ids are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmDefaultDefaultClientScopesGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultDefaultClientScopesGet: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultGroupsGet()`

```php
adminRealmsRealmDefaultGroupsGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]
```

Get group hierarchy.  Only name and ids are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmDefaultGroupsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

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

## `adminRealmsRealmDefaultGroupsGroupIdDelete()`

```php
adminRealmsRealmDefaultGroupsGroupIdDelete($realm, $group_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $apiInstance->adminRealmsRealmDefaultGroupsGroupIdDelete($realm, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultGroupsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultGroupsGroupIdPut()`

```php
adminRealmsRealmDefaultGroupsGroupIdPut($realm, $group_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$group_id = 'group_id_example'; // string

try {
    $apiInstance->adminRealmsRealmDefaultGroupsGroupIdPut($realm, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultGroupsGroupIdPut: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete()`

```php
adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete($realm, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete($realm, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut()`

```php
adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut($realm, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut($realm, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDefaultOptionalClientScopesGet()`

```php
adminRealmsRealmDefaultOptionalClientScopesGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]
```

Get realm optional client scopes.  Only name and ids are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmDefaultOptionalClientScopesGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDefaultOptionalClientScopesGet: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmDelete()`

```php
adminRealmsRealmDelete($realm)
```

Delete the realm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $apiInstance->adminRealmsRealmDelete($realm);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

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

## `adminRealmsRealmEventsConfigGet()`

```php
adminRealmsRealmEventsConfigGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmEventsConfigRepresentation
```

Get the events provider configuration Returns JSON object with events provider configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmEventsConfigGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmEventsConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RealmEventsConfigRepresentation**](../Model/RealmEventsConfigRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmEventsConfigPut()`

```php
adminRealmsRealmEventsConfigPut($realm, $realm_events_config_representation)
```



Update the events provider Change the events provider and/or its configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$realm_events_config_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmEventsConfigRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmEventsConfigRepresentation

try {
    $apiInstance->adminRealmsRealmEventsConfigPut($realm, $realm_events_config_representation);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmEventsConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **realm_events_config_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RealmEventsConfigRepresentation**](../Model/RealmEventsConfigRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmEventsDelete()`

```php
adminRealmsRealmEventsDelete($realm)
```

Delete all events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $apiInstance->adminRealmsRealmEventsDelete($realm);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmEventsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

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

## `adminRealmsRealmEventsGet()`

```php
adminRealmsRealmEventsGet($realm, $client, $date_from, $date_to, $first, $ip_address, $max, $type, $user): \WebMI\KeycloakApiClient\KeycloakApi\Model\EventRepresentation[]
```

Get events Returns all events, or filters them based on URL query parameters listed here

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client = 'client_example'; // string | App or oauth client name
$date_from = 'date_from_example'; // string | From date
$date_to = 'date_to_example'; // string | To date
$first = 56; // int | Paging offset
$ip_address = 'ip_address_example'; // string | IP Address
$max = 56; // int | Maximum results size (defaults to 100)
$type = array('type_example'); // string[] | The types of events to return
$user = 'user_example'; // string | User id

try {
    $result = $apiInstance->adminRealmsRealmEventsGet($realm, $client, $date_from, $date_to, $first, $ip_address, $max, $type, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client** | **string**| App or oauth client name | [optional] |
| **date_from** | **string**| From date | [optional] |
| **date_to** | **string**| To date | [optional] |
| **first** | **int**| Paging offset | [optional] |
| **ip_address** | **string**| IP Address | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |
| **type** | [**string[]**](../Model/string.md)| The types of events to return | [optional] |
| **user** | **string**| User id | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\EventRepresentation[]**](../Model/EventRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmGet()`

```php
adminRealmsRealmGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation
```

Get the top-level representation of the realm It will not include nested information like User and Client representations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation**](../Model/RealmRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmGroupByPathPathGet()`

```php
adminRealmsRealmGroupByPathPathGet($realm, $path): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$path = 'path_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmGroupByPathPathGet($realm, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmGroupByPathPathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **path** | **string**|  | |

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

## `adminRealmsRealmLocalizationGet()`

```php
adminRealmsRealmLocalizationGet($realm): string[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmLocalizationGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmLocalizationLocaleDelete()`

```php
adminRealmsRealmLocalizationLocaleDelete($realm, $locale)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$locale = 'locale_example'; // string

try {
    $apiInstance->adminRealmsRealmLocalizationLocaleDelete($realm, $locale);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationLocaleDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **locale** | **string**|  | |

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

## `adminRealmsRealmLocalizationLocaleGet()`

```php
adminRealmsRealmLocalizationLocaleGet($realm, $locale, $use_realm_default_locale_fallback): array<string,string>
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$locale = 'locale_example'; // string
$use_realm_default_locale_fallback = True; // bool

try {
    $result = $apiInstance->adminRealmsRealmLocalizationLocaleGet($realm, $locale, $use_realm_default_locale_fallback);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationLocaleGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **locale** | **string**|  | |
| **use_realm_default_locale_fallback** | **bool**|  | [optional] |

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmLocalizationLocaleKeyDelete()`

```php
adminRealmsRealmLocalizationLocaleKeyDelete($realm, $key, $locale)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$key = 'key_example'; // string
$locale = 'locale_example'; // string

try {
    $apiInstance->adminRealmsRealmLocalizationLocaleKeyDelete($realm, $key, $locale);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationLocaleKeyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **key** | **string**|  | |
| **locale** | **string**|  | |

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

## `adminRealmsRealmLocalizationLocaleKeyGet()`

```php
adminRealmsRealmLocalizationLocaleKeyGet($realm, $key, $locale): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$key = 'key_example'; // string
$locale = 'locale_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmLocalizationLocaleKeyGet($realm, $key, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationLocaleKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **key** | **string**|  | |
| **locale** | **string**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmLocalizationLocaleKeyPut()`

```php
adminRealmsRealmLocalizationLocaleKeyPut($realm, $key, $locale, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$key = 'key_example'; // string
$locale = 'locale_example'; // string
$body = 'body_example'; // string

try {
    $apiInstance->adminRealmsRealmLocalizationLocaleKeyPut($realm, $key, $locale, $body);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationLocaleKeyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **key** | **string**|  | |
| **locale** | **string**|  | |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmLocalizationLocalePost()`

```php
adminRealmsRealmLocalizationLocalePost($realm, $locale, $request_body)
```

Import localization from uploaded JSON file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$locale = 'locale_example'; // string
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->adminRealmsRealmLocalizationLocalePost($realm, $locale, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLocalizationLocalePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **locale** | **string**|  | |
| **request_body** | [**array<string,string>**](../Model/string.md)|  | [optional] |

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

## `adminRealmsRealmLogoutAllPost()`

```php
adminRealmsRealmLogoutAllPost($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\GlobalRequestResult
```

Removes all user sessions.

Any client that has an admin url will also be told to invalidate any sessions they have.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmLogoutAllPost($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmLogoutAllPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\GlobalRequestResult**](../Model/GlobalRequestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmPartialExportPost()`

```php
adminRealmsRealmPartialExportPost($realm, $export_clients, $export_groups_and_roles)
```

Partial export of existing realm into a JSON file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$export_clients = True; // bool
$export_groups_and_roles = True; // bool

try {
    $apiInstance->adminRealmsRealmPartialExportPost($realm, $export_clients, $export_groups_and_roles);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmPartialExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **export_clients** | **bool**|  | [optional] |
| **export_groups_and_roles** | **bool**|  | [optional] |

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

## `adminRealmsRealmPartialImportPost()`

```php
adminRealmsRealmPartialImportPost($realm, $body)
```

Partial import from a JSON file to an existing realm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->adminRealmsRealmPartialImportPost($realm, $body);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmPartialImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

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

## `adminRealmsRealmPushRevocationPost()`

```php
adminRealmsRealmPushRevocationPost($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\GlobalRequestResult
```

Push the realm's revocation policy to any client that has an admin url associated with it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmPushRevocationPost($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmPushRevocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\GlobalRequestResult**](../Model/GlobalRequestResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmPut()`

```php
adminRealmsRealmPut($realm, $realm_representation)
```

Update the top-level information of the realm Any user, roles or client information in the representation will be ignored.

This will only update top-level attributes of the realm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$realm_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation

try {
    $apiInstance->adminRealmsRealmPut($realm, $realm_representation);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **realm_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RealmRepresentation**](../Model/RealmRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmSessionsSessionDelete()`

```php
adminRealmsRealmSessionsSessionDelete($realm, $session, $is_offline)
```

Remove a specific user session.

Any client that has an admin url will also be told to invalidate this particular session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$session = 'session_example'; // string
$is_offline = false; // bool

try {
    $apiInstance->adminRealmsRealmSessionsSessionDelete($realm, $session, $is_offline);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmSessionsSessionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **session** | **string**|  | |
| **is_offline** | **bool**|  | [optional] [default to false] |

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

## `adminRealmsRealmTestSMTPConnectionPost()`

```php
adminRealmsRealmTestSMTPConnectionPost($realm, $request_body)
```

Test SMTP connection with current logged in user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->adminRealmsRealmTestSMTPConnectionPost($realm, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmTestSMTPConnectionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **request_body** | [**array<string,string>**](../Model/string.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersManagementPermissionsGet()`

```php
adminRealmsRealmUsersManagementPermissionsGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmUsersManagementPermissionsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmUsersManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

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

## `adminRealmsRealmUsersManagementPermissionsPut()`

```php
adminRealmsRealmUsersManagementPermissionsPut($realm, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\RealmsAdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmUsersManagementPermissionsPut($realm, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsAdminApi->adminRealmsRealmUsersManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
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
