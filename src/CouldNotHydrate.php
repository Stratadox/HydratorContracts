<?php

namespace Stratadox\Hydration;

use Throwable;

/**
 * Notifies the client code that the requested object could not be hydrated.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface CouldNotHydrate extends Throwable
{
}
