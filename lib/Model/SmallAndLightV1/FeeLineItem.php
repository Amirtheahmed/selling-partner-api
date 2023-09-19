<?php
/**
 * FeeLineItem
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for FBA Small And Light
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
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

namespace SellingPartnerApi\Model\SmallAndLightV1;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * FeeLineItem Class Doc Comment
 *
 * @category Class
 * @description Fee details for a specific fee.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FeeLineItem extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FeeLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fee_type' => 'string',
        'fee_charge' => '\SellingPartnerApi\Model\SmallAndLightV1\MoneyType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fee_type' => null,
        'fee_charge' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fee_type' => 'feeType',
        'fee_charge' => 'feeCharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fee_type' => 'setFeeType',
        'fee_charge' => 'setFeeCharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fee_type' => 'getFeeType',
        'fee_charge' => 'getFeeCharge'
    ];



    const FEE_TYPE_FBA_WEIGHT_BASED_FEE = 'FBAWeightBasedFee';
    const FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE = 'FBAPerOrderFulfillmentFee';
    const FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE = 'FBAPerUnitFulfillmentFee';
    const FEE_TYPE_COMMISSION = 'Commission';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeeTypeAllowableValues()
    {
        $baseVals = [
            self::FEE_TYPE_FBA_WEIGHT_BASED_FEE,
            self::FEE_TYPE_FBA_PER_ORDER_FULFILLMENT_FEE,
            self::FEE_TYPE_FBA_PER_UNIT_FULFILLMENT_FEE,
            self::FEE_TYPE_COMMISSION,
        ];

        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        return array_map(function ($val) { return strtoupper($val); }, $baseVals);
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
        $this->container['fee_type'] = $data['fee_type'] ?? null;
        $this->container['fee_charge'] = $data['fee_charge'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fee_type'] === null) {
            $invalidProperties[] = "'fee_type' can't be null";
        }
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (
            !is_null($this->container['fee_type']) &&
            !in_array(strtoupper($this->container['fee_type']), $allowedValues, true)
        ) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fee_type', must be one of '%s'",
                $this->container['fee_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fee_charge'] === null) {
            $invalidProperties[] = "'fee_charge' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets fee_type
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type
     *
     * @param string $fee_type The type of fee charged to the seller.
     *
     * @return self
     */
    public function setFeeType($fee_type)
    {
        $allowedValues = $this->getFeeTypeAllowableValues();
        if (!in_array(strtoupper($fee_type), $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fee_type', must be one of '%s'",
                    $fee_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fee_type'] = $fee_type;

        return $this;
    }
    /**
     * Gets fee_charge
     *
     * @return \SellingPartnerApi\Model\SmallAndLightV1\MoneyType
     */
    public function getFeeCharge()
    {
        return $this->container['fee_charge'];
    }

    /**
     * Sets fee_charge
     *
     * @param \SellingPartnerApi\Model\SmallAndLightV1\MoneyType $fee_charge fee_charge
     *
     * @return self
     */
    public function setFeeCharge($fee_charge)
    {
        $this->container['fee_charge'] = $fee_charge;

        return $this;
    }
}


