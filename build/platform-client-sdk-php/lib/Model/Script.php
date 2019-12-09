<?php
/**
 * Script
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
 * Script Class Doc Comment
 *
 * @category Class
 * @package  PureCloudPlatform\Client\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Script implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Script';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'versionId' => 'string',
        'createdDate' => '\DateTime',
        'modifiedDate' => '\DateTime',
        'publishedDate' => '\DateTime',
        'versionDate' => '\DateTime',
        'startPageId' => 'string',
        'startPageName' => 'string',
        'features' => 'object',
        'variables' => 'object',
        'customActions' => 'object',
        'pages' => '\PureCloudPlatform\Client\V2\Model\Page[]',
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
        'versionId' => null,
        'createdDate' => 'date-time',
        'modifiedDate' => 'date-time',
        'publishedDate' => 'date-time',
        'versionDate' => 'date-time',
        'startPageId' => null,
        'startPageName' => null,
        'features' => null,
        'variables' => null,
        'customActions' => null,
        'pages' => null,
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
        'versionId' => 'versionId',
        'createdDate' => 'createdDate',
        'modifiedDate' => 'modifiedDate',
        'publishedDate' => 'publishedDate',
        'versionDate' => 'versionDate',
        'startPageId' => 'startPageId',
        'startPageName' => 'startPageName',
        'features' => 'features',
        'variables' => 'variables',
        'customActions' => 'customActions',
        'pages' => 'pages',
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
        'versionId' => 'setVersionId',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate',
        'publishedDate' => 'setPublishedDate',
        'versionDate' => 'setVersionDate',
        'startPageId' => 'setStartPageId',
        'startPageName' => 'setStartPageName',
        'features' => 'setFeatures',
        'variables' => 'setVariables',
        'customActions' => 'setCustomActions',
        'pages' => 'setPages',
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
        'versionId' => 'getVersionId',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate',
        'publishedDate' => 'getPublishedDate',
        'versionDate' => 'getVersionDate',
        'startPageId' => 'getStartPageId',
        'startPageName' => 'getStartPageName',
        'features' => 'getFeatures',
        'variables' => 'getVariables',
        'customActions' => 'getCustomActions',
        'pages' => 'getPages',
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
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['publishedDate'] = isset($data['publishedDate']) ? $data['publishedDate'] : null;
        $this->container['versionDate'] = isset($data['versionDate']) ? $data['versionDate'] : null;
        $this->container['startPageId'] = isset($data['startPageId']) ? $data['startPageId'] : null;
        $this->container['startPageName'] = isset($data['startPageName']) ? $data['startPageName'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
        $this->container['customActions'] = isset($data['customActions']) ? $data['customActions'] : null;
        $this->container['pages'] = isset($data['pages']) ? $data['pages'] : null;
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
     * Gets versionId
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
     * Sets versionId
     *
     * @param string $versionId versionId
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;

        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime $createdDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

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
     * @param \DateTime $modifiedDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;

        return $this;
    }

    /**
     * Gets publishedDate
     *
     * @return \DateTime
     */
    public function getPublishedDate()
    {
        return $this->container['publishedDate'];
    }

    /**
     * Sets publishedDate
     *
     * @param \DateTime $publishedDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setPublishedDate($publishedDate)
    {
        $this->container['publishedDate'] = $publishedDate;

        return $this;
    }

    /**
     * Gets versionDate
     *
     * @return \DateTime
     */
    public function getVersionDate()
    {
        return $this->container['versionDate'];
    }

    /**
     * Sets versionDate
     *
     * @param \DateTime $versionDate Date time is represented as an ISO-8601 string. For example: yyyy-MM-ddTHH:mm:ss.SSSZ
     *
     * @return $this
     */
    public function setVersionDate($versionDate)
    {
        $this->container['versionDate'] = $versionDate;

        return $this;
    }

    /**
     * Gets startPageId
     *
     * @return string
     */
    public function getStartPageId()
    {
        return $this->container['startPageId'];
    }

    /**
     * Sets startPageId
     *
     * @param string $startPageId startPageId
     *
     * @return $this
     */
    public function setStartPageId($startPageId)
    {
        $this->container['startPageId'] = $startPageId;

        return $this;
    }

    /**
     * Gets startPageName
     *
     * @return string
     */
    public function getStartPageName()
    {
        return $this->container['startPageName'];
    }

    /**
     * Sets startPageName
     *
     * @param string $startPageName startPageName
     *
     * @return $this
     */
    public function setStartPageName($startPageName)
    {
        $this->container['startPageName'] = $startPageName;

        return $this;
    }

    /**
     * Gets features
     *
     * @return object
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param object $features features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets variables
     *
     * @return object
     */
    public function getVariables()
    {
        return $this->container['variables'];
    }

    /**
     * Sets variables
     *
     * @param object $variables variables
     *
     * @return $this
     */
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;

        return $this;
    }

    /**
     * Gets customActions
     *
     * @return object
     */
    public function getCustomActions()
    {
        return $this->container['customActions'];
    }

    /**
     * Sets customActions
     *
     * @param object $customActions customActions
     *
     * @return $this
     */
    public function setCustomActions($customActions)
    {
        $this->container['customActions'] = $customActions;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return \PureCloudPlatform\Client\V2\Model\Page[]
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param \PureCloudPlatform\Client\V2\Model\Page[] $pages pages
     *
     * @return $this
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

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

