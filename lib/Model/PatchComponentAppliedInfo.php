<?php
/**
 * PatchComponentAppliedInfo
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
 * PatchComponentAppliedInfo Class Doc Comment
 *
 * @category    Class */
 // @description Group the details of the patch to be applied.
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PatchComponentAppliedInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'patch-component-applied-info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'component' => 'string',
        'version' => 'string',
        'md5sum' => 'string',
        'provisioning_object_ref' => 'string',
        'patching_object_ref' => 'string',
        'preserve_files' => 'string[]'
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
        'id' => 'id',
        'component' => 'component',
        'version' => 'version',
        'md5sum' => 'md5sum',
        'provisioning_object_ref' => 'provisioningObjectRef',
        'patching_object_ref' => 'patchingObjectRef',
        'preserve_files' => 'preserveFiles'
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
        'id' => 'setId',
        'component' => 'setComponent',
        'version' => 'setVersion',
        'md5sum' => 'setMd5sum',
        'provisioning_object_ref' => 'setProvisioningObjectRef',
        'patching_object_ref' => 'setPatchingObjectRef',
        'preserve_files' => 'setPreserveFiles'
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
        'id' => 'getId',
        'component' => 'getComponent',
        'version' => 'getVersion',
        'md5sum' => 'getMd5sum',
        'provisioning_object_ref' => 'getProvisioningObjectRef',
        'patching_object_ref' => 'getPatchingObjectRef',
        'preserve_files' => 'getPreserveFiles'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['component'] = isset($data['component']) ? $data['component'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['md5sum'] = isset($data['md5sum']) ? $data['md5sum'] : null;
        $this->container['provisioning_object_ref'] = isset($data['provisioning_object_ref']) ? $data['provisioning_object_ref'] : null;
        $this->container['patching_object_ref'] = isset($data['patching_object_ref']) ? $data['patching_object_ref'] : null;
        $this->container['preserve_files'] = isset($data['preserve_files']) ? $data['preserve_files'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of a component patch.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets component
     * @return string
     */
    public function getComponent()
    {
        return $this->container['component'];
    }

    /**
     * Sets component
     * @param string $component Name of the component in this patch. For example, <code>mysql</code>.
     * @return $this
     */
    public function setComponent($component)
    {
        $this->container['component'] = $component;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version Version of the patch component.
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets md5sum
     * @return string
     */
    public function getMd5sum()
    {
        return $this->container['md5sum'];
    }

    /**
     * Sets md5sum
     * @param string $md5sum Checksum used to validate the patch binary.
     * @return $this
     */
    public function setMd5sum($md5sum)
    {
        $this->container['md5sum'] = $md5sum;

        return $this;
    }

    /**
     * Gets provisioning_object_ref
     * @return string
     */
    public function getProvisioningObjectRef()
    {
        return $this->container['provisioning_object_ref'];
    }

    /**
     * Sets provisioning_object_ref
     * @param string $provisioning_object_ref Location of binary to use when creating a new service instance.
     * @return $this
     */
    public function setProvisioningObjectRef($provisioning_object_ref)
    {
        $this->container['provisioning_object_ref'] = $provisioning_object_ref;

        return $this;
    }

    /**
     * Gets patching_object_ref
     * @return string
     */
    public function getPatchingObjectRef()
    {
        return $this->container['patching_object_ref'];
    }

    /**
     * Sets patching_object_ref
     * @param string $patching_object_ref Location of binary to use when patching a service instance.
     * @return $this
     */
    public function setPatchingObjectRef($patching_object_ref)
    {
        $this->container['patching_object_ref'] = $patching_object_ref;

        return $this;
    }

    /**
     * Gets preserve_files
     * @return string[]
     */
    public function getPreserveFiles()
    {
        return $this->container['preserve_files'];
    }

    /**
     * Sets preserve_files
     * @param string[] $preserve_files List of files to be preserved during patching.
     * @return $this
     */
    public function setPreserveFiles($preserve_files)
    {
        $this->container['preserve_files'] = $preserve_files;

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


