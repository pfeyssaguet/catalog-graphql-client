<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Identifiers
 *
 * @method ArrowsphereIdentifier getArrowsphere()
 * @method VendorIdentifier getVendor()
 * @method self setArrowsphere(ArrowsphereIdentifier $arrowsphere)
 * @method self setVendor(VendorIdentifier $vendor)
 */
class Identifiers extends AbstractType
{
    public const ARROWSPHERE = 'arrowsphere';

    public const VENDOR = 'vendor';

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\ArrowsphereIdentifier")
     * @var ArrowsphereIdentifier
     */
    protected $arrowsphere;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\VendorIdentifier")
     * @var VendorIdentifier
     */
    protected $vendor;
}
