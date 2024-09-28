# # PolicyEnforcerConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enforcement_mode** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\EnforcementMode**](EnforcementMode.md) |  | [optional]
**paths** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\PathConfig[]**](PathConfig.md) |  | [optional]
**path_cache** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\PathCacheConfig**](PathCacheConfig.md) |  | [optional]
**lazy_load_paths** | **bool** |  | [optional]
**on_deny_redirect_to** | **string** |  | [optional]
**user_managed_access** | **object** |  | [optional]
**claim_information_point** | **array<string,array<string,mixed>>** |  | [optional]
**http_method_as_scope** | **bool** |  | [optional]
**realm** | **string** |  | [optional]
**auth_server_url** | **string** |  | [optional]
**credentials** | **array<string,mixed>** |  | [optional]
**resource** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
