<?php

namespace ArrowSphere\CatalogGraphQLClient\Tests\Types;

use ArrowSphere\CatalogGraphQLClient\Exceptions\UnrequestedFieldException;
use ArrowSphere\CatalogGraphQLClient\Types\AbstractType;
use ArrowSphere\Entities\Exception\EntitiesException;
use ArrowSphere\Entities\Property;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTypeTest
 */
class AbstractTypeTest extends TestCase
{
    /**
     * @throws EntitiesException
     */
    private function initType(): MyType
    {
        $data = [
            'testBool'             => true,
            'testString'           => 'test string',
            'testInt'              => 42,
            'testFloat'            => 3.14,
            'testOtherType'        => [
                'test' => 'test other type',
            ],
            'testArrayOfBool'      => [
                true,
                false,
                true,
            ],
            'testArrayOfString'    => [
                'test',
                'array',
                'of',
                'string',
            ],
            'testArrayOfInt'       => [
                42,
                12,
                48,
            ],
            'testArrayOfFloat'     => [
                1.01,
                3.14,
                2.18,
            ],
            'testArrayOfOtherType' => [
                [
                    'test' => 'test',
                ],
                [
                    'test' => 'array',
                ],
                [
                    'test' => 'of other type',
                ],
            ],
            'testNullableField'    => null,
        ];

        return new MyType($data);
    }

    /**
     * @throws EntitiesException
     */
    public function testFields(): void
    {
        $myType = $this->initType();

        self::assertTrue($myType->getTestBool());
        self::assertSame('test string', $myType->getTestString());
        self::assertSame(42, $myType->getTestInt());
        self::assertSame(3.14, $myType->getTestFloat());
        self::assertInstanceOf(MyOtherType::class, $myType->getTestOtherType());

        self::assertSame([
            true,
            false,
            true,
        ], $myType->getTestArrayOfBool());

        self::assertSame([
            'test',
            'array',
            'of',
            'string',
        ], $myType->getTestArrayOfString());

        self::assertSame([
            42,
            12,
            48,
        ], $myType->getTestArrayOfInt());

        self::assertSame([
            1.01,
            3.14,
            2.18,
        ], $myType->getTestArrayOfFloat());

        self::assertNull($myType->getTestNullableField());

        $otherTypes = $myType->getTestArrayOfOtherType();

        $test = array_shift($otherTypes);
        self::assertSame('test', $test->getTest());

        $test = array_shift($otherTypes);
        self::assertSame('array', $test->getTest());

        $test = array_shift($otherTypes);
        self::assertSame('of other type', $test->getTest());

        $this->expectException(UnrequestedFieldException::class);
        $myType->getTestUnrequestedField();
    }

    /**
     * @throws EntitiesException
     */
    public function testSerialize(): void
    {
        $myType = $this->initType();
        $json = <<<JSON
{
    "testBool": true,
    "testString": "test string",
    "testInt": 42,
    "testFloat": 3.14,
    "testOtherType": {
        "test": "test other type"
    },
    "testArrayOfBool": [
        true,
        false,
        true
    ],
    "testArrayOfString": [
        "test",
        "array",
        "of",
        "string"
    ],
    "testArrayOfInt": [
        42,
        12,
        48
    ],
    "testArrayOfFloat": [
        1.01,
        3.14,
        2.18
    ],
    "testArrayOfOtherType": [
        {
            "test": "test"
        },
        {
            "test": "array"
        },
        {
            "test": "of other type"
        }
    ],
    "testNullableField": null
}
JSON;

        self::assertEquals($json, json_encode($myType, JSON_PRETTY_PRINT));
    }
}

/**
 * Class MyType
 *
 * @method bool getTestBool()
 * @method string getTestString()
 * @method int getTestInt()
 * @method float getTestFloat()
 * @method MyOtherType getTestOtherType()
 * @method bool[] getTestArrayOfBool()
 * @method string[] getTestArrayOfString()
 * @method int[] getTestArrayOfInt()
 * @method float[] getTestArrayOfFloat()
 * @method MyOtherType[] getTestArrayOfOtherType()
 * @method string getTestNullableField()
 * @method string getTestUnrequestedField()
 */
class MyType extends AbstractType
{
    /**
     * @Property(type="bool")
     * @var bool
     */
    protected $testBool;

    /**
     * @Property
     * @var string
     */
    protected $testString;

    /**
     * @Property(type="int")
     * @var int
     */
    protected $testInt;

    /**
     * @Property(type="float")
     * @var float
     */
    protected $testFloat;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Tests\Types\MyOtherType")
     * @var MyOtherType
     */
    protected $testOtherType;

    /**
     * @Property(type="bool", isArray=true)
     * @var bool[]
     */
    protected $testArrayOfBool;

    /**
     * @Property(isArray=true)
     * @var string[]
     */
    protected $testArrayOfString;

    /**
     * @Property(type="int", isArray=true)
     * @var int[]
     */
    protected $testArrayOfInt;

    /**
     * @Property(type="float", isArray=true)
     * @var float[]
     */
    protected $testArrayOfFloat;

    /**
     * @Property(type="ArrowSphere\CatalogGraphQLClient\Tests\Types\MyOtherType", isArray=true)
     * @var MyOtherType[]
     */
    protected $testArrayOfOtherType;

    /**
     * @Property(required=true, nullable=true)
     * @var string|null
     */
    protected $testNullableField;

    /**
     * @Property
     * @var string
     */
    protected $testUnrequestedField;
}

/**
 * Class MyOtherType
 *
 * @method string getTest()
 */
class MyOtherType extends AbstractType
{
    /**
     * @Property
     * @var string
     */
    protected $test;
}
