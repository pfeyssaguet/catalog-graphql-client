<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Billing
 *
 * @method string getDiskSize()
 * @method string getRam()
 * @method string getRegion()
 * @method string getVCpu()
 * @method string getReservationsAutofitGroup()
 * @method string getAcu()
 * @method string getMarketSegment()
 * @method string getVersion()
 * @method string getMetric()
 * @method self setDiskSize(string $diskSize)
 * @method self setRam(string $ram)
 * @method self setRegion(string $region)
 * @method self setVCpu(string $vCpu)
 * @method self setReservationsAutofitGroup(string $reservationsAutofitGroup)
 * @method self setAcu(string $acu)
 * @method self setMarketSegment(string $marketSegment)
 * @method self setVersion(string $version)
 * @method self setMetric(string $metric)
 */
class DynamicAttributes extends AbstractType
{
    public const DISK_SIZE = 'diskSize';

    public const RAM = 'ram';

    public const REGION = 'region';

    public const VCPU = 'vCpu';

    public const RESERVATIONS_AUTOFIT_GROUP = 'reservationsAutofitGroup';

    public const ACU = 'acu';

    public const MARKET_SEGMENT = 'marketSegment';

    public const VERSION = 'version';

    public const METRIC = 'metric';

    /**
     * @Property
     * @var string
     */
    protected $diskSize;

    /**
     * @Property
     * @var string
     */
    protected $ram;

    /**
     * @Property
     * @var string
     */
    protected $region;

    /**
     * @Property
     * @var string
     */
    protected $vCpu;

    /**
     * @Property
     * @var string
     */
    protected $reservationsAutofitGroup;

    /**
     * @Property
     * @var string
     */
    protected $acu;

    /**
     * @Property
     * @var string
     */
    protected $marketSegment;

    /**
     * @Property
     * @var string
     */
    protected $version;

    /**
     * @Property
     * @var string
     */
    protected $metric;
}
