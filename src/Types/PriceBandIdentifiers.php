<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBandIdentifiers
 *
 * @method PriceBandArrowsphereIdentifier getArrowsphere()
 * @method ErpIdentifier getErp()
 * @method VendorIdentifier getVendor()
 * @method self setArrowsphere(PriceBandArrowsphereIdentifier $arrowsphere)
 * @method self setErp(ErpIdentifier $erp)
 * @method self setVendor(VendorIdentifier $vendor)
 */
class PriceBandIdentifiers extends AbstractType
{
    public const ARROWSPHERE = 'arrowsphere';

    public const ERP = 'erp';

    public const VENDOR = 'vendor';

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBandArrowsphereIdentifier")
     * @var PriceBandArrowsphereIdentifier
     */
    protected $arrowsphere;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\ErpIdentifier")
     * @var ErpIdentifier
     */
    protected $erp;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier")
     * @var VendorIdentifier
     */
    protected $vendor;
}
