<?php
/**
 * CallableContactsDiagnostic
 *
 * PHP version 5
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PureCloud Platform API
 *
 * With the PureCloud Platform API, you can control all aspects of your PureCloud environment. With the APIs you can access the system configuration, manage conversations and more.
 *
 * OpenAPI spec version: v2
 * Contact: DeveloperEvangelists@genesys.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PureCloudPlatform\Client\V2\Model;

use \ArrayAccess;
use \PureCloudPlatform\Client\V2\ObjectSerializer;

/**
 * CallableContactsDiagnostic Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CallableContactsDiagnostic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CallableContactsDiagnostic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attemptLimits' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'dncLists' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]',
        'callableTimeSet' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'ruleSets' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attemptLimits' => null,
        'dncLists' => null,
        'callableTimeSet' => null,
        'ruleSets' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attemptLimits' => 'attemptLimits',
        'dncLists' => 'dncLists',
        'callableTimeSet' => 'callableTimeSet',
        'ruleSets' => 'ruleSets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attemptLimits' => 'setAttemptLimits',
        'dncLists' => 'setDncLists',
        'callableTimeSet' => 'setCallableTimeSet',
        'ruleSets' => 'setRuleSets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attemptLimits' => 'getAttemptLimits',
        'dncLists' => 'getDncLists',
        'callableTimeSet' => 'getCallableTimeSet',
        'ruleSets' => 'getRuleSets'
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
        return self::$swaggerModelName;
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
        $this->container['attemptLimits'] = isset($data['attemptLimits']) ? $data['attemptLimits'] : null;
        $this->container['dncLists'] = isset($data['dncLists']) ? $data['dncLists'] : null;
        $this->container['callableTimeSet'] = isset($data['callableTimeSet']) ? $data['callableTimeSet'] : null;
        $this->container['ruleSets'] = isset($data['ruleSets']) ? $data['ruleSets'] : null;
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
     * Gets attemptLimits
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getAttemptLimits()
    {
        return $this->container['attemptLimits'];
    }

    /**
     * Sets attemptLimits
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $attemptLimits Attempt limits for the campaign's contact list
     *
     * @return $this
     */
    public function setAttemptLimits($attemptLimits)
    {
        $this->container['attemptLimits'] = $attemptLimits;

        return $this;
    }

    /**
     * Gets dncLists
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef[]
     */
    public function getDncLists()
    {
        return $this->container['dncLists'];
    }

    /**
     * Sets dncLists
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef[] $dncLists Do not call lists for the campaign
     *
     * @return $this
     */
    public function setDncLists($dncLists)
    {
        $this->container['dncLists'] = $dncLists;

        return $this;
    }

    /**
     * Gets callableTimeSet
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getCallableTimeSet()
    {
        return $this->container['callableTimeSet'];
    }

    /**
     * Sets callableTimeSet
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $callableTimeSet Callable time sets for the campaign
     *
     * @return $this
     */
    public function setCallableTimeSet($callableTimeSet)
    {
        $this->container['callableTimeSet'] = $callableTimeSet;

        return $this;
    }

    /**
     * Gets ruleSets
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef[]
     */
    public function getRuleSets()
    {
        return $this->container['ruleSets'];
    }

    /**
     * Sets ruleSets
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef[] $ruleSets Rule sets for the campaign
     *
     * @return $this
     */
    public function setRuleSets($ruleSets)
    {
        $this->container['ruleSets'] = $ruleSets;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

