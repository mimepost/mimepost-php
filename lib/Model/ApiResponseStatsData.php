<?php
/**
 * ApiResponseStatsData
 *
 * PHP version 5
 *
 * @category Class
 * @package  MimePost\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MimePost API Reference (Beta)
 *
 * MimePost API for sending email.  You can find out more about MimePost at [https://mimepost.com](http://mimepost.com). For this sample, you can use the api key `special-key` to test the authorization     filters.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@mimepost.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MimePost\Client\Model;

use \ArrayAccess;
use \MimePost\Client\ObjectSerializer;

/**
 * ApiResponseStatsData Class Doc Comment
 *
 * @category Class
 * @package  MimePost\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiResponseStatsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApiResponseStats_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total_summary' => '\MimePost\Client\Model\ApiResponseStatsDataTotalSummary',
        'datewise_summary' => '\MimePost\Client\Model\ApiResponseStatsDataDatewiseSummary',
        'graph_summary' => '\MimePost\Client\Model\ApiResponseStatsDataGraphSummary'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total_summary' => null,
        'datewise_summary' => null,
        'graph_summary' => null
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
        'total_summary' => 'total_summary',
        'datewise_summary' => 'datewise_summary',
        'graph_summary' => 'graph_summary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_summary' => 'setTotalSummary',
        'datewise_summary' => 'setDatewiseSummary',
        'graph_summary' => 'setGraphSummary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_summary' => 'getTotalSummary',
        'datewise_summary' => 'getDatewiseSummary',
        'graph_summary' => 'getGraphSummary'
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
        $this->container['total_summary'] = isset($data['total_summary']) ? $data['total_summary'] : null;
        $this->container['datewise_summary'] = isset($data['datewise_summary']) ? $data['datewise_summary'] : null;
        $this->container['graph_summary'] = isset($data['graph_summary']) ? $data['graph_summary'] : null;
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
     * Gets total_summary
     *
     * @return \MimePost\Client\Model\ApiResponseStatsDataTotalSummary
     */
    public function getTotalSummary()
    {
        return $this->container['total_summary'];
    }

    /**
     * Sets total_summary
     *
     * @param \MimePost\Client\Model\ApiResponseStatsDataTotalSummary $total_summary total_summary
     *
     * @return $this
     */
    public function setTotalSummary($total_summary)
    {
        $this->container['total_summary'] = $total_summary;

        return $this;
    }

    /**
     * Gets datewise_summary
     *
     * @return \MimePost\Client\Model\ApiResponseStatsDataDatewiseSummary
     */
    public function getDatewiseSummary()
    {
        return $this->container['datewise_summary'];
    }

    /**
     * Sets datewise_summary
     *
     * @param \MimePost\Client\Model\ApiResponseStatsDataDatewiseSummary $datewise_summary datewise_summary
     *
     * @return $this
     */
    public function setDatewiseSummary($datewise_summary)
    {
        $this->container['datewise_summary'] = $datewise_summary;

        return $this;
    }

    /**
     * Gets graph_summary
     *
     * @return \MimePost\Client\Model\ApiResponseStatsDataGraphSummary
     */
    public function getGraphSummary()
    {
        return $this->container['graph_summary'];
    }

    /**
     * Sets graph_summary
     *
     * @param \MimePost\Client\Model\ApiResponseStatsDataGraphSummary $graph_summary graph_summary
     *
     * @return $this
     */
    public function setGraphSummary($graph_summary)
    {
        $this->container['graph_summary'] = $graph_summary;

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


