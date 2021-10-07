<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\Vendor;
use ArrowSphere\Entities\Exception\EntitiesException;
use PHPUnit\Framework\TestCase;

/**
 * Class VendorTest
 */
class VendorTest extends TestCase
{
    /**
     * @throws EntitiesException
     */
    public function testFields(): void
    {
        $vendor = new Vendor([
            Vendor::NAME => 'name',
        ]);

        self::assertSame('name', $vendor->getName());

        $vendor->setName('my name');

        self::assertSame('my name', $vendor->getName());
    }
}
