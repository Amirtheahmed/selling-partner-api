<?php
/**
 * Label
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipping
 *
 * Provides programmatic access to Amazon Shipping APIs.  **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShippingV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Label Class Doc Comment
 *
 * @category Class
 * @description The label details of the container.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Label extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Label';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label_stream' => 'string',
        'label_specification' => '\SellingPartnerApi\Model\ShippingV1\LabelSpecification'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label_stream' => null,
        'label_specification' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'label_stream' => 'labelStream',
        'label_specification' => 'labelSpecification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label_stream' => 'setLabelStream',
        'label_specification' => 'setLabelSpecification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label_stream' => 'getLabelStream',
        'label_specification' => 'getLabelSpecification'
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
        $this->container['label_stream'] = $data['label_stream'] ?? null;
        $this->container['label_specification'] = $data['label_specification'] ?? null;
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
     * Gets label_stream
     *
     * @return string|null
     */
    public function getLabelStream()
    {
        return $this->container['label_stream'];
    }

    /**
     * Sets label_stream
     *
     * @param string|null $label_stream Contains binary image data encoded as a base-64 string.
     *
     * @return self
     */
    public function setLabelStream($label_stream)
    {
        $this->container['label_stream'] = $label_stream;

        return $this;
    }
    /**
     * Gets label_specification
     *
     * @return \SellingPartnerApi\Model\ShippingV1\LabelSpecification|null
     */
    public function getLabelSpecification()
    {
        return $this->container['label_specification'];
    }

    /**
     * Sets label_specification
     *
     * @param \SellingPartnerApi\Model\ShippingV1\LabelSpecification|null $label_specification label_specification
     *
     * @return self
     */
    public function setLabelSpecification($label_specification)
    {
        $this->container['label_specification'] = $label_specification;

        return $this;
    }
}


