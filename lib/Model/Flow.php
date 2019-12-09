<?php
/**
 * Flow
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
 * Flow Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Flow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Flow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'division' => '\PureCloudPlatform\Client\V2\Model\WritableDivision',
        'description' => 'string',
        'type' => 'string',
        'lockedUser' => '\PureCloudPlatform\Client\V2\Model\User',
        'lockedClient' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'active' => 'bool',
        'system' => 'bool',
        'deleted' => 'bool',
        'publishedVersion' => '\PureCloudPlatform\Client\V2\Model\FlowVersion',
        'savedVersion' => '\PureCloudPlatform\Client\V2\Model\FlowVersion',
        'inputSchema' => 'object',
        'outputSchema' => 'object',
        'checkedInVersion' => '\PureCloudPlatform\Client\V2\Model\FlowVersion',
        'publishedBy' => '\PureCloudPlatform\Client\V2\Model\User',
        'currentOperation' => '\PureCloudPlatform\Client\V2\Model\Operation',
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
        'type' => null,
        'lockedUser' => null,
        'lockedClient' => null,
        'active' => null,
        'system' => null,
        'deleted' => null,
        'publishedVersion' => null,
        'savedVersion' => null,
        'inputSchema' => null,
        'outputSchema' => null,
        'checkedInVersion' => null,
        'publishedBy' => null,
        'currentOperation' => null,
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
        'type' => 'type',
        'lockedUser' => 'lockedUser',
        'lockedClient' => 'lockedClient',
        'active' => 'active',
        'system' => 'system',
        'deleted' => 'deleted',
        'publishedVersion' => 'publishedVersion',
        'savedVersion' => 'savedVersion',
        'inputSchema' => 'inputSchema',
        'outputSchema' => 'outputSchema',
        'checkedInVersion' => 'checkedInVersion',
        'publishedBy' => 'publishedBy',
        'currentOperation' => 'currentOperation',
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
        'type' => 'setType',
        'lockedUser' => 'setLockedUser',
        'lockedClient' => 'setLockedClient',
        'active' => 'setActive',
        'system' => 'setSystem',
        'deleted' => 'setDeleted',
        'publishedVersion' => 'setPublishedVersion',
        'savedVersion' => 'setSavedVersion',
        'inputSchema' => 'setInputSchema',
        'outputSchema' => 'setOutputSchema',
        'checkedInVersion' => 'setCheckedInVersion',
        'publishedBy' => 'setPublishedBy',
        'currentOperation' => 'setCurrentOperation',
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
        'type' => 'getType',
        'lockedUser' => 'getLockedUser',
        'lockedClient' => 'getLockedClient',
        'active' => 'getActive',
        'system' => 'getSystem',
        'deleted' => 'getDeleted',
        'publishedVersion' => 'getPublishedVersion',
        'savedVersion' => 'getSavedVersion',
        'inputSchema' => 'getInputSchema',
        'outputSchema' => 'getOutputSchema',
        'checkedInVersion' => 'getCheckedInVersion',
        'publishedBy' => 'getPublishedBy',
        'currentOperation' => 'getCurrentOperation',
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

    const TYPE_COMMONMODULE = 'COMMONMODULE';
    const TYPE_INBOUNDCALL = 'INBOUNDCALL';
    const TYPE_INBOUNDCHAT = 'INBOUNDCHAT';
    const TYPE_INBOUNDEMAIL = 'INBOUNDEMAIL';
    const TYPE_INBOUNDSHORTMESSAGE = 'INBOUNDSHORTMESSAGE';
    const TYPE_INQUEUECALL = 'INQUEUECALL';
    const TYPE_OUTBOUNDCALL = 'OUTBOUNDCALL';
    const TYPE_SECURECALL = 'SECURECALL';
    const TYPE_SPEECH = 'SPEECH';
    const TYPE_SURVEYINVITE = 'SURVEYINVITE';
    const TYPE_WORKFLOW = 'WORKFLOW';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMMONMODULE,
            self::TYPE_INBOUNDCALL,
            self::TYPE_INBOUNDCHAT,
            self::TYPE_INBOUNDEMAIL,
            self::TYPE_INBOUNDSHORTMESSAGE,
            self::TYPE_INQUEUECALL,
            self::TYPE_OUTBOUNDCALL,
            self::TYPE_SECURECALL,
            self::TYPE_SPEECH,
            self::TYPE_SURVEYINVITE,
            self::TYPE_WORKFLOW,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['lockedUser'] = isset($data['lockedUser']) ? $data['lockedUser'] : null;
        $this->container['lockedClient'] = isset($data['lockedClient']) ? $data['lockedClient'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['publishedVersion'] = isset($data['publishedVersion']) ? $data['publishedVersion'] : null;
        $this->container['savedVersion'] = isset($data['savedVersion']) ? $data['savedVersion'] : null;
        $this->container['inputSchema'] = isset($data['inputSchema']) ? $data['inputSchema'] : null;
        $this->container['outputSchema'] = isset($data['outputSchema']) ? $data['outputSchema'] : null;
        $this->container['checkedInVersion'] = isset($data['checkedInVersion']) ? $data['checkedInVersion'] : null;
        $this->container['publishedBy'] = isset($data['publishedBy']) ? $data['publishedBy'] : null;
        $this->container['currentOperation'] = isset($data['currentOperation']) ? $data['currentOperation'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @param string $id The flow identifier
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
     * @param string $name The flow name
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
     * @return \PureCloudPlatform\Client\V2\Model\WritableDivision
     */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
     * Sets division
     *
     * @param \PureCloudPlatform\Client\V2\Model\WritableDivision $division The division to which this entity belongs.
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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets lockedUser
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getLockedUser()
    {
        return $this->container['lockedUser'];
    }

    /**
     * Sets lockedUser
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $lockedUser User that has the flow locked.
     *
     * @return $this
     */
    public function setLockedUser($lockedUser)
    {
        $this->container['lockedUser'] = $lockedUser;

        return $this;
    }

    /**
     * Gets lockedClient
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getLockedClient()
    {
        return $this->container['lockedClient'];
    }

    /**
     * Sets lockedClient
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $lockedClient OAuth client that has the flow locked.
     *
     * @return $this
     */
    public function setLockedClient($lockedClient)
    {
        $this->container['lockedClient'] = $lockedClient;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets system
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param bool $system system
     *
     * @return $this
     */
    public function setSystem($system)
    {
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets publishedVersion
     *
     * @return \PureCloudPlatform\Client\V2\Model\FlowVersion
     */
    public function getPublishedVersion()
    {
        return $this->container['publishedVersion'];
    }

    /**
     * Sets publishedVersion
     *
     * @param \PureCloudPlatform\Client\V2\Model\FlowVersion $publishedVersion publishedVersion
     *
     * @return $this
     */
    public function setPublishedVersion($publishedVersion)
    {
        $this->container['publishedVersion'] = $publishedVersion;

        return $this;
    }

    /**
     * Gets savedVersion
     *
     * @return \PureCloudPlatform\Client\V2\Model\FlowVersion
     */
    public function getSavedVersion()
    {
        return $this->container['savedVersion'];
    }

    /**
     * Sets savedVersion
     *
     * @param \PureCloudPlatform\Client\V2\Model\FlowVersion $savedVersion savedVersion
     *
     * @return $this
     */
    public function setSavedVersion($savedVersion)
    {
        $this->container['savedVersion'] = $savedVersion;

        return $this;
    }

    /**
     * Gets inputSchema
     *
     * @return object
     */
    public function getInputSchema()
    {
        return $this->container['inputSchema'];
    }

    /**
     * Sets inputSchema
     *
     * @param object $inputSchema json schema describing the inputs for the flow
     *
     * @return $this
     */
    public function setInputSchema($inputSchema)
    {
        $this->container['inputSchema'] = $inputSchema;

        return $this;
    }

    /**
     * Gets outputSchema
     *
     * @return object
     */
    public function getOutputSchema()
    {
        return $this->container['outputSchema'];
    }

    /**
     * Sets outputSchema
     *
     * @param object $outputSchema json schema describing the outputs for the flow
     *
     * @return $this
     */
    public function setOutputSchema($outputSchema)
    {
        $this->container['outputSchema'] = $outputSchema;

        return $this;
    }

    /**
     * Gets checkedInVersion
     *
     * @return \PureCloudPlatform\Client\V2\Model\FlowVersion
     */
    public function getCheckedInVersion()
    {
        return $this->container['checkedInVersion'];
    }

    /**
     * Sets checkedInVersion
     *
     * @param \PureCloudPlatform\Client\V2\Model\FlowVersion $checkedInVersion checkedInVersion
     *
     * @return $this
     */
    public function setCheckedInVersion($checkedInVersion)
    {
        $this->container['checkedInVersion'] = $checkedInVersion;

        return $this;
    }

    /**
     * Gets publishedBy
     *
     * @return \PureCloudPlatform\Client\V2\Model\User
     */
    public function getPublishedBy()
    {
        return $this->container['publishedBy'];
    }

    /**
     * Sets publishedBy
     *
     * @param \PureCloudPlatform\Client\V2\Model\User $publishedBy publishedBy
     *
     * @return $this
     */
    public function setPublishedBy($publishedBy)
    {
        $this->container['publishedBy'] = $publishedBy;

        return $this;
    }

    /**
     * Gets currentOperation
     *
     * @return \PureCloudPlatform\Client\V2\Model\Operation
     */
    public function getCurrentOperation()
    {
        return $this->container['currentOperation'];
    }

    /**
     * Sets currentOperation
     *
     * @param \PureCloudPlatform\Client\V2\Model\Operation $currentOperation currentOperation
     *
     * @return $this
     */
    public function setCurrentOperation($currentOperation)
    {
        $this->container['currentOperation'] = $currentOperation;

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

