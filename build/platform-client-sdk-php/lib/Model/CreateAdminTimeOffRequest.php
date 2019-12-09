<?php
/**
 * CreateAdminTimeOffRequest
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
 * CreateAdminTimeOffRequest Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateAdminTimeOffRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateAdminTimeOffRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'users' => '\PureCloudPlatform\Client\V2\Model\UserReference[]',
        'activityCodeId' => 'string',
        'notes' => 'string',
        'fullDayManagementUnitDates' => 'string[]',
        'partialDayStartDateTimes' => '\DateTime[]',
        'dailyDurationMinutes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'users' => null,
        'activityCodeId' => null,
        'notes' => null,
        'fullDayManagementUnitDates' => null,
        'partialDayStartDateTimes' => 'date-time',
        'dailyDurationMinutes' => 'int32'
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
        'status' => 'status',
        'users' => 'users',
        'activityCodeId' => 'activityCodeId',
        'notes' => 'notes',
        'fullDayManagementUnitDates' => 'fullDayManagementUnitDates',
        'partialDayStartDateTimes' => 'partialDayStartDateTimes',
        'dailyDurationMinutes' => 'dailyDurationMinutes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'users' => 'setUsers',
        'activityCodeId' => 'setActivityCodeId',
        'notes' => 'setNotes',
        'fullDayManagementUnitDates' => 'setFullDayManagementUnitDates',
        'partialDayStartDateTimes' => 'setPartialDayStartDateTimes',
        'dailyDurationMinutes' => 'setDailyDurationMinutes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'users' => 'getUsers',
        'activityCodeId' => 'getActivityCodeId',
        'notes' => 'getNotes',
        'fullDayManagementUnitDates' => 'getFullDayManagementUnitDates',
        'partialDayStartDateTimes' => 'getPartialDayStartDateTimes',
        'dailyDurationMinutes' => 'getDailyDurationMinutes'
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

    const STATUS_PENDING = 'PENDING';
    const STATUS_APPROVED = 'APPROVED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_APPROVED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['activityCodeId'] = isset($data['activityCodeId']) ? $data['activityCodeId'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['fullDayManagementUnitDates'] = isset($data['fullDayManagementUnitDates']) ? $data['fullDayManagementUnitDates'] : null;
        $this->container['partialDayStartDateTimes'] = isset($data['partialDayStartDateTimes']) ? $data['partialDayStartDateTimes'] : null;
        $this->container['dailyDurationMinutes'] = isset($data['dailyDurationMinutes']) ? $data['dailyDurationMinutes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if ($this->container['activityCodeId'] === null) {
            $invalidProperties[] = "'activityCodeId' can't be null";
        }
        if ($this->container['dailyDurationMinutes'] === null) {
            $invalidProperties[] = "'dailyDurationMinutes' can't be null";
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of this time off request
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \PureCloudPlatform\Client\V2\Model\UserReference[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \PureCloudPlatform\Client\V2\Model\UserReference[] $users A set of IDs for users to associate with this time off request
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets activityCodeId
     *
     * @return string
     */
    public function getActivityCodeId()
    {
        return $this->container['activityCodeId'];
    }

    /**
     * Sets activityCodeId
     *
     * @param string $activityCodeId The ID of the activity code associated with this time off request. Activity code must be of the TimeOff category
     *
     * @return $this
     */
    public function setActivityCodeId($activityCodeId)
    {
        $this->container['activityCodeId'] = $activityCodeId;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Notes about the time off request
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets fullDayManagementUnitDates
     *
     * @return string[]
     */
    public function getFullDayManagementUnitDates()
    {
        return $this->container['fullDayManagementUnitDates'];
    }

    /**
     * Sets fullDayManagementUnitDates
     *
     * @param string[] $fullDayManagementUnitDates A set of dates in yyyy-MM-dd format.  Should be interpreted in the management unit's configured time zone.
     *
     * @return $this
     */
    public function setFullDayManagementUnitDates($fullDayManagementUnitDates)
    {
        $this->container['fullDayManagementUnitDates'] = $fullDayManagementUnitDates;

        return $this;
    }

    /**
     * Gets partialDayStartDateTimes
     *
     * @return \DateTime[]
     */
    public function getPartialDayStartDateTimes()
    {
        return $this->container['partialDayStartDateTimes'];
    }

    /**
     * Sets partialDayStartDateTimes
     *
     * @param \DateTime[] $partialDayStartDateTimes A set of start date-times in ISO-8601 format for partial day requests.
     *
     * @return $this
     */
    public function setPartialDayStartDateTimes($partialDayStartDateTimes)
    {
        $this->container['partialDayStartDateTimes'] = $partialDayStartDateTimes;

        return $this;
    }

    /**
     * Gets dailyDurationMinutes
     *
     * @return int
     */
    public function getDailyDurationMinutes()
    {
        return $this->container['dailyDurationMinutes'];
    }

    /**
     * Sets dailyDurationMinutes
     *
     * @param int $dailyDurationMinutes The daily duration of this time off request in minutes
     *
     * @return $this
     */
    public function setDailyDurationMinutes($dailyDurationMinutes)
    {
        $this->container['dailyDurationMinutes'] = $dailyDurationMinutes;

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

