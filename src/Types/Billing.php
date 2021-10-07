<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Billing
 *
 * @method int getCycle()
 * @method int getTerm()
 * @method string getType()
 * @method self setCycle(int $cycle)
 * @method self setTerm(int $term)
 * @method self setType(string $type)
 */
class Billing extends AbstractType
{
    public const CYCLE = 'cycle';

    public const TERM = 'term';

    public const TYPE = 'type';

    /**
     * @Property(type="int")
     * @var int
     */
    protected $cycle;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $term;

    /**
     * @Property
     * @var string
     */
    protected $type;
}
