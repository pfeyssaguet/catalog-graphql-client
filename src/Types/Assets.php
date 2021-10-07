<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Assets
 *
 * @method string|null getFeaturePictureUrl()
 * @method string|null getMainLogoUrl()
 * @method string|null getPictureUrl()
 * @method string|null getSquareLogoUrl()
 * @method self setFeaturePictureUrl(string|null $featurePictureUrl)
 * @method self setMainLogoUrl(string|null $mainLogoUrl)
 * @method self setPictureUrl(string|null $pictureUrl)
 * @method self setSquareLogoUrl(string|null $squareLogoUrl)
 */
class Assets extends AbstractType
{
    public const FEATURE_PICTURE_URL = 'featurePictureUrl';

    public const MAIN_LOGO_URL = 'mainLogoUrl';

    public const PICTURE_URL = 'pictureUrl';

    public const SQUARE_LOGO_URL = 'squareLogoUrl';

    /**
     * @Property(nullable=true)
     * @var string|null
     */
    protected $featurePictureUrl;

    /**
     * @Property(nullable=true)
     * @var string|null
     */
    protected $mainLogoUrl;

    /**
     * @Property(nullable=true)
     * @var string|null
     */
    protected $pictureUrl;

    /**
     * @Property(nullable=true)
     * @var string|null
     */
    protected $squareLogoUrl;
}
