<?php
/**
 * SshGetKeyDetailsResponse
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
 * OpenAPI spec version: 2017.01.18
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
 * SshGetKeyDetailsResponse Class Doc Comment
 *
 * @category    Class */
 // @description The details of one SSH key.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SshGetKeyDetailsResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ssh-get-key-details-response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'identity_domain' => 'string',
        'service_type' => 'string',
        'service_name' => 'string',
        'cred_name' => 'string',
        'cred_type' => 'string',
        'parent_type' => 'string',
        'last_update_time' => 'string',
        'last_update_status' => 'string',
        'last_update_message' => 'string',
        'os_user_name' => 'string',
        'compute_key_name' => 'string',
        'public_key' => 'string',
        'description' => 'string'
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
        'identity_domain' => 'identityDomain',
        'service_type' => 'serviceType',
        'service_name' => 'serviceName',
        'cred_name' => 'credName',
        'cred_type' => 'credType',
        'parent_type' => 'parentType',
        'last_update_time' => 'lastUpdateTime',
        'last_update_status' => 'lastUpdateStatus',
        'last_update_message' => 'lastUpdateMessage',
        'os_user_name' => 'osUserName',
        'compute_key_name' => 'computeKeyName',
        'public_key' => 'publicKey',
        'description' => 'description'
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
        'identity_domain' => 'setIdentityDomain',
        'service_type' => 'setServiceType',
        'service_name' => 'setServiceName',
        'cred_name' => 'setCredName',
        'cred_type' => 'setCredType',
        'parent_type' => 'setParentType',
        'last_update_time' => 'setLastUpdateTime',
        'last_update_status' => 'setLastUpdateStatus',
        'last_update_message' => 'setLastUpdateMessage',
        'os_user_name' => 'setOsUserName',
        'compute_key_name' => 'setComputeKeyName',
        'public_key' => 'setPublicKey',
        'description' => 'setDescription'
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
        'identity_domain' => 'getIdentityDomain',
        'service_type' => 'getServiceType',
        'service_name' => 'getServiceName',
        'cred_name' => 'getCredName',
        'cred_type' => 'getCredType',
        'parent_type' => 'getParentType',
        'last_update_time' => 'getLastUpdateTime',
        'last_update_status' => 'getLastUpdateStatus',
        'last_update_message' => 'getLastUpdateMessage',
        'os_user_name' => 'getOsUserName',
        'compute_key_name' => 'getComputeKeyName',
        'public_key' => 'getPublicKey',
        'description' => 'getDescription'
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
        $this->container['identity_domain'] = isset($data['identity_domain']) ? $data['identity_domain'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['cred_name'] = isset($data['cred_name']) ? $data['cred_name'] : null;
        $this->container['cred_type'] = isset($data['cred_type']) ? $data['cred_type'] : null;
        $this->container['parent_type'] = isset($data['parent_type']) ? $data['parent_type'] : null;
        $this->container['last_update_time'] = isset($data['last_update_time']) ? $data['last_update_time'] : null;
        $this->container['last_update_status'] = isset($data['last_update_status']) ? $data['last_update_status'] : null;
        $this->container['last_update_message'] = isset($data['last_update_message']) ? $data['last_update_message'] : null;
        $this->container['os_user_name'] = isset($data['os_user_name']) ? $data['os_user_name'] : null;
        $this->container['compute_key_name'] = isset($data['compute_key_name']) ? $data['compute_key_name'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets identity_domain
     * @return string
     */
    public function getIdentityDomain()
    {
        return $this->container['identity_domain'];
    }

    /**
     * Sets identity_domain
     * @param string $identity_domain Identity domain ID for the Oracle MySQL Cloud Service account.
     * @return $this
     */
    public function setIdentityDomain($identity_domain)
    {
        $this->container['identity_domain'] = $identity_domain;

        return $this;
    }

    /**
     * Gets service_type
     * @return string
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     * @param string $service_type Cloud service type. Valid value is <code>MySQLCS</code> for Oracle MySQL Cloud Service.
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets service_name
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     * @param string $service_name Name of the Oracle MySQL Cloud Service instance.
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets cred_name
     * @return string
     */
    public function getCredName()
    {
        return $this->container['cred_name'];
    }

    /**
     * Sets cred_name
     * @param string $cred_name Credential name. Currently, the only supported credential name is <code>vmspublickey</code>.
     * @return $this
     */
    public function setCredName($cred_name)
    {
        $this->container['cred_name'] = $cred_name;

        return $this;
    }

    /**
     * Gets cred_type
     * @return string
     */
    public function getCredType()
    {
        return $this->container['cred_type'];
    }

    /**
     * Sets cred_type
     * @param string $cred_type Credential type. Only supported value is <code>SSH</code>.
     * @return $this
     */
    public function setCredType($cred_type)
    {
        $this->container['cred_type'] = $cred_type;

        return $this;
    }

    /**
     * Gets parent_type
     * @return string
     */
    public function getParentType()
    {
        return $this->container['parent_type'];
    }

    /**
     * Sets parent_type
     * @param string $parent_type The value <code>SERVICE</code>.
     * @return $this
     */
    public function setParentType($parent_type)
    {
        $this->container['parent_type'] = $parent_type;

        return $this;
    }

    /**
     * Gets last_update_time
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->container['last_update_time'];
    }

    /**
     * Sets last_update_time
     * @param string $last_update_time Date and time the SSH key was last updated.
     * @return $this
     */
    public function setLastUpdateTime($last_update_time)
    {
        $this->container['last_update_time'] = $last_update_time;

        return $this;
    }

    /**
     * Gets last_update_status
     * @return string
     */
    public function getLastUpdateStatus()
    {
        return $this->container['last_update_status'];
    }

    /**
     * Sets last_update_status
     * @param string $last_update_status Status of the last update for the SSH key.
     * @return $this
     */
    public function setLastUpdateStatus($last_update_status)
    {
        $this->container['last_update_status'] = $last_update_status;

        return $this;
    }

    /**
     * Gets last_update_message
     * @return string
     */
    public function getLastUpdateMessage()
    {
        return $this->container['last_update_message'];
    }

    /**
     * Sets last_update_message
     * @param string $last_update_message Message returned from the last update for the SSH key. For example: <code>newly created</code>, <code>updated by <em>username</em></code>.
     * @return $this
     */
    public function setLastUpdateMessage($last_update_message)
    {
        $this->container['last_update_message'] = $last_update_message;

        return $this;
    }

    /**
     * Gets os_user_name
     * @return string
     */
    public function getOsUserName()
    {
        return $this->container['os_user_name'];
    }

    /**
     * Sets os_user_name
     * @param string $os_user_name Compute virtual machine OS user name. Only supported value is <code>opc</code>.
     * @return $this
     */
    public function setOsUserName($os_user_name)
    {
        $this->container['os_user_name'] = $os_user_name;

        return $this;
    }

    /**
     * Gets compute_key_name
     * @return string
     */
    public function getComputeKeyName()
    {
        return $this->container['compute_key_name'];
    }

    /**
     * Sets compute_key_name
     * @param string $compute_key_name Compute sshkey object key name.
     * @return $this
     */
    public function setComputeKeyName($compute_key_name)
    {
        $this->container['compute_key_name'] = $compute_key_name;

        return $this;
    }

    /**
     * Gets public_key
     * @return string
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     * @param string $public_key Public key for the secure shell (SSH). This key is used for authentication when connecting to the Oracle MySQL Cloud Service instance using an SSH client.
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Credential description of the credential name.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


