<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Filters
 *
 * @method string getName()
 * @method FiltersValues[] getValues()
 * @method self setName(string $name)
 * @method self setValues(FiltersValues[] $values)
 */
class Filters extends AbstractType
{
    public const NAME = 'name';

    public const VALUES = 'values';

    /**
     * @Property
     * @var string
     */
    protected $name;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\FiltersValues", isArray=true)
     * @var FiltersValues[]
     */
    protected $values;
}
