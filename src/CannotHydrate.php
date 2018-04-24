<?php

namespace Stratadox\Hydrator;

use Throwable;

/**
 * Notifies the client code that the requested object could not be hydrated.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface CannotHydrate extends Throwable
{
}
