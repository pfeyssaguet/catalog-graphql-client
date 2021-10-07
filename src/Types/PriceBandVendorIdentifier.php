<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBandVendorIdentifier
 *
 * @method string getPurchasePlan()
 * @method string getSku()
 * @method self setPurchasePlan(string $purchasePlan)
 * @method self setSku(string $sku)
 */
class PriceBandVendorIdentifier extends AbstractType
{
    public const PURCHASE_PLAN = 'purchasePlan';

    public const SKU = 'sku';

    /**
     * @Property
     * @var string
     */
    protected $purchasePlan;

    /**
     * @Property
     * @var string
     */
    protected $sku;
}
