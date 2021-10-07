<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\FiltersValues;
use ArrowSphere\Entities\Exception\EntitiesException;
use PHPUnit\Framework\TestCase;

/**
 * Class FiltersValuesTest
 */
class FiltersValuesTest extends TestCase
{
    /**
     * @throws EntitiesException
     */
    public function testFields(): void
    {
        $filtersValues = new FiltersValues([
            FiltersValues::COUNT => 12,
            FiltersValues::VALUE => 'value',
        ]);

        self::assertSame(12, $filtersValues->getCount());
        self::assertSame('value', $filtersValues->getValue());

        $filtersValues
            ->setCount(14)
            ->setValue('test')
        ;

        self::assertSame(14, $filtersValues->getCount());
        self::assertSame('test', $filtersValues->getValue());
    }
}
