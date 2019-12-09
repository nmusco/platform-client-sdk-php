<?php
/**
 * DialerContact
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
 * DialerContact Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DialerContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DialerContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'contactListId' => 'string',
        'data' => 'map[string,object]',
        'callRecords' => 'map[string,\PureCloudPlatform\Client\V2\Model\CallRecord]',
        'callable' => 'bool',
        'phoneNumberStatus' => 'map[string,\PureCloudPlatform\Client\V2\Model\PhoneNumberStatus]',
        'contactColumnTimeZones' => 'map[string,\PureCloudPlatform\Client\V2\Model\ContactColumnTimeZone]',
        'selfUri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'contactListId' => null,
        'data' => null,
        'callRecords' => null,
        'callable' => null,
        'phoneNumberStatus' => null,
        'contactColumnTimeZones' => null,
        'selfUri' => 'uri'
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
        'id' => 'id',
        'name' => 'name',
        'contactListId' => 'contactListId',
        'data' => 'data',
        'callRecords' => 'callRecords',
        'callable' => 'callable',
        'phoneNumberStatus' => 'phoneNumberStatus',
        'contactColumnTimeZones' => 'contactColumnTimeZones',
        'selfUri' => 'selfUri'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'contactListId' => 'setContactListId',
        'data' => 'setData',
        'callRecords' => 'setCallRecords',
        'callable' => 'setCallable',
        'phoneNumberStatus' => 'setPhoneNumberStatus',
        'contactColumnTimeZones' => 'setContactColumnTimeZones',
        'selfUri' => 'setSelfUri'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'contactListId' => 'getContactListId',
        'data' => 'getData',
        'callRecords' => 'getCallRecords',
        'callable' => 'getCallable',
        'phoneNumberStatus' => 'getPhoneNumberStatus',
        'contactColumnTimeZones' => 'getContactColumnTimeZones',
        'selfUri' => 'getSelfUri'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['contactListId'] = isset($data['contactListId']) ? $data['contactListId'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['callRecords'] = isset($data['callRecords']) ? $data['callRecords'] : null;
        $this->container['callable'] = isset($data['callable']) ? $data['callable'] : null;
        $this->container['phoneNumberStatus'] = isset($data['phoneNumberStatus']) ? $data['phoneNumberStatus'] : null;
        $this->container['contactColumnTimeZones'] = isset($data['contactColumnTimeZones']) ? $data['contactColumnTimeZones'] : null;
        $this->container['selfUri'] = isset($data['selfUri']) ? $data['selfUri'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contactListId'] === null) {
            $invalidProperties[] = "'contactListId' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The globally unique identifier for the object.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets contactListId
     *
     * @return string
     */
    public function getContactListId()
    {
        return $this->container['contactListId'];
    }

    /**
     * Sets contactListId
     *
     * @param string $contactListId The identifier of the contact list containing this contact.
     *
     * @return $this
     */
    public function setContactListId($contactListId)
    {
        $this->container['contactListId'] = $contactListId;

        return $this;
    }

    /**
     * Gets data
     *
     * @return map[string,object]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param map[string,object] $data An ordered map of the contact's columns and corresponding values.
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets callRecords
     *
     * @return map[string,\PureCloudPlatform\Client\V2\Model\CallRecord]
     */
    public function getCallRecords()
    {
        return $this->container['callRecords'];
    }

    /**
     * Sets callRecords
     *
     * @param map[string,\PureCloudPlatform\Client\V2\Model\CallRecord] $callRecords A map of call records for the contact phone columns.
     *
     * @return $this
     */
    public function setCallRecords($callRecords)
    {
        $this->container['callRecords'] = $callRecords;

        return $this;
    }

    /**
     * Gets callable
     *
     * @return bool
     */
    public function getCallable()
    {
        return $this->container['callable'];
    }

    /**
     * Sets callable
     *
     * @param bool $callable Indicates whether or not the contact can be called.
     *
     * @return $this
     */
    public function setCallable($callable)
    {
        $this->container['callable'] = $callable;

        return $this;
    }

    /**
     * Gets phoneNumberStatus
     *
     * @return map[string,\PureCloudPlatform\Client\V2\Model\PhoneNumberStatus]
     */
    public function getPhoneNumberStatus()
    {
        return $this->container['phoneNumberStatus'];
    }

    /**
     * Sets phoneNumberStatus
     *
     * @param map[string,\PureCloudPlatform\Client\V2\Model\PhoneNumberStatus] $phoneNumberStatus A map of phone number columns to PhoneNumberStatuses, which indicate if the phone number is callable or not.
     *
     * @return $this
     */
    public function setPhoneNumberStatus($phoneNumberStatus)
    {
        $this->container['phoneNumberStatus'] = $phoneNumberStatus;

        return $this;
    }

    /**
     * Gets contactColumnTimeZones
     *
     * @return map[string,\PureCloudPlatform\Client\V2\Model\ContactColumnTimeZone]
     */
    public function getContactColumnTimeZones()
    {
        return $this->container['contactColumnTimeZones'];
    }

    /**
     * Sets contactColumnTimeZones
     *
     * @param map[string,\PureCloudPlatform\Client\V2\Model\ContactColumnTimeZone] $contactColumnTimeZones Map containing data about the timezone the contact is mapped to. This will only be populated if the contact list has automatic timezone mapping turned on. The key is the column name. The value is the timezone it mapped to and the type of column: Phone or Zip
     *
     * @return $this
     */
    public function setContactColumnTimeZones($contactColumnTimeZones)
    {
        $this->container['contactColumnTimeZones'] = $contactColumnTimeZones;

        return $this;
    }

    /**
     * Gets selfUri
     *
     * @return string
     */
    public function getSelfUri()
    {
        return $this->container['selfUri'];
    }

    /**
     * Sets selfUri
     *
     * @param string $selfUri The URI for this object
     *
     * @return $this
     */
    public function setSelfUri($selfUri)
    {
        $this->container['selfUri'] = $selfUri;

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

