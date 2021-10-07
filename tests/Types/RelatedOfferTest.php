<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\RelatedOffer;
use ArrowSphere\Entities\Exception\EntitiesException;
use PHPUnit\Framework\TestCase;

/**
 * Class RelatedOfferTest
 */
class RelatedOfferTest extends TestCase
{
    /**
     * @throws EntitiesException
     */
    public function testFields(): void
    {
        $relatedOffer = new RelatedOffer([
            RelatedOffer::SKU    => 'sku',
            RelatedOffer::VENDOR => 'vendor',
        ]);

        self::assertSame('sku', $relatedOffer->getSku());
        self::assertSame('vendor', $relatedOffer->getVendor());

        $relatedOffer
            ->setSku('my sku')
            ->setVendor('my vendor')
        ;

        self::assertSame('my sku', $relatedOffer->getSku());
        self::assertSame('my vendor', $relatedOffer->getVendor());
    }
}
