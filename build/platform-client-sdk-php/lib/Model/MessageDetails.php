<?php
/**
 * MessageDetails
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
 * MessageDetails Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MessageDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MessageDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'messageId' => 'string',
        'messageURI' => 'string',
        'messageStatus' => 'string',
        'messageSegmentCount' => 'int',
        'messageTime' => '\DateTime',
        'media' => '\PureCloudPlatform\Client\V2\Model\MessageMedia[]',
        'stickers' => '\PureCloudPlatform\Client\V2\Model\MessageSticker[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'messageId' => null,
        'messageURI' => 'uri',
        'messageStatus' => null,
        'messageSegmentCount' => 'int32',
        'messageTime' => 'date-time',
        'media' => null,
        'stickers' => null
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
        'messageId' => 'messageId',
        'messageURI' => 'messageURI',
        'messageStatus' => 'messageStatus',
        'messageSegmentCount' => 'messageSegmentCount',
        'messageTime' => 'messageTime',
        'media' => 'media',
        'stickers' => 'stickers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messageId' => 'setMessageId',
        'messageURI' => 'setMessageURI',
        'messageStatus' => 'setMessageStatus',
        'messageSegmentCount' => 'setMessageSegmentCount',
        'messageTime' => 'setMessageTime',
        'media' => 'setMedia',
        'stickers' => 'setStickers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messageId' => 'getMessageId',
        'messageURI' => 'getMessageURI',
        'messageStatus' => 'getMessageStatus',
        'messageSegmentCount' => 'getMessageSegmentCount',
        'messageTime' => 'getMessageTime',
        'media' => 'getMedia',
        'stickers' => 'getStickers'
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

    const MESSAGE_STATUS_QUEUED = 'queued';
    const MESSAGE_STATUS_SENT = 'sent';
    const MESSAGE_STATUS_FAILED = 'failed';
    const MESSAGE_STATUS_RECEIVED = 'received';
    const MESSAGE_STATUS_DELIVERY_SUCCESS = 'delivery-success';
    const MESSAGE_STATUS_DELIVERY_FAILED = 'delivery-failed';
    const MESSAGE_STATUS_READ = 'read';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMessageStatusAllowableValues()
    {
        return [
            self::MESSAGE_STATUS_QUEUED,
            self::MESSAGE_STATUS_SENT,
            self::MESSAGE_STATUS_FAILED,
            self::MESSAGE_STATUS_RECEIVED,
            self::MESSAGE_STATUS_DELIVERY_SUCCESS,
            self::MESSAGE_STATUS_DELIVERY_FAILED,
            self::MESSAGE_STATUS_READ,
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
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['messageURI'] = isset($data['messageURI']) ? $data['messageURI'] : null;
        $this->container['messageStatus'] = isset($data['messageStatus']) ? $data['messageStatus'] : null;
        $this->container['messageSegmentCount'] = isset($data['messageSegmentCount']) ? $data['messageSegmentCount'] : null;
        $this->container['messageTime'] = isset($data['messageTime']) ? $data['messageTime'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['stickers'] = isset($data['stickers']) ? $data['stickers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMessageStatusAllowableValues();
        if (!is_null($this->container['messageStatus']) && !in_array($this->container['messageStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'messageStatus', must be one of '%s'",
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
     * Gets messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     *
     * @param string $messageId UUID identifying the message media.
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets messageURI
     *
     * @return string
     */
    public function getMessageURI()
    {
        return $this->container['messageURI'];
    }

    /**
     * Sets messageURI
     *
     * @param string $messageURI A URI for this message entity.
     *
     * @return $this
     */
    public function setMessageURI($messageURI)
    {
        $this->container['messageURI'] = $messageURI;

        return $this;
    }

    /**
     * Gets messageStatus
     *
     * @return string
     */
    public function getMessageStatus()
    {
        return $this->container['messageStatus'];
    }

    /**
     * Sets messageStatus
     *
     * @param string $messageStatus Indicates the delivery status of the message.
     *
     * @return $this
     */
    public function setMessageStatus($messageStatus)
    {
        $allowedValues = $this->getMessageStatusAllowableValues();
        if (!is_null($messageStatus) && !in_array($messageStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'messageStatus', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['messageStatus'] = $messageStatus;

        return $this;
    }

    /**
     * Gets messageSegmentCount
     *
     * @return int
     */
    public function getMessageSegmentCount()
    {
        return $this->container['messageSegmentCount'];
    }

    /**
     * Sets messageSegmentCount
     *
     * @param int $messageSegmentCount The message segment count, greater than 1 if the message content was split into multiple parts for this message type, e.g. SMS character limits.
     *
     * @return $this
     */
    public function setMessageSegmentCount($messageSegmentCount)
    {
        $this->container['messageSegmentCount'] = $messageSegmentCount;

        return $this;
    }

    /**
     * Gets messageTime
     *
     * @return \DateTime
     */
    public function getMessageTime()
    {
        return $this->container['messageTime'];
    }

    /**
     * Sets messageTime
     *
     * @param \DateTime $messageTime The time when the message was sent or received. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setMessageTime($messageTime)
    {
        $this->container['messageTime'] = $messageTime;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageMedia[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageMedia[] $media The media (images, files, etc) associated with this message, if any
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets stickers
     *
     * @return \PureCloudPlatform\Client\V2\Model\MessageSticker[]
     */
    public function getStickers()
    {
        return $this->container['stickers'];
    }

    /**
     * Sets stickers
     *
     * @param \PureCloudPlatform\Client\V2\Model\MessageSticker[] $stickers One or more stickers associated with this message, if any
     *
     * @return $this
     */
    public function setStickers($stickers)
    {
        $this->container['stickers'] = $stickers;

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

