<?php

namespace SellingPartnerApi;

use ReflectionClass;

class ItemClassification
{
    public const BASE_PRODUCT = 'BASE_PRODUCT';
    public const OTHER = 'OTHER';
    public const PRODUCT_BUNDLE = 'PRODUCT_BUNDLE';
    public const VARIATION_PARENT = 'VARIATION_PARENT';

    public static function getItemClassifications(): array
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }

}