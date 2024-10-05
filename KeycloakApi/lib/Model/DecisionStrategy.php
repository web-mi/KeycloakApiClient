<?php
/**
 * DecisionStrategy
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Keycloak Admin REST API
 *
 * This is a REST API reference for the Keycloak Admin REST API.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebMI\KeycloakApiClient\KeycloakApi\Model;
use \WebMI\KeycloakApiClient\KeycloakApi\ObjectSerializer;

/**
 * DecisionStrategy Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DecisionStrategy
{
    /**
     * Possible values of this enum
     */
    public const AFFIRMATIVE = 'AFFIRMATIVE';

    public const UNANIMOUS = 'UNANIMOUS';

    public const CONSENSUS = 'CONSENSUS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AFFIRMATIVE,
            self::UNANIMOUS,
            self::CONSENSUS
        ];
    }
}


