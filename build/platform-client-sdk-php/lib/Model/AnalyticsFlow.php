<?php
/**
 * AnalyticsFlow
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
 * AnalyticsFlow Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnalyticsFlow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsFlow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'flowId' => 'string',
        'flowName' => 'string',
        'flowVersion' => 'string',
        'flowType' => 'string',
        'exitReason' => 'string',
        'entryReason' => 'string',
        'entryType' => 'string',
        'transferType' => 'string',
        'transferTargetName' => 'string',
        'transferTargetAddress' => 'string',
        'issuedCallback' => 'bool',
        'startingLanguage' => 'string',
        'endingLanguage' => 'string',
        'outcomes' => '\PureCloudPlatform\Client\V2\Model\AnalyticsFlowOutcome[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'flowId' => null,
        'flowName' => null,
        'flowVersion' => null,
        'flowType' => null,
        'exitReason' => null,
        'entryReason' => null,
        'entryType' => null,
        'transferType' => null,
        'transferTargetName' => null,
        'transferTargetAddress' => null,
        'issuedCallback' => null,
        'startingLanguage' => null,
        'endingLanguage' => null,
        'outcomes' => null
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
        'flowId' => 'flowId',
        'flowName' => 'flowName',
        'flowVersion' => 'flowVersion',
        'flowType' => 'flowType',
        'exitReason' => 'exitReason',
        'entryReason' => 'entryReason',
        'entryType' => 'entryType',
        'transferType' => 'transferType',
        'transferTargetName' => 'transferTargetName',
        'transferTargetAddress' => 'transferTargetAddress',
        'issuedCallback' => 'issuedCallback',
        'startingLanguage' => 'startingLanguage',
        'endingLanguage' => 'endingLanguage',
        'outcomes' => 'outcomes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'flowId' => 'setFlowId',
        'flowName' => 'setFlowName',
        'flowVersion' => 'setFlowVersion',
        'flowType' => 'setFlowType',
        'exitReason' => 'setExitReason',
        'entryReason' => 'setEntryReason',
        'entryType' => 'setEntryType',
        'transferType' => 'setTransferType',
        'transferTargetName' => 'setTransferTargetName',
        'transferTargetAddress' => 'setTransferTargetAddress',
        'issuedCallback' => 'setIssuedCallback',
        'startingLanguage' => 'setStartingLanguage',
        'endingLanguage' => 'setEndingLanguage',
        'outcomes' => 'setOutcomes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'flowId' => 'getFlowId',
        'flowName' => 'getFlowName',
        'flowVersion' => 'getFlowVersion',
        'flowType' => 'getFlowType',
        'exitReason' => 'getExitReason',
        'entryReason' => 'getEntryReason',
        'entryType' => 'getEntryType',
        'transferType' => 'getTransferType',
        'transferTargetName' => 'getTransferTargetName',
        'transferTargetAddress' => 'getTransferTargetAddress',
        'issuedCallback' => 'getIssuedCallback',
        'startingLanguage' => 'getStartingLanguage',
        'endingLanguage' => 'getEndingLanguage',
        'outcomes' => 'getOutcomes'
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

    const FLOW_TYPE_COMMONMODULE = 'COMMONMODULE';
    const FLOW_TYPE_INBOUNDCALL = 'INBOUNDCALL';
    const FLOW_TYPE_INBOUNDCHAT = 'INBOUNDCHAT';
    const FLOW_TYPE_INBOUNDEMAIL = 'INBOUNDEMAIL';
    const FLOW_TYPE_INBOUNDSHORTMESSAGE = 'INBOUNDSHORTMESSAGE';
    const FLOW_TYPE_INQUEUECALL = 'INQUEUECALL';
    const FLOW_TYPE_OUTBOUNDCALL = 'OUTBOUNDCALL';
    const FLOW_TYPE_SECURECALL = 'SECURECALL';
    const FLOW_TYPE_SPEECH = 'SPEECH';
    const FLOW_TYPE_SURVEYINVITE = 'SURVEYINVITE';
    const FLOW_TYPE_WORKFLOW = 'WORKFLOW';
    const ENTRY_TYPE_DNIS = 'dnis';
    const ENTRY_TYPE_DIRECT = 'direct';
    const ENTRY_TYPE_FLOW = 'flow';
    const ENTRY_TYPE_AGENT = 'agent';
    const ENTRY_TYPE_OUTBOUND = 'outbound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlowTypeAllowableValues()
    {
        return [
            self::FLOW_TYPE_COMMONMODULE,
            self::FLOW_TYPE_INBOUNDCALL,
            self::FLOW_TYPE_INBOUNDCHAT,
            self::FLOW_TYPE_INBOUNDEMAIL,
            self::FLOW_TYPE_INBOUNDSHORTMESSAGE,
            self::FLOW_TYPE_INQUEUECALL,
            self::FLOW_TYPE_OUTBOUNDCALL,
            self::FLOW_TYPE_SECURECALL,
            self::FLOW_TYPE_SPEECH,
            self::FLOW_TYPE_SURVEYINVITE,
            self::FLOW_TYPE_WORKFLOW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntryTypeAllowableValues()
    {
        return [
            self::ENTRY_TYPE_DNIS,
            self::ENTRY_TYPE_DIRECT,
            self::ENTRY_TYPE_FLOW,
            self::ENTRY_TYPE_AGENT,
            self::ENTRY_TYPE_OUTBOUND,
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
        $this->container['flowId'] = isset($data['flowId']) ? $data['flowId'] : null;
        $this->container['flowName'] = isset($data['flowName']) ? $data['flowName'] : null;
        $this->container['flowVersion'] = isset($data['flowVersion']) ? $data['flowVersion'] : null;
        $this->container['flowType'] = isset($data['flowType']) ? $data['flowType'] : null;
        $this->container['exitReason'] = isset($data['exitReason']) ? $data['exitReason'] : null;
        $this->container['entryReason'] = isset($data['entryReason']) ? $data['entryReason'] : null;
        $this->container['entryType'] = isset($data['entryType']) ? $data['entryType'] : null;
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['transferTargetName'] = isset($data['transferTargetName']) ? $data['transferTargetName'] : null;
        $this->container['transferTargetAddress'] = isset($data['transferTargetAddress']) ? $data['transferTargetAddress'] : null;
        $this->container['issuedCallback'] = isset($data['issuedCallback']) ? $data['issuedCallback'] : null;
        $this->container['startingLanguage'] = isset($data['startingLanguage']) ? $data['startingLanguage'] : null;
        $this->container['endingLanguage'] = isset($data['endingLanguage']) ? $data['endingLanguage'] : null;
        $this->container['outcomes'] = isset($data['outcomes']) ? $data['outcomes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFlowTypeAllowableValues();
        if (!is_null($this->container['flowType']) && !in_array($this->container['flowType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'flowType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEntryTypeAllowableValues();
        if (!is_null($this->container['entryType']) && !in_array($this->container['entryType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'entryType', must be one of '%s'",
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
     * Gets flowId
     *
     * @return string
     */
    public function getFlowId()
    {
        return $this->container['flowId'];
    }

    /**
     * Sets flowId
     *
     * @param string $flowId The unique identifier of this flow
     *
     * @return $this
     */
    public function setFlowId($flowId)
    {
        $this->container['flowId'] = $flowId;

        return $this;
    }

    /**
     * Gets flowName
     *
     * @return string
     */
    public function getFlowName()
    {
        return $this->container['flowName'];
    }

    /**
     * Sets flowName
     *
     * @param string $flowName The name of this flow
     *
     * @return $this
     */
    public function setFlowName($flowName)
    {
        $this->container['flowName'] = $flowName;

        return $this;
    }

    /**
     * Gets flowVersion
     *
     * @return string
     */
    public function getFlowVersion()
    {
        return $this->container['flowVersion'];
    }

    /**
     * Sets flowVersion
     *
     * @param string $flowVersion The version of this flow
     *
     * @return $this
     */
    public function setFlowVersion($flowVersion)
    {
        $this->container['flowVersion'] = $flowVersion;

        return $this;
    }

    /**
     * Gets flowType
     *
     * @return string
     */
    public function getFlowType()
    {
        return $this->container['flowType'];
    }

    /**
     * Sets flowType
     *
     * @param string $flowType The type of this flow
     *
     * @return $this
     */
    public function setFlowType($flowType)
    {
        $allowedValues = $this->getFlowTypeAllowableValues();
        if (!is_null($flowType) && !in_array($flowType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'flowType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flowType'] = $flowType;

        return $this;
    }

    /**
     * Gets exitReason
     *
     * @return string
     */
    public function getExitReason()
    {
        return $this->container['exitReason'];
    }

    /**
     * Sets exitReason
     *
     * @param string $exitReason The exit reason for this flow, e.g. DISCONNECT
     *
     * @return $this
     */
    public function setExitReason($exitReason)
    {
        $this->container['exitReason'] = $exitReason;

        return $this;
    }

    /**
     * Gets entryReason
     *
     * @return string
     */
    public function getEntryReason()
    {
        return $this->container['entryReason'];
    }

    /**
     * Sets entryReason
     *
     * @param string $entryReason The particular entry reason for this flow, e.g. an address, userId, or flowId
     *
     * @return $this
     */
    public function setEntryReason($entryReason)
    {
        $this->container['entryReason'] = $entryReason;

        return $this;
    }

    /**
     * Gets entryType
     *
     * @return string
     */
    public function getEntryType()
    {
        return $this->container['entryType'];
    }

    /**
     * Sets entryType
     *
     * @param string $entryType The entry type for this flow
     *
     * @return $this
     */
    public function setEntryType($entryType)
    {
        $allowedValues = $this->getEntryTypeAllowableValues();
        if (!is_null($entryType) && !in_array($entryType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entryType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entryType'] = $entryType;

        return $this;
    }

    /**
     * Gets transferType
     *
     * @return string
     */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
     * Sets transferType
     *
     * @param string $transferType The type of transfer for flows that ended with a transfer
     *
     * @return $this
     */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;

        return $this;
    }

    /**
     * Gets transferTargetName
     *
     * @return string
     */
    public function getTransferTargetName()
    {
        return $this->container['transferTargetName'];
    }

    /**
     * Sets transferTargetName
     *
     * @param string $transferTargetName The name of a transfer target
     *
     * @return $this
     */
    public function setTransferTargetName($transferTargetName)
    {
        $this->container['transferTargetName'] = $transferTargetName;

        return $this;
    }

    /**
     * Gets transferTargetAddress
     *
     * @return string
     */
    public function getTransferTargetAddress()
    {
        return $this->container['transferTargetAddress'];
    }

    /**
     * Sets transferTargetAddress
     *
     * @param string $transferTargetAddress The address of a transfer target
     *
     * @return $this
     */
    public function setTransferTargetAddress($transferTargetAddress)
    {
        $this->container['transferTargetAddress'] = $transferTargetAddress;

        return $this;
    }

    /**
     * Gets issuedCallback
     *
     * @return bool
     */
    public function getIssuedCallback()
    {
        return $this->container['issuedCallback'];
    }

    /**
     * Sets issuedCallback
     *
     * @param bool $issuedCallback Flag indicating whether the flow issued a callback
     *
     * @return $this
     */
    public function setIssuedCallback($issuedCallback)
    {
        $this->container['issuedCallback'] = $issuedCallback;

        return $this;
    }

    /**
     * Gets startingLanguage
     *
     * @return string
     */
    public function getStartingLanguage()
    {
        return $this->container['startingLanguage'];
    }

    /**
     * Sets startingLanguage
     *
     * @param string $startingLanguage Flow starting language, e.g. en-us
     *
     * @return $this
     */
    public function setStartingLanguage($startingLanguage)
    {
        $this->container['startingLanguage'] = $startingLanguage;

        return $this;
    }

    /**
     * Gets endingLanguage
     *
     * @return string
     */
    public function getEndingLanguage()
    {
        return $this->container['endingLanguage'];
    }

    /**
     * Sets endingLanguage
     *
     * @param string $endingLanguage Flow ending language, e.g. en-us
     *
     * @return $this
     */
    public function setEndingLanguage($endingLanguage)
    {
        $this->container['endingLanguage'] = $endingLanguage;

        return $this;
    }

    /**
     * Gets outcomes
     *
     * @return \PureCloudPlatform\Client\V2\Model\AnalyticsFlowOutcome[]
     */
    public function getOutcomes()
    {
        return $this->container['outcomes'];
    }

    /**
     * Sets outcomes
     *
     * @param \PureCloudPlatform\Client\V2\Model\AnalyticsFlowOutcome[] $outcomes Flow outcomes
     *
     * @return $this
     */
    public function setOutcomes($outcomes)
    {
        $this->container['outcomes'] = $outcomes;

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

