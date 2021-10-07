<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Prices
 *
 * @method string getBuy()
 * @method string getSell()
 * @method string getPublic()
 * @method self setBuy(string $buy)
 * @method self setSell(string $sell)
 * @method self setPublic(string $public)
 */
class Prices extends AbstractType
{
    public const BUY = 'buy';

    public const SELL = 'sell';

    public const PUBLIC = 'public';

    /**
     * @Property
     * @var string
     */
    protected $buy;

    /**
     * @Property
     * @var string
     */
    protected $sell;

    /**
     * @Property
     * @var string
     */
    protected $public;
}
