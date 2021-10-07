<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Uom
 *
 * @method int getQuantity()
 * @method string getType()
 * @method self setQuantity(int $quantity)
 * @method self setType(string $type)
 */
class Uom extends AbstractType
{
    public const QUANTITY = 'quantity';

    public const TYPE = 'type';

    /**
     * @Property(type="int")
     * @var int
     */
    protected $quantity;

    /**
     * @Property
     * @var string
     */
    protected $type;
}
