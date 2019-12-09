<?php
/**
 * Queue
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
 * Queue Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Queue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Queue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'division' => '\PureCloudPlatform\Client\V2\Model\Division',
        'description' => 'string',
        'dateCreated' => '\DateTime',
        'dateModified' => '\DateTime',
        'modifiedBy' => 'string',
        'createdBy' => 'string',
        'memberCount' => 'int',
        'mediaSettings' => 'map[string,\PureCloudPlatform\Client\V2\Model\MediaSetting]',
        'bullseye' => '\PureCloudPlatform\Client\V2\Model\Bullseye',
        'acwSettings' => '\PureCloudPlatform\Client\V2\Model\AcwSettings',
        'skillEvaluationMethod' => 'string',
        'queueFlow' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'whisperPrompt' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'autoAnswerOnly' => 'bool',
        'callingPartyName' => 'string',
        'callingPartyNumber' => 'string',
        'defaultScripts' => 'map[string,\PureCloudPlatform\Client\V2\Model\Script]',
        'outboundMessagingAddresses' => '\PureCloudPlatform\Client\V2\Model\QueueMessagingAddresses',
        'outboundEmailAddress' => '\PureCloudPlatform\Client\V2\Model\QueueEmailAddress',
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
        'division' => null,
        'description' => null,
        'dateCreated' => 'date-time',
        'dateModified' => 'date-time',
        'modifiedBy' => null,
        'createdBy' => null,
        'memberCount' => 'int32',
        'mediaSettings' => null,
        'bullseye' => null,
        'acwSettings' => null,
        'skillEvaluationMethod' => null,
        'queueFlow' => null,
        'whisperPrompt' => null,
        'autoAnswerOnly' => null,
        'callingPartyName' => null,
        'callingPartyNumber' => null,
        'defaultScripts' => null,
        'outboundMessagingAddresses' => null,
        'outboundEmailAddress' => null,
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
        'division' => 'division',
        'description' => 'description',
        'dateCreated' => 'dateCreated',
        'dateModified' => 'dateModified',
        'modifiedBy' => 'modifiedBy',
        'createdBy' => 'createdBy',
        'memberCount' => 'memberCount',
        'mediaSettings' => 'mediaSettings',
        'bullseye' => 'bullseye',
        'acwSettings' => 'acwSettings',
        'skillEvaluationMethod' => 'skillEvaluationMethod',
        'queueFlow' => 'queueFlow',
        'whisperPrompt' => 'whisperPrompt',
        'autoAnswerOnly' => 'autoAnswerOnly',
        'callingPartyName' => 'callingPartyName',
        'callingPartyNumber' => 'callingPartyNumber',
        'defaultScripts' => 'defaultScripts',
        'outboundMessagingAddresses' => 'outboundMessagingAddresses',
        'outboundEmailAddress' => 'outboundEmailAddress',
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
        'division' => 'setDivision',
        'description' => 'setDescription',
        'dateCreated' => 'setDateCreated',
        'dateModified' => 'setDateModified',
        'modifiedBy' => 'setModifiedBy',
        'createdBy' => 'setCreatedBy',
        'memberCount' => 'setMemberCount',
        'mediaSettings' => 'setMediaSettings',
        'bullseye' => 'setBullseye',
        'acwSettings' => 'setAcwSettings',
        'skillEvaluationMethod' => 'setSkillEvaluationMethod',
        'queueFlow' => 'setQueueFlow',
        'whisperPrompt' => 'setWhisperPrompt',
        'autoAnswerOnly' => 'setAutoAnswerOnly',
        'callingPartyName' => 'setCallingPartyName',
        'callingPartyNumber' => 'setCallingPartyNumber',
        'defaultScripts' => 'setDefaultScripts',
        'outboundMessagingAddresses' => 'setOutboundMessagingAddresses',
        'outboundEmailAddress' => 'setOutboundEmailAddress',
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
        'division' => 'getDivision',
        'description' => 'getDescription',
        'dateCreated' => 'getDateCreated',
        'dateModified' => 'getDateModified',
        'modifiedBy' => 'getModifiedBy',
        'createdBy' => 'getCreatedBy',
        'memberCount' => 'getMemberCount',
        'mediaSettings' => 'getMediaSettings',
        'bullseye' => 'getBullseye',
        'acwSettings' => 'getAcwSettings',
        'skillEvaluationMethod' => 'getSkillEvaluationMethod',
        'queueFlow' => 'getQueueFlow',
        'whisperPrompt' => 'getWhisperPrompt',
        'autoAnswerOnly' => 'getAutoAnswerOnly',
        'callingPartyName' => 'getCallingPartyName',
        'callingPartyNumber' => 'getCallingPartyNumber',
        'defaultScripts' => 'getDefaultScripts',
        'outboundMessagingAddresses' => 'getOutboundMessagingAddresses',
        'outboundEmailAddress' => 'getOutboundEmailAddress',
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

    const SKILL_EVALUATION_METHOD_NONE = 'NONE';
    const SKILL_EVALUATION_METHOD_BEST = 'BEST';
    const SKILL_EVALUATION_METHOD_ALL = 'ALL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSkillEvaluationMethodAllowableValues()
    {
        return [
            self::SKILL_EVALUATION_METHOD_NONE,
            self::SKILL_EVALUATION_METHOD_BEST,
            self::SKILL_EVALUATION_METHOD_ALL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['division'] = isset($data['division']) ? $data['division'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['memberCount'] = isset($data['memberCount']) ? $data['memberCount'] : null;
        $this->container['mediaSettings'] = isset($data['mediaSettings']) ? $data['mediaSettings'] : null;
        $this->container['bullseye'] = isset($data['bullseye']) ? $data['bullseye'] : null;
        $this->container['acwSettings'] = isset($data['acwSettings']) ? $data['acwSettings'] : null;
        $this->container['skillEvaluationMethod'] = isset($data['skillEvaluationMethod']) ? $data['skillEvaluationMethod'] : null;
        $this->container['queueFlow'] = isset($data['queueFlow']) ? $data['queueFlow'] : null;
        $this->container['whisperPrompt'] = isset($data['whisperPrompt']) ? $data['whisperPrompt'] : null;
        $this->container['autoAnswerOnly'] = isset($data['autoAnswerOnly']) ? $data['autoAnswerOnly'] : null;
        $this->container['callingPartyName'] = isset($data['callingPartyName']) ? $data['callingPartyName'] : null;
        $this->container['callingPartyNumber'] = isset($data['callingPartyNumber']) ? $data['callingPartyNumber'] : null;
        $this->container['defaultScripts'] = isset($data['defaultScripts']) ? $data['defaultScripts'] : null;
        $this->container['outboundMessagingAddresses'] = isset($data['outboundMessagingAddresses']) ? $data['outboundMessagingAddresses'] : null;
        $this->container['outboundEmailAddress'] = isset($data['outboundEmailAddress']) ? $data['outboundEmailAddress'] : null;
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

        $allowedValues = $this->getSkillEvaluationMethodAllowableValues();
        if (!is_null($this->container['skillEvaluationMethod']) && !in_array($this->container['skillEvaluationMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'skillEvaluationMethod', must be one of '%s'",
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
     * Gets division
     *
     * @return \PureCloudPlatform\Client\V2\Model\Division
     */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
     * Sets division
     *
     * @param \PureCloudPlatform\Client\V2\Model\Division $division The division to which this entity belongs.
     *
     * @return $this
     */
    public function setDivision($division)
    {
        $this->container['division'] = $division;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The queue description.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated The date the queue was created. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param \DateTime $dateModified The date of the last modification to the queue. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets modifiedBy
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
     * Sets modifiedBy
     *
     * @param string $modifiedBy The ID of the user that last modified the queue.
     *
     * @return $this
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string $createdBy The ID of the user that created the queue.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets memberCount
     *
     * @return int
     */
    public function getMemberCount()
    {
        return $this->container['memberCount'];
    }

    /**
     * Sets memberCount
     *
     * @param int $memberCount The number of users in the queue.
     *
     * @return $this
     */
    public function setMemberCount($memberCount)
    {
        $this->container['memberCount'] = $memberCount;

        return $this;
    }

    /**
     * Gets mediaSettings
     *
     * @return map[string,\PureCloudPlatform\Client\V2\Model\MediaSetting]
     */
    public function getMediaSettings()
    {
        return $this->container['mediaSettings'];
    }

    /**
     * Sets mediaSettings
     *
     * @param map[string,\PureCloudPlatform\Client\V2\Model\MediaSetting] $mediaSettings The media settings for the queue. Valid key values: CALL, CALLBACK, CHAT, EMAIL, MESSAGE, SOCIAL_EXPRESSION, VIDEO_COMM
     *
     * @return $this
     */
    public function setMediaSettings($mediaSettings)
    {
        $this->container['mediaSettings'] = $mediaSettings;

        return $this;
    }

    /**
     * Gets bullseye
     *
     * @return \PureCloudPlatform\Client\V2\Model\Bullseye
     */
    public function getBullseye()
    {
        return $this->container['bullseye'];
    }

    /**
     * Sets bullseye
     *
     * @param \PureCloudPlatform\Client\V2\Model\Bullseye $bullseye The bulls-eye settings for the queue.
     *
     * @return $this
     */
    public function setBullseye($bullseye)
    {
        $this->container['bullseye'] = $bullseye;

        return $this;
    }

    /**
     * Gets acwSettings
     *
     * @return \PureCloudPlatform\Client\V2\Model\AcwSettings
     */
    public function getAcwSettings()
    {
        return $this->container['acwSettings'];
    }

    /**
     * Sets acwSettings
     *
     * @param \PureCloudPlatform\Client\V2\Model\AcwSettings $acwSettings The ACW settings for the queue.
     *
     * @return $this
     */
    public function setAcwSettings($acwSettings)
    {
        $this->container['acwSettings'] = $acwSettings;

        return $this;
    }

    /**
     * Gets skillEvaluationMethod
     *
     * @return string
     */
    public function getSkillEvaluationMethod()
    {
        return $this->container['skillEvaluationMethod'];
    }

    /**
     * Sets skillEvaluationMethod
     *
     * @param string $skillEvaluationMethod The skill evaluation method to use when routing conversations.
     *
     * @return $this
     */
    public function setSkillEvaluationMethod($skillEvaluationMethod)
    {
        $allowedValues = $this->getSkillEvaluationMethodAllowableValues();
        if (!is_null($skillEvaluationMethod) && !in_array($skillEvaluationMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'skillEvaluationMethod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['skillEvaluationMethod'] = $skillEvaluationMethod;

        return $this;
    }

    /**
     * Gets queueFlow
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getQueueFlow()
    {
        return $this->container['queueFlow'];
    }

    /**
     * Sets queueFlow
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $queueFlow The in-queue flow to use for conversations waiting in queue.
     *
     * @return $this
     */
    public function setQueueFlow($queueFlow)
    {
        $this->container['queueFlow'] = $queueFlow;

        return $this;
    }

    /**
     * Gets whisperPrompt
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getWhisperPrompt()
    {
        return $this->container['whisperPrompt'];
    }

    /**
     * Sets whisperPrompt
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $whisperPrompt The prompt used for whisper on the queue, if configured.
     *
     * @return $this
     */
    public function setWhisperPrompt($whisperPrompt)
    {
        $this->container['whisperPrompt'] = $whisperPrompt;

        return $this;
    }

    /**
     * Gets autoAnswerOnly
     *
     * @return bool
     */
    public function getAutoAnswerOnly()
    {
        return $this->container['autoAnswerOnly'];
    }

    /**
     * Sets autoAnswerOnly
     *
     * @param bool $autoAnswerOnly Specifies whether the configured whisper should play for all ACD calls, or only for those which are auto-answered.
     *
     * @return $this
     */
    public function setAutoAnswerOnly($autoAnswerOnly)
    {
        $this->container['autoAnswerOnly'] = $autoAnswerOnly;

        return $this;
    }

    /**
     * Gets callingPartyName
     *
     * @return string
     */
    public function getCallingPartyName()
    {
        return $this->container['callingPartyName'];
    }

    /**
     * Sets callingPartyName
     *
     * @param string $callingPartyName The name to use for caller identification for outbound calls from this queue.
     *
     * @return $this
     */
    public function setCallingPartyName($callingPartyName)
    {
        $this->container['callingPartyName'] = $callingPartyName;

        return $this;
    }

    /**
     * Gets callingPartyNumber
     *
     * @return string
     */
    public function getCallingPartyNumber()
    {
        return $this->container['callingPartyNumber'];
    }

    /**
     * Sets callingPartyNumber
     *
     * @param string $callingPartyNumber The phone number to use for caller identification for outbound calls from this queue.
     *
     * @return $this
     */
    public function setCallingPartyNumber($callingPartyNumber)
    {
        $this->container['callingPartyNumber'] = $callingPartyNumber;

        return $this;
    }

    /**
     * Gets defaultScripts
     *
     * @return map[string,\PureCloudPlatform\Client\V2\Model\Script]
     */
    public function getDefaultScripts()
    {
        return $this->container['defaultScripts'];
    }

    /**
     * Sets defaultScripts
     *
     * @param map[string,\PureCloudPlatform\Client\V2\Model\Script] $defaultScripts The default script Ids for the communication types.
     *
     * @return $this
     */
    public function setDefaultScripts($defaultScripts)
    {
        $this->container['defaultScripts'] = $defaultScripts;

        return $this;
    }

    /**
     * Gets outboundMessagingAddresses
     *
     * @return \PureCloudPlatform\Client\V2\Model\QueueMessagingAddresses
     */
    public function getOutboundMessagingAddresses()
    {
        return $this->container['outboundMessagingAddresses'];
    }

    /**
     * Sets outboundMessagingAddresses
     *
     * @param \PureCloudPlatform\Client\V2\Model\QueueMessagingAddresses $outboundMessagingAddresses The messaging addresses for the queue.
     *
     * @return $this
     */
    public function setOutboundMessagingAddresses($outboundMessagingAddresses)
    {
        $this->container['outboundMessagingAddresses'] = $outboundMessagingAddresses;

        return $this;
    }

    /**
     * Gets outboundEmailAddress
     *
     * @return \PureCloudPlatform\Client\V2\Model\QueueEmailAddress
     */
    public function getOutboundEmailAddress()
    {
        return $this->container['outboundEmailAddress'];
    }

    /**
     * Sets outboundEmailAddress
     *
     * @param \PureCloudPlatform\Client\V2\Model\QueueEmailAddress $outboundEmailAddress outboundEmailAddress
     *
     * @return $this
     */
    public function setOutboundEmailAddress($outboundEmailAddress)
    {
        $this->container['outboundEmailAddress'] = $outboundEmailAddress;

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

