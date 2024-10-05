# WebMI\KeycloakApiClient\KeycloakApi\ClientAttributeCertificateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost()**](ClientAttributeCertificateApi.md#adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/download | Get a keystore file for the client, containing private key and public certificate |
| [**adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost()**](ClientAttributeCertificateApi.md#adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/generate-and-download | Generate a new keypair and certificate, and get the private key file  Generates a keypair and certificate and serves the private key in a specified keystore format. Only generated public certificate is saved in Keycloak DB - the private key is not. |
| [**adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost()**](ClientAttributeCertificateApi.md#adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/generate | Generate a new certificate with new key pair |
| [**adminRealmsRealmClientsClientUuidCertificatesAttrGet()**](ClientAttributeCertificateApi.md#adminRealmsRealmClientsClientUuidCertificatesAttrGet) | **GET** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr} | Get key info |
| [**adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost()**](ClientAttributeCertificateApi.md#adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/upload-certificate | Upload only certificate, not private key |
| [**adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost()**](ClientAttributeCertificateApi.md#adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/upload | Upload certificate and eventually private key |


## `adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost()`

```php
adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost($realm, $client_uuid, $attr, $key_store_config): \SplFileObject
```

Get a keystore file for the client, containing private key and public certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientAttributeCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$attr = 'attr_example'; // string
$key_store_config = new \WebMI\KeycloakApiClient\KeycloakApi\Model\KeyStoreConfig(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\KeyStoreConfig

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost($realm, $client_uuid, $attr, $key_store_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAttributeCertificateApi->adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **attr** | **string**|  | |
| **key_store_config** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\KeyStoreConfig**](../Model/KeyStoreConfig.md)|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost()`

```php
adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost($realm, $client_uuid, $attr, $key_store_config): \SplFileObject
```

Generate a new keypair and certificate, and get the private key file  Generates a keypair and certificate and serves the private key in a specified keystore format. Only generated public certificate is saved in Keycloak DB - the private key is not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientAttributeCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$attr = 'attr_example'; // string
$key_store_config = new \WebMI\KeycloakApiClient\KeycloakApi\Model\KeyStoreConfig(); // \WebMI\KeycloakApiClient\KeycloakApi\Model\KeyStoreConfig

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost($realm, $client_uuid, $attr, $key_store_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAttributeCertificateApi->adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **attr** | **string**|  | |
| **key_store_config** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\KeyStoreConfig**](../Model/KeyStoreConfig.md)|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost()`

```php
adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost($realm, $client_uuid, $attr): \WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation
```

Generate a new certificate with new key pair

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientAttributeCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$attr = 'attr_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost($realm, $client_uuid, $attr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAttributeCertificateApi->adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **attr** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation**](../Model/CertificateRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidCertificatesAttrGet()`

```php
adminRealmsRealmClientsClientUuidCertificatesAttrGet($realm, $client_uuid, $attr): \WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation
```

Get key info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientAttributeCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$attr = 'attr_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidCertificatesAttrGet($realm, $client_uuid, $attr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAttributeCertificateApi->adminRealmsRealmClientsClientUuidCertificatesAttrGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **attr** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation**](../Model/CertificateRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost()`

```php
adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost($realm, $client_uuid, $attr): \WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation
```

Upload only certificate, not private key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientAttributeCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$attr = 'attr_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost($realm, $client_uuid, $attr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAttributeCertificateApi->adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **attr** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation**](../Model/CertificateRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost()`

```php
adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost($realm, $client_uuid, $attr): \WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation
```

Upload certificate and eventually private key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new WebMI\KeycloakApiClient\KeycloakApi\Api\ClientAttributeCertificateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$realm = 'realm_example'; // string | realm name (not id!)
$client_uuid = 'client_uuid_example'; // string | id of client (not client-id!)
$attr = 'attr_example'; // string

try {
    $result = $apiInstance->adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost($realm, $client_uuid, $attr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientAttributeCertificateApi->adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **realm** | **string**| realm name (not id!) | |
| **client_uuid** | **string**| id of client (not client-id!) | |
| **attr** | **string**|  | |

### Return type

[**\WebMI\KeycloakApiClient\KeycloakApi\Model\CertificateRepresentation**](../Model/CertificateRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
