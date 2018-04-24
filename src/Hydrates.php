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
     * @param array $input   The input data.
     * @return mixed|object  The hydrated instance.
     * @throws CannotHydrate When the input data could not be hydrated.
     */
    public function fromArray(array $input);

    /**
     * Retrieves the class that would be used for hydrating the array.
     *
     * @param array $input   The input data.
     * @return string        The class that would be instantiated for this data.
     * @throws CannotHydrate When the data is insufficient to decide on a class.
     */
    public function classFor(array $input): string;
}
