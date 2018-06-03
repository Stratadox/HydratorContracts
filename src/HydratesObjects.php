<?php

namespace Stratadox\Hydrator;

/**
 * Hydrates input data into object properties.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface HydratesObjects
{
    /**
     * Hydrates input data into the properties of an object.
     *
     * @param object $target The target object to hydrate.
     * @param array $input   The input data.
     * @return object        The hydrated result object.
     * @throws CannotHydrate When the input data could not be hydrated.
     */
    public function writeTo(object $target, array $input): object;
}
