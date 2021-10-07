<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class MarketingText
 *
 * @method string getOverviewDescription()
 * @method string getFeaturesShort()
 * @method string getFeaturesFull()
 * @method string getFeatures()
 * @method self setOverviewDescription(string $overviewDescription)
 * @method self setFeaturesShort(string $featuresShort)
 * @method self setFeaturesFull(string $featuresFull)
 * @method self setFeatures(string $features)
 */
class MarketingText extends AbstractType
{
    public const OVERVIEW_DESCRIPTION = 'overviewDescription';

    public const FEATURES_SHORT = 'featuresShort';

    public const FEATURES_FULL = 'featuresFull';

    public const FEATURES = 'features';

    /**
     * @Property
     * @var string
     */
    protected $overviewDescription;

    /**
     * @Property
     * @var string
     */
    protected $featuresShort;

    /**
     * @Property
     * @var string
     */
    protected $featuresFull;

    /**
     * @Property
     * @var string
     */
    protected $features;
}
