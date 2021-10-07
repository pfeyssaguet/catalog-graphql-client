<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class ErpIdentifier
 *
 * @method string getSku()
 * @method self setSku(string $sku)
 */
class ErpIdentifier extends AbstractType
{
    public const SKU = 'sku';

    /**
     * @Property
     * @var string
     */
    protected $sku;
}
