<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBandSaleConstraints
 *
 * @method string getAvailableDate()
 * @method string getExpiryDate()
 * @method int getMinQuantity()
 * @method int getMaxQuantity()
 * @method self setAvailableDate(string $availableDate)
 * @method self setExpiryDate(string $expiryDate)
 * @method self setMinQuantity(int $minQuantity)
 * @method self setMaxQuantity(int $maxQuantity)
 */
class PriceBandSaleConstraints extends AbstractType
{
    public const AVAILABLE_DATE = 'availableDate';

    public const EXPIRY_DATE = 'expiryDate';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_QUANTITY = 'maxQuantity';

    /**
     * @Property
     * @var string
     */
    protected $availableDate;

    /**
     * @Property
     * @var string
     */
    protected $expiryDate;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $minQuantity;

    /**
     * @Property(type="int", nullable=true)
     * @var int
     */
    protected $maxQuantity;
}
