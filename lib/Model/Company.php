<?php
/**
 * Company
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Companies API
 *
 * Manage companies in an organization.  A company is a collection of developers managed as a single entity. A company can be any grouping that is appropriate to your organization, for example, business unit, product line, or division. Grouping developers into companies is useful when your goal is to work with multiple developers associated under a single corporate entity for billing purposes, for example.  Companies are optional. It not required that the developers in your organization are associated with a company. Note that a developer is always a single entity, uniquely identified by the email element.
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
 * Company Class Doc Comment
 *
 * @category Class
 * @description Company.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Company implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apps' => 'string[]',
        'name' => 'string',
        'display_name' => 'string',
        'organization' => 'string',
        'status' => 'string',
        'attributes' => '\OpenAPI\Client\Model\CompanyAttributes[]',
        'created_at' => 'int',
        'last_modified_at' => 'int',
        'last_modified_by' => 'string'
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
        'name' => null,
        'display_name' => null,
        'organization' => null,
        'status' => null,
        'attributes' => null,
        'created_at' => null,
        'last_modified_at' => null,
        'last_modified_by' => null
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
        'name' => 'name',
        'display_name' => 'displayName',
        'organization' => 'organization',
        'status' => 'status',
        'attributes' => 'attributes',
        'created_at' => 'createdAt',
        'last_modified_at' => 'lastModifiedAt',
        'last_modified_by' => 'lastModifiedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apps' => 'setApps',
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'organization' => 'setOrganization',
        'status' => 'setStatus',
        'attributes' => 'setAttributes',
        'created_at' => 'setCreatedAt',
        'last_modified_at' => 'setLastModifiedAt',
        'last_modified_by' => 'setLastModifiedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apps' => 'getApps',
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'organization' => 'getOrganization',
        'status' => 'getStatus',
        'attributes' => 'getAttributes',
        'created_at' => 'getCreatedAt',
        'last_modified_at' => 'getLastModifiedAt',
        'last_modified_by' => 'getLastModifiedBy'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['organization'] = $data['organization'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['last_modified_at'] = $data['last_modified_at'] ?? null;
        $this->container['last_modified_by'] = $data['last_modified_by'] ?? null;
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
     * @param string[]|null $apps Output only. Apps associated with the company.
     *
     * @return self
     */
    public function setApps($apps)
    {
        $this->container['apps'] = $apps;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the company. See <a href=\"https://docs.apigee.com/api-platform/reference/naming-guidelines\">naming restrictions</a>. Required when creating a company.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name Display name for the company.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization Output only. Organization name.
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Output only. Status of the company. Valid values are `active` or `inactive`. Defaults to `active` when creating the company. To change the value, see Update a company.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \OpenAPI\Client\Model\CompanyAttributes[]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \OpenAPI\Client\Model\CompanyAttributes[]|null $attributes Name/value formatted attributes used to extend the default company profile. **Note**: With Apigee Edge for Public Cloud, the custom attribute limit is 18.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * @param int|null $created_at Output only. Time when the company was last modified in seconds since epoch.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param int|null $last_modified_at Output only. Time when the company was last modified in seconds since epoch.
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
     * @param string|null $last_modified_by Output only. Email address of developer that last modified the company.
     *
     * @return self
     */
    public function setLastModifiedBy($last_modified_by)
    {
        $this->container['last_modified_by'] = $last_modified_by;

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


