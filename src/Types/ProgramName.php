<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class ProgramName
 *
 * @method string getFull()
 * @method self setFull(string $full)
 */
class ProgramName extends AbstractType
{
    public const FULL = 'full';

    /**
     * @Property
     * @var string
     */
    protected $full;
}
