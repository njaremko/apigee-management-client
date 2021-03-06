<?php
/**
 * Developer
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Developers API
 *
 * Developers must register with an organization on Apigee Edge. After they are registered, developers register their apps, choose the APIs they want to use, and receive the unique API credentials (consumer keys and secrets) needed to access your APIs.
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Developer Class Doc Comment
 *
 * @category Class
 * @description Developer details.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Developer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Developer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apps' => 'string[]',
        'attributes' => '\OpenAPI\Client\Model\Attribute[]',
        'companies' => 'string[]',
        'created_at' => 'int',
        'created_by' => 'string',
        'developer_id' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'last_modified_at' => 'int',
        'last_modified_by' => 'string',
        'organization_name' => 'string',
        'status' => 'mixed',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apps' => null,
        'attributes' => null,
        'companies' => null,
        'created_at' => 'int32',
        'created_by' => null,
        'developer_id' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'last_modified_at' => 'int32',
        'last_modified_by' => null,
        'organization_name' => null,
        'status' => null,
        'username' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'apps' => 'apps',
        'attributes' => 'attributes',
        'companies' => 'companies',
        'created_at' => 'createdAt',
        'created_by' => 'createdBy',
        'developer_id' => 'developerId',
        'email' => 'email',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'last_modified_at' => 'lastModifiedAt',
        'last_modified_by' => 'lastModifiedBy',
        'organization_name' => 'organizationName',
        'status' => 'status',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apps' => 'setApps',
        'attributes' => 'setAttributes',
        'companies' => 'setCompanies',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'developer_id' => 'setDeveloperId',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'last_modified_at' => 'setLastModifiedAt',
        'last_modified_by' => 'setLastModifiedBy',
        'organization_name' => 'setOrganizationName',
        'status' => 'setStatus',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apps' => 'getApps',
        'attributes' => 'getAttributes',
        'companies' => 'getCompanies',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'developer_id' => 'getDeveloperId',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'last_modified_at' => 'getLastModifiedAt',
        'last_modified_by' => 'getLastModifiedBy',
        'organization_name' => 'getOrganizationName',
        'status' => 'getStatus',
        'username' => 'getUsername'
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
        return self::$openAPIModelName;
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
        $this->container['apps'] = $data['apps'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['companies'] = $data['companies'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['developer_id'] = $data['developer_id'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['last_modified_at'] = $data['last_modified_at'] ?? null;
        $this->container['last_modified_by'] = $data['last_modified_by'] ?? null;
        $this->container['organization_name'] = $data['organization_name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
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
     * Gets apps
     *
     * @return string[]|null
     */
    public function getApps()
    {
        return $this->container['apps'];
    }

    /**
     * Sets apps
     *
     * @param string[]|null $apps Output only. List of apps associated with the developer.
     *
     * @return self
     */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \OpenAPI\Client\Model\Attribute[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \OpenAPI\Client\Model\Attribute[]|null $attributes List of attributes that can be used to extend the default developer profile. With Apigee Edge for Public Cloud, the custom attribute limit is 18.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets companies
     *
     * @return string[]|null
     */
    public function getCompanies()
    {
        return $this->container['companies'];
    }

    /**
     * Sets companies
     *
     * @param string[]|null $companies Output only. List of companies associated with the developer.
     *
     * @return self
     */
    public function setCompanies($companies)
    {
        $this->container['companies'] = $companies;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at Output only. Time the developer was created in milliseconds since epoch.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by Output only. Email address of the developer that created the developer.
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets developer_id
     *
     * @return string|null
     */
    public function getDeveloperId()
    {
        return $this->container['developer_id'];
    }

    /**
     * Sets developer_id
     *
     * @param string|null $developer_id ID of the developer. Generated internally by Apigee and not guaranteed to stay consistent over time.
     *
     * @return self
     */
    public function setDeveloperId($developer_id)
    {
        $this->container['developer_id'] = $developer_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email address of the developer. This value is used to uniquely identify the developer in Apigee Edge.
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of the developer.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of the developer.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets last_modified_at
     *
     * @return int|null
     */
    public function getLastModifiedAt()
    {
        return $this->container['last_modified_at'];
    }

    /**
     * Sets last_modified_at
     *
     * @param int|null $last_modified_at Output only. Last modified time as milliseconds since epoch.
     *
     * @return self
     */
    public function setLastModifiedAt($last_modified_at)
    {
        $this->container['last_modified_at'] = $last_modified_at;

        return $this;
    }

    /**
     * Gets last_modified_by
     *
     * @return string|null
     */
    public function getLastModifiedBy()
    {
        return $this->container['last_modified_by'];
    }

    /**
     * Sets last_modified_by
     *
     * @param string|null $last_modified_by Output only. Email of developer that last modified the app.
     *
     * @return self
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->container['last_modified_by'] = $last_modified_by;

        return $this;
    }

    /**
     * Gets organization_name
     *
     * @return string|null
     */
    public function getOrganizationName()
    {
        return $this->container['organization_name'];
    }

    /**
     * Sets organization_name
     *
     * @param string|null $organization_name Output only. Name of the organization associated with the developer.
     *
     * @return self
     */
    public function setOrganizationName($organization_name)
    {
        $this->container['organization_name'] = $organization_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return mixed|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param mixed|null $status Status of the developer. Valid values are `active` and `inactive`.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username Username. Not used by Apigee.
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


