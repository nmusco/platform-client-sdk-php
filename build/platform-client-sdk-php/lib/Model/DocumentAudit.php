<?php
/**
 * DocumentAudit
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
 * DocumentAudit Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentAudit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentAudit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'user' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'workspace' => '\PureCloudPlatform\Client\V2\Model\DomainEntityRef',
        'transactionId' => 'string',
        'transactionInitiator' => 'bool',
        'application' => 'string',
        'serviceName' => 'string',
        'level' => 'string',
        'timestamp' => '\DateTime',
        'status' => 'string',
        'actionContext' => 'string',
        'action' => 'string',
        'entity' => '\PureCloudPlatform\Client\V2\Model\AuditEntityReference',
        'changes' => '\PureCloudPlatform\Client\V2\Model\AuditChange[]',
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
        'user' => null,
        'workspace' => null,
        'transactionId' => null,
        'transactionInitiator' => null,
        'application' => null,
        'serviceName' => null,
        'level' => null,
        'timestamp' => 'date-time',
        'status' => null,
        'actionContext' => null,
        'action' => null,
        'entity' => null,
        'changes' => null,
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
        'user' => 'user',
        'workspace' => 'workspace',
        'transactionId' => 'transactionId',
        'transactionInitiator' => 'transactionInitiator',
        'application' => 'application',
        'serviceName' => 'serviceName',
        'level' => 'level',
        'timestamp' => 'timestamp',
        'status' => 'status',
        'actionContext' => 'actionContext',
        'action' => 'action',
        'entity' => 'entity',
        'changes' => 'changes',
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
        'user' => 'setUser',
        'workspace' => 'setWorkspace',
        'transactionId' => 'setTransactionId',
        'transactionInitiator' => 'setTransactionInitiator',
        'application' => 'setApplication',
        'serviceName' => 'setServiceName',
        'level' => 'setLevel',
        'timestamp' => 'setTimestamp',
        'status' => 'setStatus',
        'actionContext' => 'setActionContext',
        'action' => 'setAction',
        'entity' => 'setEntity',
        'changes' => 'setChanges',
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
        'user' => 'getUser',
        'workspace' => 'getWorkspace',
        'transactionId' => 'getTransactionId',
        'transactionInitiator' => 'getTransactionInitiator',
        'application' => 'getApplication',
        'serviceName' => 'getServiceName',
        'level' => 'getLevel',
        'timestamp' => 'getTimestamp',
        'status' => 'getStatus',
        'actionContext' => 'getActionContext',
        'action' => 'getAction',
        'entity' => 'getEntity',
        'changes' => 'getChanges',
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

    const LEVEL_USER = 'USER';
    const LEVEL_SYSTEM = 'SYSTEM';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILURE = 'FAILURE';
    const STATUS_WARNING = 'WARNING';
    const ACTION_CONTEXT_CREATE = 'CREATE';
    const ACTION_CONTEXT_READ = 'READ';
    const ACTION_CONTEXT_UPDATE = 'UPDATE';
    const ACTION_CONTEXT_DELETE = 'DELETE';
    const ACTION_CONTEXT_DOWNLOAD = 'DOWNLOAD';
    const ACTION_CONTEXT_VIEW = 'VIEW';
    const ACTION_CONTEXT_UPLOAD = 'UPLOAD';
    const ACTION_CONTEXT_SAVE = 'SAVE';
    const ACTION_CONTEXT_MOVE = 'MOVE';
    const ACTION_CONTEXT_COPY = 'COPY';
    const ACTION_CONTEXT_ADD = 'ADD';
    const ACTION_CONTEXT_REMOVE = 'REMOVE';
    const ACTION_CONTEXT_RECEIVE = 'RECEIVE';
    const ACTION_CONTEXT_CONVERT = 'CONVERT';
    const ACTION_CONTEXT_FAX = 'FAX';
    const ACTION_CONTEXT_CREATE_COVERPAGE = 'CREATE_COVERPAGE';
    const ACTION_CONTEXT_USER_ADD = 'USER_ADD';
    const ACTION_CONTEXT_USER_REMOVE = 'USER_REMOVE';
    const ACTION_CONTEXT_MEMBER_ADD = 'MEMBER_ADD';
    const ACTION_CONTEXT_MEMBER_REMOVE = 'MEMBER_REMOVE';
    const ACTION_CONTEXT_MEMBER_UPDATE = 'MEMBER_UPDATE';
    const ACTION_CONTEXT_TAG_ADD = 'TAG_ADD';
    const ACTION_CONTEXT_TAG_REMOVE = 'TAG_REMOVE';
    const ACTION_CONTEXT_TAG_UPDATE = 'TAG_UPDATE';
    const ACTION_CONTEXT_ATTRIBUTE_ADD = 'ATTRIBUTE_ADD';
    const ACTION_CONTEXT_ATTRIBUTE_REMOVE = 'ATTRIBUTE_REMOVE';
    const ACTION_CONTEXT_ATTRIBUTE_UPDATE = 'ATTRIBUTE_UPDATE';
    const ACTION_CONTEXT_ATTRIBUTE_GROUP_INSTANCE_ADD = 'ATTRIBUTE_GROUP_INSTANCE_ADD';
    const ACTION_CONTEXT_ATTRIBUTE_GROUP_INSTANCE_REMOVE = 'ATTRIBUTE_GROUP_INSTANCE_REMOVE';
    const ACTION_CONTEXT_ATTRIBUTE_GROUP_INSTANCE_UPDATE = 'ATTRIBUTE_GROUP_INSTANCE_UPDATE';
    const ACTION_CONTEXT_INDEX_SAVE = 'INDEX_SAVE';
    const ACTION_CONTEXT_INDEX_DELETE = 'INDEX_DELETE';
    const ACTION_CONTEXT_INDEX_CREATE = 'INDEX_CREATE';
    const ACTION_CONTEXT_FILE_SAVE = 'FILE_SAVE';
    const ACTION_CONTEXT_FILE_DELETE = 'FILE_DELETE';
    const ACTION_CONTEXT_FILE_READ = 'FILE_READ';
    const ACTION_CONTEXT_THUMBNAIL_CREATE = 'THUMBNAIL_CREATE';
    const ACTION_CONTEXT_TEXT_EXTRACT = 'TEXT_EXTRACT';
    const ACTION_CONTEXT_SHARE_ADD = 'SHARE_ADD';
    const ACTION_CONTEXT_SHARE_REMOVE = 'SHARE_REMOVE';
    const ACTION_CONTEXT_VERSION_CREATE = 'VERSION_CREATE';
    const ACTION_CREATE = 'CREATE';
    const ACTION_READ = 'READ';
    const ACTION_UPDATE = 'UPDATE';
    const ACTION_DELETE = 'DELETE';
    const ACTION_DOWNLOAD = 'DOWNLOAD';
    const ACTION_VIEW = 'VIEW';
    const ACTION_UPLOAD = 'UPLOAD';
    const ACTION_SAVE = 'SAVE';
    const ACTION_MOVE = 'MOVE';
    const ACTION_COPY = 'COPY';
    const ACTION_ADD = 'ADD';
    const ACTION_REMOVE = 'REMOVE';
    const ACTION_RECEIVE = 'RECEIVE';
    const ACTION_CONVERT = 'CONVERT';
    const ACTION_FAX = 'FAX';
    const ACTION_CREATE_COVERPAGE = 'CREATE_COVERPAGE';
    const ACTION_USER_ADD = 'USER_ADD';
    const ACTION_USER_REMOVE = 'USER_REMOVE';
    const ACTION_MEMBER_ADD = 'MEMBER_ADD';
    const ACTION_MEMBER_REMOVE = 'MEMBER_REMOVE';
    const ACTION_MEMBER_UPDATE = 'MEMBER_UPDATE';
    const ACTION_TAG_ADD = 'TAG_ADD';
    const ACTION_TAG_REMOVE = 'TAG_REMOVE';
    const ACTION_TAG_UPDATE = 'TAG_UPDATE';
    const ACTION_ATTRIBUTE_ADD = 'ATTRIBUTE_ADD';
    const ACTION_ATTRIBUTE_REMOVE = 'ATTRIBUTE_REMOVE';
    const ACTION_ATTRIBUTE_UPDATE = 'ATTRIBUTE_UPDATE';
    const ACTION_ATTRIBUTE_GROUP_INSTANCE_ADD = 'ATTRIBUTE_GROUP_INSTANCE_ADD';
    const ACTION_ATTRIBUTE_GROUP_INSTANCE_REMOVE = 'ATTRIBUTE_GROUP_INSTANCE_REMOVE';
    const ACTION_ATTRIBUTE_GROUP_INSTANCE_UPDATE = 'ATTRIBUTE_GROUP_INSTANCE_UPDATE';
    const ACTION_INDEX_SAVE = 'INDEX_SAVE';
    const ACTION_INDEX_DELETE = 'INDEX_DELETE';
    const ACTION_INDEX_CREATE = 'INDEX_CREATE';
    const ACTION_FILE_SAVE = 'FILE_SAVE';
    const ACTION_FILE_DELETE = 'FILE_DELETE';
    const ACTION_FILE_READ = 'FILE_READ';
    const ACTION_THUMBNAIL_CREATE = 'THUMBNAIL_CREATE';
    const ACTION_TEXT_EXTRACT = 'TEXT_EXTRACT';
    const ACTION_SHARE_ADD = 'SHARE_ADD';
    const ACTION_SHARE_REMOVE = 'SHARE_REMOVE';
    const ACTION_VERSION_CREATE = 'VERSION_CREATE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_USER,
            self::LEVEL_SYSTEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILURE,
            self::STATUS_WARNING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionContextAllowableValues()
    {
        return [
            self::ACTION_CONTEXT_CREATE,
            self::ACTION_CONTEXT_READ,
            self::ACTION_CONTEXT_UPDATE,
            self::ACTION_CONTEXT_DELETE,
            self::ACTION_CONTEXT_DOWNLOAD,
            self::ACTION_CONTEXT_VIEW,
            self::ACTION_CONTEXT_UPLOAD,
            self::ACTION_CONTEXT_SAVE,
            self::ACTION_CONTEXT_MOVE,
            self::ACTION_CONTEXT_COPY,
            self::ACTION_CONTEXT_ADD,
            self::ACTION_CONTEXT_REMOVE,
            self::ACTION_CONTEXT_RECEIVE,
            self::ACTION_CONTEXT_CONVERT,
            self::ACTION_CONTEXT_FAX,
            self::ACTION_CONTEXT_CREATE_COVERPAGE,
            self::ACTION_CONTEXT_USER_ADD,
            self::ACTION_CONTEXT_USER_REMOVE,
            self::ACTION_CONTEXT_MEMBER_ADD,
            self::ACTION_CONTEXT_MEMBER_REMOVE,
            self::ACTION_CONTEXT_MEMBER_UPDATE,
            self::ACTION_CONTEXT_TAG_ADD,
            self::ACTION_CONTEXT_TAG_REMOVE,
            self::ACTION_CONTEXT_TAG_UPDATE,
            self::ACTION_CONTEXT_ATTRIBUTE_ADD,
            self::ACTION_CONTEXT_ATTRIBUTE_REMOVE,
            self::ACTION_CONTEXT_ATTRIBUTE_UPDATE,
            self::ACTION_CONTEXT_ATTRIBUTE_GROUP_INSTANCE_ADD,
            self::ACTION_CONTEXT_ATTRIBUTE_GROUP_INSTANCE_REMOVE,
            self::ACTION_CONTEXT_ATTRIBUTE_GROUP_INSTANCE_UPDATE,
            self::ACTION_CONTEXT_INDEX_SAVE,
            self::ACTION_CONTEXT_INDEX_DELETE,
            self::ACTION_CONTEXT_INDEX_CREATE,
            self::ACTION_CONTEXT_FILE_SAVE,
            self::ACTION_CONTEXT_FILE_DELETE,
            self::ACTION_CONTEXT_FILE_READ,
            self::ACTION_CONTEXT_THUMBNAIL_CREATE,
            self::ACTION_CONTEXT_TEXT_EXTRACT,
            self::ACTION_CONTEXT_SHARE_ADD,
            self::ACTION_CONTEXT_SHARE_REMOVE,
            self::ACTION_CONTEXT_VERSION_CREATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE,
            self::ACTION_READ,
            self::ACTION_UPDATE,
            self::ACTION_DELETE,
            self::ACTION_DOWNLOAD,
            self::ACTION_VIEW,
            self::ACTION_UPLOAD,
            self::ACTION_SAVE,
            self::ACTION_MOVE,
            self::ACTION_COPY,
            self::ACTION_ADD,
            self::ACTION_REMOVE,
            self::ACTION_RECEIVE,
            self::ACTION_CONVERT,
            self::ACTION_FAX,
            self::ACTION_CREATE_COVERPAGE,
            self::ACTION_USER_ADD,
            self::ACTION_USER_REMOVE,
            self::ACTION_MEMBER_ADD,
            self::ACTION_MEMBER_REMOVE,
            self::ACTION_MEMBER_UPDATE,
            self::ACTION_TAG_ADD,
            self::ACTION_TAG_REMOVE,
            self::ACTION_TAG_UPDATE,
            self::ACTION_ATTRIBUTE_ADD,
            self::ACTION_ATTRIBUTE_REMOVE,
            self::ACTION_ATTRIBUTE_UPDATE,
            self::ACTION_ATTRIBUTE_GROUP_INSTANCE_ADD,
            self::ACTION_ATTRIBUTE_GROUP_INSTANCE_REMOVE,
            self::ACTION_ATTRIBUTE_GROUP_INSTANCE_UPDATE,
            self::ACTION_INDEX_SAVE,
            self::ACTION_INDEX_DELETE,
            self::ACTION_INDEX_CREATE,
            self::ACTION_FILE_SAVE,
            self::ACTION_FILE_DELETE,
            self::ACTION_FILE_READ,
            self::ACTION_THUMBNAIL_CREATE,
            self::ACTION_TEXT_EXTRACT,
            self::ACTION_SHARE_ADD,
            self::ACTION_SHARE_REMOVE,
            self::ACTION_VERSION_CREATE,
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['transactionInitiator'] = isset($data['transactionInitiator']) ? $data['transactionInitiator'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actionContext'] = isset($data['actionContext']) ? $data['actionContext'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
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

        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionContextAllowableValues();
        if (!is_null($this->container['actionContext']) && !in_array($this->container['actionContext'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'actionContext', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
     * Gets user
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets workspace
     *
     * @return \PureCloudPlatform\Client\V2\Model\DomainEntityRef
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param \PureCloudPlatform\Client\V2\Model\DomainEntityRef $workspace workspace
     *
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

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
     * @param string $transactionId transactionId
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
     * @param bool $transactionInitiator transactionInitiator
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
     * @param string $application application
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
     * @param string $serviceName serviceName
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
     * @param string $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $allowedValues = $this->getLevelAllowableValues();
        if (!is_null($level) && !in_array($level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * @param string $actionContext actionContext
     *
     * @return $this
     */
    public function setActionContext($actionContext)
    {
        $allowedValues = $this->getActionContextAllowableValues();
        if (!is_null($actionContext) && !in_array($actionContext, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'actionContext', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \PureCloudPlatform\Client\V2\Model\AuditEntityReference
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \PureCloudPlatform\Client\V2\Model\AuditEntityReference $entity entity
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \PureCloudPlatform\Client\V2\Model\AuditChange[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \PureCloudPlatform\Client\V2\Model\AuditChange[] $changes changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

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

