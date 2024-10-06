<?php
/**
 * UPAttribute
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
 * UPAttribute Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UPAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UPAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'display_name' => 'string',
        'validations' => 'array<string,array<string,mixed>>',
        'annotations' => 'array<string,mixed>',
        'required' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributeRequired',
        'permissions' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributePermissions',
        'selector' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributeSelector',
        'group' => 'string',
        'multivalued' => 'bool'
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
        'display_name' => null,
        'validations' => null,
        'annotations' => null,
        'required' => null,
        'permissions' => null,
        'selector' => null,
        'group' => null,
        'multivalued' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'display_name' => false,
        'validations' => false,
        'annotations' => false,
        'required' => false,
        'permissions' => false,
        'selector' => false,
        'group' => false,
        'multivalued' => false
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
        'display_name' => 'displayName',
        'validations' => 'validations',
        'annotations' => 'annotations',
        'required' => 'required',
        'permissions' => 'permissions',
        'selector' => 'selector',
        'group' => 'group',
        'multivalued' => 'multivalued'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'set_name',
        'display_name' => 'set_display_name',
        'validations' => 'set_validations',
        'annotations' => 'set_annotations',
        'required' => 'set_required',
        'permissions' => 'set_permissions',
        'selector' => 'set_selector',
        'group' => 'set_group',
        'multivalued' => 'set_multivalued'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'get_name',
        'display_name' => 'get_display_name',
        'validations' => 'get_validations',
        'annotations' => 'get_annotations',
        'required' => 'get_required',
        'permissions' => 'get_permissions',
        'selector' => 'get_selector',
        'group' => 'get_group',
        'multivalued' => 'get_multivalued'
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
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('validations', $data ?? [], null);
        $this->setIfExists('annotations', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('permissions', $data ?? [], null);
        $this->setIfExists('selector', $data ?? [], null);
        $this->setIfExists('group', $data ?? [], null);
        $this->setIfExists('multivalued', $data ?? [], null);
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
    public function get_name()
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
    public function set_name($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function get_display_name()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function set_display_name($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets validations
     *
     * @return array<string,array<string,mixed>>|null
     */
    public function get_validations()
    {
        return $this->container['validations'];
    }

    /**
     * Sets validations
     *
     * @param array<string,array<string,mixed>>|null $validations validations
     *
     * @return self
     */
    public function set_validations($validations)
    {
        if (is_null($validations)) {
            throw new \InvalidArgumentException('non-nullable validations cannot be null');
        }
        $this->container['validations'] = $validations;

        return $this;
    }

    /**
     * Gets annotations
     *
     * @return array<string,mixed>|null
     */
    public function get_annotations()
    {
        return $this->container['annotations'];
    }

    /**
     * Sets annotations
     *
     * @param array<string,mixed>|null $annotations annotations
     *
     * @return self
     */
    public function set_annotations($annotations)
    {
        if (is_null($annotations)) {
            throw new \InvalidArgumentException('non-nullable annotations cannot be null');
        }
        $this->container['annotations'] = $annotations;

        return $this;
    }

    /**
     * Gets required
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributeRequired|null
     */
    public function get_required()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributeRequired|null $required required
     *
     * @return self
     */
    public function set_required($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributePermissions|null
     */
    public function get_permissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributePermissions|null $permissions permissions
     *
     * @return self
     */
    public function set_permissions($permissions)
    {
        if (is_null($permissions)) {
            throw new \InvalidArgumentException('non-nullable permissions cannot be null');
        }
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets selector
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributeSelector|null
     */
    public function get_selector()
    {
        return $this->container['selector'];
    }

    /**
     * Sets selector
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\UPAttributeSelector|null $selector selector
     *
     * @return self
     */
    public function set_selector($selector)
    {
        if (is_null($selector)) {
            throw new \InvalidArgumentException('non-nullable selector cannot be null');
        }
        $this->container['selector'] = $selector;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function get_group()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group group
     *
     * @return self
     */
    public function set_group($group)
    {
        if (is_null($group)) {
            throw new \InvalidArgumentException('non-nullable group cannot be null');
        }
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets multivalued
     *
     * @return bool|null
     */
    public function get_multivalued()
    {
        return $this->container['multivalued'];
    }

    /**
     * Sets multivalued
     *
     * @param bool|null $multivalued multivalued
     *
     * @return self
     */
    public function set_multivalued($multivalued)
    {
        if (is_null($multivalued)) {
            throw new \InvalidArgumentException('non-nullable multivalued cannot be null');
        }
        $this->container['multivalued'] = $multivalued;

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


