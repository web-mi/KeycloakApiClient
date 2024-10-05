# WebMI\KeycloakApiClient\KeycloakApi\ClientRegistrationPolicyApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientRegistrationPolicyProvidersGet()**](ClientRegistrationPolicyApi.md#adminRealmsRealmClientRegistrationPolicyProvidersGet) | **GET** /admin/realms/{realm}/client-registration-policy/providers | Base path for retrieve providers with the configProperties properly filled |


## `adminRealmsRealmClientRegistrationPolicyProvidersGet()`

```php
adminRealmsRealmClientRegistrationPolicyProvidersGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\ComponentTypeRepresentation[]
```

Base path for retrieve providers with the configProperties properly filled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientRegistrationPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmClientRegistrationPolicyProvidersGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientRegistrationPolicyApi->adminRealmsRealmClientRegistrationPolicyProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

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
