<?php
/**
 * AnalyticsEvaluation
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
 * AnalyticsEvaluation Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AnalyticsEvaluation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AnalyticsEvaluation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'evaluationId' => 'string',
        'evaluatorId' => 'string',
        'userId' => 'string',
        'eventTime' => '\DateTime',
        'queueId' => 'string',
        'formId' => 'string',
        'contextId' => 'string',
        'formName' => 'string',
        'calibrationId' => 'string',
        'rescored' => 'bool',
        'deleted' => 'bool',
        'oTotalScore' => 'int',
        'oTotalCriticalScore' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'evaluationId' => null,
        'evaluatorId' => null,
        'userId' => null,
        'eventTime' => 'date-time',
        'queueId' => null,
        'formId' => null,
        'contextId' => null,
        'formName' => null,
        'calibrationId' => null,
        'rescored' => null,
        'deleted' => null,
        'oTotalScore' => 'int64',
        'oTotalCriticalScore' => 'int64'
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
        'evaluationId' => 'evaluationId',
        'evaluatorId' => 'evaluatorId',
        'userId' => 'userId',
        'eventTime' => 'eventTime',
        'queueId' => 'queueId',
        'formId' => 'formId',
        'contextId' => 'contextId',
        'formName' => 'formName',
        'calibrationId' => 'calibrationId',
        'rescored' => 'rescored',
        'deleted' => 'deleted',
        'oTotalScore' => 'oTotalScore',
        'oTotalCriticalScore' => 'oTotalCriticalScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evaluationId' => 'setEvaluationId',
        'evaluatorId' => 'setEvaluatorId',
        'userId' => 'setUserId',
        'eventTime' => 'setEventTime',
        'queueId' => 'setQueueId',
        'formId' => 'setFormId',
        'contextId' => 'setContextId',
        'formName' => 'setFormName',
        'calibrationId' => 'setCalibrationId',
        'rescored' => 'setRescored',
        'deleted' => 'setDeleted',
        'oTotalScore' => 'setOTotalScore',
        'oTotalCriticalScore' => 'setOTotalCriticalScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evaluationId' => 'getEvaluationId',
        'evaluatorId' => 'getEvaluatorId',
        'userId' => 'getUserId',
        'eventTime' => 'getEventTime',
        'queueId' => 'getQueueId',
        'formId' => 'getFormId',
        'contextId' => 'getContextId',
        'formName' => 'getFormName',
        'calibrationId' => 'getCalibrationId',
        'rescored' => 'getRescored',
        'deleted' => 'getDeleted',
        'oTotalScore' => 'getOTotalScore',
        'oTotalCriticalScore' => 'getOTotalCriticalScore'
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
        $this->container['evaluationId'] = isset($data['evaluationId']) ? $data['evaluationId'] : null;
        $this->container['evaluatorId'] = isset($data['evaluatorId']) ? $data['evaluatorId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['eventTime'] = isset($data['eventTime']) ? $data['eventTime'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['formId'] = isset($data['formId']) ? $data['formId'] : null;
        $this->container['contextId'] = isset($data['contextId']) ? $data['contextId'] : null;
        $this->container['formName'] = isset($data['formName']) ? $data['formName'] : null;
        $this->container['calibrationId'] = isset($data['calibrationId']) ? $data['calibrationId'] : null;
        $this->container['rescored'] = isset($data['rescored']) ? $data['rescored'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['oTotalScore'] = isset($data['oTotalScore']) ? $data['oTotalScore'] : null;
        $this->container['oTotalCriticalScore'] = isset($data['oTotalCriticalScore']) ? $data['oTotalCriticalScore'] : null;
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
     * Gets evaluationId
     *
     * @return string
     */
    public function getEvaluationId()
    {
        return $this->container['evaluationId'];
    }

    /**
     * Sets evaluationId
     *
     * @param string $evaluationId Unique identifier for the evaluation
     *
     * @return $this
     */
    public function setEvaluationId($evaluationId)
    {
        $this->container['evaluationId'] = $evaluationId;

        return $this;
    }

    /**
     * Gets evaluatorId
     *
     * @return string
     */
    public function getEvaluatorId()
    {
        return $this->container['evaluatorId'];
    }

    /**
     * Sets evaluatorId
     *
     * @param string $evaluatorId A unique identifier of the PureCloud user who evaluated the interaction
     *
     * @return $this
     */
    public function setEvaluatorId($evaluatorId)
    {
        $this->container['evaluatorId'] = $evaluatorId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string $userId Unique identifier for the user being evaluated
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets eventTime
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
     * Sets eventTime
     *
     * @param \DateTime $eventTime Specifies when an evaluation occurred. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setEventTime($eventTime)
    {
        $this->container['eventTime'] = $eventTime;

        return $this;
    }

    /**
     * Gets queueId
     *
     * @return string
     */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
     * Sets queueId
     *
     * @param string $queueId Unique identifier for the queue the conversation was on
     *
     * @return $this
     */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;

        return $this;
    }

    /**
     * Gets formId
     *
     * @return string
     */
    public function getFormId()
    {
        return $this->container['formId'];
    }

    /**
     * Sets formId
     *
     * @param string $formId Unique identifier for the form used to evaluate the conversation/agent
     *
     * @return $this
     */
    public function setFormId($formId)
    {
        $this->container['formId'] = $formId;

        return $this;
    }

    /**
     * Gets contextId
     *
     * @return string
     */
    public function getContextId()
    {
        return $this->container['contextId'];
    }

    /**
     * Sets contextId
     *
     * @param string $contextId A unique identifier for an evaluation form, regardless of version
     *
     * @return $this
     */
    public function setContextId($contextId)
    {
        $this->container['contextId'] = $contextId;

        return $this;
    }

    /**
     * Gets formName
     *
     * @return string
     */
    public function getFormName()
    {
        return $this->container['formName'];
    }

    /**
     * Sets formName
     *
     * @param string $formName Name of the evaluation form
     *
     * @return $this
     */
    public function setFormName($formName)
    {
        $this->container['formName'] = $formName;

        return $this;
    }

    /**
     * Gets calibrationId
     *
     * @return string
     */
    public function getCalibrationId()
    {
        return $this->container['calibrationId'];
    }

    /**
     * Sets calibrationId
     *
     * @param string $calibrationId The calibration id used for the purpose of training evaluators
     *
     * @return $this
     */
    public function setCalibrationId($calibrationId)
    {
        $this->container['calibrationId'] = $calibrationId;

        return $this;
    }

    /**
     * Gets rescored
     *
     * @return bool
     */
    public function getRescored()
    {
        return $this->container['rescored'];
    }

    /**
     * Sets rescored
     *
     * @param bool $rescored Whether this evaluation has ever been rescored
     *
     * @return $this
     */
    public function setRescored($rescored)
    {
        $this->container['rescored'] = $rescored;

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
     * @param bool $deleted Whether this evaluation has been deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets oTotalScore
     *
     * @return int
     */
    public function getOTotalScore()
    {
        return $this->container['oTotalScore'];
    }

    /**
     * Sets oTotalScore
     *
     * @param int $oTotalScore oTotalScore
     *
     * @return $this
     */
    public function setOTotalScore($oTotalScore)
    {
        $this->container['oTotalScore'] = $oTotalScore;

        return $this;
    }

    /**
     * Gets oTotalCriticalScore
     *
     * @return int
     */
    public function getOTotalCriticalScore()
    {
        return $this->container['oTotalCriticalScore'];
    }

    /**
     * Sets oTotalCriticalScore
     *
     * @param int $oTotalCriticalScore oTotalCriticalScore
     *
     * @return $this
     */
    public function setOTotalCriticalScore($oTotalCriticalScore)
    {
        $this->container['oTotalCriticalScore'] = $oTotalCriticalScore;

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

