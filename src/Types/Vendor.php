<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Vendor
 *
 * @method string getName()
 * @method self setName(string $name)
 */
class Vendor extends AbstractType
{
    public const NAME = 'name';

    /**
     * @Property
     * @var string
     */
    protected $name;
}
