<?php
/**
 * EmailMessage
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
 * EmailMessage Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'to' => '\PureCloudPlatform\Client\V2\Model\EmailAddress[]',
        'cc' => '\PureCloudPlatform\Client\V2\Model\EmailAddress[]',
        'bcc' => '\PureCloudPlatform\Client\V2\Model\EmailAddress[]',
        'from' => '\PureCloudPlatform\Client\V2\Model\EmailAddress',
        'subject' => 'string',
        'attachments' => '\PureCloudPlatform\Client\V2\Model\Attachment[]',
        'textBody' => 'string',
        'htmlBody' => 'string',
        'time' => '\DateTime',
        'historyIncluded' => 'bool',
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
        'to' => null,
        'cc' => null,
        'bcc' => null,
        'from' => null,
        'subject' => null,
        'attachments' => null,
        'textBody' => null,
        'htmlBody' => null,
        'time' => 'date-time',
        'historyIncluded' => null,
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
        'to' => 'to',
        'cc' => 'cc',
        'bcc' => 'bcc',
        'from' => 'from',
        'subject' => 'subject',
        'attachments' => 'attachments',
        'textBody' => 'textBody',
        'htmlBody' => 'htmlBody',
        'time' => 'time',
        'historyIncluded' => 'historyIncluded',
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
        'to' => 'setTo',
        'cc' => 'setCc',
        'bcc' => 'setBcc',
        'from' => 'setFrom',
        'subject' => 'setSubject',
        'attachments' => 'setAttachments',
        'textBody' => 'setTextBody',
        'htmlBody' => 'setHtmlBody',
        'time' => 'setTime',
        'historyIncluded' => 'setHistoryIncluded',
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
        'to' => 'getTo',
        'cc' => 'getCc',
        'bcc' => 'getBcc',
        'from' => 'getFrom',
        'subject' => 'getSubject',
        'attachments' => 'getAttachments',
        'textBody' => 'getTextBody',
        'htmlBody' => 'getHtmlBody',
        'time' => 'getTime',
        'historyIncluded' => 'getHistoryIncluded',
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
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['textBody'] = isset($data['textBody']) ? $data['textBody'] : null;
        $this->container['htmlBody'] = isset($data['htmlBody']) ? $data['htmlBody'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['historyIncluded'] = isset($data['historyIncluded']) ? $data['historyIncluded'] : null;
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

        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['textBody'] === null) {
            $invalidProperties[] = "'textBody' can't be null";
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
     * Gets to
     *
     * @return \PureCloudPlatform\Client\V2\Model\EmailAddress[]
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \PureCloudPlatform\Client\V2\Model\EmailAddress[] $to The recipients of the email message.
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return \PureCloudPlatform\Client\V2\Model\EmailAddress[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param \PureCloudPlatform\Client\V2\Model\EmailAddress[] $cc The recipients that were copied on the email message.
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets bcc
     *
     * @return \PureCloudPlatform\Client\V2\Model\EmailAddress[]
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param \PureCloudPlatform\Client\V2\Model\EmailAddress[] $bcc The recipients that were blind copied on the email message.
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \PureCloudPlatform\Client\V2\Model\EmailAddress
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \PureCloudPlatform\Client\V2\Model\EmailAddress $from The sender of the email message.
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject The subject of the email message.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \PureCloudPlatform\Client\V2\Model\Attachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \PureCloudPlatform\Client\V2\Model\Attachment[] $attachments The attachments of the email message.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets textBody
     *
     * @return string
     */
    public function getTextBody()
    {
        return $this->container['textBody'];
    }

    /**
     * Sets textBody
     *
     * @param string $textBody The text body of the email message.
     *
     * @return $this
     */
    public function setTextBody($textBody)
    {
        $this->container['textBody'] = $textBody;

        return $this;
    }

    /**
     * Gets htmlBody
     *
     * @return string
     */
    public function getHtmlBody()
    {
        return $this->container['htmlBody'];
    }

    /**
     * Sets htmlBody
     *
     * @param string $htmlBody The html body of the email message.
     *
     * @return $this
     */
    public function setHtmlBody($htmlBody)
    {
        $this->container['htmlBody'] = $htmlBody;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime $time The time when the message was received or sent. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets historyIncluded
     *
     * @return bool
     */
    public function getHistoryIncluded()
    {
        return $this->container['historyIncluded'];
    }

    /**
     * Sets historyIncluded
     *
     * @param bool $historyIncluded Indicates whether the history of previous emails of the conversation is included within the email bodies of this message.
     *
     * @return $this
     */
    public function setHistoryIncluded($historyIncluded)
    {
        $this->container['historyIncluded'] = $historyIncluded;

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

