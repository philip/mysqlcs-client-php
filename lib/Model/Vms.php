<?php
/**
 * Vms
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
 * OpenAPI spec version: 2017.01.06
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
 * Vms Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Vms implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'vms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'timestamp' => 'string',
        'status' => 'string',
        'servers' => '\Swagger\Client\Model\Servers[]',
        'sub_status' => 'string',
        'host_name' => 'string',
        'label' => 'string',
        'vm_id' => 'int',
        'health_data' => '\Swagger\Client\Model\VmsHealthData',
        'status_message' => 'string',
        'compute_status' => 'int'
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
        'timestamp' => 'timestamp',
        'status' => 'status',
        'servers' => 'servers',
        'sub_status' => 'sub_status',
        'host_name' => 'hostName',
        'label' => 'label',
        'vm_id' => 'vmId',
        'health_data' => 'healthData',
        'status_message' => 'statusMessage',
        'compute_status' => 'computeStatus'
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
        'timestamp' => 'setTimestamp',
        'status' => 'setStatus',
        'servers' => 'setServers',
        'sub_status' => 'setSubStatus',
        'host_name' => 'setHostName',
        'label' => 'setLabel',
        'vm_id' => 'setVmId',
        'health_data' => 'setHealthData',
        'status_message' => 'setStatusMessage',
        'compute_status' => 'setComputeStatus'
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
        'timestamp' => 'getTimestamp',
        'status' => 'getStatus',
        'servers' => 'getServers',
        'sub_status' => 'getSubStatus',
        'host_name' => 'getHostName',
        'label' => 'getLabel',
        'vm_id' => 'getVmId',
        'health_data' => 'getHealthData',
        'status_message' => 'getStatusMessage',
        'compute_status' => 'getComputeStatus'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['sub_status'] = isset($data['sub_status']) ? $data['sub_status'] : null;
        $this->container['host_name'] = isset($data['host_name']) ? $data['host_name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['vm_id'] = isset($data['vm_id']) ? $data['vm_id'] : null;
        $this->container['health_data'] = isset($data['health_data']) ? $data['health_data'] : null;
        $this->container['status_message'] = isset($data['status_message']) ? $data['status_message'] : null;
        $this->container['compute_status'] = isset($data['compute_status']) ? $data['compute_status'] : null;
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
     * Gets timestamp
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param string $timestamp Time at which the status was recorded (UTC).
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the VM. Valid values are <code>UP</code>, <code>DOWN</code>, or <code>ERROR</code> (indicating a system error was encountered during health check).
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets servers
     * @return \Swagger\Client\Model\Servers[]
     */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
     * Sets servers
     * @param \Swagger\Client\Model\Servers[] $servers The health details of MySQL server(s) running on a VM.
     * @return $this
     */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;

        return $this;
    }

    /**
     * Gets sub_status
     * @return string
     */
    public function getSubStatus()
    {
        return $this->container['sub_status'];
    }

    /**
     * Sets sub_status
     * @param string $sub_status Sub-status of the VM.
     * @return $this
     */
    public function setSubStatus($sub_status)
    {
        $this->container['sub_status'] = $sub_status;

        return $this;
    }

    /**
     * Gets host_name
     * @return string
     */
    public function getHostName()
    {
        return $this->container['host_name'];
    }

    /**
     * Sets host_name
     * @param string $host_name Name of the host.
     * @return $this
     */
    public function setHostName($host_name)
    {
        $this->container['host_name'] = $host_name;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label Labels of the VM. For example, <code>mysql</code>, <code>MYSQL_SERVER</code>.
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets vm_id
     * @return int
     */
    public function getVmId()
    {
        return $this->container['vm_id'];
    }

    /**
     * Sets vm_id
     * @param int $vm_id ID of the VM.
     * @return $this
     */
    public function setVmId($vm_id)
    {
        $this->container['vm_id'] = $vm_id;

        return $this;
    }

    /**
     * Gets health_data
     * @return \Swagger\Client\Model\VmsHealthData
     */
    public function getHealthData()
    {
        return $this->container['health_data'];
    }

    /**
     * Sets health_data
     * @param \Swagger\Client\Model\VmsHealthData $health_data
     * @return $this
     */
    public function setHealthData($health_data)
    {
        $this->container['health_data'] = $health_data;

        return $this;
    }

    /**
     * Gets status_message
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->container['status_message'];
    }

    /**
     * Sets status_message
     * @param string $status_message Status message, such as <code>VM running</code>.
     * @return $this
     */
    public function setStatusMessage($status_message)
    {
        $this->container['status_message'] = $status_message;

        return $this;
    }

    /**
     * Gets compute_status
     * @return int
     */
    public function getComputeStatus()
    {
        return $this->container['compute_status'];
    }

    /**
     * Sets compute_status
     * @param int $compute_status Status of the compute node.
     * @return $this
     */
    public function setComputeStatus($compute_status)
    {
        $this->container['compute_status'] = $compute_status;

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

