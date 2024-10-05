<?php
/**
 * ProtocolMapperEvaluationRepresentation
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
 * ProtocolMapperEvaluationRepresentation Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProtocolMapperEvaluationRepresentation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProtocolMapperEvaluationRepresentation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mapper_id' => 'string',
        'mapper_name' => 'string',
        'container_id' => 'string',
        'container_name' => 'string',
        'container_type' => 'string',
        'protocol_mapper' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mapper_id' => null,
        'mapper_name' => null,
        'container_id' => null,
        'container_name' => null,
        'container_type' => null,
        'protocol_mapper' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'mapper_id' => false,
        'mapper_name' => false,
        'container_id' => false,
        'container_name' => false,
        'container_type' => false,
        'protocol_mapper' => false
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
        'mapper_id' => 'mapperId',
        'mapper_name' => 'mapperName',
        'container_id' => 'containerId',
        'container_name' => 'containerName',
        'container_type' => 'containerType',
        'protocol_mapper' => 'protocolMapper'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mapper_id' => 'setMapperId',
        'mapper_name' => 'setMapperName',
        'container_id' => 'setContainerId',
        'container_name' => 'setContainerName',
        'container_type' => 'setContainerType',
        'protocol_mapper' => 'setProtocolMapper'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mapper_id' => 'getMapperId',
        'mapper_name' => 'getMapperName',
        'container_id' => 'getContainerId',
        'container_name' => 'getContainerName',
        'container_type' => 'getContainerType',
        'protocol_mapper' => 'getProtocolMapper'
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
        $this->setIfExists('mapper_id', $data ?? [], null);
        $this->setIfExists('mapper_name', $data ?? [], null);
        $this->setIfExists('container_id', $data ?? [], null);
        $this->setIfExists('container_name', $data ?? [], null);
        $this->setIfExists('container_type', $data ?? [], null);
        $this->setIfExists('protocol_mapper', $data ?? [], null);
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
     * Gets mapper_id
     *
     * @return string|null
     */
    public function getMapperId()
    {
        return $this->container['mapper_id'];
    }

    /**
     * Sets mapper_id
     *
     * @param string|null $mapper_id mapper_id
     *
     * @return self
     */
    public function setMapperId($mapper_id)
    {
        if (is_null($mapper_id)) {
            throw new \InvalidArgumentException('non-nullable mapper_id cannot be null');
        }
        $this->container['mapper_id'] = $mapper_id;

        return $this;
    }

    /**
     * Gets mapper_name
     *
     * @return string|null
     */
    public function getMapperName()
    {
        return $this->container['mapper_name'];
    }

    /**
     * Sets mapper_name
     *
     * @param string|null $mapper_name mapper_name
     *
     * @return self
     */
    public function setMapperName($mapper_name)
    {
        if (is_null($mapper_name)) {
            throw new \InvalidArgumentException('non-nullable mapper_name cannot be null');
        }
        $this->container['mapper_name'] = $mapper_name;

        return $this;
    }

    /**
     * Gets container_id
     *
     * @return string|null
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     *
     * @param string|null $container_id container_id
     *
     * @return self
     */
    public function setContainerId($container_id)
    {
        if (is_null($container_id)) {
            throw new \InvalidArgumentException('non-nullable container_id cannot be null');
        }
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets container_name
     *
     * @return string|null
     */
    public function getContainerName()
    {
        return $this->container['container_name'];
    }

    /**
     * Sets container_name
     *
     * @param string|null $container_name container_name
     *
     * @return self
     */
    public function setContainerName($container_name)
    {
        if (is_null($container_name)) {
            throw new \InvalidArgumentException('non-nullable container_name cannot be null');
        }
        $this->container['container_name'] = $container_name;

        return $this;
    }

    /**
     * Gets container_type
     *
     * @return string|null
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string|null $container_type container_type
     *
     * @return self
     */
    public function setContainerType($container_type)
    {
        if (is_null($container_type)) {
            throw new \InvalidArgumentException('non-nullable container_type cannot be null');
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets protocol_mapper
     *
     * @return string|null
     */
    public function getProtocolMapper()
    {
        return $this->container['protocol_mapper'];
    }

    /**
     * Sets protocol_mapper
     *
     * @param string|null $protocol_mapper protocol_mapper
     *
     * @return self
     */
    public function setProtocolMapper($protocol_mapper)
    {
        if (is_null($protocol_mapper)) {
            throw new \InvalidArgumentException('non-nullable protocol_mapper cannot be null');
        }
        $this->container['protocol_mapper'] = $protocol_mapper;

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


