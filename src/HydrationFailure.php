<?php

namespace Stratadox\Hydrator;

use Throwable;

/**
 * Notifies the client code that the requested object could not be hydrated.
 *
 * @author Stratadox
 */
interface HydrationFailure extends Throwable
{
    public function hydrationData(): array;
}
