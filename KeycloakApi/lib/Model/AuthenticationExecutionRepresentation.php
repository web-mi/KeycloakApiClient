<?php
/**
 * AuthenticationExecutionRepresentation
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
 * AuthenticationExecutionRepresentation Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuthenticationExecutionRepresentation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuthenticationExecutionRepresentation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authenticator_config' => 'string',
        'authenticator' => 'string',
        'authenticator_flow' => 'bool',
        'requirement' => 'string',
        'priority' => 'int',
        'autheticator_flow' => 'bool',
        'id' => 'string',
        'flow_id' => 'string',
        'parent_flow' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authenticator_config' => null,
        'authenticator' => null,
        'authenticator_flow' => null,
        'requirement' => null,
        'priority' => 'int32',
        'autheticator_flow' => null,
        'id' => null,
        'flow_id' => null,
        'parent_flow' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'authenticator_config' => false,
        'authenticator' => false,
        'authenticator_flow' => false,
        'requirement' => false,
        'priority' => false,
        'autheticator_flow' => false,
        'id' => false,
        'flow_id' => false,
        'parent_flow' => false
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
        'authenticator_config' => 'authenticatorConfig',
        'authenticator' => 'authenticator',
        'authenticator_flow' => 'authenticatorFlow',
        'requirement' => 'requirement',
        'priority' => 'priority',
        'autheticator_flow' => 'autheticatorFlow',
        'id' => 'id',
        'flow_id' => 'flowId',
        'parent_flow' => 'parentFlow'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authenticator_config' => 'set_authenticator_config',
        'authenticator' => 'set_authenticator',
        'authenticator_flow' => 'set_authenticator_flow',
        'requirement' => 'set_requirement',
        'priority' => 'set_priority',
        'autheticator_flow' => 'set_autheticator_flow',
        'id' => 'set_id',
        'flow_id' => 'set_flow_id',
        'parent_flow' => 'set_parent_flow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authenticator_config' => 'get_authenticator_config',
        'authenticator' => 'get_authenticator',
        'authenticator_flow' => 'get_authenticator_flow',
        'requirement' => 'get_requirement',
        'priority' => 'get_priority',
        'autheticator_flow' => 'get_autheticator_flow',
        'id' => 'get_id',
        'flow_id' => 'get_flow_id',
        'parent_flow' => 'get_parent_flow'
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
        $this->setIfExists('authenticator_config', $data ?? [], null);
        $this->setIfExists('authenticator', $data ?? [], null);
        $this->setIfExists('authenticator_flow', $data ?? [], null);
        $this->setIfExists('requirement', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('autheticator_flow', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('flow_id', $data ?? [], null);
        $this->setIfExists('parent_flow', $data ?? [], null);
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
     * Gets authenticator_config
     *
     * @return string|null
     */
    public function get_authenticator_config()
    {
        return $this->container['authenticator_config'];
    }

    /**
     * Sets authenticator_config
     *
     * @param string|null $authenticator_config authenticator_config
     *
     * @return self
     */
    public function set_authenticator_config($authenticator_config)
    {
        if (is_null($authenticator_config)) {
            throw new \InvalidArgumentException('non-nullable authenticator_config cannot be null');
        }
        $this->container['authenticator_config'] = $authenticator_config;

        return $this;
    }

    /**
     * Gets authenticator
     *
     * @return string|null
     */
    public function get_authenticator()
    {
        return $this->container['authenticator'];
    }

    /**
     * Sets authenticator
     *
     * @param string|null $authenticator authenticator
     *
     * @return self
     */
    public function set_authenticator($authenticator)
    {
        if (is_null($authenticator)) {
            throw new \InvalidArgumentException('non-nullable authenticator cannot be null');
        }
        $this->container['authenticator'] = $authenticator;

        return $this;
    }

    /**
     * Gets authenticator_flow
     *
     * @return bool|null
     */
    public function get_authenticator_flow()
    {
        return $this->container['authenticator_flow'];
    }

    /**
     * Sets authenticator_flow
     *
     * @param bool|null $authenticator_flow authenticator_flow
     *
     * @return self
     */
    public function set_authenticator_flow($authenticator_flow)
    {
        if (is_null($authenticator_flow)) {
            throw new \InvalidArgumentException('non-nullable authenticator_flow cannot be null');
        }
        $this->container['authenticator_flow'] = $authenticator_flow;

        return $this;
    }

    /**
     * Gets requirement
     *
     * @return string|null
     */
    public function get_requirement()
    {
        return $this->container['requirement'];
    }

    /**
     * Sets requirement
     *
     * @param string|null $requirement requirement
     *
     * @return self
     */
    public function set_requirement($requirement)
    {
        if (is_null($requirement)) {
            throw new \InvalidArgumentException('non-nullable requirement cannot be null');
        }
        $this->container['requirement'] = $requirement;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function get_priority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority priority
     *
     * @return self
     */
    public function set_priority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets autheticator_flow
     *
     * @return bool|null
     * @deprecated
     */
    public function get_autheticator_flow()
    {
        return $this->container['autheticator_flow'];
    }

    /**
     * Sets autheticator_flow
     *
     * @param bool|null $autheticator_flow autheticator_flow
     *
     * @return self
     * @deprecated
     */
    public function set_autheticator_flow($autheticator_flow)
    {
        if (is_null($autheticator_flow)) {
            throw new \InvalidArgumentException('non-nullable autheticator_flow cannot be null');
        }
        $this->container['autheticator_flow'] = $autheticator_flow;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function get_id()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function set_id($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets flow_id
     *
     * @return string|null
     */
    public function get_flow_id()
    {
        return $this->container['flow_id'];
    }

    /**
     * Sets flow_id
     *
     * @param string|null $flow_id flow_id
     *
     * @return self
     */
    public function set_flow_id($flow_id)
    {
        if (is_null($flow_id)) {
            throw new \InvalidArgumentException('non-nullable flow_id cannot be null');
        }
        $this->container['flow_id'] = $flow_id;

        return $this;
    }

    /**
     * Gets parent_flow
     *
     * @return string|null
     */
    public function get_parent_flow()
    {
        return $this->container['parent_flow'];
    }

    /**
     * Sets parent_flow
     *
     * @param string|null $parent_flow parent_flow
     *
     * @return self
     */
    public function set_parent_flow($parent_flow)
    {
        if (is_null($parent_flow)) {
            throw new \InvalidArgumentException('non-nullable parent_flow cannot be null');
        }
        $this->container['parent_flow'] = $parent_flow;

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


