<?php
/**
 * StreetAddress
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
 * StreetAddress Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StreetAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StreetAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'a1' => 'string',
        'a3' => 'string',
        'rD' => 'string',
        'hNO' => 'string',
        'lOC' => 'string',
        'nAM' => 'string',
        'pC' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'a1' => null,
        'a3' => null,
        'rD' => null,
        'hNO' => null,
        'lOC' => null,
        'nAM' => null,
        'pC' => null
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
        'country' => 'country',
        'a1' => 'A1',
        'a3' => 'A3',
        'rD' => 'RD',
        'hNO' => 'HNO',
        'lOC' => 'LOC',
        'nAM' => 'NAM',
        'pC' => 'PC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'a1' => 'setA1',
        'a3' => 'setA3',
        'rD' => 'setRD',
        'hNO' => 'setHNO',
        'lOC' => 'setLOC',
        'nAM' => 'setNAM',
        'pC' => 'setPC'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'a1' => 'getA1',
        'a3' => 'getA3',
        'rD' => 'getRD',
        'hNO' => 'getHNO',
        'lOC' => 'getLOC',
        'nAM' => 'getNAM',
        'pC' => 'getPC'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['a1'] = isset($data['a1']) ? $data['a1'] : null;
        $this->container['a3'] = isset($data['a3']) ? $data['a3'] : null;
        $this->container['rD'] = isset($data['rD']) ? $data['rD'] : null;
        $this->container['hNO'] = isset($data['hNO']) ? $data['hNO'] : null;
        $this->container['lOC'] = isset($data['lOC']) ? $data['lOC'] : null;
        $this->container['nAM'] = isset($data['nAM']) ? $data['nAM'] : null;
        $this->container['pC'] = isset($data['pC']) ? $data['pC'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['a1'] === null) {
            $invalidProperties[] = "'a1' can't be null";
        }
        if ($this->container['a3'] === null) {
            $invalidProperties[] = "'a3' can't be null";
        }
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
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country 2 Letter Country code, like US or GB
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets a1
     *
     * @return string
     */
    public function getA1()
    {
        return $this->container['a1'];
    }

    /**
     * Sets a1
     *
     * @param string $a1 State or Province
     *
     * @return $this
     */
    public function setA1($a1)
    {
        $this->container['a1'] = $a1;

        return $this;
    }

    /**
     * Gets a3
     *
     * @return string
     */
    public function getA3()
    {
        return $this->container['a3'];
    }

    /**
     * Sets a3
     *
     * @param string $a3 City or township
     *
     * @return $this
     */
    public function setA3($a3)
    {
        $this->container['a3'] = $a3;

        return $this;
    }

    /**
     * Gets rD
     *
     * @return string
     */
    public function getRD()
    {
        return $this->container['rD'];
    }

    /**
     * Sets rD
     *
     * @param string $rD rD
     *
     * @return $this
     */
    public function setRD($rD)
    {
        $this->container['rD'] = $rD;

        return $this;
    }

    /**
     * Gets hNO
     *
     * @return string
     */
    public function getHNO()
    {
        return $this->container['hNO'];
    }

    /**
     * Sets hNO
     *
     * @param string $hNO hNO
     *
     * @return $this
     */
    public function setHNO($hNO)
    {
        $this->container['hNO'] = $hNO;

        return $this;
    }

    /**
     * Gets lOC
     *
     * @return string
     */
    public function getLOC()
    {
        return $this->container['lOC'];
    }

    /**
     * Sets lOC
     *
     * @param string $lOC lOC
     *
     * @return $this
     */
    public function setLOC($lOC)
    {
        $this->container['lOC'] = $lOC;

        return $this;
    }

    /**
     * Gets nAM
     *
     * @return string
     */
    public function getNAM()
    {
        return $this->container['nAM'];
    }

    /**
     * Sets nAM
     *
     * @param string $nAM nAM
     *
     * @return $this
     */
    public function setNAM($nAM)
    {
        $this->container['nAM'] = $nAM;

        return $this;
    }

    /**
     * Gets pC
     *
     * @return string
     */
    public function getPC()
    {
        return $this->container['pC'];
    }

    /**
     * Sets pC
     *
     * @param string $pC pC
     *
     * @return $this
     */
    public function setPC($pC)
    {
        $this->container['pC'] = $pC;

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

