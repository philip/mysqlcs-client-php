<?php
/**
 * BackupconfigPostrequest
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
 * BackupconfigPostrequest Class Doc Comment
 *
 * @category    Class */
 // @description The request body defines the details of the backup configuration update request.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BackupconfigPostrequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'backupconfig-postrequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'default_retention' => 'int',
        'full_backup_schedule' => '\Swagger\Client\Model\BackupconfigSchedule',
        'incremental_backup_schedule' => '\Swagger\Client\Model\BackupconfigSchedule'
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
        'default_retention' => 'defaultRetention',
        'full_backup_schedule' => 'fullBackupSchedule',
        'incremental_backup_schedule' => 'incrementalBackupSchedule'
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
        'default_retention' => 'setDefaultRetention',
        'full_backup_schedule' => 'setFullBackupSchedule',
        'incremental_backup_schedule' => 'setIncrementalBackupSchedule'
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
        'default_retention' => 'getDefaultRetention',
        'full_backup_schedule' => 'getFullBackupSchedule',
        'incremental_backup_schedule' => 'getIncrementalBackupSchedule'
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
        $this->container['default_retention'] = isset($data['default_retention']) ? $data['default_retention'] : null;
        $this->container['full_backup_schedule'] = isset($data['full_backup_schedule']) ? $data['full_backup_schedule'] : null;
        $this->container['incremental_backup_schedule'] = isset($data['incremental_backup_schedule']) ? $data['incremental_backup_schedule'] : null;
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
     * Gets default_retention
     * @return int
     */
    public function getDefaultRetention()
    {
        return $this->container['default_retention'];
    }

    /**
     * Sets default_retention
     * @param int $default_retention Number of days incremental backups and full on-demand backups are retained.
     * @return $this
     */
    public function setDefaultRetention($default_retention)
    {
        $this->container['default_retention'] = $default_retention;

        return $this;
    }

    /**
     * Gets full_backup_schedule
     * @return \Swagger\Client\Model\BackupconfigSchedule
     */
    public function getFullBackupSchedule()
    {
        return $this->container['full_backup_schedule'];
    }

    /**
     * Sets full_backup_schedule
     * @param \Swagger\Client\Model\BackupconfigSchedule $full_backup_schedule
     * @return $this
     */
    public function setFullBackupSchedule($full_backup_schedule)
    {
        $this->container['full_backup_schedule'] = $full_backup_schedule;

        return $this;
    }

    /**
     * Gets incremental_backup_schedule
     * @return \Swagger\Client\Model\BackupconfigSchedule
     */
    public function getIncrementalBackupSchedule()
    {
        return $this->container['incremental_backup_schedule'];
    }

    /**
     * Sets incremental_backup_schedule
     * @param \Swagger\Client\Model\BackupconfigSchedule $incremental_backup_schedule
     * @return $this
     */
    public function setIncrementalBackupSchedule($incremental_backup_schedule)
    {
        $this->container['incremental_backup_schedule'] = $incremental_backup_schedule;

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


