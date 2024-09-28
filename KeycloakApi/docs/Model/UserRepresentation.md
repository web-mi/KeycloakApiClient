# # UserRepresentation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**username** | **string** |  | [optional]
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**email_verified** | **bool** |  | [optional]
**attributes** | **array<string,string[]>** |  | [optional]
**user_profile_metadata** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserProfileMetadata**](UserProfileMetadata.md) |  | [optional]
**self** | **string** |  | [optional]
**origin** | **string** |  | [optional]
**created_timestamp** | **int** |  | [optional]
**enabled** | **bool** |  | [optional]
**totp** | **bool** |  | [optional]
**federation_link** | **string** |  | [optional]
**service_account_client_id** | **string** |  | [optional]
**credentials** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\CredentialRepresentation[]**](CredentialRepresentation.md) |  | [optional]
**disableable_credential_types** | **string[]** |  | [optional]
**required_actions** | **string[]** |  | [optional]
**federated_identities** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\FederatedIdentityRepresentation[]**](FederatedIdentityRepresentation.md) |  | [optional]
**realm_roles** | **string[]** |  | [optional]
**client_roles** | **array<string,string[]>** |  | [optional]
**client_consents** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\UserConsentRepresentation[]**](UserConsentRepresentation.md) |  | [optional]
**not_before** | **int** |  | [optional]
**application_roles** | **array<string,string[]>** |  | [optional]
**social_links** | [**\WebMI\KeycloakApiClient\KeycloakApi\Model\SocialLinkRepresentation[]**](SocialLinkRepresentation.md) |  | [optional]
**groups** | **string[]** |  | [optional]
**access** | **array<string,bool>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
