<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class RelatedOffer
 *
 * @method string getSku()
 * @method string getVendor()
 * @method self setSku(string $sku)
 * @method self setVendor(string $vendor)
 */
class RelatedOffer extends AbstractType
{
    public const SKU = 'sku';

    public const VENDOR = 'vendor';

    /**
     * @Property
     * @var string
     */
    protected $sku;

    /**
     * @Property
     * @var string
     */
    protected $vendor;
}
