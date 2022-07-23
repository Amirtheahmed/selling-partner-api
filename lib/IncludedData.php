<?php

namespace SellingPartnerApi;

use ReflectionClass;

class IncludedData
{
    public const ATTRIBUTES = 'attributes';
    public const DIMENSIONS = 'dimensions';
    public const IDENTIFIERS = 'identifiers';
    public const IMAGES = 'images';
    public const PRODUCT_TYPES = 'productTypes';
    public const RELATIONSHIPS = 'relationships';
    public const SALES_RANKS = 'salesRanks';
    public const SUMMARIES = 'summaries';
    public const VENDOR_DETAILS = 'vendorDetails';

    public static function getIncludedDatas(): array
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }

}