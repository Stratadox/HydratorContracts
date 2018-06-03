<?php

namespace Stratadox\Hydrator;

/**
 * Hydrates property data into an instance of a class.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface Hydrates
{
    /**
     * Hydrates property data into an instance of a class.
     *
     * @param object $object The instance to hydrate.
     * @param array $input   The input data.
     * @throws CannotHydrate When the input data could not be hydrated.
     */
    public function writeTo(object $object, array $input);
}
