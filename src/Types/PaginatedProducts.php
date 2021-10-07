<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class PaginatedProducts
 *
 * @method Filters[] getFilters()
 * @method Pagination getPagination()
 * @method Product[] getProducts()
 * @method Product[] getTopOffers()
 * @method self setFilters(Filters[] $filters)
 * @method self setPagination(Pagination $pagination)
 * @method self setProducts(Product[] $products)
 * @method self setTopOffers(Product[] $topOffers)
 */
class PaginatedProducts extends AbstractType
{
    public const FILTERS = 'filters';

    public const PAGINATION = 'pagination';

    public const PRODUCTS = 'products';

    public const TOP_OFFERS = 'topOffers';

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Filters", isArray=true)
     * @var Filters[]
     */
    protected $filters;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Pagination")
     * @var Pagination
     */
    protected $pagination;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Product", isArray=true)
     * @var Product[]
     */
    protected $products;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Types\Product", isArray=true)
     * @var Product[]
     */
    protected $topOffers;
}
