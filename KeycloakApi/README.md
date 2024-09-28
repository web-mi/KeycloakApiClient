# OpenAPIClient-php

This is a REST API reference for the Keycloak Admin REST API.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttackDetectionApi* | [**adminRealmsRealmAttackDetectionBruteForceUsersDelete**](docs/Api/AttackDetectionApi.md#adminrealmsrealmattackdetectionbruteforceusersdelete) | **DELETE** /admin/realms/{realm}/attack-detection/brute-force/users | Clear any user login failures for all users This can release temporary disabled users
*AttackDetectionApi* | [**adminRealmsRealmAttackDetectionBruteForceUsersUserIdDelete**](docs/Api/AttackDetectionApi.md#adminrealmsrealmattackdetectionbruteforceusersuseriddelete) | **DELETE** /admin/realms/{realm}/attack-detection/brute-force/users/{userId} | Clear any user login failures for the user This can release temporary disabled user
*AttackDetectionApi* | [**adminRealmsRealmAttackDetectionBruteForceUsersUserIdGet**](docs/Api/AttackDetectionApi.md#adminrealmsrealmattackdetectionbruteforceusersuseridget) | **GET** /admin/realms/{realm}/attack-detection/brute-force/users/{userId} | Get status of a username in brute force detection
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationAuthenticatorProvidersGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationauthenticatorprovidersget) | **GET** /admin/realms/{realm}/authentication/authenticator-providers | Get authenticator providers Returns a stream of authenticator providers.
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationClientAuthenticatorProvidersGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationclientauthenticatorprovidersget) | **GET** /admin/realms/{realm}/authentication/client-authenticator-providers | Get client authenticator providers Returns a stream of client authenticator providers.
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationConfigDescriptionProviderIdGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationconfigdescriptionprovideridget) | **GET** /admin/realms/{realm}/authentication/config-description/{providerId} | Get authenticator provider&#39;s configuration description
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationConfigIdDelete**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationconfigiddelete) | **DELETE** /admin/realms/{realm}/authentication/config/{id} | Delete authenticator configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationConfigIdGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationconfigidget) | **GET** /admin/realms/{realm}/authentication/config/{id} | Get authenticator configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationConfigIdPut**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationconfigidput) | **PUT** /admin/realms/{realm}/authentication/config/{id} | Update authenticator configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationConfigPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationconfigpost) | **POST** /admin/realms/{realm}/authentication/config | Create new authenticator configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsExecutionIdConfigIdGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionsexecutionidconfigidget) | **GET** /admin/realms/{realm}/authentication/executions/{executionId}/config/{id} | Get execution&#39;s configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsExecutionIdConfigPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionsexecutionidconfigpost) | **POST** /admin/realms/{realm}/authentication/executions/{executionId}/config | Update execution with new configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsExecutionIdDelete**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionsexecutioniddelete) | **DELETE** /admin/realms/{realm}/authentication/executions/{executionId} | Delete execution
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsExecutionIdGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionsexecutionidget) | **GET** /admin/realms/{realm}/authentication/executions/{executionId} | Get Single Execution
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsExecutionIdLowerPriorityPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionsexecutionidlowerprioritypost) | **POST** /admin/realms/{realm}/authentication/executions/{executionId}/lower-priority | Lower execution&#39;s priority
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsExecutionIdRaisePriorityPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionsexecutionidraiseprioritypost) | **POST** /admin/realms/{realm}/authentication/executions/{executionId}/raise-priority | Raise execution&#39;s priority
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationExecutionsPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationexecutionspost) | **POST** /admin/realms/{realm}/authentication/executions | Add new authentication execution
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsFlowAliasCopyPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsflowaliascopypost) | **POST** /admin/realms/{realm}/authentication/flows/{flowAlias}/copy | Copy existing authentication flow under a new name The new name is given as &#39;newName&#39; attribute of the passed JSON object
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsExecutionPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsflowaliasexecutionsexecutionpost) | **POST** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions/execution | Add new authentication execution to a flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsFlowPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsflowaliasexecutionsflowpost) | **POST** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions/flow | Add new flow with new execution to existing flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsflowaliasexecutionsget) | **GET** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions | Get authentication executions for a flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsFlowAliasExecutionsPut**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsflowaliasexecutionsput) | **PUT** /admin/realms/{realm}/authentication/flows/{flowAlias}/executions | Update authentication executions of a Flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsget) | **GET** /admin/realms/{realm}/authentication/flows | Get authentication flows Returns a stream of authentication flows.
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsIdDelete**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsiddelete) | **DELETE** /admin/realms/{realm}/authentication/flows/{id} | Delete an authentication flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsIdGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsidget) | **GET** /admin/realms/{realm}/authentication/flows/{id} | Get authentication flow for id
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsIdPut**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowsidput) | **PUT** /admin/realms/{realm}/authentication/flows/{id} | Update an authentication flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFlowsPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationflowspost) | **POST** /admin/realms/{realm}/authentication/flows | Create a new authentication flow
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFormActionProvidersGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationformactionprovidersget) | **GET** /admin/realms/{realm}/authentication/form-action-providers | Get form action providers Returns a stream of form action providers.
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationFormProvidersGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationformprovidersget) | **GET** /admin/realms/{realm}/authentication/form-providers | Get form providers Returns a stream of form providers.
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationPerClientConfigDescriptionGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationperclientconfigdescriptionget) | **GET** /admin/realms/{realm}/authentication/per-client-config-description | Get configuration descriptions for all clients
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRegisterRequiredActionPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationregisterrequiredactionpost) | **POST** /admin/realms/{realm}/authentication/register-required-action | Register a new required actions
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigDelete**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasconfigdelete) | **DELETE** /admin/realms/{realm}/authentication/required-actions/{alias}/config | Delete RequiredAction configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigDescriptionGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasconfigdescriptionget) | **GET** /admin/realms/{realm}/authentication/required-actions/{alias}/config-description | Get RequiredAction provider configuration description
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasconfigget) | **GET** /admin/realms/{realm}/authentication/required-actions/{alias}/config | Get RequiredAction configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasConfigPut**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasconfigput) | **PUT** /admin/realms/{realm}/authentication/required-actions/{alias}/config | Update RequiredAction configuration
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasDelete**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasdelete) | **DELETE** /admin/realms/{realm}/authentication/required-actions/{alias} | Delete required action
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasget) | **GET** /admin/realms/{realm}/authentication/required-actions/{alias} | Get required action for alias
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasLowerPriorityPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliaslowerprioritypost) | **POST** /admin/realms/{realm}/authentication/required-actions/{alias}/lower-priority | Lower required action&#39;s priority
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasPut**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasput) | **PUT** /admin/realms/{realm}/authentication/required-actions/{alias} | Update required action
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsAliasRaisePriorityPost**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsaliasraiseprioritypost) | **POST** /admin/realms/{realm}/authentication/required-actions/{alias}/raise-priority | Raise required action&#39;s priority
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationRequiredActionsGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationrequiredactionsget) | **GET** /admin/realms/{realm}/authentication/required-actions | Get required actions Returns a stream of required actions.
*AuthenticationManagementApi* | [**adminRealmsRealmAuthenticationUnregisteredRequiredActionsGet**](docs/Api/AuthenticationManagementApi.md#adminrealmsrealmauthenticationunregisteredrequiredactionsget) | **GET** /admin/realms/{realm}/authentication/unregistered-required-actions | Get unregistered required actions Returns a stream of unregistered required actions.
*ClientAttributeCertificateApi* | [**adminRealmsRealmClientsClientUuidCertificatesAttrDownloadPost**](docs/Api/ClientAttributeCertificateApi.md#adminrealmsrealmclientsclientuuidcertificatesattrdownloadpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/download | Get a keystore file for the client, containing private key and public certificate
*ClientAttributeCertificateApi* | [**adminRealmsRealmClientsClientUuidCertificatesAttrGenerateAndDownloadPost**](docs/Api/ClientAttributeCertificateApi.md#adminrealmsrealmclientsclientuuidcertificatesattrgenerateanddownloadpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/generate-and-download | Generate a new keypair and certificate, and get the private key file  Generates a keypair and certificate and serves the private key in a specified keystore format. Only generated public certificate is saved in Keycloak DB - the private key is not.
*ClientAttributeCertificateApi* | [**adminRealmsRealmClientsClientUuidCertificatesAttrGeneratePost**](docs/Api/ClientAttributeCertificateApi.md#adminrealmsrealmclientsclientuuidcertificatesattrgeneratepost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/generate | Generate a new certificate with new key pair
*ClientAttributeCertificateApi* | [**adminRealmsRealmClientsClientUuidCertificatesAttrGet**](docs/Api/ClientAttributeCertificateApi.md#adminrealmsrealmclientsclientuuidcertificatesattrget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr} | Get key info
*ClientAttributeCertificateApi* | [**adminRealmsRealmClientsClientUuidCertificatesAttrUploadCertificatePost**](docs/Api/ClientAttributeCertificateApi.md#adminrealmsrealmclientsclientuuidcertificatesattruploadcertificatepost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/upload-certificate | Upload only certificate, not private key
*ClientAttributeCertificateApi* | [**adminRealmsRealmClientsClientUuidCertificatesAttrUploadPost**](docs/Api/ClientAttributeCertificateApi.md#adminrealmsrealmclientsclientuuidcertificatesattruploadpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/certificates/{attr}/upload | Upload certificate and eventually private key
*ClientInitialAccessApi* | [**adminRealmsRealmClientsInitialAccessGet**](docs/Api/ClientInitialAccessApi.md#adminrealmsrealmclientsinitialaccessget) | **GET** /admin/realms/{realm}/clients-initial-access | 
*ClientInitialAccessApi* | [**adminRealmsRealmClientsInitialAccessIdDelete**](docs/Api/ClientInitialAccessApi.md#adminrealmsrealmclientsinitialaccessiddelete) | **DELETE** /admin/realms/{realm}/clients-initial-access/{id} | 
*ClientInitialAccessApi* | [**adminRealmsRealmClientsInitialAccessPost**](docs/Api/ClientInitialAccessApi.md#adminrealmsrealmclientsinitialaccesspost) | **POST** /admin/realms/{realm}/clients-initial-access | Create a new initial access token.
*ClientRegistrationPolicyApi* | [**adminRealmsRealmClientRegistrationPolicyProvidersGet**](docs/Api/ClientRegistrationPolicyApi.md#adminrealmsrealmclientregistrationpolicyprovidersget) | **GET** /admin/realms/{realm}/client-registration-policy/providers | Base path for retrieve providers with the configProperties properly filled
*ClientRoleMappingsApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdAvailableGet**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmgroupsgroupidrolemappingsclientsclientidavailableget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id}/available | Get available client-level roles that can be mapped to the user or group
*ClientRoleMappingsApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdCompositeGet**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmgroupsgroupidrolemappingsclientsclientidcompositeget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id}/composite | Get effective client-level role mappings This recurses any composite roles
*ClientRoleMappingsApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdDelete**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmgroupsgroupidrolemappingsclientsclientiddelete) | **DELETE** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id} | Delete client-level roles from user or group role mapping
*ClientRoleMappingsApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdGet**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmgroupsgroupidrolemappingsclientsclientidget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id} | Get client-level role mappings for the user or group, and the app
*ClientRoleMappingsApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsClientsClientIdPost**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmgroupsgroupidrolemappingsclientsclientidpost) | **POST** /admin/realms/{realm}/groups/{group-id}/role-mappings/clients/{client-id} | Add client-level roles to the user or group role mapping
*ClientRoleMappingsApi* | [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdAvailableGet**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmusersuseridrolemappingsclientsclientidavailableget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id}/available | Get available client-level roles that can be mapped to the user or group
*ClientRoleMappingsApi* | [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdCompositeGet**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmusersuseridrolemappingsclientsclientidcompositeget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id}/composite | Get effective client-level role mappings This recurses any composite roles
*ClientRoleMappingsApi* | [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdDelete**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmusersuseridrolemappingsclientsclientiddelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id} | Delete client-level roles from user or group role mapping
*ClientRoleMappingsApi* | [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdGet**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmusersuseridrolemappingsclientsclientidget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id} | Get client-level role mappings for the user or group, and the app
*ClientRoleMappingsApi* | [**adminRealmsRealmUsersUserIdRoleMappingsClientsClientIdPost**](docs/Api/ClientRoleMappingsApi.md#adminrealmsrealmusersuseridrolemappingsclientsclientidpost) | **POST** /admin/realms/{realm}/users/{user-id}/role-mappings/clients/{client-id} | Add client-level roles to the user or group role mapping
*ClientScopesApi* | [**adminRealmsRealmClientScopesClientScopeIdDelete**](docs/Api/ClientScopesApi.md#adminrealmsrealmclientscopesclientscopeiddelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id} | Delete the client scope
*ClientScopesApi* | [**adminRealmsRealmClientScopesClientScopeIdGet**](docs/Api/ClientScopesApi.md#adminrealmsrealmclientscopesclientscopeidget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id} | Get representation of the client scope
*ClientScopesApi* | [**adminRealmsRealmClientScopesClientScopeIdPut**](docs/Api/ClientScopesApi.md#adminrealmsrealmclientscopesclientscopeidput) | **PUT** /admin/realms/{realm}/client-scopes/{client-scope-id} | Update the client scope
*ClientScopesApi* | [**adminRealmsRealmClientScopesGet**](docs/Api/ClientScopesApi.md#adminrealmsrealmclientscopesget) | **GET** /admin/realms/{realm}/client-scopes | Get client scopes belonging to the realm Returns a list of client scopes belonging to the realm
*ClientScopesApi* | [**adminRealmsRealmClientScopesPost**](docs/Api/ClientScopesApi.md#adminrealmsrealmclientscopespost) | **POST** /admin/realms/{realm}/client-scopes | Create a new client scope Client Scope’s name must be unique!
*ClientScopesApi* | [**adminRealmsRealmClientTemplatesClientScopeIdDelete**](docs/Api/ClientScopesApi.md#adminrealmsrealmclienttemplatesclientscopeiddelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id} | Delete the client scope
*ClientScopesApi* | [**adminRealmsRealmClientTemplatesClientScopeIdGet**](docs/Api/ClientScopesApi.md#adminrealmsrealmclienttemplatesclientscopeidget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id} | Get representation of the client scope
*ClientScopesApi* | [**adminRealmsRealmClientTemplatesClientScopeIdPut**](docs/Api/ClientScopesApi.md#adminrealmsrealmclienttemplatesclientscopeidput) | **PUT** /admin/realms/{realm}/client-templates/{client-scope-id} | Update the client scope
*ClientScopesApi* | [**adminRealmsRealmClientTemplatesGet**](docs/Api/ClientScopesApi.md#adminrealmsrealmclienttemplatesget) | **GET** /admin/realms/{realm}/client-templates | Get client scopes belonging to the realm Returns a list of client scopes belonging to the realm
*ClientScopesApi* | [**adminRealmsRealmClientTemplatesPost**](docs/Api/ClientScopesApi.md#adminrealmsrealmclienttemplatespost) | **POST** /admin/realms/{realm}/client-templates | Create a new client scope Client Scope’s name must be unique!
*ClientsApi* | [**adminRealmsRealmClientsClientUuidClientSecretGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidclientsecretget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/client-secret | Get the client secret
*ClientsApi* | [**adminRealmsRealmClientsClientUuidClientSecretPost**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidclientsecretpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/client-secret | Generate a new secret for the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidClientSecretRotatedDelete**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidclientsecretrotateddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/client-secret/rotated | Invalidate the rotated secret for the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidClientSecretRotatedGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidclientsecretrotatedget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/client-secret/rotated | Get the rotated client secret
*ClientsApi* | [**adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdDelete**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuiddefaultclientscopesclientscopeiddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/default-client-scopes/{clientScopeId} | 
*ClientsApi* | [**adminRealmsRealmClientsClientUuidDefaultClientScopesClientScopeIdPut**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuiddefaultclientscopesclientscopeidput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/default-client-scopes/{clientScopeId} | 
*ClientsApi* | [**adminRealmsRealmClientsClientUuidDefaultClientScopesGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuiddefaultclientscopesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/default-client-scopes | Get default client scopes.  Only name and ids are returned.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidDelete**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuiddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid} | Delete the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleAccessTokenGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidevaluatescopesgenerateexampleaccesstokenget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/generate-example-access-token | Create JSON with payload of example access token
*ClientsApi* | [**adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleIdTokenGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidevaluatescopesgenerateexampleidtokenget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/generate-example-id-token | Create JSON with payload of example id token
*ClientsApi* | [**adminRealmsRealmClientsClientUuidEvaluateScopesGenerateExampleUserinfoGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidevaluatescopesgenerateexampleuserinfoget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/generate-example-userinfo | Create JSON with payload of example user info
*ClientsApi* | [**adminRealmsRealmClientsClientUuidEvaluateScopesProtocolMappersGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidevaluatescopesprotocolmappersget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/protocol-mappers | Return list of all protocol mappers, which will be used when generating tokens issued for particular client.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdGrantedGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidevaluatescopesscopemappingsrolecontaineridgrantedget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/scope-mappings/{roleContainerId}/granted | Get effective scope mapping of all roles of particular role container, which this client is defacto allowed to have in the accessToken issued for him.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidEvaluateScopesScopeMappingsRoleContainerIdNotGrantedGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidevaluatescopesscopemappingsrolecontaineridnotgrantedget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/evaluate-scopes/scope-mappings/{roleContainerId}/not-granted | Get roles, which this client doesn&#39;t have scope for and can&#39;t have them in the accessToken issued for him.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidget) | **GET** /admin/realms/{realm}/clients/{client-uuid} | Get representation of the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidInstallationProvidersProviderIdGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidinstallationprovidersprovideridget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/installation/providers/{providerId} | 
*ClientsApi* | [**adminRealmsRealmClientsClientUuidManagementPermissionsGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidmanagementpermissionsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference
*ClientsApi* | [**adminRealmsRealmClientsClientUuidManagementPermissionsPut**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidmanagementpermissionsput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference
*ClientsApi* | [**adminRealmsRealmClientsClientUuidNodesNodeDelete**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidnodesnodedelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/nodes/{node} | Unregister a cluster node from the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidNodesPost**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidnodespost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/nodes | Register a cluster node with the client Manually register cluster node to this client - usually it’s not needed to call this directly as adapter should handle by sending registration request to Keycloak
*ClientsApi* | [**adminRealmsRealmClientsClientUuidOfflineSessionCountGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidofflinesessioncountget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/offline-session-count | Get application offline session count Returns a number of offline user sessions associated with this client { \&quot;count\&quot;: number }
*ClientsApi* | [**adminRealmsRealmClientsClientUuidOfflineSessionsGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidofflinesessionsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/offline-sessions | Get offline sessions for client Returns a list of offline user sessions associated with this client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdDelete**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidoptionalclientscopesclientscopeiddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/optional-client-scopes/{clientScopeId} | 
*ClientsApi* | [**adminRealmsRealmClientsClientUuidOptionalClientScopesClientScopeIdPut**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidoptionalclientscopesclientscopeidput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/optional-client-scopes/{clientScopeId} | 
*ClientsApi* | [**adminRealmsRealmClientsClientUuidOptionalClientScopesGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidoptionalclientscopesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/optional-client-scopes | Get optional client scopes.  Only name and ids are returned.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidPushRevocationPost**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidpushrevocationpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/push-revocation | Push the client&#39;s revocation policy to its admin URL If the client has an admin URL, push revocation policy to it.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidPut**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidput) | **PUT** /admin/realms/{realm}/clients/{client-uuid} | Update the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidRegistrationAccessTokenPost**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidregistrationaccesstokenpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/registration-access-token | Generate a new registration access token for the client
*ClientsApi* | [**adminRealmsRealmClientsClientUuidServiceAccountUserGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidserviceaccountuserget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/service-account-user | Get a user dedicated to the service account
*ClientsApi* | [**adminRealmsRealmClientsClientUuidSessionCountGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidsessioncountget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/session-count | Get application session count Returns a number of user sessions associated with this client { \&quot;count\&quot;: number }
*ClientsApi* | [**adminRealmsRealmClientsClientUuidTestNodesAvailableGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidtestnodesavailableget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/test-nodes-available | Test if registered cluster nodes are available Tests availability by sending &#39;ping&#39; request to all cluster nodes.
*ClientsApi* | [**adminRealmsRealmClientsClientUuidUserSessionsGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsclientuuidusersessionsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/user-sessions | Get user sessions for client Returns a list of user sessions associated with this client
*ClientsApi* | [**adminRealmsRealmClientsGet**](docs/Api/ClientsApi.md#adminrealmsrealmclientsget) | **GET** /admin/realms/{realm}/clients | Get clients belonging to the realm.
*ClientsApi* | [**adminRealmsRealmClientsPost**](docs/Api/ClientsApi.md#adminrealmsrealmclientspost) | **POST** /admin/realms/{realm}/clients | Create a new client Client’s client_id must be unique!
*ComponentApi* | [**adminRealmsRealmComponentsGet**](docs/Api/ComponentApi.md#adminrealmsrealmcomponentsget) | **GET** /admin/realms/{realm}/components | 
*ComponentApi* | [**adminRealmsRealmComponentsIdDelete**](docs/Api/ComponentApi.md#adminrealmsrealmcomponentsiddelete) | **DELETE** /admin/realms/{realm}/components/{id} | 
*ComponentApi* | [**adminRealmsRealmComponentsIdGet**](docs/Api/ComponentApi.md#adminrealmsrealmcomponentsidget) | **GET** /admin/realms/{realm}/components/{id} | 
*ComponentApi* | [**adminRealmsRealmComponentsIdPut**](docs/Api/ComponentApi.md#adminrealmsrealmcomponentsidput) | **PUT** /admin/realms/{realm}/components/{id} | 
*ComponentApi* | [**adminRealmsRealmComponentsIdSubComponentTypesGet**](docs/Api/ComponentApi.md#adminrealmsrealmcomponentsidsubcomponenttypesget) | **GET** /admin/realms/{realm}/components/{id}/sub-component-types | List of subcomponent types that are available to configure for a particular parent component.
*ComponentApi* | [**adminRealmsRealmComponentsPost**](docs/Api/ComponentApi.md#adminrealmsrealmcomponentspost) | **POST** /admin/realms/{realm}/components | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerImportPost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverimportpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/import | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPermissionEvaluatePost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpermissionevaluatepost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/permission/evaluate | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPermissionGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpermissionget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/permission | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPermissionPost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpermissionpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/permission | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPermissionProvidersGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpermissionprovidersget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/permission/providers | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPermissionSearchGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpermissionsearchget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/permission/search | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPolicyEvaluatePost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpolicyevaluatepost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/policy/evaluate | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPolicyGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpolicyget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/policy | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPolicyPost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpolicypost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/policy | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPolicyProvidersGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpolicyprovidersget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/policy/providers | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPolicySearchGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverpolicysearchget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/policy/search | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerPut**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourcePost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourcepost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceResourceIdAttributesGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceresourceidattributesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/{resource-id}/attributes | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceResourceIdDelete**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceresourceiddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/{resource-id} | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceResourceIdGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceresourceidget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/{resource-id} | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceResourceIdPermissionsGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceresourceidpermissionsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/{resource-id}/permissions | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceResourceIdPut**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceresourceidput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/{resource-id} | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceResourceIdScopesGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourceresourceidscopesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/{resource-id}/scopes | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerResourceSearchGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverresourcesearchget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/resource/search | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopeget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopePost**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopepost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeScopeIdDelete**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopescopeiddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope/{scope-id} | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeScopeIdGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopescopeidget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope/{scope-id} | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeScopeIdPermissionsGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopescopeidpermissionsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope/{scope-id}/permissions | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeScopeIdPut**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopescopeidput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope/{scope-id} | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeScopeIdResourcesGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopescopeidresourcesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope/{scope-id}/resources | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerScopeSearchGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserverscopesearchget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/scope/search | 
*DefaultApi* | [**adminRealmsRealmClientsClientUuidAuthzResourceServerSettingsGet**](docs/Api/DefaultApi.md#adminrealmsrealmclientsclientuuidauthzresourceserversettingsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/authz/resource-server/settings | 
*GroupsApi* | [**adminRealmsRealmGroupsCountGet**](docs/Api/GroupsApi.md#adminrealmsrealmgroupscountget) | **GET** /admin/realms/{realm}/groups/count | Returns the groups counts.
*GroupsApi* | [**adminRealmsRealmGroupsGet**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsget) | **GET** /admin/realms/{realm}/groups | Get group hierarchy.  Only name and ids are returned.
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdChildrenGet**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidchildrenget) | **GET** /admin/realms/{realm}/groups/{group-id}/children | Return a paginated list of subgroups that have a parent group corresponding to the group on the URL
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdChildrenPost**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidchildrenpost) | **POST** /admin/realms/{realm}/groups/{group-id}/children | Set or create child.
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdDelete**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupiddelete) | **DELETE** /admin/realms/{realm}/groups/{group-id} | 
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdGet**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidget) | **GET** /admin/realms/{realm}/groups/{group-id} | 
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdManagementPermissionsGet**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidmanagementpermissionsget) | **GET** /admin/realms/{realm}/groups/{group-id}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdManagementPermissionsPut**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidmanagementpermissionsput) | **PUT** /admin/realms/{realm}/groups/{group-id}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdMembersGet**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidmembersget) | **GET** /admin/realms/{realm}/groups/{group-id}/members | Get users Returns a stream of users, filtered according to query parameters
*GroupsApi* | [**adminRealmsRealmGroupsGroupIdPut**](docs/Api/GroupsApi.md#adminrealmsrealmgroupsgroupidput) | **PUT** /admin/realms/{realm}/groups/{group-id} | Update group, ignores subgroups.
*GroupsApi* | [**adminRealmsRealmGroupsPost**](docs/Api/GroupsApi.md#adminrealmsrealmgroupspost) | **POST** /admin/realms/{realm}/groups | create or add a top level realm groupSet or create child.
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderImportConfigPost**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderimportconfigpost) | **POST** /admin/realms/{realm}/identity-provider/import-config | Import identity provider from JSON body
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasDelete**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasdelete) | **DELETE** /admin/realms/{realm}/identity-provider/instances/{alias} | Delete the identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasExportGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasexportget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/export | Export public broker configuration for identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias} | Get the identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmanagementpermissionsget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasManagementPermissionsPut**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmanagementpermissionsput) | **PUT** /admin/realms/{realm}/identity-provider/instances/{alias}/management/permissions | Return object stating whether client Authorization permissions have been initialized or not and a reference
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasMapperTypesGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmappertypesget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/mapper-types | Get mapper types for identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasMappersGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmappersget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers | Get mappers for identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasMappersIdDelete**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmappersiddelete) | **DELETE** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers/{id} | Delete a mapper for the identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasMappersIdGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmappersidget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers/{id} | Get mapper by id for the identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasMappersIdPut**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmappersidput) | **PUT** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers/{id} | Update a mapper for the identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasMappersPost**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasmapperspost) | **POST** /admin/realms/{realm}/identity-provider/instances/{alias}/mappers | Add a mapper to identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasPut**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasput) | **PUT** /admin/realms/{realm}/identity-provider/instances/{alias} | Update the identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesAliasReloadKeysGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesaliasreloadkeysget) | **GET** /admin/realms/{realm}/identity-provider/instances/{alias}/reload-keys | Reaload keys for the identity provider if the provider supports it, \&quot;true\&quot; is returned if reload was performed, \&quot;false\&quot; if not.
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancesget) | **GET** /admin/realms/{realm}/identity-provider/instances | List identity providers
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderInstancesPost**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderinstancespost) | **POST** /admin/realms/{realm}/identity-provider/instances | Create a new identity provider
*IdentityProvidersApi* | [**adminRealmsRealmIdentityProviderProvidersProviderIdGet**](docs/Api/IdentityProvidersApi.md#adminrealmsrealmidentityproviderprovidersprovideridget) | **GET** /admin/realms/{realm}/identity-provider/providers/{provider_id} | Get the identity provider factory for that provider id
*KeyApi* | [**adminRealmsRealmKeysGet**](docs/Api/KeyApi.md#adminrealmsrealmkeysget) | **GET** /admin/realms/{realm}/keys | 
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersAddModelsPost**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersaddmodelspost) | **POST** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/add-models | Create multiple mappers
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersModelsGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersmodelsget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/models | Get mappers
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersModelsIdDelete**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersmodelsiddelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/models/{id} | Delete the mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersModelsIdGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersmodelsidget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/models/{id} | Get mapper by id
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersModelsIdPut**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersmodelsidput) | **PUT** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/models/{id} | Update the mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersModelsPost**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersmodelspost) | **POST** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/models | Create a mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientScopesClientScopeIdProtocolMappersProtocolProtocolGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientscopesclientscopeidprotocolmappersprotocolprotocolget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/protocol-mappers/protocol/{protocol} | Get mappers by name for a specific protocol
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersAddModelsPost**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersaddmodelspost) | **POST** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/add-models | Create multiple mappers
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersModelsGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersmodelsget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/models | Get mappers
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersModelsIdDelete**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersmodelsiddelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/models/{id} | Delete the mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersModelsIdGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersmodelsidget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/models/{id} | Get mapper by id
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersModelsIdPut**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersmodelsidput) | **PUT** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/models/{id} | Update the mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersModelsPost**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersmodelspost) | **POST** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/models | Create a mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientTemplatesClientScopeIdProtocolMappersProtocolProtocolGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclienttemplatesclientscopeidprotocolmappersprotocolprotocolget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/protocol-mappers/protocol/{protocol} | Get mappers by name for a specific protocol
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersAddModelsPost**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersaddmodelspost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/add-models | Create multiple mappers
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersModelsGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersmodelsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/models | Get mappers
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersModelsIdDelete**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersmodelsiddelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/models/{id} | Delete the mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersModelsIdGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersmodelsidget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/models/{id} | Get mapper by id
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersModelsIdPut**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersmodelsidput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/models/{id} | Update the mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersModelsPost**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersmodelspost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/models | Create a mapper
*ProtocolMappersApi* | [**adminRealmsRealmClientsClientUuidProtocolMappersProtocolProtocolGet**](docs/Api/ProtocolMappersApi.md#adminrealmsrealmclientsclientuuidprotocolmappersprotocolprotocolget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/protocol-mappers/protocol/{protocol} | Get mappers by name for a specific protocol
*RealmsAdminApi* | [**adminRealmsGet**](docs/Api/RealmsAdminApi.md#adminrealmsget) | **GET** /admin/realms | Get accessible realms Returns a list of accessible realms. The list is filtered based on what realms the caller is allowed to view.
*RealmsAdminApi* | [**adminRealmsPost**](docs/Api/RealmsAdminApi.md#adminrealmspost) | **POST** /admin/realms | Import a realm. Imports a realm from a full representation of that realm.
*RealmsAdminApi* | [**adminRealmsRealmAdminEventsDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmadmineventsdelete) | **DELETE** /admin/realms/{realm}/admin-events | Delete all admin events
*RealmsAdminApi* | [**adminRealmsRealmAdminEventsGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmadmineventsget) | **GET** /admin/realms/{realm}/admin-events | Get admin events Returns all admin events, or filters events based on URL query parameters listed here
*RealmsAdminApi* | [**adminRealmsRealmClientDescriptionConverterPost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclientdescriptionconverterpost) | **POST** /admin/realms/{realm}/client-description-converter | Base path for importing clients under this realm.
*RealmsAdminApi* | [**adminRealmsRealmClientPoliciesPoliciesGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclientpoliciespoliciesget) | **GET** /admin/realms/{realm}/client-policies/policies | 
*RealmsAdminApi* | [**adminRealmsRealmClientPoliciesPoliciesPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclientpoliciespoliciesput) | **PUT** /admin/realms/{realm}/client-policies/policies | 
*RealmsAdminApi* | [**adminRealmsRealmClientPoliciesProfilesGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclientpoliciesprofilesget) | **GET** /admin/realms/{realm}/client-policies/profiles | 
*RealmsAdminApi* | [**adminRealmsRealmClientPoliciesProfilesPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclientpoliciesprofilesput) | **PUT** /admin/realms/{realm}/client-policies/profiles | 
*RealmsAdminApi* | [**adminRealmsRealmClientSessionStatsGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclientsessionstatsget) | **GET** /admin/realms/{realm}/client-session-stats | Get client session stats Returns a JSON map.
*RealmsAdminApi* | [**adminRealmsRealmClientTypesGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclienttypesget) | **GET** /admin/realms/{realm}/client-types | List all client types available in the current realm
*RealmsAdminApi* | [**adminRealmsRealmClientTypesPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmclienttypesput) | **PUT** /admin/realms/{realm}/client-types | Update a client type
*RealmsAdminApi* | [**adminRealmsRealmCredentialRegistratorsGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmcredentialregistratorsget) | **GET** /admin/realms/{realm}/credential-registrators | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultDefaultClientScopesClientScopeIdDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultdefaultclientscopesclientscopeiddelete) | **DELETE** /admin/realms/{realm}/default-default-client-scopes/{clientScopeId} | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultDefaultClientScopesClientScopeIdPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultdefaultclientscopesclientscopeidput) | **PUT** /admin/realms/{realm}/default-default-client-scopes/{clientScopeId} | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultDefaultClientScopesGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultdefaultclientscopesget) | **GET** /admin/realms/{realm}/default-default-client-scopes | Get realm default client scopes.  Only name and ids are returned.
*RealmsAdminApi* | [**adminRealmsRealmDefaultGroupsGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultgroupsget) | **GET** /admin/realms/{realm}/default-groups | Get group hierarchy.  Only name and ids are returned.
*RealmsAdminApi* | [**adminRealmsRealmDefaultGroupsGroupIdDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultgroupsgroupiddelete) | **DELETE** /admin/realms/{realm}/default-groups/{groupId} | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultGroupsGroupIdPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultgroupsgroupidput) | **PUT** /admin/realms/{realm}/default-groups/{groupId} | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultOptionalClientScopesClientScopeIdDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultoptionalclientscopesclientscopeiddelete) | **DELETE** /admin/realms/{realm}/default-optional-client-scopes/{clientScopeId} | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultOptionalClientScopesClientScopeIdPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultoptionalclientscopesclientscopeidput) | **PUT** /admin/realms/{realm}/default-optional-client-scopes/{clientScopeId} | 
*RealmsAdminApi* | [**adminRealmsRealmDefaultOptionalClientScopesGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdefaultoptionalclientscopesget) | **GET** /admin/realms/{realm}/default-optional-client-scopes | Get realm optional client scopes.  Only name and ids are returned.
*RealmsAdminApi* | [**adminRealmsRealmDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmdelete) | **DELETE** /admin/realms/{realm} | Delete the realm
*RealmsAdminApi* | [**adminRealmsRealmEventsConfigGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmeventsconfigget) | **GET** /admin/realms/{realm}/events/config | Get the events provider configuration Returns JSON object with events provider configuration
*RealmsAdminApi* | [**adminRealmsRealmEventsConfigPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmeventsconfigput) | **PUT** /admin/realms/{realm}/events/config | 
*RealmsAdminApi* | [**adminRealmsRealmEventsDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmeventsdelete) | **DELETE** /admin/realms/{realm}/events | Delete all events
*RealmsAdminApi* | [**adminRealmsRealmEventsGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmeventsget) | **GET** /admin/realms/{realm}/events | Get events Returns all events, or filters them based on URL query parameters listed here
*RealmsAdminApi* | [**adminRealmsRealmGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmget) | **GET** /admin/realms/{realm} | Get the top-level representation of the realm It will not include nested information like User and Client representations.
*RealmsAdminApi* | [**adminRealmsRealmGroupByPathPathGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmgroupbypathpathget) | **GET** /admin/realms/{realm}/group-by-path/{path} | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationget) | **GET** /admin/realms/{realm}/localization | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationLocaleDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationlocaledelete) | **DELETE** /admin/realms/{realm}/localization/{locale} | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationLocaleGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationlocaleget) | **GET** /admin/realms/{realm}/localization/{locale} | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationLocaleKeyDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationlocalekeydelete) | **DELETE** /admin/realms/{realm}/localization/{locale}/{key} | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationLocaleKeyGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationlocalekeyget) | **GET** /admin/realms/{realm}/localization/{locale}/{key} | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationLocaleKeyPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationlocalekeyput) | **PUT** /admin/realms/{realm}/localization/{locale}/{key} | 
*RealmsAdminApi* | [**adminRealmsRealmLocalizationLocalePost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlocalizationlocalepost) | **POST** /admin/realms/{realm}/localization/{locale} | Import localization from uploaded JSON file
*RealmsAdminApi* | [**adminRealmsRealmLogoutAllPost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmlogoutallpost) | **POST** /admin/realms/{realm}/logout-all | Removes all user sessions.
*RealmsAdminApi* | [**adminRealmsRealmPartialExportPost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmpartialexportpost) | **POST** /admin/realms/{realm}/partial-export | Partial export of existing realm into a JSON file.
*RealmsAdminApi* | [**adminRealmsRealmPartialImportPost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmpartialimportpost) | **POST** /admin/realms/{realm}/partialImport | Partial import from a JSON file to an existing realm.
*RealmsAdminApi* | [**adminRealmsRealmPushRevocationPost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmpushrevocationpost) | **POST** /admin/realms/{realm}/push-revocation | Push the realm&#39;s revocation policy to any client that has an admin url associated with it.
*RealmsAdminApi* | [**adminRealmsRealmPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmput) | **PUT** /admin/realms/{realm} | Update the top-level information of the realm Any user, roles or client information in the representation will be ignored.
*RealmsAdminApi* | [**adminRealmsRealmSessionsSessionDelete**](docs/Api/RealmsAdminApi.md#adminrealmsrealmsessionssessiondelete) | **DELETE** /admin/realms/{realm}/sessions/{session} | Remove a specific user session.
*RealmsAdminApi* | [**adminRealmsRealmTestSMTPConnectionPost**](docs/Api/RealmsAdminApi.md#adminrealmsrealmtestsmtpconnectionpost) | **POST** /admin/realms/{realm}/testSMTPConnection | Test SMTP connection with current logged in user
*RealmsAdminApi* | [**adminRealmsRealmUsersManagementPermissionsGet**](docs/Api/RealmsAdminApi.md#adminrealmsrealmusersmanagementpermissionsget) | **GET** /admin/realms/{realm}/users-management-permissions | 
*RealmsAdminApi* | [**adminRealmsRealmUsersManagementPermissionsPut**](docs/Api/RealmsAdminApi.md#adminrealmsrealmusersmanagementpermissionsput) | **PUT** /admin/realms/{realm}/users-management-permissions | 
*RoleMapperApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmgroupsgroupidrolemappingsget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings | Get role mappings
*RoleMapperApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmAvailableGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmgroupsgroupidrolemappingsrealmavailableget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm/available | Get realm-level roles that can be mapped
*RoleMapperApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmCompositeGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmgroupsgroupidrolemappingsrealmcompositeget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm/composite | Get effective realm-level role mappings This will recurse all composite roles to get the result.
*RoleMapperApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmDelete**](docs/Api/RoleMapperApi.md#adminrealmsrealmgroupsgroupidrolemappingsrealmdelete) | **DELETE** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm | Delete realm-level role mappings
*RoleMapperApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmgroupsgroupidrolemappingsrealmget) | **GET** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm | Get realm-level role mappings
*RoleMapperApi* | [**adminRealmsRealmGroupsGroupIdRoleMappingsRealmPost**](docs/Api/RoleMapperApi.md#adminrealmsrealmgroupsgroupidrolemappingsrealmpost) | **POST** /admin/realms/{realm}/groups/{group-id}/role-mappings/realm | Add realm-level role mappings to the user
*RoleMapperApi* | [**adminRealmsRealmUsersUserIdRoleMappingsGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmusersuseridrolemappingsget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings | Get role mappings
*RoleMapperApi* | [**adminRealmsRealmUsersUserIdRoleMappingsRealmAvailableGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmusersuseridrolemappingsrealmavailableget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/realm/available | Get realm-level roles that can be mapped
*RoleMapperApi* | [**adminRealmsRealmUsersUserIdRoleMappingsRealmCompositeGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmusersuseridrolemappingsrealmcompositeget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/realm/composite | Get effective realm-level role mappings This will recurse all composite roles to get the result.
*RoleMapperApi* | [**adminRealmsRealmUsersUserIdRoleMappingsRealmDelete**](docs/Api/RoleMapperApi.md#adminrealmsrealmusersuseridrolemappingsrealmdelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/role-mappings/realm | Delete realm-level role mappings
*RoleMapperApi* | [**adminRealmsRealmUsersUserIdRoleMappingsRealmGet**](docs/Api/RoleMapperApi.md#adminrealmsrealmusersuseridrolemappingsrealmget) | **GET** /admin/realms/{realm}/users/{user-id}/role-mappings/realm | Get realm-level role mappings
*RoleMapperApi* | [**adminRealmsRealmUsersUserIdRoleMappingsRealmPost**](docs/Api/RoleMapperApi.md#adminrealmsrealmusersuseridrolemappingsrealmpost) | **POST** /admin/realms/{realm}/users/{user-id}/role-mappings/realm | Add realm-level role mappings to the user
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles | Get all roles for the realm or client
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesPost**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolespost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/roles | Create a new role for the realm or client
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesClientsClientUuidGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamecompositesclientsclientuuidget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites/clients/{client-uuid} | Get client-level roles for the client that are in the role&#39;s composite
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesDelete**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamecompositesdelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites | Remove roles from the role&#39;s composite
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamecompositesget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites | Get composites of the role
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesPost**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamecompositespost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites | Add a composite to the role
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameCompositesRealmGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamecompositesrealmget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/composites/realm | Get realm-level roles of the role&#39;s composite
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameDelete**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamedelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name} | Delete a role by name
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenameget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name} | Get a role by name
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameGroupsGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamegroupsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/groups | Returns a stream of groups that have the specified role name
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamemanagementpermissionsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameManagementPermissionsPut**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenamemanagementpermissionsput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNamePut**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenameput) | **PUT** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name} | Update a role by name
*RolesApi* | [**adminRealmsRealmClientsClientUuidRolesRoleNameUsersGet**](docs/Api/RolesApi.md#adminrealmsrealmclientsclientuuidrolesrolenameusersget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/roles/{role-name}/users | Returns a stream of users that have the specified role name.
*RolesApi* | [**adminRealmsRealmRolesGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesget) | **GET** /admin/realms/{realm}/roles | Get all roles for the realm or client
*RolesApi* | [**adminRealmsRealmRolesPost**](docs/Api/RolesApi.md#adminrealmsrealmrolespost) | **POST** /admin/realms/{realm}/roles | Create a new role for the realm or client
*RolesApi* | [**adminRealmsRealmRolesRoleNameCompositesClientsClientUuidGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamecompositesclientsclientuuidget) | **GET** /admin/realms/{realm}/roles/{role-name}/composites/clients/{client-uuid} | Get client-level roles for the client that are in the role&#39;s composite
*RolesApi* | [**adminRealmsRealmRolesRoleNameCompositesDelete**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamecompositesdelete) | **DELETE** /admin/realms/{realm}/roles/{role-name}/composites | Remove roles from the role&#39;s composite
*RolesApi* | [**adminRealmsRealmRolesRoleNameCompositesGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamecompositesget) | **GET** /admin/realms/{realm}/roles/{role-name}/composites | Get composites of the role
*RolesApi* | [**adminRealmsRealmRolesRoleNameCompositesPost**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamecompositespost) | **POST** /admin/realms/{realm}/roles/{role-name}/composites | Add a composite to the role
*RolesApi* | [**adminRealmsRealmRolesRoleNameCompositesRealmGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamecompositesrealmget) | **GET** /admin/realms/{realm}/roles/{role-name}/composites/realm | Get realm-level roles of the role&#39;s composite
*RolesApi* | [**adminRealmsRealmRolesRoleNameDelete**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamedelete) | **DELETE** /admin/realms/{realm}/roles/{role-name} | Delete a role by name
*RolesApi* | [**adminRealmsRealmRolesRoleNameGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenameget) | **GET** /admin/realms/{realm}/roles/{role-name} | Get a role by name
*RolesApi* | [**adminRealmsRealmRolesRoleNameGroupsGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamegroupsget) | **GET** /admin/realms/{realm}/roles/{role-name}/groups | Returns a stream of groups that have the specified role name
*RolesApi* | [**adminRealmsRealmRolesRoleNameManagementPermissionsGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamemanagementpermissionsget) | **GET** /admin/realms/{realm}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference
*RolesApi* | [**adminRealmsRealmRolesRoleNameManagementPermissionsPut**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenamemanagementpermissionsput) | **PUT** /admin/realms/{realm}/roles/{role-name}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference
*RolesApi* | [**adminRealmsRealmRolesRoleNamePut**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenameput) | **PUT** /admin/realms/{realm}/roles/{role-name} | Update a role by name
*RolesApi* | [**adminRealmsRealmRolesRoleNameUsersGet**](docs/Api/RolesApi.md#adminrealmsrealmrolesrolenameusersget) | **GET** /admin/realms/{realm}/roles/{role-name}/users | Returns a stream of users that have the specified role name.
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdCompositesClientsClientUuidGet**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidcompositesclientsclientuuidget) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/composites/clients/{clientUuid} | Get client-level roles for the client that are in the role&#39;s composite
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdCompositesDelete**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidcompositesdelete) | **DELETE** /admin/realms/{realm}/roles-by-id/{role-id}/composites | Remove a set of roles from the role&#39;s composite
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdCompositesGet**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidcompositesget) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/composites | Get role&#39;s children Returns a set of role&#39;s children provided the role is a composite.
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdCompositesPost**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidcompositespost) | **POST** /admin/realms/{realm}/roles-by-id/{role-id}/composites | Make the role a composite role by associating some child roles
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdCompositesRealmGet**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidcompositesrealmget) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/composites/realm | Get realm-level roles that are in the role&#39;s composite
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdDelete**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleiddelete) | **DELETE** /admin/realms/{realm}/roles-by-id/{role-id} | Delete the role
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdGet**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidget) | **GET** /admin/realms/{realm}/roles-by-id/{role-id} | Get a specific role&#39;s representation
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdManagementPermissionsGet**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidmanagementpermissionsget) | **GET** /admin/realms/{realm}/roles-by-id/{role-id}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdManagementPermissionsPut**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidmanagementpermissionsput) | **PUT** /admin/realms/{realm}/roles-by-id/{role-id}/management/permissions | Return object stating whether role Authorization permissions have been initialized or not and a reference
*RolesByIDApi* | [**adminRealmsRealmRolesByIdRoleIdPut**](docs/Api/RolesByIDApi.md#adminrealmsrealmrolesbyidroleidput) | **PUT** /admin/realms/{realm}/roles-by-id/{role-id} | Update the role
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientAvailableGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsclientsclientavailableget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client}/available | The available client-level roles Returns the roles for the client that can be associated with the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientCompositeGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsclientsclientcompositeget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client}/composite | Get effective client roles Returns the roles for the client that are associated with the client&#39;s scope.
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientDelete**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsclientsclientdelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client} | Remove client-level roles from the client&#39;s scope.
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsclientsclientget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client} | Get the roles associated with a client&#39;s scope Returns roles for the client.
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsClientsClientPost**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsclientsclientpost) | **POST** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/clients/{client} | Add client-level roles to the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings | Get all scope mappings for the client
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmAvailableGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsrealmavailableget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm/available | Get realm-level roles that are available to attach to this client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmCompositeGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsrealmcompositeget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm/composite | Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists.
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmDelete**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsrealmdelete) | **DELETE** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm | Remove a set of realm-level roles from the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsrealmget) | **GET** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm | Get realm-level roles associated with the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientScopesClientScopeIdScopeMappingsRealmPost**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientscopesclientscopeidscopemappingsrealmpost) | **POST** /admin/realms/{realm}/client-scopes/{client-scope-id}/scope-mappings/realm | Add a set of realm-level roles to the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientAvailableGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsclientsclientavailableget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client}/available | The available client-level roles Returns the roles for the client that can be associated with the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientCompositeGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsclientsclientcompositeget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client}/composite | Get effective client roles Returns the roles for the client that are associated with the client&#39;s scope.
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientDelete**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsclientsclientdelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client} | Remove client-level roles from the client&#39;s scope.
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsclientsclientget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client} | Get the roles associated with a client&#39;s scope Returns roles for the client.
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsClientsClientPost**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsclientsclientpost) | **POST** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/clients/{client} | Add client-level roles to the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings | Get all scope mappings for the client
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmAvailableGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsrealmavailableget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm/available | Get realm-level roles that are available to attach to this client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmCompositeGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsrealmcompositeget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm/composite | Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists.
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmDelete**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsrealmdelete) | **DELETE** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm | Remove a set of realm-level roles from the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsrealmget) | **GET** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm | Get realm-level roles associated with the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientTemplatesClientScopeIdScopeMappingsRealmPost**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclienttemplatesclientscopeidscopemappingsrealmpost) | **POST** /admin/realms/{realm}/client-templates/{client-scope-id}/scope-mappings/realm | Add a set of realm-level roles to the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientAvailableGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsclientsclientavailableget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client}/available | The available client-level roles Returns the roles for the client that can be associated with the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientCompositeGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsclientsclientcompositeget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client}/composite | Get effective client roles Returns the roles for the client that are associated with the client&#39;s scope.
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientDelete**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsclientsclientdelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client} | Remove client-level roles from the client&#39;s scope.
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsclientsclientget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client} | Get the roles associated with a client&#39;s scope Returns roles for the client.
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsClientsClientPost**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsclientsclientpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/clients/{client} | Add client-level roles to the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings | Get all scope mappings for the client
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsRealmAvailableGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsrealmavailableget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm/available | Get realm-level roles that are available to attach to this client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsRealmCompositeGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsrealmcompositeget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm/composite | Get effective realm-level roles associated with the client’s scope What this does is recurse any composite roles associated with the client’s scope and adds the roles to this lists.
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsRealmDelete**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsrealmdelete) | **DELETE** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm | Remove a set of realm-level roles from the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsRealmGet**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsrealmget) | **GET** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm | Get realm-level roles associated with the client&#39;s scope
*ScopeMappingsApi* | [**adminRealmsRealmClientsClientUuidScopeMappingsRealmPost**](docs/Api/ScopeMappingsApi.md#adminrealmsrealmclientsclientuuidscopemappingsrealmpost) | **POST** /admin/realms/{realm}/clients/{client-uuid}/scope-mappings/realm | Add a set of realm-level roles to the client&#39;s scope
*UsersApi* | [**adminRealmsRealmUsersCountGet**](docs/Api/UsersApi.md#adminrealmsrealmuserscountget) | **GET** /admin/realms/{realm}/users/count | Returns the number of users that match the given criteria.
*UsersApi* | [**adminRealmsRealmUsersGet**](docs/Api/UsersApi.md#adminrealmsrealmusersget) | **GET** /admin/realms/{realm}/users | Get users Returns a stream of users, filtered according to query parameters.
*UsersApi* | [**adminRealmsRealmUsersPost**](docs/Api/UsersApi.md#adminrealmsrealmuserspost) | **POST** /admin/realms/{realm}/users | Create a new user Username must be unique.
*UsersApi* | [**adminRealmsRealmUsersProfileGet**](docs/Api/UsersApi.md#adminrealmsrealmusersprofileget) | **GET** /admin/realms/{realm}/users/profile | 
*UsersApi* | [**adminRealmsRealmUsersProfileMetadataGet**](docs/Api/UsersApi.md#adminrealmsrealmusersprofilemetadataget) | **GET** /admin/realms/{realm}/users/profile/metadata | 
*UsersApi* | [**adminRealmsRealmUsersProfilePut**](docs/Api/UsersApi.md#adminrealmsrealmusersprofileput) | **PUT** /admin/realms/{realm}/users/profile | 
*UsersApi* | [**adminRealmsRealmUsersUserIdConfiguredUserStorageCredentialTypesGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridconfigureduserstoragecredentialtypesget) | **GET** /admin/realms/{realm}/users/{user-id}/configured-user-storage-credential-types | Return credential types, which are provided by the user storage where user is stored.
*UsersApi* | [**adminRealmsRealmUsersUserIdConsentsClientDelete**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridconsentsclientdelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/consents/{client} | Revoke consent and offline tokens for particular client from user
*UsersApi* | [**adminRealmsRealmUsersUserIdConsentsGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridconsentsget) | **GET** /admin/realms/{realm}/users/{user-id}/consents | Get consents granted by the user
*UsersApi* | [**adminRealmsRealmUsersUserIdCredentialsCredentialIdDelete**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridcredentialscredentialiddelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId} | Remove a credential for a user
*UsersApi* | [**adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveAfterNewPreviousCredentialIdPost**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridcredentialscredentialidmoveafternewpreviouscredentialidpost) | **POST** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId}/moveAfter/{newPreviousCredentialId} | Move a credential to a position behind another credential
*UsersApi* | [**adminRealmsRealmUsersUserIdCredentialsCredentialIdMoveToFirstPost**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridcredentialscredentialidmovetofirstpost) | **POST** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId}/moveToFirst | Move a credential to a first position in the credentials list of the user
*UsersApi* | [**adminRealmsRealmUsersUserIdCredentialsCredentialIdUserLabelPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridcredentialscredentialiduserlabelput) | **PUT** /admin/realms/{realm}/users/{user-id}/credentials/{credentialId}/userLabel | Update a credential label for a user
*UsersApi* | [**adminRealmsRealmUsersUserIdCredentialsGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridcredentialsget) | **GET** /admin/realms/{realm}/users/{user-id}/credentials | 
*UsersApi* | [**adminRealmsRealmUsersUserIdDelete**](docs/Api/UsersApi.md#adminrealmsrealmusersuseriddelete) | **DELETE** /admin/realms/{realm}/users/{user-id} | Delete the user
*UsersApi* | [**adminRealmsRealmUsersUserIdDisableCredentialTypesPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseriddisablecredentialtypesput) | **PUT** /admin/realms/{realm}/users/{user-id}/disable-credential-types | Disable all credentials for a user of a specific type
*UsersApi* | [**adminRealmsRealmUsersUserIdExecuteActionsEmailPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridexecuteactionsemailput) | **PUT** /admin/realms/{realm}/users/{user-id}/execute-actions-email | Send an email to the user with a link they can click to execute particular actions.
*UsersApi* | [**adminRealmsRealmUsersUserIdFederatedIdentityGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridfederatedidentityget) | **GET** /admin/realms/{realm}/users/{user-id}/federated-identity | Get social logins associated with the user
*UsersApi* | [**adminRealmsRealmUsersUserIdFederatedIdentityProviderDelete**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridfederatedidentityproviderdelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/federated-identity/{provider} | Remove a social login provider from user
*UsersApi* | [**adminRealmsRealmUsersUserIdFederatedIdentityProviderPost**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridfederatedidentityproviderpost) | **POST** /admin/realms/{realm}/users/{user-id}/federated-identity/{provider} | Add a social login provider to the user
*UsersApi* | [**adminRealmsRealmUsersUserIdGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridget) | **GET** /admin/realms/{realm}/users/{user-id} | Get representation of the user
*UsersApi* | [**adminRealmsRealmUsersUserIdGroupsCountGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridgroupscountget) | **GET** /admin/realms/{realm}/users/{user-id}/groups/count | 
*UsersApi* | [**adminRealmsRealmUsersUserIdGroupsGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridgroupsget) | **GET** /admin/realms/{realm}/users/{user-id}/groups | 
*UsersApi* | [**adminRealmsRealmUsersUserIdGroupsGroupIdDelete**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridgroupsgroupiddelete) | **DELETE** /admin/realms/{realm}/users/{user-id}/groups/{groupId} | 
*UsersApi* | [**adminRealmsRealmUsersUserIdGroupsGroupIdPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridgroupsgroupidput) | **PUT** /admin/realms/{realm}/users/{user-id}/groups/{groupId} | 
*UsersApi* | [**adminRealmsRealmUsersUserIdImpersonationPost**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridimpersonationpost) | **POST** /admin/realms/{realm}/users/{user-id}/impersonation | Impersonate the user
*UsersApi* | [**adminRealmsRealmUsersUserIdLogoutPost**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridlogoutpost) | **POST** /admin/realms/{realm}/users/{user-id}/logout | Remove all user sessions associated with the user Also send notification to all clients that have an admin URL to invalidate the sessions for the particular user.
*UsersApi* | [**adminRealmsRealmUsersUserIdOfflineSessionsClientUuidGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridofflinesessionsclientuuidget) | **GET** /admin/realms/{realm}/users/{user-id}/offline-sessions/{clientUuid} | Get offline sessions associated with the user and client
*UsersApi* | [**adminRealmsRealmUsersUserIdPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridput) | **PUT** /admin/realms/{realm}/users/{user-id} | Update the user
*UsersApi* | [**adminRealmsRealmUsersUserIdResetPasswordEmailPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridresetpasswordemailput) | **PUT** /admin/realms/{realm}/users/{user-id}/reset-password-email | Send an email to the user with a link they can click to reset their password.
*UsersApi* | [**adminRealmsRealmUsersUserIdResetPasswordPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridresetpasswordput) | **PUT** /admin/realms/{realm}/users/{user-id}/reset-password | Set up a new password for the user.
*UsersApi* | [**adminRealmsRealmUsersUserIdSendVerifyEmailPut**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridsendverifyemailput) | **PUT** /admin/realms/{realm}/users/{user-id}/send-verify-email | Send an email-verification email to the user An email contains a link the user can click to verify their email address.
*UsersApi* | [**adminRealmsRealmUsersUserIdSessionsGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridsessionsget) | **GET** /admin/realms/{realm}/users/{user-id}/sessions | Get sessions associated with the user
*UsersApi* | [**adminRealmsRealmUsersUserIdUnmanagedAttributesGet**](docs/Api/UsersApi.md#adminrealmsrealmusersuseridunmanagedattributesget) | **GET** /admin/realms/{realm}/users/{user-id}/unmanagedAttributes | 

## Models

- [AbstractPolicyRepresentation](docs/Model/AbstractPolicyRepresentation.md)
- [Access](docs/Model/Access.md)
- [AccessToken](docs/Model/AccessToken.md)
- [AddressClaimSet](docs/Model/AddressClaimSet.md)
- [AdminEventRepresentation](docs/Model/AdminEventRepresentation.md)
- [ApplicationRepresentation](docs/Model/ApplicationRepresentation.md)
- [AuthDetailsRepresentation](docs/Model/AuthDetailsRepresentation.md)
- [AuthenticationExecutionExportRepresentation](docs/Model/AuthenticationExecutionExportRepresentation.md)
- [AuthenticationExecutionInfoRepresentation](docs/Model/AuthenticationExecutionInfoRepresentation.md)
- [AuthenticationExecutionRepresentation](docs/Model/AuthenticationExecutionRepresentation.md)
- [AuthenticationFlowRepresentation](docs/Model/AuthenticationFlowRepresentation.md)
- [AuthenticatorConfigInfoRepresentation](docs/Model/AuthenticatorConfigInfoRepresentation.md)
- [AuthenticatorConfigRepresentation](docs/Model/AuthenticatorConfigRepresentation.md)
- [Authorization](docs/Model/Authorization.md)
- [CertificateRepresentation](docs/Model/CertificateRepresentation.md)
- [ClaimRepresentation](docs/Model/ClaimRepresentation.md)
- [ClientInitialAccessCreatePresentation](docs/Model/ClientInitialAccessCreatePresentation.md)
- [ClientInitialAccessPresentation](docs/Model/ClientInitialAccessPresentation.md)
- [ClientMappingsRepresentation](docs/Model/ClientMappingsRepresentation.md)
- [ClientPoliciesRepresentation](docs/Model/ClientPoliciesRepresentation.md)
- [ClientPolicyConditionRepresentation](docs/Model/ClientPolicyConditionRepresentation.md)
- [ClientPolicyExecutorRepresentation](docs/Model/ClientPolicyExecutorRepresentation.md)
- [ClientPolicyRepresentation](docs/Model/ClientPolicyRepresentation.md)
- [ClientProfileRepresentation](docs/Model/ClientProfileRepresentation.md)
- [ClientProfilesRepresentation](docs/Model/ClientProfilesRepresentation.md)
- [ClientRepresentation](docs/Model/ClientRepresentation.md)
- [ClientScopeRepresentation](docs/Model/ClientScopeRepresentation.md)
- [ClientTemplateRepresentation](docs/Model/ClientTemplateRepresentation.md)
- [ClientTypeRepresentation](docs/Model/ClientTypeRepresentation.md)
- [ClientTypesRepresentation](docs/Model/ClientTypesRepresentation.md)
- [ComponentExportRepresentation](docs/Model/ComponentExportRepresentation.md)
- [ComponentRepresentation](docs/Model/ComponentRepresentation.md)
- [ComponentTypeRepresentation](docs/Model/ComponentTypeRepresentation.md)
- [Composites](docs/Model/Composites.md)
- [ConfigPropertyRepresentation](docs/Model/ConfigPropertyRepresentation.md)
- [Confirmation](docs/Model/Confirmation.md)
- [CredentialRepresentation](docs/Model/CredentialRepresentation.md)
- [DecisionEffect](docs/Model/DecisionEffect.md)
- [DecisionStrategy](docs/Model/DecisionStrategy.md)
- [EnforcementMode](docs/Model/EnforcementMode.md)
- [EvaluationResultRepresentation](docs/Model/EvaluationResultRepresentation.md)
- [EventRepresentation](docs/Model/EventRepresentation.md)
- [FederatedIdentityRepresentation](docs/Model/FederatedIdentityRepresentation.md)
- [GlobalRequestResult](docs/Model/GlobalRequestResult.md)
- [GroupRepresentation](docs/Model/GroupRepresentation.md)
- [IDToken](docs/Model/IDToken.md)
- [IdentityProviderMapperRepresentation](docs/Model/IdentityProviderMapperRepresentation.md)
- [IdentityProviderMapperTypeRepresentation](docs/Model/IdentityProviderMapperTypeRepresentation.md)
- [IdentityProviderRepresentation](docs/Model/IdentityProviderRepresentation.md)
- [InstallationAdapterConfig](docs/Model/InstallationAdapterConfig.md)
- [KeyMetadataRepresentation](docs/Model/KeyMetadataRepresentation.md)
- [KeyStoreConfig](docs/Model/KeyStoreConfig.md)
- [KeyUse](docs/Model/KeyUse.md)
- [KeysMetadataRepresentation](docs/Model/KeysMetadataRepresentation.md)
- [Logic](docs/Model/Logic.md)
- [ManagementPermissionReference](docs/Model/ManagementPermissionReference.md)
- [MappingsRepresentation](docs/Model/MappingsRepresentation.md)
- [MethodConfig](docs/Model/MethodConfig.md)
- [OAuthClientRepresentation](docs/Model/OAuthClientRepresentation.md)
- [OrganizationDomainRepresentation](docs/Model/OrganizationDomainRepresentation.md)
- [OrganizationRepresentation](docs/Model/OrganizationRepresentation.md)
- [PathCacheConfig](docs/Model/PathCacheConfig.md)
- [PathConfig](docs/Model/PathConfig.md)
- [Permission](docs/Model/Permission.md)
- [PolicyEnforcementMode](docs/Model/PolicyEnforcementMode.md)
- [PolicyEnforcerConfig](docs/Model/PolicyEnforcerConfig.md)
- [PolicyEvaluationRequest](docs/Model/PolicyEvaluationRequest.md)
- [PolicyEvaluationResponse](docs/Model/PolicyEvaluationResponse.md)
- [PolicyProviderRepresentation](docs/Model/PolicyProviderRepresentation.md)
- [PolicyRepresentation](docs/Model/PolicyRepresentation.md)
- [PolicyResultRepresentation](docs/Model/PolicyResultRepresentation.md)
- [PropertyConfig](docs/Model/PropertyConfig.md)
- [ProtocolMapperEvaluationRepresentation](docs/Model/ProtocolMapperEvaluationRepresentation.md)
- [ProtocolMapperRepresentation](docs/Model/ProtocolMapperRepresentation.md)
- [PublishedRealmRepresentation](docs/Model/PublishedRealmRepresentation.md)
- [RealmEventsConfigRepresentation](docs/Model/RealmEventsConfigRepresentation.md)
- [RealmRepresentation](docs/Model/RealmRepresentation.md)
- [RequiredActionConfigInfoRepresentation](docs/Model/RequiredActionConfigInfoRepresentation.md)
- [RequiredActionConfigRepresentation](docs/Model/RequiredActionConfigRepresentation.md)
- [RequiredActionProviderRepresentation](docs/Model/RequiredActionProviderRepresentation.md)
- [ResourceOwnerRepresentation](docs/Model/ResourceOwnerRepresentation.md)
- [ResourceRepresentation](docs/Model/ResourceRepresentation.md)
- [ResourceServerRepresentation](docs/Model/ResourceServerRepresentation.md)
- [RoleRepresentation](docs/Model/RoleRepresentation.md)
- [RolesRepresentation](docs/Model/RolesRepresentation.md)
- [ScopeEnforcementMode](docs/Model/ScopeEnforcementMode.md)
- [ScopeMappingRepresentation](docs/Model/ScopeMappingRepresentation.md)
- [ScopeRepresentation](docs/Model/ScopeRepresentation.md)
- [SocialLinkRepresentation](docs/Model/SocialLinkRepresentation.md)
- [UPAttribute](docs/Model/UPAttribute.md)
- [UPAttributePermissions](docs/Model/UPAttributePermissions.md)
- [UPAttributeRequired](docs/Model/UPAttributeRequired.md)
- [UPAttributeSelector](docs/Model/UPAttributeSelector.md)
- [UPConfig](docs/Model/UPConfig.md)
- [UPGroup](docs/Model/UPGroup.md)
- [UnmanagedAttributePolicy](docs/Model/UnmanagedAttributePolicy.md)
- [UserConsentRepresentation](docs/Model/UserConsentRepresentation.md)
- [UserFederationMapperRepresentation](docs/Model/UserFederationMapperRepresentation.md)
- [UserFederationProviderRepresentation](docs/Model/UserFederationProviderRepresentation.md)
- [UserProfileAttributeGroupMetadata](docs/Model/UserProfileAttributeGroupMetadata.md)
- [UserProfileAttributeMetadata](docs/Model/UserProfileAttributeMetadata.md)
- [UserProfileMetadata](docs/Model/UserProfileMetadata.md)
- [UserRepresentation](docs/Model/UserRepresentation.md)
- [UserSessionRepresentation](docs/Model/UserSessionRepresentation.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Generator version: `7.9.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
