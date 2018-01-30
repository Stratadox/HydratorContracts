<?php

namespace Stratadox\Hydrator;

/**
 * Hydrates an instance of a class, based on an array of property data.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface Hydrates
{
    /**
     * Produces an object based on the data in the array.
     *
     * The class to instantiate must be known to the hydrator.
     * The recommended way of defining the hydrated class is passing it to the
     * constructor.
     *
     * @param array $input     The input data.
     * @return mixed|object    The hydrated instance.
     * @throws CouldNotHydrate When the input data could not be hydrated.
     */
    public function fromArray(array $input);
}
