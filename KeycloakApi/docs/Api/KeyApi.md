# WebMI\KeycloakApiClient\KeycloakApi\KeyApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmKeysGet()**](KeyApi.md#adminRealmsRealmKeysGet) | **GET** /admin/realms/{realm}/keys |  |


## `adminRealmsRealmKeysGet()`

```php
adminRealmsRealmKeysGet($realm): \WebMI\KeycloakApiClient\KeycloakApi\Model\KeysMetadataRepresentation
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\KeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)

try {
    $result = $apiInstance->adminRealmsRealmKeysGet($realm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeyApi->adminRealmsRealmKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\KeysMetadataRepresentation**](../Model/KeysMetadataRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
