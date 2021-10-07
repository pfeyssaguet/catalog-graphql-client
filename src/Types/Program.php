<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Program
 *
 * @method bool getIsEnabled()
 * @method string getLegacyCode()
 * @method ProgramName getNames()
 * @method self setIsEnabled(bool $isEnabled)
 * @method self setLegacyCode(string $legacyCode)
 * @method self setNames(ProgramName $names)
 */
class Program extends AbstractType
{
    public const IS_ENABLED = 'isEnabled';

    public const LEGACY_CODE = 'legacyCode';

    public const NAMES = 'names';

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isEnabled;

    /**
     * @Property
     * @var string
     */
    protected $legacyCode;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\ProgramName")
     * @var ProgramName
     */
    protected $names;
}
