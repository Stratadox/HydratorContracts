<?php

namespace Stratadox\Hydrator;

/**
 * Receives a notification from a hydrator when it's hydrating an instance.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface ListensToHydration
{
    /**
     * @param object $theInstance
     */
    public function hydrating($theInstance) : void;
}
