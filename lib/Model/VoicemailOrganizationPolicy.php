<?php
/**
 * VoicemailOrganizationPolicy
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
 * VoicemailOrganizationPolicy Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoicemailOrganizationPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoicemailOrganizationPolicy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'alertTimeoutSeconds' => 'int',
        'pinConfiguration' => '\PureCloudPlatform\Client\V2\Model\PINConfiguration',
        'voicemailExtension' => 'string',
        'pinRequired' => 'bool',
        'sendEmailNotifications' => 'bool',
        'modifiedDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'alertTimeoutSeconds' => 'int32',
        'pinConfiguration' => null,
        'voicemailExtension' => null,
        'pinRequired' => null,
        'sendEmailNotifications' => null,
        'modifiedDate' => 'date-time'
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
        'enabled' => 'enabled',
        'alertTimeoutSeconds' => 'alertTimeoutSeconds',
        'pinConfiguration' => 'pinConfiguration',
        'voicemailExtension' => 'voicemailExtension',
        'pinRequired' => 'pinRequired',
        'sendEmailNotifications' => 'sendEmailNotifications',
        'modifiedDate' => 'modifiedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'alertTimeoutSeconds' => 'setAlertTimeoutSeconds',
        'pinConfiguration' => 'setPinConfiguration',
        'voicemailExtension' => 'setVoicemailExtension',
        'pinRequired' => 'setPinRequired',
        'sendEmailNotifications' => 'setSendEmailNotifications',
        'modifiedDate' => 'setModifiedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'alertTimeoutSeconds' => 'getAlertTimeoutSeconds',
        'pinConfiguration' => 'getPinConfiguration',
        'voicemailExtension' => 'getVoicemailExtension',
        'pinRequired' => 'getPinRequired',
        'sendEmailNotifications' => 'getSendEmailNotifications',
        'modifiedDate' => 'getModifiedDate'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['alertTimeoutSeconds'] = isset($data['alertTimeoutSeconds']) ? $data['alertTimeoutSeconds'] : null;
        $this->container['pinConfiguration'] = isset($data['pinConfiguration']) ? $data['pinConfiguration'] : null;
        $this->container['voicemailExtension'] = isset($data['voicemailExtension']) ? $data['voicemailExtension'] : null;
        $this->container['pinRequired'] = isset($data['pinRequired']) ? $data['pinRequired'] : null;
        $this->container['sendEmailNotifications'] = isset($data['sendEmailNotifications']) ? $data['sendEmailNotifications'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Whether voicemail is enable for this organization
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets alertTimeoutSeconds
     *
     * @return int
     */
    public function getAlertTimeoutSeconds()
    {
        return $this->container['alertTimeoutSeconds'];
    }

    /**
     * Sets alertTimeoutSeconds
     *
     * @param int $alertTimeoutSeconds The organization's default number of seconds to ring a user's phone before a call is transfered to voicemail
     *
     * @return $this
     */
    public function setAlertTimeoutSeconds($alertTimeoutSeconds)
    {
        $this->container['alertTimeoutSeconds'] = $alertTimeoutSeconds;

        return $this;
    }

    /**
     * Gets pinConfiguration
     *
     * @return \PureCloudPlatform\Client\V2\Model\PINConfiguration
     */
    public function getPinConfiguration()
    {
        return $this->container['pinConfiguration'];
    }

    /**
     * Sets pinConfiguration
     *
     * @param \PureCloudPlatform\Client\V2\Model\PINConfiguration $pinConfiguration The configuration for user PINs to access their voicemail from a phone
     *
     * @return $this
     */
    public function setPinConfiguration($pinConfiguration)
    {
        $this->container['pinConfiguration'] = $pinConfiguration;

        return $this;
    }

    /**
     * Gets voicemailExtension
     *
     * @return string
     */
    public function getVoicemailExtension()
    {
        return $this->container['voicemailExtension'];
    }

    /**
     * Sets voicemailExtension
     *
     * @param string $voicemailExtension The extension for voicemail retrieval.  The default value is *86.
     *
     * @return $this
     */
    public function setVoicemailExtension($voicemailExtension)
    {
        $this->container['voicemailExtension'] = $voicemailExtension;

        return $this;
    }

    /**
     * Gets pinRequired
     *
     * @return bool
     */
    public function getPinRequired()
    {
        return $this->container['pinRequired'];
    }

    /**
     * Sets pinRequired
     *
     * @param bool $pinRequired If this is true, a PIN is required when accessing a user's voicemail from a phone.
     *
     * @return $this
     */
    public function setPinRequired($pinRequired)
    {
        $this->container['pinRequired'] = $pinRequired;

        return $this;
    }

    /**
     * Gets sendEmailNotifications
     *
     * @return bool
     */
    public function getSendEmailNotifications()
    {
        return $this->container['sendEmailNotifications'];
    }

    /**
     * Sets sendEmailNotifications
     *
     * @param bool $sendEmailNotifications Whether email notifications are sent for new voicemails in the organization. If false, new voicemail email notifications are not be sent for the organization overriding any user or group setting.
     *
     * @return $this
     */
    public function setSendEmailNotifications($sendEmailNotifications)
    {
        $this->container['sendEmailNotifications'] = $sendEmailNotifications;

        return $this;
    }

    /**
     * Gets modifiedDate
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
     * Sets modifiedDate
     *
     * @param \DateTime $modifiedDate The date the policy was last modified. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;

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

