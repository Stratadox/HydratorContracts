<?php

namespace Stratadox\Hydrator;

/**
 * Hydrates input data into iterable collections.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface HydratesCollections
{
    /**
     * Hydrates input data into an array or collection object.
     *
     * @param iterable $target The iterable target to hydrate.
     * @param array $input     The input data.
     * @return iterable        The hydrated iterable result.
     * @throws CannotHydrate   When the input data could not be hydrated.
     */
    public function writeTo(iterable $target, array $input): iterable;
}
