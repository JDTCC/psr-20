<?php

/**
 * This file is part of the "Implementation of the PSR-20 Clock Interface" package.
 *
 * @author Serge Yakovlev <serge.yakovlev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace SergeYakovlev\Psr20\Tests;

use DateTimeImmutable;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use Sergeyakovlev\Psr20\FrozenClock;

final class FrozenClockTest extends TestCase
{
    /**
     * @throws ExpectationFailedException
     */
    public function testNow(): void
    {
        $dateTime = new DateTimeImmutable('2001-02-03T04:05:06+07:00');

        $clock = new FrozenClock($dateTime);

        self::assertSame($dateTime, $clock->now());
    }
}
