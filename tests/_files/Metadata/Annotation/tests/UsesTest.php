<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\Metadata\Annotation;

use PHPUnit\Framework\TestCase;

/**
 * @uses ::\PHPUnit\TestFixture\Metadata\Annotation\f()
 * @uses \PHPUnit\TestFixture\Metadata\Annotation\Example
 * @usesDefaultClass \PHPUnit\TestFixture\Metadata\Annotation\Example
 */
final class UsesTest extends TestCase
{
    /**
     * @uses Foo::bar
     */
    public function testOne(): void
    {
    }
}
