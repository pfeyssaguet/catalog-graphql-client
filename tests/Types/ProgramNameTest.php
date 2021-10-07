<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Types\ProgramName;
use ArrowSphere\Entities\Exception\EntitiesException;
use PHPUnit\Framework\TestCase;

/**
 * Class ProgramName
 */
class ProgramNameTest extends TestCase
{
    /**
     * @throws EntitiesException
     */
    public function testFields(): void
    {
        $programName = new ProgramName([
            ProgramName::FULL => 'full',
        ]);

        self::assertEquals('full', $programName->getFull());

        $programName->setFull('my full');
        self::assertEquals('my full', $programName->getFull());
    }
}
