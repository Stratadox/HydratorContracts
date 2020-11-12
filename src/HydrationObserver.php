<?php

namespace Stratadox\Hydrator;

/**
 * Receives a notification when an instance gets hydrated.
 *
 * @author Stratadox
 */
interface HydrationObserver
{
    /**
     * This method will be called by the hydrator on the registered observer.
     *
     * @param object $target The instance that is being hydrated.
     * @param array  $input  The data that is written to the instance.
     */
    public function hydrating(object $target, array $input) : void;
}
