<?php
/**
 * PublishedRealmRepresentation
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

use \ArrayAccess;
use \WebMI\KeycloakApiClient\KeycloakApi\ObjectSerializer;

/**
 * PublishedRealmRepresentation Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PublishedRealmRepresentation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PublishedRealmRepresentation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'realm' => 'string',
        'public_key' => 'string',
        'token_service' => 'string',
        'account_service' => 'string',
        'tokens_not_before' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'realm' => null,
        'public_key' => null,
        'token_service' => null,
        'account_service' => null,
        'tokens_not_before' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'realm' => false,
        'public_key' => false,
        'token_service' => false,
        'account_service' => false,
        'tokens_not_before' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'realm' => 'realm',
        'public_key' => 'public_key',
        'token_service' => 'token-service',
        'account_service' => 'account-service',
        'tokens_not_before' => 'tokens-not-before'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'realm' => 'set_realm',
        'public_key' => 'set_public_key',
        'token_service' => 'set_token_service',
        'account_service' => 'set_account_service',
        'tokens_not_before' => 'set_tokens_not_before'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'realm' => 'get_realm',
        'public_key' => 'get_public_key',
        'token_service' => 'get_token_service',
        'account_service' => 'get_account_service',
        'tokens_not_before' => 'get_tokens_not_before'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('realm', $data ?? [], null);
        $this->setIfExists('public_key', $data ?? [], null);
        $this->setIfExists('token_service', $data ?? [], null);
        $this->setIfExists('account_service', $data ?? [], null);
        $this->setIfExists('tokens_not_before', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets realm
     *
     * @return string|null
     */
    public function get_realm()
    {
        return $this->container['realm'];
    }

    /**
     * Sets realm
     *
     * @param string|null $realm realm
     *
     * @return self
     */
    public function set_realm($realm)
    {
        if (is_null($realm)) {
            throw new \InvalidArgumentException('non-nullable realm cannot be null');
        }
        $this->container['realm'] = $realm;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return string|null
     */
    public function get_public_key()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param string|null $public_key public_key
     *
     * @return self
     */
    public function set_public_key($public_key)
    {
        if (is_null($public_key)) {
            throw new \InvalidArgumentException('non-nullable public_key cannot be null');
        }
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets token_service
     *
     * @return string|null
     */
    public function get_token_service()
    {
        return $this->container['token_service'];
    }

    /**
     * Sets token_service
     *
     * @param string|null $token_service token_service
     *
     * @return self
     */
    public function set_token_service($token_service)
    {
        if (is_null($token_service)) {
            throw new \InvalidArgumentException('non-nullable token_service cannot be null');
        }
        $this->container['token_service'] = $token_service;

        return $this;
    }

    /**
     * Gets account_service
     *
     * @return string|null
     */
    public function get_account_service()
    {
        return $this->container['account_service'];
    }

    /**
     * Sets account_service
     *
     * @param string|null $account_service account_service
     *
     * @return self
     */
    public function set_account_service($account_service)
    {
        if (is_null($account_service)) {
            throw new \InvalidArgumentException('non-nullable account_service cannot be null');
        }
        $this->container['account_service'] = $account_service;

        return $this;
    }

    /**
     * Gets tokens_not_before
     *
     * @return int|null
     */
    public function get_tokens_not_before()
    {
        return $this->container['tokens_not_before'];
    }

    /**
     * Sets tokens_not_before
     *
     * @param int|null $tokens_not_before tokens_not_before
     *
     * @return self
     */
    public function set_tokens_not_before($tokens_not_before)
    {
        if (is_null($tokens_not_before)) {
            throw new \InvalidArgumentException('non-nullable tokens_not_before cannot be null');
        }
        $this->container['tokens_not_before'] = $tokens_not_before;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


