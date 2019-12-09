<?php
/**
 * CreateShareRequest
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
 * CreateShareRequest Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateShareRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateShareRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sharedEntityType' => 'string',
        'sharedEntity' => '\PureCloudPlatform\Client\V2\Model\SharedEntity',
        'memberType' => 'string',
        'member' => '\PureCloudPlatform\Client\V2\Model\SharedEntity',
        'members' => '\PureCloudPlatform\Client\V2\Model\CreateShareRequestMember[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sharedEntityType' => null,
        'sharedEntity' => null,
        'memberType' => null,
        'member' => null,
        'members' => null
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
        'sharedEntityType' => 'sharedEntityType',
        'sharedEntity' => 'sharedEntity',
        'memberType' => 'memberType',
        'member' => 'member',
        'members' => 'members'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sharedEntityType' => 'setSharedEntityType',
        'sharedEntity' => 'setSharedEntity',
        'memberType' => 'setMemberType',
        'member' => 'setMember',
        'members' => 'setMembers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sharedEntityType' => 'getSharedEntityType',
        'sharedEntity' => 'getSharedEntity',
        'memberType' => 'getMemberType',
        'member' => 'getMember',
        'members' => 'getMembers'
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

    const SHARED_ENTITY_TYPE_DOCUMENT = 'DOCUMENT';
    const MEMBER_TYPE_USER = 'USER';
    const MEMBER_TYPE_GROUP = 'GROUP';
    const MEMBER_TYPE__PUBLIC = 'PUBLIC';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSharedEntityTypeAllowableValues()
    {
        return [
            self::SHARED_ENTITY_TYPE_DOCUMENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMemberTypeAllowableValues()
    {
        return [
            self::MEMBER_TYPE_USER,
            self::MEMBER_TYPE_GROUP,
            self::MEMBER_TYPE__PUBLIC,
        ];
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
        $this->container['sharedEntityType'] = isset($data['sharedEntityType']) ? $data['sharedEntityType'] : null;
        $this->container['sharedEntity'] = isset($data['sharedEntity']) ? $data['sharedEntity'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['sharedEntityType'] === null) {
            $invalidProperties[] = "'sharedEntityType' can't be null";
        }
        $allowedValues = $this->getSharedEntityTypeAllowableValues();
        if (!is_null($this->container['sharedEntityType']) && !in_array($this->container['sharedEntityType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sharedEntityType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sharedEntity'] === null) {
            $invalidProperties[] = "'sharedEntity' can't be null";
        }
        $allowedValues = $this->getMemberTypeAllowableValues();
        if (!is_null($this->container['memberType']) && !in_array($this->container['memberType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'memberType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets sharedEntityType
     *
     * @return string
     */
    public function getSharedEntityType()
    {
        return $this->container['sharedEntityType'];
    }

    /**
     * Sets sharedEntityType
     *
     * @param string $sharedEntityType The share entity type
     *
     * @return $this
     */
    public function setSharedEntityType($sharedEntityType)
    {
        $allowedValues = $this->getSharedEntityTypeAllowableValues();
        if (!in_array($sharedEntityType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sharedEntityType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sharedEntityType'] = $sharedEntityType;

        return $this;
    }

    /**
     * Gets sharedEntity
     *
     * @return \PureCloudPlatform\Client\V2\Model\SharedEntity
     */
    public function getSharedEntity()
    {
        return $this->container['sharedEntity'];
    }

    /**
     * Sets sharedEntity
     *
     * @param \PureCloudPlatform\Client\V2\Model\SharedEntity $sharedEntity The entity that will be shared
     *
     * @return $this
     */
    public function setSharedEntity($sharedEntity)
    {
        $this->container['sharedEntity'] = $sharedEntity;

        return $this;
    }

    /**
     * Gets memberType
     *
     * @return string
     */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
     * Sets memberType
     *
     * @param string $memberType memberType
     *
     * @return $this
     */
    public function setMemberType($memberType)
    {
        $allowedValues = $this->getMemberTypeAllowableValues();
        if (!is_null($memberType) && !in_array($memberType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'memberType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['memberType'] = $memberType;

        return $this;
    }

    /**
     * Gets member
     *
     * @return \PureCloudPlatform\Client\V2\Model\SharedEntity
     */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
     * Sets member
     *
     * @param \PureCloudPlatform\Client\V2\Model\SharedEntity $member The member that will have access to this share. Only required if a list of members is not provided.
     *
     * @return $this
     */
    public function setMember($member)
    {
        $this->container['member'] = $member;

        return $this;
    }

    /**
     * Gets members
     *
     * @return \PureCloudPlatform\Client\V2\Model\CreateShareRequestMember[]
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param \PureCloudPlatform\Client\V2\Model\CreateShareRequestMember[] $members members
     *
     * @return $this
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

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

