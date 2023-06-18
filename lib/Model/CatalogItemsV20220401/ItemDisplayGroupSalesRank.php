<?php
/**
 * ItemDisplayGroupSalesRank
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Catalog Items
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog. For more information, refer to the [Catalog Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\CatalogItemsV20220401;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ItemDisplayGroupSalesRank Class Doc Comment
 *
 * @category Class
 * @description Sales rank of an Amazon catalog item by website display group.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ItemDisplayGroupSalesRank extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemDisplayGroupSalesRank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'website_display_group' => 'string',
        'title' => 'string',
        'link' => 'string',
        'rank' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'website_display_group' => null,
        'title' => null,
        'link' => null,
        'rank' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'website_display_group' => 'websiteDisplayGroup',
        'title' => 'title',
        'link' => 'link',
        'rank' => 'rank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'website_display_group' => 'setWebsiteDisplayGroup',
        'title' => 'setTitle',
        'link' => 'setLink',
        'rank' => 'setRank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'website_display_group' => 'getWebsiteDisplayGroup',
        'title' => 'getTitle',
        'link' => 'getLink',
        'rank' => 'getRank'
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
        $this->container['website_display_group'] = $data['website_display_group'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['link'] = $data['link'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['website_display_group'] === null) {
            $invalidProperties[] = "'website_display_group' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['rank'] === null) {
            $invalidProperties[] = "'rank' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets website_display_group
     *
     * @return string
     */
    public function getWebsiteDisplayGroup()
    {
        return $this->container['website_display_group'];
    }

    /**
     * Sets website_display_group
     *
     * @param string $website_display_group Name of the website display group associated with the sales rank
     *
     * @return self
     */
    public function setWebsiteDisplayGroup($website_display_group)
    {
        $this->container['website_display_group'] = $website_display_group;

        return $this;
    }
    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title, or name, of the sales rank.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Gets link
     *
     * @return string|null
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string|null $link Corresponding Amazon retail website link, or URL, for the sales rank.
     *
     * @return self
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }
    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank Sales rank value.
     *
     * @return self
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }
}


