# WebMI\KeycloakApiClient\KeycloakApi\UsersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmUsersCountGet()**](UsersApi.md#adminRealmsRealmUsersCountGet) | **GET** /admin/realms/{realm}/users/count | Returns the number of users that match the given criteria. |
| [**adminRealmsRealmUsersGet()**](UsersApi.md#adminRealmsRealmUsersGet) | **GET** /admin/realms/{realm}/users | Get users Returns a stream of users, filtered according to query parameters. |
| [**adminRealmsRealmUsersPost()**](UsersApi.md#adminRealmsRealmUsersPost) | **POST** /admin/realms/{realm}/users | Create a new user Username must be unique. |
| [**adminRealmsRealmUsersProfileGet()**](UsersApi.md#adminRealmsRealmUsersProfileGet) | **GET** /admin/realms/{realm}/users/profile |  |
| [**adminRealmsRealmUsersProfileMetadataGet()**](UsersApi.md#adminRealmsRealmUsersProfileMetadataGet) | **GET** /admin/realms/{realm}/users/profile/metadata |  |
| [**adminRealmsRealmUsersProfilePut()**](UsersApi.md#adminRealmsRealmUsersProfilePut) | **PUT** /admin/realms/{realm}/users/profile |  |
| [**adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet()**](UsersApi.md#adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet) | **GET** /admin/realms/{realm}/users/{user-id}/configured-user-storage-credential-types | Return credential types, which are provided by the user storage where user is stored. |
| [**adminRealmsRealmUsersUserIdConsentsClientDelete()**](UsersApi.md#adminRealmsRealmUsersUserIdConsentsClientDelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/consents/{client} | Revoke consent and offline tokens for particular client from user |
| [**adminRealmsRealmUsersUserIdConsentsGet()**](UsersApi.md#adminRealmsRealmUsersUserIdConsentsGet) | **GET** /admin/realms/{realm}/users/{user-id}/consents | Get consents granted by the user |
| [**adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete()**](UsersApi.md#adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId} | Remove a credential for a user |
| [**adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost()**](UsersApi.md#adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost) | **POST** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId}/moveAfter/{newPreviousCredentialId} | Move a credential to a position behind another credential |
| [**adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost()**](UsersApi.md#adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost) | **POST** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId}/moveToFirst | Move a credential to a first position in the credentials list of the user |
| [**adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut()**](UsersApi.md#adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut) | **PUT** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId}/userLabel | Update a credential label for a user |
| [**adminRealmsRealmUsersUserIdCredentialsGet()**](UsersApi.md#adminRealmsRealmUsersUserIdCredentialsGet) | **GET** /admin/realms/{realm}/users/{user-id}/credentials |  |
| [**adminRealmsRealmUsersUserIdDelete()**](UsersApi.md#adminRealmsRealmUsersUserIdDelete) | **DELETE** /admin/realms/{realm}/users/{user-id} | Delete the user |
| [**adminRealmsRealmUsersUserIdDisableCredentialTypesPut()**](UsersApi.md#adminRealmsRealmUsersUserIdDisableCredentialTypesPut) | **PUT** /admin/realms/{realm}/users/{user-id}/disable-credential-types | Disable all credentials for a user of a specific type |
| [**adminRealmsRealmUsersUserIdExecuteActionsEmailPut()**](UsersApi.md#adminRealmsRealmUsersUserIdExecuteActionsEmailPut) | **PUT** /admin/realms/{realm}/users/{user-id}/execute-actions-email | Send an email to the user with a link they can click to execute particular actions. |
| [**adminRealmsRealmUsersUserIdFederatedIdentityGet()**](UsersApi.md#adminRealmsRealmUsersUserIdFederatedIdentityGet) | **GET** /admin/realms/{realm}/users/{user-id}/federated-identity | Get social logins associated with the user |
| [**adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete()**](UsersApi.md#adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/federated-identity/{provider} | Remove a social login provider from user |
| [**adminRealmsRealmUsersUserIdFederatedIdentityProviderPost()**](UsersApi.md#adminRealmsRealmUsersUserIdFederatedIdentityProviderPost) | **POST** /admin/realms/{realm}/users/{user-id}/federated-identity/{provider} | Add a social login provider to the user |
| [**adminRealmsRealmUsersUserIdGet()**](UsersApi.md#adminRealmsRealmUsersUserIdGet) | **GET** /admin/realms/{realm}/users/{user-id} | Get representation of the user |
| [**adminRealmsRealmUsersUserIdGroupsCountGet()**](UsersApi.md#adminRealmsRealmUsersUserIdGroupsCountGet) | **GET** /admin/realms/{realm}/users/{user-id}/groups/count |  |
| [**adminRealmsRealmUsersUserIdGroupsGet()**](UsersApi.md#adminRealmsRealmUsersUserIdGroupsGet) | **GET** /admin/realms/{realm}/users/{user-id}/groups |  |
| [**adminRealmsRealmUsersUserIdGroupsGroupIdDelete()**](UsersApi.md#adminRealmsRealmUsersUserIdGroupsGroupIdDelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/groups/{groupId} |  |
| [**adminRealmsRealmUsersUserIdGroupsGroupIdPut()**](UsersApi.md#adminRealmsRealmUsersUserIdGroupsGroupIdPut) | **PUT** /admin/realms/{realm}/users/{user-id}/groups/{groupId} |  |
| [**adminRealmsRealmUsersUserIdImpersonationPost()**](UsersApi.md#adminRealmsRealmUsersUserIdImpersonationPost) | **POST** /admin/realms/{realm}/users/{user-id}/impersonation | Impersonate the user |
| [**adminRealmsRealmUsersUserIdLogoutPost()**](UsersApi.md#adminRealmsRealmUsersUserIdLogoutPost) | **POST** /admin/realms/{realm}/users/{user-id}/logout | Remove all user sessions associated with the user Also send notification to all clients that have an admin URL to invalidate the sessions for the particular user. |
| [**adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet()**](UsersApi.md#adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet) | **GET** /admin/realms/{realm}/users/{user-id}/offline-sessions/{clientUuid} | Get offline sessions associated with the user and client |
| [**adminRealmsRealmUsersUserIdPut()**](UsersApi.md#adminRealmsRealmUsersUserIdPut) | **PUT** /admin/realms/{realm}/users/{user-id} | Update the user |
| [**adminRealmsRealmUsersUserIdResetPasswordEmailPut()**](UsersApi.md#adminRealmsRealmUsersUserIdResetPasswordEmailPut) | **PUT** /admin/realms/{realm}/users/{user-id}/reset-password-email | Send an email to the user with a link they can click to reset their password. |
| [**adminRealmsRealmUsersUserIdResetPasswordPut()**](UsersApi.md#adminRealmsRealmUsersUserIdResetPasswordPut) | **PUT** /admin/realms/{realm}/users/{user-id}/reset-password | Set up a new password for the user. |
| [**adminRealmsRealmUsersUserIdSendVerifyEmailPut()**](UsersApi.md#adminRealmsRealmUsersUserIdSendVerifyEmailPut) | **PUT** /admin/realms/{realm}/users/{user-id}/send-verify-email | Send an email-verification email to the user An email contains a link the user can click to verify their email address. |
| [**adminRealmsRealmUsersUserIdSessionsGet()**](UsersApi.md#adminRealmsRealmUsersUserIdSessionsGet) | **GET** /admin/realms/{realm}/users/{user-id}/sessions | Get sessions associated with the user |
| [**adminRealmsRealmUsersUserIdUnmanagedAttributesGet()**](UsersApi.md#adminRealmsRealmUsersUserIdUnmanagedAttributesGet) | **GET** /admin/realms/{realm}/users/{user-id}/unmanagedAttributes |  |


## `adminRealmsRealmUsersCountGet()`

```php
adminRealmsRealmUsersCountGet($realm, $email, $email_verified, $enabled, $first_name, $last_name, $q, $search, $username): int
```

Returns the number of users that match the given criteria.

It can be called in three different ways. 1. Don’t specify any criteria and pass {@code null}. The number of all users within that realm will be returned. <p> 2. If {@code search} is specified other criteria such as {@code last} will be ignored even though you set them. The {@code search} string will be matched against the first and last name, the username and the email of a user. <p> 3. If {@code search} is unspecified but any of {@code last}, {@code first}, {@code email} or {@code username} those criteria are matched against their respective fields on a user entity. Combined with a logical and.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$email = 'email_example'; // string | email filter
$email_verified = True; // bool
$enabled = True; // bool | Boolean representing if user is enabled or not
$first_name = 'first_name_example'; // string | first name filter
$last_name = 'last_name_example'; // string | last name filter
$q = 'q_example'; // string
$search = 'search_example'; // string | arbitrary search string for all the fields below. Default search behavior is prefix-based (e.g., foo or foo*). Use *foo* for infix search and \"foo\" for exact search.
$username = 'username_example'; // string | username filter

try {
    $result = $apiInstance->adminRealmsRealmUsersCountGet($realm, $email, $email_verified, $enabled, $first_name, $last_name, $q, $search, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **email** | **string**| email filter | [optional] |
| **email_verified** | **bool**|  | [optional] |
| **enabled** | **bool**| Boolean representing if user is enabled or not | [optional] |
| **first_name** | **string**| first name filter | [optional] |
| **last_name** | **string**| last name filter | [optional] |
| **q** | **string**|  | [optional] |
| **search** | **string**| arbitrary search string for all the fields below. Default search behavior is prefix-based (e.g., foo or foo*). Use *foo* for infix search and \&quot;foo\&quot; for exact search. | [optional] |
| **username** | **string**| username filter | [optional] |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersGet()`

```php
adminRealmsRealmUsersGet($realm, $brief_representation, $email, $email_verified, $enabled, $exact, $first, $first_name, $idp_alias, $idp_user_id, $last_name, $max, $q, $search, $username): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation[]
```

Get users Returns a stream of users, filtered according to query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$brief_representation = True; // bool | Boolean which defines whether brief representations are returned (default: false)
$email = 'email_example'; // string | A String contained in email, or the complete email, if param \"exact\" is true
$email_verified = True; // bool | whether the email has been verified
$enabled = True; // bool | Boolean representing if user is enabled or not
$exact = True; // bool | Boolean which defines whether the params \"last\", \"first\", \"email\" and \"username\" must match exactly
$first = 56; // int | Pagination offset
$first_name = 'first_name_example'; // string | A String contained in firstName, or the complete firstName, if param \"exact\" is true
$idp_alias = 'idp_alias_example'; // string | The alias of an Identity Provider linked to the user
$idp_user_id = 'idp_user_id_example'; // string | The userId at an Identity Provider linked to the user
$last_name = 'last_name_example'; // string | A String contained in lastName, or the complete lastName, if param \"exact\" is true
$max = 56; // int | Maximum results size (defaults to 100)
$q = 'q_example'; // string | A query to search for custom attributes, in the format 'key1:value2 key2:value2'
$search = 'search_example'; // string | A String contained in username, first or last name, or email. Default search behavior is prefix-based (e.g., foo or foo*). Use *foo* for infix search and \"foo\" for exact search.
$username = 'username_example'; // string | A String contained in username, or the complete username, if param \"exact\" is true

try {
    $result = $apiInstance->adminRealmsRealmUsersGet($realm, $brief_representation, $email, $email_verified, $enabled, $exact, $first, $first_name, $idp_alias, $idp_user_id, $last_name, $max, $q, $search, $username);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **brief_representation** | **bool**| Boolean which defines whether brief representations are returned (default: false) | [optional] |
| **email** | **string**| A String contained in email, or the complete email, if param \&quot;exact\&quot; is true | [optional] |
| **email_verified** | **bool**| whether the email has been verified | [optional] |
| **enabled** | **bool**| Boolean representing if user is enabled or not | [optional] |
| **exact** | **bool**| Boolean which defines whether the params \&quot;last\&quot;, \&quot;first\&quot;, \&quot;email\&quot; and \&quot;username\&quot; must match exactly | [optional] |
| **first** | **int**| Pagination offset | [optional] |
| **first_name** | **string**| A String contained in firstName, or the complete firstName, if param \&quot;exact\&quot; is true | [optional] |
| **idp_alias** | **string**| The alias of an Identity Provider linked to the user | [optional] |
| **idp_user_id** | **string**| The userId at an Identity Provider linked to the user | [optional] |
| **last_name** | **string**| A String contained in lastName, or the complete lastName, if param \&quot;exact\&quot; is true | [optional] |
| **max** | **int**| Maximum results size (defaults to 100) | [optional] |
| **q** | **string**| A query to search for custom attributes, in the format &#39;key1:value2 key2:value2&#39; | [optional] |
| **search** | **string**| A String contained in username, first or last name, or email. Default search behavior is prefix-based (e.g., foo or foo*). Use *foo* for infix search and \&quot;foo\&quot; for exact search. | [optional] |
| **username** | **string**| A String contained in username, or the complete username, if param \&quot;exact\&quot; is true | [optional] |

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

## `adminRealmsRealmUsersPost()`

```php
adminRealmsRealmUsersPost($realm, $user_representation)
```

Create a new user Username must be unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation

try {
    $apiInstance->adminRealmsRealmUsersPost($realm, $user_representation);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation**](../Model/UserRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmUsersProfileGet()`

```php
adminRealmsRealmUsersProfileGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig
```



Get the configuration for the user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmUsersProfileGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersProfileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig**](../Model/UPConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersProfileMetadataGet()`

```php
adminRealmsRealmUsersProfileMetadataGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserProfileMetadata
```



Get the UserProfileMetadata from the configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmUsersProfileMetadataGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersProfileMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserProfileMetadata**](../Model/UserProfileMetadata.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersProfilePut()`

```php
adminRealmsRealmUsersProfilePut($realm, $up_config): \WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig
```



Set the configuration for the user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$up_config = new \WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig

try {
    $result = $apiInstance->adminRealmsRealmUsersProfilePut($realm, $up_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersProfilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **up_config** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig**](../Model/UPConfig.md)|  | [optional] |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\UPConfig**](../Model/UPConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet()`

```php
adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet($realm, $user_id): string[]
```

Return credential types, which are provided by the user storage where user is stored.

Returned values can contain for example \"password\", \"otp\" etc. This will always return empty list for \"local\" users, which are not backed by any user storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdConsentsClientDelete()`

```php
adminRealmsRealmUsersUserIdConsentsClientDelete($realm, $user_id, $client)
```

Revoke consent and offline tokens for particular client from user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client = 'client_example'; // string | Client id

try {
    $apiInstance->adminRealmsRealmUsersUserIdConsentsClientDelete($realm, $user_id, $client);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdConsentsClientDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client** | **string**| Client id | |

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

## `adminRealmsRealmUsersUserIdConsentsGet()`

```php
adminRealmsRealmUsersUserIdConsentsGet($realm, $user_id): array<string,mixed>[]
```

Get consents granted by the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdConsentsGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdConsentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete()`

```php
adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete($realm, $user_id, $credential_id)
```

Remove a credential for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$credential_id = 'credential_id_example'; // string

try {
    $apiInstance->adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete($realm, $user_id, $credential_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **credential_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost()`

```php
adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost($realm, $user_id, $credential_id, $new_previous_credential_id)
```

Move a credential to a position behind another credential

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$credential_id = 'credential_id_example'; // string | The credential to move
$new_previous_credential_id = 'new_previous_credential_id_example'; // string | The credential that will be the previous element in the list. If set to null, the moved credential will be the first element in the list.

try {
    $apiInstance->adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost($realm, $user_id, $credential_id, $new_previous_credential_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **credential_id** | **string**| The credential to move | |
| **new_previous_credential_id** | **string**| The credential that will be the previous element in the list. If set to null, the moved credential will be the first element in the list. | |

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

## `adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost()`

```php
adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost($realm, $user_id, $credential_id)
```

Move a credential to a first position in the credentials list of the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$credential_id = 'credential_id_example'; // string | The credential to move

try {
    $apiInstance->adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost($realm, $user_id, $credential_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **credential_id** | **string**| The credential to move | |

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

## `adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut()`

```php
adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut($realm, $user_id, $credential_id, $body)
```

Update a credential label for a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$credential_id = 'credential_id_example'; // string
$body = 'body_example'; // string

try {
    $apiInstance->adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut($realm, $user_id, $credential_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **credential_id** | **string**|  | |
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

## `adminRealmsRealmUsersUserIdCredentialsGet()`

```php
adminRealmsRealmUsersUserIdCredentialsGet($realm, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdCredentialsGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdCredentialsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation[]**](../Model/CredentialRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersUserIdDelete()`

```php
adminRealmsRealmUsersUserIdDelete($realm, $user_id)
```

Delete the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $apiInstance->adminRealmsRealmUsersUserIdDelete($realm, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdDisableCredentialTypesPut()`

```php
adminRealmsRealmUsersUserIdDisableCredentialTypesPut($realm, $user_id, $request_body)
```

Disable all credentials for a user of a specific type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->adminRealmsRealmUsersUserIdDisableCredentialTypesPut($realm, $user_id, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdDisableCredentialTypesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **request_body** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `adminRealmsRealmUsersUserIdExecuteActionsEmailPut()`

```php
adminRealmsRealmUsersUserIdExecuteActionsEmailPut($realm, $user_id, $client_id, $lifespan, $redirect_uri, $request_body)
```

Send an email to the user with a link they can click to execute particular actions.

An email contains a link the user can click to perform a set of required actions. The redirectUri and clientId parameters are optional. If no redirect is given, then there will be no link back to click after actions have completed. Redirect uri must be a valid uri for the particular clientId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | Client id
$lifespan = 56; // int | Number of seconds after which the generated token expires
$redirect_uri = 'redirect_uri_example'; // string | Redirect uri
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->adminRealmsRealmUsersUserIdExecuteActionsEmailPut($realm, $user_id, $client_id, $lifespan, $redirect_uri, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdExecuteActionsEmailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| Client id | [optional] |
| **lifespan** | **int**| Number of seconds after which the generated token expires | [optional] |
| **redirect_uri** | **string**| Redirect uri | [optional] |
| **request_body** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `adminRealmsRealmUsersUserIdFederatedIdentityGet()`

```php
adminRealmsRealmUsersUserIdFederatedIdentityGet($realm, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\FederatedIdentityRepresentation[]
```

Get social logins associated with the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdFederatedIdentityGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdFederatedIdentityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\FederatedIdentityRepresentation[]**](../Model/FederatedIdentityRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete()`

```php
adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete($realm, $user_id, $provider)
```

Remove a social login provider from user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$provider = 'provider_example'; // string | Social login provider id

try {
    $apiInstance->adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete($realm, $user_id, $provider);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **provider** | **string**| Social login provider id | |

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

## `adminRealmsRealmUsersUserIdFederatedIdentityProviderPost()`

```php
adminRealmsRealmUsersUserIdFederatedIdentityProviderPost($realm, $user_id, $provider)
```

Add a social login provider to the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$provider = 'provider_example'; // string | Social login provider id

try {
    $apiInstance->adminRealmsRealmUsersUserIdFederatedIdentityProviderPost($realm, $user_id, $provider);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdFederatedIdentityProviderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **provider** | **string**| Social login provider id | |

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

## `adminRealmsRealmUsersUserIdGet()`

```php
adminRealmsRealmUsersUserIdGet($realm, $user_id, $user_profile_metadata): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation
```

Get representation of the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$user_profile_metadata = True; // bool | Indicates if the user profile metadata should be added to the response

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdGet($realm, $user_id, $user_profile_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **user_profile_metadata** | **bool**| Indicates if the user profile metadata should be added to the response | [optional] |

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

## `adminRealmsRealmUsersUserIdGroupsCountGet()`

```php
adminRealmsRealmUsersUserIdGroupsCountGet($realm, $user_id, $search): array<string,int>
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$search = 'search_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdGroupsCountGet($realm, $user_id, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdGroupsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **search** | **string**|  | [optional] |

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

## `adminRealmsRealmUsersUserIdGroupsGet()`

```php
adminRealmsRealmUsersUserIdGroupsGet($realm, $user_id, $brief_representation, $first, $max, $search): \WebMI\KeycloakApiClient\KeycloakApi\Model\GroupRepresentation[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$brief_representation = true; // bool
$first = 56; // int
$max = 56; // int
$search = 'search_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdGroupsGet($realm, $user_id, $brief_representation, $first, $max, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **brief_representation** | **bool**|  | [optional] [default to true] |
| **first** | **int**|  | [optional] |
| **max** | **int**|  | [optional] |
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

## `adminRealmsRealmUsersUserIdGroupsGroupIdDelete()`

```php
adminRealmsRealmUsersUserIdGroupsGroupIdDelete($realm, $user_id, $group_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$group_id = 'group_id_example'; // string

try {
    $apiInstance->adminRealmsRealmUsersUserIdGroupsGroupIdDelete($realm, $user_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdGroupsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
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

## `adminRealmsRealmUsersUserIdGroupsGroupIdPut()`

```php
adminRealmsRealmUsersUserIdGroupsGroupIdPut($realm, $user_id, $group_id)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$group_id = 'group_id_example'; // string

try {
    $apiInstance->adminRealmsRealmUsersUserIdGroupsGroupIdPut($realm, $user_id, $group_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdGroupsGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
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

## `adminRealmsRealmUsersUserIdImpersonationPost()`

```php
adminRealmsRealmUsersUserIdImpersonationPost($realm, $user_id): array<string,mixed>
```

Impersonate the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdImpersonationPost($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdImpersonationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdLogoutPost()`

```php
adminRealmsRealmUsersUserIdLogoutPost($realm, $user_id)
```

Remove all user sessions associated with the user Also send notification to all clients that have an admin URL to invalidate the sessions for the particular user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $apiInstance->adminRealmsRealmUsersUserIdLogoutPost($realm, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet()`

```php
adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet($realm, $user_id, $client_uuid): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserSessionRepresentation[]
```

Get offline sessions associated with the user and client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_uuid = 'client_uuid_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet($realm, $user_id, $client_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_uuid** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdPut()`

```php
adminRealmsRealmUsersUserIdPut($realm, $user_id, $user_representation)
```

Update the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$user_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation

try {
    $apiInstance->adminRealmsRealmUsersUserIdPut($realm, $user_id, $user_representation);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **user_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserRepresentation**](../Model/UserRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmUsersUserIdResetPasswordEmailPut()`

```php
adminRealmsRealmUsersUserIdResetPasswordEmailPut($realm, $user_id, $client_id, $redirect_uri)
```

Send an email to the user with a link they can click to reset their password.

The redirectUri and clientId parameters are optional. The default for the redirect is the account client. This endpoint has been deprecated.  Please use the execute-actions-email passing a list with UPDATE_PASSWORD within it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | client id
$redirect_uri = 'redirect_uri_example'; // string | redirect uri

try {
    $apiInstance->adminRealmsRealmUsersUserIdResetPasswordEmailPut($realm, $user_id, $client_id, $redirect_uri);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdResetPasswordEmailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| client id | [optional] |
| **redirect_uri** | **string**| redirect uri | [optional] |

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

## `adminRealmsRealmUsersUserIdResetPasswordPut()`

```php
adminRealmsRealmUsersUserIdResetPasswordPut($realm, $user_id, $credential_representation)
```

Set up a new password for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$credential_representation = new \WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation

try {
    $apiInstance->adminRealmsRealmUsersUserIdResetPasswordPut($realm, $user_id, $credential_representation);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdResetPasswordPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **credential_representation** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation**](../Model/CredentialRepresentation.md)|  | [optional] |

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

## `adminRealmsRealmUsersUserIdSendVerifyEmailPut()`

```php
adminRealmsRealmUsersUserIdSendVerifyEmailPut($realm, $user_id, $client_id, $lifespan, $redirect_uri)
```

Send an email-verification email to the user An email contains a link the user can click to verify their email address.

The redirectUri, clientId and lifespan parameters are optional. The default for the redirect is the account client. The default for the lifespan is 12 hours

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string
$client_id = 'client_id_example'; // string | Client id
$lifespan = 56; // int | Number of seconds after which the generated token expires
$redirect_uri = 'redirect_uri_example'; // string | Redirect uri

try {
    $apiInstance->adminRealmsRealmUsersUserIdSendVerifyEmailPut($realm, $user_id, $client_id, $lifespan, $redirect_uri);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdSendVerifyEmailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |
| **client_id** | **string**| Client id | [optional] |
| **lifespan** | **int**| Number of seconds after which the generated token expires | [optional] |
| **redirect_uri** | **string**| Redirect uri | [optional] |

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

## `adminRealmsRealmUsersUserIdSessionsGet()`

```php
adminRealmsRealmUsersUserIdSessionsGet($realm, $user_id): \WebMI\KeycloakApiClient\KeycloakApi\Model\UserSessionRepresentation[]
```

Get sessions associated with the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdSessionsGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdSessionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

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

## `adminRealmsRealmUsersUserIdUnmanagedAttributesGet()`

```php
adminRealmsRealmUsersUserIdUnmanagedAttributesGet($realm, $user_id): array<string,string[]>
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmUsersUserIdUnmanagedAttributesGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->adminRealmsRealmUsersUserIdUnmanagedAttributesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **user_id** | **string**|  | |

### Return type

**array<string,string[]>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
