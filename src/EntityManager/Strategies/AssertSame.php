<?php
declare(strict_types=1);

namespace DexterCampos\Externals\Test\Helpers\EntityManager\Strategies;

use PHPUnit\Framework\Assert;
use DexterCampos\Externals\Test\Helpers\EntityManager\Interfaces\AssertInterface;

/**
 * @SuppressWarnings(PHPMD.StaticAccess) Inherited from Assert
 */
class AssertSame implements AssertInterface
{
    /**
     * @var mixed
     */
    private $expected;

    /**
     * AssertEquals constructor.
     *
     * @param mixed $expected
     */
    public function __construct($expected)
    {
        $this->expected = $expected;
    }

    /**
     * Assert against another value/object.
     *
     * @param mixed $actual
     *
     * @return void
     */
    public function assert($actual): void
    {
        Assert::assertSame($this->expected, $actual);
    }
}
