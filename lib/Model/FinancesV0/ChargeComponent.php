<?php
/**
 * ChargeComponent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ChargeComponent Class Doc Comment
 *
 * @category Class
 * @description A charge on the seller's account. Possible values: * Principal - The selling price of the order item, equal to the selling price of the item multiplied by the quantity ordered. * Tax - The tax collected by the seller on the Principal. * MarketplaceFacilitatorTax-Principal - The tax withheld on the Principal. * MarketplaceFacilitatorTax-Shipping - The tax withheld on the ShippingCharge. * MarketplaceFacilitatorTax-Giftwrap - The tax withheld on the Giftwrap charge. * MarketplaceFacilitatorTax-Other - The tax withheld on other miscellaneous charges. * Discount - The promotional discount for an order item. * TaxDiscount - The tax amount deducted for promotional rebates. * CODItemCharge - The COD charge for an order item. * CODItemTaxCharge - The tax collected by the seller on a CODItemCharge. * CODOrderCharge - The COD charge for an order. * CODOrderTaxCharge - The tax collected by the seller on a CODOrderCharge. * CODShippingCharge - Shipping charges for a COD order. * CODShippingTaxCharge - The tax collected by the seller on a CODShippingCharge. * ShippingCharge - The shipping charge. * ShippingTax - The tax collected by the seller on a ShippingCharge. * Goodwill - The amount given to a buyer as a gesture of goodwill or to compensate for pain and suffering in the buying experience. * Giftwrap - The gift wrap charge. * GiftwrapTax - The tax collected by the seller on a Giftwrap charge. * RestockingFee - The charge applied to the buyer when returning a product in certain categories. * ReturnShipping - The amount given to the buyer to compensate for shipping the item back in the event we are at fault. * PointsFee - The value of Amazon Points deducted from the refund if the buyer does not have enough Amazon Points to cover the deduction. * GenericDeduction - A generic bad debt deduction. * FreeReplacementReturnShipping - The compensation for return shipping when a buyer receives the wrong item, requests a free replacement, and returns the incorrect item. * PaymentMethodFee - The fee collected for certain payment methods in certain marketplaces. * ExportCharge - The export duty that is charged when an item is shipped to an international destination as part of the Amazon Global program. * SAFE-TReimbursement - The SAFE-T claim amount for the item. * TCS-CGST - Tax Collected at Source (TCS) for Central Goods and Services Tax (CGST). * TCS-SGST - Tax Collected at Source for State Goods and Services Tax (SGST). * TCS-IGST - Tax Collected at Source for Integrated Goods and Services Tax (IGST). * TCS-UTGST - Tax Collected at Source for Union Territories Goods and Services Tax (UTGST).
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ChargeComponent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChargeComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'charge_type' => 'string',
        'charge_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'charge_type' => null,
        'charge_amount' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'charge_type' => 'ChargeType',
        'charge_amount' => 'ChargeAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'charge_type' => 'setChargeType',
        'charge_amount' => 'setChargeAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'charge_type' => 'getChargeType',
        'charge_amount' => 'getChargeAmount'
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
        $this->container['charge_type'] = $data['charge_type'] ?? null;
        $this->container['charge_amount'] = $data['charge_amount'] ?? null;
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
     * Gets charge_type
     *
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string|null $charge_type The type of charge.
     *
     * @return self
     */
    public function setChargeType($charge_type)
    {
        $this->container['charge_type'] = $charge_type;

        return $this;
    }
    /**
     * Gets charge_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getChargeAmount()
    {
        return $this->container['charge_amount'];
    }

    /**
     * Sets charge_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $charge_amount charge_amount
     *
     * @return self
     */
    public function setChargeAmount($charge_amount)
    {
        $this->container['charge_amount'] = $charge_amount;

        return $this;
    }
}


