<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class FiltersValues
 *
 * @method string getValue()
 * @method int getCount()
 * @method self setValue(string $value)
 * @method self setCount(int $count)
 */
class FiltersValues extends AbstractType
{
    public const VALUE = 'value';

    public const COUNT = 'count';

    /**
     * @Property
     * @var string
     */
    protected $value;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $count;
}
