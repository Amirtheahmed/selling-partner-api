<?php
/**
 * Product
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApi\Model\ProductPricingV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * Product Class Doc Comment
 *
 * @category Class
 * @description An item.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Product extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifiers' => '\SellingPartnerApi\Model\ProductPricingV0\IdentifierType',
        'attribute_sets' => 'object[]',
        'relationships' => 'object[]',
        'competitive_pricing' => '\SellingPartnerApi\Model\ProductPricingV0\CompetitivePricingType',
        'sales_rankings' => '\SellingPartnerApi\Model\ProductPricingV0\SalesRankType[]',
        'offers' => '\SellingPartnerApi\Model\ProductPricingV0\OfferType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifiers' => null,
        'attribute_sets' => null,
        'relationships' => null,
        'competitive_pricing' => null,
        'sales_rankings' => null,
        'offers' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'identifiers' => 'Identifiers',
        'attribute_sets' => 'AttributeSets',
        'relationships' => 'Relationships',
        'competitive_pricing' => 'CompetitivePricing',
        'sales_rankings' => 'SalesRankings',
        'offers' => 'Offers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifiers' => 'setIdentifiers',
        'attribute_sets' => 'setAttributeSets',
        'relationships' => 'setRelationships',
        'competitive_pricing' => 'setCompetitivePricing',
        'sales_rankings' => 'setSalesRankings',
        'offers' => 'setOffers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifiers' => 'getIdentifiers',
        'attribute_sets' => 'getAttributeSets',
        'relationships' => 'getRelationships',
        'competitive_pricing' => 'getCompetitivePricing',
        'sales_rankings' => 'getSalesRankings',
        'offers' => 'getOffers'
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
        $this->container['identifiers'] = $data['identifiers'] ?? null;
        $this->container['attribute_sets'] = $data['attribute_sets'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['competitive_pricing'] = $data['competitive_pricing'] ?? null;
        $this->container['sales_rankings'] = $data['sales_rankings'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identifiers'] === null) {
            $invalidProperties[] = "'identifiers' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets identifiers
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\IdentifierType
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\IdentifierType $identifiers identifiers
     *
     * @return self
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }
    /**
     * Gets attribute_sets
     *
     * @return object[]|null
     */
    public function getAttributeSets()
    {
        return $this->container['attribute_sets'];
    }

    /**
     * Sets attribute_sets
     *
     * @param object[]|null $attribute_sets A list of product attributes if they are applicable to the product that is returned.
     *
     * @return self
     */
    public function setAttributeSets($attribute_sets)
    {
        $this->container['attribute_sets'] = $attribute_sets;

        return $this;
    }
    /**
     * Gets relationships
     *
     * @return object[]|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param object[]|null $relationships A list that contains product variation information, if applicable.
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }
    /**
     * Gets competitive_pricing
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\CompetitivePricingType|null
     */
    public function getCompetitivePricing()
    {
        return $this->container['competitive_pricing'];
    }

    /**
     * Sets competitive_pricing
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\CompetitivePricingType|null $competitive_pricing competitive_pricing
     *
     * @return self
     */
    public function setCompetitivePricing($competitive_pricing)
    {
        $this->container['competitive_pricing'] = $competitive_pricing;

        return $this;
    }
    /**
     * Gets sales_rankings
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\SalesRankType[]|null
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\SalesRankType[]|null $sales_rankings A list of sales rank information for the item, by category.
     *
     * @return self
     */
    public function setSalesRankings($sales_rankings)
    {
        $this->container['sales_rankings'] = $sales_rankings;

        return $this;
    }
    /**
     * Gets offers
     *
     * @return \SellingPartnerApi\Model\ProductPricingV0\OfferType[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param \SellingPartnerApi\Model\ProductPricingV0\OfferType[]|null $offers A list of offers.
     *
     * @return self
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

        return $this;
    }
}


