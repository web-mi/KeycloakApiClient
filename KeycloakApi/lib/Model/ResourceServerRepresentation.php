<?php
/**
 * ResourceServerRepresentation
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
 * ResourceServerRepresentation Class Doc Comment
 *
 * @category Class
 * @package  WebMI\KeycloakApiClient\KeycloakApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ResourceServerRepresentation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ResourceServerRepresentation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'client_id' => 'string',
        'name' => 'string',
        'allow_remote_resource_management' => 'bool',
        'policy_enforcement_mode' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\PolicyEnforcementMode',
        'resources' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\ResourceRepresentation[]',
        'policies' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\PolicyRepresentation[]',
        'scopes' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\ScopeRepresentation[]',
        'decision_strategy' => '\WebMI\KeycloakApiClient\KeycloakApi\Model\DecisionStrategy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'client_id' => null,
        'name' => null,
        'allow_remote_resource_management' => null,
        'policy_enforcement_mode' => null,
        'resources' => null,
        'policies' => null,
        'scopes' => null,
        'decision_strategy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'client_id' => false,
        'name' => false,
        'allow_remote_resource_management' => false,
        'policy_enforcement_mode' => false,
        'resources' => false,
        'policies' => false,
        'scopes' => false,
        'decision_strategy' => false
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
        'id' => 'id',
        'client_id' => 'clientId',
        'name' => 'name',
        'allow_remote_resource_management' => 'allowRemoteResourceManagement',
        'policy_enforcement_mode' => 'policyEnforcementMode',
        'resources' => 'resources',
        'policies' => 'policies',
        'scopes' => 'scopes',
        'decision_strategy' => 'decisionStrategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_id' => 'setClientId',
        'name' => 'setName',
        'allow_remote_resource_management' => 'setAllowRemoteResourceManagement',
        'policy_enforcement_mode' => 'setPolicyEnforcementMode',
        'resources' => 'setResources',
        'policies' => 'setPolicies',
        'scopes' => 'setScopes',
        'decision_strategy' => 'setDecisionStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_id' => 'getClientId',
        'name' => 'getName',
        'allow_remote_resource_management' => 'getAllowRemoteResourceManagement',
        'policy_enforcement_mode' => 'getPolicyEnforcementMode',
        'resources' => 'getResources',
        'policies' => 'getPolicies',
        'scopes' => 'getScopes',
        'decision_strategy' => 'getDecisionStrategy'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('client_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('allow_remote_resource_management', $data ?? [], null);
        $this->setIfExists('policy_enforcement_mode', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('policies', $data ?? [], null);
        $this->setIfExists('scopes', $data ?? [], null);
        $this->setIfExists('decision_strategy', $data ?? [], null);
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
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id client_id
     *
     * @return self
     */
    public function setClientId($client_id)
    {
        if (is_null($client_id)) {
            throw new \InvalidArgumentException('non-nullable client_id cannot be null');
        }
        $this->container['client_id'] = $client_id;

        return $this;
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
     * Gets allow_remote_resource_management
     *
     * @return bool|null
     */
    public function getAllowRemoteResourceManagement()
    {
        return $this->container['allow_remote_resource_management'];
    }

    /**
     * Sets allow_remote_resource_management
     *
     * @param bool|null $allow_remote_resource_management allow_remote_resource_management
     *
     * @return self
     */
    public function setAllowRemoteResourceManagement($allow_remote_resource_management)
    {
        if (is_null($allow_remote_resource_management)) {
            throw new \InvalidArgumentException('non-nullable allow_remote_resource_management cannot be null');
        }
        $this->container['allow_remote_resource_management'] = $allow_remote_resource_management;

        return $this;
    }

    /**
     * Gets policy_enforcement_mode
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\PolicyEnforcementMode|null
     */
    public function getPolicyEnforcementMode()
    {
        return $this->container['policy_enforcement_mode'];
    }

    /**
     * Sets policy_enforcement_mode
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\PolicyEnforcementMode|null $policy_enforcement_mode policy_enforcement_mode
     *
     * @return self
     */
    public function setPolicyEnforcementMode($policy_enforcement_mode)
    {
        if (is_null($policy_enforcement_mode)) {
            throw new \InvalidArgumentException('non-nullable policy_enforcement_mode cannot be null');
        }
        $this->container['policy_enforcement_mode'] = $policy_enforcement_mode;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\ResourceRepresentation[]|null
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\ResourceRepresentation[]|null $resources resources
     *
     * @return self
     */
    public function setResources($resources)
    {
        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets policies
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\PolicyRepresentation[]|null
     */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
     * Sets policies
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\PolicyRepresentation[]|null $policies policies
     *
     * @return self
     */
    public function setPolicies($policies)
    {
        if (is_null($policies)) {
            throw new \InvalidArgumentException('non-nullable policies cannot be null');
        }
        $this->container['policies'] = $policies;

        return $this;
    }

    /**
     * Gets scopes
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\ScopeRepresentation[]|null
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\ScopeRepresentation[]|null $scopes scopes
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
     * Gets decision_strategy
     *
     * @return \WebMI\KeycloakApiClient\KeycloakApi\Model\DecisionStrategy|null
     */
    public function getDecisionStrategy()
    {
        return $this->container['decision_strategy'];
    }

    /**
     * Sets decision_strategy
     *
     * @param \WebMI\KeycloakApiClient\KeycloakApi\Model\DecisionStrategy|null $decision_strategy decision_strategy
     *
     * @return self
     */
    public function setDecisionStrategy($decision_strategy)
    {
        if (is_null($decision_strategy)) {
            throw new \InvalidArgumentException('non-nullable decision_strategy cannot be null');
        }
        $this->container['decision_strategy'] = $decision_strategy;

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


