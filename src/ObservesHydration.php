<?php

namespace Stratadox\Hydrator;

/**
 * Receives a notification when an instance gets hydrated.
 *
 * @author Stratadox
 * @package Stratadox\Hydrate
 */
interface ObservesHydration
{
    /**
     * This method will be called by the hydrator on the registered observer.
     *
     * @param object $theInstance The instance that is being hydrated.
     */
    public function hydrating(object $theInstance) : void;
}
