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

namespace Sergeyakovlev\Psr20;

use DateTimeImmutable;
use Psr\Clock\ClockInterface;

final class FrozenClock implements ClockInterface
{
    public function __construct(
        private DateTimeImmutable $frozenDateTime,
    ) {
    }

    public function now(): DateTimeImmutable
    {
        return $this->frozenDateTime;
    }
}
