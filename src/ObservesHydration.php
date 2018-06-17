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
     * @param array  $theData     The data that is written to the instance.
     */
    public function hydrating(object $theInstance, array $theData) : void;
}
