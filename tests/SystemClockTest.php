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

use DateTimeZone;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;
use Sergeyakovlev\Psr20\SystemClock;

final class SystemClockTest extends TestCase
{
    /**
     * @throws ExpectationFailedException
     */
    public function testNowWithDefaultTimezone(): void
    {
        $clock = new SystemClock();

        self::assertNotSame($clock->now(), $clock->now());
    }

    /**
     * @throws ExpectationFailedException
     */
    public function testNowWithSpecifiedTimezone(): void
    {
        $clock = new SystemClock(new DateTimeZone('UTC'));

        self::assertNotSame($clock->now(), $clock->now());
    }
}
