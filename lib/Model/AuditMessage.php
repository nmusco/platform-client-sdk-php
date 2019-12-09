<?php
/**
 * AuditMessage
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
 * AuditMessage Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuditMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'user' => '\PureCloudPlatform\Client\V2\Model\AuditUser',
        'correlationId' => 'string',
        'transactionId' => 'string',
        'transactionInitiator' => 'bool',
        'application' => 'string',
        'serviceName' => 'string',
        'level' => 'string',
        'timestamp' => 'string',
        'receivedTimestamp' => 'string',
        'status' => 'string',
        'actionContext' => 'string',
        'action' => 'string',
        'changes' => '\PureCloudPlatform\Client\V2\Model\Change[]',
        'entity' => '\PureCloudPlatform\Client\V2\Model\AuditEntity',
        'serviceContext' => '\PureCloudPlatform\Client\V2\Model\ServiceContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'user' => null,
        'correlationId' => null,
        'transactionId' => null,
        'transactionInitiator' => null,
        'application' => null,
        'serviceName' => null,
        'level' => null,
        'timestamp' => null,
        'receivedTimestamp' => null,
        'status' => null,
        'actionContext' => null,
        'action' => null,
        'changes' => null,
        'entity' => null,
        'serviceContext' => null
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
        'user' => 'user',
        'correlationId' => 'correlationId',
        'transactionId' => 'transactionId',
        'transactionInitiator' => 'transactionInitiator',
        'application' => 'application',
        'serviceName' => 'serviceName',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'receivedTimestamp' => 'receivedTimestamp',
        'status' => 'status',
        'actionContext' => 'actionContext',
        'action' => 'action',
        'changes' => 'changes',
        'entity' => 'entity',
        'serviceContext' => 'serviceContext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user' => 'setUser',
        'correlationId' => 'setCorrelationId',
        'transactionId' => 'setTransactionId',
        'transactionInitiator' => 'setTransactionInitiator',
        'application' => 'setApplication',
        'serviceName' => 'setServiceName',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'receivedTimestamp' => 'setReceivedTimestamp',
        'status' => 'setStatus',
        'actionContext' => 'setActionContext',
        'action' => 'setAction',
        'changes' => 'setChanges',
        'entity' => 'setEntity',
        'serviceContext' => 'setServiceContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user' => 'getUser',
        'correlationId' => 'getCorrelationId',
        'transactionId' => 'getTransactionId',
        'transactionInitiator' => 'getTransactionInitiator',
        'application' => 'getApplication',
        'serviceName' => 'getServiceName',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'receivedTimestamp' => 'getReceivedTimestamp',
        'status' => 'getStatus',
        'actionContext' => 'getActionContext',
        'action' => 'getAction',
        'changes' => 'getChanges',
        'entity' => 'getEntity',
        'serviceContext' => 'getServiceContext'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['correlationId'] = isset($data['correlationId']) ? $data['correlationId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['transactionInitiator'] = isset($data['transactionInitiator']) ? $data['transactionInitiator'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['receivedTimestamp'] = isset($data['receivedTimestamp']) ? $data['receivedTimestamp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actionContext'] = isset($data['actionContext']) ? $data['actionContext'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['serviceContext'] = isset($data['serviceContext']) ? $data['serviceContext'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['serviceName'] === null) {
            $invalidProperties[] = "'serviceName' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['receivedTimestamp'] === null) {
            $invalidProperties[] = "'receivedTimestamp' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * @param string $id AuditMessage ID.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \PureCloudPlatform\Client\V2\Model\AuditUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \PureCloudPlatform\Client\V2\Model\AuditUser $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets correlationId
     *
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->container['correlationId'];
    }

    /**
     * Sets correlationId
     *
     * @param string $correlationId Correlation ID.
     *
     * @return $this
     */
    public function setCorrelationId($correlationId)
    {
        $this->container['correlationId'] = $correlationId;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId Transaction ID.
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets transactionInitiator
     *
     * @return bool
     */
    public function getTransactionInitiator()
    {
        return $this->container['transactionInitiator'];
    }

    /**
     * Sets transactionInitiator
     *
     * @param bool $transactionInitiator Whether or not this audit can be considered the initiator of the transaction it is a part of.
     *
     * @return $this
     */
    public function setTransactionInitiator($transactionInitiator)
    {
        $this->container['transactionInitiator'] = $transactionInitiator;

        return $this;
    }

    /**
     * Gets application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string $application The application through which the action of this AuditMessage was initiated.
     *
     * @return $this
     */
    public function setApplication($application)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets serviceName
     *
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param string $serviceName The name of the service which sent this AuditMessage.
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;

        return $this;
    }

    /**
     * Gets level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param string $level The level of this audit. USER or SYSTEM.
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp The time at which the action of this AuditMessage was initiated.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets receivedTimestamp
     *
     * @return string
     */
    public function getReceivedTimestamp()
    {
        return $this->container['receivedTimestamp'];
    }

    /**
     * Sets receivedTimestamp
     *
     * @param string $receivedTimestamp The time at which this AuditMessage was received.
     *
     * @return $this
     */
    public function setReceivedTimestamp($receivedTimestamp)
    {
        $this->container['receivedTimestamp'] = $receivedTimestamp;

        return $this;
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
     * @param string $status The status of the action of this AuditMessage
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets actionContext
     *
     * @return string
     */
    public function getActionContext()
    {
        return $this->container['actionContext'];
    }

    /**
     * Sets actionContext
     *
     * @param string $actionContext The context of a system-level action
     *
     * @return $this
     */
    public function setActionContext($actionContext)
    {
        $this->container['actionContext'] = $actionContext;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action A string representing the action that took place
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \PureCloudPlatform\Client\V2\Model\Change[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \PureCloudPlatform\Client\V2\Model\Change[] $changes Details about any changes that occurred in this audit
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \PureCloudPlatform\Client\V2\Model\AuditEntity
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \PureCloudPlatform\Client\V2\Model\AuditEntity $entity entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets serviceContext
     *
     * @return \PureCloudPlatform\Client\V2\Model\ServiceContext
     */
    public function getServiceContext()
    {
        return $this->container['serviceContext'];
    }

    /**
     * Sets serviceContext
     *
     * @param \PureCloudPlatform\Client\V2\Model\ServiceContext $serviceContext The service-specific context associated with this AuditMessage.
     *
     * @return $this
     */
    public function setServiceContext($serviceContext)
    {
        $this->container['serviceContext'] = $serviceContext;

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

