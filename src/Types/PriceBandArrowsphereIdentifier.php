<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBandArrowsphereIdentifier
 *
 * @method string getSku()
 * @method self setSku(string $sku)
 */
class PriceBandArrowsphereIdentifier extends AbstractType
{
    public const SKU = 'sku';

    /**
     * @Property
     * @var string
     */
    protected $sku;
}
