<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Product
 *
 * @method string getId()
 * @method Identifiers getIdentifiers()
 * @method string getName()
 * @method string getClassification()
 * @method string[] getArrowCategories()
 * @method string getLicenseAgreementType()
 * @method Family getFamily()
 * @method bool getIsAddon()
 * @method bool getHasAddons()
 * @method ActionFlags getActionFlags()
 * @method Identifiers[] getAddonPrimaries()
 * @method Identifiers[] getConversionOfferPrimaries()
 * @method Identifiers[] getBaseOfferPrimaries()
 * @method Assets getAssets()
 * @method string getEnvironmentAvailability()
 * @method string getMarketplace()
 * @method bool getIsEnabled()
 * @method bool getIsTrial()
 * @method string getLastUpdate()
 * @method MarketingText getMarketingText()
 * @method string getVendorOfferUrl()
 * @method string getServiceDescription()
 * @method string getEula()
 * @method string getEndCustomerEula()
 * @method string getEndCustomerRequirements()
 * @method string getEndCustomerFeatures()
 * @method string getXspUrl()
 * @method SaleConstraints getSaleConstraints()
 * @method Vendor getVendor()
 * @method Program getProgram()
 * @method float getWeightTopSales()
 * @method float getWeightForced()
 * @method PriceBand[] getPriceBand()
 * @method PriceBand getDefaultPriceBand()
 * @method RelatedOffer[] getRelatedOffers()
 * @method string[] getArrowSubCategories()
 * @method bool getIsIndirectBusiness()
 * @method self setId(string $id)
 * @method self setIdentifiers(Identifiers $identifiers)
 * @method self setName(string $name)
 * @method self setClassification(string $classification)
 * @method self setArrowCategories(string[] $arrowCategories)
 * @method self setLicenseAgreementType(string $licenseAgreementType)
 * @method self setFamily(Family $family)
 * @method self setIsAddon(bool $isAddon)
 * @method self setHasAddons(bool $hasAddons)
 * @method self setActionFlags(ActionFlags $actionFlags)
 * @method self setAddonPrimaries(Identifiers[] $addonPrimaries)
 * @method self setConversionOfferPrimaries(Identifiers[] $conversionOfferPrimaries)
 * @method self setBaseOfferPrimaries(Identifiers[] $baseOfferPrimaries)
 * @method self setAssets(Assets $assets)
 * @method self setEnvironmentAvailability(string $environmentAvailability)
 * @method self setMarketplace(string $marketplace)
 * @method self setIsEnabled(bool $isEnabled)
 * @method self setIsTrial(bool $isTrial)
 * @method self setLastUpdate(string $lastUpdate)
 * @method self setMarketingText(MarketingText $marketingText)
 * @method self setVendorOfferUrl(string $vendorOfferUrl)
 * @method self setServiceDescription(string $serviceDescription)
 * @method self setEula(string $eula)
 * @method self setEndCustomerEula(string $endCustomerEula)
 * @method self setEndCustomerRequirements(string $endCustomerRequirements)
 * @method self setEndCustomerFeatures(string $endCustomerFeatures)
 * @method self setXspUrl(string $xspUrl)
 * @method self setSaleConstraints(SaleConstraints $saleConstraints)
 * @method self setVendor(Vendor $vendor)
 * @method self setProgram(Program $program)
 * @method self setWeightTopSales(float $weightTopSales)
 * @method self setWeightForced(float $weightForced)
 * @method self setPriceBand(PriceBand[] $priceBand)
 * @method self setDefaultPriceBand(PriceBand $defaultPriceBand)
 * @method self setRelatedOffers(RelatedOffer[] $relatedOffers)
 * @method self setArrowSubCategories(string[] $arrowSubCategories)
 * @method self setIsIndirectBusiness(bool $isIndirectBusiness)
 */
class Product extends AbstractType
{
    public const ID = 'id';

    public const IDENTIFIERS = 'identifiers';

    public const NAME = 'name';

    public const CLASSIFICATION = 'classification';

    public const ARROW_CATEGORIES = 'arrowCategories';

    public const LICENSE_AGREEMENT_TYPE = 'licenseAgreementType';

    public const FAMILY = 'family';

    public const IS_ADDON = 'isAddon';

    public const HAS_ADDONS = 'hasAddons';

    public const ACTION_FLAGS = 'actionFlags';

    public const ADDON_PRIMARIES = 'addonPrimaries';

