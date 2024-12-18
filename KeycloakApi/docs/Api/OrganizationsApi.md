# WebMI\KeycloakApiClient\KeycloakApi\OrganizationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmOrganizationsGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsGet) | **GET** /admin/realms/{realm}/organizations | Returns a paginated list of organizations filtered according to the specified parameters |
| [**adminRealmsRealmOrganizationsIdDelete()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdDelete) | **DELETE** /admin/realms/{realm}/organizations/{id} | Deletes the organization |
| [**adminRealmsRealmOrganizationsIdGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdGet) | **GET** /admin/realms/{realm}/organizations/{id} | Returns the organization representation |
| [**adminRealmsRealmOrganizationsIdIdentityProvidersAliasDelete()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdIdentityProvidersAliasDelete) | **DELETE** /admin/realms/{realm}/organizations/{id}/identity-providers/{alias} | Removes the identity provider with the specified alias from the organization |
| [**adminRealmsRealmOrganizationsIdIdentityProvidersAliasGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdIdentityProvidersAliasGet) | **GET** /admin/realms/{realm}/organizations/{id}/identity-providers/{alias} | Returns the identity provider associated with the organization that has the specified alias |
| [**adminRealmsRealmOrganizationsIdIdentityProvidersGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdIdentityProvidersGet) | **GET** /admin/realms/{realm}/organizations/{id}/identity-providers | Returns all identity providers associated with the organization |
| [**adminRealmsRealmOrganizationsIdIdentityProvidersPost()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdIdentityProvidersPost) | **POST** /admin/realms/{realm}/organizations/{id}/identity-providers | Adds the identity provider with the specified id to the organization |
| [**adminRealmsRealmOrganizationsIdMembersCountGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersCountGet) | **GET** /admin/realms/{realm}/organizations/{id}/members/count | Returns number of members in the organization. |
| [**adminRealmsRealmOrganizationsIdMembersGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersGet) | **GET** /admin/realms/{realm}/organizations/{id}/members | Returns a paginated list of organization members filtered according to the specified parameters |
| [**adminRealmsRealmOrganizationsIdMembersIdDelete()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersIdDelete) | **DELETE** /admin/realms/{realm}/organizations/{id}/members/{id} | Removes the user with the specified id from the organization |
| [**adminRealmsRealmOrganizationsIdMembersIdGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersIdGet) | **GET** /admin/realms/{realm}/organizations/{id}/members/{id} | Returns the member of the organization with the specified id |
| [**adminRealmsRealmOrganizationsIdMembersIdOrganizationsGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersIdOrganizationsGet) | **GET** /admin/realms/{realm}/organizations/{id}/members/{id}/organizations | Returns the organizations associated with the user that has the specified id |
| [**adminRealmsRealmOrganizationsIdMembersInviteExistingUserPost()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersInviteExistingUserPost) | **POST** /admin/realms/{realm}/organizations/{id}/members/invite-existing-user | Invites an existing user to the organization, using the specified user id |
| [**adminRealmsRealmOrganizationsIdMembersInviteUserPost()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersInviteUserPost) | **POST** /admin/realms/{realm}/organizations/{id}/members/invite-user | Invites an existing user or sends a registration link to a new user, based on the provided e-mail address. |
| [**adminRealmsRealmOrganizationsIdMembersPost()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdMembersPost) | **POST** /admin/realms/{realm}/organizations/{id}/members | Adds the user with the specified id as a member of the organization |
| [**adminRealmsRealmOrganizationsIdPut()**](OrganizationsApi.md#adminRealmsRealmOrganizationsIdPut) | **PUT** /admin/realms/{realm}/organizations/{id} | Updates the organization |
| [**adminRealmsRealmOrganizationsMembersIdOrganizationsGet()**](OrganizationsApi.md#adminRealmsRealmOrganizationsMembersIdOrganizationsGet) | **GET** /admin/realms/{realm}/organizations/members/{id}/organizations | Returns the organizations associated with the user that has the specified id |
| [**adminRealmsRealmOrganizationsPost()**](OrganizationsApi.md#adminRealmsRealmOrganizationsPost) | **POST** /admin/realms/{realm}/organizations | Creates a new organization |


## `adminRealmsRealmOrganizationsGet()`

```php
adminRealmsRealmOrganizationsGet($realm, $brief_representation, $exact, $first, $max, $q, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation[]
```

Returns a paginated list of organizations filtered according to the specified parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$brief_representation = false; // bool | if true, return the full representation. Otherwise, only the basic fields are returned.
$exact = True; // bool | Boolean which defines whether the param 'search' must match exactly or not
$first = 56; // int | The position of the first result to be processed (pagination offset)
$max = 56; // int | The maximum number of results to be returned - defaults to 10
$q = 'q_example'; // string | A query to search for custom attributes, in the format 'key1:value2 key2:value2'
$search = 'search_example'; // string | A String representing either an organization name or domain

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsGet($realm, $brief_representation, $exact, $first, $max, $q, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **brief_representation** | **bool**| if true, return the full representation. Otherwise, only the basic fields are returned. | [optional] [default to false] |
| **exact** | **bool**| Boolean which defines whether the param &#39;search&#39; must match exactly or not | [optional] |
| **first** | **int**| The position of the first result to be processed (pagination offset) | [optional] |
| **max** | **int**| The maximum number of results to be returned - defaults to 10 | [optional] |
| **q** | **string**| A query to search for custom attributes, in the format &#39;key1:value2 key2:value2&#39; | [optional] |
| **search** | **string**| A String representing either an organization name or domain | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation[]**](../Model/OrganizationRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdDelete()`

```php
adminRealmsRealmOrganizationsIdDelete($realm, $id)
```

Deletes the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdDelete($realm, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdDelete: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdGet()`

```php
adminRealmsRealmOrganizationsIdGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation
```

Returns the organization representation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation**](../Model/OrganizationRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdIdentityProvidersAliasDelete()`

```php
adminRealmsRealmOrganizationsIdIdentityProvidersAliasDelete($realm, $id, $alias)
```

Removes the identity provider with the specified alias from the organization

Breaks the association between the identity provider and the organization. The provider itself is not deleted. If no provider is found, or if it is not currently associated with the org, an error response is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$alias = 'alias_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdIdentityProvidersAliasDelete($realm, $id, $alias);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdIdentityProvidersAliasDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **alias** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdIdentityProvidersAliasGet()`

```php
adminRealmsRealmOrganizationsIdIdentityProvidersAliasGet($realm, $id, $alias): \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation
```

Returns the identity provider associated with the organization that has the specified alias

Searches for an identity provider with the given alias. If one is found and is associated with the organization, it is returned. Otherwise, an error response with status NOT_FOUND is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$alias = 'alias_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdIdentityProvidersAliasGet($realm, $id, $alias);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdIdentityProvidersAliasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **alias** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation**](../Model/IdentityProviderRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdIdentityProvidersGet()`

```php
adminRealmsRealmOrganizationsIdIdentityProvidersGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation[]
```

Returns all identity providers associated with the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdIdentityProvidersGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdIdentityProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\IdentityProviderRepresentation[]**](../Model/IdentityProviderRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdIdentityProvidersPost()`

```php
adminRealmsRealmOrganizationsIdIdentityProvidersPost($realm, $id, $body)
```

Adds the identity provider with the specified id to the organization

Adds, or associates, an existing identity provider with the organization. If no identity provider is found, or if it is already associated with the organization, an error response is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$body = 'body_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdIdentityProvidersPost($realm, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdIdentityProvidersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersCountGet()`

```php
adminRealmsRealmOrganizationsIdMembersCountGet($realm, $id): int
```

Returns number of members in the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdMembersCountGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

**int**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersGet()`

```php
adminRealmsRealmOrganizationsIdMembersGet($realm, $id, $exact, $first, $max, $membership_type, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\MemberRepresentation[]
```

Returns a paginated list of organization members filtered according to the specified parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$exact = True; // bool | Boolean which defines whether the param 'search' must match exactly or not
$first = 56; // int | The position of the first result to be processed (pagination offset)
$max = 56; // int | The maximum number of results to be returned. Defaults to 10
$membership_type = 'membership_type_example'; // string | The membership type
$search = 'search_example'; // string | A String representing either a member's username, e-mail, first name, or last name.

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdMembersGet($realm, $id, $exact, $first, $max, $membership_type, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **exact** | **bool**| Boolean which defines whether the param &#39;search&#39; must match exactly or not | [optional] |
| **first** | **int**| The position of the first result to be processed (pagination offset) | [optional] |
| **max** | **int**| The maximum number of results to be returned. Defaults to 10 | [optional] |
| **membership_type** | **string**| The membership type | [optional] |
| **search** | **string**| A String representing either a member&#39;s username, e-mail, first name, or last name. | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\MemberRepresentation[]**](../Model/MemberRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersIdDelete()`

```php
adminRealmsRealmOrganizationsIdMembersIdDelete($realm, $id)
```

Removes the user with the specified id from the organization

Breaks the association between the user and organization. The user itself is deleted in case the membership is managed, otherwise the user is not deleted. If no user is found, or if they are not a member of the organization, an error response is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdMembersIdDelete($realm, $id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersIdDelete: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersIdGet()`

```php
adminRealmsRealmOrganizationsIdMembersIdGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\MemberRepresentation
```

Returns the member of the organization with the specified id

Searches for auser with the given id. If one is found, and is currently a member of the organization, returns it. Otherwise,an error response with status NOT_FOUND is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdMembersIdGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\MemberRepresentation**](../Model/MemberRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersIdOrganizationsGet()`

```php
adminRealmsRealmOrganizationsIdMembersIdOrganizationsGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation[]
```

Returns the organizations associated with the user that has the specified id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsIdMembersIdOrganizationsGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersIdOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation[]**](../Model/OrganizationRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersInviteExistingUserPost()`

```php
adminRealmsRealmOrganizationsIdMembersInviteExistingUserPost($realm, $id, $id2)
```

Invites an existing user to the organization, using the specified user id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$id2 = 'id_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdMembersInviteExistingUserPost($realm, $id, $id2);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersInviteExistingUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **id2** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersInviteUserPost()`

```php
adminRealmsRealmOrganizationsIdMembersInviteUserPost($realm, $id, $email, $first_name, $last_name)
```

Invites an existing user or sends a registration link to a new user, based on the provided e-mail address.

If the user with the given e-mail address exists, it sends an invitation link, otherwise it sends a registration link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$email = 'email_example'; // string
$first_name = 'first_name_example'; // string
$last_name = 'last_name_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdMembersInviteUserPost($realm, $id, $email, $first_name, $last_name);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersInviteUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **email** | **string**|  | [optional] |
| **first_name** | **string**|  | [optional] |
| **last_name** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdMembersPost()`

```php
adminRealmsRealmOrganizationsIdMembersPost($realm, $id, $body)
```

Adds the user with the specified id as a member of the organization

Adds, or associates, an existing user with the organization. If no user is found, or if it is already associated with the organization, an error response is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$body = 'body_example'; // string

try {
    $apiInstance->adminRealmsRealmOrganizationsIdMembersPost($realm, $id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdMembersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsIdPut()`

```php
adminRealmsRealmOrganizationsIdPut($realm, $id, $organization_representation)
```

Updates the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string
$organization_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation

try {
    $apiInstance->adminRealmsRealmOrganizationsIdPut($realm, $id, $organization_representation);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |
| **organization_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation**](../Model/OrganizationRepresentation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsMembersIdOrganizationsGet()`

```php
adminRealmsRealmOrganizationsMembersIdOrganizationsGet($realm, $id): \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation[]
```

Returns the organizations associated with the user that has the specified id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$id = 'id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmOrganizationsMembersIdOrganizationsGet($realm, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsMembersIdOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation[]**](../Model/OrganizationRepresentation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmOrganizationsPost()`

```php
adminRealmsRealmOrganizationsPost($realm, $organization_representation)
```

Creates a new organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = WebMI\KeycloakApiClient\KeycloakApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | realm name (not id!)
$organization_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation

try {
    $apiInstance->adminRealmsRealmOrganizationsPost($realm, $organization_representation);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->adminRealmsRealmOrganizationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **organization_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\OrganizationRepresentation**](../Model/OrganizationRepresentation.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
