<?php
/**
 * AvailableCarrierWillPickUpOption
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * AvailableCarrierWillPickUpOption Class Doc Comment
 *
 * @category Class
 * @description Indicates whether the carrier will pick up the package, and what fee is charged, if any.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AvailableCarrierWillPickUpOption extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AvailableCarrierWillPickUpOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'carrier_will_pick_up_option' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\CarrierWillPickUpOption',
        'charge' => '\SellingPartnerApi\Model\MerchantFulfillmentV0\CurrencyAmount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'carrier_will_pick_up_option' => null,
        'charge' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'carrier_will_pick_up_option' => 'CarrierWillPickUpOption',
        'charge' => 'Charge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_will_pick_up_option' => 'setCarrierWillPickUpOption',
        'charge' => 'setCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_will_pick_up_option' => 'getCarrierWillPickUpOption',
        'charge' => 'getCharge'
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
        $this->container['carrier_will_pick_up_option'] = $data['carrier_will_pick_up_option'] ?? null;
        $this->container['charge'] = $data['charge'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['carrier_will_pick_up_option'] === null) {
            $invalidProperties[] = "'carrier_will_pick_up_option' can't be null";
        }
        if ($this->container['charge'] === null) {
            $invalidProperties[] = "'charge' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets carrier_will_pick_up_option
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\CarrierWillPickUpOption
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->container['carrier_will_pick_up_option'];
    }

    /**
     * Sets carrier_will_pick_up_option
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\CarrierWillPickUpOption $carrier_will_pick_up_option carrier_will_pick_up_option
     *
     * @return self
     */
    public function setCarrierWillPickUpOption($carrier_will_pick_up_option)
    {
        $this->container['carrier_will_pick_up_option'] = $carrier_will_pick_up_option;

        return $this;
    }
    /**
     * Gets charge
     *
     * @return \SellingPartnerApi\Model\MerchantFulfillmentV0\CurrencyAmount
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge
     *
     * @param \SellingPartnerApi\Model\MerchantFulfillmentV0\CurrencyAmount $charge charge
     *
     * @return self
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }
}


