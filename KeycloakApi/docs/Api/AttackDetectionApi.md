# WebMI\KeycloakApiClient\KeycloakApi\AttackDetectionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmAttackDetectionBruteForceUsersDelete()**](AttackDetectionApi.md#adminRealmsRealmAttackDetectionBruteForceUsersDelete) | **DELETE** /admin/realms/{realm}/attack-detection/brute-force/users | Clear any user login failures for all users This can release temporary disabled users |
| [**adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete()**](AttackDetectionApi.md#adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete) | **DELETE** /admin/realms/{realm}/attack-detection/brute-force/users/{userId} | Clear any user login failures for the user This can release temporary disabled user |
| [**adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet()**](AttackDetectionApi.md#adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet) | **GET** /admin/realms/{realm}/attack-detection/brute-force/users/{userId} | Get status of a username in brute force detection |


## `adminRealmsRealmAttackDetectionBruteForceUsersDelete()`

```php
adminRealmsRealmAttackDetectionBruteForceUsersDelete($realm)
```

Clear any user login failures for all users This can release temporary disabled users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AttackDetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $apiInstance->adminRealmsRealmAttackDetectionBruteForceUsersDelete($realm);
} catch (Exception $e) {
    echo 'Exception when calling AttackDetectionApi->adminRealmsRealmAttackDetectionBruteForceUsersDelete: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete()`

```php
adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete($realm, $user_id)
```

Clear any user login failures for the user This can release temporary disabled user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AttackDetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $apiInstance->adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete($realm, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AttackDetectionApi->adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet()`

```php
adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet($realm, $user_id): array<string,mixed>
```

Get status of a username in brute force detection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\AttackDetectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet($realm, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttackDetectionApi->adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet: ', $e->getMessage(), PHP_EOL;
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
