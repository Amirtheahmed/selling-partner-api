<?php

namespace SellingPartnerApi;

use ReflectionClass;

class IdentifiersType
{
    public const ASIN = 'ASIN';
    public const GTIN = 'GTIN';
    public const ISBN = 'ISBN';
    public const UPC = 'UPC';
    public const EAN = 'EAN';
    public const JAN = 'JAN';
    public const MINSAN = 'MINSAN';
    public const SKU = 'SKU';

    public static function getIdentifiersTypes(): array
    {
        $reflectionClass = new ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }

}