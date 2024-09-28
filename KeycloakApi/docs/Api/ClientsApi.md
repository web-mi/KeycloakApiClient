# WebMI\KeycloakApiClient\KeycloakApi\ClientsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientsClientUuidClientSecretGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidClientSecretGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/client-secret | Get the client secret |
| [**adminRealmsRealmClientsClientUuidClientSecretPost()**](ClientsApi.md#adminRealmsRealmClientsClientUuidClientSecretPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/client-secret | Generate a new secret for the client |
| [**adminRealmsRealmClientsClientUuidClientSecretRotatedDelete()**](ClientsApi.md#adminRealmsRealmClientsClientUuidClientSecretRotatedDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/client-secret/rotated | Invalidate the rotated secret for the client |
| [**adminRealmsRealmClientsClientUuidClientSecretRotatedGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidClientSecretRotatedGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/client-secret/rotated | Get the rotated client secret |
| [**adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete()**](ClientsApi.md#adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/default-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut()**](ClientsApi.md#adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/default-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmClientsClientUuidDefaultClientScopesGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidDefaultClientScopesGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/default-client-scopes | Get default client scopes.  Only name and ids are returned. |
| [**adminRealmsRealmClientsClientUuidDelete()**](ClientsApi.md#adminRealmsRealmClientsClientUuidDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid} | Delete the client |
| [**adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/generate-example-access-token | Create JSON with payload of example access token |
| [**adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/generate-example-id-token | Create JSON with payload of example id token |
| [**adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/generate-example-userinfo | Create JSON with payload of example user info |
| [**adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/protocol-mappers | Return list of all protocol mappers, which will be used when generating tokens issued for particular client. |
| [**adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/scope-mappings/{roleContainerId}/granted | Get effective scope mapping of all roles of particular role container, which this client is defacto allowed to have in the accessToken issued for him. |
| [**adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/scope-mappings/{roleContainerId}/not-granted | Get roles, which this client doesn&#39;t have scope for and can&#39;t have them in the accessToken issued for him. |
| [**adminRealmsRealmClientsClientUuidGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidGet) | **GET** /admin/realms/{realm}/clients/{client-uuid} | Get representation of the client |
| [**adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/installation/providers/{providerId} |  |
| [**adminRealmsRealmClientsClientUuidManagementPermissionsGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidManagementPermissionsGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmClientsClientUuidManagementPermissionsPut()**](ClientsApi.md#adminRealmsRealmClientsClientUuidManagementPermissionsPut) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference |
| [**adminRealmsRealmClientsClientUuidNodesNodeDelete()**](ClientsApi.md#adminRealmsRealmClientsClientUuidNodesNodeDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/nodes/{node} | Unregister a cluster node from the client |
| [**adminRealmsRealmClientsClientUuidNodesPost()**](ClientsApi.md#adminRealmsRealmClientsClientUuidNodesPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/nodes | Register a cluster node with the client Manually register cluster node to this client - usually it’s not needed to call this directly as adapter should handle by sending registration request to Keycloak |
| [**adminRealmsRealmClientsClientUuidOfflineSessionCountGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidOfflineSessionCountGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/offline-session-count | Get application offline session count Returns a number of offline user sessions associated with this client { \&quot;count\&quot;: number } |
| [**adminRealmsRealmClientsClientUuidOfflineSessionsGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidOfflineSessionsGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/offline-sessions | Get offline sessions for client Returns a list of offline user sessions associated with this client |
| [**adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete()**](ClientsApi.md#adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/optional-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut()**](ClientsApi.md#adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/optional-client-scopes/{clientScopeId} |  |
| [**adminRealmsRealmClientsClientUuidOptionalClientScopesGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidOptionalClientScopesGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/optional-client-scopes | Get optional client scopes.  Only name and ids are returned. |
| [**adminRealmsRealmClientsClientUuidPushRevocationPost()**](ClientsApi.md#adminRealmsRealmClientsClientUuidPushRevocationPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/push-revocation | Push the client&#39;s revocation policy to its admin URL If the client has an admin URL, push revocation policy to it. |
| [**adminRealmsRealmClientsClientUuidPut()**](ClientsApi.md#adminRealmsRealmClientsClientUuidPut) | **PUT** /admin/realms/{realm}/clients/{client-uuid} | Update the client |
| [**adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost()**](ClientsApi.md#adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/registration-access-token | Generate a new registration access token for the client |
| [**adminRealmsRealmClientsClientUuidServiceAccountUserGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidServiceAccountUserGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/service-account-user | Get a user dedicated to the service account |
| [**adminRealmsRealmClientsClientUuidSessionCountGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidSessionCountGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/session-count | Get application session count Returns a number of user sessions associated with this client { \&quot;count\&quot;: number } |
| [**adminRealmsRealmClientsClientUuidTestNodesAvailableGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidTestNodesAvailableGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/test-nodes-available | Test if registered cluster nodes are available Tests availability by sending &#39;ping&#39; request to all cluster nodes. |
| [**adminRealmsRealmClientsClientUuidUserSessionsGet()**](ClientsApi.md#adminRealmsRealmClientsClientUuidUserSessionsGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/user-sessions | Get user sessions for client Returns a list of user sessions associated with this client |
| [**adminRealmsRealmClientsGet()**](ClientsApi.md#adminRealmsRealmClientsGet) | **GET** /admin/realms/{realm}/clients | Get clients belonging to the realm. |
| [**adminRealmsRealmClientsPost()**](ClientsApi.md#adminRealmsRealmClientsPost) | **POST** /admin/realms/{realm}/clients | Create a new client Client’s client_id must be unique! |


## `adminRealmsRealmClientsClientUuidClientSecretGet()`

```php
adminRealmsRealmClientsClientUuidClientSecretGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation
```

Get the client secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidClientSecretGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidClientSecretGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation**](../Model/CredentialRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidClientSecretPost()`

```php
adminRealmsRealmClientsClientUuidClientSecretPost($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation
```

Generate a new secret for the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidClientSecretPost($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidClientSecretPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation**](../Model/CredentialRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidClientSecretRotatedDelete()`

```php
adminRealmsRealmClientsClientUuidClientSecretRotatedDelete($realm, $client_uuid)
```

Invalidate the rotated secret for the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $apiInstance->adminRealmsRealmClientsClientUuidClientSecretRotatedDelete($realm, $client_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidClientSecretRotatedDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidClientSecretRotatedGet()`

```php
adminRealmsRealmClientsClientUuidClientSecretRotatedGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation
```

Get the rotated client secret

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidClientSecretRotatedGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidClientSecretRotatedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation**](../Model/CredentialRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete()`

```php
adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete($realm, $client_uuid, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete($realm, $client_uuid, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
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

## `adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut()`

```php
adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut($realm, $client_uuid, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut($realm, $client_uuid, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
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

## `adminRealmsRealmClientsClientUuidDefaultClientScopesGet()`

```php
adminRealmsRealmClientsClientUuidDefaultClientScopesGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]
```

Get default client scopes.  Only name and ids are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidDefaultClientScopesGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidDefaultClientScopesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidDelete()`

```php
adminRealmsRealmClientsClientUuidDelete($realm, $client_uuid)
```

Delete the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $apiInstance->adminRealmsRealmClientsClientUuidDelete($realm, $client_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet()`

```php
adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet($realm, $client_uuid, $scope, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\AccessToken
```

Create JSON with payload of example access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$scope = 'scope_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet($realm, $client_uuid, $scope, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **scope** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet()`

```php
adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet($realm, $client_uuid, $scope, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\IDToken
```

Create JSON with payload of example id token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$scope = 'scope_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet($realm, $client_uuid, $scope, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **scope** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IDToken**](../Model/IDToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet()`

```php
adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet($realm, $client_uuid, $scope, $user_id): array<string,mixed>
```

Create JSON with payload of example user info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$scope = 'scope_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet($realm, $client_uuid, $scope, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **scope** | **string**|  | [optional] |
| **user_id** | **string**|  | [optional] |

### Return type

**array<string,mixed>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet()`

```php
adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet($realm, $client_uuid, $scope): \WebMI\KeycloakApiClient\KeycloakApi\Model\ProtocolMapperEvaluationRepresentation[]
```

Return list of all protocol mappers, which will be used when generating tokens issued for particular client.

This means protocol mappers assigned to this client directly and protocol mappers assigned to all client scopes of this client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$scope = 'scope_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet($realm, $client_uuid, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **scope** | **string**|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ProtocolMapperEvaluationRepresentation[]**](../Model/ProtocolMapperEvaluationRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet()`

```php
adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet($realm, $client_uuid, $role_container_id, $scope): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get effective scope mapping of all roles of particular role container, which this client is defacto allowed to have in the accessToken issued for him.

This contains scope mappings, which this client has directly, as well as scope mappings, which are granted to all client scopes, which are linked with this client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_container_id = 'role_container_id_example'; // string | either realm name OR client UUID
$scope = 'scope_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet($realm, $client_uuid, $role_container_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_container_id** | **string**| either realm name OR client UUID | |
| **scope** | **string**|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet()`

```php
adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet($realm, $client_uuid, $role_container_id, $scope): \WebMI\KeycloakApiClient\KeycloakApi\Model\RoleRepresentation[]
```

Get roles, which this client doesn't have scope for and can't have them in the accessToken issued for him.

Defacto all the other roles of particular role container, which are not in {@link #getGrantedScopeMappings()}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$role_container_id = 'role_container_id_example'; // string | either realm name OR client UUID
$scope = 'scope_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet($realm, $client_uuid, $role_container_id, $scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **role_container_id** | **string**| either realm name OR client UUID | |
| **scope** | **string**|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidGet()`

```php
adminRealmsRealmClientsClientUuidGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation
```

Get representation of the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation**](../Model/ClientRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet()`

```php
adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet($realm, $client_uuid, $provider_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$provider_id = 'provider_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet($realm, $client_uuid, $provider_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **provider_id** | **string**|  | |

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

## `adminRealmsRealmClientsClientUuidManagementPermissionsGet()`

```php
adminRealmsRealmClientsClientUuidManagementPermissionsGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether client Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidManagementPermissionsGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidManagementPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidManagementPermissionsPut()`

```php
adminRealmsRealmClientsClientUuidManagementPermissionsPut($realm, $client_uuid, $management_permission_reference): \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference
```

Return object stating whether client Authorization permissions have been initialized or not and a reference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$management_permission_reference = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ManagementPermissionReference

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidManagementPermissionsPut($realm, $client_uuid, $management_permission_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidManagementPermissionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
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

## `adminRealmsRealmClientsClientUuidNodesNodeDelete()`

```php
adminRealmsRealmClientsClientUuidNodesNodeDelete($realm, $client_uuid, $node)
```

Unregister a cluster node from the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$node = 'node_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsClientUuidNodesNodeDelete($realm, $client_uuid, $node);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidNodesNodeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **node** | **string**|  | |

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

## `adminRealmsRealmClientsClientUuidNodesPost()`

```php
adminRealmsRealmClientsClientUuidNodesPost($realm, $client_uuid, $request_body)
```

Register a cluster node with the client Manually register cluster node to this client - usually it’s not needed to call this directly as adapter should handle by sending registration request to Keycloak

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->adminRealmsRealmClientsClientUuidNodesPost($realm, $client_uuid, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidNodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
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

## `adminRealmsRealmClientsClientUuidOfflineSessionCountGet()`

```php
adminRealmsRealmClientsClientUuidOfflineSessionCountGet($realm, $client_uuid): array<string,int>
```

Get application offline session count Returns a number of offline user sessions associated with this client { \"count\": number }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidOfflineSessionCountGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidOfflineSessionCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidOfflineSessionsGet()`

```php
adminRealmsRealmClientsClientUuidOfflineSessionsGet($realm, $client_uuid, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserSessionRepresentation[]
```

Get offline sessions for client Returns a list of offline user sessions associated with this client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$first = 56; // int | Paging offset
$max = 56; // int | Maximum results size (defaults to 100)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidOfflineSessionsGet($realm, $client_uuid, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidOfflineSessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **first** | **int**| Paging offset | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserSessionRepresentation[]**](../Model/UserSessionRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete()`

```php
adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete($realm, $client_uuid, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete($realm, $client_uuid, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
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

## `adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut()`

```php
adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut($realm, $client_uuid, $client_scope_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client_scope_id = 'client_scope_id_example'; // string

try {
    $apiInstance->adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut($realm, $client_uuid, $client_scope_id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
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

## `adminRealmsRealmClientsClientUuidOptionalClientScopesGet()`

```php
adminRealmsRealmClientsClientUuidOptionalClientScopesGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientScopeRepresentation[]
```

Get optional client scopes.  Only name and ids are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidOptionalClientScopesGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidOptionalClientScopesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidPushRevocationPost()`

```php
adminRealmsRealmClientsClientUuidPushRevocationPost($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\GlobalRequestResult
```

Push the client's revocation policy to its admin URL If the client has an admin URL, push revocation policy to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidPushRevocationPost($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidPushRevocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidPut()`

```php
adminRealmsRealmClientsClientUuidPut($realm, $client_uuid, $client_representation)
```

Update the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$client_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation

try {
    $apiInstance->adminRealmsRealmClientsClientUuidPut($realm, $client_uuid, $client_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **client_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation**](../Model/ClientRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost()`

```php
adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation
```

Generate a new registration access token for the client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation**](../Model/ClientRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidServiceAccountUserGet()`

```php
adminRealmsRealmClientsClientUuidServiceAccountUserGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation
```

Get a user dedicated to the service account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidServiceAccountUserGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidServiceAccountUserGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation**](../Model/UserRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidSessionCountGet()`

```php
adminRealmsRealmClientsClientUuidSessionCountGet($realm, $client_uuid): array<string,int>
```

Get application session count Returns a number of user sessions associated with this client { \"count\": number }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidSessionCountGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidSessionCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidTestNodesAvailableGet()`

```php
adminRealmsRealmClientsClientUuidTestNodesAvailableGet($realm, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\GlobalRequestResult
```

Test if registered cluster nodes are available Tests availability by sending 'ping' request to all cluster nodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidTestNodesAvailableGet($realm, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidTestNodesAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |

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

## `adminRealmsRealmClientsClientUuidUserSessionsGet()`

```php
adminRealmsRealmClientsClientUuidUserSessionsGet($realm, $client_uuid, $first, $max): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserSessionRepresentation[]
```

Get user sessions for client Returns a list of user sessions associated with this client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$first = 56; // int | Paging offset
$max = 56; // int | Maximum results size (defaults to 100)

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidUserSessionsGet($realm, $client_uuid, $first, $max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsClientUuidUserSessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **first** | **int**| Paging offset | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserSessionRepresentation[]**](../Model/UserSessionRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsGet()`

```php
adminRealmsRealmClientsGet($realm, $client_id, $first, $max, $q, $search, $viewable_only): \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation[]
```

Get clients belonging to the realm.

If a client can’t be retrieved from the storage due to a problem with the underlying storage, it is silently removed from the returned list. This ensures that concurrent modifications to the list don’t prevent callers from retrieving this list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_id = 'client_id_example'; // string | filter by clientId
$first = 56; // int | the first result
$max = 56; // int | the max results to return
$q = 'q_example'; // string
$search = false; // bool | whether this is a search query or a getClientById query
$viewable_only = false; // bool | filter clients that cannot be viewed in full by admin

try {
    $result = $apiInstance->adminRealmsRealmClientsGet($realm, $client_id, $first, $max, $q, $search, $viewable_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_id** | **string**| filter by clientId | [optional] |
| **first** | **int**| the first result | [optional] |
| **max** | **int**| the max results to return | [optional] |
| **q** | **string**|  | [optional] |
| **search** | **bool**| whether this is a search query or a getClientById query | [optional] [default to false] |
| **viewable_only** | **bool**| filter clients that cannot be viewed in full by admin | [optional] [default to false] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation[]**](../Model/ClientRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsPost()`

```php
adminRealmsRealmClientsPost($realm, $client_representation)
```

Create a new client Client’s client_id must be unique!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation

try {
    $apiInstance->adminRealmsRealmClientsPost($realm, $client_representation);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->adminRealmsRealmClientsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\ClientRepresentation**](../Model/ClientRepresentation.md)|  | [optional] |

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
