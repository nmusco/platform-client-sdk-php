<?php
/**
 * ReportingExportJobResponse
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
 * ReportingExportJobResponse Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportingExportJobResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportingExportJobResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'status' => 'string',
        'timeZone' => '\PureCloudPlatform\Client\V2\Model\TimeZone',
        'exportFormat' => 'string',
        'interval' => 'string',
        'downloadUrl' => 'string',
        'viewType' => 'string',
        'exportErrorMessagesType' => 'string',
        'period' => 'string',
        'filter' => '\PureCloudPlatform\Client\V2\Model\ViewFilter',
        'read' => 'bool',
        'createdDateTime' => '\DateTime',
        'modifiedDateTime' => '\DateTime',
        'locale' => 'string',
        'percentageComplete' => 'double',
        'hasFormatDurations' => 'bool',
        'hasSplitFilters' => 'bool',
        'selectedColumns' => '\PureCloudPlatform\Client\V2\Model\SelectedColumns[]',
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
        'status' => null,
        'timeZone' => null,
        'exportFormat' => null,
        'interval' => null,
        'downloadUrl' => null,
        'viewType' => null,
        'exportErrorMessagesType' => null,
        'period' => null,
        'filter' => null,
        'read' => null,
        'createdDateTime' => 'date-time',
        'modifiedDateTime' => 'date-time',
        'locale' => null,
        'percentageComplete' => 'double',
        'hasFormatDurations' => null,
        'hasSplitFilters' => null,
        'selectedColumns' => null,
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
        'status' => 'status',
        'timeZone' => 'timeZone',
        'exportFormat' => 'exportFormat',
        'interval' => 'interval',
        'downloadUrl' => 'downloadUrl',
        'viewType' => 'viewType',
        'exportErrorMessagesType' => 'exportErrorMessagesType',
        'period' => 'period',
        'filter' => 'filter',
        'read' => 'read',
        'createdDateTime' => 'createdDateTime',
        'modifiedDateTime' => 'modifiedDateTime',
        'locale' => 'locale',
        'percentageComplete' => 'percentageComplete',
        'hasFormatDurations' => 'hasFormatDurations',
        'hasSplitFilters' => 'hasSplitFilters',
        'selectedColumns' => 'selectedColumns',
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
        'status' => 'setStatus',
        'timeZone' => 'setTimeZone',
        'exportFormat' => 'setExportFormat',
        'interval' => 'setInterval',
        'downloadUrl' => 'setDownloadUrl',
        'viewType' => 'setViewType',
        'exportErrorMessagesType' => 'setExportErrorMessagesType',
        'period' => 'setPeriod',
        'filter' => 'setFilter',
        'read' => 'setRead',
        'createdDateTime' => 'setCreatedDateTime',
        'modifiedDateTime' => 'setModifiedDateTime',
        'locale' => 'setLocale',
        'percentageComplete' => 'setPercentageComplete',
        'hasFormatDurations' => 'setHasFormatDurations',
        'hasSplitFilters' => 'setHasSplitFilters',
        'selectedColumns' => 'setSelectedColumns',
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
        'status' => 'getStatus',
        'timeZone' => 'getTimeZone',
        'exportFormat' => 'getExportFormat',
        'interval' => 'getInterval',
        'downloadUrl' => 'getDownloadUrl',
        'viewType' => 'getViewType',
        'exportErrorMessagesType' => 'getExportErrorMessagesType',
        'period' => 'getPeriod',
        'filter' => 'getFilter',
        'read' => 'getRead',
        'createdDateTime' => 'getCreatedDateTime',
        'modifiedDateTime' => 'getModifiedDateTime',
        'locale' => 'getLocale',
        'percentageComplete' => 'getPercentageComplete',
        'hasFormatDurations' => 'getHasFormatDurations',
        'hasSplitFilters' => 'getHasSplitFilters',
        'selectedColumns' => 'getSelectedColumns',
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

    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_CANCELLING = 'CANCELLING';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_COMPLETED_WITH_PARTIAL_RESULTS = 'COMPLETED_WITH_PARTIAL_RESULTS';
    const STATUS_FAILED = 'FAILED';
    const EXPORT_FORMAT_CSV = 'CSV';
    const EXPORT_FORMAT_PDF = 'PDF';
    const VIEW_TYPE_QUEUE_PERFORMANCE_SUMMARY_VIEW = 'QUEUE_PERFORMANCE_SUMMARY_VIEW';
    const VIEW_TYPE_QUEUE_PERFORMANCE_DETAIL_VIEW = 'QUEUE_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_INTERACTION_SEARCH_VIEW = 'INTERACTION_SEARCH_VIEW';
    const VIEW_TYPE_AGENT_PERFORMANCE_SUMMARY_VIEW = 'AGENT_PERFORMANCE_SUMMARY_VIEW';
    const VIEW_TYPE_AGENT_PERFORMANCE_DETAIL_VIEW = 'AGENT_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_AGENT_STATUS_SUMMARY_VIEW = 'AGENT_STATUS_SUMMARY_VIEW';
    const VIEW_TYPE_AGENT_STATUS_DETAIL_VIEW = 'AGENT_STATUS_DETAIL_VIEW';
    const VIEW_TYPE_AGENT_EVALUATION_SUMMARY_VIEW = 'AGENT_EVALUATION_SUMMARY_VIEW';
    const VIEW_TYPE_AGENT_EVALUATION_DETAIL_VIEW = 'AGENT_EVALUATION_DETAIL_VIEW';
    const VIEW_TYPE_AGENT_QUEUE_DETAIL_VIEW = 'AGENT_QUEUE_DETAIL_VIEW';
    const VIEW_TYPE_AGENT_INTERACTION_DETAIL_VIEW = 'AGENT_INTERACTION_DETAIL_VIEW';
    const VIEW_TYPE_ABANDON_INSIGHTS_VIEW = 'ABANDON_INSIGHTS_VIEW';
    const VIEW_TYPE_SKILLS_PERFORMANCE_VIEW = 'SKILLS_PERFORMANCE_VIEW';
    const VIEW_TYPE_SURVEY_FORM_PERFORMANCE_SUMMARY_VIEW = 'SURVEY_FORM_PERFORMANCE_SUMMARY_VIEW';
    const VIEW_TYPE_SURVEY_FORM_PERFORMANCE_DETAIL_VIEW = 'SURVEY_FORM_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_DNIS_PERFORMANCE_SUMMARY_VIEW = 'DNIS_PERFORMANCE_SUMMARY_VIEW';
    const VIEW_TYPE_DNIS_PERFORMANCE_DETAIL_VIEW = 'DNIS_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_WRAP_UP_PERFORMANCE_SUMMARY_VIEW = 'WRAP_UP_PERFORMANCE_SUMMARY_VIEW';
    const VIEW_TYPE_AGENT_WRAP_UP_PERFORMANCE_DETAIL_VIEW = 'AGENT_WRAP_UP_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_QUEUE_ACTIVITY_SUMMARY_VIEW = 'QUEUE_ACTIVITY_SUMMARY_VIEW';
    const VIEW_TYPE_QUEUE_ACTIVITY_DETAIL_VIEW = 'QUEUE_ACTIVITY_DETAIL_VIEW';
    const VIEW_TYPE_AGENT_QUEUE_ACTIVITY_SUMMARY_VIEW = 'AGENT_QUEUE_ACTIVITY_SUMMARY_VIEW';
    const VIEW_TYPE_QUEUE_AGENT_DETAIL_VIEW = 'QUEUE_AGENT_DETAIL_VIEW';
    const VIEW_TYPE_QUEUE_INTERACTION_DETAIL_VIEW = 'QUEUE_INTERACTION_DETAIL_VIEW';
    const VIEW_TYPE_AGENT_SCHEDULE_DETAIL_VIEW = 'AGENT_SCHEDULE_DETAIL_VIEW';
    const VIEW_TYPE_IVR_PERFORMANCE_SUMMARY_VIEW = 'IVR_PERFORMANCE_SUMMARY_VIEW';
    const VIEW_TYPE_IVR_PERFORMANCE_DETAIL_VIEW = 'IVR_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_ANSWER_INSIGHTS_VIEW = 'ANSWER_INSIGHTS_VIEW';
    const VIEW_TYPE_HANDLE_INSIGHTS_VIEW = 'HANDLE_INSIGHTS_VIEW';
    const VIEW_TYPE_TALK_INSIGHTS_VIEW = 'TALK_INSIGHTS_VIEW';
    const VIEW_TYPE_HOLD_INSIGHTS_VIEW = 'HOLD_INSIGHTS_VIEW';
    const VIEW_TYPE_ACW_INSIGHTS_VIEW = 'ACW_INSIGHTS_VIEW';
    const VIEW_TYPE_WAIT_INSIGHTS_VIEW = 'WAIT_INSIGHTS_VIEW';
    const VIEW_TYPE_AGENT_WRAP_UP_PERFORMANCE_INTERVAL_DETAIL_VIEW = 'AGENT_WRAP_UP_PERFORMANCE_INTERVAL_DETAIL_VIEW';
    const VIEW_TYPE_FLOW_OUTCOME_SUMMARY_VIEW = 'FLOW_OUTCOME_SUMMARY_VIEW';
    const VIEW_TYPE_FLOW_OUTCOME_PERFORMANCE_DETAIL_VIEW = 'FLOW_OUTCOME_PERFORMANCE_DETAIL_VIEW';
    const VIEW_TYPE_FLOW_OUTCOME_PERFORMANCE_INTERVAL_DETAIL_VIEW = 'FLOW_OUTCOME_PERFORMANCE_INTERVAL_DETAIL_VIEW';
    const VIEW_TYPE_FLOW_DESTINATION_SUMMARY_VIEW = 'FLOW_DESTINATION_SUMMARY_VIEW';
    const VIEW_TYPE_FLOW_DESTINATION_DETAIL_VIEW = 'FLOW_DESTINATION_DETAIL_VIEW';
    const VIEW_TYPE_API_USAGE_VIEW = 'API_USAGE_VIEW';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_CONVERTING_EXPORT_JOB = 'FAILED_CONVERTING_EXPORT_JOB';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_NO_DATA_EXPORT_JOB_FOUND = 'FAILED_NO_DATA_EXPORT_JOB_FOUND';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_GETTING_DATA_FROM_SERVICE = 'FAILED_GETTING_DATA_FROM_SERVICE';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_GENERATING_TEMP_FILE = 'FAILED_GENERATING_TEMP_FILE';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_SAVING_FILE_TO_S3 = 'FAILED_SAVING_FILE_TO_S3';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_NOTIFYING_SKYWALKER_OF_DOWNLOAD = 'FAILED_NOTIFYING_SKYWALKER_OF_DOWNLOAD';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_BUILDING_DOWNLOAD_URL_FROM_SKYWALKER_RESPONSE = 'FAILED_BUILDING_DOWNLOAD_URL_FROM_SKYWALKER_RESPONSE';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_CONVERTING_EXPORT_JOB_TO_QUEUE_PERFORMANCE_JOB = 'FAILED_CONVERTING_EXPORT_JOB_TO_QUEUE_PERFORMANCE_JOB';
    const EXPORT_ERROR_MESSAGES_TYPE_EXPORT_TYPE_NOT_IMPLEMENTED = 'EXPORT_TYPE_NOT_IMPLEMENTED';
    const EXPORT_ERROR_MESSAGES_TYPE_REACHED_MAXIMUM_ATTEMPT_OF_RETRY = 'REACHED_MAXIMUM_ATTEMPT_OF_RETRY';
    const EXPORT_ERROR_MESSAGES_TYPE_FAILED_LONG_RUNNING_EXPORT = 'FAILED_LONG_RUNNING_EXPORT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBMITTED,
            self::STATUS_RUNNING,
            self::STATUS_CANCELLING,
            self::STATUS_CANCELLED,
            self::STATUS_COMPLETED,
            self::STATUS_COMPLETED_WITH_PARTIAL_RESULTS,
            self::STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportFormatAllowableValues()
    {
        return [
            self::EXPORT_FORMAT_CSV,
            self::EXPORT_FORMAT_PDF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getViewTypeAllowableValues()
    {
        return [
            self::VIEW_TYPE_QUEUE_PERFORMANCE_SUMMARY_VIEW,
            self::VIEW_TYPE_QUEUE_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_INTERACTION_SEARCH_VIEW,
            self::VIEW_TYPE_AGENT_PERFORMANCE_SUMMARY_VIEW,
            self::VIEW_TYPE_AGENT_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_AGENT_STATUS_SUMMARY_VIEW,
            self::VIEW_TYPE_AGENT_STATUS_DETAIL_VIEW,
            self::VIEW_TYPE_AGENT_EVALUATION_SUMMARY_VIEW,
            self::VIEW_TYPE_AGENT_EVALUATION_DETAIL_VIEW,
            self::VIEW_TYPE_AGENT_QUEUE_DETAIL_VIEW,
            self::VIEW_TYPE_AGENT_INTERACTION_DETAIL_VIEW,
            self::VIEW_TYPE_ABANDON_INSIGHTS_VIEW,
            self::VIEW_TYPE_SKILLS_PERFORMANCE_VIEW,
            self::VIEW_TYPE_SURVEY_FORM_PERFORMANCE_SUMMARY_VIEW,
            self::VIEW_TYPE_SURVEY_FORM_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_DNIS_PERFORMANCE_SUMMARY_VIEW,
            self::VIEW_TYPE_DNIS_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_WRAP_UP_PERFORMANCE_SUMMARY_VIEW,
            self::VIEW_TYPE_AGENT_WRAP_UP_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_QUEUE_ACTIVITY_SUMMARY_VIEW,
            self::VIEW_TYPE_QUEUE_ACTIVITY_DETAIL_VIEW,
            self::VIEW_TYPE_AGENT_QUEUE_ACTIVITY_SUMMARY_VIEW,
            self::VIEW_TYPE_QUEUE_AGENT_DETAIL_VIEW,
            self::VIEW_TYPE_QUEUE_INTERACTION_DETAIL_VIEW,
            self::VIEW_TYPE_AGENT_SCHEDULE_DETAIL_VIEW,
            self::VIEW_TYPE_IVR_PERFORMANCE_SUMMARY_VIEW,
            self::VIEW_TYPE_IVR_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_ANSWER_INSIGHTS_VIEW,
            self::VIEW_TYPE_HANDLE_INSIGHTS_VIEW,
            self::VIEW_TYPE_TALK_INSIGHTS_VIEW,
            self::VIEW_TYPE_HOLD_INSIGHTS_VIEW,
            self::VIEW_TYPE_ACW_INSIGHTS_VIEW,
            self::VIEW_TYPE_WAIT_INSIGHTS_VIEW,
            self::VIEW_TYPE_AGENT_WRAP_UP_PERFORMANCE_INTERVAL_DETAIL_VIEW,
            self::VIEW_TYPE_FLOW_OUTCOME_SUMMARY_VIEW,
            self::VIEW_TYPE_FLOW_OUTCOME_PERFORMANCE_DETAIL_VIEW,
            self::VIEW_TYPE_FLOW_OUTCOME_PERFORMANCE_INTERVAL_DETAIL_VIEW,
            self::VIEW_TYPE_FLOW_DESTINATION_SUMMARY_VIEW,
            self::VIEW_TYPE_FLOW_DESTINATION_DETAIL_VIEW,
            self::VIEW_TYPE_API_USAGE_VIEW,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportErrorMessagesTypeAllowableValues()
    {
        return [
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_CONVERTING_EXPORT_JOB,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_NO_DATA_EXPORT_JOB_FOUND,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_GETTING_DATA_FROM_SERVICE,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_GENERATING_TEMP_FILE,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_SAVING_FILE_TO_S3,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_NOTIFYING_SKYWALKER_OF_DOWNLOAD,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_BUILDING_DOWNLOAD_URL_FROM_SKYWALKER_RESPONSE,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_CONVERTING_EXPORT_JOB_TO_QUEUE_PERFORMANCE_JOB,
            self::EXPORT_ERROR_MESSAGES_TYPE_EXPORT_TYPE_NOT_IMPLEMENTED,
            self::EXPORT_ERROR_MESSAGES_TYPE_REACHED_MAXIMUM_ATTEMPT_OF_RETRY,
            self::EXPORT_ERROR_MESSAGES_TYPE_FAILED_LONG_RUNNING_EXPORT,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['exportFormat'] = isset($data['exportFormat']) ? $data['exportFormat'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
        $this->container['viewType'] = isset($data['viewType']) ? $data['viewType'] : null;
        $this->container['exportErrorMessagesType'] = isset($data['exportErrorMessagesType']) ? $data['exportErrorMessagesType'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['read'] = isset($data['read']) ? $data['read'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['modifiedDateTime'] = isset($data['modifiedDateTime']) ? $data['modifiedDateTime'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['percentageComplete'] = isset($data['percentageComplete']) ? $data['percentageComplete'] : null;
        $this->container['hasFormatDurations'] = isset($data['hasFormatDurations']) ? $data['hasFormatDurations'] : null;
        $this->container['hasSplitFilters'] = isset($data['hasSplitFilters']) ? $data['hasSplitFilters'] : null;
        $this->container['selectedColumns'] = isset($data['selectedColumns']) ? $data['selectedColumns'] : null;
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

        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
        }
        if ($this->container['exportFormat'] === null) {
            $invalidProperties[] = "'exportFormat' can't be null";
        }
        $allowedValues = $this->getExportFormatAllowableValues();
        if (!is_null($this->container['exportFormat']) && !in_array($this->container['exportFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'exportFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['viewType'] === null) {
            $invalidProperties[] = "'viewType' can't be null";
        }
        $allowedValues = $this->getViewTypeAllowableValues();
        if (!is_null($this->container['viewType']) && !in_array($this->container['viewType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'viewType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExportErrorMessagesTypeAllowableValues();
        if (!is_null($this->container['exportErrorMessagesType']) && !in_array($this->container['exportErrorMessagesType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'exportErrorMessagesType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['filter'] === null) {
            $invalidProperties[] = "'filter' can't be null";
        }
        if ($this->container['read'] === null) {
            $invalidProperties[] = "'read' can't be null";
        }
        if ($this->container['createdDateTime'] === null) {
            $invalidProperties[] = "'createdDateTime' can't be null";
        }
        if ($this->container['modifiedDateTime'] === null) {
            $invalidProperties[] = "'modifiedDateTime' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['percentageComplete'] === null) {
            $invalidProperties[] = "'percentageComplete' can't be null";
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
     * @param string $status The current status of the export request
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
     * Gets timeZone
     *
     * @return \PureCloudPlatform\Client\V2\Model\TimeZone
     */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
     * Sets timeZone
     *
     * @param \PureCloudPlatform\Client\V2\Model\TimeZone $timeZone The requested timezone of the exported data
     *
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;

        return $this;
    }

    /**
     * Gets exportFormat
     *
     * @return string
     */
    public function getExportFormat()
    {
        return $this->container['exportFormat'];
    }

    /**
     * Sets exportFormat
     *
     * @param string $exportFormat The requested format of the exported data
     *
     * @return $this
     */
    public function setExportFormat($exportFormat)
    {
        $allowedValues = $this->getExportFormatAllowableValues();
        if (!in_array($exportFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'exportFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exportFormat'] = $exportFormat;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param string $interval The time period used to limit the the exported data. Intervals are represented as an ISO-8601 string. For example: YYYY-MM-DDThh:mm:ss/YYYY-MM-DDThh:mm:ss
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets downloadUrl
     *
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
     * Sets downloadUrl
     *
     * @param string $downloadUrl The url to download the request if it's status is completed
     *
     * @return $this
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * Gets viewType
     *
     * @return string
     */
    public function getViewType()
    {
        return $this->container['viewType'];
    }

    /**
     * Sets viewType
     *
     * @param string $viewType The type of view export job to be created
     *
     * @return $this
     */
    public function setViewType($viewType)
    {
        $allowedValues = $this->getViewTypeAllowableValues();
        if (!in_array($viewType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'viewType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['viewType'] = $viewType;

        return $this;
    }

    /**
     * Gets exportErrorMessagesType
     *
     * @return string
     */
    public function getExportErrorMessagesType()
    {
        return $this->container['exportErrorMessagesType'];
    }

    /**
     * Sets exportErrorMessagesType
     *
     * @param string $exportErrorMessagesType The error message in case the export request failed
     *
     * @return $this
     */
    public function setExportErrorMessagesType($exportErrorMessagesType)
    {
        $allowedValues = $this->getExportErrorMessagesTypeAllowableValues();
        if (!is_null($exportErrorMessagesType) && !in_array($exportErrorMessagesType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'exportErrorMessagesType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exportErrorMessagesType'] = $exportErrorMessagesType;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string $period The Period of the request in which to break down the intervals. Periods are represented as an ISO-8601 string. For example: P1D or P1DT12H
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \PureCloudPlatform\Client\V2\Model\ViewFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \PureCloudPlatform\Client\V2\Model\ViewFilter $filter Filters to apply to create the view
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets read
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->container['read'];
    }

    /**
     * Sets read
     *
     * @param bool $read Indicates if the request has been marked as read
     *
     * @return $this
     */
    public function setRead($read)
    {
        $this->container['read'] = $read;

        return $this;
    }

    /**
     * Gets createdDateTime
     *
     * @return \DateTime
     */
    public function getCreatedDateTime()
    {
        return $this->container['createdDateTime'];
    }

    /**
     * Sets createdDateTime
     *
     * @param \DateTime $createdDateTime The created date/time of the request. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setCreatedDateTime($createdDateTime)
    {
        $this->container['createdDateTime'] = $createdDateTime;

        return $this;
    }

    /**
     * Gets modifiedDateTime
     *
     * @return \DateTime
     */
    public function getModifiedDateTime()
    {
        return $this->container['modifiedDateTime'];
    }

    /**
     * Sets modifiedDateTime
     *
     * @param \DateTime $modifiedDateTime The last modified date/time of the request. Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setModifiedDateTime($modifiedDateTime)
    {
        $this->container['modifiedDateTime'] = $modifiedDateTime;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The locale use for localization of the exported data, i.e. en-us, es-mx
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets percentageComplete
     *
     * @return double
     */
    public function getPercentageComplete()
    {
        return $this->container['percentageComplete'];
    }

    /**
     * Sets percentageComplete
     *
     * @param double $percentageComplete The percentage of the job that has completed processing
     *
     * @return $this
     */
    public function setPercentageComplete($percentageComplete)
    {
        $this->container['percentageComplete'] = $percentageComplete;

        return $this;
    }

    /**
     * Gets hasFormatDurations
     *
     * @return bool
     */
    public function getHasFormatDurations()
    {
        return $this->container['hasFormatDurations'];
    }

    /**
     * Sets hasFormatDurations
     *
     * @param bool $hasFormatDurations Indicates if durations are formatted in hh:mm:ss format instead of ms
     *
     * @return $this
     */
    public function setHasFormatDurations($hasFormatDurations)
    {
        $this->container['hasFormatDurations'] = $hasFormatDurations;

        return $this;
    }

    /**
     * Gets hasSplitFilters
     *
     * @return bool
     */
    public function getHasSplitFilters()
    {
        return $this->container['hasSplitFilters'];
    }

    /**
     * Sets hasSplitFilters
     *
     * @param bool $hasSplitFilters Indicates if filters will be split in aggregate detail exports
     *
     * @return $this
     */
    public function setHasSplitFilters($hasSplitFilters)
    {
        $this->container['hasSplitFilters'] = $hasSplitFilters;

        return $this;
    }

    /**
     * Gets selectedColumns
     *
     * @return \PureCloudPlatform\Client\V2\Model\SelectedColumns[]
     */
    public function getSelectedColumns()
    {
        return $this->container['selectedColumns'];
    }

    /**
     * Sets selectedColumns
     *
     * @param \PureCloudPlatform\Client\V2\Model\SelectedColumns[] $selectedColumns The list of ordered selected columns from the export view by the user
     *
     * @return $this
     */
    public function setSelectedColumns($selectedColumns)
    {
        $this->container['selectedColumns'] = $selectedColumns;

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


