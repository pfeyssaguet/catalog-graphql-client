<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\PriceBandArrowsphereIdentifier;
use ArrowSphere\Entities\Exception\EntitiesException;
use PHPUnit\Framework\TestCase;

/**
 * Class PriceBandArrowsphereIdentifierTest
 */
class PriceBandArrowsphereIdentifierTest extends TestCase
{
    /**
     * @throws EntitiesException
     */
    public function testFields(): void
    {
        $priceBandArrowsphereIdentifier = new PriceBandArrowsphereIdentifier([
            PriceBandArrowsphereIdentifier::SKU => 'sku',
        ]);

        self::assertSame('sku', $priceBandArrowsphereIdentifier->getSku());

        $priceBandArrowsphereIdentifier->setSku('sku2');

        self::assertSame('sku2', $priceBandArrowsphereIdentifier->getSku());
    }
}
