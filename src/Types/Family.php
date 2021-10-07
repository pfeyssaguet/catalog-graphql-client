<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Family
 *
 * @method string getId()
 * @method string getName()
 * @method self setId(string $id)
 * @method self setName(string $id)
 */
class Family extends AbstractType
{
    public const ID = 'id';

    public const NAME = 'name';

    /**
     * @Property
     * @var string
     */
    protected $id;

    /**
     * @Property
     * @var string
     */
    protected $name;
}
