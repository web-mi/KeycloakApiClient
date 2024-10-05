# WebMI\KeycloakApiClient\KeycloakApi\AuthenticationManagementApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmAuthenticationAuthenticatorProvidersGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationAuthenticatorProvidersGet) | **GET** /admin/realms/{realm}/authentication/authenticator-providers | Get authenticator providers Returns a stream of authenticator providers. |
| [**adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet) | **GET** /admin/realms/{realm}/authentication/client-authenticator-providers | Get client authenticator providers Returns a stream of client authenticator providers. |
| [**adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet) | **GET** /admin/realms/{realm}/authentication/config-description/{providerId} | Get authenticator provider&#39;s configuration description |
| [**adminRealmsRealmAuthenticationConfigIdDelete()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationConfigIdDelete) | **DELETE** /admin/realms/{realm}/authentication/config/{id} | Delete authenticator configuration |
| [**adminRealmsRealmAuthenticationConfigIdGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationConfigIdGet) | **GET** /admin/realms/{realm}/authentication/config/{id} | Get authenticator configuration |
| [**adminRealmsRealmAuthenticationConfigIdPut()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationConfigIdPut) | **PUT** /admin/realms/{realm}/authentication/config/{id} | Update authenticator configuration |
| [**adminRealmsRealmAuthenticationConfigPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationConfigPost) | **POST** /admin/realms/{realm}/authentication/config | Create new authenticator configuration |
| [**adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet) | **GET** /admin/realms/{realm}/authentication/executions/{executionId}/config/{id} | Get execution&#39;s configuration |
| [**adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost) | **POST** /admin/realms/{realm}/authentication/executions/{executionId}/config | Update execution with new configuration |
| [**adminRealmsRealmAuthenticationExecutionsExecutionIdDelete()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsExecutionIdDelete) | **DELETE** /admin/realms/{realm}/authentication/executions/{executionId} | Delete execution |
| [**adminRealmsRealmAuthenticationExecutionsExecutionIdGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsExecutionIdGet) | **GET** /admin/realms/{realm}/authentication/executions/{executionId} | Get Single Execution |
| [**adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost) | **POST** /admin/realms/{realm}/authentication/executions/{executionId}/lower-priority | Lower execution&#39;s priority |
| [**adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost) | **POST** /admin/realms/{realm}/authentication/executions/{executionId}/raise-priority | Raise execution&#39;s priority |
| [**adminRealmsRealmAuthenticationExecutionsPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationExecutionsPost) | **POST** /admin/realms/{realm}/authentication/executions | Add new authentication execution |
| [**adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost) | **POST** /admin/realms/{realm}/authentication/flows/{flowAlias}/copy | Copy existing authentication flow under a new name The new name is given as &#39;newName&#39; attribute of the passed JSON object |
| [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost) | **POST** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions/execution | Add new authentication execution to a flow |
| [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost) | **POST** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions/flow | Add new flow with new execution to existing flow |
| [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet) | **GET** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions | Get authentication executions for a flow |
| [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut) | **PUT** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions | Update authentication executions of a Flow |
| [**adminRealmsRealmAuthenticationFlowsGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsGet) | **GET** /admin/realms/{realm}/authentication/flows | Get authentication flows Returns a stream of authentication flows. |
| [**adminRealmsRealmAuthenticationFlowsIdDelete()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsIdDelete) | **DELETE** /admin/realms/{realm}/authentication/flows/{id} | Delete an authentication flow |
| [**adminRealmsRealmAuthenticationFlowsIdGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsIdGet) | **GET** /admin/realms/{realm}/authentication/flows/{id} | Get authentication flow for id |
| [**adminRealmsRealmAuthenticationFlowsIdPut()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsIdPut) | **PUT** /admin/realms/{realm}/authentication/flows/{id} | Update an authentication flow |
| [**adminRealmsRealmAuthenticationFlowsPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFlowsPost) | **POST** /admin/realms/{realm}/authentication/flows | Create a new authentication flow |
| [**adminRealmsRealmAuthenticationFormActionProvidersGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFormActionProvidersGet) | **GET** /admin/realms/{realm}/authentication/form-action-providers | Get form action providers Returns a stream of form action providers. |
| [**adminRealmsRealmAuthenticationFormProvidersGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationFormProvidersGet) | **GET** /admin/realms/{realm}/authentication/form-providers | Get form providers Returns a stream of form providers. |
| [**adminRealmsRealmAuthenticationPerClientConfigDescriptionGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationPerClientConfigDescriptionGet) | **GET** /admin/realms/{realm}/authentication/per-client-config-description | Get configuration descriptions for all clients |
| [**adminRealmsRealmAuthenticationRegisterRequiredActionPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRegisterRequiredActionPost) | **POST** /admin/realms/{realm}/authentication/register-required-action | Register a new required actions |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete) | **DELETE** /admin/realms/{realm}/authentication/required-actions/{alias}/config | Delete RequiredAction configuration |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet) | **GET** /admin/realms/{realm}/authentication/required-actions/{alias}/config-description | Get RequiredAction provider configuration description |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet) | **GET** /admin/realms/{realm}/authentication/required-actions/{alias}/config | Get RequiredAction configuration |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut) | **PUT** /admin/realms/{realm}/authentication/required-actions/{alias}/config | Update RequiredAction configuration |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasDelete()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasDelete) | **DELETE** /admin/realms/{realm}/authentication/required-actions/{alias} | Delete required action |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasGet) | **GET** /admin/realms/{realm}/authentication/required-actions/{alias} | Get required action for alias |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost) | **POST** /admin/realms/{realm}/authentication/required-actions/{alias}/lower-priority | Lower required action&#39;s priority |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasPut()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasPut) | **PUT** /admin/realms/{realm}/authentication/required-actions/{alias} | Update required action |
| [**adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost) | **POST** /admin/realms/{realm}/authentication/required-actions/{alias}/raise-priority | Raise required action&#39;s priority |
| [**adminRealmsRealmAuthenticationRequiredActionsGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationRequiredActionsGet) | **GET** /admin/realms/{realm}/authentication/required-actions | Get required actions Returns a stream of required actions. |
| [**adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet()**](AuthenticationManagementApi.md#adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet) | **GET** /admin/realms/{realm}/authentication/unregistered-required-actions | Get unregistered required actions Returns a stream of unregistered required actions. |


## `adminRealmsRealmAuthenticationAuthenticatorProvidersGet()`

```php
adminRealmsRealmAuthenticationAuthenticatorProvidersGet($realm): array<string,mixed>[]
```

Get authenticator providers Returns a stream of authenticator providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationAuthenticatorProvidersGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationAuthenticatorProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**array<string,mixed>[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet()`

```php
adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet($realm): array<string,mixed>[]
```

Get client authenticator providers Returns a stream of client authenticator providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**array<string,mixed>[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet()`

```php
adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet($realm, $provider_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigInfoRepresentation
```

Get authenticator provider's configuration description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$provider_id = 'provider_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet($realm, $provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **provider_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigInfoRepresentation**](../Model/AuthenticatorConfigInfoRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationConfigIdDelete()`

```php
adminRealmsRealmAuthenticationConfigIdDelete($realm, $id)
```

Delete authenticator configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string | Configuration id

try {
    $apiInstance->adminRealmsRealmAuthenticationConfigIdDelete($realm, $id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationConfigIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**| Configuration id | |

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

## `adminRealmsRealmAuthenticationConfigIdGet()`

```php
adminRealmsRealmAuthenticationConfigIdGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation
```

Get authenticator configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string | Configuration id

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationConfigIdGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationConfigIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**| Configuration id | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation**](../Model/AuthenticatorConfigRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationConfigIdPut()`

```php
adminRealmsRealmAuthenticationConfigIdPut($realm, $id, $authenticator_config_representation)
```

Update authenticator configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string | Configuration id
$authenticator_config_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationConfigIdPut($realm, $id, $authenticator_config_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationConfigIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**| Configuration id | |
| **authenticator_config_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation**](../Model/AuthenticatorConfigRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationConfigPost()`

```php
adminRealmsRealmAuthenticationConfigPost($realm, $authenticator_config_representation)
```

Create new authenticator configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$authenticator_config_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationConfigPost($realm, $authenticator_config_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **authenticator_config_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation**](../Model/AuthenticatorConfigRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet()`

```php
adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet($realm, $execution_id, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation
```

Get execution's configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$execution_id = 'execution_id_example'; // string | Execution id
$id = 'id_example'; // string | Configuration id

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet($realm, $execution_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **execution_id** | **string**| Execution id | |
| **id** | **string**| Configuration id | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation**](../Model/AuthenticatorConfigRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost()`

```php
adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost($realm, $execution_id, $authenticator_config_representation)
```

Update execution with new configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$execution_id = 'execution_id_example'; // string | Execution id
$authenticator_config_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost($realm, $execution_id, $authenticator_config_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **execution_id** | **string**| Execution id | |
| **authenticator_config_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticatorConfigRepresentation**](../Model/AuthenticatorConfigRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationExecutionsExecutionIdDelete()`

```php
adminRealmsRealmAuthenticationExecutionsExecutionIdDelete($realm, $execution_id)
```

Delete execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$execution_id = 'execution_id_example'; // string | Execution id

try {
    $apiInstance->adminRealmsRealmAuthenticationExecutionsExecutionIdDelete($realm, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsExecutionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **execution_id** | **string**| Execution id | |

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

## `adminRealmsRealmAuthenticationExecutionsExecutionIdGet()`

```php
adminRealmsRealmAuthenticationExecutionsExecutionIdGet($realm, $execution_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionRepresentation
```

Get Single Execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$execution_id = 'execution_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationExecutionsExecutionIdGet($realm, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsExecutionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **execution_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionRepresentation**](../Model/AuthenticationExecutionRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost()`

```php
adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost($realm, $execution_id)
```

Lower execution's priority

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$execution_id = 'execution_id_example'; // string | Execution id

try {
    $apiInstance->adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost($realm, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **execution_id** | **string**| Execution id | |

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

## `adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost()`

```php
adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost($realm, $execution_id)
```

Raise execution's priority

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$execution_id = 'execution_id_example'; // string | Execution id

try {
    $apiInstance->adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost($realm, $execution_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **execution_id** | **string**| Execution id | |

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

## `adminRealmsRealmAuthenticationExecutionsPost()`

```php
adminRealmsRealmAuthenticationExecutionsPost($realm, $authentication_execution_representation)
```

Add new authentication execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$authentication_execution_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationExecutionsPost($realm, $authentication_execution_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationExecutionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **authentication_execution_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionRepresentation**](../Model/AuthenticationExecutionRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost()`

```php
adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost($realm, $flow_alias, $request_body)
```

Copy existing authentication flow under a new name The new name is given as 'newName' attribute of the passed JSON object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$flow_alias = 'flow_alias_example'; // string | name of the existing authentication flow
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost($realm, $flow_alias, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **flow_alias** | **string**| name of the existing authentication flow | |
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

## `adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost()`

```php
adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost($realm, $flow_alias, $request_body)
```

Add new authentication execution to a flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$flow_alias = 'flow_alias_example'; // string | Alias of parent flow
$request_body = NULL; // array<string,mixed>

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost($realm, $flow_alias, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **flow_alias** | **string**| Alias of parent flow | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost()`

```php
adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost($realm, $flow_alias, $request_body)
```

Add new flow with new execution to existing flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$flow_alias = 'flow_alias_example'; // string | Alias of parent authentication flow
$request_body = NULL; // array<string,mixed>

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost($realm, $flow_alias, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **flow_alias** | **string**| Alias of parent authentication flow | |
| **request_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet()`

```php
adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet($realm, $flow_alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionInfoRepresentation[]
```

Get authentication executions for a flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$flow_alias = 'flow_alias_example'; // string | Flow alias

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet($realm, $flow_alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **flow_alias** | **string**| Flow alias | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionInfoRepresentation[]**](../Model/AuthenticationExecutionInfoRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut()`

```php
adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut($realm, $flow_alias, $authentication_execution_info_representation)
```

Update authentication executions of a Flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$flow_alias = 'flow_alias_example'; // string | Flow alias
$authentication_execution_info_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionInfoRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionInfoRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut($realm, $flow_alias, $authentication_execution_info_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **flow_alias** | **string**| Flow alias | |
| **authentication_execution_info_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationExecutionInfoRepresentation**](../Model/AuthenticationExecutionInfoRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationFlowsGet()`

```php
adminRealmsRealmAuthenticationFlowsGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation[]
```

Get authentication flows Returns a stream of authentication flows.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationFlowsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation[]**](../Model/AuthenticationFlowRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationFlowsIdDelete()`

```php
adminRealmsRealmAuthenticationFlowsIdDelete($realm, $id)
```

Delete an authentication flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string | Flow id

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsIdDelete($realm, $id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**| Flow id | |

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

## `adminRealmsRealmAuthenticationFlowsIdGet()`

```php
adminRealmsRealmAuthenticationFlowsIdGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation
```

Get authentication flow for id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string | Flow id

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationFlowsIdGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**| Flow id | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation**](../Model/AuthenticationFlowRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationFlowsIdPut()`

```php
adminRealmsRealmAuthenticationFlowsIdPut($realm, $id, $authentication_flow_representation)
```

Update an authentication flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$authentication_flow_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsIdPut($realm, $id, $authentication_flow_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **authentication_flow_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation**](../Model/AuthenticationFlowRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationFlowsPost()`

```php
adminRealmsRealmAuthenticationFlowsPost($realm, $authentication_flow_representation)
```

Create a new authentication flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$authentication_flow_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationFlowsPost($realm, $authentication_flow_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFlowsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **authentication_flow_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\AuthenticationFlowRepresentation**](../Model/AuthenticationFlowRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationFormActionProvidersGet()`

```php
adminRealmsRealmAuthenticationFormActionProvidersGet($realm): array<string,mixed>[]
```

Get form action providers Returns a stream of form action providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationFormActionProvidersGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFormActionProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**array<string,mixed>[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationFormProvidersGet()`

```php
adminRealmsRealmAuthenticationFormProvidersGet($realm): array<string,mixed>[]
```

Get form providers Returns a stream of form providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationFormProvidersGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationFormProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**array<string,mixed>[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationPerClientConfigDescriptionGet()`

```php
adminRealmsRealmAuthenticationPerClientConfigDescriptionGet($realm): array<string,\WebMI\KeycloakApiClient\KeycloakApi\Model\ConfigPropertyRepresentation[]>
```

Get configuration descriptions for all clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationPerClientConfigDescriptionGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationPerClientConfigDescriptionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

**array<string,\WebMI\KeycloakApiClient\KeycloakApi\Model\ConfigPropertyRepresentation[]>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationRegisterRequiredActionPost()`

```php
adminRealmsRealmAuthenticationRegisterRequiredActionPost($realm, $request_body)
```

Register a new required actions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->adminRealmsRealmAuthenticationRegisterRequiredActionPost($realm, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRegisterRequiredActionPost: ', $e->getMessage(), PHP_EOL;
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

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete($realm, $alias)
```

Delete RequiredAction configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete($realm, $alias);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

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

## `adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet($realm, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigInfoRepresentation
```

Get RequiredAction provider configuration description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigInfoRepresentation**](../Model/RequiredActionConfigInfoRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet($realm, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigRepresentation
```

Get RequiredAction configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigRepresentation**](../Model/RequiredActionConfigRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut($realm, $alias, $required_action_config_representation)
```

Update RequiredAction configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action
$required_action_config_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut($realm, $alias, $required_action_config_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |
| **required_action_config_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionConfigRepresentation**](../Model/RequiredActionConfigRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationRequiredActionsAliasDelete()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasDelete($realm, $alias)
```

Delete required action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasDelete($realm, $alias);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

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

## `adminRealmsRealmAuthenticationRequiredActionsAliasGet()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasGet($realm, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation
```

Get required action for alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasGet($realm, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation**](../Model/RequiredActionProviderRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost($realm, $alias)
```

Lower required action's priority

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost($realm, $alias);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

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

## `adminRealmsRealmAuthenticationRequiredActionsAliasPut()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasPut($realm, $alias, $required_action_provider_representation)
```

Update required action

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action
$required_action_provider_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation

try {
    $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasPut($realm, $alias, $required_action_provider_representation);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |
| **required_action_provider_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation**](../Model/RequiredActionProviderRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost()`

```php
adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost($realm, $alias)
```

Raise required action's priority

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$alias = 'alias_example'; // string | Alias of required action

try {
    $apiInstance->adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost($realm, $alias);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **alias** | **string**| Alias of required action | |

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

## `adminRealmsRealmAuthenticationRequiredActionsGet()`

```php
adminRealmsRealmAuthenticationRequiredActionsGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation[]
```

Get required actions Returns a stream of required actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationRequiredActionsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationRequiredActionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\RequiredActionProviderRepresentation[]**](../Model/RequiredActionProviderRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet()`

```php
adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet($realm): array<string,string>[]
```

Get unregistered required actions Returns a stream of unregistered required actions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AuthenticationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationManagementApi->adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet: ', $e->getMessage(), PHP_EOL;
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
