<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBandAttribute
 *
 * @method string getName()
 * @method string getValue()
 * @method self setName(string $name)
 * @method self setValue(string $value)
 */
class PriceBandAttribute extends AbstractType
{
    public const NAME = 'name';

    public const VALUE = 'value';

    /**
     * @Property
     * @var string
     */
    protected $name;

    /**
     * @Property
     * @var string
     */
    protected $value;
}
