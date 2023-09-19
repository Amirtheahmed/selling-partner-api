<?php
/**
 * AvailableValueAddedServiceGroup
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Amazon Shipping API
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 * Contact: swa-api-core@amazon.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV2;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * AvailableValueAddedServiceGroup Class Doc Comment
 *
 * @category Class
 * @description The value-added services available for purchase with a shipping service offering.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AvailableValueAddedServiceGroup extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableValueAddedServiceGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_id' => 'string',
        'group_description' => 'string',
        'is_required' => 'bool',
        'value_added_services' => '\SellingPartnerApi\Model\ShippingV2\ValueAddedService[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group_id' => null,
        'group_description' => null,
        'is_required' => null,
        'value_added_services' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'group_id' => 'groupId',
        'group_description' => 'groupDescription',
        'is_required' => 'isRequired',
        'value_added_services' => 'valueAddedServices'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_id' => 'setGroupId',
        'group_description' => 'setGroupDescription',
        'is_required' => 'setIsRequired',
        'value_added_services' => 'setValueAddedServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_id' => 'getGroupId',
        'group_description' => 'getGroupDescription',
        'is_required' => 'getIsRequired',
        'value_added_services' => 'getValueAddedServices'
    ];


    
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
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['group_description'] = $data['group_description'] ?? null;
        $this->container['is_required'] = $data['is_required'] ?? null;
        $this->container['value_added_services'] = $data['value_added_services'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['group_description'] === null) {
            $invalidProperties[] = "'group_description' can't be null";
        }
        if ($this->container['is_required'] === null) {
            $invalidProperties[] = "'is_required' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id The type of the value-added service group.
     *
     * @return self
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }
    /**
     * Gets group_description
     *
     * @return string
     */
    public function getGroupDescription()
    {
        return $this->container['group_description'];
    }

    /**
     * Sets group_description
     *
     * @param string $group_description The name of the value-added service group.
     *
     * @return self
     */
    public function setGroupDescription($group_description)
    {
        $this->container['group_description'] = $group_description;

        return $this;
    }
    /**
     * Gets is_required
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool $is_required When true, one or more of the value-added services listed must be specified.
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }
    /**
     * Gets value_added_services
     *
     * @return \SellingPartnerApi\Model\ShippingV2\ValueAddedService[]|null
     */
    public function getValueAddedServices()
    {
        return $this->container['value_added_services'];
    }

    /**
     * Sets value_added_services
     *
     * @param \SellingPartnerApi\Model\ShippingV2\ValueAddedService[]|null $value_added_services A list of optional value-added services available for purchase with a shipping service offering.
     *
     * @return self
     */
    public function setValueAddedServices($value_added_services)
    {
        $this->container['value_added_services'] = $value_added_services;

        return $this;
    }
}


