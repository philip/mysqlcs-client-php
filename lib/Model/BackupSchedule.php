<?php
/**
 * BackupSchedule
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API for MySQL Cloud Service
 *
 * Use the REST API to manage MySQL Cloud Service instances
 *
 * OpenAPI spec version: 2017.01.09
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * BackupSchedule Class Doc Comment
 *
 * @category    Class */
 // @description Attributes for &lt;code&gt;fullBackupSchedule&lt;/code&gt; and &lt;code&gt;incrementalBackupSchedule&lt;/code&gt;.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BackupSchedule implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'backup-schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'second' => 'string',
        'minute' => 'string',
        'hour' => 'string',
        'day_of_month' => 'string',
        'month' => 'string',
        'day_of_week' => 'string',
        'year' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'second' => 'second',
        'minute' => 'minute',
        'hour' => 'hour',
        'day_of_month' => 'dayOfMonth',
        'month' => 'month',
        'day_of_week' => 'dayOfWeek',
        'year' => 'year'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'second' => 'setSecond',
        'minute' => 'setMinute',
        'hour' => 'setHour',
        'day_of_month' => 'setDayOfMonth',
        'month' => 'setMonth',
        'day_of_week' => 'setDayOfWeek',
        'year' => 'setYear'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'second' => 'getSecond',
        'minute' => 'getMinute',
        'hour' => 'getHour',
        'day_of_month' => 'getDayOfMonth',
        'month' => 'getMonth',
        'day_of_week' => 'getDayOfWeek',
        'year' => 'getYear'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['second'] = isset($data['second']) ? $data['second'] : null;
        $this->container['minute'] = isset($data['minute']) ? $data['minute'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['day_of_month'] = isset($data['day_of_month']) ? $data['day_of_month'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['day_of_week'] = isset($data['day_of_week']) ? $data['day_of_week'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets second
     * @return string
     */
    public function getSecond()
    {
        return $this->container['second'];
    }

    /**
     * Sets second
     * @param string $second Seconds. This value is not configurable. It defaults to 0.
     * @return $this
     */
    public function setSecond($second)
    {
        $this->container['second'] = $second;

        return $this;
    }

    /**
     * Gets minute
     * @return string
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     * @param string $minute Minutes. Valid values are 0 to 59.
     * @return $this
     */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;

        return $this;
    }

    /**
     * Gets hour
     * @return string
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     * @param string $hour Hours. Valid values are 0 to 23.
     * @return $this
     */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets day_of_month
     * @return string
     */
    public function getDayOfMonth()
    {
        return $this->container['day_of_month'];
    }

    /**
     * Sets day_of_month
     * @param string $day_of_month Day of the month. This value is not configurable. It defaults to all days of the month (&#42;).
     * @return $this
     */
    public function setDayOfMonth($day_of_month)
    {
        $this->container['day_of_month'] = $day_of_month;

        return $this;
    }

    /**
     * Gets month
     * @return string
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     * @param string $month Month. This value is not configurable. It defaults to all months (&#42;).
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets day_of_week
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     * @param string $day_of_week Day of the week. Valid values are: Mon, Tue, Wed, Thu, Fri, Sat, Sun. For full backups, only one value (day) is allowed. For incremental backups, one or more values (days) are allowed. If a value is not specified for incremental backups, the default value is calculated as all days except the day that full backups are initiated.
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $this->container['day_of_week'] = $day_of_week;

        return $this;
    }

    /**
     * Gets year
     * @return string
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     * @param string $year Year. This value is not configurable. It defaults to all years (&#42;).
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


