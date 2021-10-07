<?php

namespace ArrowSphere\CatalogGraphQLClient\Types;

use ArrowSphere\Entities\Property;

/**
 * Class Pagination
 *
 * @method int getPerPage()
 * @method int getCurrentPage()
 * @method int getTotalPage()
 * @method int getTotal()
 * @method self setPerPage(int $perPage)
 * @method self setCurrentPage(int $currentPage)
 * @method self setTotalPage(int $totalPage)
 * @method self setTotal(int $total)
 */
class Pagination extends AbstractType
{
    public const PER_PAGE = 'perPage';

    public const CURRENT_PAGE = 'currentPage';

    public const TOTAL_PAGE = 'totalPage';

    public const TOTAL = 'total';

    /**
     * @Property(type="int")
     * @var int
     */
    protected $perPage;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $currentPage;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $totalPage;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $total;
}
