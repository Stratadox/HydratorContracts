<?php

namespace Stratadox\Hydrator;

/**
 * Receives a notification when an instance is about to be hydrated.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface ObservesHydration
{
    /**
     * This method will be called by the hydrator on the registered observer.
     *
     * Not all hydrators accept observers. Hydrators that do accept one or more
     * observers will offer constructor methods that accept an argument of this
     * interface.
     *
     * @param object $theInstance The instance that is being hydrated.
     */
    public function hydrating(object $theInstance) : void;
}
