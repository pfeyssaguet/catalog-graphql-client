<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Attributes
 *
 * @method bool getCanSwitchAutoRenew()
 * @method bool getCancelSubscription()
 * @method bool getDecreaseSeats()
 * @method bool getIncreaseSeats()
 * @method string getPartIdentifier()
 * @method int getPeriodicity()
 * @method string getPlanId()
 * @method string getProductId()
 * @method string getProductSku()
 * @method bool getReactivateSubscription()
 * @method bool getSuspendSubscription()
 * @method int getTerm()
 * @method string getUnitType()
 * @method self setCanSwitchAutoRenew(bool $canSwitchAutoRenew)
 * @method self setCancelSubscription(bool $cancelSubscription)
 * @method self setDecreaseSeats(bool $decreaseSeat)
 * @method self setIncreaseSeats(bool $increaseSeat)
 * @method self setPartIdentifier(string $partIdentifier)
 * @method self setPeriodicity(int $periodicity)
 * @method self setPlanId(string $planId)
 * @method self setProductId(string $productID)
 * @method self setProductSku(string $productSku)
 * @method self setReactivateSubscription(bool $reactivateSubscription)
 * @method self setSuspendSubscription(bool $suspendSubscription)
 * @method self setTerm(int $setTerm)
 * @method self setUnitType(string $unitType)
 */
class Attributes extends AbstractType
{
    public const CAN_SWITCH_AUTO_RENEW = 'canSwitchAutoRenew';

    public const CANCEL_SUBSCRIPTION = 'cancelSubscription';

    public const DECREASE_SEATS = 'decreaseSeats';

    public const INCREASE_SEATS = 'increaseSeats';

    public const PART_IDENTIFIER = 'partIdentifier';

    public const PERIODICITY = 'periodicity';

    public const PLAN_ID = 'planId';

    public const PRODUCT_ID = 'productId';

    public const PRODUCT_SKU = 'productSku';

    public const REACTIVATE_SUBSCRIPTION = 'reactivateSubscription';

    public const SUSPEND_SUBSCRIPTION = 'suspendSubscription';

    public const TERM = 'term';

    public const UNIT_TYPE = 'unitType';

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $canSwitchAutoRenew;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $cancelSubscription;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $decreaseSeats;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $increaseSeats;

    /**
     * @Property
     * @var string
     */
    protected $partIdentifier;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $periodicity;

    /**
     * @Property
     * @var string
     */
    protected $planId;

    /**
     * @Property
     * @var string
     */
    protected $productId;

    /**
     * @Property
     * @var string
     */
    protected $productSku;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $reactivateSubscription;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $suspendSubscription;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $term;

    /**
     * @Property
     * @var string
     */
    protected $unitType;
}
