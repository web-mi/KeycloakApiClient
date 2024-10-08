<?php
/**
 * KeyStoreConfig
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
 * KeyStoreConfig Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class KeyStoreConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'KeyStoreConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'realm_certificate' => 'bool',
        'store_password' => 'string',
        'key_password' => 'string',
        'key_alias' => 'string',
        'realm_alias' => 'string',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'realm_certificate' => null,
        'store_password' => null,
        'key_password' => null,
        'key_alias' => null,
        'realm_alias' => null,
        'format' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'realm_certificate' => false,
        'store_password' => false,
        'key_password' => false,
        'key_alias' => false,
        'realm_alias' => false,
        'format' => false
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
        'realm_certificate' => 'realmCertificate',
        'store_password' => 'storePassword',
        'key_password' => 'keyPassword',
        'key_alias' => 'keyAlias',
        'realm_alias' => 'realmAlias',
        'format' => 'format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'realm_certificate' => 'set_realm_certificate',
        'store_password' => 'set_store_password',
        'key_password' => 'set_key_password',
        'key_alias' => 'set_key_alias',
        'realm_alias' => 'set_realm_alias',
        'format' => 'set_format'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'realm_certificate' => 'get_realm_certificate',
        'store_password' => 'get_store_password',
        'key_password' => 'get_key_password',
        'key_alias' => 'get_key_alias',
        'realm_alias' => 'get_realm_alias',
        'format' => 'get_format'
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
        $this->setIfExists('realm_certificate', $data ?? [], null);
        $this->setIfExists('store_password', $data ?? [], null);
        $this->setIfExists('key_password', $data ?? [], null);
        $this->setIfExists('key_alias', $data ?? [], null);
        $this->setIfExists('realm_alias', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
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
     * Gets realm_certificate
     *
     * @return bool|null
     */
    public function get_realm_certificate()
    {
        return $this->container['realm_certificate'];
    }

    /**
     * Sets realm_certificate
     *
     * @param bool|null $realm_certificate realm_certificate
     *
     * @return self
     */
    public function set_realm_certificate($realm_certificate)
    {
        if (is_null($realm_certificate)) {
            throw new \InvalidArgumentException('non-nullable realm_certificate cannot be null');
        }
        $this->container['realm_certificate'] = $realm_certificate;

        return $this;
    }

    /**
     * Gets store_password
     *
     * @return string|null
     */
    public function get_store_password()
    {
        return $this->container['store_password'];
    }

    /**
     * Sets store_password
     *
     * @param string|null $store_password store_password
     *
     * @return self
     */
    public function set_store_password($store_password)
    {
        if (is_null($store_password)) {
            throw new \InvalidArgumentException('non-nullable store_password cannot be null');
        }
        $this->container['store_password'] = $store_password;

        return $this;
    }

    /**
     * Gets key_password
     *
     * @return string|null
     */
    public function get_key_password()
    {
        return $this->container['key_password'];
    }

    /**
     * Sets key_password
     *
     * @param string|null $key_password key_password
     *
     * @return self
     */
    public function set_key_password($key_password)
    {
        if (is_null($key_password)) {
            throw new \InvalidArgumentException('non-nullable key_password cannot be null');
        }
        $this->container['key_password'] = $key_password;

        return $this;
    }

    /**
     * Gets key_alias
     *
     * @return string|null
     */
    public function get_key_alias()
    {
        return $this->container['key_alias'];
    }

    /**
     * Sets key_alias
     *
     * @param string|null $key_alias key_alias
     *
     * @return self
     */
    public function set_key_alias($key_alias)
    {
        if (is_null($key_alias)) {
            throw new \InvalidArgumentException('non-nullable key_alias cannot be null');
        }
        $this->container['key_alias'] = $key_alias;

        return $this;
    }

    /**
     * Gets realm_alias
     *
     * @return string|null
     */
    public function get_realm_alias()
    {
        return $this->container['realm_alias'];
    }

    /**
     * Sets realm_alias
     *
     * @param string|null $realm_alias realm_alias
     *
     * @return self
     */
    public function set_realm_alias($realm_alias)
    {
        if (is_null($realm_alias)) {
            throw new \InvalidArgumentException('non-nullable realm_alias cannot be null');
        }
        $this->container['realm_alias'] = $realm_alias;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function get_format()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format format
     *
     * @return self
     */
    public function set_format($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

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


