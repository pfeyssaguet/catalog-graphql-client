<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class ActionFlags
 *
 * @method bool getIsAutoRenew()
 * @method bool getIsManualProvisioning()
 * @method bool getRenewalSku()
 * @method self setIsAutoRenew(bool $isAutoRenew)
 * @method self setIsManualProvisioning(bool $isManualProcessing)
 * @method self setRenewalSku(bool $renewalSku)
 */
class ActionFlags extends AbstractType
{
    public const IS_AUTO_RENEW = 'isAutoRenew';

    public const IS_MANUAL_PROVISIONING = 'isManualProvisioning';

    public const RENEWAL_SKU = 'renewalSku';

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isAutoRenew;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isManualProvisioning;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $renewalSku;
}
