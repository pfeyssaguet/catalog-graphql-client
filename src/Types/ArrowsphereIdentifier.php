<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class ArrowsphereIdentifier
 *
 * @method string getSku()
 * @method string getSkuXac()
 * @method string getSkuXsp()
 * @method string getOrderableSku()
 * @method self setSku(string $sku)
 * @method self setSkuXac(string $skuXac)
 * @method self setSkuXsp(string $skuXsp)
 * @method self setOrderableSku(string $orderableSku)
 */
class ArrowsphereIdentifier extends AbstractType
{
    public const SKU = 'sku';

    public const SKU_XAC = 'skuXac';

    public const SKU_XSP = 'skuXsp';

    public const ORDERABLE_SKU = 'orderableSku';

    /**
     * @Property
     * @var string
     */
    protected $sku;

    /**
     * @Property
     * @var string
     */
    protected $skuXac;

    /**
     * @Property
     * @var string
     */
    protected $skuXsp;

    /**
     * @Property
     * @var string
     */
    protected $orderableSku;
}
