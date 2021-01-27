<?php

namespace Solspace\ExpressForms\decorators;

interface ExpressFormDecoratorInterface
{
    public function getEventListenerList(): array;

    /**
     * Init the decorator.
     */
    public function initEventListeners();

    /**
     * Remove all event listeners.
     */
    public function destructEventListeners();
}
