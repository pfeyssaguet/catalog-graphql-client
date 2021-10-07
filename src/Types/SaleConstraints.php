<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class SaleConstraints
 *
 * @method string[] getCustomerQualifications()
 * @method string[] getResellerQualifications()
 * @method int getMaxQuantity()
 * @method int getMinQuantity()
 * @method string getMaxSubscriptionConstraint()
 * @method int getMaxSubscriptionPerCustomer()
 * @method string getSaleGroup()
 * @method string[] getRequiredAttributes()
 * @method self setCustomerQualifications(string[] $customerQualifications)
 * @method self setResellerQualifications(string[] $resellerQualifications)
 * @method self setMaxQuantity(int $maxQuantity)
 * @method self setMinQuantity(int $minQuantity)
 * @method self setMaxSubscriptionConstraint(string $maxSubscriptionConstraint)
 * @method self setMaxSubscriptionPerCustomer(int $maxSubscriptionPerCustomer)
 * @method self setSaleGroup(string $saleGroup)
 * @method self setRequiredAttributes(string[] $requiredAttributes)
 */
class SaleConstraints extends AbstractType
{
    public const CUSTOMER_QUALIFICATIONS = 'customerQualifications';

    public const RESELLER_QUALIFICATIONS = 'resellerQualifications';

    public const MAX_QUANTITY = 'maxQuantity';

    public const MIN_QUANTITY = 'minQuantity';

    public const MAX_SUBSCRIPTION_CONSTRAINT = 'maxSubscriptionConstraint';

    public const MAX_SUBSCRIPTION_PER_CUSTOMER = 'maxSubscriptionPerCustomer';

    public const SALE_GROUP = 'saleGroup';

    public const REQUIRED_ATTRIBUTES = 'requiredAttributes';

    /**
     * @Property(isArray=true)
     * @var string
     */
    protected $customerQualifications;

    /**
     * @Property(isArray=true)
     * @var string
     */
    protected $resellerQualifications;

    /**
     * @Property
     * @var string
     */
    protected $maxQuantity;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $minQuantity;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $maxSubscriptionConstraint;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $maxSubscriptionPerCustomer;

    /**
     * @Property
     * @var string
     */
    protected $saleGroup;

    /**
     * @Property(isArray=true)
     * @var string[]
     */
    protected $requiredAttributes;
}
