<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBand
 *
 * @method bool getIsEnabled()
 * @method PriceBandActionFlags getActionFlags()
 * @method Billing getBilling()
 * @method string getCurrency()
 * @method PriceBandIdentifiers getIdentifiers()
 * @method string getMarketplace()
 * @method Prices getPrices()
 * @method PriceBandSaleConstraints getSaleConstraints()
 * @method string getOrderingType()
 * @method Uom getUom()
 * @method DynamicAttributes getDynamicAttributes()
 * @method string getName()
 * @method self setIsEnabled(bool $isEnabled)
 * @method self setActionFlags(PriceBandActionFlags $actionFlags)
 * @method self setBilling(Billing $billing)
 * @method self setCurrency(string $currency)
 * @method self setIdentifiers(PriceBandIdentifiers $identifiers)
 * @method self setMarketplace(string $marketplace)
 * @method self setPrices(Prices $prices)
 * @method self setSaleConstraints(PriceBandSaleConstraints $saleConstraints)
 * @method self setOrderingType(string $orderingType)
 * @method self setUom(Uom $uom)
 * @method self setDynamicAttributes(DynamicAttributes $dynamicAttributes)
 * @method self setName(string $name)
 */
class PriceBand extends AbstractType
{
    public const IS_ENABLED = 'isEnabled';

    public const ACTION_FLAGS = 'actionFlags';

    public const BILLING = 'billing';

    public const CURRENCY = 'currency';

    public const IDENTIFIERS = 'identifiers';

    public const MARKETPLACE = 'marketplace';

    public const PRICES = 'prices';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const ORDERING_TYPE = 'orderingType';

    public const UOM = 'uom';

    public const DYNAMIC_ATTRIBUTES = 'dynamicAttributes';

    public const NAME = 'name';

    public const ATTRIBUTES = 'attributes';

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isEnabled;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBandActionFlags")
     * @var PriceBandActionFlags
     */
    protected $actionFlags;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Billing")
     * @var Billing
     */
    protected $billing;

    /**
     * @Property
     * @var string
     */
    protected $currency;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBandIdentifiers")
     * @var PriceBandIdentifiers
     */
    protected $identifiers;

    /**
     * @Property
     * @var string
     */
    protected $marketplace;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Prices")
     * @var Prices
     */
    protected $prices;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBandSaleConstraints")
     * @var PriceBandSaleConstraints
     */
    protected $saleConstraints;

    /**
     * @Property
     * @var string
     */
    protected $orderingType;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Uom")
     * @var Uom
     */
    protected $uom;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\DynamicAttributes", nullable=true)
     * @var DynamicAttributes|null
     */
    protected $dynamicAttributes;

    /**
     * @Property
     * @var string
     */
    protected $name;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBandAttribute", isArray=true)
     * @var PriceBandAttribute[]
     */
    protected $attributes;
}