    public const CONVERSION_OFFER_PRIMARIES = 'conversionOfferPrimaries';

    public const BASE_OFFER_PRIMARIES = 'baseOfferPrimaries';

    public const ASSETS = 'assets';

    public const ENVIRONMENT_AVAILABILITY = 'environmentAvailability';

    public const MARKETPLACE = 'marketplace';

    public const IS_ENABLED = 'isEnabled';

    public const IS_TRIAL = 'isTrial';

    public const LAST_UPDATE = 'lastUpdate';

    public const MARKETING_TEXT = 'marketingText';

    public const VENDOR_OFFER_URL = 'vendorOfferUrl';

    public const SERVICE_DESCRIPTION = 'serviceDescription';

    public const EULA = 'eula';

    public const END_CUSTOMER_EULA = 'endCustomerEula';

    public const END_CUSTOMER_REQUIREMENTS = 'endCustomerRequirements';

    public const END_CUSTOMER_FEATURES = 'endCustomerFeatures';

    public const XSP_URL = 'xspUrl';

    public const SALE_CONSTRAINTS = 'saleConstraints';

    public const VENDOR = 'vendor';

    public const PROGRAM = 'program';

    public const WEIGHT_TOP_SALES = 'weightTopSales';

    public const WEIGHT_FORCED = 'weightForced';

    public const PRICE_BAND = 'priceBand';

    public const DEFAULT_PRICE_BAND = 'defaultPriceBand';

    public const RELATED_OFFERS = 'relatedOffers';

    public const ARROW_SUB_CATEGORIES = 'arrowSubCategories';

    public const IS_INDIRECT_BUSINESS = 'isIndirectBusiness';

    /**
     * @Property
     * @var string
     */
    protected $id;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Identifiers")
     * @var Identifiers
     */
    protected $identifiers;

    /**
     * @Property
     * @var string
     */
    protected $name;

    /**
     * @Property
     * @var string
     */
    protected $classification;

    /**
     * @Property(isArray=true)
     * @var string[]
     */
    protected $arrowCategories;

    /**
     * @Property
     * @var string
     */
    protected $licenseAgreementType;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Family")
     * @var Family
     */
    protected $family;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isAddon;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $hasAddons;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\ActionFlags")
     * @var ActionFlags
     */
    protected $actionFlags;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Identifiers", isArray=true)
     * @var Identifiers[]
     */
    protected $addonPrimaries;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Identifiers", isArray=true)
     * @var Identifiers[]
     */
    protected $conversionOfferPrimaries;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Identifiers", isArray=true)
     * @var Identifiers[]
     */
    protected $baseOfferPrimaries;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Assets")
     * @var Assets
     */
    protected $assets;

    /**
     * @Property
     * @var string
     */
    protected $environmentAvailability;

    /**
     * @Property
     * @var string
     */
    protected $marketplace;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isEnabled;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isTrial;

    /**
     * @Property
     * @var string
     */
    protected $lastUpdate;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\MarketingText")
     * @var MarketingText
     */
    protected $marketingText;

    /**
     * @Property
     * @var string
     */
    protected $vendorOfferUrl;

    /**
     * @Property
     * @var string
     */
    protected $serviceDescription;

    /**
     * @Property
     * @var string
     */
    protected $eula;

    /**
     * @Property
     * @var string
     */
    protected $endCustomerEula;

    /**
     * @Property
     * @var string
     */
    protected $endCustomerRequirements;

    /**
     * @Property
     * @var string
     */
    protected $endCustomerFeatures;

    /**
     * @Property
     * @var string
     */
    protected $xspUrl;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\SaleConstraints")
     * @var SaleConstraints
     */
    protected $saleConstraints;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Vendor")
     * @var Vendor
     */
    protected $vendor;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Program")
     * @var Program
     */
    protected $program;

    /**
     * @Property(type="float")
     * @var float
     */
    protected $weightTopSales;

    /**
     * @Property(type="float")
     * @var float
     */
    protected $weightForced;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBand", isArray=true)
     * @var PriceBand[]
     */
    protected $priceBand;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\PriceBand")
     * @var PriceBand
     */
    protected $defaultPriceBand;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\RelatedOffer", isArray=true)
     * @var RelatedOffer[]
     */
    protected $relatedOffers;

    /**
     * @Property(isArray=true)
     * @var string[]
     */
    protected $arrowSubCategories;

    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $isIndirectBusiness;
}
