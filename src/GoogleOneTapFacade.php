<?php

namespace Steelze\GoogleOneTap;

use Illuminate\Support\Facades\Facade;

class GoogleOneTapFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'google-one-tap';
    }
}
