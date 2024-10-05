<?php
/**
 * PathConfig
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
 * PathConfig Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PathConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PathConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'type' => 'string',
        'path' => 'string',
        'methods' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\MethodConfig[]',
        'scopes' => 'string[]',
        'id' => 'string',
        'enforcement_mode' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\EnforcementMode',
        'claim_information_point' => 'array<string,array<string,mixed>>',
        'invalidated' => 'bool',
        'static_path' => 'bool',
        'static' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'path' => null,
        'methods' => null,
        'scopes' => null,
        'id' => null,
        'enforcement_mode' => null,
        'claim_information_point' => null,
        'invalidated' => null,
        'static_path' => null,
        'static' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'type' => false,
        'path' => false,
        'methods' => false,
        'scopes' => false,
        'id' => false,
        'enforcement_mode' => false,
        'claim_information_point' => false,
        'invalidated' => false,
        'static_path' => false,
        'static' => false
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
        'name' => 'name',
        'type' => 'type',
        'path' => 'path',
        'methods' => 'methods',
        'scopes' => 'scopes',
        'id' => 'id',
        'enforcement_mode' => 'enforcement-mode',
        'claim_information_point' => 'claim-information-point',
        'invalidated' => 'invalidated',
        'static_path' => 'staticPath',
        'static' => 'static'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'type' => 'setType',
        'path' => 'setPath',
        'methods' => 'setMethods',
        'scopes' => 'setScopes',
        'id' => 'setId',
        'enforcement_mode' => 'setEnforcementMode',
        'claim_information_point' => 'setClaimInformationPoint',
        'invalidated' => 'setInvalidated',
        'static_path' => 'setStaticPath',
        'static' => 'setStatic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'type' => 'getType',
        'path' => 'getPath',
        'methods' => 'getMethods',
        'scopes' => 'getScopes',
        'id' => 'getId',
        'enforcement_mode' => 'getEnforcementMode',
        'claim_information_point' => 'getClaimInformationPoint',
        'invalidated' => 'getInvalidated',
        'static_path' => 'getStaticPath',
        'static' => 'getStatic'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('methods', $data ?? [], null);
        $this->setIfExists('scopes', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('enforcement_mode', $data ?? [], null);
        $this->setIfExists('claim_information_point', $data ?? [], null);
        $this->setIfExists('invalidated', $data ?? [], null);
        $this->setIfExists('static_path', $data ?? [], null);
        $this->setIfExists('static', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets methods
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\MethodConfig[]|null
     */
    public function getMethods()
    {
        return $this->container['methods'];
    }

    /**
     * Sets methods
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\MethodConfig[]|null $methods methods
     *
     * @return self
     */
    public function setMethods($methods)
    {
        if (is_null($methods)) {
            throw new \InvalidArgumentException('non-nullable methods cannot be null');
        }
        $this->container['methods'] = $methods;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return string[]|null
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param string[]|null $scopes scopes
     *
     * @return self
     */
    public function setScopes($scopes)
    {
        if (is_null($scopes)) {
            throw new \InvalidArgumentException('non-nullable scopes cannot be null');
        }
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
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
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets enforcement_mode
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\EnforcementMode|null
     */
    public function getEnforcementMode()
    {
        return $this->container['enforcement_mode'];
    }

    /**
     * Sets enforcement_mode
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\EnforcementMode|null $enforcement_mode enforcement_mode
     *
     * @return self
     */
    public function setEnforcementMode($enforcement_mode)
    {
        if (is_null($enforcement_mode)) {
            throw new \InvalidArgumentException('non-nullable enforcement_mode cannot be null');
        }
        $this->container['enforcement_mode'] = $enforcement_mode;

        return $this;
    }

    /**
     * Gets claim_information_point
     *
     * @return array<string,array<string,mixed>>|null
     */
    public function getClaimInformationPoint()
    {
        return $this->container['claim_information_point'];
    }

    /**
     * Sets claim_information_point
     *
     * @param array<string,array<string,mixed>>|null $claim_information_point claim_information_point
     *
     * @return self
     */
    public function setClaimInformationPoint($claim_information_point)
    {
        if (is_null($claim_information_point)) {
            throw new \InvalidArgumentException('non-nullable claim_information_point cannot be null');
        }
        $this->container['claim_information_point'] = $claim_information_point;

        return $this;
    }

    /**
     * Gets invalidated
     *
     * @return bool|null
     */
    public function getInvalidated()
    {
        return $this->container['invalidated'];
    }

    /**
     * Sets invalidated
     *
     * @param bool|null $invalidated invalidated
     *
     * @return self
     */
    public function setInvalidated($invalidated)
    {
        if (is_null($invalidated)) {
            throw new \InvalidArgumentException('non-nullable invalidated cannot be null');
        }
        $this->container['invalidated'] = $invalidated;

        return $this;
    }

    /**
     * Gets static_path
     *
     * @return bool|null
     */
    public function getStaticPath()
    {
        return $this->container['static_path'];
    }

    /**
     * Sets static_path
     *
     * @param bool|null $static_path static_path
     *
     * @return self
     */
    public function setStaticPath($static_path)
    {
        if (is_null($static_path)) {
            throw new \InvalidArgumentException('non-nullable static_path cannot be null');
        }
        $this->container['static_path'] = $static_path;

        return $this;
    }

    /**
     * Gets static
     *
     * @return bool|null
     */
    public function getStatic()
    {
        return $this->container['static'];
    }

    /**
     * Sets static
     *
     * @param bool|null $static static
     *
     * @return self
     */
    public function setStatic($static)
    {
        if (is_null($static)) {
            throw new \InvalidArgumentException('non-nullable static cannot be null');
        }
        $this->container['static'] = $static;

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


