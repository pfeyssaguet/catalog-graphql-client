<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class VendorIdentifier
 *
 * @method string getName()
 * @method string getFamily()
 * @method string getOfferName()
 * @method string getSku()
 * @method Attributes getAttributes()
 * @method string|null getPurchasePlan()
 * @method self setName(string $name)
 * @method self setFamily(string $family)
 * @method self setOfferName(string $offerName)
 * @method self setSku(string $sku)
 * @method self setAttributes(Attributes $attributes)
 * @method self setPurchasePlan(string|null $purchasePlan)
 */
class VendorIdentifier extends AbstractType
{
    public const NAME = 'name';

    public const FAMILY = 'family';

    public const OFFER_NAME = 'offerName';

    public const SKU = 'sku';

    public const ATTRIBUTES = 'attributes';

    public const PURCHASE_PLAN = 'purchasePlan';

    /**
     * @Property
     * @var string
     */
    protected $name;

    /**
     * @Property
     * @var string
     */
    protected $family;

    /**
     * @Property
     * @var string
     */
    protected $offerName;

    /**
     * @Property
     * @var string
     */
    protected $sku;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Attributes")
     * @var Attributes
     */
    protected $attributes;

    /**
     * @Property(nullable=true)
     * @var string|null
     */
    protected $purchasePlan;
}
