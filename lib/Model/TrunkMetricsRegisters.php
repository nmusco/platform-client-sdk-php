<?php
/**
 * TrunkMetricsRegisters
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
 * TrunkMetricsRegisters Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrunkMetricsRegisters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrunkMetricsRegisters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'proxyAddress' => 'string',
        'registerState' => 'bool',
        'registerStateTime' => '\DateTime',
        'errorInfo' => '\PureCloudPlatform\Client\V2\Model\TrunkErrorInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'proxyAddress' => null,
        'registerState' => null,
        'registerStateTime' => 'date-time',
        'errorInfo' => null
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
        'proxyAddress' => 'proxyAddress',
        'registerState' => 'registerState',
        'registerStateTime' => 'registerStateTime',
        'errorInfo' => 'errorInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'proxyAddress' => 'setProxyAddress',
        'registerState' => 'setRegisterState',
        'registerStateTime' => 'setRegisterStateTime',
        'errorInfo' => 'setErrorInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'proxyAddress' => 'getProxyAddress',
        'registerState' => 'getRegisterState',
        'registerStateTime' => 'getRegisterStateTime',
        'errorInfo' => 'getErrorInfo'
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
        $this->container['proxyAddress'] = isset($data['proxyAddress']) ? $data['proxyAddress'] : null;
        $this->container['registerState'] = isset($data['registerState']) ? $data['registerState'] : null;
        $this->container['registerStateTime'] = isset($data['registerStateTime']) ? $data['registerStateTime'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
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
     * Gets proxyAddress
     *
     * @return string
     */
    public function getProxyAddress()
    {
        return $this->container['proxyAddress'];
    }

    /**
     * Sets proxyAddress
     *
     * @param string $proxyAddress Server proxy address that this registers array element represents.
     *
     * @return $this
     */
    public function setProxyAddress($proxyAddress)
    {
        $this->container['proxyAddress'] = $proxyAddress;

        return $this;
    }

    /**
     * Gets registerState
     *
     * @return bool
     */
    public function getRegisterState()
    {
        return $this->container['registerState'];
    }

    /**
     * Sets registerState
     *
     * @param bool $registerState True if last REGISTER message had positive response; false if error response or no response.
     *
     * @return $this
     */
    public function setRegisterState($registerState)
    {
        $this->container['registerState'] = $registerState;

        return $this;
    }

    /**
     * Gets registerStateTime
     *
     * @return \DateTime
     */
    public function getRegisterStateTime()
    {
        return $this->container['registerStateTime'];
    }

    /**
     * Sets registerStateTime
     *
     * @param \DateTime $registerStateTime ISO 8601 format UTC absolute date & time of the last change of the register state.
     *
     * @return $this
     */
    public function setRegisterStateTime($registerStateTime)
    {
        $this->container['registerStateTime'] = $registerStateTime;

        return $this;
    }

    /**
     * Gets errorInfo
     *
     * @return \PureCloudPlatform\Client\V2\Model\TrunkErrorInfo
     */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
     * Sets errorInfo
     *
     * @param \PureCloudPlatform\Client\V2\Model\TrunkErrorInfo $errorInfo errorInfo
     *
     * @return $this
     */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;

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


