<?php

namespace Stratadox\Hydrator;

/**
 * Receives a notification when an instance is about to be hydrated.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface ListensToHydration
{
    /**
     * This method will be called by the hydrator on the registered listener.
     *
     * Not all hydrators accept listeners. Hydrators that do accept one or more
     * listeners will offer constructor methods that accepts (an) argument(s) of
     * this interface.
     *
     * @param object $theInstance   The instance that is being hydrated.
     */
    public function hydrating($theInstance) : void;
}
