<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PriceBandActionFlags
 *
 * @method bool getCanBeCancelled()
 * @method bool getCanBeReactivated()
 * @method bool getCanBeSuspended()
 * @method bool getCanDecreaseSeats()
 * @method bool getCanIncreaseSeats()
 * @method self setCanBeCancelled(bool $canBeCancelled)
 * @method self setCanBeReactivated(bool $canBeReactivated)
 * @method self setCanBeSuspended(bool $canBeSuspended)
 * @method self setCanDecreaseSeats(bool $canDecreaseSeats)
 * @method self setCanIncreaseSeats(bool $canIncreaseSeats)
 */
class PriceBandActionFlags extends AbstractType
{
    public const CAN_BE_CANCELLED = 'canBeCancelled';

    public const CAN_BE_REACTIVATED = 'canBeReactivated';

    public const CAN_BE_SUSPENDED = 'canBeSuspended';

    public const CAN_DECREASE_SEATS = 'canDecreaseSeats';

    public const CAN_INCREASE_SEATS = 'canIncreaseSeats';

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $canBeCancelled;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $canBeReactivated;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $canBeSuspended;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $canDecreaseSeats;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $canIncreaseSeats;
}
